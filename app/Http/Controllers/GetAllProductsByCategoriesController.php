<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class GetAllProductsByCategoriesController extends Controller
{
    public function GetAllProductsByCategories() {
    $categories= Category::all();
    $products= Product::all();
    return view('Category',['categories' => $categories,'products' => $products]);
}
}
