<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class EditProductController extends Controller
{
    public function editproduct($productid = null)
    {
        if ($productid) {
            $product = Product::find($productid);
            if ($product) {
                $categories = Category::all();
                return view('Products.EditProduct', [
                    'product' => $product,
                    'categories' => $categories
                ]);
            } else {
                return redirect('/Product')->with('error', 'Product not found');
            }
        } else {
            return redirect('/Product')->with('error', 'Product ID is required');
        }
    }
}
