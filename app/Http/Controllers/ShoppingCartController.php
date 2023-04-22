<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
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
            $user_id        = $request->get('user_id');

            ShoppingCart::create([
                'product_id'    => $product_id,
                'name'          => $title,
                'price'         => $price,
                'quantity'      => $quantityNew,
                'image'         => $image,
                'user_id'       => $user_id
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
}
