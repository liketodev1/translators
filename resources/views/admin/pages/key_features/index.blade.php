@extends('admin.app')

@section('title', 'Key features list')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Key features list',
    'index' => route('admin.key_features.index'),
    'create' => route('admin.key_features.create'),
))
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">Id</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Updated date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>
                            #{{$result->id}}
                        </td>
                        <td>{{ $result->title }}</td>
                        <td>@if ($result && $result->icon)
                                <img src="{{ Storage::url($result->icon) }}" alt="" width="50px">
                            @endif</td>
                        <td>{{ $result->updated_at }}</td>
                        <td class="project-actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.key_features.edit',['key_feature'=>$result->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a type="button" class="btn btn-danger btn-sm delete-item" data-toggle="modal" data-target="#modal-sm"
                                   href="#" data-href="{{ route('admin.key_features.destroy',['key_feature'=>$result->id]) }}">
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

