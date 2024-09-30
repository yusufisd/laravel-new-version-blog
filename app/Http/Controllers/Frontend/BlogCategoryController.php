<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCategoryController
{
    public function index()
    {
        $categories = BlogCategory::orderBy('title','asc')->paginate(3);
        return view('frontend.pages.blogCategories.index',compact('categories'));
    }

    public function myBlogCategories()
    {
        $categories = BlogCategory::where('author_id',Auth::guard('authors')->user()->id)->paginate(3);
        return view('frontend.pages.blogCategories.my_blog_categories',compact('categories'));
    }

    public function detail($id)
    {
        $blogs = Blog::where('category_id',$id)->paginate(3);
        return view('frontend.pages.blogCategories.detail',compact('blogs'));
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
