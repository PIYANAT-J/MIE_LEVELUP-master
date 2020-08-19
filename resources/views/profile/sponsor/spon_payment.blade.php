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
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
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
                                <a href="{{ route('SponShoppingCart') }}"><label class="fontAd1 active">ตระกร้าสินค้า</label></a>
                                <label class="fontAd1"> > </label>
                                <label class="fontAd1" >ชำระเงิน</label>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row mb-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">ชำระเงิน</span>
                                    </div>
                                </div>
                                <div class="row row8">
                                    <div class="col-lg-12">
                                        <div class="row mx-2 mt-3" style="border-bottom:1px solid #f2f2f2;">  
                                            <div class="col-9" style="padding:0;">
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
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 py-2" style="background-color:#fafaff;">
                                    <div class="col-lg-12">
                                        <div class="row mx-2 mt-3">
                                            <label style="font-family:myfont1;font-size:1em;font-weight:800;">ที่อยู่ในการออกใบเสร็จ</label>
                                            <label class="ml-2" style="font-family:myfont1;font-size:1em;color:#ce0005;cursor:pointer;border-bottom:1px solid #ce0005;height:1.2em;" data-toggle="modal" data-target="#address">เปลี่ยน</label>
                                        </div>
                                        <div class="row mx-3">
                                            <div class="col-lg-6" >
                                                <label class="fontAdsPayment">
                                                    <label>ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</label>
                                                </label>
                                                <label class="fontAdsPayment2 ml-2">
                                                    <label>สมหญิง รักดี (5-1005-00148-76-6)<br>(+66) 081-441-9585</label>
                                                </label>
                                            </div>
                                            <div class="col-lg-6" >
                                                <label class="fontAdsPayment">
                                                    <label>ที่อยู่</label><br>
                                                </label>
                                                <label class="fontAdsPayment3 ml-2" style="margin:0;">
                                                    <label>52/2 ซ.เจริญนคร 78 ถนน เจริญนคร บุคคโลเขตธนบุรี จังหวัดกรุงเทพมหานคร 10600
                                                        <label style="color:#23c197;">(ที่อยู่หลัก)</label>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <div class="row mx-2">
                                            <label style="font-family:myfont1;font-size:1em;font-weight:800;">วิธีชำระเงิน</label>
                                        </div>
                                        <div class="row mx-0 " >
                                            <div>
                                                <label  class="bgPayment labellogo mx-1" onClick="myFunction()">
                                                    <img class="center logoT10" src="{{asset('home/logo/t10.svg') }}" >
                                                    <label class="fontAdsPayment fontLogoPosition" style="color:#0b0e17;">T10 วอลเล็ท</label>
                                                    <label class="fontAdsPayment4 fontdetailPosition">ฟรีค่าธรรมเนียม</label>
                                                    <div id="first">
                                                        <label class="BorderGreenSelectPayment">
                                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                                        </label>
                                                    </div>
                                                </label>

                                                <label  class="bgPayment labellogo mx-1" onClick="myFunction2()">
                                                    <img class="center logoT10" src="{{asset('home/logo/credit-icon.svg') }}" >
                                                    <label class="fontAdsPayment fontLogoPosition2" style="color:#0b0e17;">บัตรเครดิต/บัตรเดบิต</label>
                                                    <img class="fontdetailPosition2" src="{{asset('home/logo/security-grey.svg') }}" >
                                                    <div id="second">
                                                        <label class="BorderGreenSelectPayment">
                                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                                        </label>
                                                    </div>
                                                </label>

                                                <label  class="bgPayment labellogo mx-1" onClick="myFunction3()">
                                                    <img class="center logoT10" src="{{asset('home/logo/mobile-icon.svg') }}" >
                                                    <label class="fontAdsPayment fontLogoPosition" style="color:#0b0e17;">โมบายแบงค์กิ้ง</label>
                                                    <label class="fontAdsPayment4 pfontAds3">รอยืนยัน 45 นาที หลังชำระเงิน</label>
                                                    <div id="third">
                                                        <label class="BorderGreenSelectPayment">
                                                        <img class="selectGreenPosition" src="{{asset('icon/select_green2.svg') }}" >
                                                        </label>
                                                    </div>
                                                </label>

                                                <label  class="bgPayment labellogo mx-1" onClick="myFunction4()">
                                                    <img class="center logoT10" src="{{asset('home/logo/bank-icon.svg') }}" >
                                                    <label class="fontAdsPayment fontLogoPosition" style="color:#0b0e17;">โอนเงินธนาคาร</label>
                                                    <label class="fontAdsPayment4 pfontAds3">รอยืนยัน 45 นาที หลังชำระเงิน</label>
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
                                        <div class="col-lg-12 mb-3">
                                            <button class="addT10wallet">+ เพิ่มบัญชี T10 วอลเล็ท</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row" style="border-right:1px solid #455160;">
                                                <div class="col-lg-12">
                                                    <label class="ml-2" style="font-family:myfont1;font-size:1em;font-weight:800;">เหรียญ T10 ที่ใช้ได้</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group mb-3">
                                                        <input class="inputSponPayment3" type="text" value="200 บาท" aria-describedby="basic-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text select-code2" id="basic-addon2" data-toggle="modal" data-target="#T10Topup">เติมเงิน</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label style="font-family:myfont1;font-size:1em;font-weight:800;">คูปอง / ส่วนลดของฉัน</label>
                                            <div class="col-lg-12" style="padding:0;">
                                                <div class="input-group mb-3">
                                                    <input class="inputSponPayment2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text select-code2" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="ml-2" style="font-family:myfont1;font-size:1em;font-weight:800;">รายการรอชำระ</label><br>
                                            <div class="row pl-2 row200">
                                                <div class="col-lg-12 pl-2">
                                                    <label class="ml-2 bgT10ListBanking">
                                                        <label class="bgT10ListBankingPay" data-toggle="modal" data-target="#VisaCredit3">ชำระเงิน</label>
                                                        <label style="font-family:myfont1;font-size:1em;"> ฿100 ธนาคารกรุงเทพ</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#ce0005;"> ควรชำระก่อน 10/10/20</label> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="second1">
                                    <div class="row my-3 fade-in">
                                        <div class="col-lg-6">
                                            <div class="row" style="border-right:1px solid #455160;">
                                                <div class="col-lg-12 pl-4">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">บัญชี</label>
                                                </div>
                                            </div>
                                            <div class="row " style="border-right:1px solid #455160;">
                                                <div class="col-lg-12 redioGreen">
                                                    <input type="radio" name="VisaCredit" value="visa" id="visa" />
                                                    <label for="visa" class="VisaCredit">
                                                        <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                                        <label for="visa" class="pBankAvatar" style="font-family:myfont1;font-size:0.9em;color:#414141;">ธนาคารไทยพาณิชย์ *1234</label>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 redioGreen">
                                                    <input type="radio" name="VisaCredit" value="credit" id="credit" />
                                                    <label for="credit" class="VisaCredit">
                                                        <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/credit.svg')}}" >
                                                        <label for="credit" class="pBankAvatar" style="font-family:myfont1;font-size:0.9em;color:#414141;">ธนาคารไทยพาณิชย์ *1234</label>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 px-3 mt-2">
                                                    <label class="addBank px-2" data-toggle="modal" data-target="#VisaCredit2">เพิ่มบัตรเครดิต / เดบิต</label>
                                                </div>
                                            </div>
                                             
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">คูปอง / ส่วนลดของฉัน</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group mb-3">
                                                        <input class="inputSponPayment2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text select-code2" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="third1">
                                    <div class="row my-3 fade-in">
                                        <div class="col-lg-6">
                                            <div class="row pl-3" style="border-right:1px solid #455160;">
                                                <div class="col-lg-12">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">บัญชี</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="custom02 ">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank01" id="bank01">
                                                                <label for="bank01"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกรุงเทพ</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank02" id="bank02">
                                                                <label for="bank02"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกรุงไทย</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank03" id="bank03">
                                                                <label for="bank03"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกสิกรไทย</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank02" id="bank04">
                                                                <label for="bank04"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารไทยพาณิชย์</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">คูปอง / ส่วนลดของฉัน</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group mb-3">
                                                        <input class="inputSponPayment2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text select-code2" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">ชำระเงินอย่างไร</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;">
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
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="four1">
                                    <div class="row my-3 fade-in">
                                        <div class="col-lg-6">
                                            <div class="row pl-3" style="border-right:1px solid #455160;">
                                                <div class="col-lg-12">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">บัญชี</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="custom02">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank05" id="bank05">
                                                                <label for="bank05"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกรุงเทพ</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank06" id="bank06">
                                                                <label for="bank06"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกรุงไทย</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank07" id="bank07">
                                                                <label for="bank07"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารกสิกรไทย</span>
                                                            </div>
                                                            <div class="col-lg-12 mb-2">
                                                                <input type="radio" name="bank" value="bank08" id="bank08">
                                                                <label for="bank08"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                                                <span class="ml-2" style="font-family:myfont1;font-size:1em;">ธนาคารไทยพาณิชย์</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">คูปอง / ส่วนลดของฉัน</label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group mb-3">
                                                        <input class="inputSponPayment2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text select-code2" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label style="font-family:myfont1;font-size:1em;font-weight:800;">ชำระเงินอย่างไร</label> <br>
                                                    <label style="font-family:myfont1;font-size:0.9em;">
                                                    1. เลือกจ่ายบิล / ชำระค่าบริการ <br>
                                                    2. เลือกอื่นๆ > รหัสบริษัท > ระบุรหัสบริษัท > ออมทรัพย์<br>
                                                    3. ใส่รหัสบริษัท 12345<br>
                                                    4. ระบุหมายเลขอ้างอิงการชำระเงินสำหรับ “REF1”<br>
                                                    5. ระบุหมายเลขโทรศัพท์มือถือ สำหรับ “REF2”<br>
                                                    6. ระบุยอดเงิน<br>
                                                    7. หมายเหตุ : ค่าธรรมเนียมขึ้นกับธนาคา หรือ ผู้ให้บริการ<br>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="ml-2" style="font-family:myfont1;font-size:1em;font-weight:800;">รายการรอการแจ้งโอน</label><br>
                                            <div class="row pl-2 row200">
                                                <div class="col-lg-12 pl-2">
                                                    <label class="ml-2 bgT10ListBanking">
                                                        <a href="{{ route('SponsorTransfer') }}"><label class="bgT10ListBankingPay">ชำระเงิน</label></a>
                                                        <label class="bgOrange">รออนุมัติ</label>
                                                        <a href="{{ route('SponsorSuccessfulPayment') }}"><label class="bgGreen">อนุมัติแล้ว</label></a>
                                                        <label style="font-family:myfont1;font-size:1em;"> ฿279 ธนาคารกรุงเทพ</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#ce0005;"> ควรชำระก่อน 10/10/20</label> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                    <div class="col-lg-12">
                                        <div class="row mx2">
                                            <div class="col-lg-6"></div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-6 text-right fontAdsPayment5">ยอดรวมสินค้า</div>
                                                    <div class="col-6 text-right fontAdsPayment5">฿ 279.00</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 text-right fontAdsPayment5">ส่วนลด</div>
                                                    <div class="col-6 text-right fontAdsPayment5">-</div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6 text-right fontAdsPayment5 pt-2">รวมราคาทั้งสิ้น</div>
                                                    <div class="col-6 text-right font-price" style="font-size:2em;">฿ 279.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-lg-10"></div>
                                            <div class="col-lg-2 text-right" id="T10">
                                                <a href="{{ route('SponsorPaymentConfirm') }}"><label class="btn-submit-red2">ชำระเงิน</label></a>
                                            </div>
                                            <div class="col-lg-2 text-right" id="VisaCredit">
                                                <a href="{{ route('SponsorPaymentConfirm') }}"><label class="btn-submit-red2">ชำระเงิน</label></a>
                                            </div>
                                            <div class="col-lg-2 text-right" id="iBanking">
                                                <a href="{{ route('SponsorPaymentConfirm') }}"><label class="btn-submit-red2">ชำระเงิน</label></a>
                                            </div>
                                            <div class="col-lg-2 text-right" id="Transfer">
                                                <a href="{{ route('SponsorTransfer') }}"><label class="btn-submit-red2">ชำระเงิน</label></a>
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

<div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12">
                        <label style="font-family:myfont1;font-size:1.2em;color:#000;">ที่อยู่</label>
                    </div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="col-lg-12" style="padding:0;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <label class="custom03">
                                        <input type="radio" name="select1" value="01" id="01">
                                        <label for="01"></label>
                                    </label>
                                    <label class="font-address ml-2">
                                        <label>ชื่อ - นามสกุล<br>ที่อยู่</label>
                                    </label>
                                    <label class="font-address2 ml-2">
                                        <label>สมหญิง รักดี <label style="color:#ce0005;font-weight: 700;">(ที่อยู่หลัก)</label> 
                                        <br>52/2 ซ.เจริญนคร 78 ถนน เจริญนคร บุคคโลเขตธนบุรี จังหวัดกรุงเทพมหานคร 10600</label>
                                        <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="custom03">
                                        <input type="radio" name="select1" value="02" id="02">
                                        <label for="02"></label>
                                    </label>
                                    <label class="font-address ml-2">
                                        <label>ชื่อ - นามสกุล<br>ที่อยู่</label>
                                    </label>
                                    <label class="font-address2 ml-2">
                                        <label>สมหญิง รักดี  <br>26 ซอยลาดปลาเค้า แขวงอนุสาวรีย์ เขตบางเขน กทม. 10220</label>
                                    </label>
                                    <label class="pTrashAvatar"> <img style="width:20px;" src="{{asset('icon/trash.svg')}}" ></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="bgAddress"  data-dismiss="modal" data-toggle="modal" data-target="#address2">+ เพิ่มที่อยู่</button>
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
</div>

<div class="modal fade" id="address2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12">
                        <label style="font-family:myfont1;font-size:1.2em;color:#000;">เพิ่มที่อยู่</label>
                    </div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal" style="padding-bottom:0;">
                <div class="col-lg-12" >
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อบริษัท/ชื่อ-นามสกุล</label> <br>
                                <input name="name" class="input-login px-3" value="{{ Auth::user()->name }} {{ Auth::user()->surname }}" readonly></input>
                            </label>
                        </div>

                        <div class="col-lg-12">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">เลขผู้เสียภาษีอาการ</label> <br>
                                <input name="name" class="input-login px-3"></input>
                            </label>
                        </div>

                        <div class="col-lg-12">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ที่อยู่ผู้เสียภาษีอากร </label> <br>
                                <input name="name" class="input-login px-3"></input>
                            </label>
                        </div>

                        <div class="col-lg-6">
                            <div class="">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3" style="padding:0;">จังหวัด</label>
                                    <select class="selectProvince" required="true" type="text" name="text4">
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3">รหัสไปรษณีย์</label><br>
                                    <input class="text-box px-3" style="padding-top:12px;" required="true" type="text" name="zipcode">
                                    <!-- <select class="selectProvince" required="true" type="text" name="text4">
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                    </select> -->
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3" style="padding:0;">ตำบล</label>
                                    <select class="selectProvince" required="true" type="text" name="text4">
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3">อำเภอ</label><br>
                                    <select class="selectProvince" required="true" type="text" name="text4">
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                        <option value="">ดึงจาก DB</option>
                                    </select>
                            </label>
                        </div>
                        <div class="checkbox ml-3 mt-2">
                            <input type="checkbox" id="checkbox_01" name="accept_01">
                            <label for="checkbox_01" style="color:#000;font-weight:bold;padding-top:2px;padding-left:10px;" >ที่อยู่หลัก</label>
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
</div>

<div class="modal fade" id="code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12" style="font-family:myfont1;font-size:1.2em;color:#000;">โค้ดส่วนลด</div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="col-lg-12" style="padding:0;">
                    <div class="row mb-3">
                        <div class="col-lg-12 redioGreen">
                            <input type="radio" name="code" value="code1" id="code1" />
                            <label for="code1"  class="bgcode labellogo">
                                <label for="code1" class="fontcode fontcodeposition">DAY100TH (-฿100)</label>
                            </label>
                        </div>
                        <div class="col-lg-12 redioGreen">
                            <input type="radio" name="code" value="code2" id="code2" />
                            <label for="code2"  class="bgcode labellogo">
                                <label for="code2" class="fontcode fontcodeposition">DAY200TH (-฿200)</label>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal">ยกเลิก</button>
                <button type="button" class="btn-submit-modal-red" data-dismiss="modal">ยืนยัน</button>
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

<div class="modal fade" id="VisaCredit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12">
                        <label style="font-family:myfont1;font-size:1.2em;color:#000;">เพิ่มบัตรเครดิต / บัตรเดบิต</label>
                    </div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <label> <img style="height: 40px;" src="{{asset('home/logo/visa3.png')}}"></label>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="หมายเลขบัตร" require></input>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="ชื่อผู้ถือบัตร" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="CCV" require></input>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="วันหมดอายุ" require></input>
                    </div>
                    <div class="col-lg-8 mb-2 ">
                        <div class="pl-2" style="font-family:myfont1;font-size:0.8em;color:#000;line-height: 150%;"><span style="font-weight:bold;">บันทึกบัตรไว้ใช้ในภายหลัง</span></br>ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</div>
                    </div>
                    <div class="col-lg-4 mb-2 text-right">
                        <div class="wrapper">
                            <div class="switch_box box_2">
                                <input type="checkbox" class="switch_2">
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
</div>

<div class="modal fade" id="VisaCredit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-1"><button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <label class="bgAmountT10pay">
                                    <img style="width:50px;margin-top:20px;" src="{{asset('icon/waiting.svg')}}"> <br>
                                    <label class="mt-2 " style="font-family:myfont;font-size:1em;font-weight:900;color:#000;">กำลังรอชำระเงิน <br> ผ่านโมบายแบงค์กิ้ง/การโอนเงิน</label> <br>
                                    <label style="font-family:myfont1;font-size:1em;color:#000;">
                                    กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็ม <br>
                                    ภายใน 48 ชม. มิเช่นนั้นคำร้องของคุณ <br>
                                    จะถูกยกเลิกอัตโนมัติ
                                    </label><br>
                                    <img style="width:150px;" src="{{asset('home/topup/qr.png')}}"> <br>
                                    <label class="mb-3" style="font-family:myfont1;font-size:1em;color:#ce0005;">
                                    ควรชำระเงินก่อน 10/05/2563 เวลา 10:09
                                    </label>
                                </label> 
                            </div>
                            <div class="col-lg-12">
                                <label class="bgAmountT10pay mt-2">
                                    <div class="row">
                                        <div class="col-lg-12" style="height:45px;">
                                            <label class="bgVisaCredit2">
                                                <img class="bankT10" style="height:25px;" src="{{asset('home/logo/bangkok.svg')}}" >
                                                <label class="nameVisaCredit">หมายเลขอ้างอิง <label style="font-weight:700;">1234567890</label></label>
                                                <label class="fontCopy">คัดลอก</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12" style="height:45px;">
                                            <label class="bgVisaCredit">
                                                <label class="nameVisaCredit2">หมายเลขคำร้องขอ <label style="font-weight:700;">123456789000</label></label>
                                                <label class="fontCopy">คัดลอก</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12" style="height:45px;">
                                            <label class="bgVisaCredit">
                                                <label class="nameVisaCredit2">จำนวนเงินที่ต้องการเติม
                                                </label>
                                                <label class="fontGreen">100 บาท</label>
                                            </label>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">ชำระเงินอย่างไร</label>
                                <div class="accordions">
                                    <div class="accordion-item bgAmountT10pay">
                                        <div class="accordion-title" data-tab="item1">
                                            <div class="row px-3">
                                                <div class="col-lg-10" style="padding:0;">เอทีเอ็ม</div>
                                                <div class="col-lg-2">
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
                                                <div class="col-lg-10" style="padding:0;">โมบายแบงค์กิ้ง</div>
                                                <div class="col-lg-2">
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
                            </div>
                            <button type="button" class="submitModalRed mt-2">ถัดไป</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="T10Topup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-1"><button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">จำนวนเงินที่ต้องการเติม</label>
                                <label class="ml-2" style="font-family:myfont1;font-size:1em;font-weight:800;"> (ขั้นต่ำ  ฿100 )</label>
                                <label class="bgAmountT10pay">
                                    <div class="input-group bgAmountT10payInner">
                                        <div class="input-group-prepend"><span class="input-group-text iconBahtAmountT10pay">฿</span></div>
                                        <input type="text" class="inputAmountT10pay" id="amount" name="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" require>
                                    </div>
                                </label>
                                <label class="ml-2 mt-2" style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">ช่องทางการชำระเงิน</label>
                                <label class="bgAmountT10pay">
                                    <div class="row">
                                        <div class="col-lg-12 pt-2 pl-4 ">
                                            <label style="font-family:myfont1;font-size:1em;color:#383838;">บัตรเครดิต/บัตรเดบิต</label>
                                            <label class="ml-2"> <img src="{{asset('home/logo/security.svg')}}" ></label>
                                        </div>
                                        <div class="col-lg-12 redioGreen2" style="height:45px;">
                                            <input type="radio" name="bankT10" id="bankT10-1" />
                                            <label for="bankT10-1" class="bgVisaCredit ">
                                                <img class="visaCredit" style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                                <label for="bankT10-1" class="nameVisaCredit">ธนาคารไทยพาณิชย์ *1234</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 redioGreen2" style="height:45px;">
                                            <input type="radio" name="bankT10" id="bankT10-2" />
                                            <label for="bankT10-2" class="bgVisaCredit">
                                                <img class="visaCredit" style="height:20px;" src="{{asset('home/logo/credit.svg')}}" >
                                                <label for="bankT10-2" class="nameVisaCredit">ธนาคารไทยพาณิชย์ *1234</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12" style="height:45px;">
                                            <label class="bgVisaCredit">
                                                <img class="iconPlus" style="height:20px;" src="{{asset('icon/plus.svg')}}" >
                                                <label class="nameVisaCredit" style="color:#ce0005;" data-toggle="modal" data-target="#addVisa" data-dismiss="modal">เพิ่มบัตรเครดิต / เดบิต</label>
                                            </label>
                                        </div>
                                    </div>
                                </label>
                                <label class="ml-2 mt-2" style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;margin-bottom:0;">โมบายแบงค์กิ้ง/การโอนเงิน</label>
                                <label class="ml-2" style="font-family:myfont1;font-size:1em;color:#383838;">
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
                                                <label for="bankT10-3" class="nameVisaCredit">ธนาคารกรุงเทพ</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 redioGreen2" style="height:45px;">
                                            <input type="radio" name="bankT10" id="bankT10-4" />
                                            <label for="bankT10-4" class="bgVisaCredit">
                                                <img class="bankT10" style="height:25px;" src="{{asset('home/logo/ktc.svg')}}" >
                                                <label for="bankT10-4" class="nameVisaCredit">ธนาคารกรุงไทย</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 redioGreen2" style="height:45px;">
                                            <input type="radio" name="bankT10" id="bankT10-5" />
                                            <label for="bankT10-5" class="bgVisaCredit">
                                                <img class="bankT10" style="height:25px;" src="{{asset('home/logo/kbank.svg')}}" >
                                                <label for="bankT10-5" class="nameVisaCredit">ธนาคารกสิกรไทย</label>
                                            </label>
                                        </div>
                                        <div class="col-lg-12 redioGreen2" style="height:45px;">
                                            <input type="radio" name="bankT10" id="bankT10-6" />
                                            <label for="bankT10-6" class="bgVisaCredit">
                                                <img class="bankT10" style="height:25px;" src="{{asset('home/logo/scb.svg')}}" >
                                                <label for="bankT10-6" class="nameVisaCredit">ธนาคารไทยพาณิชย์</label>
                                            </label>
                                        </div>
                                    </div>
                                </label>
                                <button type="button" class="submitModalRed mt-2" data-dismiss="modal">ตกลง</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addVisa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalGrey">
            <div class="modal-body font-rate-modal">
                <div class="row px-4">
                    <div class="col-lg-12" style="padding:0;">
                        <div class="row my-2">
                            <div class="col-1"></div>
                            <div class="col-10 text-center">
                                <label style="font-family:myfont1;font-size:1.2em;color:#000;font-weight:900;">เติมเงินวอลเลต</label>
                            </div>
                            <div class="col-1"><button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">จำนวนเงินที่ต้องการเติม</label>
                                <label class="bgAmountT10pay">
                                    <div class="input-group bgAmountT10payInner">
                                        <div class="input-group-prepend"><span class="input-group-text iconBahtAmountT10pay">฿</span></div>
                                        <input type="text" class="inputAmountT10pay" id="amount" name="amount" readonly>
                                    </div>
                                </label>

                                <label class="ml-2 mt-2" style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">เติมเงินด้วย บัตรเครดิต/เดรบิต</label>
                                <label class="bgAmountT10pay">
                                    <img style="width:150px;padding:15px 0 0 15px;" src="{{asset('home/logo/visa3.png')}}" >
                                    <div class="row" style="padding:5px 15px 0 15px;">
                                        <div class="col-lg-12">
                                            <input type="text" class="inputT10Add" id="amount" name="amount" placeholder="หมายเลขบัตร" require>
                                        </div>
                                    </div>
                                    <div class="row" style="padding:15px 15px 0 15px;">
                                        <div class="col-lg-12">
                                            <input type="text" class="inputT10Add" id="amount" name="amount" placeholder="ชื่อที่ผูกกับบัตร" require>
                                        </div>
                                    </div>
                                    <div class="row" style="padding:15px;">
                                        <div class="col-lg-6">
                                            <input type="text" class="inputT10Add" id="amount" name="amount" placeholder="เดือนปีหมดอายุ" require>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="inputT10Add" id="amount" name="amount" placeholder="CCV" require>
                                        </div>
                                    </div>
                                </label>
                                <button type="button" class="submitModalRed mt-5" data-toggle="modal" data-target="#OTP" data-dismiss="modal">ถัดไป</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="OTP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalRed">
            <div class="modal-body font-rate-modal">
                <div class="row px-4">
                    <div class="col-lg-12" style="padding:0;">
                        <div class="row my-2">
                            <div class="col-1"></div>
                            <div class="col-10 text-center">
                                <label style="font-family:myfont1;font-size:1.2em;color:#fff;font-weight:900;">เติมเงินวอลเล็ท</label>
                            </div>
                            <div class="col-1">
                                <label data-dismiss="modal" style="cursor:pointer;"><img style="width:20px;" src="{{asset('icon/close-wh.svg')}}"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:500;color:#fff;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</label>
                            </div>
                            <div class="col-lg-12 text-center">
                                <label class="bgOTP pt-3 px-3">     
                                    <input id="codeBox1" type="number" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)">
                                    <input id="codeBox2" type="number" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)">
                                    <input id="codeBox3" type="number" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)">
                                    <input id="codeBox4" type="number" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)">
                                    <input id="codeBox5" type="number" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)">
                                    <input id="codeBox6" type="number" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)"> <br>
                                    <label style="color:#000;padding:15px 0 10px 0;">รหัสอ้างอิง OTP : GTBV</label>
                                </label>
                            </div>

                            <div class="col-lg-12 text-center">
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:500;color:#fff;">รหัส OTP จะไปถึงภายใน 50 วินาที</label>
                                <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#fff;text-decoration: underline;cursor:pointer;">ส่งรหัสอีกครั้ง</label>
                            </div>
                              
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 px-5"><button type="button" class="submitModalWh mt-3" data-toggle="modal" data-dismiss="modal" data-target="#topupSuccess">ตกลง</button></div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="topupSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        return document.getElementById('codeBox' + index);
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
@endsection