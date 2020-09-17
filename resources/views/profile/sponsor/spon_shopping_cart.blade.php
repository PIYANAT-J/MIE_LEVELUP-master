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

            <div id="general-content" style="background-color:#ffffff;border-radius: 8px;padding:20px;">
                <div class="row">
                    <div class="col-12 pb-2" style="border-bottom: 1px solid #f2f2f2;"> 
                        <h1 style="margin:0;font-weight:800;">ตระกร้าสินค้า</h1>
                    </div>
                </div>
                
                <div class="row rowGameShopping">
                    <div class="col-12" style="border-bottom: 1px solid #f2f2f2;">
                        <div class="row mx-2 mt-3" style="border-bottom:1px solid #fff;height:200px;">
                            @foreach($countCart as $key=>$gameList)
                                <div class="col-8" style="padding:0;">
                                    <div class="checkbox-dark pt-2">
                                        <input type="checkbox" id="checkbox_{{$key}}" name="accept_01" value="{{$gameList->sponsor_cart_game}}" data-price="{{$gameList->sponsor_cart_price}}">
                                        <label for="checkbox_{{$key}}" ></label>
                                        <!-- <input type="checkbox" id="checkbox_{{$key}}" name="someCheck" value="{{$gameList->sponsor_cart_game}}"> -->
                                        <!-- <label for="checkbox{{$key}}" ></label> -->
                                    </div>
                                    <img class="pImg" src="{{ asset('section/File_game/Profile_game/'.$gameList->GAME_IMG_PROFILE) }}" />
                                    <div class="pFont">
                                        <p style="font-weight: 700;margin:0;">{{$gameList->GAME_NAME}}</p>
                                        <p style="color: #a8a8a8;margin:0;">{{$gameList->RATED_B_L}} • Online</p>
                                        <h5 style="color: #23c197;margin:0;">
                                        ช่วงเวลา   {{$gameList->sponsor_cart_start}} - {{$gameList->sponsor_cart_deadline}}<br>
                                        จำนวนรอบโฆษณา {{$gameList->sponsor_cart_number}} รอบ </h5>
                                    </div>
                                </div>
                                <div class="col-3 text-right" style="padding:0;">
                                        @if($gameList->GAME_DISCOUNT != null)
                                            <h4 class="pt-2" style="margin:0;font-weight:800;">฿{{$gameList->sponsor_cart_price}}</h4>
                                            <p class="mr-2"><a style="color: #b2b2b2;text-decoration:line-through;">฿680 </a> (-{{$gameList->GAME_DISCOUNT}}%)</p>
                                        @else
                                            <h4 class="pt-2" style="margin:0;font-weight:800;">฿{{$gameList->sponsor_cart_price}}</h4>
                                        @endif
                                    </span>
                                </div>
                                <div class="col-1 text-center" style="padding:0;">
                                    <form action="{{route('daleteShoppingCart')}}" method="post">
                                        @csrf
                                        <button class="btnTrash pt-2" name="deleteGame" value="deleteGame">
                                            <img style="width:100%;cursor:pointer;" src="{{asset('icon/trash.svg') }}" />
                                            <input type="hidden" name="sponsor_cart_id" value="{{$gameList->sponsor_cart_id}}">
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mx-0 my-3">
                    <div class="col-4">
                        <div class="row my-2">
                            <div class="col-12">
                                <label class="checkbox-dark">
                                    <input type="checkbox" id="select_all" name="accept_all" onclick="toggle(this);">
                                    <label for="select_all" class="pt-2 ml-2">
                                        <p style="font-weight:800;margin:0;">เลือกทั้งหมด</p></label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="row mt-3 mb-2">
                            <div class="col-12">
                                <p style="margin:0;font-weight:800;">
                                    <label>รวมค่าสินค้า ( </label>
                                    <label id="count-checked">0</label>
                                    <label> รายการ )</label>
                                    <label class="pl-3" id="total"><b class="font-price">฿0.00</b></label>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-2">
                        <form action="{{route('sponShoppingCartPayment')}}" method="post">
                            @csrf
                            <button class="btn-submit-red" name="submit" value="submit">
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
    // $(document).ready(function() {
    //     $(":checkbox").change(function() {
    //         var total = 0;
    //         var closest = $(this).closest("div.row");
    //         var countCheckedCheckboxes = $(":checkbox", closest).filter(':checked').length;
    //         $('#count-checked').html(countCheckedCheckboxes);
    //         console.log(countCheckedCheckboxes);
    //         var favorite = [];
    //         $.each($("input[name='accept_01']:checked"), function(){
    //             favorite.push($(this).val());
    //         });
    //         $("input[name='accept_01']:checked").each(function() {
    //             total += parseFloat($(this).attr('data-price')) || 0;
    //         });
    //         $('#total').html("฿"+total);
    //         document.querySelector('input#sumTotal').value = total;
    //         console.log(total);
    //         document.querySelector('input#data-checked').value = favorite.join(", ");
    //         console.log(favorite);
    //     });
    // });
    function updateCounter() {
        var total = 0;
        var favorite = [];
        var len = $("#general-content input[name='accept_01']:checked").length;
        if(len>0){
            $("#count-checked").text(len);
            $.each($("input[name='accept_01']:checked"), function(){
                favorite.push($(this).val());
            });
            $("input[name='accept_01']:checked").each(function() {
                total += parseFloat($(this).attr('data-price')) || 0;
            });
            $('#total').html("฿"+total);
            document.querySelector('input#sumTotal').value = total;
            console.log(total);
            document.querySelector('input#data-checked').value = favorite.join(", ");
            console.log(favorite);
        }else{
            $("#count-checked").text('0');
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('Delete'))
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#address').modal();
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('Delete') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
@endsection