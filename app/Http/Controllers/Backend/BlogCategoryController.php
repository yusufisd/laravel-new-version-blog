<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\BlogCategoryStoreRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BlogCategoryController
{
    public function store(BlogCategoryStoreRequest $request)
    {
        try
        {
            $category = new BlogCategory();
            $category->title = $request->title;
            $category->author_id = Auth::guard('authors')->user()->id;
            $category->save();

            Alert::success('Kategori başarıyla eklendi');
            return redirect()->route('blogCategory.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e);
            return back();
        }
    }

    public function update(BlogCategoryUpdateRequest $request,BlogCategory $blogCategory)
    {
        try
        {
            $blogCategory->title = $request->title;
            $blogCategory->author_id = Auth::guard('authors')->user()->id;
            $blogCategory->save();

            Alert::success('Kategori başarıyla düzenlendi');
            return redirect()->route('blogCategory.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e->errorInfo[2]);
            return back();
        }
    }

    public function destroy($blogCategory)
    {
        try
        {
            Blog::where('category_id',$blogCategory)->delete();
            BlogCategory::where('id',$blogCategory)->delete();

            Alert::success('Başarılı','Kategori içerikleriyle beraber silindi');
            return redirect()->route('blogCategory.myList');
        }catch(Exception $e)
        {
            Alert::error('Hata',$e);
            return back();
        }
    }
}
