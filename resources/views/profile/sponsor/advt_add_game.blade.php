@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($sponsor as $spon)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>ผู้สนับสนุน : บุคคลธรรมดา</br>เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</span>
                                </div>
                            </div>
                            <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                                <div class="col-lg-12 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="btn-point pb-2">
                                                <span class="font-point">พอยท์</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Point"></i>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn-coin pb-2 ">
                                                <span class="font-point">เหรียญ</span></br>
                                                <span style="font-family:myfont;font-size: 1.5em;line-height: 0.2;color: #ffffff;">0</span>
                                                <i class="icon-Icon_Coin"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-1"></div>
                <a href="{{ route('SponsorProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </button></a>
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4 ">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <a href="{{ route('AdvtPackage') }}"><label class="fontAd1 active">สนับสนุนเงินในเกม</label></a>
                    <label class="fontAd1"> > </label>
                    <a href="{{ route('AdvtManagement', ['id'=>encrypt($package->package_id)]) }}"><label class="fontAd1 active" >จัดการแพ็กเกจ</label></a>
                    <label class="fontAd1"> > </label>
                    <label class="fontAd1" >เพิ่มเกม</label>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row mb-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        @if($packageGame != null)
                            <label class="font-profile1" style="margin:5px 0;">เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( <label style="color:#23c197">{{ count($packageGame)}}</label> / {{$package->package_game}} ) </label>
                        @else
                            <label class="font-profile1" style="margin:5px 0;">เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( <label style="color:#23c197">0</label> / {{$package->package_game}} ) </label>
                        @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 pt-3 pb-2">
                            <button class="typeGamePackage" data-toggle="collapse" data-target="#demo">ประเภทเกม</button>
                            <button class="typeGamePackage">เกมยอดนิยม</button>
                            <button class="typeGamePackage">กำลังติดตาม</button>
                            <button class="typeGamePackage">เกมใหม่</button>
                        </div>
                    </div>

                    <div class="row">
                        <div id="demo" class="collapse row3" style="background-color: #f2f2f2;">
                            <div class="row mx-2 mt-3" >
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_1">
                                                <label for="checkbox_1" class="fontTypeGamePackage">Action</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_2">
                                                <label for="checkbox_2" class="fontTypeGamePackage">Adventure</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_3">
                                                <label for="checkbox_3" class="fontTypeGamePackage">BBG</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_4">
                                                <label for="checkbox_4" class="fontTypeGamePackage">Board Game</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="row">        
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_5">
                                                <label for="checkbox_5" class="fontTypeGamePackage">Casual</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_6">
                                                <label for="checkbox_6" class="fontTypeGamePackage">Console</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_7">
                                                <label for="checkbox_7" class="fontTypeGamePackage">Fantasy</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_8">
                                                <label for="checkbox_8" class="fontTypeGamePackage">Fighting</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_9">
                                                <label for="checkbox_9" class="fontTypeGamePackage">Flight</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_10">
                                                <label for="checkbox_10" class="fontTypeGamePackage">FPS</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">        
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_11">
                                                <label for="checkbox_11" class="fontTypeGamePackage">Historical</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_12">
                                                <label for="checkbox_12" class="fontTypeGamePackage">Martail Arts</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_13">
                                                <label for="checkbox_13" class="fontTypeGamePackage">MMORPG</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_14">
                                                <label for="checkbox_14" class="fontTypeGamePackage">MOBA</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_15">
                                                <label for="checkbox_15" class="fontTypeGamePackage">Music Game</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_16">
                                                <label for="checkbox_16" class="fontTypeGamePackage">Puzzle</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">        
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_17">
                                                <label for="checkbox_17" class="fontTypeGamePackage">Racing</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_18">
                                                <label for="checkbox_18" class="fontTypeGamePackage">RTS</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2" >
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_19">
                                                <label for="checkbox_19" class="fontTypeGamePackage" style="line-height: 1.2;padding-top:8px;font-size:0.85rem;">Side Scrolling <br>Game </label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_20">
                                                <label for="checkbox_20" class="fontTypeGamePackage">Simulation</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_21">
                                                <label for="checkbox_21" class="fontTypeGamePackage">Social</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_22">
                                                <label for="checkbox_22" class="fontTypeGamePackage">Sport</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_23">
                                                <label for="checkbox_23" class="fontTypeGamePackage">Strategy</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_24">
                                                <label for="checkbox_24" class="fontTypeGamePackage">Survival</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_25">
                                                <label for="checkbox_25" class="fontTypeGamePackage" style="line-height: 1.2;padding-top:8px;font-size:0.85rem;">Tactical <br>Combat</label>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_26">
                                                <label for="checkbox_26" class="fontTypeGamePackage">TBS</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_27">
                                                <label for="checkbox_27" class="fontTypeGamePackage">TPS</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox_28">
                                                <label for="checkbox_28" class="fontTypeGamePackage"  style="line-height: 1.2;padding-top:8px;font-size:0.85rem;">Trading Card </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-5 text-right mb-3">
                                <button class="btn-cancal-category mr-2" data-toggle="collapse" data-target="#demo">ยกเลิก</button>
                                <button class="btn-search-category mr-2">ค้นหา</button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-3">
                            <label class="checkbox-dark selectAll">
                                <input type="checkbox" id="checkbox_all" name="accept_01" onclick="toggle(this);">
                                <label for="checkbox_all" class="pt-2 pl-2 ml-2" style="font-family:myfont1;font-size:1em;font-weight:900;">เลือกทั้งหมด</label>
                            </label>
                        </div>
                        <div class="col-lg-7"></div>
                        <div class="col-lg-2">
                            <!-- <label class="selectAll2 fontAddGame" data-toggle="modal" data-target="#exampleModalScrollable">+ เพิ่มเกม</label> -->
                            <!-- <label class="selectAll2 fontAddGame" data-toggle="modal" data-target="#exampleModalScrollable">+ เพิ่มเกม</label> -->
                            <!-- <button id="3" onclick="reply_click(this.id)" data-toggle="modal" data-target="#exampleModalScrollable">B3</button> -->
                            <form action="{{route('addGame')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <button class="selectAll2 fontAddGame" name="addGame" value="addGame">+ เพิ่มเกม
                                    <input type="hidden" name="packageBuy_game" id="data-checked">
                                    <input type="hidden" name="packageBuy_invoice" value="{{$package->packageBuy_invoice}}">
                                    <input type="hidden" name="package_id" value="{{$package->package_id}}">
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="row mr-3 rowGamePackage2">
                        <div class="col-lg-12">
                            <?php $arrayGame = array(); ?>
                            @if($packageGame != null)
                                @foreach($packageGame as $gameSpon)
                                    <?php $arrayGame[] = $gameSpon->gameid; ?>
                                @endforeach
                            @endif
                            @foreach($game as $gameCustom)
                                @if(in_array($gameCustom->GAME_ID, $arrayGame))
                                    <label>
                                        <div class="custom-check2">
                                            <input class="custom-check-input2 checked" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" type="checkbox" />
                                            <label class="custom-check-elem2" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                            <label class="custom-check-label2 " for="someCheck{{$gameCustom->GAME_ID}}">
                                                <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                            </label>
                                        </div>
                                    </label>
                                @else
                                    <label>
                                        <div class="custom-check">
                                            <input class="custom-check-input" id="someCheck{{$gameCustom->GAME_ID}}" name="someCheck" value="{{$gameCustom->GAME_ID}}" type="checkbox" />
                                            <label class="custom-check-elem" for="someCheck{{$gameCustom->GAME_ID}}"></label>
                                            <label class="custom-check-label " for="someCheck{{$gameCustom->GAME_ID}}">
                                                <img class="bgGameSpon" src="{{asset('section/File_game/Profile_game/'.$gameCustom->GAME_IMG_PROFILE)}}">
                                            </label>
                                        </div>
                                    </label>
                                @endif
                            @endforeach
                            <!-- <label >
                                <div class="custom-check">
                                    <input class="custom-check-input" id="someCheck2" name="someCheck" type="checkbox" />
                                    <label class="custom-check-elem" for="someCheck2"></label>
                                    <label class="custom-check-label " for="someCheck2">
                                        <img class="bgGameSpon" src="{{asset('section/picture_game/game2.png') }}">
                                    </label>
                                </div>
                                <div class="custom-check2">
                                    <input class="custom-check-input2 checked" id="someCheck2" name="someCheck" type="checkbox" />
                                    <label class="custom-check-elem2" for="someCheck2"></label>
                                    <label class="custom-check-label2 " for="someCheck2">
                                        <img class="bgGameSpon" src="{{asset('section/picture_game/game2.png') }}">
                                    </label>
                                </div>
                            </label> -->
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
    @if(isset($modal) && $modal == 1)
        <?php 
            $countGame = explode(',',$package->packageBuy_game);
            $i;
        ?>
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"  style="font-family:myfont1;font-weight:900;font-size:1.2em;">
                        <label>เพิ่มเกม ( แพ็กเกจ {{$package->packageBuy_name}} ) ( <label style="color:#23c197;" id="count-checked">{{ count($countGame)}}</label> ) </label>
                    </h4>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                </div>
                <form action="{{route('addGame')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            @for($i=0;$i < count($countGame);$i++)
                                @foreach($game as $key=>$gameModal)
                                    @if($countGame[$i] == $gameModal->GAME_ID)
                                        <div class="col-lg-5 pl-2" style="padding:0;">
                                            <label class="containerhover1">
                                                <img class="imagehover1" src="{{asset('section/File_game/Profile_game/'.$gameModal->GAME_IMG_PROFILE)}}" />
                                                <label class="middlehover1">
                                                    <img style="cursor:pointer; width:25px;" src="{{asset('icon/trash2.svg')}}">
                                                    <label class="texthover1">ลบ</label>
                                                </label>
                                            </label> 
                                            <label class="DetailGamePackage"> <label class="pt-2" style="color:#000;">{{$gameModal->GAME_NAME}}</label><br> {{$gameModal->RATED_B_L}} • Online <br> เวอร์ชั่น 1.03</label>
                                        </div>
                                        <input type="hidden" name="game_id{{$key}}" value="{{$gameModal->GAME_ID}}">
                                        <div class="col-lg-7">
                                            <label>
                                                <label class="pl-1" style="font-family:myfont1;font-weight:900;font-size:0.8em;margin:0;">เริ่มต้น</label></br>
                                                <input style="font-family:myfont1;font-size:0.9em;" type="datetime-local" id="dateStart{{$key}}" name="dateStart{{$key}}" value="{{old('dateStart')}}" class="timepicker" />
                                            </label>

                                            <label>
                                                <label class="pl-1" style="font-family:myfont1;font-weight:900;font-size:0.8em;margin:0;">สิ้นสุด</label></br>
                                                <input style="font-family:myfont1;font-size:0.9em;" type="datetime-local" id="dateDeadline{{$key}}" name="dateDeadline{{$key}}" value="{{old('dateDeadline')}}" class="timepicker" />
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            @endfor
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-4">
                            <button class="btn-cancel">ยกเลิก</button>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-right">
                            <button class="btn-submit" name="submit" value="submit">ยืนยัน</button>
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="hidden" name="package_id" value="{{$package->package_id}}">
                            <input type="hidden" name="packageBuy_invoice" value="{{$package->packageBuy_invoice}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_login"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_login2"></div>
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
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>

<script>
    $(document).ready(function() {
        $(":checkbox").change(function() {
            var closest = $(this).closest("div.row");
            var countCheckedCheckboxes = $(":checkbox", closest).filter(':checked').length;
            // var data = document.getElemenById("data");
            $('#count-checked').html(countCheckedCheckboxes);
            /* $('#edit-count-checked-checkboxes').val(countCheckedCheckboxes); */
            console.log(countCheckedCheckboxes);
            var favorite = [];
            $.each($("input[name='someCheck']:checked"), function(){            
                favorite.push($(this).val());
            });
            // $('#data-checked').html(favorite.join(", "));

            document.querySelector('input#data-checked').value = favorite.join(", ")
            console.log(favorite.join(", "));
            // data.value = favorite;
            /* alert("My favourite sports are: " + favorite.join(", ")) */
        });
    });
</script>

@if(isset($modal) && $modal == 1)
    <script type="text/javascript">
        $(document).ready(function() {
            $('#exampleModalScrollable').modal();
        });
    </script>
@endif

@endsection