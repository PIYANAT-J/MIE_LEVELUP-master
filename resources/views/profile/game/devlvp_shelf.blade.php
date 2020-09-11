@extends('layout.dev_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{route('DevShelf')}}">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
    @include('profile.sidebar.dev_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
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
                                <div class="row mx-0 py-2" style="background-color:#f2f2f2;color:#000;">
                                    <div class="col-6 align-self-center"><p style="margin:0;font-weight: 800;">ชื่อเกม</p></div>
                                    <div class="col-2 align-self-center text-center "><p style="margin:0;font-weight: 800;">ดาวน์โหลด</p></div>
                                    <div class="col-2 text-center "><p style="margin:0;font-weight: 800;">วันที่อัพเดต</p></div>
                                    <div class="col-2 text-center "><p style="margin:0;font-weight: 800;">อัพเดตเวอร์ชัน</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 row4">
                            <div class="col-12" >
                                <!-- <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                            <div class="col-8 font-game-shelf">
                                                <div>
                                                    <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                    Online • Other</br>
                                                    เวอร์ชั่น 1.03</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                    <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                    <div class="col-2 text-center">
                                    <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                    <button class="btn-update-cancel" >ยกเลิก</button>
                                    </div>
                                </div>
                                <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                            <div class="col-8 font-game-shelf">
                                                <div>
                                                    <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                    Online • Other</br>
                                                    เวอร์ชั่น 1.03
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                    <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                    <div class="col-2 text-center">
                                    <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                    <button class="btn-update-cancel">ยกเลิก</button>
                                    </div>
                                </div>
                                <div class="row mx-0 py-2 line2 " style="font-family:myfont;font-size:1.2em;color:#000;">
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-4"><img class="shelf-pic" src="{{asset('section/picture_game/game3.png') }}" /></div>
                                            <div class="col-8 font-game-shelf">
                                                <div>
                                                    <span style="font-family:myfont;color:#000;">Time Lie</span><label class="ml-2 px-1" style="color:#000;font-size:0.9em;background-color: #ffd629;border-radius: 6px;">รออนุมัติ</label></br>
                                                    Online • Other</br>
                                                    เวอร์ชั่น 1.03
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center"><span class="font-game-shelf">155 ครั้ง</span></div>
                                    <div class="col-2 text-center"><span class="font-game-shelf">16/05/63</span></div>
                                    <div class="col-2 text-center">
                                    <button class="btn-update-game" data-toggle="modal" data-target="#update-version">อัพเดต</button>
                                    <button class="btn-update-cancel">ยกเลิก</button>
                                    </div>
                                </div> -->
                                @if(isset($game))
                                    @foreach($game as $Game)
                                        @if($Game->USER_ID == Auth::user()->id)
                                            @if(isset($Game->GAME_IMG_PROFILE))
                                                <div class="row mx-0 py-2 line2 ">
                                                    <div class="col-6 " style="padding-right:0;">
                                                        <label><img class="shelf-pic" src="{{asset('section/File_game/Profile_game/'.$Game->GAME_IMG_PROFILE)}}" /></label>
                                                        <label style="padding-left:80px;">
                                                            <label><p style="margin:0;font-weight:500;">{{ $Game->GAME_NAME }}</p></label>
                                                            @if($Game->GAME_STATUS == 'รออนุมัติ')
                                                                <label class="ml-2" style="background-color: #ffd629;border-radius: 6px;padding:5px;margin:0;"><h5 style="margin:0;">รออนุมัติ</h5></label>
                                                            @elseif($Game->GAME_STATUS == 'อนุมัติ')
                                                                <label class="ml-2" style="background-color: #23c197;border-radius: 6px;padding:5px;margin:0;"><h5 style="margin:0;">อนุมัติ</h5></label>
                                                            @else
                                                                <label class="ml-2" style="background-color: #ce0005;border-radius: 6px;padding:5px;margin:0;"><h5 style="margin:0;">ไม่อนุมัติ</h5></label>
                                                            @endif
                                                            <p style="margin:0;">{{ $Game->RATED_B_L }} • Other</br>เวอร์ชั่น 1.03</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        <p style="margin:0;">
                                                            @foreach($CDownload as $cdown)
                                                                @if($cdown->GAME_ID == $Game->GAME_ID && $cdown->GAME_ID != null)
                                                                    @if($Game->GAME_ID == $cdown->GAME_ID)
                                                                        {{ $cdown->downloads_count }} ครั้ง
                                                                    @endif
                                                                    @break
                                                                @else
                                                                    0 ครั้ง
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        <h5 style="color:#a8a8a8;margin:0;">
                                                            @if($Game->GAME_EDIT_DATE == null)
                                                                {{ $Game->GAME_DATE }}
                                                            @else
                                                                {{ $Game->GAME_EDIT_DATE }}
                                                            @endif
                                                        </h5>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        @if($Game->GAME_STATUS == 'รออนุมัติ')
                                                            <form action="{{ route('DevShelfUpdate') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <button type="hidden" name="submit" value="submit" class="btn-update-cancel">
                                                                    <p style="margin:0;">ยกเลิก</p>
                                                                    <input type="hidden" name="GAME_ID" value="{{ $Game->GAME_ID }}">
                                                                </button>
                                                            </form>
                                                        @elseif($Game->GAME_STATUS == 'อนุมัติ')
                                                            <button class="btn-update-game" data-toggle="modal" data-target="#{{$Game->GAME_NAME}}">
                                                                <p style="margin:0;">อัพเดต</p>
                                                            </button>
                                                        @else
                                                            <button class="btn-update-game" data-toggle="modal" data-target="#update-version">
                                                                <p style="margin:0;">อัพเดต</p>
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@if(isset($game))
@foreach($game as $GameModal)
<div class="modal fade" id="{{$GameModal->GAME_NAME}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
            <div class="modal-header">
                <h1 style="color:#000;margin:0;">อัพเดตเวอร์ชัน</h1>
                <button type="button" class="close btn-closeModal" data-dismiss="modal">
                    <i class="icon-close_modal" style="font-size: 15px;"></i>
                </button>
            </div>
            <form action="{{ route('DevShelfUpdate') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body font-rate-modal">
                    <div class="row px-3 mb-2">
                        <div class="col-12 bg-bank ">
                            <div class="row ">
                                @if($Game->USER_ID == Auth::user()->id)
                                    @if(isset($GameModal->GAME_IMG_PROFILE))
                                    <div class="col-8 my-2">
                                        <img class="shelf-pic" src="{{asset('section/File_game/Profile_game/'.$GameModal->GAME_IMG_PROFILE)}}" />
                                        <label class="align-self-center" style="padding-left:80px;">
                                            <p style="color:#000;margin:0;">{{ $GameModal->GAME_NAME }}</p>
                                            <p style="color:#000;margin:0;">{{ $GameModal->RATED_B_L }} • Other</br>เวอร์ชั่น 1.03</p>
                                        </label>
                                    </div>
                                    <div class="col-4 text-center align-self-center" >
                                        <p style="color:#000;margin:0;">ขนาดไฟล์ปัจจุบัน</p>
                                        <h4 style="color:#000;margin:0;font-weight:800;">{{ $GameModal->GAME_SIZE }}</h4>
                                    </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <input type="text" class="form-control input2 p" placeholder="เวอร์ชันที่อัพเดต"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="file" class="file" name="GAME_FILE" accept=".zip" require>
                            <label class="pl-2 "><h5 style="margin:0;color:#b2b2b2;">เฉพาะไฟล์นามสกุล .zip เท่านั้น</h5></label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button name="submit" id="submit" type="submit" value="submit" class="btn-submit" >
                        <p style="margin:0;">บันทึก</p>
                        <input type="hidden" name="GAME_NAME" value="{{ $GameModal->GAME_NAME }}">
                        <!-- <input type="hidden" name="GAME_IMG_PROFILE" value="{{ $GameModal->GAME_IMG_PROFILE }}"> -->
                        <input type="hidden" name="GAME_DATE" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" name="USER_ID" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="USER_EMAIL" value="{{ Auth::user()->email }}">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_login"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_login2"></div>
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