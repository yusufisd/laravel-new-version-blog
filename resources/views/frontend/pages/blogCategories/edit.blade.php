@extends('frontend.layout.master')
@section('content')
<main class="content" style="margin-top: 350px;">
    <div class="contact-area">
        <div class="container">
            <form action="{{ route('backend.blogCategory.update',$blogCategory) }}" method="POST" class="contact__form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="title" value="{{ $blogCategory->title }}" placeholder="Kategori ismi">
                    </div>
                </div>
                <button type="submit" class="btn">Kaydet</button>
            </form>
        </div>
    </div>
</main>
@endsection