@extends('layouts.app')
@section('content')
    <div class="container">
       @foreach ($blogs as $blog)
            <h1>
                <a href="{{ route('blog_view',['slug'=>$blog->slug]) }}">
                    {{ $blog->title }}
                </a>
            </h1>
       @endforeach
    </div>
@endsection
