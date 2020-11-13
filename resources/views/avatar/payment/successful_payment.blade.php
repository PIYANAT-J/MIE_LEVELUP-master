@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                    <div class="col-12 pt-2 " style="color:#fff;">
                        <!-- <label>
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
                            <a href="/payment" class="avatar-link active">
                                <h1 style="margin:0;">ชำระเงิน</h1>
                            </a>
                        </label>
                        <label>
                            <h1 style="margin: 0;" class="avatar-link"> > </h1>
                        </label> -->
                        <label>
                            <a class="avatar-link" >
                                <h1 style="margin:0;">ชำระเงินสำเร็จ</h1>
                            </a>
                        </label>
                    </div>
                </div>

                <div class="row  mb-4 mt-2">
                    <div class="col-12"> 
                        <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                            <div class="col-12 mt-1">
                                <div class="row">
                                    <div class="col-12 text-center mt-3">
                                        <img style="width:40px;" src="{{asset('icon/select_green.svg')}}" alt=""> <br>
                                        <p class="mt-3" style="color:#fff;font-weight:800;margin:0;">ชำระเงินเรียบร้อยแล้ว</p>
                                        <p style="color:#a8a8a8;margin:0">หมายเลขคำสั่งซื้อ {{decrypt($invoice)}}</p>
                                    </div>
                                </div>

                                <!-- <div class="row mx-2 mt-5">  -->
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
                                    ?>
                                    @foreach($marketItem as $shoppingList)
                                        @if(in_array($shoppingList->item_id, $itemlist))
                                            @for($i=0;$i < count($itemlist);$i++)
                                                @if($shoppingList->item_id == $itemlist[$i])
                                                    <div class="row mx-2 mt-5">
                                                        <div class="col-7" style="padding:0;">
                                                            <label class="labelItemAvatar bgItem mr-2">
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
                                                                <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-{{$shoppingList->item_discount}}%)</p>
                                                            </span>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endfor
                                        @endif
                                    @endforeach
                                <!-- </div> -->

                                <div class="row mt-3 py-2" style="background-color:#191b29;">
                                    <div class="col-lg-12">
                                        <div class="row ml-2">
                                            <p style="font-weight:800;margin:0;color:#fff;">ที่อยู่ในการออกใบเสร็จ</p>
                                        </div>
                                        @if(isset($address))
                                            @foreach($address as $addressOn)
                                                @if($addressOn->addresses_status == "true")
                                                    <div class="row ml-2 mt-2">
                                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                            <label class="font-payment-avatar mr-2">
                                                                <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                                                            </label>
                                                            <label class="font-payment-avatar2">
                                                                <p style="margin:0;">{{Auth::user()->name}} {{Auth::user()->surname}} (5-1005-00148-76-6)
                                                                    @foreach($guest_user as $user)
                                                                        <br>(+66) {{$user->GUEST_USERS_TEL}}
                                                                    @endforeach
                                                                </p>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                            <label class="font-payment-avatar mr-2">
                                                                <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                                                            </label>
                                                            <label class="font-payment-avatar3">
                                                                <p style="margin:0;">{{$addressOn->addresses}} {{$addressOn->district}} {{$addressOn->amphure}} {{$addressOn->province}} {{$addressOn->zipcode}}
                                                                </p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="row" style="border-bottom:1px solid #455160">
                                    <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                    <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($transeection->transeection_price, 2)}}</h4></div>
                                </div>

                                <div class="row py-3" style="border-bottom:1px solid #455160">
                                    <div class="col-6 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                    <div class="col-6 text-right font-payment2" style="padding-left:0;">
                                        @if($transeection->transeection_type == "qr")
                                            <p style="margin:0;">โมบายแบงค์กิ้ง <br> บัญชี {{Auth::user()->name}} {{Auth::user()->surname}}</p>
                                        @elseif($transeection->transeection_type == "Transfer")
                                            <p style="margin:0;">โอนเงินธนาคาร <br> บัญชี {{Auth::user()->name}} {{Auth::user()->surname}}</p>
                                        @elseif($transeection->transeection_type == "VisaCredit")
                                            <p style="margin:0;">บัตรเครดิต/บัตรเดบิต <br> บัญชี {{Auth::user()->name}} {{Auth::user()->surname}}</p>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="row" style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                    <div class="col-12">
                                        <div class="row my-2" style="padding-right:12px">
                                            <div class="col-8 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
                                            <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-right" style="padding:0;">
                                                <a href="{{route('Avatar')}}">
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
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_avatar2"></div>
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
 jQuery('').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');
      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });
</script>
@endsection