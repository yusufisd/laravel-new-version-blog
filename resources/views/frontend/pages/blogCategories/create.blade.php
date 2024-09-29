@extends('frontend.layout.master')
@section('content')


<main style="margin-top: 350px">
    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">
            <form action="#" class="contact__form">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your name*">
                    </div>
                    <div class="col-md-6">
                        <input type="email" placeholder="Enter your mail*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your subject*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Your Budget*">
                    </div>
                </div>
                <textarea name="message" id="editor" placeholder="Enter your massage*"></textarea>
                <button type="submit" class="btn">send massage</button>
            </form>
        </div>
    </div>
    <!-- contact-area-end -->


</main>
@endsection