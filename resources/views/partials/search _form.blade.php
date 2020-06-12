<form action="" id="home_form">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active" id="label1">
            <input type="radio" name="options" id="hatchback" autocomplete="off" checked> I am a
            Client
        </label>
        <label class="btn btn-secondary" id="label2">
            <input type="radio" name="options" id="sedan" autocomplete="off"> I am a Lawyer
        </label>
    </div>
    <div class="select_container">
        <div class="select_blocks">
            <p>Select BILLING METHOD</p>
            <select class="" name="">
                <option value="{{ PaymentType::hour }}">Per Hour</option>
                <option value="{{ PaymentType::fixed }}">Fixed</option>
            </select>
        </div>
        <div class="select_blocks">
            <p>SELECT SPECIALIZATION</p>
            <select class="" name="specialization">
                @if(count($specializations)>0)
                    @foreach($specializations as $specialization)
                        <option
                            value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="select_blocks">
            <p>Select country</p>
            <select class="" name="country">
                @if(count($countries)>0)
                    @foreach($countries as $county)
                        <option class="{{ $county->id }}">{{ $county->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div>
            <input type="submit" name="search" class="" value="Search" id="home_form_search_btn">
        </div>
    </div>
</form>
