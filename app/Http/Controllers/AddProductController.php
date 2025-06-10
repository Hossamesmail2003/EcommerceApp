<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AddProductController extends Controller
{
    public function AddProduct(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|unique:Products|string|max:100',
            'price' => 'required|numeric|min:0',
        ]);

        // Create a new product instance
        $newproduct = new Product();
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->quantity = $request->quantity;
        $newproduct->description = $request->description;
        $newproduct->category_id = $request->category_id; // Assuming category_id is set to 1 for simplicity, you can modify this as needed
        $newproduct->imagepath = 's'; // Store the image in the public disk
        $newproduct->save();

        return redirect('/');
    }
}