@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')
 
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-12 pt-2 " style="color:#fff;">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shopping_cart" class="avatar-link active">
                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/payment" class="avatar-link active">
                            <h1 style="margin:0;">ชำระเงิน</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/payment_confirmation" class="avatar-link" >
                            <h1 style="margin:0;">ยืนยันการชำระเงิน</h1>
                        </a>
                    </label>
                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-12"> 
                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12 mt-1">
                            <div class="row mx-2 py-3" style="font-family:myfont1;font-size:1em;color:#fff;border-bottom:1px solid #fff;font-weight:800;">ยืนยันการชำระเงิน</div>
                            <div class="row mx-2" style="border-bottom:1px solid #455160">
                                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{$transeection->transeection_price}}</h4></div>
                            </div>

                            <div class="row mx-2 py-3" style="border-bottom:1px solid #455160">
                                <div class="col-6 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                <div class="col-6 text-right font-payment2"><p style="margin:0;">ibanking ชื่อบัญชี {{ Auth::user()->name }} {{ Auth::user()->surname }}</p></div>
                            </div>
                            @if(isset($invoice))
                                <div class="row justify-content-center mt-5">{!! DNS2D::getBarcodeHTML($invoice, "QRCODE",6,6) !!}</div>
                                <div class="row mt-3 py-2 " style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                    <div class="col-lg-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-8"></div>
                                            <div class="col-lg-2">
                                                <!-- <label class="btn-cancel">
                                                    <p style="margin:0;">ยกเลิก</p>
                                                </label> -->
                                                <form action="{{route('cancalItem')}}" method="post">
                                                    @csrf
                                                    <button class="btn-cancel">
                                                        <p style="margin:0;">ยกเลิก</p>
                                                    </button>
                                                    <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                                    <!-- <label class="btn-submit-payment">ยกเลิก</label> -->
                                                </form>
                                            </div>
                                            <div class="col-lg-2">
                                                <!-- <a href="/successful_payment">
                                                    <button class="btn-submit-red">
                                                        <p style="margin:0;color:#fff;">ยืนยัน</p>
                                                    </buton>
                                                </a> -->
                                                <form action="{{route('cancalItem')}}" method="post">
                                                    @csrf
                                                    <button class="btn-submit-red" name="submit" value="submit">
                                                        <p style="margin:0;color:#fff;">ยืนยัน</p>
                                                        <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- <div class="row mt-3 py-2 " style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                <div class="col-lg-12">
                                    <div class="row mt-3">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-2">
                                            <label class="btn-cancel">
                                                <p style="margin:0;">ยกเลิก</p>
                                            </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="/successful_payment">
                                                <button class="btn-submit-red">
                                                    <p style="margin:0;color:#fff;">ยืนยัน</p>
                                                </buton>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_avatar2"></div>
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