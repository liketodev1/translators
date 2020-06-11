@extends('admin.app')

@section('title', 'Legal areas list')
@include('admin.layouts.breadcrumb',array(
    'title' => 'Legal areas list',
    'index' => route('admin.legal_areas.index'),
    'create' => route('admin.legal_areas.create'),
))
@section('content')

    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">Id</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Icon</th>
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
                        <td>{{ $result->position }}</td>
                        <td>{{ $result->name }}</td>
                        <td>
                            @if($result->icon)
                                <img src="{{ Storage::url($result->icon) }}" alt="Icon" width="35px">
                            @endif
                        </td>
                        <td>{{ $result->updated_at }}</td>
                        <td class="project-actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.legal_areas.edit',['legal_area'=>$result->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            <form method="post" action="{{ route('admin.legal_areas.destroy',['legal_area'=>$result->id]) }}">
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

