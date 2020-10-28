@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-sm-8 col-md-9 col-lg-9 col-xl-10 pt-2">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shopping_cart" class="avatar-link active">
                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/payment" class="avatar-link">
                            <h1 style="margin:0;">ชำระเงิน</h1>
                        </a>
                    </label>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-12"> 
                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12 mt-1">
                            <div class="row py-3" style="border-bottom:1px solid #fff;">
                                <h1 class="ml-3" style="margin:0;font-weight:800;color:#fff;">ชำระเงิน</h1>
                            </div>
                            
                            <div class="row row8">
                                <div class="col-12">
                                    <?php 
                                        $transee = json_decode($transeection->transeection_items);
                                        $itemlist = array();
                                        $itemamount = array();
                                        $itemprice = array();
                                        $i = 0;
                                        foreach($transee as $transeeList){
                                            $itemlist[] = $transeeList->item_id;
                                            $itemamount[] = $transeeList->item_amount;
                                            $itemprice[] = $transeeList->item_price;
                                        }
                                        // dd($itemamount[0]);
                                    ?>
                                    @foreach($shopping as $shoppingList)
                                        @if(in_array($shoppingList->item_id, $itemlist))
                                            <div class="row mt-3 pb-2" style="border-bottom:1px solid rgb(255, 255, 255,0.3);"> 
                                                <div class="col-7 col-sm-8 col-md-8 col-lg-8 col-xl-8 pl-2" style="padding:0;">
                                                    <label class="labelItem2 bgItem">
                                                        <!-- <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" /> -->
                                                        @if($shoppingList->item_type == "clothes")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "eyes")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "glasses")
                                                            <img class="picture2" src="{{asset('home/avatar/glasses/'.$shoppingList->item_img) }}">
                                                        @elseif($shoppingList->item_type == "hair")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "other")
                                                            <img class="picture2" src="{{asset('home/avatar/other/'.$shoppingList->item_img) }}">
                                                        @elseif($shoppingList->item_type == "weapon")
                                                            <img class="picture2" src="{{asset('home/avatar/weapon/'.$shoppingList->item_img) }}">
                                                        @endif
                                                    </label> 
                                                    <label class="font-sale4 mt-2 ml-2">
                                                        <p style="font-weight: 700;margin:0;">{{$shoppingList->item_name}} ระดับ {{$shoppingList->item_level}} </p>
                                                        <p style="margin:0;">{{$shoppingList->item_description}}</p>
                                                        <p style="margin:0;">เลือกลงทุนได้ 3 Signal</p>
                                                    </label>
                                                </div>

                                                <div class="col-1 text-center align-self-center" style="padding:0;">
                                                    <p style="color:#ffffff">{{$itemamount[$i]}} ชิ้น</p>
                                                </div>

                                                <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 align-self-center">
                                                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                        <h4 style="margin:0;font-weight:800;">฿{{number_format($itemprice[$i])}}</h4>
                                                        <p class="mr-2" style="margin:0;color:#ce0005;"><a style="color: #b2b2b2;text-decoration:line-through;">฿3,400 </a> (-{{$shoppingList->item_discount}}%)<p>
                                                    </span>
                                                </div>
                                            </div>
                                            {{$i++}}
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="row mt-3 py-2" style="background-color:#191b29;">
                                <div class="col-12">
                                    <div class="row ml-2">
                                        <p style="font-weight:800;margin:0;color:#fff;">ที่อยู่ในการออกใบเสร็จ</p>
                                        <p class="ml-2" style="color:#ce0005;cursor:pointer;border-bottom:1px solid #ce0005;height:1.2em;" data-toggle="modal" data-target="#address">เปลี่ยน</p>
                                    </div>
                                    @if(isset($address))
                                        @foreach($address as $addressOn)
                                            @if($addressOn->addresses_status == "true")
                                                <div class="row ml-2">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                        <label class="font-payment-avatar">
                                                            <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                                                        </label>
                                                        <label class="font-payment-avatar2 ml-2">
                                                            <p style="margin:0;">{{Auth::user()->name}} {{Auth::user()->surname}} (5-1005-00148-76-6)
                                                                @foreach($guest_user as $user)
                                                                    <br>(+66) {{$user->GUEST_USERS_TEL}}
                                                                @endforeach
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                        <label class="font-payment-avatar">
                                                            <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                                                        </label>
                                                        <label class="font-payment-avatar3 ml-2">
                                                            <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}} {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}
                                                                <br><a style="color:#0ce63e;">(ที่อยู่หลัก)</a>
                                                            </p>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <p style="margin:0;color:#fff;" class="ml-2">กรุณาเพิ่มที่อยู่</p>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="row">
                                        <p style="margin:0;font-weight:800;">วิธีชำระเงิน</p>
                                    </div>
                                    <div class="row " >
                                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <label  class="bgPaymentAvatar labellogo" onClick="myFunction()">
                                                <img class="logoT10" src="{{asset('home/logo/t10.svg') }}" >
                                                <label class="fontLogoPosition" style="color:#0b0e17;"><p style="margin:0;font-weight:800;">T10 วอลเล็ท</p></label>
                                                <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">ฟรีค่าธรรมเนียม</h5></label>
                                                <div id="first">
                                                    <label class="bordergreen">
                                                    <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <label  class="bgPaymentAvatar labellogo" onClick="myFunction2()">
                                                <img class="center logoT10" src="{{asset('home/logo/credit-icon.svg') }}" >
                                                <label class="fontLogoPosition"><p style="margin:0;font-weight:800;">บัตรเครดิต/บัตรเดบิต</p></label>
                                                <img class="fontdetailPosition" style="height:20px;" src="{{asset('home/logo/security-grey.svg') }}" >
                                                <div id="second">
                                                    <label class="bordergreen">
                                                    <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <label  class="bgPaymentAvatar labellogo" onClick="myFunction3()">
                                                <img class="center logoT10" src="{{asset('home/logo/mobile-icon.svg') }}" >
                                                <label class="fontLogoPosition"><p style="margin:0;font-weight:800;">โมบายแบงค์กิ้ง</p></label>
                                                <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">รอยืนยัน 45 นาที </h5></label>
                                                <div id="third">
                                                    <label class="bordergreen">
                                                    <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <label  class="bgPaymentAvatar labellogo" onClick="myFunction4()">
                                                <img class="center logoT10" src="{{asset('home/logo/bank-icon.svg') }}" >
                                                <label class="fontLogoPosition"><p style="margin:0;font-weight:800;">โอนเงินธนาคาร</p></label>
                                                <label class="fontdetailPosition"><h5 style="color:#a0a0a0;">รอยืนยัน 45 นาที หลังชำระเงิน</h5></label>
                                                <div id="four">
                                                    <label class="bordergreen">
                                                    <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="first1">
                                <div class="row my-3 px-1 fade-in">
                                    <div class="col-12 mb-3">
                                        <button class="addT10wallet"><p style="margin:0;font-weight: 800;">+ เพิ่มบัญชี T10 วอลเล็ท</p></button>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <p class="ml-2 " style="font-weight:800;margin:0;color:#fff;">เหรียญ T10 ที่ใช้ได้</p>
                                        <div class="input-group mb-3 mt-1">
                                            <input class="inputT10Avatar p pl-3" value="200 บาท" type="text"  aria-describedby="basic-addon2" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text select-code p" id="basic-addon2" data-toggle="modal" data-target="#T10Topup">เติมเงิน</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <p class="ml-2" style="font-weight:800;margin:0;color:#fff;">คูปอง / ส่วนลดของฉัน</p>
                                        <div class="input-group mb-3 mt-1">
                                            <input class="inputT10Avatar p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text select-code p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <p class="ml-2" style="font-weight:800;margin:0;color:#fff;">รายการรอชำระ</p>
                                        <div class="row pl-2 row200">
                                            <div class="col-12 pl-2">
                                                <label class="ml-2 bgT10ListBanking2">
                                                    <label class="bgT10ListBankingPay" data-toggle="modal" data-target="#VisaCredit3"><p style="margin:0;">ชำระเงิน</p></label>
                                                    <label><p style="color:#ffffff;margin:0;">฿100 ธนาคารกรุงเทพ</p></label>
                                                    <label><p style="color:#ce0005;margin:0;"> ควรชำระก่อน 10/10/20</p></label> 
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div id="second1">
                                <div class="row my-3 px-1 fade-in">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="row" style="border-right:1px solid #455160;">
                                            <div class="col-12">
                                                <p class="ml-2" style="font-weight:800;margin:0;color:#fff;">บัญชี</p>
                                            </div>
                                        </div>
                                        <div class="row " style="border-right:1px solid #455160;">
                                            <!-- <div class="col-12 redioGreenAvatar mt-1">
                                                <input type="radio" name="VisaCredit" value="visa" id="visa" />
                                                <label for="visa" class="VisaCredit">
                                                    <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/visa1.svg')}}" >
                                                    <label for="visa" class="pBankAvatar"><p style="color:#414141;margin:0;">ธนาคารไทยพาณิชย์ *1234</p></label>
                                                </label>
                                            </div>
                                            <div class="col-12 redioGreenAvatar">
                                                <input type="radio" name="VisaCredit" value="credit" id="credit" />
                                                <label for="credit" class="VisaCredit">
                                                    <img class="pVisaCredit" style="height:25px;" src="{{asset('home/logo/credit.svg')}}" >
                                                    <label for="credit" class="pBankAvatar"><p style="color:#414141;margin:0;">ธนาคารไทยพาณิชย์ *1234</p></label>
                                                </label>
                                            </div> -->
                                            <div class="col-12 px-3 mt-2">
                                                <label class="addBank px-2" data-toggle="modal" data-target="#VisaCredit2"><p style="margin:0;">เพิ่มบัตรเครดิต / เดบิต</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <p class="ml-2" style="font-weight:800;margin:0;color:#fff;">คูปอง / ส่วนลดของฉัน</p>
                                        <div class="input-group mb-3 mt-1">
                                            <input class="inputT10Avatar p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text select-code p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="third1">
                                <div class="row my-3 px-1 fade-in">
                                    <div class="ol-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="row" style="border-right:1px solid #455160;">
                                            <p class="ml-3" style="margin:0;font-weight:800;color:#fff;">บัญชี</p>
                                            <div class="col-12 mt-1">
                                                <div class="checkbox01 ">
                                                    <div class="row radio-ibank">
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="bangkok" id="bank01">
                                                            <label for="bank01"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกรุงเทพ</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="ktc" id="bank02">
                                                            <label for="bank02"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกรุงไทย</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="kbank" id="bank03">
                                                            <label for="bank03"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกสิกรไทย</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="scb" id="bank04">
                                                            <label for="bank04"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารไทยพาณิชย์</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="ml-3" style="margin:0;font-weight:800;color:#fff;">คูปอง / ส่วนลดของฉัน</p>
                                            <div class="col-12">
                                                <div class="input-group mb-3 mt-1">
                                                    <input class="inputT10Avatar p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text select-code p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-12">
                                            <p class="ml-2" style="margin:0;font-weight:800;color:#fff;">ชำระเงินอย่างไร</p>
                                            <p style="margin:0;color:#fff;">
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
                                </div>
                            </div>

                            <div id="four1">
                                <div class="row my-3 px-1 fade-in">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="row" style="border-right:1px solid #455160;">
                                            <p class="ml-3" style="margin:0;font-weight:800;color:#fff;">บัญชี</p>
                                            <div class="col-12 mt-1">
                                                <div class="checkbox01 ">
                                                    <div class="row radio-ibank">
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="bangkok" id="bank05">
                                                            <label for="bank05"><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกรุงเทพ</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="ktc" id="bank06">
                                                            <label for="bank06"><img src="{{asset('home/logo/ktc.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกรุงไทย</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="kbank" id="bank07">
                                                            <label for="bank07"><img src="{{asset('home/logo/kbank.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารกสิกรไทย</span>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <input type="radio" name="ibank" value="scb" id="bank08">
                                                            <label for="bank08"><img src="{{asset('home/logo/scb.svg')}}" ></label>
                                                            <span class="ml-2 p" style="color:#fff;">ธนาคารไทยพาณิชย์</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="ml-3" style="margin:0;font-weight:800;color:#fff;">คูปอง / ส่วนลดของฉัน</p>
                                            <div class="col-12">
                                                <div class="input-group mb-3 mt-1">
                                                    <input class="inputT10Avatar p" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text select-code p" id="basic-addon2" data-toggle="modal" data-target="#code">เลือกโค้ดส่วนลด</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="ml-2" style="margin:0;font-weight:800;color:#fff;">ชำระเงินอย่างไร</p>
                                                <p style="margin:0;color:#fff;">
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
                                </div>
                            </div>


                            <div class="row mt-3 py-2 " style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                <div class="col-12">
                                    <div class="row mx-4">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6 col-sm-8 col-md-9 col-lg-9 col-xl-9 text-right font-payment2"><p style="margin:0;">ยอดรวมสินค้า</p></div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-right font-payment2"><p style="margin:0;">฿{{number_format($transeection->transeection_price)}}</p></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-8 col-md-9 col-lg-9 col-xl-9 text-right font-payment2"><p style="margin:0;">ส่วนลด</p></div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-right font-payment2"><p style="margin:0;">-</p></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-8 col-md-9 col-lg-9 col-xl-9 text-right font-payment2 pt-2"><p style="margin:0;">รวมราคาทั้งสิ้น</p></div>
                                                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-right align-self-end"><h4 style="margin:0;color:#ce0005;font-weight:800;">฿{{number_format($transeection->transeection_price)}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-3" >
                                        <div class="col-lg-10"></div>
                                        <div class="col-lg-2 text-center" id="T10">
                                            {{-- <a href="{{ route('PaymentConfirmation') }}">
                                                <label class="btn-submit-red"><p style="margin:0;color:#fff;">ชำระเงิน</p></label>
                                            </a> --}}
                                        </div>
                                        <div class="col-lg-2 text-center" id="VisaCredit">
                                            {{-- <a href="{{ route('PaymentConfirmation') }}">
                                                <label class="btn-submit-red"><p style="margin:0;color:#fff;">ชำระเงิน</p></label>
                                            </a> --}}
                                            @if($transeection->transeection_invoice == null)
                                                    <button class="btn-submit-red credit"><p style="margin:0;color:#fff;">ชำระเงิน</p></button>
                                                    <input type="hidden" name="amount" value="{{$transeection->transeection_price}}" >
                                                    <!-- <input type="hidden" name="bank_name" id="data-checked"> -->
                                                    <input type="hidden" name="paymentType" value="VisaCredit">
                                                    <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                    <input type="hidden" id="submit" name="submit" value="submit">
                                            @else
                                                @if($transeection->transeection_status == 'false')
                                                    <button class="btn-cancel-s" style="cursor:default">
                                                        <p style="margin:0">รอการชำระเงิน</p>
                                                    </button>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="col-lg-2 text-center" id="iBanking">
                                            @if($transeection->transeection_invoice == null)
                                                <form action="{{route('Itemibanking')}}" method="POST">
                                                    @csrf
                                                    <button class="btn-submit-red"><p style="margin:0;color:#fff;">ชำระเงิน</p>
                                                        <input type="hidden" name="amount" value="{{$transeection->transeection_price}}" >
                                                        <input type="hidden" name="bank_name" id="data-checked">
                                                        <input type="hidden" name="paymentType" value="QrCode">
                                                        <input type="hidden" name="note" id="note" value="no">
                                                        <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                        <input type="hidden" id="submit" name="submit" value="submit">
                                                    </button>
                                                </form>
                                            @else
                                                @if($transeection->transeection_status == 'false')
                                                    <button class="btn-cancel-s" style="cursor:default">
                                                        <p style="margin:0">รอการชำระเงิน</p>
                                                    </button>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="col-lg-2 text-center" id="Transfer">
                                            @if($transeection->transeection_invoice == null)
                                                <form action="{{route('itemTransfer')}}" method="POST">
                                                    @csrf
                                                    <button class="btn-submit-red"><p style="margin:0;color:#fff;">ชำระเงิน</p>
                                                        <input type="hidden" name="transferAmount" value="{{$transeection->transeection_price}}">
                                                        <input type="hidden" name="transferฺBank_name" id="data-bank">
                                                        <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                                        <input type="hidden" id="submit" name="submit" value="submit">
                                                    </button>
                                                </form>
                                            @else
                                                @if($transeection->transeection_status == 'false')
                                                    <button class="btn-cancel-s" style="cursor:default">
                                                        <p style="margin:0">รอการชำระเงิน</p>
                                                    </button>
                                                @endif
                                            @endif
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
    <!-- เลือกที่อยู่ -->
    <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row ml-2">
                        <h1 style="margin:0;color:#000;font-weight:800;">ที่อยู่</h1>
                    </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
                </div>

                <form action="{{route('DeleteAddress')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12" style="padding:0;">
                            <div class="row">
                                <div class="col-12">
                                    @if(isset($address))
                                        @foreach($address as $key=>$addressAll)
                                            @if($addressAll->addresses_status == "true")
                                                <div class="row radio-address">
                                                    <div class="col-4" style="padding-right:0;">
                                                        <label class="redioRed">
                                                            <input type="radio" name="address" value="{{$addressAll->addresses_id}}" id="KEY{{$key}}" checked>
                                                            <label for="KEY{{$key}}"><p style="margin:0;font-weight:800;">ชื่อ - นามสกุล<br>ที่อยู่</p></label>
                                                        </label>
                                                    </div>
                                                    <div class="col-7" style="padding-right:0;">
                                                        <p style="margin:0;">
                                                            {{Auth::user()->name}} {{Auth::user()->surname}} <a style="color:#ce0005;font-weight: 700;">(ที่อยู่หลัก)</a><br>
                                                            {{$addressAll->addresses}} แขวง{{$addressAll->district}} เขต{{$addressAll->amphure}} จังหวัด{{$addressAll->province}} {{$addressAll->zipcode}}
                                                        </p>
                                                    </div>
                                                    <div class="col-1 text-center" style="padding:0;">
                                                        <button class="btnTrash" name="deleteAddress" value="deleteAddress">
                                                            <img style="width:20px;" src="{{asset('icon/trash.svg')}}" >
                                                            <input type="hidden" name="addresses_id" value="{{$addressAll->addresses_id}}">
                                                        </button>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row radio-address">
                                                    <div class="col-4" style="padding-right:0;">
                                                        <label class="redioRed">
                                                            <input type="radio" name="address" value="{{$addressAll->addresses_id}}" id="KEY{{$key}}">
                                                            <label for="KEY{{$key}}"><p style="margin:0;font-weight:800;">ชื่อ - นามสกุล<br>ที่อยู่</p></label>
                                                        </label>
                                                    </div>
                                                    <div class="col-7" style="padding-right:0;">
                                                        <p style="margin:0;">
                                                            {{Auth::user()->name}} {{Auth::user()->surname}}<br>
                                                            {{$addressAll->addresses}} แขวง{{$addressAll->district}} เขต{{$addressAll->amphure}} จังหวัด{{$addressAll->province}} {{$addressAll->zipcode}}
                                                        </p>
                                                    </div>
                                                    <div class="col-1 text-center" style="padding:0;">
                                                        <button class="btnTrash" name="deleteAddress" value="deleteAddress">
                                                            <img style="width:20px;" src="{{asset('icon/trash.svg')}}" >
                                                            <input type="hidden" name="addresses_id" value="{{$addressAll->addresses_id}}">
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
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
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="margin:0;color:#000;font-weight:800;">เพิ่มที่อยู่</h1>
                        </div>
                    </div>
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
                                        <input name="taxID" class="input1 p ml-2" value="{{old('taxID')}}"></input>
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
                    <div class="row">
                        <h1 style="margin:0;color:#000;font-weight:800;">โค้ดส่วนลด</h1>
                    </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>

                <div class="modal-body">
                    <div class="col-12" style="padding:0;">
                        <div class="row mb-3">
                            <div class="col-lg-12 redioGreenAvatar">
                                <input type="radio" name="code" value="code1" id="code1" />
                                <label for="code1"  class="bgcode labellogo">
                                    <h4 for="code1" class="fontcodeposition" style="color: #455160;font-weight:800;">DAY100TH (-฿100)</h4></label>
                                </label>
                            </div>
                            <div class="col-lg-12 redioGreenAvatar">
                                <input type="radio" name="code" value="code2" id="code2" />
                                <label for="code2"  class="bgcode labellogo">
                                    <h4 for="code1" class="fontcodeposition" style="color: #455160;font-weight:800;">DAY200TH (-฿200)</h4></label>
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
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button>
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
                        <div class="col-10 mb-2 ">
                            <p style="margin:0;font-weight:800;">บันทึกบัตรไว้ใช้ในภายหลัง</p>
                            <p style="margin:0;">ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</p>
                        </div>
                        <div class="col-2 mb-2 text-right">
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
                                <div class="col-2"></div>
                                <div class="col-8 text-center">
                                    <h1 style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเล็ท</h1>
                                </div>
                                <div class="col-2 " style="padding:0;">
                                    <button type="button" class="close btn-closeModal" data-dismiss="modal">
                                        <i class="icon-close_modal" style="font-size: 15px;"></i>
                                    </button>
                                </div>
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
                                <div class="col-1"></div>
                                <div class="col-10 text-center">
                                    <h1 style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเล็ท</h1>
                                </div>
                                <div class="col-1"><button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="ml-2 p" style="font-weight:800;color:#383838;margin:0;">จำนวนเงินที่ต้องการเติม</label>
                                    <label class="ml-2 p" style="margin:0;"> (ขั้นต่ำ  ฿100)</label>
                                    <label class="bgAmountT10pay">
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
                                <div class="col-1"></div>
                                <div class="col-10 text-center">
                                    <p style="margin:0;color:#000;font-weight:900;">เติมเงินวอลเลต</p>
                                </div>
                                <div class="col-1"><button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 14px;"></i></button></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="ml-2 " style="font-family:myfont1;font-size:1em;font-weight:800;color:#383838;">จำนวนเงินที่ต้องการเติม</label>
                                    <label class="bgAmountT10pay">
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
                                <div class="col-1"></div>
                                <div class="col-10 text-center">
                                    <h1 style="margin:0;color:#fff;font-weight:800;">เติมเงินวอลเล็ท</h1>
                                </div>
                                <div class="col-1" style="padding:0;">
                                    <label data-dismiss="modal" style="cursor:pointer;">
                                        <img style="width:15px;" src="{{asset('icon/close-wh.svg')}}">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <label class="ml-2 p" style="margin:0;color:#fff;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</label>
                                </div>
                                <div class="col-12 text-center">
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
                                
                                <div class="col-12 ">
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
                                <div class="col-1"></div>
                                <div class="col-10 text-center my-2">
                                    <h1 style="color:#000;font-weight:800;margin:0">เติมเงินวอลเล็ท</h1>
                                </div>
                                <div class="col-1" style="padding:0;">
                                    <label data-dismiss="modal" style="cursor:pointer;">
                                        <img style="width:15px;" src="{{asset('icon/close.svg')}}">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 text-center">
                                    <div class="bgAmountT10pay">
                                        <img class="mt-4" style="width:30px;" src="{{asset('icon/select_green2.svg')}}">
                                        <p class="mt-2" style="font-weight:800;color:#23c197;margin:0;">เติมเงินสำเร็จ</p>
                                        <p class="pb-3" style="color:#000;margin:0">
                                            คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>
                                            คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ
                                        </p>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 mb-4">
                                    <button type="button" class="btn-submit-red mt-3" data-dismiss="modal">
                                        <p style="margin:0;">ตกลง</p>
                                    </button>
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
    <form class="VisaCreditTreePay d-none" action="https://paytest.treepay.co.th/total/hubInit.tp" method="post">
        @csrf
        <button class="btn-submit-red creditTree"><p style="margin:0;color:#fff;">ชำระเงิน</p></button>
        <input type="hidden" name="order_no">
        <input type="hidden" name="good_name">
        <input type="hidden" name="trade_mony">
        <input type="hidden" name="order_first_name">
        <input type="hidden" name="order_email">
        <input type="hidden" name="pay_type">
        <input type="hidden" name="site_cd">
        <input type="hidden" name="ret_url" value="{{route('CreditCallback')}}">
        <input type="hidden" name="currency">
        <input type="hidden" name="user_id">
        <input type="hidden" name="hash_data">
    </form>
</div>
<div id="loading" class="d-none" style="position:fixed;top:0;width:100vw;height:100vh;z-index:5000;background:rgba(0,0,0,0.6);">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div style="animation:loadingAnimate 2s linear infinite;">
            <svg id="Capa_1" enable-background="new 0 0 497 497" height="200" viewBox="0 0 497 497" width="200" xmlns="http://www.w3.org/2000/svg"><g><circle cx="98" cy="376" fill="#909ba6" r="53"/><circle cx="439" cy="336" fill="#c8d2dc" r="46"/><circle cx="397" cy="112" fill="#e9edf1" r="38"/><ellipse cx="56.245" cy="244.754" fill="#7e8b96" rx="56.245" ry="54.874"/><ellipse cx="217.821" cy="447.175" fill="#a2abb8" rx="51.132" ry="49.825"/><ellipse cx="349.229" cy="427.873" fill="#b9c3cd" rx="48.575" ry="47.297"/><ellipse cx="117.092" cy="114.794" fill="#5f6c75" rx="58.801" ry="57.397"/><ellipse cx="453.538" cy="216.477" fill="#dce6eb" rx="43.462" ry="42.656"/><circle cx="263" cy="62" fill="#4e5a61" r="62"/></g></svg>
        </div>
    </div>
</div>
<style>
    @keyframes loadingAnimate {
        100% {transform:rotate(360deg);}
    }
</style>

<!-- พื้นหลัง -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bg_avatar2"></div>
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
        database: 'filter/database/db.json',
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

<script>
    $(document).ready(function(e) {
        $(".btn-submit-red.credit").click(function(e) {
            var btnThis = $(this);
            // alert("ยืนยันการลบรายการ");
            var amount = $(this).parent().find('input[name="amount"]').val();
            var paymentType = $(this).parent().find('input[name="paymentType"]').val();
            var transeection_id = $(this).parent().find('input[name="transeection_id"]').val();
            var submit = "submit";

            console.log(paymentType);
            $('#loading').removeClass('d-none');

            $.ajax({
                url: "{{route('VisaCredit')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    amount:amount,
                    paymentType:paymentType,
                    transeection_id:transeection_id,
                    submit:submit,
                },
                success: function(response) {
                    $('form.VisaCreditTreePay input[name="order_no"]').val(response.order_no);
                    $('form.VisaCreditTreePay input[name="good_name"]').val(response.good_name);
                    $('form.VisaCreditTreePay input[name="user_id"]').val(response.user_id);
                    $('form.VisaCreditTreePay input[name="trade_mony"]').val(response.trade_mony);
                    $('form.VisaCreditTreePay input[name="order_first_name"]').val(response.order_first_name);
                    $('form.VisaCreditTreePay input[name="order_email"]').val(response.order_email);
                    $('form.VisaCreditTreePay input[name="pay_type"]').val(response.pay_type);
                    $('form.VisaCreditTreePay input[name="site_cd"]').val(response.site_cd);
                    $('form.VisaCreditTreePay input[name="currency"]').val(response.currency);
                    $('form.VisaCreditTreePay input[name="hash_data"]').val(response.hash_data);
                    $('.btn-submit-red.creditTree').click();
                },
                error: function() {}
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('success') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif

@if( Session::has('Delete'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#address').modal();
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('Delete') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
@endsection