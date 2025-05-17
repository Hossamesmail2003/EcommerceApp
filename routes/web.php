<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GetCategoryProductsController;
use App\Http\Controllers\GetAllProductsByCategoriesController;



Route::get('/',[MainController::class,'MainPage']);
Route::get('/Product/{catid?}', [GetCategoryProductsController::class, 'GetCategoryProducts']);
Route::get('/Category', [GetAllProductsByCategoriesController::class, 'GetAllProductsByCategories']);
