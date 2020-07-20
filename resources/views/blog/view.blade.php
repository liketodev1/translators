@extends('layouts.app')
@section('content')
    <div class="container">
       <h1>{{ $blog->title }}</h1>
       <div>{!! $blog->description !!}</div>
       <div>{!! $blog->auth !!}</div>
    </div>
@endsection
