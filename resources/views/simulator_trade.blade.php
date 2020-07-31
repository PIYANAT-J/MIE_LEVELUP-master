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
                                        <label class="bg-simulate active py-2"> 
                                            <div class="row">
                                                <div class="col-lg-9"><label class="pfontSim">Simulator Trade</label></div>
                                                <div class="col-lg-3 text-center"><i class="fa fa-angle-right" style="font-size:40px;" aria-hidden="true"></i></div>
                                            </div>
                                        </label>
                                    </a>

                                    <a href="/my_trade">
                                        <label class="bg-simulate py-2 mt-2"> 
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
                                <div class="col-12 " style="font-family:myfont;color:#fff;font-size:1.3em;">Simulator Trade
                                    <label class="inputWithIcon3">
                                        <input style="font-family:myfont1;" class="search_btn4" type="text" placeholder="ค้นหา Symbol" aria-label="Search">
                                        <i class="icon-search" aria-hidden="true" style="font-size:18px"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="row pl-4" >
                                <div class="col-lg-8">
                                    <button class="btn-sim2">SET</button>
                                    <button class="btn-sim2">SET50</button>
                                    <button class="btn-sim2">SET100</button>
                                    <button class="btn-sim2">sSET</button>
                                    <button class="btn-sim2">SETCLMV</button>
                                    <br><button class="btn-sim2" id="randomizeData">Randomize Data</button>
                                    <button class="btn-sim2" id="addDataset">Add Dataset</button>
                                    <button class="btn-sim2" id="removeDataset">Remove Dataset</button>
                                    <button class="btn-sim2" id="addData">Add Data</button>
                                    <div class="row mt-2">
                                        <div class="col-lg-12">
                                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade1.png') }}" /></div> -->
                                            <div class="chart">
                                                <!-- <img class="bgchart pl-2" style="width:100%;"  src="{{asset('home/simulator/Simulator_trade2.png') }}" /> -->
                                                <div class="row my-1 px-2">
                                                    <div class="col-6"><label style="font-family:myfont1;font-size:1em;color:#fff;line-height:0;">9 Jun 2020 17:15:29</label></div>
                                                    <div class="col-6 text-right">
                                                    <label style="font-family:myfont1;font-size:1em;color:#fff;line-height:0;">SET :</label>
                                                    <!-- <label style="font-family:myfont1;font-size:1em;color:#ce0005;line-height:0;cursor:pointer">Closed</label> -->
                                                    <label style="font-family:myfont1;font-size:1em;color:#0ce63e;line-height:0;cursor:pointer">Open</label>
                                                    </div>
                                                </div>
                                                <div class="row px-4">
                                                    <div class="col-6 " style="border-bottom:1px solid #373a41;padding-left:0;"><label style="font-family:myfont;font-size:1.5em;color:#fff;line-height:0;">SET</label></div>
                                                    <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;"><label style="font-family:myfont;font-size:1.5em;color:#0ce63e;line-height:0;"> <img style="width:10px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">1,444.63 (+5.97%)</label></div>
                                                    <!-- <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;"><label style="font-family:myfont;font-size:1.5em;color:#ce0005;line-height:0;"><img style="width:10px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">1,444.63 (+5.97%)</label></div> -->
                                                </div>
                                                <div class="row mt-1 px-2">
                                                    <div class="col-6">
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#fff;line-height:0;">Hign :</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#0ce63e;line-height:0;">1,448.13 (+9.47)</label> <br>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#fff;line-height:0;">Low :</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#ce0005;line-height:0;">1,400.13 (-37.67)</label>
                                                    </div>

                                                    <div class="col-6 text-right">
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#455160;line-height:0;">Val (M) :</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#fff;line-height:0;">115,559.91</label> <br>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#455160;line-height:0;">Vol(K) :</label>
                                                        <label style="font-family:myfont1;font-size:0.9em;color:#fff;line-height:0;">26,699,932</label>
                                                    </div>
                                                </div>

                                                <canvas class="pr-2" id="myChart" height="150"></canvas>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-lg-12">
                                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                                            <div class="chart">
                                                <div class="row mx-2 my-2">
                                                    <div class="col-lg-3 bgdetail">
                                                        <label class="detail-rank py-2 my-2">ตารางรวม SET</label>
                                                    </div>
                                                    <div class="col-lg-3 bgdetail">
                                                        <label class="detail-rank py-2 my-2">ล่าสุด</label>
                                                    </div>
                                                    <div class="col-lg-3 bgdetail">
                                                        <label class="detail-rank py-2 my-2">เปลี่ยนแปลง</label>
                                                    </div>
                                                    <div class="col-lg-3 bgdetail">
                                                        <label class="detail-rank py-2 my-2">มูลค่า (ลบ.)</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-3">
                                                        <label class="detailTable my-2">SET</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">1,444.63</label>
                                                        <!-- <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">1,444.63</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2">+5.97</label>
                                                        <!-- <label class="detailTableRed my-2">+5.97</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detail-rank my-2">52,568.36</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-3">
                                                        <label class="detailTable my-2">SET50</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">968.29</label>
                                                        <!-- <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">968.29</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2">+3.17</label>
                                                        <!-- <label class="detailTableRed my-2">+3.17</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detail-rank my-2">31,866.95</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-3">
                                                        <label class="detailTable my-2">SET100</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">2,134.03</label>
                                                        <!-- <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">2,134.03</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2">+9.08</label>
                                                        <!-- <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">9.08</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detail-rank my-2">40,500.04</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-3">
                                                        <label class="detailTable my-2">sSET</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- <label class="detailTableGreen my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">629.46</label> -->
                                                        <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">629.46</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- <label class="detailTableGreen my-2">-2.24</label> -->
                                                        <label class="detailTableRed my-2">-2.24</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detail-rank my-2">2,234.72</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-3">
                                                        <label class="detailTable my-2">SETCLMV</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">953.12</label>
                                                        <!-- <label class="detailTableRed my-2"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">953.12</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detailTableGreen my-2">+2.09</label>
                                                        <!-- <label class="detailTableRed my-2">+2.09</label> -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="detail-rank my-2">15,982.05</label>
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
                                            <label class="btn-sim3">SET</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank1">1</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_1.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">หนึ่ง ร่ำรวยมาก <br> <span style="color:#0ce63e;">+20,556,600$ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">2</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_6.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">สอง รวยจริงจริง <br> <span style="color:#0ce63e;">+20,556,600$ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">3</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_2.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">สาม รวยจริงจริง <br> <span style="color:#0ce63e;">+20,556,600$ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">4</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_3.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">นาย สี่ รวยจริงจริง<br> <span style="color:#0ce63e;">+20,556,600$ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-12" style="border-bottom:1px #a0a0a0 solid;">
                                                    <span class="number-rank2">5</span>
                                                    <div><img class="sidebar-pic3" src="{{asset('dist/images/person_4.jpg') }}" /></div>
                                                    <label class="detail-rank middle3">ห้า รวยจริงจริง<br> <span style="color:#0ce63e;">+20,556,600$ (20%)</span></label>
                                                </div>
                                            </div>

                                            <div class="row pr-5">
                                                <div class="col-lg-12 mt-2">
                                                    <a href="shop"><label class="btn-buyItem2">ดูทั้งหมด</label></a>
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
<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@1.8.0"></script>
    
<script>
var chartColors = {
    red: 'rgb(206, 0, 5)',
    white: 'rgb(255, 255, 255)',
    yellow: 'rgb(230, 185, 38)'
};

function randomScalingFactor() {
	return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
}

function onRefresh(chart) {
	chart.config.data.datasets.forEach(function(dataset) {
		dataset.data.push({
			x: Date.now(),
			y: randomScalingFactor()
		});
	});
}

var color = Chart.helpers.color;
var config = {
	type: 'line',
	data: {
		datasets: [{
			label: 'Dataset 1',
			backgroundColor: color(chartColors.red).alpha(0.5).rgbString(),
			borderColor: chartColors.red,
            borderWidth: 1,
			fill: false,
			lineTension: 0,
			// borderDash: [8, 4],
			data: []
		}, {
			label: 'Dataset 2',
			backgroundColor: color(chartColors.white).alpha(0.5).rgbString(),
			borderColor: chartColors.white,
            borderWidth: 1,
			fill: false,
            lineTension: 0,
			// cubicInterpolationMode: 'monotone',
			data: []
		}]
	},
	options: {
		title: {
			display: false,
			text: 'Line chart (hotizontal scroll) sample'
		},
		scales: {
			xAxes: [{
				type: 'realtime',
				realtime: {
					duration: 20000,
					refresh: 1000,
					delay: 2000,
					onRefresh: onRefresh
				}
			}],
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'value'
				}
			}]
		},
		tooltips: {
			mode: 'nearest',
			intersect: false
		},
		hover: {
			mode: 'nearest',
			intersect: false
		}
	}
};

window.onload = function() {
	var ctx = document.getElementById('myChart').getContext('2d');
	window.myChart = new Chart(ctx, config);
};

document.getElementById('randomizeData').addEventListener('click', function() {
	config.data.datasets.forEach(function(dataset) {
		dataset.data.forEach(function(dataObj) {
			dataObj.y = randomScalingFactor();
		});
	});
	window.myChart.update();
});

var colorNames = Object.keys(chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
	var colorName = colorNames[config.data.datasets.length % colorNames.length];
	var newColor = chartColors[colorName];
	var newDataset = {
		label: 'Dataset ' + (config.data.datasets.length + 1),
		backgroundColor: color(newColor).alpha(0.5).rgbString(),
		borderColor: newColor,
		fill: false,
		lineTension: 0,
		data: []
	};

	config.data.datasets.push(newDataset);
	window.myChart.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
	config.data.datasets.pop();
	window.myChart.update();
});

document.getElementById('addData').addEventListener('click', function() {
	onRefresh(window.myChart);
	window.myChart.update();
});
</script>
@endsection