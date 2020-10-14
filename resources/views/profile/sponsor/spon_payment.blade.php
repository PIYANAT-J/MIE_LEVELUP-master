@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row py-5"style="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')
      
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3">
                <div class="col-12">
                    <a href="{{ route('AdvtPackage') }}">
                        <label class="fontAd1 active p">สนับสนุนเงินในเกม</label>
                    </a>
                    @if(empty($allPackage))
                        <label class="fontAd1 p"> > </label>
                        <a href="{{ route('SponShoppingCart') }}">
                            <label class="fontAd1 active p">ตระกร้าสินค้า</label>
                        </a>
                    @endif
                    
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >ชำระเงิน</label>
                </div>
            </div>

            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">ชำระเงิน</h1>
                    </div>
                </div>

                <div class="row row8">
                    @if(isset($allPackage))
                        <div class="col-12">
                            <div class="row mt-3" style="border-bottom:1px solid #f2f2f2;">  
                                <div class="col-9" style="padding:0;">
                                    <label class="plabelimg2">
                                        <img src="{{asset('icon/money2.svg') }}" />
                                    </label> 
                                    <div class="pFont3">
                                        <p style="font-weight: 700;margin:0;">{{$allPackage->package_name}}</p>
                                        <label class="p" style="color: #23c197;">{{$allPackage->package_season}} เดือน</label>
                                        <label class="p" style="color: #23c197;">จำนวน {{$allPackage->package_game}} เกม </label>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <span  style="display:block;text-align:right;">
                                        <h4 style="font-weight:800;margin:0;color:#ce0005;">฿{{$allPackage->package_amount}}</h4>
                                        <label style="margin:0;"><p style="color: #b2b2b2;text-decoration:line-through;font-weight:800;margin:0;">฿680 </p></label>
                                        <!-- <label><p style="margin:0;font-weight:800;"> (-37%)</p></label> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    @else
                        <?php 
                            $start = explode(', ', $transeection->transeection_gameSpon);
                            $gameID = array();
                            for($i=0;$i<count($start);$i++){
                                $gameID[] = $start[$i];
                            }
                        ?>
                        @foreach($countCart as $key=>$gameList)
                            @if(in_array($gameList->sponsor_cart_game, $gameID))
                                <div class="col-12" style="border-bottom: 1px solid #f2f2f2;">
                                    <div class="row my-2">  
                                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-1 d-none d-sm-block d-md-block d-lg-block d-xl-block" style="padding:0;">
                                            <img class="pImg ml-1" src="{{ asset('section/File_game/Profile_game/'.$gameList->GAME_IMG_PROFILE) }}" />
                                        </div>
                                        <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-8 d-flex align-items-center">
                                            <label class="pFont2">
                                                <p style="font-weight: 700;margin:0;">{{$gameList->GAME_NAME}}</p>
                                                <!-- <p style="color: #a8a8a8;margin:0;">{{$gameList->RATED_B_L}} • Online</p> -->
                                                <h5 style="color: #23c197;margin:0;">
                                                ช่วงเวลา {{$gameList->sponsor_cart_start}} - {{$gameList->sponsor_cart_deadline}}<br>
                                                จำนวนรอบโฆษณา {{$gameList->sponsor_cart_number}} รอบ </h5>
                                            </label>
                                        </div>

                                        <div class="col-3 d-flex align-items-center justify-content-end">
                                            <span style="display:block;text-align:right;">
                                                <h4 style="font-weight:800;margin:0;color:#ce0005;">฿{{$gameList->sponsor_cart_price}}</h4>
                                                @if($gameList->GAME_DISCOUNT != null)
                                                <label style="margin:0;"><p style="color: #b2b2b2;text-decoration:line-through;font-weight:800;margin:0;">฿680 </p></label>
                                                <!-- <label><p style="margin:0;font-weight:800;"> (-{{$gameList->GAME_DISCOUNT}}%) </p></label> -->
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>

                <div class="row mt-3 py-2" style="background-color:#fafaff;">
                    <div class="col-12">
                        <div class="row mx-2 mt-3">
                            <p style="font-weight:800;margin:0;">ที่อยู่ในการออกใบเสร็จ</p>
                            <p class="ml-2" style="color:#ce0005;cursor:pointer;border-bottom:1px solid #ce0005;height:1.2em;" data-toggle="modal" data-target="#address">เปลี่ยน</p>
                        </div>
                        @foreach($address as $addressOn)
                            @if($addressOn->addresses_status == "true")
                                <div class="row mx-3">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
                                            <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}} {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}
                                                <a style="color:#23c197;">(ที่อยู่หลัก)</a>
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="row mx-2">
                            <p style="margin:0;font-weight:800;">วิธีชำระเงิน</p>
                        </div>
                        <div class="row mx-0 mt-2" >
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <label  class="bgPayment labellogo mx-1" onClick="myFunction()">
                                    <img class="logoT10" src="{{asset('home/logo/t10.svg') }}" >
                                    <label class="fontLogoPosition p" style="font-weight:800;">T10 วอลเล็ท</label>
                                    <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">ฟรีค่าธรรมเนียม</h5></label>
                                    <div id="first">
                                        <label class="BorderGreenSelectPayment">
                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                        </label>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <label  class="bgPayment labellogo mx-1" onClick="myFunction2()">
                                    <img class="logoT10" src="{{asset('home/logo/credit-icon.svg') }}" >
                                    <label class="fontLogoPosition p" style="color:#0b0e17;font-weight:800;">บัตรเครดิต/บัตรเดบิต</label>
                                    <img class="fontdetailPosition" style="height:20px;" src="{{asset('home/logo/security-grey.svg') }}" >
                                    <div id="second">
                                        <label class="BorderGreenSelectPayment">
                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                        </label>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <label  class="bgPayment labellogo mx-1" onClick="myFunction3()">
                                    <img class="center logoT10" src="{{asset('home/logo/mobile-icon.svg') }}" >
                                    <label class="fontLogoPosition p" style="font-weight:800;">โมบายแบงค์กิ้ง</label>
                                    <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">รอยืนยัน 45 นาที หลังชำระเงิน</h5></label>
                                    <div id="third">
                                        <label class="BorderGreenSelectPayment">
                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                        </label>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <label  class="bgPayment labellogo mx-1" onClick="myFunction4()">
                                    <img class="center logoT10" src="{{asset('home/logo/bank-icon.svg') }}" >
                                    <label class="fontLogoPosition p" style="font-weight:800;">โอนเงินธนาคาร</label>
                                    <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">รอยืนยัน 45 นาที หลังชำระเงิน</h5></label>
                                    <div id="four">
                                        <label class="BorderGreenSelectPayment">
                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                        </label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="first1">
                    <div class="row my-3 fade-in">
                        <div class="col-12 mb-3">
                            <button class="addT10wallet"><p style="margin:0;font-weight: 800;">+ เพิ่มบัญชี T10 วอลเล็ท</p></button>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <p class="ml-2 " style="font-weight:800;margin:0;">เหรียญ T10 ที่ใช้ได้</p>
                            <div class="input-group mb-3">
                                <input class="inputSponPayment3 p pl-2" type="text" value="200 บาท" aria-describedby="basic-addon2" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text select-code2 p" id="basic-addon2" data-toggle="modal" data-target="#T10Topup">เติมเงิน</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <p class="ml-2" style="font-weight:800;margin:0;">คูปอง / ส่วนลดของฉัน</p>
                            <div class="input-group mb-3">
                                <input class="inputSponPayment2 p pl-2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text select-code2 p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="ml-2" style="font-weight:800;margin:0;">รายการรอชำระ</p>
                            <div class="row200">
                                <div class="row mt-2 pl-2 " style=" background-color: #ffffff">
                                    <div class="col-5 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
                                        <label class="bgT10ListBankingPay" data-toggle="modal" data-target="#VisaCredit3">
                                            <p style="margin:0;">ชำระเงิน</p>
                                        </label>
                                    </div>
                                    <div class="col-7 col-sm-9 col-md-10 col-lg-10 col-xl-10">
                                        <p style="margin:0;">฿100 ธนาคารกรุงเทพ 
                                            <a style="margin:0;color:#ce0005;">ควรชำระก่อน 10/10/20</a>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="second1">
                    <div class="row my-3 fade-in">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <p class="ml-2" style="margin:0;font-weight:800;">บัญชี</p>
                            <div class="row">
                                <div class="col-12 redioGreen">
                                    <input type="radio" name="VisaCredit" value="visa" id="visa" />
                                    <label for="visa" class="VisaCredit">
                                        <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                        <label for="visa" class="pBankAvatar">
                                            <p style="color:#414141;">ธนาคารไทยพาณิชย์ *1234</p>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-12 redioGreen">
                                    <input type="radio" name="VisaCredit" value="credit" id="credit" />
                                    <label for="credit" class="VisaCredit">
                                        <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/credit.svg')}}" >
                                        <label for="credit" class="pBankAvatar">
                                            <p style="color:#414141;">ธนาคารไทยพาณิชย์ *1234</p>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-12 px-2 mt-2">
                                    <label class="addBank px-2" data-toggle="modal" data-target="#VisaCredit2">
                                        <p style="margin:0;">เพิ่มบัตรเครดิต / เดบิต</p>
                                    </label>
                                </div>
                            </div>
                                
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row">
                                <p class="ml-2" style="margin:0;font-weight:800;"> คูปอง / ส่วนลดของฉัน</p>
                                <div class="input-group mb-3">
                                    <input class="inputSponPayment2 p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text select-code2 p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="third1">
                    <div class="row my-3 fade-in">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <p class="ml-2" style="margin:0;font-weight:800;">บัญชี</p>
                            <div class="redioRed">
                                <div class="row pl-2 radio-ibank">
                                    <div class="col-12 my-2">
                                        <input type="radio" name="ibank" value="bangkok" id="bank01">
                                        <label for="bank01"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                        <span class="p">ธนาคารกรุงเทพ</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="ktc" id="bank02">
                                        <label for="bank02"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                        <span class="p">ธนาคารกรุงไทย</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="kbank" id="bank03">
                                        <label for="bank03"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                        <span class="p">ธนาคารกสิกรไทย</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="scb" id="bank04">
                                        <label for="bank04"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                        <span class="p">ธนาคารไทยพาณิชย์</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="ml-2" style="margin:0;font-weight:800;">คูปอง / ส่วนลดของฉัน</p>
                            <div class="input-group mb-3">
                                <input class="inputSponPayment2 p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text select-code2 p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <p class="ml-2" style="margin:0;font-weight:800;">ชำระเงินอย่างไร</p>
                            <p style="margin:0;">
                                1. ล็อกอินเข้าระบบ K Plus <br>
                                2. เลือกเมนู “จ่ายบิล” <br>
                                3. เลือก “รายการใหม่” <br>
                                4. เลือก “บิลอื่น” <br>
                                5. เลือก “บริษัท” เป็น “123 เซอร์วิส” <br>
                                6. ใส่ เลขที่อ้างอิง ใน “รหัสลูกค้า” <br>
                                7. ใส่หมายเลขโทรศัพท์มือถือใน “รหัสใบสั่งซื้อ”<br>
                                8. ใส่จำนวนเงิน <br>
                                9. กด “จ่ายบิล” <br> 
                                10. ตรวจสอบความถูกต้อง และกด “ยืนยัน” <br>
                            </p>
                        </div>
                    </div>
                </div>

                <div id="four1">
                    <div class="row my-3 fade-in">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <p class="ml-2" style="margin:0;font-weight:800;">บัญชี</p>
                            <div class="redioRed">
                                <div class="row radio-ibank">
                                    <div class="col-12 my-2">
                                        <input type="radio" name="ibank" value="bangkok" id="bank05">
                                        <label for="bank05"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                        <span class="p">ธนาคารกรุงเทพ</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="ktc" id="bank06">
                                        <label for="bank06"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                        <span class="p">ธนาคารกรุงไทย</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="kbank" id="bank07">
                                        <label for="bank07"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                        <span class="p">ธนาคารกสิกรไทย</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="radio" name="ibank" value="scb" id="bank08">
                                        <label for="bank08"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                        <span class="p">ธนาคารไทยพาณิชย์</span>
                                    </div>
                                </div>
                            </div>

                            <p class="ml-2" style="margin:0;font-weight:800;">คูปอง / ส่วนลดของฉัน</p>

                            <div class="input-group mb-3">
                                <input class="inputSponPayment2 p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text select-code2 p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12">
                                    <p class="ml-2" style="margin:0;font-weight:800;">ชำระเงินอย่างไร</p>
                                    <p style="margin:0;">  
                                        1. เลือกจ่ายบิล / ชำระค่าบริการ <br>
                                        2. เลือกอื่นๆ > รหัสบริษัท > ระบุรหัสบริษัท > ออมทรัพย์<br>
                                        3. ใส่รหัสบริษัท 12345<br>
                                        4. ระบุหมายเลขอ้างอิงการชำระเงินสำหรับ “REF1”<br>
                                        5. ระบุหมายเลขโทรศัพท์มือถือ สำหรับ “REF2”<br>
                                        6. ระบุยอดเงิน<br>
                                        7. หมายเหตุ : ค่าธรรมเนียมขึ้นกับธนาคา หรือ ผู้ให้บริการ<br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="ml-2" style="font-weight:800;margin:0;">รายการรอการแจ้งโอน</p>
                            <div class="row200">
                                <div class="row mt-2 pl-2 " style=" background-color: #ffffff">
                                    <!-- <div class="col-4 pl-2"> -->
                                        <!-- <label class="ml-2 bgT10ListBanking"> -->
                                            @if(isset($transfer))
                                                @if($transfer != null)
                                                    @if($transfer->transferStatus == "ยืนยันการโอน")
                                                        @if(isset($package))
                                                            <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center" style="padding : 0 0 0 15px">
                                                                <a href="{{ route('SponsorTransfer', ['invoice' => encrypt($package->packageBuy_invoice)]) }}" style="width:100%">
                                                                    <label class="bgTransfer">
                                                                        <p  style="margin:0;">ชำระเงิน</p>
                                                                    </label>
                                                                </a>
                                                            </div>
                                                            <div class="col-9 col-sm-9 col-md-10 col-lg-10 col-xl-10 ">
                                                                <label class="mr-2 p" style="line-height:0;"> ฿{{$package->packageBuy_amount}}
                                                                    @if($transfer->transferฺBank_name == "bangkok")
                                                                        ธนาคารกรุงเทพ
                                                                    @elseif($transfer->transferฺBank_name == "ktc")
                                                                        ธนาคารกรุงไทย
                                                                    @elseif($transfer->transferฺBank_name == "kbank")
                                                                        ธนาคารกสิกรไทย
                                                                    @elseif($transfer->transferฺBank_name == "scb")
                                                                        ธนาคารไทยพาณิชย์
                                                                    @endif
                                                                </label>
                                                                @else
                                                                    <a href="{{ route('SponsorTransfer', ['invoice' => encrypt($transeection->transeection_invoice)]) }} " style="width:100%">
                                                                        <label class="bgTransfer">
                                                                            <p style="margin:0;">ชำระเงิน</p>
                                                                        </label>
                                                                    </a>
                                                                    <label class="mr-2 p" style="line-height:0;"> ฿{{$transeection->transeection_amount}}
                                                                        @if($transfer->transferฺBank_name == "bangkok")
                                                                            ธนาคารกรุงเทพ
                                                                        @elseif($transfer->transferฺBank_name == "ktc")
                                                                            ธนาคารกรุงไทย
                                                                        @elseif($transfer->transferฺBank_name == "kbank")
                                                                            ธนาคารกสิกรไทย
                                                                        @elseif($transfer->transferฺBank_name == "scb")
                                                                            ธนาคารไทยพาณิชย์
                                                                        @endif
                                                                    </label>
                                                                @endif
                                                                    <?php
                                                                        $start = explode("-",$transfer->create_at);
                                                                        $deadline = explode(" ",$start[2]);
                                                                        $deadline1 = $deadline[0] + 1;
                                                                    ?>
                                                                    <label style="color:#ce0005;" class="p"> ควรชำระก่อน {{$start[0]}}/{{$start[1]}}/{{$deadline1}} {{$deadline[1]}}</label>
                                                            </div> 
                                                    @elseif($transfer->transferStatus == "รอการอนุมัติ")
                                                        <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center" style="padding : 0 0 0 15px">
                                                            <label class="bgOrange p">รออนุมัติ</label>
                                                        </div>
                                                        <div class="col-9 col-sm-9 col-md-10 col-lg-10 col-xl-10 ">
                                                            <label class="mr-2 p" style="line-height:0;"> ฿{{$package->packageBuy_amount}}
                                                                @if($transfer->transferฺBank_name == "bangkok")
                                                                    ธนาคารกรุงเทพ
                                                                @elseif($transfer->transferฺBank_name == "ktc")
                                                                    ธนาคารกรุงไทย
                                                                @elseif($transfer->transferฺBank_name == "kbank")
                                                                    ธนาคารกสิกรไทย
                                                                @elseif($transfer->transferฺBank_name == "scb")
                                                                    ธนาคารไทยพาณิชย์
                                                                @endif
                                                            </label>
                                                        </div>
                                                    @elseif($transfer->transferStatus == "อนุมัติแล้ว")
                                                        <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center" style="padding : 0 0 0 15px">
                                                            {{-- <a href="{{ route('SponsorSuccessfulPayment') }}" style="width:100%;">
                                                                <label class="bgGreen p">อนุมัติแล้ว</label>
                                                            </a> --}}
                                                        </div>
                                                        <div class="col-9 col-sm-9 col-md-10 col-lg-10 col-xl-10 ">
                                                            <label class="mr-2 p" style="line-height:0;"> ฿{{$package->packageBuy_amount}}
                                                                @if($transfer->transferฺBank_name == "bangkok")
                                                                    ธนาคารกรุงเทพ
                                                                @elseif($transfer->transferฺBank_name == "ktc")
                                                                    ธนาคารกรุงไทย
                                                                @elseif($transfer->transferฺBank_name == "kbank")
                                                                    ธนาคารกสิกรไทย
                                                                @elseif($transfer->transferฺBank_name == "scb")
                                                                    ธนาคารไทยพาณิชย์
                                                                @endif
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
                                        <!-- </label> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($allPackage))
                    <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                        <div class="col-12">
                            <div class="row mx2">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6 text-right p">ยอดรวมสินค้า</div>
                                        <div class="col-6 text-right p">฿ {{$allPackage->package_amount}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-right p">ส่วนลด</div>
                                        <div class="col-6 text-right p">-</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6 text-right p pt-2">รวมราคาทั้งสิ้น</div>
                                        <div class="col-6 text-right"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿ {{$allPackage->package_amount}}</h4></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-12 text-right" id="T10">
                                    <a href="{{ route('SponsorPaymentConfirm') }}">
                                        <label class="btn-submit-red-s p">ชำระเงิน</label>
                                    </a>
                                </div>
                                <div class="col-12 text-right" id="VisaCredit">
                                    <a href="{{ route('SponsorPaymentConfirm') }}">
                                        <label class="btn-submit-red-s p">ชำระเงิน</label>
                                    </a>
                                </div>
                                <div class="col-12 text-right" id="iBanking">
                                    <!-- <a href="{{ route('SponsorPaymentConfirm') }}"> -->
                                    <!-- <label class="btn-submit-red-s">ชำระเงิน</label> -->
                                    <!-- </a> -->
                                    @if($package == null)
                                        <form action="{{route('packageibanking')}}" method="POST">
                                            @csrf
                                            <button class="btn-submit-red-s p">ชำระเงิน
                                                <input type="hidden" name="amount" value="{{$allPackage->package_amount}}">
                                                <input type="hidden" name="bank_name" id="data-checked">
                                                <input type="hidden" name="paymentType" value="QrCode">
                                                <input type="hidden" name="note" id="note" value="no">
                                                <input type="hidden" name="package_id" value="{{$allPackage->package_id}}">
                                                <input type="hidden" id="submit" name="submit" value="submit">
                                            </button>
                                        </form>
                                    @else
                                        @if($package->packageBuy_status == 'false')
                                            <button class="btn-cancel-s " style="cursor:default">
                                                <p style="margin:0">รอการชำระเงิน</p>
                                            </button>
                                        @else
                                            <span>
                                                <p style="color:#a8a8a8;">คุณมีเพคเกจนี้อยู่แล้ว</p>
                                            </span>
                                        @endif
                                    @endif
                                    
                                </div>
                                <div class="col-12 text-right" id="Transfer">
                                    @if($package == null)
                                        <form action="{{route('sponTransferPayment')}}" method="POST">
                                            @csrf
                                            <button class="btn-submit-red-s p">ชำระเงิน
                                                <input type="hidden" name="transferAmount" value="{{$allPackage->package_amount}}">
                                                <input type="hidden" name="transferฺBank_name" id="data-bank">
                                                <input type="hidden" name="package_id" value="{{$allPackage->package_id}}">
                                                <input type="hidden" id="submit" name="submit" value="submit">
                                            </button>
                                        </form>
                                    @else
                                        @if($package->packageBuy_status == 'false')
                                            <button class="btn-cancel-s" style="cursor:default">
                                                <p style="margin:0">รอการชำระเงิน</p>
                                            </button>
                                        @else
                                            <button class="btn-cancel-s" style="cursor:default">
                                                <p style="color:#a8a8a8;">คุณมีเพคเกจนี้อยู่แล้ว</p>
                                            </button>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                        <div class="col-12">
                            <div class="row mx2">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10 text-right p">ยอดรวมสินค้า</div>
                                        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 text-right p">฿ {{$transeection->transeection_amount}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8 col-sm-8  col-md-10 col-lg-10 col-xl-10 text-right p">ส่วนลด</div>
                                        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 text-right p">-</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10 text-right p pt-2">รวมราคาทั้งสิ้น</div>
                                        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 justify-content-end d-flex align-items-end"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿ {{$transeection->transeection_amount}}</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-12 text-right" id="T10">
                                    <a href="{{ route('SponsorPaymentConfirm') }}"><label class="btn-submit-red-s p">ชำระเงิน</label></a>
                                </div>
                                <div class="col-12 text-right" id="VisaCredit">
                                    <a href="{{ route('SponsorPaymentConfirm') }}"><label class="btn-submit-red-s p">ชำระเงิน</label></a>
                                </div>
                                <div class="col-12 text-right" id="iBanking">
                                    <!-- <a href="{{ route('SponsorPaymentConfirm') }}"> -->
                                    <!-- <label class="btn-submit-red2">ชำระเงิน</label> -->
                                    <!-- </a> -->
                                    @if($transeection->transeection_invoice == null)
                                        <form action="{{route('packageibanking')}}" method="POST">
                                            @csrf
                                            <button class="btn-submit-red-s p">ชำระเงิน
                                                <input type="hidden" name="amount" value="{{$transeection->transeection_amount}}" >
                                                <input type="hidden" name="bank_name" id="data-checked">
                                                <input type="hidden" name="paymentType" value="QrCode">
                                                <input type="hidden" name="note" id="note" value="no">
                                                <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                <input type="hidden" id="submit" name="submit" value="submit">
                                            </button>
                                        </form>
                                    @else
                                        @if($transeection->transeection_status == 'false')
                                            <button class="btn-cancel" style="cursor:default">
                                                <p style="margin:0">รอการชำระเงิน</p>
                                            </button>
                                        @endif
                                    @endif
                                </div>
                                <div class="col-12 text-right" id="Transfer">
                                    @if($transeection->transeection_invoice == null)
                                        <form action="{{route('sponTransferPayment')}}" method="POST">
                                            @csrf
                                            <button class="btn-submit-red-s p">ชำระเงิน
                                                <input type="hidden" name="transferAmount" value="{{$transeection->transeection_amount}}">
                                                <input type="hidden" name="transferฺBank_name" id="data-bank">
                                                <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                <input type="hidden" id="submit" name="submit" value="submit">
                                            </button>
                                        </form>
                                    @else
                                        @if($transeection->transeection_status == 'false')
                                            <button class="btn-cancel" style="cursor:default">
                                                <p style="margin:0">รอการชำระเงิน</p>
                                            </button>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

<!-- เลือกที่อยู่ -->
    <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 style="margin:0;color:#000;font-weight:800;">ที่อยู่</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal">
                        <i class="icon-close_modal" style="font-size: 14px;"></i>
                    </button>
                </div>
                <form action="{{route('DeleteAddress')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12" style="padding:0;">
                            <div class="row">
                                <div class="col-12">
                                    @foreach($address as $key=>$addressAll)
                                        @if($addressAll->addresses_status == "true")
                                            <div class="row radio-address">
                                                <div class="col-4" style="padding-right:0;">
                                                    <div class="redioRed">
                                                        <input type="radio" name="address" value="{{$addressAll->addresses_id}}" id="KEY{{$key}}" checked>
                                                        <label for="KEY{{$key}}"><p style="margin:0;font-weight:800;">ชื่อ - นามสกุล<br>ที่อยู่</p></label>
                                                    </div>
                                                </div>
                                                <div class="col-7" style="padding:0;">
                                                    <p style="margin:0;">
                                                        {{Auth::user()->name}} {{Auth::user()->surname}}
                                                        <a style="color:#ce0005;">(ที่อยู่หลัก)</a><br>
                                                        {{$addressAll->addresses}} แขวง{{$addressAll->district}} เขต{{$addressAll->amphure}} จังหวัด{{$addressAll->province}} {{$addressAll->zipcode}}
                                                    </p>
                                                </div>
                                                <div class="col-1 text-center" style="padding:0;">
                                                    <button class="btnTrash" name="deleteAddress" value="deleteAddress">
                                                        <img style="width:20px;" src="{{asset('icon/trash.svg')}}" >
                                                        <input type="hidden" name="addresses_id" value="{{$addressAll->addresses_id}}">
                                                    </button>
                                                    <!-- <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label> -->
                                                </div>
                                            </div>
                                        @else
                                            <div class="row radio-address">
                                                <div class="col-4" style="padding-right:0;">
                                                    <div class="redioRed">
                                                        <input type="radio" name="address" value="{{$addressAll->addresses_id}}" id="KEY{{$key}}">
                                                        <label for="KEY{{$key}}"><p style="margin:0;font-weight:800;">ชื่อ - นามสกุล<br>ที่อยู่</p></label>
                                                    </div>
                                                </div>
                                                <div class="col-7" style="padding:0;">
                                                    <p style="margin:0;">
                                                        {{Auth::user()->name}} {{Auth::user()->surname}}
                                                        {{$addressAll->addresses}} แขวง{{$addressAll->district}} เขต{{$addressAll->amphure}} จังหวัด{{$addressAll->province}} {{$addressAll->zipcode}}
                                                    </p>
                                                </div>
                                                <div class="col-1 text-center" style="padding:0;">
                                                    <button class="btnTrash" name="deleteAddress" value="deleteAddress">
                                                        <img style="width:20px;" src="{{asset('icon/trash.svg')}}" >
                                                        <input type="hidden" name="addresses_id" value="{{$addressAll->addresses_id}}">
                                                    </button>
                                                    <!-- <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label> -->
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="bgAddress"  data-dismiss="modal" data-toggle="modal" data-target="#address2">
                                                <p style="margin:0;font-weight:800;">+ เพิ่มที่อยู่</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="button" class="btn-submit">
                            <p style="margin:0;">ยกเลิก</p>
                        </button> -->
                        <button class="btn-submit-red" name="changeAddress" value="changeAddress">
                            <p style="margin:0;">ยืนยัน</p>
                            <input type="hidden" name="changeAddID" id="change-add">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- เพิ่มที่อยู่ใหม่ -->
    <div class="modal fade" id="address2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 style="margin:0;color:#000;font-weight:800;">เพิ่มที่อยู่</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
                </div>
                <form action="{{route('AddAddress')}}" method="POST" enctype="multipart/form-data" id="upDate">
                    @csrf
                    <div class="modal-body font-rate-modal" style="padding-bottom:0;">
                        <div class="col-12" >
                            <div class="row">
                                <div class="col-12">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">ชื่อบริษัท/ชื่อ-นามสกุล</p>
                                        <input name="name" class="input1 p ml-2" value="{{ Auth::user()->name }} {{ Auth::user()->surname }}" readonly></input>
                                    </label>
                                </div>

                                <div class="col-12">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">เลขผู้เสียภาษีอาการ</p>
                                        @foreach($sponsor as $spon)
                                            <input name="taxID" class="input1 p ml-2" value="{{$spon->taxID}}" readonly></input>
                                        @endforeach
                                    </label>
                                </div>

                                <div class="col-12">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">ที่อยู่ผู้เสียภาษีอากร </p>
                                        <input name="addresses" class="input1 p ml-2"></input>
                                    </label>
                                </div>
                                <div class="col-6" style="padding-right:5px;">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">จังหวัด</p>
                                        <input class="input1 p ml-2" type="text" name="province">
                                    </label>
                                </div>
                                <div class="col-6" style="padding-left:5px;">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">อำเภอ</p>
                                        <input class="input1 p ml-2" type="text" name="amphure">
                                    </label>
                                </div>
                                <div class="col-6" style="padding-right:5px;">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">ตำบล</p>
                                        <input class="input1 p ml-2" type="text" name="district">
                                    </label>
                                </div>
                                <div class="col-6" style="padding-left:5px;">
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">รหัสไปรษณีย์</p>
                                        <input class="input1 p ml-2" type="text" name="zipcode">
                                    </label>
                                </div>
                                <div class="checkbox-red ml-3 mt-2">
                                    <input type="checkbox" id="checkbox_01" name="accept_01">
                                    <label for="checkbox_01">
                                        <p class="fontCheckbox" style="margin:0 0 0 15px;font-weight:800;">ที่อยู่หลัก</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-submit">
                            <p style="margin:0;">ยกเลิก</p>
                        </button>
                        <button class="btn-submit-red" name="submit" value="submit">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- โค้ดส่วนลด -->
    <div class="modal fade" id="code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 style="margin:0;color:#000;font-weight:800;">โค้ดส่วนลด</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>

                <div class="modal-body">
                    <div class="col-12" style="padding:0;">
                        <div class="row mb-3">
                            <div class="col-12 redioGreen">
                                <input type="radio" name="code" value="code1" id="code1" />
                                <label for="code1"  class="bgcode labellogo">
                                    <h4 for="code1" class="fontcodeposition" style="color: #455160;font-weight:800;">DAY100TH (-฿100)</h4>
                                </label>
                            </div>
                            <div class="col-12 redioGreen">
                                <input type="radio" name="code" value="code2" id="code2" />
                                <label for="code2"  class="bgcode labellogo">
                                    <h4 for="code2" class=" fontcodeposition" style="color: #455160;font-weight:800;">DAY200TH (-฿200)</h4>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-submit">
                        <p style="margin:0;">ยกเลิก</p>
                    </button>
                    <button type="button" class="btn-submit-red" data-dismiss="modal">
                        <p style="margin:0;">ยืนยัน</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="VisaCredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <label style="font-family:myfont1;font-size:1.2em;color:#000;">บัตรเครดิต / บัตรเดบิต</label>
                        </div>
                    </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>

                <div class="modal-body font-rate-modal">
                    <div class="col-lg-12" style="padding:0;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="custom03">
                                            <input type="radio" name="select1" value="03" id="03">
                                            <label for="03"></label>
                                        </label>
                                        <label class="font-VisaCredit ml-2">
                                        <img style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                        </label>
                                        <label class="font-VisaCredit2 ml-2">
                                            <label>ธนาคารไทยพาณิชย์ *1234 </label><label class="ml-3" style="color:#ce0005;font-weight: 700;">(บัตรหลัก)</label>
                                        </label>
                                        <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label class="custom03">
                                            <input type="radio" name="select1" value="04" id="04">
                                            <label for="04"></label>
                                        </label>
                                        <label class="font-VisaCredit ml-2">
                                        <img style="height:25px;" src="{{asset('home/logo/credit.svg')}}" >
                                        </label>
                                        <label class="font-VisaCredit2 ml-2">
                                            <label>ธนาคารไทยพาณิชย์ *1234 </label>
                                        </label>
                                        <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="bgAddress" style="color:#ce0005" data-dismiss="modal" data-toggle="modal" data-target="#VisaCredit2">+ เพิ่มบัตรเครดิต/บัตรเดบิต</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-submit-modal">ยกเลิก</button>
                    <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div> -->

<!-- เพิ่มบัตรเครดิต / บัตรเดบิต -->
    <div class="modal fade" id="VisaCredit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 style="font-weight:800;color:#000;">เพิ่มบัตรเครดิต / บัตรเดบิต</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal">
                        <i class="icon-close_modal" style="font-size:14px;"></i></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label> <img style="height: 30px;" src="{{asset('home/logo/visa3.png')}}"></label>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" class="input2 p pl-2" placeholder="หมายเลขบัตร" require></input>
                        </div>
                        <div class="col-12 mb-2">
                            <input type="text" class="input2 p pl-2" placeholder="ชื่อผู้ถือบัตร" require></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2" style="padding-right:5px;">
                            <input type="text" class="input2 p pl-2" placeholder="CCV" require></input>
                        </div>
                        <div class="col-6 mb-2" style="padding-left:5px;">
                            <input type="text" class="input2 p pl-2" placeholder="วันหมดอายุ" require></input>
                        </div>
                        <div class="col-9 mb-2 ">
                            <p style="margin:0;font-weight:800;">บันทึกบัตรไว้ใช้ในภายหลัง</p>
                            <p style="margin:0;">ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</p>
                        </div>
                        <div class="col-2 mb-2">
                            <div class="wrapper">
                                <div class="switch_box box_2">
                                    <input type="checkbox" class="switch_2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-submit">
                        <p style="margin:0;">ยกเลิก</p></button>
                    <button type="button" class="btn-submit-red">
                        <p style="margin:0;">ยืนยัน</p></button>
                </div>
            </div>
        </div>
    </div>

<!-- ชำระเงินการเติมเงินวอลเล็ต -->
    <div class="modal fade" id="VisaCredit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modalGrey">
                <div class="modal-body">
                    <div class="row px-4">
                        <div class="col-12" style="padding:0;">
                            <div class="row mb-2">
                                <div class="col-12 text-center">
                                    <h1 style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเล็ท</h1>
                                </div>
                                <button type="button" class="close btn-closeModal-body" data-dismiss="modal">
                                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                                </button>
                            </div>

                            <div class="row">
                                <div class="col-12 text-center">
                                    <label class="bgAmountT10pay mt-2">
                                        <img style="width:50px;margin-top:20px;" src="{{asset('icon/waiting.svg')}}"> <br>
                                        <label class="mt-2 p" style="font-weight:800;color:#000;">กำลังรอชำระเงิน <br> ผ่านโมบายแบงค์กิ้ง/การโอนเงิน</label>
                                        <p style="color:#000;margin:0;">
                                        กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็ม <br>
                                        ภายใน 48 ชม. มิเช่นนั้นคำร้องของคุณ <br>
                                        จะถูกยกเลิกอัตโนมัติ
                                        </p>
                                        <img style="width:150px;" src="{{asset('home/topup/qr.png')}}"> <br>
                                        <label class="mb-3 p" style="color:#ce0005;">
                                            ควรชำระเงินก่อน 10/05/2563 เวลา 10:09
                                        </label>
                                    </label> 
                                </div>
                                <div class="col-12">
                                    <label class="bgAmountT10pay mt-2">
                                        <div class="row">
                                            <div class="col-12" style="height:45px;">
                                                <div class="pl-2 pr-3">
                                                    <img style="width:25px;" src="{{asset('home/logo/scb.svg') }}" />
                                                    <label><p style="margin:0;">หมายเลขบัญชี</p></label>
                                                    <input type='text' id="copy-text" value="1234567890" class="input4 p mt-2" style="font-weight:800;">
                                                    <button class="btnNone2" style="float:right;" onClick="copyToClipboard()">
                                                        <p style="color:#ce0005;cursor:pointer;padding-top:8px;margin:0;">คัดลอก</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <label class="nameVisaCredit2 p">หมายเลขคำร้องขอ <label style="font-weight:700;">123456789000</label></label>
                                                </label>
                                            </div>
                                            <div class="col-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <label class="nameVisaCredit2 p">จำนวนเงินที่ต้องการเติม
                                                    </label>
                                                    <label class="fontGreen p">100 บาท</label>
                                                </label>
                                            </div>
                                        </div>
                                    </label>
                                </div>

                                <div class="col-12 mt-2">
                                    <label class="ml-2 p" style="font-weight:800;color:#383838;">ชำระเงินอย่างไร</label>
                                    <div class="accordions">
                                        <div class="accordion-item bgAmountT10pay">
                                            <div class="accordion-title" data-tab="item1">
                                                <div class="row px-3">
                                                    <div class="col-10" style="padding:0;"><p style="margin:0;">เอทีเอ็ม</p></div>
                                                    <div class="col-2">
                                                        <label style="cursor:pointer;"><i class="icon-dropdown"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-content" id="item1">
                                            <p> 1. เลือกจ่ายบิล / ชำระค่าบริการ <br>
                                                2. เลือกอื่นๆ > รหัสบริษัท > ระบุรหัสบริษัท > ออมทรัพย์<br>
                                                3. ใส่รหัสบริษัท 12345<br>
                                                4. ระบุหมายเลขอ้างอิงการชำระเงินสำหรับ “REF1”<br>
                                                5. ระบุหมายเลขโทรศัพท์มือถือ สำหรับ “REF2”<br>
                                                6. ระบุยอดเงิน<br>
                                                7. หมายเหตุ : ค่าธรรมเนียมขึ้นกับธนาคา หรือ ผู้ให้บริการ</p>
                                            </div>
                                        </div>

                                        <div class="accordion-item bgAmountT10pay">
                                            <div class="accordion-title" data-tab="item2">
                                            <div class="row px-3">
                                                    <div class="col-10" style="padding:0;"><p style="margin:0;">โมบายแบงค์กิ้ง</p></div>
                                                    <div class="col-2">
                                                        <label style="cursor:pointer;"><i class="icon-dropdown"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-content" id="item2">
                                            <p>
                                                1. ล็อกอินเข้าระบบ K Plus <br>
                                                2. เลือกเมนู “จ่ายบิล” <br>
                                                3. เลือก “รายการใหม่” <br>
                                                4. เลือก “บิลอื่น” <br>
                                                5. เลือก “บริษัท” เป็น “123 เซอร์วิส” <br>
                                                6. ใส่ เลขที่อ้างอิง ใน “รหัสลูกค้า” <br>
                                                7. ใส่หมายเลขโทรศัพท์มือถือใน “รหัสใบสั่งซื้อ” <br>
                                                8. ใส่จำนวนเงิน <br>
                                                9. กด “จ่ายบิล” <br>
                                                10. ตรวจสอบความถูกต้อง และกด “ยืนยัน”
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-submit-red mt-2">
                                    <p style="margin:0;">ถัดไป</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- เติมเงินวอลเล็ท -->
    <div class="modal fade" id="T10Topup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modalGrey">
                <div class="modal-body">
                    <div class="row px-4">
                        <div class="col-12" style="padding:0;">
                            <div class="row my-2">
                                <div class="col-12 text-center">
                                    <h1 style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเล็ท</h1>
                                </div>
                                <button type="button" class="close btn-closeModal-body" data-dismiss="modal">
                                    <i class="icon-close_modal" style="font-size: 14px;"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="ml-2 p" style="font-weight:800;color:#383838;margin:0;">จำนวนเงินที่ต้องการเติม</label>
                                    <label class="ml-2 p" style="margin:0;"> (ขั้นต่ำ  ฿100)</label>
                                    <label class="bgAmountT10pay" style="padding:15px;">
                                        <div class="input-group bgAmountT10payInner">
                                            <div class="input-group-prepend"><span class="input-group-text iconBahtAmountT10pay">฿</span></div>
                                            <input type="text" class="inputAmountT10pay" id="amount" name="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require>
                                        </div>
                                    </label>
                                    <label class="ml-2 mt-2 p" style="font-weight:800;color:#383838;margin:0;">ช่องทางการชำระเงิน</label>
                                    <label class="bgAmountT10pay">
                                        <div class="row">
                                            <div class="col-12 pt-2 pl-4 ">
                                                <label><p style="margin:0;color:#383838;">บัตรเครดิต/บัตรเดบิต</p></label>
                                                <label class="ml-2"> <img src="{{asset('home/logo/security.svg')}}" ></label>
                                            </div>
                                            <div class="col-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-1" />
                                                <label for="bankT10-1" class="bgVisaCredit ">
                                                    <img class="visaCredit" style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                                    <label for="bankT10-1" class="nameVisaCredit p">ธนาคารไทยพาณิชย์ *1234</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-2" />
                                                <label for="bankT10-2" class="bgVisaCredit">
                                                    <img class="visaCredit" style="height:20px;" src="{{asset('home/logo/credit.svg')}}" >
                                                    <label for="bankT10-2" class="nameVisaCredit p">ธนาคารไทยพาณิชย์ *1234</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <img class="iconPlus" style="height:20px;" src="{{asset('icon/plus.svg')}}" >
                                                    <label class="nameVisaCredit p" style="color:#ce0005;" data-toggle="modal" data-target="#addVisa" data-dismiss="modal">เพิ่มบัตรเครดิต / เดบิต</label>
                                                </label>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="ml-2 mt-2 p" style="font-weight:800;color:#383838;margin-bottom:0;">โมบายแบงค์กิ้ง/การโอนเงิน</label>
                                    <label class="ml-2 p" style="color:#383838;">
                                        กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็ม <br>
                                        ภายใน 48 ชม. มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกอัตโนมัติ
                                    </label>

                                    <!-- <label class="bgAmountT10pay">
                                        <div class="row">
                                            <div class="col-lg-12" style="height:45px;">
                                                <label class="bgVisaCredit ">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/bangkok.svg')}}" >
                                                    <label class="nameVisaCredit" data-toggle="modal" data-dismiss="modal" data-target="#T10banking">ธนาคารกรุงเทพ</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/ktc.svg')}}" >
                                                    <label class="nameVisaCredit" data-toggle="modal" data-dismiss="modal" data-target="#T10banking">ธนาคารกรุงไทย</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/kbank.svg')}}" >
                                                    <label class="nameVisaCredit" data-toggle="modal" data-dismiss="modal" data-target="#T10banking">ธนาคารกสิกรไทย</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12" style="height:45px;">
                                                <label class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/scb.svg')}}" >
                                                    <label class="nameVisaCredit" data-toggle="modal" data-dismiss="modal" data-target="#T10banking">ธนาคารไทยพาณิชย์</label>
                                                </label>
                                            </div>
                                        </div>
                                    </label>
                                    <button type="button" class="submitModalRed mt-2" data-toggle="modal" data-target="#OTP" data-dismiss="modal">ถัดไป</button> -->

                                    <label class="bgAmountT10pay">
                                        <div class="row">
                                            <div class="col-lg-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-3" />
                                                <label for="bankT10-3" class="bgVisaCredit2 ">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/bangkok.svg')}}" >
                                                    <label for="bankT10-3" class="nameVisaCredit p">ธนาคารกรุงเทพ</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-4" />
                                                <label for="bankT10-4" class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/ktc.svg')}}" >
                                                    <label for="bankT10-4" class="nameVisaCredit p">ธนาคารกรุงไทย</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-5" />
                                                <label for="bankT10-5" class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/kbank.svg')}}" >
                                                    <label for="bankT10-5" class="nameVisaCredit p">ธนาคารกสิกรไทย</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-12 redioGreen2" style="height:45px;">
                                                <input type="radio" name="bankT10" id="bankT10-6" />
                                                <label for="bankT10-6" class="bgVisaCredit">
                                                    <img class="bankT10" style="height:25px;" src="{{asset('home/logo/scb.svg')}}" >
                                                    <label for="bankT10-6" class="nameVisaCredit p">ธนาคารไทยพาณิชย์</label>
                                                </label>
                                            </div>
                                        </div>
                                    </label>
                                    <button type="button" class="btn-submit-red" data-dismiss="modal">
                                        <p style="margin:0;">ตกลง</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- เติมเงินวอลเล็ท2 -->
<div class="modal fade" id="addVisa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalGrey">
            <div class="modal-body">
                <div class="row px-4">
                    <div class="col-lg-12" style="padding:0;">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <p style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเลต</p>
                            </div>
                            <button type="button" class="close btn-closeModal-body" data-dismiss="modal">
                                <i class="icon-close_modal" style="font-size: 14px;"></i>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">จำนวนเงินที่ต้องการเติม</label>
                                <label class="bgAmountT10pay" style="padding:15px;">
                                    <div class="input-group bgAmountT10payInner">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text iconBahtAmountT10pay">฿</span>
                                        </div>
                                        <input type="text" class="inputAmountT10pay" id="amount" name="amount" readonly>
                                    </div>
                                </label>

                                <label class="ml-2 mt-2 p" style="font-weight:800;color:#383838;">เติมเงินด้วย บัตรเครดิต/เดรบิต</label>
                                <label class="bgAmountT10pay">
                                    <img style="height:40px;padding:15px 0 0 15px;" src="{{asset('home/logo/visa3.png')}}" >
                                    <div class="row" style="padding:5px 15px 0 15px;">
                                        <div class="col-12">
                                            <input type="text" class="input2 p pl-2" id="amount" name="amount" placeholder="หมายเลขบัตร" require>
                                        </div>
                                    </div>
                                    <div class="row" style="padding:15px 15px 0 15px;">
                                        <div class="col-12">
                                            <input type="text" class="input2 p pl-2" id="amount" name="amount" placeholder="ชื่อที่ผูกกับบัตร" require>
                                        </div>
                                    </div>
                                    <div class="row" style="padding:15px;">
                                        <div class="col-6" style="padding-right:5px;">
                                            <input type="text" class="input2 p pl-2" id="amount" name="amount" placeholder="เดือนปีหมดอายุ" require>
                                        </div>
                                        <div class="col-6" style="padding-left:5px;">
                                            <input type="text" class="input2 p pl-2" id="amount" name="amount" placeholder="CCV" require>
                                        </div>
                                    </div>
                                </label>
                                <button type="button" class="btn-submit-red mt-2" data-toggle="modal" data-target="#OTP" data-dismiss="modal">
                                    <p style="margin:0;">ถัดไป</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ยืนยันรหัส OTP -->
<div class="modal fade" id="OTP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalRed">
            <div class="modal-body">
                <div class="row px-4">
                    <div class="col-12" style="padding:0;">
                        <div class="row my-2">
                            <div class="col-12 text-center" >
                                <h1 style="margin:0;color:#fff;font-weight:800;">เติมเงินวอลเล็ท</h1>
                            </div>
                            <div class="btn-closeModal-body" style="padding:0;">
                                <label data-dismiss="modal" style="cursor:pointer;">
                                    <img style="width:15px;" src="{{asset('icon/close-wh.svg')}}">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <label class="ml-2 p" style="margin:0;color:#fff;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</label>
                            </div>
                            <div class="col-12 text-center" style="padding:0;">
                                <div class="bgWh">
                                    <input class="input-otp2" id="Box1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" require/>
                                    <input class="input-otp2" id="Box2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" require/>
                                    <input class="input-otp2" id="Box3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" require/>
                                    <input class="input-otp2" id="Box4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" require/>
                                    <input class="input-otp2" id="Box5" type="text" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)" require/>
                                    <input class="input-otp2" id="Box6" type="text" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)" require/>
                                </div>
                                <h5 class="mt-1" style="color:#fff;margin:0;">รหัสอ้างอิง OTP : GTBV</h5>
                            </div>

                            <div class="col-12 text-center mt-1">
                                <label class="ml-2 p" style="color:#fff;">รหัส OTP จะไปถึงภายใน 50 วินาที</label>
                                <label class="ml-2 p" style="color:#fff;text-decoration: underline;cursor:pointer;">ส่งรหัสอีกครั้ง</label>
                            </div>
                            
                            <div class="col-12 " style="padding:0;">
                                <button type="button" class="submitModalWh mt-3" data-toggle="modal" data-dismiss="modal" data-target="#topupSuccess">
                                    <p style="margin:0;color:#ce0005;">ตกลง</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เติมเงินสำเร็จ -->
    <div class="modal fade" id="topupSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modalGrey">
                <div class="modal-bodyl">
                    <div class="row px-4">
                        <div class="col-12" style="padding:0;">
                            <div class="row my-2">
                                <div class="col-12 text-center my-2">
                                    <h1 style="color:#000;font-weight:800;margin:0">เติมเงินวอลเล็ท</h1>
                                </div>
                                <div class="btn-closeModal-body" style="padding:0;">
                                    <label data-dismiss="modal" style="cursor:pointer;">
                                        <img style="width:15px;" src="{{asset('icon/close.svg')}}">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8 text-center">
                                    <div class="bgAmountT10pay">
                                        <img class="mt-4" style="width:30px;" src="{{asset('icon/select_green2.svg')}}">
                                        <p class="mt-2" style="font-weight:800;color:#23c197;margin:0;">เติมเงินสำเร็จ</p>
                                        <p class="pb-3" style="color:#000;margin:0">
                                            คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>
                                            คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ
                                        </p>
                                    </div>
                                </div>
                                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-4">
                                    <button type="button" class="btn-submit-red mt-3" data-dismiss="modal">
                                        <p style="margin:0;">ตกลง</p>
                                    </button>
                                </div>
                                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="T10banking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modalGrey">
                <div class="modal-body font-rate-modal">
                    <div class="row px-4">
                        <div class="col-lg-12" style="padding:0;">
                            <div class="row my-2">
                                <div class="col-1"></div>
                                <div class="col-10 text-center">
                                    <label style="font-family:myfont1;font-size:1.2em;color:#000;font-weight:900;">เติมเงินวอลเล็ท</label>
                                </div>
                                <div class="col-1">
                                    <label data-dismiss="modal" style="cursor:pointer;"><img style="width:15px;" src="{{asset('icon/close.svg')}}"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-lg-8 text-center bgAmountT10pay">
                                    <img class="mt-4" style="width:30px;" src="{{asset('icon/select_green2.svg')}}"> <br>
                                    <label class="mt-2 " style="font-family:myfont;font-size:1em;font-weight:900;color:#23c197;">เติมเงินสำเร็จ</label> <br>
                                    <label class="pb-3" style="font-family:myfont1;font-size:1em;color:#000;">
                                        คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>
                                        คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ
                                    </label>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-lg-8">
                                    <button type="button" class="submitModalRed mt-3" data-dismiss="modal">ตกลง</button>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <!-- <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.27 299.9">
                                <defs><style>.cls-1{fill:none;stroke:rgb(15, 175, 23);stroke-miterlimit:10;stroke-width:5px;}</style></defs>
                                <title>check</title>
                                
                                <path id="check" class="cls-1" d="M393.4,124.43,179.6,338.21a40.57,40.57,0,0,1-57.36,0L11.88,227.84a40.56,40.56,0,0,1,57.36-57.36l81.7,81.7L336,67.06a40.56,40.56,0,0,1,57.36,57.36Z" transform="translate(2.5 -52.69)"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <!-- <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.27 299.9">
                                <defs><style>.cls-1{fill:none;stroke:rgb(15, 175, 23);stroke-miterlimit:10;stroke-width:5px;}</style></defs>
                                <title>check</title>
                                
                                <path id="check" class="cls-1" d="M393.4,124.43,179.6,338.21a40.57,40.57,0,0,1-57.36,0L11.88,227.84a40.56,40.56,0,0,1,57.36-57.36l81.7,81.7L336,67.06a40.56,40.56,0,0,1,57.36,57.36Z" transform="translate(2.5 -52.69)"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('Delete') }}</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<!-- พื้นหลัง -->
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

<style>
    .tt-dataset{
        background-color:#fff !important;
        color:#000;
        border-bottom: 1px solid #000;
        height:100px;
        overflow:scroll;
        overflow-x: hidden;
    }
    .tt-suggestion.tt-selectable:hover{
        background-color:#ddd !important;
    }
    .tt-suggestion.tt-selectable{
        border-bottom: 1px solid #ddd;
        padding:10px 20px 10px 20px;
        cursor:pointer;
    }
</style>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
<script src="{{ asset('filter/dependencies/zip.js/zip.js') }}"></script>
<script src="{{ asset('filter/dependencies/JQL.min.js') }}"></script>
<script src="{{ asset('filter/dependencies/typeahead.bundle.js') }}"></script>
<script src="{{ asset('filter/dist/jquery.Thailand.min.js') }}"></script>
<script>
    $.Thailand({
        // database: 'filter/database/db.json',
        $district: $('#upDate [name="district"]'),
        $amphoe: $('#upDate [name="amphure"]'),
        $province: $('#upDate [name="province"]'),
        $zipcode: $('#upDate [name="zipcode"]'),
        onDataFill: function(data) {
            console.info('Data Filled', data);
        },
        
    });
    $('#upDate [name="district"]').change(function() {
        console.log('ตำบล', this.value);
    });
    $('#upDate [name="amphure"]').change(function() {
        console.log('อำเภอ', this.value);
    });
    $('#upDate [name="province"]').change(function() {
        console.log('จังหวัด', this.value);
    });
    $('#upDate [name="zipcode"]').change(function() {
        console.log('รหัสไปรษณีย์', this.value);
    });
</script>

<script>
    const myFunction = () => {
    document.getElementById("first").style.display ='block';
    document.getElementById("first1").style.display ='block';
    document.getElementById("T10").style.display ='block';
    document.getElementById("second").style.display ='none';
    document.getElementById("second1").style.display ='none';
    document.getElementById("VisaCredit").style.display ='none';
    document.getElementById("third").style.display ='none';
    document.getElementById("third1").style.display ='none';
    document.getElementById("four").style.display ='none';
    document.getElementById("four1").style.display ='none';
    document.getElementById("Transfer").style.display ='none';
    }
    const myFunction2 = () => {
    document.getElementById("first").style.display ='none';
    document.getElementById("first1").style.display ='none';
    document.getElementById("T10").style.display ='none';
    document.getElementById("second").style.display ='block';
    document.getElementById("second1").style.display ='block';
    document.getElementById("VisaCredit").style.display ='block';
    document.getElementById("third").style.display ='none';
    document.getElementById("third1").style.display ='none';
    document.getElementById("iBanking").style.display ='none';
    document.getElementById("four").style.display ='none';
    document.getElementById("four1").style.display ='none';
    document.getElementById("Transfer").style.display ='none';
    }
    const myFunction3 = () => {
    document.getElementById("first").style.display ='none';
    document.getElementById("first1").style.display ='none';
    document.getElementById("T10").style.display ='none';
    document.getElementById("second").style.display ='none';
    document.getElementById("second1").style.display ='none';
    document.getElementById("VisaCredit").style.display ='none';
    document.getElementById("third").style.display ='block';
    document.getElementById("third1").style.display ='block';
    document.getElementById("iBanking").style.display ='block';
    document.getElementById("four").style.display ='none';
    document.getElementById("four1").style.display ='none';
    document.getElementById("Transfer").style.display ='none';
    }
    const myFunction4 = () => {
    document.getElementById("first").style.display ='none';
    document.getElementById("first1").style.display ='none';
    document.getElementById("T10").style.display ='none';
    document.getElementById("second").style.display ='none';
    document.getElementById("second1").style.display ='none';
    document.getElementById("VisaCredit").style.display ='none';
    document.getElementById("third").style.display ='none';
    document.getElementById("third1").style.display ='none';
    document.getElementById("iBanking").style.display ='none';
    document.getElementById("four").style.display ='block';
    document.getElementById("four1").style.display ='block';
    document.getElementById("Transfer").style.display ='block';
    }
</script>

<script>
    $('.text-clear').on('click', function (e) {
    e.preventDefault();
    $(this).prev('.text-box').val('');
    });
</script>

<script>
      function getCodeBoxElement(index) {
        return document.getElementById('Box' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 6) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
</script>

<script>
function copyToClipboard() {

var inputElement=document.getElementById('copy-text');
inputElement.select();
document.execCommand('copy');
//   alert("Copied to clipboard");

}
</script>

<script>
$(document).ready(function(){
    $(".accordion-title").click(function(e){
        var accordionitem = $(this).attr("data-tab");
        $("#"+accordionitem).slideToggle().parent().siblings().find(".accordion-content").slideUp();

        $(this).toggleClass("active-title");
        $("#"+accordionitem).parent().siblings().find(".accordion-title").removeClass("active-title");

        $("i.icon-dropdown",this).toggleClass("chevron-top");
        $("#"+accordionitem).parent().siblings().find(".accordion-title i.icon-dropdown").removeClass("chevron-top");
    });
});
</script>

<script>
    $(document).ready(function() {
        $(".radio-ibank").change(function() {
            var closest = $(this).closest("div.row.radio-ibank");
            var creditTransfer = document.querySelector('input[name="ibank"]:checked').value
            var moneyTransfer = creditTransfer
            document.querySelector('input#data-checked').value = moneyTransfer
            document.querySelector('input#data-bank').value = moneyTransfer
            console.log(moneyTransfer);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".radio-address").change(function() {
            var closest = $(this).closest("div.row.radio-address");
            var address = $(this).parents('#address').find('input[name="address"]:checked').val();
            var addressSelect = address
            document.querySelector('input#change-add').value = addressSelect
            console.log(address);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#successModal').modal();
            // alert("{{Session::get('susee')}}");
        });
    </script>
@endif

<script>
setTimeout(function(){
    $('#successModal').modal('hide')
}, 1500);
</script>

@if( Session::has('Delete'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#deleteModal').modal();
            // alert("{{Session::get('susee')}}");
        });
    </script>
@endif
<script>
setTimeout(function(){
    $('#deleteModal').modal('hide')
}, 1500);
</script>
@endsection