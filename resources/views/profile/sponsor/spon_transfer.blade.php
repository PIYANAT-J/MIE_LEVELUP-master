@extends('layout.sponsor_navbar')
@section('content')

<div class="container-fluid" id="getActive" active="{{ route('AdvtPackage') }}">
    <div class="row py-5"style="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3 ">
                <div class="col-12">
                    <a href="{{ route('AdvtPackage') }}">
                        <label class="fontAd1 active p">สนับสนุนเงินในเกม</label>
                    </a>
                    @if(empty($package))
                        <label class="fontAd1 p"> > </label>
                        <a href="{{ route('SponShoppingCart') }}">
                            <label class="fontAd1 active p">ตระกร้าสินค้า</label>
                        </a>
                    @elseif(isset($package))
                        <label class="fontAd1 p"> > </label>
                        <a href="{{ route('packagePay', ['id'=>encrypt($package->package_id), 'idT'=>encrypt('null')]) }}">
                            <label class="fontAd1 active p" >ชำระเงิน</label>
                        </a>
                    @endif
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >ยืนยันการชำระเงิน</label>
                </div>
            </div>

            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 style="margin:0;font-weight:800;">ยืนยันการชำระเงิน</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1">
                        <div class="row py-2" style="border-bottom:1px solid #edeef3">
                            <div class="col-6">
                                <p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p>
                            </div>
                            <div class="col-6 text-right">
                                <h4 style="margin:0;font-weight:800;">฿ {{$transfer->transferAmount}}</h4>
                            </div>
                        </div>

                        <div class="row py-2" style="border-bottom:1px solid #edeef3">
                            <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                <p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p>
                                <p style="color:#000;">
                                    ATM / โอนเข้าธนาคาร <br>
                                    กรุณาเก็บเอกสาร/หลักฐานการโอนเงินไว้ เพื่ออัพโหลดภายใน 24 ชม.
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-right">
                                <label><img src="{{asset('home/logo/'.$transfer->transferฺBank_name.'.svg')}}" ></label>
                                @if($transfer->transferฺBank_name == "bangkok")
                                    <label class="p">ธนาคารกรุงเทพ</label> <br>
                                    <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                    <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                    <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                @elseif($transfer->transferฺBank_name == "ktc")
                                    <label class="p">ธนาคารกรุงไทย</label> <br>
                                    <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                    <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                    <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                @elseif($transfer->transferฺBank_name == "kbank")
                                    <label class="p">ธนาคารกสิกรไทย</label> <br>
                                    <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                    <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                    <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                @elseif($transfer->transferฺBank_name == "scb")
                                    <label class="p">ธนาคารไทยพาณิชย์</label> <br>
                                    <label class="ml-2 p">บริษัท ทีเท็น จำกัด</label><br>
                                    <label class="ml-2 p" id="copy">766-2-1-7016-4</label>
                                    <label class="ml-2 p" style="color:#0061fc;cursor:pointer;text-decoration:underline;" onclick="copyToClipboard('#copy')">คัดลอก</label>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mt-3 py-2 " style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                            <div class="col-12">
                                <div class="row mt-2">
                                    <div class="col-12 text-right">
                                        <label class="btn-submit-red3 p" onClick="myFunction()">แจ้งการชำระเงิน</label>
                                        @if(isset($package))
                                            <a href="{{ route('packagePay', ['id'=>encrypt($package->package_id), 'idT'=>encrypt('null')]) }}"><label class="btn-submit-wh p">อัพโหลดภายหลัง</label></a>
                                        @else
                                            <a href="{{ route('packagePay', ['idT'=>encrypt($transeection->transeection_id), 'id'=>encrypt('null')]) }}"><label class="btn-submit-wh p">อัพโหลดภายหลัง</label></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Transfer">
                            <form action="{{ route('sponTransferPayment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row fade-in mt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
                                                <label><p style="font-weight:800;margin:0;">อัพโหลดรูปภาพ</p></label>
                                            </label>
                                            <div id="thumb" class="thumb-topup"><img src="{{asset('home/topup/pic-topup.png') }}"/></div>    
                                            <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <!-- <a href="{{ route('SponsorPayment') }}"><label class="btn-submit-drak2">ยืนยัน</label></a>transferNote -->
                                        <button class="btn-submit" name="submit" value="submit">
                                            <p style="margin:0;">ยืนยัน</p>
                                        </button>
                                        <input type="hidden" name="id" value="{{$transfer->id}}">
                                        @if(isset($package))
                                            <input type="hidden" name="package_id" value="{{$package->package_id}}">
                                        @else
                                            <input type="hidden" name="transeection_id" value="{{$transeection->transeection_id}}">
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
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