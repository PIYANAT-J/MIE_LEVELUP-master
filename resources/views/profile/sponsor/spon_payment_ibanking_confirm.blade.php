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
                                    <div class="col-sm-2 col-md-3 col-lg-8 col-xl-8"></div>
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <h4 style="color:#000;margin:0;">แจ้งเตือน</h4>
                    </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-12 pb-1">
                        <div class="row">
                            <label class="massagrbox1" style="text-align:center;">{{ Session::get('false') }}</label>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-red d-none">ยืนยัน</button>
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
            Swal.fire({
                // position: 'top-end',
                icon: 'error',
                title: '{{ Session::get('false') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif

@endsection