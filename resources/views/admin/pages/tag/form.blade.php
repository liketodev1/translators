<form class="form-horizontal" method="post"
      @if($result)
      action="{{ route('admin.tag.update',['tag'=>$result->id]) }}"
      @else
      action="{{ route('admin.tag.store') }}"
      @endif
      autocomplete="off" enctype="multipart/form-data">
@if($result)
    @method('PUT')
@else
    @method('POST')
@endif
@csrf
<!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
                   class="form-control"
                   id="name"
                   name="name"
                   placeholder="Name"
                   value="{{ $result->name ?? '' }}"
            >
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

        <button type="submit" class="btn btn-primary">
            @if($result)
                Update and return list
            @else
                Create and return list
            @endif
        </button>
    </div>
</form>
