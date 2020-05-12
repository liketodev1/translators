@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible mb-0 mt-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{$error}}
        </div>
    @endforeach
@endif

@if ($success = session('success'))
    <div class="alert alert-success alert-dismissible mb-0 mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $success }}
    </div>
@endif

@if ($warning = session('warning'))
    <div class="alert alert-warning alert-dismissible mb-0 mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $warning }}
    </div>
@endif

@if ($info = session('info'))
    <div class="alert alert-info alert-dismissible mb-0 mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $info }}
    </div>
@endif
