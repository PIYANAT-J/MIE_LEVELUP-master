@extends('layout.sponsor_navbar')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="filter/dist/jquery.Thailand.min.css">
@endsection
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
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
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
                            <form action="{{ route('SponEditProfile') }}" method="POST" enctype="multipart/form-data" id="upDate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br>
                                        <b style="font-family:myfont1;font-size: 0.8em;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                                    </div>
                                </div>

                                <!-- บุคคลธรรมดา -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 line1 mt-2" >
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขผู้เสียภาษีอากร</label> <br>
                                                    <input name="taxID" class="input-login px-3" value="{{ $spon->taxID ?? old('taxID') }}"></input>
                                                </label>
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อ</label> <br>
                                                    <input name="name" class="input-login px-3" value="{{ Auth::user()->name }}"></input>
                                                </label>
                                                @error('name')
                                                    <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                                @enderror
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">นามสกุล</label> <br>
                                                    <input name="surname" class="input-login px-3" value="{{ Auth::user()->surname }}"></input>
                                                </label>
                                                @error('surname')
                                                    <span class="text-danger font-error">กรุณากรอกนามสกุล</span>
                                                @enderror
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ที่อยู่</label> <br>
                                                    <input name="SPON_ADDRESS" class="input-login px-3" value="{{ $spon->SPON_ADDRESS ?? old('SPON_ADDRESS') }}"></input>
                                                </label>
                                                @error('SPON_ADDRESS')
                                                    <span class="text-danger font-error">กรุณากรอกที่อยู่</span>
                                                @enderror
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="">
                                                            <label class="bgInput field-wrap">
                                                                <label class="fontHeadInput px-3" style="padding:0;">จังหวัด</label>
                                                                <input class="input-login px-3" style="padding-top:12px;" type="text" name="province" value="{{ $spon->province }}">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="bgInput field-wrap">
                                                            <label class="fontHeadInput px-3">อำเภอ</label><br>
                                                            <input class="input-login px-3" style="padding-top:12px;" type="text" name="amphure" value="{{ $spon->amphure }}">
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="">
                                                            <label class="bgInput field-wrap">
                                                                <label class="fontHeadInput px-3" style="padding:0;">ตำบล</label>
                                                                <input class="input-login px-3" style="padding-top:12px;" type="text" name="district" value="{{ $spon->district }}">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="bgInput field-wrap">
                                                            <label class="fontHeadInput px-3">รหัสไปรษณีย์</label><br>
                                                            <input class="input-login px-3" style="padding-top:12px;" type="text" name="ZIPCODE_ID" value="{{ $spon->ZIPCODE_ID }}">
                                                        </label>
                                                    </div>
                                                </div>
                                            
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เบอร์โทรศัพท์</label> <br>
                                                    <input name="SPON_TEL" type="text" class="input-login px-3"  data-toggle="tooltip" value="{{ $spon->SPON_TEL ?? old('SPON_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                </label>
                                                @error('SPON_TEL')
                                                    <span class="text-danger font-error">กรุณากรอกเบอร์โทรศัพท์</span>
                                                @enderror
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                    <input name="SPON_ID_CARD" type="text" class="input-login px-3"  value="{{ $spon->SPON_ID_CARD ?? old('SPON_ID_CARD') }}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                </label>
                                                @error('SPON_ID_CARD')
                                                    <span class="text-danger font-error">เลขบัตรประจำตัวประชาชนไม่ถูกต้อง</span>
                                                @enderror
                                                <div class="row ">
                                                    <div class="col-lg-12">
                                                        <div class="row mx-0">
                                                            <?php
                                                                // $yyyy = substr($spon->DEV_BIRTHDAY,0,4);
                                                                // $mm = substr($spon->DEV_BIRTHDAY,5,2);
                                                                // $dd = substr($spon->DEV_BIRTHDAY,8,2);
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
                                            <div id="thumb" class="thumb-profile "><img src="{{asset('home/imgProfile/'.$spon->SPON_IMG)}}"></div>    
                                            <input id="file_upload" style="display:none" name="SPON_IMG" type="file" multiple="true" accept="image/* "/>
                                            <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                            <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                <!-- นิติบุคคล -->
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 line1 mt-2" >
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขผู้เสียภาษีอาการ</label> <br>
                                                    <input name="taxID" class="input-login px-3" ></input>
                                                </label>
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อบริษัท</label> <br>
                                                    <input name="CompanyName" class="input-login px-3" value="{{ Auth::user()->name }}"></input>
                                                </label>
                                                @error('CompanyName')
                                                    <span class="text-danger font-error">กรุณากรอกชื่อบริษัท</span>
                                                @enderror
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ที่อยู่</label> <br>
                                                    <input name="address" class="input-login px-3"></input>
                                                </label>
                                                @error('address')
                                                    <span class="text-danger font-error">กรุณากรอกที่อยู่</span>
                                                @enderror
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="">
                                                            <label class="bgInput field-wrap">
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
                                                        <label class="bgInput field-wrap">
                                                            <label class="fontHeadInput px-3">รหัสไปรษณีย์</label><br>
                                                                <input class="text-box px-3" style="padding-top:12px;" required="true" type="text" name="zipcode">
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="">
                                                            <label class="bgInput field-wrap">
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
                                                        <label class="bgInput field-wrap">
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
                                            
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เบอร์โทรศัพท์</label> <br>
                                                    <input name="SPON_TEL" type="text" class="input-login px-3"  data-toggle="tooltip" value="{{ $spon->SPON_TEL ?? old('SPON_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                </label>
                                                @error('SPON_TEL')
                                                    <span class="text-danger font-error">กรุณากรอกเบอร์โทรศัพท์</span>
                                                @enderror
                                                <label class="bgInput field-wrap">
                                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขบัตรประจำตัวประชาชน</label> <br>
                                                    <input name="SPON_ID_CARD" type="text" class="input-login px-3"  value="{{ $spon->SPON_ID_CARD ?? old('SPON_ID_CARD') }}" minlength="13" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                                                </label>
                                                @error('SPON_ID_CARD')
                                                    <span class="text-danger font-error">เลขบัตรประจำตัวประชาชนไม่ถูกต้อง</span>
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
                        <div class="col-lg-1"></div>
                    </div>
                </div>
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
<style>
    .tt-dataset{
        background-color:#fff !important;
        color:#000;
        
        border-bottom: 1px solid #000;
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
@endsection