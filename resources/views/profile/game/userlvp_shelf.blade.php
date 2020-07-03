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
                    @foreach($guest_user as $USER)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-5 text-right pr-2">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-7 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
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
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
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
                <a href="{{ route('Avatar') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตัวละครของฉัน (Avatar)</button></a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
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
                <a href="{{ route('UserShelf') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/rank1.svg') }}" />อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
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
                                        <div class="col-6">ชื่อเกม</div>
                                        <div class="col-2 text-center">เล่นสะสม</div>
                                        <div class="col-2 text-center">วันที่เล่นล่าสุด</div>
                                        <div class="col-2 text-center">อัพเดต</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 row4">
                                <div class="col-lg-12" >
                                    @if(isset($game))
                                        @foreach($game as $Game)
                                                    <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-3"><img class="shelf-pic" src="{{ asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE) }}" /></div>
                                                                <div class="col-9 font-game-shelf">
                                                                    <div>
                                                                        <span style="font-family:myfont;color:#000;">{{ $Game->GAME_NAME }}</span></br>
                                                                        {{ $Game->RATED_B_L }} • Other</br>
                                                                        เวอร์ชั่น 1.03
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 text-center"><span class="font-game-shelf">5 ชั่วโมง</span></div>
                                                        <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                                        <div class="col-2 text-center">
                                                        <span class="font-game-shelf">ล่าสุด</span>
                                                        <!-- <button class="btn-update-game">อัพเดต</button> -->
                                                        </div>
                                                    </div>
                                        @endforeach
                                    @endif  
                                    <!-- <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-3"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                                <div class="col-9 font-game-shelf">
                                                    <div>
                                                        <span style="font-family:myfont;color:#000;">Time Lie</span></br>
                                                        Online • Other</br>
                                                        เวอร์ชั่น 1.03</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-center"><span class="font-game-shelf">5 ชั่วโมง</span></div>
                                        <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                        <div class="col-2 text-center">
                                        <span class="font-game-shelf">ล่าสุด</span>
                                        <button class="btn-update-game">อัพเดต</button>
                                        </div>
                                    </div> -->
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