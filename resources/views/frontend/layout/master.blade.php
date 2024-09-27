<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rasalina - Personal Portfolio HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">

        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css">
        <style>
            .main-container {
                width: 795px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('frontend.partials.header')
        <!-- header-area-end -->

        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->

        <!-- Footer-area -->
        @include('frontend.partials.footer')
        <!-- Footer-area-end -->


        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.1/"
                }
            }
        </script>
        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Paragraph,
                Bold,
                Italic,
                Font
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                    toolbar: [
						'undo', 'redo', '|', 'bold', 'italic', '|',
						'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
         <script>
            window.onload = function() {
                if ( window.location.protocol === "file:" ) {
                    alert( "This sample requires an HTTP server. Please serve this file with a web server." );
                }
            };
    </script>

		<!-- JS here -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/element-in-view.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
