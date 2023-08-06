@php
$select_options=getProperty($field_value,"select_options")
@endphp
<div class="form-group advancedSearch_field @if(isValidValue(getProperty($advancedSearch_current,$advancedSearch_option_kay))!=true) d-none @endif" name="{{$field_key}}">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    <fieldset class="form-group">
        <select class="form-select field" name="{{$field_key}}" >
            @foreach(getGeneralModel(getProperty($select_options,"table"))->get() as $select)
                <option
                        @php
                        $title=getProperty($select_options,"title");
                        $value=getProperty($select_options,"value");
                        @endphp
                        @if($select->$value==$item_value)
                        selected
                        @endif
                        value="{{$select->$value}}">{{$select->$title}}</option>
            @endforeach
        </select>
    </fieldset>
</div>
