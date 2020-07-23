@extends('admin.app')

@section('title', 'Contact Messages list')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Contact Messages list',
    'index' => route('admin.contact-messages.index'),
))
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">Id</th>
                    <th>Status</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Created date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>#{{$result->id}}</td>
                        <td>@if(!$result->status)<span class="badge bg-danger">NEW</span>@endif</td>
                        <td>{{ $result->subject }}</td>
                        <td>{{ $result->email }}</td>
                        <td>{{ $result->created_at }}</td>
                        <td class="project-actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.contact-messages.show',['contact_message'=>$result->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    View
                                </a>
                                <a type="button" class="btn btn-danger btn-sm delete-item" data-toggle="modal" data-target="#modal-sm"
                                   href="#" data-href="{{ route('admin.contact-messages.destroy',['contact_message'=>$result->id]) }}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $results->links() }}
        </div>
    </div>

    <!-- /.card -->
@endsection

