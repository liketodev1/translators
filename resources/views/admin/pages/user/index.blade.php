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
                    <th style="width: 20%">
                        First Name
                    </th>
                    <th style="width: 30%">
                        Last Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th style="width: 8%" class="text-center">
                        Phone
                    </th>
                    <th style="width: 20%; text-align: center">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 15; $i++)
                    <tr>
                        <td>
                            #{{$i}}
                        </td>
                        <td>Jon{{$i}}</td>
                        <td>Roe</td>
                        <td>roe00{{$i}}@gmail.com</td>
                        <td>+1987148798{{$i}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.show',['user'=>$i]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.users.edit',['user'=>$i]) }}">
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
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
    <!-- /.card -->
@endsection

