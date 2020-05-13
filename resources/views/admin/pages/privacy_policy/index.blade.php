@extends('admin.app')

@section('title', 'Users list')

@section('content')
    <!-- Default box -->
    @if($items->isEmpty())
        <a href="{{route('admin.privacy_policy.create')}}">Create Privacy Policy</a>
    @endif
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th>
                        Titel
                    </th>
                    <th >
                        Description
                    </th>
                    <th >
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>
                            #{{$item->id}}
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{!!   \Illuminate\Support\Str::limit($item->description, 200) !!}</td>
                        <td class="project-actions">
{{--                            <a class="btn btn-primary btn-sm" href="{{ route('admin.privacy_policy.show',['term'=>$item->id]) }}">--}}
{{--                                <i class="fas fa-folder">--}}
{{--                                </i>--}}
{{--                                View--}}
{{--                            </a>--}}
                            <a class="btn btn-info btn-sm" href="{{ route('admin.privacy_policy.edit',['privacy_policy'=>$item->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{ route('admin.privacy_policy.destroy',['privacy_policy'=>$item->id]) }}" method="post" >
                                @csrf
                                <input type="hidden" name="_method" value="delete" />
                                <button class="btn btn-danger btn-sm" href="">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $items->links() }}
        </div>
    </div>
    <!-- /.card -->
@endsection

