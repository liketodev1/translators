@php
    $name = Route::currentRouteName();
@endphp
<li class="nav-item">
    <a class="nav-link {{ $name=='find_a_job'?'active':'' }}" href="{{ route('find_a_job') }}">{{__('global.findJob')}}</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $name=='our_lawyers'?'active':'' }}" href="{{ route('our_lawyers') }}">{{__('global.findTranslator')}}</a>
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
