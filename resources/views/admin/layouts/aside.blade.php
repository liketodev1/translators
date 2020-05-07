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

                <li class="nav-item {{ $routeName=='admin.users.index'?'menu-open':'' }}">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ isset($type)?'menu-open':'' }}">
                    <a href="#" class="nav-link {{ isset($type)?'active':'' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Options
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.options.index',['type'=>1]) }}" class="nav-link  {{ isset($type) && $type==1?'active':'' }}">
                                <i class="nav-icon fas fa-language"></i>
                                <p>
                                    Languages
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.options.index',['type'=>2]) }}" class="nav-link  {{ isset($type) && $type==2?'active':'' }}">
                                <i class="nav-icon fas fa-language"></i>
                                <p>
                                    Specification
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.options.index',['type'=>3]) }}" class="nav-link  {{ isset($type) && $type==3?'active':'' }}">
                                <i class="nav-icon fas fa-language"></i>
                                <p>
                                    Industry specialization
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
