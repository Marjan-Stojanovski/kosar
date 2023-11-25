<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\Constraint\Count;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userDetails()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $user = Auth::user()->id;
        $loggedUser = Auth::user();
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();
        $messages = Message::where('user_id', $user)->get();
        $totalAmount = null;
        $shippingDetails = Shipping::where('user_id', $user)->get();
        $detailsCount = count($shippingDetails);
        $details = Shipping::where('user_id', $user)->first();
        $orders = Order::where('user_id', $user)->paginate(10);


        if ($detailsCount === 0) {

            $data = [
                'company' => $company,
                'employees' => $employees,
                'messages' => $messages,
                'loggedUser' => $loggedUser,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'totalAmount' => $totalAmount,
                'orders' => $orders
            ];

            return view('frontend.storeUserInfo')->with($data);
        } else {
            $data = [
                'company' => $company,
                'employees' => $employees,
                'messages' => $messages,
                'loggedUser' => $loggedUser,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'totalAmount' => $totalAmount,
                'details' => $details,
                'orders' => $orders
            ];
            return view('frontend.userInfo')->with($data);
        }
    }

    public function storeDetails(Request $request)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $company = $request->get('company');
        $taxNumber = $request->get('taxNumber');
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $phoneNumber = $request->get('phoneNumber');
        $email = $request->get('email');
        $address = $request->get('address');
        $country_id = $request->get('country_id');
        $city = $request->get('city');
        $zipcode = $request->get('zipcode');
        $user = Auth::user()->id;
        $loggedUser = Auth::user();

        $shippingDetails = Shipping::where('user_id', $user)->get();
        $detailsCount = count($shippingDetails);

        if ($detailsCount === 0) {

            Shipping::create([
                'company' => $company,
                'taxNumber' => $taxNumber,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phoneNumber' => $phoneNumber,
                'email' => $email,
                'address' => $address,
                'country_id' => $country_id,
                'city' => $city,
                'zipcode' => $zipcode,
                'user_id' => $user,

            ]);
        };

        $categoriesTree = Category::getTreeHP();
        $countries = Country::all();
        $shoppingLists = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount = count($shoppingLists);
        $userLists = ShoppingCart::groupBy('name', 'price', 'quantity')
            ->selectRaw('count(*) as total, name, price, quantity')
            ->get();
        $totalAmount = null;
        $details = Shipping::where('user_id', $user)->first();

        $data = [
            'company' => $company,
            'employees' => $employees,
            'categoriesTree' => $categoriesTree,
            'countries' => $countries,
            'shoppingLists' => $shoppingLists,
            'shoppingListsCount' => $shoppingListsCount,
            'userLists' => $userLists,
            'totalAmount' => $totalAmount,
            'loggedUser' => $loggedUser,
            'details' => $details
        ];

        return view('frontend.userInfo')->with($data);
    }


    public function showDetails($id)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $user = Auth::user()->id;
        $loggedUser = Auth::user();
        $details = Shipping::FindorFail($id);
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;


        $data = [
            'company' => $company,
            'employees' => $employees,
            'loggedUser' => $loggedUser,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount,
            'details' => $details
        ];

        return view('frontend.updateUserInfo')->with($data);
    }

    public function updateDetails(Request $request, $id)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $user = Auth::user()->id;
        $loggedUser = Auth::user();
        $categoriesTree = Category::getTreeHP();
        $shoppingLists = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount = count($shoppingLists);
        $userLists = ShoppingCart::groupBy('name', 'price', 'quantity')
            ->selectRaw('count(*) as total, name, price, quantity')
            ->get();
        $totalAmount = null;

        $details = Shipping::FindorFail($id);
        $input = $request->all();
        $details->fill($input)->save();


        $data = [
            'company' => $company,
            'employees' => $employees,
            'loggedUser' => $loggedUser,
            'categoriesTree' => $categoriesTree,
            'shoppingLists' => $shoppingLists,
            'shoppingListsCount' => $shoppingListsCount,
            'userLists' => $userLists,
            'totalAmount' => $totalAmount,
            'details' => $details
        ];

        return view('frontend.userInfo')->with($data);
    }

    public function viewMessage($id)
    {

        $message = Message::FindorFail($id);
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $loggedUser = Auth::user();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;
        $dateOld = $message->created_at;
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $dateOld)->format('d-M-Y');

        $data = [
            'company' => $company,
            'employees' => $employees,
            'date' => $date,
            'loggedUser' => $loggedUser,
            'categoriesTree' => $categoriesTree,
            'message' => $message,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.userMessages')->with($data);
    }
}
