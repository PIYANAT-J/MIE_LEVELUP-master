@extends('layout.dev_navbar')

@section('content')

<div class="container-fluid" id="getActive" active="{{route('DevUpload')}}">
  <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
    @include('profile.sidebar.dev_sidebar')

    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
      <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
        <div class="row">
            <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
              <h1 class="fontHeader">อัพโหลดเกม</h1>
            </div>
        </div>
        <form action="{{ route('DevUploadGame') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 mt-2" >
                            <div class="col-12 mt-2" style="padding:0;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mr-2">
                                            <input type="file" name="GAME_FILE" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" accept=".zip" require>
                                            <label for="file-2" style="font-size:1em;"><span class="p">+ อัพโหลดไฟล์เกม</span></label>
                                        </div>
                                        <p style="margin:0;color:#b2b2b2;">ต้องเป็นไฟล์ .zip เท่านั้น</p>
                                    </div>
                                </div>
                            </div>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อเกม</p>
                                <input type="text" class="input1 p ml-2" name="GAME_NAME" value="{{ old('GAME_NAME') }}" require></input>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">คำอธิบาย</p>
                                <textarea name="GAME_DESCRIPTION" id="data" class="input1 p ml-2" style="line-height:120%;" row="3" value="{{ old('GAME_DESCRIPTION') }}" require></textarea>
                            </label>
                            <h5 style="margin:0;color:#b2b2b2;" id="now_length"></h5>

                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">เรทเกม</p>
                                <select class="MySelect p pl-2" id="mySelect" data-live-search="true" style="border-radius: 0px;" name="RATED_ESRB" value="{{ old('RATED_ESRB') }}">
                                    <option>เลือกเรทเกม</option>
                                    <option name="RATED_ESRB" value="EarlyChildhood">EC : Early Childhood</option>
                                    <option name="RATED_ESRB" value="Everyone">E : Everyone</option>
                                    <option name="RATED_ESRB" value="Everyone10">E10+ : Everyone 10+</option>
                                    <option name="RATED_ESRB" value="Teen">T : Teen</option>
                                    <option name="RATED_ESRB" value="Mature">M : Mature</option>
                                    <option name="RATED_ESRB" value="AdultsOnly">AO : Adults Only</option>
                                    <option name="RATED_ESRB" value="RatingPending">RP : Rating Pending</option>
                                </select>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">เรทเนื้อหาเกม</p>
                                <select class="MySelect p pl-2" id="mySelect" data-live-search="true" style="border-radius: 0px;" name="RATED_B_L" value="{{ old('RATED_B_L') }}">
                                    <option>เลือกเนื้อหา</option>
                                    <option name="RATED_B_L" value="Discrimination">Discrimination : มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</option>
                                    <option name="RATED_B_L" value="Drugs">Drugs : มีการใช้สารเสพติดในเกม</option>
                                    <option name="RATED_B_L" value="Fear">Fear : มีการใช้ความกลัวเข้ามาอยู่ในเกม</option>
                                    <option name="RATED_B_L" value="Gambling">Gambling : มีเรื่องของการพนันอยู่ในเกม</option>
                                    <option name="RATED_B_L" value="Sex">Sex : มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</option>
                                    <option name="RATED_B_L" value="Violence">Violence : มีการใช้ความรุนแรงภายในเกม</option>
                                    <option name="RATED_B_L" value="Online">Online : เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</option>
                                    <option name="RATED_B_L" value="Other">Other : อื่นๆ</option>
                                </select>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ประเภทเกม</p>
                                <select class="MySelect p pl-2" id="mySelect" data-live-search="true" style="border-radius: 0px;" name="GAME_TYPE" value="{{ old('GAME_TYPE') }}">
                                    <option>เลือกประเภท</option>
                                    <option name="GAME_TYPE" value="Action">Action</option>
                                    <option name="GAME_TYPE" value="Adventure">Adventure</option>
                                    <option name="GAME_TYPE" value="BBG">BBG</option>
                                    <option name="GAME_TYPE" value="Board Game">Board Game</option>
                                    <option name="GAME_TYPE" value="Casual">Casual</option>
                                    <option name="GAME_TYPE" value="Console">Console</option>
                                    <option name="GAME_TYPE" value="Fantasy">Fantasy</option>
                                    <option name="GAME_TYPE" value="Fighting">Fighting</option>
                                    <option name="GAME_TYPE" value="Flight">Flight</option>
                                    <option name="GAME_TYPE" value="FPS">FPS</option>
                                    <option name="GAME_TYPE" value="Historical">Historical</option>
                                    <option name="GAME_TYPE" value="Martail Arts">Martail Arts</option>
                                    <option name="GAME_TYPE" value="MMORPG">MMORPG</option>
                                    <option name="GAME_TYPE" value="MOBA">MOBA</option>
                                    <option name="GAME_TYPE" value="Music Game">Music Game</option>
                                    <option name="GAME_TYPE" value="Puzzle">Puzzle</option>
                                    <option name="GAME_TYPE" value="Racing">Racing</option>
                                    <option name="GAME_TYPE" value="RTS">RTS</option>
                                    <option name="GAME_TYPE" value="Side Scrolling Game">Side Scrolling Game</option>
                                    <option name="GAME_TYPE" value="Simulation">Simulation</option>
                                    <option name="GAME_TYPE" value="Social">Social</option>
                                    <option name="GAME_TYPE" value="Sport">Sport</option>
                                    <option name="GAME_TYPE" value="Strategy">Strategy</option>
                                    <option name="GAME_TYPE" value="Survival">Survival</option>
                                    <option name="GAME_TYPE" value="Tactical Combat">Tactical Combat</option>
                                    <option name="GAME_TYPE" value="TBS">TBS</option>
                                    <option name="GAME_TYPE" value="TPS">TPS</option>
                                    <option name="GAME_TYPE" value="Trading card">Trading card </option>
                                </select>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ลิงค์วีดีโอ</p>
                                <input type="text" class="input1 p ml-2" name="GAME_VDO_LINK" value="{{ old('GAME_VDO_LINK') }}" require></input>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">รายละเอียด</p>
                                <textarea class="input1 p ml-2" style="line-height:120%;" row="3" name="GAME_DESCRIPTION_FULL" value="{{ old('GAME_DESCRIPTION_FULL') }}" require></textarea>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ราคาเกม</p>
                                <input type="text" class="input1 p ml-2" require></input>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row mt-2">
                        <div class="col-12 pb-2"> 
                            <p class="fontHeader">เลือกรูปภาพหน้าปก</p>
                        </div>
                    </div>
                    <div class="row line2">
                        <div class="col-lg-12">
                            <div class="form-group" align="center">
                                <div id="thumb" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                                <input id="file_upload" style="display:none" name="GAME_IMG_PROFILE" type="file" multiple="true" accept="image/* "/>
                                <button id="upload" class="btn-upload-pic mt-2">
                                  <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                                </button>
                                <div class="mt-2">
                                  <p style="margin:0;color:#b2b2b2;">ขนาดไฟล์: สูงสุด 1 MB</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row mt-2">
                        <div class="col-12 pb-2"> 
                            <label><p class="fontHeader" style="margin:0;">เลือกรูปภาพเพิ่มเติม</p></label>
                            <!-- <label><h5 style="margin:0;"> เพิ่มได้สูงสุด 6 รูปภาพ</h5></label> -->
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <span class="fileinput-button">
                                <label id="upload" style="cursor:pointer;font-weight:800;" class="font-kyc-upload p">
                                  <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                  อัพโหลดรูปภาพ
                                </label>
                                <input type="file" name="GAME_IMG_NAME[]" id="files" multiple accept="image/*" style="width:150px;" ><br />
                            </span>
                        </div>
                    </div>
                    <div class="rowImgGame">
                      <output id="Filelist"></output>
                    </div>
                </div>
                  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-2">
                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit">
                      <p style="margin:0;">ยืนยัน</p>
                      <input type="hidden" name="GAME_DATE" value="{{ date('Y-m-d H:i:s') }}">
                      <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                    </button>
                  </div>
            </div>
        </form>
      </div>
    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
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
    var max_length=500; // กำหนดจำนวนตัวอักษร
    $("#data").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
            var this_length=max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
            if(this_length<0){
                $(this).val($(this).val().substr(0,500)); // แสดงตามจำนวนตัวอักษรที่กำหนด
            }else{
                $("#now_length").html(this_length+" /500 ตัวอักษร"); 
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
  // if (CheckFileSize(readerEvt.size) == false) {
  //   alert(
  //     "The file (" +
  //       readerEvt.name +
  //       ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
  //   );
  //   e.preventDefault();
  //   return;
  // }
  //To check files count according to upload conditions
  // if (CheckFilesCount(AttachmentArray) == false) {
  //   if (!filesCounterAlertStatus) {
  //     filesCounterAlertStatus = true;
  //     alert(
  //       "เพิ่มได้สูงสุด 6 รูปภาพ"
  //     );
  //   }
  //   e.preventDefault();
  //   return;
  // }
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
// //To check file Size according to upload conditions
// function CheckFileSize(fileSize) {
//   if (fileSize < 900000) {
//     return true;
//   } else {
//     return false;
//   }
//   return true;
// }
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
  // if (len > 5) {
  //   return false;
  // } else {
  //   return true;
  // }
}
//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
  var li = document.createElement("li");
  ul.appendChild(li);
  li.innerHTML = [
    '<div class="img-wrap"> <span class="close"><img class="img-close" src="icon/close-wh.svg"/></span>' +
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