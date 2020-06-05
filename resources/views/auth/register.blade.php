@extends('layouts.app')
@section('content')
    <!--start SignUp-->
    <section class="sign-up">
        <ul class="nav d-flex justify-content-center native-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="translator-info-tab" data-toggle="tab"
                   href="#translator-info" role="tab" aria-controls="translator-info"
                   aria-selected="true">{{__('global.basicInfo')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="confirm-info-tab" data-toggle="tab" href="#confirm-info" role="tab"
                   aria-controls="confirm-info" aria-selected="false">{{__('global.confirmation')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="complete-tab" data-toggle="tab" href="#complete" role="tab"
                   aria-controls="complete" aria-selected="false">{{__('global.completing')}}</a>
            </li>
        </ul>
        <div class="container">
            <div class="row no-gutters basic-form d-flex justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <h5 class="title">Join Us</h5>
                        </div>
                        <div class="col-12">
                            <p class="rede some-text">
                                To register please fill in the fields below. Please note that all fields are required to create an account. On the next step, you will need to confirm your email.
                            </p>
                        </div>
                        <div class="col-12 form-box">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="custom-radios">
                                        <input type="radio"
                                               class="form-control @error('role') is-invalid @enderror"
                                               id="{{ ConstUserRole::ROLE_LAWYER }}"
                                               name="role"
                                               checked
                                               value="{{ ConstUserRole::ROLE_LAWYER }}"
                                        >
                                        <label for="{{ ConstUserRole::ROLE_LAWYER }}">I'm a lawyer</label>

                                        <input type="radio"
                                               class="form-control @error('role') is-invalid @enderror"
                                               id="{{ ConstUserRole::ROLE_CLIENT }}"
                                               name="role"
                                               value="{{ ConstUserRole::ROLE_CLIENT }}"
                                        >
                                        <label for="{{ ConstUserRole::ROLE_CLIENT }}">I'm a client</label>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="f_name">{{ __('auth.first_name') }}</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="f_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="l_name">{{ __('auth.last_name') }}</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="l_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">{{ __('auth.phone') }}</label>
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus aria-describedby="inputGroupPrepend3">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('auth.email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@example.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pass">{{ __('auth.password') }}</label>
                                    <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="conf_pass">{{ __('auth.confirm_password') }}</label>
                                    <input type="password" class="form-control" id="conf_pass" name="password_confirmation" required autocomplete="new-password">
                                    <div class="error">{{__('global.textRegisterBlade2')}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input is-invalid" type="checkbox" {{--value=""--}}
                                               id="check" name="privacy">
                                        <label class="form-check-label" for="check">
                                            {{__('global.textRegisterBlade3')}} <a target="_blank" href="{{route('terms')}}">{{__('global.terms')}}</a> {{__('global.and')}}
                                            <br><a target="_blank" href="{{route('privacy_policy')}}">{{__('global.privacyPolicy')}}</a>
                                        </label>
                                        @error('privacy')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-continue" type="submit">{{__('global.continue')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end translator block-->
        </div>
    </section>
    <!--end SignUp-->
@endsection
