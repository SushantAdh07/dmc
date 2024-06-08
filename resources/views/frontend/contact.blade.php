@extends('frontend.frontend')
@section('news')
    <div class="container" aria-hidden="true">

        <div class="col-lg-4 col-md-4">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

    </div>

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-wrpp">
                        <h4 class="contactAddess-title text-center">
                            Contact Form </h4>
                        <div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('store.contact') }} " method="post" class="wpcf7-form init"
                                enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                                @csrf
                                <div style="display: none;">

                                </div>
                                <div class="main_section">


                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="contact-title">
                                                Name *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                        name="contactname" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Your Name"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact-title">
                                                Email *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                        name="contactemail" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                                        aria-invalid="false" placeholder="Your Email"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="contact-title">
                                                News Details *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap news_details">
                                                    <textarea name="contacttext" cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                                        placeholder="News Details...."></textarea>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-btn">
                                                <input type="submit" value="Submit"
                                                    class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                    class="wpcf7-spinner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    </body>

    </html>
@endsection
