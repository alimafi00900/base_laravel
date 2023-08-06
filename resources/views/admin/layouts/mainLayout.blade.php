<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP_NAME_FA') }} @yield('main_title')</title>
    <link rel="stylesheet" href="/adminAssets/vendor/toastr/css/toastr.min.css?v=43221">
    <link href="/adminAssets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminAssets/css/all.min.css?v=233223" />
    <link rel="stylesheet" href="/adminAssets/vendor/fontawesome/css/regular.min.css?v=233223">
    <link rel="stylesheet" href="/adminAssets/css/main/app.css?v=8438483">
    <link rel="stylesheet" href="/adminAssets/css/main/app-rtl.css?v=233223">
    <link rel="stylesheet" href="/adminAssets/css/main/app-dark.css?v=87347834">
    <link rel="icon" href="{{ asset('userAssets/img/statics/cropped-fav1-1-32x32.png') }}" sizes="32x32">
    <link rel="stylesheet" href="/adminAssets/css/shared/iconly.css?v=233223">
    <link rel="stylesheet" href="/adminAssets/css/jquery-ui.min.css" />
    {{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> --}}




    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>


    <link rel="stylesheet" href="{{ asset('adminAssets/vendor/datePicker/datepicker.css') }}">

    <!-- <link rel="stylesheet" href="/adminAssets/vendor/datePicker/datepicker.css"> -->
    <style>
        /*button, a {*/
        /*    white-space: nowrap;*/
        /*}*/

        .btn-info,
        .bg-info {
            background-color: #008da9 !important;
            border-color: #008da9 !important;

        }

        .btn-warning,
        .bg-warning {
            background-color: #c49302 !important;
            border-color: #c49302 !important;
        }

        body.theme-dark .btn,
        body.theme-dark .badge {
            color: white !important;
        }

        body.theme-dark .card {
            background-color: #2D3243 !important;
        }

        .close[data-bs-dismiss="modal"]:after {
            content: 'x';
            color: black !important;
            ;
        }

        .close[data-bs-dismiss="modal"] {
            background: white !important;
        }

        th,
        td,
        input,
        span,
        p {
            color: black !important;
        }

        .badge {
            color: white !important;
        }

        /*.btn.btn-danger, .btn.btn-info, .btn.btn-primary, .btn.btn-secondary, .btn.btn-success, .btn.btn-warning {*/
        /*    color: black !important;*/
        /*}*/
        #main-navigation-page .page-item>.page-link,
        #main-navigation-page .page-item>span {
            background-color: #6e8dff !important;
        }

        #main-navigation-page .page-item.active>.page-link,
        #main-navigation-page .page-item>span {
            background-color: #3555ca !important;
        }

        .dataTable-table> :not(caption)>*>*,
        .table> :not(caption)>*>*,
        .table> :not(caption)>*>* {
            background: unset;
        }

        .btn-primary {
            background-color: #435ebe !important;
            border-color: #435ebe !important;
            color: #fff !important;
        }

        .btn-secondary {
            background-color: #6c757d !important;
            border-color: #6c757d !important;
            color: #fff !important;
        }

        .btn-success {
            background-color: #198754 !important;
            border-color: #198754 !important;
            color: #fff !important;
        }

        .btn-info {
            background-color: #0dcaf0 !important;
            border-color: #0dcaf0 !important;
            color: #000 !important;
        }

        .btn-warning {
            background-color: #ffc107 !important;
            border-color: #ffc107 !important;
            color: #000 !important;
        }

        .btn-danger {
            background-color: #dc3545 !important;
            border-color: #dc3545;
             !important;
            color: #fff !important;
        }

        .btn-light {
            background-color: #f8f9fa !important;
            border-color: #f8f9fa !important;
            color: #000 !important;
        }

        .btn-dark {
            background-color: #212529 !important;
            border-color: #212529 !important;
            color: #fff !important;
        }

        .btn-outline-primary {
            border-color: #435ebe !important;
            color: #435ebe !important;
        }

        .btn-outline-secondary {
            border-color: #6c757d !important;
            color: #6c757d !important;
        }

        .btn {
            margin-bottom: 3px;
            margin-left: 3px;
        }

        .modal .modal-header .close {
            background: none;
            border: none;
            border-radius: 5px;
            padding: 6px 12px;
            padding-bottom: 3px;
        }

        .sidebar-wrapper .menu .sidebar-item.active>.sidebar-link span {
            color: #fff !important;
        }

        .card-header {
            background-color: unset !important;
        }

        .btn span {
            color: white !important;
        }

        .bg-dark {
            color: white !important;
        }
    </style>
    @yield('main_header')
</head>

<body class="theme-dark2323">
    <div id="app">
        <div id="sidebar" class="mainMobileMenu d-none d-xl-flex active">
            <div class="sidebar-wrapper  active">
                <div class="sidebar-header position-relative" style="">
                    <div class="d-flex justify-content-between flex-column align-items-center">
                        <div style="width: 100%;
            justify-content: center;
            display: flex;">
                            <div class=" d-flex align-items-center flex-column">
                                <div class="logo ">
                                    <img style="height: 5.2rem !important;" src="{{ asset('logo-new.png') }}">
                                </div>
                                <div class="d-flex d-none justify-content-center mt-3 title">
                                </div>
                            </div>

                        </div>
                        <div>
                            <span
                                style="font-size: 21px;">{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->name }}</span>
                        </div>
                        <div class="sidebar-toggler  x" id="closeMobileMenuBtn">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.sidebar_menu')
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3" id="openMobileMenuBtn"></i>
                </a>

                <div class="theme-toggle d-none gap-2   align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                        height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                opacity=".3"></path>
                            <g transform="translate(-210 -1)">
                                <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                <circle cx="220.5" cy="11.5" r="4"></circle>
                                <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="form-check form-switch fs-6 px-0">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                        </path>
                    </svg>
                </div>


            </header>
            <div class="page-heading">
                <h3>@yield('page_title')</h3>
            </div>
            <div class="page-content">
                @yield('main_content')
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="modal fade text-left" id="tooltip-modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel120" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title white" id="header">
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="msg"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                        <span class="d-block">متوجه شدم</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="screen-shader" style="            transition: opacity 0.1s ease 0s;             z-index: 2147483647;            margin: 0;             border-radius: 0;             padding: 0;             background: rgb(0,0,0) !important;             pointer-events: none;             position: fixed;             top: -10%;             right: -10%;             width: 120%;             height: 120%;             opacity: 0.2080;            mix-blend-mode: multiply;             display: block;        "></div> --}}
    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <script src="/adminAssets/js/jquery.min.js"></script>
    <script src="/adminAssets/js/basic.js?v=322222"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/adminAssets/vendor/toastr/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="/adminAssets/js/app.js"></script> --}}
    <script></script>
    <script src="/adminAssets/vendor/fontawesome/js/regular.min.js"></script>
    <script>
        $('.cus-tooltip-btn').click(function() {
            $("#tooltip-modal").find("#header").text($(this).attr("tip-title"))
            $("#tooltip-modal").find("#msg").text($(this).attr("tip-msg"))
            $("#tooltip-modal").modal("show")
        })
    </script>
    <script>
        toastr.options = {
            "positionClass": "toast-bottom-left",
        }
        $("#closeMobileMenuBtn").click(function() {
            $(".mainMobileMenu").addClass('d-none')
            $("body").css("overflow", "unset")
        })
        $("#openMobileMenuBtn").click(function() {
            $("body").css("overflow", "hidden")
            $(".mainMobileMenu").removeClass('d-none')
        })
        $(".sidebar-item a").click(function() {
            let item = $(this).parents('.sidebar-item').find('.submenu')
            if ($(item).hasClass('active')) {
                $(item).removeClass('active')
            } else {
                $(item).addClass('active')
            }


        })
    </script>
    <script>
        function copyLink(link, item = 'لینک') {
            try {
                var $temp = $("<input>");
                $("body").append($temp);
                console.log(link)
                $temp.val(link).select();
                document.execCommand("copy");
                $temp.remove();
                toastr.success(item + ' با موفقیت کپی شد ')
            } catch (e) {
                toastr.error('خطایی در کپی لینک رخ داده است')
            }
        }
    </script>
    <script>
        $(".multiple-select select").change(function() {
            let out = "["
            $(this).find('option').each(function() {
                out += $(this).val() + ","
            })
            out = out.slice(0, -1);
            out += "]"
            $(this).parents('.multiple-select').find('input.output').val(out)
        })
    </script>
    <script>
        @if (count($errors))
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
        @if (session()->has('msg'))
            toastr.success("{{ session()->get('msg') }}");
        @endif
        @if (session()->has('warMsg'))
            toastr.warning("{{ session()->get('warMsg') }}");
        @endif
        @if (session()->has('errMsg'))
            toastr.error("{{ session()->get('errMsg') }}");
        @endif
        @php
            session()->forget('errMsg');
        @endphp
    </script>

    @yield('main_footer')
</body>

</html>
