@extends('layout.navbar')

@section('navbar')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row py-5  align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 ">
            <img src="{{asset('home/logo/levelup.png')}}" alt="" class="img-fluid  d-none d-md-block">
        </div>
        <div class="col-md-7 col-lg-6 ml-auto">
            <!-- Nav tabs -->
            <ul class="nav topnav">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#develop">Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#sponsors">Sponsors</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-2">
                <!-- Register Users -->
                <div id="users" class="container tab-pane active"><br>
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
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


                            <div class="form-group col-lg-12 d-flex align-items-left">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="accept" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">ยอมรับเงื่อนไข</label>
                                </div>
                            </div>
                            <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-left mb-2">
                                <input type="checkbox" name="accept" id="accept">&nbsp; <font style="font-size: 14px;">ยอมรับเงื่อนไข</font>
                            </div> -->
                            <div class="form-group col-lg-12 mx-auto mb-2">
                                <input type="submit" name="submit" id="submit" value="Create your account" class="btn button8 btn-block py-2">
                                <input type="hidden" name="users_type" value="1">
                            </div>
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
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
                            </div>
                        </div>
                    </form>
                </div>
            

                <!-- Register Devepol -->
                <div id="develop" class="container tab-pane fade"><br>
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                        @csrf
                        <div class="row">
                            <div class="input-group col-lg-6 mb-3">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
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
                                <input id="password_dev" type="password" name="password" placeholder="Password" class="regis @error('password') is-invalid @enderror" required autocomplete="new-password">
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
                                <input id="password-confirm_dev" type="password" name="password_confirmation" placeholder="Confirm Password" class="regis" required autocomplete="new-password">
                            </div>
                            <div class="input-group col-lg-6 mb-1">
                                <div class="input-group-prepend">
                                    <span id="MESSAGE-DEV"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 d-flex align-items-left">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="accept_dev" id="customControlInline_dev">
                                    <label class="custom-control-label" for="customControlInline_dev">ยอมรับเงื่อนไข</label>
                                </div>
                            </div>
                            <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-left mb-2">
                                <input type="checkbox" name="accept" id="accept">&nbsp; <font style="font-size: 14px;">ยอมรับเงื่อนไข</font>
                            </div> -->
                            <div class="form-group col-lg-12 mx-auto mb-2">
                                <input type="submit" name="submit" id="submit" value="Create your account" class="btn button8 btn-block py-2">
                                <input type="hidden" name="users_type" value="2">
                            </div>
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
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
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Register Sponsors -->
                <div id="sponsors" class="container tab-pane fade"><br>
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="register_form">
                        @csrf
                        <div class="row">
                            <div class="input-group col-lg-6 mb-3">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text bg-white px-4 border-md border-right-0">
                                        <i class="fa fa-user text-muted"></i>
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
                                <input id="password_spon" type="password" name="password" placeholder="Password" class="regis @error('password') is-invalid @enderror" required autocomplete="new-password">
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
                                <input id="password-confirm_spon" type="password" name="password_confirmation" placeholder="Confirm Password" class="regis" required autocomplete="new-password">
                            </div>
                            <div class="input-group col-lg-6 mb-1">
                                <div class="input-group-prepend">
                                    <span id="MESSAGE-SPON"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 d-flex align-items-left">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="accept_spon" id="customControlInline_spon">
                                    <label class="custom-control-label" for="customControlInline_spon">ยอมรับเงื่อนไข</label>
                                </div>
                            </div>
                            <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-left mb-2">
                                <input type="checkbox" name="accept" id="accept">&nbsp; <font style="font-size: 14px;">ยอมรับเงื่อนไข</font>
                            </div> -->
                            <div class="form-group col-lg-12 mx-auto mb-2">
                                <input type="submit" name="submit" id="submit" value="Create your account" class="btn button8 btn-block py-2">
                                <input type="hidden" name="users_type" value="3">
                            </div>
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
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
                        <input id="name" type="text" name="name" placeholder="Fisrt Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                        <input id="surname" type="text" name="surname" placeholder="Last Name" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname') }}" required autocomplete="surname">
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email-Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br><span id="msg1"></span>      
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="1" checked> : User &nbsp;</label>
                        <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="2"> : Devepol &nbsp;</label>
                        <label for="users_type" class="radio-inline"><input type="radio" id="users_type" name="users_type" value="3"> : Sponsors </label>
                    </div>
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
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
                            <i class="icon-facebook mr-2"></i>
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

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="footer-heading mb-1"><b>About Us</b></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h2 class="footer-heading mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                            <li><a href="#services-section" class="smoothscroll">Services</a></li>
                            <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                            <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                <form action="#" method="post" class="footer-subscribe">
                    <div class="input-group mb-3">
                        <input type="text" class="button7" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="button6" type="button" id="button-addon2">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LevelUp Multi innovation Engineering <i class="icon-heart text-light" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection

@section('script')
<script>
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('Password Matching !').css('color', 'green');
        } else 
            $('#MESSAGE').html('Password does not match !').css('color', 'red');
    });
    $('#password_dev, #password-confirm_dev').on('keyup', function () {
        if ($('#password_dev').val() == $('#password-confirm_dev').val()) {
            $('#MESSAGE-DEV').html('Password Matching !').css('color', 'green');
        } else 
            $('#MESSAGE-DEV').html('Password does not match !').css('color', 'red');
    });
    $('#password_spon, #password-confirm_spon').on('keyup', function () {
        if ($('#password_spon').val() == $('#password-confirm_spon').val()) {
            $('#MESSAGE-SPON').html('Password Matching !').css('color', 'green');
        } else 
            $('#MESSAGE-SPON').html('Password does not match !').css('color', 'red');
    });
</script>
@endsection
