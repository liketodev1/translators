@extends('layouts.app')
@section('title','Our Lawyers')
@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/post-history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/our_lawyers.css') }}">
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
                                <option value="">All</option>
                                <option {{ PaymentType::hour == request()->bt? 'selected':'' }} value="{{ PaymentType::hour }}">Per Hour</option>
                                <option {{ PaymentType::fixed == request()->bt? 'selected':'' }} value="{{ PaymentType::fixed }}">Fixed</option>
                            </select>
                        </div>

                        <div class="find-job-select-item">
                            <p class="mb-0 text-uppercase find-job-select-title">SELECT SPECIALIZATION</p>
                            <select name="s" class="browser-default custom-select-lg dropdown-items-wrap">
                                <option value="">All</option>
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
                                <option value="">All</option>

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
        <div class="row no-gutters">

            <div class="col-12 d-flex flex-column ">
                <h1 class="posts-title">
                    Our Lawyers
                </h1>
                <form class="filter-form d-flex flex-column flex-wrap justify-content-between">

                    <div class="filter-dropdowns-block d-flex flex-row flex-wrap mb-2">

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">

                            <p class="mb-0 found-job-filter-title">Rating: </p>

                            <select class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected="">All</option>
                                <option value="">4.5-5</option>
                                <option value="">3.5-4</option>
                                <option value="">2.5-3</option>
                                <option value="">1.5-2</option>
                                <option value="">0.5-1</option>
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times" aria-hidden="true"></i>
                            </button>

                        </div>

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">

                            <p class="mb-0 found-job-filter-title">Price: </p>

                            <select name=""
                                    class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected="">All</option>
                                <option value="5-10">5-10
                                    per hour
                                </option>
                                <option value="10-15">10-15
                                    per hour
                                </option>
                                <option value="15-20">15-20
                                    per hour
                                </option>
                                <option value="20-25">20-25
                                    per hour
                                </option>

                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">
                            <p class="mb-0 found-job-filter-title">Country: </p>
                            <select name="city"
                                    class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected="">All</option>
                                <option value="Yerevan">United States</option>
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="reset-filters-block pb-0">
                            <a href="#">Reset all</a>
                        </div>
                        <div class="dropdown filter-item mr-2 mb-2 d-flex align-items-center">
                            <p class="mb-0 found-job-filter-title">State: </p>
                            <select name="city"
                                    class="browser-default custom-select-lg filter-btn filter-btn-raiting border-0">
                                <option value="" selected="">All</option>
                                <option value="Yerevan">Texas</option>
                            </select>
                            <button class="filter-close" type="button">
                                <i class="fas fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="filter-dropdowns-block d-flex flex-row flex-wrap mb-2">
                        <span class="found-result">
                            We found 958 matches for your search
                        </span>
                    </div>
                </form>
            </div>
        </div>
        @forelse ($users as $user)
            <div class="row no-gutters mb-2">
                <div class="card d-flex">
                    <div class="card-body d-flex flex-row justify-content-between p-5">
                        <div class="card-col card-img-wrap w-10">
                            <img src="{{asset('img/lawyer-avatar.png')}}" class="card-img" alt="lawyer-avatar"/>
                        </div>
                        <div class="card-col w-70">
                            <div class="card-row d-flex align-items-center">
                                <h5 class="card-title">{{ $user->first_name.' '.$user->last_name }}</h5>
                                <div class="status">
                                    <span class="badge badge-pill badge-purple">Pro</span>
                                </div>
                                <div class="verified">
                                    <img src="{{asset('img/verified.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-row d-flex">
                                <div class="reviews-counnt-block d-flex align-items-center flex-wrap">
                                    <i class="fas fa-star"></i>
                                    <h6 class="h6 mb-0">4.95</h6>
                                    <span class="reviews-count">(237 reviews)</span>
                                    <span class="dot">.</span>
                                </div>

                                <div class="price-block d-flex align-items-center flex-wrap">
                                    <h6 class="h6 mb-0">$ {{ $user->profile->rate }}</h6>
                                    <span class="slash">/</span>
                                    <span class="time">{{ $user->profile->rate_type==1?'hour':'fixed' }}</span>
                                    <span class="dot">.</span>
                                </div>

                                <div class="location-block d-flex align-items-center flex-wrap">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span
                                        class="state">{{ $user->profile->country->name }}, {{$user->profile->state }}, {{$user->profile->city }}</span>
                                </div>
                            </div>
                            <div class="card-row d-flex">
                                <div class="lang-block d-flex flex-wrap">
                                    <h6 class="title">Language:</h6>
                                    @forelse($user->languageLevel as $item)
                                        {{ $item->language->name }} {{ !$loop->last?', ':'' }}
                                    @empty
                                        Not specialization
                                    @endforelse
                                </div>
                            </div>
                            <div class="card-row d-flex">
                                <div class="spec-block d-flex flex-wrap">
                                    <h6 class="title">Specializations:</h6>
                                    @forelse($user->specializations as $item)
                                        {{ $item->name }} {{ !$loop->last?', ':'' }}
                                    @empty
                                        Not specialization
                                    @endforelse
                                </div>
                            </div>
                            <div class="card-row d-flex">
                                <p class="card-text lawyer-text show-read-more comment more">{{ $user->profile->biography }}</p>
                            </div>
                        </div>
                        <div class="card-col w-20 ">
                            <div class="card-row">
                                <div class="btn-group d-block m-auto">
                                    <button class="quote-btn">Get a quote</button>
                                    <button class="share-btn">
                                        <i class="far fa-heart"></i>
                                        Share
                                    </button>
                                </div>
                            </div>
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
