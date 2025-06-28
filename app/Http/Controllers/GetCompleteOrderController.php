<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class GetCompleteOrderController extends Controller
{
    public function get_complete_order()
    {
        $user_id = auth()->user()->id;
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();
        return view('Products.CompleteOrder',[
            'cartItems' => $cartItems,
        ]);
    }
}
