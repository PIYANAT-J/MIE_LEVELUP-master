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
                                    <a href="/shop" class="avatar-link active" style="font-size:1em;">ตลาดซื้อขาย</a>
                                    <a class="avatar-link" style="margin: 0 8px;"> > </a>
                                    <a href="/sale" class="avatar-link" style="font-size:1em;">ขายไอเทม</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="/simulator_trade"><label class="bg-shop">
                                        <div style="font-family:myfont1;font-size:1em;color:#fff;">Simulator Trade</div> 
                                    </label></a>
                                    <a href="/add_sale_item"><label class="labelshop bg-shop">
                                        <div style="font-family:myfont1;font-size:1em;color:#fff;">+ เพิ่มไอเทมขาย</div> 
                                    </label></a>
                                </div>
                            </div>

                            <div class="row mx-2 mb-4">
                                <div class="col-lg-6">
                                    <div class="row mx-0 pb-3 row7" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-lg-12">
                                            <!-- ทรงผม -->
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ทรงผม</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/hair/h01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/hair/h02.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/hair/h03.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- สีตา -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">สีตา</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/eyes/e01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/eyes/e02.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/eyes/e03.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/eyes/e04.svg') }}" />
                                                        <span class="font-sale2">2</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- แว่นตา -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">แว่นตา</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/glasses/g01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ชุดไปรเวท -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ชุดไปรเวท</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/clothes/c01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/clothes/c02.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/clothes/c03.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/clothes/c04.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ชุดซุปเปอร์ฮีโร่ -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ชุดซุปเปอร์ฮีโร่</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/clothes/c05.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ดาบ-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ดาบ</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/sword/s01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/sword/s02.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/sword/s03.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/sword/s04.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- คฑา-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">คฑา</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/wand/w01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ปืน-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ปืน</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/gun/g01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ธนู-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ธนู</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/weapon/archer/a01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- มงกุฏ/หมวก -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">มงกุฏ/หมวก</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem active">
                                                        <img class="picture2" src="{{asset('home/avatar/man/other/crown/c01.png') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/man/other/crown/c02.png') }}" />
                                                        <span class="font-sale2">3</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/man/other/crown/c03.png') }}" />
                                                        <span class="font-sale2">2</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ถุงมือ -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">ถุงมือ</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/other/glove/g01.png') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- เสื้อเกราะ -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">เสื้อเกราะ</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/other/armor/a01.svg') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- รองเท้า -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-sale1">รองเท้า</div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/other/shoes/s01.png') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/other/shoes/s02.png') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <span class="font-sale3">Sold Out</span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/woman/other/shoes/s03.png') }}" />
                                                        <span class="font-sale2">1</span>
                                                        <!-- <span class="font-sale3">Sold Out</span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="background-color:#202433;border-radius: 6px;">
                                    <div class="row" >
                                        <div class="col-lg-12">
                                            <div class="font-sale1">รายละเอียด</div>
                                        </div>  
                                    </div>
                                    <div class="row mx-0" >    
                                        <div class="col-12" style="padding:0;">
                                            <label class="labelItem bgItem">
                                                <img class="picture2" src="{{asset('home/avatar/man/other/crown/c01.png') }}" />
                                                <span class="font-sale2">1</span>
                                                <!-- <span class="font-sale3">Sold Out</span> -->
                                            </label> 
                                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                <label style="font-weight: 700;">มงกุฏ ระดับ 1 </label></br>
                                                <label>สามารถเห็น Signal Rank 100-150 ได้</label></br>
                                                <label>เลือกลงทุนได้ 3 Signal</label>
                                            </label>
                                        </div>

                                        <div class="col-lg-12 px-3 mt-3" style="background-color:#191b29;">
                                            <div class="row ">
                                                <div class="col-6 main">
                                                    <span class=" font-sale5 inner mt-1">
                                                        <label>เหลือ (จำนวน)</label></br>
                                                        <label style="font-family:myfont;font-size:1.5em;">1 /</label>&nbsp;<label style="font-family:myfont;font-size:1.5em;color:#ce0005;">5</label>
                                                     </span>   
                                                </div>
                                                <div class="col-6 text-right">
                                                    <label style="font-family:myfont;font-size:1.8em;color:#fff;" >฿9,000.00</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center my-3">
                                            <label class="itemAvatar2">ยกเลิกการขาย</label>
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