<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class GetCartController extends Controller
{
    public function get_cart(Request $request)
    {
        $user_id = auth()->user()->id;
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        // Return the cart items to a view or as JSON
        return view('Products.Cart', [
            'cartItems' => $cartItems,
        ]);
    }
}
