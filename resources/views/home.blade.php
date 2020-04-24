<!-- @extends('layout.app')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->

@extends('layout.app')

@section('background')
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
            <div class="item hot col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item hot col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div>
            </div>
            <div class="item hot col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="dist/images/post_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    <p><a href="#">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item news col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/csgo.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/csgo.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/fifa.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/fifa.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pes.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pes.jpg">
                </a>
            </div>
            <div class="item news col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pubg_lite.jpeg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pubg_lite.jpeg">
                </a>
            </div>
            <div class="item news col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="section/picture_game/pubg.jpeg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="section/picture_game/pubg.jpeg">
                </a>
            </div>
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
