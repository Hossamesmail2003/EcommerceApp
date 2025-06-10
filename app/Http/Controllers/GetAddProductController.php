<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class GetAddProductController extends Controller
{
    public function GetAddProduct()
    {
        $categories = Category::all();
        // Return the view for adding a product
        return view('Products.AddProduct',['categories' => $categories]);
    }
}
