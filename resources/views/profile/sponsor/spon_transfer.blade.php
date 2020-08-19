@extends('layout.sponsor_navbar')
@section('content')

<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($sponsor as $spon)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้สนับสนุน : บุคคลธรรมดา</br>เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('SponsorProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                    <div class="col-lg-9" style="background-color:#f5f5f5;">
                    <div class="row mt-4 ">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 ">
                                <a href="{{ route('AdvtPackage') }}"><label class="fontAd1 active">สนับสนุนเงินในเกม</label></a>
                                <label class="fontAd1"> > </label>
                                <a href="{{ route('SponShoppingCart') }}"><label class="fontAd1 active">ตระกร้าสินค้า</label></a>
                                <label class="fontAd1"> > </label>
                                <a href="{{ route('SponsorPayment') }}"><label class="fontAd1 active" >ชำระเงิน</label></a>
                                <label class="fontAd1"> > </label>
                                <label class="fontAd1" >ยืนยันการชำระเงิน</label>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row mb-4" >
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">ยืนยันการชำระเงิน</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-1">
                                        <div class="row py-3" style="border-bottom:1px solid #edeef3">
                                            <div class="col-6 font-payment3">จำนวนเงินที่ต้องชำระ</div>
                                            <div class="col-6 text-right font-price" style="font-size:1.5em;">฿ 279.00</div>
                                        </div>

                                        <div class="row py-3" style="border-bottom:1px solid #edeef3">
                                            <div class="col-8 ">
                                                <label class="font-payment3">ช่องทางการชำระเงิน</label> <br>
                                                <label style="font-family:myfont1;font-size:0.9em;color:#000;">
                                                    ATM / โอนเข้าธนาคาร <br>
                                                    กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                                </label>
                                            </div>
                                            <div class="col-4 text-right">
                                                <label ><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                                <label class="font-payment3">ธนาคารกรุงเทพ</label> <br>
                                                <label class="ml-2" style="font-family:myfont1;font-size:1em;line-height:0;">บริษัท ทีเท็น จำกัด</label><br>
                                                <label class="ml-2" style="font-family:myfont1;font-size:1em;line-height:0;" id="copy">766-2-1-7016-4</label>
                                                <label class="ml-2" style="font-family:myfont1;font-size:1em;line-height:0;color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                            <div class="col-lg-12">
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 text-right">
                                                        <label class="btn-submit-red3" onClick="myFunction()">แจ้งการชำระเงิน</label>
                                                        <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-wh">อัพโหลดภายหลัง</label></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Transfer">
                                            <div class="row fade-in mt-3">
                                                <div class="col-lg-6">
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">วันที่โอน</label> <br>
                                                        <input type="date" name="date" class="input-login px-3" ></input>
                                                    </label>
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">เวลาที่โอน</label> <br>
                                                        <input type="time" name="time" class="input-login px-3" ></input>
                                                    </label>
                                                    <label class="bgInput field-wrap">
                                                        <label class="fontHeadInput px-3" style="padding:0;">ธนาคารทีโอน</label>
                                                        <select class="selectBankSpon" type="text" name="text4">
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
                                                    <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-drak2">ยืนยัน</label></a>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div>
                                                        <label id="upload" style="cursor:pointer;font-family:myfont1;font-size:1em;font-weight:700;">
                                                            <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ
                                                        </label>
                                                        <div id="thumb" class="thumb-topup"><img src="home/topup/pic-topup.png"/></div>    
                                                        <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </form>
            @endif
        @endforeach
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_login"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_login2"></div>
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