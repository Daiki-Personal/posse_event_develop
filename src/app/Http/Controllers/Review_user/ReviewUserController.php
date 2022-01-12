<?php

namespace App\Http\Controllers\Review_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewUserController extends Controller
{
    public function index()
    {

        return view('review.user_top');
        // return view('review.top', compact('events'));
    }
}
