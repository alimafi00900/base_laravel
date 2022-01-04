@extends("admin.layouts.basic_layouts.admin_items_add")
@php
    $templateName_route_name="admin.branches";
    $templateName_single_fa="شاخه";
    $templateName_sum_fa="شاخه ها";
@endphp
@section('header')
    <style>
        .tox-notification--warning {
            display: none !important;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/a30ymuimzh23fx8m22eb2x3iu2ov7uu7786f1tskoe54dllx/tinymce/5/tinymce.min.js"></script>
@endsection
@section("form_add")
    <div class="row">

        <div class="col-md-6 col-12">
            <label for="" class="mt-4">نام نمایشی </label>
            <input type="text" class="form-control" id="name-input-from" name="display_name"
                   required>
            <br>
        </div>

        <div class="col-md-6 col-12">
            <label for="" class="mt-4"> نام</label>
            <input type="text" class="form-control" id="name-input-from" name="name"
                   required>
            <br>
        </div>
        <div class="col-md-6 col-12">
            <div class="col-md-12">
                <label for="" class="mt-5">پوستر بالای صفحه</label>
                <div class="image-input box ">
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                        <label class="btn-info">
                            <input type="file" class="image-upload"
                                   accept="image/png|image/jpeg" id="customFile"
                                   name="file_poster">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-3">
            <label for="" class="mt-5">محتوا</label>
            <textarea rows="30" type="text" id="article-content" class="form-control"
                      name="content"
            ></textarea>
            <br>
        </div>



    </div>
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: '#article-content',
            language: 'fa',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            images_upload_url: '{{route("admin.media_add_post_api")}}',
            automatic_uploads: true,
        });
        ///////////////////////
    </script>
@endsection
