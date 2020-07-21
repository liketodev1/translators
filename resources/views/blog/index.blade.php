@extends('layouts.app')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-blog">Blog</h1>
            </div>
        </div>
        @foreach ($blogs as $blog)
            <div class="row blog-item">

                    <div class="blog-item-content">
                            <span class="blog-item-type">
                                {{ $blog->type }}
                            </span>
                        <h2 class="blog-item-title">{{ $blog->title }}</h2>
                        <p class="blog-item-text">
                            {!! substr($blog->description,0,150) !!}
                        </p>
                        <a href="{{ route('blog_view',['slug'=>$blog->slug]) }}" class="read-more-btn">
                            Read More
                        </a>
                    </div>
                    <div class="blog-item-img">
                        <img src="{{asset('img/blog-item-img.png')}}" alt="blog-item-img">
                    </div>

            </div>

        @endforeach
    </div>
@endsection
