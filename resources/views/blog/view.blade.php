@extends('layouts.app')
@section('title',$blog->title)
@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush
@section('title',$blog->title)
@section('content')

    <div class="container">
        <div class="row blog-single-item d-flex justify-content-center">
            <div class="blog-single-item-content">
                <h2 class="blog-single-item-big-title">{{ $blog->title }}</h2>

                <div class="blog-single-item-info d-flex justify-content-between flex-wrap">
                    <div class="blog-single-item-info-left d-flex align-items-center">
                        <img src="{{asset('img/blog-single-item-avatar.png')}}" alt="blog-single-item-avatar"
                             class="blog-single-item-avatar"/>
                        <h3 class="blog-single-item-name">
                            by {{ $blog->author }}
                        </h3>
                        <span class="blog-single-item-date">{{ date('F j, Y', strtotime($blog->published_at)) }}</span>
                    </div>
                    <div class="blog-single-item-info-right">
                        <a href="#" class="blog-single-item-share">Share</a>
                    </div>
                </div>

                <div class="blog-single-item-img">
                    <img src="{{ Storage::url($blog->image) }}" alt="blog-single-item-img">
                </div>
                <div class="parent-text">
                    {!! $blog->description !!}
                </div>
                @if(count($blog->tags)>0)
                    <div class="blog-single-item-tags">
                        @foreach($blog->tags as $tag)
                            <a href="#">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>

        @if(count($blogs)>0)
            <div class="row more-posts-block">
                <h3 class="col-12 more-posts-block-title">You may also like</h3>
                @foreach($blogs as $item)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="more-posts-item">
                            <img src="{{ Storage::url($item->image) }}" alt="more-posts-item-img"
                                 class="more-posts-item-img"/>
                            <a href="{{ route('blog_view',['slug'=>$item->slug]) }}">
                                <h4 class="more-posts-item-title">{{ $item->title }}</h4>
                            </a>
                            <p class="more-posts-item-text">{{ $item->short_text }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
