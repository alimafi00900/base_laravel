@php
    $template_name="admin_users_edit";
    $template_name_fa="ادمین";
@endphp

@extends('admin.layouts.admin_panel')

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
                                        <h4 class="card-title IRANSans">ویراش {{$template_name_fa}} {{$admin_user->name}}</h4>
                                        <p class="card-category"> مدیریت {{$template_name_fa}} ها </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">
                                <form class="form-horizontal" role="form"
{{--                                      method="POST" action="{{route("admin.admin_users_edit_submit")}}"--}}
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="">نام {{$template_name_fa}}</label>
                                                <input type="text"  value="{{$admin_user->name}}" class="form-control" id="name-input-from" name="name"
                                                       required>
                                                <br>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="">نقش</label>
                                                <select class="form-select" id="role-input-from">
                                                    <option @if($admin_user->role=="quality-supervisor") selected @endif value="3">ناظر کیفی</option>
                                                    <option @if($admin_user->role=="sub") selected @endif value="2">ادمین زیرشاخه</option>
                                                    <option @if($admin_user->role=="master") selected @endif value="1">ادمین اصلی</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="">ایمیل</label>
                                                <input type="text" class="form-control" id="email-input-from" value="{{$admin_user->email}}">

                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="">گذرواژه</label>
                                                <input type="text" class="form-control" id="password-input-from" name="password">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-4">
                                        <button class="btn btn-success" id="submit-from-btn">ثبت</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.layouts.admin_footer')
        </div>
    </div>
    <form id="form-add-submit" method="post" style="display: none"
          action="{{route("admin.admin_users_edit_submit",["$admin_user->id"])}}">
        @csrf
        <input name="name">
        <input name="email">

        <input name="role">
        <input name="password">
{{--        <input name="permissions">--}}
    </form>
@endsection
@section("js")s
{{--@include("Plugins.partials.searchItem.searchItemJs",["itemName"=>"organization","itemUrl"=>route("class_management_admin.api.get_organizations")])--}}

<script>

    $("#submit-from-btn").click(function () {
        if ($("#name-input-from").val() == "") {
            toastr.error("نام کاربر وارد نشده است", 'خطا');
            return
        }
        $("#form-add-submit [name='name']").val($("#name-input-from").val())
        $("#form-add-submit [name='email']").val($("#email-input-from").val())
        $("#form-add-submit [name='role']").val($("#role-input-from").val())
        $("#form-add-submit [name='password']").val($("#password-input-from").val())
        let listPermissionsStr = ""
        $("#list-permission > tr").each(function (index, item) {
            let permissionName = ($(item).attr("id")).toString().split("permission-")[1]
            let status = "0"
            if ($(item).find("#status").is(':checked') == true) {
                status = "1";
            }
            listPermissionsStr += permissionName + "=" + status + ";"
        })
        $("#form-add-submit [name='permissions']").val(listPermissionsStr)
        $("#form-add-submit").submit()
    })
</script>


@endsection
