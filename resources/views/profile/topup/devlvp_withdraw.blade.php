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
                <a href="/develper_profile" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="/develper_kyc" style="width: 100%;"><button class="btn-sidebar "><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน<span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span><span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span><span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span></button></a>
                <a href="/develper_shelf" style="width: 100%;"><button class="btn-sidebar "><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="/develper_history" style="width: 100%;"><button class="btn-sidebar "><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="/develper_upload_game" style="width: 100%;"><button class="btn-sidebar "><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="/develper_withdraw" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button>
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-6 line1">
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">ถอนเงิน</div>
                            <div class="row bg-topup ml-0 mb-2">
                                <div class="col-lg-6 lext-center">ยอดเงินในวอลเล็ท
                                </div>
                                <div class="col-lg-6 lext-center">฿ 4,522,220.67</div>
                            </div>
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">จำนวนเงินที่ต้องการถอน (ขั้นต่ำ  ฿100 )</div>
                            <div class="input-group mb-3 input-topup">
                                <div class="input-group-prepend"><span class="input-group-text money_icon">฿</span></div>
                                <input type="text" class="form-control money" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-6" style="font-family:myfont;font-size:1.3em;color:#000;">ช่องทางการรับเงิน</div>
                                <div class="col-lg-6 text-right" style="font-family:myfont;font-size:1.2em;color: #0061fc;text-decoration:underline;cursor:pointer;" data-toggle="modal" data-target="#BankAccount">เพิ่มธนาคารของฉัน</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="custom02">
                                        <div class="row mb-2">
                                            <div class="col-1">
                                                <input type="radio" id="radio01" name="demo03" /><label for="radio01"></label>
                                            </div>
                                            <img class="mx-2" style="width: 33px;" src="{{asset('home/logo/bangkok.svg') }}" />
                                            <span style="font-family:myfont1;font-size:1.3em;color:#b1b7bc;line-height:90%;">
                                                <b  style="font-size:1em;color:#000;">ธนาคารกรุงเทพ</b></br>766-2-XXXXX-4
                                            </span>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-1">
                                                <input type="radio" id="radio02" name="demo03" /><label for="radio02"></label>
                                            </div>
                                            <img class="mx-2" style="width: 33px;" src="{{asset('home/logo/scb.svg') }}" />
                                            <span style="font-family:myfont1;font-size:1.3em;color:#b1b7bc;line-height:90%;">
                                                <b  style="font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</b></br>766-2-XXXXX-4
                                            </span>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-1">
                                                <input type="radio" id="radio03" name="demo03" /><label for="radio03"></label>
                                            </div>
                                            <img class="mx-2" style="width: 33px;" src="{{asset('home/logo/kbank.svg') }}" />
                                            <span style="font-family:myfont1;font-size:1.3em;color:#b1b7bc;line-height:90%;">
                                                <b  style="font-size:1em;color:#000;">ธนาคารกสิกร</b></br>766-2-XXXXX-4
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-submit mt-5" >ถอนเงิน</button>
                        </div>
                        <div class="col-lg-6">
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">ประวัติการถอนเงิน</div>
                            <div class="row row5">
                                <div class="col-lg-12">
                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกร</span><br>
                                                    </div>
                                                <div class="col-6  text-right">
                                                    <span class="font-bank1" style="color:#ce0005;">-20,000.00 ฿</span></br>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">หมายเลขคำร้อง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row ">
                                                <div class="col-6"></div>
                                                <div class="col-6 text-right pt-2">
                                                    <button class="btn-topup-wait">รอการอนุมัติ</button>
                                                    <!-- <label class="font-game-shelf">15:47 17/06/63</label> -->
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกร</span><br>
                                                    </div>
                                                <div class="col-6  text-right">
                                                    <span class="font-bank1" style="color:#ce0005;">-20,000.00 ฿</span></br>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">หมายเลขคำร้อง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row ">
                                                <div class="col-6"></div>
                                                <div class="col-6 text-right pt-2">
                                                    <!-- <button class="btn-topup-wait">รอการอนุมัติ</button> -->
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกร</span><br>
                                                    </div>
                                                <div class="col-6  text-right">
                                                    <span class="font-bank1" style="color:#ce0005;">-20,000.00 ฿</span></br>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">หมายเลขคำร้อง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row ">
                                                <div class="col-6"></div>
                                                <div class="col-6 text-right pt-2">
                                                    <!-- <button class="btn-topup-wait">รอการอนุมัติ</button> -->
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div> 
                                            </div>
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

<div class="modal fade" id="BankAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  style="color: #000;font-family:myfont;" id="exampleModalLabel">เพิ่มธนาคารของฉัน</h4>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                            <select class="select-bank" require>
                                <option>เลือกธนาคาร</option>
                                <option>ธนาคารกสิกร</option>
                                <option>ธนาคารกรุงเทพ</option>
                                <option>ธนาคารไทยพาณิชย์</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="ชื่อบัญชี" require></input>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="หมายเลขบัญชีธนาคาร" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                            <select class="select-bank" require>
                                <option>ประเภทบัญชี</option>
                                <option>เงินฝากออมทรัพย์</option>
                                <option>เงินฝากประจำ</option>
                                <option>เงินฝากกระแสรายวัน หรือบัญชีเดินสะพัด </option>
                            </select>
                            </div>
                        </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="สาขา" require></input>
                    </div>
                </div>
                <div>
                       
                    
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal-red" data-dismiss="modal">ยืนยัน</button>
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
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

@endsection