<?php
$route = 'home';
if (!auth()->user()) {
    $route = 'register';
}
$headerType = 'white';
?>
@extends('layouts.app')

@section('title','Home')

@section('content')
    <div id="header_background">
        <div class="hedding_text_container">
            <h1>A Digital Workspace For<br> The Legal Industry</h1>
            <h3>You have the right to an attorney; TalkCounsel’s pool of<br> vetted lawyers has got you covered</h3>
            <!-- search block start -->
        @include('partials.search _form')
        <!-- search block end -->
        </div>
    </div>
    {{--    start home new--}}
    <div class="all_container">
        <section id="find_translators_container">
            <h2>Popular legal areas</h2>
            <h6 style="text-align: center; padding-top: 16px;">Find the best legal experts by specialization</h6>
            <div id="translators_container_block">
                @if(count($legal_areas)>0)
                    <div class="translators_container_block_row">
                        @foreach($legal_areas as $legal_area)
                            @if($loop->index <= 3)
                                <div class="translators_block_rows">
                                    <img
                                        src="{{ ($legal_area->icon?Storage::url($legal_area->icon): asset('img/Law%20&%20Patents.svg') )}}"
                                        alt="{{ $legal_area->name }}">
                                    <a href=""><h6>{{ $legal_area->name }}</h6></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="translators_container_block_row">
                        @foreach($legal_areas as $legal_area)
                            @if($loop->index > 3)
                                <div class="translators_block_rows">
                                    <img
                                        src="{{ ($legal_area->icon? Storage::url($legal_area->icon): asset('img/project-t.svg') )}}"
                                        alt="{{ $legal_area->name }}">
                                    <a href=""><h6>{{ $legal_area->name }}</h6></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        <section class="legal-work">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                        <div class="legal-work-content d-flex flex-column justify-content-start ">
                            <h2 class="h2 legal-work-title">
                                Easily Manage Your Legal Work Remotely
                            </h2>
                            <div class="legal-work-text d-flex flex-column">
                                <span class="legal-work-text-item"><img src="{{asset('img/check-t-1.png')}}"
                                                                        alt="checkbox"> Convenient</span>
                                <span class="legal-work-text-item"><img src="{{asset('img/check-t-1.png')}}"
                                                                        alt="checkbox"> Affordable</span>
                                <span class="legal-work-text-item"><img src="{{asset('img/check-t-1.png')}}"
                                                                        alt="checkbox"> Quick and Secure Online Transactions</span>
                            </div>
                            <div>
                                <a href="#" class="btn legal-work-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                        <div class="legal-work-img-wrap">
                            <div class="image-wrap">
                                <img src="{{asset('img/mackbook-mockup-t.png')}}" alt="macbook" class="legal-work-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients_say">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" id="slider_coll">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <h2 id="our_clients_h2">Here’s What Our Clients Have To Say </h2>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="row myrow">
                                        <div class="review_blocks col-sm-12 col-lg-4">
                                            <div class="testimonial">
                                                <p>“Finding legal help on TalkCounsel took me less than five minutes.
                                                    This is the digital solution I once prayed for the legal
                                                    industry.”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client1.png')}}" alt="">
                                                    <div>
                                                        <h4>Floyd Williamson</h4>
                                                        <span>Project Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 review_blocks">
                                            <div class="testimonial">
                                                <p>“Professional. Efficient. Personable. It was a great experience
                                                    overall. My lawyer exhibited great insight and was an expert in his
                                                    field. I highly recommend TalkCounsel’s services.”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client2.png')}}" alt="">
                                                    <div>
                                                        <h4> Theresa Flores</h4>
                                                        <span>Finance Expert</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review_blocks col-sm-12 col-lg-4">
                                            <div class="testimonial">
                                                <p>“Ac eget a, mattis fermentum tristique gravida non. Arcu pellentesque
                                                    erat dolor, blandit felis tellus scelerisque. Id eu eleifend donec
                                                    gravida porta diam justo.”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client3.png')}}" alt="">
                                                    <div>
                                                        <h4>Robert Lee</h4>
                                                        <span>UX Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item carousel-item">
                                    <div class="row" id="myrow">
                                        <div class="review_blocks col-sm-12 col-lg-4">
                                            <div class="testimonial">
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,
                                                    architecto consequuntur eius error eveniet fuga harum id inventore,
                                                    quas quo rem voluptas!”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client1.png')}}" alt="">
                                                    <div>
                                                        <h4> Theresa Flores</h4>
                                                        <span>Finance Expert</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 review_blocks">
                                            <div class="testimonial">
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                                    distinctio repellat similique? At aut deleniti ex excepturi fuga hic
                                                    optio quisquam ut?”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client2.png')}}" alt="">
                                                    <div>
                                                        <h4> Theresa Flores</h4>
                                                        <span>Finance Expert</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review_blocks col-sm-12 col-lg-4">
                                            <div class="testimonial">
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid
                                                    asperiores commodi ea eum eveniet laborum pariatur placeat quos
                                                    vitae? Deserunt, incidunt.”</p>
                                                <div class="profil_review_conatner">
                                                    <img src="{{asset('img/client3.png')}}" alt="">
                                                    <div>
                                                        <h4> Theresa Flores</h4>
                                                        <span>Finance Expert</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-chevron-left" id="left_icon"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel"
                               data-slide="next">
                                <i class="fa fa-chevron-right" id="right_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="help_container">
            <div class="help_left">
                <h2>We Are Here <br> To Help You</h2>
                <div class="help_text_container">
                    <h5>For Clients</h5>
                    <p> At TalkCounsel, we provide you with a global network of well-vetted lawyers. Easily connect with
                        expert help while saving up to 60 percent in attorney’s fees.
                        <a href="">Find A Lawyer &nbsp;&nbsp; <i class="fas fa-arrow-right"></i></a>

                    <h5>For Lawyers</h5>
                    <p>Transform the way you work and collaborate with a space designed to fill attorneys’ needs for
                        professionalism and confidentiality. Improve flexibility and close deals more efficiently.
                        Receive payment faster with peace of mind that all transactions and data are secure. All this
                        from the comfort of your own home. Join TalkCounsel-- the digital workplace of the future for
                        legal professionals all over.<br>
                    </p>
                    <a href="">Find A Job &nbsp; &nbsp; <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <img src="{{asset('img/image-t.png')}}" alt="" class="img-fluid">
        </section>
        <section id="start_using_container">
            <div class="start_using_left">
                <h4>Start using TalkCounsel and get connected to seasoned attorneys <br> today
                </h4>
            </div>
            <div class="start_using_right">
                {{--            <a href=""> Get Started</a>--}}
                <a href="{{route($route)}}">
                    {{__('global.getStarted')}}
                </a>
            </div>
        </section>
    </div>
@endsection
@push('bottom_js')
    <script type="text/javascript">
        document.querySelectorAll('.searchTypes').forEach(item => {
            item.onchange = function () {
                if (this.checked) {
                    this.form.action = this.dataset.url
                }
            }
        })
    </script>
@endpush
