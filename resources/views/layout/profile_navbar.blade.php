<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
        <link rel="stylesheet" href="{{ asset('home/font/font.css') }}">
        <link rel="stylesheet" href="{{ asset('icon/font_lvp.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-select/dist/css/bootstrap-select.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-select/dist/css/bootstrap-select.min.css') }}">
        
        <style>
            @font-face {
            font-family:myfont;
            src: url('home/font/dbheaventmedv3.2-webfont.woff2') format('woff2'),
                    url('home/font/dbheaventmedv3.2-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            }
            @font-face {
            font-family:myfont1;
            src: url('home/font/dbheaventliv3.2-webfont.woff2') format('woff2'),
                    url('home/font/dbheaventliv3.2-webfont.woff2') format('woff');
            font-weight: normal;
            font-style: normal;
            }
            html,body {
                font-size: XXpx;
            }
        </style>
    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="app" class="site-wrap active">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar2 py-3  site-navbar-target" role="banner">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <h1 class="site-logo"><a href="{{ url('/') }}" class="mb-0"><img class="img_logo mt-2" src="{{asset('home/logo/logo_lvp.svg') }}" ></a></h1>
                    </div>
                    
                    <div class="col-12 col-md-10 d-none d-xl-block font_navbar home">
                        <nav class="site-navigation position-relative" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block text-right" style="margin-top:30px;"> 
                                <li><a href="{{ url('/') }}" class="nav-link" style="font-family:myfont; padding:0px; margin-right:20px; ">หน้าแรก</a></li>
                                <li><a href="{{ url('/category' )}}" class="nav-link" style="font-family:myfont; padding:0px; margin-right:20px;">หมวดหมู่</a></li>
                                <li><a href="/follow" class="nav-link" style="font-family:myfont; padding:0px; margin-right:10px">การติดตามของฉัน</a></li>
                                <li class="inputWithIcon">
                                    <input style="font-family:myfont1;" class="search_btn" type="text" placeholder="ค้นหา" aria-label="Search">
                                    <i class="icon-search" aria-hidden="true" style="font-size:18px"></i>
                                </li>
                                @guest
                                    <img style="padding:0px 0px 0px 20px;" src="{{asset('/icon/sign_in.svg') }}"/>
                                    <label class="sign_in" style="font-family:myfont; padding: 0px 0px 0px 0px;">
                                        <a href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                                    </label>
                                    <label style="font-family:myfont;"><a class="text2">/ </a></label>

                                        @if (Route::has('register'))
                                            <label style="font-family:myfont;">
                                                <a class="sign_up mr-3" href="{{ route('register') }}">{{ __('ลงทะเบียน') }}</a>
                                            </label>
                                        @endif
                            </ul>
                                @else
                                <li class="has-children active">
                                    <a href="#about-section" class="nav-link font_name" >{{ Auth::user()->name }}.{{ Auth::user()->surname }}</a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            @if(Auth::user()->users_type == '2')
                                                <a class="nav-link font_profile" href="{{ route('devProfile') }}">{{ __('โปรไฟล์_DEV') }}</a>
                                            @elseif(Auth::user()->users_type == '3')
                                                <a class="nav-link font_profile" href="{{ route('sponProfile') }}">{{ __('โปรไฟล์_SPON') }}</a>
                                            @else
                                                <a class="nav-link font_profile" href="{{ route('homeProfile') }}">{{ __('โปรไฟล์_USER') }}</a>
                                            @endif
                                        </li>
                                        <li class="nav-item font_profile">
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
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 menu1"></span></a></div>
                </div>
            </header>        
        </div>
            @yield('content')
            
        <!-- <footer class="site-footer footer4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <img class="email_footer" src="{{asset('icon/email.svg') }}" />
                        <img class="google_footer" src="{{asset('icon/google_p.svg') }}" />
                        <img class="fb_footer" src="{{asset('icon/fb.svg') }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="contact_us">CONTACT US</div>
                                <div class="address mt-3"><a class="address2">Address:</a> 8/1 Borommaratchachonnani Road,</br>Salathammasop, Thawiwatthana,</br>Bangkok 10170</div>
                                <div class="address"><a class="address2">Phone: </a> +66 2105 8699</div>
                                <div class="address"><a class="address2">Website: </a> https://www.shopteenii.com</div>
                                <div class="address"><a class="address2">Email: </a> info@mip.co.th</div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact_us">HELP</div>
                                <div class="address mt-3">Home</div>
                                <div class="address">Categories</div>
                                <div class="address">My Follow</div>
                                <div class="address">Sign in</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </footer>
        <footer class="container-fluid mt-4 bg_footer">
            <div class="row">
                <div class="col-md-9 text-left">
                    <div class="footer3" style="padding-top:40px; color: #fff;"><script>document.write(new Date().getFullYear());</script> &copy; All Rights Reserved @ Level Up | ข้อกำหนด และเงื่อนไข | นโยบายความเป็นส่วนตัว</div>
                </div>
                <div class="col-md-3 text-center bg_footer footer3">
                    <img style="margin-right:10px;" src="{{asset('home/logo/logo_wh.svg') }}"/>
                    <img  src="{{asset('home/logo/sega.svg') }}" />
                </div>
            </div>
        </footer>   -->
    
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('dist/moment/dist/moment.js') }}"></script>
        <script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
        <script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        @yield('script')
    </body>
</html>