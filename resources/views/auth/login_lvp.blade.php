@extends('layout.header')
@section('content')


<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;;font-size:1.2em;color:#383838;">แจ้งเตือน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1">
                        <div class="row"><label class="massagrbox1" style="text-align:center;">{{ Session::get('email') }}</label></div>
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
        <div class="col-lg-6 col-xl-6 d-none d-lg-block d-xl-block bgLogindark">
            <div class="center-div text-center">
                <img style="width:25%;" src="{{asset('home/logo/logo_lvp.svg') }}" />
                <img class="my-3" style="max-width:100%;" src="{{asset('home/images/img_login.svg') }}" />
                <h6 style="color:#fff">ยินดีต้อนรับ , Level Up</h6>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 bgLoginwh">
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
                            
                            <div class="row mt-3">
                                <div class="col-12">
                                    <label class="bgInput field-wrap my-2">
                                        <label><p class="fontHeadInput">อีเมลผู้ใช้งาน</p></label><br>
                                        <input type="email" name="email" class="input-login p ml-2 @error('email') is-invalid @enderror"  required autocomplete="email">
                                    </label>
                                </div>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="row">
                                    <div class="col-12">
                                        <label class="bgInput field-wrap">
                                            <label><p class="fontHeadInput">รหัสผ่าน</p></label><br>
                                            <input name="password" type='password' class="input-login p ml-2 @error('password') is-invalid @enderror" required autocomplete="current-password">
                                        </label>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="button" id="submit" value="{{ __('เข้าสู่ระบบ') }}" class="btn-login-2 p">เข้าสู่ระบบ</button>
                                </div>
                            </div>
                        </form>
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