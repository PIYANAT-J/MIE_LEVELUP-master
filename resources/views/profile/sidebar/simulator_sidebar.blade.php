<!-- sidebar -->
<div class="col-sm-8 col-md-6 col-lg-3 col-xl-3" style="background-color: #141621;" id="navActive">
    <div class="row mt-2 px-2">
        @if(Auth::user()->updateData == 'true')
            @foreach($guest_user as $USER)
                <div class="col-12 mb-3 pb-2">
                    <div class="row mb-3 pb-2 pt-4" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                        <div class="col-4 text-right pr-2">
                            <img class="sidebar-sim" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                        </div>
                        <div class="col-8 sidebar_name2">
                            <h5 style="font-weight:800;margin:0;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</h5>
                            <h5 style="margin:0;">สถานะ : ผู้ใช้ทั่วไป</h5>
                            <h5 style="margin:0;">เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</h5>
                        </div>
                        <div class="col-12">
                            <div class="item my-4">
                                <img class="center"  style="width:50%;" src="{{asset('home/avatar/character/man.png') }}" />
                            </div>
                            <a href="shop">
                                <label class="btn-buyItem middle2">
                                    <p style="margin:0;font-weight:800;">ซื้อไอเทม</p>
                                </label>
                            </a>
                        </div>
                            
                    </div>

                    <div class="row py-2" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                        <div class="col-12 pl-5 mb-3">
                            <h1 style="margin:0;font-weight:800;">$20,000.00<br>STARTING PRICE </h1>
                        </div>
                        <div class="col-12 pl-5">
                            <h1 style="margin:0;font-weight:800;">$35000.45<a style="color:#0ce63e;"> (+5%)</a><br>PERIOD CHANGE</h1>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 mb-3" style="padding:0px">
                            <a href="/simulator_trade">
                                <button class="bg-simulator d-flex">
                                    <h2 style="margin:0;">Simulator Trade</h2>
                                    <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                                </button>
                            </a>
                        </div>
                        <div class="col-12 mb-3" style="padding:0px">
                            <a href="/my_trade">
                                <button class="bg-simulator d-flex">
                                    <h2 style="margin:0;">การซื้อขายของฉัน</h2>
                                    <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                                </button>
                            </a>
                        </div>
                        <div class="col-12 mb-3" style="padding:0px">
                            <a href="/ranking_trade">
                                <button class="bg-simulator d-flex">
                                    <h2 style="margin:0;">Ranking</h2>
                                    <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                                </button>
                            </a>
                        </div>
                        <div class="col-12" style="padding:0px">
                            <a href="/real_investors">
                                <button class="bg-simulator d-flex">
                                    <h2 style="margin:0;">นักลงทุนจริง</h2>
                                    <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 my-3 pt-2 sidebar_bg2">
                <div class="row mb-2">
                    <div class="col-lg-4 text-right">
                        <img class="sidebar-pic3" src="{{asset('home/imgProfile/No_Img.jpg') }}" />
                    </div>
                    <div class="col-lg-8 sidebar_name pt-2">
                        <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้ใช้ทั่วไป</br>เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</span>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<!-- sidebar -->