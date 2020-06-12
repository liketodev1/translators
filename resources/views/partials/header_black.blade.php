<div class="all_container_2">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " id="header1_navbar">
            <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo1.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto black_menu">
                    @include('partials.includes.top_navbar')
                </ul>
                <ul class="navbar-nav ml-auto">
                    @include('partials.includes.authNav',['header_name'=>'default_header_'])
                </ul>
            </div>
        </nav>
    </header>
</div>
