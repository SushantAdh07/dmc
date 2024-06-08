@extends('frontend.frontend')
@section('news')
    <div class="container">
        <div class="row">
            <div class="container-fluid mt-3 mb-3">
                <span>News for given date: <strong> {{ $dateFormat }}</strong></span>
            </div>
            @foreach ($news as $item)
                <div class="archive1-custom-col-3">
                    <div class="archive-item-wrpp2">
                        <div class="archive-shadow arch_margin">
                            <div class="archive1_image2">
                                <a href="{{ route('details', $item->id) }}"><img class="lazyload"
                                        src="{{ asset($item->image) }}"></a>
                                <div class="archive1-meta">
                                    <a href="{{ route('details', $item->id) }}"><i class="la la-tags"> </i>
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
            @endforeach
        </div>
    </div>
@endsection
