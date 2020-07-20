@extends('admin.app')

@section('title','Edit '.$result->name)
@include('admin.layouts.breadcrumb',array(
    'title' => 'Edit '.$result->name,
    'index' => route('admin.tag.index'),
    'create' => route('admin.tag.create'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $result->name }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('admin.pages.tag.form',['result'=>$result])
    </div>
@endsection
