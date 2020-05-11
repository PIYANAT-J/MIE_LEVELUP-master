@extends('layout.profile')

@section('update_button')

<a href="/update_profile" class="btn bgroup">
    <div class="row">
        <div>
            <i class="material-icons pl-1">edit</i>
        </div>
        <div class="col pr-1" align="right ">Update Profile</div>
    </div>        
</a>

@endsection

@section('kyc')

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
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" align="left" for="inputGroupFile01">เลือกรูปภาพ</label>
                                </div>
                            </div>
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

@endsection