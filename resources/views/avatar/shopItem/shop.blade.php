@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')

        <!-- shop -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color: #141621;">
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
                        <a href="/shop" class="avatar-link">
                            <h1 style="margin:0;">ตลาดซื้อขาย</h1>
                        </a>
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
                    <a href="/sale">
                        <label class="bg-shop3">
                            <img class="iconShop2" src="{{asset('icon/shopping-bag.svg') }}"/>
                            <p style="color:#fff;margin:0;">ประกาศขาย</p>
                        </label>
                    </a>
                </div>
            </div>
            
            <div class="row px-4">
                <div class="col-12 mb-3" style="height:200px;">
                    <div class="owl-carousel" id="owl-demo1">
                        <div class="item" style="height:200px;">
                            <img class="bgShopAvatar" src="{{asset('home/avatar/bg.png') }}">
                            <label class="bgItemShop ">
                                <h6 style="margin:0;font-weight:900;color:#fff;">RARE ITEM</h6>
                                <p style="margin:0;color:#fff;width:200px">ไอเทมพิเศษ หายาก มากที่สุดในตอนนี้รีบคว้ามามาครอบครองเลย</p>
                                <button class="btn-shop1 p" data-toggle="modal" data-target="#shop">ซื้อเลย</button>
                                <img class="img-shop1" src="{{asset('home/avatar/man/other/crown/c02.png') }}">
                            </label>
                        </div>

                        <div class="item" style="height:200px;">
                            <img class="bgShopAvatar" src="{{asset('home/avatar/bg.png') }}">
                            <label class="bgItemShop ">
                                <h6 style="margin:0;font-weight:900;color:#fff;">RARE ITEM</h6>
                                <p style="margin:0;color:#fff;width:200px">ไอเทมพิเศษ หายาก มากที่สุดในตอนนี้รีบคว้ามามาครอบครองเลย</p>
                                <button class="btn-shop1 p" data-toggle="modal" data-target="#shop">ซื้อเลย</button>
                                <img class="img-shop1" src="{{asset('home/avatar/man/other/crown/c02.png') }}">
                            </label>
                        </div>
                    </div>
                    <div class="btns">
                        <div class="shop-next1"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                        <div class="shop-prev1"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                    </div>
                </div>
            </div>

            <div class="row mx-4 pt-4 mb-3 pb-3" style="background-color: #202433;border-radius: 6px;">
                <div class="col-12">

                    <!-- แนะนำ -->
                    <div class="row px-4 mt-3" style="height:150px">
                        <div class="col-12"><h1 style="color:#fff;font-weight:800;">แนะนำ</h1></div>
                        <div class="col-12" style="height: 120px;">
                            <div class="owl-carousel" id="owl-demo2">
                                
                                <div class="item" style="height: 120px;">
                                    <img class="img-ownerItem" src="{{asset('dist/images/person_1.jpg') }}" />
                                    <label class="bg-shop2">
                                        <label class="img-saleItem">
                                            <img style="width:100%" src="{{asset('home/avatar/man/other/crown/c02.png') }}" data-toggle="popover" data-placement="bottom">
                                        </label>
                                        <span class="font-shop2"><h5 style="margin:0;">5</h5></span>
                                        <span class="font-price-position p">฿9,000.00</span>
                                        <span>
                                            <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                ฿11,400.00
                                            </h5>
                                        </span>
                                        <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                    </label>
                                </div>

                                <div class="item" style="height: 120px;">
                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                    <label class="bg-shop2">
                                        <label class="img-saleItem">
                                            <img style="width:100%" src="{{asset('home/avatar/man/clothes/c05.svg') }}" data-toggle="popover" data-placement="bottom">
                                        </label>
                                        <span class="font-shop2"><h5 style="margin:0;">5</h5></span>
                                        <span class="font-price-position p">฿9,000.00</span>
                                        <span>
                                            <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                ฿11,400.00
                                            </h5>
                                        </span>
                                        <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                    </label>
                                </div>

                            </div>
                            <div class="btns">
                                <div class="shop-next2"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                <div class="shop-prev2"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- ศรีษะ -->
                    <div class="row px-4 mt-3" style="height:150px">
                        <div class="col-12"><h1 style="color:#fff;font-weight:800;">ศรีษะ</h1></div>
                        <div class="col-12" style="height:120px;">
                            <div class="owl-carousel" id="owl-demo3">

                                @foreach($marketItem as $Itme)
                                    @if($Itme->item_type == "hair")
                                        <div class="item" style="height: 120px;">
                                            <img class="img-ownerItem" src="{{asset('home/imgProfile/'.$Itme->GUEST_USERS_IMG) }}" />
                                            <label class="bg-shop2">
                                                <label class="img-saleItem">
                                                    @if($Itme->item_gender == "woman")
                                                        <img style="width:100%" src="{{asset('home/avatar/woman/hair/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @else
                                                        <img style="width:100%" src="{{asset('home/avatar/man/hair/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @endif
                                                </label>
                                                <span class="font-shop2"><h5 style="margin:0;">{{$Itme->item_level}}</h5></span>
                                                <span class="font-price-position p">฿{{$Itme->item_price}}</span>
                                                <span>
                                                    <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                        ฿11,400.00
                                                    </h5>
                                                </span>
                                                <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop{{$Itme->item_id}}">ซื้อเลย</label>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="btns">
                                <div class="shop-next3"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                <div class="shop-prev3"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- เสื้อผ้า -->
                    <div class="row px-4 mt-3" style="height:150px">
                        <div class="col-12"><h1 style="color:#fff;font-weight:800;">เสื้อผ้า</h1></div>
                        <div class="col-12" style="height:120px;">
                            <div class="owl-carousel" id="owl-demo4">
                                <!-- <div class="item" style="height: 120px;">
                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                    <label class="bg-shop2">
                                        <label class="img-saleItem">
                                            <img style="width:100%" src="{{asset('home/avatar/man/clothes/c05.svg') }}" data-toggle="popover" data-placement="bottom">
                                        </label>
                                        <span class="font-shop2"><h5 style="margin:0;">5</h5></span>
                                        <span class="font-price-position p">฿9,000.00</span>
                                        <span>
                                            <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                ฿11,400.00
                                            </h5>
                                        </span>
                                        <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                    </label>
                                </div> -->

                                @foreach($marketItem as $Itme)
                                    @if($Itme->item_type == "clothes")
                                        <div class="item" style="height: 120px;">
                                            <img class="img-ownerItem" src="{{asset('home/imgProfile/'.$Itme->GUEST_USERS_IMG) }}" />
                                            <label class="bg-shop2">
                                                <label class="img-saleItem">
                                                    @if($Itme->item_gender == "woman")
                                                        <img style="width:100%" src="{{asset('home/avatar/woman/clothes/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @else
                                                        <img style="width:100%" src="{{asset('home/avatar/man/clothes/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @endif
                                                </label>
                                                <span class="font-shop2"><h5 style="margin:0;">{{$Itme->item_level}}</h5></span>
                                                <span class="font-price-position p">฿{{$Itme->item_price}}</span>
                                                <span>
                                                    <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                        ฿11,400.00
                                                    </h5>
                                                </span>
                                                <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop{{$Itme->item_id}}">ซื้อเลย</label>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="btns">
                                <div class="shop-next4"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                <div class="shop-prev4"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- อาวุธ -->
                    <div class="row px-4 mt-3" style="height:150px">
                        <div class="col-12"><h1 style="color:#fff;font-weight:800;">อาวุธ</h1></div>
                        <div class="col-12" style="height:120px;">
                            <div class="owl-carousel" id="owl-demo5">
                                <!-- <div class="item" style="height: 120px;">
                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                    <label class="bg-shop2">
                                        <label class="img-saleItem">
                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s01.svg') }}" data-toggle="popover" data-placement="bottom">
                                        </label>
                                        <span class="font-shop2"><h5 style="margin:0;">5</h5></span>
                                        <span class="font-price-position p">฿9,000.00</span>
                                        <span>
                                            <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                ฿11,400.00
                                            </h5>
                                        </span>
                                        <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                    </label>
                                </div> -->

                                @foreach($marketItem as $Itme)
                                    @if($Itme->item_type == "weapon")
                                        <div class="item" style="height: 120px;">
                                            <img class="img-ownerItem" src="{{asset('home/imgProfile/'.$Itme->GUEST_USERS_IMG) }}" />
                                            <label class="bg-shop2">
                                                <label class="img-saleItem">
                                                    @if($Itme->item_gender == "woman")
                                                        <img style="width:100%" src="{{asset('home/avatar/woman/weapon/sword/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @else
                                                        <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                    @endif
                                                </label>
                                                <span class="font-shop2"><h5 style="margin:0;">{{$Itme->item_level}}</h5></span>
                                                <span class="font-price-position p">฿{{$Itme->item_price}}</span>
                                                <span>
                                                    <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                        ฿11,400.00
                                                    </h5>
                                                </span>
                                                <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop{{$Itme->item_id}}">ซื้อเลย</label>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="btns">
                                <div class="shop-next5"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                <div class="shop-prev5"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                            </div>
                        </div>
                    </div>

                    <!-- ไอเทมพิเศษ -->
                    <div class="row px-4 mt-3" style="height:150px">
                        <div class="col-12"><h1 style="color:#fff;font-weight:800;">ไอเทมพิเศษ</h1></div>
                        <div class="col-12" style="height:120px;">
                            <div class="owl-carousel" id="owl-demo6">

                                <!-- <div class="item" style="height: 120px;">
                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                    <label class="bg-shop2">
                                        <label class="img-saleItem">
                                            <img style="width:100%" src="{{asset('home/avatar/man/other/armor/a01.svg') }}" data-toggle="popover" data-placement="bottom">
                                        </label>
                                        <span class="font-shop2"><h5 style="margin:0;">5</h5></span>
                                        <span class="font-price-position p">฿9,000.00</span>
                                        <span>
                                            <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                ฿11,400.00
                                            </h5>
                                        </span>
                                        <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                    </label>
                                </div> -->

                                @foreach($marketItem as $Itme)
                                    @if($Itme->item_type == "other")
                                        <div class="item" style="height: 120px;">
                                            <img class="img-ownerItem" src="{{asset('home/imgProfile/'.$Itme->GUEST_USERS_IMG) }}" />
                                            <label class="bg-shop2">
                                                <label class="img-saleItem">
                                                    @if($Itme->item_gender == "woman")
                                                        @if($Itme->item_other == "armor")
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/armor/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "crown")
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/crown/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "glove")
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/glove/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "hat")
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/hat/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "shoes")
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/shoes/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @endif
                                                    @else
                                                        @if($Itme->item_other == "armor")
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/armor/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "crown")
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/crown/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "glove")
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/glove/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "hat")
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/hat/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @elseif($Itme->item_other == "shoes")
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/shoes/'.$Itme->item_img) }}" data-toggle="popover" data-placement="bottom">
                                                        @endif
                                                    @endif
                                                </label>
                                                <span class="font-shop2"><h5 style="margin:0;">{{$Itme->item_level}}</h5></span>
                                                <span class="font-price-position p">฿{{$Itme->item_price}}</span>
                                                <span>
                                                    <h5 class="font-price2-position" style="margin:0;color: #b2b2b2;text-decoration:line-through;">
                                                        ฿11,400.00
                                                    </h5>
                                                </span>
                                                <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop{{$Itme->item_id}}">ซื้อเลย</label>
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="btns">
                                <div class="shop-next6"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                <div class="shop-prev6"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@foreach($marketItem as $key=>$itemModal)
    <div class="modal fade" id="shop{{$itemModal->item_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title"  style="font-weight:800;" id="exampleModalLabel">ไอเทม</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>
                <form action="{{route('addShoppingCart')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-ownerItem-modal" src="{{asset('home/imgProfile/'.$itemModal->GUEST_USERS_IMG) }}" />
                                <span class="name-modal-shop ml-1 p"> {{$itemModal->name}}-{{$itemModal->surname}}</span>
                            </div>
                        </div>
                        <div class="row my-2 mx-1">
                            <div class="col-2">
                                <div class="bg-modal-shop item-modal-shop">
                                    @if($itemModal->item_type == "other")
                                        @if($itemModal->item_gender == "woman")
                                            @if($itemModal->item_other == "armor")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/other/armor/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "crown")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/other/crown/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "glove")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/other/glove/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "hat")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/other/hat/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "shoes")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/other/shoes/'.$itemModal->item_img) }}">
                                            @endif
                                        @else
                                            @if($itemModal->item_other == "armor")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/man/other/armor/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "crown")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/man/other/crown/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "glove")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/man/other/glove/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "hat")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/man/other/hat/'.$itemModal->item_img) }}">
                                            @elseif($itemModal->item_other == "shoes")
                                                <img class="middle" style="width:80%" src="{{asset('home/avatar/man/other/shoes/'.$itemModal->item_img) }}">
                                            @endif
                                        @endif
                                    @elseif($itemModal->item_type == "weapon")
                                        @if($itemModal->item_gender == "woman")
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/weapon/sword/'.$itemModal->item_img) }}">
                                        @else
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/man/weapon/sword/'.$itemModal->item_img) }}">
                                        @endif
                                    @elseif($itemModal->item_type == "clothes")
                                        @if($itemModal->item_gender == "woman")
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/clothes/'.$itemModal->item_img) }}">
                                        @else
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/man/clothes/'.$itemModal->item_img) }}">
                                        @endif
                                    @elseif($itemModal->item_type == "hair")
                                        @if($itemModal->item_gender == "woman")
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/woman/hair/'.$itemModal->item_img) }}">
                                        @else
                                            <img class="middle" style="width:80%" src="{{asset('home/avatar/man/hair/'.$itemModal->item_img) }}">
                                        @endif
                                    @endif
                                    <!-- <img class="middle" style="width:80%;" src="{{asset('home/avatar/woman/other/crown/c02.png') }}" > -->
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mt-2">
                                    <span class="font-modal-shop p"><b>{{$itemModal->item_name}}</b></br> ระดับ 3 สามารถเห็น Signal Rank 5-10 ได้ เลือกลงทุนได้ 5 Signal</span>
                                </div>
                            </div>

                            <div class="col-2 my-3">
                                <div class="quantity-block ">
                                    <label class="quantity-arrow-minus"> - </label>
                                    <input class="quantity-num" type="number" value="1" min="1" max="{{$itemModal->item_amount}}" dataprice="{{$itemModal->item_price}}" disabled />
                                    <label class="quantity-arrow-plus"> + </label>
                                </div>
                            </div>

                            <div class="col-3 my-3">
                                <span class="font-price-modal" style="line-height:1.2; display:block;text-align:right;">
                                    <h4 class="total" style="margin:0;color:#ce0005;font-weight:800;">฿<span>{{$itemModal->item_price}}</span></h4>
                                    <p class="mr-2"><a style="color:#b2b2b2;text-decoration:line-through;">฿11,400 </a> (-{{$itemModal->item_discount}}%)</p>
                                    <!-- <input type="hidden" id="price" name="price" value="{{$itemModal->item_price}}"> -->
                                </span>
                            </div>
                        </div>
                    </div> 

                    <div class="modal-footer">
                        <div class="col-3">
                            <button class="btn-cancel" data-dismiss="modal">
                                <p style="margin:0;">ยกเลิก</p>
                            </button>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-3">
                            <button class="btn-submit-red">
                                <p style="margin:0;">ใส่ตระกร้า</p>
                                <input type="hidden" name="amountItem">
                                <input type="hidden" name="sumprice">
                                <input type="hidden" name="item_id" value="{{$itemModal->item_id}}">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
<input type="hidden" name="key" value="{{$key}}">

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
    content : '<div class="media">คำอธิบาย</div>'
    }); 
});
</script>

<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo1');
    owl.owlCarousel({
        loop:true,
        margin:10,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:1,
                nav:false
            },
            768:{
                items:1,
                nav:false
            },
            922:{
                items:1,
                nav:false
            },
            1280:{
                items:1,
                nav:false
            },
            1360:{
                items:1,
                nav:false
            },
            1680 :{
                items:1,
                nav:false,
                loop:true
            },
            1920:{
                items:2,
                nav:false,
                loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next1').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev1').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo2');
    owl.owlCarousel({
        // loop:true,
        margin:5,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            922:{
                items:2,
                nav:false
            },
            1280:{
                items:3,
                nav:false,
                loop:true
            },
            1360:{
                items:4,
                nav:false,
                loop:true
            },
            1680 :{
                items:5.3,
                nav:false,
                loop:true
            },
            1920:{
                items:6,
                nav:false,
                // loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next2').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev2').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>


<script>
    $(document).ready(function(){
    var owl = $('#owl-demo3');
    owl.owlCarousel({
        // loop:true,
        margin:5,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            922:{
                items:2,
                nav:false
            },
            1280:{
                items:3,
                nav:false,
                loop:true
            },
            1360:{
                items:4,
                nav:false,
                loop:true
            },
            1680 :{
                items:5.3,
                nav:false,
                loop:true
            },
            1920:{
                items:6,
                nav:false,
                // loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next3').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev3').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo4');
    owl.owlCarousel({
        // loop:true,
        margin:5,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            922:{
                items:2,
                nav:false
            },
            1280:{
                items:3,
                nav:false,
                loop:true
            },
            1360:{
                items:4,
                nav:false,
                loop:true
            },
            1680 :{
                items:5.3,
                nav:false,
                loop:true
            },
            1920:{
                items:6,
                nav:false,
                // loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next4').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev4').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo5');
    owl.owlCarousel({
        // loop:true,
        margin:5,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            922:{
                items:2,
                nav:false
            },
            1280:{
                items:3,
                nav:false,
                loop:true
            },
            1360:{
                items:4,
                nav:false,
                loop:true
            },
            1680 :{
                items:5.3,
                nav:false,
                loop:true
            },
            1920:{
                items:6,
                nav:false,
                // loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next5').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev5').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo6');
    owl.owlCarousel({
        // loop:true,
        margin:5,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            576:{
                items:2,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            922:{
                items:2,
                nav:false
            },
            1280:{
                items:3,
                nav:false,
                loop:true
            },
            1360:{
                items:4,
                nav:false,
                loop:true
            },
            1680 :{
                items:5.3,
                nav:false,
                loop:true
            },
            1920:{
                items:6,
                nav:false,
                // loop:true
            }
        }
    });
    
    // Custom Button
    $('.shop-next6').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.shop-prev6').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<!-- <script>
$(function() {
    (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");
        // var price = document.getElementById("price").value;
        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);

        // console.log(price);
        // var sumprice;
        function quantityMinus() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 1);

                // sumprice = sumprice-price;
                document.querySelector('input#amountItem').value = $quantityNum.val()
                // $('#total').html("฿"+sumprice);
                // document.querySelector('input#sumprice').value = sumprice
                console.log($quantityNum.val());
                // console.log(sumprice)
            }
        }
        function quantityPlus() {
            $quantityNum.val(+$quantityNum.val() + 1);
            
            // sumprice = price*$quantityNum.val();
            document.querySelector('input#amountItem').value = $quantityNum.val()
            // $('#total').html("฿"+sumprice);
            // document.querySelector('input#sumprice').value = sumprice
            console.log($quantityNum.val());
            // console.log(sumprice)
        }
        document.querySelector('input#amountItem').value = $quantityNum.val()
        console.log($quantityNum.val());
        // console.log(price)
        // console.log(max)

    })();
});
</script> -->

<script>
    $('.quantity-arrow-plus').on('click', function(){
        val = $(this).parent().find('.quantity-num').val();
        val = (+val + 1);
        $(this).parent().find('.quantity-num').val(val);
        $(this).parents('form').find('input[name="amountItem"]').val(val);
        dataprice = $(this).parent().find('.quantity-num').attr('dataprice');
        sum = (+dataprice)*val;
        $(this).parents('form').find('.total span').text(sum);
        $(this).parents('form').find('input[name="sumprice"]').val(sum);
        console.log(val);
        console.log(sum);
    })
    $('.quantity-arrow-minus').on('click', function(){
        val = $(this).parent().find('.quantity-num').val();
        if(val > 1){
            val = (+val - 1);
            $(this).parent().find('.quantity-num').val(val);
            $(this).parents('form').find('input[name="amountItem"]').val(val);
            dataprice = $(this).parent().find('.quantity-num').attr('dataprice');
            sum = sum-(+dataprice);
            $(this).parents('form').find('.total span').text(sum);
            $(this).parents('form').find('input[name="sumprice"]').val(sum);
            console.log(val);
            console.log(sum);
        }
    })
</script>
@endsection