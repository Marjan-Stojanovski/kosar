<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('products', compact('carts'));
    }

    public function bookCart()
    {
        return view('cart');
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
                "productAmount" => $productAmount
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        if($request->product_id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->product_id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Book added to cart.');
        }
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
