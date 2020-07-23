<form class="form-horizontal" method="post"
      @if($result)
      action="{{ route('admin.key_features.update',['key_feature'=>$result->id]) }}"
      @else
      action="{{ route('admin.key_features.store') }}"
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
            <label for="title">Title</label>
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title"
                   placeholder="Title"
                   value="{{ $result->title ?? old('title') }}"
            >
        </div>
        <div class="form-group">
            <label for="short_text">Short Text</label>
            <textarea name="short_text"
                      id="short_text"
                      rows="6"
                      class="form-control"
            >{{ $result->short_text ?? old('short_text') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Icon</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="icon" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="icon">Choose image</label>
                </div>
            </div>
            @if ($result && $result->icon)
                <img src="{{ Storage::url($result->icon) }}" alt="" width="50px">
            @endif
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="icon">Choose image</label>
                </div>
            </div>
            @if ($result && $result->image)
                <img src="{{ Storage::url($result->image) }}" alt="" width="150px">
            @endif
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
