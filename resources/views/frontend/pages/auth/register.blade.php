@extends('frontend.layout.master')
@section('content')
    <div style="margin-top: 400px;  ">
        <div style="width: 400px; margin:auto">
            <form action="#" class="contact__form">
                <h3 class="mb-40">Kayıt Ol</h3>
                <div class="row">
                    <div class="col-md-12">
                        <input class="rounded-lg" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="rounded-lg" type="password" placeholder="Şifre">
                    </div>
                </div>
                <button type="submit" class="btn">Kayıt Ol</button>
            </form>
        </div>
    </div>
@endsection
