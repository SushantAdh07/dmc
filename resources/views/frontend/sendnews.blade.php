@extends('frontend.frontend')
@section('news')
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-wrpp">
                        <h4 class="contactAddess-title text-center">
                            Send Us Your News </h4>
                        <div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('store.sendnews') }} " method="post" class="wpcf7-form init"
                                enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                                @csrf
                                <div style="display: none;">

                                </div>
                                <div class="main_section">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="contact-title">
                                                News Title *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap news_title"><input type="text"
                                                        name="send_news_title" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="News Title Here"></span>
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
                                                    <textarea name="send_news_details" cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                                        placeholder="News Details...."></textarea>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="contact-title">
                                                Name *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                        name="sendername" value="" size="40"
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
                                                        name="senderemail" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                                        aria-invalid="false" placeholder="Your Email"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-title">
                                            News Image *
                                        </div>
                                        <div class="contact-form">
                                            <span class="wpcf7-form-control-wrap news_image"><input type="file"
                                                    name="senderimage" size="40" class="wpcf7-form-control wpcf7-file"
                                                    accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv"
                                                    aria-invalid="false"></span>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-btn">
                                                <input type="submit" value="Submit Your News"
                                                    class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                    class="wpcf7-spinner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
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
