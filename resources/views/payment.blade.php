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
        <!-- shop -->
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-lg-9" style="background-color:#141621; ">
                            <div class="row mt-4 px-4" >
                                <div class="col-12 " style="color:#fff;">
                                    <a href="/avatar"class="avatar-link active"> Avatar</a>
                                    <a class="avatar-link" style="margin: 0 8px;"> > </a>
                                    <a href="/shopping_cart" class="avatar-link active">ตะกร้าสินค้า</a>
                                    <a class="avatar-link" style="margin: 0 8px;"> > </a>
                                    <a href="/payment" class="avatar-link">ชำระเงิน</a>
                                </div>
                            </div>

                            <div class="row mx-2 mb-4 mt-2">
                                <div class="col-lg-12"> 
                                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-lg-12 mt-1">
                                            <div class="row mx-2 pb-2" style="font-family:myfont;font-size:1.5em;color:#fff;border-bottom:1px solid #fff;">ชำระเงิน</div>
                                            <div class="row row8">
                                                <div class="col-lg-12">
                                                    <div class="row mx-2 mt-3" style="border-bottom:1px solid rgb(255, 255, 255,0.3);">  
                                                        <div class="col-7" style="padding:0;">
                                                            <label class="labelItem bgItem">
                                                                <img class="picture2" src="{{asset('home/avatar/man/other/crown/c01.png') }}" />
                                                            </label> 
                                                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                                <label style="font-weight: 700;">มงกุฏ ระดับ 1 </label></br>
                                                                <label>สามารถเห็น Signal Rank 100-150 ได้</label></br>
                                                                <label>เลือกลงทุนได้ 3 Signal</label>
                                                            </label>
                                                        </div>

                                                        <div class="col-2 my-4 text-center" style="padding:0;">
                                                            <label style="font-family:myfont;font-size:1.5em;color:#ffffff">1 ชิ้น</label>
                                                        </div>

                                                        <div class="col-3 my-3">
                                                            <span class="font-price3" style="line-height: 0.3; display:block;text-align:right;">
                                                                <b class="font-price">฿1,000.00</b></br>
                                                                <b class="mr-2" style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </b> (-37%)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mx-2 mt-3" style="border-bottom:1px solid rgb(255, 255, 255,0.3);">  
                                                        <div class="col-7" style="padding:0;">
                                                            <label class="labelItem bgItem">
                                                                <img class="picture2" src="{{asset('home/avatar/man/other/crown/c02.png') }}" />
                                                            </label> 
                                                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                                <label style="font-weight: 700;">มงกุฏ ระดับ 2 </label></br>
                                                                <label>สามารถเห็น Signal Rank 50-100 ได้</label></br>
                                                                <label>เลือกลงทุนได้ 5 Signal</label>
                                                            </label>
                                                        </div>

                                                        <div class="col-2 my-4 text-center" style="padding:0;">
                                                            <label style="font-family:myfont;font-size:1.5em;color:#ffffff">1 ชิ้น</label>
                                                        </div>

                                                        <div class="col-3 my-3">
                                                            <span class="font-price3" style="line-height: 0.3; display:block;text-align:right;">
                                                                <b class="font-price">฿5,000.00</b></br>
                                                                <b class="mr-2" style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </b> (-37%)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3 py-2" style="background-color:#191b29;">
                                                <div class="col-lg-12">
                                                    <div class="row mx-0">
                                                        <label style="font-family:myfont;font-size:1.5em;color:#fff;">ที่อยู่ในการออกใบเสร็จ</label>
                                                        <label class="ml-2" style="font-family:myfont1;font-size:1.4em;color:#ce0005;cursor:pointer;border-bottom:1px solid #ce0005;height:1.2em;">เปลี่ยน</label>
                                                    </div>
                                                    <div class="row mx-3">
                                                        <div class="col-lg-6" >
                                                            <label class="font-payment-avatar">
                                                                <label>ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</label>
                                                            </label>
                                                            <label class="font-payment-avatar2 ml-2">
                                                                <label>สมหญิง รักดี (5-1005-00148-76-6)<br>(+66) 081-441-9585</label>
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6" >
                                                            <label class="font-payment-avatar">
                                                                <label>ที่อยู่</label><br>
                                                            </label>
                                                            <label class="font-payment-avatar3 ml-2">
                                                                <label>52/2 ซ.เจริญนคร 78 ถนน เจริญนคร บุคคโลเขตธนบุรี จังหวัดกรุงเทพมหานคร 10600
                                                                    <label style="color:#0ce63e;">(ที่อยู่หลัก)</label>
                                                                </label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <div class="row mx-0">
                                                        <label style="font-family:myfont;font-size:1.5em;color:#fff;">วิธีชำระเงิน</label>
                                                    </div>
                                                    <div class="row mx-0 " >
                                                        <label  class="bgPayment labellogo mx-2">
                                                            <img class="center logoT10" src="{{asset('home/logo/t10.svg') }}" >
                                                            <label class="font-payment-avatar fontLogoPosition" style="color:#0b0e17;">T10 วอลเล็ท</label>
                                                            <label class="font-payment-avatar fontdetailPosition" style="color:#a0a0a0;font-size:1.1em;">ฟรีค่าธรรมเนียม</label>
                                                            <!-- <div>
                                                                <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                            </div> -->
                                                        </label>
                                                        <label  class="bgPayment labellogo mx-2">
                                                            <img class="center logoT10" src="{{asset('home/logo/credit-icon.svg') }}" >
                                                            <label class="font-payment-avatar fontLogoPosition2" style="color:#0b0e17;">บัตรเครดิต/บัตรเดบิต</label>
                                                            <img class="fontdetailPosition2" src="{{asset('home/logo/security-grey.svg') }}" >
                                                            <!-- <div>
                                                                <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                            </div> -->
                                                        </label>
                                                        <label  class="bgPayment labellogo mx-2">
                                                            <img class="center logoT10" src="{{asset('home/logo/mobile-icon.svg') }}" >
                                                            <label class="font-payment-avatar fontLogoPosition" style="color:#0b0e17;">โมบายแบงค์กิ้ง</label>
                                                            <label class="font-payment-avatar fontdetailPosition3" style="color:#a0a0a0;font-size:1.1em;">รอยืนยัน 45 นาที หลังชำระเงิน</label>
                                                            <!-- <div>
                                                                <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                            </div> -->
                                                        </label>
                                                        <label  class="bgPayment labellogo mx-2">
                                                            <img class="center logoT10" src="{{asset('home/logo/bank-icon.svg') }}" >
                                                            <label class="font-payment-avatar fontLogoPosition" style="color:#0b0e17;">โอนเงินธนาคาร</label>
                                                            <label class="font-payment-avatar fontdetailPosition3" style="color:#a0a0a0;font-size:1.1em;">รอยืนยัน 45 นาที หลังชำระเงิน</label>
                                                            <!-- <div>
                                                                <img class="selectGreenPosition" src="{{asset('icon/select_green.svg') }}" >
                                                            </div> -->
                                                        </label> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-lg-6">
                                                    <div class="row" style="border-right:1px solid #455160;">
                                                        <div class="col-lg-12">
                                                            <label style="font-family:myfont;font-size:1.5em;color:#fff;">จำนวนเงิน</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="input-payment" type="text" placeholder="จำนวนเงิน">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label style="font-family:myfont;font-size:1.5em;color:#fff;">คูปอง / ส่วนลดของฉัน</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-group mb-3">
                                                                <input class="input-payment2" type="text" placeholder="ใส่โค้ดส่วนลด" aria-describedby="basic-addon2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text select-code" id="basic-addon2">เลือกโค้ดส่วนลด</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3 py-2" style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                                <div class="col-lg-12">
                                                    <div class="row mx-4" style="border-bottom:1px solid #455160">
                                                        <div class="col-lg-6"></div>
                                                        <div class="col-lg-6">
                                                            <div class="row">
                                                                <div class="col-6 text-right font-payment2">ยอดรวมสินค้า</div>
                                                                <div class="col-6 text-right font-payment2">฿ 6,000</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 text-right font-payment2">ส่วนลด</div>
                                                                <div class="col-6 text-right font-payment2">-</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 text-right font-payment2 pt-2">รวมราคาทั้งสิ้น</div>
                                                                <div class="col-6 text-right font-price" style="font-size:2.5em;">฿ 6,000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mx-4 mt-3">
                                                        <div class="col-lg-10"></div>
                                                        <div class="col-lg-2 text-right">
                                                            <label class="btn-submit-modal-red" style="text-align:center;line-height:2;cursor:pointer;">ชำระเงิน</label>
                                                        </div>
                                                    </div>
                                                </div>
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


@endsection