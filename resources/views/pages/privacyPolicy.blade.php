@extends('layouts.app')
@section('content')
    <div class="container">
        @if($policy)
        <h1><strong>{{$policy->title}}</strong></h1>

        <p>Last updated: {{$policy->updated_at}} </p>

        {!!  $policy->description !!}
        @else
            <p>{{__('global.notPrivacy')}}</p>
        @endif
    </div>
@endsection
