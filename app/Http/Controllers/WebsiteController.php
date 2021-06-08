<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\courses;

class WebsiteController extends Controller
{
    public function index(){
        $courses = courses::orderBy('title', 'ASC')->get();
        $posts = posts::orderBy('date', 'DESC')->paginate(5);
        return view('website.index', compact('posts', 'courses'));
    }
}
