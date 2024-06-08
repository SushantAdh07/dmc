@php
    $latestNews = App\Models\News::orderBy('created_at', 'DESC')->limit(5)->get();
@endphp

@extends('frontend.frontend')
@section('news')

    <body class="home blog" oncontextmenu="return true" data-new-gr-c-s-check-loaded="14.1078.0" data-gr-ext-installed="">

        <div class="main_website">
            <div class="archive-page1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="archive-topAdd">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="rachive-info-cats">
                                <a href=" "><i class="las la-home"></i> </a> <i class="las la-chevron-right"></i>
                                {{ $category->category_name }}
                            </div>
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    @foreach ($news as $item)
                                        @if ($loop->index < 1)
                                            <div class="archive-shadow arch_margin">

                                                <div class="archive1_image">

                                                    <a href="{{ route('details', $item->id) }} "><img class="lazyload"
                                                            src="{{ asset($item->image) }}"></a>

                                                    <div class="archive1-meta">
                                                        <a href=" "><i class="la la-tags"> </i>

                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="archive1-padding">

                                                    <div class="archive1-title"><a
                                                            href=" ">{{ $item->news_title }}</a>
                                                    </div>
                                                    <div class="content-details"><a
                                                            href="{{ route('details', $item->id) }} ">
                                                            Read More </a>
                                                    </div>

                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                </div>


                            </div>
                            <div class="row">
                                @foreach ($news as $item)
                                    @if ($loop->index > 0)
                                        <div class="archive1-custom-col-3">
                                            <div class="archive-item-wrpp2">
                                                <div class="archive-shadow arch_margin">
                                                    <div class="archive1_image2">
                                                        <a href="{{ route('details', $item->id) }}"><img class="lazyload"
                                                                src="{{ asset($item->image) }}"></a>
                                                        <div class="archive1-meta">
                                                            <a href="{{ route('details', $item->id) }}"><i
                                                                    class="la la-tags"> </i>
                                                                {{ $item->created_at }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="archive1-padding">
                                                        <div class="archive1-title2"><a
                                                                href="{{ route('details', $item->id) }}">{{ $item->news_title }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <span aria-current="page" class="page-numbers current">1</span>
                                    <a class="page-numbers" href=" ">2</a>
                                    <a class="next page-numbers" href=" ">Next »</a>
                                </div>
                            </div>

                            <br><br>

                            <div class="row">
                                <div class="col-lg-12 col-md-12"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="sitebar-fixd" style="position: sticky; top: 0;">
                                <div class="siteber-add">
                                    <div class="themesBazar_widget">
                                        <div class="textwidget">
                                            <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                                                    src="assets/images/biggapon-1.gif" alt="" width="100%"
                                                    height="auto">
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="singlePopular">

                                    <ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link active" data-bs-toggle="pill"
                                                data-bs-target="#archiveTab_recent" role="tab"
                                                aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular"
                                                role="tab" aria-controls="archivePopulars" aria-selected="false">
                                                POPULAR </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContentarchive">
                                    <div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel"
                                        aria-labelledby="archiveRecent">

                                        <div class="archiveTab-sibearNews">

                                            @foreach ($latestNews as $item)
                                                <div class="archive-tabWrpp archiveTab-border">

                                                    <div class="archiveTab-image ">
                                                        <a href=" "><img class="lazyload"
                                                                src="{{ asset($item->image) }}"></a>
                                                    </div>
                                                    <a href=" " class="archiveTab-icon2"><i
                                                            class="la la-play"></i></a>
                                                    <h4 class="archiveTab_hadding"><a
                                                            href="{{ route('details', $item->id) }} ">{{ $item->news_title }}
                                                        </a>
                                                    </h4>
                                                    <div class="archive-conut">
                                                        1
                                                    </div>


                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="archiveTab_popular" role="tabpanel"
                                        aria-labelledby="archivePopulars">
                                        <div class="archiveTab-sibearNews">
                                            @php

                                                $news = App\Models\News::orderBy('view_count', 'DESC')->limit(4)->get();
                                            @endphp




                                            @foreach ($news as $item)
                                                <div class="archive-tabWrpp archiveTab-border">
                                                    <div class="archiveTab-image ">
                                                        <a href=" "><img class="lazyload"
                                                                src={{ asset($item->image) }}></a>
                                                    </div>
                                                    <a href=" " class="archiveTab-icon2"><i
                                                            class="la la-play"></i></a>
                                                    <h4 class="archiveTab_hadding"><a
                                                            href=" ">{{ $item->news_title }}</a>
                                                    </h4>
                                                    <div class="archive-conut">
                                                        {{ $item->view_count }}
                                                    </div>

                                                </div>
                                            @endforeach




                                        </div>
                                    </div>
                                </div>
                                <div class="siteber-add2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>


    </body>
@endsection
