<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <fieldset class="form-group">
        <select class="form-select"

        @if(isValidValue(getProperty($field_value,["templates","edit","properties"])))
            @foreach(getProperty($field_value,["templates","edit","properties"]) as $property_kay => $property_value)
                {!! $property_kay !!}="{{$property_value}}"
            @endforeach
        @endif

        name="{{$field_key}}"
                @if(getCurrentStructure(['fields',$field_key,"requests","edit_submit","status"])===true and
                      str_contains(getCurrentStructure(['fields',$field_key,"requests","edit_submit","types"]),"required"))
                required @endif
                id="basicSelect">
            @foreach(getProperty($field_value,"select_options") as $select_key => $select_value)
            <option @if($select_key==$item_value) selected @endif value="{{$select_key}}">{{getProperty($select_value,"name_fa")}}</option>
            @endforeach
        </select>
    </fieldset>
</div>
