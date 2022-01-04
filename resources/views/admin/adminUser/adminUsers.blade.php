@php
    $template_name="admin_users";
    $template_name_fa="ادمین";
@endphp

@extends('admin.layouts.admin_panel')

@section("nav-items")
    @include("admin.layouts.partials.multipleItemsBtn")

    @if(session()->has('searchValue'))
        <a class="btn btn-primary mr-3"
           href="{{route("admin.".$template_name."")}}">همه {{$template_name_fa}} ها</a>
    @endif
    <form action="{{route("admin.".$template_name."")}}" method="get" class="navbar-form ">
        <div class="input-group no-border">
            <input type="text" name="searchValue" class="form-control" placeholder="جستجو {{$template_name_fa}} ها..."
                   @if(session()->has('searchValue'))
                   value="{{session()->get('searchValue')}}"
                   @endif
                   style="margin-left: 10px!important;">
            <button type="submit" class="btn btn-white btn-round btn-just-icon" style="margin-left: 10px!important;">
                <i class="fa fa-search" aria-hidden="true"></i>
                <div class="ripple-container"></div>
            </button>
        </div>
    </form>
    <li class="nav-item">
        <a class="btn btn-primary"
           href="{{route("admin.admin_users_add")}}">افزودن {{$template_name_fa}}
        </a>
    </li>
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
                        <h5 class="modal-title">حذف {{$template_name_fa}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-msg">ایا مایل به حذف {{$template_name_fa}} هستید؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="deleteItemSubmit()" class="btn btn-danger">بله</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">خیر</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title IRANSans">{{$template_name_fa}} ها</h4>
                                        <p class="card-category"> مدیریت {{$template_name_fa}} ها </p></div>
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-primary" id="nav-page"
                                                style="direction: ltr;">
                                                @php
                                                    $allItemPageRoute="admin.admin_users";
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

                            <div class="card-body table-responsive" id="{{$template_name}}">
                                <table class="table table-hover">
                                    <thead class="text-info">
                                    <th class="text-center select-items" style="display:none;">انتخاب</th>
                                    <th class="text-center"> کد {{$template_name_fa}}</th>
                                    <th class="text-center">نام {{$template_name_fa}}</th>
                                    <th class="text-center">ایمیل</th>
                                    <th class="text-center">نقش</th>
                                    <th class="text-center">وضعیت</th>
                                    <th class="text-center">تاریخ</th>
                                    <th class="text-center">اقدامات</th>
                                    </thead>
                                    <tbody>
                                    @foreach($admin_users as $admin_user)
                                        <tr class="font-weight-bold">
                                            <td class="text-center select-items" style="display:none;"><input
                                                        id="item-id-{{$admin_user->id}}"   type="checkbox" style="margin:-7px" class="form-check-input ">
                                            </td>
                                            <td class="text-center">{{$admin_user->id}}</td>
                                            <td class="text-center">{{$admin_user->name}}</td>
                                            <td class="text-center">{{$admin_user->email}}</td>
                                            <td class="text-center">
                                                @if($admin_user->role=="master")
                                                    اصلی
                                                @elseif($admin_user->role=="quality-supervisor")
                                                    ناظر کیفی
                                                @elseif($admin_user->role=="sub")
                                                    زیرشاخه
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($admin_user->status=="active")
                                                    فعال
                                                @else
                                                    غیرفعال
                                                @endif
                                            </td>
                                            <td class="text-center">{{$admin_user->date." ".$admin_user->time}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary"
                                                   href="{{route("admin.".$template_name."_edit",[$admin_user->id])}}">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" style="cursor: pointer"
                                                        onclick="deleteItemModal('{{$admin_user->id}}')"><i
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
        $template_name="admin_users";
        $multiple_delete_route="admin.".$template_name."_multiple_delete";
    @endphp
    @include("admin.layouts.partials.multipleItems")
    <script>
        function deleteItemModal(id) {
            $("#delete-item-modal #item-id").val(id)
            $("#delete-item-modal #modal-msg").text("ایا مایل به حذف {{$template_name_fa}} " + id + " هستید؟")
            $("#delete-item-modal").modal("show")
        }

        function deleteItemSubmit() {
            let id = $("#delete-item-modal #item-id").val()
            window.location.href = "{{route("admin.".$template_name."_delete")}}" + "?id=" + id;
        }
    </script>
@endsection
