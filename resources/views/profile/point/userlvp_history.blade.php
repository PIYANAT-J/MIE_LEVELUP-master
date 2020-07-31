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
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a>  
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-6 pb-2">
                            <span class="font-profile1">ประวัติพอยท์</span>
                        </div>
                        <div class="col-6 text-right">
                            <SELECT class="select2" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                            <SELECT class="select2" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mt-2 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1em;color:#000;">
                                        <div class="col-8">ประวัติ</div>
                                        <div class="col-2 text-center">พอยท์</div>
                                        <div class="col-2 text-center">วัน-เวลา</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 row4">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-8">
                                        <span class="font-game-shelf2" style="color:#000;font-family:myfont1;">อัพเดตโปรไฟล์</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="font-game-shelf2" style="color:#23c197;">+20</span>
                                            <!-- <span class="font-game-shelf2" style="color:#ce0005;">-50</span> -->
                                        </div>
                                        <div class="col-2 text-center"><span class="font-game-shelf2" style="font-size:0.8em;font-family:myfont1;">09:10, 17/05/63</span></div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-8">
                                        <span class="font-game-shelf2" style="color:#000;font-family:myfont1;">แลกสินค้า</span>
                                        </div>
                                        <div class="col-2 text-center">
                                            <!-- <span class="font-game-shelf2" style="color:#23c197;">+20</span> -->
                                            <span class="font-game-shelf2" style="color:#ce0005;">-50</span>
                                        </div>
                                        <div class="col-2 text-center"><span class="font-game-shelf2" style="font-size:0.8em;font-family:myfont1;">09:10, 17/05/63</span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection