@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="background-color: #17202c;">

        <!-- sidebar -->
            <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-4 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                            </div>
                            <div class="col-8 sidebar_name pt-2">
                                <span><b style="font-family: myfont;">{{Auth::user()->name}}-{{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก:{{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1em;padding:0px 11px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการการอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม/เรทเกม/เรทเนื้อหาเกม</button></a>
                        </div>
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 15px 0px 10px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product" style="font-size:0.85em;padding:0px 15px 0px 5px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ url('/') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-home" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>หน้าหลัก</button></a>
                    <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-lg-12">
                    <div class="inputWithIcon2">
                        <input style="font-family:myfont1;font-size:1em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-lg-12" style="font-family:myfont;color:#000;font-size:1.2em;">ข้อมูลผู้ดูแลระบบ</div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#admin1">รายชื่อผู้ดูแลระบบ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#admin2">เพิ่มผู้ดูแลระบบ</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div id="admin1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-1 py-3 th1">#</div>
                                        <div class="col-3 py-3 th1">ชื่อ</div>
                                        <div class="col-3 py-3 th1">อีเมล</div>
                                        <div class="col-2 py-3 th1">ใช้งานล่าสุด</div>
                                        <div class="col-2 py-3 th1">เพิ่มโดย</div>
                                        <div class="col-1 py-3 th1"></div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                        <?php $i = 1; ?>
                                            @foreach($admin as $adminList)
                                                
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1">{{ $i }}</div>
                                                        <div class="col-3 py-1 td1 ">{{ $adminList->name }}</div>
                                                        <div class="col-3 py-1 td1">{{ $adminList->email }}</div>
                                                        <div class="col-2 py-1 td1" style="font-size:0.9em;">{{ $adminList->created_at }}</div>
                                                        <div class="col-2 py-1 td1">เพิ่มโดย</div>
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
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10 py-3 mb-5" style="background-color:#ffffff;border-radius: 8px;">
                                            <div class="row">
                                                <div class="col-lg-12 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <span class="font-profile1">ผู้ดูแลระบบ</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 line1">
                                                    <div class="row">
                                                        <div class="col-lg-12  mt-2" >
                                                            <form action="{{ route('AddAdmin') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <!-- <input type="text" class="input-update"  placeholder="ชื่อ" require></input> -->
                                                                    <label class="bgInput field-wrap">
                                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อ</label> <br>
                                                                        <input id="name" type="text" name="name" class="input-login px-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                    </label>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap">
                                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">นามสกุล</label> <br>
                                                                        <input id="surname" type="text" name="surname" class="input-login px-3 @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required>
                                                                    </label>
                                                                    @error('surname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap">
                                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">อีเมล</label> <br>
                                                                        <input id="email" type="email" name="email" data-toggle="tooltip" data-placement="bottom" title="example@email.com" class="input-login px-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required> 
                                                                    </label>
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap">
                                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">รหัสผ่าน</label> <br>
                                                                        <input id="password" type="password" name="password" class="input-login px-3 @error('password') is-invalid @enderror" required>
                                                                    </label>
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label class="bgInput field-wrap">
                                                                        <label class="fontHeadInput px-3 py-2" style="padding:0;">ยืนยันรหัสผ่าน</label> <br>
                                                                        <input id="password-confirm" type="password" name="password_confirmation" class="input-login px-3" required>
                                                                    </label>
                                                                <div class="input-group col-lg-6 mb-1">
                                                                    <div class="input-group-prepend">
                                                                        <span id="MESSAGE"></span>
                                                                    </div>
                                                                </div>
                                                                <button id="submit" name="submit" class="btn-submit mt-2" value="submit">ยืนยัน</button>
                                                                <input type="hidden" name="users_type" value="0">
                                                                <button type="reset" class="btn-cancal mt-2">คืนค่า</button>
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
                                        <div class="col-lg-1"></div>
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