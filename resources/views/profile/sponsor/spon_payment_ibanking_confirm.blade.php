@extends('layout.sponsor_navbar')
@section('content')

<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row py-5"style="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3 ">
                <div class="col-12">
                    <a href="{{ route('AdvtPackage') }}">
                        <label class="fontAd1 active p">สนับสนุนเงินในเกม</label>
                    </a>
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >ยืนยันการชำระเงิน</label>
                </div>
            </div>

            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 style="margin:0;font-weight:800;">ยืนยันการชำระเงิน</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1">
                        <div class="row py-2" style="border-bottom:1px solid #edeef3">
                            <div class="col-6">
                                <p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p>
                            </div>
                            @if(isset($package))
                                <div class="col-6 text-right">
                                    <h4 style="margin:0;font-weight:800;">฿ {{$package->packageBuy_amount}}</h4>
                                </div>
                            @else
                                <div class="col-6 text-right">
                                    <h4 style="margin:0;font-weight:800;">฿ {{$transeection->transeection_amount}}</h4>
                                </div>
                            @endif
                        </div>

                        <div class="row" style="border-bottom:1px solid #edeef3;padding:13px 0;">
                            <div class="col-6">
                                <p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p>
                            </div>
                            <div class="col-6 text-right font-payment3">
                                <p style="margin:0;font-weight:800;">ibanking</p>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center mt-5">{!! DNS2D::getBarcodeHTML($invoice, "QRCODE",6,6) !!}</div>
                        <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-2 col-md-3 col-lg-8 col-xl-4"></div>
                                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-2">
                                        <form action="{{route('cancalIbanking')}}" method="post">
                                            @csrf
                                            <button class="btn-submit">
                                                <p style="margin:0;">ยกเลิก</p>
                                            </button>
                                                <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                                @if(isset($package))
                                                    <input type="hidden" name="package_id" value="{{$package->package_id}}">
                                                @else
                                                    <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                @endif
                                            <!-- <label class="btn-submit-payment">ยกเลิก</label> -->
                                        </form>
                                    </div>
                                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-2">
                                        <form action="{{route('cancalIbanking')}}" method="post">
                                            @csrf
                                            <button class="btn-submit-red" name="submit" value="submit">
                                                <p style="margin:0;">ยืนยัน</p>
                                                <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                            </button>
                                        </form>
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

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <!-- <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.27 299.9">
                                <defs><style>.cls-1{fill:none;stroke:rgb(15, 175, 23);stroke-miterlimit:10;stroke-width:5px;}</style></defs>
                                <title>check</title>
                                
                                <path id="check" class="cls-1" d="M393.4,124.43,179.6,338.21a40.57,40.57,0,0,1-57.36,0L11.88,227.84a40.56,40.56,0,0,1,57.36-57.36l81.7,81.7L336,67.06a40.56,40.56,0,0,1,57.36,57.36Z" transform="translate(2.5 -52.69)"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('false') }}</p>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('false'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
            // alert("{{Session::get('susee')}}");
        });
    </script>
@endif

<script>
setTimeout(function(){
    $('#popupmodal').modal('hide')
}, 1500);
</script>

@endsection