@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                @if(Auth::user()->updateData == 'true')
                    @foreach($developer as $Dev)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-5 text-right pr-2">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$Dev->DEV_IMG) }}" />
                                </div>
                                <div class="col-7 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <button class="btn-point pb-2">
                                        <span class="font-point">พอยท์</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                        <i class="icon-Icon_Point"></i>
                                    </button>

                                    <button class="btn-coin pb-2">
                                        <span class="font-point">เหรียญ</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                        <i class="icon-Icon_Coin"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-5 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                            </div>
                            <div class="col-7 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                        <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                            <div class="col-lg-12 text-center">
                                <button class="btn-point pb-2">
                                    <span class="font-point">พอยท์</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                    <i class="icon-Icon_Point"></i>
                                </button>

                                <button class="btn-coin pb-2">
                                    <span class="font-point">เหรียญ</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                    <i class="icon-Icon_Coin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('DevKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('DevShelf') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('DevUpload') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-12 pb-2"><span class="font-profile1">ตู้เกม (เกมเชล)</span></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mt-2 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1.3em;color:#000;">
                                        <div class="col-5">ชื่อเกม</div>
                                        <div class="col-3 text-center ">จำนวนดาวน์โหลด</div>
                                        <div class="col-2 text-center ">วันที่อัพเดต</div>
                                        <div class="col-2 text-center ">อัพเดตเวอร์ชัน</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 row4">
                                <div class="col-lg-12" >
                                    <!-- <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                                <div class="col-8 font-game-shelf">
                                                    <div>
                                                        <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                        Online • Other</br>
                                                        เวอร์ชั่น 1.03</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                        <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                        <div class="col-2 text-center">
                                        <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                        <button class="btn-update-cancel" >ยกเลิก</button>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                                <div class="col-8 font-game-shelf">
                                                    <div>
                                                        <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                        Online • Other</br>
                                                        เวอร์ชั่น 1.03
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                        <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                        <div class="col-2 text-center">
                                        <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                        <button class="btn-update-cancel">ยกเลิก</button>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                                <div class="col-8 font-game-shelf">
                                                    <div>
                                                        <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                        Online • Other</br>
                                                        เวอร์ชั่น 1.03
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                        <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                        <div class="col-2 text-center">
                                        <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                        <button class="btn-update-cancel">ยกเลิก</button>
                                        </div>
                                    </div> -->
                                    @if(isset($game))
                                        @foreach($game as $Game)
                                            @if($Game->USER_ID == Auth::user()->id)
                                                @if(isset($Game->GAME_IMG_PROFILE))
                                                    <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-4"><img class="shelf-pic" src="{{asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE)}}" /></div>
                                                                <div class="col-8 font-game-shelf">
                                                                    <div>
                                                                        <span style="font-family:myfont;color:#000;">{{ $Game->GAME_NAME }}</span>
                                                                        @if($Game->GAME_STATUS == 'รออนุมัติ')
                                                                            <label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                                        @elseif($Game->GAME_STATUS == 'อนุมัติ')
                                                                            <label class="ml-2 px-1" style="color:#fff;font-size:0.9em;background-color: #23c197;border-radius: 6px;">อนุมัติ</label></br>
                                                                        @else
                                                                            <label class="ml-2 px-1" style="color:#fff;font-size:0.9em;background-color: #ce0005;border-radius: 6px;">ไม่อนุมัติ</label></br>
                                                                        @endif
                                                                        {{ $Game->RATED_B_L }} • Other</br>เวอร์ชั่น 1.03
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 text-center">
                                                            <span class="font-game-shelf">
                                                                @foreach($CDownload as $cdown)
                                                                    @if($cdown->GAME_ID == $Game->GAME_ID && $cdown->GAME_ID != null)
                                                                        @if($Game->GAME_ID == $cdown->GAME_ID)
                                                                            {{ $cdown->downloads_count }} ครั้ง
                                                                        @endif
                                                                        @break
                                                                    @else
                                                                        0 ครั้ง
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </span>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <span class="font-game-shelf">
                                                                @if($Game->GAME_EDIT_DATE == null)
                                                                    {{ $Game->GAME_DATE }}
                                                                @else
                                                                    {{ $Game->GAME_EDIT_DATE }}
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            @if($Game->GAME_STATUS == 'รออนุมัติ')
                                                                <form action="{{ route('DevShelfUpdate') }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <button type="hidden" name="submit" value="submit" class="btn-update-cancel">ยกเลิก
                                                                        <input type="hidden" name="GAME_ID" value="{{ $Game->GAME_ID }}">
                                                                    </button>
                                                                </form>
                                                            @elseif($Game->GAME_STATUS == 'อนุมัติ')
                                                                <button class="btn-update-game" data-toggle="modal" data-target="#{{$Game->GAME_NAME}}">อัพเดต</button>
                                                            @else
                                                                <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>
@foreach($game as $GameModal)
<div class="modal fade" id="{{$GameModal->GAME_NAME}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
    <div class="modal-content">
            <div class="modal-header">
                <h4 style="color:#000;">อัพเดตเวอร์ชัน</h4>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>
            <form action="{{ route('DevShelfUpdate') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body font-rate-modal">
                    <div class="row px-3 mb-2">
                        <div class="col-lg-12 bg-bank ">
                            <div class="row ">
                                @if($Game->USER_ID == Auth::user()->id)
                                    @if(isset($GameModal->GAME_IMG_PROFILE))
                                    <div class="col-3 my-2"><img class="shelf-pic" src="{{asset('section/File_game/Profile_game/'.$GameModal->GAME_IMG_PROFILE)}}" /></div>
                                    <div class="col-5 py-2">
                                        <span style="font-family:myfont;font-size:1.1em;color:#000;line-height:5px;">{{ $GameModal->GAME_NAME }}</span></br>
                                        <span style="color:#000;line-height:5px;font-family:myfont1;font-size:1em;">{{ $GameModal->RATED_B_L }} • Other</br>เวอร์ชั่น 1.03</span>
                                    </div>
                                    <div class="col-4 text-center py-4" >
                                        <span style="color:#000;line-height:5px;font-family:myfont1;font-size:1em;">ขนาดไฟล์ปัจจุบัน</span></br>
                                        <span style="color:#000;line-height:0px;font-family:myfont;font-size:2em;">{{ $GameModal->GAME_SIZE }}</span>
                                    </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <input type="text" class="form-control input-bank" placeholder="เวอร์ชันที่อัพเดต"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="file" class="file" name="GAME_FILE" accept=".zip" require>
                            <label class="label1 pl-2">เฉพาะไฟล์นามสกุล .zip เท่านั้น</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit-modal" >บันทึก
                        <input type="hidden" name="GAME_NAME" value="{{ $GameModal->GAME_NAME }}">
                        <!-- <input type="hidden" name="GAME_IMG_PROFILE" value="{{ $GameModal->GAME_IMG_PROFILE }}"> -->
                        <input type="hidden" name="GAME_DATE" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_login"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_login2"></div>
    </div>
</div>

@endsection

@section('script')
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection