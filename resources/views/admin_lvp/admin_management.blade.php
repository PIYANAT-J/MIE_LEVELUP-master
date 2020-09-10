@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/admin_management">
        @include('profile.sidebar.admin_sidebar')

        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-12"><h1 class="fontHeader">ข้อมูลผู้ดูแลระบบ</h1></div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li>
                            <a class="nav-link active" data-toggle="tab" href="#admin1">
                                <p>รายชื่อผู้ดูแลระบบ</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#admin2">
                                <p>เพิ่มผู้ดูแลระบบ</p>
                            </a>
                        </li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="admin1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p">ชื่อ-นาสกุล</div>
                                        <div class="col-3 py-3 th1 p">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">ใช้งานล่าสุด</div>
                                        <div class="col-2 py-3 th1 p">เพิ่มโดย</div>
                                        <div class="col-1 py-3 th1"></div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                        <?php $i = 1; ?>
                                            @foreach($admin as $adminList)
                                                
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 p">{{ $adminList->name }}</div>
                                                        <div class="col-3 py-1 td1 p">{{ $adminList->email }}</div>
                                                        <div class="col-2 py-1 td1 p" style="font-size:0.9em;">{{ $adminList->created_at }}</div>
                                                        <div class="col-2 py-1 td1 p">เพิ่มโดย</div>
                                                        @if($adminList->id != Auth::user()->id)
                                                            <div class="col-1 py-1 td1 text-center"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:0.8em;cursor:pointer;"></i></div>
                                                        @else
                                                            <div class="col-1 py-1 td1 text-center"></div>
                                                        @endif
                                                    </div>
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="admin2" class="tab-pane"><br>
                                    <div class="row">
                                        <div class="col-12 py-3 mb-5" style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                                            <div class="row">
                                                <div class="col-12" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <p class="fontHeader">ผู้ดูแลระบบ</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 line1">
                                                    <div class="row">
                                                        <div class="col-12  mt-2" >
                                                            <form action="{{ route('AddAdmin') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <!-- <input type="text" class="input-update"  placeholder="ชื่อ" require></input> -->
                                                                    <label class="bgInput field-wrap my-1">
                                                                        <p class="fontHeadInput">ชื่อ</p>
                                                                        <input id="name" type="text" name="name" class="input1 p ml-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                    </label>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <p style="color:#ce0005;">{{ $message }}</p>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap my-1">
                                                                        <p class="fontHeadInput">นามสกุล</p>
                                                                        <input id="surname" type="text" name="surname" class="input1 p ml-2 @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required>
                                                                    </label>
                                                                    @error('surname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <p style="color:#ce0005;">{{ $message }}</p>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap my-1">
                                                                        <p class="fontHeadInput">อีเมล</p>
                                                                        <input id="email" type="email" name="email" data-toggle="tooltip" data-placement="bottom" title="example@email.com" class="input1 p ml-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" required> 
                                                                    </label>
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <p style="color:#ce0005;">{{ $message }}</p>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap my-1">
                                                                        <p class="fontHeadInput">รหัสผ่าน</p>
                                                                        <input id="password" type="password" name="password" class="input1 p ml-2 @error('password') is-invalid @enderror" required>
                                                                    </label>
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <p style="color:#ce0005;"v>{{ $message }}</p>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap my-1">
                                                                        <p class="fontHeadInput">ยืนยันรหัสผ่าน</p>
                                                                        <input id="password-confirm" type="password" name="password_confirmation" class="input1 p ml-2" required>
                                                                    </label>
                                                                <div class="input-group col-6 mb-1">
                                                                    <div class="input-group-prepend">
                                                                        <p style="color:#ce0005;" id="MESSAGE"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <button id="submit" name="submit" class="btn-submit" value="submit">
                                                                            <p style="margin:0;color:#ffffff;">ยืนยัน</p>
                                                                        </button>
                                                                    </div>
                                                                    <input type="hidden" name="users_type" value="0">
                                                                    <div class="col-6">
                                                                        <button type="reset" class="btn-cancal">
                                                                            <p style="margin:0;color:#ffffff;">คืนค่า</p>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6">
                                                    <div class="form-group mt-5" align="center">
                                                        <div id="thumb" class="thumb-profile "><img src="home/imgProfile/pic-profile.png"></div>    
                                                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                                                        <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                                        <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
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
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
</script>

@endsection