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
            <div class="row">
                <div class="col-12 mt-4">
                    <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12  mt-2" >
                                    <!-- <form> -->
                                        <label class="bgInput field-wrap my-1">
                                            <label><p class="fontHeadInput">รหัสผ่านเก่า</p></label>
                                            <label><h5 class="old_password d-none MError" style="color:#ce0005; margin:0"></h5></label>
                                            <input type="password" name="old_password" value="{{old('old_password')}}" class="input1 p ml-2" require></input>
                                        </label>
                                        <label class="bgInput field-wrap my-1">
                                            <div class="d-flex justify-content-start">
                                                <p class="fontHeadInput">รหัสผ่านใหม่</p>
                                                <h5 class="password d-none MError textError" style="color:#ce0005; margin:0"></h5>
                                            </div>
                                            <input id="password" type="password" name="password" value="{{old('password')}}" class="input1 p ml-2 pt-2" require></input>
                                        </label>
                                        <label class="bgInput field-wrap my-1">
                                            <!-- <p class="fontHeadInput">ยืนยันรหัสผ่านใหม่</p> -->
                                            <label><p class="fontHeadInput">ยืนยันรหัสผ่านใหม่</p></label>
                                            <label><h5 id="MESSAGE" class="password_confirmation d-none MError" style="color:#ce0005; margin:0"></h5></label>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="input1 p ml-2" require></input>
                                        </label>
                                        <!-- <p id="MESSAGE" class="password_confirmation d-none MError" style="color:#ce0005;"></p> -->
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" name="submit" value="submit" class="btn-submit mt-2 re-password">
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
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <p class="mt-2" style="margin:0;font-weight:800;">วิธีตั้งรหัสผ่าน</p>
                            <div id="validator-output">
                                <p style="margin:0;color:#ce0005;">
                                    รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร<br>
                                    ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว <br>
                                    ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว <br>
                                    ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว (!@#$%?=*&)<br>
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

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <!-- <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.27 299.9">
                                <defs><style>.cls-1{fill:none;stroke:rgb(15, 175, 23);stroke-miterlimit:10;stroke-width:5px;}</style></defs>
                                <title>check</title>
                                
                                <path id="check" class="cls-1" d="M393.4,124.43,179.6,338.21a40.57,40.57,0,0,1-57.36,0L11.88,227.84a40.56,40.56,0,0,1,57.36-57.36l81.7,81.7L336,67.06a40.56,40.56,0,0,1,57.36,57.36Z" transform="translate(2.5 -52.69)"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;"></p>
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

<style>
    p,.p{
        margin:0;
    }
</style>
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

<script>
    $(function () {
    $("#validator-output").realtimePasswordValidator({
        debug: true,
        input1: $("#password"),
        input2: $("#password-confirm"),
        validators: [
        {
            regexp: ".{8,}",
            message: "<p>รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักษร</p>"
        },
        {
            regexp: "[A-Z]",
            message: "<p>ต้องประกอบด้วยตัวอักษรตัวพิมพ์ใหญ่(A-Z) อย่างน้อย 1 ตัว</p>"
        },
        {
            regexp: "[0-9]",
            message: "<p>ต้องประกอบด้วยตัวเลข(0-9) อย่างน้อย 1 ตัว</p>"
        },
        {
            regexp: ".*[!@#$%?=*&]",
            message: "<p>ต้องประกอบด้วยสัญลักษณ์พิเศษ อย่างน้อย 1 ตัว (!@#$%?=*&)</p>"
        }
        ],
        ok: function (instance) {
        console.log("ok");

        $("#submit").removeAttr("disabled");
        },
        ko: function (instance) {
        console.log("ko");
        $("#submit").attr("disabled", "");
        }
    });
    });

    // plugin definition
    (function ($, window, document, undefined) {
    "use strict";
    var pluginName = "realtimePasswordValidator",
        defaults = {
        debug: false
        };
    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    $.extend(Plugin.prototype, {
        init: function () {
        this.settings.input1.on("input", { self: this }, this.validateEvent);
        this.settings.input2.on("input", { self: this }, this.validateEvent);
        },

        validateEvent: function (event) {
        const self = event.data.self;
        const messages = [];
        let valid_count = 0;
        $(self.element).empty();
        $(self.settings.validators).each(function (index, validator) {
            let valid = false;
            if (validator.regexp)
            valid = new RegExp(validator.regexp).test(self.settings.input1.val());
            if (validator.compare)
            valid = self.settings.input1.val() == $(self.settings.input2).val();
            const message = $("<div>" + validator.message + "</div>");
            message.addClass(valid ? "valid" : "invalid");
            if (self.settings.input1.val().length > 0)
            $(self.element).append(message);
            if (valid) valid_count++;
            if (this.debug)
            console.log(
                index,
                self.settings.input1.val(),
                validator.message,
                valid
            );
        });
        if (valid_count == self.settings.validators.length) {
            if (self.settings.ok) self.settings.ok(self);
        } else {
            if (self.settings.ko) self.settings.ko(self);
        }
        if (this.debug)
            console.log(
            "valid",
            valid_count,
            "of",
            self.settings.validators.length
            );
        }
    });

    $.fn[pluginName] = function (options) {
        return this.each(function () {
        if (!$.data(this, "plugin_" + pluginName)) {
            $.data(this, "plugin_" + pluginName, new Plugin(this, options));
        }
        });
    };
    })(jQuery, window, document);
</script>
@endsection