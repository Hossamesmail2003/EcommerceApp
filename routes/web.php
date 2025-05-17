<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;


Route::get('/', function () {

    $result= Category::all();


    return view('welcome',['categories' => $result]);
});


Route::get('/Product/{catid?}', function ($catid = null) {
    if($catid == null){
        $result= Product::all();
        return view('Product',['products' => $result]);
    }
    else{
        $result= Product::where('category_id',$catid)->get();
        return view('Product',['products' => $result]);
    }
});

Route::get('/Category', function () {
    return view('Category');
});
