@extends('admin.app')

@section('title','Edit '.$result->name)
@include('admin.layouts.breadcrumb',array(
    'title' => 'Legal areas list',
    'index' => route('admin.legal_areas.index'),
    'create' => route('admin.legal_areas.create'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $result->name }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('admin.pages.legal_areas.form',['result'=>$result])
    </div>
@endsection
