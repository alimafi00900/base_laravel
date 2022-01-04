@extends('admin.layouts.admin_panel')
@section('content')
    @include('admin.layouts.admin_sidebar')
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm > .col, .gutters-sm > [class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .card-body .row > div {
            display: flex;
            align-items: center;
        }
    </style>
    {{--  modals  --}}
    <div class="modal" id="delete-item-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" id="item-id">
                    <h5 class="modal-title">حذف کاربر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-msg">ایا مایل به حذف کاربر هستید؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="deleteItemSubmit()" class="btn btn-danger">بله</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">خیر</button>
                </div>
            </div>
        </div>
    </div>
    {{--    end modals    --}}
    <div class="main-panel IRANSans">
        @include('admin.layouts.admin_nav')
        {{--  modals  --}}
        <div class="modal" id="delete-item-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="hidden" id="item-id">
                        <h5 class="modal-title">حذف کاربر</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-msg">ایا مایل به حذف کاربر هستید؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="deleteItemSubmit()" class="btn btn-danger">بله</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">خیر</button>
                    </div>
                </div>
            </div>
        </div>
        {{--    end modals    --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title IRANSans">کاربر شماره {{$user->ID}}</h4>
                                        <p class="card-category"> مدیریت کاربران </p></div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="container">
                                    <div class="main-body">
                                        <div class="row gutters-sm">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="{{asset("adminAssets/img/faces/user-icon-blue.jpg")}}"
                                                                 alt="Admin" class="rounded-circle" width="150">
                                                            <div class="mt-3">
                                                                <h4>{{$user->display_name}}</h4>
                                                                {{--                                                                <p class="text-secondary mb-1">Full Stack Developer</p>--}}
                                                                {{--                                                                <p class="text-muted font-size-sm">--}}
                                                                {{--                                                                </p>--}}

                                                                <a class="btn btn-primary" style="color: white"
                                                                   href="{{route("admin.users_edit_information",[$user->ID])}}">ویرایش
                                                                    اطلاعات کاربر</a>

                                                                <button onclick="deleteItemModal({{$user->ID}})"
                                                                        class="btn btn-outline-danger">حذف حساب
                                                                </button>

                                                                <div class="mt-3">
                                                                    تغییر وضعیت
                                                                    <select class="form-select" id="change-access">
                                                                        <option @if($user->status=="active") selected @endif value="1">فعال</option>
                                                                        <option @if($user->status=="suspended") selected @endif value="2">معلق</option>
                                                                        <option @if($user->status=="blocked") selected @endif value="3">مسدود</option>
                                                                    </select>
                                                                    <button onclick="changeAccess()"
                                                                            class="mt-3  btn btn-info">ثبت
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">وضعیت</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                @if($user->status=="active")
                                                                    <span class="btn btn-sm btn-success">فعال</span>
                                                                @elseif($user->status=="suspended")
                                                                    <span class="btn btn-sm btn-warning">معلق</span>
                                                                @elseif($user->status=="blocked")
                                                                    <span class="btn btn-sm btn-dark">مسدود</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">شماره همراه</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                {{$user->user_login}}
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">تعداد سفارشات</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">

                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">تاریخ ثبت نام</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                {{miladiToShamsiDate($user->user_registered)}}
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
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
            </div>
        </div>
    </div>
@endsection
@section("js")

    <script>
        function changeAccess() {
            window.location.href = "{{route("admin.users_change_access",[$user->ID])}}" + "?action=" + $("#change-access").val();
        }

        function deleteItemModal(id) {
            $("#delete-item-modal #item-id").val(id)
            $("#delete-item-modal #modal-msg").text("ایا مایل به حذف کاربر " + id + " هستید؟")
            $("#delete-item-modal").modal("show")
        }

        function deleteItemSubmit() {
            let id = $("#delete-item-modal #item-id").val()
            window.location.href = "{{route("admin.users_delete")}}" + "?id=" + id;
        }
    </script>

@endsection
