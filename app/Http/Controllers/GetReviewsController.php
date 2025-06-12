<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class GetReviewsController extends Controller
{
    public function get_reviews(){
        $review = Review::all();
        return view('Reviews',['reviews'=> $review]);

    }
}
