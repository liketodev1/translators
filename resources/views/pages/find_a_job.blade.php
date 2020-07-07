@extends('layouts.app')
@section('title','Find a Job')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/post-history.css') }}">
@endpush

@section('content')

    <div class="container">
        <div class="row no-gutters w-100">
            <div class="col-12">
                <form action="" class="find-job-form w-100" method="get">
                    <div class="btn-group border-0">

                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">SELECT BILLING METHOD</p>
                            <select name="bt" class="browser-default custom-select-lg">
                                <option {{ PaymentType::hour == request()->bt? 'selected':'' }} value="{{ PaymentType::hour }}">Per Hour</option>
                                <option {{ PaymentType::fixed == request()->bt? 'selected':'' }} value="{{ PaymentType::fixed }}">Fixed</option>
                            </select>
                        </div>

                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">SELECT SPECIALIZATION</p>
                            <select name="s" class="browser-default custom-select-lg dropdown-items-wrap">
                                @if(count($specializations)>0)
                                    @foreach($specializations as $specialization)
                                        <option {{ request()->s == $specialization->id?'selected':'' }}
                                            value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">Select country</p>
                            <select name="c" class="browser-default custom-select-lg dropdown-items-wrap">
                                @if(count($countries)>0)
                                    @foreach($countries as $county)
                                        <option {{ request()->c == $county->id?'selected':'' }}
                                            value="{{ $county->id }}">{{ $county->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="find-job-search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container posts-block">
        <div class="row no-gutters">

            <div class="col-12 d-flex flex-column ">
                <h1 class="posts-title">
                    We found {{ count($jobs) }} jobs for your search
                </h1>
                <form class="filter-form d-flex flex-row flex-wrap justify-content-between">

                    <div class="filter-dropdowns-block d-flex flex-row flex-wrap mb-2">

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">

                            <p class="mb-0 found-job-filter-title">Rating: </p>

                            <select class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected>All</option>
                                @foreach ($ratings as $rating)
                                    <option value="">{{$rating}}</option>
                                @endforeach
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times"></i>
                            </button>

                        </div>

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">

                            <p class="mb-0 found-job-filter-title">Price: </p>

                            <select name="" class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected>All</option>
                                @for ($i = 5; $i < 350; $i+=5)
                                    <option
                                        value="{{ $i }}-{{ $i + 5 }}">{{ $i }}-{{ $i + 5 }}
                                        @if(request()->bt == PaymentType::hour)
                                            per hour
                                        @else
                                            @if(request()->bt == PaymentType::fixed)
                                                fixed
                                            @else
                                                per hour
                                            @endif
                                        @endif
                                    </option>
                                @endfor
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">
                            <p class="mb-0 found-job-filter-title">Location: </p>
                            <select name="city" class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected>All</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->city }}">{{ $city->city }}</option>
                                @endforeach
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times"></i>
                            </button>
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
                            @forelse($job->languageLevel as $item)

                                <h6>{{ $item->language->name }}{{ !$loop->last?',':'' }}</h6>
                            @empty
                                Not selected
                            @endforelse
                        </div>

                        <div class="posts-spec-block d-flex flex-wrap">
                            <h6 class="title">Specialization:</h6>
                            <h6>{{ $job->specialization->name }}</h6>
                        </div>

                        <div class="posts-spec-block d-flex flex-row flex-wrap pt-5 ">
                            {{--                            <h6 class="title  ml-0"><i class="fas fa-star"></i> 4.95 <span>(17 revievs)</span></h6>--}}

                            <h6 class=""><i class="fas fa-map-marker-alt"></i> {{ $job->city }}
                                , {{ $job->country->name }}</h6>
                        </div>
                    </div>
                    <div class="card-body w-auto d-flex flex-column h-100 price-block">
                        <h5 class="card-title post-item-sub-title">${{ $job->price }}
                            /{{ $job->billing_type==1?'hour':'fixed' }} </h5>
                        <p class="card-text post-item-posted-time">
                            Posted {{ $job->created_at }}
                        </p>
                        <p class="card-text post-item-bids-count">
                            Bids
                            <span class="font-weight-bold">6</span>
                        </p>
                        <div class="post-item-event-block event-bookmark ">

                            <a href="#" class="card-link float-right">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="result-not-found">
                <div>Result not found</div>
            </div>
        @endforelse
    </div>
@endsection

@push('bottom_js')
    <script src="{{ asset('translators/js/post-history.js') }}"></script>
@endpush

