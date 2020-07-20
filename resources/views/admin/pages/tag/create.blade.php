@extends('admin.app')

@section('title','Create')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Create tag',
    'index' => route('admin.tag.index'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('admin.pages.tag.form',['result'=>null])
    </div>
@endsection
