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
                            <img class="sidebar-pic" src="{{asset('dist/images/person_1.jpg') }}" />
                        </div>
                        <div class="col-7 sidebar_name pt-2">
                            <span><b style="font-family: myfont;font-size: 1.1em;">ชื่อ-นามสกุล</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก:25/05/63</span>
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
                <a href="/user_lvp" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="/user_kyc" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน<span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span><span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span><span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span></button></a>
                <a href="/user_shelf" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="/user_history" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="/user_rank" style="width: 100%;"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/rank1.svg') }}" />อันดับผู้ใช้</button></a>
                <a href="/user_topup" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
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
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">เติมเงิน</div>
                            <div class="row bg-topup ml-0 mb-2">
                                <div class="col-lg-6 lext-center">ยอดเงินในวอลเล็ท
                                </div>
                                <div class="col-lg-6 lext-center">฿ 4,522.67</div>
                            </div>
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">จำนวนเงินที่ต้องการเติม (ขั้นต่ำ  ฿100 )</div>
                            <div class="input-group mb-3 input-topup">
                                <div class="input-group-prepend"><span class="input-group-text money_icon">฿</span></div>
                                <input type="text" class="form-control money" ></input>
                            </div>
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">ช่องทางการชำระเงิน</div>
                            <div class="row">
                                <div class="col-12">
                                    <div id="banking" class="custom02">
                                        <div data-toggle="modal" data-target="#myModal2">
                                            <input type="radio" name="bank" value="visa" id="visa">
                                            <label for="visa" style="font-family: myfont;font-size:1.3em;color:#000;">บัตรเครดิต/บัตรเดบิต</label>
                                            <img src="{{asset('home/logo/visa.png') }}" />
                                            <img src="{{asset('home/logo/visa2.png') }}" />
                                        </div>
                                        <div>
                                            <input type="radio" name="bank" value="atm" id="atm">
                                            <label for="atm" style="font-family: myfont;font-size:1.3em;color:#000;" for="nl">โอน/ชำระผ่านบัญชีธนาคาร</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="bank" value="ibank" id="ibank">
                                            <label for="ibank"style="font-family: myfont1;font-size:1.3em;color:#000;font-weight: bold;" for="es">iBanking / Mobile Banking</label>
                                        </div>
                                    
                                    
                                        <div class="atmlist">
                                            <div for="atmdlabel" style="font-family: myfont1;font-size:1.3em;color:#000;">เลือกธนาคารที่ต้องการชำระ</div>
                                            <div name="atmdiv" form="banking">
                                                <button class="btn-bangkok" data-toggle="modal" data-target="#myModal5"><img src="{{asset('home/logo/bangkok.svg') }}" /></button>
                                                <button class="btn-ktc" data-toggle="modal" data-target="#myModal6"><img src="{{asset('home/logo/ktc.svg') }}" /></button>
                                                <button class="btn-kbank" data-toggle="modal" data-target="#myModal7"><img src="{{asset('home/logo/kbank.svg') }}" /></button>
                                                <button class="btn-scb" data-toggle="modal" data-target="#myModal8"><img src="{{asset('home/logo/scb.svg') }}" /></button>
                                            </div>
                                        </div>
                                        
                                        <div class="ibanklist ">
                                            <div for="ibanklable"style="font-family: myfont1;font-size:1.3em;color:#000;">เลือกธนาคารที่ต้องการชำระ</div>
                                            <div name="ibankdiv" form="banking">
                                                <button class="btn-bangkok" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/bangkok.svg') }}" /></button>
                                                <button class="btn-ktc" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/ktc.svg') }}" /></button>
                                                <button class="btn-kbank" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/kbank.svg') }}" /></button>
                                                <button class="btn-scb" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/scb.svg') }}" /></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5"><button type="submit" class="btn-submit">เติมเงิน</button></div>
                        </div>
                        <div class="col-lg-6">
                            <div style="font-family:myfont;font-size:1.3em;color:#000;">ประวัติการเติมเงิน</div>
                            <div class="row row5">
                                <div class="col-lg-12">
                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="text-right" style="font-family:myfont;font-size:1.23em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span>
                                                    <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span><br>
                                                    </div>
                                                <div class="col-6  text-right" style="padding-top:35px">
                                                    <span class="font-bank1" >+20,000.00 ฿</span></br>
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
                                                <div class="col-6">
                                                    <span style="font-family:myfont;font-size:1.23em;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                                                    </div>
                                                <div class="col-6 text-right pt-2">
                                                    <button class="btn-submit-s" data-toggle="modal" data-target="#myModal">ยืนยันการโอน</button>
                                                    <button class="btn-topup-wait">รอการอนุมัติ</button>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="text-right" style="font-family:myfont;font-size:1.23em;color:#000;">iBanking / Mobile Banking</span>
                                                    <img class="mr-2" src="{{asset('home/logo/scb.svg') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                    </div>
                                                <div class="col-6  text-right" style="padding-top:35px">
                                                    <span class="font-bank1" >+2,000.00 ฿</span></br>
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
                                                <div class="col-6">
                                                    <span style="font-family:myfont;font-size:1.23em;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                                                    </div>
                                                <div class="col-6 text-right pt-2">
                                                    <button class="btn-submit-s" data-toggle="modal" data-target="#myModal9">โอนเงิน</button>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row bg-bank ml-0 py-2 mb-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="font-bank1">+1,000.00 ฿</span>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row mr-0">
                                                <div class="col-9"></div>
                                                <div class="col-3 text-right" style="padding:0;">
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 py-2 mb-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="font-bank1">+1,000.00 ฿</span>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row mr-0">
                                                <div class="col-9"></div>
                                                <div class="col-3 text-right" style="padding:0;">
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 py-2 mb-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="font-bank1">+1,000.00 ฿</span>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row mr-0">
                                                <div class="col-9"></div>
                                                <div class="col-3 text-right" style="padding:0;">
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 py-2 mb-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="font-bank1">+1,000.00 ฿</span>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row mr-0">
                                                <div class="col-9"></div>
                                                <div class="col-3 text-right" style="padding:0;">
                                                    <label class="font-game-shelf">15:47 17/06/63</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row bg-bank ml-0 py-2 mb-2">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                    <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="font-bank1">+1,000.00 ฿</span>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                    </div>
                                                <div class="col-6 text-right">
                                                    <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                </div> 
                                            </div>
                                            <div class="row mr-0">
                                                <div class="col-9"></div>
                                                <div class="col-3 text-right" style="padding:0;">
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  style="color: #000;font-family:myfont;" id="exampleModalLabel">ยืนยันการโอนเงิน</h4>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                            <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                            <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                            <span class="pl-1" style="font-family1:myfont;font-size:1em;color:#000;">1234567890123456</span>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="ยอดที่ชำระ" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="วันที่โอน" require></input>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="เวลาที่โอน" require></input>
                    </div>
                </div>
                <div>
                    <label id="upload" style="cursor:pointer;" class="font-kyc-upload">
                        <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ
                    </label>
                    <div id="thumb" class="thumb-topup"><img src="home/topup/pic-topup.png"/></div>    
                    <input id="file_upload" style="display:none" name="file_upload[]" type="file" accept="image/* " require/>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal" data-dismiss="modal">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-6"><img class="mr-2 img-visa" src="{{asset('home/logo/visa3.png') }}" ></div>
                    <div class="col-lg-6 text-right"><img class="mr-2 img-scurity" src="{{asset('home/logo/security.svg') }}" ></div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="หมายเลขบัตร" require></input>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="ชื่อผู้ถือบัตร" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="CCV" require></input>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="วันหมดอายุ" require></input>
                    </div>
                    <div class="col-lg-8 mb-2 ">
                        <div class="pl-2" style="font-family:myfont1;font-size:0.8em;color:#000;line-height: 150%;"><span style="font-weight:bold;">บันทึกบัตรไว้ใช้ในภายหลัง</span></br>ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</div>
                    </div>
                    <div class="col-lg-4 mb-2 text-right">
                        <div class="wrapper">
                            <div class="switch_box box_1">
                                <input type="checkbox" class="switch_1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal" data-toggle="modal" data-target="#myModal2"/></div>
                    <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">กรอกรหัส OTP</div> 
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row text-center">
                    <div class="col-lg-12 mb-2">
                        <span style="font-family:myfont;font-wieght:bold;font-size:1.1em;color:#000;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</span>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-lg-12 pb-3 bg-bank text-center ">
                        <div>
                            <input class="input-otp" id="codeBox1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" require/>
                            <input class="input-otp" id="codeBox2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" require/>
                            <input class="input-otp"id="codeBox3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" require/>
                            <input class="input-otp" id="codeBox4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" require/>
                            <input class="input-otp" id="codeBox5" type="text" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)" require/>
                            <input class="input-otp" id="codeBox6" type="text" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)" require/>
                        </div>
                        <span style="font-family:myfont;font-size:0.9em;color:#000;">รหัสอ้างอิง OTP : GTBV</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal-red" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row text-center">
                    <div class="col-lg-12 mb-2">
                        <img src="{{asset('icon/correct.svg') }}"/></br>
                        <span style="font-family:myfont;font-size:1.5em;color: #23c197;">เติมเงินสำเร็จ</span></br>
                        <span style="font-family:myfont;color:#000;">คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ</span>
                    </div>
                </div>
            </div>

            <div class="mx-3 mb-3">
                <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/bangkok.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกรุงเทพ</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;">2,000</span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="button" class="btn-submit-modal">ยืนยัน</button></div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/ktc.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกรุงไทย</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;">2,000</span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="button" class="btn-submit-modal">ยืนยัน</button></div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/kbank.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกสิกรไทย</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;">2,000</span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="button" class="btn-submit-modal">ยืนยัน</button></div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/scb.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารไทยพาณิชย์</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;">2,000</span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="button" class="btn-submit-modal">บันทึก</button></div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal"/></div>
                    <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">iBanking / Mobile Banking</div> 
                    <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1 bg-bank text-center">
                        <div class="my-2"><img src="{{asset('icon/waiting.svg') }}" /></div>
                        <span style="font-family:myfont;color:#000;">
                            กำลังรอชำระเงิน</br>ผ่านโมบายแบงค์กิ้ง/ไอแบงค์กิ้ง
                        </span></br>
                        <span style="color:#000";>
                            กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็มภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกอัตโนมัติ
                        </span>
                        <div class="my-2"><img src="{{asset('home/topup/qr.png') }}" /></div>
                        <span style="font-family:myfont;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-lg-12 pb-1 bg-bank">
                        <div class="row">
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"><img class="mt-3" src="{{asset('home/logo/scb.svg') }}" /></div>
                            <div class="col-8 mt-2 py-2" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขบัญชี <b class="ml-2"><label>1234567890</label></b></span></div>
                            <div class="col-3 text-center py-3"  style="font-family:myfont;color:#ff6f6f;border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                            <div class="col-8 py-3" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขคำร้อง<b class="ml-2"><label>1234567890123456</label></b></span></div>
                            <div class="col-3 py-2 text-center mt-2"  style="font-family:myfont;color:#ff6f6f; border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                            <div class="col-8 pt-3"><span style="color:#000;font-family:myfont;">จำนวนเงินที่ต้องการเติม</span></div>
                            <div class="col-3 py-2 text-center mt-2"  style="font-family:myfont;color:#23c197;">2,000</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal" >บันทึก</button>
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

<script> /* รูปโปรไฟล์เกม */
$(function () {
 $("#upload").on("click",function(e){
     $("#file_upload").show().click().hide();
     e.preventDefault();
 });
 $("#file_upload").on("change",function(e){
     var files = this.files
     showThumbnail(files)        
 });
 function showThumbnail(files){
     $("#thumb").html("");
     for(var i=0;i<files.length;i++){
         var file = files[i]
         var imageType = /image.*/
         if(!file.type.match(imageType)){
                //  console.log("Not an Image");
             continue;
         }
         var image = document.createElement("img");
         var thumbnail = document.getElementById("thumb");
         image.file = file;
         thumbnail.appendChild(image)
         var reader = new FileReader()
         reader.onload = (function(aImg){
             return function(e){
                 aImg.src = e.target.result;
             };
         }(image))
         var ret = reader.readAsDataURL(file);
         var canvas = document.createElement("canvas");
         ctx = canvas.getContext("2d");
         image.onload= function(){
             ctx.drawImage(image,100,100)
         }
     } // end for loop
     console.log(file);
 } // end showThumbnail
});
</script>

<script>
$(document).ready(function() {
  $('.atmlist').hide();
  $('.ibanklist').hide();
   
  $('input:radio[name="bank"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'atm')
	{
    $('.atmlist').show();
    $('.ibanklist').hide();
		}
  
  else if ($(this).is(':checked') && $(this).val() == 'ibank'){
    $('.atmlist').hide();
    $('.ibanklist').show();
   }
   
   else {
    $('.atmlist').hide();
    $('.ibanklist').hide();
   }
	}
);
}
);
</script>


<script>
      function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 6) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
    </script>


@endsection