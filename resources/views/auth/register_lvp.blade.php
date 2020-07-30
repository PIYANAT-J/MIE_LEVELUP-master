@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="text-center block ">
            <div><img class="logo_login" src="{{asset('home/logo/logo_lvp.svg') }}" /></div>
            <div class="my-3"><img class="img_login" src="{{asset('home/images/img_login.svg') }}" /></div>
            <div class="font_login text-center">ยินดีต้อนรับ , Level Up</div>
        </div>

        <div class="col-lg-6"></div>
        <div class="col-lg-6 block3 px-4">
            <div class="row" >
                <div class="col-6">
                    <a href="{{ url('/') }}"><span class="font-login">หน้าแรก</span></a>
                </div>
                <div class="col-6 text-right">
                    <a><span class="btn-login-reg active">สมัครสมาชิก</span></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 "></div>
                <div class="col-lg-8 mt-5" style="padding:0px;">
                    <ul class="nav topnav">
                        <li class="nav-item">
                            <a class="nav-link active top-left" data-toggle="tab" href="#users">ผู้ใช้ทั่วไป</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#delopers">ผู้พัฒนาระบบ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link top-right" data-toggle="tab" href="#sponsers">ผู้สนับสนุน</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="users" class="container tab-pane active">
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                @csrf
                                <div class="my-2" style="font-family: myfont;color: #383838;font-size: 1em; margin-left:-13px">กรุณากรอกข้อมูลให้ครบถ้วน</div>
                                <div class="row ">
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">ชื่อ</label><br>
                                            <input id="name" name="name" class="text-box-reg input-name-reg @error('name') is-denger @enderror"  value="{{ old('name') }}" autocomplete="name">
                                        </label>
                                        @error('name')
                                            <!-- <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span> -->
                                            <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">นามสกุล</label><br>
                                            <input id="surname" name="surname" class="input-name-reg @error('surname') is-invalid @enderror"  value="{{ old('surname') }}" autocomplete="surname">
                                        </label>
                                        @error('surname')
                                            <!-- <span class="text-danger font-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> -->
                                            <span class="text-danger font-error">กรุณากรอกนามสกุล</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12" style="padding:5px 3px 0px 3px;font-famir" data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;" >อีเมล</label><br>
                                            <input id="email" type="email" name="email" class="input-name-reg  @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" >
                                        </label>
                                        @error('email')
                                            <span class="text-danger font-error">อีเมลไม่ถูกต้อง</span>
                                        @enderror    
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่าน</label><br>
                                            <input id="password" type="password" name="password" class="input-name-reg @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                        </label>
                                        @error('password')
                                            <span id="MESSAGE" class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                        @else
                                            <span id="MESSAGE"></span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">ยืนยันรหัสผ่าน</label><br>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="input-name-reg"  autocomplete="new-password">
                                        </label>
                                    </div>
                                    <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <span id="MESSAGE"></span>
                                    </div> -->
                                    <div class="col-lg-12 mt-2" style="padding-left:5px;">
                                        <label style="font-family:myfont;font-size:0.9em;">วิธีตั้งรหัสผ่าน</label> <br>
                                        <label style="font-family:myfont1;font-size:0.8em;">
                                            1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                            2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                            3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                            4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2" style="margin-left:-15px;padding:0;">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox_user" name="accept">
                                        <label for="checkbox_user" class="font-condition" >ยอมรับเงื่อนไข </label>
                                        <a data-toggle="modal" data-target="#myModal" class="" style="color:#ce0005;font-family: myfont;font-size: 1em;text-decoration:underline;cursor: pointer;">ข้อกำหนดและเงื่อนไข</a>
                                        @error('accept')
                                            <span class="text-danger font-error"> (กรุณายอมรับเงื่อนไข)</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button name="submit" class="btn-submit-reg">สมัครสมาชิก
                                        <input type="hidden" name="users_type" value="1">
                                    </button>
                                    <button class="btn-fb-reg"><i class="icon-FBLogo" style="font-size:16px; margin-right:10px;"></i>สมัครผ่าน Facebook</button>
                                </div>
                            </form>
                        </div>
                        
                        <div id="delopers" class="container tab-pane">
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                @csrf
                                <div class="my-2" style="font-family: myfont;color: #383838;font-size: 1em; margin-left:-13px">กรุณากรอกข้อมูลให้ครบถ้วน</div>
                                <div class="row ">
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">ชื่อ</label><br>
                                            <input id="name" name="name" class="input-name-reg @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                        </label>
                                        @error('name')
                                            <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">นามสกุล</label><br>
                                            <input id="surname" name="surname" class="input-name-reg @error('surname') is-invalid @enderror" value="{{ old('surname') }}" autocomplete="surname">
                                        </label>
                                        @error('surname')
                                            <span class="text-danger font-error">กรุณากรอกนามสกุล</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12" style="padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">อีเมล</label><br>
                                            <input id="email" type="email" name="email" class="input-name-reg  @error('email') is-invalid @enderror"  value="{{ old('email') }}" autocomplete="email">
                                        </label>
                                        @error('email')
                                            <span class="text-danger font-error">อีเมลไม่ถูกต้อง</span>
                                        @enderror    
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่าน</label><br>
                                            <input id="password_dev" type="password" name="password" class="input-name-reg @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                        </label>
                                        @error('password')
                                            <span id="MESSAGE-DEV" class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                        @else
                                            <span id="MESSAGE-DEV" style="font-family:myfont1;font-size:0.9em;"></span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <label class="bgInput field-wrap-reg">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">ยืนยันรหัสผ่าน</label><br>
                                            <input id="password-confirm_dev" type="password" name="password_confirmation" class="input-name-reg" autocomplete="new-password">
                                        </label>
                                    </div>
                                    <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                        <span id="MESSAGE-DEV"></span>
                                    </div> -->
                                    <div class="col-lg-12 mt-2" style="padding-left:5px;">
                                        <label style="font-family:myfont;font-size:0.9em;">วิธีตั้งรหัสผ่าน</label> <br>
                                        <label style="font-family:myfont1;font-size:0.8em;">
                                            1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                            2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                            3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                            4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2" style="margin-left:-15px;padding:0;">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox_dev" name="accept_dev">
                                        <label for="checkbox_dev" class="font-condition" >ยอมรับเงื่อนไข </label>
                                        @error('accept_dev')
                                            <span class="text-danger font-error"> (กรุณายอมรับเงื่อนไข)</span>
                                        @enderror
                                        <a data-toggle="modal" data-target="#myModal" class="" style="color:#ce0005;font-family: myfont;font-size: 1em;text-decoration:underline;cursor: pointer;">ข้อกำหนดและเงื่อนไข</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button name="submit" class="btn-submit-reg">สมัครสมาชิก
                                        <input type="hidden" name="users_type" value="2">
                                    </button>
                                    <button class="btn-fb-reg"><i class="icon-FBLogo" style="font-size:1ำท; margin-right:10px;"></i>สมัครผ่าน Facebook</button>
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
                            <div class="my-2" style="font-family: myfont;color: #383838;font-size: 1em; margin-left:-13px">กรุณากรอกข้อมูลให้ครบถ้วน</div>
                            <div class="row mb-2">
                                <ul class="nav topnav1">
                                    <li class="nav-item mr-2">
                                        <a class="nav-link active" data-toggle="tab" href="#type1">บุคคลธรรมดา</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#type2">นิติบุคคล</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div id="type1" class="container tab-pane active">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                        @csrf
                                        <div class="row" style="width: 117%;">
                                            <div class="col-lg-6" style="margin-left:-15px; padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">ชื่อ</label><br>
                                                    <input id="name" name="name" class="input-name-reg @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                                </label>
                                                    @error('name')
                                                            <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                                    @enderror
                                            </div>
                                            <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">นามสกุล</label><br>
                                                    <input id="surname" name="surname" class="input-name-reg @error('surname') is-invalid @enderror" value="{{ old('surname') }}"autocomplete="surname">
                                                </label>
                                                @error('surname')
                                                    <span class="text-danger font-error">กรุณากรอกนามสกุล</span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12" style="margin-left:-15px; padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">อีเมล</label><br>
                                                    <input id="email" type="email" name="email" class="input-name-reg  @error('email') is-invalid @enderror" value="{{ old('email') }}"autocomplete="email">
                                                </label>
                                                @error('email')
                                                    <span class="text-danger font-error">อีเมลไม่ถูกต้อง</span>
                                                @enderror    
                                            </div>
                                            <div class="col-lg-6" style="margin-left:-15px; padding:5px 3px 0px 3px;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่าน</label><br>
                                                    <input id="password_spon" type="password" name="password" class="input-name-reg @error('password') is-invalid @enderror"  min="8"autocomplete="new-password">
                                                </label>
                                                @error('password')
                                                    <span id="MESSAGE-SPON" class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                                @else
                                                    <span id="MESSAGE-SPON" style="font-family:myfont1;font-size:0.9em;"></span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">ยืนยันรหัสผ่าน</label><br>
                                                    <input id="password-confirm_spon" type="password" name="password_confirmation" class="input-name-reg"  autocomplete="new-password">
                                                </label>
                                            </div>

                                            <div class="col-lg-12 mt-2" style="padding-left:0;margin-left:-10px;">
                                                <label style="font-family:myfont;font-size:0.9em;">วิธีตั้งรหัสผ่าน</label> <br>
                                                <label style="font-family:myfont1;font-size:0.8em;">
                                                    1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                                    2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                    3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                    4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                                </label>
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
                                    
                                        <div class="col-lg-12 mb-2" style="margin-left:-30px;padding:0;">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_spon" name="accept_spon">
                                                <label for="checkbox_spon" class="font-condition" >ยอมรับเงื่อนไข </label>
                                                @error('accept_spon')
                                                    <span class="text-danger font-error"> (กรุณายอมรับเงื่อนไข)</span>
                                                @enderror
                                                <a data-toggle="modal" data-target="#myModal3" class="" style="color:#ce0005;font-family: myfont;font-size: 1em;text-decoration:underline;cursor: pointer;">ข้อกำหนดและเงื่อนไข</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="btn-submit-reg" style="margin-left:-13px">สมัครสมาชิก
                                                <input type="hidden" name="users_type" value="3">
                                            </button>
                                            <button class="btn-fb-reg"><i class="icon-FBLogo" style="font-size:16px; margin-right:10px;"></i>สมัครผ่าน Facebook</button>
                                        </div>
                                    </form>
                                </div>
                                
                                <div id="type2" class="container tab-pane">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                                        @csrf
                                        <div class="row" style="width: 117%;">
                                            <div class="col-lg-12" style="margin-left:-15px; padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">ชื่อบริษัท</label><br>
                                                    <input id="name" name="name" class="input-name-reg @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                                </label>
                                                @error('name')
                                                    <span class="text-danger font-error">กรุณากรอกชื่อ</span>
                                                @enderror
                                            </div>
                                            <!-- <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                <input id="surname" name="surname" class="input-name-reg @error('surname') is-invalid @enderror"  placeholder="นามสกุล" value="{{ old('surname') }}" required autocomplete="surname">
                                                @error('surname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> -->
                                            <div class="col-lg-12" style="margin-left:-15px; padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">อีเมล</label><br>
                                                    <input id="email" type="email" name="email" class="input-name-reg  @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
                                                </label>
                                                @error('email')
                                                    <span class="text-danger font-error">อีเมลไม่ถูกต้อง</span>
                                                @enderror    
                                            </div>
                                            <div class="col-lg-6" style="margin-left:-15px; padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่าน</label><br>
                                                    <input id="password_spon2" type="password" name="password" class="input-name-reg @error('password') is-invalid @enderror" min="8" autocomplete="new-password">
                                                </label>
                                                @error('password')
                                                    <span id="MESSAGE-SPON2" class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                                @else
                                                    <span id="MESSAGE-SPON2" style="font-family:myfont1;font-size:0.9em;"></span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                                <label class="bgInput field-wrap-reg">
                                                    <label class="fontHeadInput px-3 pt-2" style="padding:0;">ยืนยันรหัสผ่าน</label><br>
                                                    <input id="password-confirm_spon2" type="password" name="password_confirmation" class="input-name-reg" autocomplete="new-password">
                                                </label>
                                            </div>
                                            <div class="col-lg-12 mt-2" style="padding-left:0;margin-left:-10px;">
                                                <label style="font-family:myfont;font-size:0.9em;">วิธีตั้งรหัสผ่าน</label> <br>
                                                <label style="font-family:myfont1;font-size:0.8em;">
                                                    1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                                    2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                                    3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                                    4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                                                </label>
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
                                
                                        <div class="col-lg-12 mb-2" style="margin-left:-30px;padding:0;">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_spon2" name="accept_spon2">
                                                <label for="checkbox_spon2" class="font-condition" >ยอมรับเงื่อนไข </label>
                                                @error('accept_spon2')
                                                    <span class="text-danger font-error"> (กรุณายอมรับเงื่อนไข)</span>
                                                @enderror
                                                <a data-toggle="modal" data-target="#myModal3" class="" style="color:#ce0005;font-family: myfont;font-size: 1em;text-decoration:underline;cursor: pointer;">ข้อกำหนดและเงื่อนไข</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="btn-submit-reg" style="margin-left:-13px">สมัครสมาชิก
                                                <input type="hidden" name="users_type" value="3">
                                            </button>
                                            <button class="btn-fb-reg"><i class="icon-FBLogo" style="font-size:16px; margin-right:10px;"></i>สมัครผ่าน Facebook</button>
                                        </div>
                                    </form>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 "></div>
            <div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  style="color:#000;font-family:myfont;font-size:1em;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h4>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size:0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้ใช้ทั่วไป
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  style="color: #000;font-family:myfont;font-size:1em;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h4>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้พัฒนาระบบ
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"  style="color: #000;font-family:myfont;font-size:1em;" id="exampleModalLabel">ข้อกำหนดและเงื่อนไข</h4>
        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 0.7em;"></i></button>
      </div>
      <div class="modal-body font-rate-modal">
        เงื่อนไขผู้สนับสนุน
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-cancal" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 bg_login"><div>
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