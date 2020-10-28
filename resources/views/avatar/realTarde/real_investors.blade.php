@extends('layout.simulator_navbar')
@section('content')

<div class="container-fluid" id="getActive" active="{{ route('RealInvestors') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>
        @include('profile.sidebar.simulator_sidebar')
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>

        <div class="col-sm-12 co-md-12 col-lg-9 col-xl-9" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-12">
                    <h1 style="margin:0;color:#fff;font-weight:800;">Simulator Trade</h1>
                    <!-- <label class="inputWithIcon3">
                        <input style="font-family:myfont1;" class="search_btn4" type="text" placeholder="ค้นหา Symbol" aria-label="Search">
                        <i class="icon-search" aria-hidden="true" style="font-size:18px"></i>
                    </label> -->
                </div>
            </div>
            <div class="row" >
                <div class="col-12">
                    <button class="btn-sim2"><p style="margin:0;">SET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET50</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET100</p></button>
                    <button class="btn-sim2"><p style="margin:0;">sSET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SETCLMV</p></button>
                    <br>
                    <button class="btn-sim2" id="randomizeData"><p style="margin:0;">Randomize Data</p></button>
                    <button class="btn-sim2" id="addDataset"><p style="margin:0;">Add Dataset</p></button>
                    <button class="btn-sim2" id="removeDataset"><p style="margin:0;">Remove Dataset</p></button>
                    <button class="btn-sim2" id="addData"><p style="margin:0;">Add Data</p></button>

                    <div class="row mt-2 d-flex align-items-center">
                        <div class="col-12">
                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade1.png') }}" /></div> -->
                            <div class="chart">
                                <!-- <img class="bgchart pl-2" style="width:100%;"  src="{{asset('home/simulator/Simulator_trade2.png') }}" /> -->
                                <div class="row my-1 px-2">
                                    <div class="col-6"><p style="color:#fff;margin:0">9 Jun 2020 17:15:29</p></div>
                                    <div class="col-6 text-right">
                                    <p style="color:#fff;margin:0">SET :
                                    <!-- <a style="color:#ce0005;cursor:pointer">Closed</a> -->
                                        <a style="color:#0ce63e;cursor:pointer">Open</a>
                                    </p>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-6 pb-2" style="border-bottom:1px solid #373a41;padding-left:0;">
                                        <h4 style="color:#fff;margin:0;font-weight:800;">SET :</h4>
                                    </div>
                                    <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;">
                                        <h4 style="color:#0ce63e;margin:0;font-weight:800;">
                                            <img style="width:15px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">1,444.63 (+5.97%)
                                        </h4>
                                    </div>
                                    <!-- <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;"><label style="font-family:myfont;font-size:1.5em;color:#ce0005;line-height:0;"><img style="width:10px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">1,444.63 (+5.97%)</label></div> -->
                                </div>
                                <div class="row mt-1 px-2">
                                    <div class="col-6">
                                        <label><h5 style="margin:0;color:#fff;">Hign :</h5></label>
                                        <label><h5 style="margin:0;color:#0ce63e;">1,448.13 (+9.47)</h5></label> <br>
                                        <label><h5 style="margin:0;color:#fff;">Low :</h5></label>
                                        <label><h5 style="margin:0;color:#ce0005;">1,400.13 (-37.67)</h5></label>
                                    </div>

                                    <div class="col-6 text-right">
                                        <label><h5 style="margin:0;color:#455160;"> (M) :</h5></label>
                                        <label><h5 style="margin:0;color:#fff;">115,559.91</h5></label> <br>
                                        <label><h5 style="margin:0;color:#455160;">Vol(K) :</h5></label>
                                        <label><h5 style="margin:0;color:#fff;">26,699,932</h5></label>
                                    </div>
                                </div>

                                <canvas class="pr-2" id="myChart" height="150"></canvas>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mb-3">
                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade3.png') }}" /></div> -->
                            <div class="chart">
                                <div class="row  d-flex align-items-center bgdetail" style="margin:0;">
                                    <div class="col-3 " style="padding:5px;">
                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">ตารางรวม SET</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">ล่าสุด</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">เปลี่ยนแปลง</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;"> 
                                        <label class="detail-rank py-2 my-2"><p style="margin:0;">มูลค่า (ลบ.)</p></label>
                                    </div>
                                </div>

                                <div class="row mx-2 ">
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTable"><p style="margin:0;">SET</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <label style="margin:0;"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}"></label>
                                            <label><p style="margin:0;">1,444.63</p></label>
                                        </label>
                                        <!-- <label class="detailTableRed">
                                            <label style="margin:0"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}"></label>
                                            <label><p style="margin:0;">1,444.63</p></label>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <p style="margin:0;">+5.97</p>
                                        </label>
                                        <!-- <label class="detailTableRed ">
                                                <p style="margin:0;">+5.97</p>
                                            </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank">
                                            <p style="margin:0;">52,568.36</p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row mx-2 ">
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTable"><p style="margin:0;">SET50</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <label style="margin:0;"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}"></label>
                                            <label><p style="margin:0;">968.29</p></label>
                                        </label>
                                        <!-- <label class="detailTableRed">
                                            <label style="margin:0"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}"></label>
                                            <label><p style="margin:0;">968.29</p></label>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <p style="margin:0;">+3.17</p>
                                        </label>
                                        <!-- <label class="detailTableRed ">
                                                <p style="margin:0;">+3.17</p>
                                            </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank">
                                            <p style="margin:0;">31,866.95</p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row mx-2 ">
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTable"><p style="margin:0;">SET100</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <label style="margin:0;"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}"></label>
                                            <label><p style="margin:0;">2,134.03</p></label>
                                        </label>
                                        <!-- <label class="detailTableRed">
                                            <label style="margin:0"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}"></label>
                                            <label><p style="margin:0;">2,134.03</p></label>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <p style="margin:0;">+9.08</p>
                                        </label>
                                        <!-- <label class="detailTableRed ">
                                            <p style="margin:0;">+9.08</p>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank">
                                            <p style="margin:0;">40,500.04</p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row mx-2 ">
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTable"><p style="margin:0;">sSET</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <!-- <label class="detailTableGreen">
                                            <label style="margin:0;"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}"></label>
                                            <label><p style="margin:0;">649.02</p></label>
                                        </label> -->
                                        <label class="detailTableRed">
                                            <label style="margin:0"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}"></label>
                                            <label><p style="margin:0;">649.02</p></label>
                                        </label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <!-- <label class="detailTableGreen">
                                            <p style="margin:0;">-2.24</p>
                                        </label> -->
                                        <label class="detailTableRed ">
                                            <p style="margin:0;">-2.24</p>
                                        </label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank">
                                            <p style="margin:0;">2,234.72</p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row mx-2 ">
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTable"><p style="margin:0;">SETCLMV</p></label>
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <label style="margin:0;"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}"></label>
                                            <label><p style="margin:0;">1,212</p></label>
                                        </label>
                                        <!-- <label class="detailTableRed">
                                            <label style="margin:0"><img style="width:8px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}"></label>
                                            <label><p style="margin:0;">1,212</p></label>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detailTableGreen">
                                            <p style="margin:0;">+2.09</p>
                                        </label>
                                        <!-- <label class="detailTableRed ">
                                            <p style="margin:0;">+2.09</p>
                                        </label> -->
                                    </div>
                                    <div class="col-3" style="padding:5px;">
                                        <label class="detail-rank">
                                            <p style="margin:0;">15,982.05</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="mr-1"><h4 style="margin:0;color:#fff;font-weight:800;">Ranking</h4></label>
                                    <label class="btn-sim3"><p style="margin:0;">SET</p></label>
                                </div>
                            </div>
                            <div class="row px-3">
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
                                <div class="col-12 mt-2" style="padding-right:0;">
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
            </div>
        </div>
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