<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userDetails()
    {

        $user = Auth::user()->id;
        $loggedUser = Auth::user();
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();
        $shoppingLists = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount = count($shoppingLists);
        $userLists = ShoppingCart::groupBy('name', 'price', 'quantity')
            ->selectRaw('count(*) as total, name, price, quantity')
            ->get();
        $totalAmount = null;
        $shippingDetails = Shipping::where('user_id', $user)->get();
        $detailsCount = count($shippingDetails);
        $details = Shipping::where('user_id', $user)->first();

        if ($detailsCount === 0) {

            $data = [
                'loggedUser' => $loggedUser,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'shoppingLists' => $shoppingLists,
                'shoppingListsCount' => $shoppingListsCount,
                'userLists' => $userLists,
                'totalAmount' => $totalAmount
            ];

            return view('frontend.storeUserInfo')->with($data);
        } else {
            $data = [
                'loggedUser' => $loggedUser,
                'countries' => $countries,
                'categoriesTree' => $categoriesTree,
                'shoppingLists' => $shoppingLists,
                'shoppingListsCount' => $shoppingListsCount,
                'userLists' => $userLists,
                'totalAmount' => $totalAmount,
                'details' => $details
            ];
            return view('frontend.userInfo')->with($data);
        }
    }

    public function storeDetails(Request $request)
    {

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
        $user = Auth::user()->id;
        $loggedUser = Auth::user();
        $details = Shipping::FindorFail($id);
        $countries = Country::all();
        $categoriesTree = Category::getTreeHP();
        $shoppingLists = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount = count($shoppingLists);
        $userLists = ShoppingCart::groupBy('name', 'price', 'quantity')
            ->selectRaw('count(*) as total, name, price, quantity')
            ->get();
        $totalAmount = null;


        $data = [
            'loggedUser' => $loggedUser,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'shoppingLists' => $shoppingLists,
            'shoppingListsCount' => $shoppingListsCount,
            'userLists' => $userLists,
            'totalAmount' => $totalAmount,
            'details' => $details
        ];

        return view('frontend.updateUserInfo')->with($data);
    }

    public function updateDetails(Request $request, $id)
    {
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
}
