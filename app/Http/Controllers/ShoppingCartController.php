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
use function PHPUnit\Framework\isEmpty;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->get('id');
        $user_id = $request->get('user_id');
        $quantityNew = $request->get('quantity');
        if ($quantityNew === null) {
            return redirect()->back() ->with('alert', 'Please enter quantity!');
        };
        $count = ShoppingCart::where('product_id', $product_id)->where('user_id', $user_id)->count();
        if ($count === 0) {

            $product_id = $request->get('id');
            $title = $request->get('title');
            $price = $request->get('price');
            $quantityNew = $request->get('quantity');
            if ($quantityNew === null) {
                return redirect()->back() ->with('alert', 'Please enter quantity!');
            };
            $image = $request->get('image');
            $user_id = $request->get('user_id');

            ShoppingCart::create([
                'product_id' => $product_id,
                'name' => $title,
                'price' => $price,
                'quantity' => $quantityNew,
                'image' => $image,
                'user_id' => $user_id
            ]);
        } else {

            $testProduct = ShoppingCart::where('product_id', $product_id)->where('user_id', $user_id)->get();
            $quantityOld = $testProduct[0]['quantity'];
            $quantity = $quantityOld + $quantityNew;
            $testProduct = ShoppingCart::where('product_id', $product_id)->where('user_id', $user_id)->update(array('quantity' => $quantity));
        }

        $brands = Brand::all();
        $volumes = Volume::all();
        $categories = Category::all();
        $products = Product::paginate(12);
        $categoriesList = Category::getTreeHP();
        $countries = Country::all();
        $shoppingCart = ShoppingCart::all();
        $shoppingLists = ShoppingCart::where('user_id', $user_id)->get();
        $shoppingListsCount = count($shoppingLists);
        $collections = ShoppingCart::groupBy('name', 'quantity')
            ->selectRaw('count(*) as total, name, quantity')
            ->get();
        $total = ShoppingCart::where('user_id', $user_id)->sum('price');

        $data = ['products' => $products, 'categoriesList' => $categoriesList, 'brands' => $brands, 'categories' => $categories, 'volumes' => $volumes, 'countries' => $countries, 'shoppingcart' => $shoppingCart, 'shoppinglists' => $shoppingLists, 'shoppingListsCount' => $shoppingListsCount,
            'collections' => $collections,
            'total' => $total];
        dd($shoppingLists);
        return view('frontend.shop')->with($data);
    }

    public function cartList()
    {
        $user_id = Auth::user()->id;
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(12);
        $categoriesList = Category::getTreeHP();
        $shoppingCart = ShoppingCart::all();
        $shoppingLists = ShoppingCart::where('user_id', $user_id)->get();
        $shoppingListsCount = ShoppingCart::where('user_id', $user_id)->count();
        $shoppingListsCount = count($shoppingLists);
        $collections = ShoppingCart::groupBy('name', 'price')
            ->selectRaw('count(*) as total, name, price')
            ->get();
        $total = ShoppingCart::where('user_id', $user_id)->sum('price');
        $data = [
            'products' => $products,
            'brands' => $brands,
            'categoriesList' => $categoriesList,
            'categories' => $categories,
            'shoppingcart' => $shoppingCart,
            'shoppinglists' => $shoppingLists,
            'shoppingListsCount' => $shoppingListsCount,
            'collections' => $collections,
            'total' => $total];

        return view('frontend.shopcart')->with($data);
    }
}
