<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Productphoto;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreProductPhotosController extends Controller
{
    public function store_product_photos(Request $request){
        if($request->hasFile('image')) {
            $productid = $request->productid;
            $product = Product::find($productid);
            if ($product) {
                $newphoto = new Productphoto();
                $newphoto->product_id = $productid;
                $path = $request->image->move('uploads', Str::uuid()->toString() . '-' . $request->image->getClientOriginalExtension());
                $newphoto->imagepath = $path;
                $newphoto->save();
                return redirect('/Addproductphotos/' . $productid)->with('success', 'Image uploaded successfully.');
            } else {
                return redirect()->back()->with('error', 'Product not found.');
            }
        } else {
            return redirect()->back()->with('error', 'No image file provided.');
        }
    }
}
