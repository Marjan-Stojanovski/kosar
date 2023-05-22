<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {

        return view('products', compact('carts'));
    }

    public function viewCart()
    {
        $carts = session()->get('cart', []);

        $brands                 = Brand::all();
        $categories             = Category::all();
        $products               = Product::paginate(12);
        $categoriesTree         = Category::getTreeHP();

        $data = [
            'carts'                 => $carts,
            'products'              => $products,
            'brands'                => $brands,
            'categoriesTree'        => $categoriesTree,
            'categories'            => $categories
        ];

        return view('frontend.shopCart')->with($data);
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->get('id');
        $cart = session()->get('cart', []);

        if(isset($cart[$product_id])) {

            $oldQuantity = $cart[$product_id]['quantity'];
            $newQuantity = $request->get('quantity');
            $quantity = $oldQuantity + $newQuantity;
            $cart[$product_id]['quantity'] = $quantity;

        } else {

                $quantity = $request->get('quantity');
                $unitPrice = $request->get('price');
                $productAmount = $quantity * $unitPrice;

            $cart[$product_id] = [
                "name" => $request->get('title'),
                "quantity" => $request->get('quantity'),
                "unitPrice" => $request->get('price'),
                "product_id" => $request->get('id'),
                "brand" => $request->get('brand'),
                "image" => $request->get('image'),
                "productAmount" => $productAmount
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function deleteProduct(Request $request, $id)
    {
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
        }
    }
}
