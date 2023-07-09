<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use App\Models\Brand;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\Employee;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Order;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Mail;
use Session;


class OrderController extends Controller
{
    public function listOrders()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(12);
        $shipped = Order::where('order_status', 'shipped')->get();
        $inProgress = Order::where('order_status', 'in-progress')->get();
        $cancelled = Order::where('order_status', 'cancelled')->get();

        $data = [
            'orders' => $orders
        ];

        return view('dashboard.orders.index')->with($data);
    }

    public function getOrder($id)
    {
        $order = Order::FindorFail($id);

        $data = [
            'order' => $order
        ];

        return view('dashboard.orders.edit')->with($data);
    }

    public function changeStatus(Request $request, $id)
    {
        $status = $request->get('status');
        $order = Order::FindorFail($id);
        $order['order_status'] = $status;
        $order->save();

        $company = CompanyInfo::all();
        $subject = 'Re: Order #'.$order->id;
        $msg = 'Order: #'.$order->id. ' changed status to ' . $order->order_status;

        Mail::to($order->email)->send(new MailSender($msg, $subject, $company));

        $data = [
            'order' => $order
        ];

        return redirect()->back();
    }

    public function delete($id)
    {
        $order = Order::FindorFail($id);
        $order->delete();

        $orders = Order::orderBy('id', 'DESC')->paginate(12);


        return redirect()->back();
    }








    public function orderDetails()
    {
        $products = session()->get('cart', []);
        $company = CompanyInfo::first();
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();
        $subTotal = 0;
        $shippingCharges = 0;
        foreach ($products as $product)
        {
            $tempTotal = $product['productAmount'];
            $subTotal += $tempTotal;
        }

        if ($subTotal <= 50 ) {
            $shippingCharges = 5;
        } else {
            $shippingCharges = 0;
        }

        $total = $subTotal + $shippingCharges;

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $shippingDetails = Shipping::where('user_id', $user_id)->first();
            $data = [
                'company' => $company,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'shippingDetails' => $shippingDetails,
                'products' => $products,
                'subTotal' => $subTotal,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ];
            return view('frontend.orderDetails')->with($data);
        } else {
            $data = [
                'company' => $company,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'products' => $products,
                'subTotal' => $subTotal,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ];
        }

        return view('frontend.orderDetails')->with($data);
    }

    public function saveOrder(Request $request)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $phoneNumber = $request->get('phoneNumber');
        $email = $request->get('email');
        $address = $request->get('address');
        $zipcode = $request->get('zipcode');
        $city = $request->get('city');
        $country_id = $request->get('country_id');
        $comment = $request->get('comment');
        $companyName = $request->get('companyName');
        $taxNumber = $request->get('taxNumber');
        $shipFirstName = $request->get('shipFirstName');
        $shipLastName = $request->get('shipLastName');
        $shipPhoneNumber = $request->get('shipPhoneNumber');
        $shipEmail = $request->get('shipEmail');
        $shipAddress = $request->get('shipAddress');
        $shipZipcode = $request->get('shipZipcode');
        $shipCity = $request->get('shipCity');
        $shipCountry_id = $request->get('shipCountry_id');
        $shipComment = $request->get('shipComment');
        $discountCode = $request->get('discount');

        $discount = 0;
        if ($discountCode == 'A') {
            $discount = 5;
        } elseif ($discountCode == 'B') {
            $discount = 10;
        } elseif ($discountCode == 'C') {
            $discount = 15;
        } elseif ($discountCode == 'D') {
            $discount = 20;
        } elseif ($discountCode == 'E') {
            $discount = 25;
        };
        $products = session()->get('cart', []);
        $total = 0;
        $subTotal = 0;
        foreach ($products as $product)
        {
            $tempTotal = $product['productAmount'];
            $subTotal += $tempTotal;
        }
        $discountPrice = $subTotal * $discount / 100;
        $shippingCharges = 0;
        if ($subTotal < 50){
            $shippingCharges = 5;
        } else {
            $shippingCharges = 0;
        }
        $total = $subTotal + $shippingCharges - $discountPrice;

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Order::create([
                'user_id' => $user_id,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address,
                'zipcode' => $zipcode,
                'city' => $city,
                'country_id' => $country_id,
                'comment' => $comment,
                'companyName' => $companyName,
                'taxNumber' => $taxNumber,
                'shipFirstName' => $shipFirstName,
                'shipLastName' => $shipLastName,
                'shipPhoneNumber' => $shipPhoneNumber,
                'shipEmail' => $shipEmail,
                'shipAddress' => $shipAddress,
                'shipZipcode' => $shipZipcode,
                'shipCity' => $shipCity,
                'shipCountry_id' => $shipCountry_id,
                'shipComment' => $shipComment,
                'discount' => $discount,
                'subTotal' => $subTotal,
                'discountPrice' => $discountPrice,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ]);
            $lastOrder = Order::where('user_id', $user_id)->latest('created_at')->first();
            $order_id = $lastOrder->id;
        } else {
            Order::create([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address,
                'zipcode' => $zipcode,
                'city' => $city,
                'country_id' => $country_id,
                'comment' => $comment,
                'companyName' => $companyName,
                'taxNumber' => $taxNumber,
                'shipFirstName' => $shipFirstName,
                'shipLastName' => $shipLastName,
                'shipPhoneNumber' => $shipPhoneNumber,
                'shipEmail' => $shipEmail,
                'shipAddress' => $shipAddress,
                'shipZipcode' => $shipZipcode,
                'shipCity' => $shipCity,
                'shipCountry_id' => $shipCountry_id,
                'shipComment' => $shipComment,
                'discount' => $discount,
                'subTotal' => $subTotal,
                'discountPrice' => $discountPrice,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ]);
            $lastOrder = Order::latest('created_at')
                ->first();
            $order_id = $lastOrder->id;
        }

        $orderInfo = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'address' => $address,
            'zipcode' => $zipcode,
            'city' => $city,
            'country_id' => $country_id,
            'comment' => $comment,
            'companyName' => $companyName,
            'taxNumber' => $taxNumber,
            'shipFirstName' => $shipFirstName,
            'shipLastName' => $shipLastName,
            'shipPhoneNumber' => $shipPhoneNumber,
            'shipEmail' => $shipEmail,
            'shipAddress' => $shipAddress,
            'shipZipcode' => $shipZipcode,
            'shipCity' => $shipCity,
            'shipCountry_id' => $shipCountry_id,
            'shipComment' => $shipComment,
            'discount' => $discount,
            'subTotal' => $subTotal,
            'discountPrice' => $discountPrice,
            'total' => $total,
            'shippingCharges' => $shippingCharges
        ];
        Session::put('orderInfo', $orderInfo);

        $carts = session()->get('cart', []);

        foreach($carts as $cart) {
            $product_id = $cart['product_id'];
            $quantity = $cart['quantity'];
            $unitPrice = $cart['unitPrice'];
            $price = $cart['productAmount'];
            OrderProduct::create([
                'order_id' => $order_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'unitPrice' => $unitPrice,
                'price' => $price
            ]);
        }


        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(12);
        $categoriesTree = Category::getTreeHP();
        $lastOrder = Order::latest('created_at')->first();
        $lastOrderId = $lastOrder->id;
        $orderDetails = OrderProduct::where('order_id', $lastOrderId)->get();
        $orderProductsCount = $orderDetails->count();
        $tempDate = $lastOrder->created_at;
        $dateYear = Carbon::now()->format('Y');
        $dateOrder = Carbon::createFromFormat('Y-m-d H:i:s', $tempDate)->format('M-d-Y');
        $data = [
            'company' => $company,
            'employees' => $employees,
            'carts' => $carts,
            'products' => $products,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'total'=> $total,
            'lastOrder' => $lastOrder,
            'orderDetails' => $orderDetails,
            'dateYear' => $dateYear,
            'dateOrder' => $dateOrder,
            'orderProductsCount' => $orderProductsCount,
            'orderInfo' => $orderInfo
        ];

        return view('frontend.viewOrder')->with($data);

    }

    public function viewUserOrder($id)
    {
        $order = Order::FindorFail($id);
        $order_id = $order->id;
        $orderProducts = OrderProduct::where('order_id', $order_id)->get();
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
            'order' => $order,
            'orderProducts' => $orderProducts
        ];

        return view('frontend.userOrder')->with($data);
    }

    public function deleteOrder($id)
    {

        $order = Order::FindorFail($id);
        $order->delete();
        return redirect()->route('frontend.details');
    }














    public function payment($id)
    {
        $orderInfo = session()->get('orderProduct');
        dd($orderInfo);
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $order = Order::where('id', $id)->first();

        session()->forget('cart');

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'order' => $order
        ];

        return view('frontend.payment')->with($data);
    }


}
