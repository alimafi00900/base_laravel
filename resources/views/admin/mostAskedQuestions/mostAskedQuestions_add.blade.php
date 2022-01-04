@extends("admin.layouts.basic_layouts.admin_items_add")
@php
    $templateName_route_name="admin.most_asked_questions";
    $templateName_single_fa="سوالات متداول";
    $templateName_sum_fa="سوالات متداول";
@endphp
@section("form_add")
    <script src="https://cdn.tiny.cloud/1/a30ymuimzh23fx8m22eb2x3iu2ov7uu7786f1tskoe54dllx/tinymce/5/tinymce.min.js"></script>
    <div class="row">

        <div class="col-md-6">
            <label for="" class="mt-4">عنوان</label>
            <input type="text" class="form-control" id="name-input-from" name="title"
                   required>
            <br>
        </div>

        <br>

        <div class="col-md-6 ">
            <label for="" class="mt-3">وضعیت</label>
            <select class="custom-select" name="status" required>
                <option value="1">فعال
                </option>
                <option value="2">غیر فعال
                </option>
            </select>
            <br>
        </div>


        <br>

        <div class="row">
            <label for="" class="mt-5">محتوا</label>
            <textarea rows="30" type="text" id="article-content" class="form-control"
                      name="content"
            ></textarea>
            <br>
        </div>

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
        </script>

    </div>
@endsection