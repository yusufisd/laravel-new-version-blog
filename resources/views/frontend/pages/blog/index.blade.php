@extends('frontend.layout.master')
@section('content')
<main class="content">

    <!-- blog-area -->
    <section class="standard__blog mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" style="margin-top: 50px">

                        @foreach ($blogs as $blog)


                        <div class="col-md-4 mb-40">
                            <div class="standard__blog__post">
                                <div class="standard__blog__thumb">
                                    <a href="{{ route('blog.detail',$blog) }}"><img src="{{ $blog->image }}" style="width: 100%;height:200px;object-fit:cover" alt=""></a>
                                </div>
                                <div class="standard__blog__content">
                                    <h2 class="title"><a href="{{ route('blog.detail') }}">Best website traffice Booster with great tools.</a></h2>
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