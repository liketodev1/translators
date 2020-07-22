@extends('admin.app')

@section('title', 'Tags list')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Tags list',
    'index' => route('admin.tag.index'),
    'create' => route('admin.tag.create'),
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
                    <th>Name</th>
                    <th>Update Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>
                            #{{$result->id}}
                        </td>
                        <td>{{ $result->status }}</td>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->updated_at }}</td>
                        <td class="project-actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.tag.edit',['tag'=>$result->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a type="button" class="btn btn-danger btn-sm delete-item" data-toggle="modal" data-target="#modal-sm"
                                   href="#" data-href="{{ route('admin.tag.destroy',['tag'=>$result->id]) }}">
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
    </div>

    <!-- /.card -->
@endsection

