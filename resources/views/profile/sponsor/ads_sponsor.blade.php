@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($sponsor as $spon)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้สนับสนุน : บุคคลธรรมดา</br>เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdsSpon') }}" style="width: 100%;"><button class="btn-sidebar active"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">Ads</span>รายการโฆษณา</button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        @foreach($sponsor as $spon)
            @if($spon->USER_EMAIL == Auth::user()->email)
                <div class="col-lg-9" style="background-color:#f5f5f5;">
                    <div class="row mt-4" >
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                            <form action="" method="POST" enctype="multipart/form-data" id="upDate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">ลิงค์โฆษณา<span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 line1 mt-2" >
                                                <label class="bgInput field-wrap my-2">
                                                    <label><p class="fontHeadInput">ชื่อโฆษณา</p></label><br>
                                                    <input type="email" name="email" class="input1 p ml-2 @error('email') is-invalid @enderror"  required autocomplete="email">
                                                </label>
                                                <label class="bgInput field-wrap my-2">
                                                    <label><p class="fontHeadInput">ลิงค์โฆษณา</p></label><br>
                                                    <input type="email" name="email" class="input1 p ml-2 @error('email') is-invalid @enderror"  required autocomplete="email">
                                                </label>
                                                <div class="row ">
                                                    <div class="col-lg-12 mt-2">
                                                        <button name="submit" id="submit" value="submit" type="submit" class="btn-submit">ยืนยัน
                                                            <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                            <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                            <input type="hidden" name="DATE_MODIFY" value="{{ date('Y-m-d H:i:s') }}">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <label class="mt-2" style="font-family:myfont;font-size:0.9em;">เงื่อนไขการโฆษณา</label> <br>
                                        <label style="font-family:myfont1;font-size:0.8em;">
                                            1. ต้องไม่ใช่สินค้าที่ผิดกฎหมาย หรือสินค้าละเมิดลิขสิทธิ์
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>

                    <div class="row my-4" >
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                            <form action="" method="POST" enctype="multipart/form-data" id="upDate">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                        <span class="font-profile1">รายการโฆษณา<span>
                                    </div>
                                </div>

                                <div class="row row5">
                                    <div class="col-lg-12">
                                        <div class="row mx-0 mt-2 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1em;color:#000;">
                                            <div class="col-6">ชื่อโฆษณา</div>
                                            <div class="col-2 text-center">โฆษณา</div>
                                            <div class="col-2 text-center">สถานะ</div>
                                            <div class="col-2 text-center">วัน-เวลา</div>
                                        </div>
                                        <div class="row mx-0 py-2 line2">
                                            <div class="col-6">
                                                <span class="font-game-shelf2" style="color:#000;font-family:myfont1;">ชื่อโฆษณา</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <div class="py-1 p" style="cursor:pointer;text-decoration: underline;color:#0061fc;"data-toggle="modal" data-target="#Ads">โฆษณา</div>
                                            </div>
                                            <div class="col-2 text-center">
                                                <label class="ml-2 px-1 p" style="color:#000;background-color: #ffd629;border-radius: 6px;margin:0;">รออนุมัติ</label></br>
                                                <!-- <label class="ml-2 px-1 p" style="color:#fff;background-color: #23c197;border-radius: 6px;margin:0;">อนุมัติ</label></br> -->
                                                <!-- <label class="ml-2 px-1 p" style="color:#fff;background-color: #ce0005;border-radius: 6px;margin:0;">ไม่อนุมัติ</label></br> -->
                                            </div>
                                            <div class="col-2 text-center"><span class="font-game-shelf2" style="font-size:0.8em;font-family:myfont1;">09:10, 17/05/63</span></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

<div class="modal fade" id="Ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">โฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                    <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
<script src="{{ asset('filter/dependencies/zip.js/zip.js') }}"></script>
<script src="{{ asset('filter/dependencies/JQL.min.js') }}"></script>
<script src="{{ asset('filter/dependencies/typeahead.bundle.js') }}"></script>
<script src="{{ asset('filter/dist/jquery.Thailand.min.js') }}"></script>

@endsection