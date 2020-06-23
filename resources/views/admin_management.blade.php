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
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดกาผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 20px;padding:0px 11px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_approve" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; อนุมัติเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการเรทเกม</button></a>
                            <a href="/rate2_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการเรทเนื้อหาเกม</button></a>
                        </div>
                    <button class="btn-sidebar" class="btn-sidebar active" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_approve" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; อนุมัติการเติมเงิน</button></a>
                            <a href="/withdraw_approve" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; อนุมัติการถอนเงิน</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:0.85em;padding:0px 15px 0px 5px;"></i>จัดการสินค้า</button></a>
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
                <div class="col-lg-12" style="font-family:myfont;color:#000;font-size:1.4em;">ข้อมูลผู้ดูแลระบบ</div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active top-left" data-toggle="tab" href="#admin1">รายชื่อผู้ดูแลระบบ</a></li>
                        <li><a class="nav-link top-right" data-toggle="tab" href="#admin2">เพิ่มผู้ดูแลระบบ</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12" style="margin:0;">
                            <div class="tab-content">
                                
                                    <div id="admin1" class="tab-pane active row4">
                                        <div class="row">
                                            <div class="col-2 py-3 th1">หมายเลขผู้ใช้</div>
                                            <div class="col-3 py-3 th1">ชื่อผูใช้</div>
                                            <div class="col-3 py-3 th1">ชื่อ-นามสกุล</div>
                                            <div class="col-4 py-3 th1">อีเมล</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2 py-1 td1">01</div>
                                            <div class="col-3 py-1 td1">admin01</div>
                                            <div class="col-3 py-1 td1">ชื่อ-นามสกุล</div>
                                            <div class="col-4 py-1 td1">admin01@gmail.com</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 py-1 td1">02</div>
                                            <div class="col-3 py-1 td1">admin02</div>
                                            <div class="col-3 py-1 td1">ชื่อ-นามสกุล</div>
                                            <div class="col-4 py-1 td1">admin02@gmail.com</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 py-1 td1">03</div>
                                            <div class="col-3 py-1 td1">admin03</div>
                                            <div class="col-3 py-1 td1">ชื่อ-นามสกุล</div>
                                            <div class="col-4 py-1 td1">admin03@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="admin2" class="tab-pane"><br>
                                    <!-- <div class="row4"> -->
                                        555
                                    <!-- </div> -->
                                </div>

                                
                            </div>
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
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

@endsection