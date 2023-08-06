<!DOCTYPE html>
<html dir="rtl">

@include('user.layout.header')

<body id="body">

    <div id="menu-mobile-background"></div>
    <!-- header -->
    <header>
        <div class="container-fluid top-header-row-fluid">
            <div class="container top-header-row-con" id="top-header-row-con">

                <div class="row top-header-row" id="top-header-row">
                    <div class="site-logo1">
                        <img src="" alt="">
                    </div>
                    <div class=" site-logo2">
                        <img src="/img/site-logo1.svg" alt="">
                    </div>
                    <form class="site-profile" action="{{route("user.search_product")}}" method="GET">
                        <div><a href="#"><img src="/img/user.svg"></a></div>
                        <div class="site-profile-search">
                            <a href="#"><img src="/img/search.svg"></a>
                            <div id="site-profile-search">
                                <input id="site-profile-search-input" type="text" name="search" placeholder="جستجو...">
                                <img src="/img/cancel.svg" onclick="clearSearch_box()">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="top-main-nav-row-fluid">
            <div class="container top-main-nav-row-con">
                <div class="row top-main-nav-row" id="top-main-nav-row">
                    <div class="menu" id="menu-button"><img src="/img/menu.png" alt=""></div>
                    <div class="mini-cisco"><img src="/img/site-logo1.svg" alt=""></div>
                    <ul>
                        <li><a href="#">صفحه اصلی</a>
                        </li>
                        <li><a href="#">محصولات</a>
                        </li>
                        <li><a href="#">پشتیبانی</a>
                        </li>
                        <li><a href="#">درباره ما</a>
                        </li>
                    </ul>
                    <div class="dark-mood-button" id="dark-mood-button">
                        <div class="button" id="dark-mood-button-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="menu-mobile-nav" id="menu-mobile-nav">
            <div class="menu-mobile-search">
                <form action="">
                    <input type="text" placeholder="جستجو...">
                    <a href="#"><img src="/img/search.svg"></a>
                </form>
                <div class="menu-mobile-profile">
                    <a href="#"><span>پروفایل</span><img src="/img/user.svg">
                    </a>
                </div>
            </div>
            <div class="main-menu-mobile-nav">
                <ul>
                    <li><a href="#">صفحه اصلی</a>
                    </li>
                    <li><a href="#">محصولات</a>
                    </li>
                    <li><a href="#">پشتیبانی</a>
                    </li>
                    <li><a href="#">درباره ما</a>

                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--end of header -->



     @yield("main_content")

     @include('user.layout.footer')


</body>

</html>
