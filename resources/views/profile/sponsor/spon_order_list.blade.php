@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('SponOrderList') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#f5f5f5;"></div>
    <div class="row ">

        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="tab-content">
                    <div id="budget" class="tab-pane active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-2 pb-2"> 
                                <h1 class="fontHeader">รายการคำสั่งซื้อ</h1>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6  text-right"> 
                                <SELECT class="SelectWh p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                                <SELECT class="SelectWh p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                            </div>
                        </div>
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row  py-2" style="background-color:#f2f2f2;color:#000;font-weight:800;">
                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7 align-self-center"><p style="font-weight:800;margin:0;">หมายเลขคำสั่งซื้อ</p></div>
                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block"><p style="font-weight:800;margin:0;">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center"><p style="font-weight:800;margin:0;">สถานะ</p></div>
                                </div>
                                <div class="row row4" id="all">
                                    <div class="col-12">
                                        @foreach($transeection as $transeectionList)
                                            @if($transeectionList->transeection_status == "true")
                                                <!-- ขำระเงินแล้ว -->
                                                <div class="row d-flex align-items-center line2">
                                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                        <p style="color:#000;margin:0;">{{$transeectionList->transeection_invoice}}</p>
                                                    </div>
                                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                        @if($transeectionList->transeection_type == "qr")
                                                            <p style="color:#000;margin:0;">โมบายแบงค์กิ้ง</p>
                                                        @elseif($transeectionList->transeection_type == "Transfer")
                                                            <p style="color:#000;margin:0;">โอนเงินผ่านธนาคาร</p>
                                                        @elseif($transeectionList->transeection_type == "VisaCredit")
                                                            <p style="color:#000;margin:0;">บัตรเครดิต/บัตรเดบิต</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                        <!-- ไปแสดงใบเสร็จการชำระเงิน -->
                                                        <p style="margin:0;color:#000;" class="status-transfer3" data-toggle="modal" data-target="#{{$transeectionList->transeection_invoice}}">ชำระเงินแล้ว</p>
                                                    </div>
                                                </div>
                                            @else
                                                @if($transeectionList->transeection_invoice != null)
                                                    <!-- รอแจ้งขำระเงิน -->
                                                    <div class="row d-flex align-items-center line2">
                                                        <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                            <p style="color:#000;margin:0;">{{$transeectionList->transeection_invoice}}</p>
                                                        </div>
                                                        <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                            @if($transeectionList->transeection_type == "qr")
                                                                <p style="color:#000;margin:0;">โมบายแบงค์กิ้ง</p>
                                                            @elseif($transeectionList->transeection_type == "Transfer")
                                                                <p style="color:#000;margin:0;">โอนเงินผ่านธนาคาร</p>
                                                            @elseif($transeectionList->transeection_type == "VisaCredit")
                                                                <p style="color:#000;margin:0;">บัตรเครดิต/บัตรเดบิต</p>
                                                            @endif
                                                        </div>
                                                        <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                            @if(in_array($transeectionList->transeection_invoice, $transfer_invoice))
                                                                <!-- รอการอนุมัติ -->
                                                                <p style="margin:0;" class="status-transfer2">รอการอนุมัติ</p>
                                                            @else
                                                                <!-- ไปหน้าแจ้งชำระเงิน -->
                                                                @foreach($transfer_on as $transfer)
                                                                    @if($transfer->transferInvoice == $transeectionList->transeection_invoice)
                                                                        <!-- ไปหน้าแจ้งชำระเงิน -->
                                                                        <p style="margin:0;" class="status-transfer" data-toggle="modal" data-transfer="{{$transfer->id}}" data-transee="{{$transeectionList->transeection_id}}" data-target="#{{$transeectionList->transeection_invoice}}">แจ้งชำระเงิน</p>
                                                                        <!-- <p style="margin:0;" class="status-transfer" data-toggle="modal" data-target="#exampleModal">แจ้งชำระเงิน</p> -->
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
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

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('susee') }}</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
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

@foreach($transeection as $transeectionModal)
    @if($transeectionModal->transeection_status == "true")
        <!-- Modal ใบเสร็จการชำระเงิน-->
        <div class="modal fade" id="{{$transeectionModal->transeection_invoice}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-1 text-center">
                                <img style="width:34px;" src="{{asset('icon/select_green2.svg')}}" alt="">
                                <h1 class="mt-3" style="color:#000;margin:0;font-weight:800;">ชำระเงินเรียบร้อยแล้ว</h1>
                                <label class="" style="font-family:myfont1;font-size:1em;color:#a8a8a8;line-height:0;">หมายเลขคำสั่งซื้อ {{$transeectionModal->transeection_invoice}}</label>
                            </div>
                        </div>
                        <div class="row mx-2 mt-5">
                            @if($transeectionModal->transeection_gameSpon != null)
                                <?php 
                                    $gameID = json_decode($transeectionModal->transeection_gameSpon); 
                                    $gamearray = array();
                                ?>
                                @foreach($gameID as $game)
                                    <?php 
                                        $gamearray[] = $game->gameid; 
                                        // dd($gameTrue);
                                    ?>
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
                            @else
                                @foreach($package as $packageModal)
                                    @if($packageModal->packageBuy_invoice == $transeectionModal->transeection_invoice)
                                        <div class="col-8" style="padding:0;">
                                            <label class="plabelimg2 pt-1">
                                                <img src="{{asset('icon/money2.svg') }}" />
                                            </label> 

                                            <label style="padding-left:60px;">
                                                <p style="font-weight: 700;margin:0;">{{$packageModal->packageBuy_name}}</p>
                                                <label class="p" style="color: #23c197;margin:0;">{{$packageModal->packageBuy_season}} เดือน</label>
                                                <label class="p" style="color: #23c197;margin:0;">จำนวน {{$packageModal->package_game}} เกม </label>
                                            </label>
                                        </div>
                                        <div class="col-4 text-right">
                                            <h4 style="font-weight:800;margin:0;">฿{{number_format($packageModal->packageBuy_amount, 2)}}</h4>
                                            <!-- <p style="margin:0;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p> -->
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
                                                <label class="fontAdsPaymentSpon" style="margin:0;">
                                                    <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}}  {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}</p>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="row mt-3 pr-3" style="padding: 0 0 0 7px;">
                                    <div class="col-6"><p style="color:#000;margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                    @if($transeectionModal->transeection_gameSpon != null)
                                        <div class="col-6 text-right"><h4 style="margin:0;font-weight:800;">฿{{number_format($transeectionModal->transeection_amount, 2)}}</h4></div>
                                    @else
                                        @foreach($package as $packageModal_amount)
                                            @if($packageModal_amount->packageBuy_invoice == $transeectionModal->transeection_invoice)
                                                <div class="col-6 text-right"><h4 style="margin:0;font-weight:800;">฿{{number_format($packageModal_amount->packageBuy_amount, 2)}}</h4></div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <div class="row mt-3 pr-3" style="padding: 0 0 0 7px;">
                                    <div class="col-3"><p style="color:#000;margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-9 text-right" style="padding-left:0;">
                                        @if($transeectionModal->transeection_type == "qr")
                                            <p style="color:#000;margin:0;font-weight:800;">โมบายแบงค์กิ้ง {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                        @elseif($transeectionModal->transeection_type == "Transfer")
                                            <p style="color:#000;margin:0;font-weight:800;">โอนเงินผ่านธนาคาร {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                        @elseif($transeectionModal->transeection_type == "VisaCredit")
                                            <p style="color:#000;margin:0;font-weight:800;">บัตรเครดิต/บัตรเดบิต {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3 py-2" style="background-color:#fafaff ;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                    <div class="col-12">
                                        <div class="row mx-1 mt-3">
                                            <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                                            <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                                                <button type="button" class="btn-submit" data-dismiss="modal">
                                                    <p style="margin:0;">ปิด</p>
                                                </button>
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
    @else
        @if($transeectionModal->transeection_invoice != null)
            <!-- Modal แจ้งชำระเงิน-->
            <div class="modal fade" id="{{$transeectionModal->transeection_invoice}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 mt-1 text-center">
                                    <h1 class="mt-3" style="color:#000;margin:0;font-weight:800;">แจ้งชำระเงิน</h1>
                                    <label class="" style="font-family:myfont1;font-size:1em;color:#a8a8a8;line-height:0;">หมายเลขคำสั่งซื้อ {{$transeectionModal->transeection_invoice}}</label>
                                </div>
                            </div>
                            <div class="row mx-2 mt-5">
                                @if($transeectionModal->transeection_gameSpon != null)
                                    <?php 
                                        $start = explode(', ', $transeectionModal->transeection_gameSpon);
                                        $gameID = array();
                                        for($i=0;$i<count($start);$i++){
                                            $gameID[] = $start[$i];
                                        }
                                    ?>
                                    @foreach($countCart as $key=>$gameList)
                                        @if(in_array($gameList->sponsor_cart_game, $gameID))
                                            <div class="col-8 d-flex justify-content-start" style="padding:0;">
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
                                            <div class="col-4 text-right">
                                                <h4 style="font-weight:800;margin:0;">฿{{number_format($gameList->sponsor_cart_price, 2)}}</h4>
                                                @if($gameList->GAME_DISCOUNT != null && $gameList->GAME_DISCOUNT != "0")
                                                    <p style="margin:0;"><a style="color: #b2b2b2;text-decoration:line-through;">฿{{number_format($gameList->sponsor_cart_price, 2)}} </a>(-{{$gameList->GAME_DISCOUNT}}%)</p>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    @foreach($package as $packageModal)
                                        @if($packageModal->packageBuy_invoice == $transeectionModal->transeection_invoice)
                                            <div class="col-8" style="padding:0;">
                                                <label class="plabelimg2 pt-1">
                                                    <img src="{{asset('icon/money2.svg') }}" />
                                                </label> 

                                                <label style="padding-left:60px;">
                                                    <p style="font-weight: 700;margin:0;">{{$packageModal->packageBuy_name}}</p>
                                                    <label class="p" style="color: #23c197;margin:0;">{{$packageModal->packageBuy_season}} เดือน</label>
                                                    <label class="p" style="color: #23c197;margin:0;">จำนวน {{$packageModal->package_game}} เกม </label>
                                                </label>
                                            </div>
                                            <div class="col-4 text-right">
                                                <h4 style="font-weight:800;margin:0;">฿{{number_format($packageModal->packageBuy_amount, 2)}}</h4>
                                                <!-- <p style="margin:0;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p> -->
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="row mt-3 py-2" style="background-color:#fafaff;">
                                <div class="col-12">
                                    <div class="row mt-3 pr-3" style="padding: 0 0 0 7px;">
                                        <div class="col-6"><p style="color:#000;margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                        @if($transeectionModal->transeection_gameSpon != null)
                                            <div class="col-6 text-right"><h4 style="margin:0;font-weight:800;">฿{{number_format($transeectionModal->transeection_amount, 2)}}</h4></div>
                                        @else
                                            @foreach($package as $packageModal_amount)
                                                @if($packageModal_amount->packageBuy_invoice == $transeectionModal->transeection_invoice)
                                                    <div class="col-6 text-right"><h4 style="margin:0;font-weight:800;">฿{{number_format($packageModal_amount->packageBuy_amount, 2)}}</h4></div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2 pl-2 pr-4" style="border-bottom:1px solid #edeef3">
                                <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p>
                                    <p style="color:#000;">
                                        ATM / โอนเข้าธนาคาร <br>
                                        กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                    </p>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-right">
                                    @foreach($transfer_on as $transfer)
                                        @if($transfer->transferInvoice == $transeectionModal->transeection_invoice)
                                            <label><img src="{{asset('home/logo/'.$transfer->transferฺBank_name.'.svg')}}" ></label>
                                            @if($transfer->transferฺBank_name == "bangkok")
                                                <label class="p">ธนาคารกรุงเทพ</label> <br>
                                                <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                                <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                                <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                            @elseif($transfer->transferฺBank_name == "ktc")
                                                <label class="p">ธนาคารกรุงไทย</label> <br>
                                                <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                                <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                                <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                            @elseif($transfer->transferฺBank_name == "kbank")
                                                <label class="p">ธนาคารกสิกรไทย</label> <br>
                                                <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                                <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                                <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                            @elseif($transfer->transferฺBank_name == "scb")
                                                <label class="p">ธนาคารไทยพาณิชย์</label> <br>
                                                <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                                <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                                <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                <div class="col-12">
                                    <div class="row mt-2">
                                        <div class="col-12 text-right">
                                            <label class="btn-submit-red3 p"><p style="margin:0;">แจ้งการชำระเงิน</p></label>
                                            <label class="btn-submit-wh" data-dismiss="modal"><p style="margin:0;">อัพโหลดภายหลัง</p></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Transfer d-none">
                                <form action="{{ route('sponTransferPayment') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row fade-in mt-3">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">วันที่โอน</p>
                                                <input type="date" name="date" class="input1 p ml-2" ></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">เวลาที่โอน</p>
                                                <input type="time" name="time" class="input1 p ml-2" ></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ธนาคารทีโอน</p>
                                                <select class="MySelect p pl-2" type="text" name="text4">
                                                    <option value="">ธนาคารกรุงเทพ</option>
                                                    <option value="">ธนาคารกสิกรไทย</option>
                                                    <option value="">ธนาคารกรุงไทย</option>
                                                    <option value="">ธนาคารทหารไทย</option>
                                                    <option value="">ธนาคารไทยพาณิชย์</option>
                                                    <option value="">ธนาคารกรุงศรีอยุธยา</option>
                                                    <option value="">ธนาคารเกียรตินาคิน</option>
                                                    <option value="">ธนาคารเกียรตินาคิน</option>
                                                    <option value="">ธนาคารทิสโก้</option>
                                                    <option value="">ธนาคารธนชาต</option>
                                                    <option value="">ธนาคารยูโอบี</option>
                                                    <option value="">ธนาคารออมสิน</option>
                                                    <option value="">ธนาคารอาคารสงเคราะห์</option>
                                                    <option value="">ธนาคารอิสลามแห่งประเทศไทย</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="mb-2">
                                                <label id="upload" style="cursor:pointer;">
                                                    <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                                    <label><p style="font-weight:800;margin:0;">อัพโหลดรูปภาพ</p></label>
                                                </label>
                                                <div id="thumb" class="thumb-topup"><img src="{{asset('home/topup/pic-topup.png') }}"/></div>    
                                                <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <button class="btn-submit" name="submit" value="submit"><p style="margin:0;">ยืนยัน</p></button>
                                            <input type="hidden" name="id">
                                            <input type="hidden" name="transeection_id">
                                            <input type="hidden" name="modal" value="modal">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endforeach

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
<!-- วัน เดือน ปีเกิด -->
<script>
    var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
    $(document).ready(function(){
        var option = '<option  class="font-select" value="day">วัน</option>';
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select" value="'+ i +'">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        
        var option = '<option class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            // option += '<option value="'+ i + '">' + i + '</option>';
            if(i == 1){
                option += '<option class="font-select"  value="'+ i + '">' + "มกราคม" + '</option>';
            }else if(i == 2){
                option += '<option class="font-select"  value="'+ i + '">' + "กุมภาพันธ์" + '</option>';
            }else if(i == 3){
                option += '<option class="font-select"  value="'+ i + '">' + "มีนาคม" + '</option>';
            }else if(i == 4){
                option += '<option class="font-select"  value="'+ i + '">' + "เมษายน" + '</option>';
            }else if(i == 5){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤษภาคม" + '</option>';
            }else if(i == 6){
                option += '<option class="font-select"  value="'+ i + '">' + "มิถุนายน" + '</option>';
            }else if(i == 7){
                option += '<option class="font-select"  value="'+ i + '">' + "กรกฎาคม" + '</option>';
            }else if(i == 8){
                option += '<option class="font-select"  value="'+ i + '">' + "สิงหาคม" + '</option>';
            }else if(i == 9){
                option += '<option class="font-select"  value="'+ i + '">' + "กันยายน" + '</option>';
            }else if(i == 10){
                option += '<option class="font-select"  value="'+ i + '">' + "ตุลาคม" + '</option>';
            }else if(i == 11){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤศจิกายน" + '</option>';
            }else{
                option += '<option class="font-select"  value="'+ i + '">' + "ธันวาคม" + '</option>';
            }
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var option = '<option  class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        var option = '<option  class="font-select" value="year">ปี</option>';
        selectedYear ="year";
        for (var i=1930;i <= d.getFullYear();i++){// years start i
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });
    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }
    function change_year(select)
    {
        if( isLeapYear( $(select).val() ) )
        {
                Days[1] = 29;
                
        }
        else {
            Days[1] = 28;
        }
        if( $("#month").val() == 2)
                {
                    var day = $('#day');
                    var val = $(day).val();
                    $(day).empty();
                    var option = '<option  class="font-select" value="day">วัน</option>';
                    for (var i=1;i <= Days[1];i++){ //add option days
                            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
                }
                    $(day).append(option);
                    if( val > Days[ month ] )
                    {
                            val = 1;
                    }
                    $(day).val(val);
                }
    }
    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option  class="font-select" value="day">วัน</option>';
        var month = parseInt( $(select).val() ) - 1;
        for (var i=1;i <= Days[ month ];i++){ //add option days
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $(day).append(option);
        if( val > Days[ month ] )
        {
            val = 1;
        }
        $(day).val(val);
    }
</script>

<script>
    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<!-- <script>
    const myFunction = () => {
        document.getElementById("Transfer").style.display ='block';
    }
</script> -->

<script>
    $(".btn-submit-red3").on("click",function(e){
        $('.Transfer').removeClass('d-none');
    });
</script>

<script> /* อัพโหลดรูปภาพ */
    $(function () {
        $("#upload").on("click",function(e){
            $("#file_upload").show().click().hide();
            e.preventDefault();
        });
        $("#file_upload").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumb").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumb");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script>
    $(".status-transfer").on("click",function(e){
        var transfer = $(this).data('transfer');
        var transee = $(this).data('transee');
        $('input[name="id"]').val(transfer);
        $('input[name="transeection_id"]').val(transee);
        $('.Transfer').addClass('d-none');
    });
</script>

@if( Session::has('susee'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
            setTimeout(function(){
                $('#popupmodal').modal('hide')
            }, 1500);
        });
    </script>
@endif
@endsection