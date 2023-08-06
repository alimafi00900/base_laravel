@php
$items=json_decode($item_value);
if(isValidValue($items)!=true){
    $items=[];
}
@endphp
<div class="d-flex flex-column">
    @foreach($items as $item)
        <span class="badge mb-1 {{getProperty($item,["class"])}}"
        >{{getProperty($item,["name_fa"])}}</span>
    @endforeach
</div>

