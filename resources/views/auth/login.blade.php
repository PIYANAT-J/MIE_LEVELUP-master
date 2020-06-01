@extends('layout.navbar')

@section('navbar')
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="{{asset('home/logo/levelup.png')}}" alt="" class="img-fluid mb-3 d-none d-md-block">
        </div>
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text login2">
                                <i class="fa fa-envelope text-danger pl-3" ></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="login form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>  
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text login2">
                                <i class="fa fa-lock text-danger pl-3"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="login form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-lg-12 mx-auto mb-2">
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div> -->
                        <div class="custom-control custom-checkbox my-1 mr-sm-2">
                            <input type="checkbox" class="custom-control-input text-dark" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">
                            <label class="custom-control-label" for="remember">{{__('Remember Me')}}</label>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 mx-auto mb-2">
                        <input type="submit" name="button" id="submit" value="{{ __('Login') }}" class="btn button8 btn-block py-2">
                    </div>
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="{{ route('register') }}" class="text-primary ml-2">Register</a></p>
                    </div>
                    <div class="text-center w-100">
                        @if (Route::has('password.request'))
                            <a class="font5 ml-2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<footer class="site-footer footer1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <img class="email_footer" src="{{asset('icon/email.svg') }}" >
                <img class="google_footer" src="{{asset('icon/google_p.svg') }}" >
                <img class="fb_footer" src="{{asset('icon/fb.svg') }}" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact_us">CONTACT US</div>
                        <div class="address mt-3"><a class="address2">Address:</a> 8/1 Borommaratchachonnani Road,</br>Salathammasop, Thawiwatthana,</br>Bangkok 10170</div>
                        <div class="address"><a class="address2">Phone: </a> +66 2105 8699</div>
                        <div class="address"><a class="address2">Website: </a> https://www.shopteenii.com</div>
                        <div class="address"><a class="address2">Email: </a> info@mip.co.th</div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact_us">HELP</div>
                        <div class="address mt-3">Home</div>
                        <div class="address">Categories</div>
                        <div class="address">My Follow</div>
                        <div class="address">Sign in</div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</footer>
<footer class="container-fluid mt-4 bg_footer">
    <div class="row">
        <div class="col-md-9 text-left">
            <div class="footer3" style="padding-top:40px; color: #fff;"><script>document.write(new Date().getFullYear());</script> &copy; All Rights Reserved @ Level Up| Terms& Condition | Privacy Policy</div>
        </div>
        <div class="col-md-3 text-center bg_footer footer3">
            <img style="margin-right:10px;" src="{{asset('home/logo/logo_wh.svg') }}">
            <img  src="{{asset('home/logo/sega.svg') }}" >
        </div>
    </div>
</footer>

<!-- <style>
#error_notif {
display:none;
}
</style> -->

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
