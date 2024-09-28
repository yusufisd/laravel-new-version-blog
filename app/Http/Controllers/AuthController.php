<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorsCreateRequest;
use App\Models\Authors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
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
        try{

            $author = new Authors();
            $author->name = $request->name;
            $author->surname = $request->surname;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $author->password = Hash::make($request->password);
            $author->save();

            Alert::success('Kayıt Başarılı');
            

        }catch(Exception $e)
        {

        }
    }
}
