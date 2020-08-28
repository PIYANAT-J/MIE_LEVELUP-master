<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" type="image/png" href="{{ asset('home/logo/logo_lvp.svg') }}" />
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
        @yield('head')

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

            <header class="site-navbar2 py-2 site-navbar-target" role="banner">
                <div class="row align-items-center">
                    <div class="col-sm-2 col-md-2 col-lg-1 col-xl-1 text-right">
                        <a href="{{ url('/') }}"><img class="img_logo" src="{{asset('home/logo/logo_lvp.svg') }}" ></a>
                    </div>

                    <div class="col-lg-7 col-xl-8  d-none d-lg-block d-xl-block">
                        <nav class="site-navigation position-relative" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block" style="margin-top:30px;"> 
                                <li><a href="{{ url('/') }}" class="nav-link mr-4 my-2" style="padding:0px;margin:5px 0 5px 0"><h1 class="fontNavbar">หน้าแรก</h1></a></li>
                                <li><a href="{{ route('gameCategory') }}" class="nav-link mr-4 my-2" style="padding:0px;margin:5px 0 5px 0;"><h1 class="fontNavbar">หมวดหมู่</h1></a></li>
                                @guest
                                    <li><a href="{{ route('login-levelUp') }}" class="nav-link mr-4 my-2" style="padding:0px;margin:5px 0 5px 0;"><h1 class="fontNavbar">การติดตามของฉัน</h1></a></li>
                                @else
                                    <li><a href="{{ route('FollowMe') }}" class="nav-link mr-4 my-2" style="padding:0px;margin:5px 0 5px 0;"><h1 class="fontNavbar">การติดตามของฉัน</h1></a></li>
                                @endguest
                                <li class="inputWithIcon">
                                    <h1><input class="search_btn" type="text" placeholder="ค้นหา" aria-label="Search"></h1>
                                    <h1><i class="icon-search " aria-hidden="true"></i></h1>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-4 col-xl-3 d-none d-lg-block d-xl-block text-right home">
                        <nav class="site-navigation position-relative" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav" style="margin-top:50px;padding-left:0;">
                            @guest
                                    <img style="padding:0px 0px 0px 20px;" src="{{asset('/icon/sign_in.svg') }}"/>
                                    <label class="sign_in" style="font-family:myfont;font-size:0.7em; padding: 0px 0px 0px 0px;">
                                        <a href="{{ route('login-levelUp') }}">{{ __('เข้าสู่ระบบ') }}</a>
                                    </label>
                                    <label style="font-family:myfont;font-size:0.7em;"><a class="text2">/ </a></label>
                                        @if (Route::has('register'))
                                            <label style="font-family:myfont;font-size:0.7em;">
                                                <a class="sign_up mr-3" href="{{ route('register') }}">{{ __('ลงทะเบียน') }}</a>
                                            </label>
                                        @endif
                            </ul>
                                @else
                                <li class="labelWithImg">
                                    <a href="{{ route('SponShoppingCart') }}">
                                        <img style="width:2em" src="{{asset('icon/shopping-cart.png') }}" />
                                        <span class="font-shop">3</span>
                                    </a>
                                </li>
                                
                                    @if(Auth::user()->users_type == '2')
                                        @foreach($developer as $Dev)
                                            <!-- <img class="nav-pic ml-3" src="{{asset('home/imgProfile/'.$Dev->DEV_IMG) }}" /> -->
                                        @endforeach
                                    @elseif(Auth::user()->users_type == '3')
                                        @foreach($sponsor as $spon)
                                            <!-- <img class="nav-pic ml-3" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" /> -->
                                        @endforeach
                                    @else
                                        @foreach($guest_user as $USER)
                                            <!-- <img class="nav-pic ml-3" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" /> -->
                                        @endforeach
                                    @endif
                                    
                                <li class="has-children">    
                                    <a href="#about-section" class="nav-link font_name" >{{ Auth::user()->name }}.{{ Auth::user()->surname }}</a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            @if(Auth::user()->users_type == '2')
                                                <a class="nav-link font_profile" style="" href="{{ route('DevProfile') }}">{{ __('โปรไฟล์') }}</a>
                                            @elseif(Auth::user()->users_type == '3')
                                                <a class="nav-link font_profile" href="{{ route('SponsorProfile') }}">{{ __('โปรไฟล์') }}</a>
                                            @else
                                                <a class="nav-link font_profile" href="{{ route('UserProfile') }}">{{ __('โปรไฟล์') }}</a>
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

                    <div class="col-sm-8 col-md-8 d-inline-block d-lg-none d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"></div>
                    <div class="col-sm-2 col-md-1 d-inline-block d-lg-none d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-center">
                            <span class="icon-menu h1 menu1 mr-2"></span>
                        </a>
                    </div>
                </div>
            </header> 
            
            @yield('content')
            
            <!-- <footer class="site-footer footer1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 pl-4 mt-2">
                            <img class="email_footer" src="{{asset('icon/email.svg') }}" >
                            <img class="google_footer" src="{{asset('icon/google_p.svg') }}" >
                            <img class="fb_footer" src="{{asset('icon/fb.svg') }}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mt-4 pl-4">
                                <div class="col-md-4 col-lg-4 col-xl-3">
                                    <div>
                                        <div><p class="fontAddressFooter"><a style="font-weight:800;">ที่อยู่ :</a> 8/1 ถนนบรมราชชนนี <br> 
                                        แขวงศาลาธรรมสพน์ เขตทวีวัฒนา</br>
                                        กรุงเทพมหานคร 10170</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-3">
                                    <div>
                                        <p class="fontAddressFooter">
                                            <a style="font-weight:800;">โทร : </a> +66 2105 8699 </br>
                                            <a style="font-weight:800;">เว็บไซต์ : </a> https://www.level-ups.com </br>
                                            <a style="font-weight:800;">อีเมล : </a> info@mip.co.th
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-3">
                                    <div>
                                        <p class="fontAddressFooter">
                                            <a href="{{ route('gameCategory') }}">หมวดหมู่</a></br>
                                            <a href="{{ route('FollowMe') }}">การติดตามของฉัน</a></br>
                                            <a href="{{ route('login-levelUp') }}">เข้าสู่ระบบ</a></br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </footer>

            <footer class="container-fluid bg_footer">
                <div class="row pt-3 pb-2 pl-4">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8" >
                        <div>
                            <p class="fontCopyrightFooter">
                                <script>document.write(new Date().getFullYear());</script> 
                                &copy; All Rights Reserved @ Level Up | ข้อกำหนด และเงื่อนไข | นโยบายความเป็นส่วนตัว
                            </p>
                        </div> 
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 text-right">
                        <img class="imgFooter mr-3" src="{{asset('home/logo/logo_wh.svg') }}">
                        <img class="imgFooter" src="{{asset('home/logo/sega.svg') }}" >
                    </div>
                </div>
            </footer>  -->
        </div>
    
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
        @yield('script')
    </body>
</html>