@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="/my_trade">
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
                            <div class="row mt-4" >
                                <div class="col-12">
                                    <label style="color:#fff;">
                                        <h1 style="margin:0;color:#fff;font-weight:800;">Simulator Trade</h1>
                                        <p style="margin:0;">การซื้อขายหลักทรัพย์ ของฉัน</p>
                                    </label>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                                            <div class="chart">
                                                <div class="row mx-2 my-2">
                                                    <div class="col-4 bgdetail">
                                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">Symbol</p></label>
                                                    </div>
                                                    <div class="col-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">Avail Vol</p></label>
                                                    </div>
                                                    <div class="col-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">Avg</p></label>
                                                    </div>
                                                    <div class="col-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">Market</p></label>
                                                    </div>
                                                    <div class="col-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">%U.PL</p></label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="my_trade_detail">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                            <p style="margin:0;">RS</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">10,300</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">30.55</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">12.7</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <!-- <label class="detailTableGreen my-2"><p style="margin:0;">+58.48</p></label> -->
                                                        <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label>
                                                        <!-- <label class="detail-rank my-2"><p style="margin:0;">12.7</p></label> -->
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="#">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                                <p style="margin:0;">ADVANCE</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">5,400</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">27.68</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">34.67</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detailTableGreen my-2"><p style="margin:0;">+5.67</p></label>
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <!-- <label class="detail-rank my-2"><p style="margin:0;">12.7</p></label> -->
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="#">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                                <p style="margin:0;">DTEC</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">2,500</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">134.89</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">134.89</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <!-- <label class="detailTableGreen my-2"><p style="margin:0;">+5.67</p></label> -->
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <label class="detail-rank my-2"><p style="margin:0;">0</p></label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                    <a href="#">
                                                        <label class="detailTable my-2" style="cursor:pointer;">
                                                            <p style="margin:0;">BBL</p>
                                                        </label>
                                                    </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">100,000</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">33.77</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">23.56</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detailTableGreen my-2"><p style="margin:0;">+10.56</p></label>
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <!-- <label class="detail-rank my-2"><p style="margin:0;">0</p></label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="#">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                                <p style="margin:0;">SCB</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">1,000</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">34.78</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">56.89</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detailTableGreen my-2"><p style="margin:0;">+23.56</p></label>
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <!-- <label class="detail-rank my-2"><p style="margin:0;">0</p></label> -->
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="#">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                                <p style="margin:0;">SCG</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">2,900</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">123.55</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">150.56</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detailTableGreen my-2"><p style="margin:0;">+24.67</p></label>
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <!-- <label class="detail-rank my-2"><p style="margin:0;">0</p></label> -->
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-4">
                                                        <a href="#">
                                                            <label class="detailTable my-2" style="cursor:pointer;">
                                                                <p style="margin:0;">PPT</p>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">3,000</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">234.67</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <label class="detail-rank my-2"><p style="margin:0;">234.67</p></label>
                                                    </div>
                                                    <div class="col-2">
                                                        <!-- <label class="detailTableGreen my-2"><p style="margin:0;">+24.67</p></label> -->
                                                        <!-- <label class="detailTableRed my-2"><p style="margin:0;">-58.48</p></label> -->
                                                        <label class="detail-rank my-2"><p style="margin:0;">0</p></label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 mt-3 py-2" style="border-top:1px solid #dddddd">
                                                    <div class="col-6">
                                                        <label class="detailTable my-2">
                                                            <p style="margin:0;">Total</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <label class="detailTableGreen my-2 pr-2">
                                                            <p style="margin:0;">+198.78 %</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="mr-1"><h4 style="margin:0;color:#fff;font-weight:800;">Ranking</h4></label></label>
                                            <select class="select-trade p">
                                                <option select>SET</option>
                                                <option>SET50</option>
                                                <option>SET100</option>
                                                <option>sSET</option>
                                                <option>SETCLMV</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row pr-3">
                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                            <span class="number-rank1">1</span>
                                            <div><img class="sidebar-pic3" src="{{asset('dist/images/person_1.jpg') }}" /></div>
                                            <div class="detail-rank middle3">
                                                <p style="margin:0;">
                                                    ชื่อ-นามสกุล <br> 
                                                    <a style="color:#0ce63e;">+20,556,600$ (20%)</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                            <span class="number-rank2">2</span>
                                            <div><img class="sidebar-pic3" src="{{asset('dist/images/person_6.jpg') }}" /></div>
                                            <div class="detail-rank middle3">
                                                <p style="margin:0;">
                                                    ชื่อ-นามสกุล <br> 
                                                    <a style="color:#0ce63e;">+20,556,600$ (20%)</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                            <span class="number-rank2">3</span>
                                            <div><img class="sidebar-pic3" src="{{asset('dist/images/person_2.jpg') }}" /></div>
                                            <div class="detail-rank middle3">
                                                <p style="margin:0;">
                                                    ชื่อ-นามสกุล <br> 
                                                    <a style="color:#0ce63e;">+20,556,600$ (20%)</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                            <span class="number-rank2">4</span>
                                            <div><img class="sidebar-pic3" src="{{asset('dist/images/person_3.jpg') }}" /></div>
                                            <div class="detail-rank middle3">
                                                <p style="margin:0;">
                                                    ชื่อ-นามสกุล <br> 
                                                    <a style="color:#0ce63e;">+20,556,600$ (20%)</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                            <span class="number-rank2">5</span>
                                            <div><img class="sidebar-pic3" src="{{asset('dist/images/person_4.jpg') }}" /></div>
                                            <div class="detail-rank middle3">
                                                <p style="margin:0;">
                                                    ชื่อ-นามสกุล <br> 
                                                    <a style="color:#0ce63e;">+20,556,600$ (20%)</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pr-3">
                                        <div class="col-12 mt-2">
                                            <a href="/ranking_trade">
                                                <label class="btn-buyItem2">
                                                    <p style="margin:0;font-weight: 800;">ดูทั้งหมด</p>
                                                </label>
                                            </a>
                                        </div>
                                    </div>
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
<!-- <script>
$('button').on('click', function(){
    $('button').removeClass('active');
    $(this).addClass('active');
});
</script> -->

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