@extends('layout.profile')
<!-- @section('kyc_button')
    <a href="/kyc" class="btn bgroup">
        <div class="row">
            <div>
                <i class="material-icons pl-1">how_to_reg</i>
            </div>
            <div class="col pr-1" align="right ">ยืนยันตัวตน</div>
        </div>        
    </a>
@endsection -->
@section('update_button')
    @if(Auth::user()->updateData == 'true')
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @else
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @endif
@endsection

@section('dev_profile')

  <div class="container mt-0">

    <!-- Nav tabs -->
    <ul class="nav topnav">
      <li>
        <a class="nav-link active" data-toggle="tab" href="#game-shelf">Game Shelf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#point-history">Point History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#upload-game">Upload Game</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

      <div id="game-shelf" class="container tab-pane active"><br>
        <!-- <h3>Games Shelf</h3> -->
        <div class="over">
          <div class="table"  >
            <div class="tr">
              <div class="th-game-pic"></div>
              <div class="th-game-name"></div>
              <div class="th-game-status">Status</div>
              <div class="th-game-hours pr-3">Download</div>
              <div class="th-game-date ">Release Date</div></tr>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/game_profile.png" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-status">
                <a class="btn-wait-approve">รออนุมัติ</a>
                <a class="btn-approve">อนุมัติแล้ว</a>
              </div>
              <div class="td-game-hours pr-3">111 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/game_pic.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-status">
                <a class="btn-wait-approve">รออนุมัติ</a>
                <a class="btn-approve">อนุมัติแล้ว</a>
              </div>
              <div class="td-game-hours pr-3">95 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/csgo.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-status">
                <a class="btn-wait-approve">รออนุมัติ</a>
                <a class="btn-approve">อนุมัติแล้ว</a>
              </div>
              <div class="td-game-hours pr-3">72 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>
          </div>
        </div>
      </div>

      <div id="point-history" class="container tab-pane fade"><br>
        <div class="over">
          <div class="table" >
            <div class="tr">
              <div class="th-number">#</div>
              <div class="th-activity-name">Activity</div>
              <div class="th-point">Point</div>
              <div class="th-time">Date Time</div></tr>
            </div>

            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">11-05-20 4:52AM</div>
            </div>

            <div class="tr">
              <div class="td-number">2</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">3</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">4</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">5</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">6</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">7</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">8</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">9</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">10</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">11</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">12</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">13</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">14</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">15</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">16</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">17</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">18</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">19</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">20</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">21</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">22</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">23</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">24</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">25</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>
          </div>
        </div>
      </div>

      <div id="upload-game" class="container tab-pane"><br>

        <div class="col">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">  
                <lable class="control-label">Picture : </lable>  
                <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true">  
              <div id="upload" class="btn btn-info">
                Upload File
              </div>
              <div id="thumbnail" width="150" height="150"></div>
            </div>
            <div class="col-sm-4">ทสอบ</div>
            <div class="col-sm-4">ทดสอบ</div>
          </div>
        </div>
            <!-- <div class="col-lg-7">
              <div><input type="text" class="form-control textbox1 my-2" placeholder="ชื่อเกม" require></div>
              
              <div class="w-100">
              <textarea class="form-control textarea-description my-1"  rows="3" placeholder="ทำอธิบาย"></textarea>
              
              <div class="w-100">
              <select class="custom-select textbox1 my-1" >
                <option name="" value="" selected>ประเภทเกม</option>
                <option name="" value="">ข้อมูลจากตาราง game_type </option>
                <option name="" value="">ข้อมูลจากตาราง game_type</option>
                <option name="" value="">ข้อมูลจากตาราง game_type </option>
                <option name="" value="">ข้อมูลจากตาราง game_type</option>
                <option name="" value="">ข้อมูลจากตาราง game_type</option>
              </select>
              <div class="w-100">
              <select class="custom-select textbox1 my-1 bg" >
              <select class="custom-select textbox1 my-1 " >
                <option name="" value="" selected>เรทเกม</option>
                <option name="" value="">ข้อมูลจากตาราง rate</option>
                <option name="" value="">ข้อมูลจากตาราง rate </option>
                <option name="" value="">ข้อมูลจากตาราง rate</option>
                <option name="" value="">ข้อมูลจากตาราง rate</option>
              </select>
              <div class="input-group input-file">
                <button class="btn btn-choose_file" type="button">เลือกรูปภาพ</button>
                <input type="text" class="form-control" placeholder='เลือกรูปภาพ...' />
              </div>
              <div class="w-100">
              <div>
              <input type="file" name="filepicture" id="filepicture" class="custom-file-input">
              <label class="custom-file-label" for="filepicture">Choose file</label>
              </div>
            </div> -->


        <!-- </div> -->
      </div>
    </div>
  </div>

@endsection

@section('script')
<script>
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden;  width=150; height=150'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose_file").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
</script>

<!-- <script type="text/javascript">
$(function(){
 
    $("#filepicture").on("change",function(){
        var _fileName = $(this).val();
        $(this).next("label").text(_fileName);
    });
 
});
</script> -->

<script>
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
     $("#thumbnail").html("");
     for(var i=0;i<files.length;i++){
         var file = files[i]
         var imageType = /image.*/
         if(!file.type.match(imageType)){
             //     console.log("Not an Image");
             continue;
         }
         var image = document.createElement("img");
         var thumbnail = document.getElementById("thumbnail");
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
 } // end showThumbnail
  
  
});
</script>



@endsection