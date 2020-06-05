@foreach($data as $item)
<tr>
    <td>
        <input type="hidden" name="langId[]" class="langId" value="{{ $item->id }}">
        <div class="languages-select">
            <div class="input-group">
                <select name="lang_from[]" class="selectpicker"
                        data-style="btn-default">
                    @foreach($language as $lang)
                        <option @if($lang->id == $item->langFrom->id)
                                selected
                                @endif
                                value="{{ $lang->id }}">
                            {{ $lang->name }}
                        </option>
                    @endforeach
                </select>
                <select name="lang_to[]" class="selectpicker"
                        data-style="btn-default">
                    @foreach($language as $lang)
                        <option @if($lang->id == $item->langto->id)
                                selected
                                @endif
                                value="{{ $lang->id }}">{{ $lang->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </td>
    <td>
        <div class="languages-price">
            <span>$</span>
            <input type="number" class="form-control" name="slow[]" value="{{ $item->slow }}">
        </div>
    </td>
    <td>
        <div class="languages-price">
            <span>$</span>
            <input type="number" class="form-control" name="standard[]" value="{{ $item->standard }}">
        </div>
    </td>
    <td>
        <div class="languages-price">
            <span>$</span>
            <input type="number" class="form-control" name="urgent[]" value="{{ $item->urgent }}">
        </div>
    </td>
    <td>
        <div class="languages-delete">
           <button type="button" class="btn delete-row">
               <img src="{{ asset('img/delete.svg') }}" alt="delete">
           </button>
        </div>
    </td>
</tr>
@endforeach
