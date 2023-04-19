<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Volume;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request)
    {

        $product_id = $request->get('id');
        $title = $request->get('title');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $image = $request->get('image');
        $user_id = $request->get('user_id');

        ShoppingCart::create([
           'product_id' => $product_id,
           'name' => $title,
           'price' => $price,
           'quantity' => $quantity,
           'image' => $image,
           'user_id' => $user_id
        ]);

        $brands = Brand::all();
        $volumes = Volume::all();
        $categories = Category::all();
        $products = Product::paginate(12);
        $categoriesList = Category::getTreeHP();
        $countries = Country::all();
        $shoppingCart = ShoppingCart::all();
        $shoppingLists = ShoppingCart::where('user_id', $user_id)->get();
        $shoppingListsCount = ShoppingCart::where('user_id', $user_id)->count();
        $shoppingListsCount = count($shoppingLists);
        $collections = ShoppingCart::groupBy('name', 'price')
            ->selectRaw('count(*) as total, name, price')
            ->get();
        $total = ShoppingCart::where('user_id', $user_id)->sum('price');

        $data = ['products' => $products, 'categoriesList' => $categoriesList, 'brands' => $brands, 'categories' => $categories, 'volumes' => $volumes, 'countries' => $countries, 'shoppingcart' => $shoppingCart, 'shoppinglists' => $shoppingLists, 'shoppingListsCount' => $shoppingListsCount,
            'collections' => $collections,
            'total' => $total];

        return view('frontend.shop')->with($data);

    }
}
