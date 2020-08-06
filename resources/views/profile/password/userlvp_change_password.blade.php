@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($guest_user as $USER)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">100</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('Avatar') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)</button></a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวตนแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('UserRank') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-star-o menuIcon" ></i>อันดับผู้ใช้</button></a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon"></i>ออกจากระบบ</button></a>  
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-12 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                            <span class="font-profile1">เปลี่ยนรหัสผ่าน</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12  mt-2" >
                                    <form action="{{ route('passwordUserReset') }}" method="post">
                                        @csrf
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่านเก่า</label> <br>
                                            <input type="password" name="old_password" value="{{old('old_password')}}" class="input-login px-3" require></input>
                                        </label>
                                        @error('old_password')
                                            <span class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                        @enderror
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">รหัสผ่านใหม่</label> <br>
                                            <input id="password" type="password" name="password" value="{{old('password')}}" class="input-login px-3" require></input>
                                        </label>
                                        @error('password')
                                            <span class="text-danger font-error">รหัสผ่านไม่ถูกต้อง</span>
                                        @enderror
                                        <label class="bgInput field-wrap">
                                            <label class="fontHeadInput px-3 pt-2" style="padding:0;">ยืนยันรหัสผ่านใหม่</label> <br>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="input-login px-3" require></input>
                                        </label>
                                        <!-- <input id="password-confirm" type="password" name="password_confirmation" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" autocomplete="new-password"> -->
                                        <div class="col-lg-6" style="padding:5px 3px 0px 3px;">
                                            <span id="MESSAGE"></span>
                                        </div>
                                        <button name="submit" value="submit" class="btn-submit mt-2">ยืนยัน</button>
                                        <button type="reset" class="btn-cancal mt-2">รีเซ็ต</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="mt-2" style="font-family:myfont;font-size:0.9em;">วิธีตั้งรหัสผ่าน</label> <br>
                            <label style="font-family:myfont1;font-size:0.8em;">
                                1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
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
                        <div class="row"><label class="status-approve" style="text-align:center;">{{ Session::get('susee') }}</label></div>
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
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
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

@if( Session::has('susee'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
            // alert("{{Session::get('susee')}}");
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