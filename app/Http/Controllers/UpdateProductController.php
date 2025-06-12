<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class UpdateProductController extends Controller
{
    public function updateproduct(Request $request, $productid = null)
    {
        if ($productid) {
            $product = Product::find($productid);
            if ($product) {
                $product->name = $request->name;
                $product->price = $request->price;
                $product->quantity = $request->quantity;
                $product->description = $request->description;
                $product->category_id = $request->category_id;

                // Handle image upload with UUID
                $path = $request -> image -> move('uploads',str::uuid() -> tostring() . '-' . $request->image->getClientOriginalExtension());
                $product->imagepath = $path;


                $product->save();

                return redirect('/Product')->with('success', 'Product updated successfully');
            } else {
                return redirect('/Product')->with('error', 'Product not found');
            }
        } else {
            return redirect('/Product')->with('error', 'Product ID is required');
        }
    }
}
