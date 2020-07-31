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
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวตนแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
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
        <!-- update profile -->
        @foreach($guest_user as $USER)
            @if($USER->USER_ID == Auth::user()->id)
                    <div class="col-lg-9" style="background-color:#f5f5f5;">
                        <div class="row mt-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                                <form action="{{ route('EditProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                            <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br>
                                            <b style="font-family:myfont1;font-size: 0.8em;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12 line1 mt-2" >
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อ</label> <br>
                                                        <input name="name" class="input-login px-3" value="{{ Auth::user()->name }}"></input>
                                                    </label>
                                                    @error('name')
                                                        <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                                    @enderror
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">นามสกุล</label> <br>
                                                        <input name="surname" class="input-login px-3" value="{{ Auth::user()->surname }}" ></input>
                                                    </label>
                                                    @error('surname')
                                                        <span class="text-danger font-error">กรุณากรอกนามสกุล</span>
                                                    @enderror
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เบอร์โทรศัพท์</label> <br>
                                                        <input name="GUEST_USERS_TEL" type="text" class="input-login px-3 @error('GUEST_USERS_TEL') is-invalid @enderror"  data-toggle="tooltip" value="{{ $USER->GUEST_USERS_TEL ?? old('GUEST_USERS_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                    </label>
                                                    @error('GUEST_USERS_TEL')
                                                        <span class="text-danger font-error">กรุณากรอกเบอร์โทรศัพท์</span>
                                                    @enderror
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                        <input name="GUEST_USERS_ID_CARD" type="text" class="input-login px-3" value="{{ $USER->GUEST_USERS_ID_CARD ?? old('GUEST_USERS_ID_CARD')}}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                    </label>
                                                    @error('GUEST_USERS_ID_CARD')
                                                        <span class="text-danger font-error">เลขบัตรประจำตัวประชาชนไม่ถูกต้อง</span>
                                                    @enderror
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row mx-0">
                                                                <!-- <input id="GUEST_USERS_BIRTHDAY" name="GUEST_USERS_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="YYYY-MM-DD" value="{{ old('GUEST_USERS_BIRTHDAY') }}" title=""> -->
                                                            <!-- <input type="number" name="RATING" id="rating-input" min="1" max="5"> -->
                                                                <?php
                                                                    $yyyy = substr($USER->GUEST_USERS_BIRTHDAY,0,4);
                                                                    $mm = substr($USER->GUEST_USERS_BIRTHDAY,5,2);
                                                                    $dd = substr($USER->GUEST_USERS_BIRTHDAY,8,2);
                                                                ?>
                                                                <label class="bgInput field-wrap">
                                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">วัน เดือน ปีเกิด</label> <br>
                                                                    <label style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></label>
                                                                    <label style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></label>
                                                                    <label style="padding:0;"><SELECT  size="1" id ="day" name = "dd"></SELECT></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-2">
                                                            <button name="submit" id="submit" value="submit" type="submit" class="btn-submit">ยืนยัน
                                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                                <input type="hidden" name="DATE_MODIFY" value="{{ date('Y-m-d H:i:s') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-5" align="center">
                                                <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG)}}"></div>    
                                                <input id="file_upload" style="display:none" name="GUEST_USERS_IMG" type="file" multiple="true" accept="image/* "/>
                                                <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                                <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </form>
            @endif
        @endforeach
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
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<!-- วัน เดือน ปีเกิด -->
<script>
            // var year = $yyyy;
            // var month = $mm;
            // var day = $dd;
    var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
    $(document).ready(function(){
        
        var option = '<option  class="font-select" value="day">วัน</option>';
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        var option = '<option class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            // option += '<option value="'+ i + '">' + i + '</option>';
            if(i == 1){
                option += '<option class="font-select"  value="'+ i + '">' + "มกราคม" + '</option>';
            }else if(i == 2){
                option += '<option class="font-select"  value="'+ i + '">' + "กุมภาพันธ์" + '</option>';
            }else if(i == 3){
                option += '<option class="font-select"  value="'+ i + '">' + "มีนาคม" + '</option>';
            }else if(i == 4){
                option += '<option class="font-select"  value="'+ i + '">' + "เมษายน" + '</option>';
            }else if(i == 5){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤษภาคม" + '</option>';
            }else if(i == 6){
                option += '<option class="font-select"  value="'+ i + '">' + "มิถุนายน" + '</option>';
            }else if(i == 7){
                option += '<option class="font-select"  value="'+ i + '">' + "กรกฎาคม" + '</option>';
            }else if(i == 8){
                option += '<option class="font-select"  value="'+ i + '">' + "สิงหาคม" + '</option>';
            }else if(i == 9){
                option += '<option class="font-select"  value="'+ i + '">' + "กันยายน" + '</option>';
            }else if(i == 10){
                option += '<option class="font-select"  value="'+ i + '">' + "ตุลาคม" + '</option>';
            }else if(i == 11){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤศจิกายน" + '</option>';
            }else{
                option += '<option class="font-select"  value="'+ i + '">' + "ธันวาคม" + '</option>';
            }
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var option = '<option  class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        var option = '<option  class="font-select" value="year">ปี</option>';
        selectedYear ="year";
        for (var i=1930;i <= d.getFullYear();i++){// years start i
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });
    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }
    function change_year(select){
        if( isLeapYear( $(select).val() ) ){
            Days[1] = 29;
                
        }
        else {
            Days[1] = 28;
        }
        if( $("#month").val() == 2){
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option  class="font-select" value="day">วัน</option>';
            for (var i=1;i <= Days[1];i++){ //add option days
                    option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
            }
            $(day).append(option);
            if( val > Days[ month ] ){
                    val = 1;
            }
            $(day).val(val);
		}
    }
    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option  class="font-select" value="day">วัน</option>';
        var month = parseInt( $(select).val() ) - 1;
        for (var i=1;i <= Days[ month ];i++){ //add option days
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $(day).append(option);
        if( val > Days[ month ] ){
            val = 1;
        }
        $(day).val(val);
    }
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