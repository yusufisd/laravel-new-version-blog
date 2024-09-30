<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $blogs = Blog::orderBy('title','asc')->paginate(4);
        $categories = BlogCategory::orderBy('title','asc')->take(8)->get();
        return view('frontend.pages.index',compact('blogs','categories'));
    }
}
