<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products= Product::where('name','LIKE',"%{$request-> searchkey}%") ->paginate(10);

        return view('Product', ['products' => $products]);
    }
}
