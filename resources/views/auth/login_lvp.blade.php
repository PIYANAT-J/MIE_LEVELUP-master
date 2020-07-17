@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="text-center block" >
            <div><img class="logo_login" src="{{asset('home/logo/logo_lvp.svg') }}" /></div>
            <div class="my-3"><img class="img_login" src="{{asset('home/images/img_login.svg') }}" /></div>
            <div class="font_login text-center">ยินดีต้อนรับ , Level Up</div>
        </div>
        <div class="col-lg-6"></div>
        <div class="col-lg-6 block2 py-5 px-4">
            <div class="row">
                <div class="col-6">
                    <button class="btn-login ">
                        <!-- <img style="padding:0px 0px 5px 0px;" src="{{asset('/icon/sign_in.svg') }}"> -->
                        <a href="{{ url('/') }}"><span class="font-login">หน้าแรก</span></a>
                    </botton>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('register-levelUp') }}"><span class="btn-login-reg ">สมัครสมาชิก</span></a>
                </div>
            </div>
            <div class="row row2 text-center ">
                <div class="col-sm-12">
                    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span class="font-condition my-3">กรุณากรอกอีเมลและรหัสผ่านเพื่อเข้าสู่ระบบ</span></br>
                        <input type="email" name="email" class="input-login mt-4 mb-2 @error('email') is-invalid @enderror"  placeholder="อีเมลผู้ใช้งาน" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input name="password" type='password' class="input-login @error('password') is-invalid @enderror"  placeholder="รหัสผ่าน" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_1" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                    <label for="checkbox_1" class="font-remember">{{__('จำฉันไว้')}}</label>
                                </div>
                            </div>
                            <div class="col-6 ">
                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        {{ __('ลืมรหัสผ่าน ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <input type="submit" name="button" id="submit" value="{{ __('เข้าสู่ระบบ') }}" class="btn-login-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">แจ้งเตือน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1">
                        <div class="row"><label class="status-none-approve" style="text-align:center;">{{ Session::get('email') }}</label></div>
                        <!-- <div class="row bg-disabled mb-2 py-2">
                            <div class="col-3"><input type="text" id="modal" value="modal" class="input-disable" disabled></input></div>
                            <div class="col-9 text-right">
                            </div>
                        </div> -->
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if( Session::has('email'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
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