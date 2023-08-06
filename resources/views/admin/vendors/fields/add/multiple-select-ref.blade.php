@php
    $selects=setNullTo(getJsonStorageData(getProperty($field_value,["section_ref"])),[]);
@endphp
<div class="multiple-select form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}"
           tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <input name="{{$field_key}}" class="output" style="display: none">
    <select

    @if(isValidValue(getProperty($field_value,["templates","add","properties"])))
        @foreach(getProperty($field_value,["templates","add","properties"]) as $property_kay => $property_value)
            {!! $property_kay !!}="{{$property_value}}"
        @endforeach
    @endif

    @if(getCurrentStructure(['fields',$field_key,"requests","add_submit","status"])===true and
                str_contains(getCurrentStructure(['fields',$field_key,"requests","add_submit","types"]),"required"))
        required @endif
    class="choices form-select multiple-remove"  multiple="multiple">
    @php
        $value_type=getProperty($field_value,["select_options","value_type"]);
    @endphp
    @if($value_type=="text")
        @foreach($selects as $select)
            <option value="{{getProperty($select,getProperty($field_value,["select_options","value"]))}}">
                @foreach(getProperty($field_value,["select_options","title"]) as $value)
                    {{getProperty($select,$value)}}
                @endforeach
            </option>
        @endforeach
    @elseif($value_type=="array")
        @foreach($selects as $select)
            @php
                $array_value=[];
                $select_values=getProperty($field_value,["select_options","value"]);
                if(gettype($select_values)=="array"){
                     foreach ($select_values as $select_value){
                    $array_value+=[$select_value =>getProperty($select,$select_value)];
                 }
                }elseif (gettype($select_values)=="string"){
                    $array_value=getProperty($select,$select_values);
                }
            @endphp
            <option
                @if(gettype($select_values)=="array")
                value="{{jsonEncode($array_value)}}"
            @elseif(gettype($select_values)=="string")
                value="{{$array_value}}"
                @endif
            >
                @foreach(getProperty($field_value,["select_options","title"]) as $value)
                    {{getProperty($select,$value)}}
                @endforeach
            </option>
            @endforeach
            @endif
            </select>
</div>
