@extends('layout.header')
@section('content')

<div class="modal fade" id="Users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title"  style="color:#383838;font-weight:800;margin:0;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h1>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size:0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้ใช้ทั่วไป
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">
            <p style="margin:0;">ปิด</p></button>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade" id="Develop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title"  style="color:#383838;font-weight:800;margin:0;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h1>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้พัฒนาระบบ
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">
            <p style="margin:0;">ปิด</p></button>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade" id="Sponsor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title"  style="color:#383838;font-weight:800;margin:0;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h1>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้สนับสนุน
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">
            <p style="margin:0;">ปิด</p></button>
      </div> -->
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row" >
        <div class="col-xl-6 d-none d-lg-block d-xl-block bgLogindark">
            <div class="center-div text-center" style="background-color: #17202c;">
                <img style="width:25%;" src="{{asset('home/logo/logo_lvp.svg') }}" />
                <img class="my-3" style="max-width:100%;" src="{{asset('home/images/img_login.svg') }}" />
                <h6 style="color:#fff;font-weight:800;">ยินดีต้อนรับ , Level Up</h6>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 bgLoginwh">
            <div class="center-div3">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ url('/') }}">
                            <label class="btn-login ">
                                <h1 style="margin:0;color: #383838;">หน้าแรก</h1>
                            </label>
                        </a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register-levelUp') }}">
                            <label class="btn-login active">
                                <h1 style="margin:0;color: #383838;">สมัครสมาชิก</h1>
                            </label>
                        </a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <ul class="nav topnav">
                            <li class="nav-item">
                                <a class="nav-link active" style="border-radius: 6px 0 0 0;" data-toggle="tab" href="#users">
                                    <p style="margin:0;">ผู้ใช้ทั่วไป</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#delopers">
                                    <p style="margin:0;">ผู้พัฒนาระบบ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="border-radius: 0 6px 0 0;" data-toggle="tab" href="#sponsers">
                                    <p style="margin:0;">ผู้สนับสนุน</p>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="users" class="container tab-pane active">
                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                    @csrf
                                    <div class="row my-2">
                                        <h5 style="color: #383838;font-weight:800;margin:0;">กรุณากรอกข้อมูลให้ครบถ้วน</h5>
                                    </div>

                                    <div class="row ">
                                        <div class="col-6" style="padding:0 5px 0 0;">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">ชื่อ</p></label><br>
                                                <input id="name" name="name" class="input1 p ml-2 @error('name') is-denger @enderror"  value="{{ old('name') }}" autocomplete="name">
                                            </label>
                                            @error('name')
                                                <!-- <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span> -->
                                                <h5 style="color:#ce0005;margin:0;">กรุณากรอกชื่อ</h5>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-6" style="padding:0;">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">นามสกุล</p></label><br>
                                                <input id="surname" name="surname" class="input1 p ml-2 @error('surname') is-invalid @enderror"  value="{{ old('surname') }}" autocomplete="surname">
                                            </label>
                                            @error('surname')
                                                <!-- <span class="text-danger font-error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span> -->
                                                <h5 style="color:#ce0005;margin:0;">กรุณากรอกนามสกุล</h5>
                                            @enderror
                                        </div>

                                        <div class="col-12" style="padding:0;" data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">อีเมล</p></label><br>
                                                <input id="email" type="email" name="email" class="input1 p ml-2  @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" >
                                            </label>
                                            @error('email')
                                                <h5 style="color:#ce0005;margin:0;">อีเมลไม่ถูกต้อง</h5>
                                            @enderror    
                                        </div>

                                        <div class="col-6" style="padding:0 5px 0 0;">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                                <input id="password" type="password" name="password" class="input1 p ml-2 @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                            </label>
                                            @error('password')
                                                <h5 id="MESSAGE" style="color:#ce0005;margin:0;">รหัสผ่านไม่ถูกต้อง</h5>
                                            @else
                                                <h5 id="MESSAGE" style="margin:0;"></h5>
                                            @enderror
                                        </div>

                                        <div class="col-6" style="padding:0;">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">ยืนยันรหัสผ่าน</p></label><br>
                                                <input id="password-confirm" type="password" name="password_confirmation" class="input1 p ml-2"  autocomplete="new-password">
                                            </label>
                                        </div>

                                        <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                            <span id="MESSAGE"></span>
                                        </div> -->

                                        <div class="col-lg-12 mt-3" style="padding-left:5px;">
                                            <h5 style="color: #383838;font-weight:800;margin:0;">วิธีตั้งรหัสผ่าน</h5>
                                            <h5 style="color: #383838;margin:0;" class="mt-2">
                                                <!-- 1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br> -->
                                                1. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                2. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                3. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-12 my-2" style="margin-left:-15px;padding:0;">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox_user" name="accept"/>
                                            <label for="checkbox_user" style="margin:0;">
                                                <h5 class="fontCheckCondition">ยอมรับเงื่อนไข
                                                    <a data-toggle="modal" data-target="#Users" style="text-decoration:underline;font-weight:800;color:#ce0005;">ข้อกำหนดและเงื่อนไข</a>
                                                </h5>
                                            </label>
                                            @error('accept')
                                                <h5 style="color:#ce0005;margin:0;line-height:1;"> (กรุณายอมรับเงื่อนไข)</h5>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center" style="padding:0">
                                        <button name="submit" class="btnRed mb-2 mr-2">
                                            <p style="margin:0;">สมัครสมาชิก</p>
                                            <input type="hidden" name="users_type" value="1">
                                        </button>
                                        <button class="btnBlue mb-2">
                                            <label><i class="icon-FBLogo" style=" margin-right:10px;"></i></label>
                                            <label style="padding:0;"><p style="margin:0;">สมัครผ่าน Facebook</p></label>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                            <div id="delopers" class="container tab-pane">
                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                    @csrf
                                    <div class="row my-2">
                                        <h5 style="color: #383838;font-weight:800;margin:0;">กรุณากรอกข้อมูลให้ครบถ้วน</h5>
                                    </div>

                                    <div class="row ">
                                        <div class="col-6" style="padding:0 5px 0 0;">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">ชื่อ</p></label><br>
                                                <input id="name" name="name" class="input1 p ml-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                            </label>
                                            @error('name')
                                                <h5 style="color:#ce0005;margin:0;">กรุณากรอกชื่อ</h5>
                                            @enderror
                                        </div>
                                        <div class="col-6" style="padding:0">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">นามสกุล</p></label><br>
                                                <input id="surname" name="surname" class="input1 p ml-2 @error('surname') is-invalid @enderror" value="{{ old('surname') }}" autocomplete="surname">
                                            </label>
                                            @error('surname')
                                                <h5 style="color:#ce0005;margin:0;">กรุณากรอกนามสกุล</h5>
                                            @enderror
                                        </div>
                                        <div class="col-12" style="padding:0;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                            <label class="bgInput field-wrap my-1">
                                                <label><p class="fontHeadInput">อีเมล</p></label><br>
                                                <input id="email" type="email" name="email" class="input1 p ml-2  @error('email') is-invalid @enderror"  value="{{ old('email') }}" autocomplete="email">
                                            </label>
                                            @error('email')
                                                <h5 style="color:#ce0005;margin:0;">อีเมลไม่ถูกต้อง</h5>
                                            @enderror    
                                        </div>
                                        <div class="col-6" style="padding:0 5px 0 0">
                                            <label class="bgInput field-wrap">
                                                <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                                <input id="password_dev" type="password" name="password" class="input1 p ml-2 @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                            </label>
                                            @error('password')
                                                <h5 id="MESSAGE-DEV" style="color:#ce0005;margin:0;">รหัสผ่านไม่ถูกต้อง</h5>
                                            @else
                                                <h5 id="MESSAGE-DEV" style="margin:0;"></h5>
                                            @enderror
                                        </div>
                                        <div class="col-6" style="padding:0;">
                                            <label class="bgInput field-wrap">
                                            <label><p class="fontHeadInput">ยืนยันรหัสผ่าน</p></label><br>
                                                <input id="password-confirm_dev" type="password" name="password_confirmation" class="input1 p ml-2" autocomplete="new-password">
                                            </label>
                                        </div>
                                        <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                            <span id="MESSAGE-DEV"></span>
                                        </div> -->
                                        <div class="col-12 mt-3" style="padding-left:5px;">
                                            <h5 style="color: #383838;font-weight:800;margin:0;">วิธีตั้งรหัสผ่าน</h5>
                                            <h5 style="color: #383838;margin:0;" class="mt-2">
                                                <!-- 1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br> -->
                                                1. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                2. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                3. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-12 my-2" style="margin-left:-15px;padding:0;">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox_dev" name="accept_dev">
                                            <label for="checkbox_dev" style="margin:0;"> 
                                                <h5 class="fontCheckCondition">ยอมรับเงื่อนไข
                                                    <a data-toggle="modal" data-target="#Develop" style="text-decoration:underline;font-weight:800;color:#ce0005;">ข้อกำหนดและเงื่อนไข</a>
                                                </h5>
                                            </label>
                                            @error('accept_dev')
                                                <h5 style="color:#ce0005;margin:0;line-height:1;">(กรุณายอมรับเงื่อนไข)</h5>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center" style="padding:0">
                                        <button name="submit" class="btnRed mb-2 mr-2" style="padding:0">
                                            <p style="margin:0;padding: 10px;">สมัครสมาชิก</p>
                                            <input type="hidden" name="users_type" value="2">
                                        </button>
                                        <button class="btnBlue mb-2">
                                            <label><i class="icon-FBLogo" style=" margin-right:10px;"></i></label>
                                            <label style="padding:0;"><p style="margin:0;">สมัครผ่าน Facebook</p></label>
                                        </button>
                                    </div>
                                </form>
                                <!-- <div class="my-2" style="font-family: myfont1;color: #383838;font-size: 1em; margin-left:-13px">กรุณากรอกข้อมูลส่วนตัวให้ครบถ้วน</div>
                                <div class="row ">
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="ชื่อ" require></input></div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="นามสกุล" require></input></div>
                                    <div class="col-lg-12" style="padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com"><input type="email" class="input-name-reg"  placeholder="อีเมล"  require></input></div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร"><input type="password" class="input-name-reg"  placeholder="รหัสผ่าน"  min="8" require></input></div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;"><input type="password" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" require></input></div>
                                </div>
                                <div class="my-3" style="font-family:margin-left:-15px">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox_2">
                                        <label for="checkbox_2" class="font-condition" >ยอมรับเงื่อนไข </label>
                                        <a data-toggle="modal" data-target="#myModal2" class="" style="color:#ce0005;font-family: myfont;font-size: 24px;text-decoration:underline;cursor: pointer;">ข้อกำหนดและเงื่อนไข</a>
                                    </div>
                                    <button class="btn-submit-reg" style="margin-left:-13px">สมัครสมาชิก</button>
                                    <button class="btn-fb-reg"><i class="icon-FBLogo" style="font-size:16px; margin-right:10px;"></i>สมัครผ่าน Facebook</button>
                                </div> -->
                            </div>

                            <div id="sponsers" class="container tab-pane">
                                <div class="row my-2">
                                    <h5 style="color: #383838;font-weight:800;margin:0;">กรุณากรอกข้อมูลให้ครบถ้วน</h5>
                                </div>
                                <div class="row mb-2">
                                    <ul class="nav topnav1">
                                        <li class="nav-item mr-3">
                                            <a class="nav-link active" data-toggle="tab" href="#type1">
                                                <p style="margin:0;">บุคคลธรรมดา</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#type2">
                                                <p style="margin:0;">นิติบุคคล</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div id="type1" class="container tab-pane active" style="padding:0;">
                                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6" style="padding:0 5px 0 0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">ชื่อ</p></label><br>
                                                        <input id="name" name="name" class="input1 p ml-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                                    </label>
                                                    @error('name')
                                                        <h5 style="color:#ce0005;margin:0;">กรุณากรอกชื่อ</h5>
                                                    @enderror
                                                </div>
                                                <div class="col-6" style="padding:0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">นามสกุล</p></label><br>
                                                        <input id="surname" name="surname" class="input1 p ml-2 @error('surname') is-invalid @enderror" value="{{ old('surname') }}"autocomplete="surname">
                                                    </label>
                                                    @error('surname')
                                                        <h5 style="color:#ce0005;margin:0;">กรุณากรอกนามสกุล</h5>
                                                    @enderror
                                                </div>
                                                <div class="col-12" style="padding:0;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">อีเมล</p></label><br>
                                                        <input id="email" type="email" name="email" class="input1 p ml-2 @error('email') is-invalid @enderror" value="{{ old('email') }}"autocomplete="email">
                                                    </label>
                                                    @error('email')
                                                        <h5 style="color:#ce0005;margin:0;">อีเมลไม่ถูกต้อง</h5>
                                                    @enderror    
                                                </div>
                                                <div class="col-6" style="padding:0 5px 0 0;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                                        <input id="password_spon" type="password" name="password" class="input1 p ml-2 @error('password') is-invalid @enderror"  min="8"autocomplete="new-password">
                                                    </label>
                                                    @error('password')
                                                        <h5 id="MESSAGE-SPON" style="color:#ce0005;margin:0;">รหัสผ่านไม่ถูกต้อง</h5>
                                                    @else
                                                        <h5 id="MESSAGE-SPON" style="margin:0;"></h5>
                                                    @enderror
                                                </div>
                                                <div class="col-6" style="padding:0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">ยืนยันรหัสผ่าน</p></label><br>
                                                        <input id="password-confirm_spon" type="password" name="password_confirmation" class="input1 p ml-2"  autocomplete="new-password">
                                                    </label>
                                                </div>

                                                <div class="col-12 mt-3" style="padding-left:5px;">
                                                    <h5 style="color: #383838;font-weight:800;margin:0;">วิธีตั้งรหัสผ่าน</h5>
                                                    <h5 style="color: #383838;margin:0;" class="mt-2">
                                                        <!-- 1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br> -->
                                                        1. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                        2. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                        3. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                                    </h5>
                                                </div>
                                                <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                    <span id="MESSAGE-SPON"></span>
                                                </div> -->
                                                <!-- <div class="col-lg-6" style="margin-left:-15px; padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="ชื่อ" require></input></div>
                                                <div class="col-lg-6" style=" padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="นามสกุล" require></input></div>
                                                <div class="col-lg-12" style="margin-left:-15px;padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com"><input type="email" class="input-name-reg"  placeholder="อีเมล"  require></input></div>
                                                <div class="col-lg-6" style="margin-left:-15px;padding:5px 3px 0px 3px;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร"><input type="password" class="input-name-reg"  placeholder="รหัสผ่าน"  min="8" require></input></div>
                                                <div class="col-lg-6" style="padding:5px 3px 0px 3px;"><input type="password" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" require></input></div>   -->
                                            </div>
                                        
                                            <div class="col-lg-12 my-2" style="margin-left:-15px;padding:0;">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox_spon" name="accept_spon">
                                                    <label for="checkbox_spon" style="margin:0;">
                                                        <h5 class="fontCheckCondition">ยอมรับเงื่อนไข
                                                            <a data-toggle="modal" data-target="#Sponsor" style="text-decoration:underline;font-weight:800;color:#ce0005;">ข้อกำหนดและเงื่อนไข</a>
                                                        </h5>
                                                    </label>
                                                    @error('accept_spon')
                                                        <h5 style="color:#ce0005;margin:0;line-height:1;">(กรุณายอมรับเงื่อนไข)</h5>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center mb-2" style="padding:0">
                                                <button name="submit" class="btnRed mb-2 mr-2">
                                                    <p style="margin:0;">สมัครสมาชิก</p>
                                                    <input type="hidden" name="users_type" value="3">
                                                </button>
                                                <button class="btnBlue mb-2">
                                                    <label><i class="icon-FBLogo" style=" margin-right:10px;"></i></label>
                                                    <label style="padding:0;"><p style="margin:0;">สมัครผ่าน Facebook</p></label>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div id="type2" class="container tab-pane" style="padding:0;">
                                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12" style="padding:0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">ชื่อบริษัท</p></label><br>
                                                        <input id="name" name="name" class="input1 p ml-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                                    </label>
                                                    @error('name')
                                                        <h5 style="color:#ce0005;margin:0;">กรุณากรอกชื่อ</h5>
                                                    @enderror
                                                </div>
                                                <div class="col-12" style="padding:0;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                                    <label class="bgInput field-wrap my-1">
                                                        <label><p class="fontHeadInput">อีเมล</p></label><br>
                                                        <input id="email" type="email" name="email" class="input1 p ml-2  @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
                                                    </label>
                                                    @error('email')
                                                        <h5 style="color:#ce0005;margin:0;">อีเมลไม่ถูกต้อง</h5>
                                                    @enderror    
                                                </div>
                                                <div class="col-6" style="padding: 0 5px 0 0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                                        <input id="password_spon2" type="password" name="password" class="input1 p ml-2 @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                                    </label>
                                                    @error('password')
                                                        <h5 id="MESSAGE-SPON2" style="color:#ce0005;margin:0;"">รหัสผ่านไม่ถูกต้อง</h5>
                                                    @else
                                                        <h5 id="MESSAGE-SPON2" style="margin:0;"></h5>
                                                    @enderror
                                                </div>
                                                <div class="col-6" style="padding:0;">
                                                    <label class="bgInput field-wrap">
                                                        <label><p class="fontHeadInput">ยืนยันรหัสผ่าน</p></label><br>
                                                        <input id="password-confirm_spon2" type="password" name="password_confirmation" class="input1 p ml-2" autocomplete="new-password">
                                                    </label>
                                                </div>
                                                <div class="col-12 mt-3" style="padding-left:5px;">
                                                    <h5 style="color: #383838;font-weight:800;margin:0;">วิธีตั้งรหัสผ่าน</h5>
                                                    <h5 style="color: #383838;margin:0;" class="mt-2">
                                                        <!-- 1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br> -->
                                                        1. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                        2. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                        3. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                                    </h5>
                                                </div>
                                                <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                    <span id="MESSAGE-SPON2"></span>
                                                </div> -->
                                                <!-- <div class="col-lg-12" style="margin-left:-15px; padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="ชื่อบริษัท" require></input></div> -->
                                                <!-- <div class="col-lg-6" style=" padding:5px 3px 0px 3px;"><input class="input-name-reg"  placeholder="นามสกุล" require></input></div> -->
                                                <!-- <div class="col-lg-12" style="margin-left:-15px;padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com"><input type="email" class="input-name-reg"  placeholder="อีเมล"  require></input></div>
                                                <div class="col-lg-6" style="margin-left:-15px;padding:5px 3px 0px 3px;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร"><input type="password" class="input-name-reg"  placeholder="รหัสผ่าน"  min="8" require></input></div>
                                                <div class="col-lg-6" style="padding:5px 3px 0px 3px;"><input type="password" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" require></input></div>   -->
                                            </div>
                                    
                                            <div class="col-lg-12 my-2" style="margin-left:-15px;padding:0;">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox_spon2" name="accept_spon2">
                                                    <label for="checkbox_spon2" style="margin:0;">
                                                        <h5 class="fontCheckCondition">ยอมรับเงื่อนไข
                                                            <a data-toggle="modal" data-target="#Sponsor" style="text-decoration:underline;font-weight:800;color:#ce0005;">ข้อกำหนดและเงื่อนไข</a>
                                                        </h5>
                                                    </label>
                                                    @error('accept_spon2')
                                                        <h5 style="color:#ce0005;margin:0;line-height:1;">(กรุณายอมรับเงื่อนไข)</h5>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center mb-2" style="padding:0">
                                                <button name="submit" class="btnRed mb-2 mr-2">
                                                    <p style="margin:0;">สมัครสมาชิก</p>
                                                    <input type="hidden" name="users_type" value="3">
                                                </button>
                                                <button class="btnBlue mb-2">
                                                    <label><i class="icon-FBLogo" style=" margin-right:10px;"></i></label>
                                                    <label style="padding:0;"><p style="margin:0;">สมัครผ่าน Facebook</p></label>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                <div>
           </div>
        </div>
    </div>
<div>



@endsection
@section('script')

<script>
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
    $('#password_dev, #password-confirm_dev').on('keyup', function () {
        if ($('#password_dev').val() == $('#password-confirm_dev').val()) {
            $('#MESSAGE-DEV').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE-DEV').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
    $('#password_spon, #password-confirm_spon').on('keyup', function () {
        if ($('#password_spon').val() == $('#password-confirm_spon').val()) {
            $('#MESSAGE-SPON').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE-SPON').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
    $('#password_spon2, #password-confirm_spon2').on('keyup', function () {
        if ($('#password_spon2').val() == $('#password-confirm_spon2').val()) {
            $('#MESSAGE-SPON2').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE-SPON2').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
</script>

<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
@endsection