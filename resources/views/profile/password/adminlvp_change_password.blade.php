@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/admin_change_password">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-10" style="background-color:#f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                    <div class="row px-2" >
                        <div style="background-color:#ffffff;border-radius: 8px;">
                            <div class="row">
                                <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                    <h1 class="fontHeader">เปลี่ยนรหัสผ่าน</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12  mt-2" >
                                        <form>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">รหัสผ่านเก่า</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">รหัสผ่านใหม่</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ยืนยันรหัสผ่านใหม่</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <div class="row">
                                                <div class="col-6" style="padding-right:5px;">
                                                    <button name="submit" value="submit" class="btn-submit mt-2">
                                                        <p style="margin:0;">ยืนยัน</p>
                                                    </button>
                                                </div>
                                                <div class="col-6" style="padding-left:5px;">
                                                    <button type="reset" class="btn-cancal mt-2">
                                                        <p style="margin:0;">รีเซ็ต</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="mt-2" style="margin:0;font-weight:800;">วิธีตั้งรหัสผ่าน</p>
                                    <p style="margin:0;">
                                        1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                        2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                        3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                        4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                    </p>
                                </div>
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
        <div class="col-2 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 bgContent"></div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script> /* รูปโปรไฟล์เกม */
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