@extends('frontend.layout.master')
@section('content')
<main style="margin-top: 80px">
    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="{{ $blog->image }}" style="width: 850px;height:430px; object-fit:cover" alt="">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->translatedFormat('d M Y') }}</li>
                                <li><a style="text-transform: capitalize" href="#"><span style="font: bold!important">Kategori:</span> {{ $blog->category->title }}</a></li>
                            </ul>
                            <h2 class="title">{{ $blog->title }}</h2>
                            <div>
                                {!! $blog->content !!}
                            </div>
                        </div>
                        <div class="blog__next__prev">
                            <div class="row justify-content-between">

                                @if($previousBlog != null)
                                <div class="col-xl-5 col-md-6">
                                    <div class="blog__next__prev__item">
                                        <h4 class="title">Önceki Blog</h4>
                                        <div class="blog__next__prev__post">
                                            <div class="blog__next__prev__thumb">
                                                <a href="{{ route('blog.detail',$previousBlog) }}"><img src="{{ $previousBlog->image }}" style="width: 104px;height:68px;object-fit:cover"  alt=""></a>
                                            </div>
                                            <div class="blog__next__prev__content">
                                                <h5 class="title"><a href="blog-details.html">{{ $previousBlog->title }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($nextBlog != null)
                                <div class="col-xl-5 col-md-6">
                                    <div class="blog__next__prev__item next_post text-end">
                                        <h4 class="title">Sonraki Blog</h4>
                                        <div class="blog__next__prev__post">
                                            <div class="blog__next__prev__thumb">
                                                <a href="{{ route('blog.detail',$nextBlog) }}"><img src="{{ $nextBlog->image }}" style="width: 104px;height:68px;object-fit:cover" alt=""></a>
                                            </div>
                                            <div class="blog__next__prev__content">
                                                <h5 class="title"><a href="{{ route('blog.detail',$nextBlog) }}">{{ $nextBlog->title }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        
                        <div class="widget">
                            <h4 class="widget-title">Diğerleri</h4>
                            <ul class="rc__post">

                                @foreach ($otherBlogs as $blog)
                                    

                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="blog-details.html"><img src="{{ $blog->image }}" style="width: 90px;height:90px; object-fit:cover" alt=""></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="blog-details.html">{{ $blog->title }}</a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->translatedFormat('d M Y') }}</span>
                                    </div>
                                </li>

                                @endforeach


                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Kategoriler</h4>
                            <ul class="sidebar__cat">

                                @foreach ($categories as $category)
                                    <li class="sidebar__cat__item"><a href="{{ route('blogCategory.detail',$category) }}">{{ $category->title }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->


</main>
@endsection