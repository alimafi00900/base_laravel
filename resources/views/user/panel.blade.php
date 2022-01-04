<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>حساب کاربری | {{\Illuminate\Support\Facades\Auth::user()->display_name}}</title>
    <link rel="stylesheet" href="{{asset("userAssets/plagin/bootstrap/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset('userAssets/css/fontiran.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('userAssets/css/app.css')}}"/>
    <link rel="stylesheet" @if(darkMoodStatus()!=true) disabled @endif  href="{{asset('userAssets/css/root-dark.css')}}"/>
</head>
<body>
<div class="container-xl container-fluid panel-user">
    <div class="row mt-3">
        <div class="col-1  col-lg-4 col-xl-3 panel-user-click">

            <nav class="sticky-top dir-lrt sroll-panel">
                <button type="button" class="closelogin marginclosepanel d-block d-lg-none" onclick="sidebarpanel()">
              <span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.242 34.242">
                      <g id="close" transform="translate(-7982.379 23038.621)">
                        <line id="Line_112" data-name="Line 112" x2="30" y2="30" transform="translate(7984.5 -23036.5)"
                              fill="none" stroke="#373737" stroke-linecap="round" stroke-width="3"></line>
                        <line id="Line_113" data-name="Line 113" x1="30" y2="30" transform="translate(7984.5 -23036.5)"
                              fill="none" stroke="#373737" stroke-linecap="round" stroke-width="3"></line>
                      </g>
                    </svg>
              </span>
                </button>
                <div class="nav nav-tabs sidebar " id="nav-tab" role="tablist" style="overflow: auto">
                    <button
                            class="nav-link "
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 19.917 24.847"
                        >
                            <g id="Profile" transform="translate(0.75 0.75)">
                                <circle
                                        id="Ellipse_736"
                                        cx="5.803"
                                        cy="5.803"
                                        r="5.803"
                                        transform="translate(3.402 0)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                                <path
                                        id="Path_33945"
                                        d="M0,3.663A2.69,2.69,0,0,1,.267,2.485C.823,1.373,2.39.784,3.691.517a20.389,20.389,0,0,1,2.846-.4,30.427,30.427,0,0,1,5.325,0,20.622,20.622,0,0,1,2.846.4c1.3.267,2.868.8,3.424,1.968a2.757,2.757,0,0,1,0,2.368c-.556,1.167-2.123,1.7-3.424,1.957a19.088,19.088,0,0,1-2.846.411,31.361,31.361,0,0,1-4.336.067,4.938,4.938,0,0,1-.989-.067A18.732,18.732,0,0,1,3.7,6.809C2.39,6.553.834,6.02.267,4.853A2.768,2.768,0,0,1,0,3.663Z"
                                        transform="translate(0 16.014)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                            </g>
                        </svg>

                        حساب کاربری من


                    </button>
                    <div class="sidebar-profile">
                        <dd>
                            <img
                                    src="{{asset('')}}userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png"
                                    alt=""
                            />
                        </dd>
                        <div>
                            <a href="#">
                                <svg
                                        id="Iconly_Light_Setting"
                                        data-name="Iconly/Light/Setting"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                >
                                    <g id="Setting" transform="translate(2.5 1.5)">
                                        <path
                                                id="Path_33946"
                                                d="M17.528,5.346l-.622-1.08a1.913,1.913,0,0,0-2.609-.7h0a1.9,1.9,0,0,1-2.609-.677,1.831,1.831,0,0,1-.256-.915h0A1.913,1.913,0,0,0,9.519,0H8.265a1.9,1.9,0,0,0-1.9,1.913h0A1.913,1.913,0,0,1,4.448,3.8a1.831,1.831,0,0,1-.915-.256h0a1.913,1.913,0,0,0-2.609.7l-.668,1.1a1.913,1.913,0,0,0,.7,2.609h0a1.913,1.913,0,0,1,.957,1.657,1.913,1.913,0,0,1-.957,1.657h0a1.9,1.9,0,0,0-.7,2.6h0l.632,1.089A1.913,1.913,0,0,0,3.5,15.7h0a1.895,1.895,0,0,1,2.6.7,1.831,1.831,0,0,1,.256.915h0a1.913,1.913,0,0,0,1.913,1.913H9.519a1.913,1.913,0,0,0,1.913-1.9h0a1.9,1.9,0,0,1,1.913-1.913,1.95,1.95,0,0,1,.915.256h0a1.913,1.913,0,0,0,2.609-.7h0l.659-1.1a1.9,1.9,0,0,0-.7-2.609h0a1.9,1.9,0,0,1-.7-2.609,1.876,1.876,0,0,1,.7-.7h0a1.913,1.913,0,0,0,.7-2.6h0Z"
                                                transform="translate(0.779 0.778)"
                                                fill="none"
                                                stroke="#200e32"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                stroke-width="1.5"
                                        />
                                        <circle
                                                id="Ellipse_737"
                                                cx="2.636"
                                                cy="2.636"
                                                r="2.636"
                                                transform="translate(7.039 7.753)"
                                                fill="none"
                                                stroke="#200e32"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                stroke-width="1.5"
                                        />
                                    </g>
                                </svg>

                                تنظیمات
                            </a>
                            <dd>
                                <span></span>
                            </dd>
                            <a href="#">
                                <svg
                                        id="Iconly_Light_Message"
                                        data-name="Iconly/Light/Message"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                >
                                    <g id="Message" transform="translate(2 3.5)">
                                        <path
                                                id="Path_445"
                                                d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                                transform="translate(3.954 5.561)"
                                                fill="none"
                                                stroke="#200e32"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                stroke-width="1.5"
                                        />
                                        <path
                                                id="Rectangle_511"
                                                d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                                transform="translate(0 0)"
                                                fill="none"
                                                stroke="#200e32"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                stroke-width="1.5"
                                        />
                                    </g>
                                </svg>
                                پیام ها
                            </a>
                        </div>
                    </div>
                    <button
                            class="nav-link active"
                            id="nav-pishkhan-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#pishkhan"
                            type="button"
                            role="tab"
                            aria-controls="nav-pishkhan"
                            aria-selected="false"
                    >
                        <svg
                                id="Iconly_Light_Category"
                                data-name="Iconly/Light/Category"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 26 26"
                        >
                            <g id="Category" transform="translate(2.167 2.167)">
                                <path
                                        id="Stroke_1"
                                        data-name="Stroke 1"
                                        d="M2.653,0H6.192A2.664,2.664,0,0,1,8.844,2.676V6.244A2.665,2.665,0,0,1,6.192,8.92H2.653A2.665,2.665,0,0,1,0,6.244V2.676A2.665,2.665,0,0,1,2.653,0Z"
                                        transform="translate(12.823)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                                <path
                                        id="Stroke_3"
                                        data-name="Stroke 3"
                                        d="M2.653,0H6.191A2.665,2.665,0,0,1,8.844,2.676V6.244A2.665,2.665,0,0,1,6.191,8.92H2.653A2.665,2.665,0,0,1,0,6.244V2.676A2.665,2.665,0,0,1,2.653,0Z"
                                        transform="translate(0)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                                <path
                                        id="Stroke_5"
                                        data-name="Stroke 5"
                                        d="M2.653,0H6.191A2.665,2.665,0,0,1,8.844,2.677V6.244A2.665,2.665,0,0,1,6.191,8.92H2.653A2.665,2.665,0,0,1,0,6.244V2.677A2.665,2.665,0,0,1,2.653,0Z"
                                        transform="translate(0 12.746)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                                <path
                                        id="Stroke_7"
                                        data-name="Stroke 7"
                                        d="M2.653,0H6.192A2.665,2.665,0,0,1,8.844,2.677V6.244A2.664,2.664,0,0,1,6.192,8.92H2.653A2.665,2.665,0,0,1,0,6.244V2.677A2.665,2.665,0,0,1,2.653,0Z"
                                        transform="translate(12.823 12.746)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                            </g>
                        </svg>
                        پیشخوان
                    </button>
                    <button
                            class="nav-link "
                            id="nav-Trackorders-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#Trackorders"
                            type="button"
                            role="tab"
                            aria-controls="nav-Trackorders"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Downlaod" data-name="Iconly/Light/Downlaod"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <g id="Downlaod" transform="translate(3.111 3.678)">
                                <path id="Stroke_1" data-name="Stroke 1" d="M13.044,0H0"
                                      transform="translate(10.021) rotate(90)" fill="none" stroke=""
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5"/>
                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0,3.172,3.159,0,6.318"
                                      transform="translate(13.18 9.873) rotate(90)" fill="none" stroke=""
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5"/>
                                <path id="Stroke_4" data-name="Stroke 4"
                                      d="M0,5V3.991A3.991,3.991,0,0,1,3.992,0H9.283a3.981,3.981,0,0,1,3.981,3.981V16.05a3.992,3.992,0,0,1-3.992,3.992H3.98A3.981,3.981,0,0,1,0,16.06V15.04"
                                      transform="translate(20.042 5.127) rotate(90)" fill="none" stroke=""
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5"/>
                            </g>
                        </svg>


                        استعلام سفارشات
                    </button>
                    <button
                        class="nav-link"
                        id="nav-orderslist-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#orderslist"
                        type="button"
                        role="tab"
                        aria-controls="nav-orderslist"
                        aria-selected="false"
                    >
                        <svg
                            id="Iconly_Light_Buy"
                            data-name="Iconly/Light/Buy"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 26 26"
                        >
                            <g id="Buy" transform="translate(2.979 3.521)">
                                <path
                                    id="Stroke_1"
                                    data-name="Stroke 1"
                                    d="M.828,0A.828.828,0,1,1,0,.829.829.829,0,0,1,.828,0Z"
                                    transform="translate(4.234 17.951)"
                                    fill="none"
                                    stroke=""
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.5"
                                />
                                <path
                                    id="Stroke_3"
                                    data-name="Stroke 3"
                                    d="M.829,0A.828.828,0,1,1,0,.829.829.829,0,0,1,.829,0Z"
                                    transform="translate(16.423 17.951)"
                                    fill="none"
                                    stroke=""
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.5"
                                />
                                <path
                                    id="Stroke_5"
                                    data-name="Stroke 5"
                                    d="M0,0,2.253.39,3.3,12.819A1.953,1.953,0,0,0,5.243,14.61H17.065A1.954,1.954,0,0,0,19,12.935l1.028-7.1A1.452,1.452,0,0,0,18.589,4.17H2.615"
                                    transform="translate(0)"
                                    fill="none"
                                    stroke=""
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.5"
                                />
                                <path
                                    id="Stroke_7"
                                    data-name="Stroke 7"
                                    d="M0,.5H3"
                                    transform="translate(12.323 7.674)"
                                    fill="none"
                                    stroke=""
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.5"
                                />
                            </g>
                        </svg>

                        سفارشات
                    </button>
                    <button
                            class="nav-link "
                            id="nav-address-form-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#address-form"
                            role="tab"
                            aria-controls="nav-address-form"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Location" data-name="Iconly/Light/Location"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <g id="Location" transform="translate(4.592 2.967)">
                                <path id="Path_33958"
                                      d="M0,8.29a8.318,8.318,0,1,1,16.636.057v.094c-.057,2.986-1.724,5.746-3.768,7.9a21.864,21.864,0,0,1-3.891,3.2,1.008,1.008,0,0,1-1.319,0,21.469,21.469,0,0,1-5.473-5.125A10.645,10.645,0,0,1,0,8.318Z"
                                      fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5"/>
                                <circle id="Ellipse_740" cx="2.666" cy="2.666" r="2.666"
                                        transform="translate(5.652 5.784)" fill="none" stroke="" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        افزودن ادرس
                    </button>
                    <button
                            class="nav-link"
                            id="nav-address-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#address"
                            type="button"
                            role="tab"
                            aria-controls="nav-address"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Location" data-name="Iconly/Light/Location"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <g id="Location" transform="translate(4.592 2.967)">
                                <path id="Path_33958"
                                      d="M0,8.29a8.318,8.318,0,1,1,16.636.057v.094c-.057,2.986-1.724,5.746-3.768,7.9a21.864,21.864,0,0,1-3.891,3.2,1.008,1.008,0,0,1-1.319,0,21.469,21.469,0,0,1-5.473-5.125A10.645,10.645,0,0,1,0,8.318Z"
                                      fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5"/>
                                <circle id="Ellipse_740" cx="2.666" cy="2.666" r="2.666"
                                        transform="translate(5.652 5.784)" fill="none" stroke="" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        ادرس ها
                    </button>
                    <button
                            class="nav-link"
                            id="nav-bookmarrk-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#bookmarrk"
                            type="button"
                            role="tab"
                            aria-controls="nav-bookmarrk"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Bookmark" data-name="Iconly/Light/Bookmark"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <g id="Bookmark" transform="translate(4.654 3.01)">
                                <path id="Path_33968"
                                      d="M7.982,17.175l-6.426,3.52a1.071,1.071,0,0,1-1.428-.426h0A1.13,1.13,0,0,1,0,19.763V4.165C0,1.19,2.033,0,4.958,0H11.83c2.836,0,4.958,1.111,4.958,3.966v15.8a1.061,1.061,0,0,1-1.061,1.061,1.17,1.17,0,0,1-.516-.129l-6.465-3.52A.8.8,0,0,0,7.982,17.175Z"
                                      transform="translate(0)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Line_209" d="M0,.458H7.9" transform="translate(4.413 6.632)" fill="none"
                                      stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5"/>
                            </g>
                        </svg>
                        نشان شده ها
                    </button>
                    <button
                            class="nav-link"
                            id="nav-massage-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#massage"
                            type="button"
                            role="tab"
                            aria-controls="nav-massage"
                            aria-selected="false"
                    >
                        <svg
                                id="Iconly_Light_Message"
                                data-name="Iconly/Light/Message"
                                xmlns="http://www.w3.org/2000/svg"

                                viewBox="0 0 24 24"
                        >
                            <g id="Message" transform="translate(2 3.5)">
                                <path
                                        id="Path_445"
                                        d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                        transform="translate(3.954 5.561)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                                <path
                                        id="Rectangle_511"
                                        d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                        transform="translate(0 0)"
                                        fill="none"
                                        stroke=""
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        stroke-width="1.5"
                                />
                            </g>
                        </svg>
                        پیام ها
                    </button>
                    <button
                            class="nav-link"
                            id="nav-comment-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#comment"
                            type="button"
                            role="tab"
                            aria-controls="nav-comment"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Chat" data-name="Iconly/Light/Chat" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24">
                            <g id="Chat" transform="translate(2 2)">
                                <path id="Combined_Shape" data-name="Combined Shape"
                                      d="M9.085,1.166a1.169,1.169,0,1,1,1.169,1.169A1.169,1.169,0,0,1,9.085,1.166Zm-4.542,0A1.168,1.168,0,1,1,5.711,2.336,1.169,1.169,0,0,1,4.543,1.166ZM0,1.166A1.169,1.169,0,1,1,1.168,2.336,1.169,1.169,0,0,1,0,1.166Z"
                                      transform="translate(4.527 9.056)" fill=""/>
                                <path id="Stroke_7" data-name="Stroke 7"
                                      d="M10.02,0A10.006,10.006,0,0,0,0,10.015a10.584,10.584,0,0,0,1.35,5,1.051,1.051,0,0,1,.07.9L.75,18.157a.624.624,0,0,0,.82.78l2.02-.6a1.7,1.7,0,0,1,1.49.361A10,10,0,1,0,10.02,0Z"
                                      fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        نظرات من
                    </button>
                    <button
                            class="nav-link"
                            id="nav-score-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#score"
                            type="button"
                            role="tab"
                            aria-controls="nav-score"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Ticket_Star" data-name="Iconly/Light/Ticket Star"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <g id="Ticket_Star" data-name="Ticket Star" transform="translate(2.979 4.062)">
                                <path id="Stroke_1" data-name="Stroke 1"
                                      d="M16.366,18.056a3.675,3.675,0,0,0,3.676-3.676V11.455a2.426,2.426,0,1,1,0-4.851l0-2.928A3.675,3.675,0,0,0,16.365,0H3.677A3.676,3.676,0,0,0,0,3.676V6.7A2.343,2.343,0,0,1,2.426,9.03,2.422,2.422,0,0,1,0,11.455V14.38a3.675,3.675,0,0,0,3.675,3.676Z"
                                      fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_3" data-name="Stroke 3"
                                      d="M3.472,5.61,5.357,6.6a.241.241,0,0,0,.35-.254l-.361-2.1L6.873,2.762a.241.241,0,0,0-.133-.411L4.632,2.045,3.688.134a.24.24,0,0,0-.431,0L2.313,2.045.206,2.352a.241.241,0,0,0-.133.411L1.6,4.247l-.361,2.1a.241.241,0,0,0,.35.254L3.472,5.61Z"
                                      transform="translate(6.548 5.336)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        امتیازات
                    </button>
                    <button
                            class="nav-link"
                            id="nav-wallets-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#wallets"
                            type="button"
                            role="tab"
                            aria-controls="nav-wallets"
                            aria-selected="false"
                    >
                        <svg id="Iconly_Light_Wallet" data-name="Iconly/Light/Wallet" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 26 26">
                            <g id="Wallet" transform="translate(2.708 3.25)">
                                <path id="Stroke_1" data-name="Stroke 1"
                                      d="M7.3,5.831H2.917A2.916,2.916,0,1,1,2.917,0H7.3"
                                      transform="translate(13.432 6.514)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_3" data-name="Stroke 3" d="M.638.456H.3"
                                      transform="translate(16.207 8.907)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_5" data-name="Stroke 5"
                                      d="M5.685,0h9.364a5.685,5.685,0,0,1,5.685,5.685V13.46a5.685,5.685,0,0,1-5.685,5.685H5.685A5.685,5.685,0,0,1,0,13.46V5.685A5.685,5.685,0,0,1,5.685,0Z"
                                      transform="translate(0)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_7" data-name="Stroke 7" d="M0,.456H5.849"
                                      transform="translate(4.914 4.461)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        کیف پول
                    </button>
                    <button
                            class="nav-link"

                    >
                        <svg id="Iconly_Light_Logout" data-name="Iconly/Light/Logout" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 26 26">
                            <g id="Logout" transform="translate(3.003 3.002)">
                                <path id="Stroke_1" data-name="Stroke 1"
                                      d="M13.264,5V3.992A3.992,3.992,0,0,0,9.272,0H3.991A3.992,3.992,0,0,0,0,3.992V16.05a3.992,3.992,0,0,0,3.991,3.992H9.283a3.981,3.981,0,0,0,3.981-3.98V15.04"
                                      fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_3" data-name="Stroke 3" d="M13.044.5H0"
                                      transform="translate(7.58 9.521)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0,3.172,3.158,0,6.317"
                                      transform="translate(17.452 6.863)" fill="none" stroke="" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                            </g>
                        </svg>


                        خروج از حساب کاربری
                    </button>
                </div>

            </nav>
        </div>
        <div class="col-12 col-lg-8 col-xl-9">
            <header class="header-item mb-5">
                <button type="button" class="menu-mobile-btn d-block d-lg-none" onclick="sidebarpanel()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 33">
                        <g id="logoMenu" transform="translate(-8095 23038)">
                            <line id="Line_109" data-name="Line 109" x2="45" transform="translate(8096.5 -23036.5)"
                                  fill="none" stroke="#373737" stroke-linecap="round" stroke-width="3"></line>
                            <line id="Line_110" data-name="Line 110" x2="37" transform="translate(8104.5 -23021.5)"
                                  fill="none" stroke="#373737" stroke-linecap="round" stroke-width="3"></line>
                            <line id="Line_111" data-name="Line 111" x2="45" transform="translate(8096.5 -23006.5)"
                                  fill="none" stroke="#373737" stroke-linecap="round" stroke-width="3"></line>
                        </g>
                    </svg>
                </button>
                <div>
                    <svg id="Iconly_Light_Home" data-name="Iconly/Light/Home" xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <g id="Home" transform="translate(2.5 2)">
                            <path id="Home-2" data-name="Home"
                                  d="M6.657,18.771V15.7a1.426,1.426,0,0,1,1.424-1.419h2.886A1.426,1.426,0,0,1,12.4,15.7h0v3.076A1.225,1.225,0,0,0,13.6,20h1.924A3.456,3.456,0,0,0,19,16.562h0V7.838a2.439,2.439,0,0,0-.962-1.9L11.458.685a3.18,3.18,0,0,0-3.944,0L.962,5.943A2.42,2.42,0,0,0,0,7.847v8.714A3.456,3.456,0,0,0,3.473,20H5.4a1.235,1.235,0,0,0,1.241-1.229h0"
                                  fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="10" stroke-width="1.5"/>
                        </g>
                    </svg>
                    <a href="#">
                        صفحه اصلی
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.895 13.76">
                        <g id="Iconly_Light_Arrow_-_Left_Circle" data-name="Iconly/Light/Arrow - Left Circle"
                           transform="translate(1 1.409)">
                            <g id="Arrow_-_Left_Circle" data-name="Arrow - Left Circle"
                               transform="translate(6.486 0) rotate(90)">
                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0,5.471,6.486,10.942,0" fill="none"
                                      stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2"/>
                            </g>
                        </g>
                    </svg>
                    <a href="#">
                        پنل کاربری
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.895 13.76">
                        <g id="Iconly_Light_Arrow_-_Left_Circle" data-name="Iconly/Light/Arrow - Left Circle"
                           transform="translate(1 1.409)">
                            <g id="Arrow_-_Left_Circle" data-name="Arrow - Left Circle"
                               transform="translate(6.486 0) rotate(90)">
                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0,5.471,6.486,10.942,0" fill="none"
                                      stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2"/>
                            </g>
                        </g>
                    </svg>
                    <a href="#">
                        ویرایش حساب کاربری
                    </a>
                </div>
            </header>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="pishkhan" role="tabpanel" aria-labelledby="nav-pishkhan">
                    <div class="bg-box">
                        <div class="calender-user ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30">
                                <g id="Iconly_Bold_Info_Circle" data-name="Iconly/Bold/Info Circle"
                                   transform="translate(-3 -2.999)">
                                    <g id="Info_Circle" data-name="Info Circle" transform="translate(3 2.999)">
                                        <path id="Info_Circle-2" data-name="Info Circle"
                                              d="M15,30a14.994,14.994,0,1,1,10.611-4.394A15.017,15.017,0,0,1,15,30Zm0-10.6a1.306,1.306,0,0,0-1.305,1.3A1.313,1.313,0,1,0,15,19.4Zm0-11.4a1.338,1.338,0,0,0-1.32,1.32v6.63a1.313,1.313,0,0,0,2.626,0V9.315A1.314,1.314,0,0,0,15,7.995Z"
                                              fill="#00b448"/>
                                    </g>
                                </g>
                            </svg>

                            تاریخ عضویت : {{$user->user_registered}}
                        </div>
                        <div class="topic-top topic-top-panel">
                            <h4>
                                ویرایش حساب کاربری
                            </h4>
                        </div>
                        <form action="{{route("user.update_user_infos")}}" method="post">
                            @csrf
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input">
                                    <label for="">نام</label>
                                    <input type="text"  name="firstName"  value="{{$user->firstName}}">
                                </div>
                                <div class="form-gr-input">
                                    <label for=""> نام خانوادگی</label>
                                    <input type="text" name="lastName"  value="{{$user->lastName}}" >
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">شماره موبایل</label>
                                    <input type="number"  name="user_login"  value="{{$user->user_login}}">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">ایمیل</label>
                                    <input type="email" name="user_email"   value="{{$user->user_email}}">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">نام نمایشی</label>
                                    <input type="text"  name="display_name"  value="{{$user->display_name}}">
                                    <p>
                                        اسم شما به این صورت در حساب کاربری و نظرات دیده خواهد شد
                                    </p>
                                </div>
                                <div class="form-gr-submit">

                                    <button type="submit">
                                        ذخیره تغییرات
                                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                             viewBox="0 0 24.119 14.524">
                            <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                               transform="translate(-3.375 -5.012)">
                              <g id="Arrow_-_Left" data-name="Arrow - Left" transform="translate(20 5.5) rotate(90)">
                                <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                      transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.75"></path>
                                <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                      transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.75"></path>
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
                <div class="tab-pane fade " id="address" role="tabpanel" aria-labelledby="nav-ddress">
                    <div class="d-flex justify-content-between flex-wrap w-100">
                        <div class="bg-box w-new mt-3">
                            <div class="topic-top topic-top-panel">
                                <h4>
                                    پیگیری سفارشات
                                </h4>
                            </div>
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input form-gr-textarea ">
                                    <span class="font-df">نرگس عامری</span>
                                    <span class="font-df">                                    استان خوزستان ، اندیمشک ، اهواز، زیتون کارمندی، خیابان کمیل بین زیبا و زهره
                                  </span>
                                    <span class="font-df">
                                    کد پستی: 6473161154
                                   </span>
                                </div>

                            </div>
                        </div>
                        <div class="bg-box w-new mt-3">
                            <div class="topic-top topic-top-panel">
                                <h4>
                                    پیگیری سفارشات
                                </h4>
                            </div>
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input form-gr-textarea ">
                                    <span class="font-df">نرگس عامری</span>
                                    <span class="font-df">                                    استان خوزستان ، اندیمشک ، اهواز، زیتون کارمندی، خیابان کمیل بین زیبا و زهره
                                  </span>
                                    <span class="font-df">
                                    کد پستی: 6473161154
                                   </span>
                                </div>

                            </div>
                        </div>
                        <div class="bg-box w-new mt-3">
                            <div class="topic-top topic-top-panel">
                                <h4>
                                    پیگیری سفارشات
                                </h4>
                            </div>
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input form-gr-textarea ">
                                    <span class="font-df">نرگس عامری</span>
                                    <span class="font-df">                                    استان خوزستان ، اندیمشک ، اهواز، زیتون کارمندی، خیابان کمیل بین زیبا و زهره
                                  </span>
                                    <span class="font-df">
                                    کد پستی: 6473161154
                                   </span>
                                </div>

                            </div>
                        </div>
                        <div class="w-100 my-4 " id="nav-tab" role="tablist">
                            <button type="button" class="button-purple d-block left-m nav-link"
                                    id="nav-address-form-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#address-form"
                                    role="tab"
                                    aria-controls="nav-address-form"
                                    aria-selected="false">
                                افزودن ادرس
                                <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                               viewBox="0 0 24.119 14.524">
                            <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                               transform="translate(-3.375 -5.012)">
                              <g id="Arrow_-_Left" data-name="Arrow - Left" transform="translate(20 5.5) rotate(90)">
                                <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                      transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.75"></path>
                                <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                      transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.75"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="address-form" role="tabpanel" aria-labelledby="nav-address-form">
                    <div class="bg-box">
                        <div class="topic-top topic-top-panel">
                            <h4>
                                افزودن آدرس صورتحساب
                            </h4>
                        </div>
                        <form action="">
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input">
                                    <label for="">نام</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input">
                                    <label for=""> نام خانوادگی</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">شماره موبایل</label>
                                    <input type="number">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">شماره تلن ثابت</label>
                                    <input type="number">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">کدپستی</label>
                                    <input type="number">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">ایمیل</label>
                                    <input type="email">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">نام شرکت</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">کشور یا منطقه</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">استان</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">شهر</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">خیابان</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-input ">
                                    <label for="">پلاک یا واحد</label>
                                    <input type="text">
                                </div>
                                <div class="form-gr-submit">

                                    <button type="submit">
                                        ثبت
                                        <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                            viewBox="0 0 24.119 14.524">
                                           <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                              transform="translate(-3.375 -5.012)">
                                               <g id="Arrow_-_Left" data-name="Arrow - Left"
                                                  transform="translate(20 5.5) rotate(90)">
                                               <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                     transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10" stroke-width="1.75"></path>
                                               <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                     transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-miterlimit="10" stroke-width="1.75"></path>
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
                <div class="tab-pane fade " id="Trackorders" role="tabpanel" aria-labelledby="nav-Trackorders">
                    <div class="bg-box w-new">
                        <div class="topic-top topic-top-panel">
                            <h4>
                                پیگیری سفارشات
                            </h4>
                        </div>
                        <form action="">
                            <div class="form-gr form-gr-panel">
                                <div class="form-gr-input form-gr-textarea ">
                                    <label for="">شناسه پیگیری سفارش خود را وارد کنید</label>
                                    <input type="text" placeholder="1 5 4 8 7 5 30 1 6 5 2 8 0 9 0 5 9 4 5 8  ">
                                </div>
                                <div class="form-gr-submit">

                                    <button type="submit">
                                        برسی وضعیت
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                             viewBox="0 0 24.119 14.524">
                                            <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                               transform="translate(-3.375 -5.012)">
                                                <g id="Arrow_-_Left" data-name="Arrow - Left"
                                                   transform="translate(20 5.5) rotate(90)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                      transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.75"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                      transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.75"></path>
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
                <div class="tab-pane fade" id="bookmarrk" role="tabpanel" aria-labelledby="nav-bookmarrk">
                    <div class="container-fluid">
                        <div class="row col-cheng">
                            @foreach(
    App\Models\article::where("marks","LIKE","%\"".\Illuminate\Support\Facades\Auth::user()->ID."\"%")->get()->reverse()->take(20) as $article)
                                <div class="col col-sm-6 col-md-4 col-lg-3 mt-4">
                                    <div class="cart-boxLerning">
                                        <div class="cart-boxLerning-content">
                                            <a style="text-align: center" href="{{route("user.single_article",[$article->slug])}}">
                                                {{$article->title}}
                                            </a>
                                            <span>{{$article->summary}}</span>
                                            <div class="cart-boxLerning-content-info">
                                                <img src="{{asset("userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png")}}"
                                                     alt="">
                                                <span>
                                    <dd>{{getProperty(App\Models\adminUser::where("id",$article->author_id)->first(),"display_name")}}</dd>
                                    <dd>{{$article->date}}</dd>
                                </span>
                                                <a href="{{route("user.single_article",[$article->slug])}}"><img
                                                        src="{{asset("userAssets/image/img/Group-6424.svg")}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
{{--                            <div class="col my-5">--}}
{{--                                <div class="pagination-SixSide">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.506 30.903">--}}
{{--                                                    <path id="Stroke_3" data-name="Stroke 3"--}}
{{--                                                          d="M0,0,12.623,12.678,25.246,0"--}}
{{--                                                          transform="translate(14.678 2.828) rotate(90)" fill="none"--}}
{{--                                                          stroke="" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                          stroke-miterlimit="10" stroke-width="4"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a></li>--}}
{{--                                        <li><a href="#">1</a></li>--}}
{{--                                        <li><a href="#">2</a></li>--}}
{{--                                        <li><a href="#">...</a></li>--}}
{{--                                        <li><a href="#">5</a></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.506 30.903">--}}
{{--                                                    <path id="Stroke_3" data-name="Stroke 3"--}}
{{--                                                          d="M0,0,12.623,12.678,25.246,0"--}}
{{--                                                          transform="translate(14.678 2.828) rotate(90)" fill="none"--}}
{{--                                                          stroke="" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                          stroke-miterlimit="10" stroke-width="4"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="orderslist" role="tabpanel" aria-labelledby="nav-orderslist">
                    <div class="bg-box">
                        <div class="sroll">
                            <div class="table-custom">
                                <div class="table-custom-header table-custom-header-five">
                                    <ul>
                                        <li>
                                            سفارش
                                        </li>
                                        <li>
                                            تاریخ
                                        </li>
                                        <li>
                                            وضعیت
                                        </li>
                                        <li>
                                            مجموع
                                        </li>
                                        <li>
                                            عملیات
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-custom-body ">
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row  table-custom-body-row-five">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li>
                                                تکمیل شده
                                            </li>
                                            <li>
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                <button type="button" class="button-purple p-tablebutton">
                                                    نمایش
                                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                           viewBox="0 0 24.119 14.524">
                                        <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                           transform="translate(-3.375 -5.012)">
                                          <g id="Arrow_-_Left" data-name="Arrow - Left"
                                             transform="translate(20 5.5) rotate(90)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                                  transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                                  transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.75"></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="massage" role="tabpanel" aria-labelledby="nav-massage">
                    <div class="bg-box">
                        <div class="sroll">
                            <div class="table-custom">
                                <div class="table-custom-header  table-custom-header-fore">
                                    <ul>
                                        <li>
                                            اصلاعیه
                                        </li>
                                        <li>
                                            تاریخ
                                        </li>
                                        <li>
                                            وضعیت
                                        </li>
                                        <li>
                                            پیام
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-custom-body ">
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                تخفیف ویژه
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                درجریان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ا
                                                ز صنعت چاپ
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="wallets" role="tabpanel" aria-labelledby="nav-wallets">
                    <div class="wallet">
                        <div class="wallet-right">
                            <p>موجودی کیف پول</p>
                            <span>0</span>
                            <div class="wallet-right-filter">
                                <div>
                                    <label for="se">جستجو بر اساس</label>
                                    <select name="" id="se">
                                        <option>yy/mm/dd</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="sel">جستجو بر اساس</label>
                                    <select name="" id="sel">
                                        <option>10</option>
                                    </select>
                                    <label for="sel">مورد</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="button-purple">
                                افزایش موجودی کیف پول
                                <span>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524" viewBox="0 0 24.119 14.524">
                   <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                      transform="translate(-3.375 -5.012)">
                     <g id="Arrow_-_Left" data-name="Arrow - Left" transform="translate(20 5.5) rotate(90)">
                       <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0" transform="translate(6.274 -6.619)"
                             fill="none" stroke="#a855f1" stroke-linecap="round" stroke-linejoin="round"
                             stroke-miterlimit="10" stroke-width="1.75"></path>
                       <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                             transform="translate(0.75 9.7)" fill="none" stroke="#a855f1" stroke-linecap="round"
                             stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.75"></path>
                     </g>
                   </g>
                 </svg>
               </span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-box">
                        <div class="sroll">
                            <div class="table-custom">
                                <div class="table-custom-header  table-custom-header-fivee">
                                    <ul>
                                        <li>
                                            شناسه
                                        </li>
                                        <li>
                                            تاریخ
                                        </li>
                                        <li>
                                            کسر مبلغ
                                        </li>
                                        <li>
                                            افزایش مبلغ
                                        </li>
                                        <li>
                                            جزئیات
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-custom-body ">
                                    <div class="table-custom-body-row table-custom-body-row-fivee">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fivee">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fivee">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگ
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body-row table-custom-body-row-fivee">
                                        <ul>
                                            <li>
                                                #626266
                                            </li>
                                            <li>
                                                1400/08/02
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li class="table-custom-body-row-bold">
                                                ۵۶،۰۰۰ تومان
                                            </li>
                                            <li>
                                                لورم ایپسوم متن ساختگی با تولید سادگ
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="pagination-SixSide  pagination-SixSide-panel ">
                                    <ul class="justify-content-end">
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.506 30.903">
                                                    <path id="Stroke_3" data-name="Stroke 3"
                                                          d="M0,0,12.623,12.678,25.246,0"
                                                          transform="translate(14.678 2.828) rotate(90)" fill="none"
                                                          stroke="" stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="4"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.506 30.903">
                                                    <path id="Stroke_3" data-name="Stroke 3"
                                                          d="M0,0,12.623,12.678,25.246,0"
                                                          transform="translate(14.678 2.828) rotate(90)" fill="none"
                                                          stroke="" stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="4"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="score" role="tabpanel" aria-labelledby="nav-score">
                    <div class="bg-box">
                        <div class="calender-user ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30">
                                <g id="Iconly_Bold_Info_Circle" data-name="Iconly/Bold/Info Circle"
                                   transform="translate(-3 -2.999)">
                                    <g id="Info_Circle" data-name="Info Circle" transform="translate(3 2.999)">
                                        <path id="Info_Circle-2" data-name="Info Circle"
                                              d="M15,30a14.994,14.994,0,1,1,10.611-4.394A15.017,15.017,0,0,1,15,30Zm0-10.6a1.306,1.306,0,0,0-1.305,1.3A1.313,1.313,0,1,0,15,19.4Zm0-11.4a1.338,1.338,0,0,0-1.32,1.32v6.63a1.313,1.313,0,0,0,2.626,0V9.315A1.314,1.314,0,0,0,15,7.995Z"
                                              fill="#00b448"></path>
                                    </g>
                                </g>
                            </svg>
                            امتیاز شما = {{\Illuminate\Support\Facades\Auth::user()->basic_point}}
                        </div>
                        <div class="sroll">
                            <div class="table-custom">
                                <div class="table-custom-header  table-custom-header-fore">
                                    <ul>
                                        <li>
                                            امتیاز
                                        </li>
                                        <li>
                                            تاریخ
                                        </li>
                                        <li>
                                            وضعیت
                                        </li>
                                        <li>
                                            جزئیات
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-custom-body ">
                                    @foreach(\App\Models\user_point_history::where("user_id",\Illuminate\Support\Facades\Auth::user()->ID)->get()->reverse() as $user_point_history)
                                    <div class="table-custom-body-row table-custom-body-row-fore">
                                        <ul>
                                            <li>
                                                امتیاز {{$user_point_history->point_amount}}
                                            </li>
                                            <li>
                                                {{$user_point_history->date}}
                                            </li>
                                            <li class="table-custom-body-row-green">
                                                تکمیل شده
                                            </li>
                                            <li>
                                                {{$user_point_history->purpose}}
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="nav-">
                    <div class="bg-box">
                        <div class="sroll">
                            <div class="table-custom">
                                <div class="table-custom-header  table-custom-header-foree">
                                    <ul>
                                        <li>
                                            دیدگاه
                                        </li>
                                        <li>
                                            تاریخ
                                        </li>
                                        <li>
                                            پیام
                                        </li>
                                        <li>
                                            علمیات
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-custom-body ">
                                    @foreach(\App\Models\comment::where("user_id",\Illuminate\Support\Facades\Auth::user()->ID)->where("status","active")->get()->reverse() as $comment )
                                    <div class="table-custom-body-row table-custom-body-row-foree table-custom-body-row-foree-comment">
                                        <ul>
                                            <li>
                                                {{getProperty(\App\Models\article::where("id", $comment->post_id)->first(),"title")}}
                                            </li>
                                            <li>
                                                {{$comment->date}}
                                            </li>

                                            <li>
                                                {{$comment->content}}
                                            </li>
                                            <li>
                                                <a href="{{route("user.panel_comment_delete",["id"=>$comment->id])}}">
                                                    <button >
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.242 34.242">
                                                            <g id="close" transform="translate(-7982.379 23038.621)">
                                                                <line id="Line_112" data-name="Line 112" x2="30" y2="30"
                                                                      transform="translate(7984.5 -23036.5)" fill="none"
                                                                      stroke="" stroke-linecap="round"
                                                                      stroke-width="3"></line>
                                                                <line id="Line_113" data-name="Line 113" x1="30" y2="30"
                                                                      transform="translate(7984.5 -23036.5)" fill="none"
                                                                      stroke="" stroke-linecap="round"
                                                                      stroke-width="3"></line>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('userAssets/plagin/bootstrap/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('userAssets/js/script.js')}}"></script>

<script>
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
</body>
</html>
