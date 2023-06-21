<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orderDetails()
    {
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $products = session()->get('cart', []);
            $company = CompanyInfo::first();
            $countries = Country::all();
            $categoriesTree = Category::getTreeHP();
            $shippingDetails = Shipping::where('user_id', $user_id)->first();

            $total = 0;
            foreach ($products as $product)
            {
                $tempTotal = $product['productAmount'];
                $total += $tempTotal;
            }

            $data = [
                'company' => $company,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'shippingDetails' => $shippingDetails,
                'products' => $products,
                'total' => $total
            ];
            return view('frontend.orderDetails')->with($data);
        }

        $products = session()->get('cart', []);
        $company = CompanyInfo::first();
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();

        $total = 0;
        foreach ($products as $product)
        {
            $tempTotal = $product['productAmount'];
            $total += $tempTotal;
        }

        $data = [
            'company' => $company,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'products' => $products,
            'total' => $total
        ];

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

        $products = session()->get('cart', []);
        $total = 0;
        foreach ($products as $product)
        {
            $tempTotal = $product['productAmount'];
            $total += $tempTotal;
        }
        $shippingCharges = 0;
        if ($total < 50){
            $shippingCharges = 100;
        } else {
            $shippingCharges = 0;
        }
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
                'total' => $total,
                'shippingCharges' => $shippingCharges
            ]);
            $lastOrder = Order::latest('created_at')
                ->first();
            $order_id = $lastOrder->id;
        }

        $carts = session()->get('cart', []);

        foreach($carts as $cart) {
            $product_id = $cart['product_id'];
            $quantity = $cart['quantity'];

            OrderProduct::create([
                'order_id' => $order_id,
                'product_id' => $product_id,
                'quantity' => $quantity
            ]);

        }
        //session()->flush();

        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(12);
        $categoriesTree = Category::getTreeHP();
        $lastOrder = Order::latest('created_at')
            ->first();
        $lastOrderId = $lastOrder->id;
        $orderDetails = OrderProduct::where('order_id', $lastOrderId)->get();

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
            'orderDetails' => $orderDetails
        ];

        return view('frontend.viewOrder')->with($data);

    }

    public function viewOrder()
    {

        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categoriesTree = Category::getTreeHP();
        $lastOrder = Order::latest('created_at')
            ->first();
        $lastOrderId = $lastOrder->id;
        $orderDetails = OrderProduct::where('order_id', $lastOrderId)->get();

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree,
            'lastOrder' => $lastOrder,
            'orderDetails' => $orderDetails
        ];

        return view('frontend.viewOrder')->with($data);
    }

    public function payment()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories
        ];
        return view('frontend.payment')->with($data);
    }


}
