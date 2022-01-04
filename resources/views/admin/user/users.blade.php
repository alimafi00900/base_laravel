@php
    $template_name="users";
    $template_name_fa="کاربران";
@endphp
@extends('admin.layouts.admin_panel')
@section("nav-items")
    @include("admin.layouts.partials.multipleItemsBtn")
    @if(session()->has('searchValue'))
        <a class="btn btn-primary mr-3"
           href="{{route("admin.users")}}">همه کاربر ها</a>
    @endif
    <form action="{{route('admin.users')}}" method="get" class="navbar-form ">
        <div class="input-group no-border">
            <input type="text" name="searchValue" class="form-control" placeholder="جستجو کاربر ها..."
                   @if(session()->has('searchValue'))
                   value="{{session()->get('searchValue')}}"
                   @endif
                   style="margin-left: 10px!important;">
            <button type="submit" class="btn  btn-sm btn-white btn-round btn-just-icon"
                    style="margin-left: 10px!important;">
                <i class="fa fa-search" aria-hidden="true"></i>
                <div class="ripple-container"></div>
            </button>
        </div>
    </form>
@endsection
@section('content')
    @include('admin.layouts.admin_sidebar')
    <style>
        .page-item.active .page-link {
            background-color: #001854;
        }
    </style>
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
                                        <h4 class="card-title IRANSans">کاربران</h4>
                                        <p class="card-category"> مدیریت کاربر ها </p></div>
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-primary" id="nav-page"
                                                style="direction: ltr;">
                                                @php
                                                    $allItemPageRoute="admin.".$template_name."";
                                                @endphp
                                                @for($x=1;$x<=$allPages;$x++)
                                                    @if($num==$x)
                                                        <li class="page-item active" id="nav-page-item-active">
                                                            @if(session()->has('searchValue'))
                                                                <a class="page-link"
                                                                   href="{{route($allItemPageRoute,['page'=>$x,'searchValue'=>session()->get('searchValue')])}}">{{$x}}</a>
                                                            @else
                                                                <a class="page-link"
                                                                   href="{{route($allItemPageRoute,['page'=>$x])}}">{{$x}}</a>
                                                            @endif
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            @if(session()->has('searchValue'))
                                                                <a class="page-link"
                                                                   href="{{route($allItemPageRoute,['page'=>$x,'searchValue'=>session()->get('searchValue')])}}">{{$x}}</a>
                                                            @else
                                                                <a class="page-link"
                                                                   href="{{route($allItemPageRoute,['page'=>$x])}}">{{$x}}</a>
                                                            @endif
                                                        </li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive" id="users">
                                <table class="table table-hover">
                                    <thead class="text-info">
                                    <th class="text-center select-items" style="display:none;">انتخاب</th>
                                    <th class="text-center"> کد کاربری</th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">وضعیت</th>
                                    <th class="text-center">شماره همراه</th>
                                    <th class="text-center">تعداد سفارشات</th>
                                    <th class="text-center">تاریخ ثبت نام</th>
                                    <th class="text-center">اخرین IP</th>
                                    <th class="text-center">اقدامات</th>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="font-weight-bold">
                                            <td class="text-center select-items" style="display:none;"><input
                                                        id="item-id-{{$user->ID}}"   type="checkbox" style="margin:-7px" class="form-check-input ">
                                            </td>
                                            <td class="text-center">{{$user->ID}}</td>
                                            <td class="text-center">{{$user->display_name}}</td>
                                            <td class="text-center">

                                                @if($user->status=="active")
                                                    <span class="btn btn-sm btn-success">فعال</span>
                                                @elseif($user->status=="suspended")
                                                    <span class="btn btn-sm btn-warning">معلق</span>
                                                @elseif($user->status=="blocked")
                                                    <span class="btn btn-sm btn-dark">مسدود</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{$user->user_login}}</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">{{miladiToShamsiDate($user->user_registered)}}</td>
                                            <td class="text-center">{{$user->last_ip}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-info"
                                                   href="{{route("admin.users_single_user",[$user->ID])}}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger" style="cursor: pointer"
                                                        onclick="deleteItemModal('{{$user->ID}}')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    @php
        $multiple_delete_route="admin.users_multiple_delete";
    @endphp
    @include("admin.layouts.partials.multipleItems")
    <script>
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
