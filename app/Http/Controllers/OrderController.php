<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\PdfGeneration;
use App\Mail\MailSender;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\OrderProduct;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;
use PDF;


class OrderController extends Controller
{
    public function listOrders()
    {
        $ordersCount = Order::all()->count();
        $orders = Order::orderBy('id', 'DESC')->paginate(12);
        $shipped = Order::where('order_status', 'shipped')->get()->count();
        $inProgress = Order::where('order_status', 'in-progress')->get()->count();
        $cancelled = Order::where('order_status', 'cancelled')->get()->count();

        $data = [
            'orders' => $orders,
            'ordersCount' => $ordersCount,
            'shipped' => $shipped,
            'inProgress' => $inProgress,
            'cancelled' => $cancelled,
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
        $subject = 'Re: Order #' . $order->id;
        $msg = 'Order: #' . $order->id . ' changed status to ' . $order->order_status;

        Mail::to($order->email)->send(new MailSender($msg, $subject, $company));


        return redirect()->back();
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
        return redirect()->back();
    }

    public function delete($id)
    {
        $order = Order::FindorFail($id);
        $order->delete();

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
        foreach ($products as $product) {
            $tempTotal = $product['productAmount'];
            $subTotal += $tempTotal;
        }

        if ($subTotal <= 50) {
            $shippingCharges = 5;
        }
        $total = $subTotal + $shippingCharges;

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $shippingDetails = Shipping::where('user_id', $user_id)->first();

            if (!isset($shippingDetails)) {
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
                return view('frontend.storeUserInfo')->with($data);
            }
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

    public function saveOrderInfo(Request $request)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $phoneNumber = $request->get('phoneNumber');
        $email = $request->get('email');
        $address = $request->get('address');
        $zipcode = $request->get('zipcode');
        $city = $request->get('city');
        $country_id = $request->get('country_id');
        $country_temp = Country::where('id', $country_id)->get();
        $country = $country_temp[0]['name'];
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
        $shipCountry = null;
        if (isset($shipCountry_id)) {
            $shipCountry_temp = Country::where('id', $shipCountry_id)->get();
            $shipCountry = $shipCountry_temp[0]['name'];
        }
        $shipComment = $request->get('shipComment');
        $discountCode = $request->get('discount');

        //  Discount Calculation
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
        // End Discount Calculation

        // Total Charges Calculation
        $products = session()->get('cart', []);
        $total = 0;
        $subTotal = 0;
        foreach ($products as $product) {
            $tempTotal = $product['productAmount'];
            $subTotal += $tempTotal;
        }
        $discountPrice = $subTotal * $discount / 100;
        $shippingCharges = 0;
        if ($subTotal < 50) {
            $shippingCharges = 5;
        }
        $total = $subTotal + $shippingCharges - $discountPrice;
        // End Total Charges Calculation

        // Creating and saving in session orderInfo
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $orderInfo = [
                'user_id' => $user_id,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address,
                'zipcode' => $zipcode,
                'city' => $city,
                'country_id' => $country_id,
                'country' => $country,
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
                'shipCountry' => $shipCountry,
                'shipComment' => $shipComment,
                'discount' => $discount,
                'subTotal' => $subTotal,
                'discountPrice' => $discountPrice,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ];
            Session::put('orderInfo', $orderInfo);
        } else {
            $orderInfo = [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address,
                'zipcode' => $zipcode,
                'city' => $city,
                'country_id' => $country_id,
                'country' => $country,
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
                'shipCountry' => $shipCountry,
                'shipComment' => $shipComment,
                'discount' => $discount,
                'subTotal' => $subTotal,
                'discountPrice' => $discountPrice,
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ];
            Session::put('orderInfo', $orderInfo);
        }
        // End Creating and saving in session orderInfo

        // View data preparation
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'orderInfo' => $orderInfo
        ];

        return view('frontend.payment')->with($data);

    }

    public function paymentInfo()
    {
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
        ];

        return view('frontend.payment')->with($data);
    }

    public function savePaymentInfo(Request $request)
    {
        $methodForPayment = $request->get('methodForPayment');
        $paymentFullName = $request->get('paymentFullName');
        $cardName = $request->get('cardName');
        $cardNumber = $request->get('cardNumber');
        $expDateMonth = $request->get('expDateMonth');
        $expDateYear = $request->get('expDateYear');
        $csv = $request->get('csv');

        if ($methodForPayment === 'Credit Card') {
            $validator = Validator::make($request->all(), [
                'paymentFullName' => 'required',
                'cardName' => 'required',
                'cardNumber' => 'required|min:16|max:16',
                'expDateMonth' => 'required|min:2|max:2',
                'expDateYear' => 'required|min:4|max:4',
                'csv' => 'required|min:3|max:3'
            ]);

            if ($validator->fails()) {
                return redirect()->route('frontend.payment')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $paymentInfo = [
            'methodForPayment' => $methodForPayment,
            'paymentFullName' => $paymentFullName,
            'cardName' => $cardName,
            'cardNumber' => $cardNumber,
            'expDateMonth' => $expDateMonth,
            'expDateYear' => $expDateYear,
            'csv' => $csv,
        ];
        Session::put('paymentInfo', $paymentInfo);


        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();
        $paymentInfo = session()->get('paymentInfo');
        $orderInfo = session()->get('orderInfo');
        $products = session()->get('cart', []);

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
            'paymentInfo' => $paymentInfo,
            'orderInfo' => $orderInfo,
            'products' => $products,

        ];

        return view('frontend.orderReview')->with($data);
    }


    public function processOrder(Request $request)
    {
        //PROCESS PAYMENT
        // payment_status "0" -> not paid
        // payment_status "1" -> paid
        $paymentInfo = session()->get('paymentInfo');

        if ($paymentInfo['methodForPayment'] === 'Credit Card') {
            dd('SetUp Stripe');
            $paymentStatus = 1;
        }

        $paymentStatus = 0;
        $orderInfo = session()->get('orderInfo');
        // GET ORDER INFO FROM SESSION  //
        $firstName = $orderInfo['firstName'];
        $lastName = $orderInfo['lastName'];
        $phoneNumber = $orderInfo['phoneNumber'];
        $email = $orderInfo['email'];
        $address = $orderInfo['address'];
        $zipcode = $orderInfo['zipcode'];
        $city = $orderInfo['city'];
        $country_id = $orderInfo['country_id'];
        $comment = $orderInfo['comment'];
        $companyName = $orderInfo['companyName'];
        $taxNumber = $orderInfo['taxNumber'];
        $shipFirstName = $orderInfo['shipFirstName'];
        $shipLastName = $orderInfo['shipLastName'];
        $shipPhoneNumber = $orderInfo['shipPhoneNumber'];
        $shipEmail = $orderInfo['shipEmail'];
        $shipAddress = $orderInfo['shipAddress'];
        $shipZipcode = $orderInfo['shipZipcode'];
        $shipCity = $orderInfo['shipCity'];
        $shipCountry_id = $orderInfo['shipCountry_id'];
        $shipComment = $orderInfo['shipComment'];
        $discount = $orderInfo['discount'];
        $subTotal = $orderInfo['subTotal'];
        $discountPrice = $orderInfo['discountPrice'];
        $total = $orderInfo['total'];
        $shippingCharges = $orderInfo['shippingCharges'];
        $payment_info = $paymentInfo['methodForPayment'];

        //Unique order_id generator///
        do {
            $uniqueNumber = mt_rand(100000, 999999);
            $temp = Order::where('order_id', $uniqueNumber)->get();
        } while (!isset($temp));

        //END Unique order_id generator///
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
                'shippingCharges' => $shippingCharges,
                'order_id' => $uniqueNumber,
                'payment_status' => $paymentStatus,
                'payment_info' => $payment_info,
            ]);
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
                'shippingCharges' => $shippingCharges,
                'order_id' => $uniqueNumber,
                'payment_status' => $paymentStatus,
                'payment_info' => $payment_info,
            ]);
        }

        $carts = session()->get('cart', []);
        // Saving OrderProducts
        $order = Order::where('order_id', $uniqueNumber)->first();
        $order_id = $order->id;
        foreach ($carts as $cart) {
            $product_id = $cart['product_id'];
            $quantity = $cart['quantity'];
            $unitPrice = $cart['unitPrice'];
            $price = $cart['productAmount'];
            OrderProduct::create([
                'order_id' => $order_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'unitPrice' => $unitPrice,
                'price' => $price,
                'order_parent' => $uniqueNumber
            ]);
        }
        // DELETE SESION INFO
        session()->forget('cart');
        session()->forget('orderInfo');


        //BACK TO VIEW -> Invoice View
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();
        $orderInfo = Order::where('order_id', $uniqueNumber)->first();
        $orderProducts = OrderProduct::where('order_parent', $uniqueNumber)->get();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
            'orderInfo' => $orderInfo,
            'orderProducts' => $orderProducts
        ];

        return view('frontend.orders.finished-order')->with($data);
    }

}
