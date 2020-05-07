@extends('layouts.app')

@section('content')

    <section class="step2_container">
        <div id="steps_block">
            <a href=""><span class="span1"><i class="fas fa-check-circle"></i></span>{{__('global.basicInfo')}}</a>
            <a href="" class="active_a"><span class="span2">2</span>{{__('global.confirmation')}}</a>
            <a href=""><span class="span3">3</span>{{__('global.completing')}}</a>
        </div>
        <div id="confirmation_container">
            <div id="confirmation">
                <h3>{{__('global.confirmation')}}</h3>
                <p>{{__('global.YouNeedConfEmail')}}</p>
            </div>
            <div id="code_from_email_container">
                <p>{{__('global.textConfirmationBladePart1')}} <span>{{$user->email}}</span>.{{__('global.textConfirmationBladePart2')}} </p>
                <p class="Code_email_p">{{__('global.codeFromEmail')}}</p>
                <form class="d-inline Code_email_p" method="POST" action="{{ route('confirm', $user) }}">
                    @csrf
                    <input type="text" name="token">
                    <button type="submit" class="confirm_email">{{ __('Confirm email') }}</button>.
                </form>


            </div>
        </div>
    </section>
@endsection
