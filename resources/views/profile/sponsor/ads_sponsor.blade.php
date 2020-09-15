@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('AdsSpon') }}">
        <div class="row py-5" style="background-color: #f5f5f5;"></div>
        <div class="row  py-3" style="background-color: #f5f5f5;">
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
                        <div class="row mx-0 mt-2 py-2" style="background-color:#f2f2f2;font-family:myfont;font-size:1em;color:#000;">
                            <div class="col-6 p" style="font-weight:800;">ชื่อโฆษณา</div>
                            <div class="col-2 text-center p" style="font-weight:800;">โฆษณา</div>
                            <div class="col-2 text-center p" style="font-weight:800;">สถานะ</div>
                            <div class="col-2 text-center p" style="font-weight:800;">วัน-เวลา</div>
                        </div>
                        @foreach($advertising as $key=>$advt)
                            <div class="row mx-0 py-2 line2">
                                <div class="col-6 p">{{$advt->advertising_name}}</div>
                                <div class="col-2 text-center">
                                    <div class="py-1 p" style="cursor:pointer;text-decoration: underline;color:#0061fc;"data-toggle="modal" data-target="#Ads{{$key}}">โฆษณา</div>
                                </div>
                                <div class="col-2 text-center">
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
                                <div class="col-2 text-center"><h5 style="margin:0;">{{$dateTime[1]}}, {{$dateTime[0]}}</h5></div>
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

<!-- <div class="modal fade" id="Ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">โฆษณา</div>
                <button type="button" class="close btn-closeModal ml-3" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
<script src="{{ asset('filter/dependencies/zip.js/zip.js') }}"></script>
<script src="{{ asset('filter/dependencies/JQL.min.js') }}"></script>
<script src="{{ asset('filter/dependencies/typeahead.bundle.js') }}"></script>
<script src="{{ asset('filter/dist/jquery.Thailand.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('advertising'))
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#address').modal();
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('advertising') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
@endsection