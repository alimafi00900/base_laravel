<input  class="form-control edit_single_field" req="{{getProperty($field_value,['templates',"all","required"])}}"
        type="{{getProperty($field_value,['templates',"all","type"])}}"
     row_id="{{$item->id}}"  name_fa="{{getProperty($field_value,["name_fa"])}}"   value="{{$item_value}}" name="{{$field_key}}">
