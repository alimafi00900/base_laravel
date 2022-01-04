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

        th, td {
            text-align: center !important;
        }
    </style>
    {{--  modals  --}}
    <div class="modal" id="delete-item-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" id="item-id">
                    <h5 class="modal-title">حذف سفارش</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-msg">ایا مایل به حذف سفارش هستید؟</p>
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
                        <h5 class="modal-title">حذف سفارش</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-msg">ایا مایل به حذف سفارش هستید؟</p>
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
                                        <h4 class="card-title IRANSans">سفارش شماره {{$order->id}}</h4>
                                        <p class="card-category"> مدیریت سفارشان </p></div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="container">
                                    <div class="main-body">
                                        <div class="row gutters-sm">
                                            <div class="col-lg-4 ">
                                                <div class="card">
                                                    <div class="card-body " style="min-height: unset !important;">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <div class="mt-3 w-100">
                                                                <h4>دسته
                                                                    بندی: {{getProperty(App\Models\product_category::where("id",$order->productCategory_id)->first(),"title")}}</h4>

                                                                <div class="mt-3 ">
                                                                    تغییر وضعیت
                                                                    <select class="form-select" id="change-access">
                                                                        @foreach($statuses as $statusKey => $statusValue)
                                                                            <option @if($statusKey==$order->status) selected
                                                                                    @endif value="{{$statusKey}}">{{ getProperty($statusValue,'display_name')}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <button onclick="changeAccess()"
                                                                            class="mt-3 col-12 btn btn-info">ثبت
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-0">
                                                    <div class="card-body " style="min-height: unset !important;">
                                                        <div class="d-flex flex-column">
                                                            <h4>رویداد ها:</h4>
                                                            <div class="mt-3 w-100"
                                                                 style="max-height: 23rem;overflow: auto;">
                                                                @foreach($userLogs as $userLog)
                                                                    <div class="col-12 row p-0 py-2 m-0 border-top">
                                                                        <span class="col-12">{{$userLog->content}}</span>
                                                                        <span class="col-12 "
                                                                              style="text-align: end">{{$userLog->date.' '.$userLog->time}}</span>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card mb-3">
                                                    <div class="card-body" style="min-height: unset !important;">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">وضعیت:</h6>
                                                            </div>

                                                            <div class="col-sm-9 text-black">
                                                                <span class="btn btn-sm {{getProperty($statuses,[$order->status,'class'])}}">{{getProperty($statuses,[$order->status,'display_name'])}}</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">شاخه:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                {{getProperty(App\Models\branch::where("id",$order->branch_id)->first(),"display_name")}}
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">روش پرداخت:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                @if($order->payment_type=="only_wallet")
                                                                    <span>کیف پول</span>
                                                                @elseif($order->payment_type=="only_online")
                                                                    <span>درگاه اینترنتی</span>
                                                                @elseif($order->payment_type=="wallet_online")
                                                                    <span>کیف پول و درگاه اینترنتی</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @if(isValidValue($order->payment_id))
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">شماره پرداخت اینترنتی:</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-black d-block">
                                                                    <span class="btn btn-sm btn-info">{{$order->payment_id}}</span>
                                                                    @php

                                                                        $payment=App\Models\payment::where('id',$order->payment_id)->first();
                                                                        $paymentStatus=getProperty($payment,"status");
                                                                    @endphp

                                                                    @if($paymentStatus=="request")
                                                                        <span class="btn btn-sm btn-warning">ناتمام</span>
                                                                    @elseif($paymentStatus=="failed")
                                                                        <span clsss="btn btn-sm btn-danger">ناموفق</span>
                                                                    @elseif($paymentStatus=="success")
                                                                        <span class="btn btn-sm btn-success">موفق</span>
                                                                    @endif
                                                                    @if(isValidValue(getProperty($payment,'ref_id')))
                                                                        <span class="btn btn-sm btn-info">شماره مرجع: {{getProperty($payment,'ref_id')}}</span>
                                                                    @endif
                                                                    <span class="btn btn-sm btn-dark">تاریخ: {{getProperty($payment,'date').' '.getProperty($payment,'time')}}</span>
                                                                    <span class="btn btn-sm btn-info">IP: {{getProperty($payment,'ip')}}</span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if(isValidValue($order->wallet_transaction_id))
                                                            <hr>
                                                            <div class="row mt-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">شماره پرداخت از کیف پولی:</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-black d-block">

                                                                    <span class="btn btn-sm btn-info">{{$order->wallet_transaction_id}}</span>
                                                                    @php
                                                                        $walletStatus=getProperty(App\Models\walletTransaction::where('id',$order->wallet_transaction_id)->first(),"status");
                                                                    @endphp
                                                                    @if($walletStatus=="request")
                                                                        <span class="btn btn-sm btn-warning">ناتمام</span>
                                                                    @elseif($walletStatus=="failed")
                                                                        <span clsss="btn btn-sm btn-danger">ناموفق</span>
                                                                    @elseif($walletStatus=="success")
                                                                        <span class="btn btn-sm btn-success">موفق</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">نام کاربری:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                <span>{{getProperty($user,'display_name')}}</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">شماره همراه:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                <span>{{getProperty($user,'user_login')}}</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">تعداد کل ایتم ها:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                <span style="font-size: 22px;color: #ff5722;;">{{count((array)$items)}}</span><span
                                                                        class="ml-2">عدد</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">IP:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                <span>{{$order->ip}}</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">:تاریخ ثبت سفارش</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                {{$order->date." ".$order->time}}
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" style="overflow: auto">
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">شماره محصول</th>
                                                <th scope="col">نام محصول</th>
                                                <th scope="col">قیمت واحد</th>
                                                <th scope="col">نوع واحد</th>
                                                <th scope="col">تعداد</th>
                                                <th scope="col">قیمت مجموع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($items as $itemKey => $itemValue)
                                                <tr>
                                                    <th scope="row">{{$itemKey}}</th>
                                                    <td>{{getProperty($itemValue,'title')}}</td>
                                                    <td>{{number_format(getProperty($itemValue,'price')).' تومان '}}</td>
                                                    <td>
                                                        @if(getProperty($itemValue,'product_type')=="digital")
                                                            <span class="btn btn-sm btn-info">دیجیتالی</span>
                                                        @elseif(getProperty($itemValue,'product_type')=="physical")
                                                            <span class="btn btn-sm btn-warning">فیزیکی</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span style="font-size: 22px;color: green;">{{getProperty($itemValue,'num')}}</span><span
                                                                class="ml-2">عدد</span></td>
                                                    <td>{{number_format(intval(getProperty($itemValue,'num'))*intval(getProperty($itemValue,'price'))).' تومان '}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="col-12" style="display: flex;justify-content: end">
                                        <div class="col-2">
                                            <div class="">
                                                <h6 class="mb-0">قیمت نهایی پرداختی:</h6>
                                            </div>
                                            <div class=" text-black mt-2">
                                                <span style="font-size: 22px;color: green;">{{number_format($order->amount).' تومان '}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row gutters-sm">
                                            <div class="col-12">
                                                <div class="card mb-3">
                                                    <h3 class="card-header">اطلاعات اکانت:</h3>
                                                    <div class="card-body" style="min-height: unset !important;">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">نوع فرم:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-black">
                                                                <span>{{getProperty(json_decode($order->form),'form_display_name')}}</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        @foreach($fields as $fieldKey => $fieldValue)
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">{{getProperty($fieldValue,'display_name')}}
                                                                        :</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-black">
                                                                    <span>{{getProperty($fieldValue,'value')}}</span>
                                                                    <button
                                                                            onclick="copyLink('{{getProperty($fieldValue,'value')}}','')"
                                                                            class="ml-2 btn btn-info btn-sm">کپی
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            @if(array_key_last((array)$fields)!=$fieldKey)
                                                                <hr>
                                                            @endif
                                                        @endforeach
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
            window.location.href = "{{route("admin.change_status_order",[$order->id])}}" + "?status=" + $("#change-access").val();
        }

    </script>

@endsection
