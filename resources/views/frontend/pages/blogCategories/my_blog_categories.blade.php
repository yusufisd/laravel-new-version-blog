@extends('frontend.layout.master')
@section('content')
    <main class="content">

        <!-- blog-area -->
        <section class="standard__blog mt-40">
            <div class="container">

                <a href="{{ route('blogCategory.create') }}">
                    <button class="btn btn-sm btn-info mb-40"> Blog Kategorisi Ekle</button>
                </a>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row mb-40">

                            @foreach ($categories as $category)
                                <div class="col-md-4 mb-40">
                                    <div class="standard__blog__post">
                                        <div class="standard__blog__thumb">
                                            <a href="{{ route('blogCategory.edit', $category) }}"
                                                class="blog__link col-md-6 border border-solid">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a onclick="remove({{ $category->id }})" class="col-md-6 rounded-full border border-solid p-2"
                                                style="border-radius: 100%;cursor: pointer;">
                                                <i class="far fa-trash-alt" style="color: red;"></i>
                                            </a>
                                        </div>
                                        <div class="standard__blog__content">
                                            <h2 class="title"><a
                                                    href="{{ route('blog.detail') }}">{{ $category->title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="w-full">
                            <div class="m-auto" style="width:100px">
                                {{ $categories->links('pagination::bootstrap-4') }}
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
                text: "Kategoriye ait içerikler de silinecek!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Evet"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('backend.blogCategory.destroy') }}/"+id;
                }
            });
        }
    </script>
@endpush
