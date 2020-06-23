<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="16x16 32x32" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="{{ asset('css/last-changes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-popup.css') }}">

    @include('partials.includes.css')
    @include('partials.includes.top_js')
</head>
<body>
<div id="app">
    @include('partials.header_'.(isset($headerType)?$headerType:'black'))
    <div class="container">
        @include('flash::message')
    </div>
    <main>

        @yield('content')
    </main>
    @include('partials.footer')
    @if(!Auth::user())
        @include('partials.login_popup')
    @endif
    @include('partials.includes.bottom_js')
</div>
</body>
</html>
