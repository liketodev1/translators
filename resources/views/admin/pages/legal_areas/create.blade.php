@extends('admin.app')

@section('title','Create')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Legal areas list',
    'index' => route('admin.legal_areas.index'),
))
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('admin.pages.legal_areas.form',['result'=>null])
    </div>
@endsection
