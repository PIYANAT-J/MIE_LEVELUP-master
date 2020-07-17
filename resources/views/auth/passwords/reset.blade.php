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
                    <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <span class="font-condition my-3">กรุณากรอกรหัสผ่านใหม่</span></br>
                        <div class="col-lg-12" style="padding:5px 3px 0px 3px;"data-toggle="tooltip" data-placement="bottom" title="example@email.com">
                            <input type="email" name="email" class="input-name-reg  @error('email') is-invalid @enderror"  placeholder="อีเมล" value="{{ $email ?? old('email') }}" readonly>
                            @error('email')
                                <span class="text-danger">อีเมลไม่ถูกต้อง...</span>
                            @enderror    
                        </div>
                        <div class="col-lg-6" style="padding:5px 3px 0px 3px;" data-toggle="tooltip" data-placement="bottom" title="อย่างน้อย 8 ตัวอักษร">
                            <input id="password" type="password" name="password" class="input-name-reg @error('password') is-invalid @enderror"  placeholder="รหัสผ่าน"  min="8" autocomplete="new-password">
                            @error('password')
                                <span id="MESSAGE" class="text-danger">รหัสผ่านไม่ถูกต้อง...</span>
                            @else
                                <span id="MESSAGE"></span>
                            @enderror
                        </div>
                        <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                            <input id="password-confirm" type="password" name="password_confirmation" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" autocomplete="new-password">
                        </div>
                        <button class="btn-submit-reg" style="margin-left:-13px">ยืนยัน
                            <input type="hidden" name="submit" value="{{ __('Reset Password') }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                        </button>
                        <!-- <input type="submit" name="button" id="submit" value="{{ __('Send Password Reset Link') }}" class="btn-login-2"> -->
                    </form>
                </div>
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
    $('button').on('click', function(){
        $('button').removeClass('active');
        $(this).addClass('active');
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