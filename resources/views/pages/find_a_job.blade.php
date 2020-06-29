 @extends('layouts.app')
@section('title','Find a Job')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/post-history.css') }}">
@endpush

@section('content')

    <div class="container">
        <div class="row no-gutters w-100">
            <div class="col-12">
                <form action="#" class="find-job-form w-100">
                    <div class="btn-group border-0">
                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">SELECT BILLING METHOD</p>
                            <button type="button" class="btn dropdown-toggle border-0" data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                Per Hour
                            </button>
                            <div class="dropdown-menu ">
                                <div class="dropdown-items-wrap">
                                    <a href="#" class="w-100 pl-3">Per Hour</a>
                                    <a href="#" class="w-100 pl-3">Per Hour 2</a>
                                    <a href="#" class="w-100 pl-3">Per Hour</a>
                                </div>
                            </div>
                        </div>
                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">SELECT SPECIALIZATION</p>
                            <button type="button" class="btn dropdown-toggle border-0" data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                Business & Finance
                            </button>
                            <div class="dropdown-menu ">
                                <div class="dropdown-items-wrap">
                                    <a href="#" class="w-100 pl-3">Business & Finance </a>
                                    <a href="#" class="w-100 pl-3">Business & Finance 2</a>
                                    <a href="#" class="w-100 pl-3">Business & Finance </a>
                                </div>
                            </div>
                        </div>
                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">Select country</p>
                            <button type="button" class="btn dropdown-toggle border-0" data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                USA
                            </button>
                            <div class="dropdown-menu ">
                                <div class="dropdown-items-wrap">
                                    <a href="#" class="w-100 pl-3">Per Hour</a>
                                    <a href="#" class="w-100 pl-3">Per Hour 2</a>
                                    <a href="#" class="w-100 pl-3">Per Hour</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="btn-group">
                        <button type="button" class="find-job-search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <div class="container posts-block">
        {{--        @if(count($jobs)>0)--}}
        {{--        @foreach ($jobs as $job)--}}
        {{--            <div class="card">--}}
        {{--                <h5 class="card-header">{{ $job->specialization->name }}</h5>--}}
        {{--                <div class="card-body">--}}
        {{--                    <h5 class="card-title">{{ $job->country->name }}</h5>--}}
        {{--                    <p class="card-text">{{ $job->description }}</p>--}}
        {{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        @endforeach--}}
        {{--        @else--}}
        {{--            Not result--}}
        {{--        @endif--}}

        <div class="row no-gutters">

            <div class="col-12 d-flex flex-column ">
                <h1 class="posts-title">
                    We found 275 jobs for your search
                </h1>
                <form class="filter-form d-flex flex-row justify-content-between">

                    <div class="filter-dropdowns-block d-flex flex-row">

                        <div class="dropdown filter-item mr-2">
                            <button class="btn dropdown-toggle filter-btn filter-btn-raiting" type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                4.5-5
                            </button>
                            <button class="filter-close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">4.5-5 </a>
                                <a class="dropdown-item" href="#">0-5</a>
                                <a class="dropdown-item" href="#">1-3</a>
                            </div>
                        </div>

                        <div class="dropdown filter-item mr-2">
                            <button class="btn dropdown-toggle filter-btn filter-btn-price" type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                $10 - $15 per hour
                            </button>
                            <button class="filter-close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">$10 - $15 per hour</a>
                                <a class="dropdown-item" href="#">$10 - $15 per hour</a>
                                <a class="dropdown-item" href="#">$10 - $15 per hour</a>
                            </div>
                        </div>

                        <div class="dropdown filter-item mr-2">
                            <button class="btn dropdown-toggle filter-btn filter-btn-loc " type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                United States
                            </button>
                            <button class="filter-close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">United States</a>
                                <a class="dropdown-item" href="#">United States</a>
                                <a class="dropdown-item" href="#">United States</a>
                            </div>
                        </div>
                    </div>
                    <div class="posts-sort-block pb-0">Sort by: <span>Newest <i class="fas fa-chevron-down"></i></span>
                    </div>
                </form>
            </div>
        </div>
        @forelse($jobs as $job)
        <div class="row no-gutters mb-2">
                <div class="card d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column post-item">
                <div class="card-body w-75 ">
                    <h5 class="card-title post-item-title">{{ $job->title }}</h5>

                    <p class="card-text post-item-text show-read-more comment more">{!! $job->description !!}</p>
                    <div class="posts-spec-block d-flex flex-wrap">
                        <h6 class="title">Language:</h6>
{{--                            {{ dump($job->language) }}--}}
                        <h6>English</h6>
                        <quote>,</quote>

                        <h6>Russian</h6>
                        <quote>,</quote>

                        <h6>Arabic</h6>
                        <quote>,</quote>

                        <h6>French</h6>

                    </div>

                    <div class="posts-spec-block d-flex flex-wrap">
                        <h6 class="title">Specialization:</h6>
                        <h6>{{ $job->specialization->name }}</h6>
                    </div>

                    <div class="posts-spec-block d-flex flex-wrap pt-5">
                        <h6 class="title"><i class="fas fa-star"></i> 4.95 <span>(17 revievs)</span></h6>

                        <h6><i class="fas fa-map-marker-alt"></i> {{ $job->city }}, {{ $job->country->name }}</h6>
                    </div>
                </div>
                <div class="card-body w-auto d-flex flex-column h-100">
                    <h5 class="card-title post-item-sub-title">${{ $job->price }} /{{ $job->billing_type==1?'h':'f' }} </h5>
                    <p class="card-text post-item-posted-time">
                        Posted 26 min ago
                    </p>
                    <p class="card-text post-item-bids-count">
                        Bids
                        <span class="font-weight-bold">6</span>
                    </p>
                    <div class="post-item-event-block event-bookmark float-right">

                        <a href="#" class="card-link ">
                            <i class="far fa-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        @empty
            Not result
        @endforelse

    </div>

@endsection

@push('bottom_js')
    <script src="{{ asset('translators/js/post-history.js') }}"></script>
@endpush

