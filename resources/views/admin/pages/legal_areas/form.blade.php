<form class="form-horizontal" method="post"
      @if($result)
      action="{{ route('admin.legal_areas.update',['legal_area'=>$result->id]) }}"
      @else
      action="{{ route('admin.legal_areas.store') }}"
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
            <label for="position">Position</label>
            <input type="number"
                   class="form-control"
                   id="position"
                   name="position"
                   placeholder="Position"
                   @if($result)
                   value="{{ $result->position }}"
                @endif
            >
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
                   class="form-control"
                   id="name"
                   name="name"
                   placeholder="Name"
                   @if($result)
                   value="{{ $result->name }}"
                @endif
            >
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="icon" class="custom-file-input" id="icon">
                    <label class="custom-file-label" for="icon">Choose file</label>
                </div>
            </div>

        </div>
        @if($result && $result->icon)
            <div class="form-group">
                <img src="{{ Storage::url($result->icon) }}" alt="icon" width="35px">
            </div>
        @endif
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
