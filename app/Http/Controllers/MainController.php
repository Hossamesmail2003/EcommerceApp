<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function MainPage() {

    $result= Category::all();


    return view('welcome',['categories' => $result]);
}
}
