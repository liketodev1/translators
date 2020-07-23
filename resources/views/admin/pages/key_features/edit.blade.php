@extends('admin.app')

@section('title','Edit '.$result->name)
@include('admin.layouts.breadcrumb',array(
    'title' => 'Edit '.$result->name,
    'index' => route('admin.key_features.index'),
    'create' => route('admin.key_features.create'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $result->name }}</h3>
        </div>
        @include('admin.pages.key_features.form',['result'=>$result])
    </div>
@endsection
