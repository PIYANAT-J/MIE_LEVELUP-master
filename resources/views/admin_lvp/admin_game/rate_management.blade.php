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
                            <div class="col-4 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                            </div>
                            <div class="col-8 sidebar_name pt-2">
                                <span><b style="font-family: myfont;">{{Auth::user()->name}}-{{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก:{{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1em;padding:0px 11px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar active" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม/เรทเกม/เรทเนื้อหาเกม</button></a>
                        </div>
                    <button class="btn-sidebar"data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 15px 0px 10px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                        <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:0.85em;padding:0px 15px 0px 5px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a>
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
                <div class="col-12 text-right">
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">


                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#rate1">จัดการประเภทเกม</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#rate2">จัดการเรทเกม</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#rate3">จัดการเรทเนื้อหา</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="rate1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อประเภทเกม</div>
                                            <div class="col-6 py-3 th1 text-left">คำอธิบาย</div>
                                            <div class="col-2 py-3 th1 text-center">
                                                <label for="" style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#game-type"> + เพิ่มประเภทเกม</label>
                                            </div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">Action</div>
                                                    <div class="col-7 py-1 td1 text-left">ต่อสู้ ตลุยด่าน</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">Adventure</div>
                                                    <div class="col-7 py-1 td1 text-left">เกมส์ในรูปแบบการผจญภัย</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-3 py-1 td1 text-left">BBG</div>
                                                    <div class="col-7 py-1 td1 text-left">Browser-Based Game</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="rate2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1 text-left">ชื่อประเภทเกม</div>
                                            <div class="col-1 py-3 th1 ">รูปภาพ</div>
                                            <div class="col-6 py-3 th1 text-left">คำอธิบาย</div>
                                            <div class="col-2 py-3 th1 text-center">
                                                <label for="" style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#game-rate"> + เพิ่มเรทเกม</label>
                                            </div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-2 py-1 td1 text-left">EC : Early Childhood</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px;" src="{{asset('section/game_rate/EarlyChildhood.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะกับเด็กอายุ 3 – 6 ปี เนื้อหาไม่มีความรุนแรง</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-2 py-1 td1 text-left">E : Everyone</div>
                                                    <div class="col-1 py-1 td1"><img style="width:25px;" src="{{asset('section/game_rate/Everyone.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะสำหรับเด็กอายุ 6 ปีขึ้นไป เนื้อหามีความรุนแรงเพิ่มขึ้นเล็กน้อย เช่น เกมกีฬาที่ไม่ใช่การต่อสู้ ภาษาที่ใช้เป็นภาษาสุภาพ</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-2 py-1 td1 text-left">E10+ : Everyone 10+</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px;" src="{{asset('section/game_rate/Everyone10.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะสำหรับเด็กอายุ 10 ปีขึ้นไป เนื้อหามีความรุนแรงมากขึ้น เช่น มีการต่อสู้เล็กน้อยภายในเกม ภาษามีความซับซ้อนขึ้น มีการเล่นมุกตลกเสียดสีบ้าง</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">4</div>
                                                    <div class="col-2 py-1 td1 text-left">T : Teen</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px%;" src="{{asset('section/game_rate/Teen.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะสำหรับเด็กอายุ 13 ปีขึ้นไป เนื้อหามีความรุนแรงแต่ไม่มาก มีเลือดและยาเสพติดประเภทเหล้าและบุหรี่ ภาษามีความรุนแรงมากขึ้น มีภาพสรีระร่างกายเชิงเพศชัดขึ้นแต่ไม่โป๊เปลือย เนื้อหาส่งผลต่อจิตวิทยาในด้านลบมากขึ้น</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">5</div>
                                                    <div class="col-2 py-1 td1 text-left">M : Mature</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px;" src="{{asset('section/game_rate/Mature.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะสำหรับเด็กอายุ 17 ปีขึ้นไป เนื้อหามีความรุนแรง มีฉากต่อสู้ มียาเสพติด มีฉากเปลือยกาย ภาษามีศัพท์แสลง มีคำหยาบคาย มีเนื้อหากระตุ้นให้ทำความผิด</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1" >6</div>
                                                    <div class="col-2 py-1 td1 text-left">AO : Adults Only</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px;" src="{{asset('section/game_rate/AdultsOnly.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เหมาะสำหรับผู้ใหญ่เท่านั้น ในสหรัฐอเมริกาหมายถึงผู้ที่มีอายุ 18 ปีขึ้นไป เนื้อหามีความรุนแรงสูง มีฉากนองเลือกและฉากเกี่ยวกับเพศรุนแรง และการกระตุ้นให้ทำผิดศีลธรรม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">7</div>
                                                    <div class="col-2 py-1 td1 text-left">RP : Rating Pending</div>
                                                    <div class="col-1 py-1 td1 "><img style="width:25px;" src="{{asset('section/game_rate/RatingPending.svg') }}" ></div>
                                                    <div class="col-7 py-1 td1 text-left">เรทนี้หมายถึงเกมยังไม่ได้รับการพิจารณาเรทอย่างเป็นทางการ มักเป็นเกมที่อยู่ระหว่างการพัฒนาแต่โฆษณาเกมก่อนจำหน่าย</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="rate3" class="tab-pane ">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-3 py-3 th1 text-left">ชื่อเรทเนื้อหาเกม</div>
                                            <div class="col-6 py-3 th1 text-left">คำอธิบาย</div>
                                            <div class="col-2 py-3 th1 text-center">
                                                <label for="" style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#game-rate2"> + เพิ่มเรทเนื้อหาเกม</label>
                                            </div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">Discrimination</div>
                                                    <div class="col-7 py-1 td1 text-left">มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">Drugs</div>
                                                    <div class="col-7 py-1 td1 text-left">มีการใช้สารเสพติดในเกม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-3 py-1 td1 text-left">Fear</div>
                                                    <div class="col-7 py-1 td1 text-left">มีการใช้ความกลัวเข้ามาอยู่ในเกม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">4</div>
                                                    <div class="col-3 py-1 td1 text-left">Gambling</div>
                                                    <div class="col-7 py-1 td1 text-left">มีเรื่องของการพนันอยู่ในเกม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">5</div>
                                                    <div class="col-3 py-1 td1 text-left">Sex</div>
                                                    <div class="col-7 py-1 td1 text-left">มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">6</div>
                                                    <div class="col-3 py-1 td1 text-left">Violence</div>
                                                    <div class="col-7 py-1 td1 text-left">มีการใช้ความรุนแรงภายในเกม</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">7</div>
                                                    <div class="col-3 py-1 td1 text-left">Online</div>
                                                    <div class="col-7 py-1 td1 text-left">เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">8</div>
                                                    <div class="col-3 py-1 td1 text-left">Other</div>
                                                    <div class="col-7 py-1 td1 text-left">อื่นๆ</div>
                                                    <div class="col-1 py-1 td1 text-center">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:0.8em;cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
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

<!-- game type -->

<div class="modal fade" id="game-type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">เพิ่มประเภทเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อประเภทเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">แก้ไขประเภทเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อประเภทเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- game rate -->
<div class="modal fade" id="game-rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">เพิ่มเรทเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">เลือกรูปภาพเรทเกม</div>   
                    <div class="form-group">
                        
                        <div class="row">
                            <div class="col-3"><div id="thumb" class="thumb-rate"><img src="home/imgProfile/pic-profile.png"></div></div>
                            <div class="col-8">
                                <button id="upload" class="btn-upload-pic ml-2 mt-2">เลือกรูป</button>
                                <label for="" style="display:block;font-family:myfont;font-size:0.9em" class="ml-3">ควรเป็นไฟล์นามสกุล .svg</label>
                            </div>
                        </div>
                            
                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                        
                    </div>                    
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อเรทเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">แก้ไขเรทเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">เลือกรูปภาพเรทเกม</div>   
                    <div class="form-group">
                        
                        <div class="row">
                            <div class="col-3"><div id="thumb" class="thumb-rate"><img src="home/imgProfile/pic-profile.png"></div></div>
                            <div class="col-8">
                                <button id="upload" class="btn-upload-pic ml-2 mt-2">เลือกรูป</button>
                                <label for="" style="display:block;font-family:myfont;font-size:0.9em" class="ml-3">ควรเป็นไฟล์นามสกุล .svg</label>
                            </div>
                        </div>
                            
                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                        
                    </div>                    
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อเรทเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- game rate2 -->
<div class="modal fade" id="game-rate2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">เพิ่มเรทเนื้อหาเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อเรทเนื้อหาเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-rate2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">แก้ไขเรทเนื้อหาเกม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <input type="text" class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="ชื่อเรทเนื้อหาเกม" require></input>
                <textarea class="input-update pt-3" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="คำอธิบาย" row="3"  require></textarea>
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
@endsection