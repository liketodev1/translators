@extends('lawyer.app')
@section('title','Profile')
@section('content')
    <!--start myProfile-->
    <div class="bg-color-t">
        <section class="container-fluid  container-t content">
            <div class="col">
                <div class="row no-gutters right-block">
                    <div class="col-12">
                        <form action="{{ route('save_client_profile') }}" method="post" id="clientProfile"
                              class="form"
                              enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="profile">

                                {{--Industry specialization start--}}
                                <div class="profile-section">
                                    <div class="mb-3" id="messageContainer">
                                        @include('lawyer.partials.alert')
                                    </div>
                                    <h1>Post A Job</h1>
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Specializations</h4>
                                            <p class="profile-rows-text">
                                                Please choose the preferred specialisation (s) for your job to enable us
                                                identify the right attorney for you.
                                            </p>
                                            @php
                                                $count = count($specializations);
                                            @endphp
                                            @if($count>0)
                                                <div class="row no-gutters">
                                                    @php($totalServices = $count)
                                                    @php($currentRow = 0)
                                                    @php($serviceCount = 0)
                                                    @foreach($specializations as $item)
                                                        @if($currentRow == 0)
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                                <ul class="checkbox-list">
                                                                    @endif
                                                                    <li>
                                                                        <div class="check-block">
                                                                            <input type="checkbox"
                                                                                   name="specialization[]"
                                                                                   class="custom-control-input specialization"
                                                                                   id="ch_{{ $item->id }}"
                                                                                   value="{{ $item->id }}"
                                                                                   @foreach(Auth::user()->specializations as $srz)
                                                                                   @if($srz->id == $item->id)
                                                                                   checked
                                                                                @endif
                                                                                @endforeach
                                                                            >
                                                                            <label class="custom-control-label"
                                                                                   for="ch_{{ $item->id }}">{{ $item->name }}</label>
                                                                        </div>
                                                                    </li>
                                                                    @php($serviceCount ++)
                                                                    @php($currentRow ++)
                                                                    @if($currentRow == $count/3  || $serviceCount == $totalServices)
                                                                        @php($currentRow = 0)
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="error-container">
                                                    <ul class="error-list" id="specialization_errors"></ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{--Industry specialization end--}}

                                {{--start Practice Location block --}}
                                <div class="profile-section practice-location-section">
                                    <div class="row no-gutters">
                                        <div class="col profile-rows">
                                            <h4 class="profile-rows-title">Location
                                                <span class="profile-rows-title-sub"></span>
                                            </h4>
                                            <p class="profile-rows-sub-title">Please choose your location to enable
                                                TalkCounsel match your job to attorneys near you. </p>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-md-6">
                                            <select name="profile[country]"
                                                    class="selectpicker  per-hour-border form-control"
                                                    data-style="btn-default">
                                                @if(count($country))
                                                    @foreach($country as $item)
                                                        <option
                                                            @if(Auth::user()->address &&  Auth::user()->address->country == $item->id)
                                                            selected
                                                            @endif
                                                            value="{{ $item->id }}">{{ $item->name  }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="error-container">
                                                <ul class="error-list" id="country_errors"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="profile[state]"
                                                   class="form-control" id="state"
                                                   placeholder="State"
                                            >
                                            <div class="error-container">
                                                <ul class="error-list" id="state_errors"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <input type="text" name="profile[city]"
                                                   class="form-control" id="city"
                                                   placeholder="City"
                                            >
                                            <div class="error-container">
                                                <ul class="error-list" id="city_errors"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="profile[address]"
                                                   class="form-control" id="address"
                                                   placeholder="Address"
                                            >
                                            <div class="error-container">
                                                <ul class="error-list" id="address_errors"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--end Practice Location block --}}


                                {{--start Billings & Malpractice Insurance block--}}
                                <div class="profile-section">
                                    <div class="row no-gutters">
                                        <div class="col profile-rows">
                                            <h4 class="profile-rows-title">Billing
                                                <span class="profile-rows-title-sub"></span>
                                            </h4>
                                            <p class="profile-rows-sub-title">Please specify your preferred billing
                                                method.</p>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="row no-gutters experience-row d-flex justify-content-between">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 exp-section">
                                                    <div class="input-group">
                                                        <select name="rate_type"
                                                                class="selectpicker per-hour-border"
                                                                data-style="btn-default">
                                                            <option
                                                                @if(Auth::user()->profile && PaymentType::hour == Auth::user()->profile->rate_type)
                                                                selected
                                                                @endif
                                                                value="{{ PaymentType::hour }}">Per Hour
                                                            </option>
                                                            <option
                                                                @if(Auth::user()->profile && PaymentType::fixed == Auth::user()->profile->rate_type)
                                                                selected
                                                                @endif
                                                                value="{{ PaymentType::fixed }}">Fixed
                                                            </option>
                                                        </select>
                                                        <input type="text" name="profile[rate]" class="form-control" id="rate" placeholder="$..." value="12">

                                                    </div>
                                                    <div class="error-container">
                                                        <ul class="error-list" id="rate_errors"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- end Billings & Malpractice Insurance block--}}


                            <!--start biography block-->
                                <div class="profile-section">
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Job Description
                                                <span class="profile-rows-title-sub"></span>
                                            </h4>
                                            <p class="profile-rows-sub-title">Please describe your legal needs in a few
                                                sentence to enable us identify the best attorney for your job.
                                            </p>
                                        </div>

                                        <div class="col-12">
                                            <div class="row no-gutters ">
                                                <textarea rows="4" class="form-control"
                                                          name="post_description">@if(Auth::user()->profile){{ Auth::user()->profile->biography }}@endif</textarea>
                                            </div>
                                            <div class="error-container">
{{--                                                <ul class="error-list" id="biography_errors"></ul>--}}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary btn-verification">Save Profile</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end biography block-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--end myProfile-->

@endsection

@push('scripts')
    <script src="{{ asset('translators/js/client_profile.js') }}"></script>
@endpush
