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
                    @if(empty($package))
                        <label class="fontAd1"> > </label>
                        <a href="{{ route('SponShoppingCart') }}">
                            <label class="fontAd1 active p">ตระกร้าสินค้า</label>
                        </a>
                    @endif
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >ยืนยันการชำระเงิน</label>
                </div>
            </div>

            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="col-12 mt-1 text-center">
                    <img style="width:34px;" src="{{asset('icon/select_green2.svg')}}" alt="">
                    <h1 class="mt-2" style="color:#000;margin:0;font-weight:800;">ชำระเงินเรียบร้อยแล้ว</h1>
                    <label class="" style="font-family:myfont1;font-size:1em;color:#a8a8a8;line-height:0;">หมายเลขคำสั่งซื้อ {{decrypt($invoice)}}</label>
                </div>

                <div class="row mx-2 mt-5"> 
                    @if(isset($package))
                        <div class="col-8" style="padding:0;">
                            <label class="plabelimg2 pt-1">
                                <img src="{{asset('icon/money2.svg') }}" />
                            </label> 

                            <label style="padding-left:60px;">
                                <p style="font-weight: 700;margin:0;">{{$package->packageBuy_name}}</p>
                                <label class="p" style="color: #23c197;margin:0;">{{$package->packageBuy_season}} เดือน</label>
                                <label class="p" style="color: #23c197;margin:0;">จำนวน {{$package->package_game}} เกม </label>
                            </label>
                        </div>
                        <div class="col-4 text-right">
                            <h4 style="font-weight:800;margin:0;">฿{{number_format($package->packageBuy_amount, 2)}}</h4>
                            <!-- <p style="margin:0;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p> -->
                        </div>
                    @else
                        <?php 
                            $gameID = json_decode($transeection->transeection_gameSpon); 
                            $gamearray = array();
                        ?>
                        @foreach($gameID as $gameId)
                            <?php $gamearray[] = $gameId->gameid; ?>
                        @endforeach
                        
                        @foreach($gameTrue as $gameList)
                            @if(in_array($gameList->sponsor_cart_game, $gamearray))
                                <div class="col-12 d-flex justify-content-start" style="padding:0;">
                                    <label class="mr-2">
                                        <img class="labelimg2" src="{{ asset('section/File_game/Profile_game/'.$gameList->GAME_IMG_PROFILE) }}" />
                                    </label>
                                    <label class="pFont2">
                                        <p style="font-weight: 700;margin:0;">{{$gameList->GAME_NAME}}</p>
                                        <p style="color: #a8a8a8;margin:0;">{{$gameList->RATED_B_L}} • Online</p>
                                        <h5 style="color: #23c197;margin:0;">
                                            ช่วงเวลา {{$gameList->sponsor_cart_start}} - {{$gameList->sponsor_cart_deadline}}<br>
                                            จำนวนรอบโฆษณา {{$gameList->sponsor_cart_number}} รอบ
                                        </h5>
                                    </label>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>

                <div class="row mt-3 py-2" style="background-color:#fafaff;">
                    <div class="col-12">
                        <div class="row mx-2 mt-3">
                            <p style="font-weight:800;margin:0;">ที่อยู่ในการออกใบเสร็จ</p>
                        </div>
                        @foreach($address as $addressOn)
                            @if($addressOn->addresses_status == "true")
                                <div class="row mx-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                        <label class="fontAdsPayment mr-2">
                                            <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                                        </label>
                                        <label class="fontAdsPayment2">
                                            <p style="margin:0;">{{Auth::user()->name}} {{Auth::user()->surname}} 
                                                @foreach($sponsor as $spon)
                                                    ({{$spon->taxID}})<br>(+66) {{$spon->SPON_TEL}}
                                                @endforeach
                                            </p>
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                        <label class="fontAdsPayment mr-2">
                                            <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                                        </label>
                                        <label class="fontAdsPayment3" style="margin:0;">
                                            <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}}  {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}</p>
                                        </label>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="row mt-3" style="padding: 0 0 0 7px;">
                    <div class="col-6"><p style="color:#000;margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                    @if(isset($package))
                        <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿{{number_format($package->packageBuy_amount, 2)}}</h4></div>
                    @else
                        <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿{{number_format($transeection->transeection_amount, 2)}}</h4></div>
                    @endif
                </div>

                <div class="row mt-3" style="padding: 0 0 0 7px;">
                    <div class="col-6"><p style="color:#000;margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                    <div class="col-6 text-right" style="padding-left:0;">
                        <p style="color:#000;margin:0;font-weight:800;">{{$transeection->transeection_type}} <br>บัญชี {{Auth::user()->name}} {{Auth::user()->surname}}</p>
                    </div>
                </div>
                
                <div class="row mt-3 py-2 " style="background-color:#fafaff ;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                    <!-- <div class="col-6"></div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6 text-right p">ยอดรวมสินค้า</div>
                            @if(isset($package))
                                <div class="col-6 text-right p">฿ {{$package->packageBuy_amount}}</div>
                            @else
                                <div class="col-6 text-right font-price" style="font-size:2em;">฿ {{$transeection->transeection_amount}}</div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-6 text-right p">ส่วนลด</div>
                            <div class="col-6 text-right p">-</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-right p pt-2">รวมราคาทั้งสิ้น</div>
                            @if(isset($package))
                                <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿ {{$package->packageBuy_amount}}</h4></div>
                            @else
                                <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿ {{$transeection->transeection_amount}}</h4></div>
                            @endif
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="row mx-1 mt-3">
                            <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                            <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                                <a href="{{route('SponOrderList')}}">
                                    <button type="button" class="btn-submit">
                                        <p style="margin:0;">ปิด</p>
                                    </button>
                                </a>
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