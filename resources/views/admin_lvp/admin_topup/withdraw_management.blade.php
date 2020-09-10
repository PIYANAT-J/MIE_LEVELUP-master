@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/withdraw_management">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-9"><h1 class="fontHeader"> การถอนเงิน</h1></div>
                <!-- <div class="col-3">
                    <select class="select3">
                        <option class="option-select-rate">ประเภทผู้ใช้</option>
                        <option class="option-select-rate">ผู้ใช้ทั่วไป</option>
                        <option class="option-select-rate">ผู้สนับสนุน</option>
                    </select>
                </div> -->
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#withdraw1">ทั้งหมด</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#withdraw2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#withdraw3">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                
                                    <div id="withdraw1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-4 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 p text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 p text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 p text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1 ">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$withdrawList->id}}">
                                                                    <p style="margin:0;">รอการตรวจสอบ</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p"></div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$withdrawList->createAccount)[0]}}</div>
                                                        </div>
                                                    @elseif($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 p text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 p text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$withdrawList->id}}">
                                                                    <p style="margin:0;">อนุมัติแล้ว</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">admin02</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$withdrawList->confirm_at)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="withdraw2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-4 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 p text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 p text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 p text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$withdrawList->id}}">
                                                                    <p style="margin:0;">รอการตรวจสอบ</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p"></div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$withdrawList->createAccount)[0]}}</div>
                                                        </div>
                                                    @endif
                                                    <?php $i = $i+1; ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div id="withdraw3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-4 py-3 th1 p text-left">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 p text-right">จำนวนเงิน</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">อัพเดตล่าสุด</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($withdraw as $withdrawList)
                                                    @if($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-4 py-1 td1 p text-left">{{$withdrawList->name}} {{$withdrawList->surname}}</div>
                                                            <div class="col-2 py-1 td1 p text-right">{{$withdrawList->withdrawAmount}}</div>
                                                            <div class="col-2 py-1 td1">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$withdrawList->id}}">
                                                                    <p style="margin:0;">อนุมัติแล้ว</p>
                                                                </label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">admin02</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$withdrawList->confirm_at)[0]}}</div>
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการถอนเงิน</h1></div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <form action="{{route('AppWithDraw')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="row bgInput field-wrap my-1">
                                <div class="col-6"><input type="text" class="input-disable p" placeholder="ธนาคารที่ต้องการรับเงิน" disabled></input></div>
                                <div class="col-6 text-right">
                                    <img class="mr-2" src="{{asset('home/logo/'.$withdrawModal->withdrawฺBank_name.'.svg') }}" />
                                    @if($withdrawModal->withdrawฺBank_name == "bangkok")
                                        <label><p style="color:#000;margin:0;">ธนาคารกรุงเทพ</p></label>
                                    @elseif($withdrawModal->withdrawฺBank_name == "ktc")
                                        <label><p style="color:#000;margin:0;">ธนาคารกรุงไทย</p></label>
                                    @elseif($withdrawModal->withdrawฺBank_name == "kbank")
                                        <label><p style="color:#000;margin:0;">ธนาคารกสิกรไทย</p></label>
                                    @elseif($withdrawModal->withdrawฺBank_name == "scb")
                                        <label><p style="color:#000;margin:0;">ธนาคารไทยพาณิชย์</p></label>
                                    @endif
                                </div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-3"><input type="text" class="input-disable p" placeholder="ชื่อบัญชี" disabled></input></div>
                                <div class="col-9 text-right"><p style="margin:0;color:#000;">{{$withdrawModal->accountName}}</p></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-3"><input type="text" class="input-disable p" placeholder="เลขบัญชี" disabled></input></div>
                                <div class="col-9 text-right"><p style="margin:0;color:#000;">{{substr($withdrawModal->accountNumber, 0,3)}}-{{substr($withdrawModal->accountNumber, 3,1)}}-{{substr($withdrawModal->accountNumber, 4,5)}}-{{substr($withdrawModal->accountNumber, 9,1)}}</p></div>
                            </div>
                            <div class="row bg-disabled mb-2 py-2">
                                <div class="col-6"><input type="text" class="input-disable p" placeholder="จำนวนที่ต้องถอนเงิน" disabled></input></div>
                                <div class="col-6 text-right"><p style="margin:0;color:#000;">{{$withdrawModal->withdrawAmount}} บาท</p></div>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox_01" name="accept_01">
                                <label for="checkbox_01"><p style="color:#000;margin:0;">โอนเงินแล้ว<p></label>
                            </div>
                        </div>
                    </div>
                    <button name="submit" value="submit" class="btn-submit-red">
                        <p style="color:#000;margin:0;">ยืนยัน</p>
                    </button>
                    <input type="hidden" name="id" value="{{$withdrawModal->id}}">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$withdrawModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการถอนเงิน</h1></div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-12 pb-1">
                        <div class="row"><label class="status-approve2 p" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-6"><input type="text" class="input-disable p" placeholder="ธนาคารที่ต้องการรับเงิน" disabled></input></div>
                            <div class="col-6 text-right">
                                <img class="mr-2" src="{{asset('home/logo/'.$withdrawModal->withdrawฺBank_name.'.svg') }}" />
                                @if($withdrawModal->withdrawฺBank_name == "bangkok")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงเทพ</p></label>
                                @elseif($withdrawModal->withdrawฺBank_name == "ktc")
                                    <label><p style="color:#000;margin:0;">ธนาคารกรุงไทย</p></label>
                                @elseif($withdrawModal->withdrawฺBank_name == "kbank")
                                    <label><p style="color:#000;margin:0;">ธนาคารกสิกรไทย</p></label>
                                @elseif($withdrawModal->withdrawฺBank_name == "scb")
                                    <label><p style="color:#000;margin:0;">ธนาคารไทยพาณิชย์</p></label>
                                @endif
                            </div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" class="input-disable p" placeholder="ชื่อบัญชี" disabled></input></div>
                            <div class="col-9 text-right"><p style="margin:0;color:#000;">{{$withdrawModal->accountName}}</p></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" class="input-disable p" placeholder="เลขบัญชี" disabled></input></div>
                            <div class="col-9 text-right"><p style="margin:0;color:#000;">{{substr($withdrawModal->accountNumber, 0,3)}}-{{substr($withdrawModal->accountNumber, 3,1)}}-{{substr($withdrawModal->accountNumber, 4,5)}}-{{substr($withdrawModal->accountNumber, 9,1)}}</p></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-6"><input type="text" class="input-disable p" placeholder="จำนวนที่ต้องถอนเงิน" disabled></input></div>
                            <div class="col-6 text-right"><p style="margin:0;color:#000;">{{$withdrawModal->withdrawAmount}} บาท</p></div>
                        </div>
                        <div class="checkbox d-none">
                            <input type="checkbox" id="checkbox_01" name="accept_01">
                            <label for="checkbox_01"><p style="color:#000;margin:0;">โอนเงินแล้ว<p></label>
                        </div>
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
        <div class="col-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-910 bgContent"></div>
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