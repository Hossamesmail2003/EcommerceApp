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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsTableController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GetCartController;
use App\Http\Controllers\ProductPhotosController;
use App\Http\Controllers\StoreProductPhotosController;
use App\Http\Controllers\GetCompleteOrderController;
use App\Http\Controllers\StoreOrderController;




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/',[MainController::class,'MainPage']);
Route::get('/Product/{catid?}', [GetCategoryProductsController::class, 'GetCategoryProducts']);
Route::delete('/DeleteProduct/{productid?}', [DeleteProductController::class, 'deleteproduct']);
Route::get('/EditProduct/{productid?}', [EditProductController::class, 'editproduct']);
Route::put('/UpdateProduct/{productid?}', [UpdateProductController::class, 'updateproduct']);
Route::get('/Category', [GetAllProductsByCategoriesController::class, 'GetAllProductsByCategories']);
Route::get('/Reviews', [GetReviewsController::class, 'get_reviews']);
Route::get('/ProductsTable', [ProductsTableController::class, 'productstable']);
Route::get('/CompleteOrder', [GetCompleteOrderController::class, 'get_complete_order']);
Route::post('/StoreOrder', [StoreOrderController::class, 'storeorder']);
Route::post('/StoreReview', [StoreReviewsController::class, 'store_reviws']);
Route::post('/Search', [SearchController::class, 'search']);

Route::get('/AddProduct', [GetAddProductController::class, 'GetAddProduct'])->middleware('auth');
Route::post('/StoreProduct', [AddProductController::class, 'AddProduct'])->middleware('auth');

Route::post('/Cart/{productid?}', [CartController::class, 'cart'])->middleware('auth');
Route::get('/GetCart', [GetCartController::class, 'get_cart'])->middleware('auth');
Route::get('/Addproductphotos/{productid?}', [ProductPhotosController::class, 'get_product_photos']);
Route::post('/storeproductimages/{productid?}', [StoreProductPhotosController::class, 'store_product_photos']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
