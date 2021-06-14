<?php

namespace App\Http\Controllers;

use App\courses;
use App\news;
use App\posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = news::orderBy('newsid', 'DESC')->limit('5')->get();
        $posts = posts::orderBy('postid', 'DESC')->limit('5')->get();
        $courses = courses::orderBy('courseid', 'DESC')->limit('3')->get();
        return view('admin.index', compact('news', 'posts', 'courses'));
    }
}
