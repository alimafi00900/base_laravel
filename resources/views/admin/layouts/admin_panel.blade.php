
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        پنل مدیریت
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name=theme-color content="#E00E01"/>
    <link rel="icon"
          href="">
    <style
    >
        @font-face {
            font-family: IranSans;
            src: url("{{asset("/adminAssets/fonts/ttf/IRANSansWeb.ttf")}}");
        }
        p,span,a,button,div{
            font-family: IranSans !important;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="{{asset("/adminAssets/css/material-dashboard.css?v=2.1.0")}}" rel="stylesheet"/>
    <link href="{{asset("/adminAssets/css/material-dashboard-rtl.css?v=1.1")}}" rel="stylesheet"/>
    <script src="{{asset("/adminAssets/js/core/jquery.min.js")}}" type="text/javascript"></script>

    <link rel="stylesheet" href="{{asset("/adminAssets/css/toster.css")}}"/>
    @yield("header")
</head>
<style>
    .content .card > .card-body {
        min-height: 38rem;
    }

    #nav-page {
        direction: ltr;
        display: flex;
        overflow-x: auto;
        max-width: 220px;
    }

    #nav-page::-webkit-scrollbar {
        width: 7px;
        height: 10px;
        background: #f1f1f1;
        margin-top: 3px;
        border-radius: 4px;
    }

    #nav-page::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }

    .page-item > .page-link,
    .page-item > span {
        border: 0;
        border-radius: 30px !important;
        transition: all .3s;
        padding: 0px 11px;
        color: white;
        margin: 0 3px;
        min-width: 30px;
        height: 30px;
        line-height: 30px;
        text-transform: uppercase;
        background: transparent;
        text-align: center;

    }

    .nav-page {
        direction: ltr;
        margin-top: 23px;
        display: flex;
        overflow-x: auto;
        padding: 0;
        max-width: 220px;
    }

    .nav-page::-webkit-scrollbar {
        width: 7px;
        height: 10px;
        background: #f1f1f1;
        margin-top: 3px;
        border-radius: 4px;
    }

    .nav-page .nav-link {
        border-radius: 10px;
    }

    .nav-page::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }

    .nav-link.active {
        background: #38a3ff;

        color: white;
    }

    .nav-item::marker {
        color: transparent;
    }

</style>

<style>
    .search-dropdown > ul li {
        border: 1px solid rgba(0, 0, 0, .125);
        cursor: pointer;
    }

    .search-dropdown > ul {
        /* border-radius: 0 0 15px 15px; */
        padding: 0 !important;
        max-height: 148px;
        /* position: absolute; */
        /* display: none; */
        width: 100%;
        background: white;
        z-index: 9999999;
        overflow-y: auto;

    }

    .search-dropdown {

        position: relative;
    }

</style>
<script>
    function float(num) {
        return parseFloat((parseFloat(num)).toFixed(2))
    }
</script>
<body class="IRANSans persianumber">
<div class="wrapper ">
    {{--    @if(count($errors))--}}
    {{--        <div class="container">--}}
    {{--            <div class="row d-flex justify-content-center">--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="alert alert-danger text-right IRANSans" role="alert">--}}
    {{--                        @foreach($errors->all() as $error)--}}
    {{--                            <strong>{{ $error }}</strong> - <br>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    @yield('content')
</div>
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset("/adminAssets/js/core/popper.min.js")}}" type="text/javascript"></script>
<script src="{{asset("/defaultAssets/js/persianumber.min.js")}}"></script>
<script src="{{asset("/adminAssets/js/core/bootstrap-material-design.min.js")}}" type="text/javascript"></script>
<!-- Chartist JS -->
<script src="{{asset("/adminAssets/js/plugins/chartist.min.js")}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset("/adminAssets/js/plugins/bootstrap-notify.js")}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset("/adminAssets/js/material-dashboard.min.js?v=2.1.0")}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script>
    toastr.options = {
        "positionClass": "toast-bottom-left",
    }

    function openWin(content) {
        myWindow = window.open('', '', 'width=695,height=820');
        myWindow.document.write('<div dir="rtl" class="pt-2 text-right">' + content + '</div><br>');
        myWindow.document.close(); //missing code
        myWindow.focus();
        myWindow.print();
    }

    $(document).ready(function () {

        $('.persianumber').persiaNumber();

    });
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
    $(document).ready(function () {
        setTimeout(function () {
            $('.mce-close').click();
            $('.mce-close').trigger('click');
        }, 3000)
    });
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
    $(".modal [data-dismiss=\"modal\"]").click(function () {
        $(".modal").modal("hide")
    })
    $('#nav-page').scrollLeft($('#nav-page-item-active').position().left)
</script>

@yield("js")
</body>
</html>
