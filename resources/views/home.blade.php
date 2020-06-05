<?php
$route = 'home';
if (!auth()->user()) {
    $route = 'register';
}

?>
@extends('layouts.app')
@section('content')

    {{--    start home new--}}
    <div class="bg">
        <div class="all_container">

        </div>
    </div>
    <div class="all_container">
        <section id="find_translators_container">
            <h2>Popular legal areas</h2>
            <h6 style="text-align: center; padding-top: 16px;">Find the best legal experts by specialization
            </h6>
            <div id="translators_container_block">
                <div class="translators_container_block_row">
                    <div class="translators_block_rows">
                        <img src="{{asset('img/Law%20&%20Patents.svg')}}" alt="">
                        <a href=""><h6>Agrements</h6></a>
                        <p>150 lawyers</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/Business%20&%20Finance.svg')}}" alt="">
                        <a href=""><h6>Business Formation</h6></a>
                        <p>102 lawyers</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/marketing-t.svg')}}" alt="">
                        <a href=""><h6>Patents</h6></a>
                        <p>102 lawyers</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/contract-t.svg')}}" alt="">
                        <a href=""><h6>Trademarks</h6></a>
                        <p>228 lawyers</p>
                    </div>
                </div>
                <div class="translators_container_block_row" id="translators_container_block_row_2">
                    <div class="translators_block_rows">
                        <img src="{{asset('img/project-t.svg')}}" alt="">
                        <a href=""><h6>Immigration</h6></a>
                        <p>93 translators</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/find-t.svg')}}" alt="">
                        <a href=""><h6>General Counsel</h6></a>
                        <p>4 lawyers</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/case-t.svg')}}" alt="">
                        <a href=""><h6>Labor &#38; Employment</h6></a>
                        <p>199 lawyers</p>
                    </div>
                    <div class="translators_block_rows">
                        <img src="{{asset('img/budget-t.svg')}}" alt="">
                        <a href=""><h6>Securities &#38; Finance</h6></a>
                        <p>67 lawyers </p>
                    </div>
                </div>
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
                                <span class="legal-work-text-item"><img src="{{asset('img/check-t-2.png')}}"
                                                                        alt="checkbox"> Affordable</span>
                                <span class="legal-work-text-item"><img src="{{asset('img/check-t-3.png')}}"
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
        <section id="why_choose_us_container">
            <h2>Why choose Us</h2>
            <h6>Nullam placerat sit ut non mattis sodales sit. Nunc proin venenatis orci est molestie. Consectetur <br>
                amet, ullamcorper in non commodo, placerat erat quis dapibus.</h6>
            <div id="why_choose_us_block">
                <div class="why_choose_us_blocks">
                    <div class="img_bg_2"><img src="{{asset('img/Icon (4).svg')}}" alt=""></div>
                    <h5>Access to top industry talents around the world</h5>
                    <p>Find and book your preferred translator directly based on industry, qualifications, skills,
                        budget and availability. </p>
                </div>
                <div class="why_choose_us_blocks">
                    <div class="img_bg_2"><img src="{{asset('img/Icon (5).svg')}}" alt=""></div>
                    <h5>Booking translators directly and saving money</h5>
                    <p>Skipping the middleman by booking translators directly through the platform and saving money by
                        eliminating layered agency fees. </p>
                </div>
                <div class="why_choose_us_blocks">
                    <div class="img_bg_2"><img src="{{asset('img/Icon (6).svg')}}" alt=""></div>
                    <h5> Platform matches the best experts to your needs</h5>
                    <p> Matchmaking platform filter our candidates who are the best match for the job, or let
                        translators submit their proposal directly. </p>
                </div>
                <div class="why_choose_us_blocks">
                    <div class="img_bg_2"><img src="{{asset('img/Icon (7).svg')}}" alt=""></div>
                    <h5> Translation memory for cheaper and faster translations</h5>
                    <p>Translation memory for corporates and individuals that will enable to benefit from cheaper and
                        faster translations after multiple projects. </p>
                </div>
            </div>
            <a href="" id="a_findtranslators"> Find Translators</a>
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
                    <p> At TalkCounsel, we provide you with <br>a global network of well-vetted lawyers. <br>
                        Easily connect with expert help while <br>saving up to 50 percent in attorney’s fees.</p>
                    <a href="">Find A Lawyer &nbsp;&nbsp; <i class="fas fa-arrow-right"></i></a>

                    <h5>For translators</h5>
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

{{--end new home--}}

{{--old home--}}
{{--    <div class="all_container">--}}
{{--        <section id="section_container_home">--}}
{{--            <div id="content_home_container">--}}
{{--                <div class="content_home_blocks">--}}
{{--                    <div><img src="{{asset('img/case.png')}}" alt=""></div>--}}
{{--                    <h5>Select Industry and <br> Specialization</h5>--}}
{{--                    <p>Viverra semper lectus quam tortor, in amet. Pulvinar sed suspendisse augue laoreet a nunc id.</p>--}}
{{--                </div>--}}
{{--                <div class="content_home_blocks">--}}
{{--                    <div><img src="{{asset('img/budget.png')}}" alt=""></div>--}}
{{--                    <h5>Place a project and <br> set budget</h5>--}}
{{--                    <p> Odio sapien, pellentesque sit sed. Quis ante faucibus lobortis viverra facilisis lobortis lectus ultricies. </p>--}}
{{--                </div>--}}
{{--                <div class="content_home_blocks">--}}
{{--                    <div><img src="{{asset('img/translate.png')}}" alt=""></div>--}}
{{--                    <h5>Choose the translator that <br> matches your needs</h5>--}}
{{--                    <p>Viverra ornare vitae tortor, mattis maecenas diam eu adipiscing eget. Eget eget odio tellus non. </p>--}}
{{--                </div>--}}
{{--                <div class="content_home_blocks">--}}
{{--                    <div><img src="{{asset('img/contract.png')}}" alt=""></div>--}}
{{--                    <h5>Skipping the middleman by <br> booking translators</h5>--}}
{{--                    <p>Lectus lacus, viverra vitae id tortor metus. A fermentum donec volutpat turpis malesuada enim eu. </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section id="find_translators_container">--}}
{{--            <h2>Find the best translators by specialization</h2>--}}
{{--            <div id="translators_container_block">--}}
{{--                <div class="translators_container_block_row">--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/law.png')}}" alt="">--}}
{{--                        <a href=""><h6>Law & Patents</h6></a>--}}
{{--                        <p>150 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/business.png')}}" alt="">--}}
{{--                        <a href=""><h6>Business & Finance</h6></a>--}}
{{--                        <p>307 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/medical.png')}}" alt="">--}}
{{--                        <a href=""><h6>Medical & Pharma</h6></a>--}}
{{--                        <p>102 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/technology.png')}}" alt="">--}}
{{--                        <a href=""><h6>Technology & Software</h6></a>--}}
{{--                        <p>228 translators</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="translators_container_block_row">--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/marketing.png')}}" alt="">--}}
{{--                        <a href=""><h6>Marketing & Advertising</h6></a>--}}
{{--                        <p>93 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/travel.png')}}" alt="">--}}
{{--                        <a href=""><h6>Travel, Leisure & Hospitality</h6></a>--}}
{{--                        <p>4 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/mobile.png')}}" alt="">--}}
{{--                        <a href=""><h6>Mobile & Video Games</h6></a>--}}
{{--                        <p>199 translators</p>--}}
{{--                    </div>--}}
{{--                    <div class="translators_block_rows">--}}
{{--                        <img src="{{asset('img/multimedia.png')}}" alt="">--}}
{{--                        <a href=""><h6>Multimedia</h6></a>--}}
{{--                        <p>67 translators </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section id="why_choose_us_container">--}}
{{--            <h2>Why choose Us</h2>--}}
{{--            <h6>Nullam placerat sit ut non mattis sodales sit. Nunc proin venenatis orci est molestie. Consectetur <br> amet, ullamcorper in non commodo, placerat erat quis dapibus.</h6>--}}
{{--            <div id="why_choose_us_block">--}}
{{--                <div class="why_choose_us_blocks">--}}
{{--                    <div class="img_bg_2"><img src="{{asset('img/group.png')}}" alt=""></div>--}}
{{--                    <h5>Access to top industry talents around the world</h5>--}}
{{--                    <p>Find and book your preferred translator directly based on industry, qualifications, skills, budget and availability. </p>--}}
{{--                </div>--}}
{{--                <div class="why_choose_us_blocks">--}}
{{--                    <div class="img_bg_2"><img src="{{asset('img/bookTranslator.png')}}" alt=""></div>--}}
{{--                    <h5>Booking translators directly and saving money</h5>--}}
{{--                    <p>Skipping the middleman by booking translators directly through the platform and saving money by eliminating layered agency fees.  </p>--}}
{{--                </div>--}}
{{--                <div class="why_choose_us_blocks">--}}
{{--                    <div class="img_bg_2"><img src="{{asset('img/userProfile.png')}}" alt=""></div>--}}
{{--                    <h5> Platform matches the best experts to your needs</h5>--}}
{{--                    <p> Matchmaking platform filter our candidates who are the best match for the job, or let translators submit their proposal directly. </p>--}}
{{--                </div>--}}
{{--                <div class="why_choose_us_blocks">--}}
{{--                    <div class="img_bg_2"><img src="{{asset('img/memory.png')}}" alt=""></div>--}}
{{--                    <h5> Translation memory for cheaper and faster translations</h5>--}}
{{--                    <p>Translation memory for corporates and individuals that will enable to benefit from cheaper and faster translations after multiple projects.  </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a href="" id="a_findtranslators"> Find Translators</a>--}}
{{--        </section>--}}
{{--        <section id="clients_say">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12" id="slider_coll">--}}
{{--                        <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                            <h2 id="our_clients_h2">Our Clients Say </h2>--}}
{{--                            <!-- Wrapper for carousel items -->--}}
{{--                            <div class="carousel-inner">--}}
{{--                                <div class="item carousel-item active">--}}
{{--                                    <div class="row myrow">--}}
{{--                                        <div class="review_blocks col-sm-5">--}}
{{--                                            <div class="testimonial">--}}
{{--                                                <p> «Accumsan adipiscing in varius varius tellus neque ullamcorper. Orci leo orci integer sodales sed volutpat morbi mattis at. Posuere cursus leo orci, morbi amet, bibendum in.»</p>--}}
{{--                                                <div class="profil_review_conatner">--}}
{{--                                                    <img src="{{asset('img/client1.png')}}" alt="">--}}
{{--                                                    <div>--}}
{{--                                                        <h4>Floyd Williamson</h4>--}}
{{--                                                        <span>Project Manager</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-1">--}}
{{--                                        </div>--}}
{{--                                        <div class="review_blocks col-sm-5">--}}
{{--                                            <div class="testimonial">--}}
{{--                                                <p>«Ac eget a, mattis fermentum tristique gravida non. Arcu pellentesque erat dolor, blandit felis tellus scelerisque. Id eu eleifend donec gravida porta diam justo.»</p>--}}
{{--                                                <div class="profil_review_conatner">--}}
{{--                                                    <img src="{{asset('img/client2.png')}}" alt="">--}}
{{--                                                    <div>--}}
{{--                                                        <h4> Theresa Flores</h4>--}}
{{--                                                        <span>Finance Expert</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item carousel-item">--}}
{{--                                    <div class="row" id="myrow">--}}
{{--                                        <div class="review_blocks col-sm-5">--}}
{{--                                            <div class="testimonial">--}}
{{--                                                <p>«Metus sapien semper nulla purus netus erat fringilla. Tincidunt eget morbi imperdiet vulputate ultrices est enim. Tristique nunc morbi phasellus ac adipiscing.» </p>--}}
{{--                                                <div class="profil_review_conatner">--}}
{{--                                                    <img src="{{asset('img/client3.png')}}" alt="">--}}
{{--                                                    <div>--}}
{{--                                                        <h4> Theresa Flores</h4>--}}
{{--                                                        <span>Finance Expert</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-1">--}}
{{--                                        </div>--}}
{{--                                        <div class="review_blocks col-sm-5">--}}
{{--                                            <div class="testimonial">--}}
{{--                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>--}}
{{--                                                <div class="profil_review_conatner">--}}
{{--                                                    <img src="{{asset('img/client2.png')}}" alt="">--}}
{{--                                                    <div>--}}
{{--                                                        <h4> Theresa Flores</h4>--}}
{{--                                                        <span>Finance Expert</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Carousel controls -->--}}
{{--                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">--}}
{{--                                <i class="fa fa-chevron-left" id="left_icon"></i>--}}
{{--                            </a>--}}
{{--                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">--}}
{{--                                <i class="fa fa-chevron-right" id="right_icon"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section id="help_container">--}}
{{--            <div class="help_left">--}}
{{--                <h2>We are here <br> to help you</h2>--}}
{{--                <div class="help_text_container">--}}
{{--                    <h5>For customers</h5>--}}
{{--                    <p> Hiring qualified linguists with industry <br> experience and specific knowledge for <br> your project.</p>--}}
{{--                    <a href="">Find Translator &nbsp;&nbsp; <i class="fas fa-arrow-right"></i></a>--}}

{{--                    <h5>For translators</h5>--}}
{{--                    <p> Earn more, connect with corporate and <br> individual customers directly without intermediaries.</p>--}}
{{--                    <a href="">Find Job &nbsp; &nbsp; <i class="fas fa-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <img src="{{asset('img/Image(2).png')}}" alt="" class="img-fluid">--}}
{{--        </section>--}}
{{--        <section id="start_using_container">--}}
{{--            <div class="start_using_left">--}}
{{--                <h4>Start using the platform to find the best professional translators to match your requirements</h4>--}}
{{--            </div>--}}
{{--            <div class="start_using_right">--}}
{{--                <a href=""> Get Started</a>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
