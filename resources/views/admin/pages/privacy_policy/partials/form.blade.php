<?php
$route = "store";
$page = "Create";
$title = "";
$description = "";
if (!empty($item)) {
    $id = $item->id;
    $title = $item->title;
    $description = $item->description;
    $route = "update";
    $page = "Update";
}
?>
@section('breadcrumb')
    <div class="row mb-2 ">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.privacy_policy.index') }}">Privacy Policy</a></li>
                <li class="breadcrumb-item active">{{$page}}</li>
            </ol>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.privacy_policy.create') }}" class="text-dark btn btn-default">
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
            <h3 class="card-title">{{$page}} Privacy Policy</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('admin.privacy_policy.'.$route,["privacy_policy"=>($id??"")]) }}" autocomplete="off">
            @csrf
            @if(!empty($item))
                <input type="hidden" name="_method" value="put" />
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{old('title')??$title}}" class="form-control" id="title"
                           placeholder="Title">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control editor" id="description"
                              placeholder="Description">{{old('description')??$description}}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
@endsection
