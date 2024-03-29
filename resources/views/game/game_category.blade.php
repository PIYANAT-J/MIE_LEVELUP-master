@extends('layout.category_navbar')

@section('style')
<style>
    .filterDiv {
        /* float: left;
        background-color: #2196F3;
        color: #ffffff;
        width: 100%;
        line-height: 100px;
        text-align: center;
        margin: 2px; */
        display: none;
    }

    .show {
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
    <div class="row py-5 " style="background-color: #202433;"></div>
    <div class="row pt-4" style="background-color: #202433;box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.42);">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-11 col-xl-11 pt-3 pb-2" id="filters">
            <label><h4 class="font-category mr-3">ประเภทเกม</h4></label>
            <button class="btn-total-category category active" id="all"><p style="margin:0;">ทั้งหมด</p></button>
            <button class="btn-total-category " data-toggle="collapse" data-target="#demo"><p style="margin:0;">อื่นๆ</p></button>
        </div>

        <div id="demo" class="collapse row3 bg1" style="background-color: #141621;">
            <div class="row mx-5 mt-3" >
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Action" id="checkbox_1">
                        <label for="checkbox_1">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Action</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Adventure" id="checkbox_2">
                        <label for="checkbox_2">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Adventure</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="BBG" id="checkbox_3">
                        <label for="checkbox_3">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">BBG</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Board Game" id="checkbox_4">
                        <label for="checkbox_4">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Board Game</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Casual" id="checkbox_5">
                        <label for="checkbox_5">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Casual</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Console" id="checkbox_6">
                        <label for="checkbox_6">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Console</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Fantasy" id="checkbox_7">
                        <label for="checkbox_7">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Fantasy</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Fighting" id="checkbox_8">
                        <label for="checkbox_8">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Fighting</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Flight" id="checkbox_9">
                        <label for="checkbox_9">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Flight</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="FPS" id="checkbox_10">
                        <label for="checkbox_10">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">FPS</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 -sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Historical" id="checkbox_11">
                        <label for="checkbox_11">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Historical</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Martail Arts" id="checkbox_12">
                        <label for="checkbox_12">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Martail Arts</p>
                        </label>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="MMORPG" id="checkbox_13">
                        <label for="checkbox_13">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">MMORPG</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="MOBA" id="checkbox_14">
                        <label for="checkbox_14">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">MOBA</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Music Game" id="checkbox_15">
                        <label for="checkbox_15">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Music Game</p>
                        </label>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Puzzle" id="checkbox_16">
                        <label for="checkbox_16">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Puzzle</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Racing" id="checkbox_17">
                        <label for="checkbox_17">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Racing</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="RTS" id="checkbox_18">
                        <label for="checkbox_18">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">RTS</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Side Scrolling Game" id="checkbox_19">
                        <label for="checkbox_19">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Side Scrolling Game </p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Simulation" id="checkbox_20">
                        <label for="checkbox_20">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Simulation</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Social" id="checkbox_21">
                        <label for="checkbox_21">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Social</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Sport" id="checkbox_22">
                        <label for="checkbox_22">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Sport</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 -sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Strategy" id="checkbox_23">
                        <label for="checkbox_23">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Strategy</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Survival" id="checkbox_24">
                        <label for="checkbox_24">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Survival</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Tactical Combat" id="checkbox_25">
                        <label for="checkbox_25">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Tactical Combat</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="TBS" id="checkbox_26">
                        <label for="checkbox_26">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">TBS</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="TPS" id="checkbox_27">
                        <label for="checkbox_27">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">TPS</p>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" name="geography" value="Trading Card" id="checkbox_28">
                        <label for="checkbox_28">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Trading Card</p>
                        </label>
                    </div>
                </div>
            </div>

            <div class="mx-5 text-right mb-3">
                <!-- <button class="btn-cancal-category mr-2" id="clear_checkbox" data-toggle="collapse" data-target="#demo"><p style="margin:0;">ยกเลิก</p></button> -->
                <form method="get">
                    <button class="btn-search-category mr-2"><p style="margin:0;">ค้นหา</p></button>
                    @if(isset($gameTypefilter) || isset($gameEsrbfilter))
                        <input type="hidden" name="gameType" value="{{$gameTypefilter}}">
                        <input type="hidden" name="RATED_ESRB" value="{{$gameEsrbfilter}}">
                        <input type="hidden" name="RATED_B_L" value="{{$gameBLfilter}}">
                    @else
                        <input type="hidden" name="gameType">
                        <input type="hidden" name="RATED_ESRB">
                        <input type="hidden" name="RATED_B_L">
                    @endif
                </form>
            </div>
        </div>
        
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-11 col-xl-11 mb-3" id="filters">
            <button class="btn-game-category category mb-1" id="hot">
                <h1 style="color: #fff;font-weight:800;">เกมยอดนิยม</h1>
                <h1 style="color: #b1b7bc;margin:0;">{{ count($GameHit) }} เกม</h1>
            </button>
            @auth
            <button class="btn-game-category category mb-1" id="follow">
                <h1 style="color: #fff;font-weight:800;">กำลังติดตาม</h1>
                <h1 style="color: #b1b7bc;margin:0;">{{ $Follows->count() }} เกม</h1>
            </button>
            @endauth
            <button class="btn-game-category category mb-1" id="news">
                <h1 style="color: #fff;font-weight:800;">เกมใหม่</h1>
                <h1 style="color: #b1b7bc;margin:0;">{{ count($GamesNew) }} เกม</h1>
            </button>
            <!-- <button class="btn-game-category mt-3"><span class="font-game-category">เกมที่เล่นล่าสุด</span><br><span class="font-game-category2">10 เกม<span></button>
            <button class="btn-game-category mt-3"><span class="font-game-category">เร็วๆนี้</span><br><span class="font-game-category2">20 เกม<span></button> -->
        </div>
    </div>
    
    <div class="row" style="background-color: #141621;">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-11 col-xl-11">
            <div class="row">
                <div class="col-sm col-md col-lg-3 col-xl-3">
                    <!-- <button class="category rated_esrb d-none"></button> -->
                    <select class="selectCat p my-2" name="RATED_ESRB">
                        <option value="">เรทเกม</option>
                        <option value="EarlyChildhood">EC : Early Childhood</option>
                        <option value="Everyone">E : Everyone</option>
                        <option value="Everyone10">E10+ : Everyone 10+</option>
                        <option value="Teen">T : Teen</option>
                        <option value="Mature">M : Mature</option>
                        <option value="AdultsOnly">AO : Adults Only</option>
                        <option value="RatingPending">RP : Rating Pending</option>
                    </select>
                </div>
                <div class="col-sm col-md col-lg-3 col-xl-3">
                    <!-- <button class="category rated_b_l d-none"></button> -->
                    <select class="selectCat p my-2" name="RATED_B_L">
                        <option value="">เลือกเนื้อหา</option>
                        <option value="Discrimination">Discrimination : มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</option>
                        <option value="Drugs">Drugs : มีการใช้สารเสพติดในเกม</option>
                        <option value="Fear">Fear : มีการใช้ความกลัวเข้ามาอยู่ในเกม</option>
                        <option value="Gambling">Gambling : มีเรื่องของการพนันอยู่ในเกม</option>
                        <option value="Sex">Sex : มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</option>
                        <option value="Violence">Violence : มีการใช้ความรุนแรงภายในเกม</option>
                        <option value="Online">Online : เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</option>
                        <option value="Other">Other : อื่นๆ</option>
                    </select>
                </div>
                <div class="col-sm col-md col-lg-3 col-xl-3">
                    <button class="category rating d-none"></button>
                    <select class="selectCat p my-2" name="RATING">
                        <option class="p" value="all">คะแนน</option>
                        <option class="p" value="5">5 ดาว</option>
                        <option class="p" value="4">4 ดาว</option>
                        <option class="p" value="3">3 ดาว</option>
                        <option class="p" value="2">2 ดาว</option>
                        <option class="p" value="1">1 ดาว</option>
                    </select>
                </div>
                <div class="col-sm col-md col-lg-3 col-xl-3">
                    <form method="get">
                        <button class="btn-reset p">
                            <i class="icon-update_version"> </i>
                            <span style="text-decoration: underline;">รีเซ็ท</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-xl-1"></div>
    </div>

    <div class="row" style="background-color: #141621;">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-10 col-xl-10 rowCat ">
            <div class="row" id="parent">
                <?php 
                    $arrayFollowsGame = array(); 
                    // $arrayGameHit = array();
                ?>
                @if(isset($Follows) && $Follows != null)
                    @foreach($Follows as $follow)
                        <?php $arrayFollowsGame[] = $follow->GAME_ID; ?>
                    @endforeach
                @endif
                @for($i = 0; $i < count($Games); $i++)
                    @guest
                        @if(in_array($Games[$i]['GAME_ID'], $GameHit))
                            @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                <div class="filterDiv hot news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                    <a href="{{ route('login-levelUp') }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                    <span class="desc">
                                        <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:1em;">กำลังติดตาม</b></button > -->
                                        <a href="{{route('login-levelUp')}}">
                                            <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            @else
                                <div class="filterDiv hot {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                    <a href="{{ route('login-levelUp') }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                    <span class="desc">
                                        <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:1em;">กำลังติดตาม</b></button > -->
                                        <a href="{{route('login-levelUp')}}">
                                            <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            @endif
                        @else
                            @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                <div class="filterDiv news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                    <a href="{{ route('login-levelUp') }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                    <span class="desc">
                                        <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:1em;">กำลังติดตาม</b></button > -->
                                        <a href="{{route('login-levelUp')}}">
                                            <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            @else
                                <div class="filterDiv all {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                    <a href="{{ route('login-levelUp') }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                    <span class="desc">
                                        <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:1em;">กำลังติดตาม</b></button > -->
                                        <a href="{{route('login-levelUp')}}">
                                            <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            @endif
                        @endif
                    @else
                        @if(in_array($Games[$i]['GAME_ID'], $arrayFollowsGame))
                            @if(in_array($Games[$i]['GAME_ID'], $GameHit))
                                @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                    <div class="filterDiv follow hot news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                        <span class="desc">
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowingCat" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:3px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowingCat">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @else
                                    <div class="filterDiv follow hot {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                        <span class="desc">
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowingCat" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:3px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowingCat">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @endif
                            @else
                                @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                    <div class="filterDiv follow news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                        <span class="desc">
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowingCat" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:3px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowingCat">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @else
                                    <div class="filterDiv follow {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" /></a>
                                        <span class="desc">
                                            <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowingCat" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                    <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:3px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowingCat">กำลังติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @endif
                            @endif
                        @else
                            @if(in_array($Games[$i]['GAME_ID'], $GameHit))
                                @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                    <div class="filterDiv hot news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}">
                                            <img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" />
                                        </a>
                                        <span class="desc">
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $Games[$i]['GAME_ID'] }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $Games[$i]['GAME_NAME'] }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @else
                                    <div class="filterDiv hot {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}">
                                            <img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" />
                                        </a>
                                        <span class="desc">
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $Games[$i]['GAME_ID'] }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $Games[$i]['GAME_NAME'] }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @endif
                            @else
                                @if(in_array($Games[$i]['GAME_ID'], $GamesNew))
                                    <div class="filterDiv news {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}">
                                            <img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" />
                                        </a>
                                        <span class="desc">
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $Games[$i]['GAME_ID'] }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $Games[$i]['GAME_NAME'] }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @else
                                    <div class="filterDiv all {{$Games[$i]['RATED_B_L']}} {{$Games[$i]['RATED_ESRB']}} {{$Games[$i]['RATING']}} col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2" style="padding:5px;">
                                        <a href="{{ route('GameDetail', ['id'=>encrypt($Games[$i]['GAME_ID'])]) }}">
                                            <img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$Games[$i]['GAME_IMG_PROFILE']) }}" />
                                        </a>
                                        <span class="desc">
                                            <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnFollowCat" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNfollowCat" style="margin:0;">ติดตาม</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="GAME_ID" value="{{ $Games[$i]['GAME_ID'] }}">
                                                    <input type="hidden" name="GAME_NAME" value="{{ $Games[$i]['GAME_NAME'] }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endguest
                @endfor
            </div>
        </div>
        <div class="col-lg-1 col-xl-1"></div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>

<script>
    var $btns = $('.category').click(function() {
        if (this.id == 'all') {
            $('#parent > div').fadeIn(450);
        } else {
            var $el = $('.' + this.id).fadeIn(450);
            $('#parent > div').not($el).hide();
            // var $btns1 = $('.category.rated_b_l').click(function(){
            //     var $el1 = $('.' + this.id).fadeIn(450);
            //     $('#parent > div').not($el1).hide();
            // });
            // $btns1.removeClass('active');
            // $(this).addClass('active');
        }
        $btns.removeClass('active');
        $(this).addClass('active');
    })
</script>

<script>
    $(document).ready(function() {
        $(":checkbox").change(function() {
            var gameType = [];
            var closest = $(this).closest("div.row");
            $.each($("input[name='geography']:checked"), function(){            
                gameType.push($(this).val());
            });
            console.log(gameType);
            $('input[name="gameType"]').val(gameType);
        });
        // var rated_esrb = $('select[name="RATED_ESRB"] option').filter(':selected').val();
        // console.log(rated_esrb);
        // $("#clear_checkbox").click(function(){
        //     $("input[name='geography']").prop("checked", false);
        // });
        // console.log(gameType);
    });
</script>

<script>
    $("select[name='RATED_ESRB']").change(function() {
        var esrb = $(this).val();
        $('input[name="RATED_ESRB"]').val(esrb);
        $('.btn-search-category').click();
        // $('.category.rated_esrb').attr('id', esrb);
        // $('.category.rated_esrb').click();
            // var btnThis = $(this);
            // alert(esrb);

            // $.ajax({
            //     type: 'get',
            //     data: {
            //         "_token": "{{ csrf_token() }}",
            //         amount:amount,
            //         paymentType:paymentType,
            //         transeection_id:transeection_id,
            //         package_id:package_id,
            //         submit:submit,
            //     },
            //     success: function(response) {
            //         console.log(response);
            //     },
            //     error: function(response) {}
            // });
    });
    // .trigger( "change" );
</script>

<script>
    $("select[name='RATED_B_L']").change(function() {
        var b_l = $(this).val();
        $('input[name="RATED_B_L"]').val(b_l);
        $('.btn-search-category').click();
        // $('.category.rated_b_l').attr('id', b_l);
        // $('.category.rated_b_l').click();
    });
    // .trigger( "change" );rating
</script>

<script>
    $("select[name='RATING']").change(function() {
        var rating = $(this).val();
        $('.category.rating').attr('id', rating);
        $('.category.rating').click();
    });
</script>

@endsection