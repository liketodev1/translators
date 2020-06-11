@section('breadcrumb')
    <div class="row mb-2 ">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ $index }}">{{ $title }}</a></li>
            </ol>
        </div><!-- /.col -->
        @if(isset($create))
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ $create }}" class="text-dark btn btn-default">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </li>
                </ol>
            </div><!-- /.col -->
        @endif
    </div><!-- /.row -->
@endsection
