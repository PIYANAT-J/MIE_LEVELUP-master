<div class="col-lg-4 col-xl-3 d-none d-lg-block d-xl-block" style="background-color: #000;" id="navActive">
    <div class="row">
        <div class="col-1"></div>
        @foreach($guest_user as $USER)
            <div class="col-10 mb-3 pb-2" style="background-color: #000;">
                <div class="row mt-2">
                    <div class="col-4 text-right pr-2">
                        <img class="sidebar-pic2" src="{{asset('home/imgProfile/'.$USER->GUEST_USERS_IMG) }}" />
                    </div>
                    <div class="col-8 pt-2">
                        <label class="pt-3">
                            <h5 style="font-weight:800;margin:0;color:#ffffff;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</h5>
                            <h5 style="margin:0;color:#ffffff;">สถานะ : ผู้ใช้ทั่วไป</h5>
                            <h5 style="margin:0;color:#ffffff;">เป็นสมาชิก : <br> {{ Auth::user()->created_at }}</h5>
                        </label>
                    </div>
                </div>
                <div class="row mt-3" style=" border-top: 1px solid #2d3d50;">
                    <div class="col-12 text-center">
                        <div class="row">
                            <div class="col-6">
                                <label class="btn-point-avatar pt-2">
                                    <h1 class="fontPoint">พอยท์</h1>
                                    @if(isset($ranking))
                                        <h2 class="fontPoint">{{number_format($ranking->amount, 2)}} <i class="icon-Icon_Point"></i></h2>
                                    @else
                                        <h2 class="fontPoint">0 <i class="icon-Icon_Point"></i></h2>
                                    @endif
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="btn-point-avatar pt-2">
                                    <h1 class="fontPoint">เหรียญ</h1>
                                    <h2 class="fontPoint">0 <i class="icon-Icon_Coin"></i></h2>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-lg-1"></div>
        <a href="{{ route('Avatar') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-profile menuIcon"></i>ตัวละครของฉัน (Avatar)
            </button>
        </a>
        <a href="{{ route('AvatarOrderList') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="fa fa-list-ul menuIcon"></i>รายการคำสั่งซื้อ
            </button>
        </a>
        <a href="{{ route('UserProfile') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว
            </button>
        </a>
        <a href="{{ route('UserKyc') }}" style="width: 100%;">
            <button class="btn-sidebar2">
                <label style="margin: 0;"><p style="padding:0px 8px 0px 5px;margin: 0;">KYC</p></label>
                <label style="margin: 0;"><p style="margin: 0;">ยืนยันตัวตน</p></label>
            @if($userKyc->KYC_STATUS == null)
                <label class="status-kyc3"><p style="margin: 0;">กรุณายืนยันตัวตน</p></label>
            @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                <label class="status-kyc"><p style="margin: 0;">รอการตรวจสอบ</p></label>
            @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                <label class="status-kyc2"><p style="margin: 0;">ยืนยันตัวตนแล้ว</p></label>
            @else
                <label class="status-kyc4"><p style="margin: 0;">ไม่ผ่านการอนุมัติ</p></label>
            @endif
            </button>
        </a>
        <a href="{{ route('UserShelf') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)
            </button>
        </a>
        <a href="{{ route('UserHistory') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-history menuIcon"></i>ประวัติพอยท์
            </button>
        </a>
        <a href="{{ route('UserRank') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="fa fa-star-o menuIcon"></i>อันดับผู้ใช้
            </button>
        </a>
        <a href="{{ route('UserTopup') }}" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-top-up1 menuIcon"></i>เติมเงิน
            </button>
        </a>
        <a href="/user_change_password" style="width: 100%;">
            <button class="btn-sidebar2 p">
                <i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน
            </button>
        </a>
        <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button class="btn-sidebar2 p">
                <i class="icon-logout menuIcon" ></i>ออกจากระบบ
            </button>
        </a>
    </div>
</div>