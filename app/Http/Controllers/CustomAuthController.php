<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        $brands                 = Brand::all();
        $categories             = Category::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();


        $data = [
            'products'              => $products,
            'brands'                => $brands,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories
        ];
        return view('frontend.login')->with($data);
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('frontend.index')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        $brands                 = Brand::all();
        $categories             = Category::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();


        $data = [
            'products'              => $products,
            'brands'                => $brands,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories
        ];
        return view('frontend.register')->with($data);
    }

    public function customRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('frontend.index')
                ->withErrors($validator)
                ->withInput();
        }

        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));
        $role_id = $request->get('role_id');

        User::create([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id
        ]);

        return redirect()->route('users.index');
    }


    public function dashboard()
    {

        if(Auth::check()){
            return view('index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
