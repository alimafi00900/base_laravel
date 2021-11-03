
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand">داشبورد</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                @yield("nav-items")
                <li class="nav-item">
                    <a class="nav-link" href="/" target="_blank">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user" target="_blank">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contents" target="_blank">
                        <i class="fa fa-archive"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        V 1.1
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
