<?php

namespace App\Http\Controllers\Review_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewAdminController extends Controller
{
    
    public function index()
    {
        
        return view('review.top');
        // return view('review.top', compact('events'));
    }
    public function edit_day()
    {
        
        return view('review.edit_day');
    }
    public function edit_curriculum()
    {
        
        return view('review.edit_curriculum');
    }
    public function studyprogress_search()
    {
        
        return view('review.studyprogress_search');
    }
}
