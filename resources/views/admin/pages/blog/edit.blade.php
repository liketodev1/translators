@extends('admin.app')

@section('title','Edit '.$result->name)
@include('admin.layouts.breadcrumb',array(
    'title' => 'Edit '.$result->name,
    'index' => route('admin.blog.index'),
    'create' => route('admin.blog.create'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $result->name }}</h3>
        </div>
        @include('admin.pages.blog.form',['result'=>$result])
    </div>
@endsection
