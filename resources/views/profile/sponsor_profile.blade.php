@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('SponsorProfile') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
                    <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                        <form action="{{ route('SponEditProfile') }}" method="POST" enctype="multipart/form-data" id="upDate">
                            @csrf
                            <div class="row">
                                <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;">
                                    <h1 class="fontHeader">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์)</h1>
                                    <h5 style="color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</h5>
                                </div>
                            </div>

                            <!-- บุคคลธรรมดา -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 mt-2" >
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">เลขผู้เสียภาษีอากร</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label>
                                                <input id="texID" name="taxID" class="input1 p ml-2" value="{{ $spon->taxID ?? old('taxID') }}"  minlength="13" maxlength="13" required=""></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">ชื่อ</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                <input id="name" name="name" class="input1 p ml-2" value="{{ Auth::user()->name }}" required=""></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">นามสกุล</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label>
                                                <input id="surname" name="surname" class="input1 p ml-2" value="{{ Auth::user()->surname }}" required=""></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">ที่อยู่</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label>
                                                <input name="SPON_ADDRESS" class="input1 p ml-2" value="{{ $spon->SPON_ADDRESS ?? old('SPON_ADDRESS') }}" required=""></input>
                                            </label>
                                            <div class="row">
                                                <div class="col-6" style="padding-right:5px;">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">จังหวัด</p></label>
                                                        <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                        <input class="input1 p ml-2" style="padding-top:12px;" type="text" name="province" value="{{ $spon->province }}" required="">
                                                    </label>
                                                </div>
                                                <div class="col-6" style="padding-left:5px;">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">อำเภอ</p></label>
                                                        <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                        <input class="input1 p ml-2" style="padding-top:12px;" type="text" name="amphure" value="{{ $spon->amphure }}" required="">
                                                    </label>
                                                </div>
                                                <div class="col-6" style="padding-right:5px;">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">ตำบล</p></label>
                                                        <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                        <input class="input1 p ml-2" style="padding-top:12px;" type="text" name="district" value="{{ $spon->district }}" required="">
                                                    </label>
                                                </div>
                                                <div class="col-6" style="padding-left:5px;">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">รหัสไปรษณีย์</p></label>
                                                        <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                        <input class="input1 p ml-2" style="padding-top:12px;" type="text" name="ZIPCODE_ID" value="{{ $spon->ZIPCODE_ID }}" required="">
                                                    </label>
                                                </div>
                                            </div>
                                        
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">เบอร์โทรศัพท์</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label>
                                                <input name="SPON_TEL" type="text" class="input1 p ml-2"  data-toggle="tooltip" value="{{ $spon->SPON_TEL ?? old('SPON_TEL') }}"  minlength="10" maxlength="10" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required=""></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p></label>
                                                <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label>
                                                <input name="SPON_ID_CARD" type="text" class="input1 p ml-2"  value="{{ $spon->SPON_ID_CARD ?? old('SPON_ID_CARD') }}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required=""></input>
                                            </label>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="row mx-0">
                                                        <?php
                                                            // $yyyy = substr($spon->DEV_BIRTHDAY,0,4);
                                                            // $mm = substr($spon->DEV_BIRTHDAY,5,2);
                                                            // $dd = substr($spon->DEV_BIRTHDAY,8,2);
                                                        ?>
                                                        <label class="bgInput field-wrap my-1">
                                                            <label><p class="fontHeadInput">วัน เดือน ปีเกิด</p></label>
                                                            <label style="margin:0;"><h5 class="d-none messageError" style="margin:0;color:#ce0005">กรุณากรอกข้อมูล</h5></label><br>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2" size="1" id ="year" name = "yyyy" onchange="change_year(this)" required></SELECT></label>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2" size="1"  id ="month" name = "mm" onchange="change_month(this)" required></SELECT></label>
                                                            <label style="padding:0;"><SELECT class="MySelectProfile p pl-2" size="1" id ="day" name = "dd" required></SELECT></label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="form-group mt-5" align="center">
                                        <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$spon->SPON_IMG)}}"></div>    
                                        <input id="file_upload" style="display:none" name="SPON_IMG" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">
                                            <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                                        </button>
                                        <div class=" mt-2">
                                            <p style="margin:0;color:#b2b2b2;">ขนาดไฟล์: สูงสุด 1 MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2">
                                    <button id="submit" type="submit" class="btn-submit"><p style="margin:0;">ยืนยัน</p></button>
                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                    <input type="hidden" name="DATE_MODIFY" value="{{ date('Y-m-d H:i:s') }}">
                                    <input type="hidden" name="submit" value="submit">
                                </div>
                            </div>
                        </form>

                            <!-- นิติบุคคล -->
                            <!-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 line1 mt-2" >
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เลขผู้เสียภาษีอาการ</p>
                                                <input name="taxID" class="input1 p ml-2" ></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ชื่อบริษัท</p>
                                                <input name="CompanyName" class="input1 p ml-2" value="{{ Auth::user()->name }}"></input>
                                            </label>
                                            @error('CompanyName')
                                                <p style="color:#ce0005;">กรุณากรอกชื่อบริษัท</p>
                                            @enderror
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ที่อยู่</p>
                                                <input name="address" class="input1 p ml-2"></input>
                                            </label>
                                            @error('address')
                                                <p style="color:#ce0005;">กรุณากรอกที่อยู่</p>
                                            @enderror
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="">
                                                        <label class="bgInput field-wrap my-1">
                                                            <label class="fontHeadInput px-3" style="padding:0;">จังหวัด</label>
                                                            <select class="selectProvince" required="true" type="text" name="text4">
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label class="fontHeadInput px-3">รหัสไปรษณีย์</label><br>
                                                            <input class="text-box px-3" style="padding-top:12px;" required="true" type="text" name="zipcode">
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="">
                                                        <label class="bgInput field-wrap my-1">
                                                            <label class="fontHeadInput px-3" style="padding:0;">ตำบล</label>
                                                            <select class="selectProvince" required="true" type="text" name="text4">
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label class="fontHeadInput px-3">อำเภอ</label><br>
                                                            <select class="selectProvince" required="true" type="text" name="text4">
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                                <option value="">ดึงจาก DB</option>
                                                            </select>
                                                    </label>
                                                </div>
                                            </div>
                                        
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เบอร์โทรศัพท์</p>
                                                <input name="SPON_TEL" type="text" class="input1 p ml-2"  data-toggle="tooltip" value="{{ $spon->SPON_TEL ?? old('SPON_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                            </label>
                                            @error('SPON_TEL')
                                                <p style="color:#ce0005;">กรุณากรอกเบอร์โทรศัพท์</span>
                                            @enderror
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เลขบัตรประจำตัวประชาชน</p>
                                                <input name="SPON_ID_CARD" type="text" class="input1 p ml-2"  value="{{ $spon->SPON_ID_CARD ?? old('SPON_ID_CARD') }}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                            </label>
                                            @error('SPON_ID_CARD')
                                                <p style="color:#ce0005;">เลขบัตรประจำตัวประชาชนไม่ถูกต้อง</span>
                                            @enderror
                                            <div class="row ">
                                                <div class="col-lg-12"></div>
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
                                        <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$spon->SPON_IMG)}}"></div>    
                                        <input id="file_upload" style="display:none" name="SPON_IMG" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                        <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                    </div>
                                </div>
                            </div> -->

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

<style>
    .tt-dataset{
        background-color:#fff !important;
        color:#000;
        border-bottom: 1px solid #000;
        height:300px;
        overflow:scroll;
        overflow-x: hidden;
        font-family:myfont1;
    }
    .tt-suggestion.tt-selectable:hover{
        background-color:#ddd !important;
    }
    .tt-suggestion.tt-selectable{
        border-bottom: 1px solid #ddd;
        padding:10px 20px 10px 20px;
        cursor:pointer;
    }
</style>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
<script src="{{ asset('filter/dependencies/zip.js/zip.js') }}"></script>
<script src="{{ asset('filter/dependencies/JQL.min.js') }}"></script>
<script src="{{ asset('filter/dependencies/typeahead.bundle.js') }}"></script>
<script src="{{ asset('filter/dist/jquery.Thailand.min.js') }}"></script>
<script>
    $.Thailand({
        database: 'filter/database/db.json',
        $district: $('#upDate [name="district"]'),
        $amphoe: $('#upDate [name="amphure"]'),
        $province: $('#upDate [name="province"]'),
        $zipcode: $('#upDate [name="ZIPCODE_ID"]'),
        onDataFill: function(data) {
            console.info('Data Filled', data);
        },
    });
    $('#upDate [name="district"]').change(function() {
        console.log('ตำบล', this.value);
    });
    $('#upDate [name="amphure"]').change(function() {
        console.log('อำเภอ', this.value);
    });
    $('#upDate [name="province"]').change(function() {
        console.log('จังหวัด', this.value);
    });
    $('#upDate [name="ZIPCODE_ID"]').change(function() {
        console.log('รหัสไปรษณีย์', this.value);
    });
</script>

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

<script type="text/javascript">
	$('input').on('keypress',function(){
		$(this).parent().find('.messageError').addClass('d-none');
	})
	$('#submit').on('click',function(){
		var check = true;
		$('.messageError').addClass('d-none');
		$( "form#upDate input, select" ).each(function( index ) {
			var required = $(this).attr('required');
		 	var value = $(this).val();
		 	var id = $(this).attr('id');
		 	if(!value && required){
		 		check = false;
		 		$(this).parent().find('.messageError').removeClass('d-none');
		 	}
		});
		if(check){
			$('form#upDate').submit();
		}
	})
@endsection