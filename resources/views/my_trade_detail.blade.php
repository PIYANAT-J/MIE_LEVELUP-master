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
                                        <a href="/my_trade"><label class="simulatorLink active">การซื้อขายหลักทรัพย์ ของฉัน</label></a> 
                                        <label class="simulatorLink"> > </label>
                                        <label class="simulatorLink"> RS </label>
                                    </label>
                                </div>
                            </div>
                            <div class="row pl-4" >
                                <div class="col-lg-7">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                                            <div class="chart">
                                                <div class="row mx-2 my-2">
                                                    <div class="col-lg-6 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Price</label>
                                                    </div>
                                                    <div class="col-lg-6 bgdetail text-right py-2">
                                                        <label style="font-family:myfont1;font-size:1em;color:#fff;line-height:0;">Last : 12.5 Change :</label>
                                                        <label style="font-family:myfont1;font-size:1em;color:#0ce63e;line-height:0;cursor:pointer">+5 %</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-12">
                                                        <canvas class="pr-2" id="myChart" height="150"></canvas>
                                                    </div>
                                                </div>

                                                <!-- <div class="row mx-2 my-2">
                                                    <div class="col-lg-6 bgdetail">
                                                        <label class="detail-rank py-2 my-2">Acc. Value (‘000 Baht) </label>
                                                    </div>
                                                    <div class="col-lg-6 bgdetail text-right py-2">
                                                        <label style="font-family:myfont1;font-size:1em;color:#fff;line-height:0;">22,345.12</label>
                                                    </div>
                                                </div>

                                                <div class="row mx-2 ">
                                                    <div class="col-lg-12">
                                                        <canvas class="pr-2" id="myChart2" height="150"></canvas>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row chart mr-1 pt-3 pb-2">
                                        <div class="col-7 font-trade-detail ml-1">
                                            <label style="font-size:2em;">RS</label><br>
                                            <label>RS PUBLIC COMPANY LIMITED </label>
                                        </div> 
                                        <div class="col-4 font-trade-detail2">
                                        <label style="font-size:2em;">12.70</label><br>
                                            <label>+0.20 (+1.60%)</label>
                                        </div>
                                    </div>

                                    <div class="row mt-3 mr-1">
                                        <div class="col-lg-12 bgdetail">
                                            <label class="detail-rank pt-2">ราคาวันนี้</label>
                                        </div>
                                    </div>

                                    <div class="row mt-3 mr-1 detail-rank2">
                                        <div class="col-3">
                                            <label>Volume</label>
                                        </div>
                                        <div class="col-3">
                                            <label>18,869,600</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Average</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#0ce63e;">12.86</label>
                                        </div>
                                    </div>
                                    <div class="row mr-1 detail-rank2">
                                        <div class="col-3">
                                            <label>High</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#0ce63e;">13.20</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Value(K)</label>
                                        </div>
                                        <div class="col-3">
                                            <label>242,587</label>
                                        </div>
                                    </div>
                                    <div class="row mr-1 detail-rank2">
                                        <div class="col-3">
                                            <label>Low</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#e6b926;">12.50</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Ceiling</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#0ce63e;">14.60</label>
                                        </div>
                                    </div>
                                    <div class="row mr-1 detail-rank2">
                                        <div class="col-3">
                                            <label>Close</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#0ce63e;">12.70</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Floor</label>
                                        </div>
                                        <div class="col-3">
                                            <label style="color:#0ce63e;">10.80</label>
                                        </div>
                                    </div>
                                    <div class="row pb-3 mr-1" style="border-bottom: 1px solid #dddddd;">
                                        <div class="col-lg-12">
                                            <label class="detail-rank2"> * ข้อมูลล่าสุด 10 มิ.ย. 2563 14:00:00</label>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12 text-center">
                                            <a><label class="btnBuy">ซื้อ</label></a>
                                            <a><label class="btnSell">ขาย</label></a>
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