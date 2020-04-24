@extends('layout.app')

@section('section')
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Sur Name') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="users_type" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="1" checked> : User &nbsp;</label>
                                <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="2"> : Devepol &nbsp;</label>
                                <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="3"> : Sponsors </label>
                            </div>

                            <!-- <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="{{asset('home/logo/levelup.png')}}" alt="" class="img-fluid mb-3 d-none d-md-block">
        </div>
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                @csrf
                <div class="row">
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="MEMBER_NAME" type="text" name="MEMBER_NAME" placeholder="Fisrt Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="MEMBER_SURNAME" type="text" name="MEMBER_SURNAME" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="MEMBER_EMAIL" type="email" name="MEMBER_EMAIL" placeholder="Email-Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br><span id="msg1"></span>      
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <label class="radio-inline"><input type="radio" id="user" name="MEMBER_TYPE" value="1" checked> : User&nbsp;&nbsp;</label>
                        <label class="radio-inline"><input type="radio" id="devepol" name="MEMBER_TYPE" value="2"> : Devepol&nbsp;&nbsp;</label>
                        <label class="radio-inline"><input type="radio" id="sponsors" name="MEMBER_TYPE" value="3"> : Sponsors </label>
                    </div>
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="MEMBER_PASSWORD" type="password" name="MEMBER_PASSWORD" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required autocomplete="new-password">
                    </div>
                    <div class="input-group col-lg-6 mb-2">
                        <div class="input-group-prepend">
                            <span id="MESSAGE"></span>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-left mb-2">
                        <input type="checkbox" name="accept" id="accept">&nbsp; <font style="font-size: 14px;">ยอมรับเงื่อนไข</font>
                    </div>
                    <div class="form-group col-lg-12 mx-auto mb-2">
                        <input type="submit" name="submit" id="submit" value="Create your account" class="btn btn-danger btn-block py-2">
                        <input type="hidden" name="do" value="registion">
                    </div>
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fa fa-facebook-f mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                    </div>
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="{{ route('login') }}" class="text-primary ml-2">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
<br><br><br><br><br><br><br>
@endsection

@section('script')
<script>          
    $('#MEMBER_PASSWORD, #password-confirm').on('keyup', function () {
        if ($('#MEMBER_PASSWORD').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('Password Matching !').css('color', 'green');
        } else 
            $('#MESSAGE').html('Password does not match !').css('color', 'red');
    });        
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
