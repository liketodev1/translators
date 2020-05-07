@extends('admin.app')

@section('title', 'Users list')
@section('breadcrumb')
    <div class="row mb-2 ">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
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
    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(count($options)>0)
                    @foreach ($options as $option)
                        <tr>
                            <td>
                                #{{$option->id}}
                            </td>
                            <td>{{ $option->name }}</td>
                            <td class="project-actions">
                                <a class="btn btn-info btn-sm"
                                   href="{{ route('admin.options.edit',['option'=>$option->id,'type'=>$type]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @endif

            </table>
        </div>
        <div class="card-footer">
            <div class="float-left">
                <strong>Total count {{ $options->total() }}</strong>
            </div>
            <div class="float-right">
                {{ $options->appends(['type' => $type])->links() }}
            </div>
        </div>
    </div>
    <!-- /.card -->
@endsection
