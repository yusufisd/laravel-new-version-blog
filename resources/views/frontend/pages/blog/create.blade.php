@extends('frontend.layout.master')
@section('content')


<main style="margin-top: 350px">
    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">
            <form action="{{ route('backend.blog.store') }}" method="POST" enctype="multipart/form-data" class="contact__form">
                @csrf
                <div class="row mb-40">
                    <div class="col-md-12">
                        <input type="text" name="title" placeholder="Başlık">
                    </div>
                    <div class="col-md-12 mb-30">
                        <select name="category_id" class="form-select" id="">
                            <option value="">Kategori seçin</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                    <div class="col-md-12">
                        <textarea name="content" class="editor" id="editor" cols="30" rows="30"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn">Kaydet</button>
            </form>
        </div>
    </div>
    <!-- contact-area-end -->


</main>
@endsection
@push('script')
<script>
    ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>
@endpush