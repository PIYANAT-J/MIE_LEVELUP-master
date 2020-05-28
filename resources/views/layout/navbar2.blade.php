<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="{{ asset('dist/css/level-up2.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div id="profile" class="site-wrap">
            <div class="site-mobile-menu site-navbar-target ">
                <div class="site-mobile-menu-header ">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <!--js-sticky-header site-navbar py-4 site-navbar-target" role="banner" -->
            <header class="site-navbar2 py-3 site-navbar-target" role="banner">
                <div class="container">
                    <!-- <div class="container-fluid"> -->
                <!-- align-items-center -->
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0 site-logo "><a href="{{ url('/') }}" class="mb-0">LEVEL Up</a></h1>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li><a href="{{ url('/') }}" class="nav-link">หน้าหลัก</a></li>
                                    <li><a href="#portfolio-section" class="nav-link">เกม</a></li>
                                    <li><a href="#services-section" class="nav-link">เติมเงิน</a></li>
                                    <li><a href="#testimonials-section" class="nav-link">ดาวน์โหลด</a></li>
                                    <li><a href="#blog-section" class="nav-link">ข่าว</a></li>
                                    <li><a href="#contact-section" class="nav-link">ช่วยเหลือ</a></li>
                                    <!-- Authentication Links -->
                                    @guest
                                    <li class="has-children">
                                        <a href="#about-section" class="nav-link">ยินดีต้อนรับคุณ</a>
                                        <ul class="dropdown">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                                                </li>
                                            @endif
                                        </ul>
                                    @else
                                    <li class="has-children">
                                        <a href="#about-section" class="nav-link">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</a>
                                        <ul class="dropdown">
                                            <li class="nav-item">
                                                @if(Auth::user()->users_type == '2')
                                                    <a class="nav-link" href="{{ route('devProfile') }}">{{ __('โปรไฟล์') }}</a>
                                                @elseif(Auth::user()->users_type == '3')
                                                    <a class="nav-link" href="{{ route('sponProfile') }}">{{ __('โปรไฟล์') }}</a>
                                                @else
                                                    <a class="nav-link" href="{{ route('homeProfile') }}">{{ __('โปรไฟล์') }}</a>
                                                @endif
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('ออกจากระบบ') }}
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
                    <!-- </div> -->
                    </div>
                </div>
            </header>
            <!-- เมนูบาร์ -->

            @yield('navbar')
            @yield('admin_lvp')


        </div>

</body>
</html>