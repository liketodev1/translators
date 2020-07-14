{{--<form action="{{ route('our_lawyers') }}" method="get" id="home_form">--}}
{{--<div class="main-form-container">--}}
{{--    <div class="btn-group btn-group-toggle" data-toggle="buttons">--}}
{{--        <label class="btn btn-secondary active" id="label1">--}}
{{--            <input type="radio" class="searchTypes" name="option" id="hatchback" checked data-url="{{ route('our_lawyers') }}"> I am a--}}
{{--            Client--}}
{{--        </label>--}}
{{--        <label class="btn btn-secondary" id="label2">--}}
{{--            <input type="radio" class="searchTypes" name="option" id="sedan" data-url="{{ route('find_a_job') }}"> I am a Lawyer--}}
{{--        </label>--}}
{{--    </div>--}}
{{--    <div class="select_container">--}}
{{--        <div class="select_blocks">--}}
{{--            <p>Select BILLING METHOD</p>--}}
{{--            <select name="bt">--}}
{{--                <option value="{{ PaymentType::hour }}">Per Hour</option>--}}
{{--                <option value="{{ PaymentType::fixed }}">Fixed</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="select_blocks">--}}
{{--            <p>SELECT SPECIALIZATION</p>--}}
{{--            <select name="s">--}}
{{--                @if(count($specializations)>0)--}}
{{--                    @foreach($specializations as $specialization)--}}
{{--                        <option--}}
{{--                            value="{{ $specialization->id }}">{{ $specialization->name }}</option>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="select_blocks">--}}
{{--            <p>Select country</p>--}}
{{--            <select name="c">--}}
{{--                @if(count($countries)>0)--}}
{{--                    @foreach($countries as $county)--}}
{{--                        <option value="{{ $county->id }}">{{ $county->name }}</option>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <input type="submit" value="Search" id="home_form_search_btn">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</form>--}}

    <div class="container pos-r">
<form action="{{ route('our_lawyers') }}" method="get" id="home_form">
        <div class="row no-gutters sm-center">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active" id="label1">
                    <input type="radio" class="searchTypes" name="option" id="hatchback" checked
                           data-url="{{ route('our_lawyers') }}"> I am a
                    Client
                </label>
                <label class="btn btn-secondary" id="label2">
                    <input type="radio" class="searchTypes" name="option" id="sedan"
                           data-url="{{ route('find_a_job') }}"> I
                    am a Lawyer
                </label>
            </div>
        </div>
        <div class="row no-gutters w-100">
            <div class="col-12">
                <div class="home-search-form w-100">
                    <div class="btn-group border-0">

                        <div class="home-search-select-item">
                            <p class="mb-0 text-uppercase home-search-select-title">SELECT BILLING METHOD</p>
                            <select name="bt" class="browser-default custom-select-lg">
                                <option value="{{ PaymentType::hour }}">Per Hour</option>
                                <option value="{{ PaymentType::fixed }}">Fixed</option>
                            </select>
                        </div>

                        <div class="home-search-select-item">
                            <p class="mb-0 text-uppercase home-search-select-title">SELECT SPECIALIZATION</p>
                            <select name="s" class="browser-default custom-select-lg dropdown-items-wrap">
                                @if(count($specializations)>0)
                                    @foreach($specializations as $specialization)
                                        <option
                                            value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="home-search-select-item">
                            <p class="mb-0 text-uppercase home-search-select-title">Select country</p>
                            <select name="c" class="browser-default custom-select-lg dropdown-items-wrap">
                                @if(count($countries)>0)
                                    @foreach($countries as $county)
                                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="home-search-search-btn">Search</button>
                    </div>
                </div>
            </div>
        </div>

</form>
    </div>
