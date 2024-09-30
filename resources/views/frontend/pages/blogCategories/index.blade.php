@extends('frontend.layout.master')
@section('content')
<main class="content">

    <!-- blog-area -->
    <section class="standard__blog mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" style="margin-top:200px">

                        @foreach ($categories as $category)


                        <div class="col-md-4 mb-40">
                            <div class="standard__blog__post">
                                <div class="standard__blog__content">
                                    <h2 class="title"><a href="{{ route('blog.detail') }}">{{ $category->title }}</a></h2>
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