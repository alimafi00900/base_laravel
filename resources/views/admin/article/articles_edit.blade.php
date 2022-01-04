@php
    $template_name="articles_edit";
    $template_name_fa="ویرایش مقاله";
@endphp
@extends('admin.layouts.admin_panel')
@section('header')
    <style>
        .tox-notification--warning {
            display: none !important;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/a30ymuimzh23fx8m22eb2x3iu2ov7uu7786f1tskoe54dllx/tinymce/5/tinymce.min.js"></script>
@endsection
@section('content')
    @include('admin.layouts.admin_sidebar')
    <div class="main-panel IRANSans">
        @include('admin.layouts.admin_nav')
        <style>
            .search-dropdown > ul li {
                border: 1px solid rgba(0, 0, 0, .125);
                cursor: pointer;
            }

            .search-dropdown > ul {
                border-radius: 0 0 15px 15px;
                padding: 0 !important;
                max-height: 248px;
                position: absolute;
                display: none;
                width: 100%;
                background: white;
                z-index: 9999999;
                overflow-x: auto;
                border: 1px solid rgba(0, 0, 0, .125);
            }

            .search-dropdown {

                position: relative;
            }

            .search-dropdown:hover .list-group {
                display: block;
            }
        </style>
        <style>

            /*   */
            .load-5 {
                margin-top: -10px;
            }

            .load-5 .ball-holder {
                animation: loadingE 0.4s linear infinite;
            }

            .ball-holder {
                position: absolute;
                width: 12px;
                height: 37px;
                left: 13px;
                /* background: aquamarine; */
                top: 0px;
            }

            .ring-2 {
                position: relative;
                width: 45px;
                height: 45px;
                margin: 0 auto;
                border: 4px solid #4b9cdb;
                border-radius: 100%;
            }

            .ball {
                position: absolute;
                top: -9px;
                left: -2px;
                width: 16px;
                /* display: none; */
                height: 16px;
                border-radius: 100%;
                background: #4282b3;
            }

            @keyframes loadingE {

                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /* Toggle Switch */
            .switch {
                position: relative;
                display: inline-block;
                width: 35px;
                height: 18px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .rounded-slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #979797;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .rounded-slider:before {
                position: absolute;
                content: "";
                height: 23px;
                width: 23px;
                left: -4px;
                bottom: -2px;
                background-color: #fdfdfd;
                box-shadow: 0 0 .2rem #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .rounded-slider:before {
                background-color: white;
            }

            input:checked + .rounded-slider {
                background-color: #00adff;
            }

            input:focus + .rounded-slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .rounded-slider:before {
                -webkit-transform: translateX(23px);
                -ms-transform: translateX(23px);
                transform: translateX(23px);
            }

            .rounded-slider {
                border-radius: 34px;
            }

            .rounded-slider:before {
                border-radius: 50%;
            }

        </style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <h4 class="card-title IRANSans">مقالات</h4>
                                        <p class="card-category">{{$template_name_fa}}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">
                                <form class="form-horizontal" role="form"
                                      method="POST"
                                      action="{{route("admin.articles_edit_submit",[$articles->id])}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row ">


                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">عنوان</label>
                                                    <input type="text" class="form-control" id="name-input-from"
                                                           name="title"
                                                           value="{{$articles->title}}" required
                                                    >
                                                    <br>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <label for="" class="mt-3">وضعیت</label>
                                                    <select class="custom-select" name="status" required>
                                                        <option @if($articles->status=="active") selected
                                                                @endif value="1">فعال
                                                        </option>
                                                        <option @if($articles->status=="deactivate") selected
                                                                @endif value="2">غیر فعال
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-3">دسته بندی مقاله</label>
                                                    <select class="custom-select" name="articleCategory" required>
                                                        <option @if($articles->article_category == "news") selected
                                                                @endif value="1">پست خبری
                                                        </option>
                                                        <option @if($articles->article_category == "tutorial") selected
                                                                @endif value="2">مقاله اموزشی
                                                        </option>
                                                    </select>
                                                    <br>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-5">تگ ها</label>
                                                    @include("admin.layouts.partials.checkboxManager.checkboxManager_html",['checkboxName'=>'tags'])
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">لینک اینستاگرام</label>
                                                    <input type="text" class="form-control" id="name-input-form"
                                                           value="{{$articles->instagram_link}}"      name="instagram_link"
                                                    >
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">لینک واتساپ</label>
                                                    <input type="text" class="form-control" id="name-input-form"
                                                           value="{{$articles->whatsapp_link}}"     name="whatsapp_link"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="col-md-12 mt-2">
                                                    <label for="" class="mt-5">تصویر</label>
                                                    <div class="image-input box ">
                                                        @if(isValidValue($articles->img_link))
                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                 style="background: url('{{asset($articles->img_link)}}')">
                                                            </div>
                                                        @else
                                                            <div class="js--image-preview"></div>
                                                        @endif

                                                        <div class="upload-options">
                                                            <label class="btn-info">
                                                                <input type="file" class="image-upload"
                                                                       accept="image/png|image/jpeg" id="customFile"
                                                                       name="file">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="col-md-12">
                                                        <label for="" class="mt-5">پوستر</label>
                                                        <div class="image-input box ">
                                                            @if(isValidValue($articles->poster))
                                                                <div class="js--image-preview js--no-default js--no-default"
                                                                     style="background: url('{{asset($articles->poster)}}')">
                                                                </div>
                                                            @else
                                                                <div class="js--image-preview"></div>
                                                            @endif
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
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <label for="" class="mt-5 text-dark">خلاصه محتوا</label>
                                                <textarea rows="10" type="text"
                                                          class="form-control"
                                                          name="summary"
                                                >{{$articles->summary}}</textarea></div>
                                        </div>


                                        <div class="row ">
                                            <label for="" class="mt-5">محتوا</label>
                                            <textarea rows="30" type="text" id="article-content" class="form-control"
                                                      name="content"
                                            >{{$articles->content}}</textarea>
                                            <br>
                                        </div>

                                    </div>
                                    <button class="btn btn-success mt-5" id="submit-from-btn" name>ثبت</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                @include('admin.layouts.admin_footer')
            </div>
        </div>

        @endsection

        @section("js")
            @include("admin.layouts.partials.checkboxManager.checkboxManager_js",['checkboxName'=>'tags',"url"=>route("admin.productCategories_api_article_tags")])
            <script>
                tinymce.init({
                    selector: '#article-content , #tag-content',
                    language: 'fa',
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    images_upload_url: '{{route("admin.media_add_post_api")}}',
                    automatic_uploads: true,
                });
                $(document).ready(function () {
                    $("[name='tags']").val("{{$articles->tags}}")
                    gettags();
                });
            </script>

@endsection
