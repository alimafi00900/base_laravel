@php
    $unique_id="_".randomStr(5);
@endphp
<div class="form-group col-md-6 col-lg-4 col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <input style="display: none" name="{{$field_key}}" id="input{{$unique_id}}">
    <div id="editor_holder{{$unique_id}}">

    </div>
    <style>
        #editor_holder{{$unique_id}} .card-title{
            display: none !important;
        }
        #editor_holder{{$unique_id}} .btn{
            background: #435ebe !important;
        }
    </style>
    <script>
            const element{{$unique_id}} = document.getElementById('editor_holder{{$unique_id}}');
            const editor{{$unique_id}} = new JSONEditor(element{{$unique_id}}, {
                schema: {!! json_encode( getProperty($field_value,"json_pattern"), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) !!},
                theme: 'bootstrap4',
                disable_properties: true,
                disable_edit_json: true,
                disable_collapse: true,
                iconlib: "jqueryui",
                remove_button_labels: true,
            });
            editor{{$unique_id}}.on('change',() => {
                $('input#input{{$unique_id}}').val(JSON.stringify(editor{{$unique_id}}.getValue()))
            });
    </script>
</div>
