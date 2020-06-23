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
                <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                    <div class="row mb-2">
                        <div class="col-5 text-right pr-2">
                            <img class="sidebar-pic" src="{{asset('dist/images/img_13.jpg') }}" />
                        </div>
                        <div class="col-7 sidebar_name pt-2">
                            <span><b style="font-family: myfont;font-size: 1.1em;">ชื่อ-นามสกุล</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก:25/05/63</span>
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
                <div class="col-lg-1"></div>
                <a href="/develper_profile" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="/develper_kyc" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน<span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span><span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span><span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span></button></a>
                <a href="/develper_shelf" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="/develper_history" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="/develper_rank" style="width: 100%;"><button class="btn-sidebar"><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="/develper_topup" style="width: 100%;"><button class="btn-sidebar"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button>
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
                                        <div class="col-3 text-center bg4">จำนวนดาวน์โหลด</div>
                                        <div class="col-2 text-center bg3">วันที่อัพเดต</div>
                                        <div class="col-2 text-center bg4">อัพเดตเวอร์ชัน</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 row4">
                                <div class="col-lg-12" >

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
                                        <button class="btn-update-game">อัพเดต</button>
                                        <button class="btn-update-cancel">ยกเลิก</button>
                                        </div>
                                    </div>
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
<script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection