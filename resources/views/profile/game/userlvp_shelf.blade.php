@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('UserShelf') }}">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
        @include('profile.sidebar.user_sidebar')

        <div class="col-sm-12 col-md-12 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2">
                        <h1 class="fontHeader">ตู้เกม (เกมเชล)</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row mt-2 ">
                            <div class="col-12" >
                                <div class="row d-flex align-items-center py-2" style="background-color:#f2f2f2;color:#000;">
                                    <div class="col-6"><p style="margin:0;font-weight: 800;">ชื่อเกม</p></div>
                                    <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center"><p style="margin:0;font-weight: 800;">เล่นสะสม</p></div>
                                    <div class="col-md-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-block d-md-block text-center"><p style="margin:0;font-weight: 800;">เล่นล่าสุด</p></div>
                                    <div class="col-3 col-md-2 col-lg-2 col-xl-2  text-center"><p style="margin:0;font-weight: 800;">อัพเดต</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 row4">
                            <div class="col-12" >
                                @if(isset($game))
                                    @foreach($game as $Game)
                                                <div class="row line2">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-xl-3 d-none d-lg-block d-xl-block mb-2">
                                                                <img class="shelf-pic" src="{{ asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE) }}" />
                                                            </div>
                                                            <div class="col-12 col-lg-8 col-xl-9" style="color:#000;">
                                                                <p style="margin:0;font-weight:500;">{{ $Game->GAME_NAME }}</p>
                                                                <p class="d-none d-lg-block d-xl-block" style="margin:0;">{{ $Game->RATED_B_L }} • Other</p>
                                                                <p style="margin:0;">เวอร์ชั่น 1.03</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center" style="color:#000;"><p style="margin:0;">5 ชั่วโมง</p></div>
                                                    <div class="col-md-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-block d-md-block" style="color:#000;"><p style="margin:0;">16/05/63</p></div>
                                                    <div class="col-3 col-md-2 col-lg-2 col-xl-2  text-center" style="color:#000;">
                                                        <p style="margin:0;">ล่าสุด</p>
                                                    <!-- <button class="btn-update-game">อัพเดต</button> -->
                                                    </div>
                                                </div>
                                    @endforeach
                                @endif  
                                <!-- <div class="row mx-0 py-2 line2" style="font-family:myfont;font-size:1.2em;color:#000;">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                            <div class="col-9 font-game-shelf">
                                                <div>
                                                    <span style="font-family:myfont;color:#000;">Time Lie</span></br>
                                                    Online • Other</br>
                                                    เวอร์ชั่น 1.03</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center"><span class="font-game-shelf">5 ชั่วโมง</span></div>
                                    <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                    <div class="col-2 text-center">
                                    <span class="font-game-shelf">ล่าสุด</span>
                                    <button class="btn-update-game">อัพเดต</button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bgContent"></div>
    </div>
</div>

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('dist/js/popper.min.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('dist/js/aos.js') }}"></script>
<script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('dist/js/main.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection