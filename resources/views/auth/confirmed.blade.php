@extends("layouts.app")
@section('content')
    <section class="step3_container">
        <div id="steps_block_3">
            <a href=""><span class="span1"><i class="fas fa-check-circle"></i></span>{{__('global.basicInfo')}}</a>
            <a href=""><span class="span1"><i class="fas fa-check-circle"></i></span>{{__('global.confirmation')}}</a>
            <a href=""class="active_a"><span class="span2">3</span>{{__('global.completing')}}</a>
        </div>
        <div id="confirmation_container">
            <div id="confirmation">
                <h3>{{__('global.ThankYouForReg')}} </h3>
                <p>{{__('global.textCompleteBlade')}}</p>
                <a href="{{route('home')}}" class="Sign_account">{{__('global.completeSignIn')}}</a>
            </div>
        </div>
    </section>
@endsection
