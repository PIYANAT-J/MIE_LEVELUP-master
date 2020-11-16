@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{route('UserProfile')}}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.user_sidebar')
        
        <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        @foreach($guest_user as $USER)
            @if($USER->USER_EMAIL == Auth::user()->email)
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
                    <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                        <form action="{{ route('EditProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;">
                                    <h1 class="fontHeader">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์)</h1>
                                    <h5 style="color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 mt-2" >
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ชื่อ</p>
                                                <input name="name" class="input1 p ml-2" value="{{ Auth::user()->name }}"></input>
                                            </label>
                                            @error('name')
                                                <p style="color:#ce0005;">กรุณากรอกชื่อ</p>
                                            @enderror
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">นามสกุล</p>
                                                <input name="surname" class="input1 p ml-2" value="{{ Auth::user()->surname }}" ></input>
                                            </label>
                                            @error('surname')
                                                <p style="color:#ce0005;">กรุณากรอกนามสกุล</p>
                                            @enderror
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เบอร์โทรศัพท์</p>
                                                <input name="GUEST_USERS_TEL" type="text" class="input1 p ml-2 @error('GUEST_USERS_TEL') is-invalid @enderror"  data-toggle="tooltip" value="{{ $USER->GUEST_USERS_TEL ?? old('GUEST_USERS_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                            </label>
                                            @error('GUEST_USERS_TEL')
                                                <p style="color:#ce0005;">กรุณากรอกเบอร์โทรศัพท์</p>
                                            @enderror
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="GUEST_USERS_ID_CARD" type="text" class="input1 p ml-2" value="{{ $USER->GUEST_USERS_ID_CARD ?? old('GUEST_USERS_ID_CARD')}}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                            </label>
                                            @error('GUEST_USERS_ID_CARD')
                                                <p style="color:#ce0005;">เลขบัตรประจำตัวประชาชนไม่ถูกต้อง</p>
                                            @enderror
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mx-0">
                                                        <!-- <input id="GUEST_USERS_BIRTHDAY" name="GUEST_USERS_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="YYYY-MM-DD" value="{{ old('GUEST_USERS_BIRTHDAY') }}" title=""> -->
                                                    <!-- <input type="number" name="RATING" id="rating-input" min="1" max="5"> -->
                                                        <?php
                                                            // $yyyy = substr($USER->GUEST_USERS_BIRTHDAY,0,4);
                                                            // $mm = substr($USER->GUEST_USERS_BIRTHDAY,5,2);
                                                            // $dd = substr($USER->GUEST_USERS_BIRTHDAY,8,2);
                                                            if($USER->GUEST_USERS_BIRTHDAY != null){
                                                                $BIRTHDAY = explode('-', $USER->GUEST_USERS_BIRTHDAY);
                                                                echo '
                                                                    <input type="hidden" name="year" value="'.$BIRTHDAY[0].'">
                                                                    <input type="hidden" name="month" value="'.$BIRTHDAY[1].'">
                                                                    <input type="hidden" name="day" value="'.$BIRTHDAY[2].'">
                                                                ';
                                                            }
                                                            
                                                        ?>
                                                            <label class="bgInput field- my-1">
                                                            <label><p class="fontHeadInput">วัน เดือน ปีเกิด</p></label><br>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2 year"  size="1" id ="year" name="yyyy" onchange="change_year(this)"></SELECT></label>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2 month" size="1"  id ="month" name="mm" onchange="change_month(this)"></SELECT></label>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2 day" size="1" id ="day" name="dd"></SELECT></label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="form-group mt-5" align="center">
                                        <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG)}}"></div>    
                                        <input id="file_upload" style="display:none" name="GUEST_USERS_IMG" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">
                                            <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                                        </button>
                                        <div class=" mt-2">
                                            <p style="margin:0;color:#b2b2b2;">ขนาดไฟล์: สูงสุด 1 MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2">
                                    <button name="submit" id="submit" value="submit" type="submit" class="btn-submit">
                                        <p style="margin:0;">ยืนยัน</p>
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                        <input type="hidden" name="DATE_MODIFY" value="{{ date('Y-m-d H:i:s') }}">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
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
    var yyyy = $('input[name="year"]').val()
    var mm = $('input[name="month"]').val()
    var dd = $('input[name="day"]').val()
    console.log(year);
    // var month = $mm;
    // var day = $dd;
    // console.log(year);
    var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
    $(document).ready(function(){
        
        if(dd != null){
            var option = '<option  class="font-select" value="day">'+dd+'</option>';
        }else{
            var option = '<option  class="font-select" value="day">วัน</option>';
        }
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        if(mm != null){
            var option = '<option  class="font-select" value="month">'+mm+'</option>';
        }else{
            var option = '<option  class="font-select" value="month">เดือน</option>';
        }
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
        if(mm != null){
            var option = '<option  class="font-select" value="month">'+mm+'</option>';
        }else{
            var option = '<option  class="font-select" value="month">เดือน</option>';
        }
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        if(yyyy != null){
            var option = '<option  class="font-select" value="year">'+yyyy+'</option>';
        }else{
            var option = '<option  class="font-select" value="year">ปี</option>';
        }
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