@extends('admin.layouts.admin_panel')
@section('content')
    @include('admin.layouts.admin_sidebar')
    <div class="main-panel IRANSans">
        @include('admin.layouts.admin_nav')
        <style>
            .tox-notification--warning {
                display: none !important;
            }
        </style>

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
                                        <h4 class="card-title IRANSans">افزودن {{$templateName_single_fa}}</h4>
                                        <p class="card-category">مدیریت {{$templateName_sum_fa}}</p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 pb-3">
                                <form class="form-horizontal" role="form"
                                      method="POST" action="{{route($templateName_route_name."_add_submit")}}"
                                      enctype="multipart/form-data">
                                    @csrf

                                     @yield("form_add")
                                    <button type="submit" class="btn btn-success mt-5" id="submit-from-btn" name>ثبت
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                @include('admin.layouts.admin_footer')
            </div>
        </div>

@endsection