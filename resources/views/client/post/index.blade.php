@extends('lawyer.app')
@section('title','Post Create')

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/post-history.css') }}">
@endpush

@section('content')
    <!--start myProfile-->
    {{--    <div class="bg-color-t">--}}

    {{--        <section class="container-fluid  container-t content">
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
            </section>--}}
    {{--    </div>--}}
    <!--end myProfile-->


    <div class="container posts-block">
        <div class="row no-gutters">

            <div class="col-12 d-flex flex-column ">
                <h1 class="posts-title">
                    History of posted jobs
                </h1>
                <div class="posts-sort-block">Sort by: <span>Newest <i class="fas fa-chevron-down"></i></span></div>
            </div>
        </div>

        <div class="row no-gutters mb-2">

            <div class="card d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column post-item">
                <div class="card-body w-75 ">
                    <h5 class="card-title post-item-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Eu malesuada volutpat pulvinar amet, ullamcorper a nunc arcu rutrum.</h5>

                    <p class="card-text post-item-text show-read-more comment more">

                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...
                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...
                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...

                    </p>
                    <div class="posts-spec-block d-flex flex-wrap">
                        <h6 class="title">Specialization:</h6>

                        <h6>Translation</h6>

                    </div>
                </div>
                <div class="card-body w-auto">
                    <h5 class="card-title post-item-sub-title">$14 /h </h5>
                    <p class="card-text post-item-posted-time">
                        Posted 26 min ago
                    </p>
                    <p class="card-text post-item-bids-count">
                        Bids
                        <span class="font-weight-bold">6</span>
                    </p>
                    <div class="post-item-event-block">

                        <a href="#" class="card-link">
                            <i class="fas fa-trash-alt"></i>
                             </a>
                        <a href="#" class="card-link">

                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters mb-2">

            <div class="card d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column post-item">
                <div class="card-body w-75 ">
                    <h5 class="card-title post-item-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Eu malesuada volutpat pulvinar amet, ullamcorper a nunc arcu rutrum.</h5>

                    <p class="card-text post-item-text show-read-more">

                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...
                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...
                        Mus et commodo duis bibendum facilisis sem condimentum.
                        Sed rhoncus interdum eu elementum curabitur in duis.
                        Aliquam porta est scelerisque vitae morbi hendrerit orci.
                        Eu aliquet proin viverra nibh. Ultrices molestie semper ornare quam sed.
                        Nulla condimentum ornare justo, sit...

                    </p>
                    <div class="posts-spec-block d-flex flex-wrap">
                        <h6 class="title">Specialization:</h6>

                        <h6>Translation</h6>

                    </div>
                </div>
                <div class="card-body w-auto">
                    <h5 class="card-title post-item-sub-title">$14 /h </h5>
                    <p class="card-text post-item-posted-time">
                        Posted 26 min ago
                    </p>
                    <p class="card-text post-item-bids-count">
                        Bids
                        <span class="font-weight-bold">6</span>
                    </p>
                    <div class="post-item-event-block">

                        <a href="#" class="card-link">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="#" class="card-link">

                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('translators/js/post-history.js') }}"> </script>
@endpush
