@extends("user.layouts.mainLayout")
@section("title")
    خانه
@endsection
@section("content")
<main>
    <div class="col-12 col-md-11 mt-0 my-sm-3 mx-auto">
        <div class="img-heder-fluid befer-none">
            <img src="{{asset(getProperty($generalInfos, 'main_home_slider'))}}" alt="">
        </div>
    </div>
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="topic-shadow topic-shadow-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 76.358 85.978">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#cf67ee"/>
                                <stop offset="1" stop-color="#713cf6"/>
                            </linearGradient>
                            <filter id="NoPath_-_Copy_45_" x="0" y="0" width="76.358" height="85.978" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="3" result="blur"/>
                                <feFlood flood-color="#c964ef" flood-opacity="0.4"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g id="Group_6432" data-name="Group 6432" transform="translate(-1031.141 -1107.429)">
                            <g transform="matrix(1, 0, 0, 1, 1031.14, 1107.43)" filter="url(#NoPath_-_Copy_45_)">
                                <path id="NoPath_-_Copy_45_2" data-name="NoPath - Copy (45)" d="M434.525,139.823l-29.115,16.93V191l29.115,16.8L463.768,191V156.754Z" transform="translate(-396.41 -133.82)" fill="url(#linear-gradient)"/>
                            </g>
                            <g id="Iconly_Bold_Category" data-name="Iconly/Bold/Category" transform="translate(1053.821 1131.918)">
                                <g id="Category" transform="translate(2.583 2.583)">
                                    <path id="Category-2" data-name="Category" d="M18.187,25.833a3.292,3.292,0,0,1-3.282-3.307v-4.4a3.285,3.285,0,0,1,3.282-3.308h4.365a3.292,3.292,0,0,1,3.281,3.308v4.4a3.3,3.3,0,0,1-3.281,3.307Zm-14.907,0A3.3,3.3,0,0,1,0,22.526v-4.4a3.293,3.293,0,0,1,3.281-3.308H7.647a3.285,3.285,0,0,1,3.281,3.308v4.4a3.292,3.292,0,0,1-3.281,3.307ZM18.187,11.018a3.284,3.284,0,0,1-3.282-3.307v-4.4A3.292,3.292,0,0,1,18.187,0h4.365a3.3,3.3,0,0,1,3.281,3.308v4.4a3.291,3.291,0,0,1-3.281,3.307Zm-14.907,0A3.292,3.292,0,0,1,0,7.711v-4.4A3.3,3.3,0,0,1,3.281,0H7.647a3.292,3.292,0,0,1,3.281,3.308v4.4a3.284,3.284,0,0,1-3.281,3.307Z" transform="translate(0 0)" fill="#fff"/>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <h1>
                        {{getProperty($generalInfos, 'mainTitle1Tab')}}
                    </h1>
                    <span>
                     {{getProperty($generalInfos, 'mainTitle2Tab')}}
                        </span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="nav nav-tabs nav-custom" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{getProperty($generalInfos, 'mainTabTitle1')}}</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{getProperty($generalInfos, 'mainTabTitle2')}}</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{getProperty($generalInfos, 'mainTabTitle3')}}</button>
                </div>
            </div>
            <div class="col-12 mt-0 mt-sm-5 ">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="category-list category-list-one">
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img1'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img2'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img3'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img4'))}}" alt="" />
                            </a>
                        </div>
                        <div class="category-list category-list-two">
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img5'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img6'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img7'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img8'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img9'))}}" alt="" />
                            </a>
                        </div>
                        <div class="category-list category-list-three">
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img10'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img11'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img12'))}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset(getProperty($generalInfos, 'tab1-content-img13'))}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="category-list category-list-one">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img1'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img2'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img3'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img4'))}}" alt="">
                            </a>

                        </div>
                        <div class="category-list category-list-two">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img5'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img6'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img7'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img8'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img9'))}}" alt="">
                            </a>

                        </div>
                        <div class="category-list category-list-three">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img10'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img11'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img12'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab2-content-img13'))}}" alt="">
                            </a>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="category-list category-list-one">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img1'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img2'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img3'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img4'))}}" alt="">
                            </a>

                        </div>
                        <div class="category-list category-list-two">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img5'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img6'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img7'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img8'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img9'))}}" alt="">
                            </a>

                        </div>
                        <div class="category-list category-list-three">
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img10'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img11'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img12'))}}" alt="">
                            </a>
                            <a href="#" >
                                <img src="{{asset(getProperty($generalInfos, 'tab3-content-img13'))}}" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-12 mt-5">
                <div class="row col-cheng">
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <div class="gift-cart">
                                <span>
                                    <img src="{{asset("/userAssets/image/img/NoPath - Copy (58).png")}}" alt="">
                                </span>
                            <span>
                                    خرید گیفت کارت ایتونز 20 دلاری
                                </span>
                            <div class="gift-cart-price">
                                <div class="gift-cart-price-txt">
                                        <span>
                                            قیمت
                                        </span>
                                    <dd>
                                        ۵۶،۰۰۰ تومان
                                    </dd>
                                </div>
{{--                                <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <div class="gift-cart">
                                <span>
                                    <img src="{{asset("/userAssets/image/img/NoPath - Copy (58).png")}}" alt="">
                                </span>
                            <span>
                                    خرید گیفت کارت ایتونز 20 دلاری
                                </span>
                            <div class="gift-cart-price">
                                <div class="gift-cart-price-txt">
                                        <span>
                                            قیمت
                                        </span>
                                    <dd>
                                        ۵۶،۰۰۰ تومان
                                    </dd>
                                </div>
{{--                                <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <div class="gift-cart">
                                <span>
                                    <img src="{{asset("/userAssets/image/img/NoPath - Copy (58).png")}}" alt="">
                                </span>
                            <span>
                                    خرید گیفت کارت ایتونز 20 دلاری
                                </span>
                            <div class="gift-cart-price">
                                <div class="gift-cart-price-txt">
                                        <span>
                                            قیمت
                                        </span>
                                    <dd>
                                        ۵۶،۰۰۰ تومان
                                    </dd>
                                </div>
{{--                                <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <div class="gift-cart">
                                <span>
                                    <img src="{{asset("/userAssets/image/img/NoPath - Copy (58).png")}}" alt="">
                                </span>
                            <span>
                                    خرید گیفت کارت ایتونز 20 دلاری
                                </span>
                            <div class="gift-cart-price">
                                <div class="gift-cart-price-txt">
                                        <span>
                                            قیمت
                                        </span>
                                    <dd>
                                        ۵۶،۰۰۰ تومان
                                    </dd>
                                </div>
{{--                                <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <a href="#" class="learn-more">
                    مظالب بیشتر
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 18.465 11.697">
                        <g id="Group_6713" data-name="Group 6713" transform="translate(-1069.867 -408.25)">
                            <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left" transform="translate(1070.867 409.664)">
                                <g id="Arrow_-_Left" data-name="Arrow - Left" transform="translate(16.465 0) rotate(90)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,16.465V0" transform="translate(4.434 0)" fill="" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M8.869,0,4.435,4.453,0,0" transform="translate(0 12.012)" fill="" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                </g>
                            </g>
                        </g>
                    </svg>

                </a>
            </div>

            <div class="col-12 mt-5 mb-5">
                <div class="topic-shadow topic-shadow-svg">
                    <h1>
                        بازی های درون برنامه
                    </h1>
                    <span>
                            GAMES
                        </span>
                </div>
            </div>
            <div class="col-12">
                <div class="row col-cheng">
                    <div class="col col-sm-6 col-lg-3 mt-3">
                        <div class="cart-blog">
                            <a href="#"> <img class="cart-blog-img" src="{{asset("/userAssets/image/img/NoPath - Copy (66).png")}}" alt=""></a>
                            <div class="cart-blog-content">
                                <div class="cart-blog-content-text">
                                    <a href="#">
                                        Call Of Duty : New game
                                    </a>
                                    <span>۵۶،۰۰۰ تومان</span>
                                </div>
{{--                                <a href="#">--}}
{{--                                    <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-lg-3 mt-3">
                        <div class="cart-blog">
                            <a href="#"> <img class="cart-blog-img" src="{{asset("/userAssets/image/img/NoPath - Copy (66).png")}}" alt=""></a>
                            <div class="cart-blog-content">
                                <div class="cart-blog-content-text">
                                    <a href="#">
                                        Call Of Duty : New game
                                    </a>
                                    <span>۵۶،۰۰۰ تومان</span>
                                </div>
{{--                                <a href="#">--}}
{{--                                    <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-lg-3 mt-3">
                        <div class="cart-blog">
                            <a href="#"> <img class="cart-blog-img" src="{{asset("/userAssets/image/img/NoPath - Copy (66).png")}}" alt=""></a>
                            <div class="cart-blog-content">
                                <div class="cart-blog-content-text">
                                    <a href="#">
                                        Call Of Duty : New game
                                    </a>
                                    <span>۵۶،۰۰۰ تومان</span>
                                </div>
{{--                                <a href="#">--}}
{{--                                    <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6 col-lg-3 mt-3">
                        <div class="cart-blog">
                            <a href="#"> <img class="cart-blog-img" src="{{asset("/userAssets/image/img/NoPath - Copy (66).png")}}" alt=""></a>
                            <div class="cart-blog-content">
                                <div class="cart-blog-content-text">
                                    <a href="#">
                                        Call Of Duty : New game
                                    </a>
                                    <span>۵۶،۰۰۰ تومان</span>
                                </div>
{{--                                <a href="#">--}}
{{--                                    <img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt="">--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <div class="topic-shadow topic-shadow-svg">
                    <h1>
                        بازی های پر طرفدار
                    </h1>
                    <span>
                            POPULAR GAMES
                        </span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="info-fecher" href="{{getProperty($generalInfos, 'top_footer_pic_1_title')}}"> <img src="{{asset(getProperty($generalInfos, 'top_footer_pic_1'))}}" alt="" ></a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="info-fecher" href="{{getProperty($generalInfos, 'top_footer_pic_2_title')}}"><img src="{{asset(getProperty($generalInfos, 'top_footer_pic_2'))}}" alt="" class="info-fecher"></a>
            </div>
            <div class="col-12 col-sm-6 mx-auto col-md-4">
                <a class="info-fecher" href="{{getProperty($generalInfos, 'top_footer_pic_3_title')}}"> <img src="{{asset(getProperty($generalInfos, 'top_footer_pic_3'))}}" alt="" class="info-fecher"></a>
            </div>
        </div>
    </div>
</main>
@endsection