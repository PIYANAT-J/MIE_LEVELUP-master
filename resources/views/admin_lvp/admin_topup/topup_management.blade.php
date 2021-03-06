@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/topup_management">
        @include('profile.sidebar.admin_sidebar')

        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input style="font-family:myfont1;font-size:1em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-9"><h1 class="fontHeader">การแจ้งโอน</h1></div>
                <div class="col-3">
                    <select class="SelectWh p">
                        <option>ประเภทผู้ใช้</option>
                        <option>ผู้ใช้ทั่วไป</option>
                        <option>ผู้สนับสนุน</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#topup1">ทั้งหมด</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#topup2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#topup3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#topup4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="topup1" class="tab-pane active">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($transfer as $transferList)
                                                @if($transferList->transferStatus == "รอการอนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 ">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$transferList->id}}">
                                                                <p style="margin:0;">รอการตรวจสอบ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->update_at)[0]}}</div>
                                                    </div>
                                                @elseif($transferList->transferStatus == "อนุมัติแล้ว")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$transferList->id}}">
                                                                <p style="margin:0;">อนุมัติแล้ว</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                    </div>
                                                @elseif($transferList->transferStatus == "ไม่อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$transferList->id}}">
                                                                <p style="margin:0;">ไม่ผ่านการอนุมัติ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                    </div>
                                                @endif
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="topup2" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($transfer as $transferList)
                                                @if($transferList->transferStatus == "รอการอนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$transferList->id}}">
                                                                <p style="margin:0;">รอการตรวจสอบ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->update_at)[0]}}</div>
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="topup3" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($transfer as $transferList)
                                                @if($transferList->transferStatus == "ไม่อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$transferList->id}}">
                                                                <p style="margin:0;">ไม่ผ่านการอนุมัติ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->confirm_at)[0]}}</div>
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="topup4" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 p">ประเภท</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($transfer as $transferList)
                                                @if($transferList->transferStatus == "อนุมัติแล้ว")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p text-left">{{ $transferList->name }} {{ $transferList->surname }}</div>
                                                        @if($transferList->users_type == "1")
                                                            <div class="col-2 py-1 td1 p">ผู้ใช้ทั่วไป</div>
                                                        @elseif($transferList->users_type == "3")
                                                            <div class="col-2 py-1 td1 p">ผู้สนับสนุน</div>
                                                        @endif
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$transferList->id}}">
                                                                <p style="margin:0;">อนุมัติแล้ว</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-2 py-1 td1 p">{{ $transferList->admin_name }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$transferList->confirm_at)[0]}}</div>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการโอนเงิน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row bgInput field-wrap my-1">
                            <div class="px-2 py-1">
                                <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                @if($transferModal->transferฺBank_name == "bangkok")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงเทพ</p></label>
                                @elseif($transferModal->transferฺBank_name == "ktc")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "kbank")
                                    <label><p style="color:#000;margin:0;">ธนาคารกสิกรไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "scb")
                                    <label><p style="color:#000;margin:0;">ธนาคารไทยพาณิชย์</p></label>
                                @endif
                                <label><h5 style="color:#000;margin:0;">(ธนาคารที่โอนเข้า)</h5></label>
                            </div>
                        </div>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">วิธีชำระชำระเงิน</p>
                            <input type="text" class="input1 p pl-2" value="โอน/ชำระผ่านบัญชีธนาคาร" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ธนาคารที่ชำระ</p>
                            <input type="text" class="input1 p pl-2" disabled>
                        </label>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ต้องชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ชำระจริง</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">วันที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">เวลาที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-1">
                        <form action="{{ route('ApproveTransfer') }}" method="post">
                            @csrf
                            <div id="userKYC" class="custom02">
                                <div data-toggle="modal">
                                    <input type="radio" name="transferStatus" value="อนุมัติแล้ว" id="approve">
                                    <label for="approve"><p style="color:#000;margin:0;">อนุมัติ</p></label>
                                </div>
                                <div>
                                    <input type="radio" name="transferStatus" value="ไม่อนุมัติ" id="noneApprove">
                                    <label for="noneApprove"><p style="color:#000;margin:0;">ไม่อนุมัติ</p></label>
                                </div>
                            
                                
                                <div class="noneApprovelist">
                                    <div for="noneApprovelabel"><p style="color:#000;margin:0;">หมายเหตุ</p></div>
                                    <div name="noneApprovediv" form="userKYC">
                                        <textarea class="input1 p pl-2" placeholder="รายละเอียด" row="3"  require></textarea>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" value="submit" class="btn-submit-red">
                                <p style="color:#fff;margin:0;">ยืนยัน</p>
                            </button>
                            <input type="hidden" name="confirm_at" value="{{ date('Y-m-d H:i:s') }}">  
                            <input type="hidden" name="id" value="{{ $transferModal->id }}">
                            <input type="hidden" name="transferInvoice" value="{{ $transferModal->transferInvoice }}">
                        </form>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('section/Transfer_Img/'.$transferModal->transferImg) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$transferModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการโอนเงิน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row ">
                    <div class="col-6">
                        <label class="status-approve2 p" style="text-align:center;">อนุมัติแล้ว</label>
                        <div class="row bgInput field-wrap my-1">
                            <div class="px-2 py-1">
                                <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                @if($transferModal->transferฺBank_name == "bangkok")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงเทพ</p></label>
                                @elseif($transferModal->transferฺBank_name == "ktc")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "kbank")
                                    <label><p style="color:#000;margin:0;">ธนาคารกสิกรไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "scb")
                                    <label><p style="color:#000;margin:0;">ธนาคารไทยพาณิชย์</p></label>
                                @endif
                                <label><h5 style="color:#000;margin:0;">(ธนาคารที่โอนเข้า)</h5></label>
                            </div>
                        </div>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">วิธีชำระชำระเงิน</p>
                            <input type="text" class="input1 p pl-2" value="โอน/ชำระผ่านบัญชีธนาคาร" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ธนาคารที่ชำระ</p>
                            <input type="text" class="input1 p pl-2" disabled>
                        </label>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ต้องชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ชำระจริง</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">วันที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">เวลาที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('section/Transfer_Img/'.$transferModal->transferImg) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$transferModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการโอนเงิน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row">
                <div class="col-6">
                        <label class="status-approve2 p" style="text-align:center;">อนุมัติแล้ว</label>
                        <div class="row bgInput field-wrap my-1">
                            <div class="px-2 py-1">
                                <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                @if($transferModal->transferฺBank_name == "bangkok")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงเทพ</p></label>
                                @elseif($transferModal->transferฺBank_name == "ktc")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "kbank")
                                    <label><p style="color:#000;margin:0;">ธนาคารกสิกรไทย</p></label>
                                @elseif($transferModal->transferฺBank_name == "scb")
                                    <label><p style="color:#000;margin:0;">ธนาคารไทยพาณิชย์</p></label>
                                @endif
                                <label><h5 style="color:#000;margin:0;">(ธนาคารที่โอนเข้า)</h5></label>
                            </div>
                        </div>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">วิธีชำระชำระเงิน</p>
                            <input type="text" class="input1 p pl-2" value="โอน/ชำระผ่านบัญชีธนาคาร" disabled>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ธนาคารที่ชำระ</p>
                            <input type="text" class="input1 p pl-2" disabled>
                        </label>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ต้องชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยอดเงินที่ชำระจริง</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6" style="padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">วันที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                            <div class="col-6" style="padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">เวลาที่ชำระ</p>
                                    <input type="text" class="input1 p pl-2" value="{{$transferModal->transferAmount}}" disabled>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-1">
                        <label class="status-none-approve2 p" style="text-align:center;">ไม่ผ่านการอนุมัติ</label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">หมายเหตุ</p>
                            <label class="input1 p pl-2" ></label>
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 pb-1 text-center">
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
        <div class="col-2 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 bgContent"></div>
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