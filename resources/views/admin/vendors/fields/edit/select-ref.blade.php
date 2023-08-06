<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}"
           tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <fieldset class="form-group">
        <select class="form-select"
                name="{{$field_key}}"

        @if(isValidValue(getProperty($field_value,["templates","add","properties"])))
            @foreach(getProperty($field_value,["templates","add","properties"]) as $property_kay => $property_value)
                {!! $property_kay !!}="{{$property_value}}"
            @endforeach
        @endif

        @if(getCurrentStructure(['fields',$field_key,"requests","add_submit","status"])===true and
                    str_contains(getCurrentStructure(['fields',$field_key,"requests","add_submit","types"]),"required"))
            required @endif
        id="basicSelect">
        @if(getProperty($field_value,["select_options","type"])=="table")
            @php
                $model=new \App\Models\GeneralModel(getProperty($field_value,["select_options","table"]));
                    $select_items=$model->get();

            @endphp
            @foreach($select_items as $select_item)
                <option
                     @if($item_value==getProperty($select_item,getProperty($field_value,["select_options","value"])))
                             selected
                     @endif

                        value="{{getProperty($select_item,getProperty($field_value,["select_options","value"]))}}">{{getProperty($select_item,getProperty($field_value,["select_options","title"]))}}</option>
                @endforeach

                @endif
                </select>
    </fieldset>
</div>
