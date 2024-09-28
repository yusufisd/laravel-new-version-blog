@extends('frontend.layout.master')
@section('content')
    <div style="margin-top: 400px;  ">
        <div style="width: 800px; margin:auto">
            <form action="{{ route('registerSubmit') }}" method="POST" class="contact__form">
                @csrf
                <h3 class="mb-40">Kayıt Ol</h3>
                
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <input class="rounded-lg" name="name" type="text" value="{{ old('name') }}" placeholder="Ad">
                    </div>
                    <div class="col-md-6">
                        <input class="rounded-lg" name="surname" type="text" value="{{ old('surname') }}" placeholder="Soyad">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="rounded-lg" name="phone" type="number" value="{{ old('phone') }}" placeholder="555 555 55 55">
                    </div>
                    <div class="col-md-6">
                        <input class="rounded-lg" name="email" type="email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="rounded-lg" name="password" type="password" placeholder="Şifre">
                    </div>
                    <div class="col-md-6">
                        <input class="rounded-lg" name="confirmation" type="password" placeholder="Şifre Tekrar">
                    </div>
                </div>
                <button type="submit" class="btn">Kayıt Ol</button>
            </form>
        </div>
    </div>
@endsection
