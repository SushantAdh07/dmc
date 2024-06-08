@extends('frontend.frontend')
@section('news')
    <div class="contact-page">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-wrpp">
                        <h4 class="contactAddess-title text-center">
                            Login </h4>
                        <div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="wpcf7-form init"
                                enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                                @csrf

                                <div style="display: none;">

                                </div>

                                <div class="main_section">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="contact-title ">
                                                Email *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap sub_title">
                                                    <input id="email" class="block mt-1 w-full" type="email"
                                                        name="email" value="" size="40" aria-invalid="false"
                                                        placeholder="Email"></span>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-sm-12">
                                            <div class="contact-title ">
                                                Password *
                                            </div>
                                            <div class="contact-form">
                                                <span class="wpcf7-form-control-wrap sub_title"><input id="password"
                                                        type="password" name="password" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                        placeholder="Password"></span>
                                            </div>
                                        </div>



                                    </div>




                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-btn">
                                                <input type="submit" value="Login Now"
                                                    class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                    class="wpcf7-spinner"></span>
                                            </div>
                                        </div>
                                        <a class="mt-3" href="{{ route('register') }}">Don't have a account yet? Register
                                            here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
