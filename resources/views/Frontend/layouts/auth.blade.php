@include ('Frontend.layouts.header')
<body>
    <div class="body-wrapper">
        <!-- MENU MOBILE-->
        <div class="wrapper-mobile-nav">
            <div class="header-topbar">
                <div class="topbar-search search-mobile">
                    <form class="search-form">
                        <div class="input-icon">
                            <i class="btn-search fa fa-search"></i>
                            <input type="text" placeholder="Search here..." class="form-control" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="header-main">
                <div class="menu-mobile">
                    <ul class="nav-links nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="main-menu">
                                <span class="text">super jet</span>
                            </a>
                            <span class="icons-dropdown">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li>
                                    <a href="#" class="link-page">tour result</a>
                                </li>
                                <li>
                                    <a href="#" class="link-page">tour view</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">services</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">Lines</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">booking</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">jobs</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="main-menu">
                                <span class="text">Complaints and suggestions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="main-menu">
                                <span class="text">contact</span>
                            </a>
                            <span class="icons-dropdown">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <ul class="dropdown-menu dropdown-menu-1">
                                <li>
                                    <a href="car-rent-result.html" class="link-page">car rent result</a>
                                </li>
                                <li>
                                    <a href="cruises-result.html" class="link-page">cruises result</a>
                                </li>
                                <li>
                                    <a href="404.html" class="link-page">page 404</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline login-widget">
                        <li>
                            <a href="#" class="item">login</a>
                        </li>
                        <li>
                            <a href="#" class="item">register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- WRAPPER CONTENT-->
        <div class="wrapper-content">
            <!-- HEADER-->
      

            <!-- WRAPPER-->
            <div id="wrapper-content">
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    @yield('content')

                </div>
                <!-- BUTTON BACK TO TOP-->
                <div id="back-top">
                    <a href="#top" class="link">
                        <i class="fa fa-angle-double-up"></i>
                    </a>
                </div>
                    </div>
     
        </div>
</div>

@include ('Frontend.layouts.footer')
