<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCategoryController
{
    public function index()
    {
        return view('frontend.pages.blogCategories.index');
    }

    public function myBlogCategories()
    {
        $categories = BlogCategory::where('author_id',Auth::guard('authors')->user()->id)->paginate(3);
        return view('frontend.pages.blogCategories.my_blog_categories',compact('categories'));
    }

    public function detail()
    {
        return view('frontend.pages.blogCategories.detail');
    }

    public function create()
    {
        return view('frontend.pages.blogCategories.create');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('frontend.pages.blogCategories.edit',compact('blogCategory'));
    }
}
