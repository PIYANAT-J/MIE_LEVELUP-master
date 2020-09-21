@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')

        <!-- shop -->
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
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
                                    <div class="row px-4 mt-3" style="height:150px">
                                    <!-- แนะนำ -->
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

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                </div>

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_6.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/hair/h01.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/hair/h02.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/hair/h03.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_1.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/hair/h01.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                            <img style="width:100%" src="{{asset('home/avatar/man/hair/h02.svg') }}" data-toggle="popover" data-placement="bottom">
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

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/clothes/c06.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/clothes/c07.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
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

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_6.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/clothes/c04.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                <div class="item" style="height: 120px;">
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
                                                </div>

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_6.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s04.svg') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/weapon/sword/s04.svg') }}" data-toggle="popover" data-placement="bottom">
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

                                                <div class="item" style="height: 120px;">
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
                                                </div>

                                                <div class="item" style="height: 120px;">
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/crown/c03.png') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_6.jpg') }}" />
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/man/other/glove/g01.png') }}" data-toggle="popover" data-placement="bottom">
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
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                                    <label class="bg-shop2">
                                                        <label class="img-saleItem">
                                                            <img style="width:100%" src="{{asset('home/avatar/woman/other/crown/c01.png') }}" data-toggle="popover" data-placement="bottom">
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
                                                <div class="shop-next6"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                                <div class="shop-prev6"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            @endforeach
        @else
            <div class="col-lg-9" style="background-color:#f5f5f5;">
                <div class="row mt-4" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                        <div class="row">
                            <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br><b style="font-size: 18px;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                            </div>
                        </div>
                        <form action="{{ route('EditProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 line1 mt-2" >
                                            <input name="name" class="input-update" value="{{ Auth::user()->name }}" placeholder="ชื่อ" require></input>
                                            <input name="surname" class="input-update" value="{{ Auth::user()->surname }}" placeholder="นามสกุล" require></input>
                                            <input name="GUEST_USERS_TEL" type="text" class="input-update"  placeholder="เบอร์โทร" data-toggle="tooltip" value="{{ old('GUEST_USERS_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" maxlength="10"></input>
                                            <input name="GUEST_USERS_ID_CARD" type="text" class="input-update"  placeholder="บัตรประจำตัวประชาชน" value="{{ old('GUEST_USERS_ID_CARD') }}" minlength="13" maxlength="13" title="กรุณากรอกข้อมูลให้ครบถ้วน" require></input>
                                            
                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <div class="row mx-0">
                                                    <!-- <input id="GUEST_USERS_BIRTHDAY" name="GUEST_USERS_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="YYYY-MM-DD" value="{{ old('GUEST_USERS_BIRTHDAY') }}" title=""> -->
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit">ยืนยัน
                                                        <!-- <input name="submit" id="submit" type="hidden"> -->
                                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                        <input type="hidden" name="DATE_CREATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-5" align="center">
                                        <div id="thumb" class="thumb-profile "><img src="home/imgProfile/pic-profile.png"></div>    
                                        <input id="file_upload" style="display:none" name="GUEST_USERS_IMG" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                        <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="modal fade" id="shop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title"  style="font-weight:800;" id="exampleModalLabel">ไอเทม</h1>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <img class="img-ownerItem-modal" src="{{asset('dist/images/person_5.jpg') }}" />
                        <span class="name-modal-shop ml-1 p"> ชื่อ-นามสกุล</span>
                    </div>
                </div>
                <div class="row my-2 mx-1">
                    <div class="col-2">
                        <div class="bg-modal-shop item-modal-shop">
                            <img class="middle" style="width:80%;" src="{{asset('home/avatar/woman/other/crown/c02.png') }}" >
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mt-2">
                            <span class="font-modal-shop p"><b>มงกุฏ</b></br> ระดับ 3 สามารถเห็น Signal Rank 5-10 ได้ เลือกลงทุนได้ 5 Signal</span>
                        </div>
                    </div>

                    <div class="col-2 my-3">
                        <div class="quantity-block ">
                            <button class="quantity-arrow-minus"> - </button>
                            <input class="quantity-num h5" type="number" value="1" min="1" readonly />
                            <button class="quantity-arrow-plus"> + </button>
                        </div>
                    </div>

                    <div class="col-3 my-3">
                        <span class="font-price-modal" style="line-height:1.2; display:block;text-align:right;">
                            <h4 style="margin:0;color:#ce0005;font-weight:800;">฿9,000.00</h4>
                            <p class="mr-2"><a style="color:#b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p>
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
                        <input type="hidden" name="createAccount" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="submit" value="submit">
                    </button>
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
        loop:true,
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
                loop:true
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
        loop:true,
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
                loop:true
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
        loop:true,
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
                loop:true
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
        loop:true,
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
                loop:true
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
        loop:true,
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
                loop:true
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

<script>
$(function() {
(function quantityProducts() {
  var $quantityArrowMinus = $(".quantity-arrow-minus");
  var $quantityArrowPlus = $(".quantity-arrow-plus");
  var $quantityNum = $(".quantity-num");
  $quantityArrowMinus.click(quantityMinus);
  $quantityArrowPlus.click(quantityPlus);
  function quantityMinus() {
    if ($quantityNum.val() > 1) {
      $quantityNum.val(+$quantityNum.val() - 1);
    }
  }
  function quantityPlus() {
    $quantityNum.val(+$quantityNum.val() + 1);
  }
})();
});
</script>
@endsection