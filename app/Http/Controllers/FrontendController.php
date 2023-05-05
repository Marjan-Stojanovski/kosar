<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
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

        if (isset(Auth::user()->id)) {

            $user                   = Auth::user()->id;
            $loggedUser              = Auth::user();
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
                'loggedUser'            => $loggedUser,
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

    public function addToCart(Request $request)
    {

        $product_id         = $request->get('id');
        $user               = $request->get('user_id');
        $quantityNew        = $request->get('quantity');

        if ($quantityNew === null) {
            return redirect()->back() ->with('alert', 'Please enter quantity!');
        };

        $count              = ShoppingCart::where('product_id', $product_id)
            ->where('user_id', $user)
            ->count();

        if ($count === 0) {
            $product_id     = $request->get('id');
            $title          = $request->get('title');
            $price          = $request->get('price');
            $quantityNew    = $request->get('quantity');
            $image          = $request->get('image');
            $user        = $request->get('user_id');

            ShoppingCart::create([
                'product_id'    => $product_id,
                'name'          => $title,
                'price'         => $price,
                'quantity'      => $quantityNew,
                'image'         => $image,
                'user_id'       => $user
            ]);

        } else {
            $testProduct    = ShoppingCart::where('product_id', $product_id)
                ->where('user_id', $user)
                ->get();
            $quantityOld    = $testProduct[0]['quantity'];
            $quantity       = $quantityOld + $quantityNew;
            $testProduct    = ShoppingCart::where('product_id', $product_id)
                ->where('user_id', $user)
                ->update(array('quantity' => $quantity));
        }

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
        $totalAmount            = null;


        $data = [
            'products'              => $products,
            'categoriesTree'        => $categoriesTree,
            'brands'                => $brands,
            'categories'            => $categories,
            'volumes'               => $volumes,
            'countries'             => $countries,
            'shoppingLists'         => $shoppingLists,
            'shoppingListsCount'    => $shoppingListsCount,
            'userLists'             => $userLists,
            'totalAmount'           => $totalAmount
        ];

        return view('frontend.shop')->with($data);
    }

    public function cartList()
    {
        $user                   = Auth::user()->id;
        $brands                 = Brand::all();
        $categories             = Category::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();
        $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount     = count($shoppingLists);
        $userLists              = ShoppingCart::groupBy('name', 'price', 'quantity', 'product_id', 'id', 'image')
            ->selectRaw('count(*) as total, name, price, quantity, product_id, id, image')
            ->get();
        $totalAmount            = null;

        $data = [
            'products'              => $products,
            'brands'                => $brands,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories,
            'shoppingLists'         => $shoppingLists,
            'shoppingListsCount'    => $shoppingListsCount,
            'userLists'             => $userLists,
            'totalAmount'           => $totalAmount
        ];

        return view('frontend.shopCart')->with($data);
    }
    public function destroy($id)
    {
        $product                = ShoppingCart::FindorFail($id);

        $product->delete();

        $user                   = Auth::user()->id;
        $brands                 = Brand::all();
        $categories             = Category::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();
        $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount     = count($shoppingLists);
        $userLists              = ShoppingCart::groupBy('name', 'price', 'quantity', 'product_id', 'id')
            ->selectRaw('count(*) as total, name, price, quantity, product_id, id')
            ->get();
        $totalAmount            = null;

        $data = [
            'products'              => $products,
            'brands'                => $brands,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories,
            'shoppingLists'         => $shoppingLists,
            'shoppingListsCount'    => $shoppingListsCount,
            'userLists'             => $userLists,
            'totalAmount'           => $totalAmount
        ];

        return view('frontend.shopCart')->with($data);
    }

    public function cartCheckout()
    {
        $user                   = Auth::user()->id;
        $loggedUser              = Auth::user();
        $brands                 = Brand::all();
        $categories             = Category::all();
        $countries              = Country::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();
        $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
        $shoppingListsCount     = count($shoppingLists);
        $userLists              = ShoppingCart::groupBy('name', 'price', 'quantity', 'product_id', 'id')
            ->selectRaw('count(*) as total, name, price, quantity, product_id, id')
            ->get();
        $totalAmount            = null;

        $data = [
            'products'              => $products,
            'loggedUser'            => $loggedUser,
            'brands'                => $brands,
            'countries'             => $countries,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories,
            'shoppingLists'         => $shoppingLists,
            'shoppingListsCount'    => $shoppingListsCount,
            'userLists'             => $userLists,
            'totalAmount'           => $totalAmount
        ];

        return view('frontend.cartCheckout')->with($data);
    }
    public function preSignUp()
    {
        if (isset(Auth::user()->id)) {

            $user                   = Auth::user()->id;
            $brands                 = Brand::all();
            $countries              = Country::all();
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
                'countries'             => $countries,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.register')->with($data);

        } else {

            $brands                     = Brand::all();
            $categories                 = Category::all();
            $countries                  = Country::all();
            $products                   = Product::paginate(5);
            $categoriesTree             = Category::getTreeHP();

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'countries'             => $countries,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories
            ];

            return view('frontend.register')->with($data);
        }
    }

    public function preReset()
    {
        if (isset(Auth::user()->id)) {

            $user                   = Auth::user()->id;
            $brands                 = Brand::all();
            $countries              = Country::all();
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
                'countries'             => $countries,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.reset')->with($data);

        } else {

            $brands                     = Brand::all();
            $categories                 = Category::all();
            $countries                  = Country::all();
            $products                   = Product::paginate(5);
            $categoriesTree             = Category::getTreeHP();

            $data = [
                'brands'                => $brands,
                'products'              => $products,
                'countries'             => $countries,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories
            ];

            return view('frontend.reset')->with($data);
        }
    }

    public function userDetails()
    {
        if (isset(Auth::user()->id)) {

            $user = Auth::user()->id;
            $loggedUser = Auth::user();
            $brands = Brand::all();
            $countries = Country::all();
            $categories = Category::all();
            $products = Product::paginate(5);
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

            if ( $detailsCount === 0 ) {

                $data = [
                    'loggedUser' => $loggedUser,
                    'brands' => $brands,
                    'products' => $products,
                    'countries' => $countries,
                    'categoriesTree' => $categoriesTree,
                    'categories' => $categories,
                    'shoppingLists' => $shoppingLists,
                    'shoppingListsCount' => $shoppingListsCount,
                    'userLists' => $userLists,
                    'totalAmount' => $totalAmount
                ];

                return view('frontend.editUserInfo')->with($data);
            } else {
                $data = [
                    'loggedUser' => $loggedUser,
                    'brands' => $brands,
                    'products' => $products,
                    'countries' => $countries,
                    'categoriesTree' => $categoriesTree,
                    'categories' => $categories,
                    'shoppingLists' => $shoppingLists,
                    'shoppingListsCount' => $shoppingListsCount,
                    'userLists' => $userLists,
                    'totalAmount' => $totalAmount,
                    'details' => $details
                ];
                return view('frontend.userInfo')->with($data);
            }
        }
    }

    public function editDetails()
    {
        if (isset(Auth::user()->id)) {

            $user                   = Auth::user()->id;
            $loggedUser             = Auth::user();
            $brands                 = Brand::all();
            $countries              = Country::all();
            $categories             = Category::all();
            $products               = Product::paginate(5);
            $categoriesTree         = Category::getTreeHP();
            $shoppingLists          = ShoppingCart::where('user_id', $user)->get();
            $shoppingListsCount     = count($shoppingLists);
            $userLists              = ShoppingCart::groupBy('name', 'price', 'quantity')
                ->selectRaw('count(*) as total, name, price, quantity')
                ->get();
            $totalAmount = null;


            $data = [
                'loggedUser'            => $loggedUser,
                'brands'                => $brands,
                'products'              => $products,
                'countries'             => $countries,
                'categoriesTree'        => $categoriesTree,
                'categories'            => $categories,
                'shoppingLists'         => $shoppingLists,
                'shoppingListsCount'    => $shoppingListsCount,
                'userLists'             => $userLists,
                'totalAmount'           => $totalAmount
            ];

            return view('frontend.editUserInfo')->with($data);
        }
    }

    public function storeDetails(Request $request)
    {

        $company            = $request->get('company');
        $taxNumber          = $request->get('taxNumber');
        $firstName          = $request->get('firstName');
        $lastName           = $request->get('lastName');
        $phoneNumber        = $request->get('phoneNumber');
        $email              = $request->get('email');
        $address            = $request->get('address');
        $country_id         = $request->get('country_id');
        $city               = $request->get('city');
        $zipcode            = $request->get('zipcode');
        $user               = Auth::user()->id;
        $loggedUser         = Auth::user();

        $shippingDetails = Shipping::where('user_id', $user)->get();
        $detailsCount = count($shippingDetails);

        if ( $detailsCount === 0 ) {

            Shipping::create([
                'company'           => $company,
                'taxNumber'         => $taxNumber,
                'firstName'         => $firstName,
                'lastName'          => $lastName,
                'phoneNumber'       => $phoneNumber,
                'email'             => $email,
                'address'           => $address,
                'country_id'        => $country_id,
                'city'              => $city,
                'zipcode'           => $zipcode,
                'user_id'           => $user,

            ]);
        };

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
        $totalAmount            = null;

        $data = [
            'products'              => $products,
            'categoriesTree'        => $categoriesTree,
            'brands'                => $brands,
            'categories'            => $categories,
            'volumes'               => $volumes,
            'countries'             => $countries,
            'shoppingLists'         => $shoppingLists,
            'shoppingListsCount'    => $shoppingListsCount,
            'userLists'             => $userLists,
            'totalAmount'           => $totalAmount,
            'loggedUser'            => $loggedUser
        ];

        return view('frontend.userInfo')->with($data);
    }
}
