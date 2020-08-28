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
                    <div class="col-lg-10 my-3 pt-2">
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
        <div class="col-lg-9" style="background-color:#141621; ">
            <div class="row mt-4 px-4" >
                <div class="col-lg-6 " style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">Avatar</div>
                <div class="col-lg-6 text-right">
                    <a href="/simulator_trade"><label class="bg-shop">
                        <div style="font-family:myfont1;font-size:1em;color:#fff;">Simulator Trade</div> 
                    </label></a>
                    <a href="shop"><label class="bg-shop">
                        <div style="font-family:myfont1;font-size:1em;color:#fff;"><img class="iconShop" src="{{asset('icon/shop.png') }}"/>ตลาดซื้อขาย</div> 
                    </label></a>
                </div>
            </div>

            <!-- เลือกเพศ -->

            <div id="gender" class="custom01 px-4">
                <div class="row">
                    <div class="col-1">
                        <input type="radio" name="gender2" value="man" id="man">
                        <label for="man" style="font-family:myfont1;color:#fff;font-size:1em;">ชาย</label>
                    </div>
                    <div class="col-1">
                        <input type="radio" name="gender2" value="woman" id="women">
                        <label for="women" style="font-family:myfont1;color:#fff;font-size:1em;">หญิง</label>
                    </div>
                </div>
            </div>

            <!-- ตัวละครชาย -->
            <div class="row mx-4 manlist">
                <div class="col-lg-4 mt-2">
                    <div class="row" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-1"></div>
                        <div class="col-10 py-3">
                            <div class="text-right">
                                <div class="item">
                                    <img class="center"  style="height:415px;" src="{{asset('home/avatar/character/man.png') }}" />
                                </div>
                                <img class="mt-4" style="width:15%" src="{{asset('home/avatar/icon/reset.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ไอเทม -->
                <div class="col-lg-8 mt-2">
                    <div class="row ml-2">
                        <div class="col-lg-12">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active itemAvatar" data-toggle="tab" href="#head">ศรีษะ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#clothes">เสื้อผ้า</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#weapon">อาวุธ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#other">ไอเทมพิเศษ</a>
                                </li>
                            </ul>
                        </div>
                    </div> 

                    <div class="tab-content">
                        <div id="head" class="container tab-pane active">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ทรงผม</span>
                                        <div class="col-lg-12">                                                                            
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h04.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h05.svg') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">สีตา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e04.svg') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <span class="fontItem ml-4">แว่นตา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/glasses/g01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/glasses/g01.svg') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="clothes" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ชุดไปเวท</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c04.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ชุดซุปเปอร์ฮีโร่</span>
                                        <div class="col-lg-12">
                                        <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="weapon" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ดาบ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">คฑา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/wand/w.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ปืน</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/gun/g.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ธนู</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/archer/a.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="other" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">มงกุฏ/หมวก</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/crown/c01.png') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/crown/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ถุงมือ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/glove/g.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">เสื้อเกราะ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/armor/a.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">รองเท้า</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/shoes/s.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ตัวละครหญิง -->
            <div class="row mx-4 womanlist">
                <div class="col-lg-4 mt-2">
                    <div class="row" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-1"></div>
                        <div class="col-10 py-3">
                            <div class="text-right">
                                <div class="item">
                                    <img class="center"  style="width:13.5em;" src="{{asset('home/avatar/character/woman.png') }}" />
                                </div>
                                <img class="mt-4" style="width:15%" src="{{asset('home/avatar/icon/reset.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ไอเทม -->
                <div class="col-lg-8 mt-2">
                    <div class="row ml-2">
                        <div class="col-lg-12">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active itemAvatar" data-toggle="tab" href="#head2">ศรีษะ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#clothes2">เสื้อผ้า</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#weapon2">อาวุธ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar" data-toggle="tab" href="#other2">ไอเทมพิเศษ</a>
                                </li>
                            </ul>
                        </div>
                    </div> 

                    <div class="tab-content">
                        <div id="head2" class="container tab-pane active">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ทรงผม</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">สีตา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e04.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <span class="fontItem ml-4" >แว่นตา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="clothes2" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ชุดไปเวท</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c04.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ชุดซุปเปอร์ฮีโร่</span>
                                        <div class="col-lg-12">
                                        <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="weapon2" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">ดาบ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s01.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s02.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s03.svg') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">คฑา</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/wand/w.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ปืน</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/gun/g.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ธนู</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/archer/a.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="other2" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2">มงกุฏ/หมวก</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/crown/c01.png') }}" />
                                            </label>
                                            <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/crown/c.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">ถุงมือ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/glove/g.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">เสื้อเกราะ</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/armor/a.png') }}" />
                                            </label>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4">รองเท้า</span>
                                        <div class="col-lg-12">
                                            <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s.png') }}" />
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-lg-11 text-right">
                    <button type="submit" class="btn-avatar">บันทึก</button>
                </div>
                <div class="col-lg-1"></div>
            </div>

            <div class="row">
                <div class="col-lg-12" style="font-family:myfont1;color:#fff;font-size:1.2em;font-weight:800;">มินิเกม</div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="owl-carousel" id="owl-demo1">
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game2.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game3.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game4.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game5.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game6.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game7.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game8.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game9.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game10.png') }}">
                        </div>
                    </div>
                    <div class="btns">
                        <div class="nav-next1"><img class="middle" style="width:0.5em" src="{{asset('icon/next.svg') }}" /></div>
                        <div class="nav-prev1"><img class="middle" style="width:0.5em" src="{{asset('icon/prev.svg') }}" /></div>
                    </div>

                    <!-- <img class="minigame-img" src="{{asset('section/picture_game/game.png') }}">
                    <img class="minigame-img" src="{{asset('section/picture_game/game2.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game3.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game4.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game5.png') }}">
                    <img class="minigame-img" src="{{asset('section/picture_game/game6.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game7.png') }}">
                         -->
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
$(document).ready(function() {
  $('.manlist').show();
  $('.womanlist').hide();
  $('input:radio[name="gender2"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'man')
	{
    $('.manlist').show();
    $('.womanlist').hide();
		}
   else {
    $('.womanlist').show();
    $('.manlist').hide();
   }
	}
);
}
);
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo1');
    owl.owlCarousel({
        loop:true,
        margin:5,
        navigation : false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            700:{
                items:3
            },
            760:{
                items:4
            },
            980:{
                items:4
            },
            1000:{
                items:5
            },
            1280:{
                items:5
            },
            1600:{
                items:7
            },
            1680 :{
                items:9
            },
            1920:{
                items:10
            }
        }
    });
    
    // Custom Button
    $('.nav-next1').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.nav-prev1').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>
@endsection