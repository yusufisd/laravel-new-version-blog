<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class BlogController
{
    public function store(BlogStoreRequest $request)
    {
        try
        {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs/'), $image_name);
            $path = asset('uploads/blogs/'.$image_name);

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->image = $path;
            $blog->category_id = $request->category_id;
            $blog->content = $request->content;
            $blog->author_id = Auth::guard('authors')->user()->id;
            $blog->save();

            Alert::success('Blog başarıyla eklendi');
            return redirect()->route('blog.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e);
            return back();
        }
    }

    public function update(BlogUpdateRequest $request,Blog $blog)
    {
        try
        {
            if($request->file('image') != null)
            {
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/blogs/'), $image_name);
                $path = asset('uploads/blogs/'.$image_name);
                $blog->image = $path;
            }
            $blog->title = $request->title;
            $blog->category_id = $request->category_id;
            $blog->content = $request->content;
            $blog->save();

            Alert::success('Blog başarıyla düzenlendi');
            return redirect()->route('blog.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e->errorInfo[2]);
            return back();
        }
    }

    public function destroy($blog)
    {
        try
        {
            Blog::where('id',$blog)->delete();

            Alert::success('Başarılı','İçerik silindi');
            return redirect()->route('blog.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e);
            return back();
        }
    }
}
