@extends('layout.profile')

@section('update_button')

    @if(Auth::user()->updateData == 'true')
            <a href="{{route('EditProfile')}}" class="btn bgroup">
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

@endsection

@section('kyc')
    <form action="{{ route('CreateKyc') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach($guest_user as $kyc)
            @if(Auth::user()->id == $kyc->USER_ID)
                @if($kyc->KYC_STATUS == 'รออนุมัติ')
                    <div class="row">   
                        <div id="change-password">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-5 font mb-4 mt-3" >การยืนยันตัวตน (KYC : Knows Your Customer)</div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>


                                        <div class="col"></div> <!--สถานะ -->
                                        <div class="col-sm-5 mb-3">
                                            <div align="center">
                                                <button  class="bnt wait-approve">รอการอนุมัติ</button>
                                            </div>    
                                        </div>

                                        <div class="col"></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div> <!-- แสดงเมื่อมีสถานะ รอการอนุมัติ และไม่ผ่านการอนุมัติ -->
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
                                            - กระดาษที่เขียนต้องอ่านออกได้ชัดเจน </br></br>
                                            <img src="{{asset('home/Kyc/kyc.png') }}" >
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <!-- <div class="col"></div>
                                        <div class="col-sm-7 ml-3 mr-3" >
                                            <img src="home/images/kyc.png">
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($kyc->KYC_STATUS == 'อนุมัติ')
                    <div class="row">   
                        <div id="change-password">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-5 font mb-4 mt-3" >การยืนยันตัวตน (KYC : Knows Your Customer)</div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>


                                        <div class="col"></div> <!--สถานะ -->
                                        <div class="col-sm-5 mb-3">
                                            <div align="center">
                                                <button  class="bnt approve">ผ่านการอนุมัติ</button>
                                            </div>    
                                        </div>

                                        <div class="col"></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div> <!--แสดงเมื่อมีสถานะ ผ่านการอนุมัติ -->
                                        <div class="col-sm-7 ml-3" ><b>รายละเอียดการใช้งาน</b></div>
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
                                            - กระดาษที่เขียนต้องอ่านออกได้ชัดเจน </br></br>
                                            <img src="{{asset('home/Kyc/kyc.png') }}" >
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <!-- <div class="col"></div>
                                        <div class="col-sm-7 ml-3 mr-3" >
                                            <img src="home/images/kyc.png">
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($kyc->KYC_STATUS == 'ไม่อนุมัติ')
                    <div class="row">   
                        <div id="change-password">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-5 font mb-4 mt-3" >การยืนยันตัวตน (KYC : Knows Your Customer)</div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>


                                        <div class="col"></div> <!--สถานะ -->
                                        <div class="col-sm-5 mb-3">
                                            <div align="center">
                                                <button  class="bnt non-approve">ไม่ผ่านการอนุมัติ</button>
                                            </div>    
                                        </div>

                                        <div class="col"></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div> <!--แสดงเมื่อมีสถานะ ผ่านการอนุมัติ -->
                                        <div class="col-sm-7 ml-3" ><b>รายละเอียดการใช้งาน</b></div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div> <!-- แสดงเมื่อมีสถานะ รอการอนุมัติ และไม่ผ่านการอนุมัติ -->
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
                                            - กระดาษที่เขียนต้องอ่านออกได้ชัดเจน </br></br>
                                            <img src="{{asset('home/Kyc/kyc.png') }}" >
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-7 ml-3 mr-3" >
                                            <img src="home/images/kyc.png">
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 mx-3">
                                            <div class="mt-4">
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

                                        <div class="col"></div>
                                        <div class="col-sm-5">
                                            <div align="center" class="mt-3">
                                                <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                                                <input type="hidden" name="KYC_STATUS" value="รออนุมัติ">
                                                <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                <input type="hidden" name="users_type" value="{{ Auth::user()->users_type }}">
                                                <button class="bnt button2">ยกเลิก</button>
                                            </div>    
                                        </div>
                                        <div class="col"></div>
                                        <div class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
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
                                        <div class="w-100"></div>

                                        <div class="col"></div> <!-- แสดงเมื่อมีสถานะ รอการอนุมัติ และไม่ผ่านการอนุมัติ -->
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
                                            - กระดาษที่เขียนต้องอ่านออกได้ชัดเจน </br></br>
                                            <img src="{{asset('home/Kyc/kyc.png') }}" >
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 mx-3">
                                            <div class="mt-4">
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

                                        <div class="col"></div>
                                        <div class="col-sm-5">
                                            <div align="center" class="mt-3">
                                                <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                                                <input type="hidden" name="KYC_STATUS" value="รออนุมัติ">
                                                <input type="hidden" name="KYC_CREATE_DATE" value="{{ date('Y-m-d H:i:s') }}">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                                                <input type="hidden" name="users_type" value="{{ Auth::user()->users_type }}">
                                                <button class="bnt button2">ยกเลิก</button>
                                            </div>    
                                        </div>
                                        <div class="col"></div>
                                        <div class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </form>

@endsection