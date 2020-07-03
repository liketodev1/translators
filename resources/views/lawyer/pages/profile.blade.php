@extends('lawyer.app')
@section('title','Profile')
@section('content')
    <!--start myProfile-->
    <div class="bg-color-t">
        <section class="container-fluid  container-t content">
            <div class="row row no-gutters d-flex justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                    <ul class="left-list">
                        <li class="item active"><a href="{{ route('save_lawyer_profile') }}">My Profile</a></li>
                        <li class="item"><a href="#">Membership</a></li>
                        <li class="item"><a href="#">Payment & Finance</a></li>
                        <li class="item"><a href="#">Notifications</a></li>
                        <li class="item"><a href="#">Password & security</a></li>
                        <li class="item"><a href="#">Profile verification</a></li>
                        <li class="item"><a href="#">Account Settings</a></li>
                    </ul>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-12">
                    <div class="row no-gutters right-block">
                        <div class="col-12">
                            <form action="{{ route('save_lawyer_profile') }}" method="post" id="translatorProfile"
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
                                        <h1>My Profile</h1>
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-description">
                                                <h5 class=" profile-description-title">Your profile is not yet displayed
                                                    in the Attorneys list</h5>
                                                <p class="profile-description-text">Welcome to TalkCounsel! We do our
                                                    best to ensure that only leading attorneys are on our platform. That
                                                    means all incoming applications are thoroughly vetted before
                                                    publication. Complete your profile to prioritize your account for review.
                                                </p>
                                                <a class="profile-l-more" href="#">Learn more</a>
                                            </div>
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Specializations (max 3)</h4>
                                                <p class="profile-rows-text">Please limit your selections to Legal
                                                    Specialization that best represent your current practice focus and
                                                    expertise.</p>
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
                                                <h4 class="profile-rows-title">Practice Location block
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                                <p class="profile-rows-sub-title">TalkCounsel uses the location to help
                                                    clients find attorneys in their areas.</p>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">

                                            <div class="col-md-6">
                                                <select name="profile[country_id]" class="selectpicker  per-hour-border form-control"
                                                        data-style="btn-default">
                                                    @if(count($country))
                                                        @foreach($country as $item)
                                                            <option
                                                                @if(Auth::user()->profile &&  Auth::user()->profile->country_id == $item->id)
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
                                                       @if(Auth::user()->profile)
                                                       value="{{ Auth::user()->profile->state }}"
                                                    @endif
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
                                                       @if(Auth::user()->profile)
                                                       value="{{ Auth::user()->profile->city }}"
                                                    @endif
                                                >
                                                <div class="error-container">
                                                    <ul class="error-list" id="city_errors"></ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="profile[address]"
                                                       class="form-control" id="address"
                                                       placeholder="Address"
                                                       @if(Auth::user()->profile)
                                                       value="{{ Auth::user()->profile->address }}"
                                                    @endif
                                                >
                                                <div class="error-container">
                                                    <ul class="error-list" id="address_errors"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--end Practice Location block --}}

                                    {{--start Languages Spoken block --}}
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Languages Spoken<span
                                                        class="profile-rows-title-sub"> </span></h4>
                                                <p class="profile-rows-sub-title">Add Language Proficiency</p>
                                            </div>

                                            <table
                                                class="table table-borderless lang-row table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                                                <tbody id="langTable">
                                                <!--start lang-row-->
                                                @if(count(Auth::user()->languageLevel)==0)
                                                    <tr>
                                                        <td class="w-398">
                                                            <div class="languages-select">
                                                                <div class="input-group">
                                                                    <select name="language[]" class="selectpicker"
                                                                            data-style="btn-default">
                                                                        @if(count($languages)>0)
                                                                            @foreach($languages as $language)
                                                                                <option
                                                                                    value="{{ $language->id }}">{{ $language->name }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    <select name="languageLevel[]" class="selectpicker"
                                                                            data-style="btn-default">
                                                                        @if(count($languageLevels)>0)
                                                                            @foreach($languageLevels as $level)
                                                                                <option
                                                                                    value="{{ $level->id }}">{{ $level->name }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @include('lawyer.partials.languages',['data' => Auth::user()->languageLevel])
                                                <input type="hidden" name="delLang" id="deleteLanguages">
                                                <!--end lang-row-->
                                                </tbody>
                                            </table>
                                            <a href="javascript:void(0);" class="add-language-pair">
                                                <img src="{{ asset('img/plus.svg') }}" alt="">Add language
                                            </a>
                                        </div>
                                    </div>
                                    {{--end Languages Spoken block --}}

                                    {{--start Billings & Malpractice Insurance block--}}
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col profile-rows">
                                                <h4 class="profile-rows-title">Billings & Malpractice Insurance
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                                <p class="profile-rows-sub-title">Your preferred billing rate will be
                                                    displayed on your profile.
                                                    (You can only choose one billing rate).</p>
                                            </div>
                                            <div class="col-12">
                                                <div
                                                    class="row no-gutters experience-row d-flex justify-content-between">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 exp-section">
                                                        <div class="input-group">
                                                            <select name="profile[rate_type]" class="selectpicker per-hour-border"
                                                                    data-style="btn-default">
                                                                <option
                                                                    @if(Auth::user()->profile && PaymentType::hour == Auth::user()->profile->rate_type)
                                                                        selected
                                                                    @endif
                                                                    value="{{ PaymentType::hour }}">Per Hour</option>
                                                                <option
                                                                    @if(Auth::user()->profile && PaymentType::fixed == Auth::user()->profile->rate_type)
                                                                        selected
                                                                    @endif
                                                                    value="{{ PaymentType::fixed }}">Fixed</option>
                                                            </select>
                                                            <input type="text"
                                                                   name="profile[rate]"
                                                                   class="form-control"
                                                                   id="rate"
                                                                   placeholder="$..."
                                                                   @if(Auth::user()->profile)
                                                                   value="{{ Auth::user()->profile->rate }}"
                                                                @endif
                                                            >
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


                                <!--start Qualifications and certifications-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Qualifications and certifications <span
                                                        class="profile-rows-title-sub"> </span></h4>
                                                <p class="profile-rows-sub-title">You can upload images of certificates
                                                    or
                                                    other
                                                    documents confirming your qualification.
                                                </p>
                                            </div>
                                            <div id="drop-area" class="upload-btn-wrapper col-12 profile-rows">
                                                <button type="button" class="btn"><img
                                                        src="{{ asset('img/upload.svg') }}"
                                                        alt=""></button>
                                                <input type="file" id="files" name="certificates[]" class="inputfile"
                                                       multiple/>
                                                <label for="files" class="upload-label">Drag your files here or click to
                                                    upload</label>
                                                <input type="hidden" name="delete_certificate" id="delete_certificate">
                                            </div>
                                            @if(Auth::user()->certifications)
                                                <div class="col-12 images-preview-block">
                                                    <div id="gallery"
                                                         class="row no-gutters d-flex justify-content-lg-start">
                                                        @foreach(Auth::user()->certifications as $item)
                                                            <div class="preview-block-item"
                                                                 id="certificate_{{ $item->id }}">
                                                                <img src="{{ Storage::url($item->path) }}"
                                                                     alt="Thumbnail">
                                                                <button type="button"
                                                                        class="btn preview-block-item-delete"
                                                                        data-current="certificate_{{ $item->id }}"
                                                                        data-id="{{ $item->id }}">
                                                                    <img src="{{ asset('img/delete.svg') }}"
                                                                         alt="delete">
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="error-container">
                                                <ul class="error-list" id="certificate_errors"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end Qualifications and certifications-->

                                    <!--start Experience block-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Experience
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                            </div>
                                            <div class="col-12">
                                                <div
                                                    class="row no-gutters experience-row d-flex justify-content-between">
                                                    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 exp-section">
                                                        <label for="years">Years of experience:</label>
                                                        <input type="number"
                                                               name="profile[experience]"
                                                               class="form-control"
                                                               min="0"
                                                               id="years"
                                                               @if(Auth::user()->profile)
                                                                    value="{{ Auth::user()->profile->experience }}"
                                                               @endif
                                                        >
                                                        <div class="error-container">
                                                            <ul class="error-list" id="experience_errors"></ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 exp-section">
                                                        <label>Experience in different sectors:</label>
                                                        <div class="switch-group d-flex ">
                                                            <div class="switch-item">
                                                                <label class="switch">
                                                                    <input type="checkbox"
                                                                           name="profile[public_sector]"
                                                                           class="experience_switch"
                                                                           @if(Auth::user()->profile && Auth::user()->profile->public_sector)
                                                                           checked
                                                                        @endif
                                                                    >
                                                                    <span class="slider"></span>
                                                                </label>
                                                                Public sector
                                                            </div>
                                                            <div class="switch-item">
                                                                <label class="switch">
                                                                    <input type="checkbox"
                                                                           name="profile[private_sector]"
                                                                           class="experience_switch"
                                                                           @if(Auth::user()->profile && Auth::user()->profile->private_sector)
                                                                           checked
                                                                        @endif
                                                                    >
                                                                    <span class="slider"></span>
                                                                </label>
                                                                Private sector
                                                            </div>
                                                            <div class="switch-item">
                                                                <label class="switch">
                                                                    <input type="checkbox"
                                                                           name="profile[education]"
                                                                           class="experience_switch"
                                                                           @if(Auth::user()->profile && Auth::user()->profile->education)
                                                                           checked
                                                                        @endif
                                                                    >
                                                                    <span class="slider"></span>
                                                                </label>
                                                                Education
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end Experience block-->

                                    <!--start Linked Accounts block-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Linkedin Account
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                            </div>
                                            <div class="col-12">
                                                <div class="row no-gutters linkedin">
                                                    <label for="linkedin-url">Linkedin:</label>
                                                    <input type="url" name="profile[linkedin]"
                                                           class="form-control linkedin-url"
                                                           id="linkedin-url"
                                                           placeholder="https://"
                                                           @if(Auth::user()->profile)
                                                           value=" {{ Auth::user()->profile->linkedin }}"
                                                        @endif
                                                    >
                                                </div>
                                                <div class="error-container">
                                                    <ul class="error-list" id="linkedin_errors"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end Linked Accounts block-->

                                    <!--start Previous clientsblock-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Previous clients
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                                <p class="profile-rows-sub-title">Tell us about your previous clients.
                                                    Enter
                                                    the
                                                    names of your clients by separating them with commas. To confirm
                                                    this
                                                    list,
                                                    you will need to provide proof that you have previously worked with
                                                    these
                                                    clients. These may be screenshots or photos of communication with
                                                    the
                                                    customer by e-mail, in invoices, etc.
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="row no-gutters clients">
                                                    <select class="form-control clients-tags" multiple="multiple">
                                                        {{--                                                    <option selected="selected"></option>--}}
                                                        {{--                                                    <option>white</option>--}}
                                                        {{--                                                    <option selected="selected">purple</option>--}}
                                                    </select>
                                                </div>
                                            </div>
                                            {{--               <div class="col-12">
                                                               <div class="row no-gutters attach-file-block">
                                                                   <label for="upload">
                                                                       <img src="{{ asset('img/skrep.svg') }}" alt="attach-file">
                                                                       <input type="file" id="upload" style="display:none">
                                                                       Attach file
                                                                   </label>

                                                               </div>
                                                               <div class="row no-gutters attached-files-block">
                                                                   <ul class="list-group">
                                                                       <li>screenshot_12-05-2020-15-44.png
                                                                           <button type="button" class="btn preview-block-item-delete">
                                                                               <img src="{{ asset('img/delete.svg') }}" alt="delete">
                                                                           </button>
                                                                       </li>
                                                                       <li>filename.jpg
                                                                           <button type="button" class="btn preview-block-item-delete">
                                                                               <img src="{{ asset('img/delete.svg') }}" alt="delete">
                                                                           </button>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>--}}
                                        </div>
                                    </div>
                                    <!--end Previous clients block-->

                                    <!--start Resume block-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Resume
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                                <p class="profile-rows-sub-title">Add your resume. Your resume can be
                                                    downloaded
                                                    by prospective clients to learn more about you.
                                                    Available formats *.pdf, *.doc, *.docx.
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="row no-gutters attach-file-block">
                                                    <label for="upload-resume">
                                                        <img src="{{ asset('img/upload-small.svg') }}"
                                                             alt="upload-resume">
                                                        <input type="file" name="resume" id="upload-resume"
                                                               class="d-none">
                                                        Upload resume
                                                    </label>
                                                </div>
                                                @if(Auth::user()->profile && Auth::user()->profile->resume)
                                                    <div class="row no-gutters attach-file-block">
                                                        <a href="{{ Storage::url(Auth::user()->profile->resume) }}"
                                                           download="">Download resume</a>
                                                    </div>
                                                @endif
                                                <div class="error-container">
                                                    <ul class="error-list" id="resume_errors"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end Resume block-->

                                    <!--start biography block-->
                                    <div class="profile-section">
                                        <div class="row no-gutters">
                                            <div class="col-12 profile-rows">
                                                <h4 class="profile-rows-title">Short biography
                                                    <span class="profile-rows-title-sub"></span>
                                                </h4>
                                                <p class="profile-rows-sub-title">Tell us more about yourself, describe
                                                    your
                                                    strengths. Clients will see this information in your profile.
                                                </p>
                                            </div>

                                            <div class="col-12">
                                                <div class="row no-gutters ">
                                                <textarea rows="4" class="form-control"
                                                          name="profile[biography]">@if(Auth::user()->profile){{ Auth::user()->profile->biography }}@endif</textarea>
                                                    <div class="error">Maximum 750 characters
                                                    </div>
                                                </div>
                                                <div class="error-container">
                                                    <ul class="error-list" id="biography_errors"></ul>
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
            </div>
        </section>
    </div>
    <!--end myProfile-->

<input type="hidden" id="langPrototype" value='
<tr>
<td>
    <div class="languages-select">
        <div class="input-group">
            <select name="language[]" class="selectpicker"
                    data-style="btn-default">
                    <option disabled selected>Chose language</option>
            @if(count($languages)>0)
                @foreach($languages as $language)
                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                 @endforeach
            @endif
            </select>

        <select name="languageLevel[]" class="selectpicker"
                data-style="btn-default">
                <option disabled selected>Chose level</option>
            @if(count($languageLevels)>0)
                @foreach($languageLevels as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
</td>
<td>
    <div class="languages-delete">
        <button type="button" class="btn delete-row">
            <img src="{{ asset('img/delete-t.svg') }}" alt="delete">
        </button>
    </div>
</td>
</tr>

'>
@endsection

@push('scripts')
    <script src="{{ asset('translators/js/profile.js') }}"></script>
@endpush
