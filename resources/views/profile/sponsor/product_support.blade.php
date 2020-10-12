@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('ProductSupport') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">สนับสนุนสินค้าในเกม</h1>
                    </div>
                </div>
                <form action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="form-group" align="center">
                                        <div id="thumb" class="thumb-game "><img src="icon/product_box.png"></div>    
                                        <input id="file_upload" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                        <button id="upload" class="btn-upload-pic mt-2">
                                            <p style="margin:0;color:#fff;">เลือกรูป</p>
                                        </button>
                                        <p style="margin:0;color:#b2b2b2;">ขนาดไฟล์: สูงสุด 1 MB</p>
                                    </div>
                                </div>
                            </div>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อสินค้า</p>
                                <input type="text" class="input1 p ml-2" name="product_name" value="{{old('product_name')}}" require></input>
                            </label>
                            <div class="row">
                                <div class="col-6" style="padding-right:5px;">
                                    <label class="bgInput field-wrap my-1" >
                                        <p class="fontHeadInput">จำนวนสินค้า</p>
                                        <input type="text" class="input1 p ml-2" name="product_amount" value="{{old('product_amount')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require></input>
                                    </label>
                                </div>
                                <div class="col-6" style="padding-left:5px">
                                    <label class="bgInput field-wrap my-1" >
                                        <p class="fontHeadInput">จำนวน Point ที่ใช้</p>
                                        <input type="text" class="input1 p ml-2" name="product_point" value="{{old('product_point')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require></input>
                                    </label>
                                </div>
                            </div>
                            <label class="bgInput field-wrap my-1" style="margin-bottom:0;">
                                <p class="fontHeadInput">รายละเอียดสินค้า</p>
                                <textarea id="data" class="input1 p ml-2" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3" require></textarea><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">วันหมดเขตการแลกสินค้า</p>
                                <label style="padding:0;"><SELECT class="MySelect p pl-2" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></label>
                                <label style="padding:0;"><SELECT class="MySelect p pl-2" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></label>
                                <label style="padding:0;"><SELECT class="MySelect p pl-2" size="1" id ="day" name = "dd"></SELECT></label>
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
                            <div class="row my-2">
                                <div class="col-12">
                                    <button type="submit" name="submit" value="submit" class="btn-submit">
                                    <p style="margin:0;">ส่งคำขอ</p></button>
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
                        
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12 pb-2"> 
                                    <p style="margin:0;font-weight:800;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                </div>

                                <div class="row pl-3">
                                    <div class="col-12" >
                                        <div class="input-container">
                                            <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <p style="margin:0;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                        </div>
                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <p style="margin:0;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <p style="margin:0;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <p style="margin:0;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                        </div>
                                        
                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/incorrect.svg') }}">
                                            <p style="margin:0;">ข้อกำหนดของการสนับสนุนสินค้าในเกม</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-12 text-center" style="font-family:myfont1;color:#000;">แจ้งเตือน</div>
                <button type="button" class="close btn-closeModal-header" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 14px;"></i>
                </button>
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