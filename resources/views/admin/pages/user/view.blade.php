@extends('admin.app')
@section('title','User '.$user->first_name.' '.$user->last_name)

@section('content')
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">User Details</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap text-left">
            <tr>
                <th>Id</th>
                <td>2</td>
            </tr>
            <tr>
                <th>Status</th>
                <td><span class="badge badge-success">{{ $user->enabled?'Active':'Passive' }}</span></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td>{{ $user->first_name }}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{ $user->last_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $user->phone }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->role }}</td>
            </tr>
            @if($user->role == ConstUserRole::ROLE_LAWYER)
            <tr>
                <th>Specializations</th>
                <td>
                    @forelse($user->specializations as $item)
                        {{ $item->name }}{{ !$loop->last?', ':'' }}
                      @empty
                    @endforelse
                </td>
            </tr>
            @endif
        </table>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
