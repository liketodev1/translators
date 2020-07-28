@extends('admin.app')

@section('title', 'Users list')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%" title="Id">Id</th>
                    <th title="Status">Status</th>
                    <th title="Role">Role</th>
                    <th title="First Name">First Name</th>
                    <th title="Last Name">Last Name</th>
                    <th title="Email">Email</th>
                    <th title="Phone">Phone</th>
                    <th title="Actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    {{ debug($user) }}
                    <tr>
                        <td> #{{$user->id}}</td>
                        <td class="project-state">
                            <span class="badge badge-success">{{ $user->enabled?'Active':'Passive' }}</span>
                        </td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm"  title="View user info"
                               href="{{ route('admin.users.show',['user'=>$user->id]) }}">
                                <i class="fas fa-folder"> </i>
                                View
                            </a>
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

