<form class="form-horizontal" method="post"
      @if($result)
      action="{{ route('admin.blog.update',['blog'=>$result->id]) }}"
      @else
      action="{{ route('admin.blog.store') }}"
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
        <div class="form-group clearfix">
            <div class="icheck-primary">
                <input type="checkbox"
                       name="status"
                       id="status"
                       value="0"
                       @if ($result && $result->status)
                           checked
                       @endif
                >
                <label for="status">Status</label>
            </div>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                @foreach(['News','Article'] as $type)
                    <option value="{{ $type }}"
                            @if ($result && $result->type == $type)
                            selected
                            @endif
                    >{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text"
                   class="form-control"
                   id="slug"
                   name="slug"
                   placeholder="Slug"
                   value="{{ $result->slug ?? old('slug') }}"
            >
        </div>
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
            <label for="description">Description</label>
            <textarea name="description"
                      id="description"
                      cols="30"
                      rows="10"
                      class="form-control editor"
                      placeholder="Description"
            >{{ $result->description ?? old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text"
                   class="form-control"
                   id="author"
                   name="author"
                   placeholder="Author"
                   value="{{ $result->author ?? old('author') }}"
            >
        </div>
        <div class="form-group">
            <label for="published_at">Published date</label>
            <input type="datetime-local"
                   class="form-control"
                   id="published_at"
                   name="published_at"
                   placeholder="Published date"
                   value="{{ isset($result->published_at)? date('Y-m-d\TH:i:s', strtotime($result->published_at)) : old('published_at') }}"
            >
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
        <div class="form-group">

            <label for="tag">Tag</label>
            <select name="tag[]" id="tag" class="form-control select2bs4" multiple>
               @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @if($result)
                            @foreach($result->tags as $item)
                             @if($item->id==$tag->id) selected @endif
                            @endforeach
                        @endif
                    >{{ $tag->name }}</option>
               @endforeach
            </select>
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
