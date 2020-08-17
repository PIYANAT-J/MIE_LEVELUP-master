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
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                    <div class="col-lg-9" style="background-color:#f5f5f5;">
                        <div class="row mt-4 ">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 ">
                                <a href="{{ route('AdvtPackage') }}"><label class="fontAd1 active">สนับสนุนเงินในเกม</label></a>
                                <label class="fontAd1"> > </label>
                                <label class="fontAd1" >ตระกร้าสินค้า</label>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row mb-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">ตระกร้าสินค้า</span>
                                    </div>
                                </div>
                                <div class="row rowGameShopping">
                                    <div class="col-lg-12" style="border-bottom: 1px solid #f2f2f2;">
                                        <div class="row mx-2 mt-3" style="border-bottom:1px solid #fff;">  
                                            <div class="col-8" style="padding:0;">
                                                <label class="checkbox-dark" style="padding-top:10px;">
                                                    <input type="checkbox" id="checkbox_01" name="accept_01">
                                                    <label for="checkbox_01" ></label>
                                                </label>
                                                <label class="plabelimg">
                                                    <img class="labelimg" src="{{asset('section/picture_game/game.png') }}" />
                                                </label> 
                                                <label class="labelFont bglabelFont ml-2 py-3">
                                                    <label style="font-weight: 700;">Witch</label></br>
                                                    <label style="color: #a8a8a8;">Fantasy • Online</label></br>
                                                    <label style="color: #23c197;font-size:0.9em;">ช่วงเวลา 13/08/2020 11:00 - 14/08/2020 12:00</label>
                                                    <label style="color: #23c197;font-size:0.9em;">จำนวนรอบโฆษณา 20 รอบ </label>
                                                </label>
                                            </div>

                                            <div class="col-3 my-3">
                                                <span class="fontPriceAds1" style="line-height: 1.2; display:block;text-align:right;font-size:1em;">
                                                    <b class="font-price" style="font-size:1.5em;">฿279.00</b></br>
                                                    <b class="mr-2" style="color: #b2b2b2;text-decoration:line-through;">฿680 </b> (-37%)
                                                </span>
                                            </div>

                                            <div class="col-1 my-4 py-1 text-center" style="padding:0;">
                                                <img style="width:30%;cursor:pointer;" src="{{asset('icon/trash.svg') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-0 my-3">
                                    <div class="col-4">
                                        <div class="row my-2">
                                            <div class="col-lg-12">
                                                <label class="checkbox-dark">
                                                    <input type="checkbox" id="checkbox_all" name="accept_01" onclick="toggle(this);">
                                                    <label for="checkbox_all" class="pt-2 ml-2" style="font-family:myfont1;font-size:1em;font-weight:800;">เลือกทั้งหมด</label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="row mt-3 mb-2">
                                            <div class="col-lg-12">
                                                <span style="font-family:myfont1;font-size:1em;font-weight:800;">
                                                    <label>รวมค่าสินค้า</label>
                                                    <label>( 3 รายการ )</label>
                                                    <label class="pl-3"><b class="font-price">฿279.00</b></label>
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-red2" style="">ชำระเงิน</label></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </form>
            @endif
        @endforeach
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

<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
@endsection