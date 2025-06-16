<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
class CartController extends Controller
{
    public function cart(Request $request , $productid = null)
    {
        if ($productid) {
            $product = Product::find($productid);
            if ($product) {

                $result = Cart::where('user_id', auth()->user()->id)
                    ->where('product_id', $product->id)
                    ->get();

                if ($result->isNotEmpty()) {
                    $cartItem = $result->first();
                    $cartItem->quantity += 1; // Increment quantity by 1
                    $cartItem->save(); // Save the updated quantity
                } else {
                    $cart = new Cart();
                    $cart->user_id = auth()->user()->id; // Assuming you have user authentication
                    $cart->product_id = $product->id;
                    $cart->quantity = 1; // Default quantity
                    $cart->save();
                }
            } else {
                return redirect()->back()->with('error', 'Product not found.');
            }
        }
        return redirect('/GetCart')->with('success', 'Product added to cart successfully.');
    }
}
