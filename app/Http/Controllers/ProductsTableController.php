<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsTableController extends Controller
{
    public function productstable()
    {
        $products = Product::all();
        return view('Products.ProductTable', ['products' => $products]);
    }
}
