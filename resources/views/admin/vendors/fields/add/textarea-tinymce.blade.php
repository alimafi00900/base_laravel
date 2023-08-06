@php
    $unique_id="_".randomStr(5);
@endphp
<div class="form-group  col-12">
    <label class="mb-2" for="basicInput">{{getProperty($field_value,"name_fa")}}</label>
    @if(isValidValue(getProperty($field_value,["tip"])))
        <i class="bi cus-tooltip-btn bi-info-circle-fill" tip-title="{{getProperty($field_value,["name_fa"])}}" tip-msg="{{getProperty($field_value,["tip"])}}"></i>
    @endif
    <textarea
        @if(getCurrentStructure(['fields',$field_key,"requests","add_submit","status"])===true and
           str_contains(getCurrentStructure(['fields',$field_key,"requests","add_submit","types"]),"required"))
        required @endif

        @if(isValidValue(getProperty($field_value,["templates","add","properties"])))
        @foreach(getProperty($field_value,["templates","add","properties"]) as $property_kay => $property_value)
        {!! $property_kay !!}="{{$property_value}}"
        @endforeach
        @endif
        name="{{$field_key}}"
        id="editor_holder{{$unique_id}}">

    </textarea>
    <script>
        tinymce.init({
            selector: '#editor_holder{{$unique_id}}',
            language: 'fa',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            images_upload_url: '{{route("admin.fileManager_add_post_api")}}',
            automatic_uploads: true,
        });
    </script>
</div>
