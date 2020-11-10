@extends('layout.simulator_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('RankingTrade') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>
        @include('profile.sidebar.simulator_sidebar')
        <div class="col-sm-2 col-md-3 d-inline-block d-lg-none d-xl-none" style="background-color:#141621;"></div>

        <div class="col-sm-12 co-md-12 col-lg-9 col-xl-9" style="background-color:#141621; ">
            <div class="row mt-4 pl-2" >
                <div class="col-12">
                    <label style="color:#fff;">
                        <!-- <h1 style="margin:0;color:#fff;font-weight:800;">Simulator Trade</h1> -->
                        <h4 style="margin:0;color:#fff;">Ranking Top10</41>
                    </label>
                </div>
            </div>

            <!-- <div class="row mb-3 pl-2" >
                <div class="col-12 ">
                    <button class="btn-sim2"><p style="margin:0;">SET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET50</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SET100</p></button>
                    <button class="btn-sim2"><p style="margin:0;">sSET</p></button>
                    <button class="btn-sim2"><p style="margin:0;">SETCLMV</p></button>
                </div>
            </div> -->

            <div class="row px-3">
                <div class="col-12">
                    <div class="row">
                    @if(isset($ranking))
                        @foreach($ranking as $key=>$ranking_trade)
                            <?php $key++; ?>
                            @if($key == 1)
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 px-4">
                                    <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                    <div class="row chart d-flex align-items-center">
                                        <div class="col-6 col-sm-4 col-md-6 col-lg-6 col-xl-4">
                                            <span class="number-rank3">{{$key}}</span>
                                            <img class="sidebar-pic4" src="{{asset('home/imgProfile/'.$ranking_trade->GUEST_USERS_IMG) }}" />
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-6 col-lg-6 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-7 d-flex align-items-center" >
                                                    <label class="detail-rank">
                                                        <p style="margin:0">{{$ranking_trade->name}} {{$ranking_trade->surname}} <br>
                                                        <a style="color:#0ce63e;">+{{number_format($ranking_trade->amount, 2)}} ฿</a></p>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-5 d-flex align-items-center">
                                                    <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                    <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 px-4">
                                    <!-- <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" /> -->
                                    <div class="row chart d-flex align-items-center">
                                        <div class="col-6 col-sm-4 col-md-6 col-lg-6 col-xl-4">
                                            <span class="number-rank4">{{$key}}</span>
                                            <img class="sidebar-pic4" src="{{asset('home/imgProfile/'.$ranking_trade->GUEST_USERS_IMG) }}" />
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-6 col-lg-6 col-xl-8">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-7 d-flex align-items-center" >
                                                    <label class="detail-rank">
                                                        <p style="margin:0">{{$ranking_trade->name}} {{$ranking_trade->surname}} <br>
                                                        <a style="color:#0ce63e;">+{{number_format($ranking_trade->amount, 2)}} ฿</a></p>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-5 d-flex align-items-center">
                                                    <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                    <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    {{-- @else
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12" style="border-bottom:1px #a0a0a0 solid;">
                            <span style="color:#fff;font-weight:800;"><p> no User</p></span>
                        </div> --}}
                    @endif
                        <!-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 px-4">
                            <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" />
                            <div class="row chart d-flex align-items-center">
                                <div class="col-6 col-sm-4 col-md-6 col-lg-6 col-xl-4">
                                    <span class="number-rank3">1</span>
                                    <img class="sidebar-pic4" src="{{asset('dist/images/person_1.jpg') }}" />
                                </div>
                                <div class="col-6 col-sm-8 col-md-6 col-lg-6 col-xl-8">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-7 d-flex align-items-center" >
                                            <label class="detail-rank">
                                                <p style="margin:0">ชื่อ-นามสกุล <br>
                                                <a style="color:#0ce63e;">+20,556.00฿ (20%)</a></p>
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-5 d-flex align-items-center">
                                            <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                            <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-2 px-4">
                            <img style="width:100%;" src="{{asset('home/simulator/Simulator_trade13.png') }}" />
                            <div class="row chart d-flex align-items-center">
                                <div class="col-6 col-sm-4 col-md-6 col-lg-6 col-xl-4">
                                    <span class="number-rank4">2</span>
                                    <img class="sidebar-pic4" src="{{asset('dist/images/person_2.jpg') }}" />
                                </div>
                                <div class="col-6 col-sm-8 col-md-6 col-lg-6 col-xl-8">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-7 d-flex align-items-center" >
                                            <label class="detail-rank">
                                                <p style="margin:0">ชื่อ-นามสกุล <br>
                                                <a style="color:#0ce63e;">+20,556.00฿ (20%)</a></p>
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-5 d-flex align-items-center">
                                            <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                            <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
            @if(isset($ranking100))
                <div class="row my-4" >
                    <div class="col-12">
                        <h4 style="margin:0;color:#fff;">Ranking Top11-100</h4>
                    </div>
                </div>
                <div class="row px-3 mb-3">
                    <div class="col-12">
                        <div class="row">
                            <?php $i=10; ?>
                            @foreach($ranking100 as $ranking100_trade)
                                <?php $i++; ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 px-4" >
                                    <div class="row d-flex align-items-center" style="border:1px solid #dddddd;">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-3 col-xl-2" style="padding: 10px;">
                                            <img class="pic-avatar-rank" src="{{asset('dist/images/person_8.jpg') }}" />
                                        </div>
                                        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-10 mb-2">
                                            <div class="row">
                                                <div class="col-12 col-sm-8 col-md-12 col-lg-12 col-xl-8 d-flex align-items-center" >
                                                    <label style="padding:8px 0 8px 0;margin:0;">
                                                        <p style="margin:0;color:#fff;">{{$i}}. {{$ranking100_trade->name}} {{$ranking100_trade->surname}}
                                                        <a style="color:#0ce63e;">+{{number_format($ranking100_trade->amount, 2)}} ฿</a></p>
                                                    </label>
                                                </div>
                                                <div class="col-4 col-md-4 col-lg-4 d-inline-block d-sm-none d-md-block d-lg-block d-xl-none"></div>
                                                <div class="col-8 col-sm-4 col-md-8 col-lg-8 col-xl-4 d-flex align-items-center">
                                                    <!-- <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a> -->
                                                    <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <!-- <div class="row my-4" >
                <div class="col-12">
                    <h4 style="margin:0;color:#fff;">Ranking Top11-100</h4>
                </div>
            </div>

            <div class="row px-3 mb-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 px-4" >
                            <div class="row d-flex align-items-center" style="border:1px solid #dddddd;">
                                <div class="col-3 col-sm-2 col-md-3 col-lg-3 col-xl-2" style="padding: 10px;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_8.jpg') }}" />
                                </div>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-10 mb-2">
                                    <div class="row">
                                        <div class="col-12 col-sm-8 col-md-12 col-lg-12 col-xl-8 d-flex align-items-center" >
                                            <label style="padding:8px 0 8px 0;margin:0;">
                                                <p style="margin:0;color:#fff;">11. ชื่อนามสกุล
                                                <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                            </label>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 d-inline-block d-sm-none d-md-block d-lg-block d-xl-none"></div>
                                        <div class="col-8 col-sm-4 col-md-8 col-lg-8 col-xl-4 d-flex align-items-center">
                                            <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                            <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 px-4" >
                            <div class="row d-flex align-items-center" style="border:1px solid #dddddd;">
                                <div class="col-3 col-sm-2 col-md-3 col-lg-3 col-xl-2" style="padding: 10px;">
                                    <img class="pic-avatar-rank" src="{{asset('dist/images/person_6.jpg') }}" />
                                </div>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-10 mb-2">
                                    <div class="row">
                                        <div class="col-12 col-sm-8 col-md-12 col-lg-12 col-xl-8 d-flex align-items-center" >
                                            <label style="padding:8px 0 8px 0;margin:0;">
                                                <p style="margin:0;color:#fff;">12. ชื่อนามสกุล
                                                <a style="color:#0ce63e;">+15,000฿ (20%)</a></p>
                                            </label>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 d-inline-block d-sm-none d-md-block d-lg-block d-xl-none"></div>
                                        <div class="col-8 col-sm-4 col-md-8 col-lg-8 col-xl-4 d-flex align-items-center">
                                            <a href="#"><button class="btn-view"><p style="margin:0">ดูโปรไฟล์</p></button></a>
                                            <button class="btn-viewlock"><p style="margin:0">ดูโปรไฟล์</p></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
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