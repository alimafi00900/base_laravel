<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <textarea type="text" @if(getCurrentStructure(['fields',$field_key,"requests","edit_submit","status"])===true and
           str_contains(getCurrentStructure(['fields',$field_key,"requests","edit_submit","types"]),"required"))
    required @endif

    @if(isValidValue(getProperty($field_value,["templates","edit","properties"])))
    @foreach(getProperty($field_value,["templates","edit","properties"]) as $property_kay => $property_value)
    {!! $property_kay !!}="{{$property_value}}"
              @endforeach
              @endif
              class="form-control" name="{{$field_key}}">{{$item_value}}</textarea>
</div>
