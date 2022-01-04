<div class="sidebar" data-color="purple" data-background-color="white" data-image="/adminassets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="/" class="simple-text logo-normal">
            <img height="61px" src="{{asset("logo-new.png")}}">
        </a>
        <div class="d-flex w-100 justify-content-center">
{{--            <span>ایران نوا</span>--}}
        </div>
        <div class="d-flex w-100 justify-content-center">
            <span>نام کاربری: {{\Illuminate\Support\Facades\Auth::guard("admin")->user()->name}}</span>
        </div>
        <div class="d-flex w-100 justify-content-center">
            <span>ای پی:  {{\Illuminate\Support\Facades\Auth::guard("admin")->user()->last_ip}}</span>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">


            <li class="nav-item mb-3 {{activePage("admin.dashboard")}}">
                <a class="nav-link" href="{{route("admin.dashboard")}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>داشبورد</p>
                </a>

            </li>

            <div class="my-0 mb-3">
                <div id="headingThree">
                    <h2 class="mb-0" style="background-color: #d0d5e5;">
                        <button class="btn btn-link btn-block text-right text-dark collapsed d-flex justify-content-start align-items-center"
                                type="button" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas 	fa-store-alt"></i>
                              فروشگاه
                            <i class="fas fa-caret-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree"
                     class="collapse  {{activePage(["admin.productCategories","admin.products","admin.orders","admin.branches"],"show")}}"
                     aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <li class=" nav-item dropdown  {{activePage(["admin.productCategories","admin.products","admin.branches"],"active")}}">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fas fa-boxes"></i>
                                <p class="d-flex" style="font-size: 13px">
                                    مدیریت محصولات <i class="ml-2 fas fa-caret-down"></i>
                                </p>
                            </a>
                            <ul class="dropdown-menu bg-dark pb-3">
                                <li>
                                    <a class="text-light" href="{{route("admin.branches")}}">
                                        <i class="fas fa-code-branch"></i>
                                        <p>شاخه ها</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-light" href="{{route("admin.productCategories")}}">
                                        <i class="fas fa-sitemap"></i>
                                        <p>دسته بندی ها</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-light" href="{{route("admin.products")}}">
                                        <i class="fas fa-shopping-bag"></i>
                                        <p>محصولات</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{activePage(["admin.orders"],"active")}}">
                            <a class="nav-link" href="{{route("admin.orders")}}">
                                <i class="fas fa-clipboard-list"></i>
                                <p class="d-flex" style="font-size: 13px">سفارشات</p>
                            </a>
                        </li>
                    </div>
                </div>
            </div>





            <div class="my-0 mb-3">
                <div id="headingThree">
                    <h2 class="mb-0" style="background-color: #d0d5e5;">
                        <button class="btn btn-link btn-block text-right text-dark collapsed d-flex justify-content-start align-items-center"
                                type="button" data-toggle="collapse" data-target="#collapseSecThree"
                                aria-expanded="false" aria-controls="collapseSecThree">
                            <i class="fas fa-pen-square"></i>
                            مدیریت محتوا
                            <i class="fas fa-caret-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseSecThree"
                     class="collapse  {{activePage(["admin.articles","admin.notices","admin.most_asked_questions","admin.points"],"show")}}"
                     aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <li class=" nav-item dropdown  {{activePage(["admin.articles","admin.notices","admin.most_asked_questions","admin.points"],"active")}}">

                        <li class="nav-item {{activePage("admin.points")}}">
                            <a class="nav-link " href="{{route("admin.points")}}">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p>امتیاز ها</p>
                            </a>
                        </li>
                        <li class="nav-item {{activePage("admin.articles")}}">
                            <a class="nav-link " href="{{route("admin.articles")}}">
                                <i class="fas fa-newspaper"></i>
                                <p>مقالات</p>
                            </a>
                        </li>

                        <li class="nav-item">
{{--                            {{activePage("admin.articles")}}--}}
                            <a class="nav-link " href="{{route("admin.comments")}}">
                                <i class="fa fa-comments"></i>
                                <p>کامنت ها</p>
                            </a>
                        </li>

                        <li class="nav-item {{activePage("admin.notices")}}">
                            <a class="nav-link " href="{{route("admin.notices")}}">
                                <i class="fa fa-exclamation"></i>
                                <p>اطلاعیه ها</p>
                            </a>
                        </li>

                        <li class="nav-item {{activePage("admin.most_asked_questions")}}">
                            <a class="nav-link " href="{{route("admin.most_asked_questions")}}">
                                <i class="fa fa-question-circle"></i>
                                <p>سوالات متداول</p>
                            </a>
                        </li>

                    </div>
                </div>
            </div>




            <div class="accordion" id="accordionExample">


                <li class="nav-item {{activePage("admin.users")}}">
                    <a class="nav-link " href="{{route("admin.users")}}">
                        <i class="fa fa-user-friends"></i>
                        <p>کاربران</p>
                    </a>
                </li>

                <li class="nav-item {{activePage("admin.admin_users")}}">
                    <a class="nav-link " href="{{route("admin.admin_users")}}">
                        <i class="fa fa-user-shield"></i>
                        <p>مدیریت ادمین ها</p>
                    </a>
                </li>

                <li class="nav-item {{activePage("admin.media")}}">
                    <a class="nav-link " href="{{route("admin.media")}}">
                        <i class="fa fa-images"></i>
                        <p>مدیریت فایل ها</p>
                    </a>
                </li>

                <li class="nav-item {{activePage("admin.menuManagement")}}">
                    <a class="nav-link" href="{{route("admin.menuManagement")}}">
                        <i class="fa fa-ellipsis-h"></i>
                        <p>مدیریت منو</p>
                    </a>
                </li>
                <li class="nav-item {{activePage("admin.generalInfo_edit")}}">
                    <a class="nav-link" href="{{route("admin.generalInfo_edit")}}">
                        <i class="fa fa-cog"></i>
                        <p>تنظیمات عمومی</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("admin.logout")}}"
                    >
                        <i class="fas fa-door-open" ></i>
                        <p>خروج</p>
                    </a>
                </li>

            </div>

        </ul>
    </div>
</div>
