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
                            <h5 class="title">{{__('global.joinToTalkNative')}}</h5>
                        </div>
                        <div class="col-12">
                            <p class="rede some-text">
                                {{__('global.textRegisterBlade1')}}
                            </p>
                        </div>
                        <div class="col-12 form-box">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="custom-radios">
                                        <input type="radio" class="form-control @error('role') is-invalid @enderror" id="translator" name="role" checked
                                               value="{{ConstUserRole::TRANSLATOR}}">
                                        <label for="translator">{{ConstUserRole::TRANSLATOR}}</label>

                                        <input type="radio" class="form-control @error('role') is-invalid @enderror" id="customer" name="role" value="{{ConstUserRole::CUSTOMER}}">
                                        <label for="customer">{{ConstUserRole::CUSTOMER}}</label>
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

{{--    //--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('auth.role') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <select name="role" class="form-control @error('role') is-invalid @enderror" id="role">--}}
{{--                                    <option value="{{ConstUserRole::TRANSLATOR}}">{{ConstUserRole::TRANSLATOR}}</option>--}}
{{--                                    <option value="{{ConstUserRole::CUSTOMER}}">{{ConstUserRole::CUSTOMER}}</option>--}}
{{--                                </select>--}}
{{--                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>--}}

{{--                                @error('role')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('auth.first_name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>--}}

{{--                                @error('first_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('auth.last_name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>--}}

{{--                                @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('auth.phone') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>--}}

{{--                                @error('phone')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('auth.confirm_password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
