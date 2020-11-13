@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('SponOrderList') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#f5f5f5;"></div>
    <div class="row ">

        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="tab-content">
                    <div id="budget" class="tab-pane active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-2 pb-2"> 
                                <h1 class="fontHeader">รายการคำสั่งซื้อ</h1>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6  text-right"> 
                                <SELECT class="SelectWh p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                                <SELECT class="SelectWh p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                            </div>
                        </div>
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row  py-2" style="background-color:#f2f2f2;color:#000;font-weight:800;">
                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7 align-self-center"><p style="font-weight:800;margin:0;">หมายเลขคำสั่งซื้อ</p></div>
                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block"><p style="font-weight:800;margin:0;">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center"><p style="font-weight:800;margin:0;">สถานะ</p></div>
                                </div>
                                <div class="row row4" id="all">
                                    <div class="col-12">
                                        @foreach($transeection as $transeectionList)
                                            @if($transeectionList->transeection_status == "true")
                                                <!-- ขำระเงินแล้ว -->
                                                <div class="row d-flex align-items-center line2">
                                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                        <p style="color:#000;margin:0;">{{$transeectionList->transeection_invoice}}</p>
                                                    </div>
                                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                        @if($transeectionList->transeection_type == "qr")
                                                            <p style="color:#000;margin:0;">โมบายแบงค์กิ้ง</p>
                                                        @elseif($transeectionList->transeection_type == "Transfer")
                                                            <p style="color:#000;margin:0;">โอนเงินผ่านธนาคาร</p>
                                                        @elseif($transeectionList->transeection_type == "VisaCredit")
                                                            <p style="color:#000;margin:0;">บัตรเครดิต/บัตรเดบิต</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                        <!-- ไปแสดงใบเสร็จการชำระเงิน -->
                                                        {{--<a href="{{route('SponsorSuccessfulPayment', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#fff;">
                                                            <p style="margin:0;color:#000;" class="status-transfer3">ชำระเงินแล้ว</p>
                                                        </a>--}}
                                                        <p style="margin:0;color:#000;" class="status-transfer3" data-toggle="modal" data-target="#exampleModalCenter">ชำระเงินแล้ว</p>
                                                    </div>
                                                </div>
                                            @else
                                                @if($transeectionList->transeection_invoice != null)
                                                    <!-- รอแจ้งขำระเงิน -->
                                                    <div class="row d-flex align-items-center line2">
                                                        <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                            <p style="color:#000;margin:0;">{{$transeectionList->transeection_invoice}}</p>
                                                        </div>
                                                        <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                            @if($transeectionList->transeection_type == "qr")
                                                                <p style="color:#000;margin:0;">โมบายแบงค์กิ้ง</p>
                                                            @elseif($transeectionList->transeection_type == "Transfer")
                                                                <p style="color:#000;margin:0;">โอนเงินผ่านธนาคาร</p>
                                                            @elseif($transeectionList->transeection_type == "VisaCredit")
                                                                <p style="color:#000;margin:0;">บัตรเครดิต/บัตรเดบิต</p>
                                                            @endif
                                                        </div>
                                                        <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                            @if(in_array($transeectionList->transeection_invoice, $transfer_invoice))
                                                                <!-- รอการอนุมัติ -->
                                                                {{-- <a href="{{route('SponsorTransfer', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#000;"> --}}
                                                                <p style="margin:0;" class="status-transfer2">รอการอนุมัติ</p>
                                                                <!-- </a> -->
                                                            @else
                                                                <!-- ไปหน้าแจ้งชำระเงิน -->
                                                                <a href="{{route('SponsorTransfer', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#000;">
                                                                    <p style="margin:0;" class="status-transfer">แจ้งชำระเงิน</p>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
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

<!-- Modal ใบเสร็จการชำระเงิน-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-12 mt-1 text-center">
                    <img style="width:34px;" src="{{asset('icon/select_green2.svg')}}" alt="">
                    <h1 class="mt-3" style="color:#000;margin:0;font-weight:800;">ชำระเงินเรียบร้อยแล้ว</h1>
                    <label class="" style="font-family:myfont1;font-size:1em;color:#a8a8a8;line-height:0;">หมายเลขคำสั่งซื้อ 2345678900000</label>
                </div>
            </div>
            <div class="row mx-2 mt-5"> 
                <div class="col-8" style="padding:0;">
                    <label class="plabelimg2 pt-1">
                        <img src="{{asset('icon/money2.svg') }}" />
                    </label> 

                    <label style="padding-left:60px;">
                        <p style="font-weight: 700;margin:0;">Test 1</p>
                        <label class="p" style="color: #23c197;margin:0;">2 เดือน</label>
                        <label class="p" style="color: #23c197;margin:0;">จำนวน 10 เกม </label>
                    </label>
                </div>
                <div class="col-4 text-right">
                    <h4 style="font-weight:800;margin:0;">฿1000</h4>
                    <p style="margin:0;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p>
                </div>
                <div class="col-12 d-flex justify-content-start" style="padding:0;">
                    <label class="mr-2">
                        <img class="labelimg2" src="{{ asset('section/File_game/Profile_game/GAME_IMG_PROFILE_1595566491.png') }}" />
                    </label>
                    <label class="pFont2">
                        <p style="font-weight: 700;margin:0;">ชื่อเกม</p>
                        <p style="color: #a8a8a8;margin:0;">Online • Online</p>
                        <h5 style="color: #23c197;margin:0;">
                            ช่วงเวลา 13/11/63 15:00 - 14/01/64 15:00<br>
                            จำนวนรอบโฆษณา 20 รอบ
                        </h5>
                    </label>
                </div>
            </div>
            <div class="row mt-3 py-2" style="background-color:#fafaff;">
                <div class="col-12">
                    <div class="row mx-2 mt-3">
                        <p style="font-weight:800;margin:0;">ที่อยู่ในการออกใบเสร็จ</p>
                    </div>
                    <div class="row mx-3 mt-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                            <label class="fontAdsPayment mr-2">
                                <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                            </label>
                            <label class="fontAdsPayment2">
                                <p style="margin:0;">วราพร ศรีจิ๋ว
                                    <br>(+66) 0823552062
                                </p>
                            </label>
                        </div>
                        
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 " >
                            <label class="fontAdsPayment mr-2">
                                <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                            </label>
                            <label class="fontAdsPaymentSpon" style="margin:0;">
                                <p style="margin:0;">บ้านเลขที่ 1 หมู่ 1 ไทรน้อย ไทรน้อย นนทบุรี นนทบุรีนนทบุรี 11150</p>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3 pr-3" style="padding: 0 0 0 7px;">
                        <div class="col-6"><p style="color:#000;margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                        <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿1000</h4></div>
                    </div>
                    <div class="row mt-3 pr-3" style="padding: 0 0 0 7px;">
                        <div class="col-3"><p style="color:#000;margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                        <div class="col-9 text-right" style="padding-left:0;">
                            <p style="color:#000;margin:0;font-weight:800;">โอนเงินผ่านธนาคาร บัญชี วราพร ศรีจิ๋ว</p>
                        </div>
                    </div>
                    <div class="row mt-3 py-2" style="background-color:#fafaff ;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                        <div class="col-12">
                            <div class="row mx-1 mt-3">
                                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                                    <button type="button" class="btn-submit" data-dismiss="modal">
                                        <p style="margin:0;">ปิด</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection