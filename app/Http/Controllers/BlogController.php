<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function myBlogs()
    {
        return view('frontend.pages.blog.my_blogs');
    }

    public function detail()
    {
        return view('frontend.pages.blog.detail');
    }

    public function edit()
    {
        return view('frontend.pages.blog.edit');
    }
}
