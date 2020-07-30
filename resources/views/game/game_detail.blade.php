@extends('layout.detail_navbar')

@section('style')
<style>
    .filterDiv {
    /* float: left; */
    /* background-color: #2196F3; */
    /* color: #ffffff; */
    /* width: 100%;
    line-height: 100px; */
    /* text-align: center; */
    /* margin: 2px; */
    display: none;
    }

    .show {
        width: 100%;
        display: block;
    }

    /* .container {
    margin-top: 20px;
    overflow: hidden;
    } */
</style>
@endsection

@section('content')
<div class="container-fluid">
    @foreach($Detail as $detailGame)
        <div class="row my-5 "></div>
        <div class="row my-2 "></div>
        <div class="row dark">
            <div class="col-lg-3 font_back">
                <a href="{{ url('/') }}" style="color:#fff;"><i class="icon-prev mx-2"></i>Back</a>
            </div>
            <div class="col-lg-6 ">
                <div class="owl-carousel" id="owl-demo1">
                    <div class="item" >
                        <!-- <iframe class="video_detail2" src="{{ $detailGame->GAME_VDO_LINK }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/Pq_mbTSR-a0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                    <div class="item">
                        <img class="img-detail"   src="{{asset('section/picture_game/pubg.jpeg') }}" />
                    </div>
                    <div class="item">
                        <img class="img-detail"   src="{{asset('section/picture_game/pubg_lite.jpeg') }}" />
                    </div>
                </div>
                <div class="btns">
                    <div class="customNextBtn"><i class='icon-next'></i></div>
                    <div class="customPreviousBtn"><i class='icon-prev'></i></div>
                </div>
            </div>
        </div>

        <div class="row mb-0" style="background-color: #141621;">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="row mt-3 ml-0">
                    <div class="col-1 pt-3"><img style="width:50px;" src="{{asset('section/game_rate/'.$detailGame->RATED_ESRB.'.svg') }}" /></div>
                    <div class="col-7 ">
                        <p class="font_detail3 pt-4 ml-1 ">
                            @if(isset($CommentAll))
                                <?php $i = 0; ?>
                                @foreach($CommentAll as $CAC)
                                    <?php $i = $i+$CAC->RATING; ?>
                                @endforeach
                                <?php 
                                    if($CommentAll->count() == 0 || $i == 0){
                                        $count = 0;
                                    }else{
                                        $count = $i/$CommentAll->count();
                                    }
                                ?>
                            @endif
                            <b class="mr-2" style="font-family:myfont;color:#f6c12c; font-size:0.9em;">{{round($count, 1)}}/5</b>|<b class="ml-2 font_detail4" >{{$CommentAll->count()}} </b><label style="font-size:0.8em;">ความคิดเห็น</label></br>
                            <b class="font_detail4">{{ $DownloadAll->count() }} </b><label style="font-size:0.8em;">ดาวน์โหลด</label> &nbsp; &nbsp;
                            <!-- <b class="font_detail4">104.5</b> &nbsp; ชั่วโมง -->
                        </p>
                    </div>
                    <div class="col-3 mr-3">
                        @guest
                            <a href="{{ route('login-levelUp') }}">
                                <button class="follow-before"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                                <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                            </a>
                        @else
                            @if(isset($FollowDetail))
                                <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="follow-after"><span class="icon-follow_wh" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">กำลังติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_ID" value="{{ $FollowDetail->FOLLOW_ID }}">
                                    </button>
                                </form>
                                @if(isset($Download))
                                    <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before" style="font-size:0.9em;">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @endif
                                @else
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before" style="font-size:0.9em;">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @else
                                        @if(Auth::user()->users_type == '1')
                                            <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                    <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                    <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                                </button>
                                            </form>
                                        @endif
                                        
                                    @endif
                                @endif
                            @else
                                <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="follow-before" ><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $detailGame->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button >
                                </form>
                                @if(isset($Download))
                                    <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before" style="font-size:0.9em;">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @endif
                                @else
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before" style="font-size:0.9em;">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @else
                                        @if(Auth::user()->users_type == '1')
                                            <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                    <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                    <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                                </button >
                                            </form>
                                        @endif
                                        
                                    @endif
                                @endif
                            @endif
                            <!-- <button class="follow-before"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                            
                            <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                            <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                            <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                            <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                            <button class="follow-after mt-1"><span class="icon-support_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">สนับสนุนแล้ว</b></button > -->
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="background-color: #141621;">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 pl-4">
                <div class="font_game_name">{{ $detailGame->GAME_NAME }}</div>
                <div class="w-100"></div>
                <div class="rate_detail">{{ $detailGame->RATED_B_L }}•Online</div>
                <div class="des_detail mb-3">{{ $detailGame->GAME_DESCRIPTION }}
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <div class="row grey py-3" style="background-color: #202433;">
            <div class="col-lg-3"></div>
            <div class="col-lg-2 pl-4">
                <div class="dev_detail">ผู้พัฒนา</div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ $detailGame->name }} {{ $detailGame->surname }}</div>
            </div>
            <div class="col-lg-1 pl-4">
                <div class="dev_detail">ขนาดไฟล์ </div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ $detailGame->GAME_SIZE }}</div>
            </div>
            <div class="col-lg-1 pl-4">
                <div class="dev_detail">เวอร์ชัน</div>
                <div class="w-100"></div>
                <div class="dev_detail2">12.0.1</div>
            </div>
            <div class="col-lg-2 pl-4">
                <div class="dev_detail">วันที่เผยพร่ </div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ Illuminate\Support\Str::limit($detailGame->GAME_APPROVE_DATE, 10, $end='') }}</div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    @endforeach
    <!-- <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 pl-4">
            <div class="font_game_name">PlayerUnknown’s Battlegrounds</div>
            <div class="w-100"></div>
            <div class="rate_detail">Online • Other</div>
            <div class="des_detail mb-3">
            PlayerUnknown’s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published 
            by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous 
            mods that were created by Brendan “PlayerUnknown” Greene for other games, inspired by the 2000 Japanese film 
            Battle Royale, and expanded into a standalone game under Greene’s creative direction. In the game, up to one 
            hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding 
            getting killed themselves. The available safe area of the game’s map decreases in size over time, directing 
            surviving players into tighter areas to force encounters. The last player or team standing wins the round.
            Battlegrounds was first released for Microsoft Windows via Steam’s early access beta program in March 2017, 
            with a full release in December 2017. The game was also released by Microsoft Studios for the Xbox One via 
            its Xbox Game Preview program that same month, and officially released in September 2018. A free-to-play 
            mobile version for Android and iOS was released in 2018, in addition to a port for the PlayStation 4. 
            A version for the Stadia streaming platform was released in April 2020. Battlegrounds is one of 
            the best-selling and most-played video games of all time. By 2019, the PC and console versions of the game 
            have sold over 60 million copies, in addition to PUBG Mobile having crossed 600 million downloads.
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div> -->

    <div class="row pt-4" style="background-color: #141621;">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 rate_bottom">
            <div class="row">
                <div class="col-6 text-left pl-4">
                    <span class="font_rate3">การจัดอันดับ</span>
                </div>
                @if(isset($CommentAll))
                    <?php $i = 0; ?>
                    @foreach($CommentAll as $CAC)
                        <?php $i = $i+$CAC->RATING; ?>
                    @endforeach
                    <?php 
                        if($CommentAll->count() == 0 || $i == 0){
                            $count = 0;
                        }else{
                            $count = $i/$CommentAll->count();
                        }
                    ?>
                @endif
                <div class="col-6 pb-4 text-right  ">
                    <span class="rate" >{{round($count, 1)}}/5</span>
                    @for($i=1;$i <= 5 ;$i++)
                        @if($i <= round($count, 1))
                            <span style="font-size: 1.3em;" class="fa fa-star checked"></span>
                        @else
                            <span style="font-size: 1.3em;" class="fa fa-star"></span>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row pt-3" style="background-color: #141621;">
        <div class="col-lg-3"></div>
            <div id="filters" class="filters button-group col-lg-6">
                <!-- <button class="totalComment fontTotalComment active" data-filter="*"> ทั้งหมด (123)</button>
                <button class="Comment fontComment" data-filter=".FI"> 5 ดาว (100)</button>
                <button class="Comment fontComment" data-filter=".FO"> 4 ดาว (20)</button>
                <button class="Comment fontComment" data-filter=".TE"> 3 ดาว (2)</button>
                <button class="Comment fontComment" data-filter=".TO"> 2 ดาว (1)</button>
                <button class="Comment fontComment" data-filter=".ON"> 1 ดาว (0)</button> -->
                <button class="totalComment fontTotalComment active" onclick="filterSelection('all')"> ทั้งหมด (1230)</button>
                <button class="Comment fontComment" onclick="filterSelection('FI')"> 5 ดาว (100)</button>
                <button class="Comment fontComment" onclick="filterSelection('FO')"> 4 ดาว (20)</button>
                <button class="Comment fontComment" onclick="filterSelection('TE')"> 3 ดาว (2)</button>
                <button class="Comment fontComment" onclick="filterSelection('TO')"> 2 ดาว (1)</button>
                <button class="Comment fontComment" onclick="filterSelection('ON')"> 1 ดาว (0)</button>
            </div>
        </div>
    </div>

    <div class="row pt-3 " style="background-color: #141621;">
        <div class="col-lg-3 "></div>
        <div class="col-lg-6 commentArea pl-4">
            @if(isset($CommentAll))
                @foreach($CommentAll as $commentAll)
                    @if($commentAll->RATING == 5)
                    <div class="row rate_bottom">
                        <div class="filterDiv FI mt-2 rate_bottom">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 0;">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-2 commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="row commentDetail ml-3 my-3">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 4)
                    <div class="row rate_bottom">
                        <div class="filterDiv FO mt-2 rate_bottom">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 0;">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="col-8 commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-lg-12 commentDetail my-3">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 3)
                    <div class="row rate_bottom">
                        <div class="filterDiv TE mt-2">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 0;">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-lg-12 commentDetail my-3">{{ $commentAll->COMMENT }}</div>
                            </div> 
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 2)
                    <div class="row rate_bottom">
                        <div class="filterDiv TO mt-2 ">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 0;">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-lg-12 commentDetail my-3 ">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row rate_bottom">
                        <div class="filterDiv ON mt-2">
                            <div class="row">
                                <div class="col-lg-12" style="margin: 0;">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label> 
                                </div>
                            <div class="row commentDetail ml-3 my-3">{{ $commentAll->COMMENT }}</div>
                        </div>
                    </div>
                    @endif
                    <!-- <div class="row mt-2 rate_bottom">
                        <div class="col-2 text-center">
                            <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                        </div>
                        <div class="col-8 commenter">{{ $commentAll->name }}.{{ $commentAll->surname }}</br>
                            @for($i=1;$i <= 5 ;$i++)
                                @if($i <= $commentAll->RATING)
                                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                @else
                                    <span style="font-size: 15px;" class="fa fa-star"></span>
                                @endif
                            @endfor
                        </div> 
                        <div class="row commentDetail ml-3 my-3">{{ $commentAll->COMMENT }}</div>
                    </div> -->
                @endforeach
            @endif
        </div>
    </div>
    @if(isset(Auth::user()->id))
        @if(isset($Download))
            @if(isset($Comment))
                @if(Auth::user()->users_type == 1)
                    <div class="row pt-4" style="background-color: #141621;">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ml-2 pr-4"> 
                            <label style="color:#ffffff;">ความคิดเห็นของฉัน</label>
                            <div class="row mt-2 rate_bottom">
                                <div class="col-lg-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$Comment->GUEST_USERS_IMG) }}"/>
                                    <label class="commenter">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</br>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $Comment->RATING)
                                                <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                            @else
                                                <span style="font-size: 15px;" class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-lg-12 commentDetail my-3">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                <!-- @elseif(Auth::user()->users_type == 2)
                    <div class="row pt-4">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ml-2 pr-4"> 
                            <div class="row mt-2 rate_bottom">
                                <div class="col-2 text-center">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$Comment->DEV_IMG) }}"/>
                                </div>
                                <div class="col-8 commenter">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</br>
                                @for($i=1;$i <= 5 ;$i++)
                                    @if($i <= $Comment->RATING)
                                        <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                    @else
                                        <span style="font-size: 15px;" class="fa fa-star"></span>
                                    @endif
                                @endfor
                                </div>
                                <div class="row commentDetail ml-3 my-3">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row pt-4">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ml-2 pr-4"> 
                            <div class="row mt-2 rate_bottom">
                                <div class="col-2 text-center">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$Comment->SPON_IMG) }}"/>
                                </div>
                                <div class="col-8 commenter">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</br>
                                @for($i=1;$i <= 5 ;$i++)
                                    @if($i <= $Comment->RATING)
                                        <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                    @else
                                        <span style="font-size: 15px;" class="fa fa-star"></span>
                                    @endif
                                @endfor
                                </div>
                                <div class="row commentDetail ml-3 my-3">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                @endif -->
            @else
                <div class="row pt-4" style="background-color: #141621;">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 ml-2 pr-4"> 
                        <form action="{{ route('Comment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="RATING" id="rating-input" min="1" max="5" class="d-none">
                            <div class="rating" role="optgroup">
                                <span class="fontScoreComment mr-2">ระดับคะแนน</span>
                                <i class="fa fa-star-o rating-star" id="rating-1" data-rating="1" tabindex="0" aria-label="Rate as one out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-2" data-rating="2" tabindex="0" aria-label="Rate as two out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-3" data-rating="3" tabindex="0" aria-label="Rate as three out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-4" data-rating="4" tabindex="0" aria-label="Rate as four out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-5" data-rating="5" tabindex="0" aria-label="Rate as five out of 5 stars" role="radio"></i>
                            </div>
                            <textarea name="COMMENT" class="newComment_textarea" rows="8" placeholder="แสดงความคิดเห็น"></textarea>
                            <button class="btn-newComment">ตกลง
                                <input type="hidden" name="submit" value="submit">
                                <input type="hidden" name="COMMENT_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            @endif
        @endif
    @endif

    <div class="row pt-4" style="background-color: #141621;">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-6 text-left">
                    <span class="font_rate3">เกมใกล้เคียง</span>
                </div>
                <div class="col-6 text-right mt-2">
                    <h2 style="font-family:myfont;font-size:1.5em;"><a class="game_cat" href="{{ route('gameCategory') }}">ดูทั้งหมด </a><img style="padding-top:0;" src="{{asset('icon/next1.svg') }}" /></h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="container-fluid pb-3" style="background-color: #141621;">
        <div class="owl-carousel" id="owl-demo">
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game2.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game3.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game4.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game5.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game6.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game7.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game8.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game9.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game10.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" ><span class="icon-follow_wh " style="font-size:1em; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:1em;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic_cat" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name_cat">
                            <b style="font-size: 1em;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 1em;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <!-- <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button> -->
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade mymodal" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color: #000;">กรุณาเลือกช่วงเวลาในการสนับสนุน</h4>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>

                <div class="modal-body">
                    <div class="containner-fluid">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-modal" src="{{asset('section/picture_game/game2.png') }}" />
                            </div>
                            <div class="col-sm-6">
                                <a class="font-gamename-modal" style="color: #000;">PlayerUnknown’s Battlegrounds</a></br>
                                <a class="font-rate-modal">Online • Other</a></br>
                                <a class="font-rate-modal">เวอร์ชัน 12.0.1</a></br>
                            </div>
                            <div class="col-sm-3 text-center">
                                <a class="font-gamename-modal" style="color: #000;">เลือกช่วงเวลา</a></br>
                                <div class="md-form md-outline">
                                    <input type="time" id="default-picker" class="timepicker" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row rate_top mx-0">
                    <div class="col-6 text-left my-2">
                        <button type="button" class="btn-cancal" data-dismiss="modal">ยกเลิก</button>
                    </div>  
                    <div class="col-6 text-right my-2">
                        <button type="button" class="btn-submit" data-dismiss="modal">ยืนยัน</button>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div id="filters">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="Comment fontComment" onclick="filterSelection('cars')"> 5 ดาว (100)</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn" onclick="filterSelection('colors')"> Colors</button>
</div> -->

<!-- <div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div> -->
@endsection

@section('script')

<script>
    $(document).ready(function() {
    
        $("#owl-demo").owlCarousel({
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
$(document).ready(function(){
  var owl = $('#owl-demo1');
  owl.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items: 1,
    dots: false,
  });
  
  // Custom Button
  $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
  });
  $('.customPreviousBtn').click(function() {
    owl.trigger('prev.owl.carousel');
  });
  
});
</script>

<script>
    $(document).ready(function() {
 
 $("#owl-demo3").owlCarousel({
     navigation : true, // Show next and prev buttons
     slideSpeed : 300,
     paginationSpeed : 400,
     singleItem:true
     // "singleItem:true" is a shortcut for:
     // items : 1, 
     // itemsDesktop : false,
     // itemsDesktopSmall : false,
     // itemsTablet: false,
     // itemsMobile : false
 });
});
</script>

<script>
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
    $(document).ready(function () {
        function setRating(rating) {
            $('#rating-input').val(rating);
            // fill all the stars assigning the '.selected' class
            $('.rating-star').removeClass('fa-star-o').addClass('selected');
            // empty all the stars to the right of the mouse
            $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
        }
        
        $('.rating-star')
        .on('mouseover', function(e) {
            var rating = $(e.target).data('rating');
            // fill all the stars
            $('.rating-star').removeClass('fa-star-o').addClass('fa-star');
            // empty all the stars to the right of the mouse
            $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
        })
        .on('mouseleave', function (e) {
            // empty all the stars except those with class .selected
            $('.rating-star').removeClass('fa-star').addClass('fa-star-o');
        })
        .on('click', function(e) {
            var rating = $(e.target).data('rating');
            setRating(rating);
        })
        .on('keyup', function(e){
            // if spacebar is pressed while selecting a star
            if (e.keyCode === 32) {
            // set rating (same as clicking on the star)
            var rating = $(e.target).data('rating');
            setRating(rating);
            }
        });
    });
</script>

<script>
    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
    element.className = arr1.join(" ");
    }

// Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("filters");
    var btns = btnContainer.getElementsByClassName("Comment");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
</script>
@endsection