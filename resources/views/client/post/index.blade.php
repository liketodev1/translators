@extends('client.app')
@section('title','History Of Posted Jobs')

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/post-history.css') }}">
@endpush

@section('content')
    <div class="container posts-block">
        <div class="row no-gutters">
            <div class="col-12 d-flex flex-column ">
                <h1 class="posts-title">
                    History of posted jobs
                </h1>
                <div class="posts-sort-block">Sort by: <span>Newest <i class="fas fa-chevron-down"></i></span></div>
            </div>
        </div>

        @forelse($posts as $post)
            <div class="row no-gutters mb-2">

                <div class="card d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column post-item">
                    <div class="card-body w-75 ">
                        <h5 class="card-title post-item-title">{{ $post->title }}</h5>

                        <p class="card-text post-item-text show-read-more comment more">
                            {{ $post->description }}
                        </p>
                        <div class="posts-spec-block d-flex flex-wrap">
                            <h6 class="title">Specialization:</h6>

                            <h6>{{ $post->specialization->name }}</h6>

                        </div>
                    </div>
                    <div class="card-body w-auto">
                        <h5 class="card-title post-item-sub-title">${{ $post->price }} /{{ $post->billing_type==1?'h':'f' }} </h5>
                        <p class="card-text post-item-posted-time">
                            Posted {{ $post->created_at }}
                        </p>
                        <div class="post-item-event-block">
                            <form action="{{ route('post.destroy',['post'=>$post->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="card-link"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <a href="{{ route('post.edit',['post'=>$post->id]) }}" class="card-link">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                Nor result
            @endforelse
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('translators/js/post-history.js') }}"> </script>
@endpush
