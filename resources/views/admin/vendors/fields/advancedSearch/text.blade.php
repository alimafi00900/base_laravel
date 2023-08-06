<div class="form-group advancedSearch_field @if(isValidValue(getProperty($advancedSearch_current,$advancedSearch_option_kay))!=true) d-none @endif"  name="{{$field_key}}">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    <input type="text" class="form-control field"  value="{{$item_value}}" placeholder="{{getProperty($field_value,"placeholder")}}" name="{{$field_key}}">
</div>
