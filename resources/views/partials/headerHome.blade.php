<div id="header_background">
    <div class="my_container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" id="header2_navbar">
                <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto white_nav" id="header2_navbar_ul">
                        @include('partials.includes.top_navbar')
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @include('partials.includes.authNav',["header_name"=>"home_header_"])
                    </ul>
                </div>
            </nav>
            <div class="hedding_text_container">

                <h1>A Digital Workspace For<br> The Legal Industry</h1>
                <h3>You have the right to an attorney; TalkCounsel’s pool of<br> vetted lawyers has got you covered</h3>

                <!-- search Customer and Translatior start -->
                @if(request()->route()->getName() == 'home')
                    <form action="" id="home_form">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active" id="label1">
                                <input type="radio" name="options" id="hatchback" autocomplete="off" checked> I am a
                                Client
                            </label>
                            <label class="btn btn-secondary" id="label2">
                                <input type="radio" name="options" id="sedan" autocomplete="off"> I am a Lawyer
                            </label>
                        </div>
                        <div class="select_container">
                            <div class="select_blocks">
                                <p>Select BILLING METHOD</p>
                                <select class="" name="">
                                    <option value="{{ PaymentType::hour }}">Per Hour</option>
                                    <option value="{{ PaymentType::fixed }}">Fixed</option>
                                </select>
                            </div>
                            <div class="select_blocks">
                                <p>SELECT SPECIALIZATION</p>
                                <select class="" name="specialization">
                                    @if(count($specializations)>0)
                                        @foreach($specializations as $specialization)
                                            <option
                                                value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="select_blocks">
                                <p>Select country</p>
                                <select class="" name="country">
                                    @if(count($countries)>0)
                                        @foreach($countries as $county)
                                            <option class="{{ $county->id }}">{{ $county->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div>
                                <input type="submit" name="search" class="" value="Search" id="home_form_search_btn">
                            </div>
                        </div>
                    </form>
            @endif
            <!-- search Customer and Translatior start -->
            </div>
        </header>
    </div>
</div>
