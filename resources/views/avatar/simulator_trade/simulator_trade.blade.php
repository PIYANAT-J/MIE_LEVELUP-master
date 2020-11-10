@extends('layout.simulator_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('SimulatorTrade') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>
        @include('profile.sidebar.simulator_sidebar')
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>

        <div class="col-sm-12 co-md-12 col-lg-9 col-xl-9" style="background-color:#141621;">
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
                    {{-- <button class="btn-sim2"><p style="margin:0;">SET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET50</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET100</p></button>
                    <button class="btn-sim2"><p style="margin:0;">sSET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SETCLMV</p></button>
                    <br>
                    <button class="btn-sim2" id="randomizeData"><p style="margin:0;">Randomize Data</p></button>
                    <button class="btn-sim2" id="addDataset"><p style="margin:0;">Add Dataset</p></button>
                    <button class="btn-sim2" id="removeDataset"><p style="margin:0;">Remove Dataset</p></button>
                    <button class="btn-sim2" id="addData"><p style="margin:0;">Add Data</p></button> --}}

                    <button type="button" class="btn-sim2 next-simulator d-none"><p style="margin:0;">START</p></button>
                    <!-- <button class="btn-sim2" id="stop"><p style="margin:0;">SET</p></button> -->
                    <div class="row my-2">
                        <div class="col-12">
                            <!-- <div><img style="width:100%;" src="{{asset('home/simulator/Simulator_trade1.png') }}" /></div> -->
                            <div class="chart">
                                <!-- <img class="bgchart pl-2" style="width:100%;"  src="{{asset('home/simulator/Simulator_trade2.png') }}" /> -->
                                <div class="row my-1 px-2">
                                    <div class="col-6"><p style="color:#fff;margin:0">{{date("j F Y")}}</p></div>
                                    <div class="col-6 text-right">
                                    <!-- <p style="color:#fff;margin:0">SET :
                                        <a style="color:#ce0005;cursor:pointer">Closed</a>
                                        <a style="color:#0ce63e;cursor:pointer">Open</a>
                                    </p> -->
                                    <p id="money-simulator" style="color:#fff;margin:0">MONEY :
                                        @if(isset($amount_trade->amount))
                                            <span>{{number_format($amount_trade->amount, 2)}}฿</span>
                                            <input type="hidden" name="amount_simula" value="{{$amount_trade->amount}}">
                                            <input type="hidden" name="status" value="false">
                                        @else
                                            <span>0.00</span>
                                            <input type="hidden" name="amount_simula" value="0">
                                            <input type="hidden" name="status" value="false">
                                        @endif
                                        
                                        <!-- <span style="color:#ce0005;cursor:pointer">....</span> -->
                                        <!-- <a style="color:#0ce63e;cursor:pointer">Open</a> -->
                                    </p>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-6 pb-2" style="border-bottom:1px solid #373a41;padding-left:0;">
                                        <h4 class="symbol" style="color:#fff;margin:0;font-weight:800;">SYMBOL : <span>....</span></h4>
                                    </div>
                                    <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;">
                                        <h4 class="symbol-open" style="color:#0ce63e;margin:0;font-weight:800;">
                                            <img style="width:15px;margin: 0 3px 3px 0;" src="{{asset('icon/up-green.svg')}}">
                                            <span>....</span>
                                        </h4>
                                    </div>
                                    <!-- <div class="col-6 text-right" style="border-bottom:1px solid #373a41;padding-right:0;"><label style="font-family:myfont;font-size:1.5em;color:#ce0005;line-height:0;"><img style="width:10px;margin: 0 3px 3px 0;" src="{{asset('icon/down-red.svg')}}">1,444.63 (+5.97%)</label></div> -->
                                </div>
                                <div class="row mt-1 px-2">
                                    <!-- <div class="col-6">
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
                                    </div> -->
                                </div>

                                <!-- <div id="myChart-div">
                                    <canvas class="pr-2" id="myChart" height="150"></canvas>
                                </div> -->
                                <div id="myChart-div">
                                    <div class="pr-2 heightChartSim" id="chartContainer" >
                                        <div class="simulator-label text-center">
                                            <h3>Simulator trade</h3>
                                        <!-- <button type="button" class="btn-simulator next-simulator" > -->
                                            <svg type="button" class="next-simulator pBTNPlay" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><circle cx="256" cy="256" fill="#d80027" r="240"/>
                                            <path d="m208.538 344v-176l145.924 88z" fill="#e0e0e2"/></g><g><g>
                                            <path d="m431.36 80.64a248 248 0 1 0 -350.72 350.72 248 248 0 1 0 350.72-350.72zm-11.31 339.41a232 232 0 0 1 -328.1-328.1 232 232 0 0 1 328.1 328.1z"/>
                                            <path d="m176 464.7a7.982 7.982 0 0 1 -2.963-.571 224.077 224.077 0 0 1 -141.037-208.129 8 8 0 0 1 16 0 208.073 208.073 0 0 0 130.965 193.271 8 8 0 0 1 -2.965 15.429z"/>
                                            <path d="m216.009 476.305a8.072 8.072 0 0 1 -1.482-.138c-5.557-1.041-11.141-2.309-16.595-3.77a8 8 0 1 1 4.136-15.455c5.063 1.355 10.245 2.533 15.405 3.5a8 8 0 0 1 -1.464 15.865z"/></g>
                                            <path d="m208.538 352a8 8 0 0 1 -8-8v-176a8 8 0 0 1 12.131-6.851l145.924 88a8 8 0 0 1 0 13.7l-145.924 88a8 8 0 0 1 -4.131 1.151zm8-169.833v147.666l122.433-73.833z"/></g></g></svg>
                                        <!-- </button> -->
                                            <p>Play Now</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row my-3">
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
                                    <!-- <label class="btn-sim3"><p style="margin:0;">SET</p></label> -->
                                </div>
                            </div>
                            <div class="row px-3">
                                @if(isset($ranking))
                                    @foreach($ranking as $key=>$ranking_trade)
                                        <?php $key++; ?>
                                        @if($key == 1)
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                                <span class="number-rank1">{{$key}}</span>
                                                <div><img class="sidebar-pic3" src="{{asset('home/imgProfile/'.$ranking_trade->GUEST_USERS_IMG) }}" /></div>
                                                <div class="detail-rank middle3">
                                                    <p style="margin:0;">
                                                        {{$ranking_trade->name}} {{$ranking_trade->surname}} <br> 
                                                        <a style="color:#0ce63e;">+{{number_format($ranking_trade->amount, 2)}} ฿</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                                <span class="number-rank2">{{$key}}</span>
                                                <div><img class="sidebar-pic3" src="{{asset('home/imgProfile/'.$ranking_trade->GUEST_USERS_IMG) }}" /></div>
                                                <div class="detail-rank middle3">
                                                    <p style="margin:0;">
                                                        {{$ranking_trade->name}} {{$ranking_trade->surname}} <br> 
                                                        <a style="color:#0ce63e;">+{{number_format($ranking_trade->amount, 2)}} ฿</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                                        <span style="color:#fff;font-weight:800;"><p> no User</p></span>
                                    </div>
                                @endif
                                <!-- <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
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
                                </div> -->
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg_avatar3"></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    $(document).ready(function(e) {
        $(".next-simulator").click(function(e) {
            var btnThis = $(this);
            $('.next-simulator').removeClass('d-none').html("NEXT");
            var amount = $('input[name="amount_simula"]').val();
            var status = $('input[name="status"]').val();
            // alert("amount : "+amount);
            $.ajax({
                url: "{{route('getSimulator')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    amount: amount,
                    status: status,
                },
                success: function(response) {
                    // console.log(response);
                    var countClick = 0;
                    var sumVal = response.amount;
                    if(sumVal >= 0){
                        $('#money-simulator span').html(commaSeparateNumber(sumVal)+"฿").css('color', '#0ce63e', 'cursor', 'pointer');
                    }else{
                        $('#money-simulator span').html(commaSeparateNumber(sumVal)+"฿").css('color', '#ce0005', 'cursor', 'pointer');
                    }
                    $('#chartContainer').remove();
                    $('#myChart-div').append('<div class="pr-2 heightChartSim2" id="chartContainer"></div>');
                    $('.symbol span').html(response.symbol);
                    $('input[name="status"]').val("false");

                    var dps = []; // dataPoints
                    var chart = new CanvasJS.Chart("chartContainer");
                    chart.options.theme = "light2"; // "light1", "light2", "dark1", "dark2"
                    chart.options.backgroundColor = '#21242c';
                    chart.options.animationEnabled = true;
                    chart.options.zoomEnabled = true;
                    chart.options.title = {
                        display: false,
                    };
                    chart.options.toolTip = {
                        enabled: true, //disable here
                        fontSize: 14,
                    };
                    chart.options.axisX = {
                        valueFormatString: "DD MMM",
                        fontSize: 14,
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true,
                        }
                    };
                    chart.options.axisY = {
                        valueFormatString: "฿##0.00",
                        fontSize: 14,
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true,
                            labelFormatter: function(e) {
                                return "฿" + CanvasJS.formatNumber(e.value, "##0.00");
                            }
                        }
                    };
                    chart.options.data = [{
                        click:function(e){
                            // alert(  "dataSeries Event click => Type: "+ e.dataSeries.type+ ", dataPoint { x:" + e.dataPoint.x + ", y: "+ e.dataPoint.y + " }" );
                            var value1 = 0;
                            var value2 = 0;
                            var value3 = 0;
                            countClick++;
                            if((countClick % 2) == 0){
                                value1 = e.dataPoint.y;
                                $('.symbol-open span').html(e.dataPoint.y+"฿");
                            }else{
                                value2 = e.dataPoint.y;
                                $('.symbol-open span').html(e.dataPoint.y+"฿");
                            }
                            value3 = (value1) - (value2);
                            sumVal = sumVal + value3;
                            if(sumVal >= 0){
                                $('#money-simulator span').html(commaSeparateNumber(sumVal)+"฿").css('color', '#0ce63e', 'cursor', 'pointer');
                            }else{
                                $('#money-simulator span').html(commaSeparateNumber(sumVal)+"฿").css('color', '#ce0005', 'cursor', 'pointer');
                            }
                            $('input[name="amount_simula"]').val(sumVal);
                            $('input[name="status"]').val("true");
                        },
                        type: "stepArea",
                        color: "#d32f2f",
                        fontSize: 14,
                        xValueType: "dateTime",
                        xValueFormatString: "DD MMM YYYY",
                        yValueFormatString: "฿##0.00",
                        dataPoints: []
                    }];

                    var yVal = 100;
                    var updateCount = 0;
                    var yyyy = 2000;
                    var mmm = 0;
                    var dd = 1;
                    var updateChart = function () {
                        yVal = yVal +  Math.round(5 + Math.random(response.high, response.low) *(-5-5));
                        updateCount++;
                        if(dd > 30){
                            dd = 1;
                            mmm++;
                            if(mmm > 11){
                                dd = 2;
                                mmm = 0;
                                yyyy++;
                            }
                        }
                        for(var i=0; i <= 1;i++){
                            chart.options.data[0].dataPoints.push({
                                x: new Date(yyyy, mmm, dd),
                                y : yVal
                            });
                            dps.push(chart.options.data[0].dataPoints[i]);
                        }
                        dd++;
                        chart.options.data[0].dataPoints.shift();
                        // chart.options.title.text = "Update " + updateCount;
                        chart.render();
                    };
                    
                    // update chart every second
                    var count = 0;
                    var random = Math.round(Math.random()*(730 - 365)) + 365;
                    var myVar = setInterval(function(){
                        count++;
                        if(count == random){
                            clearInterval(myVar);
                            var chart = new CanvasJS.Chart("chartContainer");
                            chart.options.theme = "light2"; // "light1", "light2", "dark1", "dark2"
                            chart.options.backgroundColor = '#21242c';
                            chart.options.animationEnabled = true;
                            chart.options.zoomEnabled = true;
                            chart.options.title = {
                                display: false,
                            };
                            chart.options.toolTip = {
                                enabled: true, //disable here
                                fontSize: 14,
                            };
                            chart.options.axisX = {
                                valueFormatString: "DD MMM",
                                fontSize: 14,
                                crosshair: {
                                    enabled: true,
                                    snapToDataPoint: true,
                                }
                            };
                            chart.options.axisY = {
                                valueFormatString: "฿##0.00",
                                fontSize: 14,
                                crosshair: {
                                    enabled: true,
                                    snapToDataPoint: true,
                                    labelFormatter: function(e) {
                                        return "฿" + CanvasJS.formatNumber(e.value, "##0.00");
                                    }
                                }
                            };
                            chart.options.data = [{
                                type: "stepArea",
                                color: "#d32f2f",
                                fontSize: 14,
                                xValueType: "dateTime",
                                xValueFormatString: "DD MMM YYYY",
                                yValueFormatString: "฿##0.00",
                                dataPoints: dps
                            }];
                            chart.render();
                        }else{
                            updateChart()
                        }
                    }, random);
                },
                error: function() {}
            });
        });
    });
</script>
<script>
    function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
            val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
        }
        return val.toFixed(2);
    }
</script>
@endsection