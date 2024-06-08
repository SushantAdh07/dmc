@php
    $latestNews = App\Models\News::orderBy('created_at', 'DESC')->limit(5)->get();
@endphp

@extends('frontend.frontend')
@section('news')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <div class="single-add">
                </div>

                <div class="single-cat-info">
                    <div class="single-home">
                        <i class="la la-home"> </i><a href=" "> HOME </a>
                    </div>
                    <div class="single-cats">
                        <i class="la la-bars"></i> <a href=" " rel="category tag">{{ $news->category_name }}</a>
                    </div>
                </div>

                <h1 class="single-page-title">{{ $news->news_title }}</h1>
                <div class="row g-2">

                    <div class="col-lg-11 col-md-10">
                        <div class="reportar-title">
                            {{ $user->name }}
                        </div>
                        <div class="viwe-count">
                            <ul>
                                <li><i class="la la-clock-o"></i> Updated
                                    {{ $news->created_at }}
                                </li>
                                <li>
                                    @if (auth()->check() && auth()->user()->role === 'admin')
                                        <i class="la la-eye">{{ $news->view_count }}</i>
                                    @endif



                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="single-page-add2">
                    <div class="themesBazar_widget">
                        <div class="textwidget">
                            <p><img loading="lazy" class="aligncenter size-full wp-image-74" src="{{ asset($news->image) }}"
                                    alt="" width="100%" height="auto"></p>
                        </div>
                    </div>
                </div>
                <div class="single-details">
                    <p>{{ $news->news_details }}</p>
                </div>
                <div class="singlePage2-tag">
                    <span> Tags : </span>
                    <a href=" " rel="tag">{{ $news->tags }}</a>
                </div>

                <div class="single-add">
                    <div class="themesBazar_widget">
                        <div class="textwidget">
                            <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                                    src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                        </div>
                    </div>
                </div>

                <h3 class="single-social-title">
                    Share News </h3>
                <div class="single-page-social">
                    <a href=" " target="_blank" title="Facebook"><i class="lab la-facebook-f"></i></a><a
                        href=" " target="_blank"><i class="lab la-twitter"></i></a><a href=" "
                        target="_blank"><i class="lab la-linkedin-in"></i></a><a href=" " target="_blank"><i
                            class="lab la-digg"></i></a><a href=" " target="_blank"><i
                            class="lab la-pinterest-p"></i></a><a onclick="printFunction()" target="_blank"><i
                            class="las la-print"></i>
                        <script>
                            function printFunction() {
                                window.print();
                            }
                        </script>
                    </a>
                </div>
                @php
                    $comments = App\Models\Comments::where('news_id', $news->id)
                        ->latest()
                        ->get();
                @endphp

                <hr>

                <form action="{{ route('store.comments') }}" method="POST" class="wpcf7-form init"
                    enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                    @csrf

                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                    <div style="display: none;">

                    </div>
                    <div class="main_section">

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact-title">
                                    Name *
                                </div>
                                <div class="contact-form">
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="commentator"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Your Name"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-title">
                                    Comments *
                                </div>
                                <div class="contact-form">
                                    <span class="wpcf7-form-control-wrap news_details">
                                        <textarea name="comments" cols="20" rows="5"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                            placeholder="News Details...."></textarea>
                                    </span>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-btn">
                                <input type="submit" value="Submit Comments"
                                    class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                    class="wpcf7-spinner"></span>
                            </div>
                        </div>
                    </div>

                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
                <div class="container mt-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success p-5">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>

                <div class="author2">
                    <div class="author-content2">
                        <h6 class="author-caption2">
                            <span> COMMENTS </span>
                        </h6>
                        @foreach ($comments as $key => $item)
                            <hr>


                            <div class="authorContent">
                                <h5 class="card-title">
                                    <strong>{{ $key + 1 }}.
                                        {{ $item->commentator }}</strong>
                                    <h6 class="card-subtitle text-muted">{{ $item->created_at }}</h6>
                                </h5>

                                <div class="author-details">
                                    <p>{{ $item->comments }}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>



                <div class="single_relatedCat">
                    <a href=" ">Related News</a>
                </div>
                <div class="row">
                    @foreach ($related_news as $item)
                        <div class="themesBazar-3 themesBazar-m2">
                            <div class="related-wrpp">
                                <div class="related-image">
                                    <a href=" "><img class="lazyload" src="{{ asset($item->image) }}"></a>
                                </div>
                                <h4 class="related-title">
                                    <a href=" ">{{ $item->news_title }} </a>
                                </h4>
                                <div class="related-meta">
                                    <a href=" "><i class="la la-tags"> </i>
                                        Saturday, 10th September 2022
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sitebar-fixd" style="position: sticky; top: 0;">
                    <div class="siteber-add">
                        <div class="themesBazar_widget">
                            <div class="textwidget">
                                <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                                        src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="singlePopular">

                        <ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent"
                                    role="tab" aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular"
                                    role="tab" aria-controls="archivePopulars" aria-selected="false"> POPULAR </div>
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
                                            <a href=" "><img class="lazyload" src="{{ asset($item->image) }}"></a>
                                        </div>
                                        <a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
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
                                            <a href=" "><img class="lazyload" src={{ asset($item->image) }}></a>
                                        </div>
                                        <a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
                                        <h4 class="archiveTab_hadding"><a href=" ">{{ $item->news_title }}</a>
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
@endsection
