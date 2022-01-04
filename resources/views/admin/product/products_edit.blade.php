@php
    $template_name="product_edit";
    $template_name_fa="ویرایش محصول";
@endphp

@extends('admin.layouts.admin_panel')
@section('header')
    <style>
        .tox-notification--warning{
            display:none !important;
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
                                        <h4 class="card-title IRANSans">محصولات</h4>
                                        <p class="card-category">{{$template_name_fa}}</p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">
                                <form class="form-horizontal" role="form"
                                      method="POST" action="{{route("admin.products_edit_product_submit",[$product->id])}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">


                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">عنوان</label>
                                                <input type="text" class="form-control" id="name-input-from" name="title"
                                                       value="{{$product->title}}"
                                                       required>
                                                <br>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                                <label for="">دسته بندی</label>
                                                @include("admin.layouts.partials.searchItem.searchItemHtml",["itemName"=>"product_categories","itemInputValue"=>"$product->productCategory_id"])
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="" class="mt-4">قیمت (تومان)</label>
                                                <input type="number" class="form-control" id="name-input-from" name="price"
                                                       value="{{$product->price}}"
                                                       required>
                                                <br>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                                <label for="" class="mt-3">وضعیت</label>
                                                <select class="custom-select" name="status" required>
                                                    <option @if ($product->status=="active") selected @endif value="1" >فعال</option>
                                                    <option @if ($product->status=="deactivate") selected @endif value="2" >غیر فعال</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="mt-3">نوع محصول</label>
                                                <select class="custom-select" name="product_type" required>
                                                    <option  @if ($product->product_type=="digital") selected @endif  value="digital">دیجیتالی</option>
                                                    <option  @if ($product->product_type=="physical") selected @endif  value="physical">فیزیکی</option>
                                                </select>
                                            </div>
                                            <div id="stock_count" class="col-md-4 @if ($product->product_type!="physical") d-none @endif ">
                                                <label for="">تعداد موجودی</label>
                                                <span>{{$product->stock_count}}</span>
                                                <label for="">عدد</label>
                                                <br>
                                                <label>افزایش موجودی</label>
                                                <label for=""> (برای کاهش عدد منفی وارد کنید) </label>
                                                <input type="number" class="form-control" id="name-input-from" name="stock_count_plus" >
                                                <br>
                                            </div>
                                        </div>


                                        <div class="col-md-4 mt-4">
                                            <label for="" class="">تصویر</label>
                                            <div class="image-input box ">
                                                @if(isValidValue($product->img_link))
                                                    <div class="js--image-preview js--no-default js--no-default"
                                                         style="background: url('{{asset($product->img_link)}}')">
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


                                        <br>


                                        <div class="row mt-3">
                                            <label for="" class="mt-5">محتوا</label>
                                            <textarea rows="30" type="text" id="article-content" class="form-control"
                                                      name="content"
                                            >{{$product->content}}</textarea>
                                            <br>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-5" id="submit-from-btn" name>ثبت</button>
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

            @include("admin.layouts.partials.searchItem.searchItemJs",["itemName"=>"product_categories","itemUrl"=>route("admin.productCategories_api_get_product_categories")])

            <script>
                $("[name='product_type']").change(function (){
                    if($(this).val()=="digital"){
                        $("#stock_count").addClass('d-none')
                    }else if($(this).val()=="physical"){
                        $("#stock_count").removeClass('d-none')
                    }
                })
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
@endsection
