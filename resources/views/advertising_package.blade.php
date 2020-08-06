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
                    @foreach($sponsor as $spon)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้สนับสนุน : บุคคลธรรมดา</br>เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdvertisingPackage') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('DevShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                    <div class="col-lg-9" style="background-color:#f5f5f5;">
                        <div class="row mt-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">

                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">เพคเกจของฉัน</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <label class="bgMyPackage">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2" style="line-height:0.7;">
                                                    <label style="font-family:myfont;font-size:1.3em;color:#ffffff;">฿900.00</label>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#ffffff;">/ เดือน</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#23c197;">หมดอายุ : 25/05/20</label>
                                                </div>
                                            </div>
                                            <label class="bgManagePackage">
                                                <label style="font-family:myfont1;font-size:0.9em;">จัดการแพ็กเกจ</label>
                                            </label>
                                        </label>

                                        <label class="bgMyPackage">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2" style="line-height:0.7;">
                                                    <label style="font-family:myfont;font-size:1.3em;color:#ffffff;">฿1,200.00</label>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#ffffff;">/ เดือน</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#23c197;">หมดอายุ : 25/05/20</label>
                                                </div>
                                            </div>
                                            <label class="bgManagePackage">
                                                <label style="font-family:myfont1;font-size:0.9em;">จัดการแพ็กเกจ</label>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                            <span class="font-profile1">สนับสนุนเงินในเกม</span>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-lg-4">
                                            <label class="bgPackage">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2"><img src="{{asset('icon/money2.svg') }}"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2">
                                                        <label style="font-family:myfont;font-size:1.3em;">฿900.00</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;">/ เดือน</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <label class="btnBuyPackage">
                                                            <label style="font-family:myfont1;font-size:1em;color:#ffffff;">ซื้อเลย</label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row my-2 px-4">
                                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                                </div>
                                                <div class="row pl-3">
                                                    <div class="col-lg-12 ">
                                                        <label style="font-family:myfont;font-size:0.9em;">รายละเอียด</label>
                                                    </div>
                                                </div>
                                                <div class="row pl-2 pr-1">
                                                    <div class="col-lg-12 fontDetailPackage">
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน
                                                        </p>

                                                        <div class="input-container">
                                                            <i class="fa fa-user icon"></i>
                                                            <input class="input-field" type="text" placeholder="Username" name="usrnm">
                                                        </div>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            สามารถเลือกเรทเกมได้ทุกชนิด
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            ได้โฆษณาความยาว 15 วินาที
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน
                                                        </p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="bgPackage">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2"><img src="{{asset('icon/money2.svg') }}"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2">
                                                        <label style="font-family:myfont;font-size:1.3em;">฿1,200.00</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;">/ เดือน</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <label class="btnBuyPackage">
                                                            <label style="font-family:myfont1;font-size:1em;color:#ffffff;">ซื้อเลย</label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row my-2 px-4">
                                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                                </div>
                                                <div class="row pl-3">
                                                    <div class="col-lg-12 ">
                                                        <label style="font-family:myfont;font-size:0.9em;">รายละเอียด</label>
                                                    </div>
                                                </div>
                                                <div class="row pl-2 pr-1">
                                                    <div class="col-lg-12 fontDetailPackage">
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            สามารถเลือกเรทเกมได้ทุกชนิด
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            ได้โฆษณาความยาว 30 วินาที 1 เดือน
                                                        </p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="bgPackage">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2"><img src="{{asset('icon/money2.svg') }}"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center mt-2">
                                                        <label style="font-family:myfont;font-size:1.3em;">฿1,800.00</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;">/ เดือน</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <label class="btnBuyPackage">
                                                            <label style="font-family:myfont1;font-size:1em;color:#ffffff;">ซื้อเลย</label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row my-2 px-4">
                                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                                </div>
                                                <div class="row pl-3">
                                                    <div class="col-lg-12 ">
                                                        <label style="font-family:myfont;font-size:0.9em;">รายละเอียด</label>
                                                    </div>
                                                </div>
                                                <div class="row pl-2 pr-1">
                                                    <div class="col-lg-12 fontDetailPackage">
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            สามารถเลือกเรทเกมได้ทุกชนิด
                                                        </p>
                                                        <p style="margin:5px;">
                                                            <img class="imgCorrectPackage" src="{{asset('icon/correct-green.svg') }}">
                                                            ได้โฆษณาความยาว 1 นาที แบบกดข้ามได้
                                                        </p>
                                                    </div>
                                                </div>
                                            </label>
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

<!-- วัน เดือน ปีเกิด -->
<script>
var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
$(document).ready(function(){
    var option = '<option  class="font-select" value="day">วัน</option>';
    var selectedDay="day";
    for (var i=1;i <= Days[0];i++){ //add option days
        option += '<option class="font-select" value="'+ i +'">' + i + '</option>';
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