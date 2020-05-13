<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="16x16 32x32" type="image/png">


    <!--start bootstrap-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">

    <!--end bootstrap-->

    <!-- select 2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
    <!-- select 2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/translatorProfile.css') }}">
    <title>Translate.io</title>
</head>

<body>
@include('translators.partials.header')

@yield('content')

<input type="hidden" id="base_url" value="{{ url('') }}">
<!--start scripts-->
<script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<!-- select 2 -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- select 2 -->
@yield('javascript')
<!--end scripts-->
</body>
</html>
