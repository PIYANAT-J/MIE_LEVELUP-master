@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')

        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
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
                                        <a href="/shopping_cart" class="avatar-link">
                                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
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
                                <div class="col-12"> 
                                    <div class="row mx-0 pb-3" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12 mt-1">
                                            <div class="row py-3" style="border-bottom:1px solid #fff;">
                                                <h1 class="ml-3" style="margin:0;font-weight:800;color:#fff;">ตะกร้าสินค้า</h1>
                                            </div>
                                            <div class="row row6">
                                                <div class="col-12">
                                                    <div class="row mt-3" style="border-bottom:1px solid #fff;">  
                                                        <div class="col-sm-9 col-md-7 col-lg-10 col-xl-6 align-self-center" style="padding:0;">
                                                            <label class="checkbox-wh pl-2">
                                                                <input type="checkbox" id="checkbox_01" name="accept_01">
                                                                <label for="checkbox_01" ></label>
                                                            </label>
                                                            <label class="labelItem2 bgItem">
                                                                <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                                                            </label> 
                                                            <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                                <p style="font-weight: 700;margin:0;">มงกุฏ ระดับ 1 </p>
                                                                <p style="margin:0;">สามารถเห็น Signal Rank 100-150 ได้</p>
                                                                <p style="margin:0;">เลือกลงทุนได้ 3 Signal</p>
                                                            </label>
                                                        </div>

                                                        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 align-self-center" style="padding:0;">
                                                            <label class="quantity" style="width:100%;">
                                                                <button class="quantity-down"> - </button>
                                                                <input type="number" min="1" max="100" step="1" value="1">
                                                                <button class="quantity-up"> + </button>
                                                            </label>
                                                        </div>

                                                        <div class="col-sm-11 col-md-2 col-lg-11 col-xl-3 align-self-center" style="padding:0;">
                                                            <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                                <h4 style="margin:0;font-weight:800;">฿1,000.00</h4>
                                                                <p class="mr-2" style="margin:0;color:#ce0005;"><a style="color: #b2b2b2;text-decoration:line-through;">฿3,400 </a> (-37%)<p>
                                                            </span>
                                                        </div>

                                                        <div class="col-1 my-4 text-center" style="padding:0;">
                                                            <button class="btn-none">
                                                                <img style="width:100%;cursor:pointer;" src="{{asset('icon/trash2.svg') }}" />
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-3">
                                        <div class="col-sm-4 col-md-3 col-lg-4 col-xl-4">
                                            <div class="row my-2">
                                                <div class="col-12">
                                                    <label class="checkbox-wh2">
                                                        <input type="checkbox" id="checkbox_all" name="accept_01" onclick="toggle(this);">
                                                        <label for="checkbox_all" class="pt-2 ml-2">
                                                            <h1 class="pl-1" style="margin:0;font-weight:800:;color:#fff;">เลือกทั้งหมด</h1>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-md-6 col-lg-8 col-xl-6 text-right">
                                            <div class="row my-2">
                                                <div class="col-12">
                                                    <span style="font-family:myfont1;font-size:1.1em;color:#fff;">
                                                        <label><h1 style="margin:0;font-weight:800;color:#fff;">รวมค่าสินค้า ( 3 รายการ )</h1></label>
                                                        <label><h4 style="color:#ce0005;margin:0;font-weight:800;">฿1,000.00</h4></label>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-8 d-inline-block d-xl-none d-md-none"></div>
                                        <div class="col-lg-8 d-none d-lg-block d-xl-none"></div>
                                        <div class="col-sm-4 col-md-3 col-lg-4 col-xl-2 text-right">
                                            <a href="/payment">
                                                <button class="btn-submit-red">
                                                    <p style="margin:0;">ชำระเงิน</p>
                                                </button>
                                            </a>
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
 jQuery('').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');
      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });
</script>



<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
@endsection