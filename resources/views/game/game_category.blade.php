@extends('layout.category_navbar')

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
    <div class="row my-5 "></div>
    <div class="row my-2 "></div>
    <div class="row bg-wh pt-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-11 pt-3 pb-2" id="filters">
            <span class="font-category mr-3">ประเภทเกม</span>
            <button class="btn-total-category active" onclick="filterSelection('all')">ทั้งหมด</button>
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
        <div class="col-lg-11 mb-3" id="filters">
            <button class="btn-game-category" onclick="filterSelection('hot')"><span class="font-game-category">เกมยอดนิยม</span><br><span class="font-game-category2">{{ $Games->count() }} เกม<span></button>
            @auth
                <button class="btn-game-category mt-3" onclick="filterSelection('follow')"><span class="font-game-category">กำลังติดตาม</span><br><span class="font-game-category2">{{ $Follows->count() }} เกม<span></button>
            @endauth
            <button class="btn-game-category mt-3" onclick="filterSelection('news')"><span class="font-game-category">เกมใหม่</span><br><span class="font-game-category2">{{ $Games->count() }} เกม<span></button>
            <!-- <button class="btn-game-category mt-3"><span class="font-game-category">เกมที่เล่นล่าสุด</span><br><span class="font-game-category2">10 เกม<span></button>
            <button class="btn-game-category mt-3"><span class="font-game-category">เร็วๆนี้</span><br><span class="font-game-category2">20 เกม<span></button> -->
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
                        <option class="option-select-rate">Discrimination : มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</option>
                        <option class="option-select-rate">Drugs : มีการใช้สารเสพติดในเกม</option>
                        <option class="option-select-rate">Fear : มีการใช้ความกลัวเข้ามาอยู่ในเกม</option>
                        <option class="option-select-rate">Gambling : มีเรื่องของการพนันอยู่ในเกม</option>
                        <option class="option-select-rate">Sex : มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</option>
                        <option class="option-select-rate">Violence : มีการใช้ความรุนแรงภายในเกม</option>
                        <option class="option-select-rate">Online : เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</option>
                        <option class="option-select-rate">Other:อื่น</option>
                    </select>
    
                    <select class="selectpicker" id="mySelect">
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
        <div class="col-lg-1"></div>
        <div class="col-lg-10 row4 ">
            <div class="row py-3">
                @foreach($Games as $game)
                    @if($game->GAME_STATUS == 'อนุมัติ')
                        @guest
                            <div class="col-md-2 ">
                                <a href="{{ route('login-levelUp') }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" /></a>
                                <span class="desc">
                                    <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:20px;">กำลังติดตาม</b></button > -->
                                    <a href="{{route('login-levelUp')}}"><button class="btn_follow8" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:15px;"></span><b class="font_follow2" style="font-size:20px;">ติดตาม</b></button ></a>
                                </span>
                            </div>
                        @else
                            @if($Follows->count() > 0)
                                @foreach($Follows as $follow)
                                    @if($game->GAME_ID == $follow->GAME_ID)
                                        <div class="filterDiv follow hot col-md-2">
                                            <a href="{{ route('GameDetail', ['id'=>$game->GAME_ID]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" /></a>
                                            <span class="desc">
                                                <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:20px;">กำลังติดตาม</b>
                                                        <input type="hidden" name="submit" value="submit">
                                                        <input type="hidden" name="FOLLOW_ID" value="{{ $follow->FOLLOW_ID }}">
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                        @break
                                    @else
                                        <div class="filterDiv hot col-md-2 ">
                                            <a href="{{ route('GameDetail', ['id'=>$game->GAME_ID]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" /></a>
                                            <span class="desc">
                                                <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="btn_follow8" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:15px;"></span><b class="font_follow2" style="font-size:20px;">ติดตาม</b>
                                                        <input type="hidden" name="submit" value="submit">
                                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                        <input type="hidden" name="GAME_ID" value="{{ $game->GAME_ID }}">
                                                        <input type="hidden" name="GAME_NAME" value="{{ $game->GAME_NAME }}">
                                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="filterDiv hot col-md-2 ">
                                    <a href="{{ route('GameDetail', ['id'=>$game->GAME_ID]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$game->GAME_IMG_PROFILE) }}" /></a>
                                    <span class="desc">
                                        <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btn_follow8" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:15px;"></span><b class="font_follow2" style="font-size:20px;">ติดตาม</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="GAME_ID" value="{{ $game->GAME_ID }}">
                                                <input type="hidden" name="GAME_NAME" value="{{ $game->GAME_NAME }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                            </button>
                                        </form>
                                    </span>
                                </div>
                            @endif
                        @endguest
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-lg-1 "></div>
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
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
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
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
</script>

@endsection