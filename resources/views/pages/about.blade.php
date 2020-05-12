<?php
$route = 'home';
if (!auth()->user()) {
    $route = 'register';
}

?>
@extends('layouts.app')
@section('content')
    <
    <section class="container-fluid section section-about about-content">
        <div class="row no-gutters d-flex justify-content-end align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 ">
                <div class="info-block">
                    <h2 class="info-block-title">
                        Our Mission
                    </h2>
                    <div class="info-block-content">
                        <p>
                            We strive to bring something perfect to the world. We want to help clients get quality
                            translation
                            according to their needs, and we want translators to find new clients. We have created a
                            platform
                            that connects translators from all over the world in one space and allows corporate and
                            individual
                            clients to hire them without middlemen and to communicate directly with qualified
                            translators.
                        </p>
                    </div>
                    <div class="info-block-links">
                        <a href="#" class="info-block-link">Find Translator</a>
                        <a href="#" class="info-block-link">Find Job</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                <div class="info-block-right-img">
                    <img src="{{asset('img/aboutUs.png')}}"/>

                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid section section-about about-content-features">
        <div class="row no-gutters">
            <div class="col-12 features-block">
                <h2 class="features-block-title">
                    Key Features
                </h2>
            </div>
            <div class="row features-block-content">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="features-item">
                        <div class="features-item-img">
                            <img src="{{asset('img/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-item-title">
                            <h4>Global community qualified translators</h4>
                        </div>
                        <div class="features-item-text">
                            <p>Our platform enables a global community of skilled, qualified translators, interpreters
                                and
                                localization experts to connect with corporate and individual customers who are seeking
                                their services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 ">
                    <div class="features-item">
                        <div class="features-item-img">
                            <img src="{{asset('img/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-item-title">
                            <h4>Global community qualified translators</h4>
                        </div>
                        <div class="features-item-text">
                            <p>Our platform enables a global community of skilled, qualified translators, interpreters
                                and
                                localization experts to connect with corporate and individual customers who are seeking
                                their services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="features-item">
                        <div class="features-item-img">
                            <img src="{{asset('img/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-item-title">
                            <h4>Global community qualified translators</h4>
                        </div>
                        <div class="features-item-text">
                            <p>Our platform enables a global community of skilled, qualified translators, interpreters
                                and
                                localization experts to connect with corporate and individual customers who are seeking
                                their services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 ">
                    <div class="features-item">
                        <div class="features-item-img">
                            <img src="{{asset('img/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-item-title">
                            <h4>Global community qualified translators</h4>
                        </div>
                        <div class="features-item-text">
                            <p>Our platform enables a global community of skilled, qualified translators, interpreters
                                and
                                localization experts to connect with corporate and individual customers who are seeking
                                their services
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section section-about goals-content">
        <div class="row no-gutters d-flex justify-content-end">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 goals-bg">
                <div class="row no-gutters d-flex justify-content-around">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 position-relative">
                        <div class="abs">
                            <img src="{{asset('img/goals-img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="goals-block">
                            <h2 class="goals-block-title">
                                Our main goals
                            </h2>
                            <div class="goals-block-content">
                                <div class="goals-block-item">
                                    <h4 class="goals-block-item-title">Agency Fees</h4>
                                    <div class="goals-block-text">Translators are underpaid due to high agency fees and
                                        layered industry structure.
                                    </div>
                                </div>
                                <div class="goals-block-item">
                                    <h4 class="goals-block-item-title">Agency Fees</h4>
                                    <div class="goals-block-text">Translators are underpaid due to high agency fees and
                                        layered industry structure.
                                    </div>
                                </div>
                                <div class="goals-block-item">
                                    <h4 class="goals-block-item-title">Agency Fees</h4>
                                    <div class="goals-block-text">Translators are underpaid due to high agency fees and
                                        layered industry structure.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section section-about about-end">
        <div class="row no-gutters about-end-bg">
            <div class="row d-flex justify-content-between align-content-center">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 about-end-text">
                    <h2>
                        {{__('global.textAboutEnd')}}
                    </h2>
                </div>
                <div
                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 about-end-button d-flex justify-content-center align-items-center">

                    <a href="{{route($route)}}" type="button" class="get-started">
                        {{__('global.getStarted')}}
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection
