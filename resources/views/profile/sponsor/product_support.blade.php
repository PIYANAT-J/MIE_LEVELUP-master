@extends('layout.sponsor_navbar')
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
                <a href="{{ route('SponsorProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
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
                            <span class="font-profile1">สนับสนุนสินค้าในเกม</span>
                        </div>
                    </div>
                    <form action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-6" style="border-right: 1px solid #f2f2f2;">
                                <label class="font-profile1">เลือกรูปภาพสินค้า</label>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="form-group" align="center">
                                            <div id="thumb" class="thumb-game "><img src="icon/product_box.png"></div>    
                                            <input id="file_upload" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                            <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                            <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                        </div>
                                    </div>
                                </div>
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อสินค้า</label> <br>
                                    <input type="text" class="input-login px-3" name="product_name" value="{{old('product_name')}}" require></input>
                                </label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนสินค้า</label> <br>
                                            <input type="text" class="input-login px-3" name="product_amount" value="{{old('product_amount')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require></input>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวน Point ที่ใช้แลก</label> <br>
                                            <input type="text" class="input-login px-3" name="product_point" value="{{old('product_point')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require></input>
                                        </label>
                                    </div>
                                </div>
                                <label class="bgInput field-wrap" style="margin-bottom:0;">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">รายละเอียดสินค้า</label> <br>
                                    <textarea id="data" class="input-login px-3" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3" require></textarea><br>
                                </label>
                                <span class="label2 ml-3" id="now_length"></span>

                                <label class="bgInput field-wrap mt-2">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">วันหมดเขตการแลกสินค้า</label> <br>
                                    <label style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></label>
                                    <label style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></label>
                                    <label style="padding:0;"><SELECT  size="1" id ="day" name = "dd"></SELECT></label>
                                </label>
                                <!-- <label class="font-profile1 mt-3">เลือกเกมที่ต้องการสนับสนุน</label>
                                <div class="row my-2 ">
                                    <div class="col-lg-6 custom02">
                                        <input type="radio" name="selectAll" id="selectAll01">
                                        <label for="selectAll01" style="font-family:myfont1;font-size:1em;">เกมทั้งหมด</label>
                                    </div>
                                    <div class="col-lg-6">
                                    <a class="linkAd" href="{{ route('ProductSupportSelect') }}"><label class="addGamePackage">เลือกเกมที่ต้องการ</label></a>
                                    </div>
                                </div> -->
                                <div class="row mb-2">
                                    <div class="col-lg-4">
                                        <button type="submit" name="submit" value="submit" class="btn-submit">ส่งคำขอ</button>
                                    </div>
                                </div>
                                <!-- <div class=" pl-3 row5">
                                    <div class="row">
                                        <label class="containerhover2">
                                            <img class="imagehover2" src="{{asset('section/picture_game/game.png') }}" />
                                            <label class="middlehover2">
                                                <img style="cursor:pointer; width:20px;" src="{{asset('icon/trash2.svg')}}">
                                            </label>
                                        </label>
                                        <label class="containerhover2">
                                            <img class="imagehover2" src="{{asset('section/picture_game/game2.png') }}" />
                                            <label class="middlehover2">
                                                <img style="cursor:pointer; width:20px;" src="{{asset('icon/trash2.svg')}}">
                                            </label>
                                        </label>
                                        <label class="containerhover2">
                                            <img class="imagehover2" src="{{asset('section/picture_game/game3.png') }}" />
                                            <label class="middlehover2">
                                                <img style="cursor:pointer; width:20px;" src="{{asset('icon/trash2.svg')}}">
                                            </label>
                                        </label>
                                        <label class="containerhover2">
                                            <img class="imagehover2" src="{{asset('section/picture_game/game4.png') }}" />
                                            <label class="middlehover2">
                                                <img style="cursor:pointer; width:20px;" src="{{asset('icon/trash2.svg')}}">
                                            </label>
                                        </label>
                                        <label class="containerhover2">
                                            <img class="imagehover2" src="{{asset('section/picture_game/game5.png') }}" />
                                            <label class="middlehover2">
                                                <img style="cursor:pointer; width:20px;" src="{{asset('icon/trash2.svg')}}">
                                            </label>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 pb-2"> 
                                        <span class="font-profile1">ข้อกำหนดของการสนับสนุนสินค้าในเกม</span>
                                    </div>

                                    <div class="row pl-3">
                                        <div class="col-lg-12" >
                                            <div class="input-container">
                                                <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field2 ">ข้อกำหนดของการสนับสนุนสินค้าในเกม</label>
                                            </div>
                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field2 ">ข้อกำหนดของการสนับสนุนสินค้าในเกม</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field2 ">ข้อกำหนดของการสนับสนุนสินค้าในเกม</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field2 ">ข้อกำหนดของการสนับสนุนสินค้าในเกม</label>
                                            </div>
                                            
                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/incorrect.svg') }}">
                                                <label class="input-field2 ">ข้อกำหนดของการสนับสนุนสินค้าในเกม</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;;font-size:1.2em;color:#000;">แจ้งเตือน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1">
                        <div class="row">
                            <label class="massagrbox1" style="text-align:center;">
                            @if(Session::has('product'))
                                {{ Session::get('product') }}
                            @else
                                {{ Session::get('deadline') }}
                            @endif
                            </label>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
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

<script> /* รูปสินค้า */
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

<script type="text/javascript"> /*นับจำนวนตัวอักษรรายละเอียดสินค้า*/
    $(function(){
        var max_length=500; // กำหนดจำนวนตัวอักษร
        $("#data").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
                var this_length=max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
                if(this_length<0){
                    $(this).val($(this).val().substr(0,500)); // แสดงตามจำนวนตัวอักษรที่กำหนด
                }else{
                    $("#now_length").html(this_length+" /500 ตัวอักษร"); 
                // แสดงตัวอักษรที่เหลือ           
                }           
        });
    });
</script>


<script> /*วันหมดเขตแลกสินค้า*/
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

@if( Session::has('product') || Session::has('deadline'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
        });
    </script>
@endif

@endsection