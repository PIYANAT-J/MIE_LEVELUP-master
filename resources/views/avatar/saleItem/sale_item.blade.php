@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-sm-4 col-md-6 col-lg-6 col-xl-8 pt-2">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shop" class="avatar-link active">
                            <h1 style="margin:0;">ตลาดซื้อขาย</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/sale" class="avatar-link">
                        <h1 style="margin:0;">ไอเทมวางขาย</h1>
                    </label>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right" style="padding:0;">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a href="/add_sale_item">
                        <label class="labelshop bg-shop">
                            <p style="color:#fff;margin:0;">+ เพิ่มไอเทมขาย</p> 
                        </label>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row mx-0 pb-3 row7" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12">
                            <!-- ทรงผม -->
                            <div class="row mt-2">
                                <div class="col-12">
                                    <!-- <p style="margin:0;color:#fff;">ทรงผม</p>
                                    <label class="labelItem bgItem">
                                        <img class="picture2" src="{{asset('home/avatar/hair/woman/hair_woman_01.png') }}" />
                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                    </label> -->
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "hair")
                                            <p style="margin:0;color:#fff;">ทรงผม</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                    @if($allItem->item_type == "hair" && $allItem->item_amount > $allItem->item_amount_discount)
                                                        @if($allItem->item_gender == "man")
                                                            <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/man/{{$allItem->item_img}}'">
                                                                <img class="picture2" src="{{asset('home/avatar/hair/man/'.$allItem->item_img) }}" />
                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                            </button>
                                                        @else
                                                            <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/woman/{{$allItem->item_img}}'">
                                                                <img class="picture2" src="{{asset('home/avatar/hair/woman/'.$allItem->item_img) }}" />
                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                            </button>
                                                        @endif
                                                    @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- สีตา -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "eyes")
                                            <p style="margin:0;color:#fff;">สีตา</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "eyes" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    @if($allItem->item_gender == "man")
                                                        <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/{{$allItem->item_img}}'">
                                                            <img class="picture2" src="{{asset('home/avatar/eyes/man/'.$allItem->item_img) }}" />
                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                        </button>
                                                    @else
                                                        <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/woman/{{$allItem->item_img}}'">
                                                            <img class="picture2" src="{{asset('home/avatar/eyes/woman/'.$allItem->item_img) }}" />
                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- แว่นตา -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "glasses")
                                            <p style="margin:0;color:#fff;">แว่นตา</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "glasses" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/glasses/{{$allItem->item_img}}'">
                                                        <img class="picture2" src="{{asset('home/avatar/glasses/'.$allItem->item_img) }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                    </button>
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- ชุดไปรเวท -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "clothes")
                                            @if($text->item_other != "hero")
                                                <p style="margin:0;color:#fff;">ชุดไปรเวท</p>
                                                @foreach($marketItem as $key=>$allItem)
                                                    @if($allItem->item_type == "clothes" && $allItem->item_amount > $allItem->item_amount_discount)
                                                        @if($allItem->item_gender == "man")
                                                            @if($allItem->item_other != "hero")
                                                                <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/{{$allItem->item_img}}'">
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/'.$allItem->item_img) }}" />
                                                                    <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                                </button>
                                                            @endif
                                                        @else
                                                            @if($allItem->item_other != "hero")
                                                                <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/woman/{{$allItem->item_img}}'">
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/'.$allItem->item_img) }}" />
                                                                    <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                                </button>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endforeach
                                                @break
                                            @endif
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- ชุดซุปเปอร์ฮีโร่ -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "clothes")
                                            <p style="margin:0;color:#fff;">ชุดซุปเปอร์ฮีโร่</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "clothes" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    @if($allItem->item_gender == "man")
                                                        @if($allItem->item_other == "hero")
                                                            <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/hero/{{$allItem->item_img}}'">
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/man/hero/'.$allItem->item_img) }}" />
                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                            </button>
                                                        @endif
                                                    @else
                                                        @if($allItem->item_other == "hero")
                                                            <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/woman/hero/{{$allItem->item_img}}'">
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/'.$allItem->item_img) }}" />
                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                            </button>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- ดาบ-->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_type == "weapon")
                                            <p style="margin:0;color:#fff;">ดาบ</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "weapon" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/{{$allItem->item_img}}'">
                                                        <img class="picture2" src="{{asset('home/avatar/weapon/'.$allItem->item_img) }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                    </button>
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- คฑา-->
                            <!-- <div class="row">
                                <div class="col-12">
                                    <p style="margin:0;color:#fff;">คฑา</p>
                                    <label class="labelItem bgItem">
                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/wand/w01.svg') }}" />
                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                    </label>
                                </div> 
                            </div> -->

                            <!-- ปืน-->
                            <!-- <div class="row">
                                <<div class="col-12">
                                    <p style="margin:0;color:#fff;">ปืน</p>
                                    <label class="labelItem bgItem">
                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/gun/g01.svg') }}" />
                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                    </label>
                                </div> 
                            </div> -->

                            <!-- ธนู-->
                            <!-- <div class="row">
                                <div class="col-12">
                                    <p style="margin:0;color:#fff;">ธนู</p>
                                    <label class="labelItem bgItem">
                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/archer/a01.svg') }}" />
                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                    </label>
                                </div> 
                            </div> -->

                            <!-- มงกุฏ/หมวก -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_other == "crown")
                                            <p style="margin:0;color:#fff;">มงกุฏ/หมวก</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "other" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    @if($allItem->item_other == "crown")
                                                        @if($allItem->item_amount_discount != $allItem->item_amount)
                                                            <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->item_img}}'">
                                                                <img class="picture2" src="{{asset('home/avatar/other/'.$allItem->item_img) }}" />
                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                            </button>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- ถุงมือ -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_other == "gloves")
                                            <p style="margin:0;color:#fff;">ถุงมือ</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "other" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    @if($allItem->item_other == "gloves")
                                                        <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->item_img}}'">
                                                            <img class="picture2" src="{{asset('home/avatar/other/'.$allItem->item_img) }}" />
                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- เสื้อเกราะ -->
                            <div class="row">
                                <div class="col-12">
                                    @foreach($marketItem as $key=>$text)
                                        @if($text->item_other == "armor")
                                            <p style="margin:0;color:#fff;">เสื้อเกราะ</p>
                                            @foreach($marketItem as $key=>$allItem)
                                                @if($allItem->item_type == "other" && $allItem->item_amount > $allItem->item_amount_discount)
                                                    @if($allItem->item_other == "armor")
                                                        <button class="labelItem bgItem" value="{{$allItem->item_name}}" data-amount="{{$allItem->item_amount}}" data-level="{{$allItem->item_level}}" 
                                                                    data-discount="{{$allItem->item_amount_discount}}" data-description="{{$allItem->item_description}}" data-price="{{$allItem->item_price}}" 
                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->item_description}}</div>' 
                                                                    data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->item_img}}'">
                                                            <img class="picture2" src="{{asset('home/avatar/other/'.$allItem->item_img) }}" />
                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->item_level}}</h5></span>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @break
                                        @endif
                                    @endforeach
                                </div> 
                            </div>

                            <!-- รองเท้า -->
                            <!-- <div class="row">
                                <div class="col-12">
                                    <p style="margin:0;color:#fff;">รองเท้า</p>
                                    <label class="labelItem bgItem">
                                        <img class="picture2" src="{{asset('home/avatar/woman/other/shoes/s01.png') }}" />
                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                    </label>
                                </div> 
                            </div> -->

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6" style="background-color:#202433;border-radius: 6px;">
                    <div class="row mt-2" >
                        <div class="col-12">
                            <div class="font-sale1"><p style="margin:0">รายละเอียด</p></div>
                        </div>  
                    </div>
                    <div class="row mx-0">    
                        <div class="col-12" style="padding:0;">
                            <label class="labelItem bgItem" data-placement="bottom">
                                <img id="saleItem" class="picture2" src="{{asset('home/avatar/icon/sale.png') }}" />
                            </label>
                            <!-- <label class="labelItem bgItem">
                                <img id="crownMan" class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                            </label>  -->
                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                <p style="font-weight: 700;margin:0;"><span id="name"></span> <span id="level"></span> </p>
                                <p style="margin:0;"><span id="description"></span></p>
                                <!-- <p style="margin:0;"></p> -->
                            </label>
                        </div>

                        <div class="col-12 px-3 mt-3" style="background-color:#191b29;">
                            <div class="row ">
                                <div class="col-6 main">
                                    <span class=" font-sale5 inner mt-1">
                                        <h5 style="margin:0;">เหลือ (จำนวน)</h5>
                                        <h4 style="margin:0;"><span id="discount">0</span> / <a style="color:#ce0005;"><span id="amount">0</span></a></h4>
                                        </span>   
                                </div>
                                <div class="col-6 text-right my-3">
                                    <h4 style="margin:0;font-weight:800;color:#ce0005;" >฿<span id="price">0.00</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-right my-3">
                            <button class="itemAvatar4">
                                <p style="margin:0;color:#000;font-weight:800;">ยกเลิกการขาย</p>
                            </button>
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
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            trigger : 'hover',
            html : true,
            // content : '<div class="mediaPopover popover1">ตัวอย่างนี้เป็นการกำหนดให้ข้อความตัดอัตโนมัติเมื่อยาวเกินกว่าขอบเขตการแสดงผล โดยใช้ css ในการตัดด้วยคำสั่ง overflow</div>'
        });
    });
</script>

<script>
    $('.labelItem.bgItem').on('click', function(){
        var item_name = $(this).val();
        var amount = $(this).data('amount');
        var discount = $(this).data('discount');
        var price = $(this).data('price');
        var description = $(this).data('description');
        var level = $(this).data('level');

        $('#name').html(item_name);
        $('#amount').html(amount);
        $('#discount').html(discount);
        $('#price').html(new Intl.NumberFormat().format(price));
        $('#description').html(description);
        $('#level').html('ระดับ '+level);
        // $('input[name="item_id"]').val(item_id);
        // $('input[name="amount"]').val(amount);
        // console.log(item_name);
        // console.log(amount);
        // console.log(discount);
        // console.log(price);
        // console.log(description);
        // console.log(level);

    })
</script>
@endsection