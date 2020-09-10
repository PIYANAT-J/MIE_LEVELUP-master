@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/user_management">
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
                    <div class="col-12"><h1 class="fontHeader">ข้อมูลการยืนยันตัวตนผู้ใช้ทั่วไป</h1></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Nav tabs -->
                        <ul class="nav topnav2">
                            <li><a class="nav-link active p" data-toggle="tab" href="#user1">ทั้งหมด</a></li>
                            <li><a class="nav-link p" data-toggle="tab" href="#user2">รอการตรวจสอบ</a></li>
                            <li><a class="nav-link p" data-toggle="tab" href="#user3">ไม่ผ่านการอนุมัติ</a></li>
                            <li><a class="nav-link p" data-toggle="tab" href="#user4">อนุมัติแล้ว</a></li>
                        </ul>
                        <!-- Nav tabs -->

                        <div class="row mx-0" >
                            <div class="col-12">
                                <div class="tab-content">
                                    
                                    <div id="user1" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS != null)
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1 p">
                                                                @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                                    <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">รอการตรวจสอบ</label>
                                                                @elseif($Kyc->KYC_STATUS == "อนุมัติ")
                                                                    <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">อนุมัติแล้ว</label>
                                                                @elseif($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                                    <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">ไม่ผ่านการอนุมัติ</label>
                                                                @endif
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                            
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id="user2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1 p">
                                                                <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">รอการตรวจสอบ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                                <!-- <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">user2@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">3</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">user3@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1"></div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div id="user3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1 p">
                                                                <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">ไม่ผ่านการอนุมัติ</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                        </div>
                                                        <?php $i = $i+1; ?>
                                                    @endif
                                                @endforeach
                                                <!-- <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">user1@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin02</div>
                                                    <div class="col-2 py-1 td1">23/06/63</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">2</div>
                                                    <div class="col-3 py-1 td1 text-left">ชื่อ-นามสกุล</div>
                                                    <div class="col-3 py-1 td1 text-left">user2@email.com</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-1 py-1 td1">admin02</div>
                                                    <div class="col-2 py-1 td1">20/06/63</div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div id="user4" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1 p">#</div>
                                            <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                            <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                            <div class="col-2 py-3 th1 p">สถานะ</div>
                                            <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                            <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                            <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-12">
                                                <?php $i = 1; ?>
                                                @foreach($kyc as $Kyc)
                                                    @if($Kyc->KYC_STATUS == "อนุมัติ")
                                                        <div class="row">
                                                            <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                            <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                            <div class="col-2 py-1 td1 p">
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">อนุมัติแล้ว</label>
                                                            </div>
                                                            <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                            <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">บัตรประจำตัวประชาชน</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->KYC_ID_CARD}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อ</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->name}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">นามสกุล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->surname}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">อีเมล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->email}}" readonly>
                        </label>
                    </div>
                    
                    <div class="col-6 pb-1">
                        <form action="{{ route('AppKyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="userKYC" class="custom02">
                                <div>
                                    <input type="radio" name="KYC_STATUS" value="อนุมัติ" id="approve">
                                    <label for="approve"><p style="color:#000;margin:0;">อนุมัติ</p></label>
                                </div>
                                <div>
                                    <input type="radio" name="KYC_STATUS" value="ไม่อนุมัติ" id="noneApprove">
                                    <label for="noneApprove"><p style="color:#000;margin:0;">ไม่อนุมัติ</p></label>
                                </div>
                            
                            
                                <div class="noneApprovelist">
                                    <div for="noneApprovelabel"><p class="mt-2" style="color:#000;margin:0;height:15px;">หมายเหตุ<p></div>
                                    <div name="noneApprovediv" form="userKYC">
                                        <textarea class="input1 p pl-2" placeholder="รายละเอียด" row="3"  require></textarea>
                                    </div>
                                </div>
                            </div>
                                <button name="submit" value="submit" class="btn-submit-red">
                                    <p style="color:#ffffff;margin:0;">ยืนยัน</p>
                                </button>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1">
                        <label class="status-approve2 p" style="text-align:center;">อนุมัติแล้ว</label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">บัตรประจำตัวประชาชน</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->KYC_ID_CARD}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อ</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->name}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">นามสกุล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->surname}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">อีเมล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->email}}" readonly>
                        </label>
                    </div>
                    <div class="col-6 pb-1"></div>
                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">บัตรประจำตัวประชาชน</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->KYC_ID_CARD}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อ</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->name}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">นามสกุล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->surname}}" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">อีเมล</p>
                            <input type="text" class="input1 p ml-2" value="{{$KycModel->email}}" readonly>
                        </label>
                    </div>
                    <div class="col-6 pb-1">
                        <label class="status-none-approve2 p" style="text-align:center;">ไม่ผ่านการอนุมัติ</label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">หมายเหตุ</p>
                            <label class="input1 p pl-2" ></label>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
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