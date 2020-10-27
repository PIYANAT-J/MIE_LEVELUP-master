@extends('layout.simulator_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('RankingTrade') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>
        @include('profile.sidebar.simulator_sidebar')
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>
       
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-sm-12 co-md-12 col-lg-9 col-xl-9" style="background-color:#141621; ">
                            <div class="row mt-4 pl-2" >
                                <div class="col-12">
                                    <label style="color:#fff;">
                                        <!-- <h1 style="margin:0;color:#fff;font-weight:800;">Simulator Trade</h1> -->
                                        <h4 style="margin:0;color:#fff;">Ranking Top10</41>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3 pl-2" >
                                <div class="col-12 ">
                                    <button class="btn-sim2"><p style="margin:0;">SET</p></button>
                                    <button class="btn-sim2"><p style="margin:0;">SET50</p></button>
                                    <button class="btn-sim2"><p style="margin:0;">SET100</p></button>
                                    <button class="btn-sim2"><p style="margin:0;">sSET</p></button>
                                    <button class="btn-sim2"><p style="margin:0;">SETCLMV</p></button>
                                </div>
                            </div>

                            <div class="row pl-1 pr-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank3">1</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_1.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,556.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">2</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_6.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,550.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">3</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_2.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,400.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">4</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_3.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,300.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">5</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_4.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,200.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">6</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_1.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,100.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">7</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_5.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+20,000.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">8</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_7.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+19,000.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank4">9</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/person_8.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+19,900.00฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2" style="padding-right:0;">
                                            <div class="chart" style="height:115px;">
                                                <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                                <span class="number-rank5">10</span>
                                                <div><img class="sidebar-pic4" src="{{asset('dist/images/img_10.jpg') }}" /></div>
                                                <label class="detail-rank middle4">
                                                    <p style="margin:0">ชื่อ-นามสกุล <br>
                                                    <a style="color:#0ce63e;">+19,800฿ (20%)</a></p>
                                                </label>
                                                <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-2 my-4" >
                                <div class="col-12">
                                    <h4 style="margin:0;color:#fff;">Ranking Top11-100</h4>
                                </div>
                            </div>
                            <div class="row mx-2 mb-3">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 pt-2" style="border:1px solid #dddddd;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_4.jpg') }}" />
                                    <label style="padding:8px 0 8px 80px;">
                                        <p style="margin:0;color:#fff;">11. ชื่อนามสกุล<br>
                                        <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                    </label>
                                    <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                    <!-- <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button> -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 pt-2" style="border:1px solid #dddddd;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_4.jpg') }}" />
                                    <label style="padding:8px 0 8px 80px;">
                                        <p style="margin:0;color:#fff;">12. ชื่อนามสกุล<br>
                                        <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                    </label>
                                    <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                    <!-- <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button> -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 pt-2" style="border:1px solid #dddddd;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_4.jpg') }}" />
                                    <label style="padding:8px 0 8px 80px;">
                                        <p style="margin:0;color:#fff;">13. ชื่อนามสกุล<br>
                                        <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                    </label>
                                    <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                    <!-- <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button> -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 pt-2" style="border:1px solid #dddddd;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_4.jpg') }}" />
                                    <label style="padding:8px 0 8px 80px;">
                                        <p style="margin:0;color:#fff;">14. ชื่อนามสกุล<br>
                                        <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                    </label>
                                    <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                    <!-- <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button> -->
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            @endforeach
        @else
            <div class="col-lg-9" style="background-color:#f5f5f5;">
                <div class="row mt-4" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                        <div class="row">
                            <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                                <span class="font-profile1">ข้อมูลส่วนตัว (ถ้าอัพเดทโปรไฟล์จะได้ พอยท์เพิ่ม 100 พอยท์ )</br><b style="font-size: 18px;color: #666666;">จัดการข้อมูลส่วนตัวคุณของคุณเพื่อให้ใช้งานได้สะดวกขึ้น</b></span>
                            </div>
                        </div>
                        <form action="{{ route('EditProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 line1 mt-2" >
                                            <input name="name" class="input-update" value="{{ Auth::user()->name }}" placeholder="ชื่อ" require></input>
                                            <input name="surname" class="input-update" value="{{ Auth::user()->surname }}" placeholder="นามสกุล" require></input>
                                            <input name="GUEST_USERS_TEL" type="text" class="input-update"  placeholder="เบอร์โทร" data-toggle="tooltip" value="{{ old('GUEST_USERS_TEL') }}" data-placement="bottom" title="ตัวอย่าง:082 222 2222" maxlength="10"></input>
                                            <input name="GUEST_USERS_ID_CARD" type="text" class="input-update"  placeholder="บัตรประจำตัวประชาชน" value="{{ old('GUEST_USERS_ID_CARD') }}" minlength="13" maxlength="13" title="กรุณากรอกข้อมูลให้ครบถ้วน" require></input>
                                            
                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <div class="row mx-0">
                                                    <!-- <input id="GUEST_USERS_BIRTHDAY" name="GUEST_USERS_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="YYYY-MM-DD" value="{{ old('GUEST_USERS_BIRTHDAY') }}" title=""> -->
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="year" name = "yyyy" onchange="change_year(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1"  id ="month" name = "mm" onchange="change_month(this)"></SELECT></div>
                                                        <div class="col-4 mt-2" style="padding:0;"><SELECT  size="1" id ="day" name = "dd" ></SELECT></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit">ยืนยัน
                                                        <!-- <input name="submit" id="submit" type="hidden"> -->
                                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                        <input type="hidden" name="DATE_CREATE" value="{{ date('Y-m-d H:i:s') }}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-5" align="center">
                                        <div id="thumb" class="thumb-profile "><img src="home/imgProfile/pic-profile.png"></div>    
                                        <input id="file_upload" style="display:none" name="GUEST_USERS_IMG" type="file" multiple="true" accept="image/* "/>
                                        <button id="upload" class="btn-upload-pic mt-2">เลือกรูป</button>
                                        <div class="des-profile-pic mt-2">ขนาดไฟล์: สูงสุด 1 MB</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_avatar3"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_avatar2"></div>
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
  $('[data-toggle="popover"]').popover({
    trigger : 'hover',
    html : true,
    content : '<div class="media">คำอธิบาย</div>'
    }); 
});
</script>

<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo1');
    owl.owlCarousel({
        loop:true,
        margin:10,
        navigation : false,
        // navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            730:{
                items:3.3,
                nav:false
            },
            980:{
                items:4.3,
                nav:false
            },
            1000:{
                items:5,
                nav:false
            },
            1280:{
                items:6,
                nav:false
            },
            1600:{
                items:7,
                nav:false
            },
            1680 :{
                items:7.3,
                nav:false,
                loop:true
            },
            1920:{
                items:8.4,
                nav:false,
                loop:true
            }
        }
    });
    
    // Custom Button
    $('.nav-next1').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.nav-prev1').click(function() {
        owl.trigger('prev.owl.carousel');
    });
    
    });
</script>


<script>
    $(document).ready(function() {
    $('.manlist').show();
    $('.womanlist').hide();
    $('input:radio[name="gender2"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == 'man')
        {
        $('.manlist').show();
        $('.womanlist').hide();
            }
    else {
        $('.womanlist').show();
        $('.manlist').hide();
    }
        }
    );
    }
    );
</script>
@endsection