@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#141621;">
            <div class="row mt-4" >
                <div class="col-sm-4 col-md-6 col-lg-6 col-xl-8 pt-2">
                    <h1 style="color:#fff;">Avatar</h1>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right" style="padding:0;">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a href="/shop">
                        <label class="bg-shop3">
                            <img class="iconShop2" src="{{asset('icon/shop.png') }}"/>
                            <p style="color:#fff;margin:0;">ตลาดซื้อขาย</p> 
                        </label>
                    </a>
                </div>
            </div>

            <!-- เลือกเพศ -->

            <div id="gender" class="redioRedAvatar">
                <div class="row pl-3">
                    <div>
                        <input type="radio" name="gender2" value="man" id="man">
                        <label for="man" style="font-family:myfont1;color:#fff;font-size:1em;">ชาย</label>
                    </div>
                    <div class="col-1">
                        <input type="radio" name="gender2" value="woman" id="women">
                        <label for="women" style="font-family:myfont1;color:#fff;font-size:1em;">หญิง</label>
                    </div>
                </div>
            </div>

            <!-- ตัวละครชาย -->
            <div class="row manlist px-3">
                <div class="col-sm-4 col-md-4 d-inline-block d-lg-none d-xl-none" ></div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3 pt-2 pb-3">
                    <!-- <img class="center1"  style="width:100%;opacity: 0;" src="{{asset('home/avatar/character/man.png') }}" /> -->
                    <img id="headMan" class="headManImg" src="{{asset('home/avatar/character/head/man/AW_Character_V2-37.png') }}" />
                    <img id="clothesMan" class="clothesManImg" src="{{asset('home/avatar/character/clothes/man/AW_Character_V2-79.png') }}" />
                    <img class="mt-5" style="width:30px;" src="{{asset('home/avatar/icon/reset.svg') }}" />
                </div>
                <div class="col-sm-4 col-md-4 d-inline-block d-lg-none d-xl-none" ></div>

                <!-- ไอเทม -->
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active itemAvatar p" data-toggle="tab" href="#head">ศรีษะ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#clothes">เสื้อผ้า</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#weapon">อาวุธ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#other">ไอเทมพิเศษ</a>
                                </li>
                            </ul>
                        </div>
                    </div> 

                    <div class="tab-content">
                        <div id="head" class="container tab-pane active">
                            <div class="row mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ทรงผม</span>
                                        <div class="col-12">                                                                            
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('headMan').src='home/avatar/character/head/man/AW_Character_V2-37.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('headMan').src='home/avatar/character/head/man/AW_Character_V2-38.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/hair/h02.svg') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">สีตา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e02.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e03.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/eyes/e04.svg') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">แว่นตา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/glasses/g01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/glasses/g01.svg') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="clothes" class="container tab-pane">
                            <div class="row mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดไปเวท</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/character/clothes/man/AW_Character_V2-79.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/character/clothes/man/AW_Character_V2-80.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c02.svg') }}" />
                                            </button>
                                            <!-- <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/character/clothes/man/AW_Character_V2-81.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c03.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/character/clothes/man/AW_Character_V2-82.png'">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c04.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c.png') }}" />
                                            </button> -->
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดซุปเปอร์ฮีโร่</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/clothes/c.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="weapon" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ดาบ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s02.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s03.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/sword/s.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">คฑา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/wand/w.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ปืน</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/gun/g.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ธนู</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/weapon/archer/a.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="other" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 pb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">มงกุฏ/หมวก</span>
                                        <div class="col-lg-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/crown/c01.png') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/crown/c.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ถุงมือ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/glove/g.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">เสื้อเกราะ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/armor/a.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">รองเท้า</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/shoes/s.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ตัวละครหญิง -->
            <div class="row womanlist px-3">
                <div class="col-sm-4 col-md-4 d-inline-block d-lg-none d-xl-none" ></div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3 mt-2 mb-3">
                    <!-- <img class="center1"  style="width:100%;" src="{{asset('home/avatar/character/woman.png') }}" /> -->
                    <img id="headWoman" class="headManImg" src="{{asset('home/avatar/character/head/woman/AW_Character_V2-02.png') }}" />
                    <img id="clothesWoman" class="clotheswomanImg" src="{{asset('home/avatar/character/clothes/woman/AW_Character_V2-73.png') }}" />
                    <img class="mt-5" style="width:30px" src="{{asset('home/avatar/icon/reset.svg') }}" />
                            
                </div>
                <div class="col-sm-4 col-md-4 d-inline-block d-lg-none d-xl-none" ></div>

                <!-- ไอเทม -->
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active itemAvatar p" data-toggle="tab" href="#head2">ศรีษะ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#clothes2">เสื้อผ้า</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#weapon2">อาวุธ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar p" data-toggle="tab" href="#other2">ไอเทมพิเศษ</a>
                                </li>
                            </ul>
                        </div>
                    </div> 

                    <div class="tab-content">
                        <div id="head2" class="container tab-pane active">
                            <div class="row mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ทรงผม</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('headWoman').src='home/avatar/character/head/woman/AW_Character_V2-02.png'">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('headWoman').src='home/avatar/character/head/woman/AW_Character_V2-03.png'">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h02.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('headWoman').src='home/avatar/character/head/woman/AW_Character_V2-01.png'">
                                                <img class="picture" src="{{asset('home/avatar/woman/hair/h03.svg') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">สีตา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e02.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e03.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e04.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/eyes/e.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p" >แว่นตา</span>
                                        <div class="col-lg-12">
                                            <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/glasses/g.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="clothes2" class="container tab-pane">
                            <div class="row mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดไปเวท</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesWoman').src='home/avatar/character/clothes/woman/AW_Character_V2-73.png'">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesWoman').src='home/avatar/character/clothes/woman/AW_Character_V2-74.png'">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c02.svg') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดซุปเปอร์ฮีโร่</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/clothes/c.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="weapon2" class="container tab-pane">
                            <div class="row ml-0 mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-12"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ดาบ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s01.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s02.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s03.svg') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/sword/s.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">คฑา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/wand/w.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ปืน</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/gun/g.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ธนู</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/weapon/archer/a.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="other2" class="container tab-pane">
                            <div class="row mt-4 row6" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">มงกุฏ/หมวก</span>
                                        <div class="col-lg-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/crown/c01.png') }}" />
                                            </button>
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/crown/c.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ถุงมือ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/glove/g.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">เสื้อเกราะ</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/armor/a.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">รองเท้า</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s.png') }}" />
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-12 text-right pr-5">
                    <button type="submit" class="btn-avatar">
                        <p style="margin:0;font-weight:800;">บันทึก</p>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 style="color:#fff;margin:0;">มินิเกม</h1>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="owl-carousel" id="owl-demo1">
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game2.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game3.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game4.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game5.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game6.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game7.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game8.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game9.png') }}">
                        </div>
                        <div class="item">
                            <img class="minigame-img" src="{{asset('section/picture_game/game10.png') }}">
                        </div>
                    </div>
                    <div class="btns">
                        <div class="nav-next1"><img class="middle" style="width:0.5em" src="{{asset('icon/next.svg') }}" /></div>
                        <div class="nav-prev1"><img class="middle" style="width:0.5em" src="{{asset('icon/prev.svg') }}" /></div>
                    </div>

                    <!-- <img class="minigame-img" src="{{asset('section/picture_game/game.png') }}">
                    <img class="minigame-img" src="{{asset('section/picture_game/game2.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game3.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game4.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game5.png') }}">
                    <img class="minigame-img" src="{{asset('section/picture_game/game6.png') }}">                        
                    <img class="minigame-img" src="{{asset('section/picture_game/game7.png') }}">
                         -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bg_avatar2"></div>
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

<script>
    $(document).ready(function(){
    var owl = $('#owl-demo1');
    owl.owlCarousel({
        loop:true,
        margin:5,
        navigation : false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:4
            },
            768:{
                items:5
            },
            1199:{
                items:5
            },
            1280:{
                items:6
            },
            1360:{
                items:7
            },
            1680 :{
                items:9
            },
            1920:{
                items:10
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
@endsection