@extends('frontend.layout.master')
@section('content')
    <main>

        <!-- blog-area -->
        <section class="standard__blog mt-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

                            @foreach ($blogs as $blog)
                                <div class="col-md-6 mb-80">
                                    <div class="standard__blog__post">
                                        <div class="mb-2">
                                            <a href="{{ route('blog.detail',$blog) }}"><img src="{{ $blog->image }}"
                                                    style="width: 100%;height:220px;object-fit:cover" alt=""></a>
                                        </div>
                                        <div class="standard__blog__content">
                                            <div class="row">
                                                <div class="col-md-6"><i
                                                        class="fal fa-calendar-alt"></i>&nbsp;&nbsp;{{ $blog->created_at->translatedFormat('d M Y') }}
                                                </div>
                                                <div class="col-md-6"> test</div>
                                            </div>
                                            <h2 class="title"><a href="{{ route('blog.detail',$blog) }}">{{ $blog->title }}</a></h2>

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
                    <div class="col-lg-4">
                        <div class="col">

                            <aside class="blog__sidebar mb-80">
                                <div class="widget">
                                    <h4 class="widget-title">Kategoriler</h4>
                                    <ul class="sidebar__cat">
                                        @foreach ($categories as $category)
                                            <li class="sidebar__cat__item"><a href="{{ route('blogCategory.detail',$category->id) }}">{{ $category->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>

                            <aside class="blog__sidebar">
                                <div class="widget">
                                    <h4 class="widget-title">Abone Ol</h4>
                                    <form action="" autocomplete="off" method="POST">
                                        @csrf
                                        <div class="row">
                                            <input type="email" class="form-control mb-20"  name="email" placeholder="Email">
                                            <input type="submit" class="btn btn-primary" name="" id="">
                                        </div>
                                    </form>

                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


    </main>
@endsection
