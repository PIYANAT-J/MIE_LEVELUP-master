@extends('layout.follow_navbar')
@section('content')
<div class="container-fluid">
    <div class="row py-5 " style="background-color: #202433;"></div>
    <div class="row pt-4" style="background-color: #202433;box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.42);">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-11 col-xl-11 pt-3 pb-2">
        <label><h4 class="font-category mr-3">กำลังติดตาม</h4></label>
            <button class="btn-total-category p" data-toggle="collapse" data-target="#demo">ประเภทเกม</button>
        </div>

        <div id="demo" class="collapse row3 bg1" style="background-color: #202433;">
            <div class="row mx-5 mt-3" >
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_1">
                        <label for="checkbox_1">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Action</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_2">
                        <label for="checkbox_2">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Adventure</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_3">
                        <label for="checkbox_3">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">BBG</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_4">
                        <label for="checkbox_4">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Board Game</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_5">
                        <label for="checkbox_5">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Casual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_6">
                        <label for="checkbox_6">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Console</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_7">
                        <label for="checkbox_7">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Fantasy</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_8">
                        <label for="checkbox_8">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Fighting</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_9">
                        <label for="checkbox_9">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Flight</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_10">
                        <label for="checkbox_10">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">FPS</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_11">
                        <label for="checkbox_11">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Historical</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_12">
                        <label for="checkbox_12">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Martail Arts</p>
                        </label>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_13">
                        <label for="checkbox_13">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">MMORPG</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_14">
                        <label for="checkbox_14">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">MOBA</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_15">
                        <label for="checkbox_15">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Music Game</p>
                        </label>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_16">
                        <label for="checkbox_16">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Puzzle</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_17">
                        <label for="checkbox_17">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Racing</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_18">
                        <label for="checkbox_18">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">RTS</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_19">
                        <label for="checkbox_19">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Side Scrolling Game </p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_20">
                        <label for="checkbox_20">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Simulation</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_21">
                        <label for="checkbox_21">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Social</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_22">
                        <label for="checkbox_22">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Sport</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_23">
                        <label for="checkbox_23">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Strategy</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_24">
                        <label for="checkbox_24">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Survival</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_25">
                        <label for="checkbox_25">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Tactical Combat</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_26">
                        <label for="checkbox_26">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">TBS</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_27">
                        <label for="checkbox_27">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">TPS</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 col-lg-1" style="padding:0;">
                    <div class="checkbox-red">
                        <input type="checkbox" id="checkbox_28">
                        <label for="checkbox_28">
                            <p class="fontChekboxCat" style="margin:0 0 0 15px;">Trading Card</p>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="mx-5 text-right mb-3">
                <button class="btn-cancal-category p mr-2" data-toggle="collapse" data-target="#demo">ยกเลิก</button>
                <button class="btn-search-category p mr-2">ค้นหา</button>
            </div>
        </div>
    </div>
    
    <div class="row" style="background-color: #141621;">
        <div class="col-lg-1 col-xl-1"></div>
            <div class="col-sm col-md col-lg-11 col-xl-11">
                <div class="row">
                    <div class="col-sm col-md col-lg-3 col-xl-3">
                        <select class="selectCat p my-2">
                            <option>เรทเกม</option>
                            <option>EC : Early Childhood</option>
                            <option>E : Everyone</option>
                            <option>E10+ : Everyone 10+</option>
                            <option>T : Teen</option>
                            <option>M : Mature</option>
                            <option>AO : Adults Only</option>
                            <option>RP : Rating Pending</option>
                        </select>
                    </div>

                    <div class="col-sm col-md col-lg-3 col-xl-3">
                        <select class="selectCat p my-2">
                            <option>เรทเนื้อหาเกม</option>
                            <option>Discrimination : มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</option>
                            <option>Drugs : มีการใช้สารเสพติดในเกม</option>
                            <option>Fear : มีการใช้ความกลัวเข้ามาอยู่ในเกม</option>
                            <option>Gambling : มีเรื่องของการพนันอยู่ในเกม</option>
                            <option>Sex : มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</option>
                            <option>Violence : มีการใช้ความรุนแรงภายในเกม</option>
                            <option>Online : เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</option>
                            <option>Other:อื่น</option>
                        </select>
                    </div>
    
                    <div class="col-sm col-md col-lg-3 col-xl-3">
                        <select class="selectCat p my-2">
                            <option>คะแนน</option>
                            <option>5 ดาว</option>
                            <option>4 ดาว</option>
                            <option>3 ดาว</option>
                            <option>2 ดาว</option>
                            <option>1 ดาว</option>
                        </select>
                    </div>
                    <button class="btn-reset p">
                        <i class="icon-update_version"></i>
                        <span style="text-decoration: underline;">รีเซ็ท</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-xl-1"></div>
    </div>

    <div class="row" style="background-color: #141621;margin:0;">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-sm col-md col-lg-10 col-xl-10 row4 ">
            <div class="row py-3">

                @foreach($Games as $gameMe)
                    @if($Follows->count() > 0)
                        @foreach($Follows as $followMe)
                            @if($gameMe->GAME_ID == $followMe->GAME_ID)
                                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2" style="padding:5px;">
                                    <a href="{{ route('GameDetail', ['id'=>$gameMe->GAME_ID]) }}"><img class="game_3" src="{{ asset('section/File_game/Profile_game/'.$gameMe->GAME_IMG_PROFILE) }}" /></a>
                                    <span class="desc">
                                        <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btnFollowingCat" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:3px;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNfollowingCat">กำลังติดตาม</p></label>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="FOLLOW_ID" value="{{ $followMe->FOLLOW_ID }}">
                                            </button>
                                        </form>
                                        <!-- <button class="btn_follow9 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:15px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;font-size:1em;">กำลังติดตาม</b></button > -->
                                        <!-- <button class="btn_follow8" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:15px;"></span><b class="font_follow2" style="font-size:1em;">ติดตาม</b></button > -->
                                    </span>
                                </div>
                                @break
                            @endif
                        @endforeach
                    @else
                        <div class="col-sm col-md col-lg-10 col-xl-10">
                            <span>
                                <label style="color:#ce0005;">
                                    <p>ไม่มีเกมที่กำลังติดตาม</p>
                                </label>
                            </span>
                        </div>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-lg-1 col-xl-1"></div>
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

@endsection