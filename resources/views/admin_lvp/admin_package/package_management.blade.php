@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/package">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-6"><h1 class="fontHeader">ข้อมูลแพ็กเกจโฆษณา</h5></div>
                <div class="col-6 text-right" >
                    <div id="first">
                        <select class="SelectWh p">
                            <option value="0">สถานะ</option>
                            <option value="1">รออนุมัติ</option>
                            <option value="2">อนุมัติแล้ว</option>
                            <option value="3">ไม่ผ่าการอนุมัติ</option>
                        </select>
                        <SELECT class="SelectWh p" size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT>
                        <SELECT class="SelectWh p" size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT>
                        <!-- <div class="col-4 mt-2 d-none" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div> -->
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#Package" onClick="myFunction2()">รายการแพ็กเกจโฆษณา</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#Ads" onClick="myFunction()">อนุมัติโฆษณา</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="Package" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 p text-left">แพ็คเกจ</div>
                                        <div class="col-2 py-3 th1 p">ราคา</div>
                                        <div class="col-2 py-3 th1 p">ระยะเวลา</div>
                                        <div class="col-2 py-3 th1 p">รายละเอียด</div>
                                        <div class="col-1 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p text-right">
                                            <p style="cursor:pointer;margin:0;" data-toggle="modal" data-target="#AddPackage"> + เพิ่มแพ็กเกจ</p>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($package as $packageList)
                                                <div class="row">
                                                    <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                    <div class="col-2 py-1 td1 p text-left">{{$packageList->package_name}}</div>
                                                    <div class="col-2 py-1 td1 p">{{$packageList->package_amount}}</div>
                                                    <div class="col-2 py-1 td1 p">{{$packageList->package_season}} เดือน</div>
                                                    <div class="col-2 py-1 td1 p" style="cursor:pointer;text-decoration: underline;color:#0061fc;"data-toggle="modal" data-target="#PackageDetail">เพิ่มเติม</div>
                                                    <div class="col-2 py-1 td1 p text-left">
                                                    @if($packageList->package_status == "true")
                                                        <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                    @else
                                                        <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    @endif
                                                    </div>
                                                    <div class="col-1 py-1 td1 p text-right">
                                                        <i class="fa fa-trash-o mr-3" aria-hidden="true" style="font-size:1em;cursor:pointer;"></i>
                                                        <i class="fa fa-pencil" aria-hidden="true" style="font-size:1em;cursor:pointer;" data-toggle="modal" data-target="#EditPackage"></i>
                                                    </div>
                                                </div>
                                                <?php $i++; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="Ads" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">โฆษณา</div>
                                        <div class="col-2 py-3 th1 p text-left">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">วันที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($advertising as $advertisingAll)
                                                <div class="row">
                                                    <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                    <div class="col-3 py-1 td1 p text-left">{{$advertisingAll->advertising_name}}</div>
                                                    <div class="col-2 py-1 td1 p text-left">{{$advertisingAll->advertising_link}}</div>
                                                    <div class="col-2 py-1 td1 p">
                                                        @if($advertisingAll->advertising_status == "รออนุมัติ")
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$advertisingAll->advertising_id}}">รอการตรวจสอบ</label>
                                                        @elseif($advertisingAll->advertising_status == "true")
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$advertisingAll->advertising_id}}">อนุมัติแล้ว</label>
                                                        @else
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove{{$advertisingAll->advertising_id}}">ไม่ผ่านการอนุมัติ</label>
                                                        @endif
                                                    </div>
                                                    <div class="col-2 py-1 td1 p">{{$advertisingAll->admin_name}}</div>
                                                    <div class="col-2 py-1 td1 p">{{$advertisingAll->advertising_update}}</div>
                                                </div>
                                                <?php $i++; ?>
                                            @endforeach
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

<div class="modal fade" id="AddPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">แพ็กเกจโฆษณา</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">   
                <form action="{{route('addPackage')}}" method="post">
                    @csrf                     
                    <div class="row">
                        <div class="col-12 pl-4">
                            <p style="margin:0;">ข้อมูลแพ็กเกจ</p>
                        </div>
                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อแพ็กเกจ</p>
                                <input name="package_name" value="{{old('package_name')}}" type="text" class="input1 p ml-2" required autofocus>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ราคาแพ็กเกจ</p>
                                <input name="package_amount" value="{{old('package_amount')}}" type="text" class="input1 p ml-2" required autofocus>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ระยะเวลา</p>
                                <select class="MySelect p pl-2" type="text" name="package_season">
                                    <option value="1">1 เดือน</option>
                                    <option value="3">3 เดือน</option>
                                    <option value="6">6 เดือน</option>
                                    <option value="">1 ปี</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-12 pl-4 mt-2">
                            <p style="margin:0;">รายละเอียดแพ็กเกจ</p>
                        </div>
                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">เลือกสนุบสนุนเกมได้ทั้งหมด/เกม</p>
                                <input name="package_game" value="{{old('package_game')}}" class="input1 p ml-2" required autofocus>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ความยาวโฆษณา</p>
                                <select class="MySelect p pl-2" type="text" name="package_length">>
                                    <option value="15">15 วินาที</option>
                                    <option value="30">30 วินาที</option>
                                    <option value="45">45 วินาที</option>
                                    <option value="1">1 นาที</option>
                                </select>
                            </label>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">จำนวนรอบโฆษณา</p>
                                <input name="package_advt" value="{{old('package_advt')}}" class="input1 p ml-2" required autofocus>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <button name="submit" value="submit" class="btn-submit-red">
                                <p style="margin:0;">ยืนยัน</p>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">แก้ไขแพ็กเกจโฆษณา</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">                        
                <div class="row">
                    <div class="col-12 pl-4">
                        <p style="margin:0;">ข้อมูลแพ็กเกจ</p>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อแพ็กเกจ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคาแพ็กเกจ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ระยะเวลา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                    </div>
                    <div class="col-12 pl-4 mt-2">
                        <p style="margin:0;">รายละเอียดแพ็กเกจ</p>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เลือกสนุบสนุนเกมได้ทั้งหมด/เกม</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ความยาวโฆษณา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">จำนวนรอบโฆษณา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                    </div>
                    <div class="checkboxAdmin ml-4 pt-1">
                        <input type="checkbox" id="inactive"/>
                        <label for="inactive" style="margin:0;">
                            <p class="fontCheckbox">ไม่ใช้งาน</p>
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red p">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

<div class="modal fade" id="PackageDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">รายละเอียดแพ็กเกจโฆษณา</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row ">
                    <div class="col-12 mb-3 mt-2">
                        <div class="bgPackage" style="margin:auto;">
                            <label>
                                <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <img src="{{asset('icon/money2.svg') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <label style="font-family:myfont1;font-size:1em;line-height:0.5;color:#000;">แพ็กเกจ 1</label><br>
                                        <label style="font-family:myfont;font-size:1.3em;color:#000;">฿900.00</label>
                                        <label style="font-family:myfont1;font-size:0.9em;color:#000;">/ เดือน</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <label class="btnBuyPackage">
                                            <a href="{{ route('SponsorPayment') }}"><label style="font-family:myfont1;font-size:1em;color:#ffffff;cursor: pointer;">ซื้อเลย</label></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="row my-2 px-4">
                                    <div class="col-12 text-center" style="border-bottom:1px solid #f5f5f5"></div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-12 ">
                                        <label style="font-family:myfont1;font-size:0.9em;font-weight: 800;color:#000;">รายละเอียด</label>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-1">
                                    <div class="col-12 fontDetailPackage">
                                        <div class="input-container">
                                            <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                            <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-1">
                                        <div class="col-lg-12 fontDetailPackage">
                                            <div class="input-container">
                                                <img class="icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">เลือกสนุบสนุนเกมได้ทั้งหมด 20 เกม/เดือน</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">สามารถเลือกเรทเกมได้ทุกชนิด</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">ได้โฆษณาความยาว 15 วินาที</label>
                                            </div>

                                            <div class="input-container">
                                                <img class="imgCorrectPackage icon2" src="{{asset('icon/correct-green.svg') }}">
                                                <label class="input-field ">ได้สูงสุด 2 รอบ/เกม ระยะเวลา 1 เดือน</label>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($advertising as $key=>$advertisingModal)
<div class="modal fade" id="pendingApprove{{$advertisingModal->advertising_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">อนุมัติโฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-12">
                    <iframe style="width:100%;height:385px;" src="{{$advertisingModal->advertising_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <form action="{{route('Advertising')}}" method="post">
                        @csrf
                        <div class="col-12 mb-2 pl-4 custom02">
                            <input type="radio" name="advertising_status" id="approve{{$key}}" value="true">
                            <label for="approve{{$key}}" style="color:#000;">อนุมัติ</label>
                        </div>
                        <div class="col-12 mb-2 pl-4 custom02">
                            <input type="radio" name="advertising_status" id="noneapprove{{$key}}" value="false">
                            <label for="noneapprove{{$key}}" style="color:#000;">ไม่ใอนุมัติ</label>
                        </div>
                        <div class="col-12">
                            <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                            <input type="hidden" name="advertising_id" value="{{$advertisingModal->advertising_id}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$advertisingModal->advertising_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">อนุมัติโฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-12">
                        <label class="status-approve2" >อนุมัติแล้ว</label>
                    </div>
                    <div class="col-12">
                    <iframe style="width:100%;height:385px;" src="{{$advertisingModal->advertising_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="modal-body font-rate-modal">
            <div class="row">
                <div class="col-12">
                    <label class="status-none-approve2">ไม่ผ่านการอนุมัติ</label>
                </div>
                <div class="col-12">
                <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endforeach


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

<!-- วัน เดือน ปีเกิด -->
<script> 
    var Days = [31,28,31,30,31,30,31,31,30,31,30,31];// index => month [0-11]
    $(document).ready(function(){
        var option = '<option  class="font-select" value="day">วัน</option>';
        var selectedDay="day";
        for (var i=1;i <= Days[0];i++){ //add option days
            option += '<option class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#day').append(option);
        $('#day').val(selectedDay);
        var option = '<option class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            // option += '<option value="'+ i + '">' + i + '</option>';
            if(i == 1){
                option += '<option class="font-select"  value="'+ i + '">' + "มกราคม" + '</option>';
            }else if(i == 2){
                option += '<option class="font-select"  value="'+ i + '">' + "กุมภาพันธ์" + '</option>';
            }else if(i == 3){
                option += '<option class="font-select"  value="'+ i + '">' + "มีนาคม" + '</option>';
            }else if(i == 4){
                option += '<option class="font-select"  value="'+ i + '">' + "เมษายน" + '</option>';
            }else if(i == 5){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤษภาคม" + '</option>';
            }else if(i == 6){
                option += '<option class="font-select"  value="'+ i + '">' + "มิถุนายน" + '</option>';
            }else if(i == 7){
                option += '<option class="font-select"  value="'+ i + '">' + "กรกฎาคม" + '</option>';
            }else if(i == 8){
                option += '<option class="font-select"  value="'+ i + '">' + "สิงหาคม" + '</option>';
            }else if(i == 9){
                option += '<option class="font-select"  value="'+ i + '">' + "กันยายน" + '</option>';
            }else if(i == 10){
                option += '<option class="font-select"  value="'+ i + '">' + "ตุลาคม" + '</option>';
            }else if(i == 11){
                option += '<option class="font-select"  value="'+ i + '">' + "พฤศจิกายน" + '</option>';
            }else{
                option += '<option class="font-select"  value="'+ i + '">' + "ธันวาคม" + '</option>';
            }
        }
        $('#month').append(option);
        $('#month').val(selectedMon);
        var option = '<option  class="font-select" value="month">เดือน</option>';
        var selectedMon ="month";
        for (var i=1;i <= 12;i++){
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);
    
        var d = new Date();
        var option = '<option  class="font-select" value="year">ปี</option>';
        selectedYear ="year";
        for (var i=1930;i <= d.getFullYear();i++){// years start i
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });
    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }
    function change_year(select)
    {
        if( isLeapYear( $(select).val() ) )
        {
                Days[1] = 29;
                
        }
        else {
            Days[1] = 28;
        }
        if( $("#month").val() == 2)
                {
                    var day = $('#day');
                    var val = $(day).val();
                    $(day).empty();
                    var option = '<option  class="font-select" value="day">วัน</option>';
                    for (var i=1;i <= Days[1];i++){ //add option days
                            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
                }
                    $(day).append(option);
                    if( val > Days[ month ] )
                    {
                            val = 1;
                    }
                    $(day).val(val);
                }
    }
    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option  class="font-select" value="day">วัน</option>';
        var month = parseInt( $(select).val() ) - 1;
        for (var i=1;i <= Days[ month ];i++){ //add option days
            option += '<option  class="font-select" value="'+ i + '">' + i + '</option>';
        }
        $(day).append(option);
        if( val > Days[ month ] )
        {
            val = 1;
        }
        $(day).val(val);
    }
</script>

<script>
    const myFunction = () => {
    document.getElementById("first").style.display ='block';
    }
    const myFunction2 = () => {
    document.getElementById("first").style.display ='none';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            // alert('yes')
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('success') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@elseif( Session::has('successADVT'))
    <script type="text/javascript">
        $(document).ready(function() {
            // alert('yes')
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('successADVT') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
@endsection