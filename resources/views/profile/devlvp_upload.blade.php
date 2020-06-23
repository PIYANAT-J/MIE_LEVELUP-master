@extends('layout.profile_navbar')

@section('content')

<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                    <div class="row mb-2">
                        <div class="col-5 text-right pr-2">
                            <img class="sidebar-pic" src="{{asset('dist/images/img_13.jpg') }}" />
                        </div>
                        <div class="col-7 sidebar_name pt-2">
                            <span><b style="font-family: myfont;font-size: 1.1em;">ชื่อ-นามสกุล</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก:25/05/63</span>
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
                <div class="col-lg-1"></div>
                <a href="/develper_profile" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="/develper_kyc" style="width: 100%;"><button class="btn-sidebar "><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน<span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span><span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span><span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span></button></a>
                <a href="/develper_shelf" style="width: 100%;"><button class="btn-sidebar "><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="/develper_history" style="width: 100%;"><button class="btn-sidebar "><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="/develper_upload_game" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="/develper_withdraw" style="width: 100%;"><button class="btn-sidebar"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button>
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                            <span class="font-profile1">อัพโหลดเกม</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 line1 mt-2" >
                                    <div class="col-lg-12 mt-2" style="padding:0;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="box mr-2">
                                                    <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" accept=".zip" require>
                                                    <label for="file-2"><span>+ อัพโหลดไฟล์เกม</span></label>
                                                </div>
                                                <label class="label2 ml-">ต้องเป็นไฟล์ .zip เท่านั้น</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="input-update mb-3"  placeholder="ชื่อเกม" require></input>
                                    <textarea name="data" id="data" class="input-update" style="padding-top:22px;line-height:120%;" placeholder="คำอธิบายไม่เกิน 150 ตัวอักษร" row="3"  require></textarea><span class="label2" id="now_length"></span>
                                    <select class=" input-update mb-3" id="mySelect" data-live-search="true" style="border-radius: 0px;">
                                        <option class="option-select-rate">เรทเกม</option>
                                        <option class="option-select-rate">EC : Early Childhood</option>
                                        <option class="option-select-rate">E : Everyone</option>
                                        <option class="option-select-rate">E10+ : Everyone 10+</option>
                                        <option class="option-select-rate">T : Teen</option>
                                        <option class="option-select-rate">M : Mature</option>
                                        <option class="option-select-rate">AO : Adults Only</option>
                                        <option class="option-select-rate">RP : Rating Pending</option>
                                    </select>
                                    <select class=" input-update mb-3" id="mySelect" data-live-search="true" style="border-radius: 0px;">
                                        <option class="option-select-rate">เรทเนื้อหาเกม</option>
                                        <option class="option-select-rate">Discrimination : มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</option>
                                        <option class="option-select-rate">Drugs : มีการใช้สารเสพติดในเกม</option>
                                        <option class="option-select-rate">Fear : มีการใช้ความกลัวเข้ามาอยู่ในเกม</option>
                                        <option class="option-select-rate">Gambling : มีเรื่องของการพนันอยู่ในเกม</option>
                                        <option class="option-select-rate">Sex : มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</option>
                                        <option class="option-select-rate">Violence : มีการใช้ความรุนแรงภายในเกม</option>
                                        <option class="option-select-rate">Online : เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</option>
                                        <option class="option-select-rate">Other : อื่นๆ</option>
                                    </select>
                                    <input type="text" class="input-update mb-3"  placeholder="ลิงค์วีดีโอ" require></input>
                                    <textarea class="input-update" style="padding-top:22px;line-height:120%;" placeholder="รายละเอียด" row="3"  require></textarea>
                                    
                                    <div class="row ">
                                        <div class="col-lg-12 mt-2"><button type="submit" class="btn-submit">ยืนยัน</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row mt-2">
                                <div class="col-lg-12 pb-2"> 
                                    <span class="font-profile1">เลือกรูปภาพหน้าปก</span>
                                </div>
                            </div>
                            <div class="row line2">
                                <div class="col-lg-12">
                                    <div class="form-group" align="center">
                                        <div id="thumb" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                        <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="row mt-2">
                                <div class="col-lg-12 pb-2"> 
                                    <span class="des-pic"><b class="font-profile1 ">เลือกรูปภาพเพิ่มเติม </b> เพิ่มได้สูงสุด 6 รูปภาพ</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-12">
                                    <span class="fileinput-button">
                                        <span><label id="upload" style="cursor:pointer;" class="font-kyc-upload"><img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ</label></span>
                                        <input type="file" name="files[]" id="files" multiple accept="image/*"><br />
                                    </span></br>
                                    <output id="Filelist"></output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
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
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

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

<script>
'use strict';
;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
</script>

<script type="text/javascript">
$(function(){
    var max_length=150; // กำหนดจำนวนตัวอักษร
    $("#data").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
            var this_length=max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
            if(this_length<0){
                $(this).val($(this).val().substr(0,150)); // แสดงตามจำนวนตัวอักษรที่กำหนด
            }else{
                $("#now_length").html(this_length+" /150 ตัวอักษร"); 
              // แสดงตัวอักษรที่เหลือ           
            }           
    });
});
</script>

<script>
//I added event handler for the file upload control to access the files properties.
document.addEventListener("DOMContentLoaded", init, false);

//To save an array of attachments
var AttachmentArray = [];

//counter for attachment array
var arrCounter = 0;

//to make sure the error message for number of files will be shown only one time.
var filesCounterAlertStatus = false;

//un ordered list to keep attachments thumbnails
var ul = document.createElement("ul");
ul.className = "thumb-Images";
ul.id = "imgList";

function init() {
  //add javascript handlers for the file upload event
  document
    .querySelector("#files")
    .addEventListener("change", handleFileSelect, false);
}

//the handler for file upload event
function handleFileSelect(e) {
  //to make sure the user select file/files
  if (!e.target.files) return;

  //To obtaine a File reference
  var files = e.target.files;

  // Loop through the FileList and then to render image files as thumbnails.
  for (var i = 0, f; (f = files[i]); i++) {
    //instantiate a FileReader object to read its contents into memory
    var fileReader = new FileReader();

    // Closure to capture the file information and apply validation.
    fileReader.onload = (function(readerEvt) {
      return function(e) {
        //Apply the validation rules for attachments upload
        ApplyFileValidationRules(readerEvt);

        //Render attachments thumbnails.
        RenderThumbnail(e, readerEvt);

        //Fill the array of attachment
        FillAttachmentArray(e, readerEvt);
      };
    })(f);

    // Read in the image file as a data URL.
    // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
    // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
    fileReader.readAsDataURL(f);
  }
  document
    .getElementById("files")
    .addEventListener("change", handleFileSelect, false);
}

//To remove attachment once user click on x button
jQuery(function($) {
  $("div").on("click", ".img-wrap .close", function() {
    var id = $(this)
      .closest(".img-wrap")
      .find("img")
      .data("id");

    //to remove the deleted item from array
    var elementPos = AttachmentArray.map(function(x) {
      return x.FileName;
    }).indexOf(id);
    if (elementPos !== -1) {
      AttachmentArray.splice(elementPos, 1);
    }

    //to remove image tag
    $(this)
      .parent()
      .find("img")
      .not()
      .remove();

    //to remove div tag that contain the image
    $(this)
      .parent()
      .find("div")
      .not()
      .remove();

    //to remove div tag that contain caption name
    $(this)
      .parent()
      .parent()
      .find("div")
      .not()
      .remove();

    //to remove li tag
    var lis = document.querySelectorAll("#imgList li");
    for (var i = 0; (li = lis[i]); i++) {
      if (li.innerHTML == "") {
        li.parentNode.removeChild(li);
      }
    }
  });
});

//Apply the validation rules for attachments upload
function ApplyFileValidationRules(readerEvt) {
  //To check file type according to upload conditions
  if (CheckFileType(readerEvt.type) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, You can only upload jpg/png/gif files"
    );
    e.preventDefault();
    return;
  }

  //To check file Size according to upload conditions
  if (CheckFileSize(readerEvt.size) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
    );
    e.preventDefault();
    return;
  }

  //To check files count according to upload conditions
  if (CheckFilesCount(AttachmentArray) == false) {
    if (!filesCounterAlertStatus) {
      filesCounterAlertStatus = true;
      alert(
        "เพิ่มได้สูงสุด 6 รูปภาพ"
      );
    }
    e.preventDefault();
    return;
  }
}

//To check file type according to upload conditions
function CheckFileType(fileType) {
  if (fileType == "image/jpeg") {
    return true;
  } else if (fileType == "image/png") {
    return true;
  } else if (fileType == "image/gif") {
    return true;
  } else {
    return false;
  }
  return true;
}

//To check file Size according to upload conditions
function CheckFileSize(fileSize) {
  if (fileSize < 900000) {
    return true;
  } else {
    return false;
  }
  return true;
}

//To check files count according to upload conditions
function CheckFilesCount(AttachmentArray) {
  //Since AttachmentArray.length return the next available index in the array,
  //I have used the loop to get the real length
  var len = 0;
  for (var i = 0; i < AttachmentArray.length; i++) {
    if (AttachmentArray[i] !== undefined) {
      len++;
    }
  }
  //To check the length does not exceed 10 files maximum
  if (len > 5) {
    return false;
  } else {
    return true;
  }
}

//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
  var li = document.createElement("li");
  ul.appendChild(li);
  li.innerHTML = [
    '<div class="img-wrap"> <span class="close"><img class="img-close" src="icon/close.svg"/></span>' +
      '<img class="thumb" src="',
    e.target.result,
    '" title="',
    escape(readerEvt.name),
    '" data-id="',
    readerEvt.name,
    '"/>' + "</div>"
  ].join("");

  var div = document.createElement("div");
  div.className = "FileNameCaptionStyle";
  li.appendChild(div);
  div.innerHTML = [readerEvt.name].join("");
  document.getElementById("Filelist").insertBefore(ul, null);
}

//Fill the array of attachment
function FillAttachmentArray(e, readerEvt) {
  AttachmentArray[arrCounter] = {
    AttachmentType: 1,
    ObjectType: 1,
    FileName: readerEvt.name,
    FileDescription: "Attachment",
    NoteText: "",
    MimeType: readerEvt.type,
    Content: e.target.result.split("base64,")[1],
    FileSizeInBytes: readerEvt.size
  };
  arrCounter = arrCounter + 1;
}

</script>

@endsection