@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')

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
                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($transfer->transferAmount)}}</h4></div>
                            </div>

                            <div class="row mx-2 py-3" style="border-bottom:1px solid #455160">
                                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2">
                                    <label class="font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></label> <br>
                                    <p style="color:#fff;margin:0;">
                                        ATM / โอนเข้าธนาคาร <br>
                                        กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                    </p>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <label><img src="{{asset('home/logo/'.$transfer->transferฺBank_name.'.svg')}}" ></label>
                                @if($transfer->transferฺBank_name == "bangkok")
                                    <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงเทพ</p></label> <br>
                                    <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                    <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                    <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                @elseif($transfer->transferฺBank_name == "ktc")
                                    <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงไทย</p></label> <br>
                                    <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                    <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                    <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                @elseif($transfer->transferฺBank_name == "kbank")
                                    <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกสิกรไทย</p></label> <br>
                                    <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                    <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                    <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                @elseif($transfer->transferฺBank_name == "scb")
                                    <label class="font-payment2" style="margin:0;"><p style="color:#fff;margin:0;">ธนาคารไทยพาณิชย์</p></label> <br>
                                    <label class="ml-2" style="margin:0;"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                    <label class="ml-2" id="copy" style="margin:0;"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                    <label class="ml-2" style="margin:0;" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label>
                                @endif
                                <!-- <label ><img src="{{asset('home/logo/bangkok.svg')}}" ></label>
                                <label class="font-payment2"><p style="color:#fff;margin:0;">ธนาคารกรุงเทพ</p></label> <br>
                                <label class="ml-2"><p style="color:#fff;margin:0;">บริษัท ทีเท็น จำกัด</p></label><br>
                                <label class="ml-2" id="copy"><p style="color:#fff;margin:0;">766-2-1-7016-4</p></label>
                                <label class="ml-2" onclick="copyToClipboard('#copy')"><p style="margin:0;color:#ce0005;cursor:pointer;text-decoration:underline;">คัดลอก</p></label> -->
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
                                <form action="{{ route('itemTransfer') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
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
                                                <select class="MySelect p pl-2" type="text" name="text4">
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
                                            <div class="mb-2">
                                                <label id="upload" style="cursor:pointer;">
                                                    <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                                    <label><p style="font-weight:800;margin:0;color:#fff;">อัพโหลดรูปภาพ</p></label>
                                                </label>
                                                <div id="thumb" class="thumb-topup2"><img src="{{asset('home/topup/pic-topup.png') }}"/></div>    
                                                <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                                            <!-- <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-drak2">ยืนยัน</label></a>transferNote -->
                                            <button class="btn-submit-red" name="submit" value="submit">
                                                <p style="margin:0;">ยืนยัน</p>
                                            </button>
                                            <input type="hidden" name="id" value="{{$transfer->id}}">
                                            <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="row fade-in mt-3">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- พื้นหลัง -->
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