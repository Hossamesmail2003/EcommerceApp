<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class GetCategoryProductsController extends Controller
{
    public function GetCategoryProducts($catid = null) {
    if($catid == null){
        $result= Product::paginate(10);
        return view('Product',['products' => $result]);
    }
    else{
        $result= Product::where('category_id',$catid)->get();
        return view('Product',['products' => $result]);
    }
}
}
