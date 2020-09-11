@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/sponsor_management">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-9" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-12"><h1 class="fontHeader">ข้อมูลการยืนยันตัวตนผู้สนับสนุน<h1></div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#user1">ทั้งหมด</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#user2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#user3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#user4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                
                                <div id="user1" class="tab-pane active">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                        <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($kyc as $Kyc)
                                                @if($Kyc->KYC_STATUS != null)
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                                <label class="status-wait-approve " data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">
                                                                    <h5 style="margin:0;">รอการตรวจสอบ</h5>
                                                                </label>
                                                            @elseif($Kyc->KYC_STATUS == "อนุมัติ")
                                                                <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">
                                                                    <h5 style="margin:0;">อนุมัติแล้ว</h5>
                                                                </label>
                                                            @elseif($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                                <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">
                                                                    <h5 style="margin:0;">ไม่ผ่านการอนุมัติ</h5>
                                                                </label>
                                                            @endif
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                        
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="user2" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                        <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($kyc as $Kyc)
                                                @if($Kyc->KYC_STATUS == "รออนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$Kyc->KYC_ID}}">
                                                            <h5 style="margin:0;">รอการตรวจสอบ</h5></label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="user3" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                        <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($kyc as $Kyc)
                                                @if($Kyc->KYC_STATUS == "ไม่อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$Kyc->KYC_ID}}">
                                                            <h5 style="margin:0;">ไม่ผ่านการอนุมัติ</h5></label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="user4" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 text-left p">ชื่อ-นามสกุล</div>
                                        <div class="col-2 py-3 th1 text-left p">อีเมล</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-1 py-3 th1 p">ผู้อนุมัติ</div>
                                        <div class="col-2 py-3 th1 p">วันที่ยืนยัน</div>
                                        <div class="col-2 py-3 th1 p">ว้นที่อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <?php $i = 1; ?>
                                            @foreach($kyc as $Kyc)
                                                @if($Kyc->KYC_STATUS == "อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->name}}-{{$Kyc->surname}}</div>
                                                        <div class="col-2 py-1 td1 text-left p">{{$Kyc->email}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$Kyc->KYC_ID}}">
                                                                <h5 style="margin:0;">อนุมัติแล้ว</h5>
                                                            </label>
                                                        </div>
                                                        <div class="col-1 py-1 td1 p">{{ $Kyc->ADMIN_NAME }}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_CREATE_DATE)[0]}}</div>
                                                        <div class="col-2 py-1 td1 p">{{explode(' ',$Kyc->KYC_APPROVE_DATE)[0]}}</div>
                                                    </div>
                                                    <?php $i = $i+1; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($kyc as $KycModel)
<div class="modal fade" id="pendingApprove{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1 text-center">
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
                        </div>
                    </div>
                    
                    <div class="col-6 pb-1">
                        <form action="{{ route('AppKyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="userKYC" class="custom02">
                                <div data-toggle="modal">
                                    <input type="radio" name="KYC_STATUS" value="อนุมัติ" id="approve">
                                    <label for="approve"><p style="color:#000;margin:0;">อนุมัติ</p></label>
                                </div>
                                <div>
                                    <input type="radio" name="KYC_STATUS" value="ไม่อนุมัติ" id="noneApprove">
                                    <label for="noneApprove"><p style="color:#000;margin:0;">ไม่อนุมัติ</p></label>
                                </div>
                            
                            
                                <div class="noneApprovelist">
                                    <div for="noneApprovelabel"><p class="mt-2" style="color:#000;margin:0;height:15px;">หมายเหตุ</p></div>
                                    <div name="noneApprovediv" form="userKYC">
                                        <textarea class="input-update p" placeholder="รายละเอียด" row="3"  require></textarea>
                                    </div>
                                </div>
                            </div>
                                <button name="submit" value="submit" class="btn-submit-red">
                                    <p style="color:#ffffff;margin:0;">ยืนยัน</p>
                                </button>
                                <input type="hidden" name="KYC_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="KYC_ID" value="{{ $KycModel->KYC_ID }}">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
                          <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1 text-center">
                        <div class="row"><label class="status-approve" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-6 pb-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$KycModel->KYC_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="color:#000;margin:0;">การยืนยันตัวตน</h1></div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3">
                    <div class="col-6 pb-1 text-center">
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="บัตรประจำตัวประชาชน" value="{{$KycModel->KYC_ID_CARD}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="ชื่อ" value="{{$KycModel->name}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="นามสกุล" value="{{$KycModel->surname}}" disabled></input></div>
                        </div>
                        <div class="row bg-disabled mb-2 py-2">
                            <div class="col-12"><input type="text" class="input-disable p" placeholder="อีเมล" value="{{$KycModel->email}}" disabled></input></div>
                        </div>
                    </div>
                    <div class="col-6 pb-1">
                        <label class="status-none-approve p" style="text-align:center;">ไม่ผ่านการอนุมัติ</label>
                        <div class="row bg-disabled mx-0 pt-2 pb-1">
                            <div class="col-12">
                                <p style="color:#757589;margin:0;">หมายเหตุ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-1 text-center">
                        <img style="width:70%;" src="{{asset('home/Kyc/'.$KycModel->KYC_IMG) }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<!-- พื้นหลัง -->
<div class="container-fluid">
    <div class="row">
        <div class="col-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-9 bgContent"></div>
    </div>
</div>
@endsection

@section('script')

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
$(document).ready(function() {
  $('.noneApprovelist').hide();
  $('input:radio[name="KYC_STATUS"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'ไม่อนุมัติ')
	{
    $('.noneApprovelist').show();
		}
   else {
    $('.noneApprovelist').hide();
   }
	}
);
}
);
</script>
@endsection