@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.sponsor_sidebar')
        <!-- sidebar -->
        <!-- <div class="col-lg-3" style="background-color: #17202c;">
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
                <a href="{{ route('AdsSpon') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">Ads</span>รายการโฆษณา</button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div> -->
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    
                    <div class="row">
                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                            <span class="font-profile1">เพคเกจของฉัน</span>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            @if(isset($package))
                                @foreach($package as $packageMe)
                                    @if($packageMe->packageBuy_status == 'true')
                                        <label class="bgMyPackage">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2" style="line-height:0.7;">
                                                    <label style="font-family:myfont1;font-size:1em;color:#ffffff;">แพ็กเกจ {{$packageMe->packageBuy_name}}</label><br>
                                                    <label style="font-family:myfont;font-size:1.3em;color:#ffffff;">฿{{$packageMe->packageBuy_amount}}</label>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#ffffff;">{{$packageMe->packageBuy_season}} เดือน</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#23c197;">หมดอายุ : {{$packageMe->packageBuy_deadline}}</label>
                                                </div>
                                            </div>
                                            <label class="bgManagePackage">
                                                <a class="linkAd" href="{{ route('AdvtManagement', ['id'=>encrypt($packageMe->package_id)]) }}"><label style="font-family:myfont1;font-size:0.9em;cursor: pointer;">จัดการแพ็กเกจ</label></a>
                                            </label>
                                        </label>
                                    @endif
                                @endforeach
                            @else
                                <!-- <div class="col-lg-11 pt-3 pb-2"> -->
                                    <span>
                                        <label style="font-family:myfont;font-size:1em;color:#a8a8a8;">คุณต้องรีบซื้อเพคเกจน่ะจ้ะ</label>
                                    </span>
                                <!-- </div> -->
                            @endif
                        </div>
                    </div>
                    <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                <span class="font-profile1">สนับสนุนเงินในเกม</span>
                            </div>
                        </div>

                        <div class="row mt-2 pl-2">
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
                                                    <a href="{{ route('packagePay', ['id'=>encrypt($AllPackage->package_id)]) }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
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

@endsection