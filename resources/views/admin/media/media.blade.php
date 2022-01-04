@php
    $template_name="media";
    $template_name_fa="فایل";
@endphp
@extends('admin.layouts.admin_panel')
@section("nav-items")
    @if(session()->has('searchValue'))
        <a class="btn btn-primary mr-3"
           href="{{route("admin.media")}}">همه فایل</a>
    @endif
    <form action="{{route('admin.media')}}" method="get" class="navbar-form ">
        <div class="input-group no-border">
            <input type="text" name="searchValue" class="form-control" placeholder="جستجو فایل ..."
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
    <a class="btn btn-primary mr-3"
       href="{{route("admin.media_add")}}">افزودن فایل</a>
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
                        <h5 class="modal-title">حذف فایل</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-msg">ایا مایل به حذف فایل هستید؟</p>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title IRANSans">فایل ها</h4>
                                        <p class="card-category">مدیریت فایل ها</p></div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>لینک</th>
                                            <th>سایز</th>
                                            <th>نوع</th>
                                            <th>تاریخ</th>
                                            <th class="text-right">اقدامات</th>
                                        </tr>
                                        </thead>
                                        <style>
                                        </style>
                                        <tbody>
                                        @if(count($files)!=0)
                                            @foreach($files as $file)
                                                <tr>
                                                    <td>{{$file->id}}</td>
                                                    <td>{{$file->name}}</td>
                                                    <td>
                                                        <button
                                                                onclick="copyLink('{{\Illuminate\Support\Facades\URL::to('/').'/'.$file->link}}')"
                                                                class="btn btn-primary btn-sm">کپی لینک
                                                        </button>
                                                        <a href="{{\Illuminate\Support\Facades\URL::to('/').'/'.$file->link}}"
                                                           class="btn btn-info btn-sm">نمایش
                                                        </a>
                                                        <a href="{{\Illuminate\Support\Facades\URL::to('/').'/'.$file->link}}"
                                                           class="btn btn-success btn-sm" download> دانلود
                                                        </a>
                                                    </td>
                                                    <td>{{formatBytes($file->size)}}</td>
                                                    <td>{{$file->type}}</td>
                                                    <td>{{$file->date." ".$file->time}}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-danger" style="cursor: pointer"
                                                                onclick="deleteItemModal('{{$file->id}}')"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")

    <script>
        function deleteItemModal(id) {
            $("#delete-item-modal #item-id").val(id)
            $("#delete-item-modal #modal-msg").text("ایا مایل به حذف فایل " + id + " هستید؟")
            $("#delete-item-modal").modal("show")
        }
        function copyLink(link) {
            try {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(link).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.success("لینک با موفقیت کپی شد")
            } catch (e) {

            }
        }
        function deleteItemSubmit() {
            let id = $("#delete-item-modal #item-id").val()
            window.location.href = "{{route("admin.media_delete")}}" + "?id=" + id;
        }

    </script>
@endsection
