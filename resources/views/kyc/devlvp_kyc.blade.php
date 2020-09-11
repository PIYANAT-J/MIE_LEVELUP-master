@extends('layout.dev_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{route('DevKyc')}}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.dev_sidebar')

    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;" >
        <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
            <div class="row">
                <div class="col-12 pb-2 mb-1" style="border-bottom: 1px solid #f2f2f2;">
                    <h1 class="fontHeader">ยืนยันตัวตน (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์)</h1>
                    <h5 style="color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</h5>
                </div>
            </div>
            <form action="{{ route('CreateKyc') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach($developer as $DEV)
                    @if(Auth::user()->updateData == 'true')
                        @if($userKyc->KYC_STATUS == 'รออนุมัติ')
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2" >
                                            <label class="bgInput field-wrap">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="DEV_ID_CARD" class="input1 p ml-2" minlength="13" maxlength="13" value="{{ $DEV->DEV_ID_CARD }}" disabled></input>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col-12" >
                                            <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                <div class="col-lg-1 col-xl-1 d-none d-lg-block d-xl-block"></div>
                                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                    <p style="margin:0;font-weight:800;color: #0f0f0f;">วิธีการยืนยันตัวตน </p>
                                                    <p style="line-height:1.5;color: #0f0f0f;">
                                                        1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่านพร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                        2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                        3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                        4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                    </p>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                                                    <img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2" >
                                            <label class="bgInput field-wrap">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="DEV_ID_CARD" class="input1 p ml-2" minlength="13" maxlength="13" value="{{ $DEV->DEV_ID_CARD }}" disabled></input>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col-12" >
                                            <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                <div class="col-lg-1 col-xl-1 d-none d-lg-block d-xl-block"></div>
                                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                    <p style="margin:0;font-weight:800;color: #0f0f0f;">วิธีการยืนยันตัวตน </p>
                                                    <p style="line-height:1.5;color: #0f0f0f;">
                                                        1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                        2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                        3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                        4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                    </p>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                                                    <img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($userKyc->KYC_STATUS == 'ไม่อนุมัติ')
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2" >
                                            <label class="bgInput field-wrap">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="DEV_ID_CARD" class="input1 p ml-2" minlength="13" maxlength="13" value="{{ $DEV->DEV_ID_CARD }}" disabled></input>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2"></div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col-12" >
                                            <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                <div class="col-lg-1 col-xl-1 d-none d-lg-block d-xl-block"></div>
                                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                    <p style="margin:0;font-weight:800;color: #0f0f0f;">วิธีการยืนยันตัวตน </p>
                                                    <p style="line-height:1.5;color: #0f0f0f;">
                                                        1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                        2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                        3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                        4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                    </p>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                                                    <img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" />
                                                </div>
                                            </div>

                                            <div class="my-3 line2">
                                                <label><h1 class="fontHeader">อัพโหลดรูปหลักฐานยืนยันตัวตน</h1></label>
                                                <label><h5 style="color: #0f0f0f;">(อัพโหลดได้ไม่เกิน 2 mb)</h5></label> 
                                            </div>
                                            
                                            <label id="upload" style="cursor:pointer;" class="font-kyc-upload">
                                                <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                                <label><h1 class="fontHeader">อัพโหลดรูปภาพ</h1></label>
                                            </label>
                                            <div id="thumb" class="thumb-kyc"><img src="home/Kyc/pic-kyc.png"></div>    
                                            <input id="file_upload" style="display:none" name="KYC_IMG" type="file" accept="image/* "/>
                                        
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 mt-2" style="padding:0;">
                                                <button name="submit" value="submit" type="submit" class="btn-submit">
                                                    <p style="margin:0;">ยืนยัน</p>
                                                    <input type="hidden" name="KYC_STATUS" value="รออนุมัติ">
                                                    <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                    <input type="hidden" name="users_type" value="{{ Auth::user()->users_type }}">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        <!-- กรุณายืนยันตัวตน -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2" >
                                            <label class="bgInput field-wrap">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="DEV_ID_CARD" class="input1 p ml-2" minlength="13" maxlength="13" value="{{ $DEV->DEV_ID_CARD }}" disabled></input>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col-12" >
                                            <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                <div class="col-lg-1 col-xl-1 d-none d-lg-block d-xl-block"></div>
                                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                    <p style="margin:0;font-weight:800;color: #0f0f0f;">วิธีการยืนยันตัวตน </p>
                                                    <p style="line-height:1.5;color: #0f0f0f;">
                                                        1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                        2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                        3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                        4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                    </p>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                            </div>

                                            <div class="my-3 line2">
                                                <label><h1 class="fontHeader">อัพโหลดรูปหลักฐานยืนยันตัวตน</h1></label>
                                                <label><h5 style="color: #0f0f0f;">(อัพโหลดได้ไม่เกิน 2 mb)</h5></label> 
                                            </div>

                                            <label id="upload" style="cursor:pointer;" class="font-kyc-upload">
                                                <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                                <label><h1 class="fontHeader">อัพโหลดรูปภาพ</h1></label>
                                            </label>
                                            <div id="thumb" class="thumb-kyc"><img src="home/Kyc/pic-kyc.png"></div>    
                                            <input id="file_upload" style="display:none" name="KYC_IMG" type="file" accept="image/* "/>

                                            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 mt-2">
                                                <button name="submit" value="submit" type="submit" class="btn-submit">
                                                    <p style="margin:0;">ยืนยัน</p>
                                                    <input type="hidden" name="KYC_STATUS" value="รออนุมัติ">
                                                    <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                    <input type="hidden" name="users_type" value="{{ Auth::user()->users_type }}">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2" >
                                        <label class="bgInput field-wrap">
                                                <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                <input name="DEV_ID_CARD" class="input1 p ml-2" minlength="13" maxlength="13" disabled></input>
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                                </div>
                                <div class="row mt-2 ">
                                    <div class="col-12" >
                                        <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                            <div class="col-lg-1 col-xl-1 d-none d-lg-block d-xl-block"></div>
                                            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                <p style="margin:0;font-weight:800;color: #0f0f0f;">วิธีการยืนยันตัวตน </p>
                                                <p style="line-height:1.5;color: #0f0f0f;">
                                                    1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                    พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า
                                                    “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                    2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                    3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                    4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </form>
        </div>
    </div>
    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
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
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

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
@endsection