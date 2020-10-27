@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">เพคเกจของฉัน</h1>
                    </div>
                </div>
                
                <div class="row mt-3 ">
                        @if(isset($package))
                            @foreach($package as $packageMe)
                                @if($packageMe->packageBuy_status == 'true')
                                    <div class="columnPackage">
                                        <div class="bgMyPackage">
                                            <p style="margin:0;color:#fff;">แพ็กเกจ {{$packageMe->packageBuy_name}}</p>
                                            <label><p style="margin:0;color:#fff;font-weight:800;">฿{{number_format($packageMe->packageBuy_amount, 2)}}</p></label>
                                            <label><h5 style="margin:0;color:#fff;">{{$packageMe->packageBuy_season}} เดือน</h5></label>
                                            <h5 style="margin:0;color:#23c197;">หมดอายุ : {{$packageMe->packageBuy_deadline}}</h5>

                                            <div class="bgManagePackage">
                                                <a class="linkAd" href="{{ route('AdvtManagement', ['id'=>encrypt($packageMe->package_id)]) }}">
                                                    <p style="cursor: pointer;margin:0;">จัดการแพ็กเกจ</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <!-- <div class="col-lg-11 pt-3 pb-2"> -->
                                <span class="ml-3">
                                    <p style="color:#a8a8a8;margin:0;">ยังไม่มีแพ็กเกจ</p>
                                </span>
                            <!-- </div> -->
                        @endif
                    </div>
                </div>

                    <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="background-color:#ffffff;border-radius: 8px;margin:20px 0; padding:10px;">

                            <div class="row"  >
                                <div class="col-12 py-2 ml-2"> 
                                    <h1 class="fontHeader">สนับสนุนเงินในเกม</h1>
                                </div>
                            </div>

                            <div class="row" style="padding:10px 0 10px 10px; width:100%;">
                                @foreach($allPackage as $AllPackage)
                                    <!-- <div class="bgPackage">
                                        <label>
                                            <div class="row">
                                                <div class="col-12 text-center mt-2">
                                                    <img src="{{asset('icon/money2.svg') }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center mt-2">
                                                    <p style="margin:0">แพ็กเกจ {{$AllPackage->package_name}}</p>
                                                    <p style="margin:0;font-weight:800;padding:5px 0;">฿{{number_format($AllPackage->package_amount, 2)}}</p>
                                                    <p style="margin:0">{{$AllPackage->package_season}} เดือน</p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12 text-center">
                                                    <a href="{{ route('packagePay', ['id'=>encrypt($AllPackage->package_id), 'idT'=>encrypt('null')]) }}">
                                                        <label class="btnBuyPackage" style="margin:0;">
                                                            <p style="margin:0;color:#ffffff;cursor: pointer;">ซื้อเลย<p>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row mb-2 px-4">
                                                <div class="col-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                            </div>
                                            <div class="row pl-3">
                                                <div class="col-12 ">
                                                    <p style="font-weight: 800;margin:0;">รายละเอียด</p>
                                                </div>
                                            </div>
                                            <div class="row pl-2 pr-1">
                                                <div class="col-12 fontDetailPackage">
                                                    <div class="input-container">
                                                        <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">เลือกสนุบสนุนเกมได้ทั้งหมด {{$AllPackage->package_game}} เกม/เดือน</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">สามารถเลือกเรทเกมได้ทุกชนิด</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">ได้โฆษณาความยาว {{$AllPackage->package_length}} วินาที</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</h5></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div> -->
                                    <div class="columnPackage2">
                                        <div class="bgPackage">

                                            <div class="d-flex justify-content-center mt-2">
                                                <img src="{{asset('icon/money2.svg') }}">
                                            </div>

                                            <div class="text-center mt-2">
                                                <p style="margin:0">แพ็กเกจ {{$AllPackage->package_name}}</p>
                                                <h1 style="margin:0;font-weight:800;padding:5px 0;">฿{{number_format($AllPackage->package_amount, 2)}}</h1>
                                                <p style="margin:0">{{$AllPackage->package_season}} เดือน</p>
                                            </div>

                                                
                                            <a href="{{ route('packagePay', ['id'=>encrypt($AllPackage->package_id), 'idT'=>encrypt('null')]) }}">
                                                <div class="d-flex justify-content-center">    
                                                    <div class="btnBuyPackage" style="margin:0;">
                                                        <p style="margin:0;color:#ffffff;cursor: pointer;">ซื้อเลย<p>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="row my-2 px-4" style="border-bottom:1px solid #f5f5f5"></div>
                                                
                                            <div class="d-flex justify-content-center">
                                                <label>
                                                    <!-- <p class="pl-2" style="font-weight: 800;margin:0;">รายละเอียด</p> -->
                                                    <div class="input-container">
                                                        <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">เลือกสนุบสนุนเกมได้ทั้งหมด {{$AllPackage->package_game}} เกม/เดือน</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">สามารถเลือกเรทเกมได้ทุกชนิด</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">ได้โฆษณาความยาว {{$AllPackage->package_length}} วินาที</h5></label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field "><h5 style="margin:0;">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</h5></label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
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

@endsection