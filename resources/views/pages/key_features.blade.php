@extends('layouts.app')

@section('title','Key features')

@push('push_css')
    <link rel="stylesheet" href="{{ asset('css/key_features.css') }}">
@endpush
@section('content')

    <section class="key-features-top">
        <div
            class="key-features-top-content d-flex justify-content-center flex-column align-items-center align-self-center">
            <h1 class="title">Key Features</h1>
            <h3 class="sub-title">Easy Team Collaboration</h3>
            <div class="btn-wrap text-center">
                <a href="#" class="features-get-started ">Get Started</a>
            </div>
        </div>
    </section>

    <section class="container">
        @forelse($features as $feature)
            <div class="row key-features-item ">
                <div class="col-6">
                    <div class="key-features-item-content d-flex flex-column align-items-center">
                        <div class="key-features-item-icon">
                            <img src="{{ Storage::url($feature->icon) }}" alt="{{ $feature->title }}">
                        </div>
                        <h3 class="key-features-item-title">{{ $feature->title }}</h3>
                        <div class="key-features-item-text">{{ $feature->short_text }}</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="key-features-item-img">
                        <img src="{{ Storage::url($feature->image) }}" alt="{{ $feature->image }}">
                    </div>
                </div>
            </div>
        @empty
            <div class="result-not-found">
                <div>Result not found</div>
            </div>
        @endforelse

        <section class="container section key-features-bottom">
            <div class="row no-gutters">
                <div class="col-12 key-features-bottom-content">
                    <h2 class="key-features-bottom-title">
                        Core Objectives
                    </h2>


                    <div class="row key-features-bottom-items">

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="key-features-bottom-item">
                                <div class="key-features-bottom-item-img">
                                    <img src="{{asset('img/key-features-bottom-item-img-1.png')}}" alt="icon">
                                </div>
                                <div class="key-features-bottom-item-title">
                                    <h4>A global community of qualified attorneys </h4>

                                </div>
                                <p class="key-features-bottom-item-text">
                                    Working with seasoned attorneys at an affordable rate has never been easier. When
                                    you use TalkCounsel, you gain round-the-clock access to a global collective of
                                    experienced lawyers.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="key-features-bottom-item">
                                <div class="key-features-bottom-item-img">
                                    <img src="{{asset('img/key-features-bottom-item-img-2.png')}}" alt="icon">
                                </div>
                                <div class="key-features-bottom-item-title">
                                    <h4>Affordable </h4>

                                </div>
                                <p class="key-features-bottom-item-text">
                                    With TalkCounsel, you can now connect with a community of forward-thinking, diverse,
                                    and talented professionals. Whatever your legal need, we have candidates available
                                    at an affordable fee.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="key-features-bottom-item">
                                <div class="key-features-bottom-item-img">
                                    <img src="{{asset('img/key-features-bottom-item-img-3.png')}}" alt="icon">
                                </div>
                                <div class="key-features-bottom-item-title">
                                    <h4>Convenience </h4>

                                </div>
                                <p class="key-features-bottom-item-text">
                                    In today’s connected world, being able to work digitally in an effective manner is
                                    necessary. Through the strategic use of technology, TalkCounsel helps you get your
                                    legal work done remotely, without compromising the client experience.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 key-features-end-bg">
                    <div
                        class="row no-gutters d-flex flex-row justify-content-around align-content-center align-items-center align-self-center ">
                        <h2>
                            Start using TalkCounsel and get connected to seasoned attorneys today
                        </h2>
                        <div class="get-started-wrap">
                            <a href="#" class="get-started">
                                Get Started
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
