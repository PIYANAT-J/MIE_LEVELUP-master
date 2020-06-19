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
              <div class="th-game-date ">Date</div></tr>
              <div class="th-game-edit ">Edit</div></tr>
            </div>

            @if(isset($game))
              @foreach($game as $Game)
                @if($Game->USER_ID == Auth::user()->id)
                  @if(isset($Game->GAME_IMG_PROFILE))
                    <div class="tr">
                      <div class="td-game-img"><img src="{{asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE)}}" alt="Image"class="game-img" ></div>
                      <div class="td-game-name">{{ $Game->GAME_NAME }}</div>
                      <div class="td-game-status">
                        @if($Game->GAME_STATUS == 'รออนุมัติ')
                          <a class="btn-wait-approve">รออนุมัติ</a>
                        @elseif($Game->GAME_STATUS == 'อนุมัติ')
                          <a class="btn-approve">อนุมัติแล้ว</a>
                        @else
                          <a class="btn-approve">ไม่อนุมัติ</a>
                        @endif
                      </div>
                      <div class="td-game-hours pr-3">95 ครั้ง</div>
                      <div class="td-game-date">{{$Game->GAME_DATE}}</div>
                      <div class="td-game-edit"><a href="{{ route('EditGame') }}" class="edit"><i class="material-icons">edit</i></a></div>
                    </div>
                  @endif
                @endif
              @endforeach
            @endif

            <!-- <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/game_profile.png" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-status">
                <a class="btn-wait-approve">รออนุมัติ</a>
                <a class="btn-approve">อนุมัติแล้ว</a>
              </div>
              <div class="td-game-hours pr-3">111 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
              <div class="td-game-edit"><a href="{{ route('EditGame') }}" class="edit"><i class="material-icons">edit</i></a></div>
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
              <div class="td-game-edit"><a href="{{ route('EditGame') }}" class="edit"><i class="material-icons">edit</i></a></div>
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
              <div class="td-game-edit"><a href="{{ route('EditGame') }}" class="edit"><i class="material-icons">edit</i></a></div>
            </div> -->
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
        <form action="{{ route('GameImg') }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="col">
            <div class="row"> <!--แถวที่ 1 -->
              <div class="col-sm-3">
                <div class="form-group mt-2" align="center">
                  <div id="thumb"><img src="section/picture_game/game_profile1.png"></div>    
                  <input id="file_upload" style="display:none" name="GAME_IMG_PROFILE" type="file" multiple="true" accept="image/* ">
                  <div id="upload" class="btn btn-danger">เลือกรูปโปรไฟล์</div>
                  <div class="w-100"></div>
                </div>
              </div>
              <div class="col-sm-8" >
                <input type="text" class="form-control textbox1 my-2" name="GAME_NAME" value="{{ old('GAME_NAME') }}" placeholder="ชื่อเกม" require/>
                <div class="w-100"></div>
                <textarea class="form-control textarea-description my-1"  rows="3" name="GAME_DESCRIPTION" value="{{ old('GAME_DESCRIPTION') }}" placeholder="ทำอธิบาย"></textarea>
                <div class="w-100"></div>
                <select class="custom-select textbox1 my-1" name="GAME_TYPE" value="{{ old('GAME_TYPE') }}" required>
                  <option name="GAME_TYPE" value="" selected>ประเภทเกม</option>
                  <option name="GAME_TYPE" value="FPS">FPS</option>
                  <option name="GAME_TYPE" value="TPS">TPS</option>
                  <option name="GAME_TYPE" value="Puzzle">Puzzle</option>
                  <option name="GAME_TYPE" value="BoardGame">BoardGame</option>
                  <option name="GAME_TYPE" value="Adventure">Adventure</option>
                  <option name="GAME_TYPE" value="Side Scrolling Game">Side Scrolling Game</option>
                  <option name="GAME_TYPE" value="Mobile">Mobile</option>
                </select>
                <div class="w-100"></div>
                <select class="custom-select textbox1 my-1 " name="RATED_ESRB" value="{{ old('RATED_ESRB') }}" required>
                  <option selected>เรทอายุ</option>
                  <option name="RATED_ESRB" value="EC–EarlyChildhood">EC – Early Childhood</option>
                  <option name="RATED_ESRB" value="E – Everyone">E – Everyone</option>
                  <option name="RATED_ESRB" value="E10+ – Everyone 10+">E10+ – Everyone 10+</option>
                  <option name="RATED_ESRB" value="rate.svg">T – Teen</option>
                  <option name="RATED_ESRB" value="M : Mature">M : Mature</option>
                  <option name="RATED_ESRB" value="AO : Adults Only">AO : Adults Only</option>
                  <option name="RATED_ESRB" value="RP : Rating Pending">RP : Rating Pending</option>
                </select>
                <div class="w-100"></div>
                <select class="custom-select textbox1 my-1" name="RATED_B_L" value="{{ old('RATED_B_L') }}" required>
                  <option name="RATED_B_L" value="" selected>มีการใช้ภาษาและความรุนแรง</option>
                  <option name="RATED_B_L" value="Discrimination">Discrimination</option>
                  <option name="RATED_B_L" value="Drugs">Drugs</option>
                  <option name="RATED_B_L" value="Fear">Fear</option>
                  <option name="RATED_B_L" value="Gambling">Gambling</option>
                  <option name="RATED_B_L" value="Sex">Sex</option>
                  <option name="RATED_B_L" value="Violence">Violence</option>
                  <option name="RATED_B_L" value="Other">Other</option>
                </select>
                <input type="text" class="form-control textbox1 my-2" name="GAME_VDO_LINK" value="{{ old('GAME_VDO_LINK') }}" placeholder="ลิงค์วีดีโอ"/>
                <div class="w-100"></div>
                <div class="my-1">
                  <input type="file" class="file" name="GAME_FILE" accept=".zip" require>
                  <label class="label1 pl-3">เฉพาะไฟล์นามสกุล .zip เท่านั้น</label>
                </div>
                
              </div>
              <div class="col-sm-1"></div>   
            </div>
            <div class="row"> <!--แถวที่ 2 -->

              <div id="drop-area"> 
                <form class="my-form">
                  <input type="file" id="fileElem" multiple accept="image/*" name="GAME_IMG_NAME[]" onchange="handleFiles(this.files)">
                  <label class="button" for="fileElem">เลือกรูปภาพ</label>
                  <progress id="progress-bar" max=100 value=0 style="display:none"></progress>
                </form>
                <div id="gallery" ></div>
              </div>
              
              <!-- <div action="{{ route('GameImg') }}" class="dropzone">
                <input type="file" name="GAME_IMG_NAME[]">
              </div> -->
              <!-- <form action="upload.php" class="dropzone" id="myAwesomeDropzone"></form> -->
              <!-- <input type="file" multiple="true" class="dropzone" id="file_upload" name="GAME_IMG_NAME[]"> -->
              

            </div>
            <div class="row"> <!--แถวที่ 3 -->
              <div class="col mt-4" align="center">
                <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                <input type="hidden" name="GAME_DATE" value="{{ date('Y-m-d H:i:s') }}">
                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                <button type="submit" class="bnt button2">ยกเลิก</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('script')

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


<script> /* รูปภาพเกม*/
// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")
// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)   
  document.body.addEventListener(eventName, preventDefaults, false)
})
// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})
;['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false)
})
// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)
function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}
function highlight(e) {
  dropArea.classList.add('highlight')
}
function unhighlight(e) {
  dropArea.classList.remove('active')
}
function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files
  handleFiles(files)
}
let uploadProgress = []
let progressBar = document.getElementById('progress-bar')
function initializeProgress(numFiles) {
  progressBar.value = 0
  uploadProgress = []
  for(let i = numFiles; i > 0; i--) {
    uploadProgress.push(0)
  }
}
function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  console.debug('update', fileNumber, percent, total)
  progressBar.value = total
}
function handleFiles(files) {
  files = [...files]
  initializeProgress(files.length)
  files.forEach(uploadFile)
  files.forEach(previewFile)
}
function previewFile(file) {
  let reader = new FileReader()
  reader.readAsDataURL(file)
  reader.onloadend = function() {
    let img = document.createElement('img')
    img.src = reader.result
    document.getElementById('gallery').appendChild(img)
  }
}
function uploadFile(file, i) {
  var url = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload'
  var xhr = new XMLHttpRequest()
  var formData = new FormData()
  xhr.open('POST', url, true)
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')
  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
  })
  xhr.addEventListener('readystatechange', function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      updateProgress(i, 100) // <- Add this
    }
    else if (xhr.readyState == 4 && xhr.status != 200) {
      // Error. Inform the user
    }
  })
  formData.append('upload_preset', 'ujpu6gyk')
  formData.append('file', file)
  xhr.send(formData)
}
</script>


<script>
Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
 addRemoveLinks: true,
 removedfile: function(file) {
   var name = file.name; 
   
   $.ajax({
     type: 'POST',
     url: '#',
     data: {name: name,request: 2},
     sucess: function(data){
        console.log('success: ' + data);
     }
   });
   var _ref;
    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
 }
});
</script>
                
@endsection