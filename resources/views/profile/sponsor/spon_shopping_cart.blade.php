@extends('layout.sponsor_navbar')
@section('content')
<div class="container-fluid">
    <div class="row py-5"style="background-color:#f5f5f5;"></div>
    <div class="row ">
        @include('profile.sidebar.sponsor_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#f5f5f5;">
            <div class="row mt-3 ">
                <div class="col-12">
                    <a href="{{ route('AdvtPackage') }}">
                        <label class="fontAd1 active p">สนับสนุนเงินในเกม</label>
                    </a>
                    <label class="fontAd1 p"> > </label>
                    <label class="fontAd1 p" >ตระกร้าสินค้า</label>
                </div>
            </div>

            <div id="general-content" style="background-color:#ffffff;border-radius: 8px;">
                <div class="row" style="padding:20px 20px 0 20px;">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 style="margin:0;font-weight:800;">ตระกร้าสินค้า</h1>
                    </div>
                </div>
                
                <div class="rowGameShopping pl-3">    
                    @foreach($countCart as $key=>$gameList)
                    <div class="row">
                        <div class="col-12" style="border-bottom: 1px solid #f2f2f2;">
                            <div class="row my-2">
                                <div class=" align-self-center d-flex justify-content-center mr-3">
                                    <div class="checkbox-spon  ">
                                        <input type="checkbox" id="checkbox_{{$key}}" name="accept_01" value="{{$gameList->sponsor_cart_game}}" data-price="{{$gameList->sponsor_cart_price}}">
                                        <label for="checkbox_{{$key}}" ></label>
                                        <!-- <input type="checkbox" id="checkbox_{{$key}}" name="someCheck" value="{{$gameList->sponsor_cart_game}}"> -->
                                        <!-- <label for="checkbox{{$key}}" ></label> -->
                                    </div>
                                </div>

                                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-1 d-none d-sm-block d-md-block d-lg-block d-xl-block" style="padding:0;">
                                    <img class="pImg mr-2" src="{{ asset('section/File_game/Profile_game/'.$gameList->GAME_IMG_PROFILE) }}" />
                                </div>

                                <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-6 ">
                                    <label class="pFont">
                                        <p style="font-weight: 700;margin:0;">{{$gameList->GAME_NAME}}</p>
                                        <!-- <p style="color: #a8a8a8;margin:0;">{{$gameList->RATED_B_L}} • Online</p> -->
                                        <h5 style="color: #23c197;margin:0;">
                                        ช่วงเวลา   {{$gameList->sponsor_cart_start}} - {{$gameList->sponsor_cart_deadline}}<br>
                                        จำนวนรอบโฆษณา {{$gameList->sponsor_cart_number}} รอบ </h5>
                                    </label>
                                </div>

                                <div class="col-3 text-right align-self-center" style="padding:0;">
                                        @if($gameList->GAME_DISCOUNT != null && $gameList->GAME_DISCOUNT != "0")
                                            <h4 style="margin:0;font-weight:800;">฿{{number_format($gameList->sponsor_cart_price, 2)}}</h4>
                                            <p class="mr-2"><a style="color: #b2b2b2;text-decoration:line-through;">฿{{number_format($gameList->sponsor_cart_price, 2)}} </a> (-{{$gameList->GAME_DISCOUNT}}%)</p>
                                        @else
                                            <h4 style="margin:0;font-weight:800;">฿{{number_format($gameList->sponsor_cart_price, 2)}}</h4>
                                        @endif
                                    </span>
                                </div>
                                
                                <div class="col-1 text-center align-self-center" style="padding:0;">
                                    <form action="{{route('daleteShoppingCart')}}" method="post">
                                        @csrf
                                        <button class="btnTrash" name="deleteGame" value="deleteGame">
                                            <img style="width:100%;cursor:pointer;" src="{{asset('icon/trash.svg') }}" />
                                            <input type="hidden" name="sponsor_cart_id" value="{{$gameList->sponsor_cart_id}}">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row mx-0 my-3">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="row">
                            <div class="col-12">
                                <label class="checkbox-dark">
                                    <input type="checkbox" id="select_all" name="accept_all" onclick="toggle(this);">
                                    <label for="select_all" class="pt-2 ml-2">
                                        <p style="font-weight:800;margin:0;">เลือกทั้งหมด</p>
                                    </label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-end mb-2">
                        <p class="pt-2 mr-2" style="margin:0;font-weight:800;">
                            <label>รวมค่าสินค้า ( </label>
                            <label id="count-checked">0</label>
                            <label> รายการ )</label>
                            <label class="pl-3" id="total"><b class="font-price">฿0.00</b></label>
                        </p>
                        <button class="btn-submit-s" name="submit" value="submit"><p style="margin:0;">ชำระเงิน</p></button>
                        <form action="{{route('sponShoppingCartPayment')}}" method="post">
                            @csrf
                            <button class="btn-submit-red-s d-none" name="submit" value="submit">
                                <p style="margin:0;">ชำระเงิน</p>
                                <input type="hidden" name="sumTotal" id="sumTotal">
                                <input type="hidden" name="gameId" id="data-checked">
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
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
    
                            <p class="success-status mt-2" style="text-align:center;margin:0;">{{ Session::get('Delete') }}</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-submit-modal-red d-none">ยืนยัน</button>
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
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>

<script>
    function updateCounter() {
        var total = 0;
        var favorite = [];
        var len = $("#general-content input[name='accept_01']:checked").length;
        if(len>0){
            $("#count-checked").text(len);
            $('.btn-submit-red-s').removeClass('d-none');
            $('.btn-submit-s').addClass('d-none');
            $.each($("input[name='accept_01']:checked"), function(){
                favorite.push($(this).val());
            });
            $("input[name='accept_01']:checked").each(function() {
                total += parseFloat($(this).attr('data-price')) || 0;
            });
            $('#total').html("฿"+total.toFixed(2));
            document.querySelector('input#sumTotal').value = total;
            console.log(total);
            document.querySelector('input#data-checked').value = favorite.join(", ");
            console.log(favorite);
        }else{
            $("#count-checked").text('0');
            $('.btn-submit-red-s').addClass('d-none');
            $('.btn-submit-s').removeClass('d-none');
            $.each($("input[name='accept_01']:checked"), function(){
                favorite.push($(this).val());
            });
            $("input[name='accept_01']:checked").each(function() {
                total += parseFloat($(this).attr('data-price')) || 0;
            });
            $('#total').html("฿0.00");
            document.querySelector('input#sumTotal').value = total;
            console.log(total);
            document.querySelector('input#data-checked').value = favorite.join(", ");
            console.log(favorite);
        }
    }
    $("#general-content input:checkbox").on("change", function() {
        updateCounter();
    });

    $(function() {
        $('#select_all').change(function() {
            var checkthis = $(this);
            var checkboxes = $(this).parent().next('#count-checked').find("input[name='accept_01']");

            if(checkthis.is(':checked')) {
                checkboxes.attr('checked', true);
            } else {
                checkboxes.attr('checked', false);
            }
            updateCounter();
        });
        
    })
</script>
<script>
    function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
            val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
        }
        return val;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('Delete'))
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