<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $result= DB::table('categories')->get();


    return view('welcome',['categories' => $result]);
});


Route::get('/Product/{catid?}', function ($catid = null) {
    if($catid == null){
        $result= DB::table('Products')->get();
        return view('Product',['products' => $result]);
    }
    else{
        $result= DB::table('Products')->where('category_id',$catid)->get();
        return view('Product',['products' => $result]);
    }
});

Route::get('/Category', function () {
    return view('Category');
});
