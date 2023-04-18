<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        if (isset(Auth::user()->id)) {
            $user = Auth::user()->id;
            $brands = Brand::all();
            $categories = Category::all();
            $products = Product::paginate(5);
            $categoriesList = Category::getTreeHP();
            $shoppingLists = ShoppingCart::where('user_id', $user)->get();
            $data = ['brands' => $brands, 'products' => $products, 'categoriesList' => $categoriesList, 'categories' => $categories, 'shoppinglists' => $shoppingLists];

            return view('frontend.index')->with($data);
        } else {
            $brands = Brand::all();
            $categories = Category::all();
            $products = Product::paginate(5);
            $categoriesList = Category::getTreeHP();
            $data = ['brands' => $brands, 'products' => $products, 'categoriesList' => $categoriesList, 'categories' => $categories];

            return view('frontend.index')->with($data);
        }
    }

    public function productview($id)
    {
        $products = Product::FindorFail($id);
        $categoriesList = Category::getTreeHP();
        $comments = Comment::where('product_id', $id)->get();
        $category_id = $products['category_id'];
        $categoryProducts = Product::where('category_id', $category_id)->get();
        $data = ['products' => $products, 'categoriesList' => $categoriesList, 'categoryProducts' => $categoryProducts, 'comments' => $comments];

        return view('frontend.productview')->with($data);
    }

    public function categoryview($category_id)
    {
        $category = Category::FindorFail($category_id);
        $categoriesList = Category::getTreeHP();
        $products = Product::where('category_id', $category_id)->get();
        $data = ['products' => $products, 'category' => $category, 'categoriesList' => $categoriesList];

        return view('frontend.categoryview')->with($data);
    }

    public function brandview($brand_id)
    {
        $brand = Brand::FindorFail($brand_id);
        $categoriesList = Category::getTreeHP();
        $products = Product::where('brand_id', $brand_id)->get();
        $data = ['products' => $products, 'brand' => $brand, 'categoriesList' => $categoriesList];

        return view('frontend.brandview')->with($data);
    }

    public function feedback()
    {
        $products = Product::all();
        $categoriesList = Category::getTreeHP();
        $data = ['products' => $products, 'categoriesList' => $categoriesList];

        return view('frontend.feedback')->with($data);
    }

    public function about_us()
    {
        $categoriesList = Category::getTreeHP();
        $data = ['categoriesList' => $categoriesList];

        return view('frontend.about')->with($data);
    }

    public function products()
    {
        $products = Product::all();
        $categoriesList = Category::getTreeHP();
        $data = ['products' => $products, 'categoriesList' => $categoriesList];

        return view('frontend.products')->with($data);
    }

    public function shop()
    {
        if (isset(Auth::user()->id)) {
            $user = Auth::user()->id;
            $brands = Brand::all();
            $volumes = Volume::all();
            $categories = Category::all();
            $products = Product::paginate(12);
            $categoriesList = Category::getTreeHP();
            $countries = Country::all();
            $shoppingLists = ShoppingCart::where('user_id', $user)->get();
            $data = ['products' => $products, 'categoriesList' => $categoriesList, 'brands' => $brands, 'categories' => $categories, 'volumes' => $volumes, 'countries' => $countries, 'shoppinglists' => $shoppingLists];

            return view('frontend.shop')->with($data);

        } else {
            $brands = Brand::all();
            $volumes = Volume::all();
            $categories = Category::all();
            $products = Product::paginate(12);
            $categoriesList = Category::getTreeHP();
            $countries = Country::all();
            $data = ['products' => $products, 'categoriesList' => $categoriesList, 'brands' => $brands, 'categories' => $categories, 'volumes' => $volumes, 'countries' => $countries];

            return view('frontend.shop')->with($data);
        }
    }

    public function bar()
    {
        $categories = Category::all();
        $categoriesList = Category::getTreeHP();

        $data = ['categoriesList' => $categoriesList,'categories' => $categories];
        return view('frontend.publika')->with($data);
    }
}
