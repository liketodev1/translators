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
                            <form method="post" action="{{ route('admin.tag.destroy',['tag'=>$result->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </form>
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

