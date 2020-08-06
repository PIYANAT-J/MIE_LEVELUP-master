@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
 
        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #141621;">
            <div class="row">
                <div class="col-lg-1"></div>
                @if(Auth::user()->updateData == 'true')
                    @foreach($guest_user as $USER)
                        <div class="col-lg-10 mb-3 pb-2">
                            <div class="row mb-3 pb-2 pt-4" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                                <div class="col-lg-4 text-right pr-2">
                                    <img class="sidebar-pic2" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name2 pt-3">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="item my-4">
                                        <img class="center"  style="width:50%;" src="{{asset('home/avatar/character/man.png') }}" />
                                    </div>
                                    <a href="shop"><label class="btn-buyItem middle2">ซื้อไอเทม</label></a>
                                </div>
                                  
                            </div>

                            <div class="row mb-2 py-2" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                                <div class="col-lg-12 px-5 my-3">
                                    <label class="font-sim1"><b>$20,000.00</b><br>STARTING PRICE </label>
                                </div>
                                <div class="col-lg-12 px-5">
                                    <label class="font-sim1"><b>$35000.45</b><b style="color:#0ce63e;"> (+5%)</b><br>PERIOD CHANGE</label>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12" style="padding:0px">
                                    <a href="/simulator_trade">
                                        <label class="bg-simulate py-2"> 
                                            <div class="row">
                                                <div class="col-lg-9"><label class="pfontSim">Simulator Trade</label></div>
                                                <div class="col-lg-3 text-center"><i class="fa fa-angle-right" style="font-size:40px;" aria-hidden="true"></i></div>
                                            </div>
                                        </label>
                                    </a>

                                    <a href="/my_trade">
                                        <label class="bg-simulate active py-2 mt-2"> 
                                            <div class="row">
                                                <div class="col-lg-9"><label class="pfontSim">การซื้อขายของฉัน</label></div>
                                                <div class="col-lg-3 text-center"><i class="fa fa-angle-right" style="font-size:40px;" aria-hidden="true"></i></div>
                                            </div>
                                        </label>
                                    </a>

                                    <a href="/ranking_trade">
                                        <label class="bg-simulate py-2 mt-2"> 
                                            <div class="row">
                                                <div class="col-lg-9"><label class="pfontSim">Ranking</label></div>
                                                <div class="col-lg-3 text-center"><i class="fa fa-angle-right" style="font-size:40px;" aria-hidden="true"></i></div>
                                            </div>
                                        </label>
                                    </a>

                                    <a href="/real_investors">
                                        <label class="bg-simulate py-2 mt-2"> 
                                            <div class="row">
                                                <div class="col-lg-9"><label class="pfontSim">นักลงทุนจริง</label></div>
                                                <div class="col-lg-3 text-center"><i class="fa fa-angle-right" style="font-size:40px;" aria-hidden="true"></i></div>
                                            </div>
                                        </label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-lg-4 text-right">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                            </div>
                            <div class="col-lg-8 sidebar_name pt-2">
                                <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-1"></div>
            </div>
        </div>
        <!-- sidebar -->
        <!-- update profile -->
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                @if($USER->USER_ID == Auth::user()->id)
                        <div class="col-lg-9" style="background-color:#141621; ">
                            <div class="row px-4 mt-4" >
                                <div class="col-12">
                                    <label style="color:#fff;line-height:1">
                                        <label style="font-family:myfont;font-size:1.3em;">Simulator Trade</label><br>
                                        <label style="font-family:myfont1;font-size:1em;">การซื้อขายหลักทรัพย์ ของฉัน</label>
                                    </label>
                                </div>
                            </div>
                            <div class="row pl-4" >
                                <div class="col-lg-8">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                                            <div class="chart">
                                                <div class="row mx-2 my-2">
                                                    <div class="col-lg-4 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Symbol</label>
                                                    </div>
                                                    <div class="col-lg-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Avail Vol</label>
                                                    </div>
                                                    <div class="col-lg-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Avg</label>
                                                    </div>
                                                    <div class="col-lg-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Market</label>
                                                    </div>
                                                    <div class="col-lg-2 bgdetail">
                                                        <label class="detail-rank py-2 my-2">%U.PL</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="my_trade_detail"><label class="detailTable my-2" style="cursor:pointer;">RS</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">10,300</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">30.55</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">12.7</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <!-- <label class="detailTableGreen my-2">+58.48</label> -->
                                                        <label class="detailTableRed my-2">-58.48</label>
                                                        <!-- <label class="detail-rank my-2">12.7</label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="#"><label class="detailTable my-2" style="cursor:pointer;">ADVANCE</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">5,400</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">27.68</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">34.67</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detailTableGreen my-2">+5.67</label>
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <!-- <label class="detail-rank my-2">12.7</label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="#"><label class="detailTable my-2" style="cursor:pointer;">DTEC</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">2,500</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">134.89</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">134.89</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <!-- <label class="detailTableGreen my-2">+5.67</label> -->
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <label class="detail-rank my-2">0</label>
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                    <a href="#"><label class="detailTable my-2" style="cursor:pointer;">BBL</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">100,000</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">33.77</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">23.56</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detailTableGreen my-2">+10.56</label>
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <!-- <label class="detail-rank my-2">0</label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="#"><label class="detailTable my-2" style="cursor:pointer;">SCB</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">1,000</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">34.78</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">56.89</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detailTableGreen my-2">+23.56</label>
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <!-- <label class="detail-rank my-2">0</label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="#"><label class="detailTable my-2" style="cursor:pointer;">SCG</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">2,900</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">123.55</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">150.56</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detailTableGreen my-2">+24.67</label>
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <!-- <label class="detail-rank my-2">0</label> -->
                                                    </div>
                                                </div>
                                                <div class="row mx-2 ">
                                                    <div class="col-lg-4">
                                                        <a href="#"><label class="detailTable my-2" style="cursor:pointer;">PPT</label></a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">3,000</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">234.67</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="detail-rank my-2">234.67</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <!-- <label class="detailTableGreen my-2">+24.67</label> -->
                                                        <!-- <label class="detailTableRed my-2">-58.48</label> -->
                                                        <label class="detail-rank my-2">0</label>
                                                    </div>
                                                </div>
                                                <div class="row mx-2 mt-3 py-2" style="border-top:1px solid #dddddd">
                                                    <div class="col-lg-6">
                                                        <label class="detailTable my-2">Total</label>
                                                    </div>
                                                    <div class="col-lg-6 text-right">
                                                        <label class="detailTableGreen my-2 pr-2">+198.78 %</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="mr-1" style="font-family:myfont;color:#fff;font-size:1.5em;">Ranking</label>
                                            <select class="select-trade">
                                                <option select>SET</option>
                                                <option>SET50</option>
                                                <option>SET100</option>
                                                <option>sSET</option>
                                                <option>SETCLMV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank1">1</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_1.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">หนึ่ง ร่ำรวยมาก <br> <span style="color:#0ce63e;">+ 20,556,600 $ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">2</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_6.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">สอง รวยจริงจริง <br> <span style="color:#0ce63e;">+ 20,556,600 $ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">3</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_2.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">สาม รวยจริงจริง <br> <span style="color:#0ce63e;">+ 20,556,600 $ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">4</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_3.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">นาย สี่ รวยจริงจริง<br> <span style="color:#0ce63e;">+ 20,556,600 $ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">5</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_4.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">ห้า รวยจริงจริง<br> <span style="color:#0ce63e;">+ 20,556,600 $ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-lg-12 mt-2">
                                                    <a href="/ranking_trade"><label class="btn-buyItem2">ดูทั้งหมด</label></a>
                                                </div>
                                            </div>
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