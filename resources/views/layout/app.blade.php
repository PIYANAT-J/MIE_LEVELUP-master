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

            <header class="site-navbar py-3 js-sticky-header site-navbar-target" role="banner">
                <div class="row align-items-center">
                    <div class="col-sm-2 col-md-2 col-lg-1 col-xl-1 text-right">
                        <a href="{{ url('/') }}"><img class="img_logo" src="{{asset('home/logo/logo_lvp.svg') }}" ></a>
                    </div>

                    <div class="col-lg-7 col-xl-8  d-none d-lg-block d-xl-block home">
                        <nav class="site-navigation position-relative" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block" style="margin-top:50px;"> 
                                <li><a href="{{ url('/') }}" class="nav-link active mr-4 my-2" style="padding:0px;margin:5px 0 5px 0"><h1 class="fontNavbar">หน้าแรก</h1></a></li>
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
                                <img style="width:20px;" class="mr-1 " src="{{asset('/icon/sign_in_wh.svg') }}">
                                <label >
                                    <a href="{{ route('login-levelUp') }}" style="padding:0;">
                                        <h1 class="fontSignIn" >{{ __('เข้าสู่ระบบ') }}</h1>
                                    </a>
                                </label>
                                <label style="color:#fff;"><a class="text2 d-none d-lg-block d-xl-block"><h1>/</h1></a></label>
                                    @if (Route::has('register'))
                                        <label class="mr-4"><a class="sign_up " href="{{ route('register-levelUp') }}"><h1 style="margin-bottom:0;">{{ __('ลงทะเบียน') }}</h1></a></label>
                                    @endif
                            </ul>
                                @else
                                
                                    @if(Auth::user()->users_type == '2')
                                        <img class="nav-pic " src="{{asset('home/imgProfile/'.$developer->DEV_IMG) }}" />
                                    @elseif(Auth::user()->users_type == '3')
                                        <img class="nav-pic " src="{{asset('home/imgProfile/'.$sponsor->SPON_IMG) }}" />
                                    @elseif(Auth::user()->users_type == '1')
                                        <img class="nav-pic" src="{{asset('home/imgProfile/'.$guest_user->GUEST_USERS_IMG) }}" />
                                    @else
                                        <img style="padding:0px 0px 0px 20px;" src="{{asset('/icon/sign_in.svg') }}">
                                    @endif
                                    
                                <li class="has-children">    
                                    <a class="nav-link mr-3" style="padding-left:0;"><h1 class="font_name">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h1></a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            @if(Auth::user()->users_type == '2')
                                                <a class="nav-link" style="padding-left:10px;" href="{{ route('DevProfile') }}"><p class="font_profile">{{ __('โปรไฟล์') }}</p></a>
                                            @elseif(Auth::user()->users_type == '3')
                                                <a class="nav-link" style="padding-left:10px;" href="{{ route('SponsorProfile') }}"><p class="font_profile">{{ __('โปรไฟล์') }}</p></a>
                                            @elseif(Auth::user()->users_type == '1')
                                                <a class="nav-link" style="padding-left:10px;" href="{{ route('UserProfile') }}"><p class="font_profile">{{ __('โปรไฟล์') }}</p></a>
                                            @elseif(Auth::user()->users_type == '0')
                                                <a class="nav-link" style="padding-left:10px;" href="{{ route('AdminManagement') }}"><p class="font_profile">{{ __('จัดการผู้ใช้') }}</p></a>
                                            @endif
                                        </li>
                                        <li class="nav-item" >
                                            <a class="dropdown-item" style="padding-left:10px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <p class="font_profile">{{ __('ออกจากระบบ') }}</p>
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

            @yield('headerContent')

            @yield('section')
            
            <footer class="site-footer footer1">
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
            </footer>
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
        @yield('script')
    </body>
</html>