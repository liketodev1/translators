{{--<nav class="navbar navbar-expand-md navbar-light">--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--        <!-- Left Side Of Navbar -->--}}
{{--        <ul class="navbar-nav mr-auto">--}}

{{--        </ul>--}}

        <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @guest
                <li class="nav-item {{$header_name}}default_link_login">
                    <a {{--id="login"--}} class="<!--nav-link--> btn  my-2 my-sm-0 login"
                       href="{{ route('login') }}">{{ __('form.login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item {{$header_name}}default_link_signup">
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
                        @if(Auth::user()->role === ConstUserRole::TRANSLATOR)
                            <a class="dropdown-item" href="{{ route('translator_profile') }}">Profile</a>
                        @endif
                        @if(Auth::user()->role === ConstUserRole::ADMIN)
                            <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                            {{ __('global.logout') }}
                        </a>
{{--                            <form class="form-inline my-2 my-lg-0" id="login_signup_block">--}}
{{--                                <a href="#" class="btn  my-2 my-sm-0 login">Log In</a>--}}
{{--                                <a href="#" class="btn my-2 my-sm-0 sign">Sign UP</a>--}}
{{--                            </form>--}}
{{--                        <form  class="form-inline my-2 my-lg-0" id="login_signup_block" action="{{ route('logout') }}" method="POST"--}}
{{--                              style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
                            <form  class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
{{--    </div>--}}
{{--</nav>--}}
