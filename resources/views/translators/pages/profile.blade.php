@extends('translators.app')


@section('content')
    <section class="container-fluid content">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12">
                <ul class="left-list">
                    <li class="item active"><a href="{{ route('translator_profile') }}">My Profile</a></li>
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
                        <form action="{{ route('save_translator_profile') }}" method="post" class="form"
                              enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="profile">

                                {{--Industry specialization start--}}
                                <div class="profile-section">
                                    <div class="mb-3">
                                        @include('translators.partials.alert')
                                    </div>
                                    <h1>My Profile</h1>
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-description">
                                            <h5 class=" profile-description-title">Your profile is not yet displayed in
                                                the
                                                translator list</h5>
                                            <p class="profile-description-text">
                                                We do our best to ensure that only professional and leading translators
                                                work
                                                on
                                                our platform. Therefore, we review every profile before publication.
                                                Please
                                                complete the information about yourself and then submit it for review.
                                                Our
                                                team
                                                will check your profile and after that your profile will be shown on our
                                                platform.
                                            </p>
                                            <a class="profile-l-more" href="#">Learn more</a>
                                        </div>
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Industry specialization <span
                                                    class="profile-rows-title-sub">(max 3)</span></h4>
                                            @if(count($industrySpecialization)>0)

                                                <div class="row no-gutters">
                                                    @php($totalServices = count($industrySpecialization))
                                                    @php($currentRow = 0)
                                                    @php($serviceCount = 0)
                                                    @foreach($industrySpecialization as $item)
                                                        @if($currentRow == 0)
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                                <ul class="checkbox-list">
                                                                    @endif
                                                                    <li>
                                                                        <div class="check-block">
                                                                            <input type="checkbox"
                                                                                   name="specializations[]"
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
                                                                    @php($currentRow ++)
                                                                    @php($serviceCount ++)
                                                                    @if($currentRow == 3 || $serviceCount == $totalServices)
                                                                        @php($currentRow = 0)
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{--Industry specialization end--}}

                                <div class="profile-section">
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Specification <span
                                                    class="profile-rows-title-sub"> </span></h4>
                                            @if(count($specialization)>0)
                                                <div class="row no-gutters">
                                                    @php($totalServices = count($specialization))
                                                    @php($currentRow = 0)
                                                    @php($serviceCount = 0)
                                                    @foreach($specialization as $item)
                                                        @if($currentRow == 0)
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                                <ul class="checkbox-list">
                                                                    @endif
                                                                    <li>
                                                                        <div class="check-block">
                                                                            <input type="checkbox"
                                                                                   name="specifications[]"
                                                                                   class="custom-control-input"
                                                                                   id="sp_{{ $item->id }}"
                                                                                   value="{{ $item->id }}"
                                                                                   @foreach(Auth::user()->specifications as $srz)
                                                                                   @if($srz->id == $item->id)
                                                                                   checked
                                                                                @endif
                                                                                @endforeach
                                                                            >
                                                                            <label class="custom-control-label"
                                                                                   for="sp_{{ $item->id }}">{{ $item->name }}</label>
                                                                        </div>
                                                                    </li>
                                                                    @php($currentRow ++)
                                                                    @php($serviceCount ++)
                                                                    @if($currentRow == 3 || $serviceCount == $totalServices)
                                                                        @php($currentRow = 0)
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>


                                <!--start language pair block-->
                                <div class="profile-section">
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Language pair <span
                                                    class="profile-rows-title-sub"> </span></h4>
                                            <p class="profile-rows-sub-title">Please select a language pair and specify
                                                the
                                                <strong>cost per word</strong> for three different timeframes (slow,
                                                standard, urgent).
                                            </p>
                                        </div>

                                        <table  class="table table-borderless lang-row table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Languages:</th>
                                                <th scope="col">Slow:</th>
                                                <th scope="col">Standard:</th>
                                                <th scope="col">Urgent:</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody id="langTable">
                                            <!--start lang-row-->
                                            <input type="hidden" id="deleteLanguages" name="deleteLangs">
                                            @if(Auth::user()->languages && count(Auth::user()->languages))
                                                @include('translators.partials.languages',['data'=>Auth::user()->languages])
                                            @else
                                                <tr>
                                                    <td>
                                                        <input type="hidden" name="langId[]">
                                                        <div class="languages-select">
                                                            <div class="input-group">
                                                                <select name="lang_from[]" class="selectpicker"
                                                                        data-style="btn-default">
                                                                    @foreach($language as $lang)
                                                                        <option selected
                                                                                value="{{ $lang->id }}">{{ $lang->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <select name="lang_to[]" class="selectpicker"
                                                                        data-style="btn-default">
                                                                    @foreach($language as $lang)
                                                                        <option selected
                                                                                value="{{ $lang->id }}">{{ $lang->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="languages-price">
                                                            <span>$</span>
                                                            <input type="number" class="form-control" name="slow[]">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="languages-price">
                                                            <span>$</span>
                                                            <input type="number" class="form-control" name="standard[]">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="languages-price">
                                                            <span>$</span>
                                                            <input type="number" class="form-control" name="urgent[]">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="languages-delete">
                                                            {{--                                                        <button type="button" class="btn delete-row">--}}
                                                            {{--                                                            <img src="{{ asset('img/delete.svg') }}" alt="delete">--}}
                                                            {{--                                                        </button>--}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif

                                            <!--end lang-row-->
                                            </tbody>
                                        </table>
                                        <a href="javascript:void(0);"
                                           class="add-language-pair"
                                        >
                                            <img src="{{ asset('img/plus.svg') }}" alt="">Add language pair
                                        </a>
                                    </div>
                                </div>
                                <!--end language pair block-->

                                <!--start Qualifications and certifications-->
                                <div class="profile-section">
                                    <div class="row no-gutters">
                                        <div class="col-12 profile-rows">
                                            <h4 class="profile-rows-title">Qualifications and certifications <span
                                                    class="profile-rows-title-sub"> </span></h4>
                                            <p class="profile-rows-sub-title">You can upload images of certificates or
                                                other
                                                documents confirming your qualification.
                                            </p>
                                        </div>
                                        <div id="drop-area" class="upload-btn-wrapper col-12 profile-rows">
                                            <button type="button" class="btn"><img src="{{ asset('img/upload.svg') }}"
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
                                                            <img src="{{ Storage::url($item->path) }}" alt="Thumbnail">
                                                            <button type="button" class="btn preview-block-item-delete"
                                                                    data-current="certificate_{{ $item->id }}"
                                                                    data-id="{{ $item->id }}">
                                                                <img src="{{ asset('img/delete.svg') }}" alt="delete">
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
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
                                            <div class="row no-gutters experience-row">
                                                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 exp-section">
                                                    <label for="years">Years of experience:</label>
                                                    <input type="number"
                                                           name="profile[experience]"
                                                           class="form-control"
                                                           id="years"
                                                           @if(Auth::user()->profile)
                                                           value="{{ Auth::user()->profile->experience }}"
                                                        @endif
                                                    >
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 ml-80 exp-section">
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
                                            <h4 class="profile-rows-title">Linked Account
                                                <span class="profile-rows-title-sub"></span>
                                            </h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="row no-gutters linkedin">
                                                <label for="linkedin-url">Linkedin:</label>
                                                <input type="url" name="profile[linkedin]" class="form-control linkedin-url"
                                                       id="linkedin-url"
                                                       placeholder="https://"
                                                       @if(Auth::user()->profile)
                                                       value=" {{ Auth::user()->profile->linkedin }}"
                                                    @endif
                                                >
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
                                            <p class="profile-rows-sub-title">Tell us about your previous clients. Enter
                                                the
                                                names of your clients by separating them with commas. To confirm this
                                                list,
                                                you will need to provide proof that you have previously worked with
                                                these
                                                clients. These may be screenshots or photos of communication with the
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
                                                by customers to learn more about you.
                                                Available formats *.pdf, *.doc, *.docx.
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <div class="row no-gutters attach-file-block">
                                                <label for="upload-resume">
                                                    <img src="{{ asset('img/upload-small.svg') }}" alt="upload-resume">
                                                    <input type="file" name="resume" id="upload-resume" class="d-none">
                                                    Upload resume
                                                </label>
                                            </div>
                                            <div class="row no-gutters attach-file-block">
                                                @if(Auth::user()->profile && Auth::user()->profile->resume)
                                                    <a href="{{ Storage::url(Auth::user()->profile->resume) }}"
                                                       download="">Download resume</a>
                                                @endif
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
                                            <p class="profile-rows-sub-title">Tell us more about yourself, describe your
                                                strengths. Clients will see this information in your profile.
                                            </p>
                                        </div>

                                        <div class="col-12">
                                            <div class="row no-gutters ">
                                                <textarea rows="4" class="form-control"
                                                          name="profile[biography]">@if(Auth::user()->profile){{ Auth::user()->profile->biography }}@endif</textarea>
                                                <div class="error">Maximum 150 characters
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary btn-verification" type="submit">Send profile
                                                for
                                                verification
                                            </button>
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





    <input type="hidden" id="langPrototype" value='<tr>
<td>
<input type="hidden" name="langId[]">
<div class="languages-select">
<div class="input-group">
<select name="lang_from[]" class="selectpicker"
data-style="btn-default">
@foreach($language as $lang)
        <option selected value="{{ $lang->id }}">{{ $lang->name }}</option>
@endforeach
        </select>
        <select name="lang_to[]" class="selectpicker"
        data-style="btn-default">
@foreach($language as $lang)
        <option selected value="{{ $lang->id }}">{{ $lang->name }}</option>
@endforeach
        </select>
        </div>
        </div>
        </td>
        <td>
        <div class="languages-price">
        <span>$</span>
        <input type="number" class="form-control" name="slow[]">
        </div>
        </td>
        <td>
        <div class="languages-price">
        <span>$</span>
        <input type="number" class="form-control" name="standard[]">
        </div>
        </td>
        <td>
        <div class="languages-price">
        <span>$</span>
        <input type="number" class="form-control" name="urgent[]">
        </div>
        </td>
        <td>
        <div class="languages-delete">
        <button type="button" class="btn delete-row">
        <img src="{{ asset('img/delete.svg') }}" alt="delete">
</button>
</div>
</td>
</tr>'>
@endsection

@section('javascript')
    <script src="{{ asset('translators/js/profile.js') }}"></script>
@endsection
