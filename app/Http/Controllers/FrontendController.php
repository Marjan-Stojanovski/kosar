<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CompanyInfo;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $loggedUser = Auth::user();
        $company = CompanyInfo::first();
        $brands = Brand::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $products = Product::whereNotNull('discount')->paginate(5);

        $data = [
            'company' => $company,
            'loggedUser' => $loggedUser,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories,
            'products' => $products
        ];

        return view('frontend.index')->with($data);
    }

    public function productView($slug)
    {
        $company = CompanyInfo::first();
        $product = Product::where('slug', $slug)->first();
        $categoriesTree = Category::getTreeHP();
        $comments = Comment::where('product_id', $product['id'])->get();
        $commentsCount = $comments->count();
        $products = Product::where('category_id', $product->category_id)->get();

        $data = [
            'company' => $company,
            'product' => $product,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'comments' => $comments,
            'commentsCount' => $commentsCount
        ];

        return view('frontend.productView')->with($data);
    }

    public function categories()
    {
        $company = CompanyInfo::first();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
            'categories' => $categories
        ];

        return view('frontend.categories')->with($data);
    }
    public function categoryView($slug)
    {
        $company = CompanyInfo::first();
        $category = Category::where('slug',$slug)->first();
        $categories = Category::all();
        $products = Product::where('category_id', $category->id)->get();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categories' => $categories,
            'category' => $category,
            'products' => $products,
            'categoriesTree' => $categoriesTree
        ];

        return view('frontend.categoryView')->with($data);
    }

    public function brands()
    {
        $company = CompanyInfo::first();
        $brands = Brand::all();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'brands' => $brands,
            'categoriesTree' => $categoriesTree
        ];

        return view('frontend.brands')->with($data);
    }
    public function brandView($name)
    {
        $company = CompanyInfo::first();
        $brand = Brand::where('name', $name)->first();
        $products = Product::where('brand_id', $brand->id)->paginate(8);
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'brand' => $brand,
            'products' => $products,
            'categoriesTree' => $categoriesTree
        ];

        return view('frontend.brandView')->with($data);
    }

    public function contact_us()
    {
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree
        ];

        return view('frontend.feedback')->with($data);
    }

    public function about_us()
    {
        $company = CompanyInfo::first();
        $employees = Employee::all();
        $categoriesTree = Category::getTreeHP();


        $data = [
            'company' => $company,
            'employees' => $employees,
            'categoriesTree' => $categoriesTree
        ];

        return view('frontend.about')->with($data);
    }

    public function products()
    {
        $company = CompanyInfo::first();
        $products = Product::all();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
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
        $brands = Brand::all();
        $volumes = Volume::all();
        $categories = Category::all();
        $categoriesTree = Category::getTreeHP();
        $countries = Country::all();

        $data = [
            'company' => $company,
            'products' => $products,
            'categoriesTree' => $categoriesTree,
            'brands' => $brands,
            'categories' => $categories,
            'volumes' => $volumes,
            'countries' => $countries
        ];

        return view('frontend.shop')->with($data);
    }

    public function preSignUp()
    {
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
        ];

        return view('frontend.register')->with($data);
    }

    public function preReset()
    {
        $company = CompanyInfo::first();
        $categoriesTree = Category::getTreeHP();

        $data = [
            'company' => $company,
            'categoriesTree' => $categoriesTree,
        ];

        return view('frontend.reset')->with($data);
    }

    public function search(Request $request)
    {
        if ($request->search) {

            $searchProducts = Product::where('title', 'LIKE', '%'.$request->search.'%')->latest()->paginate(12);
            $company = CompanyInfo::first();
            $categoriesTree = Category::getTreeHP();

            $data = [
                'company' => $company,
                'categoriesTree' => $categoriesTree,
                'searchProducts' => $searchProducts,
            ];

            return view('frontend.products')->with($data);

        } else {

            return redirect()->back()->with('message', "Products don't exist!");
        }
    }

}
