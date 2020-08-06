@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">

        <!-- sidebar -->
        <div class="col-lg-3" style="background-color: #17202c;">
            <div class="row">
                <div class="col-lg-1"></div>
                    @foreach($developer as $Dev)
                        <div class="col-lg-10 my-3 pt-2 sidebar_bg2">
                            <div class="row mb-2">
                                <div class="col-lg-4 text-right">
                                    <img class="sidebar-pic" src="{{asset('home/imgProfile/'.$Dev->DEV_IMG) }}" />
                                </div>
                                <div class="col-lg-8 sidebar_name pt-2">
                                    <span><b style="font-family: myfont;">{{ Auth::user()->name }}-{{ Auth::user()->surname }}</b></br>สถานะ : ผู้พัฒนาระบบ</br>เป็นสมาชิก : </br>{{ Auth::user()->created_at }}</span>
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
                <a href="{{ route('DevProfile') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-profile menuIcon"></i>ข้อมูลส่วนตัว</button></a>
                <a href="{{ route('DevKyc') }}" style="width: 100%;"><button class="btn-sidebar"><span style="font-family: myfont1;font-size: 1em;padding:0px 10px 0px 5px;">KYC</span>ยืนยันตัวตน
                    @if($userKyc->KYC_STATUS == null)
                        <span class="status-kyc3 ml-2 px-2">กรุณายืนยันตัวตน</span>
                    @elseif($userKyc->KYC_STATUS == 'รออนุมัติ')
                        <span class="status-kyc ml-2 px-2">รอการตรวจสอบ</span>
                    @elseif($userKyc->KYC_STATUS == 'อนุมัติ')
                        <span class="status-kyc2 ml-2 px-2">ยืนยันตัวตนแล้ว</span>
                    @else
                        <span class="status-kyc4 ml-2 px-2">ไม่ผ่านการอนุมัติ</span>
                    @endif
                </button></a>
                <a href="{{ route('DevShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a>
                <a href="{{ route('DevUpload') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-upload-game menuIcon"></i>อัพโหลดเกม</button></a>
                <a href="{{ route('DevWithdraw') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-withdraw menuIcon"></i>ถอนเงิน</button></a>
                <a href="/develper_change_password" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
                <a href="{{ route('logout') }}" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn-sidebar"><i class="icon-logout menuIcon" ></i>ออกจากระบบ</button></a> 
            </div>
        </div>
        <!-- sidebar -->

        <div class="col-lg-9" style="background-color:#f5f5f5;">
            <div class="row mt-4" >
                <div class="col-lg-1"></div>
                <div class="col-lg-10 py-3" style="background-color:#ffffff;border-radius: 8px;">
                    <div class="row">
                        <div class="col-lg-6 line1">
                            <div style="font-family:myfont;font-size:1.2em;color:#000;">ถอนเงิน</div>
                            <div class="row bg-topup ml-0 mb-2">
                                <div class="col-lg-6 lext-center">ยอดเงินในวอลเล็ท
                                </div>
                                <div class="col-lg-6 lext-center">฿ {{ $wallet }}</div>
                            </div>
                            <div style="font-family:myfont1;font-size:1em;color:#000;">จำนวนเงินที่ต้องการถอน (ขั้นต่ำ  ฿100 )</div>
                            <div class="input-group mb-3 input-topup">
                                <div class="input-group-prepend"><span class="input-group-text money_icon">฿</span></div>
                                <input type="text" class="form-control money" id="amount" name="amount" value="{{ old('amount') }}" require>
                                    @if(Session::has('error'))
                                        <script>
                                            window.onload =()=>{
                                                var toastHTML = '<span class="">{{Session::get('error')['title']}}</span>';
                                                M.toast({html: toastHTML })
                                            }
                                        </script>
                                    <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{Session::get('error')['title']}}</span>
                                    @endif
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-6" style="font-family:myfont;font-size:1.2em;color:#000;">ช่องทางการรับเงิน</div>
                                @if(isset($bank))
                                    <div class="col-lg-6 text-right" style="font-family:myfont1;font-size:1em;color: #0061fc;text-decoration:underline;cursor:pointer;" data-toggle="modal" data-target="#BankAccount">เปลี่ยนบัญชีธนาคารของฉัน</div>
                                @else
                                    <div class="col-lg-6 text-right" style="font-family:myfont;font-size:1em;color: #0061fc;text-decoration:underline;cursor:pointer;" data-toggle="modal" data-target="#BankAccount">เพิ่มบัญชีธนาคารของฉัน</div>
                                @endif
                            </div>
                            @if(isset($bank))
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom02">
                                            <div class="row mb-2 mt-2">
                                                <div class="col-1 mb-2">
                                                    <!-- <input type="radio" class="message_pri" id="radio01" name="web" value="1" /><label for="radio01"></label> -->
                                                </div>
                                                <img class="mx-2" style="width: 33px;" src="{{asset('home/logo/'.$bank->bankName.'.svg') }}" />
                                                <span style="font-family:myfont1;font-size:1.2em;color:#b1b7bc;line-height:90%;">
                                                    @if($bank->bankName == "scb")
                                                        <b style="font-family:myfont1;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</b></br>{{ $bank->accountNumber }}
                                                    @elseif($bank->bankName == "ktc")
                                                        <b style="font-family:myfont1;font-size:1em;color:#000;">ธนาคารกรุงไทย</b></br>{{ $bank->accountNumber }}
                                                    @elseif($bank->bankName == "kbank")
                                                        <b style="font-family:myfont1;font-size:1em;color:#000;">ธนาคารกสิกร</b></br>{{ $bank->accountNumber }}
                                                    @elseif($bank->bankName == "bangkok")
                                                        <b style="font-family:myfont1;font-size:1em;color:#000;">ธนาคารกรุงเทพ</b></br>{{ $bank->accountNumber }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($wallet >= 100 )
                                    <form action="{{ route('AddWithdraw') }}" method="post">
                                        @csrf
                                        <button class="btn-submit mt-5">ถอนเงิน</button>
                                        <input type="hidden" name="withdrawAmount" id="money">
                                        <input type="hidden" name="withdrawฺBank_name" value="{{ $bank->bankName }}">
                                        <input type="hidden" name="withdrawBank_account" value="{{ $bank->accountNumber }}">
                                        <input type="hidden" name="createAccount" value="{{ date('Y-m-d H:i:s') }}">
                                        <input type="hidden" name="submit" value="submit">
                                    </form>
                                @endif
                            @else
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom02">
                                            <div class="row mb-2 ml-1">
                                                <span style="font-family:myfont1;font-size:em;color:#a8a8a8;;line-height:90%;">
                                                    ไม่มีบัญชีธนาคาร
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div style="font-family:myfont;font-size:1.2em;color:#000;">ประวัติการถอนเงิน</div>
                            <div class="row row5">
                                <div class="col-lg-12">
                                    @if(isset($withdraw))
                                        @foreach($withdraw as $withdrawList)
                                            @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <img class="mr-2" src="{{asset('home/logo/'.$withdrawList->withdrawฺBank_name.'.svg') }}" />
                                                                <span style="font-family:myfont;font-size:1.2em;color:#000;">ธนาคารกสิกร</span><br>
                                                                </div>
                                                            <div class="col-6  text-right">
                                                                <span class="font-bank1" style="color:#ce0005;">-{{ $withdrawList->withdrawAmount }} ฿</span></br>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                </div>
                                                            <div class="col-6 text-right">
                                                                <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $withdrawList->withdrawInvoice }}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-6"></div>
                                                            <div class="col-6 text-right pt-2">
                                                                <button class="btn-topup-wait">รอการอนุมัติ</button>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @elseif($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <img class="mr-2" src="{{asset('home/logo/'.$withdrawList->withdrawฺBank_name.'.svg') }}" />
                                                                <span style="font-family:myfont;font-size:1.2em;color:#000;">ธนาคารกสิกร</span><br>
                                                                </div>
                                                            <div class="col-6  text-right">
                                                                <span class="font-bank1" style="color:#ce0005;">-{{ $withdrawList->withdrawAmount }} ฿</span></br>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                </div>
                                                            <div class="col-6 text-right">
                                                                <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $withdrawList->withdrawInvoice }}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-6"></div>
                                                            <div class="col-6 text-right pt-2">
                                                                <label class="font-game-shelf">15:47 17/06/63</label>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="BankAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  style="color: #000;font-family:myfont;" id="exampleModalLabel">เพิ่มธนาคารของฉัน</h4>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>
            <form action="{{ route('AddBank') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body font-rate-modal">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ธนาคาร</label> <br>
                                    <select class="select-bank" name="bankName" value="{{ old('bankName') }}" require>
                                        <option>เลือกธนาคาร</option>
                                        <option name="bankName" value="kbank">ธนาคารกสิกร</option>
                                        <option name="bankName" value="bangkok">ธนาคารกรุงเทพ</option>
                                        <option name="bankName" value="scb">ธนาคารไทยพาณิชย์</option>
                                        <option name="bankName" value="ktc">ธนาคารกรุงไทย</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">ชื่อบัญชี</label> <br>
                                <input type="text" name="accountName" value="{{ old('accountName') }}" class="input-login px-3" require></input>
                            </label>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">หมายเลขบัญชีธนาคาร</label> <br>
                                <input type="text"  name="accountNumber" value="{{ old('accountNumber') }}" class="input-login px-3"  require></input>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                                <label class="bgInput field-wrap">
                                    <label class="fontHeadInput px-3 py-2" style="padding:0;">ประเภทบัญชี</label> <br>
                                    <select class="select-bank" name="accountType" value="{{ old('accountType') }}" require>
                                        <option>เลือกประเภทบัญชี</option>
                                        <option name="accountType" value="เงินฝากออมทรัพย์">เงินฝากออมทรัพย์</option>
                                        <option name="accountType" value="เงินฝากประจำ">เงินฝากประจำ</option>
                                        <option name="accountType" value="เงินฝากกระแสรายวันหรือบัญชีเดินสะพัด">เงินฝากกระแสรายวันหรือบัญชีเดินสะพัด </option>
                                        <option name="accountType" value="เงินฝากสกุนเงินตราต่างประเทศ">เงินฝากสกุนเงินตราต่างประเทศ </option>
                                        <option name="accountType" value="ตั๋วแลกเงิน">ตั๋วแลกเงิน </option>
                                        <option name="accountType" value="สลากออมทรัพย์">สลากออมทรัพย์ </option>
                                        <option name="accountType" value="พันธบัตรรัฐบาลหรือรัฐวิสาหกิจ">พันธบัตรรัฐบาลหรือรัฐวิสาหกิจ </option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="bgInput field-wrap">
                                <label class="fontHeadInput px-3 py-2" style="padding:0;">สาขา</label> <br>
                                <input type="text" name="accountBranch" value="{{ old('accountBranch') }}" class="input-login px-3 mb-4"></input>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn-submit-modal-red">ยืนยัน
                        <input type="hidden" name="createAccount" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="submit" value="submit">
                    </button>
                </div>
            </form>
        </div>
    </div>
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
<script src="{{ asset('dist/moment/dist/moment.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
    document.querySelector('input[name="amount"]').addEventListener('keyup', (event)=>{
        var credit = document.querySelector('input[name="amount"]').value
        // var money = credit * 30 - ((credit * 30) * 3 /100)
        var money = credit
        document.querySelector('input#money').value = money
        console.log('Error:', money);
        
    })
</script>

@endsection