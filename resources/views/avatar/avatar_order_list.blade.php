@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AvatarOrderList') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#f5f5f5;"></div>
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
                                <!-- <SELECT class="SelectDr p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                                <SELECT class="SelectDr p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT> -->
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                            </div>
                        </div>
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row  py-2" style="background-color:#000;color:#000;font-weight:800;">
                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7 align-self-center"><p style="font-weight:800;margin:0;color:#fff;">หมายเลขคำสั่งซื้อ</p></div>
                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block"><p style="font-weight:800;margin:0;color:#fff">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center"><p style="font-weight:800;margin:0;color:#fff">สถานะ</p></div>
                                </div>
                                <div class="row row4" id="all">
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
                                                            <p style="color:#000;margin:0;color:#fff;">โอนเงินธนาคาร</p>
                                                        @elseif($transeectionList->transeection_type == "VisaCredit")
                                                            <p style="color:#000;margin:0;color:#fff;">บัตรเครดิต/บัตรเดบิต</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                        <!-- ไปแสดงใบเสร็จการชำระเงิน -->
                                                        <a href="{{route('SuccessfulPayment', ['invoice' => encrypt($transeectionList->transeection_invoice)])}}" style="color:#fff;">
                                                            <p style="margin:0;color:#000;" class="status-transfer3">ชำระเงินแล้ว</p>
                                                        </a>
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
@endsection