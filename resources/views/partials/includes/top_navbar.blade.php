@php
    $name   = Route::currentRouteName();
@endphp
<li class="nav-item">
    <a class="nav-link" href="#">{{__('global.findJob')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">{{__('global.findTranslator')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $name=='how_it_works'?'active':'' }}" href="{{route('how_it_works')}}">{{__('global.howItWorks')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $name=='about_us'?'active':'' }}" href="{{ route('about_us') }}">{{__('global.about')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">{{__('global.resources')}}</a>
</li>

{{--<li class="nav-item">--}}
{{--    <a class="nav-link" href="#">{{__('global.blog')}}<span class="sr-only">(current)</span></a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--    <a class="nav-link" href="#">{{__('global.help')}}<span class="sr-only">(current)</span></a>--}}
{{--</li>--}}
