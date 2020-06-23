<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- เรียกใช้ Theme -->
        <title>LEVEL Up &mdash; Website by Multi innovation Engineering</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/level-up.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/level-up2.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('dist/css/dropzone/dropzone.css') }}">
        <style>
            @font-face {
            font-family:myfont;
            src: url('home/font/dbheaventmedv3.2-webfont.woff2') format('woff2'),
                    url('home/font/dbheaventmedv3.2-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            }
            div
            {font-family:myfont;}
        </style>
        
        @yield('head')
    <!-- เรียกใช้ Theme -->
        
    </head>
    
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <!-- เมนูบาร์ -->
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
                                                <a class="nav-link" href="{{ route('login-levelUp') }}">{{ __('เข้าสู่ระบบ') }}</a>
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

        <script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('dist/js/popper.min.js') }}"></script>
        <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('dist/js/aos.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/js/main.js') }}"></script>
        <script type="javascript" src="js/bootstrap-datetimepicker.min.js"></script>
        <script type="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('dist/css/dropzone/dropzone.js') }}"></script>
        
        @yield('script')

    </body>
</html>