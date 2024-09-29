<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return view('frontend.pages.blogCategories.index');
    }

    public function myBlogCategories()
    {
        return view('frontend.pages.blogCategories.my_blog_categories');
    }

    public function detail()
    {
        return view('frontend.pages.blog.detail');
    }

    public function create()
    {
        return view('frontend.pages.blogCategories.create');
    }

    public function edit()
    {
        return view('frontend.pages.blog.edit');
    }
}
