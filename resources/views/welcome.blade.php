@extends('layout.app')

@section('background')

<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay" style="background-image: url(home/images/slide_2.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase mb-5" data-aos="fade-up">I'm Creative One Page Template by Colorlib</h1>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn smoothscroll button3 mr-2 mb-2">Get In Touch</a>
                    </div>
                </div>  
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon button4">
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
                        <a href="#contact-section" class="btn smoothscroll button3 mr-2 mb-2">Get In Touch</a>
                    </div>
                </div> 
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon button4">
                <span class="mouse-wheel"></span>
            </span>
        </a>
    </div>
</div>
@endsection

@section('section')
<!-- Section_Services -->
<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3 font">Our Services</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-danger flaticon-startup"></span></div>
                    <div>
                        <h3>Business Consulting</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#" class="font3">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-danger flaticon-graphic-design"></span></div>
                    <div>
                        <h3>Market Analysis</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#" class="font3">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4">
                    <div class="unit-4-icon mr-4"><span class="text-danger flaticon-settings"></span></div>
                    <div>
                        <h3>User Monitoring</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><div ><a href="#" class="font3" >Learn More</a></div></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section_Game -->
<section class="site-section" id="game-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3 font">GAME PLATFORM</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7 ">
                <button class="button5" data-filter="*">ทั้งหมด</button>
                <button class="button5" data-filter=".news">มาใหม่</button>
                <button class="button5" data-filter=".hot">ยอดนิยม</button>
            </div>
        </div> 
        <div id="posts" class="row no-gutter">
            <div class="item hot col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item hot col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item hot col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div>
            </div>
            <div class="item hot col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>

            <div class="item news col-md-6 col-lg-3 mb-4">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item news col-md-6 col-lg-3 mb-4">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>
            <div class="item news col-md-6 col-lg-3 mb-4">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div>
            </div>
            <div class="item news col-md-6 col-lg-3 mb-4">
                <div class="h-entry">
                    <a href="single.html">
                        <img src="section/picture_game/game_pic.jpg" alt="Image" class="img-fluid" width="250" height="250">
                    </a>
                    <h2 class="font2"><a>Game name</a></h2>
                    <div class="meta mb-2">ชื่อผู้พัฒนา <span class="mx-2">&bullet;</span> วันที่เผยแพร่<span class="mx-2">&bullet;</span> <a href="#" class="font3">News</a></div>
                    <div class="meta mb-2">Download <span class="mx-2">&#8282;</span> 1,000</div>
                    <p><a href="#" class="font3">Continue Reading...</a></p>
                </div> 
            </div>
        </div>    
            <div class="row">
                <div class="col-12 text-right" data-aos="fade">
                    <p><a class="font5" href="{{ route('GAMESHELF') }}">Game Shelf All &nbsp;<i class="icon-forward mr-2"></i></a></p>
                </div>
            </div>
    </div>
</section>

<!-- Section_News -->
<section class="site-section bg-light" id="news-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="section-title mb-3 font3">NEWS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="section/picture_game/csgo.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="{{asset('section/picture_game/fifa.jpg')}}" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="section/picture_game/csgo.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="{{asset('section/picture_game/pubg.jpeg')}}" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="dist/images/post_1.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="dist/images/post_2.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="dist/images/post_3.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#"> <!-- ไปหน้าแสดงรายละเอียดข่าว -->
                            <img src="dist/images/post_1.jpg" alt="Image" class="img-fluid" width="250" height="250">
                        </a>
                    </div>
                    <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-black h5 mb-2">News</h3>
                        <p>รายะเอียด : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Section_Sponsors -->
<section class="site-section border-bottom bg-light" id="team-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title mb-3 font" data-aos="fade-up" data-aos-delay="">SPONSORS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up">
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
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="200">
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
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="300">
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

            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <<img src="section/picture_sponsors/grab.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                        </ul>
                        <img src="section/picture_sponsors/grab.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="section/picture_sponsors/ford.png" alt="Image" class="img-fluid" style="width: 200px; height: 80px;">
                    </figure>
                </div>
            </div> 
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection