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
                    <button class="btn-sidebar active" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:1.1em;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:1.1em;padding:0px 14px 0px 8px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar pt-2"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
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
                <div class="col-lg-9" style="font-family:myfont;color:#000;font-size:1.2em;">การเติมเงินวอลเลต</div>
                <div class="col-lg-3">
                    <select class="select3">
                        <option class="option-select-rate">ประเภทผู้ใช้</option>
                        <option class="option-select-rate">ผู้ใช้ทั่วไป</option>
                        <option class="option-select-rate">ผู้สนับสนุน</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#topup1">ทั้งหมด</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#topup2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#topup3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#topup4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="topup1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($transfer as $transferList)
                                                    @if($transferList->transferStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$transferList->id}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->update_at)[0]}}</div>
                                                        </div>
                                                    @elseif($transferList->transferStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$transferList->id}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                        </div>
                                                    @elseif($transferList->transferStatus == "ไม่อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$transferList->id}}">ไม่ผ่านการอนุมัติ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="topup2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                           <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($transfer as $transferList)
                                                    @if($transferList->transferStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$transferList->id}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->update_at)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="topup3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($transfer as $transferList)
                                                    @if($transferList->transferStatus == "ไม่อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$transferList->id}}">ไม่ผ่านการอนุมัติ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="topup4" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1">ประเภท</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($transfer as $transferList)
                                                    @if($transferList->transferStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{ $i }}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                            @if($transferList->users_type == "1")
                                                                <div class="col-2 py-1 td1">ผู้ใช้ทั่วไป</div>
                                                            @elseif($transferList->users_type == "3")
                                                                <div class="col-2 py-1 td1">ผู้สนับสนุน</div>
                                                            @endif
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$transferList->id}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $transferList->admin_name }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
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

@foreach($transfer as $transferModal)
<div class="modal fade" id="pendingApprove{{$transferModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">ยืนยีนการโอนเงิน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-2 pt-1 mb-1">
                                <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                @if($transferModal->transferฺBank_name == "bangkok")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span>
                                @elseif($transferModal->transferฺBank_name == "ktc")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span>
                                @elseif($transferModal->transferฺBank_name == "kbank")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                                @elseif($transferModal->transferฺBank_name == "scb")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span>
                                @endif
                                <span style="font-size:0.8em;">(ธนาคารที่โอนเข้า)</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-3 pt-1 mb-1">
                                <span style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ธนาคารที่ชำระ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-6"><input type="text" class="input-disable" value="{{$transferModal->transferAmount}}" placeholder="ยอดเงินที่ต้องชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" value="{{$transferModal->transferAmount}}" placeholder="ยอดเงินที่ชำระจริง" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="วันที่ชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="เวลาที่ชำระ" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                        <form action="{{ route('ApproveTransfer') }}" method="post">
                            @csrf
                            <div id="userKYC" class="custom02">
                                <div data-toggle="modal">
                                    <input type="radio" name="transferStatus" value="อนุมัติแล้ว" id="approve">
                                    <label for="approve" style="color:#000;">อนุมัติ</label>
                                </div>
                                <div>
                                    <input type="radio" name="transferStatus" value="ไม่อนุมัติ" id="noneApprove">
                                    <label for="noneApprove" style="color:#000;" for="nl">ไม่อนุมัติ</label>
                                </div>
                            
                            
                                <div class="noneApprovelist">
                                    <div for="noneApprovelabel" style="color:#000;">หมายเหตุ</div>
                                    <div name="noneApprovediv" form="userKYC">
                                        <textarea class="input-update" style="line-height:120%;font-size:1em;font-family:myfont1;" placeholder="รายละเอียด" row="3"  require></textarea>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                            <input type="hidden" name="confirm_at" value="{{ date('Y-m-d H:i:s') }}">  
                            <input type="hidden" name="id" value="{{ $transferModal->id }}">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('section/Transfer_Img/'.$transferModal->transferImg) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$transferModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">ยืนยีนการโอนเงิน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                        <div class="row"><label class="status-approve" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-2 pt-1 mb-1">
                                <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                @if($transferModal->transferฺBank_name == "bangkok")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span>
                                @elseif($transferModal->transferฺBank_name == "ktc")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span>
                                @elseif($transferModal->transferฺBank_name == "kbank")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                                @elseif($transferModal->transferฺBank_name == "scb")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span>
                                @endif
                                <span style="font-size:0.8em;">(ธนาคารที่โอนเข้า)</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-3 pt-1 mb-1">
                                <span style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ธนาคารที่ชำระ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-6"><input type="text" class="input-disable" value="{{$transferModal->transferAmount}}" placeholder="ยอดเงินที่ต้องชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" value="{{$transferModal->transferAmount}}" placeholder="ยอดเงินที่ชำระจริง" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="วันที่ชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="เวลาที่ชำระ" disabled></input></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('section/Transfer_Img/'.$transferModal->transferImg) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$transferModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">ยืนยีนการโอนเงิน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-6 pb-1 text-center">
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-2 pt-1 mb-1">
                                <img class="mr-2" src="{{asset('home/logo/kbank.svg') }}" />
                                <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                                <span style="font-size:0.8em;">(ธนาคารที่โอนเข้า)</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="px-3 pt-1 mb-1">
                                <span style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span>
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ธนาคารที่ชำระ" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                        <div class="col-lg-6"><input type="text" class="input-disable" placeholder="ยอดเงินที่ต้องชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="ยอดเงินที่ชำระจริง" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="วันที่ชำระ" disabled></input></div>
                            <div class="col-lg-6"><input type="text" class="input-disable" placeholder="เวลาที่ชำระ" disabled></input></div>
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
                        <img style="width:70%;" src="{{asset('home/topup/01.jpg') }}" >
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
  $('.noneApprovelist').hide();
  $('input:radio[name="transferStatus"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'ไม่อนุมัติ')
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