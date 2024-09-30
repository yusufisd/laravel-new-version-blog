@extends('frontend.layout.master')
@section('content')
    <main class="content">

        <!-- blog-area -->
        <section class="standard__blog mt-40">
            <div class="container">

                <a href="{{ route('blog.create') }}">
                    <button class="btn btn-sm btn-info mb-40"> Blog Ekle</button>
                </a>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            @foreach ($blogs as $blog)
                                <div class="col-md-4 mb-40">
                                    <div class="standard__blog__post">
                                        <div class="standard__blog__thumb">
                                            <a href="{{ route('blog.detail') }}"><img src="{{ $blog->image }}"
                                                    style="width: 100%;height:200px;object-fit:cover" alt=""></a>
                                            <a href="{{ route('blog.edit', $blog) }}" class="blog__link"><i
                                                    class="far fa-edit"></i></a>
                                            <a onclick="remove({{ $blog->id }})"
                                                style="border:solid; border-radius:100%;border-color:whitesmoke; padding:7%;background-color:white; cursor: pointer;"><i
                                                    class="far fa-trash-alt" style="color: red;"></i></a>
                                        </div>
                                        <div class="standard__blog__content">
                                            <h2 class="title"><a href="{{ route('blog.detail') }}">{{ $blog->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <div class="w-full">
                            <div class="m-auto" style="width:100px">
                                {{ $blogs->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- blog-area-end -->
    </main>
@endsection
@push('script')
    <script>
        function remove(id) {
            Swal.fire({
                title: "Emin misiniz?",
                text: "Blog silinecek!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Evet"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('backend.blog.destroy') }}/" + id;
                }
            });
        }
    </script>
@endpush
