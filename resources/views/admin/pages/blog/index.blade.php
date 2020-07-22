@extends('admin.app')

@section('title', 'Blog list')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Blog list',
    'index' => route('admin.blog.index'),
    'create' => route('admin.blog.create'),
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
                    <th>Type</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Published date</th>
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
                        <td>{{ $result->type }}</td>
                        <td>{{ $result->title }}</td>
                        <td>@if ($result && $result->image)
                                <img src="{{ Storage::url($result->image) }}" alt="" width="100px">
                            @endif</td>
                        <td>{{ $result->published_at }}</td>
                        <td class="project-actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.blog.edit',['blog'=>$result->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a type="button" class="btn btn-danger btn-sm delete-item" data-toggle="modal" data-target="#modal-sm"
                                   href="#" data-href="{{ route('admin.blog.destroy',['blog'=>$result->id]) }}">
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

