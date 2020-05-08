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

@section('change_password')
<!-- change password -->
<div class="row">   
    <div id="change-password">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-sm-5 font mt-3">เปลี่ยนรหัสผ่าน</div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-5 font3 b1">
                        <div class="mt-4">  <!-- input-group -->
                                <!-- <div class="input-group-prepend ">
                                    <span class="input-group-text btn2"> <i class="material-icons">recent_actors</i></span>
                                </div> -->

                                <input type="text" class="form-control textbox1" placeholder="รหัสปัจจุบัน" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required/>
                        </div>
                    </div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-5 font3 b1">
                        <div class="mt-3">
                                <!-- <div class="input-group-prepend ">
                                    <span class="input-group-text btn2"> <i class="material-icons">local_phone</i></span>
                                </div> -->

                                <input type="text" class="form-control textbox1 " placeholder="รหัสผ่านใหม่" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required/>
                        </div>
                    </div>
                    <div class="col "></div>
                    <div class="w-100"></div>


                    <div class="col"></div>
                    <div class="col-sm-5 font3 b1">
                        <div class="mt-3">
                                <!-- <div class="input-group-prepend ">
                                    <span class="input-group-text btn2"> <i class="material-icons">date_range</i></span>
                                </div> -->

                                <input type="text" class="form-control textbox1 " placeholder="ยืนยันรหัสผ่านใหม่" pattern="[0-9]{13}" title="" required/>
                        </div>
                    </div>
                    <div class="col "></div>
                    <div class="w-100"></div>

                    <div class="col"></div>
                    <div class="col-sm-5 b1">
                        <div class="mt-4" align="center">
                            <button type="submit" class="bnt button1">บันทึก</button>
                            <button type="submit" class="bnt button2">ยกเลิก</button>
                        </div>    
                    </div>
                    <div class="col"></div>
                    <div class="w-100"></div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection