@php
    $model=new \App\Models\GeneralModel(getProperty($field_value,["select_options","table"]));
        $select_item=$model->where(getProperty($field_value,["select_options","value"]),$item_value)->first();
@endphp
<span>{{getProperty($select_item,getProperty($field_value,["select_options","title"]))}}</span>
