@extends('lawyer.app')
@section('title','Post Create')
@section('content')
    <!--start myProfile-->
    <div class="bg-color-t">

        <section class="container-fluid  container-t content">
            @include('lawyer.partials.alert')
            Post index <a href="{{ route('post.create') }}">Create</a>
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $post->description }}</h5>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('post.show',['post'=>$post->id]) }}">View</a>
                            <form action="{{ route('post.destroy',['post'=>$post->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-primary btn-verification">Delete post</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                Not result
                @endif
        </section>
    </div>
    <!--end myProfile-->

@endsection
