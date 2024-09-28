<?php

use App\Http\Controllers\AuthController;
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