@php
    $template_name="productCategories_add";
    $template_name_fa="اضافه کردن دسته بندی";
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

                form {
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
                                        <h4 class="card-title IRANSans">دسته بندی محصولات</h4>
                                        <p class="card-category">{{$template_name_fa}}</p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">
                                <form class="form-horizontal" role="form"
                                      method="POST" id="main-form" action="{{route("admin.productCategories_add_category_submit")}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">


                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">عنوان</label>
                                                    <input type="text" class="form-control" id="name-input-form"
                                                           name="title"
                                                           required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">شاخه</label>
                                                    @include("admin.layouts.partials.searchItem.searchItemHtml",["itemName"=>"branches","itemInputValue"=>""])
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-3">وضعیت</label>
                                                    <select class="custom-select" name="status" required>
                                                        <option value="1">فعال</option>
                                                        <option value="2">غیر فعال</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">لینک اینستاگرام</label>
                                                    <input type="text" class="form-control" id="name-input-form"
                                                           name="instagram_link"
                                                           >
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">لینک واتساپ</label>
                                                    <input type="text" class="form-control" id="name-input-form"
                                                           name="whatsapp_link"
                                                           >
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="" class="mt-4">برچسب</label>
                                                    <input type="text" class="d-none form-control" name="tags">
                                                    @include("admin.layouts.partials.checkboxManager.checkboxManager_html",['checkboxName'=>'tags'])
                                                </div>

                                            </div>
                                            <input type="text" style="display: none" name="forms">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <div class="col-md-12">
                                                    <label for="" class="mt-5">تصویر شاخص</label>
                                                    <div class="image-input box ">
                                                        <div class="js--image-preview"></div>
                                                        <div class="upload-options">
                                                            <label class="btn-info">
                                                                <input type="file" class="image-upload"
                                                                       accept="image/png|image/jpeg" id="customFile"
                                                                       name="file">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="col-md-12">
                                                    <label for="" class="mt-5">پوستر</label>
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
                                        <div class="row mt-3">
                                            <label for="" class="mt-5">فرم ثبت خرید محصول</label>
                                            <div class="col-xl-9 col-12">
                                                <div class="col-12 row" id="list-forms">


                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex w-100 justify-content-end">
                                                        <a id="add-form" class="btn btn-success btn-sm text-light">افزودن
                                                            حالت جدید</a>
                                                        <a id="remove-form" class="btn btn-danger btn-sm text-light">
                                                            حذف اخرین حالت</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a  class="btn btn-success text-light mt-5" id="submit-form-btn" >ثبت</a>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                @include('admin.layouts.admin_footer')
            </div>
        </div>
        <di id="components" style="display:none">
            <div class="card pb-3 single-form" style="background: #c9c9c9;">
                <div class="border mt-3 mx-2 py-3 row"
                     style="background: white;">
                    <span id="title-form" class="text-dark"></span>
                    <div class="col-4">
                        <label for="" class="mt-4">نام حالت (انگلیسی و بدون
                            فاصله باشد)</label>
                        <input type="text" id="form-name" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="" class="mt-4">عنوان حالت</label>
                        <input type="text" id="form-title" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="" class="mt-4">توضیحات حالت</label>
                        <textarea rows="2" id="form-description" class="form-control"></textarea>
                    </div>
                </div>
                <div id="list-field" class="">


                </div>
                <div class="d-flex w-100 justify-content-end">
                    <a id="add-field-form" class="btn btn-success btn-sm text-light">افزودن فیلد جدید</a>
                    <a id="remove-field-form" class="btn btn-danger btn-sm  text-light"> حذف فیلد حالت</a>
                </div>
            </div>
            <div class="border-top single-field-form card py-4 col-12">
                <div class="row">
                    <span id="title-field" class="text-dark"></span>
                    <div class="col-md-4 col-12">
                        <label for="" class="mt-4">نام فیلد (انگلیسی و
                            بدون فاصله باشد)</label>
                        <input type="text" id="field-name"  class="form-control">
                    </div>
                    <div class="col-md-4 col-12">
                        <label for="" class="mt-4">سرتیتر فیلد</label>
                        <input type="text" id="field-title" class="form-control">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="" class="mt-4">توضیحات فیلد</label>
                        <textarea  id="field-description" rows="2"
                                  class="form-control"></textarea>
                    </div>
                </div>
                <div class="row px-4 my-4">


                    <div class=" col-4 col-md-3 d-flex align-items-center ">
                        <input class="form-check-input" type="radio"
                                id="field-condition" value="number" name="type_input">
                        <span class="text-black ">حتما عددی باشد</span>
                    </div>
                    <div class=" col-4 col-md-3 d-flex align-items-center ">
                        <input class="form-check-input" value="email" type="radio"
                               id="field-condition"  name="type_input">
                        <span class="text-black ">حتما ایمیل باشد</span>
                    </div>
                    <div class=" col-4 col-md-3 d-flex align-items-center ">
                        <input class="form-check-input" value="password" type="radio"
                               id="field-condition" name="type_input">
                        <span class="text-black ">حتما پسورد باشد (کارکتر ها * میشوند)</span>
                    </div>
                    <div class=" col-4 col-md-3 d-flex align-items-center ">
                        <input class="form-check-input" checked type="radio"
                               id="field-condition" value="text" name="type_input">
                        <span class="text-black  ">متن عادی</span>
                    </div>
                    <div class=" col-4 col-md-3 d-flex align-items-center ">
                        <input class="form-check-input" checked
                               type="checkbox" id="field-required" >
                        <span class="text-black ">حتما پر شود</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <label for="" class="mt-4">کمترین تعداد
                            کارکتر</label>
                        <input type="number" id="field-min-chars" class="form-control">
                    </div>
                    <div class="col-md-3 col-6">
                        <label for="" class="mt-4">بیشترین تعداد
                            کارکتر</label>
                        <input type="number" id="field-max-chars" class="form-control">
                    </div>

                </div>
            </div>
        </di>
        @endsection
        @section("js")
            @include("admin.layouts.partials.searchItem.searchItemJs",["itemName"=>"branches","itemUrl"=>route("admin.branches_api_get_branches")])
            @include("admin.layouts.partials.checkboxManager.checkboxManager_js",['checkboxName'=>'tags',"url"=>route("admin.productCategories_api_product_category_tags")])
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

                $("#add-form").click(function () {
                    let form = $("#components .single-form").clone()
                    $(form).find("#title-form").text(" حالت " + ($("#list-forms .single-form").length + 1).toString())
                    $("#list-forms").append(form).hide().show("fade")
                })
                $("#remove-form").click(function () {
                    $("#list-forms .single-form").last().remove()
                })
                function randomStr(length) {
                    var result           = '';
                    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                    var charactersLength = characters.length;
                    for ( var i = 0; i < length; i++ ) {
                        result += characters.charAt(Math.floor(Math.random() *
                            charactersLength));
                    }
                    return result;
                }
                $(document).on("click", "#add-field-form", function () {
                    let form = $(this).parents(".single-form")
                    let field_form = $("#components .single-field-form").clone()
                    $(field_form).find("#title-field").text($(form).find("#title-form").text() + " -> فیلد " + ($(form).find("#list-field .single-field-form").length + 1).toString())
                    $(field_form).find("#field-condition").each(function (){
                        let randStr=randomStr(5)
                        $(this).attr("name","type_input_"+randStr+"_"+($(form).find("#list-field .single-field-form").length + 1).toString())
                    })
                    $(form).find("#list-field").append(field_form).hide().show("fade")
                })
                $(document).on("click", "#remove-field-form", function () {
                    let form = $(this).parents(".single-form")
                    $(form).find("#list-field .single-field-form").last().remove()
                })

                //////////////////


                $(document).on("keyup", "#list-forms .single-form #form-name", function () {
                    $(this).val(nameFilter($(this).val()))
                })
                $(document).on("keyup", "#list-forms .single-field-form #field-name", function () {
                    $(this).val(nameFilter($(this).val()))
                })

                 $("#submit-form-btn").click(function (){
                     let formOut={}
                     exit=false
                     if($("#name-input-form").val()==""){
                         toastr.error("عنوان دسته بندی وارد نشده است")
                         exit=true
                         return
                     }
                     $("#list-forms .single-form").each(function (){
                         if($(this).find("#form-name").val()==""){
                             toastr.error(" نام "+$(this).find("#title-form").text()+" وارد نشده است ")
                             exit=true
                             return
                         }
                     })
                     $("#list-forms .single-field-form").each(function (){
                         if($(this).find("#field-name").val()==""){
                             toastr.error(" نام "+$(this).find("#title-field").text()+" وارد نشده است ")
                             exit=true
                             return
                         }
                     })
                     $("#list-forms .single-field-form").each(function (){
                         min_char=parseInt($(this).find("#field-min-chars").val())
                         max_char=parseInt($(this).find("#field-max-chars").val())
                         if(min_char>max_char && min_char!=NaN && max_char!=NaN){
                             toastr.error($(this).find("#title-field").text()+"مقدار کمترین و بیشترین تعداد کارکتر به درستی وارد نشده است ")
                             exit=true
                             return
                         }
                     })
                     if(exit){
                        return
                     }
                     $("#list-forms .single-form").each(function (){
                         let formName = $(this).find("#form-name").val()
                         let formFields={}
                         $(this).find("#list-field .single-field-form").each(function(){
                             let field_name=$(this).find("#field-name").val()
                             formFields[field_name]= {
                                 field_title:$(this).find("#field-title").val(),
                                 field_description:$(this).find("#field-description").val(),
                                 field_condition:$(this).find("#field-condition:checked").val(),
                                 field_required:$(this).find("#field-required").prop('checked'),
                                 field_min_chars:$(this).find("#field-min-chars").val(),
                                 field_max_chars:$(this).find("#field-max-chars").val(),
                             }
                         })
                         formOut[formName]={
                             form_title:$(this).find("#form-title").val(),
                             form_description:$(this).find("#form-description").val(),
                             form_fields:formFields
                         }
                     })
                     $("[name='forms']").val(JSON.stringify(formOut).toString())
                     $("#main-form").submit()
                 })
            </script>

@endsection
