@extends('layout.app')
@section('headerContent')
    
    <div class="slide-one-item home-slider owl-carousel" style="background-color: #141621;">
        <div class="site-blocks-cover overlay" style="background-image: url(home/images/pic.png);" data-aos="fade" id="home-section">
            <div class="container-fluid blockShadow">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 pl-5">
                        <div class="pHeaderContent">
                            <img class="imgLogoGame" src="{{asset('home/images/logo.png') }}">
                            <h1 class="fontGameContent">RO ตัวใหม่ล่าสุดที่คราวนี้มาในรูปแบบ 3D MMORPG แถมยังได้ลิขสิทธิ์แท้จาก Gravity มาอีกด้วย</h1>   
                            <a href="#" >
                                <label class="btnDownload" style="margin:0;">
                                    <label style="margin:0 8px 0 0;">
                                        <span class="pIconDownload icon-icon_download" ></span>
                                    </label>
                                    <label class="py-2" style="margin:0 10px 0 0;"><h1 style="color: #000;margin-bottom:0;">ดาวน์โหลด</h1></label>
                                </label>
                            </a>
                            <a href="#">
                                <label class="btnDetailContent">
                                    <h1 class="py-2 px-3" style="margin-bottom:0;color: #fff;">รายละเอียด</h1>
                                </label> 
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            <a href="#" class="mouse smoothscroll d-none">
                <span class="mouse-icon button4">
                    <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>
        <div class="site-blocks-cover overlay" style="background-image: url(home/images/mario_bg.jpg);" data-aos="fade" id="home-section">
            <div class="container-fluid blockShadow">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 pl-5">
                        <div class="pHeaderContent">
                            <img class="imgLogoGame" src="{{asset('home/images/logo2.png') }}">
                            <h1 class="fontGameContent">มาริโอ เกม เกมออนไลน์ แกลเลอรี่สาวคอสเพลย์ พริตตี้งานเกม เกมคลิป ความเคลื่อนไหววงการเกม</h1>   
                            <a href="#" >
                                <label class="btnDownload" style="margin:0;">
                                    <label style="margin:0 8px 0 0;">
                                        <span class="pIconDownload icon-icon_download" ></span>
                                    </label>
                                    <label class="py-2" style="margin:0 10px 0 0;"><h1 style="color: #000;margin-bottom:0;">ดาวน์โหลด</h1></label>
                                </label>
                            </a>
                            <a href="#">
                                <label class="btnDetailContent">
                                    <h1 class="py-2 px-3" style="margin-bottom:0;color: #fff;">รายละเอียด</h1>
                                </label> 
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            <a href="#" class="mouse smoothscroll d-none">
                <span class="mouse-icon button4">
                    <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>
    </div>
@endsection

@section('section')
<!-- เกมยอดนิยม -->
<section class="site-section" id="game-popular" style="background-color: #141621;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6  text-left">
                <h4 style="color:#fff;font-weight:900;">เกมยอดนิยม</h4>
            </div>
            <div class="col-6 text-right">
                <a class=" mr-4" href="{{ route('gameCategory') }}">
                    <label><h4 class="fontGameCat">ดูทั้งหมด </h4></label> 
                    <label><img class="pViewmore" src="{{asset('icon/next1.svg') }}" /></label>
                </a>
            </div>
        </div>
        
        <div class="owl-carousel " id="owl-demo1">
            @foreach($Games as $game)
                @if($game->GAME_STATUS === 'อนุมัติ')
                <div class="item imgteaser2">
                    <a>
                        <img class="game_1" src="{{ asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" />
                        
                            <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                        <span class="desc2">
                            <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                            @guest
                                <form action="{{route('login-levelUp')}}">
                                    <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                        <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                                    </button>
                                </form>
                            @else
                                @if($Follows->count() > 0)
                                    @foreach($Follows as $follow)
                                        @if($game->GAME_ID == $follow->GAME_ID)
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button>
                                            </form>
                                            @break
                                        @else
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:5px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollow">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $game->GAME_ID }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $game->GAME_NAME }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button>
                                            </form>
                                        @endif
                                    @endforeach
                                @else
                                    <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                            <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                                            <input type="hidden" name="submit" value="submit">
                                            <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                            <input type="hidden" name="GAME_ID" value="{{ $game->GAME_ID }}">
                                            <input type="hidden" name="GAME_NAME" value="{{ $game->GAME_NAME }}">
                                            <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                        </button>
                                    </form>
                                @endif
                                
                                <!-- <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn_follow3" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $game->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $game->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button>
                                </form> -->
                            @endguest
                            <img class="rate_pic2" style="width: 40px;" src="{{ asset('section/game_rate/'.$game->RATED_ESRB.'.svg') }}" />
                            <div class="game_name2">
                                <label style="margin:0;"><p style="margin:0;font-weight:900;">{{ $game->GAME_NAME }}</p></label><br>
                                <label style="margin:0;"><p style="margin:0;">{{ $game->RATED_B_L }} • Online</p></label>
                            </div>
                            <!-- <button id="down" class="down2 btn btn-dark panel-heading" data-toggle="collapse" data-target="#{{ $game->GAME_NAME }}" aria-expanded="false" aria-controls="collapseExample" onClick="myFunction()">
                                <img id="downImg" src="{{asset('icon/down1.svg')}}">
                            </button> -->

                            <label class="accordion-arrow" style="cursor:pointer;" onclick="openTab('GAME_NAME{{$game->GAME_ID}}');">
                                <i class="icon-dropdown-wh"></i>
                            </label>
                            <!-- <button id="down" class="down2 btn btn-dark" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                            <!-- <button id="up" class="down2 btn btn-dark" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img  src="{{asset('icon/up.svg')}}" /></button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Show</button> -->
                            <!-- <button id="down" class="down2 btn btn-dark"><img onclick="bigImg(event,'collapseExample')" id="downImg" src="{{asset('icon/down1.svg')}}"></button> -->
                        </span>
                    </a>
                
                </div>
                @endif
            @endforeach
        </div>
        @foreach($Games as $gameId)
        <div id="GAME_NAME{{$gameId->GAME_ID}}" class="containerTab mt-2" style="display:none;background:#000;">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">
                <img style="width:10px;" src="{{asset('icon/close-wh.svg')}}" >
            </span>
            <!-- <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                @csrf -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="{{$gameId->GAME_VDO_LINK}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div> 
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 pb-3" >
                        <div class="row">
                            <div class="col-lg-12" style="height:60px;">
                                <label class="pImgRate">
                                    <img style="width:30px;" src="{{asset('section/game_rate/'.$gameId->RATED_ESRB.'.svg') }}" />
                                </label>
                                    @if(isset($CommentAll))
                                        <?php $i = 0; $countID = 0;?>
                                        @foreach($CommentAll as $CAC)
                                            @if($CAC->GAME_ID == $gameId->GAME_ID)
                                                <?php $i = $i+$CAC->RATING; $countID = $countID+1;?>
                                            @endif
                                        @endforeach
                                        <?php 
                                            if($countID == 0 || $i == 0){
                                                $count = 0;
                                            }else{
                                                $count = $i/$countID;
                                            }
                                            
                                        ?>
                                    @endif
                                    @foreach($CDownload as $countDown)
                                        @if($countDown->GAME_ID == $gameId->GAME_ID)
                                            @foreach($Com_count as $com_count)
                                                @if($com_count->GAME_ID == $gameId->GAME_ID)
                                                <label class="pFontDetail">
                                                    <h1 style="color:#fff;margin:0;">
                                                        <a style="color:#f6c12c;">{{round($count, 1)}}/5</a> | 
                                                        {{ $com_count->com_count }} คอมเมนท์</br>
                                                        {{ $countDown->downloads_count }} ดาวน์โหลด
                                                    </h1>
                                                </label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                        <!-- <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                        <b>124</b> &nbsp;คอมเมนท์</br> -->
                                        <!-- <b>15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp; -->
                                        <!-- <b>104.5</b> &nbsp;ชั่วโมง -->
                            </div>
                            <div class="col-12 mt-3">
                                <h1 style="color:#fff;">{{ $gameId->GAME_NAME }}</br>{{ $gameId->RATED_B_L }} • Other</h1>
                            </div>
                            <div class="col-12"><p style="color:#fff;">{{ $gameId->GAME_DESCRIPTION }}</p></div>
                        </div>
                        @guest
                            <!-- <a href="{{ route('login') }}"><button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม11</b></button></a> -->
                        @else
                            @if($Follows->count() > 0)
                                @foreach($Follows as $followId)
                                    @if($gameId->GAME_ID == $followId->GAME_ID)
                                            <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                                            <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_ID" value="{{ $followId->FOLLOW_ID }}">
                                            </button> -->
                                            @break
                                    @else
                                            <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="GAME_ID" value="{{ $gameId->GAME_ID }}">
                                                <input type="hidden" name="GAME_NAME" value="{{ $gameId->GAME_NAME }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                            </button> -->
                                    @endif
                                @endforeach
                            @else
                                    <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $gameId->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $gameId->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button> -->
                            @endif
                        @endguest
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">< span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button> -->
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <a href="{{ route('GameDetail', ['id'=>$gameId->GAME_ID]) }}">
                            <button class="btn_follow7">
                                <p style="margin:0;">รายละเอียด</p>
                            </button>
                        </a>
                    </div>
                </div>
            <!-- </form> -->
        </div>


        <div class="collapse panel-collapse" id="{{ $gameId->GAME_NAME }}">
            <!-- <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                @csrf -->
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
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/'.$gameId->RATED_ESRB.'.svg') }}" /></div>
                            <div class="col-lg-10 mt-1">
                                <p class="font_rate1">
                                @if(isset($CommentAll))
                                    <?php $i = 0; $countID = 0;?>
                                    @foreach($CommentAll as $CAC)
                                        @if($CAC->GAME_ID == $gameId->GAME_ID)
                                            <?php $i = $i+$CAC->RATING; $countID = $countID+1;?>
                                        @endif
                                    @endforeach
                                    <?php 
                                        if($countID == 0 || $i == 0){
                                            $count = 0;
                                        }else{
                                            $count = $i/$countID;
                                        }
                                        
                                    ?>
                                @endif
                                @foreach($CDownload as $countDown)
                                    @if($countDown->GAME_ID == $gameId->GAME_ID)
                                        @foreach($Com_count as $com_count)
                                            @if($com_count->GAME_ID == $gameId->GAME_ID)
                                                <b style="color:#f6c12c; font-size:1em;">{{round($count, 1)}}/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                                <b>{{ $com_count->com_count }}</b> &nbsp;คอมเมนท์</br>
                                                <b>{{ $countDown->downloads_count }} </b>ดาวน์โหลด &nbsp; &nbsp;
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                
                                
                                    <!-- <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;คอมเมนท์</br> -->
                                    <!-- <b>15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp; -->
                                    <!-- <b>104.5</b> &nbsp;ชั่วโมง -->
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>{{ $gameId->GAME_NAME }}</b></br>{{ $gameId->RATED_B_L }} • Other</p>
                        <p class="font_detail ">{{ $gameId->GAME_DESCRIPTION }}</p>
                        @guest
                            <!-- <a href="{{ route('login') }}"><button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม11</b></button></a> -->
                        @else
                            @if($Follows->count() > 0)
                                @foreach($Follows as $followId)
                                    @if($gameId->GAME_ID == $followId->GAME_ID)
                                            <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                                            <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_ID" value="{{ $followId->FOLLOW_ID }}">
                                            </button> -->
                                            @break
                                    @else
                                            <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="GAME_ID" value="{{ $gameId->GAME_ID }}">
                                                <input type="hidden" name="GAME_NAME" value="{{ $gameId->GAME_NAME }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                            </button> -->
                                    @endif
                                @endforeach
                            @else
                                    <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" ><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $gameId->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $gameId->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button> -->
                            @endif
                        @endguest
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">< span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button> -->
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <a href="{{ route('GameDetail', ['id'=>$gameId->GAME_ID]) }}">
                            <button class="btn_follow7">
                                <p style="margin:0;">รายละเอียด</p>
                            </button>
                        </a>
                    </div>
                </div>
            <!-- </form> -->
        </div>
        @endforeach
        
    </div>
</section>

<!-- การติดตามของฉัน -->
@auth
    @if($Follows->count() > 0)
        <section class="site-section" id="myfollow" style="background-color: #141621;">
            <div class="container-fluid">
                <div class="row mt-4 ">
                    <div class="col-6  text-left">
                        <h4 style="color:#fff;font-weight:900;">การติดตามของฉัน</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class=" mr-4" href="{{ route('FollowMe') }}">
                            <label><h4 class="fontGameCat">ดูทั้งหมด </h4></label> 
                            <label><img class="pViewmore" src="{{asset('icon/next1.svg') }}" /></label>
                        </a>
                    </div>
                </div>
                <div class="owl-carousel" id="owl-demo2">
                    @foreach($Games as $gameMe)
                        @if($Follows->count() > 0)
                            @foreach($Follows as $followMe)
                                @if($gameMe->GAME_ID == $followMe->GAME_ID)
                                    <div class="item imgteaser2">
                                        <a>
                                            <img class="game_1" src="{{ asset('section/File_game/Profile_game/'.$gameMe->GAME_IMG_PROFILE) }}" />
                                                <!-- <div class="btn following2"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                                            <span class="desc2">
                                                <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                                                <!-- <button class="btn_follow4 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button> -->
                                                <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                        <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                                        <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                                                        <input type="hidden" name="submit" value="submit">
                                                        <input type="hidden" name="FOLLOW_ID" value="{{ $followMe->FOLLOW_ID }}">
                                                    </button>
                                                </form>
                                                <img class="rate_pic2" style="width:40px;" src="{{asset('section/game_rate/'.$gameMe->RATED_ESRB.'.svg') }}" />
                                                <div class="game_name2">
                                                    <label style="margin:0;"><p style="margin:0;font-weight:900;">{{$gameMe->GAME_NAME}}</p></label><br>
                                                    <label style="margin:0;"><p style="margin:0;">{{ $gameMe->RATED_B_L }} • Online</p></label>
                                                </div>

                                                <label class="accordion-arrow" style="cursor:pointer;" onclick="openTab('GAME_NAME2{{$gameMe->GAME_ID}}');">
                                                    <i class="icon-dropdown-wh"></i>
                                                </label>
                                                <!-- <div class="down2"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                                                <!-- <button id="down" class="down2 btn btn-dark" data-toggle="collapse" data-target="#{{ $gameMe->GAME_NAME }}2" aria-expanded="false" aria-controls="collapseExample"><img id="downImg2" src="{{asset('icon/down1.svg')}}"></button> -->
                                            </span>
                                        </a>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                @foreach($Games as $gameMeId)
                <div id="GAME_NAME2{{$gameMeId->GAME_ID}}" class="containerTab mt-2" style="display:none;background:#000;">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">
                        <img style="width:10px;" src="{{asset('icon/close-wh.svg')}}" >
                    </span>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                        <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game5.png') }}" /> -->
                            <div class="responsive-video">
                                <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                                <iframe class="video" src="{{ $gameMeId->GAME_VDO_LINK }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 pb-3" >
                            <div class="row">
                                <div class="col-lg-12" style="height:60px;">
                                    <label class="pImgRate">
                                        <img style="width:30px;" src="{{asset('section/game_rate/'.$gameId->RATED_ESRB.'.svg') }}" />
                                    </label>
                                            @if(isset($CommentAll))
                                                <?php $i = 0; $countID = 0;?>
                                                @foreach($CommentAll as $CAC)
                                                    @if($CAC->GAME_ID == $gameMeId->GAME_ID)
                                                        <?php $i = $i+$CAC->RATING; $countID = $countID+1;?>
                                                    @endif
                                                @endforeach
                                                <?php 
                                                if($countID == 0 || $i == 0){
                                                    $count = 0;
                                                }else{
                                                    $count = $i/$countID;
                                                }
                                                
                                            ?>
                                            @endif
                                            @foreach($Com_count as $com_count)
                                                @if($com_count->GAME_ID == $gameMeId->GAME_ID)
                                                    @foreach($CDownload as $countDown)
                                                        @if($countDown->GAME_ID == $gameMeId->GAME_ID)
                                                        <label class="pFontDetail">
                                                            <h1 style="color:#fff;margin:0;">
                                                                <a style="color:#f6c12c;">{{round($count, 1)}}/5</a> | 
                                                                {{ $com_count->com_count }} คอมเมนท์</br>
                                                                {{ $countDown->downloads_count }} ดาวน์โหลด 
                                                                <!-- <b>104.5</b> &nbsp;ชั่วโมง -->
                                                            </h1>
                                                        </label>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                                <!-- <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                                <b>124</b> &nbsp;Comments</br>
                                                <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                                <b>104.5</b> &nbsp;hours -->
                                </div>
                                <div class="col-12 mt-3">
                                    <h1 style="color:#fff;">{{ $gameMeId->GAME_NAME }}</br>{{ $gameMeId->RATED_B_L }} • Other</h1>
                                </div>
                                <div class="col-12"><p style="color:#fff;">{{ $gameMeId->GAME_DESCRIPTION }}</p></div>
                            </div>
                            <a href="{{ route('GameDetail', ['id'=>$gameMeId->GAME_ID]) }}">
                                <button class="btn_follow7">
                                    <p style="margin:0;">รายละเอียด</p>
                                </button>
                            </a>
                            <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                            <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                            <!-- <a href="{{ route('GameDetail', ['id'=>$gameMeId->GAME_ID]) }}"><button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button></a> -->
                        </div>
                    </div>
                </div>
                @endforeach    
            </div>
        </section>
    @endif
@endauth

<!-- เกมแนะนำ-->
<section class="site-section" style="background-color: #141621;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6  text-left">
                <h4 style="color:#fff;font-weight:900;">เกมแนะนำ</h4>
            </div>
            <div class="col-6 text-right">
                <a class=" mr-4" href="{{ route('gameCategory') }}">
                    <label><h4 class="fontGameCat">ดูทั้งหมด </h4></label> 
                    <label><img class="pViewmore" src="{{asset('icon/next1.svg') }}" /></label>
                </a>
            </div>
        </div>
        <div class="owl-carousel " id="owl-demo3">
            @foreach($Gamehot as $gameHot)
                <div class="item imgteaser">
                    <a>
                        <img class="game_2" src="{{ asset('section/File_game/Profile_game/'.$gameHot->GAME_IMG_PROFILE) }}" />
                        <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                        <span class="desc">
                            <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                            @guest
                                <form action="{{route('login-levelUp')}}">
                                    <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                        <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                                    </button>
                                </form>
                            @else
                                @if($Follows->count() > 0)
                                    @foreach($Follows as $follow)
                                        @if($gameHot->GAME_ID == $follow->GAME_ID)
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button >
                                            </form>
                                            @break
                                        @else
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:5px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollow">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $gameHot->GAME_ID }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $gameHot->GAME_NAME }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button >
                                            </form>
                                        @endif
                                    @endforeach
                                @else
                                    <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                            <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:5px;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNfollow">ติดตาม</p></label>
                                            <input type="hidden" name="submit" value="submit">
                                            <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                            <input type="hidden" name="GAME_ID" value="{{ $gameHot->GAME_ID }}">
                                            <input type="hidden" name="GAME_NAME" value="{{ $gameHot->GAME_NAME }}">
                                            <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                        </button >
                                    </form>
                                @endif
                            @endguest
                            <img class="rate_pic" style="width: 40px;" src="{{asset('section/game_rate/'.$gameHot->RATED_ESRB.'.svg') }}" />
                            <div class="game_name">
                                <label style="margin:0;"><p style="margin:0;font-weight:900;">{{ $gameHot->GAME_NAME }}</p></label><br>
                                <label style="margin:0;"><p style="margin:0;">{{ $gameHot->RATED_B_L }} • Online</p></label>
                            </div>
                            <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                            <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#{{ $gameHot->GAME_NAME }}4  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg6" src="{{asset('icon/down1.svg')}}"></button> -->
                            <label class="accordion-arrow" style="cursor:pointer;" onclick="openTab('GAME_NAME4{{$gameHot->GAME_ID}}');">
                                <i class="icon-dropdown-wh"></i>
                            </label>
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
        @foreach($Gamehot as $gameHotID)
        <div id="GAME_NAME4{{$gameHotID->GAME_ID}}" class="containerTab mt-2" style="display:none;background:#000;">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">
                <img style="width:10px;" src="{{asset('icon/close-wh.svg')}}" >
            </span>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                    <div class="responsive-video">
                        <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                        <iframe class="video" src="{{ $gameHotID->GAME_VDO_LINK }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 pb-3" >
                    <div class="row ">
                        <div class="col-lg-12" style="height:60px;">
                            <label class="pImgRate">
                                <img style="width:30px;" src="{{asset('section/game_rate/'.$gameHotID->RATED_ESRB.'.svg') }}" />
                            </label>
                                @if(isset($CommentAll))
                                    <?php $i = 0; $countID = 0;?>
                                    @foreach($CommentAll as $CAC)
                                        @if($CAC->GAME_ID == $gameHotID->GAME_ID)
                                            <?php $i = $i+$CAC->RATING; $countID = $countID+1;?>
                                        @endif
                                    @endforeach
                                    <?php 
                                        if($countID == 0 || $i == 0){
                                            $count = 0;
                                        }else{
                                            $count = $i/$countID;
                                        }
                                        
                                    ?>
                                @endif
                                @foreach($Com_count as $com_count)
                                    @if($com_count->GAME_ID == $gameHotID->GAME_ID)
                                        @foreach($CDownload as $countDown)
                                            @if($countDown->GAME_ID == $gameHotID->GAME_ID)
                                                <label class="pFontDetail">
                                                    <h1 style="color:#fff;margin:0;">
                                                        <a style="color:#f6c12c;">{{round($count, 1)}}/5</a> | 
                                                        {{ $com_count->com_count }} คอมเมนท์</br>
                                                        {{ $countDown->downloads_count }} ดาวน์โหลด 
                                                        <!-- <b>104.5</b> &nbsp;ชั่วโมง -->
                                                    </h1>
                                                </label>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                <!-- <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                <b>124</b> &nbsp;Comments</br>
                                <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                <b>104.5</b> &nbsp;hours -->
                        </div>
                        <div class="col-12 mt-3">
                            <h1 style="color:#fff;">{{ $gameHotID->GAME_NAME }}</br>{{ $gameHotID->RATED_B_L }} • Other</h1>
                        </div>
                        <div class="col-12"><p style="color:#fff;">{{ $gameHotID->GAME_DESCRIPTION }}</p></div>
                    </div>
                    <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                    <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                    <a href="{{ route('GameDetail', ['id'=>$gameHotID->GAME_ID]) }}">
                        <button class="btn_follow7">
                            <p style="margin:0;">รายละเอียด</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- เกมออกใหม่-->
<section class="site-section" style="background-color: #141621;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6  text-left">
                <h4 style="color:#fff;font-weight:900;">เกมออกใหม่</h4>
            </div>
            <div class="col-6 text-right">
                <a class=" mr-4" href="{{ route('gameCategory') }}">
                    <label><h4 class="fontGameCat">ดูทั้งหมด </h4></label> 
                    <label><img class="pViewmore" src="{{asset('icon/next1.svg') }}" /></label>
                </a>
            </div>
        </div>
        <div class="owl-carousel " id="owl-demo4">
            @foreach($GamesNew as $gameNew)
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{ asset('section/File_game/Profile_game/'.$gameNew->GAME_IMG_PROFILE) }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        @guest
                            <form action="{{route('login-levelUp')}}">
                                <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                    <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                                </button>
                            </form>
                        @else
                            @if($Follows->count() > 0)
                                @foreach($Follows as $follow)
                                    @if($gameNew->GAME_ID == $follow->GAME_ID)
                                        <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                            </button >
                                        </form>
                                        @break
                                    @else
                                        <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:5px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollow">ติดตาม</p></label>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="GAME_ID" value="{{ $gameNew->GAME_ID }}">
                                                <input type="hidden" name="GAME_NAME" value="{{ $gameNew->GAME_NAME }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                            </button >
                                        </form>
                                    @endif
                                @endforeach
                            @else
                                <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                        <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:5px;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNfollow">ติดตาม</p></label>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $gameNew->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $gameNew->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button >
                                </form>
                            @endif
                        @endguest
                        <img class="rate_pic" style="width: 40px;" src="{{asset('section/game_rate/'.$gameNew->RATED_ESRB.'.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">{{ $gameNew->GAME_NAME }}</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">{{ $gameNew->RATED_B_L }} • Online</p></label>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#{{ $gameNew->GAME_NAME }}6  " aria-expanded="false" aria-controls="collapseExample"><img id="downImg6" src="{{asset('icon/down1.svg')}}"></button> -->
                        
                        <label class="accordion-arrow" style="cursor:pointer;" onclick="openTab('GAME_NAME6{{$gameNew->GAME_ID}}');">
                            <i class="icon-dropdown-wh"></i>
                        </label>
                    </span>
                </a>
            </div>
            @endforeach
        </div>
        
        @foreach($GamesNew as $gameNewId)
        <div id="GAME_NAME6{{$gameNewId->GAME_ID}}" class="containerTab mt-2" style="display:none;background:#000;">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">
                <img style="width:10px;" src="{{asset('icon/close-wh.svg')}}" >
            </span>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                    <div class="responsive-video">
                        <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                        <iframe class="video" src="{{ $gameNewId->GAME_VDO_LINK }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 pb-3" >
                    <div class="row ">
                        <div class="col-lg-12" style="height:60px;">
                            <label class="pImgRate">
                                <img style="width:30px" src="{{asset('section/game_rate/'.$gameNewId->RATED_ESRB.'.svg') }}" />
                            </label>
                                @if(isset($CommentAll))
                                    <?php $i = 0; $countID = 0;?>
                                    @foreach($CommentAll as $CAC)
                                        @if($CAC->GAME_ID == $gameNewId->GAME_ID)
                                            <?php $i = $i+$CAC->RATING; $countID = $countID+1;?>
                                        @endif
                                    @endforeach
                                    <?php 
                                        if($countID == 0 || $i == 0){
                                            $count = 0;
                                        }else{
                                            $count = $i/$countID;
                                        }
                                        
                                    ?>
                                @endif
                                @foreach($Com_count as $com_count)
                                    @if($com_count->GAME_ID == $gameNewId->GAME_ID)
                                        @foreach($CDownload as $countDown)
                                            @if($countDown->GAME_ID == $gameNewId->GAME_ID)
                                                <label class="pFontDetail">
                                                    <h1 style="color:#fff;margin:0;">
                                                        <a style="color:#f6c12c;">{{round($count, 1)}}/5</a> | 
                                                        {{ $com_count->com_count }} คอมเมนท์</br>
                                                        {{ $countDown->downloads_count }} ดาวน์โหลด
                                                        <!-- <b>104.5</b> &nbsp;ชั่วโมง -->
                                                    </h1>
                                                </label>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                <!-- <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                <b>124</b> &nbsp;Comments</br>
                                <b>15k </b>Downloads &nbsp; &nbsp;| &nbsp; &nbsp;
                                <b>104.5</b> &nbsp;hours -->
                        </div>
                        <div class="col-12 mt-3">
                            <h1 style="color:#fff;">{{ $gameNewId->GAME_NAME }}</br>{{ $gameNewId->RATED_B_L }} • Other</h1>
                        </div>
                        <div class="col-12"><p style="color:#fff;">{{ $gameNewId->GAME_DESCRIPTION }}</p></div>
                    </div>
                    <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                    <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                    <a href="{{ route('GameDetail', ['id'=>$gameNewId->GAME_ID]) }}">
                        <button class="btn_follow7">
                            <p style="margin:0;">รายละเอียด</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!--พบกันเร็วๆนี้-->
<!-- <section class="site-section">
    <div class="container-fluid">
        <div class="row mt-4 ">
            <div class="col-5 text-left" data-aos="fade">
                <h2 class="section-title mb-3 font text-left" style="font-family:myfont;">พบกันเร็วๆนี้</h2>
            </div>
            <div class="col-7 text-right" data-aos="fade">
                <h2 class="section-title mb-3 text-right" style="font-family:myfont;"><a class="game_cat" href="">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
            </div>
        </div>
        <div class="owl-carousel" id="owl-demo5">
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample"><img id="downImg8" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
        </div>
        <div class="collapse" id="collapseExample8">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" />
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1">
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
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


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
            576:{
                items:1.7,
                nav:false
            },
            768:{
                items:2.3,
                nav:false
            },
            992:{
                items:3,
                nav:true
            },
            1280:{
                items:4,
                nav:true
            },
            1360:{
                items:4.2,
                nav:true
            },
            1920:{
                items:6,
                nav:true
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
            576:{
                items:1.7,
                nav:false
            },
            768:{
                items:2.3,
                nav:false
            },
            992:{
                items:3,
                nav:true
            },
            1280:{
                items:4,
                nav:true,
                loop:false
            },
            1360:{
                items:4.2,
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
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:true
            },
            992:{
                items:4,
                nav:true
            },
            1280:{
                items:5,
                nav:true,
                loop:false
            },
            1360:{
                items:6,
                nav:true,
                loop:false
            },
            1920:{
                items:8,
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
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            992:{
                items:4,
                nav:true
            },
            1280:{
                items:5,
                nav:true
            },
            1360:{
                items:6,
                nav:true
            },
            1920:{
                items:8,
                nav:true
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
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    });
</script>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

    <!-- <script>
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
    </script> -->

@endsection