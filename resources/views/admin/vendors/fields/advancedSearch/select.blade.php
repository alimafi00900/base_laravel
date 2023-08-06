<div class="form-group advancedSearch_field @if(isValidValue(getProperty($advancedSearch_current,$advancedSearch_option_kay))!=true) d-none @endif" name="{{$field_key}}">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    <fieldset class="form-group">
        <select class="form-select field" name="{{$field_key}}" >
        @foreach(getProperty($field_value,"select_options") as $select_key => $select_value)
            <option
                    @if($select_key==$item_value)
                            selected
                    @endif
                    value="{{$select_key}}">{{getProperty($select_value,"name_fa")}}</option>
            @endforeach
            </select>
    </fieldset>
</div>
