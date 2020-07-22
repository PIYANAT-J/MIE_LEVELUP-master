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
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{Auth::user()->name}}-{{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก:{{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 20px;padding:0px 11px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar active" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม/เรทเกม/เรทเนื้อหาเกม</button></a>
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
                        <input style="font-family:myfont1;font-size:1.3em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-9" style="font-family:myfont;color:#000;font-size:1.4em;">ข้อมูลการอัพโหลดเกม</div>
                <div class="col-3 text-right">
                    <select class="select3">
                        <option class="option-select-rate">ประเภทเกม</option>
                        <option class="option-select-rate">Action</option>
                        <option class="option-select-rate">Adventure</option>
                        <option class="option-select-rate">BBG</option>
                        <option class="option-select-rate">Board Game</option>
                        <option class="option-select-rate">Casual</option>
                        <option class="option-select-rate">Console</option>
                        <option class="option-select-rate">Fantasy</option>
                        <option class="option-select-rate">Fighting</option>
                        <option class="option-select-rate">Flight</option>
                        <option class="option-select-rate">FPS</option>
                        <option class="option-select-rate">Historical</option>
                        <option class="option-select-rate">Martail Arts</option>
                        <option class="option-select-rate">MMORPG</option>
                        <option class="option-select-rate">MOBA</option>
                        <option class="option-select-rate">Music Game</option>
                        <option class="option-select-rate">Puzzle</option>
                        <option class="option-select-rate">Racing</option>
                        <option class="option-select-rate">RTS</option>
                        <option class="option-select-rate">Side Scrolling Game</option>
                        <option class="option-select-rate">Simulation</option>
                        <option class="option-select-rate">Social</option>
                        <option class="option-select-rate">Sport</option>
                        <option class="option-select-rate">Strategy</option>
                        <option class="option-select-rate">Survival</option>
                        <option class="option-select-rate">Tactical Combat</option>
                        <option class="option-select-rate">TBS</option>
                        <option class="option-select-rate">TPS</option>
                        <option class="option-select-rate">Trading card </option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#spon1">ทั้งหมด</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#spon2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#spon4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="spon1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1">ชื่อเกม</div>
                                            <div class="col-2 py-3 th1">ผู้พัฒนา</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($game as $gameList)
                                                    @if($gameList->GAME_STATUS == "รออนุมัติ")
                                                        <div class="row item">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->name}} {{$gameList->surname}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_TYPE}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$gameList->GAME_ID}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{$gameList->ADMIN_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                        </div>
                                                    @elseif($gameList->GAME_STATUS == "อนุมัติ")
                                                        <div class="row item">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->name}} {{$gameList->surname}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_TYPE}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$gameList->GAME_ID}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{$gameList->ADMIN_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="spon2" class="tab-pane ">
                                    <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1">ชื่อเกม</div>
                                            <div class="col-2 py-3 th1">ผู้พัฒนา</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($game as $gameList)
                                                    @if($gameList->GAME_STATUS == "รออนุมัติ")
                                                        <div class="row item">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->name}} {{$gameList->surname}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_TYPE}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$gameList->GAME_ID}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{$gameList->ADMIN_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="spon3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1">อีเมล</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ (ยืนยันตัวตน)</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <div class="row item">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-2 py-1 td1">ชื่อ-นามสกุล</div>
                                                    <div class="col-2 py-1 td1">spon3@email.com</div>
                                                    <div class="col-2 py-1 td1">บุคคลธรรมดา</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin01</div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="spon4" class="tab-pane">
                                    <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1">ชื่อเกม</div>
                                            <div class="col-2 py-3 th1">ผู้พัฒนา</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($game as $gameList)
                                                    @if($gameList->GAME_STATUS == "อนุมัติ")
                                                        <div class="row item">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->name}} {{$gameList->surname}}</div>
                                                            <div class="col-2 py-1 td1">{{$gameList->GAME_TYPE}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$gameList->GAME_ID}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{$gameList->ADMIN_NAME}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$gameList->GAME_DATE)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
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

@foreach($game as $gameModal)
<div class="modal fade" id="pendingApprove{{$gameModal->GAME_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">อนุมัติการอัพโหลดเกม</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>
            <div class="modal-body font-rate-modal">
                    <div class="row px-3">
                        <div class="col-lg-6 pb-1">
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-lg-12"><input type="text" class="input-disable" value="{{$gameModal->GAME_NAME}}" placeholder="ชื่อเกม" disabled></input></div>
                            </div>
                            <div class="row bg-disabled mb-2 pt-3 pb-1">
                                <div class="col-lg-12">
                                    <label for="" style="color:#757589;">{{$gameModal->GAME_DESCRIPTION}}</label>
                                </div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-lg-12"><input type="text" class="input-disable" value="{{$gameModal->name}} {{$gameModal->surname}}" placeholder="ชื่อผู้พัฒนา" disabled></input></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-lg-12"><input type="text" class="input-disable" value="{{$gameModal->GAME_TYPE}}" placeholder="ประเภทเกม" disabled></input></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-lg-12"><input type="text" class="input-disable" value="{{$gameModal->RATED_ESRB}}" placeholder="เรทเกม" disabled></input></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-lg-12"><input type="text" class="input-disable" value="{{$gameModal->RATED_B_L}}" placeholder="เรทเนื้อหา" disabled></input></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-8"><input type="text" class=" input-disable" value="{{$gameModal->GAME_FILE}}" placeholder="ชื่อไฟล์เกม" disabled></input></div>
                                <div class="col-4"><input type="text" class=" input-disable" value="{{$gameModal->GAME_SIZE}}" placeholder="ขนาดไฟล์เกม" disabled></input></div>
                            </div>
                        </div>
                        <div class="col-lg-6 pb-1">
                            <div class="row">
                                <div class="col-lg-12" style="color:#000;font-family:myfont;">รูปภาพหน้าปก</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="game-approve-pic" src="{{asset('section/File_game/Profile_game/'.$gameModal->GAME_IMG_PROFILE) }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-2" style="color:#000;font-family:myfont;">รูปภาพเพิ่มเติม</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach($gameImg as $GameImg)
                                        @if($GameImg->GAME_ID == $gameModal->GAME_ID)
                                            <img class="game-approve-pic-etc" src="{{asset('section/picture_game/Game_Img/'.$GameImg->GAME_IMG_NAME) }}" />
                                        @endif
                                    @endforeach
                                    <!-- <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game9.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game10.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game11.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game12.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game13.png') }}" />
                                    <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game14.png') }}" /> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 bg-disabled pt-3 pb-1">
                            <label for="" style="color:#757589;">{{$gameModal->GAME_DESCRIPTION_FULL}}</label>
                        </div>

                        <div class="checkbox ml-3 mt-2">
                            <input type="checkbox" id="checkbox_01{{$gameModal->GAME_ID}}" name="accept_01">
                            <label for="checkbox_01{{$gameModal->GAME_ID}}" style="color:#000;font-weight:bold;padding-top:2px;padding-left:10px;" >อนุมัติ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                            <input type="hidden" name="GAME_ID" value="{{$gameModal->GAME_ID}}">
                            <input type="hidden" name="GAME_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$gameModal->GAME_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">อนุมัติการอัพโหลดเกม</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1">
                        <div class="row"><label class="status-approve" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อเกม" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 pt-3 pb-1">
                            <div class="col-lg-12">
                                <label for="" style="color:#757589;">คำอธิบาย</label>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อผู้พัฒนา" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ประเภทเกม" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="เรทเกม" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="เรทเนื้อหา" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-8"><input type="text" class=" input-disable" placeholder="ชื่อไฟล์เกม" disabled></input></div>
                            <div class="col-4"><input type="text" class=" input-disable" placeholder="ขนาดไฟล์เกม" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                        <div class="row">
                            <div class="col-lg-12" style="color:#000;font-family:myfont;">รูปภาพหน้าปก</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="game-approve-pic" src="{{asset('section/picture_game/game9.png') }}" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-2" style="color:#000;font-family:myfont;">รูปภาพเพิ่มเติม</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game9.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game10.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game11.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game12.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game13.png') }}" />
                                <img class="game-approve-pic-etc" src="{{asset('section/picture_game/game14.png') }}" />
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-lg-12 bg-disabled pt-3 pb-1">
                            <label for="" style="color:#757589;">รายละเอียด</label>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

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
@endsection