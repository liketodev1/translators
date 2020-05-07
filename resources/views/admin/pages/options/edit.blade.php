@extends('admin.app')

@section('title',"Edit $option->name")

@section('breadcrumb')
    <div class="row mb-2 ">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.options.index',['type'=>$type]) }}">{{ $title }}</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.options.create',['type'=>$type]) }}" class="text-dark btn btn-default">
                        <i class="fas fa-plus-circle"></i>
                        Create
                    </a>
                </li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $title }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('admin.options.update',['option'=>$option->id,'type'=>$type]) }}" autocomplete="off">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="name" class="form-control" id="title" placeholder="Title" value="{{ $option->name }}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>
    </div>
@endsection
