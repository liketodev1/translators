<?php
$route = 'home';
if (!auth()->user()) {
    $route = 'register';
}

?>
@extends('layouts.app')
@section('content')

    <section class="container-fluid container-t section how-it-works-top">
        <div class="row no-gutters d-flex justify-content-end align-items-center">
            <div class="col-12 how-it-works-head">
                <h1 class="how-it-works-title">
                    How It Works
                </h1>
                <div class="how-it-works-tabs d-flex justify-content-center">
                    <a type="button" class="tab-button active" data-tab="customer" href="#customer">For Lawyer</a>
                    <a type="button" class="tab-button" data-tab="translator" href="#translator">For Client</a>
                </div>
                <p class="how-it-works-head-text">
                    Quality Legal Made Easy Solutions
                </p>
                <a href="#tab_content" class="how-it-works-arrow">
                    <img src="{{asset('img/circle-arrow.svg')}}" alt="arrow">
                </a>
            </div>
        </div>
        <div class="tab-content">
            <div id="customer" class="row no-gutters d-flex justify-content-around tab-body">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="row no-gutters work-method-row left">
                        <div class="col-12 work-method bg-1">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-0.svg')}}" alt="icon">
                            </div>

                            <h3 class="work-method-title">	Post a job for free </h3>
{{--                            <div class="work-method-text">--}}
{{--                                Egestas blandit rutrum duis est, at suspendisse commodo posuere. Sit aliquet magna non--}}
{{--                                turpis--}}
{{--                                lectus. Fames diam laoreet et massa turpis aenean fames. Non nibh netus morbi sed sit--}}
{{--                                erat--}}
{{--                                purus. Orci, feugiat faucibus ut porttitor viverra. Venenatis arcu pellentesque egestas--}}
{{--                                cras--}}
{{--                                id--}}
{{--                                pellentesque mi.--}}
{{--                            </div>--}}
                        </div>
                        <div class="col-12 work-method bg-3">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-1.svg')}}" alt="icon">
                            </div>
                            <h3 class="work-method-title">Start getting job offers upon verification</h3>
{{--                            <div class="work-method-text">--}}
{{--                                Non eu ipsum viverra fermentum imperdiet quam vulputate. Rhoncus felis, viverra cras--}}
{{--                                fermentum--}}
{{--                                tellus neque donec non nec. Montes, vel convallis in accumsan. Neque diam dolor tellus--}}
{{--                                adipiscing porta sem mollis pellentesque. Porttitor a iaculis ut vitae urna. Aliquam--}}
{{--                                purus--}}
{{--                                dolor, turpis sem egestas.--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="row no-gutters work-method-row right">
                        <div class="col-12 work-method bg-2">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-2.svg')}}" alt="icon">
                            </div>
                            <h3 class="work-method-title">Submit profile for verification</h3>
                     {{--       <div class="work-method-text">
                                Morbi etiam gravida vestibulum massa neque risus. Consequat sit facilisis montes, vitae
                                nunc
                                sed. Integer aliquam sed sagittis fringilla lectus. Consequat feugiat phasellus nibh
                                aenean
                                eget
                                cursus. Nascetur in laoreet gravida est nunc, natoque est ut. In sollicitudin pretium
                                quis
                                est
                                amet.
                            </div>--}}
                        </div>
{{--                        <div class="col-12 work-method bg-4">--}}
{{--                            <div class="work-method-img">--}}
{{--                                <img src="{{asset('img/works-icon--t-3.svg')}}" alt="icon">--}}
{{--                            </div>--}}
{{--                            <h3 class="work-method-title">Skipping the middleman by booking translators </h3>--}}
{{--                            <div class="work-method-text">--}}
{{--                                Sapien nulla volutpat fringilla faucibus sed laoreet bibendum. Nascetur risus, lobortis--}}
{{--                                a--}}
{{--                                lacus--}}
{{--                                accumsan fermentum. Non eleifend quis nec, orci. In libero quam consectetur varius morbi--}}
{{--                                cursus--}}
{{--                                commodo volutpat ornare. Tellus interdum sed vivamus malesuada aenean mattis imperdiet--}}
{{--                                mauris,--}}
{{--                                ultricies.--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
            
            <div id="translator" class="row no-gutters d-none justify-content-around tab-body">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="row no-gutters work-method-row left">
                        <div class="col-12 work-method bg-1">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-0.svg')}}" alt="icon">
                            </div>

                            <h3 class="work-method-title">	Post a job for free </h3>
                            {{--                            <div class="work-method-text">--}}
                            {{--                                Egestas blandit rutrum duis est, at suspendisse commodo posuere. Sit aliquet magna non--}}
                            {{--                                turpis--}}
                            {{--                                lectus. Fames diam laoreet et massa turpis aenean fames. Non nibh netus morbi sed sit--}}
                            {{--                                erat--}}
                            {{--                                purus. Orci, feugiat faucibus ut porttitor viverra. Venenatis arcu pellentesque egestas--}}
                            {{--                                cras--}}
                            {{--                                id--}}
                            {{--                                pellentesque mi.--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="col-12 work-method bg-3">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-1.svg')}}" alt="icon">
                            </div>
                            <h3 class="work-method-title">Start getting job offers upon verification</h3>
                            {{--                            <div class="work-method-text">--}}
                            {{--                                Non eu ipsum viverra fermentum imperdiet quam vulputate. Rhoncus felis, viverra cras--}}
                            {{--                                fermentum--}}
                            {{--                                tellus neque donec non nec. Montes, vel convallis in accumsan. Neque diam dolor tellus--}}
                            {{--                                adipiscing porta sem mollis pellentesque. Porttitor a iaculis ut vitae urna. Aliquam--}}
                            {{--                                purus--}}
                            {{--                                dolor, turpis sem egestas.--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="row no-gutters work-method-row right">
                        <div class="col-12 work-method bg-2">
                            <div class="work-method-img">
                                <img src="{{asset('img/works-icon--t-2.svg')}}" alt="icon">
                            </div>
                            <h3 class="work-method-title">Submit profile for verification</h3>
                            {{--       <div class="work-method-text">
                                       Morbi etiam gravida vestibulum massa neque risus. Consequat sit facilisis montes, vitae
                                       nunc
                                       sed. Integer aliquam sed sagittis fringilla lectus. Consequat feugiat phasellus nibh
                                       aenean
                                       eget
                                       cursus. Nascetur in laoreet gravida est nunc, natoque est ut. In sollicitudin pretium
                                       quis
                                       est
                                       amet.
                                   </div>--}}
                        </div>
                        {{--                        <div class="col-12 work-method bg-4">--}}
                        {{--                            <div class="work-method-img">--}}
                        {{--                                <img src="{{asset('img/works-icon--t-3.svg')}}" alt="icon">--}}
                        {{--                            </div>--}}
                        {{--                            <h3 class="work-method-title">Skipping the middleman by booking translators </h3>--}}
                        {{--                            <div class="work-method-text">--}}
                        {{--                                Sapien nulla volutpat fringilla faucibus sed laoreet bibendum. Nascetur risus, lobortis--}}
                        {{--                                a--}}
                        {{--                                lacus--}}
                        {{--                                accumsan fermentum. Non eleifend quis nec, orci. In libero quam consectetur varius morbi--}}
                        {{--                                cursus--}}
                        {{--                                commodo volutpat ornare. Tellus interdum sed vivamus malesuada aenean mattis imperdiet--}}
                        {{--                                mauris,--}}
                        {{--                                ultricies.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-color-t">

        <section class="container-fluid container-t section how-it-works-bottom">
            <div class="row no-gutters">
                <div class="col-12 why-choose-block">
                    <h2 class="why-choose-block-title">
                        Why choose Us
                    </h2>

{{--                    <p class="why-choose-block-sub-title">--}}
{{--                        Nullam placerat sit ut non mattis sodales sit. Nunc proin venenatis orci est molestie.--}}
{{--                        Consectetur amet,--}}
{{--                        ullamcorper in non commodo, placerat erat quis dapibus.--}}
{{--                    </p>--}}
                    <div class="row why-choose-block-content">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="why-choose-item">
                                <div class="why-choose-item-img">
                                    <img src="{{asset('img/why-choose-icon--t-0.svg')}}" alt="icon">
                                </div>
                                <div class="why-choose-item-title">
                                    <h4>A global community of qualified attorneys </h4>

                                </div>
                                <p>
                                    Working with seasoned attorneys at an affordable rate has never been easier. When you use TalkCounsel, you gain round-the-clock access to a global collective of experienced lawyers.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="why-choose-item">
                                <div class="why-choose-item-img">
                                    <img src="{{asset('img/why-choose-icon--t-1.svg')}}" alt="icon">
                                </div>
                                <div class="why-choose-item-title">
                                    <h4>Affordable</h4>
                                </div>
                                <p>
                                    With TalkCounsel, you can now connect with a community of forward-thinking, diverse, and talented professionals. Whatever your legal need, we have candidates available at an affordable fee.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="why-choose-item">
                                <div class="why-choose-item-img">
                                    <img src="{{asset('img/why-choose-icon--t-2.svg')}}" alt="icon">
                                </div>
                                <div class="why-choose-item-title">
                                    <h4>Convenience</h4>
                                </div>
                                <p>
                                    With TalkCounsel, you can now connect with a community of forward-thinking, diverse, and talented professionals. Whatever your legal need, we have candidates available at an affordable fee.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="why-choose-item">
                                <div class="why-choose-item-img">
                                    <img src="{{asset('img/why-choose-icon--t-3.svg')}}" alt="icon">
                                </div>
                                <div class="why-choose-item-title">
                                    <h4>Quick and secure payments online</h4>
                                </div>
                                <p>
                                    With TalkCounsel, you can now connect with a community of forward-thinking, diverse, and talented professionals. Whatever your legal need, we have candidates available at an affordable fee.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 how-it-end-bg">
                    <div class="row no-gutters d-flex justify-content-around align-content-center ">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 about-end-text">
                            <h2>
                                Start using TalkCounsel and get connected to seasoned attorneys today
                            </h2>
                        </div>
                        <div
                            class="col-xl-3 col-lg-3 col-md-3 col-sm-12 about-end-button d-flex justify-content-center align-items-center">
                            <a href="{{route($route)}}">
                                <button type="button" class="get-started">
                                    {{__('global.getStarted')}}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{--    end new how it works--}}

@endsection

{{--old how it work--}}

{{--<section class="container-fluid section section-how-it-works how-it-works-top">--}}
{{--    <div class="row no-gutters d-flex justify-content-end align-items-center">--}}
{{--        <div class="col-12 how-it-works-head">--}}
{{--            <h1 class="how-it-works-title">--}}
{{--                How It Works--}}
{{--            </h1>--}}
{{--            <div class="how-it-works-tabs d-flex justify-content-center">--}}
{{--                <a type="button" class="tab-button active" data-tab="customer">For Customer</a>--}}
{{--                <a type="button" class="tab-button" data-tab="translator">For Translator</a>--}}
{{--            </div>--}}
{{--            <p class="how-it-works-head-text">--}}
{{--                Hiring qualified linguists with industry experience and specific--}}
{{--                knowledge for your project.--}}
{{--            </p>--}}
{{--            <a href="#tab_content" class="how-it-works-arrow">--}}
{{--                <img src="{{asset('img/circle-arrow.png')}}" alt="arrow">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="tab-content">--}}
{{--        <div id="customer" class="row no-gutters d-flex justify-content-around tab-body">--}}
{{--            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="row no-gutters work-method-row left">--}}
{{--                    <div class="col-12 work-method bg-1">--}}
{{--                        <img src="{{asset('img/works-img-0.png')}}" alt="" class="work-method-img">--}}
{{--                        <h3 class="work-method-title">Select Industry and Specialization</h3>--}}
{{--                        <div class="work-method-text">--}}
{{--                            Egestas blandit rutrum duis est, at suspendisse commodo posuere. Sit aliquet magna non--}}
{{--                            turpis--}}
{{--                            lectus. Fames diam laoreet et massa turpis aenean fames. Non nibh netus morbi sed sit erat--}}
{{--                            purus. Orci, feugiat faucibus ut porttitor viverra. Venenatis arcu pellentesque egestas cras--}}
{{--                            id--}}
{{--                            pellentesque mi.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 work-method bg-3">--}}
{{--                        <img src="{{asset('img/works-img-1.png')}}" alt="" class="work-method-img">--}}
{{--                        <h3 class="work-method-title">Choose the translator that matches your needs</h3>--}}
{{--                        <div class="work-method-text">--}}
{{--                            Non eu ipsum viverra fermentum imperdiet quam vulputate. Rhoncus felis, viverra cras--}}
{{--                            fermentum--}}
{{--                            tellus neque donec non nec. Montes, vel convallis in accumsan. Neque diam dolor tellus--}}
{{--                            adipiscing porta sem mollis pellentesque. Porttitor a iaculis ut vitae urna. Aliquam purus--}}
{{--                            dolor, turpis sem egestas.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="row no-gutters work-method-row right">--}}
{{--                    <div class="col-12 work-method bg-2">--}}
{{--                        <img src="{{asset('img/works-img-2.png')}}" alt="" class="work-method-img">--}}
{{--                        <h3 class="work-method-title">Place a project and set budget</h3>--}}
{{--                        <div class="work-method-text">--}}
{{--                            Morbi etiam gravida vestibulum massa neque risus. Consequat sit facilisis montes, vitae nunc--}}
{{--                            sed. Integer aliquam sed sagittis fringilla lectus. Consequat feugiat phasellus nibh aenean--}}
{{--                            eget--}}
{{--                            cursus. Nascetur in laoreet gravida est nunc, natoque est ut. In sollicitudin pretium quis--}}
{{--                            est--}}
{{--                            amet.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 work-method bg-4">--}}
{{--                        <img src="{{asset('img/works-img-3.png')}}" alt="" class="work-method-img">--}}
{{--                        <h3 class="work-method-title">Skipping the middleman by booking translators </h3>--}}
{{--                        <div class="work-method-text">--}}
{{--                            Sapien nulla volutpat fringilla faucibus sed laoreet bibendum. Nascetur risus, lobortis a--}}
{{--                            lacus--}}
{{--                            accumsan fermentum. Non eleifend quis nec, orci. In libero quam consectetur varius morbi--}}
{{--                            cursus--}}
{{--                            commodo volutpat ornare. Tellus interdum sed vivamus malesuada aenean mattis imperdiet--}}
{{--                            mauris,--}}
{{--                            ultricies.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div id="translator" class="row no-gutters d-none justify-content-around tab-body">--}}
{{--            translator--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<section class="container-fluid section section-how-it-works how-it-works-bottom">--}}
{{--    <div class="row no-gutters">--}}
{{--        <div class="col-12 why-choose-block">--}}
{{--            <h2 class="why-choose-block-title">--}}
{{--                Why choose Us--}}
{{--            </h2>--}}

{{--            <p class="why-choose-block-sub-title">--}}
{{--                Nullam placerat sit ut non mattis sodales sit. Nunc proin venenatis orci est molestie. Consectetur amet,--}}
{{--                ullamcorper in non commodo, placerat erat quis dapibus.--}}
{{--            </p>--}}
{{--            <div class="row why-choose-block-content">--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">--}}
{{--                    <div class="why-choose-item">--}}
{{--                        <div class="why-choose-item-img">--}}
{{--                            <img src="{{asset('img/why-choose-icon-0.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-item-title">--}}
{{--                            <h4>Access to top industry talents around the world</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">--}}
{{--                    <div class="why-choose-item">--}}
{{--                        <div class="why-choose-item-img">--}}
{{--                            <img src="{{asset('img/why-choose-icon-1.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-item-title">--}}
{{--                            <h4>Booking translators directly and saving money</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">--}}
{{--                    <div class="why-choose-item">--}}
{{--                        <div class="why-choose-item-img">--}}
{{--                            <img src="{{asset('img/why-choose-icon-2.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-item-title">--}}
{{--                            <h4>Platform matches the best experts to your needs</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">--}}
{{--                    <div class="why-choose-item">--}}
{{--                        <div class="why-choose-item-img">--}}
{{--                            <img src="{{asset('img/why-choose-icon-3.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-item-title">--}}
{{--                            <h4>Translation memory for cheaper and faster translations</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-12 how-it-end-bg">--}}
{{--            <div class="row no-gutters d-flex justify-content-between align-content-center ">--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 about-end-text">--}}
{{--                    <h2>--}}
{{--                        Start using the platform to find the best professional translators to match your requirements--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 about-end-button d-flex justify-content-center align-items-center">--}}
{{--                    <a href="{{route($route)}}" type="button" class="get-started">--}}
{{--                        {{__('global.getStarted')}}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
