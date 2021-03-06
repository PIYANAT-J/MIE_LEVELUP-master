@extends('layout.header')
@section('content')


<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style=" background-color: #edd0d5;">
            <!-- <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <h1 style="font-weight:800;color:#383838;margin:0;">แจ้งเตือน</h1>
                </div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div> -->

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-12">
                        <div class="row"><label class="massagrbox1" style="text-align:center;">
                        <p style="margin:10px;">{{ Session::get('email') }}</p></label></div>
                        <!-- <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" id="modal" value="modal" class="input-disable" disabled></input></div>
                            <div class="col-9 text-right">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 d-none  d-xl-block bgLogindark">
            <div class="center-div text-center">
                <img style="width:25%;" src="{{asset('home/logo/logo_lvp.svg') }}" />
                <img class="my-3" style="max-width:100%;" src="{{asset('home/images/img_login.svg') }}" />
                <h6 style="color:#fff;font-weight:800;">ยินดีต้อนรับ , Level Up</h6>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 bgLoginwh">
           <div class="center-div2">
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
                            <label class="btn-login ">
                                <h1 style="margin:0;color: #383838;">สมัครสมาชิก</h1>
                            </label>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row text-center">
                                <div class="col-12">
                                    <p style="color:#383838;">กรุณากรอกอีเมลและรหัสผ่านเพื่อเข้าสู่ระบบ</p>
                                </div>
                            </div>
                            
                            <div class="row mt-3 mb-2">
                                <div class="col-12">
                                    <label class="bgInput field-wrap">
                                        <label><p class="fontHeadInput">อีเมลผู้ใช้งาน</p></label><br>
                                        <input type="email" name="email" class="input1 p ml-2 @error('email') is-invalid @enderror" autocomplete="email">
                                    </label>
                                    @error('email')
                                        <h5 style="color:#ce0005;margin:0;">กรุณากรอกอีเมล</h5>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="bgInput field-wrap">
                                        <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                        <input name="password" type='password' class="input1 p ml-2 @error('password') is-invalid @enderror" autocomplete="current-password">
                                    </label>
                                </div>
                            </div>
                            @error('password')
                                <h5 style="color:#ce0005;margin:0;">กรุณากรอกรหัสผ่าน</h5>
                            @enderror
                            <div class="row mt-2">
                                <div class="col-6">
                                    <div class="checkboxLogin">
                                        <input type="checkbox" id="checkbox_1" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                        <label for="checkbox_1"><p class="font-remember2">{{__('จำฉันไว้')}}</p></label>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    @if (Route::has('password.request'))
                                        <a class="forgot-password" href="{{ route('password.request') }}">
                                            <p class="font-remember2 text-right">{{ __('ลืมรหัสผ่าน ?') }}</p>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <button type="submit" name="button" id="submit" value="{{ __('เข้าสู่ระบบ') }}" class="btn-login-2 "><p style="margin:0;">เข้าสู่ระบบ</p></button>
                                </div>
                            </div>
                        </form>
                        <!-- <a class="btn btn-lg btn-primary btn-block" href="{{ route('login-facebook') }}">
                            <strong>Login With Facebook</strong>
                        </a> -->
                        
                        <div class="col-12 text-center mb-3">
                            <a href="{{ route('login-google') }}">
                                <button class="btn-none">
                                    <!-- <i class="icon-FBLogo" style=" margin-right:10px;"></i> -->
                                    <!-- <p style="margin:0;font-weight: 800;">เข้าสู่ระบบด้วย Gmail</p> -->
                                    <img style="width:30px;" src="{{asset('home/logo/google-icon.svg') }}">
                                </button>
                            </a>
                            <a href="{{ route('login-facebook') }}">
                                <button class="btn-none ml-3">
                                    <!-- <i class="icon-FBLogo" style=" margin-right:10px;"></i>
                                    <labal class="p" style="margin:0;font-weight: 800;font-color: #fff !important;">เข้าสู่ระบบด้วย Facebook</labal> -->
                                    <img style="width:32px;" src="{{asset('home/logo/facebook.svg') }}">
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
<div>

@endsection

@section('script')
@if( Session::has('email'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
            setTimeout(function(){
                $('#popupmodal').modal('hide')
            }, 2000);
        });
    </script>
    <!-- <div id="popupmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Notification: Please read</h3>
        </div>
        <div class="modal-body">
            <p>
                {{ Session::get('email') }}
            </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div> -->
@endif
@endsection