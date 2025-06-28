<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;

class StoreOrderController extends Controller
{
    public function storeorder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:15',
            'note' => 'nullable|string|max:1000',
        ]);

        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->note = $request->note;
        $order->user_id = auth()->user()->id ?? null; // Optional user_id
        $order->save();

        // Assuming you have a Cart model to handle cart items
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        
        foreach ($cartItems as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $item->product_id;
            $orderDetail->price = $item->product->price; // Assuming product has a price attribute
            $orderDetail->quantity = $item->quantity;
            $orderDetail->order_id = $order->id;
            $orderDetail->save();
        }

        // Clear the cart after order is placed
        Cart::where('user_id', auth()->user()->id)->delete();

        return redirect('/CompleteOrder')->with('success', 'Order placed successfully!');
    }
}
