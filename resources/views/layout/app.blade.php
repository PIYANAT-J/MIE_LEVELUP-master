<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LEVEL Up &mdash; Website by Multi innovation Engineering</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">
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
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="app" class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
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
                                    <!-- <li class="has-children">
                                        <a href="#about-section" class="nav-link">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="#team-section" class="nav-link">Team</a></li>
                                            <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                            <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                            <li class="has-children">
                                                <a href="#">More Links</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Menu One</a></li>
                                                    <li><a href="#">Menu Two</a></li>
                                                    <li><a href="#">Menu Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#portfolio-section" class="nav-link">เกม</a></li>
                                    <li><a href="#services-section" class="nav-link">เติมเงิน</a></li>
                                    <li><a href="#testimonials-section" class="nav-link">ดาวน์โหลด</a></li>
                                    <li><a href="#blog-section" class="nav-link">ข่าว</a></li>
                                    <li><a href="#contact-section" class="nav-link">ช่วยเหลือ</a></li>
                                    <li class="has-children">
                                        <a href="#about-section" class="nav-link">เข้าสู่ระบบ</a>
                                        <ul class="dropdown">
                                            <!-- Authentication Links -->
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
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
                                            <!-- <li><a href="/////" class="nav-link">เข้าสู่ระบบ</a></li>
                                            <li><a href="#pricing-section" class="nav-link">สมัครสมาชิก</a></li> -->
                                            <!-- <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                            <li class="has-children">
                                                <a href="#">More Links</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Menu One</a></li>
                                                    <li><a href="#">Menu Two</a></li>
                                                    <li><a href="#">Menu Three</a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
                    </div>
                </div>
            </header>

            <!-- <main class="py-4">
                @yield('content')
            </main> -->

            @yield('background')

            @yield('section')

            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="footer-heading mb-4">About Us</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <h2 class="footer-heading mb-4">Quick Links</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                        <li><a href="#services-section" class="smoothscroll">Services</a></li>
                                        <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                                        <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="footer-heading mb-4">Follow Us</h2>
                                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                            <form action="#" method="post" class="footer-subscribe">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LevelUp Multi innovation Engineering <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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