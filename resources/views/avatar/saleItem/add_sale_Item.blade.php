@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')
 
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#141621; ">
                            <div class="row mt-4" >
                                <div class="col-sm-8 col-md-9 col-lg-9 col-xl-10 pt-2">
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
                                        <a href="/sale" class="avatar-link active">
                                            <h1 style="margin:0;">ไอเทมวางขาย</h1>
                                        </a>
                                    </label>
                                    <label>
                                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                                    </label>
                                    <label>
                                        <a href="/add_sale_item" class="avatar-link">
                                            <h1 style="margin:0;">เพิ่มไอเทมขาย</h1>
                                        </a>
                                    </label>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right">
                                    <a href="/simulator_trade">
                                        <label class="bg-shop">
                                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                                        </label>
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-4 mt-2">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active itemAvatar3 p" data-toggle="tab" href="#head2">ศรีษะ</a>
                                                </li>
                                                <li class="nav-item mx-2">
                                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#clothes2">เสื้อผ้า</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#weapon2">อาวุธ</a>
                                                </li>
                                                <li class="nav-item mx-2">
                                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#other2">ไอเทมพิเศษ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                    <div class="row mx-0 pb-3" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12">
                                            <div class="tab-content">
                                                <div id="head2" class="container tab-pane active">
                                                    <div class="row mt-2 row6">
                                                        <div class="col-12" style="padding-left:0;"> 
                                                            <div class="row">
                                                                <div class="col-12" >
                                                                    <p style="margin:0;color:#fff;">ทรงผม</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/man/hair_man_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/hair/man/hair_man_01.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/man/hair_man_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/hair/man/hair_man_02.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">สีตา</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/shop/eyes_man_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/eyes/man/shop/eyes_man_01.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/shop/eyes_man_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/eyes/man/shop/eyes_man_02.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/shop/eyes_man_03.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/eyes/man/shop/eyes_man_03.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/shop/eyes_man_04.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/eyes/man/shop/eyes_man_04.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">แว่นตา</p>
                                                                    <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/glasses/glasses_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/glasses/glasses_01.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/glasses/glasses_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/glasses/glasses_02.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>
                                                            <!-- <div class="row">
                                                                <span class="fontItem ml-4">ปาก</span>
                                                                <div class="col-lg-12">
                                                                    <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/mouth/m.png') }}" />
                                                                    </label>
                                                                </div>    
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="clothes2" class="container tab-pane">
                                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                                        <div class="col-12" style="padding-left:0;"> 
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ชุดไปรเวท</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/clothes_man_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/clothes_man_01.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/clothes_man_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/clothes_man_02.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/clothes_man_03.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/clothes_man_03.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/clothes_man_04.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/clothes_man_04.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ชุดซุปเปอร์ฮีโร่</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/hero/hero_man_03.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/hero/hero_man_03.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="weapon2" class="container tab-pane">
                                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                                        <div class="col-12" style="padding-left:0;"> 
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ดาบ</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/sword_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/weapon/sword_01.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/sword_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/weapon/sword_02.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/sword_03.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/weapon/sword_03.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/sword_04.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/weapon/sword_04.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <!-- <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">คฑา</p>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/wand/w01.svg') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                </div>    
                                                            </div> -->

                                                            <!-- <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ปืน</p>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/gun/g01.svg') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                </div>    
                                                            </div> -->

                                                            <!-- <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ธนู</p>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/archer/a01.svg') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                </div>    
                                                            </div> -->

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="other2" class="container tab-pane">
                                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                                        <div class="col-12" style="padding-left:0;"> 
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">มงกุฏ/หมวก</p>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/crown_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/other/crown_01.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/crown_02.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/other/crown_02.png') }}" />
                                                                    </button>
                                                                    <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/crown_03.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/other/crown_03.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">ถุงมือ</p>
                                                                    <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/gloves_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/other/gloves_01.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">เสื้อเกราะ</p>
                                                                    <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/armor_01.png'">
                                                                        <img class="picture" src="{{asset('home/avatar/other/armor_01.png') }}" />
                                                                    </button>
                                                                </div>    
                                                            </div>

                                                            <!-- <div class="row">
                                                                <div class="col-12">
                                                                    <p style="margin:0;color:#fff;">รองเท้า</p>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s01.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s02.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s03.png') }}" />
                                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                                    </label>
                                                                </div>    
                                                            </div> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6" >
                                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12 mt-2">
                                            <div class="font-sale1"><p style="margin:0">รายละเอียด</p></div>
                                            
                                            <div class="row" >
                                                <div class="col-3">
                                                    <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                        <img id="saleItem" class="picture2" src="{{asset('home/avatar/icon/sale.png') }}" />
                                                    </label>
                                                </div>

                                                <div class="col-3 text-center" style="padding:0;margin-top:28px;">
                                                    <div class="quantity-block2 ">
                                                        <button class="quantity-arrow-minus2"> - </button>
                                                        <input class="quantity-num2 h5" type="number" value="1" min="1"  />
                                                        <button class="quantity-arrow-plus2"> + </button>
                                                    </div>
                                                </div>

                                                <div class="col-5 ">
                                                    <label class="labelInputAvatar my-4">
                                                        <span class="symbol1"><h4 style="margin:0">฿</h4></span>
                                                        <input type="text" class="input-avatar h6" placeholder="ตั้งราคาไอเทม">
                                                    </label>
                                                </div>
                                                <div class="col-1 my-4 py-1 text-center" style="padding:0;">
                                                    <img style="width:50%;cursor:pointer;" src="{{asset('icon/trash.svg') }}" />
                                                </div>
                                            </div>

                                            <div class="row mx-0 pb-4" >
                                                <div class="col-6 mt-5">
                                                    <button class="itemAvatar4">
                                                        <p style="margin:0;color:#000;font-weight:800;">ยกเลิกการขาย</p>
                                                    </button>
                                                </div>
                                                <div class="col-6 mt-5 text-right">
                                                    <button type="submit" class="btn-avatar">
                                                        <p style="margin:0;color:#000;font-weight:800;">เปิดการขาย</p>
                                                    </button>
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
    content : '<div class="mediaPopover popover1">ตัวอย่างนี้เป็นการกำหนดให้ข้อความตัดอัตโนมัติเมื่อยาวเกินกว่าขอบเขตการแสดงผล โดยใช้ css ในการตัดด้วยคำสั่ง overflow</div>'
    }); 
});
</script>




<script>
$(function() {
(function quantityProducts() {
  var $quantityArrowMinus = $(".quantity-arrow-minus2");
  var $quantityArrowPlus = $(".quantity-arrow-plus2");
  var $quantityNum = $(".quantity-num2");
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