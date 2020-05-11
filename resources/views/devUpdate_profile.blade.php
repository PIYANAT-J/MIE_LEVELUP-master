@extends('layout.profile')
@section('update_button')
    @if(Auth::user()->updateData == 'true')
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @else
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @endif
@endsection

@section('update_profile')

<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<style>
.bootstrap-iso 
.formden_header h2, 
.bootstrap-iso 
.formden_header p, 
.bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}
.bootstrap-iso form button, 
.bootstrap-iso form button:hover{color: white !important;} 
.asteriskField{color: red;}</style>

    <!-- update profile -->
    @if(Auth::user()->updateData == 'true')
        @foreach($developer as $DEV)
            @if($DEV->USER_ID == Auth::user()->id)
                <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div id="update-profile">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-5 main-title mt-3">แก้ไขข้อมูลส่วนตัว</div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-4">  <!-- input-group -->
                                                    <!-- <div class="input-group-prepend ">
                                                        <span class="input-group-text btn2"> <i class="material-icons">recent_actors</i></span>
                                                    </div> -->

                                                <!-- <input type="text" class="form-control textbox1" placeholder="เลขบัตรประชาชน" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required/> -->
                                                <input name="DEV_ID_CARD" type="text" class="form-control textbox1" placeholder="เลขบัตรประชาชน" value="{{ $DEV->DEV_ID_CARD }}" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required>
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                    <!-- <div class="input-group-prepend ">
                                                        <span class="input-group-text btn2"> <i class="material-icons">local_phone</i></span>
                                                    </div> -->

                                                <!-- <input type="text" class="form-control textbox1 " placeholder="เบอร์โทรศัพท์" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required/> -->
                                                <input name="DEV_TEL" type="text" class="form-control textbox1 " placeholder="เบอร์โทรศัพท์" value="{{ $DEV->DEV_TEL }}" pattern="[0-9]{10}" title="กรอกตัวเลขเท่านั้น" required>
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>


                                        <div class="col "></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                    <!-- <div class="input-group-prepend ">
                                                        <span class="input-group-text btn2"> <i class="material-icons">date_range</i></span>
                                                    </div> -->

                                                <!-- <input class="form-control textbox1 " id="date1" name="date1" placeholder="วัน เดือน ปีเกิด" type="text"/>         -->
                                                <input id="DEV_BIRTHDAY" name="DEV_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="วัน เดือน ปีเกิด" value="{{ $DEV->DEV_BIRTHDAY }}" title="">
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                    <!-- <div class="input-group-prepend ">
                                                        <span class="input-group-text btn2"> <i class="material-icons">date_range</i></span>
                                                    </div> -->
                                                <input name="DEV_AGE" type="text" class="form-control textbox1 " placeholder="อายุ" value="{{ $DEV->DEV_AGE }}">
                                                <!-- <input type="text" class="form-control textbox1 " placeholder="อายุ"/> -->
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                    <!-- <div class="input-group-prepend ">
                                                        <span class="input-group-text btn2"> <i class="material-icons">date_range</i></span>
                                                    </div> -->

                                                <select class="custom-select textbox1" id="inputGroupSelect01" name="DEV_GENDER" value="{{ $DEV->DEV_GENDER }}">
                                                    <option name="DEV_GENDER" value="{{ $DEV->DEV_GENDER }}" selected>เลือก</option>
                                                    <option name="DEV_GENDER" value="Men">ชาย</option>
                                                    <option name="DEV_GENDER" value="Women">หญิง</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col"></div>
                                        <div class="w-100"></div>


                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                <div class="input-group mb-3">
                                                    <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div> -->

                                                    <!-- <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" align="left" for="inputGroupFile01">เลือกรูปภาพ</label>
                                                    </div> -->

                                                    <div class="row form-group">
                                                        <!-- <div class="col"> -->
                                                            <input onchange="readURL(this)" type="file" class="form-control-file @error('DEV_IMG') is-invalid @enderror" id="DEV_IMG" name="DEV_IMG">
                                                            <img id="preview" class="img-thumbnail ml-4" src="{{asset('home/imgProfile/'.$DEV->DEV_IMG) }}" alt="{{ $DEV->DEV_IMG }}" width="150" height="150">
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col"></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ">
                                            <div align="center">
                                                <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                                                <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">

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
                </form>
            @endif
        @endforeach
    @else
        <form action="{{ route('DevEditProfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div id="update-profile">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-5 main-title mt-3">แก้ไขข้อมูลส่วนตัว</div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-4"><input name="DEV_ID_CARD" type="text" class="form-control textbox1" placeholder="เลขบัตรประชาชน" value="{{ old('DEV_ID_CARD') }}" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required>
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input name="DEV_TEL" type="text" class="form-control textbox1 " placeholder="เบอร์โทรศัพท์" value="{{ old('DEV_TEL') }}" pattern="[0-9]{10}" title="กรอกตัวเลขเท่านั้น" required>
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>


                                <div class="col "></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input id="DEV_BIRTHDAY" name="DEV_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="YYYY-MM-DD" value="{{ old('DEV_BIRTHDAY') }}" title="">
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input name="DEV_AGE" type="text" class="form-control textbox1 " placeholder="อายุ" value="{{ old('DEV_AGE') }}">
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <select class="custom-select textbox1" id="inputGroupSelect01" name="DEV_GENDER" value="{{ old('DEV_GENDER') }}" required>
                                            <option name="DEV_GENDER" value="Select" selected>เลือก</option>
                                            <option name="DEV_GENDER" value="Men">ชาย</option>
                                            <option name="DEV_GENDER" value="Women">หญิง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="w-100"></div>


                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <div class="input-group mb-3">
                                            <div class="row form-group">
                                                <!-- <div class="col"> -->
                                                    <input onchange="readURL(this)" type="file" class="form-control-file @error('DEV_IMG') is-invalid @enderror" id="DEV_IMG" name="DEV_IMG">
                                                    <img id="preview" class="img-thumbnail ml-4" src="{{asset('home/imgProfile/No_Img.jpg') }}" alt="{{ old('DEV_IMG') }}" width="150" height="150">
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ">
                                    <div align="center">
                                        <input name="submit" id="submit" type="submit" class="bnt button1" value="บันทึก">
                                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">

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
        </form>
    @endif

@endsection


@section('script')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="DEV_BIRTHDAY1"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
@endsection