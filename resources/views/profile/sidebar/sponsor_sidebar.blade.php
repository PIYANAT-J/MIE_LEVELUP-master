<!-- sidebar -->
    <div class="col-lg-4 col-xl-3 d-none d-lg-block d-xl-block" style="background-color: #17202c;"  id="navActive">
        <div class="row" id="myDIV">
            <div class="col-1"></div>
                @foreach($sponsor as $spon)
                    <div class="col-10 my-3 pt-2 sidebar_bg2">
                        <div class="row mb-2">
                            <div class="col-4 text-right">
                                <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$spon->SPON_IMG) }}" />
                            </div>
                            <div class="col-8" style="padding:0 0 0 5px;">
                                <label class="pt-3">
                                    <h5 style="font-weight:800;margin:0;color:#ffffff;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</h5>
                                    <h5 style="margin:0;color:#ffffff;">ผู้สนับสนุน : บุคคลธรรมดา</h5>
                                    <h5 style="margin:0;color:#ffffff;">เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</h5>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                            <div class="col-12 text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="btn-point pt-2">
                                            <h1 class="fontPoint">พอยท์</h1>
                                            <h2 class="fontPoint">100 <i class="icon-Icon_Point"></i></h2>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="btn-coin pt-2 ">
                                            <h1 class="fontPoint">เหรียญ</h1>
                                            <h2 class="fontPoint">100 <i class="icon-Icon_Coin"></i></h2>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            <div class="col-1"></div>
            <a href="{{ route('SponsorProfile') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว </P>
                </button>
            </a>
            <a href="{{ route('AdsSpon') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <label style="margin: 0;"><p style="padding:0px 8px 0px 5px;margin: 0;">Ads</p></label>
                    <label style="margin: 0;"><p style="margin: 0;">โฆษณา</p></label>
                </button>
            </a>
            <a href="{{ route('AdvtPackage') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</p>
                </button>
            </a>
            <a href="{{ route('ProductSupport') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</p>
                </button>
            </a>
            <a href="{{ route('SponShelf') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</p>
                </button>
            </a>
            <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
            <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a> -->
            <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</p>
                </button>
            </a>
            <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <button class="btn-sidebar">
                    <p style="margin: 0;"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</p>
                </button>
            </a>
        </div>
    </div>
<!-- sidebar -->
