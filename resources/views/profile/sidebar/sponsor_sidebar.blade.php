<!-- sidebar -->
    <div class="col-lg-3" style="background-color: #17202c;" id="navActive">
        <div class="row" id="myDIV">
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
            <a href="{{ route('AdsSpon') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">Ads</span>รายการโฆษณา</button></a>
            <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
            <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
            <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
            <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
            <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a> -->
            <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
            <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a>
        </div>
    </div>
<!-- sidebar -->
