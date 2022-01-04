
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title IRANSans">ویرایش کاربر </h4>
                                        <p class="card-category"> مدیریت کاربر ها </p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3 px-4 pb-3">

                                <style>
                                    .main-rows > div {
                                        padding: 16px 20px;
                                    }
                                </style>
                                <div class="row main-rows px-2">
                                    <form class="form px-2" method="POST" action="{{route("admin.users_edit_information_submit",[$user->ID])}}">
                                    @csrf
                                    <!-- s -->
                                        <div class="row d-flex">
                                            <div class="row">
                                                <div class="col-4 mt-1">
                                                    <label><i class="text-danger"></i>نام نمایشی</label>
                                                    <input type="text" name="display_name" class="form-control"
                                                           value="{{$user->display_name}}" required/>
                                                </div>
                                                <div class="col-4 mt-1">
                                                    <label><i class="text-danger"></i>شماره همراه</label>
                                                    <input type="text" name="user_login" class="form-control"
                                                           value="{{$user->user_login}}" required/>
                                                </div>
                                            </div>

                                            <!-- f -->
                                            <div class="d-flex col-md-4 justify-content-between align-items-center mt-2 mb-2">
                                                <button type="submit" class="btn btn-lg btn-success w-100">ثبت
                                                </button>
                                            </div>
                                        </div>
                                    </form>


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

@endsection