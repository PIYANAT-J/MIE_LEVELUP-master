@extends('layout.profile_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('UserRank') }}">
    <div class="row py-5" style="background-color: #f5f5f5;"></div>
    <div class="row  pt-3" style="background-color: #f5f5f5;">
        @include('profile.sidebar.user_sidebar')

        <div class="col-sm-12 col-md-12 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3  pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px"> 
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-9 pb-2">
                        <h1 class="fontHeader">อันดับผู้ใช้</h1>
                    </div>
                    <div class="col-sm-5 col-md-3 text-right">
                        <h1 class="fontHeader">พอยท์สะสม</h1>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="row mt-2 row4 ">
                            <div class="col-12" >
                                <div class="row mx-0 py-2 line2">
                                    <div class="col-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #d09207;background-color:#f2f2f2;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #eaa200;">1</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_2.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,500</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a8a8a8;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #a8a8a8;">2</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_3.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,200</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #a06868;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #a06868;">3</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_4.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">4</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">5</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">6</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">7</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">8</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">9</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 sticky">
                                    <div class="col-lg-12" >
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #f2f2f2;background-color:#f2f2f2;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">10</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_1.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">98,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">11</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">12</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">13</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">14</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-2 line2">
                                    <div class="col-lg-12">
                                        <div class="row py-2" style=" border-radius: 6px;border: solid 1px #ffff;background-color:#ffff;color:#000;">
                                            <div class="col-sm-2 col-md-1 col-lg-1 col-xl-1 number-rank" style="color: #383838;">15</div>
                                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8">
                                                <img class="ImgRank mr-3" src="{{asset('dist/images/person_5.jpg') }}" />
                                                <label><h2 style="font-weight:800;">ชื่อ-นามสกุล</h2></label>
                                            </div>
                                            <div class="col-3  text-right">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h2 style="font-weight:800;padding-top:25px;">100,000</h2>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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