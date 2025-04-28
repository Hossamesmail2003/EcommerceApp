<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Product', function () {
    return view('Product');
});

Route::get('/Category', function () {
    return view('Category');
});
