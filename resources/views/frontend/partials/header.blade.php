<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="custom-container container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="{{ route('index') }}" class="logo__black"><img src="{{ asset('assets/img/logo/logo_black.png') }}"
                                        alt=""></a>
                                <a href="{{ route('index') }}" class="logo__white"><img src="{{ asset('assets/img/logo/logo_white.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{ Route::is('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Anasayfa</a></li>
                                    <li class="{{ Route::is('blogCategory.index') ? 'active' : '' }}"><a href="{{ route('blogCategory.index') }}">Kategoriler</a></li>
                                    <li class="{{ Route::is('blog.index') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">Bloglar</a></li>
                                </ul>
                            </div>
                            @if (Auth::guard('authors')->user())
                                <div class="row gap-3" style="width: 400px">
                                    <a href="{{ route('blog.myList') }}" class=" col-md-4">
                                        <div class="border p-2" style="{{ Route::is('blog.myList') ? 'border-color: blue!important' : '' }}" >
                                            <p class="m-auto">Bloglarım</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('blogCategory.myList') }}" class="col-md-5">
                                        <div class="border p-2" style="{{ Route::is('blogCategory.myList') ? 'border-color: blue!important' : '' }}">
                                            <p class="m-auto">Kategorilerim</p>
                                        </div>
                                    </a>
                                    <div class="off col-md-2">
                                        <a href="{{ route('logout') }}">
                                            <img style="width: 90px; margin:auto" src="{{ asset('assets/off.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="header__btn btn-sm d-none d-md-block">
                                            <a href="{{ route('register') }}" class="btn">Kayıt</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="header__btn btn-sm d-none d-md-block">
                                            <a href="{{ route('login') }}" class="btn">Giriş</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png"
                                        alt=""></a>
                                <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png"
                                        alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
