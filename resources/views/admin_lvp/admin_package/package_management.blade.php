@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="background-color: #17202c;">

        <!-- sidebar -->
            <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-4">
                            <div class="col-4 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                            </div>
                            <div class="col-8 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1em;">{{Auth::user()->name}}-{{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก:{{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 20px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม</button></a>
                        </div>
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:1.1em;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar " style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar " style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:1.1em;padding:0px 14px 0px 8px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar pt-2 active"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:1.1em;padding:0px 15px 0px 13px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ url('/') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-home" style="font-size:1em;padding:0px 17px 0px 13px;"></i>หน้าหลัก</button></a>
                    <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout" style="font-size:1.1em;padding:0px 15px 0px 15px;"></i>ออกจากระบบ</button></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-lg-12">
                    <div class="inputWithIcon2">
                        <input style="font-family:myfont1;font-size:1em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-6" style="font-family:myfont;color:#000;font-size:1.2em;height:35px;">ข้อมูลแพ็กเกจโฆษณา</div>
                <div class="col-6 text-right" >
                    <div id="first">
                        <select class="select5">
                            <option value="0">สถานะ</option>
                            <option value="1">รออนุมัติ</option>
                            <option value="2">อนุมัติแล้ว</option>
                            <option value="3">ไม่ผ่าการอนุมัติ</option>
                        </select>
                        <SELECT class="select5" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                        <SELECT class="select5" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                        <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#Package" onClick="myFunction2()">รายการแพ็กเกจโฆษณา</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#Ads" onClick="myFunction()">อนุมัติโฆษณา</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div id="Package" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">#</div>
                                        <div class="col-2 py-3 th1 text-left">แพ็คเกจ</div>
                                        <div class="col-2 py-3 th1">ราคา</div>
                                        <div class="col-2 py-3 th1">ระยะเวลา</div>
                                        <div class="col-2 py-3 th1">รายละเอียด</div>
                                        <div class="col-1 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1 text-right">
                                            <label style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#AddPackage"> + เพิ่มแพ็กเกจ</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1">1</div>
                                                <div class="col-2 py-1 td1 text-left">แพ็กเกจ 1</div>
                                                <div class="col-2 py-1 td1">900</div>
                                                <div class="col-2 py-1 td1">1 เดือน</div>
                                                <div class="col-2 py-1 td1" style="cursor:pointer;text-decoration: underline;color:#0061fc;"data-toggle="modal" data-target="#PackageDetail">เพิ่มเติม</div>
                                                <div class="col-2 py-1 td1 text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditPackage"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="Ads" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">#</div>
                                        <div class="col-3 py-3 th1 text-left">โฆษณา</div>
                                        <div class="col-2 py-3 th1 text-left">อีเมล</div>
                                        <div class="col-2 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1">วันที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1">1</div>
                                                <div class="col-3 py-1 td1 text-left">ชื่อโฆษณา 1</div>
                                                <div class="col-2 py-1 td1 text-left">exam@email.com</div>
                                                <div class="col-2 py-1 td1">
                                                    <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label>
                                                    <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove">ไม่ผ่านการอนุมัติ</label>
                                                </div>
                                                <div class="col-2 py-1 td1 ">Admin1</div>
                                                <div class="col-2 py-1 td1">19/08/63</div>
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

<div class="modal fade" id="AddPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แพ็กเกจโฆษณา</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-2 pl-4">
                        <label class="font-profile1 mt-3 mb-2">ข้อมูลแพ็กเกจ</label>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อแพ็กเกจ</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคาแพ็กเกจ</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ระยะเวลา</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">1 เดือน</option>
                                <option value="">3 เดือน</option>
                                <option value="">6 เดือน</option>
                                <option value="">1 ปี</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-lg-12 mb-2 pl-4">
                        <label class="font-profile1 mt-3 mb-2">รายละเอียดแพ็กเกจ</label>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เลือกสนุบสนุนเกมได้ทั้งหมด/เกม</label> <br>
                            <input class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ความยาวโฆษณา</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">15 วินาที</option>
                                <option value="">30 วินาที</option>
                                <option value="">45 วินาที</option>
                                <option value="">1 นาที</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนรอบโฆษณา</label> <br>
                            <input class="input-login px-3" required autofocus>
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขแพ็กเกจโฆษณา</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-2 pl-4">
                        <label class="font-profile1 mt-3 mb-2">ข้อมูลแพ็กเกจ</label>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อแพ็กเกจ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคาแพ็กเกจ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ระยะเวลา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                    </div>
                    <div class="col-lg-12 mb-2 pl-4">
                        <label class="font-profile1 mt-3 mb-2">รายละเอียดแพ็กเกจ</label>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เลือกสนุบสนุนเกมได้ทั้งหมด/เกม</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ความยาวโฆษณา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนรอบโฆษณา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                    </div>
                    <div class="col-lg-12 mb-2 pl-4 custom02">
                        <input type="radio" name="bank" value="inactive" id="inactive">
                        <label for="inactive" style="color:#000;">ไม่ใช้งาน</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="PackageDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">รายละเอียดแพ็กเกจโฆษณา</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row ">
                    <div class="col-lg-12 mb-3 mt-2">
                        <div class="bgPackage" style="margin:auto;">
                            <label>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2">
                                        <img src="{{asset('icon/money2.svg') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2">
                                        <label style="font-family:myfont1;font-size:1em;line-height:0.5;color:#000;">แพ็กเกจ 1</label><br>
                                        <label style="font-family:myfont;font-size:1.3em;color:#000;">฿900.00</label>
                                        <label style="font-family:myfont1;font-size:0.9em;color:#000;">/ เดือน</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <label class="btnBuyPackage">
                                            <a href="{{ route('SponsorPayment') }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="row my-2 px-4">
                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-lg-12 ">
                                        <label style="font-family:myfont1;font-size:0.9em;font-weight: 800;color:#000;">รายละเอียด</label>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-1">
                                    <div class="col-lg-12 fontDetailPackage">
                                        <div class="input-container">
                                            <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">ได้โฆษณาความยาว 15 วินาที</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</label>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pendingApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">อนุมัติโฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                    <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-12 mb-2 pl-4 custom02">
                        <input type="radio" name="Approve" id="approve">
                        <label for="approve" style="color:#000;">อนุมัติ</label>
                    </div>
                    <div class="col-lg-12 mb-2 pl-4 custom02">
                        <input type="radio" name="Approve" id="noneapprove">
                        <label for="noneapprove" style="color:#000;">ไม่ใอนุมัติ</label>
                    </div>
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">อนุมัติโฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="status-approve2" >อนุมัติแล้ว</label>
                    </div>
                    <div class="col-lg-12">
                    <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">อนุมัติโฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="status-none-approve2">ไม่ผ่านการอนุมัติ</label>
                    </div>
                    <div class="col-lg-12">
                    <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('dist/js/popper.min.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('dist/js/aos.js') }}"></script>
<script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('dist/js/main.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>

<!-- วัน เดือน ปีเกิด -->
<script> 
    var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
    $(document).ready(function(){
        var option = '<option  class="font-select" value="day">วัน</option>';
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        var option = '<option class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            // option += '<option value="'+ i + '">' + i + '</option>';
            if(i == 1){
                option += '<option class="font-select"  value="'+ i + '">' + "มกราคม" + '</option>';
            }else if(i == 2){
                option += '<option class="font-select"  value="'+ i + '">' + "กุมภาพันธ์" + '</option>';
            }else if(i == 3){
                option += '<option class="font-select"  value="'+ i + '">' + "มีนาคม" + '</option>';
            }else if(i == 4){
                option += '<option class="font-select"  value="'+ i + '">' + "เมษายน" + '</option>';
            }else if(i == 5){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤษภาคม" + '</option>';
            }else if(i == 6){
                option += '<option class="font-select"  value="'+ i + '">' + "มิถุนายน" + '</option>';
            }else if(i == 7){
                option += '<option class="font-select"  value="'+ i + '">' + "กรกฎาคม" + '</option>';
            }else if(i == 8){
                option += '<option class="font-select"  value="'+ i + '">' + "สิงหาคม" + '</option>';
            }else if(i == 9){
                option += '<option class="font-select"  value="'+ i + '">' + "กันยายน" + '</option>';
            }else if(i == 10){
                option += '<option class="font-select"  value="'+ i + '">' + "ตุลาคม" + '</option>';
            }else if(i == 11){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤศจิกายน" + '</option>';
            }else{
                option += '<option class="font-select"  value="'+ i + '">' + "ธันวาคม" + '</option>';
            }
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var option = '<option  class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        var option = '<option  class="font-select" value="year">ปี</option>';
        selectedYear ="year";
        for (var i=1930;i <= d.getFullYear();i++){// years start i
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });
    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }
    function change_year(select)
    {
        if( isLeapYear( $(select).val() ) )
        {
                Days[1] = 29;
                
        }
        else {
            Days[1] = 28;
        }
        if( $("#month").val() == 2)
                {
                    var day = $('#day');
                    var val = $(day).val();
                    $(day).empty();
                    var option = '<option  class="font-select" value="day">วัน</option>';
                    for (var i=1;i <= Days[1];i++){ //add option days
                            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
                }
                    $(day).append(option);
                    if( val > Days[ month ] )
                    {
                            val = 1;
                    }
                    $(day).val(val);
                }
    }
    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option  class="font-select" value="day">วัน</option>';
        var month = parseInt( $(select).val() ) - 1;
        for (var i=1;i <= Days[ month ];i++){ //add option days
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $(day).append(option);
        if( val > Days[ month ] )
        {
            val = 1;
        }
        $(day).val(val);
    }
</script>

<script>
    const myFunction = () => {
    document.getElementById("first").style.display ='block';
    }
    const myFunction2 = () => {
    document.getElementById("first").style.display ='none';
    }
</script>
@endsection