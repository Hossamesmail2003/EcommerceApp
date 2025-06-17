<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Productphoto;
use Illuminate\Http\Request;

class ProductPhotosController extends Controller
{
    public function get_product_photos($productid = null)
    {
        if ($productid) {
            $product= Product::find($productid);
            $productimages = Productphoto::where('product_id', $productid)->get();
        }else {
            return redirect()->back()->with('error', 'Product not found');
        }
        return view('Products.AddProductPhotos',[
            'product' => $product,
            'productimages' => $productimages,
        ]);
    }
}
