<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class DeleteProductController extends Controller
{
    public function deleteproduct($productid = null)
    {
        if ($productid) {
            $product = Product::find($productid);
            if ($product) {
                $product->delete();
                return redirect('/Product')->with('success', 'Product deleted successfully');
            } else {
                return redirect('/Product')->with('error', 'Product not found');
            }
        }
        else{
            return redirect('/Product')->with('error', 'Product ID is required');
        }
    }
}
