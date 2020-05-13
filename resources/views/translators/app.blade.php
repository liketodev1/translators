<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Translate.io</title>
    <!--start bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!--end bootstrap-->
    <!-- select 2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
    <!-- select 2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/translatorProfile.css') }}">
    @yield('stylesheet')
</head>

<body>
@include('translators.partials.header')

@yield('content')

<!--start myProfile-->
<section id="myProfile">

</section>
<!--end myProfile-->
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
