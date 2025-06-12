<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GetCategoryProductsController;
use App\Http\Controllers\GetAllProductsByCategoriesController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\GetAddProductController;
use App\Http\Controllers\DeleteProductController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\UpdateProductController;
use App\Http\Controllers\GetReviewsController;
use App\Http\Controllers\StoreReviewsController;


Route::get('/',[MainController::class,'MainPage']);
Route::get('/Product/{catid?}', [GetCategoryProductsController::class, 'GetCategoryProducts']);
Route::delete('/DeleteProduct/{productid?}', [DeleteProductController::class, 'deleteproduct']);
Route::get('/EditProduct/{productid?}', [EditProductController::class, 'editproduct']);
Route::put('/UpdateProduct/{productid?}', [UpdateProductController::class, 'updateproduct']);
Route::get('/Category', [GetAllProductsByCategoriesController::class, 'GetAllProductsByCategories']);
Route::get('/Reviews', [GetReviewsController::class, 'get_reviews']);
Route::post('/StoreReview', [StoreReviewsController::class, 'store_reviws']);

Route::get('/AddProduct', [GetAddProductController::class, 'GetAddProduct']);
Route::post('/StoreProduct', [AddProductController::class, 'AddProduct']);
