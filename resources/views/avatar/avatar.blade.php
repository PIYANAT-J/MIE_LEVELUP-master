@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#141621;">
            <div class="row mt-4" >
                <div class="col-12 col-sm-4 col-md-6 col-lg-6 col-xl-8 pt-2">
                    <h1 style="color:#fff;">Avatar</h1>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right" style="padding:0;">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                @foreach($avatar as $avatarRadio)
                    @if($avatarRadio->gender == "")
                        <div>
                            <input type="radio" name="gender2" value="man" id="man" checked>
                            <label for="man" style="font-family:myfont1;color:#fff;font-size:1em;">ชาย</label>
                        </div>
                        <div class="col-1">
                            <input type="radio" name="gender2" value="woman" id="women">
                            <label for="women" style="font-family:myfont1;color:#fff;font-size:1em;">หญิง</label>
                        </div>
                    @elseif($avatarRadio->gender == "man")
                        <div>
                            <input type="radio" name="gender2" value="man" id="man" checked>
                            <label for="man" style="font-family:myfont1;color:#fff;font-size:1em;">ชาย</label>
                        </div>
                    @elseif($avatarRadio->gender == "woman")
                        <div>
                            <input type="radio" name="gender2" value="woman" id="women" checked>
                            <label for="women" style="font-family:myfont1;color:#fff;font-size:1em;">หญิง</label>
                            <!-- <input type="hidden" name="gender2" value="woman"> -->
                        </div>
                    @endif
                @endforeach
                </div>
            </div>

            <!-- ตัวละคร -->
            <div class="row avatar px-3">
                <div class="col-3 d-inline-block d-sm-none d-md-none d-lg-none d-xl-none" ></div>
                    @foreach($avatar as $avatar)
                        @if($avatar->gender == "man")
                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-4 pt-2 pb-3 manlist">
                                <div class="avatarHeight">
                                    <img id="headMan" class="headManImg" src="{{asset('home/avatar/head/head_man.png')}}"/>
                                    <img id="hairMan" class="hairManImg" src="{{asset($avatar->hair)}}"/>
                                    <img id="eyesMan" class="eyesManImg" src="{{asset($avatar->eyes)}}"/>
                                    <img id="glassesMan" class="glassesManImg" src="{{asset($avatar->glasses)}}"/>
                                    <img id="crownMan" class="crownManImg" src="{{asset($avatar->crown)}}"/>
                                    <img id="clothesMan" class="clothesManImg" src="{{asset($avatar->clothes)}}"/>
                                    <img id="weaponMan" class="weaponManImg" src="{{asset($avatar->weapon)}}"/>
                                    <img id="glovesMan" class="glovesManImg" src="{{asset($avatar->gloves)}}"/>
                                    <img id="armorMan" class="armorWomanImg" src="{{asset($avatar->armor)}}"/>
                                </div>
                            </div>
                        @elseif($avatar->gender == "woman")
                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-4 pt-2 pb-3 womanlist">
                                <div class="avatarHeight">
                                    <img id="headWoman" class="headManImg" src="{{asset('home/avatar/head/head_woman.png') }}" />
                                    <img id="hairwoman" class="hairwomanImg" src="{{asset($avatar->hair)}}"/>
                                    <img id="eyesWoman" class="eyesWomanImg" src="{{asset($avatar->eyes)}}"/>
                                    <img id="glassesWoman" class="glassesWomanImg" src="{{asset($avatar->glasses)}}"/>
                                    <img id="crownWoman" class="crownWomanImg" src="{{asset($avatar->crown)}}"/>
                                    <img id="clothesWoman" class="clothesWomanImg" src="{{asset($avatar->clothes)}}"/>
                                    <img id="weaponWoman" class="weaponManImg" src="{{asset($avatar->weapon)}}"/>
                                    <img id="glovesWoman" class="glovesWomanImg" src="{{asset($avatar->gloves)}}"/>
                                    <img id="armorWoman" class="armorWomanImg" src="{{asset($avatar->armor)}}"/>
                                </div>
                            </div>
                        @else
                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-4 pt-2 pb-3 womanlist">
                                <div class="avatarHeight">
                                    <img id="headWoman" class="headManImg" src="{{asset('home/avatar/head/head_woman.png') }}" />
                                    <img id="hairwoman" class="hairwomanImg" src="{{asset('home/avatar/hair/woman/hair_woman_01.png') }}" />
                                    <img id="eyesWoman" class="eyesWomanImg" src="{{asset('home/avatar/eyes/woman/eyes_woman_01.png') }}" />
                                    <img id="glassesWoman" class="glassesWomanImg" src="{{asset('home/avatar/glasses/none.png') }}" />
                                    <img id="crownWoman" class="crownWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="clothesWoman" class="clothesWomanImg" src="{{asset('home/avatar/clothes/woman/clothes_woman_01.png') }}" />
                                    <img id="weaponWoman" class="weaponManImg" src="{{asset('home/avatar/weapon/noneImg.png') }}" />
                                    <img id="glovesWoman" class="glovesWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="armorWoman" class="armorWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-4 pt-2 pb-3 manlist">
                                <div class="avatarHeight">
                                    <img id="headMan" class="headManImg" src="{{asset('home/avatar/head/head_man.png') }}" />
                                    <img id="hairMan" class="hairManImg" src="{{asset('home/avatar/hair/man/hair_man_01.png') }}" />
                                    <img id="eyesMan" class="eyesManImg" src="{{asset('home/avatar/eyes/man/eyes_man_01.png') }}" />
                                    <img id="glassesMan" class="glassesManImg" src="{{asset('home/avatar/glasses/noneImg.png') }}" />
                                    <img id="crownMan" class="crownManImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="clothesMan" class="clothesManImg" src="{{asset('home/avatar/clothes/man/clothes_man_01.png') }}" />
                                    <img id="weaponMan" class="weaponManImg" src="{{asset('home/avatar/weapon/noneImg.png') }}" />
                                    <img id="glovesMan" class="glovesManImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                    <img id="armorMan" class="armorWomanImg" src="{{asset('home/avatar/other/noneImg.png') }}" />
                                </div>
                            </div>
                        @endif
                    @endforeach
                <!-- <div class="col-4 col-sm-4 col-md-4 d-inline-block d-lg-none d-xl-none" ></div> -->

                <!-- ไอเทม -->
                <div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-8" style="padding:0;">
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
                            <div class="row mt-3 rowAvatar" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ทรงผม</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "hair")
                                                    @if($defaultItem->default_gender == "man")
                                                        <button class="labelItem bgItem hairItem manlist" data-hair="home/avatar/hair/man/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('hairMan').src='home/avatar/hair/man/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/hair/man/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @elseif($defaultItem->default_gender == "woman")
                                                        <button class="labelItem bgItem hairItem womanlist" data-hair="home/avatar/hair/woman/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('hairwoman').src='home/avatar/hair/woman/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/hair/woman/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">สีตา</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "eyes")
                                                    @if($defaultItem->default_gender == "man")
                                                        <button class="labelItem bgItem eyesItem manlist" data-eyes="home/avatar/eyes/man/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('eyesMan').src='home/avatar/eyes/man/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/eyes/man/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @elseif($defaultItem->default_gender == "woman")
                                                        <button class="labelItem bgItem eyesItem womanlist" data-eyes="home/avatar/eyes/woman/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('eyesWoman').src='home/avatar/eyes/woman/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/eyes/woman/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">แว่นตา</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "glasses")
                                                    <button class="labelItem bgItem glassesItem manlist" data-glasses="home/avatar/glasses/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glassesMan').src='home/avatar/glasses/{{$defaultItem->default_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/glasses/'.$defaultItem->default_img) }}" />
                                                    </button>
                                                    <button class="labelItem bgItem glassesItem womanlist" data-glasses="home/avatar/glasses/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glassesWoman').src='home/avatar/glasses/{{$defaultItem->default_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/glasses/'.$defaultItem->default_img) }}" />
                                                    </button>
                                                @endif
                                            @endforeach
                                            <button class="labelItem bgItem glassesItem manlist" data-glasses="home/avatar/glasses/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glassesMan').src='home/avatar/glasses/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                            <button class="labelItem bgItem glassesItem womanlist" data-glasses="home/avatar/glasses/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glassesWoman').src='home/avatar/glasses/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="clothes" class="container tab-pane">
                            <div class="row mt-3 rowAvatar" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดไปเวท</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "clothes")
                                                    @if($defaultItem->default_gender == "man")
                                                        @if($defaultItem->default_other != "hero")
                                                            <button class="labelItem bgItem clothesItem manlist" data-clothes="home/avatar/clothes/man/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/clothes/man/{{$defaultItem->default_img}}'">
                                                                <img class="picture" src="{{asset('home/avatar/clothes/man/'.$defaultItem->default_img) }}" />
                                                            </button>
                                                        @endif
                                                    @elseif($defaultItem->default_gender == "woman")
                                                        @if($defaultItem->default_other != "hero")
                                                            <button class="labelItem bgItem clothesItem womanlist" data-clothes="home/avatar/clothes/woman/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesWoman').src='home/avatar/clothes/woman/{{$defaultItem->default_img}}'">
                                                                <img class="picture" src="{{asset('home/avatar/clothes/woman/'.$defaultItem->default_img) }}" />
                                                            </button>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>    
                                    </div>

                                    <!-- <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ชุดซุปเปอร์ฮีโร่</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/clothes/man/hero/hero_man_03.png'">
                                                <img class="picture" src="{{asset('home/avatar/clothes/man/hero/hero_man_03.png') }}" />
                                            </button>
                                        </div>    
                                    </div> -->
                                    <div class="row">
                                        @foreach($item as $text)
                                            @if($text->my_item_type == "clothes")
                                                <span class="fontItem ml-4 mt-2 p">ชุดซุปเปอร์ฮีโร่</span>
                                                <div class="col-12">
                                                    @foreach($item as $allItem)
                                                        @if($allItem->my_item_type == "clothes")
                                                            @if($allItem->my_item_gender == "man")
                                                                @if($allItem->my_item_other == "hero")
                                                                    <button class="labelItem bgItem clothesItem manlist" data-clothes="home/avatar/clothes/man/hero/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesMan').src='home/avatar/clothes/man/hero/{{$allItem->my_item_img}}'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/man/hero/'.$allItem->my_item_img) }}" />
                                                                    </button>
                                                                @endif
                                                            @elseif($defaultItem->default_gender == "woman")
                                                                @if($defaultItem->default_other == "hero")
                                                                    <button class="labelItem bgItem clothesItem womanlist" data-clothes="home/avatar/clothes/woman/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('clothesWoman').src='home/avatar/clothes/woman/{{$allItem->my_item_img}}'">
                                                                        <img class="picture" src="{{asset('home/avatar/clothes/woman/'.$allItem->my_item_img) }}" />
                                                                    </button>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="weapon" class="container tab-pane">
                            <div class="row mt-3 rowAvatar" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 mb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ดาบ</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "weapon")
                                                    <button class="labelItem bgItem weaponItem manlist" data-weapon="home/avatar/weapon/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponMan').src='home/avatar/weapon/{{$defaultItem->default_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/weapon/'.$defaultItem->default_img) }}" />
                                                    </button>
                                                    <button class="labelItem bgItem weaponItem womanlist" data-weapon="home/avatar/weapon/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponWoman').src='home/avatar/weapon/{{$defaultItem->default_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/weapon/'.$defaultItem->default_img) }}" />
                                                    </button>
                                                @endif
                                            @endforeach
                                            @foreach($item as $allItem)
                                                @if($allItem->my_item_type == "weapon")
                                                    <button class="labelItem bgItem weaponItem manlist" data-weapon="home/avatar/weapon/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponMan').src='home/avatar/weapon/{{$allItem->my_item_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/weapon/'.$allItem->my_item_img) }}" />
                                                    </button>
                                                    <button class="labelItem bgItem weaponItem womanlist" data-weapon="home/avatar/weapon/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponWoman').src='home/avatar/weapon/{{$allItem->my_item_img}}'">
                                                        <img class="picture" src="{{asset('home/avatar/weapon/'.$allItem->my_item_img) }}" />
                                                    </button>
                                                @endif
                                            @endforeach
                                            <button class="labelItem bgItem weaponItem manlist" data-weapon="home/avatar/weapon/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponMan').src='home/avatar/weapon/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                            <button class="labelItem bgItem weaponItem womanlist" data-weapon="home/avatar/weapon/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('weaponWoman').src='home/avatar/weapon/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                        </div>    
                                    </div>

                                    <!-- <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">คฑา</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/weapon/weapon_00.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ปืน</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/weapon/weapon_00.png') }}" />
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ธนู</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/weapon/weapon_00.png') }}" />
                                            </button>
                                        </div>    
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div id="other" class="container tab-pane">
                            <div class="row mt-3 rowAvatar" style="background-color:#202433;border-radius: 6px;">
                                <div class="col-12 pb-2"> 
                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">มงกุฏ/หมวก</span>
                                        <div class="col-lg-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "other")
                                                    @if($defaultItem->default_other == "crown")
                                                        <button class="labelItem bgItem crownItem manlist" data-crown="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownMan').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem crownItem womanlist" data-crown="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownWoman').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @foreach($item as $allItem)
                                                @if($allItem->my_item_type == "other")
                                                    @if($allItem->my_item_other == "crown")
                                                        <button class="labelItem bgItem crownItem manlist" data-crown="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownMan').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem crownItem womanlist" data-crown="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownWoman').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <button class="labelItem bgItem crownItem manlist" data-crown="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownMan').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                            <button class="labelItem bgItem crownItem womanlist" data-crown="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('crownWoman').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">ถุงมือ</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "other")
                                                    @if($defaultItem->default_other == "gloves")
                                                        <button class="labelItem bgItem glovesItem manlist" data-gloves="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesMan').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem glovesItem womanlist" data-gloves="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesWoman').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @foreach($item as $allItem)
                                                @if($allItem->my_item_type == "other")
                                                    @if($allItem->my_item_other == "gloves")
                                                        <button class="labelItem bgItem glovesItem manlist" data-gloves="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesMan').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem glovesItem womanlist" data-gloves="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesWoman').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <button class="labelItem bgItem glovesItem manlist" data-gloves="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesMan').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                            <button class="labelItem bgItem glovesItem womanlist" data-gloves="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('glovesWoman').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">เสื้อเกราะ</span>
                                        <div class="col-12">
                                            @foreach($default as $defaultItem)
                                                @if($defaultItem->default_type == "other")
                                                    @if($defaultItem->default_other == "armor")
                                                        <button class="labelItem bgItem armorItem manlist" data-armor="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorMan').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem armorItem womanlist" data-armor="home/avatar/other/{{$defaultItem->default_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorWoman').src='home/avatar/other/{{$defaultItem->default_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$defaultItem->default_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @foreach($item as $allItem)
                                                @if($allItem->my_item_type == "other")
                                                    @if($allItem->my_item_other == "armor")
                                                        <button class="labelItem bgItem armorItem manlist" data-armor="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorMan').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                        <button class="labelItem bgItem armorItem womanlist" data-armor="home/avatar/other/{{$allItem->my_item_img}}" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorWoman').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                        </button>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <button class="labelItem bgItem armorItem manlist" data-armor="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorMan').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                            <button class="labelItem bgItem armorItem womanlist" data-armor="home/avatar/other/noneImg.png" data-toggle="popover" data-placement="bottom" onclick="document.getElementById('armorWoman').src='home/avatar/other/noneImg.png'">
                                                <h4 class="noneItem">ไม่ใส่</h4>
                                            </button>
                                        </div>    
                                    </div>

                                    <!-- <div class="row">
                                        <span class="fontItem ml-4 mt-2 p">รองเท้า</span>
                                        <div class="col-12">
                                            <button class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                <img class="picture" src="{{asset('home/avatar/man/other/shoes/s.png') }}" />
                                            </button>
                                        </div>    
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-12 text-right pr-5 d-flex justify-content-end">
                    <label class="btnBuy mr-2">
                        <p style="margin:0;font-weight:800;">คืนค่า</p>
                    </label>
                    <!-- <button class="btnBuy" type="reset"><p style="margin:0;font-weight:800;">คืนค่า</p></button> -->
                    <form action="{{route('setAvatar')}}" method="post">
                        @csrf
                        <button name="submit" value="submit" class="btn-avatar"><p style="margin:0;font-weight:800;">บันทึก</p></button>
                        <input type="hidden" name="genderchecked">
                        <input type="hidden" name="manHair">
                        <input type="hidden" name="manEyes">
                        <input type="hidden" name="manGlasses">
                        <input type="hidden" name="manClothes">
                        <input type="hidden" name="manWeapon">
                        <input type="hidden" name="manCrown">
                        <input type="hidden" name="manGloves">
                        <input type="hidden" name="manArmor">
                        <input type="hidden" name="womanHair">
                        <input type="hidden" name="womanEyes">
                        <input type="hidden" name="womanGlasses">
                        <input type="hidden" name="womanClothes">
                        <input type="hidden" name="womanWeapon">
                        <input type="hidden" name="womanCrown">
                        <input type="hidden" name="womanGloves">
                        <input type="hidden" name="womanArmor">
                    </form>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#address').modal();
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('success') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif

<script>
$(document).ready(function() {
    var gender2 = $('input:radio[name="gender2"]:checked').val();
    if($('input:radio[name="gender2"]:checked').val() == 'woman'){
        $('.manlist').hide();
        $('.womanlist').show();
        getWoman();
    }else{
        $('.manlist').show();
        $('.womanlist').hide();
        getMan();
    }
    $('input[name="genderchecked"]').val(gender2);
    $('input:radio[name="gender2"]').change(
        function() {
            if ($(this).is(':checked') && $(this).val() == 'man'){
                $('.manlist').show();
                $('.womanlist').hide();
                $('input[name="genderchecked"]').val($(this).val());
                
                getMan();
            } else {
                $('.womanlist').show();
                $('.manlist').hide();
                $('input[name="genderchecked"]').val($(this).val());
                
                getWoman();
            }
        }
    );

    function getMan(){
        $('.labelItem.bgItem.hairItem.manlist').on('click', function(){
            var hair = $(this).data('hair');
            $('input[name="manHair"]').val(hair);
            
        })
        $('.labelItem.bgItem.eyesItem.manlist').on('click', function(){
            var eyes = $(this).data('eyes');
            $('input[name="manEyes"]').val(eyes);
            
        })
        $('.labelItem.bgItem.glassesItem.manlist').on('click', function(){
            var glasses = $(this).data('glasses');
            $('input[name="manGlasses"]').val(glasses);
            
        })
        $('.labelItem.bgItem.clothesItem.manlist').on('click', function(){
            var clothes = $(this).data('clothes');
            $('input[name="manClothes"]').val(clothes);
            
        })
        $('.labelItem.bgItem.weaponItem.manlist').on('click', function(){
            var weapon = $(this).data('weapon');
            $('input[name="manWeapon"]').val(weapon);
            
        })
        $('.labelItem.bgItem.crownItem.manlist').on('click', function(){
            var crown = $(this).data('crown');
            $('input[name="manCrown"]').val(crown);
            
        })
        $('.labelItem.bgItem.glovesItem.manlist').on('click', function(){
            var gloves = $(this).data('gloves');
            $('input[name="manGloves"]').val(gloves);
            
        })
        $('.labelItem.bgItem.armorItem.manlist').on('click', function(){
            var armor = $(this).data('armor');
            $('input[name="manArmor"]').val(armor);
            
        })
        var hairMan = $('#hairMan').attr('src').split("home/avatar");
        $('input[name="manHair"]').val('home/avatar'+hairMan[1]);
        var eyesMan = $('#eyesMan').attr('src').split("home/avatar");
        $('input[name="manEyes"]').val('home/avatar'+eyesMan[1]);
        var glassesMan = $('#glassesMan').attr('src').split("home/avatar");
        $('input[name="manGlasses"]').val('home/avatar'+glassesMan[1]);
        var clothesMan = $('#clothesMan').attr('src').split("home/avatar");
        $('input[name="manClothes"]').val('home/avatar'+clothesMan[1]);
        var weaponMan = $('#weaponMan').attr('src').split("home/avatar");
        $('input[name="manWeapon"]').val('home/avatar'+weaponMan[1]);
        var crownMan = $('#crownMan').attr('src').split("home/avatar");
        $('input[name="manCrown"]').val('home/avatar'+crownMan[1]);
        var glovesMan = $('#glovesMan').attr('src').split("home/avatar");
        $('input[name="manGloves"]').val('home/avatar'+glovesMan[1]);
        var armorMan = $('#armorMan').attr('src').split("home/avatar");
        $('input[name="manArmor"]').val('home/avatar'+armorMan[1]);
    }

    function getWoman(){
        $('.labelItem.bgItem.hairItem.womanlist').on('click', function(){
            var hair = $(this).data('hair');
            $('input[name="womanHair"]').val(hair);
            
        })
        $('.labelItem.bgItem.eyesItem.womanlist').on('click', function(){
            var eyes = $(this).data('eyes');
            $('input[name="womanEyes"]').val(eyes);
            
        })
        $('.labelItem.bgItem.glassesItem.womanlist').on('click', function(){
            var glasses = $(this).data('glasses');
            $('input[name="womanGlasses"]').val(glasses);
            
        })
        $('.labelItem.bgItem.clothesItem.womanlist').on('click', function(){
            var clothes = $(this).data('clothes');
            $('input[name="womanClothes"]').val(clothes);
            
        })
        $('.labelItem.bgItem.weaponItem.womanlist').on('click', function(){
            var weapon = $(this).data('weapon');
            $('input[name="womanWeapon"]').val(weapon);
            
        })
        $('.labelItem.bgItem.crownItem.womanlist').on('click', function(){
            var crown = $(this).data('crown');
            $('input[name="womanCrown"]').val(crown);
            
        })
        $('.labelItem.bgItem.glovesItem.womanlist').on('click', function(){
            var gloves = $(this).data('gloves');
            $('input[name="womanGloves"]').val(gloves);
        })
        $('.labelItem.bgItem.armorItem.womanlist').on('click', function(){
            var armor = $(this).data('armor');
            $('input[name="womanArmor"]').val(armor);
        })
        var hairWoman = $('#hairwoman').attr('src').split("home/avatar");
        $('input[name="womanHair"]').val('home/avatar'+hairWoman[1]);
        var eyesWoman = $('#eyesWoman').attr('src').split("home/avatar");
        $('input[name="womanEyes"]').val('home/avatar'+eyesWoman[1]);
        var glassesWoman = $('#glassesWoman').attr('src').split("home/avatar");
        $('input[name="womanGlasses"]').val('home/avatar'+glassesWoman[1]);
        var clothesWoman = $('#clothesWoman').attr('src').split("home/avatar");
        $('input[name="womanClothes"]').val('home/avatar'+clothesWoman[1]);
        var weaponWoman = $('#weaponWoman').attr('src').split("home/avatar");
        $('input[name="womanWeapon"]').val('home/avatar'+weaponWoman[1]);
        var crownWoman = $('#crownWoman').attr('src').split("home/avatar");
        $('input[name="womanCrown"]').val('home/avatar'+crownWoman[1]);
        var glovesWoman = $('#glovesWoman').attr('src').split("home/avatar");
        $('input[name="womanGloves"]').val('home/avatar'+glovesWoman[1]);
        var armorWoman = $('#armorWoman').attr('src').split("home/avatar");
        $('input[name="womanArmor"]').val('home/avatar'+armorWoman[1]);
    }
});
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