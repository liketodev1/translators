@guest
    <li class="nav-item {{$header_name}}default_link_login">
        <a data-toggle="modal" data-target="#login_modal" class="btn  my-2 my-sm-0 login"
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
        <a id="navbarDropdown" class="nav-link dropdown-toggle {{$header_name}}sign_in" href="#" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->first_name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @if(Auth::user()->role === ConstUserRole::ROLE_LAWYER)
                <a class="dropdown-item" href="{{ route('lawyer_profile') }}">Profile</a>
            @endif
            @if(Auth::user()->role === ConstUserRole::ADMIN)
                <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard</a>
            @endif
            @if(Auth::user()->role === ConstUserRole::ROLE_CLIENT)
                <a class="dropdown-item" href="{{ route('post.index') }}">My Posts</a>
            @endif
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('global.logout') }}
            </a>
            <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
