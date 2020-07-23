@php
    $routeName = explode('.',Route::currentRouteName())[1];
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset('bower_components/admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

{{--                <li class="nav-item {{ $routeName=='admin.users.index'?'menu-open':'' }}">--}}
{{--                    <a href="{{ route('admin.users.index') }}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-users"></i>--}}
{{--                        <p>--}}
{{--                            Users--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item {{ $routeName=='terms'?'menu-open':'' }}">
                    <a href="{{ route('admin.terms.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Terms
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='privacy_policy'?'menu-open':'' }}">
                    <a href="{{ route('admin.privacy_policy.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Privacy Policy
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='legal_areas'?'menu-open':'' }}">
                    <a href="{{ route('admin.legal_areas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Legal areas
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='tag'?'menu-open':'' }}">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='blog'?'menu-open':'' }}">
                    <a href="{{ route('admin.blog.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='contact-messages'?'menu-open':'' }}">
                    <a href="{{ route('admin.contact-messages.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Contact Messages
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='key_features'?'menu-open':'' }}">
                    <a href="{{ route('admin.key_features.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Key features
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
