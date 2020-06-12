@extends('layout.category_navbar')
@section('content')
    <div class="container-fluid">
        <div class="row my-5 "></div>
        <div class="row my-2 "></div>
        <div class="row bg-wh pt-4">
            <div class="col-lg-1"></div>
            <div class="col-lg-11 pt-3 pb-2">
                <span class="font-category mr-3">ประเภทเกม</span>
                <button class="btn-total-category" >ทั้งหมด</button>
                <button class="btn-total-category" data-toggle="collapse" data-target="#demo">อื่นๆ</button>
            </div>

            <div id="demo" class="collapse row3 bg1">
                <div class="row mx-5 mt-3">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_1">
                                    <label for="checkbox_1" class="font-remember">Action</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_2">
                                    <label for="checkbox_2" class="font-remember">Adventure</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_3">
                                    <label for="checkbox_3" class="font-remember">BBG</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_4">
                                    <label for="checkbox_4" class="font-remember">Board Game</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_5">
                                    <label for="checkbox_5" class="font-remember">Casual</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_6">
                                    <label for="checkbox_6" class="font-remember">Console</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_7">
                                    <label for="checkbox_7" class="font-remember">Fantasy</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_8">
                                    <label for="checkbox_8" class="font-remember">Fighting</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_9">
                                    <label for="checkbox_9" class="font-remember">Flight</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_10">
                                    <label for="checkbox_10" class="font-remember">FPS</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_11">
                                    <label for="checkbox_11" class="font-remember">Historical</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_12">
                                    <label for="checkbox_12" class="font-remember">Martail Arts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_13">
                                    <label for="checkbox_13" class="font-remember">MMORPG</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_14">
                                    <label for="checkbox_14" class="font-remember">MOBA</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_15">
                                    <label for="checkbox_15" class="font-remember">Music Game</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_16">
                                    <label for="checkbox_16" class="font-remember">Puzzle</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_17">
                                    <label for="checkbox_17" class="font-remember">Racing</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_18">
                                    <label for="checkbox_18" class="font-remember">RTS</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_19">
                                    <label for="checkbox_19" class="font-remember" style="line-height: 80%;padding-top:10px;font-size:18px;">Side Scrolling <br>Game </label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_20">
                                    <label for="checkbox_20" class="font-remember">Simulation</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_21">
                                    <label for="checkbox_21" class="font-remember">Social</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_22">
                                    <label for="checkbox_22" class="font-remember">Sport</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_23">
                                    <label for="checkbox_23" class="font-remember">Strategy</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_24">
                                    <label for="checkbox_24" class="font-remember">Survival</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_25">
                                    <label for="checkbox_25" class="font-remember" style="line-height: 80%;padding-top:10px;font-size:18px;">Tactical <br>Combat</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_26">
                                    <label for="checkbox_26" class="font-remember">TBS</label>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_27">
                                    <label for="checkbox_27" class="font-remember">TPS</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_28">
                                    <label for="checkbox_28" class="font-remember"  style="font-size:18px;">Trading Card </label>
                                </div>
                            </div>
                            <div class="col-4 "></div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 text-right mb-3">
                    <button class="btn-cancal-category mr-2" data-toggle="collapse" data-target="#demo">ยกเลิก</button>
                    <button class="btn-search-category mr-2">ค้นหา</button>
                </div>
            </div>
            
            <div class="col-lg-1"></div>
            <div class="col-lg-11 mb-3">
                <button class="btn-game-category"><span class="font-game-category">เกมยอดนิยม</span><br><span class="font-game-category2">200 เกม<span></button>
                <button class="btn-game-category mt-3"><span class="font-game-category">กำลังติดตาม</span><br><span class="font-game-category2">15 เกม<span></button>
                <button class="btn-game-category mt-3"><span class="font-game-category">เกมใหม่</span><br><span class="font-game-category2">5 เกม<span></button>
                <button class="btn-game-category mt-3"><span class="font-game-category">เกมที่เล่นล่าสุด</span><br><span class="font-game-category2">10 เกม<span></button>
                <button class="btn-game-category mt-3"><span class="font-game-category">เร็วๆนี้</span><br><span class="font-game-category2">20 เกม<span></button>
            </div>
        </div>
        
        <div class="row bg1">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 ">
                <div class="row">
                    <div class="col-lg-9">
                        <select class="selectpicker" id="mySelect" data-live-search="true">
                            <option class="option-select-rate">เรทเกม</option>
                            <option class="option-select-rate">EC : Early Childhood</option>
                            <option class="option-select-rate">E : Everyone</option>
                            <option class="option-select-rate">E10+ : Everyone 10+</option>
                            <option class="option-select-rate">T : Teen</option>
                            <option class="option-select-rate">M : Mature</option>
                            <option class="option-select-rate">AO : Adults Only</option>
                            <option class="option-select-rate">RP : Rating Pending</option>
                        </select>

                        <select class="selectpicker" id="mySelect" data-live-search="true">
                            <option class="option-select-rate">เรทเนื้อหาเกม</option>
                            <option class="option-select-rate">Discrimination</option>
                            <option class="option-select-rate">Drugs</option>
                            <option class="option-select-rate">Fear</option>
                            <option class="option-select-rate">Gambling</option>
                            <option class="option-select-rate">Sex</option>
                            <option class="option-select-rate">Violence</option>
                            <option class="option-select-rate">Online</option>
                            <option class="option-select-rate">Other</option>
                        </select>
        
                        <select class="selectpicker" id="mySelect" data-live-search="true">
                            <option class="option-select-rate">คะแนน</option>
                            <option class="option-select-rate">5 ดาว</option>
                            <option class="option-select-rate">4 ดาว</option>
                            <option class="option-select-rate">3 ดาว</option>
                            <option class="option-select-rate">2 ดาว</option>
                            <option class="option-select-rate">1 ดาว</option>
                        </select>
                        <button class="btn-reset"><i class="icon-update_version" style="font-size:15px;"> </i><span style="text-decoration: underline;">รีเซ็ท</span></button>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="row bg1">
            <div class="col-lg-1 bg">ซ้าย</div>
            <div class="col-lg-10 ">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="item imgteaser">
                            <a>
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                                <img class="game_3" src="{{asset('section/picture_game/game6.png') }}" />
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
                    </div>
                </div>
            </div>
            <div class="col-lg-1 bg">ขวา</div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('button').on('click', function(){
        $('button').removeClass('active');
        $(this).addClass('active');
    });
</script>

<script>
    $('.mySelect').selectpicker();
</script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1,
        nav: true
    });
</script>
@endsection