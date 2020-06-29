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
