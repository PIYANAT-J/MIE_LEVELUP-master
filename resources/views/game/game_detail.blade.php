@extends('layout.detail_navbar')

@section('content')

<div class="container-fluid">
    @foreach($Detail as $detailGame)
        <div class="row my-5 "></div>
        <div class="row my-2 "></div>
        <div class="row dark">
            <div class="col-lg-2 font_back">
                <a href="{{ url('/') }}" style="color:#fff;"><i class="icon-prev mx-2" style="font-size:18px;"></i>Back</a>
            </div>
            <div class="col-lg-8 ">
                <iframe class="video_detail" src="{{ $detailGame->GAME_VDO_LINK }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="row mt-3 ml-0">
                    <div class="col-1 pt-3"><img src="{{asset('section/game_rate/rate.svg') }}" /></div>
                    <div class="col-7 ">
                        <p class="font_detail3 pt-4 ml-1 ">
                            <b style="font-family:myfont;color:#f6c12c; font-size:28px;">4.5/5</b>&nbsp;&nbsp;&nbsp;| &nbsp;<b class="font_detail4" >124 </b>ความคิดเห็น</br>
                            <b class="font_detail4">15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp;
                            <b class="font_detail4">104.5</b> &nbsp; ชั่วโมง
                        </p>
                    </div>
                    <div class="col-3 mr-3">
                        @guest
                            <a href="{{ route('login-levelUp') }}">
                                <button class="follow-before" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                                <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                            </a>
                        @else
                            @if(isset($FollowDetail))
                                <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="follow-after" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">กำลังติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_ID" value="{{ $FollowDetail->FOLLOW_ID }}">
                                    </button>
                                </form>
                                @if(isset($Download))
                                    <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @endif
                                @else
                                    <!-- <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                            <input type="hidden" name="submit" value="submit">
                                            <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                            <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                            <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                        </button >
                                    </form> -->
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @else
                                        <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                            </button >
                                        </form>
                                    @endif
                                @endif
                            @else
                                <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="follow-before" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $detailGame->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button >
                                </form>
                                @if(isset($Download))
                                    <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @endif
                                @else
                                    <!-- <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                            <input type="hidden" name="submit" value="submit">
                                            <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                            <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                            <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                        </button >
                                    </form> -->
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                                    @else
                                        <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b>
                                                <input type="hidden" name="submit" value="submit">
                                                <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                            </button >
                                        </form>
                                    @endif
                                @endif
                            @endif
                            <!-- <button class="follow-before" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                            
                            <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                            <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                            <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                            <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                            <button class="follow-after mt-1"><span class="icon-support_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">สนับสนุนแล้ว</b></button > -->
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 pl-4">
                <div class="font_game_name">{{ $detailGame->GAME_NAME }}</div>
                <div class="w-100"></div>
                <div class="rate_detail">Online • Other</div>
                <div class="des_detail mb-3">{{ $detailGame->GAME_DESCRIPTION }}
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <div class="row grey py-3">
            <div class="col-lg-3"></div>
            <div class="col-lg-2 pl-4">
                <div class="dev_detail">ผู้พัฒนา</div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ $detailGame->name }} {{ $detailGame->surname }}</div>
            </div>
            <div class="col-lg-1 pl-4">
                <div class="dev_detail">ขนาดไฟล์ </div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ $detailGame->GAME_SIZE }}</div>
            </div>
            <div class="col-lg-1 pl-4">
                <div class="dev_detail">เวอร์ชัน</div>
                <div class="w-100"></div>
                <div class="dev_detail2">12.0.1</div>
            </div>
            <div class="col-lg-2 pl-4">
                <div class="dev_detail">วันที่เผยพร่ </div>
                <div class="w-100"></div>
                <div class="dev_detail2">{{ Illuminate\Support\Str::limit($detailGame->GAME_APPROVE_DATE, 10, $end='') }}</div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    @endforeach
    <!-- <div class="row my-5 "></div>
    <div class="row my-2 "></div>
    <div class="row dark">
        <div class="col-lg-2 font_back">
            <a href="{{ url('/') }}" style="color:#fff;"><i class="icon-prev mx-2" style="font-size:18px;"></i>Back</a>
        </div>
        <div class="col-lg-8 ">
            <iframe class="video_detail" src="https://www.youtube.com/embed/hU8oGKzVAmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row mt-3 ml-0">
                <div class="col-1 pt-3"><img src="{{asset('section/game_rate/rate.svg') }}" /></div>
                <div class="col-7 ">
                    <p class="font_detail3 pt-4 ml-1 ">
                        <b style="font-family:myfont;color:#f6c12c; font-size:28px;">4.5/5</b>&nbsp;&nbsp;&nbsp;| &nbsp;<b class="font_detail4" >124 </b>ความคิดเห็น</br>
                        <b class="font_detail4">15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp;
                        <b class="font_detail4">104.5</b> &nbsp; ชั่วโมง
                    </p>
                </div>
                <div class="col-3 mr-3">
                    <button class="follow-before" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                    <button class="follow-after" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">กำลังติดตาม</b></button >
                    <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                    <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">ดาวน์โหลดแล้ว</b></button >
                    <a href="#"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                    <button data-toggle="modal" data-target="#myModal" class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">สนับสนุนเกม</b></button >
                    <button class="follow-after mt-1"><span class="icon-support_after" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">สนับสนุนแล้ว</b></button >
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 pl-4">
            <div class="font_game_name">PlayerUnknown’s Battlegrounds</div>
            <div class="w-100"></div>
            <div class="rate_detail">Online • Other</div>
            <div class="des_detail mb-3">
            PlayerUnknown’s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published 
            by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous 
            mods that were created by Brendan “PlayerUnknown” Greene for other games, inspired by the 2000 Japanese film 
            Battle Royale, and expanded into a standalone game under Greene’s creative direction. In the game, up to one 
            hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding 
            getting killed themselves. The available safe area of the game’s map decreases in size over time, directing 
            surviving players into tighter areas to force encounters. The last player or team standing wins the round.
            Battlegrounds was first released for Microsoft Windows via Steam’s early access beta program in March 2017, 
            with a full release in December 2017. The game was also released by Microsoft Studios for the Xbox One via 
            its Xbox Game Preview program that same month, and officially released in September 2018. A free-to-play 
            mobile version for Android and iOS was released in 2018, in addition to a port for the PlayStation 4. 
            A version for the Stadia streaming platform was released in April 2020. Battlegrounds is one of 
            the best-selling and most-played video games of all time. By 2019, the PC and console versions of the game 
            have sold over 60 million copies, in addition to PUBG Mobile having crossed 600 million downloads.
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row grey py-3">
        <div class="col-lg-3"></div>
        <div class="col-lg-2 pl-4">
            <div class="dev_detail">ผู้พัฒนา</div>
            <div class="w-100"></div>
            <div class="dev_detail2">ชื่อผู้พัฒนา/ชื่อทีมผู้พัฒนา</div>
        </div>
        <div class="col-lg-1 pl-4">
            <div class="dev_detail">ขนาดไฟล์ </div>
            <div class="w-100"></div>
            <div class="dev_detail2">1.08GB</div>
        </div>
        <div class="col-lg-1 pl-4">
            <div class="dev_detail">เวอร์ชัน</div>
            <div class="w-100"></div>
            <div class="dev_detail2">12.0.1</div>
        </div>
        <div class="col-lg-2 pl-4">
            <div class="dev_detail">วันที่เผยพร่ </div>
            <div class="w-100"></div>
            <div class="dev_detail2">4 มิถุนายน 2563</div>
        </div>
        <div class="col-lg-1"></div>
    </div> -->

    <div class="row pt-4">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 rate_bottom">
            <div class="row">
                <div class="col-6 text-left pl-4">
                    <span class="font_rate3">การจัดอันดับ</span>
                </div>
                <div class="col-6 pb-4 text-right  ">
                    <span class="rate" >4.5/5</span>
                    <span style="font-size: 20px;" class="fa fa-star checked"></span>
                    <span style="font-size: 20px;" class="fa fa-star checked"></span>
                    <span style="font-size: 20px;" class="fa fa-star checked"></span>
                    <span style="font-size: 20px;" class="fa fa-star"></span>
                    <span style="font-size: 20px;" class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <a href=""><button class="totalComment fontTotalComment"> ทั้งหมด (123)</button></a>
                <a href=""><button class="Comment fontComment"> 5 ดาว (100)</button></a>
                <a href=""><button class="Comment fontComment"> 4 ดาว (20)</button></a>
                <a href=""><button class="Comment fontComment"> 3 ดาว (2)</button></a>
                <a href=""><button class="Comment fontComment"> 2 ดาว (1)</button></a>
                <a href=""><button class="Comment fontComment"> 1 ดาว (0)</button></a>
            </div>
        </div>
    </div>

    <div class="row mt-3 ">
        <div class="col-lg-3 "></div>
        <div class="col-lg-6 commentArea pl-4">
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_1.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">เกมส์สนุกค่ะ แต่ไม่มีเพื่อนเล่นด้วยเลย </div>
            </div> 
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_2.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">ใช้กับโทรศัพท์หน้าจอเล็กไม่มีปัญหาครับ </div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_3.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">มีโหมดมือใหม่ให้เล่นได้ง่ายดี</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_4.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">ไม่กินความจำเลย เล่นสนุกลื่นดี</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_5.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_6.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_7.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_8.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_1.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>
            <div class="row mt-2 rate_bottom">
                <div class="col-2 text-center">
                    <img class="imgComment" src="{{asset('dist/images/person_2.jpg') }}"/>
                </div>
                <div class="col-8 commenter">ชื่อผู้คอมเมนท์</br>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                    <span style="font-size: 15px;" class="fa fa-star checked"></span>
                </div>
                <div class="row commentDetail ml-3 my-3">คอมเมนท์</div>
            </div>  
        </div>
    </div>

    <!-- <div class="row pt-4">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 ml-2 pr-4"> 
            <form>
                <input type="number" name="rating" id="rating-input" min="1" max="5" class="d-none" />
            </form>
            
            <div class="rating" role="optgroup">
                <span class="fontScoreComment mr-2">ระดับคะแนน</span>
                <i class="fa fa-star-o rating-star" id="rating-1" data-rating="1" tabindex="0" aria-label="Rate as one out of 5 stars" role="radio"></i>
                <i class="fa fa-star-o rating-star" id="rating-2" data-rating="2" tabindex="0" aria-label="Rate as two out of 5 stars" role="radio"></i>
                <i class="fa fa-star-o rating-star" id="rating-3" data-rating="3" tabindex="0" aria-label="Rate as three out of 5 stars" role="radio"></i>
                <i class="fa fa-star-o rating-star" id="rating-4" data-rating="4" tabindex="0" aria-label="Rate as four out of 5 stars" role="radio"></i>
                <i class="fa fa-star-o rating-star" id="rating-5" data-rating="5" tabindex="0" aria-label="Rate as five out of 5 stars" role="radio"></i>
            </div>
            <textarea class="newComment_textarea" rows="8" placeholder="แสดงความคิดเห็น"></textarea>
            <button class="btn-newComment">ตกลง</button>
        </div>
        <div class="col-lg-3"></div>
    </div> -->

    <div class="row pt-4">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-6 text-left pl-4">
                    <span class="font_rate3">เกมใกล้เคียง</span>
                </div>
                <div class="col-6 pb-4 text-right  ">
                    <h2 style="font-family:myfont;"><a class="game_cat" href="{{ route('GAMESHELF') }}">ดูทั้งหมด </a><img style="padding-top:13px;" src="{{asset('icon/next1.svg') }}" /></h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="container-fluid">
        <div class="owl-carousel" id="owl-demo">
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img id="downImg1" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game19.png') }}" />
                    <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div>
                    <span class="desc">
                        <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <!-- <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <!-- <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div> -->
                        <button id="down" class="down3 btn btn-dark" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"><img id="downImg2" src="{{asset('icon/down1.svg')}}"></button>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game20.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game21.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game22.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
            <div class="item imgteaser">
                <a>
                    <img class="game_2" src="{{asset('section/picture_game/game18.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                        <!-- <button class="btn_follow2 text-left"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <button class="btn_follow"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <img class="rate_pic" style="width: 20%;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <b style="font-size: 30px;color: #fff;">Maneater</b>
                            <div class="mt-1" style="font-size: 25px;color: #fff;">Discrimination • Online</div>
                        </div>
                        <div class="down"><img  src="{{asset('icon/down1.svg') }}" /></div>
                    </span>
                </a>
            </div>
        </div>
    
        <div class="collapse" id="collapseExample1">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game6.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;คอมเมนท์</br>
                                    <b>15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;ชั่วโมง
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok8</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button >
                        <!-- <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button > -->
                        <a href="/detail"><button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button></a>
                    </div>
                </div>
            </div>
        </div> 
        <div class="collapse" id="collapseExample2">
            <div class="form">
                <div class="row">
                    <div class="col-lg-5">
                    <!-- <img class="pic1 show_bg_2 text-right " src="{{asset('section/picture_game/game7.png') }}" /> -->
                        <div class="responsive-video">
                            <img class="transparent-img" src="http://res.cloudinary.com/mhasan/image/upload/v1499355448/transparent_p4vrmt.png" alt="Transparent-img">
                            <iframe class="video" src="//www.youtube.com/embed/668nUCeBHyY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col my-4 ml-1 mr-3" >
                        <div class="row ">
                            <div class="col-lg-1"><img class="rate_pic3" src="{{asset('section/game_rate/rate.svg') }}" /></div>
                            <div class="col-lg-10 mt-1 row_rate">
                                <p class="font_rate1">
                                    <b style="color:#f6c12c; font-size:30px;">4.5/5</b>&nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>124</b> &nbsp;คอมเมนท์</br>
                                    <b>15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp;
                                    <b>104.5</b> &nbsp;ชั่วโมง
                                </p>
                            </div>
                        </div>
                        <p class="font_rate2 "><b>Ragnarok9</b></br>Online • Other</p>
                        <p class="font_detail ">Ragnarok Online is a massive multiplayer online role-playing game created by Gravity based on the manhwa Ragnarok by Lee Myung-jin</p>
                        <!-- <button class="btn_follow5" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;"></span><b class="font_follow2">ติดตาม</b></button > -->
                        <button class="btn_follow6 text-left" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh " style="font-size:16px; padding-left:3px;"></span><b class="font_follow" style="padding-right:10px;">กำลังติดตาม</b></button >
                        <a href="/detail"><button class="btn_follow7"><b class="font_follow2" style="color: #fff;">รายละเอียด</b></button></a>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade mymodal" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color: #000;">กรุณาเลือกช่วงเวลาในการสนับสนุน</h4>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>

                <div class="modal-body">
                    <div class="containner-fluid">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-modal" src="{{asset('section/picture_game/game2.png') }}" />
                            </div>
                            <div class="col-sm-6">
                                <a class="font-gamename-modal" style="color: #000;">PlayerUnknown’s Battlegrounds</a></br>
                                <a class="font-rate-modal">Online • Other</a></br>
                                <a class="font-rate-modal">เวอร์ชัน 12.0.1</a></br>
                            </div>
                            <div class="col-sm-3 text-center">
                                <a class="font-gamename-modal" style="color: #000;">เลือกช่วงเวลา</a></br>
                                <div class="md-form md-outline">
                                    <input type="time" id="default-picker" class="timepicker" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row rate_top mx-0">
                    <div class="col-6 text-left my-2">
                        <button type="button" class="btn-cancal" data-dismiss="modal">ยกเลิก</button>
                    </div>  
                    <div class="col-6 text-right my-2">
                        <button type="button" class="btn-submit" data-dismiss="modal">ยืนยัน</button>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>

<script>
    $(document).ready(function() {
    
        $("#owl-demo").owlCarousel({
            loop:true,
            margin:10,
            navigation : true,
            navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:3,
                    nav:true
                },
                730:{
                    items:3.3,
                    nav:true
                },
                980:{
                    items:4.3,
                    nav:true
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                },
                1280:{
                    items:6,
                    nav:true,
                    loop:false
                },
                1600:{
                    items:7,
                    nav:true,
                    loop:false
                },
                1680 :{
                    items:7.3,
                    nav:true,
                    loop:false
                },
                1920:{
                    items:8.4,
                    nav:true,
                    loop:false
                }
            }
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('[data-toggle="collapse1"]').click(function() {
            $(this).toggleClass( "active" );
            if ($(this).hasClass("active")) {
                document.getElementById("downImg1").src = "{{asset('icon/up.svg')}}";
            } else {
                document.getElementById("downImg1").src = "{{asset('icon/down1.svg')}}";
            }
        });
    // document ready  
    });
</script>

<script>
    $(document).ready(function() {
        $('[data-toggle="collapse2"]').click(function() {
            $(this).toggleClass( "active" );
            if ($(this).hasClass("active")) {
                document.getElementById("downImg2").src = "{{asset('icon/up.svg')}}";
            } else {
                document.getElementById("downImg2").src = "{{asset('icon/down1.svg')}}";
            }
        });
    // document ready  
    });
</script>

<script>
    $(document).ready(function () {
        function setRating(rating) {
            $('#rating-input').val(rating);
            // fill all the stars assigning the '.selected' class
            $('.rating-star').removeClass('fa-star-o').addClass('selected');
            // empty all the stars to the right of the mouse
            $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
        }
        
        $('.rating-star')
        .on('mouseover', function(e) {
            var rating = $(e.target).data('rating');
            // fill all the stars
            $('.rating-star').removeClass('fa-star-o').addClass('fa-star');
            // empty all the stars to the right of the mouse
            $('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
        })
        .on('mouseleave', function (e) {
            // empty all the stars except those with class .selected
            $('.rating-star').removeClass('fa-star').addClass('fa-star-o');
        })
        .on('click', function(e) {
            var rating = $(e.target).data('rating');
            setRating(rating);
        })
        .on('keyup', function(e){
            // if spacebar is pressed while selecting a star
            if (e.keyCode === 32) {
            // set rating (same as clicking on the star)
            var rating = $(e.target).data('rating');
            setRating(rating);
            }
        });
    });
</script>
@endsection