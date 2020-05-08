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
                        First Name
                    </th>
                    <th >
                        Last Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th  class="text-center">
                        Phone
                    </th>
                    <th >
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            #{{$user->id}}
                        </td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.show',['user'=>$user->id]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.users.edit',['user'=>$user->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
{{--                            <a class="btn btn-danger btn-sm" href="#">--}}
{{--                                <i class="fas fa-trash">--}}
{{--                                </i>--}}
{{--                                Delete--}}
{{--                            </a>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $users->links() }}
        </div>
    </div>
    <!-- /.card -->
@endsection

