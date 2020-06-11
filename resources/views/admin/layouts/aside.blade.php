@php
    $routeName =Route::currentRouteName();
    $route = Route::current();
    $action = Route::currentRouteAction();
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
                <li class="nav-item {{ $routeName=='admin.terms.index'?'menu-open':'' }}">
                    <a href="{{ route('admin.terms.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Terms
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='admin.privacy_policy.index'?'menu-open':'' }}">
                    <a href="{{ route('admin.privacy_policy.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Privacy Policy
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ $routeName=='admin.legal_areas.index'?'menu-open':'' }}">
                    <a href="{{ route('admin.legal_areas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Legal areas
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
