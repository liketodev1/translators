<header id="homeHeader">
    <nav class="navbar navbar-expand-lg navbar-light" id="header2_navbar">
        <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="header2_navbar_ul">
                @include('partials.includes.top_navbar')
            </ul>
            @include('partials.includes.authNav')
        </div>
    </nav>

    <div class="hedding_text_container">
        <h1>Matchmaking platform for<br> the translation industry</h1>
        <h3>Connecting you to global community of leading translators<br> and interpreters with specialised industry
            expertise</h3>

        <!-- search Customer and Translatior start -->
        @if(request()->route()->getName() == 'home')
            <form action="" id="home_form">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active" id="label1">
                        <input type="radio" name="options" id="hatchback" autocomplete="off" checked> I am a Customer
                    </label>
                    <label class="btn btn-secondary" id="label2">
                        <input type="radio" name="options" id="sedan" autocomplete="off"> I am a Translator
                    </label>
                </div>
                <div class="select_container">
                    <div class="select_blocks">
                        <p>Select service</p>
                        <select class="" name="">
                            <option>Translation</option>
                            <option>Translation</option>
                            <option>Translation</option>
                            <option>Translation</option>
                        </select>
                    </div>
                    <div class="select_blocks">
                        <p>Select industry</p>
                        <select class="" name="">
                            <option>Business & Finance</option>
                            <option>Business & Finance</option>
                            <option>Business & Finance</option>
                            <option>Business & Finance</option>
                        </select>
                    </div>
                    <div class="select_blocks">
                        <p>Select language</p>
                        <select class="" name="">
                            <option>English to French</option>
                            <option>English to French</option>
                            <option>English to French</option>
                            <option>English to French</option>
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
