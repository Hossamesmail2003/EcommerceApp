<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class AddProductController extends Controller
{
    public function AddProduct(Request $request)
    {
        if (Auth::check()){


        // Validate the incoming request data
        $request->validate([
            'name' => 'required|unique:Products|string|max:100',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Create a new product instance
        $newproduct = new Product();
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->quantity = $request->quantity;
        $newproduct->description = $request->description;
        $newproduct->category_id = $request->category_id;

        // Store image with UUID filename
        if ($request->hasFile('image')) {
            $path = $request -> image -> move('uploads',str::uuid() -> tostring() . '-' . $request->image->getClientOriginalExtension());
            $newproduct->imagepath = $path;
        }

        $newproduct->save();

        return redirect('/');
        }else{
            return redirect('/login')->with('error', 'You must be logged in to add a product.');
        }
    }
}