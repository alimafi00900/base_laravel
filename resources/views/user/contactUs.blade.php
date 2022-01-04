@extends("user.layouts.mainLayout")
@section("title")
    ارتباط با ما
@endsection
@section("content")

    <main class="my-5 contactUs">
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="topic-shadow">
                        <h1>
                            {{getProperty($generalInfos, 'contactUs-headerText1')}}
                        </h1>
                        <span>
                              {{getProperty($generalInfos, 'contactUs-headerText2')}}
                        </span>
                    </div>
                </div>
                <div class="col-12 col-md-6 contactUs-form">
                    <div class="bg-box">
                        <div class="topic-top topic-top-c">
                            <h4 >
                                ارسال ایمیل
                            </h4>
                        </div>
                        <form action="">
                            <div class="form-gr">
                                <div class="form-gr-input">
                                    <label for="">نام نام خانوادگی</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input">
                                    <label for="">شماره موبایل</label>
                                    <input type="number">
                                </div>
                                <div class="form-gr-input form-gr-textarea">
                                    <label for="">توضیحات</label>
                                    <textarea  cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-gr-submit">
                                    <button type="submit">
                                        ارسال دیگاه
                                        <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524" viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left" transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left" transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0" transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.75"/>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0" transform="translate(0.75 9.7)" fill="none" stroke="#a855f1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.75"/>
                                          </g>
                                        </g>
                                      </svg>

                                    </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="topic-top topic-top-c">
                        <h4 >
                            راه های ارتباطی
                        </h4>
                    </div>
                    <div class="contactUs-Way">
                        <ul>
                            <li>
                                <img src="{{asset(getProperty($generalInfos, 'contactUs-img1'))}}" alt="">
                                <span>{{getProperty($generalInfos, 'contactUs-text1')}}</span>

                            </li>
                            <li>
                                <img src="{{asset(getProperty($generalInfos, 'contactUs-img2'))}}" alt="">
                                <span>{{getProperty($generalInfos, 'contactUs-text2')}}</span>
                            </li>
                            <li>
                                <img src="{{asset(getProperty($generalInfos, 'contactUs-img3'))}}" alt="">
                                <span>{{getProperty($generalInfos, 'contactUs-text3')}}</span>
                            </li>
                            <li>
                                <img src="{{asset(getProperty($generalInfos, 'contactUs-img4'))}}" alt="">
                                <span>{{getProperty($generalInfos, 'contactUs-text4')}}</span>
                            </li>
                            <li>
                                <span >ما را در شبکه های اجتماعی دنبال کنید</span>
                                <a href="{{getProperty($generalInfos, 'contactUs-instaLink')}}"><svg class="ms-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31.011" height="39.419" viewBox="0 0 51.011 59.419">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" y1="0.008" x2="0.5" y2="0.998" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#e09b3d"/>
                                                <stop offset="0.3" stop-color="#c74c4d"/>
                                                <stop offset="0.6" stop-color="#c21975"/>
                                                <stop offset="1" stop-color="#7024c4"/>
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" y1="-0.451" y2="1.462" xlink:href="#linear-gradient"/>
                                            <linearGradient id="linear-gradient-3" y1="-1.396" y2="6.586" xlink:href="#linear-gradient"/>
                                        </defs>
                                        <g id="Group_6802" data-name="Group 6802" transform="translate(-733.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)" d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z" transform="translate(328.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="Group_6056" data-name="Group 6056" transform="translate(11160.465 -1277.211)">
                                                <g id="instagram" transform="translate(-10417.291 8000.175)">
                                                    <path id="Path_123" data-name="Path 123" d="M22.924,0H9.727A9.738,9.738,0,0,0,0,9.727v13.2a9.738,9.738,0,0,0,9.727,9.727h13.2a9.738,9.738,0,0,0,9.727-9.727V9.727A9.738,9.738,0,0,0,22.924,0Zm6.442,22.924a6.442,6.442,0,0,1-6.442,6.442H9.727a6.442,6.442,0,0,1-6.442-6.442V9.727A6.442,6.442,0,0,1,9.727,3.285h13.2a6.442,6.442,0,0,1,6.442,6.442v13.2Z" fill="url(#linear-gradient)"/>
                                                    <path id="Path_124" data-name="Path 124" d="M141.445,133a8.445,8.445,0,1,0,8.445,8.445A8.454,8.454,0,0,0,141.445,133Zm0,13.6a5.16,5.16,0,1,1,5.16-5.16A5.16,5.16,0,0,1,141.445,146.6Z" transform="translate(-125.119 -125.119)" fill="url(#linear-gradient-2)"/>
                                                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="2.024" cy="2.024" r="2.024" transform="translate(22.763 5.921)" fill="url(#linear-gradient-3)"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{getProperty($generalInfos, 'contactUs-whatsappLink')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.011" height="39.419" viewBox="0 0 51.011 59.419">
                                        <g id="Group_6803" data-name="Group 6803" transform="translate(-660.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)" d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z" transform="translate(255.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="whatsapp" transform="translate(670.662 6722.324)">
                                                <path id="Path_244" data-name="Path 244" d="M16.754.019A15.844,15.844,0,0,0,3.414,23.031L1.732,31.193a.616.616,0,0,0,.746.724l8-1.895a15.839,15.839,0,1,0,6.277-30ZM26.3,24.607a12.409,12.409,0,0,1-14.288,2.339l-1.114-.555-4.9,1.162,1.032-5.011-.549-1.075a12.412,12.412,0,0,1,2.284-14.4A12.4,12.4,0,1,1,26.3,24.607Z" transform="translate(-1.69 0)" fill="#7ad06d"/>
                                                <path id="Path_245" data-name="Path 245" d="M120.247,118.486l-3.068-.881a1.143,1.143,0,0,0-1.132.3l-.75.764a1.118,1.118,0,0,1-1.215.256,16.377,16.377,0,0,1-5.284-4.659,1.118,1.118,0,0,1,.088-1.239l.655-.847a1.143,1.143,0,0,0,.141-1.162l-1.291-2.919a1.144,1.144,0,0,0-1.786-.409,5.16,5.16,0,0,0-2,3.044c-.218,2.149.7,4.859,4.19,8.112,4.027,3.759,7.252,4.255,9.352,3.747A5.16,5.16,0,0,0,120.9,120.2,1.144,1.144,0,0,0,120.247,118.486Z" transform="translate(-96.723 -99.214)" fill="#7ad06d"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-7 mt-5">
                    <p class="font-df">
                        توجه داشته باشید فرم تماس با ما صرفا جهت بیان نظرات شماست، لطفا برای پیگیری سفارش های خود از پشتیبانی آنلاین سایت استفاده کنید.
                    </p>
                </div>
            </div>
        </div>
    </main>


@endsection