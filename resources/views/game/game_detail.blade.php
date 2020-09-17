@extends('layout.detail_navbar')

@section('style')


<style>
    .filterDiv {
    /* float: left; */
    /* background-color: #2196F3; */
    /* color: #ffffff; */
    /* width: 100%;
    line-height: 100px; */
    /* text-align: center; */
    /* margin: 2px; */
    display: none;
    }

    .show {
        width: 100%;
        display: block;
    }

    /* .container {
    margin-top: 20px;
    overflow: hidden;
    } */
     
    * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

    
</style>
@endsection

@section('content')
<div class="container-fluid">
    @foreach($Detail as $detailGame)
        <div class="row" style="background-color: #202433;height:130px;"></div>
        <div class="row" style="background-color: #202433;">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3">
                <a href="{{ url('/') }}" style="color:#fff;">
                    <i class="icon-prev mx-2"></i>
                    <label style="cursor:pointer;"><h1>Back</h1></label>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides">
                        <iframe style="width:100%;height:350px;margin:0;" src="{{ $detailGame->GAME_VDO_LINK }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    
                    <div class="mySlides" style="padding-bottom:6px;">
                        <img  src="{{asset('section/picture_game/pubg.jpeg') }}" style="width:100%;height:350px;object-fit: cover;">
                    </div>

                    <div class="mySlides" style="padding-bottom:6px;">
                        <img class="img-detail" src="{{asset('section/picture_game/pubg_lite.jpeg') }}" style="width:100%;height:350px;object-fit: cover;">
                    </div>
                    <!-- Next and previous buttons -->
                        <a class="customNextBtn" onclick="plusSlides(1)"><i class='icon-next'></i></a>
                        <a class="customPreviousBtn" onclick="plusSlides(-1)"><i class='icon-prev'></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        </div>

        <div class="row" style="background-color: #141621;">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <div class="row" style="height:90px;">
                    <div class="col-12">
                        <label class="pImgRateDetail">
                            <img style="width:50px;" src="{{asset('section/game_rate/'.$detailGame->RATED_ESRB.'.svg') }}" />
                        </label>

                        <div class="pFontRateDetail">
                            @if(isset($CommentAll))
                                <?php $i = 0; ?>
                                @foreach($CommentAll as $CAC)
                                    <?php $i = $i+$CAC->RATING; ?>
                                @endforeach
                                <?php 
                                    if($CommentAll->count() == 0 || $i == 0){
                                        $count = 0;
                                    }else{
                                        $count = $i/$CommentAll->count();
                                    }
                                ?>
                            @endif
                            <label style="margin:0;"><h4 style="color:#f6c12c;font-weight:800;margin:0;">{{round($count, 1)}}/5 </h4></label>
                            <label style="margin:0;"><h4 style="color:#a8a8a8;margin:0;"> | </h4></label>
                            <label style="margin:0;"><h4 style="color:#ffffff;font-weight:800;margin:0;">{{$CommentAll->count()}} </h4></label>
                            <label style="margin:0;"><h2 style="color:#a8a8a8;margin:0;"> ความคิดเห็น</h2></label></br>
                            <label style="margin:0;"><h4 style="color:#ffffff;font-weight:800;margin:0;">{{ $DownloadAll->count() }} </label>
                            <label style="margin:0;"><h2 style="color:#a8a8a8;margin:0;"> ดาวน์โหลด</label>
                            <!-- <b class="font_detail4">104.5</b> &nbsp; ชั่วโมง -->
                        </div>
                        @guest
                            <a href="{{ route('login-levelUp') }}">
                                <button class="btnFollowDetail">
                                    <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;"></p></label>
                                    <label style="margin:0;"><p class="fontBTNDetail" >ติดตาม</p></label>
                                </button>
                                <button class="btnDownloadDetail">
                                    <label style="margin:0;"><p class="icon-icon_download" style="cursor: pointer;"></p></label>
                                    <label style="margin:0;"><p class="fontBTNDetail" >ดาวน์โหลด</p></label>
                                </button >
                            </a>
                        @else
                            @if(isset($FollowDetail))
                                <form action="{{ route('Follow') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btnFollowingDetail">
                                        <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNDetail-wh" >กำลังติดตาม</p></label>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_ID" value="{{ $FollowDetail->FOLLOW_ID }}">
                                    </button>
                                </form>
                                @if(isset($Download))
                                    <button class="btnDownloaded">
                                        <label style="margin:0;"><p class="icon-download_after" style="cursor: pointer;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNDetail-wh" >ดาวน์โหลดแล้ว</p></label>
                                    </button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#">
                                            <button class="btnUpdateDetail mt-1">
                                                <label style="margin:0;"><p class="icon-update_version" style="cursor:pointer;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNDetail">อัพเดตเวอร์ชัน</p></label>
                                            </button >
                                        </a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="btnSupportDetail">
                                            <label style="margin:0;"><p class="icon-support" style="cursor:pointer;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNDetail">สนับสนุนเกม</p></label>
                                        </button >
                                    @endif
                                @else
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#">
                                            <button class="btnUpdateDetail mt-1">
                                                <label style="margin:0;"><p class="icon-update_version" style="cursor:pointer;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNDetail">อัพเดตเวอร์ชัน</p></label>
                                            </button >
                                        </a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="btnSupportDetail">
                                            <label style="margin:0;"><p class="icon-support" style="cursor:pointer;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNDetail">สนับสนุนเกม</p></label>
                                        </button >
                                    @else
                                        @if(Auth::user()->users_type == '1')
                                            <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnDownloadDetail2">
                                                    <label style="margin:0;"><p class="icon-icon_download" style="cursor: pointer;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNDetail" >ดาวน์โหลด</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                    <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                    <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                                </button>
                                            </form>
                                        @endif
                                        
                                    @endif
                                @endif
                            @else
                                <form action="{{route('Follow')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btnFollowDetail">
                                        <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNDetail" >ติดตาม</p></label>
                                        <input type="hidden" name="submit" value="submit">
                                        <input type="hidden" name="FOLLOW_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                        <input type="hidden" name="GAME_NAME" value="{{ $detailGame->GAME_NAME }}">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    </button >
                                </form>
                                @if(isset($Download))
                                    <button class="btnDownloaded">
                                        <label style="margin:0;"><p class="icon-download_after" style="cursor: pointer;"></p></label>
                                        <label style="margin:0;"><p class="fontBTNDetail-wh" >ดาวน์โหลดแล้ว</p></label>
                                    </button >
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#">
                                            <button class="btnUpdateDetail mt-1">
                                                <label style="margin:0;"><p class="icon-update_version" style="cursor:pointer;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNDetail">อัพเดตเวอร์ชัน</p></label>
                                            </button >
                                        </a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="btnSupportDetail">
                                            <label style="margin:0;"><p class="icon-support" style="cursor:pointer;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNDetail">สนับสนุนเกม</p></label>
                                        </button >
                                    @endif
                                @else
                                    @if($detailGame->USER_ID == Auth::user()->id)
                                        <a href="#">
                                            <button class="btnUpdateDetail mt-1">
                                                <label style="margin:0;"><p class="icon-update_version" style="cursor:pointer;"></p></label>
                                                <label style="margin:0;"><p class="fontBTNDetail">อัพเดตเวอร์ชัน</p></label>
                                            </button >
                                        </a>
                                    @elseif(Auth::user()->users_type == '3')
                                        <button data-toggle="modal" data-target="#myModal" class="btnSupportDetail">
                                            <label style="margin:0;"><p class="icon-support" style="cursor:pointer;"></p></label>
                                            <label style="margin:0;"><p class="fontBTNDetail">สนับสนุนเกม</p></label>
                                        </button >
                                    @else
                                        @if(Auth::user()->users_type == '1')
                                            <form action="{{ route('downloadGame') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btnDownloadDetail">
                                                    <label style="margin:0;"><p class="icon-icon_download" style="cursor: pointer;"></p></label>
                                                    <label style="margin:0;"><p class="fontBTNDetail" >ดาวน์โหลด</p></label>
                                                    <input type="hidden" name="submit" value="submit">
                                                    <input type="hidden" name="DOWNLOAD_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                                    <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                                    <input type="hidden" name="GAME_FILE" value="{{ $detailGame->GAME_FILE }}">
                                                </button >
                                            </form>
                                        @endif
                                        
                                    @endif
                                @endif
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        </div>

        <div class="row" style="background-color: #141621;">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <div style="color:#ffffff;font-weight:900;"><h4 style="margin:0;">{{ $detailGame->GAME_NAME }}</h4></div>
                <div style="color:#ffffff;font-weight:900;"><h2>{{ $detailGame->RATED_B_L }} • Online</h2></div>
                <div style="color:#ffffff;"><p>{{ $detailGame->GAME_DESCRIPTION }}</p></div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        </div>

        <div class="row py-3" style="background-color: #202433;">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
            <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div style="color:#707070;"><p style="margin:0;">ผู้พัฒนา</p></div>
                <div style="color:#ffffff;"><p style="margin:0;">{{ $detailGame->name }} {{ $detailGame->surname }}</p></div>
            </div>
            <div class="col-sm-2 col-md-3 col-lg-2 col-xl-1">
                <div style="color:#707070;"><p style="margin:0;">ขนาดไฟล์</p></div>
                <div style="color:#ffffff;"><p style="margin:0;">{{ $detailGame->GAME_SIZE }}</p></div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-1">
                <div style="color:#707070;"><p style="margin:0;">เวอร์ชั่น</p></div>
                <div style="color:#ffffff;"><p style="margin:0;">12.0.1</p></div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2">
                <div style="color:#707070;"><p style="margin:0;">วันที่เผยแพร่</p></div>
                <div style="color:#ffffff;"><p style="margin:0;">{{ Illuminate\Support\Str::limit($detailGame->GAME_APPROVE_DATE, 10, $end='') }}</p></div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        </div>
    @endforeach

    <div class="row pt-4" style="background-color: #141621;">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6" >
            <div class="row" style="border-bottom: #d3d7da 1px solid;">
                <div class="col-6">
                    <h3 style="margin:0;color:#ffffff;font-weight:900;">การจัดอันดับ</h3>
                </div>
                @if(isset($CommentAll))
                    <?php $i = 0; ?>
                    @foreach($CommentAll as $CAC)
                        <?php $i = $i+$CAC->RATING; ?>
                    @endforeach
                    <?php 
                        if($CommentAll->count() == 0 || $i == 0){
                            $count = 0;
                        }else{
                            $count = $i/$CommentAll->count();
                        }
                    ?>
                @endif
                <div class="col-6 text-right">
                    <label><h6 style="color: #f6c12c;font-weight:900;margin:0;">{{round($count, 1)}}/5</h6></label>
                    @for($i=1;$i <= 5 ;$i++)
                        @if($i <= round($count, 1))
                            <h6 style="font-size: 1.3em;" class="fa fa-star checked"></h6>
                        @else
                            <h6 style="font-size: 1.3em;" class="fa fa-star"></h6>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
    </div>

    <div class="row pt-3" style="background-color: #141621;">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
            <div id="filters" class="filters button-group col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <button class="btnTotalComment active" onclick="filterSelection('all')">
                    <p style="margin:0;">ทั้งหมด ({{$CommentAll->count()}})</p>
                </button>
                <?php
                    $FI = 0;
                    $FO = 0;
                    $TE = 0;
                    $TO = 0;
                    $ON = 0;
                
                foreach($CommentAll as $countCom){
                    if($countCom->RATING == 5){
                        $FI = $FI+1;
                    }elseif($countCom->RATING == 4){
                        $FO = $FO+1;
                    }elseif($countCom->RATING == 3){
                        $TE = $TE+1;
                    }elseif($countCom->RATING == 2){
                        $TO = $TO+1;
                    }else{
                        $ON = $ON+1;
                    }
                }
                ?>
                <button class="btnTotalComment" onclick="filterSelection('FI')">
                    <p style="margin:0;">5 ดาว ({{$FI}})</p>
                </button>
                <button class="btnTotalComment" onclick="filterSelection('FO')">
                    <p style="margin:0;"> 4 ดาว ({{$FO}})</p>
                </button>
                <button class="btnTotalComment" onclick="filterSelection('TE')">
                    <p style="margin:0;"> 3 ดาว ({{$TE}})</p>
                </button>
                <button class="btnTotalComment" onclick="filterSelection('TO')">
                    <p style="margin:0;"> 2 ดาว ({{$TO}})</p>
                </button>
                <button class="btnTotalComment" onclick="filterSelection('ON')">
                    <p style="margin:0;"> 1 ดาว ({{$ON}})</p>
                </button>
            </div>
        </div>
    </div>

    <div class="row pt-3 " style="background-color: #141621;">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3 "></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6 commentArea pl-4">
            @if(isset($CommentAll))
                @foreach($CommentAll as $commentAll)
                    @if($commentAll->RATING == 5)
                    <div class="row" style="border-bottom: #d3d7da 1px solid;">
                        <div class="filterDiv FI mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ $commentAll->name }} {{ $commentAll->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-12"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $commentAll->COMMENT }}</p></div>
                            </div>
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 4)
                    <div class="row" style="border-bottom: #d3d7da 1px solid;">
                        <div class="filterDiv FO mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ $commentAll->name }} {{ $commentAll->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-12"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 3)
                    <div class="row" style="border-bottom: #d3d7da 1px solid;">
                        <div class="filterDiv TE mt-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ $commentAll->name }} {{ $commentAll->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-12"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $commentAll->COMMENT }}</div>
                            </div> 
                        </div>
                    </div>
                    @elseif($commentAll->RATING == 2)
                    <div class="row" style="border-bottom: #d3d7da 1px solid;">
                        <div class="filterDiv TO mt-2 ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ $commentAll->name }} {{ $commentAll->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-12"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row" style="border-bottom: #d3d7da 1px solid;">
                        <div class="filterDiv ON mt-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$commentAll->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ $commentAll->name }} {{ $commentAll->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $commentAll->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label> 
                                </div>
                                <div class="col-12"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $commentAll->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3 "></div>
    </div>
    @if(isset(Auth::user()->id))
        @if(isset($Download))
            @if(isset($Comment))
                @if(Auth::user()->users_type == 1)
                    <div class="row pt-4" style="background-color: #141621;">
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6"> 
                            <div><p style="color:#ffffff;font-weight:800;">ความคิดเห็นของฉัน</p></div>
                            <div class="row" style="border-bottom: #d3d7da 1px solid;">
                                <div class="col-12">
                                    <img class="imgComment2" src="{{ asset('home/imgProfile/'.$Comment->GUEST_USERS_IMG) }}"/>
                                    <label class="pt-1">
                                        <p style="color:#ffffff;font-weight:500;margin:0;">{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                                        @for($i=1;$i <= 5 ;$i++)
                                            @if($i <= $Comment->RATING)
                                                <h4 class="fa fa-star checked"></h4>
                                            @else
                                                <h4 class="fa fa-star"></h4>
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                                <div class="col-12 mb-2"><p style="color:#ffffff;margin:0;margin-left: 20px;">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
                    </div>
                <!-- @elseif(Auth::user()->users_type == 2)
                    <div class="row pt-4">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ml-2 pr-4"> 
                            <div class="row mt-2 rate_bottom">
                                <div class="col-2 text-center">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$Comment->DEV_IMG) }}"/>
                                </div>
                                <div class="col-8 commenter">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</br>
                                @for($i=1;$i <= 5 ;$i++)
                                    @if($i <= $Comment->RATING)
                                        <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                    @else
                                        <span style="font-size: 15px;" class="fa fa-star"></span>
                                    @endif
                                @endfor
                                </div>
                                <div class="row commentDetail ml-3 my-3">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row pt-4">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ml-2 pr-4"> 
                            <div class="row mt-2 rate_bottom">
                                <div class="col-2 text-center">
                                    <img class="imgComment" src="{{ asset('home/imgProfile/'.$Comment->SPON_IMG) }}"/>
                                </div>
                                <div class="col-8 commenter">{{ Auth::user()->name }}.{{ Auth::user()->surname }}</br>
                                @for($i=1;$i <= 5 ;$i++)
                                    @if($i <= $Comment->RATING)
                                        <span style="font-size: 15px;" class="fa fa-star checked"></span>
                                    @else
                                        <span style="font-size: 15px;" class="fa fa-star"></span>
                                    @endif
                                @endfor
                                </div>
                                <div class="row commentDetail ml-3 my-3">{{ $Comment->COMMENT }}</div>
                            </div>
                        </div>
                    </div>
                @endif -->
            @else
                <div class="row pt-4" style="background-color: #141621;">
                    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6"> 
                        <form action="{{ route('Comment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="RATING" id="rating-input" min="1" max="5" class="d-none">
                            <div class="rating pl-2" role="optgroup">
                                <label><p style="color:#ffffff;margin:0;">ระดับคะแนน</p></label>
                                <i class="fa fa-star-o rating-star" id="rating-1" data-rating="1" tabindex="0" aria-label="Rate as one out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-2" data-rating="2" tabindex="0" aria-label="Rate as two out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-3" data-rating="3" tabindex="0" aria-label="Rate as three out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-4" data-rating="4" tabindex="0" aria-label="Rate as four out of 5 stars" role="radio"></i>
                                <i class="fa fa-star-o rating-star" id="rating-5" data-rating="5" tabindex="0" aria-label="Rate as five out of 5 stars" role="radio"></i>
                            </div>
                            <div class="px-2">
                                <textarea name="COMMENT" class="newComment_textarea p" rows="6" placeholder="แสดงความคิดเห็น"></textarea>
                                <button class="btn-newComment p">ตกลง
                                    <input type="hidden" name="submit" value="submit">
                                    <input type="hidden" name="COMMENT_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                    <input type="hidden" name="GAME_ID" value="{{ $detailGame->GAME_ID }}">
                                    <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
                </div>
            @endif
        @endif
    @endif

    <div class="row pt-4" style="background-color: #141621;">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6">
            <div class="row px-2">
                <div class="col-6  text-left">
                    <h4 style="color:#fff;font-weight:900;">เกมใกล้เคียง</h4>
                </div>
                <div class="col-6 text-right">
                    <a class=" mr-4" href="{{ route('gameCategory') }}">
                        <label><h4 class="fontGameCat">ดูทั้งหมด </h4></label> 
                        <label><img class="pViewmore" src="{{asset('icon/next1.svg') }}" /></label>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-3"></div>
    </div>

    <div class="container-fluid pb-3 " style="background-color: #141621;">
        <div class="owl-carousel" id="owl-demo" style="background-color: #141621;">
            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <!-- <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button> -->
                            <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button >
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game2.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game3.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game4.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game5.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game6.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game7.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game8.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game9.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game10.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>

            <div class="item imgteaser" style="background-color: #141621;">
                <a>
                    <img class="game_4" src="{{asset('section/picture_game/game11.png') }}" />
                    <!-- <div class="btn following"><span class="icon-follow_wh"></span><b style="font-family:myfont; color: #fff;" class="download">กำลังติดตาม</b></div> -->
                    <span class="desc">
                            <button class="btnFollow" data-toggle="tooltip" data-placement="bottom" title="ติดตาม" >
                                <label style="margin:0;"><p class="icon-follow_red" style="cursor: pointer;padding-left:10px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollow" style="margin:0;">ติดตาม</p></label>
                            </button>
                            <!-- <button class="btnFollowing" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม">
                                <label style="margin:0;"><p class="icon-follow_wh" style="cursor: pointer;padding-left:5px;"></p></label>
                                <label style="margin:0;"><p class="fontBTNfollowing">กำลังติดตาม</p></label>
                            </button > -->
                        <img class="rate_pic" style="width:40px;" src="{{asset('section/game_rate/rate.svg') }}" />
                        <div class="game_name">
                            <label style="margin:0;"><p style="margin:0;font-weight:900;">Maneater</p></label><br>
                            <label style="margin:0;"><p style="margin:0;">Discrimination • Online</p></label>
                        </div>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade mymodal" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" style="font-weight:900;padding: 10px 0 0 0;">กรุณาเลือกช่วงเวลาในการสนับสนุน</h1>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal">
                        <p class="icon-close_modal" style="padding: 10px 0 0 0;"></p>
                    </button>
                </div>
                <form action="{{route('ListGame')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="containner-fluid">
                            <div class="row">
                                <div class="col-9">
                                    <label>
                                        <img class="img-modal" src="{{ asset('section/File_game/Profile_game/'.$detailGame->GAME_IMG_PROFILE) }}" />
                                    </label>
                                    <label class="py-3" style="padding-left:100px;">
                                        <p style="color:#000;font-weight:800;margin:0;">{{$detailGame->GAME_NAME}}</p>
                                        <p style="color:#a8a8a8;line-height:1.5;">{{$detailGame->RATED_B_L}} • Online <br> เวอร์ชั่น 1.03 </p>
                                    </label>
                                </div>
                                <div class="col-3 text-right py-3">
                                    <h4 style="color: #ce0005;margin:0;font-weight:900;">฿{{$detailGame->GAME_PRICE}}</h4>
                                    <label><p class="mr-2" style="color:#b2b2b2;text-decoration:line-through;">฿400 </p></label>
                                    <label><p style="display:block;text-align:right;font-weight:500;">(-{{$detailGame->GAME_DISCOUNT}}%)</p></label>
                                </div>
                            </div>
                            <input type="hidden" name="game_id" value="{{$detailGame->GAME_ID}}">
                            <input type="hidden" name="game_price" value="{{$detailGame->GAME_PRICE}}">

                            <div class="row">
                                <div class="col-12">
                                    <select class="MySelect p ">
                                        <option value="">เลือกโฆษณา</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                    </select>
                                </div>
                                <!-- <div class="col-6">
                                    <select class="MySelect p">
                                        <option value="">ซื้อรายเกม</option>
                                        <option value="">แพ็กเกจ 1</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                        <option value="">ดึงข้อมูลจาก DB</option>
                                    </select>
                                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-12 " style="padding-right:0;">
                                    <label>
                                        <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">เริ่มต้น</label></br>
                                        <input class="MySelect p" type="datetime-local" id="default-picker" name="dateStart" value="{{old('dateStart')}}" class="timepicker" />
                                    </label>
                                    <label>
                                        <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">สิ้นสุด</label></br>
                                        <input class="MySelect p" type="datetime-local" id="default-picker" name="dateDeadline" value="{{old('dateDeadline')}}" class="timepicker" />
                                    </label>
                                    <label>
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">จำนวนรอบการโฆษณา</label></br>
                                        <div class="quantity-block">
                                            <label class="quantity-arrow-minus"> - </label>
                                            <input class="quantity-num" style="font-size:0.8em;width:30%;" type="number" value="10" min="10" disabled />
                                            <label class="quantity-arrow-plus"> + </label>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-sm-3 col-md-3 col-lg-2 col-lg-2">
                                    <button type="button" class="btn-cancal" data-dismiss="modal">
                                        <p style="margin:0;">ยกเลิก</p>
                                    </button>
                                </div>  
                                <div class="col-sm-6 col-md-6 col-lg-8 col-lg-8"></div>
                                <div class="col-sm-3 col-md-3 col-lg-2 col-lg-2">
                                    <!-- <button type="button" class="btn-submit" data-dismiss="modal" data-toggle="modal" data-target="#successModal">
                                        <p style="margin:0;">ยืนยัน</p>
                                    </button> -->
                                    <button name="submit" value="submit" class="btn-submit"><p style="margin:0;">ยืนยัน</p>
                                        <input type="hidden" name="numberAdvt" id="numberAdvt">
                                    </button>
                                </div>  
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade mymodal" id="successModal" role="dialog">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="row mb-3">
                        <div class="col-12 text-right">
                            <button type="button" class="close btn-closeModal" data-dismiss="modal">
                                <p class="icon-close_modal" style="padding: 10px 0 0 0;margin:0;"></p>
                            </button>
                        </div>
                    </div>
                    <img style="width:50px;" src="{{ asset('icon/correct-green.svg')}}">
                    <p style="font-weight:800;margin: 10px 0 10px 0">ทำรายการสำเร็จ</p>
                    <a class="linkAd" href="{{ route('SponShoppingCart') }}">
                        <p class="btnGrey" style="cursor:pointer;padding:10px">ดูตระกร้าสินค้า</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div id="filters">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="Comment fontComment" onclick="filterSelection('cars')"> 5 ดาว (100)</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn" onclick="filterSelection('colors')"> Colors</button>
</div> -->

<!-- <div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div> -->
@endsection

@section('script')

<script>
    $(document).ready(function() {
    
        $("#owl-demo").owlCarousel({
            loop:true,
            margin:10,
            navigation : true,
            navText : ["<i class='icon-prev'></i>","<i class='icon-next'></i>"],
            responsiveClass:true,
            responsive:{
                576:{
                items:2,
                nav:false
                },
                768:{
                items:3,
                nav:false
                },
                992:{
                items:4,
                nav:true
                },
                1280:{
                items:5,
                nav:true
                },
                1360:{
                items:6,
                nav:true
                },
                1920:{
                items:8,
                nav:true
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

<script>
    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
    element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("filters");
    var btns = btnContainer.getElementsByClassName("Comment");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
</script>

<script>
$(function() {
    (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");
        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);
        function quantityMinus() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 10);
                document.querySelector('input#numberAdvt').value = $quantityNum.val()
                console.log($quantityNum.val());
            }
        }
        function quantityPlus() {
            $quantityNum.val(+$quantityNum.val() + 10);
            document.querySelector('input#numberAdvt').value = $quantityNum.val()
            console.log($quantityNum.val());
        }
        document.querySelector('input#numberAdvt').value = $quantityNum.val()
        console.log($quantityNum.val());
    })();
});
</script>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('successSpon'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                title: '{{ Session::get('successSpon') }}',
                icon: 'success',
                footer:
                '<a class="linkAd" href="{{ route('SponShoppingCart') }}">' +
                '<label class="selectAll px-5 py-2" style="font-family:myfont1;font-size:0.8em;cursor:pointer;">ดูตระกร้าสินค้า</label></a>',
                showCloseButton: true,
                showConfirmButton: false,
            })
        });
    </script>
@endif
@endsection