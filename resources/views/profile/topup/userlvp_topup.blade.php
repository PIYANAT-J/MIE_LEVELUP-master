@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('UserTopup') }}">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
        @include('profile.sidebar.user_sidebar')

        <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class=" col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-5">
                        <div class="row">
                            <div class="col-12 pb-2 mb-2" style="border-bottom: 1px solid #f2f2f2;">
                                <h1 class="fontHeader">เติมเงิน</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row bg-topup ml-0 mb-2 mt-1">
                                    <div class="col-8  text-left" style="padding:0;">
                                        <h1 style="color:#ffffff;font-weight:500;">ยอดเงินในวอลเล็ท<h1>
                                    </div>
                                    <div class="col-4 text-right" style="padding:0;">
                                        <h1 style="color:#ffffff;font-weight:500;">฿ {{round($wallet, 2)}}</h1>
                                    </div>
                                </div>
                                <div class="mt-3"><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องการเติม (ขั้นต่ำ  ฿100 )</p></div>
                                <div class="input-group mb-3 input-topup">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text money_icon">
                                            <h3 style="margin:0;font-weight: 800;color:#000;">฿</h3>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control money h6" style="margin:0;font-weight: 800;color:#000;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="amount" name="amount" value="{{ old('amount') }}" require>
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
                                <div class="mb-1"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="banking" class="redioRed ">
                                            <div data-toggle="modal" data-target="#myModal2" onClick="myFunction3()">
                                                <input type="radio" name="bank" value="visa" id="visa">
                                                <label for="visa"> <p style="margin:0;"> บัตรเครดิต/บัตรเดบิต</p></label>
                                                <img src="{{asset('home/logo/visa.png') }}" />
                                                <img src="{{asset('home/logo/visa2.png') }}" />
                                            </div>
                                            <div onClick="myFunction()">
                                                <input type="radio" name="bank" value="atm" id="atm">
                                                <label for="atm"><p style="margin:0;">โอน/ชำระผ่านบัญชีธนาคาร</p></label>
                                            </div>
                                            <div onClick="myFunction2()">
                                                <input type="radio" name="bank" value="ibank" id="ibank">
                                                <label for="ibank"><p style="margin:0;">iBanking / Mobile </p></label>
                                            </div>
                                        
                                        
                                            <div class="mt-0" id="first">
                                                <p style="margin:0;font-weight:800;">เลือกธนาคารที่ต้องการชำระ</p>
                                                <div>
                                                    <button class="btn-bangkok" data-toggle="modal" data-target="#myModal5"><img src="{{asset('home/logo/bangkok.svg') }}" /></button>
                                                    <button class="btn-ktc" data-toggle="modal" data-target="#myModal6"><img src="{{asset('home/logo/ktc.svg') }}" /></button>
                                                    <button class="btn-kbank" data-toggle="modal" data-target="#myModal7"><img src="{{asset('home/logo/kbank.svg') }}" /></button>
                                                    <button class="btn-scb" data-toggle="modal" data-target="#myModal8"><img src="{{asset('home/logo/scb.svg') }}" /></button>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-0 " id="second">
                                                <p style="margin:0;font-weight:800;">เลือกธนาคารที่ต้องการชำระ</p>
                                                <div>
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
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="row">
                            <div class="col-12 pb-2 mb-2" style="border-bottom: 1px solid #f2f2f2;">
                                <h1 class="fontHeader">ประวัติการเติมเงิน</h1>
                            </div>
                        </div>
                        <div class="row row5">
                            <div class="col-12">
                                @if(isset($payment))
                                    @foreach($payment as $PaymentList)
                                        @if($PaymentList->paymentType == "QrCode")
                                            @if($PaymentList->status == "true")
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p style="margin:0;font-weight:800;">iBanking / Mobile Banking</p>
                                                                <img class="imgBank" src="{{asset('home/logo/'.$PaymentList->bank_name.'.svg') }}" />
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารไทยพาณิชย์</p>
                                                                <p class="font-bank1">+{{ $PaymentList->amount }} ฿</p>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p style="margin:0;">หมายเลขคำร้อง</p>
                                                                <p class="fontInvoice">{{ $PaymentList->qr_invoice }}</p>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-12">
                                                                <p style="color:#ff6f6f;margin:0;padding:10px 0 0 0">ชำระเงินเรียบร้อย</p>
                                                                <p class="fontTimeConfirm">{{ $PaymentList->confirm_at}}</p>
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>
                                            @else
                                                <div class="row bg-bank ml-0 mb-2 py-2">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <p style="margin:0;font-weight:800;">iBanking / Mobile Banking</p>
                                                                <img class="imgBank" src="{{asset('home/logo/'.$PaymentList->bank_name.'.svg') }}" />
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารไทยพาณิชย์</p>   
                                                                <p class="font-bank1">+{{ $PaymentList->amount }} ฿</p>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p style="margin:0;">หมายเลขคำร้อง</p>
                                                                <p class="fontInvoice">{{ $PaymentList->qr_invoice }}</p>
                                                            </div> 
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-9 pb-2">
                                                                <h5 style="color:#ff6f6f;margin:0;padding:10px 0 0 0;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</h5>
                                                            </div> 
                                                            <div class="col-3">
                                                                <button class="btn-submit-s" style="position:absolute;top:0;right:16px" data-toggle="modal" data-target="#{{ $PaymentList->invoice }}">
                                                                    <p style="margin:0;">โอนเงิน</p>
                                                                </button>
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
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <p style="margin:0;font-weight:800;">โอน/ชำระผ่านบัญชีธนาคาร</p>
                                                            <img class="imgBank" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                            @if($transferLits->transferฺBank_name == "bangkok")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงเทพ</p>
                                                            @elseif($transferLits->transferฺBank_name == "ktc")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "kbank")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกสิกรไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "scb")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารไทยพาณิชย์</p>
                                                            @endif
                                                            <p class="font-bank1">+{{ $transferLits->transferAmount }} ฿</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p style="margin:0;">หมายเลขคำร้อง</p>
                                                            <p class="fontInvoice">{{ $transferLits->transferInvoice }}</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-9 pb-2">
                                                            <h5 style="color:#ff6f6f;margin:0;padding:10px 0 0 0;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</h5>
                                                        </div>
                                                        <div class="col-3">
                                                            <button class="btn-submit-s" style="position:absolute;top:0;right:16px" data-toggle="modal" data-target="#{{ $transferLits->invoice }}">
                                                                <p style="margin:0;">แจ้งโอน</p>
                                                            </button>
                                                        </div> 
                                                    </div>
                                                </div> 
                                            </div>
                                        @elseif($transferLits->transferStatus == "รอการอนุมัติ")
                                            <div class="row bg-bank ml-0 mb-2 py-2">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <p style="margin:0;font-weight:800;">โอน/ชำระผ่านบัญชีธนาคาร</p>
                                                            <img class="imgBank" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                            @if($transferLits->transferฺBank_name == "bangkok")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงเทพ</p>
                                                            @elseif($transferLits->transferฺBank_name == "ktc")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "kbank")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกสิกรไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "scb")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารไทยพาณิชย์</p>
                                                            @endif
                                                            <p class="font-bank1">+{{ $transferLits->transferAmount }} ฿</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p style="margin:0;">หมายเลขคำร้อง</p>
                                                            <p class="fontInvoice">{{ $transferLits->transferInvoice }}</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-12">
                                                            <p style="color:#ff6f6f;margin:0;padding:10px 0 0 0;">ชำระเงินแล้ว</p>
                                                            <button class="btnWait" style="position:absolute;top:0;right:16px">
                                                                <p style="margin:0;">รอการอนุมัติ</p>
                                                            </button>
                                                        </div> 
                                                    </div>
                                                </div> 
                                            </div>
                                        @elseif($transferLits->transferStatus == "อนุมัติแล้ว")
                                            <div class="row bg-bank ml-0 mb-2 py-2">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <p style="margin:0;font-weight:800;">โอน/ชำระผ่านบัญชีธนาคาร</p>
                                                            <img class="imgBank" src="{{asset('home/logo/'.$transferLits->transferฺBank_name.'.svg') }}" />
                                                            @if($transferLits->transferฺBank_name == "bangkok")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงเทพ</p>
                                                            @elseif($transferLits->transferฺBank_name == "ktc")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกรุงไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "kbank")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารกสิกรไทย</p>
                                                            @elseif($transferLits->transferฺBank_name == "scb")
                                                                <p style="margin:0;font-weight:800;padding: 0 0 0 33px">ธนาคารไทยพาณิชย์</p>
                                                            @endif
                                                            <p class="font-bank1">+{{ $transferLits->transferAmount }} ฿</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p style="margin:0;">หมายเลขคำร้อง</p>
                                                            <p class="fontInvoice">{{ $transferLits->transferInvoice }}</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-12">
                                                            <label><p style="color:#ff6f6f;margin:0;">ชำระเงินแล้ว</p></label>
                                                            <label style="float:right;"><h5 style="margin:0;padding-top:5px;">15:47 17/06/63</h5></label>
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
        </div>
        <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
    </div>
</div>

@if(isset($transfer))
    @foreach($transfer as $transferModal)
        <!-- แจ้งโอนเงินผ่านบัญชีธนาคาร -->
        <div class="modal fade" id="{{ $transferModal->invoice }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title"  style="color: #000;" id="exampleModalLabel">ยืนยันการโอนเงิน</h1>
                        <button type="button" class="close btn-closeModal" data-dismiss="modal">
                            <i class="icon-close_modal" style="font-size: 15px;"></i>
                        </button>
                    </div>
                    <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="bgGrey px-2 pt-2 mb-2">
                                        <label><img style="mr-2" src="{{asset('home/logo/'.$transferModal->transferฺBank_name.'.svg') }}" /></label>
                                        @if($transferModal->transferฺBank_name == "bangkok")
                                            <label><p style="margin:0;font-weight:800;">ธนาคารกรุงเทพ</p></label>
                                        @elseif($transferModal->transferฺBank_name == "ktc")
                                            <label><p style="margin:0;font-weight:800;">ธนาคารกรุงไทย</p></label>
                                        @elseif($transferModal->transferฺBank_name == "kbank")
                                            <label><p style="margin:0;font-weight:800;">ธนาคารกสิกรไทย</p></label>
                                        @elseif($transferModal->transferฺBank_name == "scb")
                                            <label><p style="margin:0;font-weight:800;">ธนาคารไทยพาณิชย์</p></label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">หมายเลขอ้างอิง</label></br>
                                    <label class="bgGrey px-2 pt-2 pb-2 mb-2">
                                        <p style="margin:0;padding-left:5px">1234567890123456</p>
                                    </label>
                                </div>
                                <div class="col-12 mb-2">
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">ธนาคารที่ชำระเงิน</label></br>
                                    <select class="MySelect p" require>
                                        <option>เลือกธนาคาร</option>
                                        <option>ธนาคารกสิกร</option>
                                        <option>ธนาคารกรุงเทพ</option>
                                        <option>ธนาคารไทยพาณิชย์</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-2">
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">จำนวนเงินที่ชำระ</label></br>
                                    <input type="text" class="input2 p" style="padding-left:10px" value="{{ $transferModal->transferAmount }}" require></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-2" style="padding-right:0;">
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">วันที่ชำระเงิน</label></br>
                                    <input type="date" class="MySelect p" require></input>
                                </div>
                                <div class="col-6 mb-2">
                                    <label style="font-family:myfont1;font-weight:900;margin:0;font-size:0.8em;">เวลาที่ชำระเงิน</label></br>
                                    <input type="time" class="MySelect p" placeholder="เวลาที่โอน" require></input>
                                </div>
                            </div>
                            <div>
                                <label id="upload" style="cursor:pointer;" class="font-kyc-upload">
                                    <img class="mr-2" style="width: 40px;height:40px;" src="{{asset('icon/upload-kyc.svg') }}" />
                                    <label><p style="margin:0;font-weight:800;">อัพโหลดรูปภาพ</p></label>
                                </label>
                                <div id="thumb" class="thumb-topup"><img src="home/topup/pic-topup.png"/></div>    
                                <input id="file_upload" style="display:none" name="transferImg" type="file" multiple="true" accept="image/* " require/>
                            </div>
                            <button class="btn-submit mt-3">
                                <p style="margin:0;">ยืนยัน</p>
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

<!-- ชำระผ่านบัตรเคดิต -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xl-6"><img class="mr-2 img-visa" src="{{asset('home/logo/visa3.png') }}" ></div>
                    <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 text-right"><img class="mr-2 img-scurity" src="{{asset('home/logo/security.svg') }}" ></div>
                </div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-2">
                        <input type="text" class="input2 p pl-2" placeholder="หมายเลขบัตร" require></input>
                    </div>
                    <div class="col-12 mb-2">
                        <input type="text" class="input2 p pl-2" placeholder="ชื่อผู้ถือบัตร" require></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <input type="text" class="input2 p pl-2" placeholder="CCV" require></input>
                    </div>
                    <div class="col-6 mb-2" style="padding-left:0;">
                        <input type="text" class="input2 p pl-2" placeholder="วันหมดอายุ" require></input>
                    </div>
                    <div class="col-10 mb-2 ">
                        <div class="pl-2" style="color:#000;">
                            <p style="font-weight:800;margin:0;">บันทึกบัตรไว้ใช้ในภายหลัง</p>
                            <p style="margin:0;">ข้อมูลบัตรของท่านจะถูกเก็บรักษาไว้อย่างปลอดภัย</p>
                        </div>
                    </div>
                    <div class="col-2 mb-2 text-right">
                        <div class="wrapper">
                            <div class="switch_box box_1">
                                <input type="checkbox" class="switch_1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">
                   <p style="margin:0;color:#ffffff;"> ยืนยัน</p>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- ยืนยันรหัส OTP -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="col-1" style="cursor:pointer;"><img class="mr-2" src="{{asset('icon/back.svg') }}" data-dismiss="modal" data-toggle="modal" data-target="#myModal2"/></div>
                    <div class="col-10 text-center"><h1 style="color:#000;font-weight:800;">กรอกรหัส OTP <h1></div> 
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body">
                <div class="row text-center">
                    <div class="col-12 mb-2">
                        <p style="color:#000;margin:0;">รหัส OTP จะถูกส่งไปที่เบอร์ 080-441-9585</p>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-12 py-3 bgGrey text-center ">
                        <div>
                            <input class="input-otp" id="Box1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" require/>
                            <input class="input-otp" id="Box2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" require/>
                            <input class="input-otp" id="Box3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" require/>
                            <input class="input-otp" id="Box4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" require/>
                            <input class="input-otp" id="Box5" type="text" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)" require/>
                            <input class="input-otp" id="Box6" type="text" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)" require/>
                        </div>
                        <h5 style="font-weight:800;color:#000;margin:0;">รหัสอ้างอิง OTP : GTBV</h5>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-submit-red" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">
                    <p style="margin:0;">ยืนยัน</p>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ทำรายการสำเร็จ -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="row text-center">
                    <div class="col-lg-12 mb-2">
                        <img style="width:60px" src="{{asset('icon/correct.svg') }}"/>
                        <h1 class="mt-2" style="font-weight:800;color: #23c197;">เติมเงินสำเร็จ</h1>
                        <p style="color:#000;margin:0;">คุณได้เติมเงินลงในวอลเล็ตของคุณเรียบร้อย</br>คุณสามารถเช็คยอดเงินได้ที่วอลเล็ตของคุณ</p>
                    </div>
                </div>
            </div>

            <div class="mx-3 mb-3">
                <button type="button" class="btn-submit-red" data-dismiss="modal"><p style="color:#ffffff;margin:0;">ตกลง</p></button>
            </div>
        </div>
    </div>
</div>

<!-- โอนเงินผ่านบัญชีธนาคารกรุงเทพ -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="row ">
                    <div class="col-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <label><img class="mr-2" style="weight:100px;" src="{{asset('home/logo/bangkok.svg') }}"/></label>
                                <label><h1 style="color:#000;font-weight:800;">ธนาคารกรุงเทพ</h1></label>
                                <h1 style="color:#000;font-weight:800;">000-0000-0000</h1>
                                <label><p style="color:#000;">จำนวนเงินที่ต้องชำระ</p></label>
                                <label><input class="input2 ml-3 p text-center" type="number" id="bangkokM" readonly></label>
                                <p style="margin:0;"> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</p>
                                <p style="color:#ce0005;margin:0;">*รอการยืนยันภายใน 48 ชั่วโมง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit">
                                <p style="margin:0;">บันทึก</p>
                                <input type="hidden" name="transferAmount" id="bangkok">
                                <input type="hidden" name="transferฺBank_name" value="bangkok">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โอนเงินผ่านบัญชีธนาคารกรุงไทย -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <label><img class="mr-2" style="weight:100px;" src="{{asset('home/logo/ktc.svg') }}"/></label>
                                <label><h1 style="color:#000;font-weight:800;">ธนาคารกรุงไทย</h1></label>
                                <h1 style="color:#000;font-weight:800;">000-0000-0000</h1>
                                <label><p style="color:#000;">จำนวนเงินที่ต้องชำระ</p></label>
                                <label><input class="input2 ml-3 p text-center" type="number" id="ktcM" readonly></label>
                                <p style="margin:0;"> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</p>
                                <p style="color:#ce0005;margin:0;">*รอการยืนยันภายใน 48 ชั่วโมง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit">
                                <p style="margin:0;">บันทึก</p>
                                <input type="hidden" name="transferAmount" id="ktc">
                                <input type="hidden" name="transferฺBank_name" value="ktc">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โอนเงินผ่านบัญชีธนาคารกสิกร -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <label><img class="mr-2" style="weight:100px;" src="{{asset('home/logo/kbank.svg') }}"/></label>
                                <label><h1 style="color:#000;font-weight:800;">ธนาคารกสิกรไทย</h1></label>
                                <h1 style="color:#000;font-weight:800;">000-0000-0000</h1>
                                <label><p style="color:#000;">จำนวนเงินที่ต้องชำระ</p></label>
                                <label><input class="input2 ml-3 p text-center" type="number" id="kbankM" readonly></label>
                                <p style="margin:0;"> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</p>
                                <p style="color:#ce0005;margin:0;">*รอการยืนยันภายใน 48 ชั่วโมง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit">
                                <p style="margin:0;">บันทึก</p>
                                <input type="hidden" name="transferAmount" id="kbank">
                                <input type="hidden" name="transferฺBank_name" value="kbank">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โอนเงินผ่านบัญชีธนาคาร SCB -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right mt-3 mr-3">
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row ">
                    <div class="col-12">
                        <div class="row mx-2">
                            <div class="col-12 text-center">
                                <label><img class="mr-2" style="weight:100px;" src="{{asset('home/logo/scb.svg') }}"/></label>
                                <label><h1 style="color:#000;font-weight:800;">ธนาคารไทยพาณิชย์</h1></label>
                                <h1 style="color:#000;font-weight:800;">000-0000-0000</h1>
                                <label><p style="color:#000;">จำนวนเงินที่ต้องชำระ</p></label>
                                <label><input class="input2 ml-3 p text-center" type="number" id="scbM" readonly></label>
                                <p style="margin:0;"> กรุณาทำการชำระเงินภายใน 48 ชม.</br>มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกโดยอัตโนมัติ</p>
                                <p style="color:#ce0005;margin:0;">*รอการยืนยันภายใน 48 ชั่วโมง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('transferPayment') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button class="btn-submit">
                                <p style="margin:0;">บันทึก</p>
                                <input type="hidden" name="transferAmount" id="scb">
                                <input type="hidden" name="transferฺBank_name" value="scb">
                                <input type="hidden" name="submit" value="submit">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- QR -->
@if(isset($payment))
    @foreach($payment as $qrPayment)
        <div class="modal fade" id="{{ $qrPayment->invoice }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-1"></div>
                        <div class="col-10 text-center">
                            <p style="margin:0;font-weight:800;">iBanking / Mobile Banking</div> 
                        <div class="col-1 text-cente">
                            <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;"></i></button>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="row px-3">
                            <div class="col-12 pb-1 bg-bank text-center">
                                <div class="my-2"><img style="width:50px;" src="{{asset('icon/waiting.svg') }}" /></div>
                                <p style="margin:0;font-weight:800;">กำลังรอชำระเงิน</br>ผ่านโมบายแบงค์กิ้ง/ไอแบงค์กิ้ง</p>
                                <p class="mb-2" style="margin:0;">
                                    กรุณาทำการชำระเงินผ่านโมบายแบงค์กิ้งหรือเอทีเอ็มภายใน 48 ชม.</br>
                                    มิเช่นนั้นคำร้องของคุณจะถูกยกเลิกอัตโนมัติ
                                </p>
                                <div class="row justify-content-center mb-2">{!! DNS2D::getBarcodeHTML($qrPayment->rawQrCode, "QRCODE",6,6) !!}</div>
                                <h5 style="margin:0;color:#ff6f6f;">ควรชำระเงินก่อน 10/05/2563 เวลา 10:09</h5>
                            </div>
                        </div>

                        <div class="row px-3 mt-3">
                            <div class="col-12 bg-bank">
                                <div class="row">
                                    <div class="col-12 " style="border-bottom: 1px solid #fff;">
                                        <img style="width:25px;" src="{{asset('home/logo/scb.svg') }}" />
                                        <label><p style="margin:0;">หมายเลขบัญชี</p></label>
                                        <input type='text' id="copy-text" value="1234567890" class="input3 p mt-2" style="font-weight:800;">
                                        <button class="btnNone" style="float:right;" onClick="copyToClipboard()">
                                            <p style="color:#ff6f6f;cursor:pointer;padding-top:8px;margin:0;">คัดลอก</p>
                                        </button>
                                    </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 " style="border-bottom: 1px solid #fff;">
                                    <label><p style="margin:0;padding-left:30px;">หมายเลขคำร้อง</p></label>
                                    <input type='text' id="copy-text" value="12345678900000" class="input3 p mt-2" style="font-weight:800;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="border-bottom: 1px solid #fff;">
                                        <label><p style="margin:0;padding:8px 0 0 30px;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></label>
                                        <label style="float:right;"><p style="color:#23c197;cursor:pointer;padding-top:5px;margin:0;">{{ $qrPayment->amount }} ฿</p></label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
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
function copyToClipboard() {

var inputElement=document.getElementById('copy-text');
inputElement.select();
document.execCommand('copy');
//   alert("Copied to clipboard");

}
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script> /* รูป */
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
    const myFunction = () => {
    document.getElementById("first").style.display ='block';
    document.getElementById("second").style.display ='none';
    }
    const myFunction2 = () => {
    document.getElementById("first").style.display ='none';
    document.getElementById("second").style.display ='block';
    }
    const myFunction3 = () => {
    document.getElementById("first").style.display ='none';
    document.getElementById("second").style.display ='none';
    }
</script>


<script>
      function getCodeBoxElement(index) {
        return document.getElementById('Box' + index);
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