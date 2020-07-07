<div class="my_container">
    <header  id="header_white">
        <nav class="navbar navbar-expand-lg navbar-dark" id="header2_navbar">
            <a class="navbar-brand logo" href="{{route('home')}}">
                <img src="{{ asset('img/logo.png')}} " alt="Logo">
            </a>
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
    </header>
</div>
