@extends('layout.profile')
@section('update_button')
    @if(Auth::user()->updateData == 'true')
        <a href="{{route('SponUpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @else
        <a href="{{route('SponUpDate')}}" class="btn bgroup">
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
        @foreach($sponsor as $SPON)
            @if($SPON->USER_ID == Auth::user()->id)
                <form action="{{ route('SponEditProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div id="update-profile">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-5 font mt-3">แก้ไขข้อมูลส่วนตัว</div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-4">
                                                <input name="SPON_ID_CARD" type="text" class="form-control textbox1" placeholder="เลขบัตรประชาชน" value="{{ $SPON->SPON_ID_CARD }}" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required>
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                <input name="SPON_TEL" type="text" class="form-control textbox1 " placeholder="เบอร์โทรศัพท์" value="{{ $SPON->SPON_TEL }}" pattern="[0-9]{10}" title="กรอกตัวเลขเท่านั้น" required>
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>


                                        <div class="col "></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                <input id="SPON_BIRTHDAY" name="SPON_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="วัน เดือน ปีเกิด" value="{{ $SPON->SPON_BIRTHDAY }}" title="">
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                <input name="SPON_AGE" type="text" class="form-control textbox1 " placeholder="อายุ" value="{{ $SPON->SPON_AGE }}">
                                            </div>
                                        </div>
                                        <div class="col "></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 ml-3 mr-3">
                                            <div class="mt-3">
                                                <select class="custom-select textbox1" id="inputGroupSelect01" name="SPON_GENDER" value="{{ $SPON->SPON_GENDER }}">
                                                    <option name="SPON_GENDER" value="{{ $SPON->SPON_GENDER }}" selected>เลือก</option>
                                                    <option name="SPON_GENDER" value="Men">ชาย</option>
                                                    <option name="SPON_GENDER" value="Women">หญิง</option>
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
                                                        <div class="col">
                                                            <img id="preview" class="img-thumbnail" src="{{asset('home/imgProfile/'.$SPON->SPON_IMG) }}" alt="{{ $SPON->SPON_IMG }}" width="150" height="150">
                                                            <input onchange="readURL(this)" type="file" class="form-control-file @error('SPON_IMG') is-invalid @enderror" id="SPON_IMG" name="SPON_IMG">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col"></div>
                                        <div class="w-100"></div>

                                        <div class="col"></div>
                                        <div class="col-sm-5 b1">
                                            <div class="mt-4" align="center">
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
        <form action="{{ route('SponEditProfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div id="update-profile">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-5 font mt-3">แก้ไขข้อมูลส่วนตัว</div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-4">
                                        <input name="SPON_ID_CARD" type="text" class="form-control textbox1" placeholder="เลขบัตรประชาชน" value="{{ old('SPON_ID_CARD') }}" pattern="[0-9]{13}" title="กรอกตัวเลขเท่านั้น" required>
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input name="SPON_TEL" type="text" class="form-control textbox1 " placeholder="เบอร์โทรศัพท์" value="{{ old('SPON_TEL') }}" pattern="[0-9]{10}" title="กรอกตัวเลขเท่านั้น" required>
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>


                                <div class="col "></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input id="SPON_BIRTHDAY" name="SPON_BIRTHDAY" type="text" class="form-control textbox1 " placeholder="วัน เดือน ปีเกิด" value="{{ old('SPON_BIRTHDAY') }}" title="">
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <input name="SPON_AGE" type="text" class="form-control textbox1 " placeholder="อายุ" value="{{ old('SPON_AGE') }}">
                                    </div>
                                </div>
                                <div class="col "></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 ml-3 mr-3">
                                    <div class="mt-3">
                                        <select class="custom-select textbox1" id="inputGroupSelect01" name="SPON_GENDER" value="{{ old('SPON_GENDER') }}" required>
                                            <option name="SPON_GENDER" selected>เลือก</option>
                                            <option name="SPON_GENDER" value="Men">ชาย</option>
                                            <option name="SPON_GENDER" value="Women">หญิง</option>
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
                                                <div class="col">
                                                    <img id="preview" class="img-thumbnail" src="{{asset('home/imgProfile/No_Img.jpg') }}" alt="{{ old('SPON_IMG') }}" width="150" height="150">
                                                    <input onchange="readURL(this)" type="file" class="form-control-file @error('SPON_IMG') is-invalid @enderror" id="SPON_IMG" name="SPON_IMG">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="w-100"></div>

                                <div class="col"></div>
                                <div class="col-sm-5 b1">
                                    <div class="mt-4" align="center">
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
        var date_input=$('input[name="SPON_BIRTHDAY"]'); //our date input has the name "date"
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