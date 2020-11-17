@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AvatarOrderList') }}">
    <div class="row py-5"></div>
    <div class="row py-2" style="background-color:#141621;"></div>
    <div class="row ">

        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621;">
            
            <div style="background-color:#141621;border-radius: 8px;padding:20px;">
                <div class="tab-content">
                    <div id="budget" class="tab-pane active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-2 pb-2"> 
                                <h1 class="fontHeader" style="color:#fff;">รายการคำสั่งซื้อ</h1>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right"> 
                                <SELECT class="SelectDr p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                                <SELECT class="SelectDr p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                                <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                            </div>
                        </div>
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row  py-2" style="background-color:#141621;color:#000;font-weight:800;">
                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7 align-self-center"><p style="font-weight:800;margin:0;color:#fff;">หมายเลขคำสั่งซื้อ</p></div>
                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block"><p style="font-weight:800;margin:0;color:#fff">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center"><p style="font-weight:800;margin:0;color:#fff">สถานะ</p></div>
                                </div>
                                <div class="row rowOderListAvatar" id="all">
                                    <div class="col-12">
                                        @foreach($transeection as $transeectionList)
                                            @if($transeectionList->transeection_status == "true")
                                                <!-- ขำระเงินแล้ว -->
                                                <div class="row d-flex align-items-center line2">
                                                    <div class="col-7 col-sm-8 col-md-6 col-lg-5 col-xl-7">
                                                        <p style="color:#000;margin:0;color:#fff;">{{$transeectionList->transeection_invoice}}</p>
                                                    </div>
                                                    <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                        @if($transeectionList->transeection_type == "qr")
                                                            <p style="color:#000;margin:0;color:#fff;">โมบายแบงค์กิ้ง</p>
                                                        @elseif($transeectionList->transeection_type == "Transfer")
                                                            <p style="color:#000;margin:0;color:#fff;">โอนเงินผ่านธนาคาร</p>
                                                        @elseif($transeectionList->transeection_type == "VisaCredit")
                                                            <p style="color:#000;margin:0;color:#fff;">บัตรเครดิต/บัตรเดบิต</p>
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
                                                            <p style="color:#000;margin:0;color:#fff;">{{$transeectionList->transeection_invoice}}</p>
                                                        </div>
                                                        <div class="col-3 col-md-4 col-lg-4 col-xl-3 text-center  d-none d-lg-block d-xl-block d-md-block">
                                                            @if($transeectionList->transeection_type == "qr")
                                                                <p style="color:#000;margin:0;color:#fff;">โมบายแบงค์กิ้ง</p>
                                                            @elseif($transeectionList->transeection_type == "Transfer")
                                                                <p style="color:#000;margin:0;color:#fff;">โอนเงินผ่านธนาคาร</p>
                                                            @elseif($transeectionList->transeection_type == "VisaCredit")
                                                                <p style="color:#000;margin:0;color:#fff;">บัตรเครดิต/บัตรเดบิต</p>
                                                            @endif
                                                        </div>
                                                        <div class="col-5 col-sm-4 col-md-2 col-lg-3 col-xl-2 text-center align-self-center my-2">
                                                            @if(in_array($transeectionList->transeection_invoice, $transfer_invoice))
                                                                <!-- รอการอนุมัติ -->
                                                                <p style="margin:0;" class="status-transfer2">รอการอนุมัติ</p>
                                                            @else
                                                                @foreach($transfer_on as $transfer)
                                                                    @if($transfer->transferInvoice == $transeectionList->transeection_invoice)
                                                                        <!-- ไปหน้าแจ้งชำระเงิน -->
                                                                        <p style="margin:0;" class="status-transfer" data-toggle="modal" data-transfer="{{$transfer->id}}" data-transee="{{$transeectionList->transeection_id}}" data-target="#{{$transeectionList->transeection_invoice}}">แจ้งชำระเงิน</p>
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

@foreach($transeection as $transeectionModal)
    @if($transeectionModal->transeection_status == "true")
        <!-- Modal ใบเสร็จการชำระเงิน-->
        <div class="modal fade" id="{{$transeectionModal->transeection_invoice}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                <div class="modal-content" style="background-color:#202433;">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 text-center mt-3 mb-3">
                                <img style="width:40px;" src="{{asset('icon/select_green.svg')}}" alt=""> <br>
                                <p class="mt-3" style="color:#fff;font-weight:800;margin:0;">ชำระเงินเรียบร้อยแล้ว</p>
                                <p style="color:#a8a8a8;margin:0">หมายเลขคำสั่งซื้อ {{$transeectionModal->transeection_invoice}}</p>
                            </div>
                        </div>
                        <?php 
                            $transee = json_decode($transeectionModal->transeection_items);
                            $itemlist = array();
                            $itemamount = array();
                            $itemprice = array();
                            $i = 0;
                            foreach($transee as $transeeList){
                                $itemlist[] = $transeeList->item_id;
                                $itemamount[] = $transeeList->item_amount;
                                $itemprice[] = $transeeList->item_price;
                            }
                        ?>
                        @foreach($marketItem as $shoppingList)
                            @if(in_array($shoppingList->item_id, $itemlist))
                                @for($i=0;$i < count($itemlist);$i++)
                                    @if($shoppingList->item_id == $itemlist[$i])
                                        <div class="row mx-2">
                                            <div class="col-7" style="padding:0;">
                                                <label class="labelItemAvatar bgItem mr-2">
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
                                                <label class="font-sale4 bgItem2 mt-2">
                                                    <p style="margin:0;"> <a style="font-weight: 700;">{{$shoppingList->item_name}} ระดับ {{$shoppingList->item_level}} </a></br>
                                                    {{$shoppingList->item_description}}</br>
                                                    เลือกลงทุนได้ 3 Signal</p>
                                                </label>
                                            </div>

                                            <div class="col-2 my-4 text-center" style="padding:0;">
                                                <p style="margin:0;color:#fff;">{{$itemamount[$i]}} ชิ้น</p>
                                            </div>

                                            <div class="col-3 my-3">
                                                <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                    <h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($itemprice[$i], 2)}}</h4>
                                                    @if($shoppingList->item_discount != 0)
                                                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿{{number_format($itemprice[$i], 2)}} </a> (-{{$shoppingList->item_discount}}%)</p>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            @endif
                        @endforeach
                
                        <div class="row py-2" style="background-color:#191b29;">
                            <div class="col-12">
                                <div class="row ml-2">
                                    <p style="font-weight:800;margin:0;color:#fff;">ที่อยู่ในการออกใบเสร็จ</p>
                                </div>
                                @if(isset($address))
                                    @foreach($address as $addressOn)
                                        @if($addressOn->addresses_status == "true")
                                            <div class="row ml-2 mt-2">
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                    <label class="font-payment-avatar mr-2">
                                                        <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br> <br>เบอร์โทรศัพท์</p>
                                                    </label>
                                                    <label class="font-payment-avatar5">
                                                        <p style="margin:0;">{{Auth::user()->name}} {{Auth::user()->surname}}
                                                            @foreach($guest_user as $user)
                                                                @if($user->GUEST_USERS_ID_CARD != null)
                                                                    <?php 
                                                                        $i = substr($user->GUEST_USERS_ID_CARD, 0, 1);
                                                                        $i2 = substr($user->GUEST_USERS_ID_CARD, 1, 4);
                                                                        $i3 = substr($user->GUEST_USERS_ID_CARD, 5, 5);
                                                                        $i4 = substr($user->GUEST_USERS_ID_CARD, 10, 2);
                                                                        $i5 = substr($user->GUEST_USERS_ID_CARD, 12, 1);
                                                                    ?>
                                                                    @if($user->GUEST_USERS_TEL != null)
                                                                        <br>( {{$i}}-{{$i2}}-{{$i3}}-{{$i4}}-{{$i5}} )
                                                                        <br>(+66) {{$user->GUEST_USERS_TEL}}
                                                                    @else
                                                                        <br>( {{$i}}-{{$i2}}-{{$i3}}-{{$i4}}-{{$i5}} )
                                                                    @endif
                                                                @else
                                                                    @if($user->GUEST_USERS_TEL != null)
                                                                        <br>(+66) {{$user->GUEST_USERS_TEL}}
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </label>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                    <label class="font-payment-avatar mr-2">
                                                        <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                                                    </label>
                                                    <label class="font-payment-avatar4">
                                                        <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}} {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}</p>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row pl-2 pr-4" style="border-bottom:1px solid #455160">
                            <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                            <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($transeectionModal->transeection_price, 2)}}</h4></div>
                        </div>
                        <div class="row py-3 pl-2 pr-4" style="border-bottom:1px solid #455160">
                            <div class="col-3 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                            <div class="col-9 text-right font-payment2" style="padding-left:0;">
                                @if($transeectionModal->transeection_type == "qr")
                                    <p style="margin:0;">โมบายแบงค์กิ้ง {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                @elseif($transeectionModal->transeection_type == "Transfer")
                                    <p style="margin:0;">โอนเงินผ่านธนาคาร {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                @elseif($transeectionModal->transeection_type == "VisaCredit")
                                    <p style="margin:0;">บัตรเครดิต/บัตรเดบิต {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-2" style="padding-right:12px">
                            <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                            <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                                <button type="button" class="btn-submit" data-dismiss="modal" style="background-color:#191b29;">
                                    <p style="margin:0;">ปิด</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if($transeectionModal->transeection_invoice != null)
            <!-- Modal แจ้งชำระเงิน-->
            <div class="modal fade" id="{{$transeectionModal->transeection_invoice}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content" style="background-color:#202433;">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 text-center mt-3 mb-3">
                                    <p class="mt-3" style="color:#fff;font-weight:800;margin:0;">แจ้งชำระเงิน</p>
                                    <p style="color:#a8a8a8;margin:0">หมายเลขคำสั่งซื้อ {{$transeectionModal->transeection_invoice}}</p>
                                </div>
                            </div>
                            <?php 
                                $transee_tranfer = json_decode($transeectionModal->transeection_items);
                                $itemlist_tranfer = array();
                                $itemamount_tranfer = array();
                                $itemprice_tranfer = array();
                                $i = 0;
                                foreach($transee_tranfer as $transeeList_tranfer){
                                    $itemlist_tranfer[] = $transeeList_tranfer->item_id;
                                    $itemamount_tranfer[] = $transeeList_tranfer->item_amount;
                                    $itemprice_tranfer[] = $transeeList_tranfer->item_price;
                                }
                            ?>
                            @foreach($marketItem as $shoppingList_tranfer)
                                @if(in_array($shoppingList_tranfer->item_id, $itemlist_tranfer))
                                    @for($i=0;$i < count($itemlist_tranfer);$i++)
                                        @if($shoppingList_tranfer->item_id == $itemlist_tranfer[$i])
                                            <div class="row mx-2">
                                                <div class="col-7" style="padding:0;">
                                                    <label class="labelItemAvatar bgItem mr-2">
                                                        @if($shoppingList_tranfer->item_type == "clothes")
                                                            @if($shoppingList_tranfer->item_gender == "woman")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList_tranfer->item_gender == "man")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList_tranfer->item_type == "eyes")
                                                            @if($shoppingList_tranfer->item_gender == "woman")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList_tranfer->item_gender == "man")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList_tranfer->item_type == "glasses")
                                                            <img class="picture2" src="{{asset('home/avatar/glasses/'.$shoppingList_tranfer->item_img) }}">
                                                        @elseif($shoppingList_tranfer->item_type == "hair")
                                                            @if($shoppingList_tranfer->item_gender == "woman")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList_tranfer->item_gender == "man")
                                                                @if($shoppingList_tranfer->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/hero/'.$shoppingList_tranfer->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/'.$shoppingList_tranfer->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList_tranfer->item_type == "other")
                                                            <img class="picture2" src="{{asset('home/avatar/other/'.$shoppingList_tranfer->item_img) }}">
                                                        @elseif($shoppingList_tranfer->item_type == "weapon")
                                                            <img class="picture2" src="{{asset('home/avatar/weapon/'.$shoppingList_tranfer->item_img) }}">
                                                        @endif
                                                    </label> 
                                                    <label class="font-sale4 bgItem2 mt-2">
                                                        <p style="margin:0;"> <a style="font-weight: 700;">{{$shoppingList_tranfer->item_name}} ระดับ {{$shoppingList_tranfer->item_level}} </a></br>
                                                        {{$shoppingList_tranfer->item_description}}</br>
                                                        เลือกลงทุนได้ 3 Signal</p>
                                                    </label>
                                                </div>

                                                <div class="col-2 my-4 text-center" style="padding:0;">
                                                    <p style="margin:0;color:#fff;">{{$itemamount_tranfer[$i]}} ชิ้น</p>
                                                </div>

                                                <div class="col-3 my-3">
                                                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($itemprice_tranfer[$i], 2)}}</h4>
                                                        @if($shoppingList_tranfer->item_discount != 0)
                                                            <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿{{number_format($itemprice_tranfer[$i], 2)}} </a> (-{{$shoppingList_tranfer->item_discount}}%)</p>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            @endforeach

                            <div class="row pl-2 pr-4" style="border-bottom:1px solid #455160">
                                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($transeectionModal->transeection_price, 2)}}</h4></div>
                            </div>
                            <div class="row pl-2 pr-4 pt-2" style="border-bottom:1px solid #455160">
                                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2">
                                    <label class="font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></label> <br>
                                    <p style="color:#fff;margin:0;">
                                        ATM / โอนเข้าธนาคาร <br>
                                        กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                    </p>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-right">
                                    @foreach($transfer_on as $transfer)
                                        @if($transfer->transferInvoice == $transeectionModal->transeection_invoice)
                                            <label><img src="{{asset('home/logo/'.$transfer->transferฺBank_name.'.svg')}}" ></label>
                                            @if($transfer->transferฺBank_name == "bangkok")
                                                <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงเทพ</p></label> <br>
                                                <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                                <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                                <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                            @elseif($transfer->transferฺBank_name == "ktc")
                                                <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงไทย</p></label> <br>
                                                <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                                <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                                <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                            @elseif($transfer->transferฺBank_name == "kbank")
                                                <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกสิกรไทย</p></label> <br>
                                                <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                                <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                                <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                            @elseif($transfer->transferฺBank_name == "scb")
                                                <label class="font-payment2" style="margin:0;"><p style="color:#fff;margin:0;">ธนาคารไทยพาณิชย์</p></label> <br>
                                                <label class="ml-2" style="margin:0;"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                                <label class="ml-2" id="copy" style="margin:0;"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                                <label class="ml-2" style="margin:0;" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="row py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                <div class="col-12">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 text-right">
                                            <label class="btn-submit-red3" onClick="myFunction()">
                                                <p style="margin:0;">แจ้งการชำระเงิน</p>
                                            </label>
                                            <label class="btn-submit-wh" data-dismiss="modal">
                                                <p style="margin:0;">อัพโหลดภายหลัง</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Transfer">
                                <form action="{{ route('itemTransfer') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row fade-in mt-3">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
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
                                                    <label><p style="font-weight:800;margin:0;color:#fff;">อัพโหลดรูปภาพ</p></label>
                                                </label>
                                                <div id="thumb" class="thumb-topup2"><img src="{{asset('home/topup/pic-topup.png') }}"/></div>    
                                                <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                                            <!-- <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-drak2">ยืนยัน</label></a>transferNote -->
                                            <button class="btn-submit-red" name="submit" value="submit"><p style="margin:0;">ยืนยัน</p></button>
                                            <input type="hidden" name="id">
                                            <input type="hidden" name="transeection_id">
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

<script>
    const myFunction = () => {
    document.getElementById("Transfer").style.display ='block';}
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
    });
</script>
@endsection