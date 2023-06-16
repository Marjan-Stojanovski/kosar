<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\isEmpty;

class FrontendController extends Controller
{
    public function index()
    {
        $loggedUser = Auth::user();
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(5);
        $categoriesTree = Category::getTreeHP();
        $discountProducts = Product::whereNotNull('discount')->paginate(5);
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'loggedUser' => $loggedUser,
            'brands' => $brands,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'totalAmount' => $totalAmount,
            'discountProducts' => $discountProducts
        ];

        return view('frontend.index')->with($data);
    }

    public function productView($slug)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $product = Product::where('slug', $slug)->first();
        $products = Product::paginate(5);
        $categoriesTree = Category::getTreeHP();
        $id = $product['id'];
        $comments = Comment::where('product_id', $id)->get();
        $category_id = $product['category_id'];
        $categoryProducts = Product::where('category_id', $category_id)->get();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categories' => $categories,
            'product' => $product,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'comments' => $comments,
            'categoryProducts' => $categoryProducts,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.productView')->with($data);
    }

    public function categories()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(5);
        $categoriesTree = Category::getTreeHP();
        $discountProducts = Product::whereNotNull('discount')->paginate(5);
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'totalAmount' => $totalAmount,
            'discountProducts' => $discountProducts
        ];

        return view('frontend.categories')->with($data);
    }
    public function categoryView($slug)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $category = Category::where('slug',$slug)->first();
        $category_id = $category['id'];
        $categories = Category::all();
        $products = Product::where('category_id', $category_id)->get();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categories' => $categories,
            'category' => $category,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.categoryView')->with($data);
    }

    public function brands()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'categories' => $categories,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.brands')->with($data);
    }
    public function brandView($name)
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brand = Brand::where('name', $name)->first();
        $brand_id = $brand['id'];
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::where('brand_id', $brand_id)->get();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brand' => $brand,
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.brandView')->with($data);
    }

    public function feedback()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.feedback')->with($data);
    }

    public function about_us()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;


        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.about')->with($data);
    }

    public function products()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $products = Product::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories,
            'categoriesTree' => $categoriesTree,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.products')->with($data);
    }

    public function shop()
    {
        if (isset($_GET)) {
            $builder = Product::query();
            if (!empty($_GET['category'])) {
                $category = $_GET['category'];
                $builder->whereIn('category_id', $category);
            }
            if (!empty($_GET['brand'])) {
                $brand = $_GET['brand'];
                $builder->whereIn('brand_id', $brand);
            }
            if (!empty($_GET['volume'])) {
                $volume = $_GET['volume'];
                $builder->whereIn('volume_id', $volume);
            }
            if (!empty($_GET['country'])) {
                $country = $_GET['country'];
                $builder->whereIn('country_id', $country);
            }
            if (!empty($_GET['discount'])) {
                $country = $_GET['discount'];
                $builder->whereNotNull('discount');
            }

            $products = $builder->paginate(12);
        } else {
            $products = Product::all()->paginate(12);
        }
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $volumes = Volume::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $countries = Country::all();

        $data = [
            'company' => $company,
            'employees' => $employees,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'brands' => $brands,
            'categories' => $categories,
            'volumes' => $volumes,
            'countries' => $countries
        ];

        return view('frontend.shop')->with($data);
    }

    public function cartCheckout()
    {
        $loggedUser = Auth::user();
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $categories = Category::all();
        $countries = Country::all();
        $products = Product::paginate(12);
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'products' => $products,
            'loggedUser' => $loggedUser,
            'brands' => $brands,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.cartCheckout')->with($data);
    }

    public function preSignUp()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $countries = Country::all();
        $categories = Category::all();
        $products = Product::paginate(5);
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.register')->with($data);
    }

    public function preReset()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $brands = Brand::all();
        $countries = Country::all();
        $categories = Category::all();
        $products = Product::paginate(5);
        $categoriesTree = Category::getTreeHP();
        $totalAmount = null;

        $data = [
            'company' => $company,
            'employees' => $employees,
            'brands' => $brands,
            'products' => $products,
            'countries' => $countries,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'totalAmount' => $totalAmount
        ];

        return view('frontend.reset')->with($data);
    }

}
