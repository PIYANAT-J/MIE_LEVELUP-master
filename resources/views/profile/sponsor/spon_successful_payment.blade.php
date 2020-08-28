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
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4 ">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <a href="{{ route('AdvtPackage') }}"><label class="fontAd1 active">สนับสนุนเงินในเกม</label></a>
                    <label class="fontAd1"> > </label>
                    <!-- <a href="{{ route('SponShoppingCart') }}"><label class="fontAd1 active">ตระกร้าสินค้า</label></a>
                    <label class="fontAd1"> > </label>
                    <a href="{{ route('SponsorPayment') }}"><label class="fontAd1 active" >ชำระเงิน</label></a>
                    <label class="fontAd1"> > </label> -->
                    <label class="fontAd1" >ยืนยันการชำระเงิน</label>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row mb-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="col-lg-12 mt-1">
                        <div class="row">
                            <div class="col-lg-12 text-center mt-3">
                                <img style="width:34px;" src="{{asset('icon/select_green2.svg')}}" alt=""> <br>
                                <label class="mt-5" style="font-family:myfont;font-size:1.3em;color:#000;line-height:0;">ชำระเงินเรียบร้อยแล้ว</label> <br>
                                <label class="" style="font-family:myfont1;font-size:1em;color:#a8a8a8;line-height:0;">หมายเลขคำสั่งซื้อ {{decrypt($invoice)}}</label>
                            </div>
                        </div>
                    </div>

                        <div class="row mx-2 mt-5">  
                            <!-- <div class="col-9" style="padding:0;">
                                <label class="plabelimg">
                                    <img class="labelimg" src="{{asset('section/picture_game/game.png') }}" />
                                </label> 
                                <label class="labelFont bglabelFont ml-2 py-3">
                                    <label style="font-weight: 700;">Witch</label></br>
                                    <label style="color: #a8a8a8;">Fantasy • Online</label></br>
                                    <label style="color: #23c197;font-size:0.9em;">ช่วงเวลา 13/08/2020 11:00 - 14/08/2020 12:00</label>
                                    <label style="color: #23c197;font-size:0.9em;">จำนวนรอบโฆษณา 20 รอบ </label>
                                </label>
                            </div> -->
                            <div class="col-9" style="padding:0;">
                                <label class="plabelimg">
                                    <img src="{{asset('icon/money2.svg') }}" />
                                </label> 
                                <label class="labelFont bglabelFont ml-2 py-3">
                                    <label style="font-weight: 700;">แพ็กเกจ 1 {{$package->packageBuy_name}}</label></br>
                                    <label style="color: #23c197;font-size:0.9em;">{{$package->packageBuy_season}} เดือน</label>
                                    <label style="color: #23c197;font-size:0.9em;">จำนวน {{$package->package_game}} เกม </label>
                                </label>
                            </div>
                            <div class="col-3 my-3">
                                <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;font-size:1em;">
                                    <b class="font-price" style="font-size:1.5em;">฿{{$package->packageBuy_amount}}</b></br>
                                    <b class="mr-2" style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </b> (-37%)
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3 py-2" style="background-color:#fafaff;">
                            <div class="col-lg-12">
                                <div class="row mx-2 mt-3">
                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">ที่อยู่ในการออกใบเสร็จ</label>
                                </div>
                                @foreach($address as $addressOn)
                                    @if($addressOn->addresses_status == "true")
                                        <div class="row mx-3">
                                            <div class="col-lg-6" >
                                                <label class="fontAdsPayment">
                                                    <label>ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</label>
                                                </label>
                                                <label class="fontAdsPayment2 ml-2">
                                                    <label>{{Auth::user()->name}} {{Auth::user()->surname}} 
                                                        @foreach($sponsor as $spon)
                                                            ({{$spon->taxID}})<br>(+66) {{$spon->SPON_TEL}}
                                                        @endforeach
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="col-lg-6" >
                                                <label class="fontAdsPayment">
                                                    <label>ที่อยู่</label><br>
                                                </label>
                                                <label class="fontAdsPayment3 ml-2" style="margin:0;">
                                                    <label>{{$addressOn->addresses}} แขวง{{$addressOn->district}}<br>เขต{{$addressOn->amphure}} จังหวัด{{$addressOn->province}} {{$addressOn->zipcode}}
                                                        <label style="color:#23c197;">(ที่อยู่หลัก)</label>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="row mx-2 mt-3">
                            <div class="col-6 font-payment3">ช่องทางการชำระเงิน</div>
                            <div class="col-6 text-right font-payment3">T10 Wallet ชื่อบัญชี สมหญิง รักดี</div>
                        </div>
                        
                        <div class="row mt-3 py-2 " style="background-color:#fafaff ;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 text-right fontAdsPayment5">ยอดรวมสินค้า</div>
                                    <div class="col-6 text-right fontAdsPayment5">฿ {{$package->packageBuy_amount}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-right fontAdsPayment5">ส่วนลด</div>
                                    <div class="col-6 text-right fontAdsPayment5">-</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-right fontAdsPayment5 pt-2">รวมราคาทั้งสิ้น</div>
                                    <div class="col-6 text-right font-price" style="font-size:2em;">฿ {{$package->packageBuy_amount}}</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row mx-1 mt-3">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2 text-right">
                                        <a href="{{route('SponShelf')}}"><button type="button" class="btn-submit-modal">ปิด</button></a>
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


@endsection