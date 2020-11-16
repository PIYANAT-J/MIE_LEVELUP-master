@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AvatarOrderList') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#141621;"></div>
    <div class="row ">

        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621;">
            
            <div style="background-color:#141621;border-radius: 8px;padding:20px;">
                <div class="tab-content">
                    <div id="budget" class="tab-pane active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-2 pb-2"> 
                                <h1 class="fontHeader" style="color:#fff;">รายการคำสั่งซื้อ</h1>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"> 
                                <SELECT class="SelectDr p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                                <SELECT class="SelectDr p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                            </div>
                        </div>
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row  py-2" style="background-color:#141621;color:#000;font-weight:800;">
                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7 align-self-center"><p style="font-weight:800;margin:0;color:#fff;">หมายเลขคำสั่งซื้อ</p></div>
                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block"><p style="font-weight:800;margin:0;color:#fff">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center"><p style="font-weight:800;margin:0;color:#fff">สถานะ</p></div>
                                </div>
                                <div class="row rowOderListAvatar" id="all">
                                    <div class="col-12">
                                        @foreach($transeection as $transeectionList)
                                            @if($transeectionList->transeection_status == "true")
                                                <!-- ขำระเงินแล้ว -->
                                                <div class="row d-flex align-items-center line2">
                                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                        <p style="color:#000;margin:0;color:#fff;">{{$transeectionList->transeection_invoice}}</p>
                                                    </div>
                                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                        @if($transeectionList->transeection_type == "qr")
                                                            <p style="color:#000;margin:0;color:#fff;">โมบายแบงค์กิ้ง</p>
                                                        @elseif($transeectionList->transeection_type == "Transfer")
                                                            <p style="color:#000;margin:0;color:#fff;">โอนเงินผ่านธนาคาร</p>
                                                        @elseif($transeectionList->transeection_type == "VisaCredit")
                                                            <p style="color:#000;margin:0;color:#fff;">บัตรเครดิต/บัตรเดบิต</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                        <!-- ไปแสดงใบเสร็จการชำระเงิน -->
                                                        {{-- <a href="{{route('SuccessfulPayment', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#fff;">
                                                            <p style="margin:0;color:#000;" class="status-transfer3" >ชำระเงินแล้ว</p>
                                                        </a> --}}
                                                        <p style="margin:0;color:#000;" class="status-transfer3" data-toggle="modal" data-target="#exampleModalCenter">ชำระเงินแล้ว</p>
                                                    </div>
                                                </div>
                                            @else
                                                @if($transeectionList->transeection_invoice != null)
                                                    <!-- รอแจ้งขำระเงิน -->
                                                    <div class="row d-flex align-items-center line2">
                                                        <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                            <p style="color:#000;margin:0;color:#fff;">{{$transeectionList->transeection_invoice}}</p>
                                                        </div>
                                                        <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                            @if($transeectionList->transeection_type == "qr")
                                                                <p style="color:#000;margin:0;color:#fff;">โมบายแบงค์กิ้ง</p>
                                                            @elseif($transeectionList->transeection_type == "Transfer")
                                                                <p style="color:#000;margin:0;color:#fff;">โอนเงินผ่านธนาคาร</p>
                                                            @elseif($transeectionList->transeection_type == "VisaCredit")
                                                                <p style="color:#000;margin:0;color:#fff;">บัตรเครดิต/บัตรเดบิต</p>
                                                            @endif
                                                        </div>
                                                        <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                            @if(in_array($transeectionList->transeection_invoice, $transfer_invoice))
                                                                <!-- รอการอนุมัติ -->
                                                                <!-- <a href="{{route('PaymentTransfer', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#000;"> -->
                                                                <p style="margin:0;" class="status-transfer2">รอการอนุมัติ</p>
                                                                <!-- </a> -->
                                                            @else
                                                                <!-- ไปหน้าแจ้งชำระเงิน -->
                                                                <a href="{{route('PaymentTransfer', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#000;">
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
        <div class="col-lg-4 col-xl-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bg_avatar2"></div>
    </div>
</div>

<!-- Modal ใบเสร็จการชำระเงิน-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
    <div class="modal-content" style="background-color:#202433;">
        <div class="modal-body">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <img style="width:40px;" src="{{asset('icon/select_green.svg')}}" alt=""> <br>
                    <p class="mt-3" style="color:#fff;font-weight:800;margin:0;">ชำระเงินเรียบร้อยแล้ว</p>
                    <p style="color:#a8a8a8;margin:0">หมายเลขคำสั่งซื้อ 01234567890000</p>
                </div>
            </div>
            <div class="row mx-2 mt-5">
                <div class="col-7" style="padding:0;">
                    <label class="labelItemAvatar bgItem mr-2">
                        <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                    </label> 
                    <label class="font-sale4 bgItem2 mt-2">
                        <p style="margin:0;"> <a style="font-weight: 700;">ชื่อไอเทม ระดับ 3</a></br>
                        คำอธิบาย</br>
                        เลือกลงทุนได้ 3 Signal</p>
                    </label>
                </div>

                <div class="col-2 my-4 text-center" style="padding:0;">
                    <p style="margin:0;color:#fff;">1 ชิ้น</p>
                </div>

                <div class="col-3 my-3">
                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿3000</h4>
                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-25)</p>
                    </span>
                </div>
            </div>

            <div class="row mx-2 mt-5">
                <div class="col-7" style="padding:0;">
                    <label class="labelItemAvatar bgItem mr-2">
                        <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                    </label> 
                    <label class="font-sale4 bgItem2 mt-2">
                        <p style="margin:0;"> <a style="font-weight: 700;">ชื่อไอเทม ระดับ 3</a></br>
                        คำอธิบาย</br>
                        เลือกลงทุนได้ 3 Signal</p>
                    </label>
                </div>

                <div class="col-2 my-4 text-center" style="padding:0;">
                    <p style="margin:0;color:#fff;">1 ชิ้น</p>
                </div>

                <div class="col-3 my-3">
                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿3000</h4>
                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-25)</p>
                    </span>
                </div>
            </div>

            <div class="row mx-2 mt-5">
                <div class="col-7" style="padding:0;">
                    <label class="labelItemAvatar bgItem mr-2">
                        <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                    </label> 
                    <label class="font-sale4 bgItem2 mt-2">
                        <p style="margin:0;"> <a style="font-weight: 700;">ชื่อไอเทม ระดับ 3</a></br>
                        คำอธิบาย</br>
                        เลือกลงทุนได้ 3 Signal</p>
                    </label>
                </div>

                <div class="col-2 my-4 text-center" style="padding:0;">
                    <p style="margin:0;color:#fff;">1 ชิ้น</p>
                </div>

                <div class="col-3 my-3">
                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿3000</h4>
                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-25)</p>
                    </span>
                </div>
            </div>
            <div class="row mt-3 py-2" style="background-color:#191b29;">
                <div class="col-12">
                    <div class="row ml-2">
                        <p style="font-weight:800;margin:0;color:#fff;">ที่อยู่ในการออกใบเสร็จ</p>
                    </div>
                    <div class="row ml-2 mt-2">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                            <label class="font-payment-avatar mr-2">
                                <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                            </label>
                            <label class="font-payment-avatar2">
                                <p style="margin:0;">วราพร ศรีจิ๋ว(5-1005-00148-76-6)
                                        <br>(+66) 0823552062
                                </p>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                            <label class="font-payment-avatar mr-2">
                                <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                            </label>
                            <label class="font-payment-avatar4">
                                <p style="margin:0;">
                                    บ้านเลขที่ 1 หมู่ 1 ไทรน้อย ไทรน้อย นนทบุรี 11150
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pl-2 pr-4" style="border-bottom:1px solid #455160">
                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿3000</h4></div>
            </div>
            <div class="row py-3 pl-2 pr-4" style="border-bottom:1px solid #455160">
                <div class="col-3 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                <div class="col-9 text-right font-payment2" style="padding-left:0;">
                    <p style="margin:0;">โมบายแบงค์กิ้ง บัญชี วราพร ศรีจิ๋ว</p>
                    <!-- <p style="margin:0;">โอนเงินธนาคาร <br> บัญชี วราพร ศรีจิ๋ว</p>
                    <p style="margin:0;">บัตรเครดิต/บัตรเดบิต <br> บัญชี วราพร ศรีจิ๋ว</p> -->
                </div>
            </div>
            <div class="row mt-2" style="padding-right:12px">
                <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                    <button type="button" class="btn-submit" data-dismiss="modal" style="background-color:#191b29;">
                        <p style="margin:0;">ปิด</p>
                    </button>
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
        var option = '<option  class="font-select2" value="day">วัน</option>';
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select2" value="'+ i +'">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        
        var option = '<option class="font-select2" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            // option += '<option value="'+ i + '">' + i + '</option>';
            if(i == 1){
                option += '<option class="font-select2"  value="'+ i + '">' + "มกราคม" + '</option>';
            }else if(i == 2){
                option += '<option class="font-select2"  value="'+ i + '">' + "กุมภาพันธ์" + '</option>';
            }else if(i == 3){
                option += '<option class="font-select2"  value="'+ i + '">' + "มีนาคม" + '</option>';
            }else if(i == 4){
                option += '<option class="font-select2"  value="'+ i + '">' + "เมษายน" + '</option>';
            }else if(i == 5){
                option += '<option class="font-select2"  value="'+ i + '">' + "พฤษภาคม" + '</option>';
            }else if(i == 6){
                option += '<option class="font-select2"  value="'+ i + '">' + "มิถุนายน" + '</option>';
            }else if(i == 7){
                option += '<option class="font-select2"  value="'+ i + '">' + "กรกฎาคม" + '</option>';
            }else if(i == 8){
                option += '<option class="font-select2"  value="'+ i + '">' + "สิงหาคม" + '</option>';
            }else if(i == 9){
                option += '<option class="font-select2"  value="'+ i + '">' + "กันยายน" + '</option>';
            }else if(i == 10){
                option += '<option class="font-select2"  value="'+ i + '">' + "ตุลาคม" + '</option>';
            }else if(i == 11){
                option += '<option class="font-select2"  value="'+ i + '">' + "พฤศจิกายน" + '</option>';
            }else{
                option += '<option class="font-select2"  value="'+ i + '">' + "ธันวาคม" + '</option>';
            }
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var option = '<option  class="font-select2" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select2" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        var option = '<option  class="font-select2" value="year">ปี</option>';
        selectedYear ="year";
        for (var i=1930;i <= d.getFullYear();i++){// years start i
            option += '<option  class="font-select2" value="'+ i + '">' + i + '</option>';
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
                    var option = '<option  class="font-select2" value="day">วัน</option>';
                    for (var i=1;i <= Days[1];i++){ //add option days
                            option += '<option  class="font-select2" value="'+ i + '">' + i + '</option>';
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
        var option = '<option  class="font-select2" value="day">วัน</option>';
        var month = parseInt( $(select).val() ) - 1;
        for (var i=1;i <= Days[ month ];i++){ //add option days
            option += '<option  class="font-select2" value="'+ i + '">' + i + '</option>';
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