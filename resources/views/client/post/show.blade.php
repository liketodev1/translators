@extends('lawyer.app')
@section('title','Post '. $post->id)
@section('content')
    <!--start myProfile-->
    <div class="bg-color-t">
        <section class="container-fluid  container-t content">
            Post index
            @if($post)
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $post->specialization->name }}</h5>
                            <h5>{{ $post->country->name }}</h5>
                            <h5>{{ $post->state }}</h5>
                            <h5>{{ $post->city }}</h5>
                            <h5>{{ $post->address }}</h5>
                            <h5>{{ $post->billing_type }}</h5>
                            <h5>{{ $post->price }}</h5>
                            <h5>{{ $post->description }}</h5>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('post.show',['post'=>$post->id]) }}">View</a>
                            <a href="{{ route('post.edit',['post'=>$post->id]) }}">Edit</a>
                        </div>
                    </div>
            @else
                Not result
            @endif
        </section>
    </div>
    <!--end myProfile-->

@endsection
