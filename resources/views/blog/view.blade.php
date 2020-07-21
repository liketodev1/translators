@extends('layouts.app')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

    <div class="container">
        {{--       <h1>{{ $blog->title }}</h1>--}}
        {{--       <div>{!! $blog->description !!}</div>--}}
        {{--       <div>{!! $blog->auth !!}</div>--}}
        {{--        --}}


        <div class="row blog-single-item d-flex justify-content-center">
            <div class="blog-single-item-content">
                <h2 class="blog-single-item-big-title"> Human Resource Decision Making During a Pandemic</h2>

                <div class="blog-single-item-info d-flex justify-content-between flex-wrap">
                    <div class="blog-single-item-info-left d-flex align-items-center">
                        <img src="{{asset('img/blog-single-item-avatar.png')}}" alt="blog-single-item-avatar"
                             class="blog-single-item-avatar"/>
                        <h3 class="blog-single-item-name">
                            by Bella Zielinski
                        </h3>
                        <span class="blog-single-item-date">Apr 14, 2020</span>
                    </div>
                    <div class="blog-single-item-info-right">
                        <a href="#" class="blog-single-item-share">Share</a>
                    </div>
                </div>

                <div class="blog-single-item-img">
                    <img src="{{asset('img/blog-single-item-img.png')}}" alt="blog-single-item-img">
                </div>
                <p class="blog-single-item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh diam nunc feugiat
                    vulputate. Eget faucibus in convallis nulla urna, at in mauris scelerisque. Vehicula
                    quis in et tincidunt amet, cursus. Adipiscing nascetur ante facilisi est imperdiet
                    pellentesque erat laoreet.
                </p>
                <h2 class="blog-single-item-title">Lorem ipsum dolor sit amet, consectetur</h2>
                <p class="blog-single-item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh diam nunc feugiat
                    vulputate. Eget faucibus in convallis nulla urna, at in mauris scelerisque. Vehicula
                    quis in et tincidunt amet, cursus. Adipiscing nascetur ante facilisi est imperdiet
                    pellentesque erat laoreet.
                </p>

                <h2 class="blog-single-item-title">Lorem ipsum dolor sit amet, consectetur</h2>
                <p class="blog-single-item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh diam nunc feugiat
                    vulputate. Eget faucibus in convallis nulla urna, at in mauris scelerisque. Vehicula
                    quis in et tincidunt amet, cursus. Adipiscing nascetur ante facilisi est imperdiet
                    pellentesque erat laoreet.
                </p>
                <div class="blog-single-item-tags">
                    <a href="#">Law</a>
                    <a href="#">Tag</a>
                    <a href="#">Tag</a>
                </div>
            </div>

        </div>

        <div class="row more-posts-block d-flex justify-content-center align-items-center">
                <h3 class="col-12 more-posts-block-title">
                    You may also like
                </h3>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="more-posts-item">
                        <img src="{{asset('img/more-posts-item-img.png')}}" alt="more-posts-item-img"
                             class="more-posts-item-img"/>
                        <a href="#">
                            <h4 class="more-posts-item-title">Lorem ipsum dolor sit amet, consectetur</h4>
                        </a>
                        <p class="more-posts-item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh diam nunc feugiat vulputate.
                            Eget faucibus in convallis nulla urna, at in mauris scelerisque.
                        </p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="more-posts-item">
                        <img src="{{asset('img/more-posts-item-img.png')}}" alt="more-posts-item-img"
                             class="more-posts-item-img"/>
                        <a href="#">
                            <h4 class="more-posts-item-title">Lorem ipsum dolor sit amet, consectetur</h4>
                        </a>
                        <p class="more-posts-item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh diam nunc feugiat vulputate.
                            Eget faucibus in convallis nulla urna, at in mauris scelerisque.
                        </p>

                    </div>
                </div>
        </div>
    </div>

@endsection
