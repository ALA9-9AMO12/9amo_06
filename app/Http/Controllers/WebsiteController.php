<?php

namespace App\Http\Controllers;

use App\users;
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

    public function showContactForm() {
        return view('website.contact');
    }
    public function submitContactForm(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'message' => $request->message,
        ];

        Mail::to('mail@gmail.com')->send(new VisitorContact($data));

        Session::flash('message', 'edankt voor je email');
        return redirect()->route('contact.show');
    }
}
