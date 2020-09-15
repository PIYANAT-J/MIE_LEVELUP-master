@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
        <div class="row py-5" style="background-color: #f5f5f5;"></div>
        <div class="row  py-3" style="background-color: #f5f5f5;">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">เพคเกจของฉัน</h1>
                    </div>
                </div>
                
                <div class="row mt-3 ">
                    <div class="col-12">
                        @if(isset($package))
                            @foreach($package as $packageMe)
                                @if($packageMe->packageBuy_status == 'true')
                                    <label class="bgMyPackage">
                                        <div class="row">
                                            <div class="col-12 mt-2" style="line-height:0.7;">
                                                <label><p style="margin:0;color:#fff;">แพ็กเกจ {{$packageMe->packageBuy_name}}</p></label><br>
                                                <label><p style="margin:0;color:#fff;font-weight:800;">฿{{$packageMe->packageBuy_amount}}</p></label>
                                                <label><h5 style="margin:0;color:#fff;">{{$packageMe->packageBuy_season}} เดือน</h5></label> <br>
                                                <label><h5 style="margin:0;color:#23c197;">หมดอายุ : {{$packageMe->packageBuy_deadline}}</h5></label>
                                            </div>
                                        </div>
                                        <label class="bgManagePackage">
                                            <a class="linkAd" href="{{ route('AdvtManagement', ['id'=>encrypt($packageMe->package_id)]) }}">
                                                <label><p style="cursor: pointer;">จัดการแพ็กเกจ</p></label>
                                            </a>
                                        </label>
                                    </label>
                                @endif
                            @endforeach
                        @else
                            <!-- <div class="col-lg-11 pt-3 pb-2"> -->
                                <span>
                                    <p style="color:#a8a8a8;margin:0;">ยังไม่มีแพ็กเกจ</p>
                                </span>
                            <!-- </div> -->
                        @endif
                    </div>
                </div>
                <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                            <h1 class="fontHeader">สนับสนุนเงินในเกม</h1>
                        </div>
                    </div>

                    <div class="row mt-2 px-2 justify-content-center">
                        @foreach($allPackage as $AllPackage)
                            <div class="bgPackage">
                                <label>
                                    <div class="row">
                                        <div class="col-lg-12 text-center mt-2">
                                            <img src="{{asset('icon/money2.svg') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center mt-2">
                                            <label style="font-family:myfont1;font-size:1em;line-height:0.5;">แพ็กเกจ {{$AllPackage->package_name}}</label><br>
                                            <label style="font-family:myfont;font-size:1.3em;">฿{{$AllPackage->package_amount}}</label><br>
                                            <label style="font-family:myfont1;font-size:0.9em;">{{$AllPackage->package_season}} เดือน</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <label class="btnBuyPackage">
                                                <a href="{{ route('packagePay', ['id'=>encrypt($AllPackage->package_id), 'idT'=>encrypt('null')]) }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row my-2 px-4">
                                        <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                    </div>
                                    <div class="row pl-3">
                                        <div class="col-lg-12 ">
                                            <label style="font-family:myfont1;font-size:0.9em;font-weight: 800;">รายละเอียด</label>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-1">
                                        <div class="col-lg-12 fontDetailPackage">
                                            <div class="input-container">
                                                <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด {{$AllPackage->package_game}} เกม/เดือน</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">ได้โฆษณาความยาว {{$AllPackage->package_length}} วินาที</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</label>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                        
                        <!-- <div class="bgPackage">
                            <label>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2"><img src="{{asset('icon/money2.svg') }}"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2">
                                        <label style="font-family:myfont1;font-size:1em;line-height:0.5;">แพ็กเกจ 2</label><br>
                                        <label style="font-family:myfont;font-size:1.3em;">฿1,200.00</label>
                                        <label style="font-family:myfont1;font-size:0.9em;">/ เดือน</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <label class="btnBuyPackage">
                                            <a href="{{ route('SponsorPayment') }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="row my-2 px-4">
                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-lg-12 ">
                                        <label style="font-family:myfont1;font-size:0.9em;font-weight: 800;">รายละเอียด</label>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-1">
                                    <div class="col-lg-12 fontDetailPackage">
                                        <div class="input-container">
                                            <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">ได้โฆษณาความยาว 30 วินาที</label>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="bgPackage">
                            <label>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2"><img src="{{asset('icon/money2.svg') }}"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center mt-2">
                                        <label style="font-family:myfont1;font-size:1em;line-height:0.5;">แพ็กเกจ 3</label><br>
                                        <label style="font-family:myfont;font-size:1.3em;">฿1,800.00</label>
                                        <label style="font-family:myfont1;font-size:0.9em;">/ เดือน</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <label class="btnBuyPackage">
                                        <a href="{{ route('SponsorPayment') }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="row my-2 px-4">
                                    <div class="col-lg-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-lg-12 ">
                                        <label style="font-family:myfont1;font-size:0.9em;font-weight: 800;">รายละเอียด</label>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-1">
                                    <div class="col-lg-12 fontDetailPackage">
                                        <div class="input-container">
                                            <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                        </div>

                                        <div class="input-container">
                                            <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">ได้โฆษณาความยาว 1 นาที แบบกดข้ามได้</label>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div> -->
                    </div>
                </form>
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

@endsection