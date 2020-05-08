@extends('admin.app')

@section('title','Edit user')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit user</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{ route('admin.users.update',['user'=>$user->id]) }}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="enabled" type="checkbox" id="customCheckbox1" {{ $user->enabled==1?'checked':'' }}>
                        <label for="customCheckbox1" class="custom-control-label">Enable account</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" readonly placeholder="First name" value="{{ $user->first_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" readonly placeholder="Last name" value="{{ $user->last_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" readonly placeholder="Email" value="{{ $user->email }}"">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputEmail3" readonly placeholder="Phone" value="{{ $user->phone }}">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
@endsection
