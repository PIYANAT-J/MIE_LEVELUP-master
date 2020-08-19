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

        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                    <div class="col-lg-9" style="background-color:#f5f5f5;">
                        <div class="row mt-4 ">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 ">
                                <a href="{{ route('AdvtPackage') }}"><label class="fontAd1 active">สนับสนุนเงินในเกม</label></a>
                                <label class="fontAd1"> > </label>
                                <label class="fontAd1" >จัดการแพ็กเกจ</label>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row mb-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">

                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">เพิ่มเกม</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6" style="border-right: 1px solid #f2f2f2;">
                                        <label class="bgMyPackage2">
                                            <div class="row">
                                                <div class="col-lg-12 mt-2" style="line-height:0.7;">
                                                <label style="font-family:myfont1;font-size:1em;color:#ffffff;">แพ็กเกจ 1</label><br>
                                                    <label style="font-family:myfont;font-size:1.3em;color:#ffffff;">฿900.00</label>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#ffffff;">/ เดือน</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;color:#23c197;">หมดอายุ : 25/05/20</label>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 py-2" style="padding:0;">ลิงค์โฆษณา</label> <br>
                                            <input name="name" class="input-login px-3"></input>
                                        </label>
                                        <div class="row mt-2 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                                            <div class="col-lg-9" style="padding:0;">
                                                <label class="font-profile1" style="margin:5px 0;">เกมที่สนับสนุน ( <label style="color:#23c197">5</label> / 20 )</label>
                                            </div>
                                            <div class="col-lg-3 text-right mb-2" style="padding:0;">
                                            <a class="linkAd" href="{{ route('AdvtAddGame') }}"><label class="addGamePackage">+ เพิ่มเกม</label></a>
                                            </div>
                                        </div>
                                        <div class="rowGamePackage">
                                            <div class="row mt-2 mx-1 " style="border-bottom: 1px solid #f2f2f2;">
                                                <div class="col-lg-9 mb-2" style="padding:0;">
                                                    <label class="labelItem">
                                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game3.png') }}" />
                                                    </label> 
                                                    <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">TimeLie</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                                </div>
                                                <div class="col-lg-3 text-right" style="padding:0;">
                                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                                </div>
                                            </div>

                                            <div class="row mt-2 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                                                <div class="col-lg-9 mb-2" style="padding:0;">
                                                    <label class="labelItem">
                                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game.png') }}" />
                                                    </label> 
                                                    <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">Witcher</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                                </div>
                                                <div class="col-lg-3 text-right" style="padding:0;">
                                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                                </div>
                                            </div>

                                            <div class="row mt-2 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                                                <div class="col-lg-9 mb-2" style="padding:0;">
                                                    <label class="labelItem">
                                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game4.png') }}" />
                                                    </label> 
                                                    <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">Mafia</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                                </div>
                                                <div class="col-lg-3 text-right" style="padding:0;">
                                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                                </div>
                                            </div>
                                            <div class="row mt-2 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                                                <div class="col-lg-9 mb-2" style="padding:0;">
                                                    <label class="labelItem">
                                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game18.png') }}" />
                                                    </label> 
                                                    <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">Man Eater</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                                </div>
                                                <div class="col-lg-3 text-right" style="padding:0;">
                                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                                </div>
                                            </div>
                                            <div class="row mt-2 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                                                <div class="col-lg-9 mb-2" style="padding:0;">
                                                    <label class="labelItem">
                                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game11.png') }}" />
                                                    </label> 
                                                    <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">Forza</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                                </div>
                                                <div class="col-lg-3 text-right" style="padding:0;">
                                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 pb-2"> 
                                                <span class="font-profile1">ข้อกำหนดของการสนับสนุนเงินในเกม</span>
                                            </div>

                                            <div class="row pl-3">
                                                <div class="col-lg-12" >
                                                    <div class="input-container">
                                                        <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field2 ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                                    </div>
                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field2 ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field2 ">ได้โฆษณาความยาว 15 วินาที</label>
                                                    </div>

                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                        <label class="input-field2 ">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</label>
                                                    </div>
                                                    
                                                    <div class="input-container">
                                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/incorrect.svg') }}">
                                                        <label class="input-field2 ">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
@endsection