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

            $user                   = Auth::user()->id;
            $brands                 = Brand::all();
            $categories             = Category::all();
            $products               = Product::paginate(5);
            $categoriesTree         = Category::getTreeHP();
            $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount     = count($shoppingLists);
            $userLists            = ShoppingCart::groupBy('name', 'price', 'quantity')
                                    ->selectRaw('count(*) as total, name, price, quantity')
                                    ->get();
            $totalAmount = null;

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
                ];

            return view('frontend.index')->with($data);

        } else {

            $brands                     = Brand::all();
            $categories                 = Category::all();
            $products                   = Product::paginate(5);
            $categoriesTree             = Category::getTreeHP();

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories
            ];

            return view('frontend.index')->with($data);
        }
    }

    public function productView($id)
    {
        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brands             = Brand::all();
            $categories         = Category::all();
            $product            = Product::FindorFail($id);
            $products           = Product::paginate(5);
            $categoriesTree     = Category::getTreeHP();
            $comments           = Comment::where('product_id', $id)->get();
            $category_id        = $product['category_id'];
            $categoryProducts   = Product::where('category_id', $category_id)->get();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                            ->selectRaw('count(*) as total, name, price, quantity')
                            ->get();
            $totalAmount        = null;

            $data = [
                'brands'                => $brands,
                'categories'            => $categories,
                'product'               => $product,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'comments'              => $comments,
                'categoryProducts'      => $categoryProducts,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.productView')->with($data);
        } else {

            $brands             = Brand::all();
            $categories         = Category::all();
            $product            = Product::FindorFail($id);
            $products           = Product::paginate(5);
            $categoriesTree     = Category::getTreeHP();
            $comments           = Comment::where('product_id', $id)->get();
            $category_id        = $product['category_id'];
            $categoryProducts   = Product::where('category_id', $category_id)->get();

            $data = [
                'brands'                => $brands,
                'categories'            => $categories,
                'product'               => $product,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'comments'              => $comments,
                'categoryProducts'      => $categoryProducts
            ];

            return view('frontend.productView')->with($data);
        }
    }

    public function categoryView($category_id)
    {
        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brands             = Brand::all();
            $category           = Category::FindorFail($category_id);
            $categories         = Category::all();
            $products           = Product::where('category_id', $category_id)->get();
            $categoriesTree     = Category::getTreeHP();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                            ->selectRaw('count(*) as total, name, price, quantity')
                            ->get();
            $totalAmount        = null;

            $data = [
                'brands'                => $brands,
                'categories'            => $categories,
                'category'              => $category,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.categoryView')->with($data);
        } else {

            $category           = Category::FindorFail($category_id);
            $categoriesTree     = Category::getTreeHP();
            $products           = Product::where('category_id', $category_id)->get();

            $data = [
                'products'          => $products,
                'category'          => $category,
                'categoriesTree'    => $categoriesTree
            ];

            return view('frontend.categoryView')->with($data);
        }
    }

    public function brandView($brand_id)
    {

        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brand              = Brand::FindorFail($brand_id);
            $brands             = Brand::all();
            $categories         = Category::all();
            $products           = Product::where('brand_id', $brand_id)->get();
            $categoriesTree     = Category::getTreeHP();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                            ->selectRaw('count(*) as total, name, price, quantity')
                            ->get();
            $totalAmount        = null;

            $data = [
                'brand'                 => $brand,
                'brands'                => $brands,
                'categories'            => $categories,
                'products'              => $products,
                'categoriesTree'        => $categoriesTree,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.brandView')->with($data);
        } else {


            $brand              = Brand::FindorFail($brand_id);
            $categoriesTree     = Category::getTreeHP();
            $products           = Product::where('brand_id', $brand_id)->get();

            $data = [
                'products'          => $products,
                'brand'             => $brand,
                'categoriesTree'    => $categoriesTree
            ];

            return view('frontend.brandView')->with($data);
        }
    }

    public function feedback()
    {
        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brands             = Brand::all();
            $products           = Product::all();
            $categories         = Category::all();
            $categoriesTree     = Category::getTreeHP();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                ->selectRaw('count(*) as total, name, price, quantity')
                ->get();
            $totalAmount        = null;

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'categories'            => $categories,
                'categoriesTree'        => $categoriesTree,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.feedback')->with($data);
        } else {

            $products = Product::all();
            $categoriesTree = Category::getTreeHP();

            $data = [
                'products' => $products,
                'categoriesTree' => $categoriesTree
            ];

            return view('frontend.feedback')->with($data);
        }
    }

    public function about_us()
    {
        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brands             = Brand::all();
            $products           = Product::all();
            $categories         = Category::all();
            $categoriesTree     = Category::getTreeHP();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                ->selectRaw('count(*) as total, name, price, quantity')
                ->get();
            $totalAmount        = null;

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'categories'            => $categories,
                'categoriesTree'        => $categoriesTree,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.about')->with($data);
        } else {

            $categoriesTree = Category::getTreeHP();

            $data = [
                'categoriesTree' => $categoriesTree
            ];

            return view('frontend.about')->with($data);
        }
    }

    public function products()
    {
        if (isset(Auth::user()->id)) {

            $user               = Auth::user()->id;
            $brands             = Brand::all();
            $products           = Product::all();
            $categories         = Category::all();
            $categoriesTree     = Category::getTreeHP();
            $shoppingLists      = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount = count($shoppingLists);
            $userLists          = ShoppingCart::groupBy('name', 'price', 'quantity')
                ->selectRaw('count(*) as total, name, price, quantity')
                ->get();
            $totalAmount        = null;

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'categories'            => $categories,
                'categoriesTree'        => $categoriesTree,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.products')->with($data);

        } else {

            $products           = Product::all();
            $categoriesTree     = Category::getTreeHP();

            $data = [
                'products'          => $products,
                'categoriesTree'    => $categoriesTree
            ];

            return view('frontend.products')->with($data);
        }
    }

    public function shop()
    {
        if (isset(Auth::user()->id)) {
            $user                   = Auth::user()->id;
            $brands                 = Brand::all();
            $volumes                = Volume::all();
            $categories             = Category::all();
            $products               = Product::paginate(12);
            $categoriesTree         = Category::getTreeHP();
            $countries              = Country::all();
            $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount     = count($shoppingLists);
            $userLists              = ShoppingCart::groupBy('name', 'price', 'quantity')
                                ->selectRaw('count(*) as total, name, price, quantity')
                                ->get();
            $totalAmount                  = null;

            $data = [
                'products' => $products,
                'categoriesTree' => $categoriesTree,
                'brands' => $brands,
                'categories' => $categories,
                'volumes' => $volumes,
                'countries' => $countries,
                'shoppingLists' => $shoppingLists,
                'shoppingListsCount' => $shoppingListsCount,
                'userLists' => $userLists,
                'totalAmount' => $totalAmount
            ];

            return view('frontend.shop')->with($data);

        } else {

            $brands             = Brand::all();
            $volumes            = Volume::all();
            $categories         = Category::all();
            $products           = Product::paginate(12);
            $categoriesTree     = Category::getTreeHP();
            $countries          = Country::all();

            $data = [
                'products'          => $products,
                'categoriesTree'    => $categoriesTree,
                'brands'            => $brands,
                'categories'        => $categories,
                'volumes'           => $volumes,
                'countries'         => $countries
            ];

            return view('frontend.shop')->with($data);
        }
    }

    public function bar()
    {
        $categoriesTree = Category::getTreeHP();

        $data = [
            'categoriesTree' => $categoriesTree
        ];
        return view('frontend.publika')->with($data);
    }
}
