@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">

        <!-- sidebar -->
        <div class="col-lg-4 col-xl-3 d-none d-lg-block d-xl-block" style="background-color: #17202c;">
            <div class="row">
                <div class="col-1"></div>
                    @foreach($guest_user as $USER)
                        <div class="col-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-8">
                                    <label class="pt-3">
                                        <h5 style="font-weight:800;margin:0;color:#ffffff;">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h5>
                                        <h5 style="margin:0;color:#ffffff;">สถานะ : ผู้ใช้ทั่วไป</h5>
                                        <h5 style="margin:0;color:#ffffff;">เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</h5>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pt-2">
                                                <h1 class="fontPoint">พอยท์</h1>
                                                <h2 class="fontPoint">100 <i class="icon-Icon_Point"></i></h2>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-point pt-2">
                                                <h1 class="fontPoint">เหรียญ</h1>
                                                <h2 class="fontPoint">100 <i class="icon-Icon_Coin"></i></h2>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-1"></div>

                <a href="{{ route('Avatar') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)</p>
                    </button>
                </a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</p>
                    </button>
                </a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <label style="margin: 0;"><p style="padding:0px 8px 0px 5px;margin: 0;">KYC</p></label>
                        <label style="margin: 0;"><p style="margin: 0;">ยืนยันตัวตน</p></label>
                    @if($userKyc->KYC_STATUS == null)
                        <label style="margin: 0;" class="status-kyc3 "><p style="margin: 0;">กรุณายืนยันตัวตน</p></label>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <label style="margin: 0;" class="status-kyc"><p style="margin: 0;">รอการตรวจสอบ</p></label>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <label style="margin: 0;" class="status-kyc2"><p style="margin: 0;">ยืนยันตัวตนแล้ว</p></label>
                    @else
                        <label style="margin: 0;" class="status-kyc4"><p style="margin: 0;">ไม่ผ่านการอนุมัติ</p></label>
                    @endif
                    </button>
                </a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</p>
                    </button>
                </a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;">
                    <button class="btn-sidebar active">
                        <p style="margin: 0;"><i class="icon-history menuIcon"></i>ประวัติพอยท์</p>
                    </button>
                </a>
                <a href="{{ route('UserRank') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้</p>
                    </button>
                </a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</p>
                    </button>
                </a>
                <a href="/user_change_password" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</p>
                    </button>
                </a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</p>
                    </button>
                </a>   
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-sm-12 col-md-12 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px">  
                <div class="row">
                    <div class="col-3 pb-2">
                        <h1 class="fontHeader">ประวัติพอยท์</<h1>
                    </div>
                    <div class="col-9 text-right">
                        <SELECT class="SelectWh p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                        <SELECT class="SelectWh p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                            <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row mx-0 py-2" style="background-color:#f2f2f2;color:#000;">
                                    <div class="col-sm-7 col-md-9 col-lg-8 col-xl-8"><p style="margin:0;font-weight: 800;">ประวัติ</p></div>
                                    <div class="col-sm-2 col-md-1 col-lg-2 col-xl-2 text-center "><p style="margin:0;font-weight: 800;">พอยท์</p></div>
                                    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 text-center"><p style="margin:0;font-weight: 800;">วัน-เวลา</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 row4">
                            <div class="col-12" >
                                <div class="row mx-0 py-2 line2">
                                    <div class="col-sm-7 col-md-9 col-lg-8 col-xl-8">
                                        <p style="color:#000;margin:0;">อัพเดตโปรไฟล์</p>
                                    </div>
                                    <div class="col-sm-2 col-md-1 col-lg-2 col-xl-2 text-center">
                                        <p style="margin:0;color:#23c197;font-weight:800;">+20</p>
                                        <!-- <p style="margin:0;color:#ce0005;font-weight:800;">-50</p> -->
                                    </div>
                                    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 text-center">
                                        <h5 style="margin:0;color:#000;padding-top:5px;">09:10, 17/05/63</h5>
                                    </div>
                                </div>
                                <div class="row mx-0 py-2 line2">
                                    <div class="col-sm-7 col-md-9 col-lg-8 col-xl-8">
                                        <p style="color:#000;margin:0;">แลกสินค้า</p>
                                    </div>
                                    <div class="col-sm-2 col-md-1 col-lg-2 col-xl-2 text-center">
                                        <!-- <p style="margin:0;color:#23c197;font-weight:800;">+20</p> -->
                                        <p style="margin:0;color:#ce0005;font-weight:800;">-50</p>
                                    </div>
                                    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 text-center">
                                        <h5 style="margin:0;color:#000;padding-top:5px;">09:10, 17/05/63</h5>
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
@endsection