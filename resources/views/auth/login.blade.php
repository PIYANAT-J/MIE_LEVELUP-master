@extends('layout\navbar')

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
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted" ></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>   
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
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
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">
                            <label class="custom-control-label" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 mx-auto mb-2">
                        <input type="submit" name="button" id="submit" value="{{ __('Login') }}" class="btn btn-danger btn-block py-2">
                    </div>
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="{{ route('register') }}" class="text-primary ml-2">Register</a></p>
                    </div>
                    <div class="text-center w-100">
                        @if (Route::has('password.request'))
                            <a class="text-primary ml-2" href="{{ route('password.request') }}">
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

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="footer-heading mb-4">About Us</h2>
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
                        <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LevelUp Multi innovation Engineering <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
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
