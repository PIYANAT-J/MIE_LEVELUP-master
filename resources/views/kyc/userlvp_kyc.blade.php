@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($guest_user as $USER)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('Avatar') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)</button></a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar active"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if(Auth::user()->updateData == 'true')
                        @if($userKyc->KYC_STATUS == 'รออนุมัติ')
                            <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                        @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                            <span class="status-kyc2 ml-2 px-2">ยืนยันตัวตนแล้ว</span>
                        @elseif($userKyc->KYC_STATUS == 'ไม่อนุมัติ')
                            <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                        @else
                            <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                        @endif
                    @else
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @endif
                </button></a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a>   
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row my-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                            <span class="font-profile1">ยืนยันตัวตน (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์) </br>
                                <b style="font-family:myfont1;font-size: 0.8em;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b>
                            </span>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 mt-2" >
                                    <input class="input-update"  placeholder="บัตรประจำตัวประชาชน" minlength="13" maxlength="13" title="กรุณากรอกข้อมูลให้ครบถ้วน"></input>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                        <div class="col-1"></div>
                                        <div class="col-lg-5 font-kyc">
                                            <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                            1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                            พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                            “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                            2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                            3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                            4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                        </div>
                                        <div class="col-lg-6 text-center "><img class="kyc-pic" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                    </div>
                                        <div class="font-kyc2 my-3 line2"><span style="font-family:myfont;">อัพโหลดรูปหลักฐานยืนยันตัวตน</span>( อัพโหลดได้ไม่เกิน 2 mb ) </div>
                                    <div>
                                        <label id="upload" style="cursor:pointer;" class="font-kyc-upload"><img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ</label>
                                        <div id="thumb" class="thumb-kyc"><img src="home/Kyc/pic-kyc.png"/></div>    
                                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" accept="image/* "/>
                                    </div>
                                    <div class="col-lg-12 mt-2"><button type="submit" class="btn-submit">ยืนยัน</button></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <form action="{{ route('CreateKyc') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach($guest_user as $user)
                            @if(Auth::user()->updateData == 'true')
                                @if($userKyc->KYC_STATUS == 'รออนุมัติ')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 mt-2" >
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                        <input name="GUEST_USERS_ID_CARD" class="input-login px-3"  minlength="13" maxlength="13" value="{{ $user->GUEST_USERS_ID_CARD }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6"></div>
                                            </div>
                                            <div class="row mt-2 ">
                                                <div class="col-lg-12" >
                                                    <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                        <div class="col-1"></div>
                                                        <div class="col-lg-5 font-kyc">
                                                            <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                                            1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                            พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                                            “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                            2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                            3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                            4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                        </div>
                                                        <div class="col-lg-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 mt-2" >
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                        <input name="GUEST_USERS_ID_CARD" class="input-login px-3"  minlength="13" maxlength="13" value="{{ $user->GUEST_USERS_ID_CARD }}" disabled></input>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6"></div>
                                            </div>
                                            <div class="row mt-2 ">
                                                <div class="col-lg-12" >
                                                    <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                        <div class="col-1"></div>
                                                        <div class="col-lg-5 font-kyc">
                                                            <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                                            1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                            พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                                            “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                            2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                            3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                            4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                        </div>
                                                        <div class="col-lg-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($userKyc->KYC_STATUS == 'ไม่อนุมัติ')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 mt-2" >
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                        <input name="GUEST_USERS_ID_CARD" class="input-login px-3"  minlength="13" maxlength="13" value="{{ $user->GUEST_USERS_ID_CARD }}" readonly></input>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6"></div>
                                            </div>
                                            <div class="row mt-2 ">
                                                <div class="col-lg-12" >
                                                    <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                        <div class="col-1"></div>
                                                        <div class="col-lg-5 font-kyc">
                                                            <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                                            1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                            พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                                            “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                            2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                            3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                            4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                            <b style="font-family:myfont;">หมายเหตุ : รายละเอียด</b>
                                                        </div>
                                                        <div class="col-lg-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                                    </div>
                                                        <div class="font-kyc2 my-3 line2"><span style="font-family:myfont;">อัพโหลดรูปหลักฐานยืนยันตัวตน</span>( อัพโหลดได้ไม่เกิน 2 mb ) </div>
                                                    <div>
                                                        <label id="upload" style="cursor:pointer;" class="font-kyc-upload"><img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ</label>
                                                        <div id="thumb" class="thumb-kyc"><img src="home/Kyc/pic-kyc.png"></div>    
                                                        <input id="file_upload" style="display:none" name="KYC_IMG" type="file" accept="image/* "/>
                                                    </div>
                                                    <div class="col-lg-12 mt-2"><button type="submit" class="btn-submit">ยืนยัน</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 mt-2" >
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                        <input name="GUEST_USERS_ID_CARD" class="input-login px-3"  minlength="13" maxlength="13" value="{{ $user->GUEST_USERS_ID_CARD }}" readonly></input>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6"></div>
                                            </div>
                                            <div class="row mt-2 ">
                                                <div class="col-lg-12" >
                                                    <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                        <div class="col-1"></div>
                                                        <div class="col-lg-5 font-kyc">
                                                            <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                                            1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                            พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                                            “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                            2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                            3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                            4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                        </div>
                                                        <div class="col-lg-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                                    </div>
                                                    <div class="font-kyc2 my-3 line2"><span style="font-family:myfont;">อัพโหลดรูปหลักฐานยืนยันตัวตน</span>( อัพโหลดได้ไม่เกิน 2 mb ) </div>
                                                    <div>
                                                        <label id="upload" style="cursor:pointer;" class="font-kyc-upload"><img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ</label>
                                                        <div id="thumb" class="thumb-kyc"><img src="home/Kyc/pic-kyc.png"></div>    
                                                        <input id="file_upload" style="display:none" name="KYC_IMG" type="file" accept="image/* "/>
                                                    </div>
                                                    <div class="col-lg-12 mt-2"><button name="submit" value="submit" type="submit" class="btn-submit">ยืนยัน
                                                        <input type="hidden" name="KYC_STATUS" value="รออนุมัติ">
                                                        <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                        <input type="hidden" name="users_type" value="{{ Auth::user()->users_type }}">
                                                    </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6 mt-2" >
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                    <input name="GUEST_USERS_ID_CARD" class="input-login px-3"  minlength="13" maxlength="13" disabled></input>
                                                </label>
                                            </div>
                                            <div class="col-lg-6"></div>
                                        </div>
                                        <div class="row mt-2 ">
                                            <div class="col-lg-12" >
                                                <div class="row mx-0 py-3" style="background-color: #fffcf4;">
                                                    <div class="col-1"></div>
                                                    <div class="col-lg-5 font-kyc">
                                                        <span style="font-family:myfont;">วิธีการยืนยันตัวตน </span></br>
                                                        1. ใช้กระดาษ A4 จำนวน 1 แผ่น ถ่ายรูปท่าน </br>
                                                        พร้อมบัตรประชาชน / หนังสือเดินทาง เขียนว่า </br>
                                                        “ใช้สำหรับสมัคร...” ที่ท่านต้องการ</br>
                                                        2. ลงวันที่ ที่ท่านยืนยันตัวตน</br>
                                                        3. เซ็นต์ กำกับ ด้วยลายมือของท่านเพื่อเป็นการยืนยัน</br>
                                                        4. อัพโหลดรูปที่ถ่ายไว้ด้านล่าง</br>
                                                        <b style="font-family:myfont;">หมายเหตุ ** กรุณาอัพเดทข้อมูลส่วนตัว</b>
                                                    </div>
                                                    <div class="col-lg-6 text-center"><img class="kyc-pic2" src="{{asset('home/Kyc/kyc.png') }}" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

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
$('button').on('click', function(){
    // $('button').removeClass('active');
    $(this).addClass('active');
});
</script>

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
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection