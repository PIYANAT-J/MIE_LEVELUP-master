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
                                                    <p style="margin:0;color:#fff;">ทรงผม</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/hair/woman/hair_woman_01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span>
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/hair/woman/hair_woman_03.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- สีตา -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">สีตา</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/eyes/woman/shop/eyes_woman_03.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/eyes/woman/shop/eyes_woman_02.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- แว่นตา -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">แว่นตา</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/glasses/glasses_02.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ชุดไปรเวท -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ชุดไปรเวท</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/clothes/woman/clothes_woman_01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/clothes/woman/clothes_woman_02.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ชุดซุปเปอร์ฮีโร่ -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ชุดซุปเปอร์ฮีโร่</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/hero_woman_01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ดาบ-->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ดาบ</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/weapon/sword_03.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/weapon/sword_04.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
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
                                                    <p style="margin:0;color:#fff;">มงกุฏ/หมวก</p>
                                                    <label class="labelItem bgItem active">
                                                        <img class="picture2" src="{{asset('home/avatar/other/crown_02.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/other/crown_03.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">3</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- ถุงมือ -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ถุงมือ</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/other/gloves_01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
                                                </div> 
                                            </div>

                                            <!-- เสื้อเกราะ -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">เสื้อเกราะ</p>
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/other/armor_01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>
                                                        <!-- <span class="font-sale3"><p style="margin:0;font-weight:800;">Sold Out</p></span> -->
                                                    </label>
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
                                    <div class="row mx-0" >    
                                        <div class="col-12" style="padding:0;">
                                            <label class="labelItem bgItem">
                                                <img id="crownMan" class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                                            </label> 
                                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                <p style="font-weight: 700;margin:0;">มงกุฏ ระดับ 1 </p>
                                                <p style="margin:0;">สามารถเห็น Signal Rank 100-150 ได้</p>
                                                <p style="margin:0;">เลือกลงทุนได้ 3 Signal</p>
                                            </label>
                                        </div>

                                        <div class="col-12 px-3 mt-3" style="background-color:#191b29;">
                                            <div class="row ">
                                                <div class="col-6 main">
                                                    <span class=" font-sale5 inner mt-1">
                                                        <h5 style="margin:0;">เหลือ (จำนวน)</h5>
                                                        <h4 style="margin:0;">1 / <a style="color:#ce0005;">5</a></h4>
                                                     </span>   
                                                </div>
                                                <div class="col-6 text-right my-3">
                                                    <h4 style="margin:0;font-weight:800;color:#ce0005;" >฿9,000.00</h4>
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