<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class WebsiteController extends Controller
{
    public function index(){
        $categories = Category::orderBy('name', 'ASC')->where('is_published', 'l')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', 'l')->paginate(5);
        return view('website.index', compact('posts', 'categories'));
    }
}
