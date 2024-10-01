@extends('frontend.layout.master')
@section('content')
    <div style="margin-top: 400px; " class="content">
        <div style="width: 400px; margin:auto">
            <form action="{{ route('loginSubmit') }}" method="POST" class="contact__form">
                @csrf
                <h3 class="mb-40">Giriş Yap</h3>
                <div class="row">
                    <div class="col-md-12">
                        <input class="rounded-lg" name="email" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="rounded-lg" name="password" type="password" placeholder="Şifre">
                    </div>
                </div>
                <button type="submit" class="btn">Giriş Yap</button>
            </form>
        </div>
    </div>
@endsection
