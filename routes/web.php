<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.blog.create');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('giris-yap','login')->name('login');
    Route::get('kayit-ol','register')->name('register');
    Route::post('kayit-ol','registerSubmit')->name('registerSubmit');
});