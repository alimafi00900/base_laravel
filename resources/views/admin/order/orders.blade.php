@php
    $template_name="orders";
    $template_name_fa="سفارشات";
@endphp
@extends('admin.layouts.admin_panel')
@section("nav-items")
    {{--    @include("admin.layouts.partials.multipleItemsBtn")--}}
    @if(session()->has('searchValue'))
        <a class="btn btn-primary mr-3"
           href="{{route("admin.orders")}}">همه سفارشات</a>
    @endif
    <button type="button" class="btn mr-3 btn-primary" data-toggle="modal" data-target="#search-filter">
        جستجوی پیشرفته
    </button>
    <form method="get" id="form-search" class="navbar-form ">
        <div class="input-group no-border">
            <input type="text" name="searchValue" class="form-control" placeholder="جستجو سفارشات ..."
                   @if(session()->has('searchValue'))
                   value="{{session()->get('searchValue')}}"
                   @endif
                   style="margin-left: 10px!important;">
            <a onclick="searchFormBtn()" class="btn  btn-sm btn-white btn-round btn-just-icon"
               style="margin-left: 10px!important;">
                <i class="fa fa-search" aria-hidden="true"></i>
                <div class="ripple-container"></div>
            </a>
        </div>
    </form>
@endsection
@section('content')
    <style>
        #filters-all label {
            padding-right: 0 !important;
            color: black;
        }

        .custom-from-controller {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
    <div class="modal fade" id="search-filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">جستجوی پیشرفته سفارشات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body " id="filter-selections" style="direction: ltr">
                    <label>نوع فیلتر را انتخاب کنید</label>
                    <div class=" mb-3 col-12" id="filters-all">
                        <label class="form-check-label" for="flexCheckDefault">
                            وضعیت سفارش
                        </label>
                        <input class="" name="filters-all" type="checkbox" value="status"
                               @if(array_key_exists("filters-status",$gets)) checked @endif >

                        <label class="form-check-label" for="flexCheckDefault">
                            قیمت دستی سفارش
                        </label>
                        <input class="" name="filters-all" type="checkbox" value="price-custom"
                               @if(array_key_exists("filters-price-custom-min",$gets) or array_key_exists("filters-price-custom-max",$gets)) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault">
                            قیمت ترتیبی سفارش
                        </label>
                        <input class="" name="filters-all" type="checkbox" value="price-sort"
                               @if(array_key_exists("filters-price-sort",$gets)) checked @endif>

                        <label class="form-check-label" for="flexCheckDefault">
                            دسته بندی
                        </label>
                        <input class="" name="filters-all" type="checkbox" value="product-category"
                               @if(array_key_exists("filters-product-category",$gets)) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault">
                            محصول
                        </label>
                        <input class="" name="filters-all" type="checkbox" value="single-product"
                               @if(array_key_exists("filters-single-product",$gets)) checked @endif>
                    </div>
                    <div class="col-12 mb-3 filter-field px-0 d-none" id="filters-status">
                        <label>فیلتر سفارش ها براساس وضعیت</label>
                        <select class="form-select">
                            @foreach($statuses as $statusKey => $statusValue)
                                <option @if(getProperty($gets,"filters-status")==$statusKey) selected
                                        @endif value="{{$statusKey}}">{{getProperty($statusValue,'display_name')}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-12 filter-field px-0 d-none " id="filters-price-custom">
                        <label>فیلتر سفارش ها بر اساس قیمت </label>
                        <div class=" mb-3 row " style="padding: 0 15px !important;direction: rtl">
                            <input type="number" class=" col-5 custom-from-controller"
                                   value="{{getProperty($gets,"filters-price-custom-min")}}" id="min-price"
                                   placeholder="مثال: 1,000 تومان "
                            >
                            <div class=" col-2 " style="justify-content: center; display: flex;">
                                <span class="input-group-text" id="inputGroup-sizing-sm">تا</span>
                            </div>
                            <input type="number" class=" col-5 custom-from-controller"
                                   value="{{getProperty($gets,"filters-price-custom-max")}}" id="max-price"
                                   placeholder="مثال: 100,000 تومان"
                            >
                        </div>
                    </div>
                    <div class="mb-3 col-12 filter-field px-0 d-none " id="filters-price-sort">
                        <label>فیلتر سفارش ها بر اساس ترتیب قیمت </label>
                        <select class="form-select">
                            <option @if(getProperty($gets,"filters-price-sort")=="order-price-lth") selected
                                    @endif value="order-price-lth">قیمت کم به زیاد
                            </option>
                            <option @if(getProperty($gets,"filters-price-sort")=="order-price-htl") selected
                                    @endif  value="order-price-htl">قیمت زیاد به کم
                            </option>
                        </select>
                    </div>
                    <div class="mb-3 col-12 filter-field px-0 d-none" id="filters-product-category">
                        <label>فیلتر سفارش ها بر اساس دسته بندی محصول</label>
                        <select class="form-select">
                            @foreach(App\Models\product_category::all() as $product_category)
                                <option @if(getProperty($gets,"filters-product-category")==$product_category->id) selected
                                        @endif value="{{$product_category->id}}">{{$product_category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-12 filter-field px-0 d-none" id="filters-single-product">
                        <label>فیلتر سفارش ها بر اساس محصول</label>
                        <select class="form-select">
                            @foreach(App\Models\products::all() as $product)
                                <option @if(getProperty($gets,"filters-single-product")==$product->id) selected
                                        @endif value="{{$product->id}}">{{$product->title}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-submit" class="btn btn-primary">جستجو</button>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.admin_sidebar')
    <style>
        .page-item.active .page-link {
            background-color: #001854;
        }
    </style>
    <div class="main-panel IRANSans">
        @include('admin.layouts.admin_nav')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header main-card-header card-header-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title IRANSans">سفارشات</h4>
                                        <p class="card-category"> مدیریت سفارشات </p>
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
                                                            <a class="page-link"
                                                               onclick="pageSelect('{{$x}}')">{{$x}}</a>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                               onclick="pageSelect('{{$x}}')">{{$x}}</a>
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
                                    <th class="text-center">کد سفارش</th>
                                    <th class="text-center">دسته بندی سفارش</th>
                                    <th class="text-center">وضعیت سفارش</th>
                                    <th class="text-center">شاخه سفارش</th>
                                    <th class="text-center">تعداد ایتم ها</th>
                                    <th class="text-center">نام مشتری</th>
                                    <th class="text-center">قیمت سفارش</th>
                                    <th class="text-center">تاریخ</th>
                                    <th class="text-center">اقدامات</th>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr class="font-weight-bold">
                                            <td class="text-center select-items" style="display:none;"><input
                                                        id="item-id-{{$order->id}}" type="checkbox" style="margin:-7px"
                                                        class="form-check-input ">
                                            </td>
                                            <td class="text-center">{{$order->id}}</td>
                                            <td class="text-center">{{getProperty(App\Models\product_category::where("id",$order->productCategory_id)->first(),"title")}}</td>
                                            <td class="text-center">
                                                <button class="btn {{getProperty($statuses,[$order->status,'class'])}}">{{getProperty($statuses,[$order->status,'display_name'])}}</button>
                                            </td>
                                            <td class="text-center">{{getProperty(App\Models\branch::where("id",$order->branch_id)->first(),"display_name")}}</td>
                                            <td class="text-center">
                                                <span style="font-size: 22px;color: green;">{{count((array)json_decode($order->products))}}</span><span
                                                        class="ml-2">عدد</span></td>
                                            <td class="text-center">{{getProperty($order,'user_display_name')}}</td>
                                            <td class="text-center">{{number_format($order->amount).' تومان '}}</td>
                                            <td class="text-center">{{$order->date." ".$order->time}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-primary"
                                                   href="{{route("admin.single_order",[$order->id])}}"
                                                >
                                                    <i class="fa fa-eye text-light" aria-hidden="true"></i>
                                                </a>
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
    <script>
        function parseQuery(queryString) {
            var query = {};
            var pairs = (queryString[0] === '?' ? queryString.substr(1) : queryString).split('&');
            for (var i = 0; i < pairs.length; i++) {
                var pair = pairs[i].split('=');
                query[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
            }
            return query;
        }

        $('#filter-selections #filters-all [name="filters-all"]').click(function () {
            filterUpdate()
        })

        function filterUpdate() {
            $('#filter-selections .filter-field').each(function () {
                $(this).addClass('d-none')
            })
            $('#filter-selections #filters-all [name="filters-all"]:checked').each(function () {
                $('#filter-selections .filter-field#filters-' + $(this).val()).removeClass('d-none').hide().show('fade')
            })
        }

        $("#search-filter #btn-submit").click(function () {
            let url = window.location.href;
            if (url.includes("?") != true) {
                url += "?"
            }
            let queryStr = url.split('?')[1]
            let filterSearch = parseQuery(queryStr)
            redirectPages(filterSearch)
        })

        function searchFormBtn() {
            let url = window.location.href;
            if (url.includes("?") != true) {
                url += "?"
            }
            let queryStr = url.split('?')[1]
            let filterSearch = parseQuery(queryStr)
            filterSearch['searchValue'] = $("#form-search [name='searchValue']").val()
            redirectPages(filterSearch)
        }

        function pageSelect(num) {
            let url = window.location.href;
            if (url.includes("?") != true) {
                url += "?"
            }
            let queryStr = url.split('?')[1]
            let filterSearch = parseQuery(queryStr)
            filterSearch['page'] = num
            redirectPages(filterSearch)
        }

        function redirectPages(filterSearch) {
            let url = window.location.href;
            if (url.includes("?") != true) {
                url += "?"
            }
            url = url.split('?')[0]
            if (url.includes("?") != true) {
                url += "?"
            }
            $('#search-filter .filter-field.d-none').each(function () {
                delete filterSearch[$(this).attr('id')]
                if ($(this).attr('id') == "filters-price-custom") {
                    delete filterSearch['filters-price-custom-min']
                    delete filterSearch['filters-price-custom-max']
                }
            })
            $('#search-filter .filter-field').not(".d-none").each(function () {
                if ($(this).attr('id') == "filters-status") {
                    filterSearch['filters-status'] = $(this).find("select").val()
                } else if ($(this).attr('id') == "filters-price-custom") {
                    filterSearch['filters-price-custom-min'] = $(this).find("#min-price").val()
                    filterSearch['filters-price-custom-max'] = $(this).find("#max-price").val()
                } else if ($(this).attr('id') == "filters-price-sort") {
                    filterSearch['filters-price-sort'] = $(this).find("select").val()
                } else if ($(this).attr('id') == "filters-product-category") {
                    filterSearch['filters-product-category'] = $(this).find("select").val()
                } else if ($(this).attr('id') == "filters-single-product") {
                    filterSearch['filters-single-product'] = $(this).find("select").val()
                }
            })
            for (filter in filterSearch) {
                if (filter != '') {
                    url += '&' + filter + '=' + filterSearch[filter]
                }
            }
            window.location.href = url;
        }

        $(document).ready(function () {
            filterUpdate()
        });


    </script>
@endsection
