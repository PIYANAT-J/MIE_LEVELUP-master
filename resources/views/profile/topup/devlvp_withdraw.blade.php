@extends('layout.dev_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{route('DevWithdraw')}}">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
    @include('profile.sidebar.dev_sidebar')

    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-10 col-md-10 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;" > 
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class=" col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-5">
                        <div class="row">
                            <div class="col-12 pb-2 mb-2" style="border-bottom: 1px solid #f2f2f2;">
                                <h1 class="fontHeader">ถอนเงิน</h1>
                            </div>
                        </div>

                        <div class="row bg-topup ml-0 mb-2 mt-1">
                            <div class="col-8  text-left" style="padding:0;">
                                <h1 style="color:#ffffff;font-weight:500;margin:0;">ยอดเงินในวอลเล็ท<h1>
                            </div>
                            <div class="col-4 text-right" style="padding:0;">
                                <h1 style="color:#ffffff;font-weight:500;;margin:0;">฿ {{ $wallet }}</h1>
                            </div>
                        </div>

                        <div class="mt-3"><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องการถอน (ขั้นต่ำ  ฿100 )</p></div>
                        <div class="input-group mb-3 input-topup">
                            <div class="input-group-prepend">
                                <span class="input-group-text money_icon">
                                    <h3 style="margin:0;font-weight: 800;color:#000;">฿</h3>
                                </span>
                            </div>
                            <input type="text" class="form-control money h6" style="margin:0;font-weight: 800;color:#000; id="amount" name="amount" value="{{ old('amount') }}" require>
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
                        <div class="row mb-2 d-flex bd-highlight">
                            <label class="mb-1 ml-3 bd-highlight"><p style="margin:0;font-weight:800;">ช่องทางการรับเงิน</p></label>
                            @if(isset($bank))
                                <label class="ml-auto mr-3 bd-highlight" data-toggle="modal" data-target="#BankAccount">
                                    <p style="color:#0061fc;text-decoration:underline;cursor:pointer;float: right;margin:0;">เปลี่ยนบัญชีธนาคารของฉัน</p>
                                </label >
                            @else
                                <label class="ml-auto mr-3 bd-highlight" data-toggle="modal" data-target="#BankAccount">
                                    <p style="color:#0061fc;text-decoration:underline;cursor:pointer;float: right;margin:0;">เพิ่มบัญชีธนาคารของฉัน</p>
                                </label >
                            @endif
                        </div>
                        @if(isset($bank))
                            <div class="row">
                                <div class="col-12">
                                    <div class="custom02">
                                        <div class="row mb-2 mt-2">
                                            <!-- <div class="col-1 mb-2">
                                                <input type="radio" class="message_pri" id="radio01" name="web" value="1" /><label for="radio01"></label>
                                            </div> -->
                                            <img class="mx-3" style="width: 33px;" src="{{asset('home/logo/'.$bank->bankName.'.svg') }}" />
                                                @if($bank->bankName == "scb")
                                                    <p style="color:#000;margin:0;font-weight:800;">ธนาคารไทยพาณิชย์  {{ $bank->accountNumber }}</p>
                                                @elseif($bank->bankName == "ktc")
                                                    <p style="color:#000;margin:0;font-weight:800;">ธนาคารกรุงไทย  {{ $bank->accountNumber }}</p>
                                                @elseif($bank->bankName == "kbank")
                                                    <p style="color:#000;margin:0;font-weight:800;">ธนาคารกสิกร  {{ $bank->accountNumber }}</p>
                                                @elseif($bank->bankName == "bangkok")
                                                    <p style="color:#000;margin:0;font-weight:800;">ธนาคารกรุงเทพ  {{ $bank->accountNumber }}</p>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($wallet >= 100 )
                                <form action="{{ route('AddWithdraw') }}" method="post">
                                    @csrf
                                    <button class="btn-submit mt-5">
                                        <p style="margin:0;">ถอนเงิน</p>
                                    </button>
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
                                            <p style="color:#a8a8a8;margin:0;">
                                                ไม่มีบัญชีธนาคาร
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-5">
                        <div class="row">
                            <div class="col-12 pb-2 mb-2" style="border-bottom: 1px solid #f2f2f2;">
                                <h1 class="fontHeader">ประวัติการถอนเงิน</h1>
                            </div>
                        </div>
                        <div class="row row5">
                            <div class="col-12">
                                @if(isset($withdraw))
                                    @foreach($withdraw as $withdrawList)
                                        @if($withdrawList->withdrawStatus == "รอการอนุมัติ")
                                            <div class="row bg-bank ml-0 mb-2 py-2">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label><img class="mr-2" src="{{asset('home/logo/'.$withdrawList->withdrawฺBank_name.'.svg') }}" /></label>
                                                            <label><p style="color:#000;margin:0;">ธนาคารกสิกร</p></label>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <p class="fontWithdraw">-{{ $withdrawList->withdrawAmount }} ฿</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p style="color:#000;margin:0;">หมายเลขคำร้อง</p>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <p style="color:#000;margin:0;font-weight:800;">{{ $withdrawList->withdrawInvoice }}</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-12 text-right mt-2">
                                                            <button class="btn-topup-wait">
                                                                <p style="margin:0;">รอการอนุมัติ</p>
                                                            </button>
                                                        </div> 
                                                    </div>
                                                </div> 
                                            </div>
                                        @elseif($withdrawList->withdrawStatus == "อนุมัติแล้ว")
                                            <div class="row bg-bank ml-0 mb-2 py-2">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label><img class="mr-2" src="{{asset('home/logo/'.$withdrawList->withdrawฺBank_name.'.svg') }}" /></label>
                                                            <label><p style="color:#000;margin:0;">ธนาคารกสิกร</p></label>
                                                        </div>
                                                        <div class="col-6  text-right">
                                                            <p class="fontWithdraw">-{{ $withdrawList->withdrawAmount }} ฿</p>
                                                        </div> 
                                                    </div>
                                                    <div class="row" style="height:30px;">
                                                        <div class="col-6">
                                                            <p style="color:#000;margin:0;">หมายเลขคำร้อง</p>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <p style="color:#000;margin:0;font-weight:800;">{{ $withdrawList->withdrawInvoice }}<p>
                                                        </div> 
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-6">
                                                            <p style="color:#000;margin:0;">วันที่อนุมัติ</p>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <p style="margin:0;">15:47 17/06/63</p>
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
        </div>
    <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
</div>

<div class="modal fade" id="BankAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title"  style="color: #000;" id="exampleModalLabel">เพิ่มธนาคารของฉัน</h1>
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>
            <form action="{{ route('AddBank') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ธนาคาร</p>
                                <select class="MySelect p pl-2" name="bankName" value="{{ old('bankName') }}" require>
                                    <option>เลือกธนาคาร</option>
                                    <option name="bankName" value="kbank">ธนาคารกสิกร</option>
                                    <option name="bankName" value="bangkok">ธนาคารกรุงเทพ</option>
                                    <option name="bankName" value="scb">ธนาคารไทยพาณิชย์</option>
                                    <option name="bankName" value="ktc">ธนาคารกรุงไทย</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อบัญชี</p>
                                <input type="text" name="accountName" value="{{ old('accountName') }}" class="input1 p ml-2" require></input>
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">หมายเลขบัญชีธนาคาร</p>
                                <input type="text"  name="accountNumber" value="{{ old('accountNumber') }}" class="input1 p ml-2"  require  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></input>
                            </label>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ประเภทบัญชี</p>
                                <select class="MySelect p pl-2" name="accountType" value="{{ old('accountType') }}" require>
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
                        <div class="col-12">
                            <label class="bgInput field-wrap my-2">
                                <p class="fontHeadInput">สาขา</p>
                                <input type="text" name="accountBranch" value="{{ old('accountBranch') }}" class="input1 p ml-2"></input>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn-submit-red">
                        <p style="margin:0;">ยืนยัน</p>
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