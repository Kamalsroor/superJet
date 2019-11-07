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
            <header>
                <div class="bg-transparent header-01">
                    <div class="header-topbar">
                        <div class="container">
                            <ul class="topbar-left list-unstyled list-inline pull-left">
                                <li>
                                <a href="#" class="language dropdown-text">
                                        <span>@if(app()->getLocale() == 'ar')Arbic @else English @endif</span>
                                        <i class="topbar-icon icons-dropdown fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-topbar list-unstyled hide">
                                        @if(app()->getLocale() == 'ar')
                                            <li>
                                                <a href="{{ route('lang','en')}}" class="link">English</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('lang','ar')}}" class="link">Arbic</a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                </li>
                            </ul>
                            <ul class="topbar-right pull-right list-unstyled list-inline login-widget">
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}" class="item">login</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="item">register</a>
                                    </li>
                                    @endif
                                @else
                                    <li>
                                        <a class="item">
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    <div class="header-main">
                        <div class="container">
                            <div class="header-main-wrapper">
                                <div class="hamburger-menu">
                                    <div class="hamburger-menu-wrapper">
                                        <div class="icons"></div>
                                    </div>
                                </div>
                                <div class="navbar-header">
                                    <div class="logo">
                                        <a href="#" class="header-logo">
                                            <img src="{{ asset('assets/images/logo/logo-white-color-1.png') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <nav class="navigation">
                                    <ul class="nav-links nav navbar-nav">
                                        <li class="dropdown {{active_link('/' , false)}}">
                                            <a href="{{route('home')}}" class="main-menu">
                                                <span class="text">Home</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="main-menu">
                                                <span class="text">SuperJet</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-1">
                                                <li>
                                                    <a href="tour-result.html" class="link-page">tour result</a>
                                                </li>
                                                <li>
                                                    <a href="tour-view.html" class="link-page">tour view</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="main-menu">
                                                <span class="text">Servies</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="main-menu">
                                                <span class="text">Lines</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="main-menu">
                                                <span class="text">Book</span>
                                            </a>
                                        </li>
                                        <li class="{{active_link('job')}}">
                                            <a href="{{route('job')}}" class="main-menu">
                                                <span class="text">Jobs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="main-menu">
                                                <span class="text">Complaints and suggestions</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="main-menu">
                                                <span class="text">contact us</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-1">
                                                <li>
                                                    <a href="tour-result.html" class="link-page">tour result</a>
                                                </li>
                                                <li>
                                                    <a href="tour-view.html" class="link-page">tour view</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="nav-search hide">
                                        <form>
                                            <input type="text" placeholder="Search" class="searchbox" />
                                            <button type="submit" class="searchbutton fa fa-search"></button>
                                        </form>
                                    </div>
                                </nav>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

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
            <!-- FOOTER-->
            <footer>
                <div class="footer-main padding-top padding-bottom">
                    <div class="container">
                        <div class="footer-main-wrapper">
                            <a href="index-2.html" class="logo-footer">
                                <img src="assets/images/logo/logo-white-color-1.png" alt="" class="img-responsive" />
                            </a>
                         
                        </div>
                    </div>
                </div>
                <div class="hyperlink">
                    <div class="container">
                        <div class="social-footer">
                            <ul class="list-inline list-unstyled">
                                <li>
                                    <a href="#" class="link facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link pinterest">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link google">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="name-company">&copy; Designed by volcano.</div>
                    </div>
                </div>
            </footer>
        </div>
</div>

@include ('Frontend.layouts.footer')
