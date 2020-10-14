@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdsSpon') }}">
    <div class="row my-5"></div>
    <div class="row my-2"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.sponsor_sidebar')

        <!-- <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div> -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 class="fontHeader">ลิงค์โฆษณา</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <form action="{{route('AddAdsSpon')}}" method="POST" enctype="multipart/form-data" id="upDate">
                            @csrf
                            <div class="row">
                                <div class="col-12 mt-2" >
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">ชื่อโฆษณา</p>
                                        <input type="text" name="advertising_name" value="{{old('advertising_name')}}" class="input1 p ml-2 @error('advertising_name') is-invalid @enderror"  required>
                                    </label>
                                    <label class="bgInput field-wrap my-1">
                                        <p class="fontHeadInput">ลิงค์โฆษณา</p>
                                        <input type="text" name="advertising_link" value="{{old('advertising_link')}}" class="input1 p ml-2 @error('advertising_link') is-invalid @enderror"  required>
                                    </label>
                                    <div class="row ">
                                        <div class="col-12 mt-2">
                                            <button name="submit" id="submit" value="submit" type="submit" class="btn-submit">
                                                <p style="margin:0;">ยืนยัน</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <p class="mt-2" style="margin:0;font-weight:800;">เงื่อนไขการโฆษณา</p>
                        <p style="margin:0;">
                            1. ต้องไม่ใช่สินค้าที่ผิดกฎหมาย หรือสินค้าละเมิดลิขสิทธิ์
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-3" style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12"> 
                        <h1 class="fontHeader">รายการโฆษณา<h1>
                    </div>
                </div>

                <div class="row row5">
                    <div class="col-12">
                        <div class="row d-flex align-items-center py-2" style="background-color:#f2f2f2;color:#000;">
                            <div class="col-6"><p style="font-weight:800;margin:0">ชื่อโฆษณา</p></div>
                            <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center" ><p style="font-weight:800;margin:0;">โฆษณา</p></div>
                            <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center" ><p style="font-weight:800;margin:0;">สถานะ</p></div>
                            <div class="col-md-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-block d-md-block text-center" ><p style="font-weight:800;margin:0;">วัน-เวลา</p></div>
                        </div>
                        @foreach($advertising as $key=>$advt)
                            <div class="row line2">
                                <div class="col-6 p">{{$advt->advertising_name}}</div>
                                <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center">
                                    <div class="py-1 p" style="cursor:pointer;text-decoration: underline;color:#0061fc;"data-toggle="modal" data-target="#Ads{{$key}}">โฆษณา</div>
                                </div>
                                <div class="col-3 col-md-2 col-lg-2 col-xl-2 text-center">
                                    @if($advt->advertising_status == "รออนุมัติ")
                                        <label class="ml-2 px-1 p" style="color:#000;background-color: #ffd629;border-radius: 6px;margin:0;">รออนุมัติ</label></br>
                                    @elseif($advt->advertising_status == "true")
                                        <label class="ml-2 px-1 p" style="color:#fff;background-color: #23c197;border-radius: 6px;margin:0;">อนุมัติ</label></br>
                                    @else
                                        <label class="ml-2 px-1 p" style="color:#fff;background-color: #ce0005;border-radius: 6px;margin:0;">ไม่อนุมัติ</label>
                                    @endif
                                    <!-- <label class="ml-2 px-1 p" style="color:#000;background-color: #ffd629;border-radius: 6px;margin:0;">รออนุมัติ</label></br> -->
                                    <!-- <label class="ml-2 px-1 p" style="color:#fff;background-color: #23c197;border-radius: 6px;margin:0;">อนุมัติ</label></br> -->
                                    <!-- <label class="ml-2 px-1 p" style="color:#fff;background-color: #ce0005;border-radius: 6px;margin:0;">ไม่อนุมัติ</label></br> -->
                                </div>
                                <?php $dateTime = explode(" ", $advt->advertising_create); ?>
                                <div class="col-md-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-block d-md-block text-center"><h5 style="margin:0;">{{$dateTime[1]}}, {{$dateTime[0]}}</h5></div>
                            </div>

                            <div class="modal fade" id="Ads{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="col-1"></div>
                                            <div class="col-10 text-center"><p style="margin:0;font-weight: 800;">โฆษณา</p></div>
                                            <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                                            <div class="col-1"></div>
                                        </div>

                                        <div class="modal-body font-rate-modal">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <iframe style="width:100%;height:385px;" src="{{$advt->advertising_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-1 col-md-1 d-inline-block d-lg-none d-xl-none" style="background-color: #f5f5f5;"></div> -->
    </div>
</div>

<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="border-radius: 8px;">
                <div class="row" >
                    <div class="col-12" >
                        <div class="row">
                            <!-- <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410.27 299.9">
                                <defs><style>.cls-1{fill:none;stroke:rgb(15, 175, 23);stroke-miterlimit:10;stroke-width:5px;}</style></defs>
                                <title>check</title>
                                
                                <path id="check" class="cls-1" d="M393.4,124.43,179.6,338.21a40.57,40.57,0,0,1-57.36,0L11.88,227.84a40.56,40.56,0,0,1,57.36-57.36l81.7,81.7L336,67.06a40.56,40.56,0,0,1,57.36,57.36Z" transform="translate(2.5 -52.69)"/>
                            </svg> -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.43873 118.43873">
                                <style>.circle{ animation: stroke-fill 1s linear forwards; } .check { animation: stroke-fill 5s linear forwards; } @keyframes stroke-fill { 0% { stroke-dasharray: 0, 0; } 100% { stroke-dasharray: 500, 200000; } }</style>
                                <path class="check" stroke-linejoin="round" d="M34.682 60.352l15.61 15.61 33.464-33.464" stroke="#08b237" stroke-linecap="round" stroke-width="4.3" fill="none"/>
                                <circle class="circle" stroke-linejoin="round" cx="59.219" stroke-linecap="round" stroke="#08b237" cy="59.219" r="57.069" stroke-width="4.3" fill="none"/>
                            </svg>
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('advertising') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="Ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">โฆษณา</div>
                <button type="button" class="close btn-closeModal- ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row">
                    <div class="col-lg-12">
                    <iframe style="width:100%;height:385px;" src="https://www.youtube.com/embed/grOw65QnD7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
<script src="{{ asset('filter/dependencies/zip.js/zip.js') }}"></script>
<script src="{{ asset('filter/dependencies/JQL.min.js') }}"></script>
<script src="{{ asset('filter/dependencies/typeahead.bundle.js') }}"></script>
<script src="{{ asset('filter/dist/jquery.Thailand.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('advertising'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
            // alert("{{Session::get('susee')}}");
        });
    </script>
@endif

<script>
setTimeout(function(){
    $('#popupmodal').modal('hide')
}, 1500);
</script>
@endsection