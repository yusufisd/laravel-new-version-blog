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
        $blogs = Blog::orderBy('title','asc')->paginate(3);
        return view('frontend.pages.blog.index',compact('blogs'));
    }

    public function myBlogs()
    {
        $blogs = Blog::where('author_id',Auth::guard('authors')->user()->id)->paginate(3);
        return view('frontend.pages.blog.my_blogs',compact('blogs'));
    }

    public function detail(Blog $blog)
    {
        $otherBlogs = Blog::inRandomOrder()->take(6)->get();
        $categories = BlogCategory::orderBy('title','asc')->take(6)->get();
        $previousBlog = Blog::where('id','>',$blog->id)->orderBy('id','asc')->first() ?? '';
        $nextBlog = Blog::where('id','<',$blog->id)->orderBy('id','desc')->first() ?? '';
        return view('frontend.pages.blog.detail',compact('blog','previousBlog','nextBlog','otherBlogs','categories'));
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
