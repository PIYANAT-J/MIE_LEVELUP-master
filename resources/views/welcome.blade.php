@extends('layout.app')

@section('background')
    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url(home/images/pic.png);" data-aos="fade" id="home-section">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-8 mt-lg-5text-left">
                        <img class="text-uppercase  img_logo2" src="{{asset('home/images/logo.png') }}" data-aos="fade-up">
                        <h1 class="text-uppercase mb-1 text2" style="font-family:myfont; color:white; font-size: 30px;" data-aos="fade-up">RO ตัวใหม่ล่าสุดที่คราวนี้มาในรูปแบบ 3D MMORPG แถมยังได้ลิขสิทธิ์แท้จาก Gravity มาอีกด้วย</h1>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <!-- <a class="btn smoothscroll button3 "><img src="{{asset('/icon/download.svg') }}">Download</a> -->
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
        <div class="site-blocks-cover overlay" style="background-image: url('home/images/slide_2.jpg');" data-aos="fade" id="home-section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 mt-lg-5 text-center">
                        <h1 class="text-uppercase mb-5" data-aos="fade-up">I'm Creative One Page Template by Colorlib</h1>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <!-- <a href="#contact-section" class="btn smoothscroll button3 mr-2 mb-2">Get In Touch</a> -->
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
<!-- เกมส์ยอดนิยม -->
<section class="site-section" id="game-popular">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมส์ยอดนิยม</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel " id="owl-demo1">
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>

                </a>
            </div>

            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game2.png') }}" />
                        <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc2">
                        <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game3.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game4.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2 collapsible"><img  src="{{asset('icon/down1.svg') }}" />
                        </div>
                    </span>
                </a>
            </div>
        </div>


</section>

<!-- การติดตามของฉัน -->
<section class="site-section" id="myfollow">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">การติดตามของฉัน</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel" id="owl-demo2">
        <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game5.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game4.png') }}" />
                        <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc2">
                        <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game2.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game3.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game5.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>      

    </div>
</section>

<!-- เกมส์ยอดนิยม-->
<section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมส์ยอดนิยม</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel " id="owl-demo3">
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game6.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game7.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game8.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game9.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game10.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game11.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game12.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game6.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
</section>

<!-- เกมส์ออกใหม่-->
<section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมส์ออกใหม่</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel " id="owl-demo4">
        <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game12.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game13.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game14.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game15.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game16.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game17.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game12.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
</section>

<!--พบกันเร็วๆนี้-->
<section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">พบกันเร็วๆนี้</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel" id="owl-demo5">
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game19.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game20.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game21.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game22.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop:true,
                margin:10,
                navigation : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                loop:true,
                margin:10,
                navigation : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#owl-demo3").owlCarousel({
                loop:true,
                margin:10,
                navigation : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#owl-demo4").owlCarousel({
                loop:true,
                margin:10,
                navigation : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#owl-demo5").owlCarousel({
                loop:true,
                margin:10,
                navigation : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            })
        });
    </script>
@endsection