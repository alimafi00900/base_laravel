<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <div class="box">
        <div class="js--image-preview"
             @if(isValidValue($item_value))
             style="background-image: url('{{getPublicAsset($item_value)}}')"
            @endif
        ></div>
        <div class="upload-options">
            <label>
                <input type="file"

                @if(isValidValue(getProperty($field_value,["templates","edit","properties"])))
                    @foreach(getProperty($field_value,["templates","edit","properties"]) as $property_kay => $property_value)
                        {!! $property_kay !!}="{{$property_value}}"
                    @endforeach
                @endif

                       @if(getCurrentStructure(['fields',$field_key,"requests","edit_submit","status"])===true and
                       str_contains(getCurrentStructure(['fields',$field_key,"requests","edit_submit","types"]),"required"))
                       required @endif
                       file-type="img"  name="{{$field_key}}" class="image-upload" accept="image/*"/>
            </label>
        </div>
    </div>
</div>
