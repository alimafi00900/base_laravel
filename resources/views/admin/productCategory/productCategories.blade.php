@php
    $template_name="productCategories";
    $template_name_fa="دسته بندی محصولات";
@endphp
@extends('admin.layouts.admin_panel')
@section("nav-items")
    @include("admin.layouts.partials.multipleItemsBtn")
    @if(session()->has('searchValue'))
        <a class="btn btn-primary mr-3"
           href="{{route("admin.productCategories")}}">همه دسته بندی ها</a>
    @endif
    <form action="{{route('admin.productCategories')}}" method="get" class="navbar-form ">
        <div class="input-group no-border">
            <input type="text" name="searchValue" class="form-control" placeholder="جستجو دسته بندی ها..."
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
    <a class="btn btn-primary text-light" href="{{route("admin.productCategories_add_category")}}">افزودن دسته بندی</a>

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
                        <h5 class="modal-title">حذف دسته بندی</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-msg">ایا مایل به حذف دسته بندی هستید؟</p>
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
                                        <h4 class="card-title IRANSans">دسته بندی محصولات</h4>
                                        <p class="card-category"> مدیریت دسته بندی ها </p>
                                    </div>
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
                            <div class="card-body table-responsive" id="product_category">
                                <table class="table table-hover">
                                    <thead class="text-info">
                                    <th class="text-center select-items" style="display:none;">انتخاب</th>
                                    <th class="text-center"> کد دسته بندی</th>
                                    <th class="text-center">تصویر</th>
                                    <th class="text-center">عنوان</th>
                                    <th class="text-center">وضعیت</th>

                                    <th class="text-center">لینک</th>

                                    <th class="text-center">اقدامات</th>
                                    </thead>
                                    <tbody>
                                    @foreach($productCategories as $productCategory)
                                        <tr class="font-weight-bold">
                                            <td class="text-center select-items" style="display:none;"><input
                                                        id="item-id-{{$productCategory->id}}"   type="checkbox" style="margin:-7px" class="form-check-input ">
                                            </td>
                                            <td class="text-center">{{$productCategory->id}}</td>
                                            <td class="text-center">
                                                @if(isValidValue($productCategory->img_link))
                                                    <img src="{{asset($productCategory->img_link)}}" height="40" alt="بدون عکس">
                                                @else
                                                    بدون عکس
                                                @endif
                                            </td>
                                            <td class="text-center">{{$productCategory->title}}</td>

                                            <td class="text-center">
                                                @if($productCategory->status=="active")
                                                  <span class="btn btn-success btn-sm">فعال</span>
                                                @else
                                                  <span class="btn btn-danger btn-sm">غیرفعال</span>
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-success text-light btn-sm" onclick="copyLink('{{$productCategory->slug}}')">کپی لینک</a>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-sm btn-info"
                                                   href="{{route("admin.productCategories_edit_category",[$productCategory->id])}}">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger" style="cursor: pointer"
                                                        onclick="deleteItemModal('{{$productCategory->id}}')"><i
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
        $multiple_delete_route="admin.productCategories_multiple_delete";
    @endphp
    @include("admin.layouts.partials.multipleItems")
    <script>
        function deleteItemModal(id) {
            $("#delete-item-modal #item-id").val(id)
            $("#delete-item-modal #modal-msg").text("ایا مایل به حذف دسته بندی " + id + " هستید؟")
            $("#delete-item-modal").modal("show")
        }

        function copyLink(link) {
            try {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(link).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.success('لینک با موفقیت کپی شد')

            } catch (e) {
                toastr.error('خطایی در کپی لینک رخ داده است')
            }
        }
        function deleteItemSubmit() {
            let id = $("#delete-item-modal #item-id").val()
            window.location.href = "{{route("admin.productCategories_delete")}}" + "?id=" + id;
        }

    </script>
@endsection
