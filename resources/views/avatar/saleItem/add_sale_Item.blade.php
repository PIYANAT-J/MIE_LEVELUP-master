@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')
 
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-sm-8 col-md-9 col-lg-9 col-xl-10 pt-2">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shop" class="avatar-link active">
                            <h1 style="margin:0;">ตลาดซื้อขาย</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/sale" class="avatar-link active">
                            <h1 style="margin:0;">ไอเทมวางขาย</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/add_sale_item" class="avatar-link">
                            <h1 style="margin:0;">เพิ่มไอเทมขาย</h1>
                        </a>
                    </label>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-2">
                    <div class="row mb-3">
                        <div class="col-12">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active itemAvatar3 p" data-toggle="tab" href="#head2">ศรีษะ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#clothes2">เสื้อผ้า</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#weapon2">อาวุธ</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link itemAvatar3 p" data-toggle="tab" href="#other2">ไอเทมพิเศษ</a>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="row mx-0 pb-3" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="head2" class="container tab-pane active">
                                    <div class="row mt-2 row6">
                                        <div class="col-12" style="padding-left:0;"> 
                                            <div class="row">
                                                <div class="col-12" >
                                                    <!-- <p style="margin:0;color:#fff;">ทรงผม</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "hair")
                                                            <p style="margin:0;color:#fff;">ทรงผม</p>
                                                            @foreach($item as $key=>$allItem)
                                                                    @if($allItem->my_item_type == "hair" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                        @if($allItem->my_item_gender == "man")
                                                                            <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/man/{{$allItem->my_item_img}}'">
                                                                                <img class="picture" src="{{asset('home/avatar/hair/man/'.$allItem->my_item_img) }}" />
                                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->my_item_level}}</h5></span>
                                                                            </button>
                                                                        @else
                                                                            <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/hair/woman/{{$allItem->my_item_img}}'">
                                                                                <img class="picture" src="{{asset('home/avatar/hair/woman/'.$allItem->my_item_img) }}" />
                                                                                <span class="font-sale2"><h5 style="margin:0;">{{$allItem->my_item_level}}</h5></span>
                                                                            </button>
                                                                        @endif
                                                                    @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">สีตา</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "eyes")
                                                            <p style="margin:0;color:#fff;">สีตา</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "eyes" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    @if($allItem->my_item_gender == "man")
                                                                        <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/man/{{$allItem->my_item_img}}'">
                                                                            <img class="picture" src="{{asset('home/avatar/eyes/man/'.$allItem->my_item_img) }}" />
                                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->my_item_level}}</h5></span>
                                                                        </button>
                                                                    @else
                                                                        <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/eyes/woman/{{$allItem->my_item_img}}'">
                                                                            <img class="picture" src="{{asset('home/avatar/eyes/woman/'.$allItem->my_item_img) }}" />
                                                                            <span class="font-sale2"><h5 style="margin:0;">{{$allItem->my_item_level}}</h5></span>
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">แว่นตา</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "glasses")
                                                            <p style="margin:0;color:#fff;">แว่นตา</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "glasses" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                            data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/glasses/{{$allItem->my_item_img}}'">
                                                                        <img class="picture" src="{{asset('home/avatar/glasses/'.$allItem->my_item_img) }}" />
                                                                    </button>
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>
                                            <!-- <div class="row">
                                                <span class="fontItem ml-4">ปาก</span>
                                                <div class="col-lg-12">
                                                    <label class="labelItem bgItem active" data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/mouth/m.png') }}" />
                                                    </label>
                                                </div>    
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div id="clothes2" class="container tab-pane">
                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12" style="padding-left:0;"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">ชุดไปรเวท</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "clothes")
                                                            @if($text->my_item_other != "hero")
                                                                <p style="margin:0;color:#fff;">ชุดไปรเวท</p>
                                                                @foreach($item as $key=>$allItem)
                                                                    @if($allItem->my_item_type == "clothes" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                        @if($allItem->my_item_gender == "man")
                                                                            @if($allItem->my_item_other != "hero")
                                                                                <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                        data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/{{$allItem->my_item_img}}'">
                                                                                    <img class="picture" src="{{asset('home/avatar/clothes/man/'.$allItem->my_item_img) }}" />
                                                                                </button>
                                                                            @endif
                                                                        @else
                                                                            @if($allItem->my_item_other != "hero")
                                                                                <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                        data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/woman/{{$allItem->my_item_img}}'">
                                                                                    <img class="picture" src="{{asset('home/avatar/clothes/woman/'.$allItem->my_item_img) }}" />
                                                                                </button>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                                @break
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">ชุดซุปเปอร์ฮีโร่</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "clothes")
                                                            <p style="margin:0;color:#fff;">ชุดซุปเปอร์ฮีโร่</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "clothes" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    @if($allItem->my_item_gender == "man")
                                                                        @if($allItem->my_item_other == "hero")
                                                                            <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/man/hero/{{$allItem->my_item_img}}'">
                                                                                <img class="picture" src="{{asset('home/avatar/clothes/man/hero/'.$allItem->my_item_img) }}" />
                                                                            </button>
                                                                        @endif
                                                                    @else
                                                                        @if($allItem->my_item_other == "hero")
                                                                            <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/clothes/woman/hero/{{$allItem->my_item_img}}'">
                                                                                <img class="picture" src="{{asset('home/avatar/clothes/woman/hero/'.$allItem->my_item_img) }}" />
                                                                            </button>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="weapon2" class="container tab-pane">
                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12" style="padding-left:0;"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">ดาบ</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_type == "weapon")
                                                            <p style="margin:0;color:#fff;">ดาบ</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "weapon" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                            data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/weapon/{{$allItem->my_item_img}}'">
                                                                        <img class="picture" src="{{asset('home/avatar/weapon/'.$allItem->my_item_img) }}" />
                                                                    </button>
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <!-- <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">คฑา</p>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/wand/w01.svg') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                </div>    
                                            </div> -->

                                            <!-- <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ปืน</p>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/gun/g01.svg') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                </div>    
                                            </div> -->

                                            <!-- <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">ธนู</p>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/weapon/archer/a01.svg') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                </div>    
                                            </div> -->

                                        </div>
                                    </div>
                                </div>

                                <div id="other2" class="container tab-pane">
                                    <div class="row mt-2 row6" style="background-color:#202433;border-radius: 6px;">
                                        <div class="col-12" style="padding-left:0;"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">มงกุฏ/หมวก</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_other == "crown")
                                                            <p style="margin:0;color:#fff;">มงกุฏ/หมวก</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "other" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    @if($allItem->my_item_other == "crown")
                                                                        @if($allItem->my_item_amount_discount != $allItem->my_item_amount)
                                                                            <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                    data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                                                <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                                            </button>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">ถุงมือ</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_other == "gloves")
                                                            <p style="margin:0;color:#fff;">ถุงมือ</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "other" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    @if($allItem->my_item_other == "gloves")
                                                                        <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <p style="margin:0;color:#fff;">เสื้อเกราะ</p> -->
                                                    @foreach($item as $key=>$text)
                                                        @if($text->my_item_other == "armor")
                                                            <p style="margin:0;color:#fff;">เสื้อเกราะ</p>
                                                            @foreach($item as $key=>$allItem)
                                                                @if($allItem->my_item_type == "other" && $allItem->my_item_amount > $allItem->my_item_amount_discount)
                                                                    @if($allItem->my_item_other == "armor")
                                                                        <button class="labelItem bgItem" value="{{$allItem->item_id}}" data-amount="1" data-max="{{$allItem->my_item_amount}}" data-discount="{{$allItem->my_item_amount_discount}}" 
                                                                                data-toggle="popover" data-trigger="hover" data-content='<div class="mediaPopover popover1">{{$allItem->my_item_description}}</div>' data-placement="bottom" onclick="document.getElementById('saleItem').src='home/avatar/other/{{$allItem->my_item_img}}'">
                                                                            <img class="picture" src="{{asset('home/avatar/other/'.$allItem->my_item_img) }}" />
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </div>    
                                            </div>

                                            <!-- <div class="row">
                                                <div class="col-12">
                                                    <p style="margin:0;color:#fff;">รองเท้า</p>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s01.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s02.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                    <label class="labelItem bgItem " data-toggle="popover" data-placement="bottom">
                                                        <img class="picture" src="{{asset('home/avatar/woman/other/shoes/s03.png') }}" />
                                                        <span class="font-sale2"><h5 style="margin:0;">1</h5></span>    
                                                    </label>
                                                </div>    
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 number-data">
                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12 mt-2">
                            <div class="font-sale1"><p style="margin:0">รายละเอียด</p></div>
                            
                            <div class="row mb-3" >
                                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <label class="labelItem bgItem" data-toggle="popover" data-placement="bottom">
                                        <img id="saleItem" class="picture2" src="{{asset('home/avatar/icon/sale.png') }}" />
                                    </label>
                                </div>

                                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center" style="padding:0;margin-top:28px;">
                                    <div class="quantity-block2 ">
                                        <button class="quantity-arrow-minus2"> - </button>
                                        <input class="quantity-num2 h5" name="num2" type="number" value="1" min="1" max="5"/>
                                        <button class="quantity-arrow-plus2"> + </button>
                                    </div>
                                </div>

                                <div class="col-10 col-sm-5 col-md-5 col-lg-5 col-xl-5 ">
                                    <label class="labelInputAvatar my-4">
                                        <span class="symbol1"><h4 style="margin:0">฿</h4></span>
                                        <input type="number" name="dataprice" value="{{old('dataprice')}}" class="input-avatar p" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="ตั้งราคาไอเทม">
                                    </label>
                                </div>
                                <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 my-4 py-1 text-center" style="padding:0;">
                                    <img style="width:50%;cursor:pointer;" src="{{asset('icon/trash.svg') }}" />
                                </div>
                            </div>

                            <div class="row mx-0 pb-4" >
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-2 paddingAddsale">
                                    <button class="itemAvatar4">
                                        <p style="margin:0;color:#000;font-weight:800;">ยกเลิกการขาย</p>
                                    </button>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right mb-2 paddingAddsale">
                                    <form action="{{route('Add_SaleItem')}}" method="post">
                                        @csrf
                                        <button class="btn-avatar2" name="submit" value="sale_Item"><p style="margin:0;color:#000;font-weight:800;">เปิดการขาย</p></button>
                                        <input type="hidden" name="amount">
                                        <input type="hidden" name="item_id">
                                        <input type="hidden" name="price">
                                    </form>
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
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            trigger : 'hover',
            html : true,
            // content : '<div class="mediaPopover popover1">ตัวอย่างนี้เป็นการกำหนดให้ข้อความตัดอัตโนมัติเมื่อยาวเกินกว่าขอบเขตการแสดงผล โดยใช้ css ในการตัดด้วยคำสั่ง overflow</div>'
        });
    });
</script>

<script>
    $(function() {
        (function quantityProducts() {
            var $quantityArrowMinus = $(".quantity-arrow-minus2");
            var $quantityArrowPlus = $(".quantity-arrow-plus2");
            var $max;
            $quantityArrowMinus.click(quantityMinus);
            $quantityArrowPlus.click(quantityPlus);

            function quantityMinus() {
                $quantityNum = $(this).parent().find('.quantity-num2').val();
                if($quantityNum > 1){
                    $quantityNum = (+$quantityNum - 1);
                    $(this).parent().find('.quantity-num2').val($quantityNum);
                    $(this).parents('.number-data').find('input[name="amount"]').val($quantityNum);
                    console.log($quantityNum);
                }
            }
            function quantityPlus() {
                $quantityNum = $(this).parent().find('.quantity-num2').val();
                // $max = $(this).parent().find('.quantity-num2').attr('max');
                if($quantityNum < (+$max)){
                    $quantityNum = (+$quantityNum + 1);
                    $(this).parent().find('.quantity-num2').val($quantityNum);
                    $(this).parents('.number-data').find('input[name="amount"]').val($quantityNum);
                    console.log($quantityNum);
                }
            }
            $('.labelItem.bgItem').on('click', function(){
                var item_id = $(this).val();
                var amount = $(this).data('amount');
                var discount = $(this).data('discount');
                $max = $(this).data('max');

                $max = $max - discount;
                console.log($max);

                $('input[name="num2"]').val(1);
                $('input[name="item_id"]').val(item_id);
                $('input[name="amount"]').val(amount);
                return $max;
            })
        })();
    });
</script>

<script>
    document.querySelector('input[name="dataprice"]').addEventListener('keyup', (event)=>{
        var creditQr = document.querySelector('input[name="dataprice"]').value
        // var money = credit * 30 - ((credit * 30) * 3 /100)
        var moneyQr = creditQr
        document.querySelector('input[name="price"]').value = moneyQr
        console.log('Error:', moneyQr);
    })
</script>
@endsection