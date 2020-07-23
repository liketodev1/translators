@extends('admin.app')

@section('title','Edit '.$result->name)
@include('admin.layouts.breadcrumb',array(
    'title' => 'Contact Messages',
    'index' => route('admin.contact-messages.index'),
))
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Striped Full Width Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Text</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $result->id }}.</td>
                        <td>{{ $result->subject }}</td>
                        <td>{{ $result->email }}</td>
                        <td>{{ $result->message }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
