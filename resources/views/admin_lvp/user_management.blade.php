@extends('admin_lvp.admin_lvp')

@section('user_managemant') 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9 mt-3 bg text1">ตารางจัดการผู้ใช้</div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($GAME as $games)
                <tr>
                    <td><img src="{{asset('section/File_game/Profile_game/'.$games->GAME_IMG_PROFILE)}}" alt="Image"class="game-img" ></td>
                    <td>{{ $games->GAME_NAME }}</td>
                    <td>{{ $games->GAME_DATE }}</td>
                    <td>{{ $games->GAME_STATUS }}</td>
                    <td>
                        <form action="{{ route('AppGame') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col mt-4" align="center">
                                <input name="submit" id="submit" type="submit" class="bnt button1" value="อนุมัติ">
                                <input type="hidden" name="GAME_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="GAME_ID" value="{{ $games->GAME_ID }}">
                                <input type="hidden" name="GAME_STATUS" value="อนุมัติ">
                                <input type="hidden" name="ADMIN_NAME" value="{{ Auth::user()->name }}">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($KYC as $kycs)
                <tr>
                    <td><img src="{{asset('home/Kyc/'.$kycs->KYC_IMG)}}" alt="Image"class="game-img" ></td>
                    <td>{{ $kycs->USER_EMAIL }}</td>
                    <td>{{ $kycs->KYC_CREATE_DATE }}</td>
                    <td>{{ $kycs->KYC_STATUS }}</td>
                    <td>
                        <form action="{{ route('AppKyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col mt-4" align="center">
                                <input name="submit" id="submit" type="submit" class="bnt button1" value="อนุมัติ">
                                <input type="hidden" name="KYC_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="KYC_ID" value="{{ $kycs->KYC_ID }}">
                                <input type="hidden" name="KYC_STATUS" value="อนุมัติ">
                                <input type="hidden" name="ADMIN_NAME" value="{{ Auth::user()->name }}">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="tab-content mt-2">
    <form action="{{ route('AddAdmin') }}" method="POST" enctype="multipart/form-data" id="register_form">
        @csrf
        <div class="row">
            <div class="input-group col-lg-6 mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text login2 ">
                        <i class="fa fa-user text-danger pl-3"></i>
                    </span> -->
                </div>
                <input id="name" type="text" name="name" placeholder="Fisrt Name" class="regis @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group col-lg-6 mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span> -->
                </div>
                <input id="surname" type="text" name="surname" placeholder="Last Name" class="regis @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required autocomplete="surname">
                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group col-lg-12 mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-envelope text-muted"></i>
                    </span> -->
                </div>
                <input id="email" type="email" name="email" placeholder="Email-Address" class="regis @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"> 
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br><span id="msg1"></span>      
            </div>
            <div class="input-group col-lg-6 mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-lock text-muted"></i>
                    </span> -->
                </div>
                <input id="password" type="password" name="password" placeholder="Password" class="regis @error('password') is-invalid @enderror" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group col-lg-6 mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-lock text-muted"></i>
                    </span> -->
                </div>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="regis" required autocomplete="new-password">
            </div>
            <div class="input-group col-lg-6 mb-1">
                <div class="input-group-prepend">
                    <span id="MESSAGE"></span>
                </div>
            </div>


            <!-- <div class="form-group col-lg-12 d-flex align-items-left">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" name="accept" id="customControlInline">
                    <label class="custom-control-label" for="customControlInline">ยอมรับเงื่อนไข</label>
                </div>
            </div> -->
            <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-left mb-2">
                <input type="checkbox" name="accept" id="accept">&nbsp; <font style="font-size: 14px;">ยอมรับเงื่อนไข</font>
            </div> -->
            <div class="form-group col-lg-12 mx-auto mb-2">
                <input type="submit" name="submit" id="submit" value="Create your account" class="btn button8 btn-block py-2">
                <input type="hidden" name="users_type" value="0">
            </div>
            <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                <div class="border-bottom w-100 mr-5"></div>
            </div>
            <div class="form-group col-lg-12 mx-auto">
                <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                    <i class="icon-facebook mr-2"></i>
                    <span class="font-weight-bold">Continue with Facebook</span>
                </a>
            </div>
            <div class="text-center w-100">
                <p class="text-muted font-weight-bold">Already Registered? <a href="{{ route('login') }}" class="text-primary ml-2">Login</a></p>
            </div> -->
        </div>
    </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('Password Matching !').css('color', 'green');
        } else 
            $('#MESSAGE').html('Password does not match !').css('color', 'red');
    });
</script>
@endsection