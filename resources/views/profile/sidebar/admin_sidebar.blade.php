<!-- <div class="col-3" style="background-color: #17202c;" id="navActive">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 my-3 pt-2 sidebar_bg2">
            <div class="row mb-4">
                <div class="col-4 text-right pr-2">
                    <img class="sidebar-pic" src="{{asset('dist/images/person_5.jpg') }}" />
                </div>
                <div class="col-8 sidebar_name pt-3">
                    <h5 style="font-weight:800;margin:0;color:#ffffff;">{{Auth::user()->name}} {{Auth::user()->surname}}</h5>
                    <h5 style="margin:0;color:#ffffff;">สถานะ : ผู้ดูแลระบบ</h5>
                    <h5 style="margin:0;color:#ffffff;">เป็นสมาชิก:<br> {{Auth::user()->created_at}}</h5>
                </div>
            </div>
        </div>
        <div class="col-1"></div>

        <a href="/admin_management" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="icon-profile" style="font-size:1vw;padding:0px 20px 0px 10px;"></i>จัดการผู้ดูแลระบบ</p>
            </button>
        </a>
        <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo">
            <p style="margin: 0;"><span style="padding:0px 10px 0px 5px;">KYC</span>จัดการการยืนยันตัวตน</p>
        </button>
            <div id="demo" class="collapse">
                <a href="/user_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;ผู้ใช้ทั่วไป</p>
                    </button>
                </a>
                <a href="/develop_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;ผู้พัฒนาระบบ</p>
                    </button>
                </a>
                <a href="/sponsor_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;ผู้สนับสนุน</p>
                    </button>
                </a>
            </div> 
        <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2">
            <p style="margin: 0;"><i class="icon-follow_wh mr-2" style="font-size:15px;" ></i> จัดการข้อมูลเกม</p>
        </button>
            <div id="demo2" class="collapse">
                <a href="/game_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;การอัพโหลดเกม</p>
                    </button>
                </a>
                <a href="/rate_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;จัดการประเภทเกม</p>
                    </button>
                </a>
            </div>
        <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3">
            <p style="margin: 0;"><i class="icon-top-up1" style="font-size:1.2vw;padding:0px 17px 0px 9px;"></i>จัดการการโอนเงิน</p>
        </button>
            <div id="demo3" class="collapse">
                <a href="/topup_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;การเติมเงิน</p>
                    </button>
                </a>
                <a href="/withdraw_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;การถอนเงิน</p>
                    </button>
                </a>
                <a href="/advertisement" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:3.5em;">
                        <p style="margin: 0;">• &nbsp;การซื้อโฆษณา</p>
                    </button>
                </a>
            </div>
        <a href="/product" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="icon-product" style="font-size:1.2vw;padding:0px 14px 0px 8px;"></i>จัดการสินค้า</p>
            </button>
        </a>
        <a href="/package" style="width: 100%;">
            <button class="btn-sidebar p" style="padding:12px 20px 10px 20px">
                <img class="pic6" src="{{asset('icon/package.png') }}" />จัดการแพ็คเกจ
            </button>
        </a>
        <a href="/avatar_management" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="icon-profile" style="font-size:1vw;padding:0px 20px 0px 10px;"></i>จัดการตัวละคร</p>
            </button>
        </a>
        <a href="/admin_change_password" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="icon-change-pass" style="font-size:1.1w;padding:0px 15px 0px 13px;"></i>เปลี่ยนรหัสผ่าน</p>
            </button>
        </a>
        <a href="{{ url('/') }}" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="fa fa-home" style="font-size:1em;padding:0px 17px 0px 13px;"></i>หน้าหลัก</p>
            </button>
        </a>
        <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button class="btn-sidebar">
                <p style="margin: 0;"><i class="icon-logout" style="font-size:1.1vm;padding:0px 15px 0px 15px;"></i>ออกจากระบบ</p>
            </button>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div> -->

<div class="col-2" style="background-color: #17202c;" id="navActive">
    <div class="row">
        <div class="text-center my-3"><img style="width:50%;" src="{{asset('home/logo/logo_lvp.svg') }}" ></div>
        <a href="/admin_management" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;">จัดการผู้ดูแลระบบ</p>
            </button>
        </a>
        <button class="btn-sidebar"  data-toggle="collapse" data-target="#demo">
            <p style="margin: 0;">จัดการการยืนยันตัวตน</p>
        </button>
            <div id="demo" class="collapse">
                <a href="/user_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;ผู้ใช้ทั่วไป</p>
                    </button>
                </a>
                <a href="/develop_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;ผู้พัฒนาระบบ</p>
                    </button>
                </a>
                <!-- <a href="/sponsor_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;ผู้สนับสนุน</p>
                    </button>
                </a> -->
            </div> 
        <button class="btn-sidebar" data-toggle="collapse" data-target="#demo2">
            <p style="margin: 0;">จัดการข้อมูลเกม</p>
        </button>
            <div id="demo2" class="collapse">
                <a href="/game_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;การอัพโหลดเกม</p>
                    </button>
                </a>
                <a href="/rate_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;จัดการประเภทเกม</p>
                    </button>
                </a>
            </div>
        <button class="btn-sidebar" data-toggle="collapse" data-target="#demo3">
            <p style="margin: 0;">จัดการการโอนเงิน</p>
        </button>
            <div id="demo3" class="collapse">
                <a href="/topup_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;การเติมเงิน</p>
                    </button>
                </a>
                <a href="/withdraw_management" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;การถอนเงิน</p>
                    </button>
                </a>
                <a href="/advertisement" style="width: 100%;">
                    <button class="btn-sidebar" style="padding-left:2em;">
                        <p style="margin: 0;">• &nbsp;การซื้อโฆษณา</p>
                    </button>
                </a>
            </div>
        <a href="/product" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;">จัดการสินค้า</p>
            </button>
        </a>
        <a href="/package" style="width: 100%;">
            <button class="btn-sidebar p">
                จัดการแพ็คเกจ
            </button>
        </a>
        <a href="/avatar_management" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;">จัดการตัวละคร</p>
            </button>
        </a>
        <a href="/admin_change_password" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;">เปลี่ยนรหัสผ่าน</p>
            </button>
        </a>
        <a href="{{ url('/') }}" style="width: 100%;">
            <button class="btn-sidebar">
                <p style="margin: 0;">หน้าหลัก</p>
            </button>
        </a>
        <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button class="btn-sidebar">
                <p style="margin: 0;">ออกจากระบบ</p>
            </button>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>