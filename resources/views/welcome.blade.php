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
                            <a href="#" class="btn smoothscroll button3"><span class="icon-icon_download"></span><b style="font-family:myfont;" class="download">ดาวน์โหลด</b></a>
                            <a href="#" class="btn smoothscroll button10" style=" color: #fff;"><b style="font-family:myfont;" class="details">รายละเอียด</b></a>
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
                            <a href="#" class="btn smoothscroll button3"><span class="icon-icon_download"></span><b style="font-family:myfont;" class="download">ดาวน์โหลด</b></a>
                            <a href="#" class="btn smoothscroll button10" style=" color: #fff;"><b style="font-family:myfont;" class="details">รายละเอียด</b></a>
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
<!-- เกมยอดนิยม -->
<section class="site-section" id="game-popular">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมยอดนิยม</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont1;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        
        <div class="owl-carousel " id="owl-demo1">
            @foreach($Games as $game)
                <div class="item imgteaser2">
                @guest
                    <a href="{{ route('login') }}">
                        <img class="game_1" src="{{asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" />
                            <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                        <span class="desc2">
                            <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                            
                            <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม111</b></button>
                            
                            <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                            <div class="game_name2">
                                <b style="font-size: 25px;color: #fff;">{{ $game->GAME_NAME }}</b>
                                <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online <button class="font_detail2" style="color: #fff;" >รายละเอียด</button></div>
                            </div>
                            <button id="down" class="down2 btn btn-dark panel-heading" data-toggle="collapse" data-target="#{{ $game->GAME_NAME }}" aria-expanded="false" aria-controls="collapseExample"><img id="downImg" src="{{asset('icon/down1.svg')}}"></button>
                            <!-- <button id="down" class="down2 btn btn-dark" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                            <!-- <button id="up" class="down2 btn btn-dark" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img  src="{{asset('icon/up.svg')}}" /></button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Show</button> -->
                            <!-- <button id="down" class="down2 btn btn-dark"><img onclick="bigImg(event,'collapseExample')" id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                        </span>
                    </a>
                @else
                    <a>
                        <img class="game_1" src="{{asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" />
                            <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                        <span class="desc2">
                            <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                            <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button>
                            
                            <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                            <div class="game_name2">
                                <b style="font-size: 25px;color: #fff;">{{ $game->GAME_NAME }}</b>
                                <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online <button class="font_detail2" style="color: #fff;" >รายละเอียด</button></div>
                            </div>
                            <button id="down" class="down2 btn btn-dark panel-heading" data-toggle="collapse" data-target="#{{ $game->GAME_NAME }}" aria-expanded="false" aria-controls="collapseExample"><img id="downImg" src="{{asset('icon/down1.svg')}}"></button>
                            <!-- <button id="down" class="down2 btn btn-dark" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                            <!-- <button id="up" class="down2 btn btn-dark" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img  src="{{asset('icon/up.svg')}}" /></button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Show</button> -->
                            <!-- <button id="down" class="down2 btn btn-dark"><img onclick="bigImg(event,'collapseExample')" id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                        </span>
                    </a>
                @endguest
                </div>
            @endforeach
        </div>
        
        @foreach($Games as $gameId)
        <div class="collapse panel-collapse" id="{{ $gameId->GAME_NAME }}">
            <div class="form">
                
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="{{$gameId->GAME_VDO_LINK}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col mt-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>{{$gameId->GAME_NAME}}</b></br>Online • Other</p>
                        <p class="font_detail ">
                            The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by Polish developer CD Projekt and is based on The Witcher series of fantasy novels by Andrzej Sapkowski.
                            The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by Polish developer CD Projekt and is based on The Witcher series of fantasy novels by Andrzej Sapkowski.
                        </p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <a href="{{ route('gameDetail') }}"><button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button></a>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
        
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
                        <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">Ragnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down2 btn btn-dark" data-toggle="collapse" data-target="#collapseExample2  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg2" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game4.png') }}" />
                        <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc2">
                        <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">MAFIA TRILOGY</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down2 btn btn-dark" data-toggle="collapse" data-target="#collapseExample3  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg3" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser2">
                <a>
                    <img class="game_1" src="{{asset('section/picture_game/game2.png') }}" />
                        <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc2">
                        <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">PlayerUnknown’s Battlegrounds</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                        <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">TIMELIE</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                        <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">Pegnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                        <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic2" style="width: 13%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name2">
                            <b style="font-size: 25px;color: #fff;">Pegnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">Pegnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">Pegnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">Pegnarok</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
        <div class="collapse" id="collapseExample2">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game5.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseExample3">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game4.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>MAFIA TRILOGY</b></br>Online • Other</p>
                        <p class="font_detail ">The newly announced Definitive Editions of Mafia, Mafia II, and Mafia III invite you to live the life of a gangster across three distinct eras of organized crime in America.</p>
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div>      
    </div>
</section>

<!-- เกมที่เล่นล่าสุด-->
<section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมที่เล่นล่าสุด</h2>
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample4  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg4" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game7.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 25px;color: #fff;">SONIC THE HEDGEHOG</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample"><img id="downImg5" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game8.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 25px;color: #fff;">SPY KIDS 3D GAME OVER</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 25px;color: #fff;">SONIG MANIA</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 25px;color: #fff;">CRASH BANDICOOT</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">FORZE HORIZON 4</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
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
                            <b style="font-size: 25px;color: #fff;">GRAND THRFT AUTO V</b>
                            <div class="mt-1" style="font-size: 22px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
        <div class="collapse" id="collapseExample4">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok4</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div> 
        <div class="collapse" id="collapseExample5">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game7.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok5</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- เกมออกใหม่-->
<section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">เกมออกใหม่</h2>
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample6  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg6" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game13.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample"><img id="downImg7" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game14.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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

        <div class="collapse" id="collapseExample6">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok6</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div> 
        <div class="collapse" id="collapseExample7">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game7.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok7</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample"><img id="downImg8" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game19.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample9  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg9" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game20.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
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
        <div class="collapse" id="collapseExample8">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok8</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div> 
        <div class="collapse" id="collapseExample9">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game7.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;Comments</br>
                                    <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;hours
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok9</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
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
        navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1.8,
                nav:true
            },
            700:{
                items:2,
                nav:true
            },
            980:{
                items:3,
                nav:true
            },
            1000:{
                items:3.5,
                nav:true,
                loop:false
            },
            1280:{
                items:4,
                nav:true,
                loop:false
            },
            1600:{
                items:5,
                nav:true,
                loop:false
            },
            1680 :{
                items:5.3,
                nav:true,
                loop:false
            },
            1920:{
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
 
    $("#owl-demo2").owlCarousel({
        loop:true,
        margin:10,
        navigation : true,
        navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1.8,
                nav:true
            },
            700:{
                items:2,
                nav:true
            },
            980:{
                items:3,
                nav:true
            },
            1000:{
                items:3.5,
                nav:true,
                loop:false
            },
            1280:{
                items:4,
                nav:true,
                loop:false
            },
            1600:{
                items:5,
                nav:true,
                loop:false
            },
            1680 :{
                items:5.3,
                nav:true,
                loop:false
            },
            1920:{
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
 
    $("#owl-demo3").owlCarousel({
        loop:true,
        margin:10,
        navigation : true,
        navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            730:{
                items:3.3,
                nav:true
            },
            980:{
                items:4.3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            },
            1280:{
                items:6,
                nav:true,
                loop:false
            },
            1600:{
                items:7,
                nav:true,
                loop:false
            },
            1680 :{
                items:7.3,
                nav:true,
                loop:false
            },
            1920:{
                items:8.4,
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
        navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            730:{
                items:3.3,
                nav:true
            },
            980:{
                items:4.3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            },
            1280:{
                items:6,
                nav:true,
                loop:false
            },
            1600:{
                items:7,
                nav:true,
                loop:false
            },
            1680 :{
                items:7.3,
                nav:true,
                loop:false
            },
            1920:{
                items:8.4,
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
        navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            730:{
                items:3.3,
                nav:true
            },
            980:{
                items:4.3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            },
            1280:{
                items:6,
                nav:true,
                loop:false
            },
            1600:{
                items:7,
                nav:true,
                loop:false
            },
            1680 :{
                items:7.3,
                nav:true,
                loop:false
            },
            1920:{
                items:8.4,
                nav:true,
                loop:false
            }
        }
    })
});
</script>

<script>
    function bigImg(evt, cityName) {
        // document.getElementById("downImg").src = "{{asset('icon/up.svg')}}";
        var i, tabcontent, tablinks;
        document.getElementById("downImg").src = "{{asset('icon/up.svg')}}";
        tabcontent = document.getElementsByClassName("collapse");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("down2 btn btn-dark");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += "active";
    }

    function normalImg(x) {
        
        var i, tabcontent, tablinks;
        document.getElementById("downImg").src = "{{asset('icon/down1.svg')}}";
        tabcontent = document.getElementsByClassName("collapse");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("down2 btn btn-dark");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        // document.getElementById(cityName).style.display = "block";
        // evt.currentTarget.className += "active";
    }
</script>

    <script>
        $(document).ready(function() {
            // foreach($Games as $games){
                $('[data-toggle="collapse"]').click(function() {
                    $(this).toggleClass( "active" );
                    if ($(this).hasClass("active")) {
                        document.getElementById("downImg").src = "{{asset('icon/up.svg')}}";
                    } else {
                        document.getElementById("downImg").src = "{{asset('icon/down1.svg')}}";
                    }
                });
            // }
        // document ready  
        });
    </script>

    <!-- <script>
        $(document).ready(function() {
            $('[data-toggle="collapse1"]').click(function() {
                $(this).toggleClass( "active" );
                if ($(this).hasClass("active")) {
                    document.getElementById("downImg1").src = "{{asset('icon/up.svg')}}";
                } else {
                    document.getElementById("downImg1").src = "{{asset('icon/down1.svg')}}";
                }
            });
        // document ready  
        });
    </script>


    <script>
        $(document).ready(function() {
            $('[data-toggle="collapse2"]').click(function() {
                $(this).toggleClass( "active" );
                if ($(this).hasClass("active")) {
                    document.getElementById("downImg2").src = "{{asset('icon/up.svg')}}";
                } else {
                    document.getElementById("downImg2").src = "{{asset('icon/down1.svg')}}";
                }
            });
        // document ready  
        });
    </script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="collapse3"]').click(function() {
                $(this).toggleClass( "active" );
                if ($(this).hasClass("active")) {
                    document.getElementById("downImg3").src = "{{asset('icon/up.svg')}}";
                } else {
                    document.getElementById("downImg3").src = "{{asset('icon/down1.svg')}}";
                }
            });
        // document ready  
        });
    </script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="collapse4"]').click(function() {
                $(this).toggleClass( "active" );
                if ($(this).hasClass("active")) {
                    document.getElementById("downImg4").src = "{{asset('icon/up.svg')}}";
                } else {
                    document.getElementById("downImg4").src = "{{asset('icon/down1.svg')}}";
                }
            });
        // document ready  
        });
    </script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="collapse5"]').click(function() {
                $(this).toggleClass( "active" );
                if ($(this).hasClass("active")) {
                    document.getElementById("downImg5").src = "{{asset('icon/up.svg')}}";
                } else {
                    document.getElementById("downImg5").src = "{{asset('icon/down1.svg')}}";
                }
            });
        // document ready  
        });
    </script> -->
@endsection