@php
    $templateName_route_name="admin.generalInfo";
    $templateName_single_fa="تنظیمات اصلی";
    $templateName_sum_fa="تنطیمات اصلی";
@endphp
@extends('admin.layouts.admin_panel')
@section('content')
    @include('admin.layouts.admin_sidebar')
    <style>
        .tox-notification--warning {
            display: none !important;
        }
    </style>
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

            #accordion > .card .card-header button {
                color: white !important;
            }

            #accordion > .card {
                box-shadow: 0 1px 4px 0 rgb(0 0 0 / 41%);
                overflow: hidden;
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
                                        <h4 class="card-title IRANSans">ویرایش {{$templateName_single_fa}}</h4>
                                        <p class="card-category">مدیریت {{$templateName_sum_fa}}</p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne1" aria-expanded="true"
                                                        aria-controls="collapseOne1">
                                                    فوتر
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="row ">
                                                        <div class="row pb-5 border-bottom">

                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">پاورقی</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from" name="text#footer_main"
                                                                       value="{{getProperty($generalInfos, 'footer_main')}}">
                                                            </div>


                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">فوتر سرتیتر اول</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from" name="text#footer_title_1"
                                                                       value="{{getProperty($generalInfos, 'footer_title_1')}}">
                                                            </div>


                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">فوتر متن اول</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from" name="text#footer_content_1"
                                                                       value="{{getProperty($generalInfos, 'footer_content_1')}}">
                                                            </div>


                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">فوتر سرتیتر دوم</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from" name="text#footer_title_2"
                                                                       value="{{getProperty($generalInfos, 'footer_title_2')}}">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">فوتر متن دوم</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from" name="text#footer_content_2"
                                                                       value="{{getProperty($generalInfos, 'footer_content_2')}}">
                                                            </div>
                                                        </div>


                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">لینک واتساپ</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#footer_whatsapp_link"
                                                                       value="{{getProperty($generalInfos, 'footer_whatsapp_link')}}">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">لینک اینستاگرام</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#footer_instagram_link"
                                                                       value="{{getProperty($generalInfos, 'footer_instagram_link')}}">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn" name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne2" aria-expanded="true"
                                                        aria-controls="collapseOne2">
                                                    لوگو ها هدر و فوتر و عکس صحفه اصلی
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne1"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="row ">
                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">لوگو بالای صفحه
                                                                        هدر</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'main_header_logo')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'main_header_logo'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#main_header_logo">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">لوگو پایین صفحه
                                                                        فوتر</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'main_footer_logo')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'main_footer_logo'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#main_footer_logo">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row col-xl-3 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس اصلی صفحه
                                                                        خانه</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'main_home_slider')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'main_home_slider'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif
                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#main_home_slider">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس صفحه خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#main_home_slider-link"
                                                                       value="{{getProperty($generalInfos, 'main_home_slider-link')}}">
                                                            </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس فوتر سمت چپ</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'main_footer_left')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'main_footer_left'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif
                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#main_footer_left">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn"
                                                            name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne4" aria-expanded="true"
                                                        aria-controls="collapseOne4">
                                                    تب اصلی صفحه خانه
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne4" class="collapse" aria-labelledby="headingOne4"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row ">

                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">سرتیتر بخش اولی تب اصلی صفحه
                                                                    خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#mainTitle1Tab"
                                                                       value="{{getProperty($generalInfos, 'mainTitle1Tab')}}">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">سرتیتر بخش دومی تب اصلی صفحه
                                                                    خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#mainTitle2Tab"
                                                                       value="{{getProperty($generalInfos, 'mainTitle2Tab')}}">
                                                            </div>
                                                        </div>
                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">سرتیتر تب 1 از 3 صفحه
                                                                    خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#mainTabTitle1"
                                                                       value="{{getProperty($generalInfos, 'mainTabTitle1')}}">
                                                            </div>

                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">سرتیتر تب 2 از 3 صفحه
                                                                    خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#mainTabTitle2"
                                                                       value="{{getProperty($generalInfos, 'mainTabTitle2')}}">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">سرتیتر تب 3 از 3 صفحه
                                                                    خانه</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#mainTabTitle3"
                                                                       value="{{getProperty($generalInfos, 'mainTabTitle3')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn" name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne3">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne3" aria-expanded="true"
                                                        aria-controls="collapseOne3">
                                                    تب اصلی صفحه اصلی
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne3"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row ">
                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس ۱ بالای فوتر</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'top_footer_pic_1')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'top_footer_pic_1'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#top_footer_pic_1">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس ۲ بالای فوتر</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'top_footer_pic_2')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'top_footer_pic_2'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#top_footer_pic_2">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6 col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس ۳ بالای فوتر</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'top_footer_pic_3')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'top_footer_pic_3'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif
                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#top_footer_pic_3">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pb-5 border-bottom">
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">لینک عکس ۱ بالای فوتر</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#top_footer_pic_1_title"
                                                                       value="{{getProperty($generalInfos, 'top_footer_pic_1_title')}}">
                                                            </div>

                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">لینک عکس ۲ بالای فوتر</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#top_footer_pic_2_title"
                                                                       value="{{getProperty($generalInfos, 'top_footer_pic_2_title')}}">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <label for="" class="mt-4">لینک عکس ۳ بالای فوتر</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#top_footer_pic_3_title"
                                                                       value="{{getProperty($generalInfos, 'top_footer_pic_3_title')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn" name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne5">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne5" aria-expanded="true"
                                                        aria-controls="collapseOne5">
                                                    عکس های تب یک صفحه اصلی
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne5" class="collapse" aria-labelledby="headingOne5"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row pb-5 border-bottom">

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 1</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img1')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img1'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file"
                                                                                       class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img1">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 1</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link1"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link1')}}">
                                                            </div>
                                                        </div>


                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 2</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img2')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img2'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img2">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 2</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link2"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link2')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 3</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img3')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img3'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img3">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 3</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link3"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link3')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 4</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img4')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img4'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img4">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 4</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link4"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link4')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 5</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img5')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img5'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img5">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 5</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link5"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link5')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 6</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img6')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img6'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img6">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 6</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link6"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link6')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 7</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img7')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img7'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img7">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 7</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link7"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link7')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 8</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img8')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img8'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img8">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 8</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link8"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link8')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 9</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img9')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img9'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img9">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 9</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link9"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link9')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 10</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img10')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img10'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img10">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 10</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link10"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link10')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 11</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img11')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img11'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img11">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 11</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link11"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link11')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 12</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img12')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img12'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img12">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 12</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link12"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link12')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 13</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab1-content-img13')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab1-content-img13'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab1-content-img13">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 13</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab1-content-link13"
                                                                       value="{{getProperty($generalInfos, 'tab1-content-link13')}}">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn"
                                                            name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne6">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne6" aria-expanded="true"
                                                        aria-controls="collapseOne6">
                                                    عکس های تب دو صفحه اصلی
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row pb-5 border-bottom">

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 1</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img1')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img1'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file"
                                                                                       class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img1">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 1</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link1"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link1')}}">
                                                            </div>
                                                        </div>


                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 2</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img2')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img2'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img2">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 2</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link2"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link2')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 3</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img3')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img3'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img3">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 3</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link3"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link3')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 4</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img4')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img4'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img4">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 4</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link4"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link4')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 5</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img5')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img5'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img5">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 5</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link5"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link5')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 6</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img6')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img6'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img6">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 6</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link6"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link6')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 7</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img7')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img7'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img7">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 7</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link7"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link7')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 8</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img8')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img8'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img8">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 8</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link8"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link8')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 9</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img9')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img9'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img9">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 9</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link9"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link9')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 10</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img10')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img10'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img10">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 10</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link10"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link10')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 11</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img11')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img11'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img11">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 11</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link11"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link11')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 12</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img12')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img12'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img12">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 12</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link12"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link12')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 13</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab2-content-img13')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab2-content-img13'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab2-content-img13">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 13</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab2-content-link13"
                                                                       value="{{getProperty($generalInfos, 'tab2-content-link13')}}">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn"
                                                            name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne7">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne7" aria-expanded="true"
                                                        aria-controls="collapseOne7">
                                                    عکس های تب سه صفحه اصلی
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne7" class="collapse" aria-labelledby="headingOne7"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row pb-5 border-bottom">

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 1</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img1')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img1'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file"
                                                                                       class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img1">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 1</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link1"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link1')}}">
                                                            </div>
                                                        </div>


                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 2</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img2')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img2'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img2">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 2</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link2"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link2')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 3</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img3')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img3'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img3">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 3</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link3"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link3')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 4</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img4')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img4'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img4">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 4</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link4"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link4')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 5</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img5')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img5'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img5">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 5</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link5"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link5')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 6</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img6')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img6'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img6">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 6</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link6"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link6')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 7</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img7')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img7'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img7">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 7</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link7"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link7')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 8</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img8')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img8'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img8">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 8</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link8"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link8')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 9</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img9')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img9'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img9">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 9</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link9"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link9')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 10</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img10')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img10'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img10">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 10</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link10"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link10')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 11</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img11')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img11'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img11">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 11</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link11"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link11')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 12</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img12')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img12'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img12">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 12</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link12"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link12')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 13</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'tab3-content-img13')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'tab3-content-img13'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file" class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#tab3-content-img13">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">لینک عکس 13</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#tab3-content-link13"
                                                                       value="{{getProperty($generalInfos, 'tab3-content-link13')}}">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <button type="submit" class="btn btn-success mt-5"
                                                            id="submit-from-btn"
                                                            name>ثبت
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne8">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne8" aria-expanded="true"
                                                        aria-controls="collapseOne8">
                                                    صفحه درباره ما
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne8" class="collapse" aria-labelledby="headingOne8"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row pb-5 border-bottom">

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس صفحه</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'aboutUs-img')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'aboutUs-img'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file"
                                                                                       class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#aboutUs-img">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="row pb-5 border-bottom">

                                                                <div class="col-md-4 col-12">
                                                                    <label for="" class="mt-4">متن فارسی هدر</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#aboutUs-headerText1"
                                                                           value="{{getProperty($generalInfos, 'aboutUs-headerText1')}}">
                                                                </div>


                                                                <div class="col-md-4 col-12">
                                                                    <label for="" class="mt-4">متن انگلیسی هدر</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#aboutUs-headerText2"
                                                                           value="{{getProperty($generalInfos, 'aboutUs-headerText2')}}">
                                                                </div>


                                                                <div class="col-md-4 col-12">
                                                                    <label for="" class="mt-4">متن داخل کادر</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#aboutUs-boxText"
                                                                           value="{{getProperty($generalInfos, 'aboutUs-boxText')}}">
                                                                </div>


                                                                <div class="col-md-6 col-12">
                                                                    <label for="" class="mt-4">متن اصلی</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#aboutUs-mainText"
                                                                           value="{{getProperty($generalInfos, 'aboutUs-mainText')}}">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <button type="submit" class="btn btn-success mt-5"
                                                                id="submit-from-btn"
                                                                name>ثبت
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne9">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne9" aria-expanded="true"
                                                        aria-controls="collapseOne9">
                                                    صفحه ارتباط با ما
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne9" class="collapse" aria-labelledby="headingOne9"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <form class="form-horizontal" role="form"
                                                      method="POST"
                                                      action="{{route($templateName_route_name."_edit_submit")}}"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row pb-5 border-bottom">


                                                        <div class="col-md-6 col-12">
                                                            <label for="" class="mt-4">متن فارسی هدر</label>
                                                            <input type="text" class="form-control"
                                                                   id="name-input-from"
                                                                   name="text#contactUs-headerText1"
                                                                   value="{{getProperty($generalInfos, 'contactUs-headerText1')}}">
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <label for="" class="mt-4">متن انگلیسی هدر</label>
                                                            <input type="text" class="form-control"
                                                                   id="name-input-from"
                                                                   name="text#contactUs-headerText2"
                                                                   value="{{getProperty($generalInfos, 'contactUs-headerText2')}}">
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <label for="" class="mt-4">لینک اینستاگرام</label>
                                                            <input type="text" class="form-control"
                                                                   id="name-input-from"
                                                                   name="text#contactUs-instaLink"
                                                                   value="{{getProperty($generalInfos, 'contactUs-instaLink')}}">
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <label for="" class="mt-4">لینک واتساپ</label>
                                                            <input type="text" class="form-control"
                                                                   id="name-input-from"
                                                                   name="text#contactUs-whatsappLink"
                                                                   value="{{getProperty($generalInfos, 'contactUs-whatsappLink')}}">
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-md-12">
                                                                    <label for="" class="mt-5">عکس 1</label>
                                                                    <div class="image-input box ">
                                                                        @if(isValidValue(getProperty($generalInfos, 'contactUs-img1')))
                                                                            <div class="js--image-preview js--no-default js--no-default"
                                                                                 style="background: url('{{asset(getProperty($generalInfos, 'contactUs-img1'))}}')">
                                                                            </div>
                                                                        @else
                                                                            <div class="js--image-preview"></div>
                                                                        @endif

                                                                        <div class="upload-options">
                                                                            <label class="btn-info">
                                                                                <input type="file"
                                                                                       class="image-upload"
                                                                                       accept="image/png|image/jpeg"
                                                                                       id="customFile"
                                                                                       name="file#contactUs-img1">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="mt-4">متن 1</label>
                                                                <input type="text" class="form-control"
                                                                       id="name-input-from"
                                                                       name="text#contactUs-text1"
                                                                       value="{{getProperty($generalInfos, 'contactUs-text1')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row col-lg-4 col-md-6 col-12">
                                                            <div class="col-12">
                                                                <div class="col-12">
                                                                    <div class="col-md-12">
                                                                        <label for="" class="mt-5">عکس 2</label>
                                                                        <div class="image-input box ">
                                                                            @if(isValidValue(getProperty($generalInfos, 'contactUs-img2')))
                                                                                <div class="js--image-preview js--no-default js--no-default"
                                                                                     style="background: url('{{asset(getProperty($generalInfos, 'contactUs-img2'))}}')">
                                                                                </div>
                                                                            @else
                                                                                <div class="js--image-preview"></div>
                                                                            @endif

                                                                            <div class="upload-options">
                                                                                <label class="btn-info">
                                                                                    <input type="file"
                                                                                           class="image-upload"
                                                                                           accept="image/png|image/jpeg"
                                                                                           id="customFile"
                                                                                           name="file#contactUs-img2">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="" class="mt-4">متن 2</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#contactUs-text2"
                                                                           value="{{getProperty($generalInfos, 'contactUs-text2')}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="row col-lg-4 col-md-6 col-12">
                                                                <div class="col-12">
                                                                    <div class="col-md-12">
                                                                        <label for="" class="mt-5">عکس 3</label>
                                                                        <div class="image-input box ">
                                                                            @if(isValidValue(getProperty($generalInfos, 'contactUs-img3')))
                                                                                <div class="js--image-preview js--no-default js--no-default"
                                                                                     style="background: url('{{asset(getProperty($generalInfos, 'contactUs-img3'))}}')">
                                                                                </div>
                                                                            @else
                                                                                <div class="js--image-preview"></div>
                                                                            @endif

                                                                            <div class="upload-options">
                                                                                <label class="btn-info">
                                                                                    <input type="file" class="image-upload"
                                                                                           accept="image/png|image/jpeg"
                                                                                           id="customFile"
                                                                                           name="file#contactUs-img3">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="" class="mt-4">متن 3</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#contactUs-text3"
                                                                           value="{{getProperty($generalInfos, 'contactUs-text3')}}">
                                                                </div>
                                                            </div>

                                                            <div class="row col-lg-4 col-md-6 col-12">
                                                                <div class="col-12">
                                                                    <div class="col-md-12">
                                                                        <label for="" class="mt-5">عکس 4</label>
                                                                        <div class="image-input box ">
                                                                            @if(isValidValue(getProperty($generalInfos, 'contactUs-img4')))
                                                                                <div class="js--image-preview js--no-default js--no-default"
                                                                                     style="background: url('{{asset(getProperty($generalInfos, 'contactUs-img4'))}}')">
                                                                                </div>
                                                                            @else
                                                                                <div class="js--image-preview"></div>
                                                                            @endif

                                                                            <div class="upload-options">
                                                                                <label class="btn-info">
                                                                                    <input type="file" class="image-upload"
                                                                                           accept="image/png|image/jpeg"
                                                                                           id="customFile"
                                                                                           name="file#contactUs-img4">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="" class="mt-4">متن 4</label>
                                                                    <input type="text" class="form-control"
                                                                           id="name-input-from"
                                                                           name="text#contactUs-text4"
                                                                           value="{{getProperty($generalInfos, 'contactUs-text4')}}">
                                                                </div>
                                                            </div>



                                                        <button type="submit" class="btn btn-success mt-5"
                                                                id="submit-from-btn"
                                                                name>ثبت
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.layouts.admin_footer')
                </div>
            </div>

            @endsection
            @section("js")
                <script>
                    let indexColor = 0
                    let customColors = ['rgb(147, 91, 250)', "rgb(13, 202, 240)"]
                    $("#accordion > .card .card-header").each(function () {
                        $(this).css("background", customColors[indexColor]);
                        indexColor += 1
                        if (indexColor > 1) {
                            indexColor = 0
                        }
                    })
                </script>
@endsection