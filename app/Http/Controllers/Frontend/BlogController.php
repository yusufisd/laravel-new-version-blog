<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController
{
    public function index()
    {
        return view('frontend.pages.blog.index');
    }

    public function myBlogs()
    {
        $blogs = Blog::where('author_id',Auth::guard('authors')->user()->id)->paginate(3);
        return view('frontend.pages.blog.my_blogs',compact('blogs'));
    }

    public function detail()
    {
        return view('frontend.pages.blog.detail');
    }

    public function create()
    {
        $categories = BlogCategory::get();
        return view('frontend.pages.blog.create',compact('categories'));
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::get();
        return view('frontend.pages.blog.edit',compact('blog','categories'));
    }
}
