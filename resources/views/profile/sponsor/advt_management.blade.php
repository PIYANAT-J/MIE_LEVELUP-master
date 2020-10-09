@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row py-5" e="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3 ">
                <div class="col-12 ">
                    <a href="{{ route('AdvtPackage') }}">
                        <label><p class="fontAd1 active">สนับสนุนเงินในเกม</p></label>
                    </a>
                    <label><p class="fontAd1"> > </p></label>
                    <label><p class="fontAd1" >จัดการแพ็กเกจ</p></label>
                </div>
            </div>
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">เพิ่มเกม</h1>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <label class="bgMyPackage2">
                            <div class="row">
                                <div class="col-lg-12 mt-2" style="line-height:0.7;">
                                    <p style="color:#ffffff;margin:0;">แพ็กเกจ {{$package->packageBuy_name}}</p>
                                    <label class="mt-2"><p style="color:#ffffff;margin:0;">฿{{$package->packageBuy_amount}}</p></label>
                                    <label><p style="color:#ffffff;margin:0;">{{$package->packageBuy_season}} เดือน</p></label>
                                    <p style="color:#23c197;margin:0;">หมดอายุ : {{$package->packageBuy_deadline}}</p>
                                </div>
                            </div>
                        </label>
                        <label class="bgInput field-wrap">
                            <label class="fontHeadInput px-3 py-2 p" style="padding:0;">ลิงค์โฆษณา</label> <br>
                            <!-- <input name="name" class="input-login px-3"></input> -->
                            <select class="MySelect p pl-2" name="" id="">เลือกโฆษณา
                            <option value="">ดึงจาก DB</option>
                            <option value="">ดึงจาก DB</option>
                            </select>
                        </label>
                        <div class="row mt-3 mx-1" style="border-bottom: 1px solid #f2f2f2;">
                            <div class="col-12" style="padding:0;">
                            @if($packageGame == null)
                                <label class="p" style="margin:5px 0;font-weight:800;">เกมที่สนับสนุน ( <label style="color:#23c197">0</label> / {{$package->package_game}} )</label>
                            @else
                                <label class="p" style="margin:5px 0;font-weight:800;">เกมที่สนับสนุน ( <label style="color:#23c197">{{ count($packageGame)}}</label> / {{$package->package_game}} )</label>
                            @endif
                            <a class="linkAd" href="{{ route('AdvtAddGame', ['id'=>encrypt($package->package_id), 'idM'=>encrypt(0)]) }}">
                            <label class="addGamePackage p">+ เพิ่มเกม</label></a>
                            </div>
                        </div>
                        <!-- <div class="rowGamePackage"> -->
                            <!-- <div class="row mt-2 mx-1 " style="border-bottom: 1px solid #f2f2f2;">
                                <div class="col-lg-9 mb-2" style="padding:0;">
                                    <label class="labelItem">
                                        <img class="ImgGamePackage" src="{{asset('section/picture_game/game3.png') }}" />
                                    </label> 
                                    <label> <label class="pt-2" style="color:#000;">TimeLie</label><br> Fantasy • Online <br> เวอร์ชั่น 1.03</label>
                                </div>
                                <div class="col-lg-3 text-right" style="padding:0;">
                                    <label class="TimeGamePackage"> 10:30 - 11:30</label>
                                </div>
                            </div> -->
                            <!-- <p>{{$package->packageBuy_gameSpon}}</p> -->
                            <div class="rowGamePackage">
                            @if($packageGame != null)
                                @foreach($packageGame as $gameSpon)
                                    @foreach($game as $Game)
                                        @if($Game->GAME_ID == $gameSpon->gameid)
                                            <?php
                                                $start = explode("T",$gameSpon->start);
                                                $deadline = explode("T",$gameSpon->deadline);
                                            ?>
                                            
                                                <div class="row mt-2 mx-1 " style="border-bottom: 1px solid #f2f2f2;">
                                                    <div class="col-4 col-sm-2 col-md-2 col-lg-4 col-xl-3 mb-2 text-center" style="padding:0;">
                                                        <img class="ImgGamePackage" src="{{asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE)}}" />
                                                    </div> 
                                                    <div class="col-8 col-sm-7 col-md-7 col-lg-6 col-xl-6 mb-2" style="padding:0;">
                                                        <label class="p"> 
                                                            <label style="color:#000;font-weight:800;">{{$Game->GAME_NAME}}</label><br> 
                                                            {{$Game->RATED_B_L}} • Online <br> เวอร์ชั่น 1.03
                                                        </label>
                                                    </div> 
                                                    <div class="col-12 col-sm-3 col-md-3 col-lg-2 col-xl-3 mb-2" style="padding:0;">
                                                        <label class="TimeGamePackage p"> {{$start[1]}} - {{$deadline[1]}}</label>
                                                    </div>
                                                </div>
                                            
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                            </div>
                        <!-- </div> -->
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                        <div class="row">
                            <div class="col-12 pb-2"> 
                                <p style="margin:0;font-weight:800;">ข้อกำหนดของการสนับสนุนเงินในเกม</p>
                            </div>

                            <div class="row pl-3">
                                <div class="col-12" >
                                    <div class="input-container">
                                        <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                        <p style="margin:0;">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</p>
                                    </div>
                                    <div class="input-container">
                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                        <p style="margin:0;">สามารถเลือกเรทเกมได้ทุกชนิด</p>
                                    </div>

                                    <div class="input-container">
                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                        <p style="margin:0;">ได้โฆษณาความยาว 15 วินาที</p>
                                    </div>

                                    <div class="input-container">
                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                        <p style="margin:0;">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</p>
                                    </div>
                                    
                                    <div class="input-container">
                                        <img class="imgCorrectPackage icon2" src="{{asset('icon/incorrect.svg') }}">
                                        <p style="margin:0;">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</p>
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