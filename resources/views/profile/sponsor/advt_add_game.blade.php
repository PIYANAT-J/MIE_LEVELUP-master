@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row py-5" e="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3 ">
                <div class="col-12 ">
                    <a href="{{ route('AdvtPackage') }}">
                        <label class="fontAd1 active p">สนับสนุนเงินในเกม</label>
                    </a>
                    <label class="fontAd1 p"> > </label>
                    <a href="{{ route('AdvtManagement', ['id'=>encrypt($package->package_id)]) }}" style="color:#000;">
                        <label class="fontAd1  p" >จัดการแพ็กเกจ</label>
                    </a>
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >เพิ่มเกม</label>
                </div>
            </div>

            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                    @if($packageGame != null)
                        <label class="p" style="margin:5px 0;font-weight:800;">เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( <label style="color:#23c197">{{ count($packageGame)}}</label> / {{$package->package_game}} ) </label>
                    @else
                        <label class="p" style="margin:5px 0;font-weight:800;">เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( <label style="color:#23c197">0</label> / {{$package->package_game}} ) </label>
                    @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 pt-3 pb-2">
                        <button class="typeGamePackage p mb-1 category" id="all" data-toggle="collapse" data-target="#demo">ประเภทเกม</button>
                        <button class="typeGamePackage p mb-1 category" id="hot">เกมยอดนิยม</button>
                        <button class="typeGamePackage p mb-1 category" id="follow">กำลังติดตาม</button>
                        <button class="typeGamePackage p mb-1 category" id="news">เกมใหม่</button>
                        <!-- <div class="col-sm col-md col-lg-3 col-xl-3"> -->
                        <form method="get">
                            <button class="typeGamePackage p mb-1"><i class="icon-update_version p mb-1"></i><span style="text-decoration: underline;">รีเซ็ท</span></button>
                        </form>
                        <!-- </div> -->
                    </div>
                </div>

                <div class="row" >
                    <div id="demo" class="collapse row3 " style="background-color: #f5f5f5;">
                        <div class="row pl-4  mt-3" >
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Action" id="checkbox_1">
                                    <label for="checkbox_1">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Action</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Adventure" id="checkbox_2">
                                    <label for="checkbox_2">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Adventure</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="BBG" id="checkbox_3">
                                    <label for="checkbox_3">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">BBG</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Board Game" id="checkbox_4">
                                    <label for="checkbox_4">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Board Game</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Casual" id="checkbox_5">
                                    <label for="checkbox_5">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Casual</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Console" id="checkbox_6">
                                    <label for="checkbox_6">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Console</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Fantasy" id="checkbox_7">
                                    <label for="checkbox_7">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Fantasy</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Fighting" id="checkbox_8">
                                    <label for="checkbox_8">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Fighting</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Flight" id="checkbox_9">
                                    <label for="checkbox_9">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Flight</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="FPS" id="checkbox_10">
                                    <label for="checkbox_10">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">FPS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Historical" id="checkbox_11">
                                    <label for="checkbox_11">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Historical</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Martail Arts" id="checkbox_12">
                                    <label for="checkbox_12">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Martail Arts</p>
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="MMORPG" id="checkbox_13">
                                    <label for="checkbox_13">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">MMORPG</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="MOBA" id="checkbox_14">
                                    <label for="checkbox_14">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">MOBA</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Music Game" id="checkbox_15">
                                    <label for="checkbox_15">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Music Game</p>
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Puzzle" id="checkbox_16">
                                    <label for="checkbox_16">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Puzzle</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Racing" id="checkbox_17">
                                    <label for="checkbox_17">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Racing</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="RTS" id="checkbox_18">
                                    <label for="checkbox_18">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">RTS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Side Scrolling Game" id="checkbox_19">
                                    <label for="checkbox_19">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Side Scrolling Game </p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Simulation" id="checkbox_20">
                                    <label for="checkbox_20">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Simulation</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Social" id="checkbox_21">
                                    <label for="checkbox_21">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Social</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Sport" id="checkbox_22">
                                    <label for="checkbox_22">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Sport</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Strategy" id="checkbox_23">
                                    <label for="checkbox_23">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Strategy</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Survival" id="checkbox_24">
                                    <label for="checkbox_24">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Survival</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Tactical Combat" id="checkbox_25">
                                    <label for="checkbox_25">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Tactical Combat</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="TBS" id="checkbox_26">
                                    <label for="checkbox_26">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">TBS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="TPS" id="checkbox_27">
                                    <label for="checkbox_27">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">TPS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-lg-1" style="padding:0;">
                                <div class="checkbox-red">
                                    <input type="checkbox" name="geography" value="Trading Card" id="checkbox_28">
                                    <label for="checkbox_28">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;">Trading Card</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mx-5 text-right mb-3">
                            <!-- <button class="btn-cancal-category p mr-2" data-toggle="collapse" data-target="#demo">ยกเลิก</button> -->
                            <!-- <button class="btn-search-category p mr-2">ค้นหา</button> -->
                            <form method="get">
                                <button class="btn-search-category mr-2">ค้นหา</button>
                                @if(isset($gameTypefilter))
                                    <input type="hidden" name="gameType" value="{{$gameTypefilter}}">
                                @else
                                    <input type="hidden" name="gameType">
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6">
                        <label class="checkbox-dark selectAll">
                            <input type="checkbox" id="checkbox_all" name="accept_01" onclick="toggle(this);">
                            <label for="checkbox_all" class="pt-2 pl-2 ml-2">
                                <p style="font-weight:900;">เลือกทั้งหมด</p></label>
                        </label>
                    </div>
                    <div class="col-6 text-right">
                        <form action="{{route('addGame')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <button class="selectAll2 fontAddGame" name="addGame" value="addGame">
                                <p style="margin:0">+ เพิ่มเกม</p>
                                <input type="hidden" name="packageBuy_game" id="data-checked">
                                <input type="hidden" name="packageBuy_invoice" value="{{$package->packageBuy_invoice}}">
                                <input type="hidden" name="package_id" value="{{$package->package_id}}">
                            </button>
                        </form>
                    </div>
                </div>

                <div class="row" id="parent">
                        <?php 
                            $arrayGame = array();
                            $arrayFollowsGame = array(); 
                            if(isset($Follows) && $Follows != null){
                                foreach($Follows as $follow){
                                    $arrayFollowsGame[] = $follow->GAME_ID;
                                }
                            }
                        ?>
                        @if($packageGame != null)
                            @foreach($packageGame as $gameSpon)
                                <?php $arrayGame[] = $gameSpon->gameid; ?>
                            @endforeach
                        @endif
                        {{-- @foreach($game as $gameCustom)
                            @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                <div class="custom-check2 columnAdGame">
                                    <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                    <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                    <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                        <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                    </label>
                                </div>
                            @else
                                <div class="custom-check columnAdGame" >
                                    <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                    <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                    <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                        <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                    </label>
                                </div>
                            @endif
                        @endforeach --}}
                        <!-- ////////////////////////////////////////// -->
                        @foreach($game as $gameCustom)
                            @if(in_array($gameCustom->GAME_ID, $arrayFollowsGame))
                                @if(in_array($gameCustom->GAME_ID, $GameHit))
                                    @if(in_array($gameCustom->GAME_ID, $GamesNew))
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv follow hot news custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv follow hot news custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @else
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv follow hot custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv follow hot custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @endif
                                @else
                                    @if(in_array($gameCustom->GAME_ID, $GamesNew))
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv follow news custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv follow news custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @else
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv follow custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv follow custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            @else
                                @if(in_array($gameCustom->GAME_ID, $GameHit))
                                    @if(in_array($gameCustom->GAME_ID, $GamesNew))
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv hot news custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv hot news custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @else
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv hot custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv hot custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @endif
                                @else
                                    @if(in_array($gameCustom->GAME_ID, $GamesNew))
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv news custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv news custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @else
                                        @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                            <div class="filterDiv all custom-check2 columnAdGame">
                                                <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                                <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @else
                                            <div class="filterDiv all custom-check columnAdGame" >
                                                <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                                <label class="custom-check-elem " for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                                <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                    <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                                </label>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endforeach
                        <!-- <label >
                            <div class="custom-check">
                                <input class="custom-check-input" id="someCheck2" name="someCheck" type="checkbox" />
                                <label class="custom-check-elem" for="someCheck2"></label>
                                <label class="custom-check-label " for="someCheck2">
                                    <img class="bgGameSpon" src="{{asset('section/picture_game/game2.png') }}">
                                </label>
                            </div>
                            <div class="custom-check2">
                                <input class="custom-check-input2 checked" id="someCheck2" name="someCheck" type="checkbox" />
                                <label class="custom-check-elem2" for="someCheck2"></label>
                                <label class="custom-check-label2 " for="someCheck2">
                                    <img class="bgGameSpon" src="{{asset('section/picture_game/game2.png') }}">
                                </label>
                            </div>
                        </label> -->
                </div>
            </div>
        </div>
    </div>
    @if(isset($modal) && $modal == 1)
        <?php 
            $countGame = explode(',',$package->packageBuy_game);
            $i;
        ?>
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" style="font-weight:800;margin:0;">
                        <div class="mt-2">
                            <h1 style="margin:0;font-weight:800;">เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( 
                            <label style="color:#23c197;" id="count-checked">{{ count($countGame)}}</label> ) </h1>
                            </div>
                    </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal">
                        <i class="icon-close_modal" style="font-size: 15px;"></i>
                    </button>
                </div>
                <form action="{{route('addGame')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            @for($i=0;$i < count($countGame);$i++)
                                @foreach($game as $key=>$gameModal)
                                    @if($countGame[$i] == $gameModal->GAME_ID)
                                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4 pl-2" style="padding:0;">
                                            <label class="containerhover1">
                                                <img class="imagehover1" src="{{asset('section/File_game/Profile_game/'.$gameModal->GAME_IMG_PROFILE)}}" />
                                                <label class="middlehover1">
                                                    <img style="cursor:pointer; width:25px;" src="{{asset('icon/trash2.svg')}}">
                                                    <label class="texthover1">ลบ</label>
                                                </label>
                                            </label> 
                                            <label class="p"> 
                                                <label style="color:#000;font-weight:800;margin:0;">{{$gameModal->GAME_NAME}}</label><br>
                                                 {{$gameModal->RATED_B_L}} • Online <br> เวอร์ชั่น 1.03
                                            </label>
                                        </div>
                                        <input type="hidden" name="game_id{{$key}}" value="{{$gameModal->GAME_ID}}">
                                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-8">
                                            <label>
                                                <p class="pl-1" style="font-weight:900;margin:0;">เริ่มต้น</p>
                                                <input class="input2 p pl-2" type="datetime-local" id="dateStart{{$key}}" name="dateStart{{$key}}" value="{{old('dateStart')}}" class="timepicker" />
                                            </label>

                                            <label>
                                                <p class="pl-1" style="font-weight:900;margin:0;">สิ้นสุด</p>
                                                <input class="input2 p pl-2" type="datetime-local" id="dateDeadline{{$key}}" name="dateDeadline{{$key}}" value="{{old('dateDeadline')}}" class="timepicker" />
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            @endfor
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-4">
                            <button class="btn-cancal">
                                <p style="margin:0">ยกเลิก</p>
                            </button>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4 text-right" style="padding-right:0;">
                            <button class="btn-submit" name="submit" value="submit">
                                <p style="margin:0">ยืนยัน</p>
                            </button>
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="hidden" name="package_id" value="{{$package->package_id}}">
                            <input type="hidden" name="packageBuy_invoice" value="{{$package->packageBuy_invoice}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
    </div>
</div>

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<script>
    var $btns = $('.category').click(function() {
        if (this.id == 'all') {
            $('#parent > div').fadeIn(450);
        } else {
            var $el = $('.' + this.id).fadeIn(450);
            $('#parent > div').not($el).hide();
        }
        $btns.removeClass('active');
        $(this).addClass('active');
    })
</script>

<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[name="someCheck"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>

<script>
    $(document).ready(function() {
        $(":checkbox").change(function() {
            var closest = $(this).closest("div.row");
            var countCheckedCheckboxes = $(":checkbox", closest).filter(':checked').length;
            $('#count-checked').html(countCheckedCheckboxes);
            console.log(countCheckedCheckboxes);
            var favorite = [];
            $.each($("input[name='someCheck']:checked"), function(){            
                favorite.push($(this).val());
            });
            document.querySelector('input#data-checked').value = favorite.join(", ")
            console.log(favorite);
            var gameType = [];
            $.each($("input[name='geography']:checked"), function(){            
                gameType.push($(this).val());
            });
            console.log(gameType);
            $('input[name="gameType"]').val(gameType);
        });
    });
</script>

@if(isset($modal) && $modal == 1)
    <script type="text/javascript">
        $(document).ready(function() {
            $('#exampleModalScrollable').modal();
        });
    </script>
@endif

@endsection