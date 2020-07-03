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
                                <div class="col-5 text-right pr-2">
                                    <img class="sidebar-pic2" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-7 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <button class="btn-point pb-2" style="background-color: #000;">
                                        <span class="font-point">พอยท์</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                        <i class="icon-Icon_Point"></i>
                                    </button>

                                    <button class="btn-coin pb-2" style="background-color: #000;">
                                        <span class="font-point">เหรียญ</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                        <i class="icon-Icon_Coin"></i>
                                    </button>
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
                                <button class="btn-point pb-2">
                                    <span class="font-point">พอยท์</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                    <i class="icon-Icon_Point"></i>
                                </button>

                                <button class="btn-coin pb-2">
                                    <span class="font-point">เหรียญ</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                    <i class="icon-Icon_Coin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
                <a href="{{ route('Avatar') }}" style="width: 100%;"><button class="btn-sidebar2 active"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตัวละครของฉัน (Avatar)</button></a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar2"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar2"><img class="pic4" src="{{asset('icon/rank1.svg') }}" />อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar2"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar2"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->
        <!-- update profile -->
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-lg-9" style="background-color:#141621; ">
                            <div class="row mt-4" >
                                <div class="col-lg-9 px-5" style="font-family:myfont;color:#fff;font-size:2em;">Avatar</div>
                                <div class="col-lg-3 text-right">
                                    <label class="px-2" style="font-family:myfont; color:#fff; font-size:1.5em;border: 1px solid #fff;border-radius: 6px;cursor:pointer;">ซื้อขายตลาด</label>
                                </div>
                            </div>

                            <!-- เลือกเพศ -->
                            <div class="row">
                                <div id="userKYC" class="col-lg-4 custom01 px-5" style="font-family:myfont1;">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="radio" name="kycApprove" value="noneApprove" id="noneApprove">
                                            <label for="noneApprove" style="color:#fff;font-size:1.3em;">ชาย</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="radio" name="kycApprove" value="approve" id="approve">
                                            <label for="approve" style="color:#fff;font-size:1.3em;" for="nl">หญิง</label>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>

                            <!-- ตัวละครชาย -->
                            <div class="row mx-4 noneApprovelist">
                                <div class="col-lg-4">
                                    <div class="row" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-1"></div>
                                        <div class="col-10 py-3">
                                            <div class="text-right">
                                                <div class="item">
                                                    <img class="center"  style="width:14.5em;" src="{{asset('home/avatar/character/man.png') }}" />
                                                </div>
                                                <img class="mt-4" style="width:15%" src="{{asset('home/avatar/icon/reset.svg') }}" />
                                            </div>
                                        </div>
                                        <!-- <div class="col-1"></div> -->
                                        <!-- <div class="btns">
                                                <div class="customNextBtn2"><img style="width:70%;" src="{{asset('home/avatar/icon/next.svg') }}" /></div>
                                                <div class="customPreviousBtn2"><img style="width:70%;" src="{{asset('home/avatar/icon/prev.svg') }}" /></div>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- ไอเทม -->
                                <div class="col-lg-8">
                                    <!-- <div class="noneApprovelist"> -->
                                        <div form="userKYC">
                                            <div class="row ml-2">
                                                <div class="col-lg-12">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link active itemAvatar" data-toggle="tab" href="#head">ศรีษะ</a>
                                                        </li>
                                                        <li class="nav-item mx-2">
                                                            <a class="nav-link itemAvatar" data-toggle="tab" href="#clothes">เสื้อผ้่า</a>
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
                                                                <span class="fontItem ml-4">ทรงผม</span>
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
                                                                    <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/man/hair/h.png') }}" />
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
                                                                    <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/man/eyes/e.png') }}" />
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
                                                                    <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/man/glasses/g.png') }}" />
                                                                    </label>
                                                                </div>    
                                                            </div>
                                                            <div class="row">
                                                                <span class="fontItem ml-4">ปาก</span>
                                                                <div class="col-lg-12">
                                                                    <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/man/mouth/m.png') }}" />
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
                                                                <span class="fontItem ml-4">ชุดไปเวท</span>
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
                                                                <span class="fontItem ml-4">ดาบ</span>
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
                                                                <span class="fontItem ml-4">มงกุฏ</span>
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
                                                                <span class="fontItem ml-4">หมวก</span>
                                                                <div class="col-lg-12">
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/man/other/hat/h.png') }}" />
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
                                    <!-- </div> -->
                                </div>
                            </div>

                            <!-- ตัวละครหญิง -->
                            <div class="row mx-4 approvelist">
                                <div class="col-lg-4">
                                    <div class="row" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-1"></div>
                                        <div class="col-10 py-3">
                                            <div class="text-right">
                                                <div class="item">
                                                    <img class="center"  style="width:14em;" src="{{asset('home/avatar/character/woman.png') }}" />
                                                </div>
                                                <img class="mt-4" style="width:15%" src="{{asset('home/avatar/icon/reset.svg') }}" />
                                            </div>
                                        </div>
                                        <!-- <div class="col-1"></div> -->
                                        <!-- <div class="btns">
                                                <div class="customNextBtn2"><img style="width:70%;" src="{{asset('home/avatar/icon/next.svg') }}" /></div>
                                                <div class="customPreviousBtn2"><img style="width:70%;" src="{{asset('home/avatar/icon/prev.svg') }}" /></div>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- ไอเทม -->
                                <div class="col-lg-8">
                                        <div form="userKYC">
                                            <div class="row ml-2">
                                                <div class="col-lg-12">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link active itemAvatar" data-toggle="tab" href="#head2">ศรีษะ</a>
                                                        </li>
                                                        <li class="nav-item mx-2">
                                                            <a class="nav-link itemAvatar" data-toggle="tab" href="#clothes2">เสื้อผ้่า</a>
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
                                                                <span class="fontItem ml-4">ทรงผม</span>
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
                                                            <div class="row">
                                                                <span class="fontItem ml-4">ปาก</span>
                                                                <div class="col-lg-12">
                                                                    <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/mouth/m.png') }}" />
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
                                                                <span class="fontItem ml-4">ชุดไปเวท</span>
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
                                                                <span class="fontItem ml-4">ดาบ</span>
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
                                                                <span class="fontItem ml-4">มงกุฏ</span>
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
                                                                <span class="fontItem ml-4">หมวก</span>
                                                                <div class="col-lg-12">
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/other/hat/h.png') }}" />
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
                            </div>

                            <div class="row my-3">
                                <div class="col-lg-11 text-right">
                                    <button type="submit" class="btn-avatar">บันทึก</button>
                                </div>
                                <div class="col-lg-1"></div>
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
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

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
        nav:false,
        items: 1,
        dots: false,
    });
    
    // Custom Button
    $('.customNextBtn2').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.customPreviousBtn2').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>

<script>
    $(document).ready(function() {
    $('.noneApprovelist').show();
    $('.approvelist').hide();
    $('input:radio[name="kycApprove"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == 'noneApprove')
        {
        $('.noneApprovelist').show();
        $('.approvelist').hide();
            }
    else {
        $('.approvelist').show();
        $('.noneApprovelist').hide();
    }
        }
    );
    }
    );
</script>
@endsection