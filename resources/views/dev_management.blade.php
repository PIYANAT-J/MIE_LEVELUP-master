@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="background-color: #17202c;">

        <!-- sidebar -->
            <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-5 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                            </div>
                            <div class="col-7 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1.1em;">ชื่อ-นามสกุล</b></br>Admin</br>เป็นสมาชิก:25/05/63</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar active"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 20px;padding:0px 11px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม/เรทเกม/เรทเนื้อหาเกม</button></a>
                        </div>
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 15px 0px 10px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                        <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:0.85em;padding:0px 15px 0px 5px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button>
                </div>
            </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-lg-12">
                    <div class="inputWithIcon2">
                        <input style="font-family:myfont1;font-size:1.3em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-lg-12" style="font-family:myfont;color:#000;font-size:1.4em;">ข้อมูลผู้พัฒนาระบบ</div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#dev1">ทั้งหมด</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#dev2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#dev3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#dev4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="dev1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-3 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ (ยืนยันตัวตน)</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev1@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                        <!-- <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label> -->
                                                        <!-- <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label> -->
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">23/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev2@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <!-- <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label> -->
                                                        <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label>
                                                        <!-- <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label> -->
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin02</div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev3@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <!-- <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label> -->
                                                        <!-- <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label> -->
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin01</div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="dev2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-3 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ (ยืนยันตัวตน)</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev1@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">23/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev2@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev3@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="dev3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-3 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ (ยืนยันตัวตน)</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev1@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin02</div>
                                                    <div class="col-2 py-1 td1">23/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev2@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin02</div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="dev4" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-3 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ (ยืนยันตัวตน)</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">dev1@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin01</div>
                                                    <div class="col-2 py-1 td1">23/06/63</div>
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
</div>

<div class="modal fade" id="pendingApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">การยืนยันตัวตน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                        <div id="userKYC" class="custom02">
                            <div data-toggle="modal">
                                <input type="radio" name="kycApprove" value="approve" id="approve">
                                <label for="approve" style="color:#000;">อนุมัติ</label>
                            </div>
                            <div>
                                <input type="radio" name="kycApprove" value="noneApprove" id="noneApprove">
                                <label for="noneApprove" style="color:#000;" for="nl">ไม่อนุมัติ</label>
                            </div>
                        
                        
                            <div class="noneApprovelist">
                                <div for="noneApprovelabel" style="color:#000;">หมายเหตุ</div>
                                <div name="noneApprovediv" form="userKYC">
                                <textarea class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="รายละเอียด" row="3"  require></textarea>
                                </div>
                            </div>
                        </div>
                            <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/kyc.png') }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">การยืนยันตัวตน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                        <div class="row"><label class="status-approve" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/kyc.png') }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">การยืนยันตัวตน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                    <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                        <label class="status-none-approve" style="text-align:center;">ไม่ผ่านการอนุมัติ</label>
                        <div class="row bg-disabled mx-0 pt-2 pb-1">
                            <div class="col-lg-12">
                                <label for="" style="color:#757589;">หมายเหตุ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/kyc.png') }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- พื้นหลัง -->
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