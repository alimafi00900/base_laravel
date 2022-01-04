@extends('admin.layouts.admin_panel')

@section('content')
    @include('admin.layouts.admin_sidebar')
    <div class="main-panel IRANSans">
        @include('admin.layouts.admin_nav')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="pb-3 card card-stats">
                            <div class="card-header card-header-dark card-header-icon">
                                <div class="card-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <p class="card-category">تعداد کارشناس و مدیر</p>
                                <h3 class="card-title IRANSans">
                                    {{\App\Models\adminUser::all()->count()}}
                                    <small>نفر</small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats d-flex justify-content-center align-items-center">
                                    <i class="m-1 fas fa-calendar-day"></i>
                                    همین الان
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="pb-3 card card-stats">
                            <div class="card-header card-header-dark card-header-icon">
                                <div class="card-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <p class="card-category">شارژ پیامک</p>
                                <h3 class="card-title IRANSans">
                                    0
                                    <small>تومان</small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <a href="http://sms.gilasweb.ir">
                                    <div class="stats d-flex justify-content-center align-items-center">
                                        <i class="m-1 fas fa-sms"></i>
                                        0
                                        پنل سامانه پیامکی
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="pb-3 card card-stats">
                            <div class="card-header card-header-dark card-header-icon">
                                <div class="card-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <p class="card-category">تعداد کل اعضا</p>
                                <h3 class="card-title IRANSans">
                                    {{\App\Models\User::all()->count()}}
                                    <small>نفر</small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats d-flex justify-content-center align-items-center">
                                    <i class="m-1 fas fa-calendar-day"></i>
                                    همین الان
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="pb-3 card card-stats">
                            <div class="card-header card-header-dark card-header-icon">
                                <div class="card-icon">
                                    <i class="fas fa-running"></i>
                                </div>
                                <p class="card-category">تعداد تحرکات مهم</p>
                                <h3 class="card-title IRANSans">
                                    0
                                    <small>مورد</small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats d-flex justify-content-center align-items-center">
                                    <i class="m-1 fas fa-calendar-day"></i>
                                    از بیگ بنگ تا این لحظه
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-none row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header card-header-dark">
                                <h4 class="card-title IRANSans">بخش تست</h4>
                            </div>
                            <div class="card-body table-responsive text-center">
                                <p class="py-5">بخش تست</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-chart">
                            <div class="card-header card-header-dark">
                                <script>var dataDailySalesChartData={ labels: ["CPU", "RAM", "AHDD", "UHDD"],series: [[34,21,60, 70]] }</script>
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">اطلاعات پردازش سیستم</h4>
                            </div>
                        </div>

                        <div class="card card-stats">
                            <div class="card-header  card-header-icon pb-4">
                                <div class="card-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="mt-3">
                                    <p class="card-category">تعداد بازدید منحصر به فرد(24 ساعته)</p>
                                    <h3 class="card-title IRANSans">
                                        <small>نفر</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="card card-stats">
                            <div class="card-header  card-header-icon pb-4">
                                <div class="card-icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="mt-3">
                                    <p class="card-category p-1">حجم آثار دریافتی</p>
                                            <div class="badge badge-info p-2 m-1">   اثر </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title IRANSans">آخرین هشدارهای ثبت شده</h4>
                                <p class="card-category">200 هشدار آخر</p>
                            </div>
                            <div class="card-body table-responsive" style="height: 428px; overflow-x: hidden; overflow-y: scroll">
                                <table class="table table-hover" >
                                    <thead class="text-warning">
                                    <th class="text-center">عضو</th>
                                    <th class="text-center">آی پی</th>
                                    <th class="text-center">توضیح</th>
                                    <th class="text-center">آدرس</th>
                                    <th class="text-center">تاریخ</th>
                                    </thead>
                                    <tbody >

                                        <tr>
                                            <td class="text-nowrap"></td>
                                            <td class="text-nowrap"></td>
                                            <td class="text-left" dir="ltr"></td>
                                            <td class="text-left text-nowrap" dir="ltr" style="overflow:hidden; max-width: 180px!important;"></td>
                                            <td class="text-nowrap"></td>
                                        </tr>
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
