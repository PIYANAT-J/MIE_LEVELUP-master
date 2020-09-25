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
                                <div class="col-12 pt-2 " style="color:#fff;">
                                    <label>
                                        <a href="/avatar"class="avatar-link active">
                                            <h1 style="margin:0;">Avatar</h1>
                                        </a>
                                    </label>
                                    <label>
                                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                                    </label>
                                    <label>
                                        <a href="/shopping_cart" class="avatar-link active">
                                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
                                        </a>
                                    </label>
                                    <label>
                                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                                    </label>
                                    <label>
                                        <a href="/payment" class="avatar-link active">
                                            <h1 style="margin:0;">ชำระเงิน</h1>
                                        </a>
                                    </label>
                                    <label>
                                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                                    </label>
                                    <label>
                                        <a class="avatar-link" >
                                            <h1 style="margin:0;">ชำระเงินสำเร็จ</h1>
                                        </a>
                                    </label>
                                </div>
                            </div>

                            <div class="row  mb-4 mt-2">
                                <div class="col-12"> 
                                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12 mt-1">
                                            <div class="row">
                                                <div class="col-12 text-center mt-3">
                                                    <img style="width:40px;" src="{{asset('icon/select_green.svg')}}" alt=""> <br>
                                                    <p class="mt-3" style="color:#fff;font-weight:800;margin:0;">ชำระเงินเรียบร้อยแล้ว</p>
                                                    <p style="color:#a8a8a8;margin:0">หมายเลขคำสั่งซื้อ 7483246834</p>
                                                </div>
                                            </div>

                                            <div class="row mx-2 mt-5">  
                                                <div class="col-7" style="padding:0;">
                                                    <label class="labelItem bgItem">
                                                        <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                                                    </label> 
                                                    <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                        <p style="margin:0;"> <a style="font-weight: 700;">มงกุฏ ระดับ 1 </a></br>
                                                        สามารถเห็น Signal Rank 100-150 ได้</br>
                                                        เลือกลงทุนได้ 3 Signal</p>
                                                    </label>
                                                </div>

                                                <div class="col-2 my-4 text-center" style="padding:0;">
                                                    <p style="margin:0;color:#fff;">1 ชิ้น</p>
                                                </div>

                                                <div class="col-3 my-3">
                                                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿1,000.00</h4>
                                                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-37%)</p>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row mt-3 py-2" style="background-color:#191b29;">
                                                <div class="col-lg-12">
                                                <div class="row ml-2">
                                                        <p style="font-weight:800;margin:0;color:#fff;">ที่อยู่ในการออกใบเสร็จ</p>
                                                    </div>
                                                    <div class="row ml-2 mt-2">
                                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                            <label class="font-payment-avatar">
                                                                <p style="margin:0;font-weight: 800;">ชื่อ - นามสกุล<br>เบอร์โทรศัพท์</p>
                                                            </label>
                                                            <label class="font-payment-avatar2 ml-2">
                                                                <p style="margin:0;">สมหญิง รักดี (5-1005-00148-76-6)<br>(+66) 081-441-9585</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                                            <label class="font-payment-avatar">
                                                                <p style="margin:0;font-weight: 800;">ที่อยู่</p>
                                                            </label>
                                                            <label class="font-payment-avatar3 ml-2">
                                                                <p style="margin:0;">52/2 ซ.เจริญนคร 78 ถนน เจริญนคร บุคคโลเขตธนบุรี กรุงเทพมหานคร 10600
                                                                </p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="border-bottom:1px solid #455160">
                                                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿ 1,000</h4></div>
                                            </div>

                                            <div class="row py-3" style="border-bottom:1px solid #455160">
                                                <div class="col-6 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                                <div class="col-6 text-right font-payment2"><p style="margin:0;">T10 Wallet ชื่อบัญชี สมหญิง รักดี</p></div>
                                            </div>
                                            
                                            <div class="row mt-3 py-2 " style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                                <div class="col-lg-12">
                                                    <div class="row mx-1 mt-3">
                                                        <div class="col-10"></div>
                                                        <div class="col-2 text-right" style="padding:0;">
                                                            <a href="avatar">
                                                                <button type="button" class="btn-submit">
                                                                    <p style="margin:0;">ปิด</p>
                                                                </button>
                                                            </a>
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
@endsection