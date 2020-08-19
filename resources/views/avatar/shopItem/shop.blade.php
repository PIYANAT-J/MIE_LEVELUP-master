@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
 
        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #000;">
            <div class="row">
                <div class="col-lg-1"></div>
                @if(Auth::user()->updateData == 'true')
                    @foreach($guest_user as $USER)
                        <div class="col-lg-10 mb-3 pb-2" style="background-color: #000;">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right pr-2">
                                    <img class="sidebar-pic2" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point2 pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin2 pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-5 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                            </div>
                            <div class="col-7 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                        <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point2 pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin2 pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
                <a href="{{ route('Avatar') }}" style="width: 100%;"><button class="btn-sidebar2 active"><i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)</button></a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar2"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวตนแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar2"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a>
            </div>
        </div>
        <!-- sidebar -->
        <!-- shop -->
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-lg-9" style="background-color:#141621; ">
                            <div class="row mt-4 px-4" >
                                <div class="col-6 " style="color:#fff;">
                                    <a href="/avatar"class="avatar-link active"> Avatar</a>
                                    <a class="avatar-link" style="margin: 0 8px;"> > </a>
                                    <a href="/shop" class="avatar-link" style="font-size:1em;">ตลาดซื้อขาย</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="/simulator_trade"><label class="bg-shop">
                                        <div style="font-family:myfont1;font-size:1em;color:#fff;">Simulator Trade</div> 
                                    </label></a>
                                    <a href="/sale"><label class="labelshop bg-shop">
                                        <div style="font-family:myfont1;font-size:1em;color:#fff;"><img style="width:1em;margin-right:10px;" src="{{asset('icon/shopping-bag.svg') }}"/>ประกาศขาย</div> 
                                    </label></a>
                                </div>
                            </div>
                            
                            <div class="row px-4">
                                <div class="col-lg-12">
                                    <div class="owl-carousel" id="owl-demo1">
                                        <div class="item" >
                                            <img class="bg-shop1" src="{{asset('home/avatar/bg.png') }}">
                                            <img class="img-shop1" src="{{asset('home/avatar/man/other/crown/c02.png') }}">
                                            <span class="font-head-shop1">RARE ITEM</span>
                                            <span class="font-detail-shop1">ไอเทมพิเศษ หายาก มากที่สุดในตอนนี้รีบคว้ามามาครอบครองเลย</span>
                                            <label class="btn-shop1" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                        </div>

                                        <div class="item" >
                                            <img class="bg-shop1" src="{{asset('home/avatar/bg.png') }}">
                                            <img class="img-shop1" src="{{asset('home/avatar/man/weapon/sword/s01.svg') }}">
                                            <span class="font-head-shop1">RARE ITEM</span>
                                            <span class="font-detail-shop1">ไอเทมพิเศษ หายาก มากที่สุดในตอนนี้รีบคว้ามามาครอบครองเลย</span>
                                            <label class="btn-shop1" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                        </div>

                                        <div class="item" >
                                            <img class="bg-shop1" src="{{asset('home/avatar/bg.png') }}">
                                            <img class="img-shop1" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}">
                                            <span class="font-head-shop1">RARE ITEM</span>
                                            <span class="font-detail-shop1">ไอเทมพิเศษ หายาก มากที่สุดในตอนนี้รีบคว้ามามาครอบครองเลย</span>
                                            <label class="btn-shop1" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                        </div>
                                    </div>
                                    <div class="btns">
                                        <div class="shop-next1"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                        <div class="shop-prev1"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-4 pt-4 mb-3 pb-3" style="background-color: #202433;border-radius: 6px;">
                                <div class="col-lg-12">
                                    <div class="row px-4" style="height:190px">
                                        <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">แนะนำ</div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel" id="owl-demo2">
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/crown/c02.png') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">5</span>
                                                    <span class="font-price font-price-position">฿9,000.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿11,400.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_1.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/clothes/c05.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">10</span>
                                                    <span class="font-price font-price-position">฿1,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿1,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿11,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿12,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/armor/a01.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿32,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿38,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="shop-next2"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                                <div class="shop-prev2"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row px-4" style="height:190px">
                                        <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">ศรีษะ</div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel" id="owl-demo3">
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_1.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/hair/h01.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">5</span>
                                                    <span class="font-price font-price-position">฿9,000.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿11,400.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/hair/h02.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">10</span>
                                                    <span class="font-price font-price-position">฿1,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿1,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/hair/h03.svg') }}" data-toggle="popover" data-placement="bottom"> 
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿11,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿12,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/hair/h01.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/hair/h02.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position">ซื้อเลย</label>
                                                </div>
                                                
                                            </div>
                                            <div class="btns">
                                                <div class="shop-next3"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                                <div class="shop-prev3"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row px-4" style="height:190px">
                                        <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">เสื้อผ้า</div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel" id="owl-demo4">
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/clothes/c08.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">5</span>
                                                    <span class="font-price font-price-position">฿9,000.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿11,400.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/clothes/c06.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">10</span>
                                                    <span class="font-price font-price-position">฿1,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿1,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/clothes/c07.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿11,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿12,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/clothes/c05.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/clothes/c04.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                            </div>
                                            <div class="btns">
                                                <div class="shop-next4"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                                <div class="shop-prev4"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row px-4" style="height:190px">
                                        <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">อาวุธ</div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel" id="owl-demo5">
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_1.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s01.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">5</span>
                                                    <span class="font-price font-price-position">฿9,000.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿11,400.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">10</span>
                                                    <span class="font-price font-price-position">฿1,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿1,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿11,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿12,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/weapon/sword/s04.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/weapon/sword/s04.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                            </div>
                                            <div class="btns">
                                                <div class="shop-next5"><img class="middle" style="width:1em" src="{{asset('icon/next.svg') }}" /></div>
                                                <div class="shop-prev5"><img class="middle" style="width:1em" src="{{asset('icon/prev.svg') }}" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row px-4" style="height:190px">
                                        <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">ไอเทมพิเศษ</div>
                                        <div class="col-lg-12">
                                            <div class="owl-carousel" id="owl-demo6">
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_2.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/armor/a01.svg') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">5</span>
                                                    <span class="font-price font-price-position">฿9,000.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿11,400.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/crown/c03.png') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">10</span>
                                                    <span class="font-price font-price-position">฿1,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿1,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_6.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/crown/c02.png') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿11,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿12,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>

                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_8.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/man/other/glove/g01.png') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
                                                </div>
                                                
                                                <div class="item">
                                                    <label class="bg-shop2"></label>
                                                    <img class="img-ownerItem" src="{{asset('dist/images/person_7.jpg') }}" />
                                                    <img class="img-saleItem" src="{{asset('home/avatar/woman/other/crown/c01.png') }}" data-toggle="popover" data-placement="bottom">
                                                    <span class="font-shop2">3</span>
                                                    <span class="font-price font-price-position">฿22,500.00</span>
                                                    <span class="font-price2 font-price2-position"><b style="color: #b2b2b2;text-decoration:line-through;">฿18,700.00 </b> (-37%)</span>
                                                    <label class="btn-shop2 btn-shop-position" data-toggle="modal" data-target="#shop">ซื้อเลย</label>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  style="color: #000;font-family:myfont;font-size:1.2em;" id="exampleModalLabel">ไอเทม</h4>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>
            
            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-ownerItem-modal" src="{{asset('dist/images/person_5.jpg') }}" />
                        <span class="name-modal-shop ml-1"> ชื่อ-นามสกุล</span>
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
                            <span class="font-modal-shop"><b>มงกุฏ</b></br> ระดับ 3 สามารถเห็น Signal Rank 5-10 ได้ เลือกลงทุนได้ 5 Signal</span>
                        </div>
                    </div>

                    <div class="col-2 my-3">
                        <div class="quantity-block ">
                            <button class="quantity-arrow-minus"> - </button>
                            <input class="quantity-num" type="number" value="1" min="1"  />
                            <button class="quantity-arrow-plus"> + </button>
                        </div>
                    </div>

                    <div class="col-3 my-3">
                        <span class="font-price-modal" style="line-height:1.2; display:block;text-align:right;">
                            <b class="font-price-modal2">฿9,000.00</b></br>
                            <b class="mr-2" style="color: font-size: 1em; color:#b2b2b2;text-decoration:line-through;">฿11,400 </b> (-37%)
                        </span>
                    </div>
                </div>
            </div> 

            <div class="modal-footer">
                <div class="col-3">
                    <button class="btn-cancel" data-dismiss="modal">ยกเลิก</button>
                </div>
                <div class="col-6"></div>
                <div class="col-3">
                    <button class="btn-submit-modal-red">ใส่ตระกร้า
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
            600:{
                items:1,
                nav:false
            },
            730:{
                items:1,
                nav:false
            },
            980:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false
            },
            1280:{
                items:1,
                nav:false
            },
            1600:{
                items:1,
                nav:false
            },
            1680 :{
                items:1,
                nav:false,
                loop:true
            },
            1920:{
                items:1,
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
            600:{
                items:1.8,
                nav:false
            },
            700:{
                items:2,
                nav:false
            },
            980:{
                items:3,
                nav:false
            },
            1000:{
                items:3.5,
                nav:false,
                loop:true
            },
            1280:{
                items:4,
                nav:false,
                loop:true
            },
            1600:{
                items:5,
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
            600:{
                items:1.8,
                nav:false
            },
            700:{
                items:2,
                nav:false
            },
            980:{
                items:3,
                nav:false
            },
            1000:{
                items:3.5,
                nav:false,
                loop:true
            },
            1280:{
                items:4,
                nav:false,
                loop:true
            },
            1600:{
                items:5,
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
            600:{
                items:1.8,
                nav:false
            },
            700:{
                items:2,
                nav:false
            },
            980:{
                items:3,
                nav:false
            },
            1000:{
                items:3.5,
                nav:false,
                loop:true
            },
            1280:{
                items:4,
                nav:false,
                loop:true
            },
            1600:{
                items:5,
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
            600:{
                items:1.8,
                nav:false
            },
            700:{
                items:2,
                nav:false
            },
            980:{
                items:3,
                nav:false
            },
            1000:{
                items:3.5,
                nav:false,
                loop:true
            },
            1280:{
                items:4,
                nav:false,
                loop:true
            },
            1600:{
                items:5,
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
            600:{
                items:1.8,
                nav:false
            },
            700:{
                items:2,
                nav:false
            },
            980:{
                items:3,
                nav:false
            },
            1000:{
                items:3.5,
                nav:false,
                loop:true
            },
            1280:{
                items:4,
                nav:false,
                loop:true
            },
            1600:{
                items:5,
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