@extends('admin.layouts.mainLayout')
@section('main_title')
    | {{ getCurrentStructure('template_title') }}
@endsection
@section('page_title')
    {{ getCurrentStructure('template_title') }}
@endsection
@section('main_header')
    <link rel="stylesheet" href="adminAssets/css/pages/simple-datatables.css">
    <style>
        .section {
            overflow: auto;
        }

        /*th, td {*/
        /*    white-space: nowrap;*/
        /*}*/

        .table .card-body,
        .table .card-header {
            overflow: auto;
        }
    </style>
    <script src="/adminAssets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    @yield('sub_header')

    @if (existAdminComponent('all.header'))
        @include(getAdminComponent('all.header'))
    @endif
@endsection

@section('main_content')


    <div class="col-12 p-5" id="descDiv"
        style="background-color: rgba(0, 0, 0, 0.849);display: none; position: fixed; width:70%; height:70%; z-index:100; margin:20px; padding:20px;">

        <div class="col-12" style="display: flex; flex-direction: column; margin:20px; padding:20px;">
            <h5 style="color: white;" for=""> توضیحات محصول <small> ( این توضیحات در هنگام خرید محصول برای کاربر ارسال
                    خواهد شد و در صفحه محصول نمایش داده نمیشود ) </small></h5>
            <textarea style="margin: 10px;" name="more_detail" id="detailArea" cols="30" rows="10"></textarea>



            <a onclick="

if( $('#detailArea').val()== ''){

$('#errtxt').css('display' , 'block');

            }else{
                
                $('#description_status').val('1');
                $('#description').val( $('#detailArea').val());
                
                $('#changeSendDetailStatusForm').submit();

            }
            

            "
                class="btn btn-lg btn-info">ثبت اطلاعات</a>
            <a href="{{ route(getCurrentStructure('route_name')) }}" class="btn btn-lg btn-danger">انصراف</a>

            <small style="display: none; margin:10px;" id="errtxt" class="text-danger">لطفا متن توضیحات را وارد
                کنید</small>
        </div>

        <form action="{{ route('admin.product.changeSendDetailStatus') }}" id="changeSendDetailStatusForm" method="post">
            @csrf
            <input name="id" id="pid" type="hidden" value="">

            <input type="hidden" id="description" name="description">
            <input type="hidden" id="description_status" name="description_status">
        </form>




    </div>


    @if (getCurrentStructure(['sections', 'upload_pic_all']) === true)
        @include('admin.vendors.modals.uploadFile')
    @endif
    @if (getCurrentStructure(['sections', 'advancedSearch']) === true and
            getCurrentStructure(['sections', 'advancedSearch_model']) !== false)
        <div class="modal fade text-left" id="advancedSearch" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title white" id="myModalLabel120">جستجوی پیشرفته
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <input id="advancedSearch_input" class="d-none" type="text">
                    <div class="modal-body">
                        <h5>فیلتر جستحو ها براساس</h5>
                        @php
                            $advancedSearch_options = getCurrentStructure(['advancedSearch']);
                            $advancedSearch_current = json_decode(getProperty($_GET, 'advancedSearch'));
                        @endphp
                        <div id="advancedSearch_header" class="w-100 row mb-3">
                            @foreach ($advancedSearch_options as $advancedSearch_option_kay => $advancedSearch_option_value)
                                <div class="col-6 ">
                                    <input @if (isValidValue(getProperty($advancedSearch_current, $advancedSearch_option_kay))) checked @endif class="field_checkbox mx-2"
                                        type="checkbox" value="{{ $advancedSearch_option_kay }}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ getProperty($advancedSearch_option_value, 'name_fa') }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div id="advancedSearch_body" class="w-100">
                            @foreach ($advancedSearch_options as $advancedSearch_option_kay => $advancedSearch_option_value)
                                @include(
                                    'admin.vendors.fields.advancedSearch.' .
                                        getProperty($advancedSearch_option_value, 'template'),
                                    [
                                        'advancedSearch_current' => $advancedSearch_current,
                                        'field_key' => $advancedSearch_option_kay,
                                        'field_value' => $advancedSearch_option_value,
                                        'item' => '',
                                        'item_value' => getProperty(
                                            $advancedSearch_current,
                                            $advancedSearch_option_kay),
                                    ]
                                )
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <span class="d-block">انصراف</span>
                        </button>
                        <a type="button" class="btn btn-info ml-1" id="advancedSearch_submit_btn">
                            <span class="d-block">جستجو</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif



    @if (getCurrentStructure(['sections', 'adminAccept']) === true)
        <div class="modal fade text-left" id="acceptItem-item-modal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title white" id="myModalLabel120">تایید کردن
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <span class="d-block">انصراف</span>
                        </button>


                        <form action="{{ route('admin.acceptComment') }}" method="post">
                            @csrf
                            <input type="hidden" name="id"> 

                            <button type="submit" class="btn btn-success ml-1" data-bs-dismiss="modal">
                                <span class="d-block">تایید</span>
                            </button>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    @endif



    @if (getCurrentStructure(['sections', 'delete']) === true)
        <div class="modal fade text-left" id="delete-item-modal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title white" id="myModalLabel120">حذف تکی
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <span class="d-block">انصراف</span>
                        </button>
                        <a onclick=" window.location.href = '{{ route(getCurrentStructure('route_name') . '_delete') }}' + '?id=' + itemIdDelete;"
                            type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                            <span class="d-block">حذف</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (getCurrentStructure(['sections', 'multiple_delete']) === true)
        <div class="modal fade text-left" id="multiple-delete-item-modal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title white" id="myModalLabel120">حذف چند مورد
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <span class="d-block">انصراف</span>
                        </button>
                        <a onclick=" window.location.href = '{{ route(getCurrentStructure('route_name') . '_multiple_delete') }}' + '?ids=' + itemsIdsDeleteStr;"
                            type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                            <span class="d-block">حذف</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (existAdminComponent('all.models'))
        @include(getAdminComponent('all.models'))
    @endif
    <section class="section">
        <div class="card table">
            @if (existAdminComponent('all.section_header'))
                @include(getAdminComponent('all.section_header'))
            @endif
            <div class="card-header px-3 py-2 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    @if (getCurrentStructure(['sections', 'add']) === true)
                        <a class="btn btn-sm btn-primary mx-2"
                            href="{{ route(getCurrentStructure('route_name') . '_add') }}">
                            افزودن
                        </a>
                    @endif
                    <form action="{{ route(getCurrentStructure('route_name')) }}" method="GET">
                        <div class="dataTable-search"><input name="search" class="dataTable-input"
                                value="{{ getProperty($_GET, 'search') }}" placeholder="جستجو..." type="text"></div>
                    </form>
                    @if (isValidValue(getProperty($_GET, 'search')) or isValidValue(getProperty($_GET, 'advancedSearch')))
                        <a class="btn btn-sm btn-info mx-2" href="{{ route(getCurrentStructure('route_name')) }}">
                            همه
                        </a>
                    @endif
                    @if (getCurrentStructure(['sections', 'multiple_delete']) === true)
                        <div id="select-items-section">
                            <a class="btn btn-sm btn-danger mx-2" id="select-delete-multiple-item">
                                حذف چند مورد
                            </a>
                        </div>
                        <div id="delete-select-items-section" class="d-none " style="display: flex">
                            <a class="btn btn-sm btn-danger mx-2" id="submit-delete-multiple-item">
                                حذف
                            </a>
                            <a class="btn btn-sm btn-info mx-2" id="delete-select-all-items-btn">
                                انتخاب همه
                            </a>
                            <a class="btn btn-sm btn-secondary mx-2" id="cancel-delete-multiple-item">
                                انصراف
                            </a>
                        </div>
                    @endif
                    @if (getCurrentStructure(['sections', 'upload_pic_all']) === true)
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#uploadFile">
                            اپلود عکس
                        </button>
                    @endif
                    @if (getCurrentStructure(['sections', 'advancedSearch']) === true and
                            getCurrentStructure(['sections', 'advancedSearch_btn']) !== false)
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#advancedSearch">
                            جستجوی پیشرفته
                        </button>
                    @endif
                    @if (existAdminComponent('all.rightHeaderActions'))
                        @include(getAdminComponent('all.rightHeaderActions'))
                    @endif
                </div>
                <div class="d-flex">
                    @if (existAdminComponent('all.leftHeaderActions'))
                        @include(getAdminComponent('all.leftHeaderActions'))
                    @endif
                    @include('admin.vendors.ui.pagination', ['pagination' => $pagination])
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="all-main-table">
                    <thead>
                        <tr>
                            {{-- -------------------------------------  --}}
                            <th class="text-center select-item" style="display:none;">انتخاب</th>
                            @foreach (getCurrentStructure('fields') as $field_key => $field_value)
                                @if (getProperty($field_value, ['sections', 'all']) === true)
                                    <th class="text-center">{{ getProperty($field_value, ['name_fa']) }}</th>
                                @endif
                            @endforeach
                            @if (getCurrentStructure(['sections', 'actions']) !== false)
                                <th class="text-center">اقدامات</th>
                            @endif
                            {{-- -------------------------------------  --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- -------------------------------------  --}}

                        @foreach ($items as $item)
                            <tr class="font-weight-bold">
                                <td class="text-center select-item" style="display:none;">
                                    <input item-id="{{ getItemId($item) }}" type="checkbox" style="margin:-7px"
                                        class="form-check-input">
                                </td>
                                @foreach (getCurrentStructure('fields') as $field_key => $field_value)
                                    @if (getProperty($field_value, ['sections', 'all']) === true and getProperty($field_value, ['templates', 'all']) != null)
                                        <td class="text-center">
                                            @php
                                                $adminComponentPath = '';
                                                $adminComponentName = getProperty($field_value, ['templates', 'all', 'name']);
                                                if (existAdminComponent('all.fields.' . $adminComponentName)) {
                                                    $adminComponentPath = getAdminComponent('all.fields.' . $adminComponentName);
                                                } else {
                                                    $adminComponentPath = 'admin.vendors.fields.all.' . $adminComponentName;
                                                }
                                            @endphp
                                            @include($adminComponentPath, [
                                                'field_key' => $field_key,
                                                'field_value' => $field_value,
                                                'item' => $item,
                                                'item_value' => $item->$field_key,
                                            ])
                                        </td>
                                    @endif
                                @endforeach
                                @if (getCurrentStructure(['sections', 'actions']) !== false)
                                    <td class="text-center">

                                        @if (Request::url() === 'https://wp2.irannova.shop/admin/products' ||
                                                Request::url() === 'https://irannova.shop/admin/products' ||
                                                Request::url() === 'https://wp3.irannova.shop/admin/products')
                                            {{-- 
                                    <p>
                                    <input type="checkbox"
                                                    onchange="
                                            @if ($item->sendDetail_status == '1') $('#pid').val({{ $item->id }});

                                            $('#description_status').val('0');
                                            $('#changeSendDetailStatusForm').submit();


                                            @elseif($item->sendDetail_status == '0')
                                           
                                            $('#pid').val({{ $item->id }});
                                            $('#descDiv').css('display' , 'block'); @endif 
                                            
                                            "
                                                    value="1" @if ($item->sendDetail_status == '1') checked @endif>


                                                <label for="">
                                                    ارسال توضیحات
                                                </label>

                                    </p> --}}
                                        @endif
                                        <!-- @if (Request::url() === 'https://wp3.irannova.shop/admin/products')
    -->
                                        <!-- <p> -->

                                        <!-- </p> -->
                                        <!--
    @endif -->


                                        @if (existAdminComponent('all.actions'))
                                            @include(getAdminComponent('all.actions'), ['item' => $item])
                                        @endif
                                        @if (getCurrentStructure(['sections', 'single']) === true)
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route(getCurrentStructure('route_name') . '_single', getItemId($item)) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        @if (getCurrentStructure(['sections', 'edit']) === true)
                                            <a class="btn btn-sm btn-info mx-2"
                                                href="{{ route(getCurrentStructure('route_name') . '_edit', getItemId($item)) }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        @endif


                                        @if (getCurrentStructure(['sections', 'adminAccept']) === true)
                                            <button class="btn btn-sm btn-success mx-2" style="cursor: pointer"
                                                onclick="acceptItem('{{ getItemId($item) }}')">تایید کزدن
                                            </button>
                                        @endif


                                        @if (getCurrentStructure(['sections', 'delete']) === true)
                                            <button class="btn btn-sm btn-danger mx-2" style="cursor: pointer"
                                                onclick="deleteItem('{{ getItemId($item) }}')"><i
                                                    class="bi bi-trash3"></i>
                                            </button>
                                        @endif

                                        @if (Request::url() === 'https://wp3.irannova.shop/admin/products')
                                            <!-- Button trigger modal -->
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        {{-- -------------------------------------  --}}

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @yield('end_content')
@endsection
@section('main_footer')
    <script src="adminAssets/js/extensions/simple-datatables.js"></script>
    <script>
        $('#nav-page').scrollLeft($('#main-navigation-page .page-item.active').position().left - 50)
    </script>
    <script>
        $("#advancedSearch_header .field_checkbox").click(function() {
            if ($(this)[0].checked) {
                $("#advancedSearch_body .advancedSearch_field[name=" + $(this).attr("value") + "]").removeClass(
                    'd-none')
            } else {
                $("#advancedSearch_body .advancedSearch_field[name=" + $(this).attr("value") + "]").addClass(
                    'd-none')
            }
        })
        $("#advancedSearch_submit_btn").click(function() {
            let out = {};
            $("#advancedSearch_body .advancedSearch_field").each(function() {
                if ($(this).hasClass('d-none') != true) {
                    let elem = $(this).find('.field')
                    out[$(elem).attr('name')] = $(elem).val()
                }
            })
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('advancedSearch', JSON.stringify(out))
            window.location.href = "{{ route(getCurrentStructure('route_name')) }}" + "?" + urlParams.toString();
        })


        ///////////////////
        let itemIdDelete = "";

        function deleteItem(id) {
            itemIdDelete = id
            $('#delete-item-modal #msg').text("ایا مایل به حذف ایتم " + itemIdDelete + " هستید؟ ")
            $('#delete-item-modal').modal("show")
        }

        function acceptItem(id) {
            itemIdaccept = id
            $('#acceptItem-item-modal #msg').text("ایا مایل به تایید ایتم " + itemIdaccept + " هستید؟ ")
            $('#acceptItem-item-modal').modal("show")
        }
        ////////////////////
        $("#select-delete-multiple-item").click(function() {
            $("#select-items-section").addClass("d-none")
            $("#all-main-table .select-item").each(function() {
                $(this).css('display', "")
            })
            $("#delete-select-items-section").removeClass("d-none")
        })
        ////
        $("#cancel-delete-multiple-item").click(function() {
            $("#all-main-table .select-item").each(function() {
                $(this).find('input[type="checkbox"]').prop('checked', false)
                $(this).css('display', "none")
            })
            itemsIdsDeleteStr = ''
            $("#select-items-section").removeClass("d-none")
            $("#delete-select-items-section").addClass("d-none")
        })
        ////
        let itemsIdsDeleteStr = ""
        $("#submit-delete-multiple-item").click(function() {
            itemsIdsDeleteStr = ''
            $("#all-main-table .select-item").each(function() {
                let item = $(this).find('input[type="checkbox"]')
                if (item.prop('checked')) {
                    itemsIdsDeleteStr += item.attr('item-id') + ","
                }
            })
            itemsIdsDeleteStr = itemsIdsDeleteStr.slice(0, -1);
            $('#multiple-delete-item-modal #msg').text("ایا مایل به حذف ایتم های " + itemsIdsDeleteStr + " هستید؟ ")
            $('#multiple-delete-item-modal').modal("show")
        })
        $("#delete-select-all-items-btn").click(function() {
            $("#all-main-table .select-item").each(function() {
                let item = $(this).find('input[type="checkbox"]')
                item.prop('checked', true)
            })
        })
        ////////////////////////////
        @php
            $edit_single_field_url = '';
            try {
                $edit_single_field_url = route(getCurrentStructure('route_name') . '_edit_single_field');
            } catch (\Exception $e) {
            }
        @endphp
        $(".edit_single_field").change(function() {
            if ($(this).attr("req") == true) {
                if (confirm("ایا مایل به ویرایش فیلد " + $(this).attr("name_fa") + " شماره " + $(this).attr(
                        "row_id") + " به " + "\"" + $(this).val() + "\"" + " هستید؟ ") != true) {
                    return
                }
            }
            axios.post("{{ $edit_single_field_url }}", {
                "id": $(this).attr("row_id"),
                "field": $(this).attr("name"),
                "value": $(this).val(),
            }).then(function(response) {
                if (response.data.res == "ok") {
                    toastr.success(response.data.msg);
                }
            }).catch(function(error) {
                toastr.error(error.response.data.errMsg)
            })

        })
    </script>
    @yield('sub_footer')
    @if (existAdminComponent('all.footer'))
        @include(getAdminComponent('all.footer'))
    @endif
@endsection
