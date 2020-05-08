<!-- start header -->
<div id="app">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand logo" href="{{route('home')}}"><img src="{{asset('img/logo1.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @include('partials.includes.top_navbar')
                </ul>
                <!-- navbar-laravel-->
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a {{--id="login"--}} class="<!--nav-link--> btn  my-2 my-sm-0 login"
                                       href="{{ route('login') }}">{{ __('form.login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a {{--id="signup"--}} class="<!--nav-link--> btn  my-2 my-sm-0 sign"
                                           href="{{ route('register') }}">{{ __('form.register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
{{--                                        <a class="dropdown-item"--}}
{{--                                           href="{{route("user.account")}}">{{__("form.account")}}</a>--}}
{{--                                        <a class="dropdown-item"--}}
{{--                                           href="{{route("user.changePass")}}">{{__("form.changePass")}}</a>--}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                            {{ __('global.logout') }}
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
</div>
<!-- end header -->
