<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <input type="text"  @if(getCurrentStructure(['fields',$field_key,"requests","add_submit","status"])===true and
                       str_contains(getCurrentStructure(['fields',$field_key,"requests","add_submit","types"]),"required"))
    required @endif

           @if(isValidValue(getProperty($field_value,"default_value")))
           value="{{getProperty($field_value,"default_value")}}"
    @endif

    @if(isValidValue(getProperty($field_value,["templates","add","properties"])))
        @foreach(getProperty($field_value,["templates","add","properties"]) as $property_kay => $property_value)
            {!! $property_kay !!}="{{$property_value}}"
        @endforeach
    @endif

    value="{{arrayToStr(json_decode($item_value))}}"

    class="form-control"  name="{{$field_key}}">
</div>
