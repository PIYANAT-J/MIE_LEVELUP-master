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
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 20px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar active"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม</button></a>
                        </div>
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:1.1em;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
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
                    <div class="col-lg-9" style="font-family:myfont;color:#000;font-size:1.2em;">ข้อมูลสมาชิกผู้พัฒนาระบบ</div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Nav tabs -->
                        <ul class="nav topnav2">
                            <li><a class="nav-link active" data-toggle="tab" href="#user1">ทั้งหมด</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#user2">รอการตรวจสอบ</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#user3">ไม่ผ่านการอนุมัติ</a></li>
                            <li><a class="nav-link " data-toggle="tab" href="#user4">อนุมัติแล้ว</a></li>
                        </ul>
                        <!-- Nav tabs -->

                        <div class="row mx-0" >
                            <div class="col-lg-12">
                                <div class="tab-content">
                                    
                                    <div id="user1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS != null)
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                                    <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">รอการตรวจสอบ</label>
                                                                @elseif($Kyc->KYC_STATUS == "อนุมัติ")
                                                                    <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">อนุมัติแล้ว</label>
                                                                @elseif($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                                    <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">ไม่ผ่านการอนุมัติ</label>
                                                                @endif
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                            
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="user2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="user3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">ไม่ผ่านการอนุมัติ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="user4" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-2 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left">อีเมล</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
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
</div>

@foreach($kyc as $KycModel)
<div class="modal fade" id="pendingApprove{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 pb-1">
                        <form action="{{ route('AppKyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="userKYC" class="custom02">
                                <div data-toggle="modal">
                                    <input type="radio" name="KYC_STATUS" value="อนุมัติ" id="approve">
                                    <label for="approve" style="color:#000;">อนุมัติ</label>
                                </div>
                                <div>
                                    <input type="radio" name="KYC_STATUS" value="ไม่อนุมัติ" id="noneApprove">
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
                                <input type="hidden" name="KYC_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="KYC_ID" value="{{ $KycModel->KYC_ID }}">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-lg-12"><input type="text" class="input-disable" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
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
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
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
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
$(document).ready(function() {
  $('.noneApprovelist').hide();
  $('input:radio[name="KYC_STATUS"]').change(
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