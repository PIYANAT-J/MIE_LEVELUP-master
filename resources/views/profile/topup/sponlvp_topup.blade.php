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
                <a href="{{ route('AdvtPackage') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-money menuIcon"></i>สนับสนุนเงินในเกม</button></a>
                <a href="{{ route('ProductSupport') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-product menuIcon2"></i>สนับสนุนสินค้าในเกม</button></a>
                <a href="{{ route('SponShelf') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-game-shelf menuIcon"></i>ตู้เกม (เกมเชล)</button></a>
                <!-- <a href="{{ route('DevHistory') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-history menuIcon"></i>ประวัติพอยท์</button></a> -->
                <a href="{{ route('SponsorTopup') }}" style="width: 100%;"><button class="btn-sidebar active"><i class="icon-top-up1 menuIcon"></i>เติมเงิน</button></a>
                <a href="{{ route('SponsorChangePassword') }}" style="width: 100%;"><button class="btn-sidebar"><i class="icon-change-pass menuIcon"></i>เปลี่ยนรหัสผ่าน</button></a>
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
                            <div class="fontHead">เติมเงิน</div>
                            <div class="row bg-topup ml-0 mb-2">
                                <div class="col-6 lext-center">ยอดเงินในวอลเล็ท
                                </div>
                                <div class="col-6 lext-center">10000000</div>
                            </div>
                            <div class="fontHead">จำนวนเงินที่ต้องการเติม (ขั้นต่ำ  ฿100 )</div>
                            <div class="input-group mb-3 input-topup">
                                <div class="input-group-prepend"><span class="input-group-text money_icon">฿</span></div>
                                <input type="text" class="form-control money" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="amount" name="amount" value="{{ old('amount') }}" require>
                                    @if(Session::has('error'))
                                        <script>
                                            window.onload =()=>{
                                                var toastHTML = '<span class="">{{Session::get('error')['title']}}</span>';
                                                M.toast({html: toastHTML })
                                            }
                                        </script>
                                    <span class="helper-text" style="color:red" data-error="wrong" data-success="right">{{Session::get('error')['title']}}</span>
                                    @endif
                                <!-- <input type="text" id="moneyQr"> -->
                            </div>
                            <div class="fontHead">ช่องทางการชำระเงิน</div>
                            <div class="row">
                                <div class="col-12">
                                    <div id="banking" class="custom02">
                                        <div data-toggle="modal" data-target="#myModal2">
                                            <input type="radio" name="bank" value="visa" id="visa">
                                            <label for="visa" style="font-family: myfont1;font-size:1em;color:#000;">บัตรเครดิต/บัตรเดบิต</label>
                                            <img src="{{asset('home/logo/visa.png') }}" />
                                            <img src="{{asset('home/logo/visa2.png') }}" />
                                        </div>
                                        <div>
                                            <input type="radio" name="bank" value="atm" id="atm">
                                            <label for="atm" style="font-family: myfont1;font-size:1em;color:#000;" >โอน/ชำระผ่านบัญชีธนาคาร</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="bank" value="ibank" id="ibank">
                                            <label for="ibank"style="font-family: myfont1;font-size:1em;color:#000;">iBanking / Mobile Banking</label>
                                        </div>
                                    
                                    
                                        <div class="atmlist">
                                            <div for="atmdlabel" style="font-family: myfont1;font-size:1em;color:#000;">เลือกธนาคารที่ต้องการชำระ</div>
                                            <div name="atmdiv" form="banking">
                                                <button class="btn-bangkok" data-toggle="modal" data-target="#myModal5"><img src="{{asset('home/logo/bangkok.svg') }}" /></button>
                                                <button class="btn-ktc" data-toggle="modal" data-target="#myModal6"><img src="{{asset('home/logo/ktc.svg') }}" /></button>
                                                <button class="btn-kbank" data-toggle="modal" data-target="#myModal7"><img src="{{asset('home/logo/kbank.svg') }}" /></button>
                                                <button class="btn-scb" data-toggle="modal" data-target="#myModal8"><img src="{{asset('home/logo/scb.svg') }}" /></button>
                                            </div>
                                        </div>
                                        
                                        <div class="ibanklist ">
                                            <div for="ibanklable"style="font-family: myfont1;font-size:1em;color:#000;">เลือกธนาคารที่ต้องการชำระ</div>
                                            <div name="ibankdiv" form="banking">
                                                <!-- <button class="btn-bangkok" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/bangkok.svg') }}" /></button>
                                                <button class="btn-ktc" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/ktc.svg') }}" /></button>
                                                <button class="btn-kbank" data-toggle="modal" data-target="#myModal9"><img src="{{asset('home/logo/kbank.svg') }}" /></button> -->
                                                <!-- <button id="myModal_SCB" class="btn-scb" data-toggle="modal" name="myModal_SCB"><img src="{{asset('home/logo/scb.svg') }}" /> -->
                                                    <!-- <form id="qr_scb" method="post">
                                                        @csrf
                                                        <button id="myModal_SCB" class="btn-scb" data-toggle="modal" name="myModal_SCB"><img src="{{asset('home/logo/scb.svg') }}" />
                                                            <input type="hidden" name="amount" id="money">
                                                            <input type="hidden" name="note" id="note" value="no">
                                                            <input type="hidden" id="submit" name="submit" value="submit">
                                                        </button>
                                                    </form> -->
                                                <form action="{{route('QrPayment')}}" method="POST">
                                                    @csrf
                                                    <button class="btn-scb"><img src="{{asset('home/logo/scb.svg') }}" />
                                                        <input type="hidden" name="amount" id="moneyQr">
                                                        <input type="hidden" name="bank_name" value="scb">
                                                        <input type="hidden" name="paymentType" value="QrCode">
                                                        <input type="hidden" name="note" id="note" value="no">
                                                        <input type="hidden" id="submit" name="submit" value="submit">
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 mt-5"><button type="submit" class="btn-submit">เติมเงิน</button></div> -->
                        </div>
                        <div class="col-lg-6">
                            <div class="fontHead">ประวัติการเติมเงิน</div>
                            <div class="row row5">
                                <div class="col-lg-12">
                                    @if(isset($payment))
                                        @foreach($payment as $PaymentList)
                                            @if($PaymentList->paymentType == "QrCode")
                                                @if($PaymentList->status == "true")
                                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="text-right" style="font-family:myfont;font-size:1em;color:#000;">iBanking / Mobile Banking</span><br>
                                                                    <img class="mr-2" src="{{asset('home/logo/'.$PaymentList->bank_name.'.svg') }}" />
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                                    </div>
                                                                <div class="col-6  text-right" style="padding-top:35px">
                                                                    <span class="font-bank1" >+{{ $PaymentList->amount }} ฿</span></br>
                                                                </div> 
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                    </div>
                                                                <div class="col-6 text-right">
                                                                    <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $PaymentList->qr_invoice }}</span>
                                                                </div> 
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-6">
                                                                    <span style="font-family:myfont;font-size:1em;color:#ff6f6f;">ชำระเงินเรียบร้อย</span>
                                                                </div>
                                                                <div class="col-6 text-right">
                                                                    <label class="font-game-shelf">{{ $PaymentList->confirm_at}}</label>
                                                                </div> 
                                                            </div>
                                                        </div> 
                                                    </div>
                                                @else
                                                    <div class="row bg-bank ml-0 mb-2 py-2">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="text-right" style="font-family:myfont;font-size:1em;color:#000;">iBanking / Mobile Banking</span><br>
                                                                    <img class="mr-2" src="{{asset('home/logo/'.$PaymentList->bank_name.'.svg') }}" />
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                                    </div>
                                                                <div class="col-6  text-right" style="padding-top:35px">
                                                                    <span class="font-bank1" >+{{ $PaymentList->amount }} ฿</span></br>
                                                                </div> 
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                    </div>
                                                                <div class="col-6 text-right">
                                                                    <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $PaymentList->qr_invoice }}</span>
                                                                </div> 
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-6">
                                                                    <span style="font-family:myfont;font-size:1em;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                                                                </div>
                                                                <div class="col-6 text-right pt-2">
                                                                    <button class="btn-submit-s" data-toggle="modal" data-target="#{{ $PaymentList->invoice }}">โอนเงิน</button>
                                                                </div> 
                                                            </div>
                                                        </div> 
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                    
                                    @if(isset($transfer))
                                        @foreach($transfer as $transferLits)
                                            @if($transferLits->transferStatus == "ยืนยันการโอน")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-right" style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span><br>
                                                                <img class="mr-2" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                                @if($transferLits->transferฺBank_name == "bangkok")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "ktc")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "kbank")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "scb")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                                @endif
                                                            </div>
                                                            <div class="col-6  text-right" style="padding-top:35px">
                                                                <span class="font-bank1" >+{{ $transferLits->transferAmount }} ฿</span></br>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                </div>
                                                            <div class="col-6 text-right">
                                                                <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $transferLits->transferInvoice }}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont;font-size:0.9em;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                                                            </div>
                                                            <div class="col-6 text-right pt-2">
                                                                <button class="btn-submit-s" data-toggle="modal" data-target="#{{ $transferLits->invoice }}">ยืนยันการโอน</button>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @elseif($transferLits->transferStatus == "รอการอนุมัติ")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-right" style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span><br>
                                                                <img class="mr-2" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                                @if($transferLits->transferฺBank_name == "bangkok")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "ktc")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "kbank")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "scb")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                                @endif
                                                            </div>
                                                            <div class="col-6  text-right" style="padding-top:35px">
                                                                <span class="font-bank1" >+{{ $transferLits->transferAmount }} ฿</span></br>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                </div>
                                                            <div class="col-6 text-right">
                                                                <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $transferLits->transferInvoice }}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont;font-size:1em;color:#ff6f6f;">ชำระเงินแล้ว</span>
                                                            </div>
                                                            <div class="col-6 text-right pt-2">
                                                                <button class="btn-topup-wait">รอการอนุมัติ</button>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @elseif($transferLits->transferStatus == "อนุมัติแล้ว")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-right" style="font-family:myfont;font-size:1em;color:#000;">โอน/ชำระผ่านบัญชีธนาคาร</span><br>
                                                                <img class="mr-2" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                                @if($transferLits->transferฺBank_name == "bangkok")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "ktc")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "kbank")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span><br>
                                                                @elseif($transferLits->transferฺBank_name == "scb")
                                                                    <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                                                @endif
                                                            </div>
                                                            <div class="col-6  text-right" style="padding-top:35px">
                                                                <span class="font-bank1" >+{{ $transferLits->transferAmount }} ฿</span></br>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont1;font-size:1em;color:#000;">หมายเลขคำร้อง</span>
                                                                </div>
                                                            <div class="col-6 text-right">
                                                                <span class="py-2" style="font-family:myfont;font-size:1em;color:#000;">{{ $transferLits->transferInvoice }}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-6">
                                                                <span style="font-family:myfont;font-size:1em;color:#ff6f6f;">ชำระเงินเรียบร้อย</span>
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                <label class="font-game-shelf">15:47 17/06/63</label>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif

                                        <!-- <div class="row bg-bank ml-0 py-2 mb-2">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <img class="mr-2" src="{{asset('home/logo/visa.png') }}" />
                                                        <span style="font-family:myfont;font-size:1.23em;color:#000;">ธนาคารกสิกรไทย</span>
                                                        </div>
                                                    <div class="col-6 text-right">
                                                        <span class="font-bank1">+1,000.00 ฿</span>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span style="font-family:myfont1;font-size:1.23em;color:#000;">เลขอ้างอิง</span>
                                                        </div>
                                                    <div class="col-6 text-right">
                                                        <span class="py-2" style="font-family:myfont;font-size:1.23em;color:#000;">1234567890123456</span>
                                                    </div> 
                                                </div>
                                                <div class="row mr-0">
                                                    <div class="col-9"></div>
                                                    <div class="col-3 text-right" style="padding:0;">
                                                        <label class="font-game-shelf">15:47 17/06/63</label>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> -->
                                        
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

@if(isset($transfer))
    @foreach($transfer as $transferModal)
        <div class="modal fade" id="{{ $transferModal->invoice }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"  style="color: #000;font-family:myfont;" id="exampleModalLabel">ยืนยันการโอนเงิน</h4>
                        <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                    </div>
                    <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body font-rate-modal">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                                        <img class="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" />
                                        @if($transferModal->transferฺBank_name == "bangkok")
                                            <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงเทพ</span><br>
                                        @elseif($transferModal->transferฺBank_name == "ktc")
                                            <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกรุงไทย</span><br>
                                        @elseif($transferModal->transferฺBank_name == "kbank")
                                            <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารกสิกรไทย</span><br>
                                        @elseif($transferModal->transferฺBank_name == "scb")
                                            <span style="font-family:myfont;font-size:1em;color:#000;">ธนาคารไทยพาณิชย์</span><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                                        <span class="pl-1" style="font-family1:myfont;font-size:1em;color:#000;">1234567890123456</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bg-bank px-2 pt-2 pb-1 mb-2">
                                        <select class="select-bank" require>
                                            <option>เลือกธนาคาร</option>
                                            <option>ธนาคารกสิกร</option>
                                            <option>ธนาคารกรุงเทพ</option>
                                            <option>ธนาคารไทยพาณิชย์</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <input type="text" class="form-control input-bank" placeholder="ยอดที่ชำระ" value="{{ $transferModal->transferAmount }}" require></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <input type="text" class="form-control input-bank" placeholder="วันที่โอน" require></input>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <input type="text" class="form-control input-bank" placeholder="เวลาที่โอน" require></input>
                                </div>
                            </div>
                            <div>
                                <label id="upload" style="cursor:pointer;" class="font-kyc-upload">
                                    <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />อัพโหลดรูปภาพ
                                </label>
                                <div id="thumb" class="thumb-topup"><img src="home/topup/pic-topup.png"/></div>    
                                <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn-submit-modal">ยืนยัน
                                <input type="hidden" name="submit" value="submit">
                                <input type="hidden" name="id" value="{{ $transferModal->id }}">
                                <!-- <input type="hidden" name="">
                                <input type="hidden" name=""> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-6"><img class="mr-2 img-visa" src="{{asset('home/logo/visa3.png') }}" ></div>
                    <div class="col-lg-6 text-right"><img class="mr-2 img-scurity" src="{{asset('home/logo/security.svg') }}" ></div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="หมายเลขบัตร" require></input>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="ชื่อผู้ถือบัตร" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="CCV" require></input>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control input-bank" placeholder="วันหมดอายุ" require></input>
                    </div>
                    <div class="col-lg-8 mb-2 ">
                        <div class="pl-2" style="font-family:myfont1;font-size:0.8em;color:#000;line-height: 150%;"><span style="font-weight:bold;">บันทึกบัตรไว้ใช้ในภายหลัง</span></br>ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</div>
                    </div>
                    <div class="col-lg-4 mb-2 text-right">
                        <div class="wrapper">
                            <div class="switch_box box_1">
                                <input type="checkbox" class="switch_1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal" data-toggle="modal" data-target="#myModal2"/></div>
                    <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">กรอกรหัส OTP</div> 
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row text-center">
                    <div class="col-lg-12 mb-2">
                        <span style="font-family:myfont;font-wieght:bold;font-size:1.1em;color:#000;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</span>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-lg-12 pb-3 bg-bank text-center ">
                        <div>
                            <input class="input-otp" id="codeBox1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" require/>
                            <input class="input-otp" id="codeBox2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" require/>
                            <input class="input-otp" id="codeBox3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" require/>
                            <input class="input-otp" id="codeBox4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" require/>
                            <input class="input-otp" id="codeBox5" type="text" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)" require/>
                            <input class="input-otp" id="codeBox6" type="text" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)" require/>
                        </div>
                        <span style="font-family:myfont;font-size:0.9em;color:#000;">รหัสอ้างอิง OTP : GTBV</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-modal-red" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row text-center">
                    <div class="col-lg-12 mb-2">
                        <img src="{{asset('icon/correct.svg') }}"/></br>
                        <span style="font-family:myfont;font-size:1.3em;color: #23c197;">เติมเงินสำเร็จ</span></br>
                        <span style="font-family:myfont1;color:#000;">คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ</span>
                    </div>
                </div>
            </div>

            <div class="mx-3 mb-3">
                <button type="button" class="btn-submit-modal-red">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/bangkok.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกรุงเทพ</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;"><input type="number" id="bangkokM"></span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit-modal">บันทึก
                                <input type="hidden" name="transferAmount" id="bangkok">
                                <input type="hidden" name="transferฺBank_name" value="bangkok">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/ktc.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกรุงไทย</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;"><input type="number" id="ktcM"></span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit-modal">บันทึก
                                <input type="hidden" name="transferAmount" id="ktc">
                                <input type="hidden" name="transferฺBank_name" value="ktc">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/kbank.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารกสิกรไทย</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;"><input type="number" id="kbankM"></span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit-modal">บันทึก
                                <input type="hidden" name="transferAmount" id="kbank">
                                <input type="hidden" name="transferฺBank_name" value="kbank">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <img class="mr-2" style="weight:100px;" src="{{asset('home/logo/scb.svg') }}"/>
                                <span style="color:#000;font-weight:bold;">ธนาคารไทยพาณิชย์</span> </br>
                                <span style="color:#000;font-weight:bold;font-size:1.5em;">000-0000-0000</span></br>
                                <div style="color:#000;">จำนวนเงินที่ต้องชำระ
                                    <span class="ml-3" style="color:#23c197;font-size-1.1em;font-weight:bold;"><input type="number" id="scbM"></span>
                                </div>
                                <span> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</span></br>
                                <span style="font-size:0.9em;color:#ce0005;">*รอการยืนยันภายใน 48 ชั่วโมง</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit-modal">บันทึก
                                <input type="hidden" name="transferAmount" id="scb">
                                <input type="hidden" name="transferฺBank_name" value="scb">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($payment))
    @foreach($payment as $qrPayment)
        <div class="modal fade" id="{{ $qrPayment->invoice }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal"/></div>
                            <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">iBanking / Mobile Banking</div> 
                            <div class="col-1"></div>
                    </div>

                    <div class="modal-body font-rate-modal">
                        <div class="row px-3">
                            <div class="col-lg-12 pb-1 bg-bank text-center">
                                <div class="my-2"><img src="{{asset('icon/waiting.svg') }}" /></div>
                                <span style="font-family:myfont;color:#000;">
                                    กำลังรอชำระเงิน</br>ผ่านโมบายแบงค์กิ้ง/ไอแบงค์กิ้ง
                                </span></br>
                                <span style="color:#000";>
                                    กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็มภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกอัตโนมัติ
                                </span>
                                <div class="row justify-content-center">{!! DNS2D::getBarcodeHTML($qrPayment->rawQrCode, "QRCODE",6,6) !!}</div>
                                <span style="font-family:myfont;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                            </div>
                        </div>

                        <div class="row px-3 mt-3">
                            <div class="col-lg-12 pb-1 bg-bank">
                                <div class="row">
                                    <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"><img class="mt-3" src="{{asset('home/logo/scb.svg') }}" /></div>
                                    <div class="col-8 mt-2 py-2" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขบัญชี <b class="ml-2"><label>1234567890</label></b></span></div>
                                    <div class="col-3 text-center py-3"  style="font-family:myfont;color:#ff6f6f;border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                                    <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                                    <div class="col-8 py-3" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขคำร้อง<b class="ml-2"><label>1234567890123456</label></b></span></div>
                                    <div class="col-3 py-2 text-center mt-2"  style="font-family:myfont;color:#ff6f6f; border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                                    <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                                    <div class="col-8 pt-3"><span style="color:#000;font-family:myfont;">จำนวนเงินที่ต้องการเติม</span></div>
                                    <div class="col-3 py-2 text-center mt-2" style="font-family:myfont;color:#23c197;">{{ $qrPayment->amount }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-submit-modal" >บันทึก</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

<!-- <div class="modal fade" id="myModalSCB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal"/></div>
                    <div class="col-10 text-center" style="font-family:myfont;font-wieght:bold;font-size:1.2em;color:#000;">iBanking / Mobile Banking</div> 
                    <div class="col-1"></div>
            </div>
            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1 bg-bank text-center">
                        <div class="my-2"><img src="{{asset('icon/waiting.svg') }}" /></div>
                        <span style="font-family:myfont;color:#000;">
                            กำลังรอชำระเงิน</br>ผ่านโมบายแบงค์กิ้ง/ไอแบงค์กิ้ง
                        </span></br>
                        <span style="color:#000";>
                            กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็มภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกอัตโนมัติ
                        </span>
                        <div class="my-2"><img src="{{asset('home/topup/qr.png') }}" /></div>
                        @if(isset($invoice))
                            <div class="row justify-content-center" id="qrCode">{!! DNS2D::getBarcodeHTML($invoice, "QRCODE",6,6) !!}</div>
                        @endif
                        <span style="font-family:myfont;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</span>
                    </div>
                </div>
                <div class="row px-3 mt-3">
                    <div class="col-lg-12 pb-1 bg-bank">
                        <div class="row">
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"><img class="mt-3" src="{{asset('home/logo/scb.svg') }}" /></div>
                            <div class="col-8 mt-2 py-2" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขบัญชี <b class="ml-2"><label>1234567890</label></b></span></div>
                            <div class="col-3 text-center py-3"  style="font-family:myfont;color:#ff6f6f;border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                            <div class="col-8 py-3" style="border-bottom: 1px solid #fff;"><span style="color:#000;">หมายเลขคำร้อง<b class="ml-2"><label>1234567890123456</label></b></span></div>
                            <div class="col-3 py-2 text-center mt-2"  style="font-family:myfont;color:#ff6f6f; border-bottom: 1px solid #fff;cursor:pointer;">คัดลอก</div>
                            <div class="col-1 py-1" style="border-bottom: 1px solid #fff;"></div>
                            <div class="col-8 pt-3"><span style="color:#000;font-family:myfont;">จำนวนเงินที่ต้องการเติม</span></div>
                            <div class="col-3 py-2 text-center mt-2" style="font-family:myfont;color:#23c197;"><input type="number" name="amount" id="money"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-submit-modal" >บันทึก</button>
            </div>
        </div>
    </div>
</div> -->
<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;;font-size:1.2em;color:#000;">แจ้งเตือน</div>
                    <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3">
                    <div class="col-lg-12 pb-1">
                        <div class="row"><label class="status-approve" style="text-align:center;">{{ Session::get('success') }}</label></div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
            </div>
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
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script> /* รูปโปรไฟล์เกม */
$(function () {
 $("#upload").on("click",function(e){
     $("#file_upload").show().click().hide();
     e.preventDefault();
 });
 $("#file_upload").on("change",function(e){
     var files = this.files
     showThumbnail(files)        
 });
 function showThumbnail(files){
     $("#thumb").html("");
     for(var i=0;i<files.length;i++){
         var file = files[i]
         var imageType = /image.*/
         if(!file.type.match(imageType)){
                //  console.log("Not an Image");
             continue;
         }
         var image = document.createElement("img");
         var thumbnail = document.getElementById("thumb");
         image.file = file;
         thumbnail.appendChild(image)
         var reader = new FileReader()
         reader.onload = (function(aImg){
             return function(e){
                 aImg.src = e.target.result;
             };
         }(image))
         var ret = reader.readAsDataURL(file);
         var canvas = document.createElement("canvas");
         ctx = canvas.getContext("2d");
         image.onload= function(){
             ctx.drawImage(image,100,100)
         }
     } // end for loop
     console.log(file);
 } // end showThumbnail
});
</script>

<script>
$(document).ready(function() {
  $('.atmlist').hide();
  $('.ibanklist').hide();
   
  $('input:radio[name="bank"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'atm')
	{
    $('.atmlist').show();
    $('.ibanklist').hide();
		}
  
  else if ($(this).is(':checked') && $(this).val() == 'ibank'){
    $('.atmlist').hide();
    $('.ibanklist').show();
   }
   
   else {
    $('.atmlist').hide();
    $('.ibanklist').hide();
   }
	}
);
}
);
</script>


<script>
      function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 6) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
</script>

<script>
    document.querySelector('input[name="amount"]').addEventListener('keyup', (event)=>{
        var creditQr = document.querySelector('input[name="amount"]').value
        // var money = credit * 30 - ((credit * 30) * 3 /100)
        var moneyQr = creditQr
        document.querySelector('input#moneyQr').value = moneyQr
        console.log('Error:', moneyQr);
    })
</script>
<script>
    document.querySelector('input[name="amount"]').addEventListener('keyup', (event)=>{
        var creditTransfer = document.querySelector('input[name="amount"]').value
        var moneyTransfer = creditTransfer
        document.querySelector('input#bangkok').value = moneyTransfer
        document.querySelector('input#ktc').value = moneyTransfer
        document.querySelector('input#kbank').value = moneyTransfer
        document.querySelector('input#scb').value = moneyTransfer
        console.log('Error:', moneyTransfer);
    })
</script>
<script>
    document.querySelector('input[name="amount"]').addEventListener('keyup', (event)=>{
        var creditTM = document.querySelector('input[name="amount"]').value
        var moneyTM = creditTM
        document.querySelector('input#bangkokM').value = moneyTM
        document.querySelector('input#ktcM').value = moneyTM
        document.querySelector('input#kbankM').value = moneyTM
        document.querySelector('input#scbM').value = moneyTM
        console.log('Error:', moneyTM);
    })
</script>

<script>
    $(document).ready(function(){
        // $('#myModalSCB').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax:{
        //         url: "{{ route('UserTopup') }}",
        //     }
        // });
        $('#myModal_SCB').click(function(){
            $('#myModalSCB').modal('show')
        });
        $('#qr_scb').on('submit', function(event){
            event.preventDefault();
            if($('#submit').val() == 'submit'){
                $.ajax({
                    url:"{{ route('QrPayment') }}",
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data){
                        var html = '';
                        if(data.errors){
                            html = '<div class="alert alert-danger">';
                                for(var count = 0; count < data.errors.length; count++){
                                    html += '<p>' + data.errors[count] + '</p>';
                                }
                            html += '</div>';
                        }
                        if(data.success){
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            // console.log('Error:', data);
                            $('#myModalSCB')[0].reset();
                            $('#myModalSCB').Data().ajax.reload();
                        }
                        $('#qrCode').html(html);
                    }
                })
            }
        });
    });
</script>

@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
        });
    </script>
@endif

@endsection