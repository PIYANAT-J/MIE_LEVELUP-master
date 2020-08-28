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
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 pb-2" style="padding-left:0;">
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#budget">สนับสนุนเงิน</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#product">สนับสนุนสินค้า</a></li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row mb-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="tab-content">
                        <div id="budget" class="tab-pane active">
                            <div class="row">
                                <div class="col-lg-9 pb-2"> 
                                    <span class="font-profile1">ตู้เกม (เกมเชล)</span>
                                </div>
                                <div class="col-lg-3 pb-2 pr-4"> 
                                    <select class="select3" name="" id="">
                                        <option value="">ทั้งหมด</option>
                                        <option value="">แพ็กเกจ 1</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1em;color:#000;">
                                        <div class="col-6">ชื่อเกม</div>
                                        <div class="col-2 text-center">แพ็กเกจ</div>
                                        <div class="col-2 text-center">จำนวนที่เข้าถึง</div>
                                        <div class="col-2 text-center">วันหมดแพ็กเกจ</div>
                                    </div>
                                    <div class="row row4">
                                        <div class="col-lg-12">
                                            @foreach($package as $gameSpon)
                                                @if($gameSpon->packageBuy_gameSpon != null)
                                                    <?php $packageGame = json_decode($gameSpon->packageBuy_gameSpon); ?>
                                                    @foreach($game as $Game)
                                                        @foreach($packageGame as $packageGameID)
                                                            @if($packageGameID->gameid == $Game->GAME_ID)
                                                                <?php
                                                                    $start = explode("T",$packageGameID->start);
                                                                    $deadline = explode("T",$packageGameID->deadline);
                                                                    $dayIf = $deadline[0].' '.$deadline[1];
                                                                ?>
                                                                <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                                                    <div class="col-6">
                                                                        <div class="row">
                                                                            <div class="col-3"><img class="shelf-pic" src="{{asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE)}}" /></div>
                                                                            <div class="col-9 font-game-shelf">
                                                                                <div>
                                                                                    <span style="font-family:myfont;color:#000;">{{$Game->GAME_NAME}}</span></br>
                                                                                    {{$Game->RATED_B_L}} • Other</br>
                                                                                    เวอร์ชั่น 1.03
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-2 text-center"><span class="font-game-shelf" style="color:#000;">แพ็กเกจ {{$gameSpon->packageBuy_name}}</span></div>
                                                                    <div class="col-2 text-center"><span class="font-game-shelf">289</span></div>
                                                                    <div class="col-2 text-center">
                                                                        @if($dayIf <= date("Y-m-d H:i"))
                                                                            <span class="font-game-shelf" style="font-size:0.7em;">{{$deadline[1]}}, {{$deadline[0]}}</span><br>
                                                                            <span class="status-kyc4 px-2" style="font-size:0.8em;">หมดอายุ</span>
                                                                        @else
                                                                            <span class="font-game-shelf" style="font-size:0.7em;">{{$deadline[1]}}, {{$deadline[0]}}</span><br>
                                                                        @endif
                                                                        <!-- <span class="font-game-shelf" style="font-size:0.7em;">{{$deadline[1]}}, {{$deadline[0]}}</span><br>
                                                                        <span class="font-game-shelf" style="font-size:0.7em;">{{$packageGameID->deadline}}</span> <br>
                                                                        <span class="font-game-shelf" style="font-size:0.7em;">{{$dayIf}}</span> <br>
                                                                        <span class="font-game-shelf" style="font-size:0.7em;">{{date("Y-m-d H:i")}}</span> <br>
                                                                        <span class="status-kyc4 px-2" style="font-size:0.8em;">หมดอายุ</span> -->
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endif
                                            @endforeach
                                            <!-- <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-3"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                                        <div class="col-9 font-game-shelf">
                                                            <div>
                                                                <span style="font-family:myfont;color:#000;">Time Lie</span></br>
                                                                Online • Other</br>
                                                                เวอร์ชั่น 1.03
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 text-center"><span class="font-game-shelf" style="color:#000;">แพ็กเกจ 1 </span></div>
                                                <div class="col-2 text-center"><span class="font-game-shelf">289</span></div>
                                                <div class="col-2 text-center">
                                                    <span class="font-game-shelf" style="font-size:0.7em;">12:50, 23/05/20</span> <br>
                                                    <span class="status-kyc4 px-2" style="font-size:0.8em;">หมดอายุ</span>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="product" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-9 pb-2"> 
                                    <span class="font-profile1">ตู้เกม (เกมเชล)</span>
                                </div>
                                <div class="col-lg-3 pb-2 pr-4"> 
                                    <select class="select3" name="" id="">
                                    <option value="">ทั้งหมด</option>
                                    <option value="">รออนุมัติ</option>
                                    <option value="">อนุมัติแล้ว</option>
                                    <option value="">หมดอายุ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1em;color:#000;">
                                        <div class="col-6">ชื่อสินค้า</div>
                                        <div class="col-2 text-center">สถานะ</div>
                                        <div class="col-2 text-center">จำนวนที่แลก</div>
                                        <div class="col-2 text-center">วันหมดเขต</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row4">
                                <div class="col-lg-12">
                                    @if(isset($product))
                                        @foreach($product as $productAll)
                                            <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-3"><img class="shelf-pic" src="{{asset('section/product//product_img/'.$productAll->product_img) }}" /></div>
                                                        <div class="col-9 font-game-shelf">
                                                            <div>
                                                                <span style="font-family:myfont;color:#000;">{{$productAll->product_name}}</span><br>
                                                                คะแนนที่ใช้แลกสินค้า {{$productAll->product_point}} พอยท์
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 text-center">
                                                    @if($productAll->product_status == "รออนุมัติ")
                                                        <span class="status-kyc3 px-2" style="font-size:0.8em;">รอการอนุมัติ</span>
                                                    @elseif($productAll->product_status == "อนุมัติ")
                                                        <span class="status-kyc2 px-2" style="font-size:0.8em;">อนุมัติแล้ว</span>
                                                    @elseif($productAll->product_status == "หมดอายุ")
                                                        <span class="status-kyc4 px-2" style="font-size:0.8em;">หมดอายุ</span>
                                                    @endif
                                                </div>
                                                <div class="col-2 text-center"><span class="font-game-shelf"> <label style="color:#000;">0</label>/{{$productAll->product_amount}}</span></div>
                                                <div class="col-2 text-right">
                                                    <span class="font-game-shelf" style="font-size:0.7em;">{{$productAll->product_deadline}}</span> 
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-3"><img class="shelf-pic" src="{{asset('section/product/p2.jfif') }}" /></div>
                                                <div class="col-9 font-game-shelf">
                                                    <div>
                                                        <span style="font-family:myfont;color:#000;">บะหมี่กึ่งสำเร็จรูปรสต้มยำกุ้งตรามาม่า</span> <br>
                                                        คะแนนที่ใช้แลกสินค้า 250 พอยท์
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-center">
                                            <span class="status-kyc3 px-2" style="font-size:0.8em;">รอการอนุมัติ</span>
                                            <span class="status-kyc2 px-2" style="font-size:0.8em;">อนุมัติแล้ว</span>
                                            <span class="status-kyc4 px-2" style="font-size:0.8em;">หมดอายุ</span>
                                        </div>
                                        <div class="col-2 text-center"><span class="font-game-shelf"> <label style="color:#000;">10</label>/300</span></div>
                                        <div class="col-2 text-right">
                                            <span class="font-game-shelf" style="font-size:0.7em;">12:50, 23/05/20</span>
                                        </div>
                                    </div> -->
                                    
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
@endsection