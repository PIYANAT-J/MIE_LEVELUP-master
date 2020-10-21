@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/admin_change_password">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-10" style="background-color:#f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                    <div class="row px-2" >
                        <div style="background-color:#ffffff;border-radius: 8px;">
                            <div class="row">
                                <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                    <h1 class="fontHeader">เปลี่ยนรหัสผ่าน</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12  mt-2" >
                                        <form>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">รหัสผ่านเก่า</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">รหัสผ่านใหม่</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <label class="bgInput field-wrap my-1">
                                                <p class="fontHeadInput">ยืนยันรหัสผ่านใหม่</p>
                                                <input type="password" class="input1 p ml-2" require></input>
                                            </label>
                                            <div class="row">
                                                <div class="col-6" style="padding-right:5px;">
                                                    <button name="submit" value="submit" class="btn-submit mt-2">
                                                        <p style="margin:0;">ยืนยัน</p>
                                                    </button>
                                                </div>
                                                <div class="col-6" style="padding-left:5px;">
                                                    <button type="reset" class="btn-cancal mt-2">
                                                        <p style="margin:0;">รีเซ็ต</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
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
                </div>
            </div>
        </div>
    </div>
</div>


<!-- พื้นหลัง -->
<div class="container-fluid">
    <div class="row">
        <div class="col-2 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 bgContent"></div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val() && $('#password-confirm').val() != null) {
            $('#MESSAGE').html('รหัสผ่านตรงกัน !').css('color', 'green').removeClass('d-none');
        } else 
            $('#MESSAGE').html('รหัสผ่านไม่ตรงกัน !').css('color', '#ce0005').removeClass('d-none');
    });
</script>

<script>
    $(document).ready(function(e) {
        $(".btn-submit.mt-2.re-password").click(function(e) {
            var btnThis = $(this);
            var old_password = $('input[name="old_password"]').val();
            var password = $('input[name="password"]').val();
            var password_confirmation = $('input[name="password_confirmation"]').val();
            var users_type = $(this).parent().find('input[name="users_type"]').val()
            var submit = "submit";

            $('.MError').addClass('d-none');
            $.ajax({
                url: "{{route('passwordUserReset')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    old_password:old_password,
                    password:password,
                    password_confirmation:password_confirmation,
                    users_type:users_type,
                    submit:submit,
                },
                success: function(response) {
                    console.log(response);
                    $(document).ready(function() {
                        $('#popupmodal').modal();
                        $('.success-status.mt-2').html(response.susee);
                        setTimeout(function(){
                            $('#popupmodal').modal('hide')
                        }, 2000);
                        $('input[name="old_password"]').val('');
                        $('input[name="password"]').val('');
                        $('input[name="password_confirmation"]').val('');
                    });
                },
                error: function(response) {
                    json = JSON.parse(response.responseText);
                    console.log(json['errors']);
                    $.each(json['errors'], function (index, value) {
                        $('.'+index).html(value).removeClass('d-none');
                    });
                }
            });
        });
    });
</script>
@endsection