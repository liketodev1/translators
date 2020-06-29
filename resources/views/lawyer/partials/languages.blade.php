@if($data && count($data) > 0)
    @foreach($data as $item)
        <tr>
            <td>
                <input type="hidden" name="lluId[]" class="langId" value="{{ $item->id }}">
                <div class="languages-select">
                    <div class="input-group">
                        <select name="language[]" class="selectpicker"
                                data-style="btn-default">
                            @if(count($languages)>0)
                                @foreach($languages as $language)
                                    <option
                                        @if ($item->language_id === $language->id)
                                        selected
                                        @endif
                                        value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <select name="languageLevel[]"
                                class="selectpicker"
                                data-style="btn-default">
                            @if(count($languageLevels)>0)
                                @foreach($languageLevels as $level)
                                    <option
                                        @if ($item->language_level_id === $level->id)
                                        selected
                                        @endif
                                        value="{{ $level->id }}">{{ $level->name }}</option>
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
    @endforeach
@endif
