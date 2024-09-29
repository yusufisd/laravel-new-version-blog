<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.blog.create');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('index');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('giris-yap','login')->name('login');
    Route::post('giris-yap','loginSubmit')->name('loginSubmit');
    Route::get('kayit-ol','register')->name('register');
    Route::post('kayit-ol','registerSubmit')->name('registerSubmit');
    Route::get('cikis-yap','logout')->name('logout');
});

Route::controller(BlogController::class)->prefix('blog/')->name('blog.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/liste','myBlogs')->name('myList');
    Route::get('/detay','detail')->name('detail');
    Route::get('/duzenle','edit')->name('edit');
    Route::get('/ekle','create')->name('create');
});


Route::controller(BlogCategoryController::class)->prefix('blog-kategori/')->name('blogCategory.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/liste','myBlogCategories')->name('myList');
    Route::get('/ekle','create')->name('create');

});