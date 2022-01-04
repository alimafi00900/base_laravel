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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{asset("/adminAssets/css/material-dashboard.css?v=4.1.0")}}" rel="stylesheet"/>
    <link href="{{asset("/adminAssets/css/material-dashboard-rtl.css?v=1.1")}}" rel="stylesheet"/>
    <script src="{{asset("/adminAssets/js/core/jquery.min.js")}}" type="text/javascript"></script>
    <style
    >
        
    </style>


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


    form label{
        color:black;
    }

</style>
<style>
    @import url(https://fonts.googleapis.com/icon?family=Material+Icons);
    @import url("https://fonts.googleapis.com/css?family=Raleway");


    .box {
        display: block;
        max-width: 300px;
        height: 300px;
        margin: 10px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
    }

   .image-input .upload-options {
        position: relative;
        height: 75px;
        background-color: cadetblue;
        cursor: pointer;
        overflow: hidden;
        text-align: center;
        transition: background-color ease-in-out 150ms;
    }
  .image-input  .upload-options:hover {
        background-color: #7fb1b3;
    }
  .image-input  .upload-options input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
  .image-input  .upload-options label {
        display: flex;
        align-items: center;
        width: 100%;
        height: 100%;
        font-weight: 400;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        overflow: hidden;
    }
  .image-input  .upload-options label::after {
        content: "add";
        font-family: "Material Icons";
        position: absolute;
        font-size: 2.5rem;
        color: #e6e6e6;
        top: calc(50% - 2rem);
        left: calc(50% - 1.25rem);
        z-index: 0;
    }
   .image-input .upload-options label span {
        display: inline-block;
        width: 50%;
        height: 100%;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        vertical-align: middle;
        text-align: center;
    }
   .image-input .upload-options label span:hover i.material-icons {
        color: lightgray;
    }

  .image-input  .js--image-preview {
        height: 225px;
        width: 100%;
        position: relative;
        overflow: hidden;
        background-image: url("");
        background-color: white;
        background-position: center center !important;
    background-repeat: no-repeat !important;
        background-size: cover !important;
    }
   .image-input .js--image-preview::after {
        content: "photo_size_select_actual";
        font-family: "Material Icons";
        position: relative;
        font-size: 4.5em;
        color: #e6e6e6;
        top: calc(50% - 3rem);
        left: calc(50% - 2.25rem);
        z-index: 0;
    }
  .image-input  .js--image-preview.js--no-default::after {
        display: none;
    }
   .image-input .js--image-preview:nth-child(2) {
        background-image: url("http://bastianandre.at/giphy.gif");
    }

  .image-input  i.material-icons {
        transition: color 100ms ease-in-out;
        font-size: 2.25em;
        line-height: 55px;
        color: white;
        display: block;
    }

  .image-input  .drop {
        display: block;
        position: absolute;
        background: rgba(95, 158, 160, 0.2);
        border-radius: 100%;
        transform: scale(0);
    }

   .image-input .animate {
        -webkit-animation: ripple 0.4s linear;
        animation: ripple 0.4s linear;
    }

   .image-input @-webkit-keyframes ripple {
        100% {
            opacity: 0;
            transform: scale(2.5);
        }
    }

  .image-input  @keyframes ripple {
        100% {
            opacity: 0;
            transform: scale(2.5);
        }
    }
</style>
<script>
    function float(num) {
        return parseFloat((parseFloat(num)).toFixed(2))
    }
</script>
<body class="IRANSans persianumber">
<div class="wrapper ">

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
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


    function copyLink(link,item='لینک') {
        try {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(link).select();
            document.execCommand("copy");
            $temp.remove();
            toastr.success(item+' با موفقیت کپی شد ')

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
    $(".modal [data-dismiss=\"modal\"]").click(function () {
        $(".modal").modal("hide")
    })

    $('#nav-page').scrollLeft($('#nav-page-item-active').position().left)


</script>
<script>
    function nameFilter(string) {
        strArray = string.toString().split("")
        let chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_"
        let out = ''
        for (char in strArray) {
            if (chars.search(strArray[char]) != -1 || strArray[char]==" ") {
                if(strArray[char]==" "){
                    out +="_"
                }else{
                    out += strArray[char]
                }
            }
        }
        return out
    }

    const colors = ["#0dcaf0","#198754","#0d6efd", "#935bfa"];
    $(".main-card-header").css("background",colors[Math.floor(Math.random() * colors.length)]);

</script>
<script>
    function initImageUpload(box) {
        let uploadField = box.querySelector('.image-upload');

        uploadField.addEventListener('change', getFile);

        function getFile(e){
            let file = e.currentTarget.files[0];
            checkType(file);
        }

        function previewImage(file){
            let thumb = box.querySelector('.js--image-preview'),
                reader = new FileReader();

            reader.onload = function() {
                thumb.style.backgroundImage = 'url(' + reader.result + ')';
            }
            reader.readAsDataURL(file);
            thumb.className += ' js--no-default';
        }

        function checkType(file){
            let imageType = /image.*/;
            if (!file.type.match(imageType)) {
                throw 'Datei ist kein Bild';
            } else if (!file){
                throw 'Kein Bild gewählt';
            } else {
                previewImage(file);
            }
        }

    }

    // initialize box-scope
    var boxes = document.querySelectorAll('.box');

    for (let i = 0; i < boxes.length; i++) {
        let box = boxes[i];
        initDropEffect(box);
        initImageUpload(box);
    }



    /// drop-effect
    function initDropEffect(box){
        let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

        // get clickable area for drop effect
        area = box.querySelector('.js--image-preview');
        area.addEventListener('click', fireRipple);

        function fireRipple(e){
            area = e.currentTarget
            // create drop
            if(!drop){
                drop = document.createElement('span');
                drop.className = 'drop';
                this.appendChild(drop);
            }
            // reset animate class
            drop.className = 'drop';

            // calculate dimensions of area (longest side)
            areaWidth = getComputedStyle(this, null).getPropertyValue("width");
            areaHeight = getComputedStyle(this, null).getPropertyValue("height");
            maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

            // set drop dimensions to fill area
            drop.style.width = maxDistance + 'px';
            drop.style.height = maxDistance + 'px';

            // calculate dimensions of drop
            dropWidth = getComputedStyle(this, null).getPropertyValue("width");
            dropHeight = getComputedStyle(this, null).getPropertyValue("height");

            // calculate relative coordinates of click
            // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
            x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
            y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;

            // position drop and animate
            drop.style.top = y + 'px';
            drop.style.left = x + 'px';
            drop.className += ' animate';
            e.stopPropagation();

        }
    }
</script>
@yield("js")
</body>
</html>
