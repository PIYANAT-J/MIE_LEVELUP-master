@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/game_management">
        @include('profile.sidebar.admin_sidebar')

        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-9"><h1 class="fontHeader">ข้อมูลการอัพโหลดเกม</h1></div>
                <div class="col-3 text-right">
                    <select class="SelectWh p">
                        <option>ประเภทเกม</option>
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>BBG</option>
                        <option>Board Game</option>
                        <option>Casual</option>
                        <option>Console</option>
                        <option>Fantasy</option>
                        <option>Fighting</option>
                        <option>Flight</option>
                        <option>FPS</option>
                        <option>Historical</option>
                        <option>Martail Arts</option>
                        <option>MMORPG</option>
                        <option>MOBA</option>
                        <option>Music Game</option>
                        <option>Puzzle</option>
                        <option>Racing</option>
                        <option>RTS</option>
                        <option>Side Scrolling Game</option>
                        <option>Simulation</option>
                        <option>Social</option>
                        <option>Sport</option>
                        <option>Strategy</option>
                        <option>Survival</option>
                        <option>Tactical Combat</option>
                        <option>TBS</option>
                        <option>TPS</option>
                        <option>Trading card </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#spon1">ทั้งหมด</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#spon2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#spon3">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0 mb-3" >
                        <div class="col-12">
                            <div class="tab-content">

                                <div id="spon1" class="tab-pane active">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 p">ชื่อเกม</div>
                                        <div class="col-2 py-3 th1 p">ผู้พัฒนา</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($game as $gameList)
                                                @if($gameList->GAME_STATUS == "รออนุมัติ")
                                                    <div class="row item">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->GAME_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->name}} {{$gameList->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">{{$gameList->GAME_TYPE}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$gameList->GAME_ID}}">
                                                                <p style="margin:0;">รอการตรวจสอบ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{$gameList->ADMIN_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                    </div>
                                                @elseif($gameList->GAME_STATUS == "อนุมัติ")
                                                    <div class="row item">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->GAME_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->name}} {{$gameList->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">{{$gameList->GAME_TYPE}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$gameList->GAME_ID}}">
                                                                <p style="margin:0;">อนุมัติแล้ว</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{$gameList->ADMIN_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                    </div>
                                                @endif
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="spon2" class="tab-pane ">
                                <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 p">ชื่อเกม</div>
                                        <div class="col-2 py-3 th1 p">ผู้พัฒนา</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($game as $gameList)
                                                @if($gameList->GAME_STATUS == "รออนุมัติ")
                                                    <div class="row item">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->GAME_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->name}} {{$gameList->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">{{$gameList->GAME_TYPE}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$gameList->GAME_ID}}">
                                                                <p style="margin:0;">รอการตรวจสอบ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{$gameList->ADMIN_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                    </div>
                                                @endif
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="spon3" class="tab-pane">
                                <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 p">ชื่อเกม</div>
                                        <div class="col-2 py-3 th1 p">ผู้พัฒนา</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($game as $gameList)
                                                @if($gameList->GAME_STATUS == "อนุมัติ")
                                                    <div class="row item">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->GAME_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p text-left">{{$gameList->name}} {{$gameList->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">{{$gameList->GAME_TYPE}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$gameList->GAME_ID}}">
                                                                <p style="margin:0;">อนุมัติแล้ว</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{$gameList->ADMIN_NAME}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                    </div>
                                                @endif
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($game as $gameModal)
<div class="modal fade" id="pendingApprove{{$gameModal->GAME_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการอัพโหลดเกม</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>
            <div class="modal-body">
                <form action="{{ route('ApproveGame') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6 pb-1">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อเกม</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_NAME}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">คำอธิบาย</p>
                                <label class="input1 p ml-2">{{$gameModal->GAME_DESCRIPTION}}</label>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อผู้พัฒนา</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->name}} {{$gameModal->surname}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ประเภทเกม</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_TYPE}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">เรทเกม</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->RATED_ESRB}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">เรทเนื้อหา</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->RATED_B_L}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อไฟล์เกม</p>
                                <input type="text" class=" input1 p ml-2" value="{{$gameModal->GAME_FILE}}" disabled>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ขนาดไฟล์เกม</p>
                                <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_SIZE}}" disabled>
                            </label>
                        </div>
                        <div class="col-6 pb-1">
                            <div class="row">
                                <p class="fontHeader">รูปภาพหน้าปก</p>
                            </div>
                            <div class="row">
                                    <img class="game-approve-pic" src="{{asset('section/File_game/Profile_game/'.$gameModal->GAME_IMG_PROFILE) }}" />
                            </div>

                            <div class="row">
                                <div class="col-12 mt-2" style="padding:0;"><p class="fontHeader">รูปภาพเพิ่มเติม</p></div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="padding:0;">
                                    @foreach($gameImg as $GameImg)
                                        @if($GameImg->GAME_ID == $gameModal->GAME_ID)
                                            <img class="game-approve-pic-etc" src="{{asset('section/picture_game/Game_Img/'.$GameImg->GAME_IMG_NAME) }}" />
                                        @endif
                                    @endforeach
                                    <!-- <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game9.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game10.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game11.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game12.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game13.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game14.png') }}" /> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">รายละเอียด</p>
                                <label type="text" class="input1 p ml-2" value="{{$gameModal->GAME_DESCRIPTION_FULL}}" disabled></label>
                            </label>
                        </div>

                        <div class="checkbox-red ml-3 mt-2">
                            <input type="checkbox" id="checkbox_01{{$gameModal->GAME_ID}}" name="accept_01">
                            <label for="checkbox_01{{$gameModal->GAME_ID}}">
                                <p class="fontChekboxDr" style="margin:0 0 0 15px;">อนุมัติ</p>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button name="submit" value="submit" class="btn-submit-red">
                                <p style="margin:0;">ยืนยัน</p>
                            </button>
                            <input type="hidden" name="GAME_ID" value="{{$gameModal->GAME_ID}}">
                            <input type="hidden" name="GAME_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$gameModal->GAME_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"> <h1 style="margin:0;">อนุมัติการอัพโหลดเกม</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1">
                        <label class="status-approve2 p" style="text-align:center;">อนุมัติแล้ว</label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อเกม</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_NAME}}" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <label class="input1 p ml-2">{{$gameModal->GAME_DESCRIPTION}}</label>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อผู้พัฒนา</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->name}} {{$gameModal->surname}}"  disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภทเกม</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_TYPE}}" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เรทเกม</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->RATED_ESRB}}" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เรทเนื้อหา</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->RATED_B_L}}" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไฟล์เกม</p>
                            <input type="text" class=" input1 p ml-2" value="{{$gameModal->GAME_FILE}}" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ขนาดไฟล์เกม</p>
                            <input type="text" class="input1 p ml-2" value="{{$gameModal->GAME_SIZE}}" disabled>
                        </label>
                    </div>
                    <div class="col-6 pb-1">
                        <div class="row">
                            <div class="col-12"><p class="fontHeader">รูปภาพหน้าปก<p></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="game-approve-pic" src="{{asset('section/picture_game/game9.png') }}" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2"><p class="fontHeader">รูปภาพเพิ่มเติม</p></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game9.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game10.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game11.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game12.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game13.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game14.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">รายละเอียด</p>
                            <label type="text" class="input1 p ml-2" value="{{$gameModal->GAME_DESCRIPTION_FULL}}" disabled></label>
                        </label>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- พื้นหลัง -->
<div class="container-fluid">
    <div class="row">
        <div class="col-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 bgContent"></div>
    </div>
</div>
@endsection

@section('script')


<script>
$(document).ready(function() {
  $('.noneApprovelist').hide();
  $('input:radio[name="kycApprove"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'noneApprove')
	{
    $('.noneApprovelist').show();
		}
   else {
    $('.noneApprovelist').hide();
   }
	}
);
}
);
</script>
@endsection