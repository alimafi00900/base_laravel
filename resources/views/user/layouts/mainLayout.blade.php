<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ایران نوا | @yield("title")</title>
    <link rel="stylesheet" href="{{asset("/userAssets/plagin/bootstrap/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/userAssets/css/fontiran.css")}}">
    <link rel="stylesheet" href="{{asset("/userAssets/css/app.css?v=17.2244")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
          integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" @if(darkMoodStatus()!=true) disabled @endif id="css-dark-mood-file"
          href="{{asset("/userAssets/css/root-dark.css")}}">
    <style>
        * {
            text-decoration: none !important;
            font-family: 'kalameh' !important;
        }


    </style>
    @yield("header")
</head>
<body>
<header class="header">
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-2 col-sm-1 d-block d-md-none">
                <button type="button" class="header-menuLogo" onclick="openCloseMenu()">
                     <span>
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 33">
                             <g id="logoMenu" transform="translate(-8095 23038)">
                               <line id="Line_109" data-name="Line 109" x2="45" transform="translate(8096.5 -23036.5)"
                                     fill="none" stroke="" stroke-linecap="round" stroke-width="3"/>
                               <line id="Line_110" data-name="Line 110" x2="37" transform="translate(8104.5 -23021.5)"
                                     fill="none" stroke="" stroke-linecap="round" stroke-width="3"/>
                               <line id="Line_111" data-name="Line 111" x2="45" transform="translate(8096.5 -23006.5)"
                                     fill="none" stroke="" stroke-linecap="round" stroke-width="3"/>
                             </g>
                         </svg>

                     </span>
                </button>
            </div>
            <div class="col-3 col-sm-4  col-md-2 orderr-2  d-flex justify-content-right align-items-center">
                <span class="header-logo "><a href="{{\Illuminate\Support\Facades\URL::to('/')}}"><img
                                src="{{asset(getProperty($generalInfos, 'main_header_logo'))}}"
                                alt=""></a></span>
                <span class="header-logo d-n-dark"
                ><a href="#"
                    ><img src="{{asset("/userAssets/image/img/Group4270.png")}}" alt=""/></a
                    ></span>
                <span class="header-logo  d-b-dark"
                ><a href="#"
                    ><img src="{{asset("/userAssets/image/img/Group-4270.png")}}" alt=""/></a
                    ></span>
            </div>
            <div class="col-12 orderr-5   col-md-7 col-xl-8 col-lg-">
                <div class="header-search">
                    <form action="">
                        <input type="search" placeholder="جستجو کنید ...">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.83 27.44">
                                <g id="Iconly_Light_Search" data-name="Iconly/Light/Search"
                                   transform="translate(-2.954 -2.954)">
                                    <g id="Search" transform="translate(3.704 3.704)">
                                        <circle id="Ellipse_739" cx="11.985" cy="11.985" r="11.985"
                                                transform="translate(0 0)" fill="none" stroke="" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                        <path id="Line_181" d="M0,0,4.7,4.686" transform="translate(20.32 20.943)"
                                              fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5"/>
                                    </g>
                                </g>
                            </svg>

                        </button>
                    </form>
                </div>
            </div>
            <div class="col-12 orderr-4 d-block d-md-none">
                <div class="line-gary">

                </div>
            </div>
            <div class="col-7 col-md-3 col-xl-2 orderr-3  d-flex justify-content-end align-items-center">
                <div class="btn-group">
                    <div class="module-account  ">

                        <div class="trigger">
                            @if(\Illuminate\Support\Facades\Auth::check()!=true)
                                <span style="border-radius: 22px;    background: -webkit-gradient(linear, left bottom, left top, from(var(--pink)), to(#713CF6));
    background: linear-gradient(
0deg, var(--pink),var(--Purple));
    color:white !important;">داشبورد</span>
                            @else
                                <span style="border-radius: 22px;    background: -webkit-gradient(linear, left bottom, left top, from(var(--pink)), to(#713CF6));
    background: linear-gradient(
0deg, var(--pink),var(--Purple));
    color:white !important;">{{\Illuminate\Support\Facades\Auth::user()->display_name}}</span>
                            @endif
                            <ul class="locations" style="display: none">
                                <li style="cursor: pointer"><a onclick="darkMood()"><p>حالت شب:</p>
                                        <div id="dark-mood-btn-icon">
                                            @if(darkMoodStatus())
                                                <p style="color:green!important">فعال</p>
                                            @else
                                                <p style="color: red!important">غیر فعال</p>
                                            @endif
                                        </div>
                                    </a></li>

                                @if(\Illuminate\Support\Facades\Auth::check()!=true)
                                    <li><a onclick="signUpLogin()">ورود / ثبت نام</a></li>
                                @else
                                    <li><a><p>موجودی کیف پول:</p>
                                            <p>{{number_format(\Illuminate\Support\Facades\Auth::user()->basic_balance)}}
                                                تومان</p></a></li>
                                    <li><a><p>امتیازات من:</p>
                                            <p>{{\Illuminate\Support\Facades\Auth::user()->basic_point}}</p></a></li>
                                    <li><a href="{{route('user.panel')}}"><p>حساب من</p></a></li>
                                    <li><a href="{{route('user.logout')}}"><p style="color: red!important;">خروج از
                                                حساب</p></a></li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 d-none d-md-block">
                <div class="line-gary">

                </div>
            </div>
            @php
                $mainHeaderNavs= App\Models\navLink::orderBy('index_num', 'ASC')->where("nav_type",'header_nav')->get();
            @endphp
            <div class="col-9  d-none d-md-block">
                <nav class="header-menuItem">
                    <ul>
                        @foreach($mainHeaderNavs as $mainHeaderNav)
                            <li><a href="{{$mainHeaderNav->link}}">{{$mainHeaderNav->name}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-3 text-align d-none d-md-block d-flex justify-content-end align-items-center">
                <button class="header-buySellAccuont">
                    خرید فروش اکانت
                </button>
            </div>
        </div>

    </div>
    <div class="header-menuMB">
        <div class="header-menuMB-content ">
            <button type="button" class="header-menuMB-content-close" onclick="openCloseMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.242 34.242">
                    <g id="close" transform="translate(-7982.379 23038.621)">
                        <line id="Line_112" data-name="Line 112" x2="30" y2="30" transform="translate(7984.5 -23036.5)"
                              fill="none" stroke="" stroke-linecap="round" stroke-width="3"/>
                        <line id="Line_113" data-name="Line 113" x1="30" y2="30" transform="translate(7984.5 -23036.5)"
                              fill="none" stroke="" stroke-linecap="round" stroke-width="3"/>
                    </g>
                </svg>

            </button>
            <nav class="header-menuItem">
                <ul>
                    @foreach($mainHeaderNavs as $mainHeaderNav)
                        <li><a href="{{$mainHeaderNav->link}}">{{$mainHeaderNav->name}}</a></li>
                    @endforeach
                </ul>
                <button class="header-buySellAccuont">
                    خرید فروش اکانت
                </button>
            </nav>

        </div>
    </div>
</header>
@yield("content")
<footer class="footer">
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8  col-sm-6 col-lg-4 footer-about">
                <img class="footer-about-vector" src="{{asset(getProperty($generalInfos, 'main_footer_logo'))}}" alt="">
                <div class="footer-content">
                    <h3>{{getProperty($generalInfos, 'footer_title_1')}}</h3>
                    <p>{{getProperty($generalInfos, 'footer_content_1')}}</p>
                </div>
                <div class="footer-content">
                    <h3>{{getProperty($generalInfos, 'footer_title_2')}}</h3>
                    <p>{{getProperty($generalInfos, 'footer_content_2')}}</p>
                </div>
            </div>
            <div class="col-12 col-sm-4  col-sm-2 col-lg-2 footer-list">
                @php
                    $mainFooterNavs= App\Models\navLink::orderBy('index_num', 'ASC')->where("nav_type",'footer_nav')->get();
                @endphp
                <div class="footer-content">
                    <h3>دسترسی سریع</h3>
                    <ul>
                        @foreach($mainFooterNavs as $mainFooterNav)
                            <li><a href="{{$mainFooterNav->link}}">{{$mainFooterNav->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-8  col-sm-4 col-lg-3 footer-contactUs">
                <div class="footer-content">
                    <h3>تماس باما</h3>
                    <a href="{{route("user.about_us")}}" class="footer-content-a">
                        برای اطلاعات بیشتر کلید کنید
                    </a>
                </div>
                <div class="footer-content">
                    <h3>ما را در شبکه های اجتماعی دنبال کنید</h3>
                    <div class="footer-content-sixSide">
                        <a href="{{getProperty($generalInfos, 'footer_instagram_link')}}">
                            <svg class="ms-3" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="41.011" height="49.419"
                                 viewBox="0 0 51.011 59.419">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" y1="0.008" x2="0.5" y2="0.998"
                                                    gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#e09b3d"/>
                                        <stop offset="0.3" stop-color="#c74c4d"/>
                                        <stop offset="0.6" stop-color="#c21975"/>
                                        <stop offset="1" stop-color="#7024c4"/>
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" y1="-0.451" y2="1.462"
                                                    xlink:href="#linear-gradient"/>
                                    <linearGradient id="linear-gradient-3" y1="-1.396" y2="6.586"
                                                    xlink:href="#linear-gradient"/>
                                </defs>
                                <g id="Group_6802" data-name="Group 6802" transform="translate(-733.994 -6709.581)">
                                    <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)"
                                          d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z"
                                          transform="translate(328.585 6569.758)" fill="#fff" opacity="0.27"/>
                                    <g id="Group_6056" data-name="Group 6056"
                                       transform="translate(11160.465 -1277.211)">
                                        <g id="instagram" transform="translate(-10417.291 8000.175)">
                                            <path id="Path_123" data-name="Path 123"
                                                  d="M22.924,0H9.727A9.738,9.738,0,0,0,0,9.727v13.2a9.738,9.738,0,0,0,9.727,9.727h13.2a9.738,9.738,0,0,0,9.727-9.727V9.727A9.738,9.738,0,0,0,22.924,0Zm6.442,22.924a6.442,6.442,0,0,1-6.442,6.442H9.727a6.442,6.442,0,0,1-6.442-6.442V9.727A6.442,6.442,0,0,1,9.727,3.285h13.2a6.442,6.442,0,0,1,6.442,6.442v13.2Z"
                                                  fill="url(#linear-gradient)"/>
                                            <path id="Path_124" data-name="Path 124"
                                                  d="M141.445,133a8.445,8.445,0,1,0,8.445,8.445A8.454,8.454,0,0,0,141.445,133Zm0,13.6a5.16,5.16,0,1,1,5.16-5.16A5.16,5.16,0,0,1,141.445,146.6Z"
                                                  transform="translate(-125.119 -125.119)"
                                                  fill="url(#linear-gradient-2)"/>
                                            <circle id="Ellipse_4" data-name="Ellipse 4" cx="2.024" cy="2.024" r="2.024"
                                                    transform="translate(22.763 5.921)" fill="url(#linear-gradient-3)"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="{{getProperty($generalInfos, 'footer_whatsapp_link')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41.011" height="49.419"
                                 viewBox="0 0 51.011 59.419">
                                <g id="Group_6803" data-name="Group 6803" transform="translate(-660.994 -6709.581)">
                                    <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)"
                                          d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z"
                                          transform="translate(255.585 6569.758)" fill="#fff" opacity="0.27"/>
                                    <g id="whatsapp" transform="translate(670.662 6722.324)">
                                        <path id="Path_244" data-name="Path 244"
                                              d="M16.754.019A15.844,15.844,0,0,0,3.414,23.031L1.732,31.193a.616.616,0,0,0,.746.724l8-1.895a15.839,15.839,0,1,0,6.277-30ZM26.3,24.607a12.409,12.409,0,0,1-14.288,2.339l-1.114-.555-4.9,1.162,1.032-5.011-.549-1.075a12.412,12.412,0,0,1,2.284-14.4A12.4,12.4,0,1,1,26.3,24.607Z"
                                              transform="translate(-1.69 0)" fill="#7ad06d"/>
                                        <path id="Path_245" data-name="Path 245"
                                              d="M120.247,118.486l-3.068-.881a1.143,1.143,0,0,0-1.132.3l-.75.764a1.118,1.118,0,0,1-1.215.256,16.377,16.377,0,0,1-5.284-4.659,1.118,1.118,0,0,1,.088-1.239l.655-.847a1.143,1.143,0,0,0,.141-1.162l-1.291-2.919a1.144,1.144,0,0,0-1.786-.409,5.16,5.16,0,0,0-2,3.044c-.218,2.149.7,4.859,4.19,8.112,4.027,3.759,7.252,4.255,9.352,3.747A5.16,5.16,0,0,0,120.9,120.2,1.144,1.144,0,0,0,120.247,118.486Z"
                                              transform="translate(-96.723 -99.214)" fill="#7ad06d"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4  col-sm-3 col-lg-3 footer-Credit">
                <img class="footer-Credit-vector" src="{{asset(getProperty($generalInfos, 'main_footer_left'))}}"
                     alt="">
                <div class="footer-Credit-img">
                    <img src="{{asset("/userAssets/image/img/MaskGroup4.png")}}" alt="">
                    <img src="{{asset("/userAssets/image/img/MaskGroup5.png")}}" alt="">
                    <img src="{{asset("/userAssets/image/img/zarinpal-badge.png")}}" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="footer-rightToUse">
        <p>
            {{getProperty($generalInfos, 'footer_main')}}
        </p>
    </div>
</footer>
@if(\Illuminate\Support\Facades\Auth::check()!=true)
    <div class="signUpLogin custom-modal" id="signUpLogin">
        <div class="signUpLogin-box">
            <div class="signUpLogin-box-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.128" height="22.578" viewBox="0 0 18.128 22.578">
                    <g id="Iconly_Light_Profile" data-name="Iconly/Light/Profile" transform="translate(0.75 0.75)">
                        <g id="Profile" transform="translate(0 0)">
                            <circle id="Ellipse_736" cx="5.239" cy="5.239" r="5.239" transform="translate(3.071 0)"
                                    fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="1.5"/>
                            <path id="Path_33945"
                                  d="M0,3.307A2.429,2.429,0,0,1,.241,2.243c.5-1,1.917-1.536,3.091-1.777A18.407,18.407,0,0,1,5.9.105a27.471,27.471,0,0,1,4.808,0,18.618,18.618,0,0,1,2.569.361c1.174.241,2.589.723,3.091,1.777a2.489,2.489,0,0,1,0,2.138c-.5,1.054-1.917,1.536-3.091,1.766a17.233,17.233,0,0,1-2.569.371,28.314,28.314,0,0,1-3.914.06,4.458,4.458,0,0,1-.893-.06,16.912,16.912,0,0,1-2.559-.371C2.158,5.917.753,5.435.241,4.381A2.5,2.5,0,0,1,0,3.307Z"
                                  transform="translate(0 14.458)" fill="none" stroke="" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                        </g>
                    </g>
                </svg>
                <h1>
                    حساب کاربری
                </h1>
                <button type="button" class="closelogin"
                        onclick="$(this).parents('.custom-modal').removeClass('signUpLoginshow')">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.242 34.242">
                            <g id="close" transform="translate(-7982.379 23038.621)">
                              <line id="Line_112" data-name="Line 112" x2="30" y2="30"
                                    transform="translate(7984.5 -23036.5)" fill="none" stroke="" stroke-linecap="round"
                                    stroke-width="3"></line>
                              <line id="Line_113" data-name="Line 113" x1="30" y2="30"
                                    transform="translate(7984.5 -23036.5)" fill="none" stroke="" stroke-linecap="round"
                                    stroke-width="3"></line>
                            </g>
                          </svg>
                    </span>
                </button>
            </div>
            <div class="signUpLogin-box-body ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="loginn-tab" data-bs-toggle="tab" data-bs-target="#loginn"
                                type="button" role="tab" aria-controls="loginn" aria-selected="true">ورود
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signupp-tab" data-bs-toggle="tab" data-bs-target="#signupp"
                                type="button" role="tab" aria-controls="signupp" aria-selected="false">ثبت نام
                        </button>
                    </li>
                    <li class="nav-item" style="display: none" role="presentation">
                        <button class="nav-link" id="phone-verify-form-tab" data-bs-toggle="tab"
                                data-bs-target="#phone-verify-form" type="button" role="tab"
                                aria-controls="phone-verify-form" aria-selected="false"></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="loginn" role="tabpanel" aria-labelledby="loginn-tab">
                        <div id="user-login-form" class="formuser">
                            <div>
                                <div class="formuser-input">
                                    <label for="">شماره موبایل</label>
                                    <input type="number" id="phoneNumber" placeholder="9016763501">
                                    <input type="text" disabled value="+98" class="text-light formuser-input-cuntery">
                                </div>
                                <div class="formuser-input formuser-input-code"
                                     style="display: flex;justify-content: space-between">
                                    <label for="">لطفا کد امنیتی را با اعداد لاتین وارد کنید</label>
                                    <input type="number" id="security_code" style="width: 60%;" placeholder="">
                                    <div style=" display: flex; align-items: center;">
                                        <a onclick="getSecurityCode()" style="margin-left: 10px" class="text-light "><i
                                                    class="fa fa-refresh" aria-hidden="true"></i></a>
                                        <img class="security_code_pic" height="47" width="117" src="">
                                    </div>
                                </div>
                                <div class="formuser-input formuser-input-ch">
                                    <input type="checkbox" id="rememberMe" placeholder="">
                                    <label for="rememberMe">مرا به خاطر بسپار</label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button id="user-login-form-btn" class="button-form" type="submit">
                                        ورود
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="signupp" role="tabpanel" aria-labelledby="signupp-tab">
                        <div id="user-register-form" class="formuser">
                            <div>
                                <div class="formuser-input">
                                    <label for="">نام نام خانوادگی</label>
                                    <input id="name" type="text" placeholder="مثال: امیررضا باقری">
                                </div>
                                <div class="formuser-input">
                                    <label for="">شماره موبایل</label>
                                    <input id="phoneNumber" type="number" placeholder="09016763501">
                                    <input type="text" value="+98" class="formuser-input-cuntery">
                                </div>
                                <div class="formuser-input formuser-input-code"
                                     style="display: flex;justify-content: space-between">
                                    <label for="">لطفا کد امنیتی را با اعداد لاتین وارد کنید</label>
                                    <input type="number" id="security_code" style="width: 60%;" placeholder="">
                                    <div style=" display: flex; align-items: center;">
                                        <a onclick="getSecurityCode()" style="margin-left: 10px" class="text-light "><i
                                                    class="fa fa-refresh" aria-hidden="true"></i></a>
                                        <img class="security_code_pic" height="47" width="117" src="">
                                    </div>
                                </div>
                                <div class="formuser-input formuser-input-ch">
                                    <input type="checkbox" id="rememberMe" placeholder="">
                                    <label for="rememberMe">مرا به خاطر بسپار</label>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <button id="user-register-form-btn" class="button-form" type="submit">
                                        ثبت نام
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="phone-verify-form" role="tabpanel"
                         aria-labelledby="phone-verify-form-tab">
                        <div id="user-register-form" class="formuser">
                            <div>
                                <div class="formuser-input">
                                    <label for="">کد ارسال شده را وارد نمایید</label>
                                    <input id="verify-code" type="number" placeholder="">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button id="verify-btn" class="button-form" type="submit">
                                        تایید
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset("/userAssets/plagin/bootstrap/bootstrap.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "10000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
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

    @if(count($errors))
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}", 'خطا');
    @endforeach
    @endif
    @if(session()->has("msg"))
    toastr.success("{{session()->get("msg")}}", 'موفق');
    @endif
    @if(session()->has("warMsg"))
    toastr.warning("{{session()->get("warMsg")}}", 'هشدار');
    @endif
    @if(session()->has("errMsg"))
    toastr.error("{{session()->get("errMsg")}}", 'خطا');
    @endif
    @php
        session()->forget("errMsg")
    @endphp
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // menue
    let buttonMenu = document.querySelector(".header-menuMB");

    function openCloseMenu() {
        buttonMenu.classList.toggle("header-showMenu");
    }

    function signUpLogin() {
        getSecurityCode();
        $('#signUpLogin.custom-modal').addClass("signUpLoginshow");
    }

    let buttonpanel = document.querySelector(".panel-user-click");

    function sidebarpanel() {
        buttonpanel.classList.toggle("menu-mobile");
    }

    var elems = document.querySelectorAll(".gift-cart");
    for (i = 0; i <= elems.length; i++) {
        elems[i].addEventListener("click", function () {
            document.getElementById("buy-box").scrollIntoView();
        })
    }

</script>

@if(\Illuminate\Support\Facades\Auth::check()!=true)
    <script>
        $('#user-login-form #user-login-form-btn').click(function () {
            let phoneNumber = $("#user-login-form #phoneNumber").val()
            $.ajax({
                url: '{{route("user.api_login")}}',
                type: 'POST',
                data: {
                    phoneNumber: phoneNumber,
                    security_code: $("#user-login-form #security_code").val(),
                    rememberMe: $("#user-login-form #rememberMe").prop('checked')
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        $("#phone-verify-form-tab").tab('show')
                    }
                    if (data.hasOwnProperty("msg")) {
                        toastr.success(data.msg);
                    }
                    if (data.hasOwnProperty("errMsg")) {
                        toastr.error(data.errMsg);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON.errors;
                    for (error in errors) {
                        toastr.error(errors[error][0]);
                    }
                }
                ,
                complete: function () {
                    $("#user-login-form #phoneNumber").val('')
                    $("#user-login-form #security_code").val('')
                    $("#user-login-form #rememberMe").prop('checked', false)
                }
            });

        })
        $('#user-register-form #user-register-form-btn').click(function () {
            let name = $("#user-register-form #name").val()
            let phoneNumber = $("#user-register-form #phoneNumber").val()
            $.ajax({
                url: '{{route("user.api_register")}}',
                type: 'POST',
                data: {
                    name: name,
                    phoneNumber: phoneNumber,
                    security_code: $("#user-register-form #security_code").val(),
                    rememberMe: $("#user-register-form #rememberMe").prop('checked')
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        $("#phone-verify-form-tab").tab('show')
                    }
                    if (data.hasOwnProperty("msg")) {
                        toastr.success(data.msg);
                    }
                    if (data.hasOwnProperty("errMsg")) {
                        toastr.error(data.errMsg);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON.errors;
                    for (error in errors) {
                        toastr.error(errors[error][0]);
                    }
                }
                ,
                complete: function () {
                    $("#user-register-form #name").val('')
                    $("#user-register-form #security_code").val('')
                    $("#user-register-form #phoneNumber").val('')
                    $("#user-register-form #rememberMe").prop('checked', false)
                }
            });

        })
        $('#phone-verify-form #verify-btn').click(function () {
            $.ajax({
                url: '{{route("user.api_verify_code")}}',
                type: 'POST',
                data: {
                    code: $("#phone-verify-form #verify-code").val(),
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        location.reload();
                    }
                    if (data.hasOwnProperty("msg")) {
                        toastr.success(data.msg);
                    }
                    if (data.hasOwnProperty("errMsg")) {
                        toastr.error(data.errMsg);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON.errors;
                    for (error in errors) {
                        toastr.error(errors[error][0]);
                    }
                }
                ,
                complete: function () {
                    $("#phone-verify-form #verify-code").val('')
                }
            });

        })

        ////////////////

        async function getSecurityCode() {
            $('.security_code_pic').attr('src', '{{route('user.api_get_security_code_pic')}}/?v=' + (Math.floor(Math.random() * 10000)).toString())
        }

        ///////////
        @endif
    </script>
    <script>
        function darkMood() {
            status = null
            $("#dark-mood-btn-icon").empty()
            if ($("#css-dark-mood-file").prop('disabled') != true) {
                $("#css-dark-mood-file").attr('disabled', '')
                $("#dark-mood-btn-icon").append('<p style="color:red!important;">غیر فعال</p>')
                status = 'disable'
            } else {
                $("#css-dark-mood-file").attr('disabled', null)
                $("#dark-mood-btn-icon").append('<p style="color:green!important">فعال</p>')
                status = 'enable'
            }
            $.ajax({
                url: '{{route("user.api_change_dark_mood")}}',
                type: 'GET',
                data: {
                    status: status
                },
                dataType: 'JSON',
            });
        }

        @if(session()->has("reLogin"))
        $(document).ready(function () {
            signUpLogin()
        });
        @endif
    </script>

    @yield("js")
</body>
</html>
