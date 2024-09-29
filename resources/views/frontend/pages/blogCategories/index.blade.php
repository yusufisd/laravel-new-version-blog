@extends('frontend.layout.master')
@section('content')
<main>

    <!-- blog-area -->
    <section class="standard__blog mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-md-4 mb-40">
                            <div class="standard__blog__post">
                                <div class="standard__blog__content">
                                    <h2 class="title"><a href="{{ route('blog.detail') }}">Best website traffice </a></h2>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="pagination-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- blog-area-end -->


</main>
@endsection