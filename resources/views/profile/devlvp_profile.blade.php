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
                @if(Auth::user()->updateData == 'true')
                    @foreach($developer as $Dev)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-5 text-right pr-2">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$Dev->DEV_IMG) }}" />
                                </div>
                                <div class="col-7 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <button class="btn-point pb-2">
                                        <span class="font-point">พอยท์</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                        <i class="icon-Icon_Point"></i>
                                    </button>

                                    <button class="btn-coin pb-2">
                                        <span class="font-point">เหรียญ</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                        <i class="icon-Icon_Coin"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-5 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                            </div>
                            <div class="col-7 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                        <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                            <div class="col-lg-12 text-center">
                                <button class="btn-point pb-2">
                                    <span class="font-point">พอยท์</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                    <i class="icon-Icon_Point"></i>
                                </button>

                                <button class="btn-coin pb-2">
                                    <span class="font-point">เหรียญ</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                    <i class="icon-Icon_Coin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('DevKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('DevShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('DevUpload') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        @if(Auth::user()->updateData == 'true')
            @foreach($developer as $Dev)
                @if($Dev->USER_ID == Auth::user()->id)
                        <div class="col-lg-9" style="background-color:#f5f5f5;">
                            <div class="row mt-4" >
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                                    <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                                <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br><b style="font-size: 18px;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12 line1 mt-2" >
                                                        <input name="name" class="input-update" value="{{ Auth::user()->name }}" placeholder="ชื่อ" require></input>
                                                        <input name="surname" class="input-update" value="{{ Auth::user()->surname }}" placeholder="นามสกุล" require></input>
                                                        <input name="DEV_TEL" type="text" class="input-update"  placeholder="เบอร์โทร" data-toggle="tooltip" value="{{ $Dev->DEV_TEL }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" maxlength="10"></input>
                                                        <input name="DEV_ID_CARD" type="text" class="input-update"  placeholder="บัตรประจำตัวประชาชน" value="{{ $Dev->DEV_ID_CARD }}" minlength="13" maxlength="13" title="กรุณากรอกข้อมูลให้ครบถ้วน" require></input>
                                                        
                                                        <div class="row ">
                                                            <div class="col-lg-12">
                                                                <div class="row mx-0">
                                                                    <?php
                                                                        // $yyyy = substr($USER->GUEST_USERS_BIRTHDAY,0,4);
                                                                        // $mm = substr($USER->GUEST_USERS_BIRTHDAY,5,8);
                                                                        // $dd = substr($USER->GUEST_USERS_BIRTHDAY,8,10);
                                                                    ?>
                                                                    <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></div>
                                                                    <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></div>
                                                                    <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div>
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
                                                    <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$Dev->DEV_IMG)}}"></div>    
                                                    <input id="file_upload" style="display:none" name="DEV_IMG" type="file" multiple="true" accept="image/* "/>
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
        @else
            <div class="col-lg-9" style="background-color:#f5f5f5;">
                <div class="row mt-4" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                        <div class="row">
                            <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br><b style="font-size: 18px;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                            </div>
                        </div>
                        <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 line1 mt-2" >
                                            <input name="name" class="input-update" value="{{ Auth::user()->name }}" placeholder="ชื่อ" require></input>
                                            <input name="surname" class="input-update" value="{{ Auth::user()->surname }}" placeholder="นามสกุล" require></input>
                                            <input name="DEV_TEL" type="text" class="input-update"  placeholder="เบอร์โทร" data-toggle="tooltip" value="{{ old('DEV_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" maxlength="10"></input>
                                            <input name="DEV_ID_CARD" type="text" class="input-update"  placeholder="บัตรประจำตัวประชาชน" value="{{ old('DEV_ID_CARD') }}" minlength="13" maxlength="13" title="กรุณากรอกข้อมูลให้ครบถ้วน" require></input>
                                            
                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <div class="row mx-0">
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit">ยืนยัน
                                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                        <input type="hidden" name="DATE_CREATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-5" align="center">
                                        <div id="thumb" class="thumb-profile "><img src="home/imgProfile/pic-profile.png"></div>    
                                        <input id="file_upload" style="display:none" name="DEV_IMG" type="file" multiple="true" accept="image/* "/>
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
        @endif
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
function change_year(select)
{
    if( isLeapYear( $(select).val() ) )
	  {
		    Days[1] = 29;
		    
    }
    else {
        Days[1] = 28;
    }
    if( $("#month").val() == 2)
		    {
			       var day = $('#day');
			       var val = $(day).val();
			       $(day).empty();
			       var option = '<option  class="font-select" value="day">วัน</option>';
			       for (var i=1;i <= Days[1];i++){ //add option days
				         option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
             }
			       $(day).append(option);
			       if( val > Days[ month ] )
			       {
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
    if( val > Days[ month ] )
    {
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