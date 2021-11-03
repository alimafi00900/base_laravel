<div class="sidebar" data-color="purple" data-background-color="white" data-image="/adminassets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="/" class="simple-text logo-normal">
            <img height="40px" src="">
        </a>
        <div class="d-flex w-100 justify-content-center">
            <span>ایران نوا</span>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">


            <li class="nav-item mb-3 ">
                <a class="nav-link" href="{{route("admin.dashboard")}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>داشبورد</p>
                </a>

            </li>


            <div class="accordion" id="accordionExample">

                <div class="my-0">
                    <div id="headingOne">
                        <h2 class="mb-0" style="background-color: #e4d0e5;">
                            <button class="text-dark btn btn-link btn-block text-right d-flex justify-content-start align-items-center"
                                    type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-shopping-cart" ></i>
                                مدیریت فروشگاه
                                <i class="fas fa-caret-down"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne"
                         class="collapse show"
                         aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                            <li class="nav-item dropdown active">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                    <i class="fas fa-columns	"></i>
                                    <p class="d-flex">
                                        محتوی ستون
                                        <i class="fas fa-caret-down"></i>
                                    </p>
                                </a>
                                <ul class="dropdown-menu bg-dark pb-3">
                                    <li>
                                        <a class="text-light"
                                           href="">
                                            <i class="fas fa-chevron-circle-left"></i>
                                            <p>cxjkcxjkcx</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </div>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link " href="">
                        <i class="fa fa-users"></i>
                        <p>کاربران</p></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("admin.logout")}}"
                    >
                        <i class="fas fa-door-open"></i>
                        <p>خروج</p>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>
