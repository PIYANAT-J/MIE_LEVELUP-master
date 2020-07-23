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
                @if(Auth::user()->updateData == 'true')
                    @foreach($developer as $Dev)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-5 text-right pr-2">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$Dev->DEV_IMG) }}" />
                                </div>
                                <div class="col-7 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <button class="btn-point pb-2">
                                        <span class="font-point">พอยท์</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">52</span>
                                        <i class="icon-Icon_Point"></i>
                                    </button>

                                    <button class="btn-coin pb-2">
                                        <span class="font-point">เหรียญ</span></br>
                                        <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">70</span>
                                        <i class="icon-Icon_Coin"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-5 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                            </div>
                            <div class="col-7 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1.1em;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้พัฒนาระบบ</br>เป็นสมาชิก : {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                        <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                            <div class="col-lg-12 text-center">
                                <button class="btn-point pb-2">
                                    <span class="font-point">พอยท์</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">0</span>
                                    <i class="icon-Icon_Point"></i>
                                </button>

                                <button class="btn-coin pb-2">
                                    <span class="font-point">เหรียญ</span></br>
                                    <span style="font-family:myfont;font-size: 3em;line-height: 0.2;color: #ffffff;">0</span>
                                    <i class="icon-Icon_Coin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('DevKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('DevShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('DevUpload') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-upload-game" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>อัพโหลดเกม</button></a>
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-withdraw" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button></a> 
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
                                        <input type="password" name="old_password" value="{{old('old_password')}}" class="input-update"  placeholder="รหัสผ่านเก่า" require></input>
                                        @error('old_password')
                                            <span class="text-danger">รหัสผ่านไม่ถูกต้อง</span>
                                        @enderror
                                        <input id="password" type="password" name="password" value="{{old('password')}}" class="input-update"  placeholder="รหัสผ่านใหม่" require></input>
                                        @error('password')
                                            <span class="text-danger">รหัสผ่านไม่ถูกต้อง</span>
                                        @enderror
                                        <input id="password-confirm" type="password" name="password_confirmation" class="input-update"  placeholder="ยืนยันรหัสผ่านใหม่"></input>
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
                        <div class="col-lg-6"></div>
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
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

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