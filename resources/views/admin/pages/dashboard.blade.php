@extends('admin.layouts.mainLayout')
@section('main_title')
    | داشبورد
@endsection
@section('main_content')
    <style>
        .card-header .card-category{
            color: white;
        }
        .card-header .card-icon{
            color: white !important;
            margin-bottom: 20px;
        }
        .card-header{
            padding-bottom: 0!important;
            display: flex;
            flex-direction: column;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}

{{--                    <div class="pb-3 card card-stats">--}}
{{--                        <div class="card-header card-header-dark card-header-icon" >--}}
{{--                            <div class="card-icon stats-icon purple " >--}}
{{--                                <i class="fas fa-user-shield"></i>--}}
{{--                            </div>--}}
{{--                            <p class="card-category">تعداد کارشناس و مدیر</p>--}}
{{--                            <h3 class="card-title IRANSans">--}}
{{--                                {{\App\Models\adminUser::all()->count()}}--}}
{{--                                <small>نفر</small>--}}
{{--                            </h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                    <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="pb-3 card card-stats">
                        <div class="card-header card-header-dark card-header-icon" >
                            <div class="card-icon stats-icon purple " >
                                <i class="fas fa-usd"></i>
                            </div>
                            <p class="card-category">قیمت دلار</p>
                            <h3 class="card-title IRANSans">
{{--                                {{number_format(getProperty(\App\Models\generalInfo::where("name", "dollar_price")->first(),'content'))}}--}}
                                <small>تومان</small>
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="pb-3 card card-stats">
                        <div class="card-header card-header-dark card-header-icon">
                            <div class="card-icon stats-icon blue">
                                <i class="fas fa-running"></i>
                            </div>
                            <p class="card-category">حساب های در انتظار بررسی</p>
                            <h3 class="card-title IRANSans">
{{--                                {{--}}
{{--                            \App\Models\User::where(function ($query)  {--}}
{{--                                            $query->orWhere("auth_bank_cards_hashes", "LIKE", "%\"pending\"%")--}}
{{--                                                ->orWhere('auth_with_pic_status', "pending");--}}
{{--                                        })->get()->count()--}}
{{--                        }}--}}
                                <small>مورد</small>
                            </h3>
{{--                            <a class="btn btn-sm btn-success"--}}
{{--                               href="{{route("admin.users",['f'=>"authing"])}}"--}}
{{--                            >بررسی</a>--}}

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="pb-3 card card-stats">
                        <div class="card-header card-header-dark card-header-icon">
                            <div class="card-icon stats-icon red">
                                <i class="fas fa-usd"></i>
                            </div>
                            <p class="card-category">شارژ پیامک</p>
                            <h3 class="card-title IRANSans">
{{--                                {{$remainCreditSMS}}--}}
                                <small>تومان</small>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="pb-3 card card-stats ">
                        <div class="card-header card-header-dark card-header-icon">
                            <div class="card-icon stats-icon green">
                                <i class="fas fa-users"></i>
                            </div>
                            <p class="card-category">تعداد کل اعضا</p>
                            <h3 class="card-title IRANSans">
{{--                                {{\App\Models\User::all()->count()}}--}}
                                <small>نفر</small>
                            </h3>
                        </div>
                    </div>
                </div>


            </div>


{{--            <div class="row">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header card-header-warning">--}}
{{--                            <h4 class="card-title IRANSans">لاگ ادمین</h4>--}}
{{--                            <p class="card-category">200 لاک ادمین آخر</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-body table-responsive" style="height: 428px; overflow-x: hidden; overflow-y: scroll">--}}
{{--                            <table class="table table-hover" >--}}
{{--                                <thead class="text-warning">--}}
{{--                                <th class="text-center">#</th>--}}
{{--                                <th class="text-center">نام ادمین</th>--}}
{{--                                <th class="text-center">توضیح لاگ</th>--}}
{{--                                <th class="text-center">تاریخ</th>--}}
{{--                                </thead>--}}
{{--                                <tbody >--}}
{{--                                @foreach($logs as $log)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-nowrap  text-center">{{$log->id}}</td>--}}
{{--                                        <td class="text-nowrap  text-center">{{$log->admin_name}}</td>--}}
{{--                                        <td class="text-nowrap  text-center" style="max-width: 225px;overflow: auto">{{$log->content}}</td>--}}
{{--                                        <td class="text-nowrap  text-center">{{$log->date.' '.$log->time}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
@section('main_footer')
    <script src="/assets/js/pages/dashboard.js"></script>
@endsection
