@extends('admin.app')

@section('title', 'Users list')

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
                        Language
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td>
                            #{{$i}}
                        </td>
                        <td>English{{$i}}</td>
                        <td class="project-actions">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.options.edit',['option'=>$i]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @endfor
                </tbody>

            </table>
        </div>
    </div>
    <!-- /.card -->
@endsection

