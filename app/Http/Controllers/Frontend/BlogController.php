<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        return view('frontend.pages.blog.index');
    }

    public function myBlogs()
    {
        return view('frontend.pages.blog.my_blogs');
    }

    public function detail()
    {
        return view('frontend.pages.blog.detail');
    }

    public function create()
    {
        return view('frontend.pages.blog.create');
    }

    public function edit()
    {
        return view('frontend.pages.blog.edit');
    }
}
