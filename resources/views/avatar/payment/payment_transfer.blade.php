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
                                <div class="col-12 " style="color:#fff;">
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
                                            <h1 style="margin:0;">ยืนยันการชำระเงิน</h1>
                                        </a>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-4 mt-2">
                                <div class="col-12"> 
                                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12 mt-1">
                                        <div class="row mx-2 py-3" style="font-family:myfont1;font-size:1em;color:#fff;border-bottom:1px solid #fff;font-weight:800;">ยืนยันการชำระเงิน</div>
                                            <div class="row mx-2" style="border-bottom:1px solid #455160">
                                                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿1,000</h4></div>
                                            </div>

                                            <div class="row mx-2 py-3" style="border-bottom:1px solid #455160">
                                                <div class="col-8">
                                                    <label class="font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></label> <br>
                                                    <p style="color:#fff;margin:0;">
                                                        ATM / โอนเข้าธนาคาร <br>
                                                        กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                                    </p>
                                                </div>
                                                <div class="col-4 text-right">
                                                <label ><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงเทพ</p></label> <br>
                                                <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                                <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                                <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                            </div>
                                            </div>
                                            
                                            <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                                <div class="col-lg-12">
                                                    <div class="row mt-2">
                                                        <div class="col-lg-12 text-right">
                                                            <label class="btn-submit-red3" onClick="myFunction()">
                                                                <p style="margin:0;">แจ้งการชำระเงิน</p>
                                                            </label>
                                                            <a href="{{ route('Payment') }}">
                                                                <label class="btn-submit-wh">
                                                                    <p style="margin:0;">อัพโหลดภายหลัง</p>
                                                                </label>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Transfer">
                                                <div class="row fade-in mt-3">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                                                        <label class="bgInput field-wrap my-1">
                                                            <p class="fontHeadInput">วันที่โอน</p>
                                                            <input type="date" name="date" class="input1 p ml-2" ></input>
                                                        </label>
                                                        <label class="bgInput field-wrap my-1">
                                                            <p class="fontHeadInput">เวลาที่โอน</p>
                                                            <input type="time" name="time" class="input1 p ml-2" ></input>
                                                        </label>
                                                        <label class="bgInput field-wrap my-1">
                                                            <p class="fontHeadInput">ธนาคารทีโอน</p>
                                                            <select class="MySelect p pl-2" type="text" name="text4" style="width:97.2%">
                                                                <option value="">ธนาคารกรุงเทพ</option>
                                                                <option value="">ธนาคารกสิกรไทย</option>
                                                                <option value="">ธนาคารกรุงไทย</option>
                                                                <option value="">ธนาคารทหารไทย</option>
                                                                <option value="">ธนาคารไทยพาณิชย์</option>
                                                                <option value="">ธนาคารกรุงศรีอยุธยา</option>
                                                                <option value="">ธนาคารเกียรตินาคิน</option>
                                                                <option value="">ธนาคารเกียรตินาคิน</option>
                                                                <option value="">ธนาคารทิสโก้</option>
                                                                <option value="">ธนาคารธนชาต</option>
                                                                <option value="">ธนาคารยูโอบี</option>
                                                                <option value="">ธนาคารออมสิน</option>
                                                                <option value="">ธนาคารอาคารสงเคราะห์</option>
                                                                <option value="">ธนาคารอิสลามแห่งประเทศไทย</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                        <div>
                                                            <label id="upload" style="cursor:pointer;">
                                                                <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                                                <label><p style="font-weight:800;margin:0;color:#fff;">อัพโหลดรูปภาพ</p></label>
                                                            </label>
                                                            <div id="thumb" class="thumb-topup2"><img src="{{asset('home/topup/pic-topup.png') }}"/></div>    
                                                            <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                                                        <button class="btn-submit-red" name="submit" value="submit">
                                                            <p style="margin:0;">ยืนยัน</p>
                                                        </button>
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
    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<script>
    const myFunction = () => {
    document.getElementById("Transfer").style.display ='block';}
</script>

<script> /* อัพโหลดรูปภาพ */
$(function () {
 $("#upload").on("click",function(e){
     $("#file_upload").show().click().hide();
     e.preventDefault();
 });
 $("#file_upload").on("change",function(e){
     var files = this.files
     showThumbnail(files)        
 });
 function showThumbnail(files){
     $("#thumb").html("");
     for(var i=0;i<files.length;i++){
         var file = files[i]
         var imageType = /image.*/
         if(!file.type.match(imageType)){
                //  console.log("Not an Image");
             continue;
         }
         var image = document.createElement("img");
         var thumbnail = document.getElementById("thumb");
         image.file = file;
         thumbnail.appendChild(image)
         var reader = new FileReader()
         reader.onload = (function(aImg){
             return function(e){
                 aImg.src = e.target.result;
             };
         }(image))
         var ret = reader.readAsDataURL(file);
         var canvas = document.createElement("canvas");
         ctx = canvas.getContext("2d");
         image.onload= function(){
             ctx.drawImage(image,100,100)
         }
     } // end for loop
     console.log(file);
 } // end showThumbnail
});
</script>
@endsection