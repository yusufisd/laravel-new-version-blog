<?php

use App\Http\Controllers\Backend\BlogCategoryController as BackendBlogCategoryController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\Backend\SubscribeController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogCategoryController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('index');

// AUTH FRONTEND İŞLEMLERİ
Route::controller(AuthController::class)->group(function(){
    Route::get('giris-yap','login')->name('login');
    Route::post('giris-yap','loginSubmit')->name('loginSubmit');
    Route::get('kayit-ol','register')->name('register');
    Route::post('kayit-ol','registerSubmit')->name('registerSubmit');
    Route::get('cikis-yap','logout')->name('logout');
});

// BLOG FRONTEND İŞLEMLERİ
Route::controller(BlogController::class)->prefix('blog/')->name('blog.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/detay/{blog?}','detail')->name('detail');
});

// BLOG KATEGORİ FRONTEND İŞLEMLERİ
Route::controller(BlogCategoryController::class)->prefix('blog-kategori/')->name('blogCategory.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/detay/{id?}','detail')->name('detail');

});

// EKLE - DUZENLE AUTH CHECK
Route::middleware('auth_check')->group(function(){

    // BLOG KATEGORİ FRONTEND İŞLEMLERİ
    Route::controller(BlogCategoryController::class)->prefix('blog-kategori/')->name('blogCategory.')->group(function(){
        Route::get('/ekle','create')->name('create');
        Route::get('/liste','myBlogCategories')->name('myList');
        Route::get('/duzenle/{blogCategory}','edit')->name('edit');
    });
    // BLOG FRONTEND İŞLEMLERİ
    Route::controller(BlogController::class)->prefix('blog/')->name('blog.')->group(function(){
        Route::get('/duzenle/{blog}','edit')->name('edit');
        Route::get('/ekle','create')->name('create');
        Route::get('/liste','myBlogs')->name('myList');
    });
});

// BACKEND İŞLEMLERİ
Route::middleware('auth_check')->prefix('backend')->name('backend.')->group(function(){

    // BLOG KATEGORİ BACKEND İŞLEMLERİ
    Route::controller(BackendBlogCategoryController::class)->prefix('blog-kategori')->name('blogCategory.')->group(function(){
        Route::post('/ekle','store')->name('store');
        Route::post('/duzenle/{blogCategory?}','update')->name('update');
        Route::get('/sil/{blogCategory?}','destroy')->name('destroy');
    });

    // BLOG BACKEND İŞLEMLERİ
    Route::controller(BackendBlogController::class)->prefix('blog')->name('blog.')->group(function(){
        Route::post('/ekle','store')->name('store');
        Route::post('/duzenle/{blog?}','update')->name('update');
        Route::get('/sil/{blog?}','destroy')->name('destroy');
    });
});

// SUBSCRİBER İŞLEMİ
Route::post('/abone-ol',[SubscribeController::class,'subscribeSubmit'])->name('subscribe');
