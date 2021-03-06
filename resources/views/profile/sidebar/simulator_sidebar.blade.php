<!-- sidebar -->
<div class="col-sm-8 col-md-6 col-lg-3 col-xl-3" style="background-color: #141621;" id="navActive">
    <div class="row mt-2 px-2">
        @foreach($guest_user as $USER)
            <div class="col-12 pb-2">
                <div class="row pb-2 pt-4" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                    <div class="col-4 text-right pr-2">
                        <img class="sidebar-sim" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                    </div>
                    <div class="col-8 sidebar_name2">
                        <h5 style="font-weight:800;margin:0;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</h5>
                        <h5 style="margin:0;">สถานะ : ผู้ใช้ทั่วไป</h5>
                        <h5 style="margin:0;">เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</h5>
                    </div>
                    <div class="col-12 simHeight">
                        <!-- ชาย -->
                        <!-- <div class="item my-4">
                            <img id="headMan" class="headManImg" src="{{asset('home/avatar/head/head_man.png') }}" />
                            <img id="hairMan" class="hairManImg" src="{{asset('home/avatar/hair/man/hair_man_01.png') }}" />
                            <img id="eyesMan" class="eyesManImg" src="{{asset('home/avatar/eyes/man/eyes_man_01.png') }}" />
                            <img id="glassesMan" class="glassesManImg" src="{{asset('home/avatar/glasses/noneImg.png') }}" />
                            <img id="crownMan" class="crownManImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                            <img id="clothesMan" class="clothesManImg" src="{{asset('home/avatar/clothes/man/clothes_man_01.png') }}" />
                            <img id="weaponMan" class="weaponManImg" src="{{asset('home/avatar/weapon/noneImg.png') }}" />
                            <img id="glovesMan" class="glovesManImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                            <img id="armorMan" class="armorWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                        </div> -->

                        <!-- หญิง -->
                        <!-- <div class="item my-4">
                            <img id="headWoman" class="headManImg" src="{{asset('home/avatar/head/head_woman.png') }}" />
                            <img id="hairwoman" class="hairwomanImg" src="{{asset('home/avatar/hair/woman/hair_woman_01.png') }}" />
                            <img id="eyesWoman" class="eyesWomanImg" src="{{asset('home/avatar/eyes/woman/eyes_woman_01.png') }}" />
                            <img id="glassesWoman" class="glassesWomanImg" src="{{asset('home/avatar/glasses/none.png') }}" />
                            <img id="crownWoman" class="crownManImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                            <img id="clothesWoman" class="clothesWomanImg" src="{{asset('home/avatar/clothes/woman/clothes_woman_01.png') }}" />
                            <img id="weaponWoman" class="weaponManImg" src="{{asset('home/avatar/weapon/noneImg.png') }}" />
                            <img id="glovesWoman" class="glovesWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                            <img id="armorWoman" class="armorWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                        </div> -->
                        @foreach($avatar as $avatar)
                            @if($avatar->gender == "man")
                                <div class="item my-4">
                                    <img id="headMan" class="headManImg2" src="{{asset('home/avatar/head/head_man.png')}}"/>
                                    <img id="hairMan" class="hairManImg2" src="{{asset($avatar->hair)}}"/>
                                    <img id="eyesMan" class="eyesManImg2" src="{{asset($avatar->eyes)}}"/>
                                    <img id="glassesMan" class="glassesManImg2" src="{{asset($avatar->glasses)}}"/>
                                    <img id="crownMan" class="crownManImg2" src="{{asset($avatar->crown)}}"/>
                                    <img id="clothesMan" class="clothesManImg2" src="{{asset($avatar->clothes)}}"/>
                                    <img id="weaponMan" class="weaponManImg2" src="{{asset($avatar->weapon)}}"/>
                                    <img id="glovesMan" class="glovesManImg2" src="{{asset($avatar->gloves)}}"/>
                                    <img id="armorMan" class="armorWomanImg2" src="{{asset($avatar->armor)}}"/>
                                </div>
                            @elseif($avatar->gender == "woman")
                                <div class="item my-4">
                                    <img id="headWoman" class="headManImg2" src="{{asset('home/avatar/head/head_woman.png') }}" />
                                    <img id="hairwoman" class="hairwomanImg2" src="{{asset($avatar->hair)}}"/>
                                    <img id="eyesWoman" class="eyesWomanImg2" src="{{asset($avatar->eyes)}}"/>
                                    <img id="glassesWoman" class="glassesWomanImg2" src="{{asset($avatar->glasses)}}"/>
                                    <img id="crownWoman" class="crownWomanImg2" src="{{asset($avatar->crown)}}"/>
                                    <img id="clothesWoman" class="clothesWomanImg2" src="{{asset($avatar->clothes)}}"/>
                                    <img id="weaponWoman" class="weaponManImg2" src="{{asset($avatar->weapon)}}"/>
                                    <img id="glovesWoman" class="glovesWomanImg2" src="{{asset($avatar->gloves)}}"/>
                                    <img id="armorWoman" class="armorWomanImg2" src="{{asset($avatar->armor)}}"/>
                                </div>
                            @else
                                <div class="item my-4">
                                    <img id="headMan" class="headManImg2" src="{{asset('home/avatar/head/head_man.png') }}" />
                                    <img id="hairMan" class="hairManImg2" src="{{asset('home/avatar/hair/man/hair_man_01.png') }}" />
                                    <img id="eyesMan" class="eyesManImg2" src="{{asset('home/avatar/eyes/man/eyes_man_01.png') }}" />
                                    <img id="glassesMan" class="glassesManImg2" src="{{asset('home/avatar/glasses/noneImg.png') }}" />
                                    <img id="crownMan" class="crownManImg2" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="clothesMan" class="clothesManImg2" src="{{asset('home/avatar/clothes/man/clothes_man_01.png') }}" />
                                    <img id="weaponMan" class="weaponManImg2" src="{{asset('home/avatar/weapon/noneImg.png') }}" />
                                    <img id="glovesMan" class="glovesManImg2" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="armorMan" class="armorWomanImg2" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                </div>
                            @endif
                        @endforeach
                        <a href="shop">
                            <label class="btn-buyItem middle2">
                                <p style="margin:0;font-weight:800;">ซื้อไอเทม</p>
                            </label>
                        </a>
                    </div>
                </div>

                <div class="row py-2 mt-2" style="background-color: #fff;border-radius: 6px;box-shadow: 0 5px 0 0 #c3c3c3;">
                    <!-- <div class="col-12 pl-5 mb-3">
                        <h1 style="margin:0;font-weight:800;">$0.00<br>STARTING PRICE </h1>
                    </div> -->
                    <div class="col-12 pl-5">
                        <!-- <h1 style="margin:0;font-weight:800;">$0.00<a style="color:#0ce63e;"> (+5%)</a><br>PERIOD CHANGE</h1> -->
                        @if(isset($ranking))
                            @foreach($ranking as $point)
                                @if($point->user_id == Auth::user()->id)
                                    <h1 style="margin:0;font-weight:800;">฿{{number_format($point->amount, 2)}}<br>STARTING PRICE </h1>
                                @endif
                            @endforeach
                        @else
                            <h1 style="margin:0;font-weight:800;">$0.00<br>STARTING PRICE </h1>
                        @endif
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12 col-lg-12 col-xl-12 d-none d-lg-block d-xl-block mb-2" style="padding:0px">
                        <a href="{{ route('SimulatorTrade') }}">
                            <button class="bg-simulator d-flex">
                                <h2 style="margin:0;">Simulator Trade</h2>
                                <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                            </button>
                        </a>
                    </div>
                    <!-- <div class="col-12 col-lg-12 col-xl-12 d-none d-lg-block d-xl-block mb-3" style="padding:0px">
                        <a href="{{ route('MyTrade') }}">
                            <button class="bg-simulator d-flex">
                                <h2 style="margin:0;">การซื้อขายของฉัน</h2>
                                <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                            </button>
                        </a>
                    </div> -->
                    <div class="col-12 col-lg-12 col-xl-12 d-none d-lg-block d-xl-block" style="padding:0px">
                        <a href="{{ route('RankingTrade') }}">
                            <button class="bg-simulator d-flex">
                                <h2 style="margin:0;">Ranking</h2>
                                <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                            </button>
                        </a>
                    </div>
                    <!-- <div class="col-12 col-lg-12 col-xl-12 d-none d-lg-block d-xl-block mb-3" style="padding:0px">
                        <a href="{{ route('RealInvestors') }}">
                            <button class="bg-simulator d-flex">
                                <h2 style="margin:0;">นักลงทุนจริง</h2>
                                <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                            </button>
                        </a>
                    </div> -->
                    <!-- <div class="col-12 col-lg-12 col-xl-12 d-none d-lg-block d-xl-block mb-3" style="padding:0px">
                        <a href="{{ route('Avatar') }}">
                            <button class="bg-simulator d-flex">
                                <h2 style="margin:0;">ตัวละครของฉัน</h2>
                                <label class="arrowMenu"><i class="fa fa-angle-right" aria-hidden="true"></i></label>
                            </button>
                        </a>
                    </div> -->
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- sidebar -->