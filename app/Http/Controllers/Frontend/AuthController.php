<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\AuthorsCreateRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Authors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController
{
    public function login()
    {
        return view('frontend.pages.auth.login');
    }

    public function register()
    {
        return view('frontend.pages.auth.register');
    }

    public function registerSubmit(AuthorsCreateRequest $request)
    {
        try {
            $author = new Authors();
            $author->name = $request->name;
            $author->surname = $request->surname;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $author->password = Hash::make($request->password);
            $author->save();

            Alert::success('Kayıt Başarılı');
            return redirect()->route('login');
        } catch (Exception $e) {
        }
    }

    public function loginSubmit(LoginRequest $request)
    {
        try {
            if (Authors::where('email', $request->email)->first() != null) {
                if (Auth::guard('authors')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    Alert::success('Giriş Başarılı');
                    return redirect()->route('index');
                } else {
                    Alert::error('Kullanıcı adı veya parola yanlış');
                    return back();
                }
            } else {
                Alert::error('Böyle bir kullanıcı yok');
                return back();
            }
        } catch (Exception $e) {
        }
    }

    public function logout()
    {
        try {
            $logout = Auth::guard('authors')->logout();
            if($logout)
            {
                Alert::success('Çıkış Başarılı');
                return redirect()->route('index');
            }
        } catch (Exception $e) {
        }
    }
}
