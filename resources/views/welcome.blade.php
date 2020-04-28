<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        Fonts
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        Styles
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel :)
                </div>

                <div class="links">
                    <a href="home">home</a>
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->

@extends('layout.app')

@section('background')

<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay" style="background-image: url(home/images/slide_2.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase mb-5" data-aos="fade-up">I'm Creative One Page Template by Colorlib</h1>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
                    </div>
                </div>  
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon">
                <span class="mouse-wheel"></span>
            </span>
        </a>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url('home/images/slide_1.jpeg');" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase mb-5" data-aos="fade-up">I'm Creative One Page Template by Colorlib</h1>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
                    </div>
                </div> 
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon">
                <span class="mouse-wheel"></span>
            </span>
        </a>
    </div>
</div>
@endsection

@section('section')
<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Our Services</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-startup"></span></div>
                    <div>
                        <h3>Business Consulting</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-graphic-design"></span></div>
                    <div>
                        <h3>Market Analysis</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-settings"></span></div>
                    <div>
                        <h3>User Monitoring</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="site-section" id="game-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">GAME PLATFORM</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*">ทั้งหมด</button>
                <button class="btn btn-primary" data-filter=".news">มาใหม่</button>
                <button class="btn btn-primary" data-filter=".hot">ยอดนิยม</button>
            </div>
        </div> 
        <div id="posts" class="row no-gutter">
            <div class="item news col col-lg-3 mb-4 mb-lg-2" data-aos="fade-up" data-aos-delay="">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item news col col-lg-3 mb-4 mb-lg-2" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>
            <div class="item news col col-lg-3 mb-4 mb-lg-2" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item hot col col-lg-3 mb-4 mb-lg-2" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('section/picture_game/csgo.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">HOT</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item hot col col-lg-3 mb-4 mb-lg-2">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('section/picture_game/fifa.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">HOT</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>
            <div class="item hot col col-lg-3 mb-4 mb-lg-2">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="{{asset('section/picture_game/pubg.jpeg')}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-2">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">HOT</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>

            <!-- <div class="item news col-sm-6 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/csgo.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/csgo.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/fifa.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/fifa.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pes.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pes.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pubg_lite.jpeg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pubg_lite.jpeg">
                </a>
            </div>
            <div class="item news col-sm-6 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pubg.jpeg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pubg.jpeg">
                </a>
            </div> -->
        </div>
    </div>
</section>

<section class="site-section border-bottom" id="team-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">SPONSORS</h2>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
            <figure>
                <ul class="social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="section/picture_sponsors/grab.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
            </figure>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
            <figure>
                <ul class="social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                </ul>
                <img src="section/picture_sponsors/ford.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
            </figure>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
            <figure>
                <ul class="social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                </ul>
                <img src="section/picture_sponsors/sega.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
            </figure>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
            <figure>
                <ul class="social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="section/picture_sponsors/grab.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
            </figure>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection

@section('script')
@endsection