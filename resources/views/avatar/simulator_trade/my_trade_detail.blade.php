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
                                        <a href="/my_trade">
                                            <label class="simulatorLink active">
                                                <p style="margin:0;">การซื้อขายหลักทรัพย์ ของฉัน</p>
                                            </label>
                                        </a> 
                                        <label class="simulatorLink"><p style="margin:0;"> > </p></label>
                                        <label class="simulatorLink"><p style="margin:0;"> RS </p></label>
                                    </label>
                                </div>
                            </div>
                            <div class="row " >
                                <div class="col-12">
                                    <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                                    <div class="chart mb-3">
                                        <div class="row mx-2 my-2">
                                            <div class="col-6 bgdetail">
                                                <label class="detail-rank pt-2"><p style="margin:0;">Price</p></label>
                                            </div>
                                            <div class="col-6 bgdetail text-right pt-2">
                                                <p style="margin:0;color:#fff;">Last : 12.5 Change :<a style="color:#0ce63e;">+5 %</a></p>
                                            </div>
                                        </div>

                                        <div class="row mx-2 ">
                                            <div class="col-12">
                                                <canvas class="pr-2" id="myChart" height="200px"></canvas>
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

                                <div class="col-12">
                                    <div class="chart ">
                                        <div class="row pt-3 ">
                                            <div class="col-10 font-trade-detail text-right">
                                                <h4 style="margin:0;font-size:800;">RS<h4>
                                                <p style="margin:0;">RS PUBLIC COMPANY LIMITED </p>
                                            </div> 
                                            <div class="col-2 font-trade-detail2">
                                                <h4 style="margin:0;font-size:800;">12.70</h4>
                                                <p style="margin:0;">+0.20 (+1.60%)</p>
                                            </div>
                                        </div>

                                        <div class="row mx-2 my-2 mt-3 ">
                                            <div class="col-12 bgdetail">
                                                <label class="detail-rank pt-2"><p style="margin:0;">ราคาวันนี้</p></label>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mx-2 detail-rank2">
                                            <div class="col-3">
                                                <p style="margin:0;">Volume</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">18,869,600</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">Average</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#0ce63e;">12.86</p>
                                            </div>
                                        </div>

                                        <div class="row mx-2 detail-rank2">
                                            <div class="col-3">
                                                <p style="margin:0;">High</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#0ce63e;">13.20</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">Value(K)</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">242,587</p>
                                            </div>
                                        </div>

                                        <div class="row mx-2 detail-rank2">
                                            <div class="col-3">
                                                <p style="margin:0;">Low</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#e6b926;">12.50</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">Ceiling</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#0ce63e;">14.60</p>
                                            </div>
                                        </div>

                                        <div class="row mx-2 detail-rank2">
                                            <div class="col-3">
                                                <p style="margin:0;">Close</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#0ce63e;">12.70</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;">Floor</p>
                                            </div>
                                            <div class="col-3">
                                                <p style="margin:0;color:#0ce63e;">10.80</p>
                                            </div>
                                        </div>

                                        <div class="row mx-2" style="border-bottom: 1px solid #dddddd;">
                                            <div class="col-12">
                                                <label class="detail-rank2">
                                                    <p style="margin:0;"> * ข้อมูลล่าสุด 10 มิ.ย. 2563 14:00:00</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12 text-center">
                                                <a>
                                                    <label class="btnBuy">
                                                        <p style="margin:0;">ซื้อ</p>
                                                    </label>
                                                </a>
                                                <a>
                                                    <label class="btnSell">
                                                        <p style="margin:0;">ขาย</p>
                                                    </label>
                                                </a>
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