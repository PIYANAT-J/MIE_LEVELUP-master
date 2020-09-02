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
                                <span><b style="font-family: myfont;font-size: 1.1vw;">{{Auth::user()->name}} {{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก: {{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:1vw;padding:0px 20px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1.1vw;padding:0px 10px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
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
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:1.2vw;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:1.2vw;padding:0px 14px 0px 8px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar pt-2"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/avatar_management" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile" style="font-size:1.2vw;padding:0px 14px 0px 8px;"></i>จัดการตัวละคร</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:1.1w;padding:0px 15px 0px 13px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ url('/') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-home" style="font-size:1em;padding:0px 17px 0px 13px;"></i>หน้าหลัก</button></a>
                    <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout" style="font-size:1.1vm;padding:0px 15px 0px 15px;"></i>ออกจากระบบ</button></a>
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
                <div class="col-lg-6" style="font-family:myfont;color:#000;font-size:1.2em;">ข้อมูลตัวละคร</div>
                <div class="col-lg-6 text-right">
                    <div id="first">
                        <select class="select5">
                            <option value="0">ทั้งหมด</option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#avatar" onClick="myFunction2()">ตัวละคร</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#item1" onClick="myFunction()" >ศรีษะ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#item2" onClick="myFunction()" >เสื้อผ้า</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#item3" onClick="myFunction()" >อาวุธ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#item4" onClick="myFunction()" >ไอเทมพิเศษ</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div id="avatar" class="tab-pane active"><br>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10 py-3 mb-5" style="background-color:#ffffff;border-radius: 8px;">
                                            <div class="row">
                                                <div class="col-lg-6 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <span class="font-profile1">ตัวละครชาย</span>
                                                </div>
                                                <div class="col-lg-6 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <span class="font-profile1">ตัวละครหญิง</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 line1">
                                                    <div class="row">
                                                        <div class="col-lg-12  mt-2" >
                                                            <div class="form-group" align="center">
                                                                <div id="thumb" class="thumbAvatar "><img src="home/avatar/character/man.png"></div>    
                                                                <input id="file_upload" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                                                <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                                            </div>
                                                            <button type="button" class="btn-submit">ยืนยัน</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12  mt-2" >
                                                            <div class="form-group" align="center">
                                                                <div id="thumb2" class="thumbAvatar "><img src="home/avatar/character/woman.png"></div>    
                                                                <input id="file_upload2" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                <button id="upload2" class="btn-upload-pic mt-2">เลือกรูป</button>
                                                                <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                                            </div>
                                                            <button type="button" class="btn-submit">ยืนยัน</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                </div>

                                <div id="item1" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">รูปภาพ</div>
                                        <div class="col-2 py-3 th1">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1">ประเภท</div>
                                        <div class="col-1 py-3 th1">ชนิด</div>
                                        <div class="col-2 py-3 th1">ราคา</div>
                                        <div class="col-1 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1 text-right">
                                            <label style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#AddItem1"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/hair/h01.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1">ทรงผม</div>
                                                <div class="col-1 py-1 td1">ขาย</div>
                                                <div class="col-2 py-1 td1 text-right">
                                                    1000 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>1500</h5></label>
                                                    <label ><h5 style="color:#ce0005">(-5%)</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditItem1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="item2" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">รูปภาพ</div>
                                        <div class="col-2 py-3 th1">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1">ประเภท</div>
                                        <div class="col-1 py-3 th1">ชนิด</div>
                                        <div class="col-2 py-3 th1">ราคา</div>
                                        <div class="col-1 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1 text-right">
                                            <label style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#AddItem2"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/clothes/c05.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1">ฮีโร่</div>
                                                <div class="col-1 py-1 td1">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 text-right">0 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>0</h5></label>
                                                    <label ><h5 style="color:#ce0005">0</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditItem2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="item3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">รูปภาพ</div>
                                        <div class="col-2 py-3 th1">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1">ประเภท</div>
                                        <div class="col-1 py-3 th1">ชนิด</div>
                                        <div class="col-2 py-3 th1">ราคา</div>
                                        <div class="col-1 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1 text-right">
                                            <label style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#AddItem3"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s02.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1">ดาบ</div>
                                                <div class="col-1 py-1 td1">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 text-right">0 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>0</h5></label>
                                                    <label ><h5 style="color:#ce0005">0</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditItem3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="item4" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">รูปภาพ</div>
                                        <div class="col-2 py-3 th1">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1">ประเภท</div>
                                        <div class="col-1 py-3 th1">ชนิด</div>
                                        <div class="col-2 py-3 th1">ราคา</div>
                                        <div class="col-1 py-3 th1">สถานะ</div>
                                        <div class="col-2 py-3 th1 text-right">
                                            <label style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#AddItem4"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/other/armor/a01.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1">เสื้อเกราะ</div>
                                                <div class="col-1 py-1 td1">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 text-right">2544<br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>2222</h5></label>
                                                    <label ><h5 style="color:#ce0005">(-10%)</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditItem3"></i>
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
</div>

<div class="modal fade" id="AddItem1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem1" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem1" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem1" class="btn-upload-pic mt-2">เลือกรูป</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ทรงผม</option>
                                <option value="">สีตา</option>
                                <option value="">แว่นตา</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
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

<div class="modal fade" id="EditItem1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ส่วนลด</label> <br>
                            <input id="name" type="text" class="input-login px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <div class="col-lg-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive" id="inactive01">
                            <label for="inactive01" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
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

<div class="modal fade" id="AddItem2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem2" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem2" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem2" class="btn-upload-pic mt-2">เลือกรูป</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภทชุด</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ไปรเวท</option>
                                <option value="">ฮีโร่</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
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

<div class="modal fade" id="EditItem2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ส่วนลด</label> <br>
                            <input id="name" type="text" class="input-login px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <div class="col-lg-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
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

<div class="modal fade" id="AddItem3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem3" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem3" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem3" class="btn-upload-pic mt-2">เลือกรูป</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภทอาวุธ</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ดาบ</option>
                                <option value="">คฑา</option>
                                <option value="">ปืน</option>
                                <option value="">ธนู</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
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

<div class="modal fade" id="EditItem3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ส่วนลด</label> <br>
                            <input id="name" type="text" class="input-login px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <div class="col-lg-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
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

<div class="modal fade" id="AddItem4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem4" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem4" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem4" class="btn-upload-pic mt-2">เลือกรูป</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" required autofocus>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">หมวก/มงกุฏ</option>
                                <option value="">ถุงมือ</option>
                                <option value="">เสื้อเกราะ</option>
                                <option value="">รองเท้า</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <select class="selectProvince" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
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

<div class="modal fade" id="EditItem4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อไอเทม</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">คำอธิบาย</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภท</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ชนิด</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ราคา</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ส่วนลด</label> <br>
                            <input id="name" type="text" class="input-login px-3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2" style="padding:0;">เพศ</label> <br>
                            <input id="name" type="text" class="input-login px-3" readonly>
                        </label>
                        <div class="col-lg-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>



<script> /*ตัวละครชาย */
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

<script> /*ตัวละครหญิง */
$(function () {
    $("#upload2").on("click",function(e){
        $("#file_upload2").show().click().hide();
        e.preventDefault();
    });
    $("#file_upload2").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumb2").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumb2");
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


<script> /*item1 */
$(function () {
    $("#uploaditem1").on("click",function(e){
        $("#file_uploaditem1").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem1").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem1").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem1");
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

<script> /*item2 */
$(function () {
    $("#uploaditem2").on("click",function(e){
        $("#file_uploaditem2").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem2").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem2").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem2");
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

<script> /*item3 */
$(function () {
    $("#uploaditem3").on("click",function(e){
        $("#file_uploaditem3").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem3").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem3").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem3");
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

<script> /*item4 */
$(function () {
    $("#uploaditem4").on("click",function(e){
        $("#file_uploaditem4").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem4").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem4").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem4");
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
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
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