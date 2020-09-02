@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="background-color: #17202c;">

        <!-- sidebar -->
            <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-4">
                            <div class="col-4 text-right pr-2">
                                <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                            </div>
                            <div class="col-8 sidebar_name pt-2">
                                <span><b style="font-family: myfont;font-size: 1em;">{{Auth::user()->name}}-{{Auth::user()->surname}}</b></br>Admin</br>เป็นสมาชิก:{{Auth::user()->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <a href="/admin_management" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:0.85em;padding:0px 20px 0px 10px;"></i>จัดการผู้ดูแลระบบ</button></a>
                    <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</button>
                        <div id="demo" class="collapse">
                            <a href="/user_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้ใช้ทั่วไป</button></a>
                            <a href="/develop_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้พัฒนาระบบ</button></a>
                            <a href="/sponsor_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; ผู้สนับสนุน</button></a>
                        </div> 
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2"><img class="pic5" src="{{asset('icon/game.png') }}" />จัดการข้อมูลเกม</button>
                        <div id="demo2" class="collapse">
                            <a href="/game_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การอัพโหลดเกม</button></a>
                            <a href="/rate_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; จัดการประเภทเกม</button></a>
                        </div>
                    <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3"><i class="icon-top-up1" style="font-size:1.1em;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</button>
                        <div id="demo3" class="collapse">
                            <a href="/topup_management" style="width: 100%;"><button class="btn-sidebar " style="padding-left:3.5em;">• &nbsp; &nbsp; การเติมเงิน</button></a>
                            <a href="/withdraw_management" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การถอนเงิน</button></a>
                            <a href="/advertisement" style="width: 100%;"><button class="btn-sidebar" style="padding-left:3.5em;">• &nbsp; &nbsp; การซื้อโฆษณา</button></a>
                        </div>
                    <a href="/product" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-product" style="font-size:1.1em;padding:0px 14px 0px 8px;"></i>จัดการสินค้า</button></a>
                    <a href="/package" style="width: 100%;"><button class="btn-sidebar pt-2"><img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ</button></a>
                    <a href="/avatar_management" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile" style="font-size:1.2vw;padding:0px 14px 0px 8px;"></i>จัดการตัวละคร</button></a>
                    <a href="/admin_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass" style="font-size:1.1em;padding:0px 15px 0px 13px;"></i>เปลี่ยนรหัสผ่าน</button></a>
                    <a href="{{ url('/') }}" style="width: 100%;"><button class="btn-sidebar"><i class="fa fa-home" style="font-size:1em;padding:0px 17px 0px 13px;"></i>หน้าหลัก</button></a>
                    <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout" style="font-size:1.1em;padding:0px 15px 0px 15px;"></i>ออกจากระบบ</button></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-lg-12">
                    <div class="inputWithIcon2">
                        <input style="font-family:myfont1;font-size:1em" class="search_btn2" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-lg-9" style="font-family:myfont;color:#000;font-size:1.2em;">การจัดการสินค้า</div>
                <div class="col-lg-3"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active" data-toggle="tab" href="#Allproduct">ทั้งหมด</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#product2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#product3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link " data-toggle="tab" href="#product4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-lg-12">
                            <div class="tab-content">
                                
                                    <div id="Allproduct" class="tab-pane active">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">รายการสินค้า</div>
                                            <div class="col-3 py-3 th1">ผู้สนับสนุน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-2 py-3 th1">ผู้อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-4 py-1 td1 text-left">เส้นหมี่กึ่งสำเร็จรูปรสต้มยำกุ้ง</div>
                                                    <div class="col-3 py-1 td1">ผู้สนับสนุน1</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                        <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label>
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-2 py-2 td1">admin1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product2" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">รายการสินค้า</div>
                                            <div class="col-3 py-3 th1">ผู้สนับสนุน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-2 py-3 th1">ผู้อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-4 py-1 td1 text-left">เส้นหมี่กึ่งสำเร็จรูปรสต้มยำกุ้ง</div>
                                                    <div class="col-3 py-1 td1">ผู้สนับสนุน1</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove">รอการตรวจสอบ</label>
                                                    </div>
                                                    <div class="col-2 py-2 td1">admin1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product3" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">รายการสินค้า</div>
                                            <div class="col-3 py-3 th1">ผู้สนับสนุน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-2 py-3 th1">ผู้อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-4 py-1 td1 text-left">เส้นหมี่กึ่งสำเร็จรูปรสต้มยำกุ้ง</div>
                                                    <div class="col-3 py-1 td1">ผู้สนับสนุน1</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1">ไม่ผ่านการอนุมัติ</label>
                                                    </div>
                                                    <div class="col-2 py-2 td1">admin1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product4" class="tab-pane">
                                        <div class="row" >
                                            <div class="col-1 py-3 th1">#</div>
                                            <div class="col-4 py-3 th1 text-left">รายการสินค้า</div>
                                            <div class="col-3 py-3 th1">ผู้สนับสนุน</div>
                                            <div class="col-2 py-3 th1">สถานะ</div>
                                            <div class="col-2 py-3 th1">ผู้อนุมัติ</div>
                                        </div>
                                        <div class="row row4"> 
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-1 py-1 td1">1</div>
                                                    <div class="col-4 py-1 td1 text-left">เส้นหมี่กึ่งสำเร็จรูปรสต้มยำกุ้ง</div>
                                                    <div class="col-3 py-1 td1">ผู้สนับสนุน1</div>
                                                    <div class="col-2 py-1 td1">
                                                        <label class="status-approve" data-toggle="modal" data-target="#Approve">อนุมัติแล้ว</label>
                                                    </div>
                                                    <div class="col-2 py-2 td1">admin1</div>
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

<div class="modal fade" id="pendingApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight:800;font-size:1em;color:#000;">อนุมัติสินค้า</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3 mb-2">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pb-1">
                        <div class="row">
                            <div class="col-lg-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product/test.jpg') }}" >
                            </div>
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อสินค้า</label> <br>
                                <input type="text" class="input-login px-3" name="product_name" value="{{old('product_name')}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนสินค้า</label> <br>
                                    <input type="text" class="input-login px-3" name="product_amount" value="{{old('product_amount')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวน Point ที่ใช้แลก</label> <br>
                                    <input type="text" class="input-login px-3" name="product_point" value="{{old('product_point')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap" style="margin-bottom:0;">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">รายละเอียดสินค้า</label> <br>
                                <label class="input-login px-3" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap mt-2">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">วันหมดเขตการแลกสินค้า</label> <br>
                                <input type="text" class="input-login px-3" readonly></input>
                            </label>
                        </div>
                        <div class="custom02 mb-2">
                            <div>
                                <input type="radio" name="Approve" value="อนุมัติแล้ว" id="approve">
                                <label for="approve" style="color:#000;">อนุมัติ</label>
                            </div>
                            <div>
                                <input type="radio" name="Approve" value="ไม่อนุมัติ" id="noneApprove">
                                <label for="noneApprove" style="color:#000;" for="nl">ไม่อนุมัติ</label>
                            </div>
                        </div>
                        <div class="row">
                            <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight:800;font-size:1em;color:#000;">ยืนยีนการโอนเงิน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3 mb-2">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pb-1">
                        <div class="row"><label class="status-approve2" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row">
                            <div class="col-lg-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product/test.jpg') }}" >
                            </div>
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อสินค้า</label> <br>
                                <input type="text" class="input-login px-3" name="product_name" value="{{old('product_name')}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนสินค้า</label> <br>
                                    <input type="text" class="input-login px-3" name="product_amount" value="{{old('product_amount')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวน Point ที่ใช้แลก</label> <br>
                                    <input type="text" class="input-login px-3" name="product_point" value="{{old('product_point')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap" style="margin-bottom:0;">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">รายละเอียดสินค้า</label> <br>
                                <label class="input-login px-3" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap mt-2">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">วันหมดเขตการแลกสินค้า</label> <br>
                                <input type="text" class="input-login px-3" readonly></input>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight:800;font-size:1em;color:#000;">ยืนยีนการโอนเงิน</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3 mb-2">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 pb-1">
                        <div class="row"><label class="status-none-approve2" style="text-align:center;">ไม่ผ่านการอนุมัติ</label></div>
                        <div class="row">
                            <div class="col-lg-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product/test.jpg') }}" >
                            </div>
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อสินค้า</label> <br>
                                <input type="text" class="input-login px-3" name="product_name" value="{{old('product_name')}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวนสินค้า</label> <br>
                                    <input type="text" class="input-login px-3" name="product_amount" value="{{old('product_amount')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">จำนวน Point ที่ใช้แลก</label> <br>
                                    <input type="text" class="input-login px-3" name="product_point" value="{{old('product_point')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap" style="margin-bottom:0;">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">รายละเอียดสินค้า</label> <br>
                                <label class="input-login px-3" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap mt-2">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">วันหมดเขตการแลกสินค้า</label> <br>
                                <input type="text" class="input-login px-3" readonly></input>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- พื้นหลัง -->
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

@endsection