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
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม/เรทเกม/เรทเนื้อหาเกม</button></a>
                        </div>
                    <button class="btn-sidebar active" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 15px 0px 10px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar active" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                        <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:0.85em;padding:0px 15px 0px 5px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ url('/') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-home" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>หน้าหลัก</button></a>
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
                <div class="col-lg-9" style="font-family:myfont;color:#000;font-size:1.4em;">การถอนเงิน</div>
                <!-- <div class="col-lg-3">
                    <select class="select3">
                        <option class="option-select-rate">ประเภทผู้ใช้</option>
                        <option class="option-select-rate">ผู้ใช้ทั่วไป</option>
                        <option class="option-select-rate">ผู้สนับสนุน</option>
                    </select>
                </div> -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#withdraw1">ทั้งหมด</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#withdraw2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#withdraw3">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="withdraw1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$withdrawList->id}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1"></div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$withdrawList->createAccount)[0]}}</div>
                                                        </div>
                                                    @elseif($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$withdrawList->id}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">admin02</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$withdrawList->confirm_at)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="withdraw2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$withdrawList->id}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1"></div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$withdrawList->createAccount)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="withdraw3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-1 py-3 th1">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$withdrawList->id}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1">admin02</div>
                                                            <div class="col-2 py-1 td1">{{explode(' ',$withdrawList->confirm_at)[0]}}</div>
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

@foreach($withdraw as $withdrawModal)
<div class="modal fade" id="pendingApprove{{$withdrawModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">การถอนเงิน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <form action="{{route('AppWithDraw')}}" method="post">
                    @csrf
                    <div class="row px-3">
                        <div class="col-lg-12 pb-1">
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-3"><input type="text" class="input-disable" placeholder="ธนาคารที่ต้องการรับเงิน" disabled></input></div>
                                <div class="col-9 text-right">
                                    <img class="mr-2" src="{{asset('home/logo/'.$withdrawModal->withdrawฺBank_name.'.svg') }}" />
                                    @if($withdrawModal->withdrawฺBank_name == "bangkok")
                                        <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span>
                                    @elseif($withdrawModal->withdrawฺBank_name == "ktc")
                                        <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span>
                                    @elseif($withdrawModal->withdrawฺBank_name == "kbank")
                                        <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                                    @elseif($withdrawModal->withdrawฺBank_name == "scb")
                                        <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-3"><input type="text" class="input-disable" placeholder="ชื่อบัญชี" disabled></input></div>
                                <div class="col-9 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{$withdrawModal->accountName}}</span></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-3"><input type="text" class="input-disable" placeholder="เลขบัญชี" disabled></input></div>
                                <div class="col-9 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{substr($withdrawModal->accountNumber, 0,3)}}-{{substr($withdrawModal->accountNumber, 3,1)}}-{{substr($withdrawModal->accountNumber, 4,5)}}-{{substr($withdrawModal->accountNumber, 9,1)}}</span></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-6"><input type="text" class="input-disable" placeholder="จำนวนที่ต้องถอนเงิน" disabled></input></div>
                                <div class="col-6 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{$withdrawModal->withdrawAmount}} บาท</span></div>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox_01" name="accept_01">
                                <label for="checkbox_01" style="color:#000;font-weight:bold;padding-top:2px;padding-left:10px;" >โอนเงินแล้ว</label>
                            </div>
                        </div>
                    </div>
                    <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                    <input type="hidden" name="id" value="{{$withdrawModal->id}}">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$withdrawModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">การถอนเงิน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1">
                        <div class="row"><label class="status-approve" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" class="input-disable" placeholder="ธนาคารที่ต้องการรับเงิน" disabled></input></div>
                            <div class="col-9 text-right">
                                <img class="mr-2" src="{{asset('home/logo/'.$withdrawModal->withdrawฺBank_name.'.svg') }}" />
                                @if($withdrawModal->withdrawฺBank_name == "bangkok")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span>
                                @elseif($withdrawModal->withdrawฺBank_name == "ktc")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span>
                                @elseif($withdrawModal->withdrawฺBank_name == "kbank")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span>
                                @elseif($withdrawModal->withdrawฺBank_name == "scb")
                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span>
                                @endif
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" class="input-disable" placeholder="ชื่อบัญชี" disabled></input></div>
                            <div class="col-9 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{$withdrawModal->accountName}}</span></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" class="input-disable" placeholder="เลขบัญชี" disabled></input></div>
                            <div class="col-9 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{substr($withdrawModal->accountNumber, 0,3)}}-{{substr($withdrawModal->accountNumber, 3,1)}}-{{substr($withdrawModal->accountNumber, 4,5)}}-{{substr($withdrawModal->accountNumber, 9,1)}}</span></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-6"><input type="text" class="input-disable" placeholder="จำนวนที่ต้องถอนเงิน" disabled></input></div>
                            <div class="col-6 text-right"><span style="font-family:myfont;font-size:1em;color:#000;">{{$withdrawModal->withdrawAmount}} บาท</span></div>
                        </div>
                        <div class="checkbox d-none">
                            <input type="checkbox" id="checkbox_01" name="accept_01">
                            <label for="checkbox_01" style="color:#000;font-weight:bold;padding-top:2px;padding-left:10px;" >โอนเงินแล้ว</label>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
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