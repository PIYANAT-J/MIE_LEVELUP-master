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
                <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                    <div class="row mb-2">
                        <div class="col-5 text-right pr-2">
                            <img class="sidebar-pic" src="{{asset('dist/images/person_1.jpg') }}" />
                        </div>
                        <div class="col-7 sidebar_name pt-2">
                            <span><b style="font-family: myfont;font-size: 1.1em;">ชื่อ-นามสกุล</b></br>ผู้ใช้ทั่วไป</br>เป็นสมาชิก:25/05/63</span>
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
                <div class="col-lg-1"></div>
                <a href="/user_lvp" style="width: 100%;"><button class="btn-sidebar "><i class="icon-profile" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ข้อมูลส่วนตัว</button></a>
                <a href="/user_kyc" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 20px;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน<span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span><span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span><span class="status-kyc2 ml-2 px-2">ยืนยันตัวต้นแล้ว</span></button></a>
                <a href="/user_shelf" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="/user_history" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>ประวัติพอยท์</button></a>
                <a href="/user_rank" style="width: 100%;"><button class="btn-sidebar active"><img class="pic4" src="{{asset('icon/rank1.svg') }}" />อันดับผู้ใช้</button></a>
                <a href="/user_topup" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เติมเงิน</button></a>
                <a href="/user_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:0.85em;padding:0px 17px 0px 10px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                <button class="btn-sidebar"><img class="pic4" src="{{asset('icon/logout.svg') }}" />ออกจากระบบ</button>
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-8 pb-2">
                            <span class="font-profile1">อันดับผู้ใช้</span>
                        </div>
                        <div class="col-3 text-right"><span style="font-family:myfont;font-size:1.2em;color:#000;">พ้อยท์สะสม</span></div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row mt-2 row4 ">
                                <div class="col-lg-12" >
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #d09207;background-color:#f2f2f2;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #eaa200;">1</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_2.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">100,500</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a8a8a8;background-color:#f2f2f2;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #a8a8a8;">2</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_3.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">100,200</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a06868;background-color:#f2f2f2;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #a06868;">3</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_4.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,888</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">4</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">5</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">6</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">7</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">8</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">9</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 sticky">
                                        <div class="col-lg-12" >
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #f2f2f2;background-color:#f2f2f2;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">10</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_1.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล (ตัวเอง)</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">11</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">12</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">13</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">14</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">15</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">16</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">17</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">18</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">19</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-2 line2">
                                        <div class="col-lg-12">
                                            <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;font-family:myfont;font-size:1.3em;color:#000;">
                                                <div class="col-1 number-rank" style="color: #383838;">20</div>
                                                <div class="col-8">
                                                    <img class="sidebar-pic mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-3  text-right">
                                                    <div class="row">
                                                        <div class="col-9" style="position: absolute;top:25%;">98,000</div>
                                                        <div class="col-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
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
<script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

@endsection