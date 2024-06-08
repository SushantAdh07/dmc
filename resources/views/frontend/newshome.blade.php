@php
    $latestNews = App\Models\News::orderBy('created_at', 'DESC')->limit(5)->get();
    $ytlinks = App\Models\Youtube::first();
@endphp

@extends('frontend.frontend')
@section('news')
    <div class="main_website">





        <div class="main-section" style="overflow: hidden;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                    </div>
                </div>
            </div>

            <section class="themesBazar_section_one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="themesbazar_led_active owl-carousel owl-loaded owl-drag">
                                        @php
                                            $top_slider = App\Models\News::where('status', 1)
                                                ->orderBy('created_at', 'DESC')
                                                ->where('top_slider', 1)
                                                ->limit(3)
                                                ->get();
                                        @endphp


                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(-1578px, 0px, 0px); transition: all 1s ease 0s; width: 3684px;">

                                                @foreach ($top_slider as $item)
                                                    <div class="owl-item active"
                                                        style="width: 506.25px; margin-right: 20px;">
                                                        <div class="secOne_newsContent">
                                                            <div class="sec-one-image">
                                                                <a href="{{ route('details', $item->id) }} "><img
                                                                        class="lazyload"
                                                                        src="{{ asset($item->image) }}"></a>
                                                                <h6 class="sec-small-cat">
                                                                    <a href=" ">
                                                                        {{ $item->created_at }}
                                                                    </a>
                                                                </h6>
                                                                <h1 class="sec-one-title">
                                                                    <a href=" ">{{ $item->news_title }} </a>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                                    class="fa-solid fa-angle-left"></i></button>
                                            <button type="button" role="presentation" class="owl-next"><i
                                                    class="fa-solid fa-angle-right"></i></button>
                                        </div>
                                        <div class="owl-dots"><button role="button"
                                                class="owl-dot"><span></span></button><button role="button"
                                                class="owl-dot active"><span></span></button><button role="button"
                                                class="owl-dot"><span></span></button></div>
                                    </div>


                                </div>
                                <div class="col-lg-5 col-md-5">
                                    @php
                                        $three = App\Models\News::where('status', 1)
                                            ->where('first_three', 1)
                                            ->limit(3)
                                            ->get();
                                    @endphp

                                    @foreach ($three as $item)
                                        <div class="secOne-smallItem">
                                            <div class="secOne-smallImg">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ $item->image }}"></a>
                                                <h5 class="secOne_smallTitle">
                                                    <a href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                            <div class="sec-one-item2">
                                @php
                                    $nine = App\Models\News::where('status', 1)
                                        ->where('first_nine', 1)
                                        ->limit(9)
                                        ->get();
                                @endphp
                                <div class="row">
                                    @foreach ($nine as $item)
                                        <div class="themesBazar-3 themesBazar-m2">

                                            <div class="sec-one-wrpp2">

                                                <div class="secOne-news">
                                                    <div class="secOne-image2">
                                                        <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                                src="{{ asset($item->image) }}"></a>
                                                    </div>
                                                    <h4 class="secOne-title2">
                                                        <a
                                                            href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                    </h4>
                                                </div>
                                                <div class="cat-meta">
                                                    <a href=" "> <i class="lar la-newspaper"></i>
                                                        {{ $item->created_at }}
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach







                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="live-item">
                                <div class="live_title">
                                    <a href="">LIVE TV</a>
                                    <div class="themesBazar"></div>
                                </div>
                                <div class="popup-wrpp">
                                    <div class="live_image">

                                        <img width="700" height="400"
                                            src="https://i.ytimg.com/vi/NU16KUlJgcU/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDXR8bfLyhJM3FGO6rsp1u8tdHlQw"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy">


                                        <div data-mfp-src="#mymodal" class="live-icon modal-live"> <i
                                                class="las la-play"></i> </div>

                                    </div>
                                    <div class="live-popup">
                                        <div id="mymodal" class="mfp-hide" role="dialog" aria-labelledby="modal-titles"
                                            aria-describedby="modal-contents">
                                            <div id="modal-contents">
                                                <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                                    <iframe class="embed-responsive-item" src="{{ $ytlinks->ytlink }}"
                                                        allowfullscreen="allowfullscreen" width="100%"
                                                        height="400px"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="themesBazar_widget">
                                <h3 style="margin-top:5px"> OLD NEWS </h3>
                            </div>
                            <form class="wordpress-date" action="{{ route('search-by-date') }} " method="post">
                                @csrf
                                <input type="date" id="wordpress" placeholder="Select Date" autocomplete="off"
                                    name="date" class="hasDatepicker">
                                <input type="submit" value="Search">
                            </form>
                            <div class="recentPopular">
                                <ul class="nav nav-pills" id="recentPopular-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active" id="recent-tab" data-bs-toggle="pill"
                                            data-bs-target="#recent" role="tab" aria-controls="recent"
                                            aria-selected="false"> LATEST </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="popular-tab" data-bs-toggle="pill"
                                            data-bs-target="#popular" role="tab" aria-controls="popular"
                                            aria-selected="false"> POPULAR </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane active show  fade" id="recent" role="tabpanel"
                                    aria-labelledby="recent">
                                    <div class="news-titletab">
                                        @foreach ($latestNews as $item)
                                            <div class="tab-image tab-border">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ asset($item->image) }}"></a>
                                                <a href="{{ route('details', $item->id) }} " class="tab-icon"><i
                                                        class="la la-play"></i></a>
                                                <h4 class="tab_hadding"><a
                                                        href="{{ route('details', $item->id) }}">{{ $item->news_title }}
                                                    </a></h4>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular">
                                    @php

                                        $news = App\Models\News::orderBy('view_count', 'DESC')->limit(4)->get();
                                    @endphp
                                    <div class="news-titletab">

                                        @foreach ($news as $item)
                                            <div class="tab-image tab-border">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ asset($item->image) }}"></a>
                                                <a href="{{ route('details', $item->id) }} " class="tab-icon"><i
                                                        class="la la-play"></i></a>
                                                <h4 class="tab_hadding"><a
                                                        href="{{ route('details', $item->id) }} ">{{ $item->news_title }}
                                                    </a>
                                                </h4>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>


            <section class="section-seven">
                <div class="container">

                    <h2 class="themesBazar_cat01"> <a href="">{{ $skip_cat_0->category_name }}</a> <span> <a
                                href="{{ route('category.page', $skip_cat_0->id) }} "> More <i
                                    class="las la-arrow-circle-right"></i> </a></span> </h2>

                    <div class="secSecven-color">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                @foreach ($skip_news_0 as $item)
                                    @if ($loop->index < 1)
                                        <div class="black-bg">
                                            <div class="secSeven-image">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ $item->image }}"></a>
                                                <a href="{{ route('details', $item->id) }} " class="video-icon6"><i
                                                        class="la la-play"></i></a>
                                            </div>
                                            <h6 class="secSeven-title">
                                                <a href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                            </h6>
                                            <div class="secSeven-details">
                                                <a href="{{ route('details', $item->id) }}"> Read News</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-lg-7 col-md-7">

                                <div class="row">
                                    @foreach ($skip_news_0 as $item)
                                        @if ($loop->index > 0)
                                            <div class="themesBazar-2 themesBazar-m2">

                                                <div class="secSeven-wrpp ">
                                                    <div class="secSeven-image2">
                                                        <a href="{{ route('details', $item->id) }} "><img
                                                                class="lazyload" src="{{ $item->image }}"></a>
                                                        <h5 class="secSeven-title2">
                                                            <a
                                                                href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                        </h5>
                                                    </div>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-five">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">

                            <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i>
                                    {{ $skip_cat_3->category_name }} </a> </h2>

                            <div class="white-bg">
                                @foreach ($skip_news_3 as $item)
                                    @if ($loop->index > 1)
                                        <div class="secFive-image">
                                            <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                    src="{{ asset($item->image) }}"></a>
                                            <div class="secFive-title">
                                                <a href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="secFive-smallItem">
                                    @foreach ($skip_news_3 as $item)
                                        @if ($loop->index < 3)
                                            <div class="secFive-smallImg">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ asset($item->image) }}"></a>
                                                <h5 class="secFive_title2">
                                                    <a
                                                        href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                </h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">

                            <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i>
                                    {{ $skip_cat_1->category_name }} </a> </h2>

                            <div class="white-bg">
                                @foreach ($skip_news_1 as $item)
                                    @if ($loop->index < 1)
                                        <div class="secFive-image">
                                            <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                    src="{{ asset($item->image) }}"></a>
                                            <div class="secFive-title">
                                                <a href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="secFive-smallItem">
                                    @foreach ($skip_news_1 as $item)
                                        @if ($loop->index > 0)
                                            <div class="secFive-smallImg">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ asset($item->image) }}"></a>
                                                <h5 class="secFive_title2">
                                                    <a
                                                        href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                </h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">

                            <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i>
                                    {{ $skip_cat_2->category_name }} </a> </h2>

                            <div class="white-bg">
                                @foreach ($skip_news_2 as $item)
                                    @if ($loop->index < 1)
                                        <div class="secFive-image">
                                            <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                    src="{{ asset($item->image) }}"></a>
                                            <div class="secFive-title">
                                                <a href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="secFive-smallItem">
                                    @foreach ($skip_news_2 as $item)
                                        @if ($loop->index > 0)
                                            <div class="secFive-smallImg">
                                                <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                        src="{{ asset($item->image) }}"></a>
                                                <h5 class="secFive_title2">
                                                    <a
                                                        href="{{ route('details', $item->id) }} ">{{ $item->news_title }}</a>
                                                </h5>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>







        </div>



    </div>
    <style>
        .main_website {
            font-family: "Ek Mukta";

        }
    </style>
@endsection
