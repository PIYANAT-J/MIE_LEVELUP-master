@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">

        <!-- sidebar -->
        <div class="col-3 d-none d-lg-block d-xl-block" style="background-color: #17202c;">
            <div class="row">
                <div class="col-1"></div>
                    @foreach($guest_user as $USER)
                        <div class="col-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-8">
                                    <label class="pt-3">
                                        <h5 style="font-weight:800;margin:0;color:#ffffff;">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h5>
                                        <h5 style="margin:0;color:#ffffff;">สถานะ : ผู้ใช้ทั่วไป</h5>
                                        <h5 style="margin:0;color:#ffffff;">เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</h5>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pt-2">
                                                <h1 class="fontPoint">พอยท์</h1>
                                                <h2 class="fontPoint">100 <i class="icon-Icon_Point"></i></h2>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-point pt-2">
                                                <h1 class="fontPoint">เหรียญ</h1>
                                                <h2 class="fontPoint">100 <i class="icon-Icon_Coin"></i></h2>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-1"></div>

                <a href="{{ route('Avatar') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)</p>
                    </button>
                </a>
                <a href="{{ route('UserProfile') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</p>
                    </button>
                </a>
                <a href="{{ route('UserKyc') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <label style="margin: 0;"><p style="padding:0px 8px 0px 5px;margin: 0;">KYC</p></label>
                        <label style="margin: 0;"><p style="margin: 0;">ยืนยันตัวตน</p></label>
                    @if($userKyc->KYC_STATUS == null)
                        <label style="margin: 0;" class="status-kyc3 "><p style="margin: 0;">กรุณายืนยันตัวตน</p></label>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <label style="margin: 0;" class="status-kyc"><p style="margin: 0;">รอการตรวจสอบ</p></label>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <label style="margin: 0;" class="status-kyc2"><p style="margin: 0;">ยืนยันตัวตนแล้ว</p></label>
                    @else
                        <label style="margin: 0;" class="status-kyc4"><p style="margin: 0;">ไม่ผ่านการอนุมัติ</p></label>
                    @endif
                    </button>
                </a>
                <a href="{{ route('UserShelf') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</p>
                    </button>
                </a>
                <a href="{{ route('UserHistory') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-history menuIcon"></i>ประวัติพอยท์</p>
                    </button>
                </a>
                <a href="{{ route('UserRank') }}" style="width: 100%;">
                    <button class="btn-sidebar active">
                        <p style="margin: 0;"><i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้</p>
                    </button>
                </a>
                <a href="{{ route('UserTopup') }}" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</p>
                    </button>
                </a>
                <a href="/user_change_password" style="width: 100%;">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</p>
                    </button>
                </a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button class="btn-sidebar">
                        <p style="margin: 0;"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</p>
                    </button>
                </a>   
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-sm-12 col-md-12 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px"> 
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-9 pb-2">
                        <h1 class="fontHeader">อันดับผู้ใช้</h1>
                    </div>
                    <div class="col-sm-5 col-md-3 text-right">
                        <h1 class="fontHeader">พอยท์สะสม</h1>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="row mt-2 row4 ">
                            <div class="col-12" >
                                <div class="row mx-0 py-2 line2">
                                    <div class="col-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #d09207;background-color:#f2f2f2;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #eaa200;">1</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_2.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,500</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a8a8a8;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #a8a8a8;">2</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_3.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,200</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a06868;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #a06868;">3</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_4.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">4</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">5</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">6</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">7</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">8</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">9</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 sticky">
                                    <div class="col-lg-12" >
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #f2f2f2;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">10</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_1.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">98,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">11</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">12</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">13</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">14</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">15</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
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
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-xl-9 bgContent"></div>
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

@endsection