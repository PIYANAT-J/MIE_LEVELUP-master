@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="/develper_change_password">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
    @include('profile.sidebar.dev_sidebar')

    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;">    
        <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
            <div class="row">
                <div class="col-12  pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                    <h1 class="fontHeader">เปลี่ยนรหัสผ่าน</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12  mt-2" >
                            <form action="{{ route('passwordUserReset') }}" method="post">
                                @csrf
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">รหัสผ่านเก่า</p>
                                    <input type="password" name="old_password" value="{{old('old_password')}}" class="input1 p ml-2" require></input>
                                </label>
                                @error('old_password')
                                    <p style="color:#ce0005;">รหัสผ่านไม่ถูกต้อง</p>
                                @enderror
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">รหัสผ่านใหม่</p>
                                    <input id="password" type="password" name="password" value="{{old('password')}}" class="input1 p ml-2" require></input>
                                </label>
                                @error('password')
                                    <p style="color:#ce0005;">รหัสผ่านไม่ถูกต้อง</p>
                                @enderror
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">ยืนยันรหัสผ่านใหม่</p>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="input1 p ml-2"></input>
                                    <!-- <input id="password-confirm" type="password" name="password_confirmation" class="input-name-reg"  placeholder="ยืนยันรหัสผ่าน" autocomplete="new-password"> -->
                                </label>
                                <div class="col-12" style="padding:5px 3px 0px 3px;">
                                    <span id="MESSAGE"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button name="submit" value="submit" class="btn-submit mt-2">
                                            <p style="margin:0;">ยืนยัน</p>
                                            <input type="hidden" name="users_type" value="{{Auth::user()->users_type}}">
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="reset" class="btn-cancal mt-2">
                                            <p style="margin:0;">รีเซ็ต</p>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p class="mt-2" style="margin:0;font-weight:800;">วิธีตั้งรหัสผ่าน</p>
                    <p style="margin:0;">
                        1. รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                        2. ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                        3. ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                        4. ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
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
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
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
@endif

@endsection