@extends('layout.profile')

@section('update_button')

    @if(Auth::user()->updateData == 'true')
        @if(Auth::user()->users_type == 2)
            <a href="{{route('UpDate')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @elseif(Auth::user()->users_type == 3)
            <a href="{{route('SponUpDate')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @else
            <a href="{{route('EditProfile')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @endif
    @else
        @if(Auth::user()->users_type == 2)
            <a href="{{route('UpDate')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @elseif(Auth::user()->users_type == 3)
            <a href="{{route('SponUpDate')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @else
            <a href="{{route('EditProfile')}}" class="btn bgroup">
                <div class="row">
                    <div>
                        <i class="material-icons pl-1">edit</i>
                    </div>
                    <div class="col pr-1" align="right ">Update Profile</div>
                </div>        
            </a>
        @endif
    @endif

@endsection

@section('kyc')
<form action="{{ route('CreateKyc') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">   
    <div id="change-password">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-sm-5 font mb-4 mt-3" >การยืนยันตัวตน (KYC : Knows Your Customer)</div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-7 ml-3" ><b>วิธีการยืนยันตัวตน</b></div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-7 ml-3  mr-3 " >
                        1.ใช้กระดาษ A4 จำนวน 1 แผ่น ภ่านรูปท่านพร้อมบัตรประชาชน หรือหนังสือเดินทาง ระบุว่า "ใช้สำหรับสมัคร LevelUP"</br>
                        2. ลงวันที่ที่ท่านยืนยันตัวตน</br>
                        3. เซ็นกำกับ ด้วยลายมือของท่าน </br>
                        4. อัพโหลดรูปภาพ
                    </div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-7 ml-3 mt-4" ><b>ข้อควรรู้</b></div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-7 ml-3 mr-3" >
                        - รูปต้องไม่มีอะไรบัง เห็นได้ชัดเจน </br>
                        - หรือบัตรประชาชน หรือหนังสือเดินทาง ให้เห็นข้อมูลได้อย่างชัดเจนไม่บดบังรายละเอียดบนบัตร </br>
                        - กระดาษที่เขียนต้องอ่านออกได้ชัดเจน </br>
                    </div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-5 font3 mt-3 ml-3 mr-3 mb-5">
                        <div class="mt-3">
                            <div class="input-group mb-3"> 
                                <div class="custom-file">
                                    <!-- <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" align="left" for="inputGroupFile01">เลือกรูปภาพ</label> -->
                                    <!-- <img id="preview" class="img-thumbnail" src="{{asset('home/imgProfile/No_Img.jpg') }}" alt="{{ old('SPON_IMG') }}" width="150" height="150"> -->
                                    <input onchange="readURL(this)" type="file" class="form-control-file @error('KYC_IMG') is-invalid @enderror" id="KYC_IMG" name="KYC_IMG" alt="{{ old('SPON_IMG') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="w-100"></div>
                    <div class="col-sm-5 b1">
                        <div class="mt-4" align="center">
                            <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                            <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                            <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                            <button class="bnt button2">ยกเลิก</button>
                            <!-- <h1>{{ date('Y-m-d H:i:s A') }}</h1> -->
                        </div>    
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection