<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- เรียกใช้ Theme -->
        <title>LEVEL Up &mdash; Website by Multi innovation Engineering</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" >
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
        <link rel="stylesheet" href="{{ asset('dist/css/level_up.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <!-- เรียกใช้ Theme -->

    </head>
    
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <!-- เมนูบาร์ -->
        <div id="profile" class="site-wrap navbarcolor">
            <div class="site-mobile-menu site-navbar-target ">
                <div class="site-mobile-menu-header ">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0 site-logo"><a href="{{ url('/') }}" class="mb-0">LEVEL Up</a></h1>
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
                                    <li class="has-children">
                                        <a href="#about-section" class="nav-link">ยินดีต้อนรับคุณ</a>
                                        <ul class="dropdown">
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif

                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
                    </div>
                </div>
            </header>
        <!-- เมนูบาร์ -->

            <div class="container-fluid">
                <div class="row mt-4 mb-5"></div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card">

                                <!-- รูป profile -->
                                <div class="row mt-3">
                                    <div class="col" align="center">
                                        <img class="img-1" src="/img/pic3.jpg"/>
                                    </div>
                                </div>

                                <!-- ชื่อ-นามสกุล -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="font-1">
                                            <b>Waraphorn Srijiw</b>
                                        </div>
                                    </div>
                                </div>

                                <!-- Coin -->
                                <div class="row mr-0 ml-0 mt-3">
                                    <div class="col">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-coin" align="left">
                                                    <i class="material-icons">copyright</i>
                                                </div>
                                                <div class="col" align="right">
                                                    <a>150</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- inbox -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-inbox" align="left">
                                                    <i class="material-icons">all_inbox</i>
                                                </div>

                                                <div class="col" align="right">
                                                        <a>59</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- history -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-history" align="left">
                                                    <i class="material-icons">history</i>
                                                </div>

                                                <div class="col" align="right">
                                                        <a>จำนวนวันที่เป็นสมาชิก</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- ข้อมูลส่วนตัว -->
                                        <div class="row mt-4 mb-3">
                                            <div class="col">
                                                <div class="font-1">
                                                    <b>ข้อมูลส่วนตัว</b>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- เลขบัตรประชาชน -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">recent_actors</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>1234567890000</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- เบอร์โทร-->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">local_phone</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>0823552062</a>
                                                </div>
                                            </div>
                                        </li>  

                                        <!-- อีเมล-->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">mail_outline</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <font size ="2"><a>waraphorn.s@maltiino.com</a></font>
                                                </div>
                                            </div>
                                        </li>
                                            
                                        <!-- password-->
                                        <li class="list-group-item mb-3">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">lock_open</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>Change Password</a>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>                  
                            </div>    
                        </div>  
                        <div class="col">
                            @yield('section')
                        <div>
                    </div>
                </div>
            </div>

            @yield('section2')

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
        
        @yield('script')

    </body>
</html>