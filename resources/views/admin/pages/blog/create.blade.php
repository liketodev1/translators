@extends('admin.app')

@section('title','Create')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Create blog',
    'index' => route('admin.blog.index'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create</h3>
        </div>
        @include('admin.pages.blog.form',['result'=>null])
    </div>
@endsection
