<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class StoreReviewsController extends Controller
{
    public function store_reviws(Request $request ){
        $review = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->phone = $request->phone;
        $review->subject = $request->subject;
        $review->content = $request->content;
        $review ->save();
        return redirect('Reviews');

    }
}
