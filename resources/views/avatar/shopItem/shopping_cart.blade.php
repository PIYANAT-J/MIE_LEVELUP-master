@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
        @include('profile.sidebar.avatar_sidebar')

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-sm-8 col-md-9 col-lg-9 col-xl-10 pt-2">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shopping_cart" class="avatar-link">
                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
                        </a>
                    </label>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 text-right">
                    <a href="/simulator_trade">
                        <label class="bg-shop">
                            <p style="color:#fff;margin:0;">Simulator Trade</p> 
                        </label>
                    </a>
                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-12">
                    <div class="row mx-0 pb-3" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12 mt-1" id="general-content">
                            <div class="row py-3" style="border-bottom:1px solid #fff;">
                                <h1 class="ml-3" style="margin:0;font-weight:800;color:#fff;">ตะกร้าสินค้า</h1>
                            </div>
                            <div class="row row6">
                                <div class="col-12">
                                    @foreach($shopping as $key=>$shoppingLits)
                                        <div class="row mt-3 data-div" style="border-bottom:1px solid #fff;">
                                            <div class="col-sm-9 col-md-7 col-lg-10 col-xl-6 align-self-center" style="padding:0;">
                                                <label class="checkbox-wh pl-2">
                                                    <input type="checkbox" id="checkbox_{{$key}}" name="accept_01" value="{{$shoppingLits->item_id}}" data-price="{{$shoppingLits->shopping_cart_price}}" data-shop="{{$shoppingLits->shopping_cart_id}}">
                                                    <label for="checkbox_{{$key}}" ></label>
                                                </label>
                                                <label class="labelItem2 bgItem">
                                                    <!-- <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" /> -->
                                                    @if($shoppingLits->item_type == "clothes")
                                                        @if($shoppingLits->item_gender == "woman")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/woman/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @elseif($shoppingLits->item_gender == "man")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/man/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/clothes/man/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @endif
                                                    @elseif($shoppingLits->item_type == "eyes")
                                                        @if($shoppingLits->item_gender == "woman")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/eyes/woman/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/eyes/woman/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @elseif($shoppingLits->item_gender == "man")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/eyes/man/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/eyes/man/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @endif
                                                    @elseif($shoppingLits->item_type == "glasses")
                                                        <img class="picture2" src="{{asset('home/avatar/glasses/'.$shoppingLits->item_img) }}">
                                                    @elseif($shoppingLits->item_type == "hair")
                                                        @if($shoppingLits->item_gender == "woman")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/hair/woman/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/hair/woman/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @elseif($shoppingLits->item_gender == "man")
                                                            @if($shoppingLits->item_other == "hero")
                                                                <img class="picture2" src="{{asset('home/avatar/hair/man/hero/'.$shoppingLits->item_img) }}">
                                                            @else
                                                                <img class="picture2" src="{{asset('home/avatar/hair/man/'.$shoppingLits->item_img) }}">
                                                            @endif
                                                        @endif
                                                    @elseif($shoppingLits->item_type == "other")
                                                        <img class="picture2" src="{{asset('home/avatar/other/'.$shoppingLits->item_img) }}">
                                                    @elseif($shoppingLits->item_type == "weapon")
                                                        <img class="picture2" src="{{asset('home/avatar/weapon/'.$shoppingLits->item_img) }}">
                                                    @endif
                                                </label> 
                                                <label class="font-sale4 bgItem2 mt-2 ml-2">
                                                    <p style="font-weight: 700;margin:0;">{{$shoppingLits->item_name}} ระดับ {{$shoppingLits->item_level}} </p>
                                                    <p style="margin:0;">{{$shoppingLits->item_description}}</p>
                                                    <p style="margin:0;">เลือกลงทุนได้ 3 Signal</p>
                                                </label>
                                            </div>

                                            <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 align-self-center" style="padding:0;">
                                                <label class="quantity" style="width:100%;">
                                                    <button class="quantity-down"> - </button>
                                                    <input class="quantity-num" type="number" min="1" max="{{$shoppingLits->item_amount}}" value="{{$shoppingLits->shopping_cart_amount}}" dataprice="{{$shoppingLits->item_price}}" amount="{{$shoppingLits->shopping_cart_amount}}">
                                                    <button class="quantity-up"> + </button>
                                                </label>
                                            </div>

                                            <div class="col-sm-11 col-md-2 col-lg-11 col-xl-3 align-self-center" style="padding:0;">
                                                <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                    <h4 class="total" style="margin:0;font-weight:800;">฿<span>{{number_format($shoppingLits->shopping_cart_price)}}</span></h4>
                                                    <p class="mr-2" style="margin:0;color:#ce0005;"><a style="color: #b2b2b2;text-decoration:line-through;">฿3,400 </a> (-{{$shoppingLits->item_discount}}%)<p>
                                                </span>
                                            </div>

                                            <div class="col-1 my-4 text-center" style="padding:0;">
                                                <!-- <form> -->
                                                    <button type="button" class="btn-none deleteShopping">
                                                        <img style="width:100%;cursor:pointer;" src="{{asset('icon/trash2.svg') }}" />
                                                    </button>
                                                    <input type="hidden" name="shopping_cart_id" value="{{$shoppingLits->shopping_cart_id}}">
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 my-3">
                        <div class="col-sm-4 col-md-3 col-lg-4 col-xl-4">
                            <div class="row my-2">
                                <div class="col-12">
                                    <label class="checkbox-wh2">
                                        <input type="checkbox" id="checkbox_all" onclick="toggle(this);">
                                        <label for="checkbox_all" class="pt-2 ml-2">
                                            <h1 class="pl-1" style="margin:0;font-weight:800:;color:#fff;">เลือกทั้งหมด</h1>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-8 col-xl-6 text-right">
                            <div class="row my-2">
                                <div class="col-12">
                                    <span style="font-family:myfont1;font-size:1.1em;color:#fff;">
                                        <label><h1 class="count-checked" style="margin:0;font-weight:800;color:#fff;">รวมค่าสินค้า ( <span>0</span> รายการ )</h1></label>
                                        <label><h4 class="sumtotal" style="color:#ce0005;margin:0;font-weight:800;">฿<span>0.00</span></h4></label>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-8 d-inline-block d-xl-none d-md-none"></div>
                        <div class="col-lg-8 d-none d-lg-block d-xl-none"></div>
                        <div class="col-sm-4 col-md-3 col-lg-4 col-xl-2 text-right">
                            <form action="{{route('shoppingCartPayment')}}" method="post">
                                @csrf
                                <button class="btn-submit-red" name="submit" value="submit"><p style="margin:0;">ชำระเงิน</p></button>
                                <input type="hidden" name="itemList" id="data-checked">
                                <input type="hidden" name="sumTotal" id="sumTotal">
                                <input type="hidden" name="allTotal" id="allTotal">
                                <input type="hidden" name="allamount" id="allamount">
                                <input type="hidden" name="countChecked" id="countChecked">
                                <input type="hidden" name="allshopp" id="allshopp">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-xl-9 bg_avatar2"></div>
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
    $(function() {
        (function quantityProducts() {
            var $quantityArrowMinus = $(".quantity-down");
            var $quantityArrowPlus = $(".quantity-up");
            $quantityArrowMinus.click(quantityMinus);
            $quantityArrowPlus.click(quantityPlus);

            var sum;
            function quantityMinus() {
                $quantityNum = $(this).parent().find('.quantity-num').val();
                if($quantityNum > 1){
                    $quantityNum = (+$quantityNum - 1);
                    $(this).parent().find('.quantity-num').val($quantityNum);
                    $(this).parent().find('.quantity-num').attr('amount', $quantityNum);
                    // $(this).parents('form').find('input[name="amountItem"]').val($quantityNum);
                    dataprice = $(this).parent().find('.quantity-num').attr('dataprice');
                    sum = (+dataprice)*$quantityNum;
                    $(this).parents('.data-div').find('.total span').text(new Intl.NumberFormat().format(sum));
                    // $(this).parents('form').find('input[name="sumprice"]').val(sum);
                    $(this).parents('.data-div').find('input[name="accept_01"]').attr('data-price', sum);
                    console.log(dataprice);
                    console.log(sum);
                    updateCounter();
                }
            }
            function quantityPlus() {
                $quantityNum = $(this).parent().find('.quantity-num').val();
                $max = $(this).parent().find('.quantity-num').attr('max');
                if($quantityNum < (+$max)){
                    $quantityNum = (+$quantityNum + 1);
                    $(this).parent().find('.quantity-num').val($quantityNum);
                    $(this).parent().find('.quantity-num').attr('amount', $quantityNum);
                    // $(this).parents('form').find('input[name="amountItem"]').val($quantityNum);
                    dataprice = $(this).parent().find('.quantity-num').attr('dataprice');
                    sum = (+dataprice)*$quantityNum;
                    $(this).parents('.data-div').find('.total span').text(new Intl.NumberFormat().format(sum));
                    // $(this).parents('form').find('input[name="sumprice"]').val(sum);
                    $(this).parents('.data-div').find('input[name="accept_01"]').attr('data-price', sum);
                    console.log(dataprice);
                    console.log(sum);
                    updateCounter();
                }
            }
            function updateCounter() {
                var total = 0;
                var alltotal = [];
                var favorite = [];
                var allamount = [];
                var allshopp = [];
                var len = $("#general-content input[name='accept_01']:checked").length;
                if(len>0){
                    $(".count-checked span").text(len);
                    $.each($("input[name='accept_01']:checked"), function(){
                        favorite.push($(this).val());
                    });
                    $("input[name='accept_01']:checked").each(function() {
                        total += parseFloat($(this).attr('data-price')) || 0;
                        alltotal.push($(this).attr('data-price'));
                        allamount.push($(this).parents('.data-div').find('.quantity-num').val());
                        allshopp.push($(this).attr('data-shop'));
                    });
                    $('.sumtotal span').html(new Intl.NumberFormat().format(total));
                    document.querySelector('input#sumTotal').value = total;
                    document.querySelector('input#allTotal').value = alltotal.join(", ");
                    document.querySelector('input#allamount').value = allamount.join(", ");
                    document.querySelector('input#data-checked').value = favorite.join(", ");
                    document.querySelector('input#allshopp').value = allshopp.join(", ");
                    document.querySelector('input#countChecked').value = len;
                    // console.log(total);
                    // console.log(alltotal.join(", "));
                    // console.log(allamount.join(", "));
                    // console.log(favorite.join(", "));
                }else{
                    $(".count-checked span").text('0');
                    $.each($("input[name='accept_01']:checked"), function(){
                        favorite.push($(this).val());
                    });
                    $("input[name='accept_01']:checked").each(function() {
                        total += parseFloat($(this).attr('data-price')) || 0;
                        alltotal.push($(this).attr('data-price'));
                        allamount.push($(this).parents('.data-div').find('.quantity-num').val());
                        allshopp.push($(this).attr('data-shop'));
                    });
                    $('.sumtotal span').html("0.00");
                    document.querySelector('input#sumTotal').value = total;
                    document.querySelector('input#allTotal').value = alltotal.join(", ");
                    document.querySelector('input#allamount').value = allamount.join(", ");
                    document.querySelector('input#data-checked').value = favorite.join(", ");
                    document.querySelector('input#allshopp').value = allshopp.join(", ");
                    document.querySelector('input#countChecked').value = len;
                    // console.log(total);
                    // console.log(alltotal.join(", "));
                    // console.log(allamount.join(", "));
                    // console.log(favorite.join(", "));
                }
            }
            $("#general-content input:checkbox").on("change", function() {
                updateCounter();
            });

            $(function() {
                $('#checkbox_all').change(function() {
                    var checkthis = $(this);
                    var checkboxes = $(this).parent().next('.count-checked span').find("input[name='accept_01']");

                    if(checkthis.is(':checked')) {
                        checkboxes.attr('checked', true);
                    } else {
                        checkboxes.attr('checked', false);
                    }
                    updateCounter();
                });
                
            })

            $(".btn-none.deleteShopping").click(function(e) {
                var btnThis = $(this);
                alert("ยืนยันการลบรายการ");
                var shopping_cart_id = $(this).parent().find('input[name="shopping_cart_id"]').val();
                var Delete = "Delete";

                console.log(shopping_cart_id);

                $.ajax({
                    url: "{{route('addShoppingCart')}}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        shopping_cart_id:shopping_cart_id,
                        Delete:Delete,
                    },
                    success: function(response) {
                        // console.log(response);
                        updateCounter();
                        $('.font-shop').text(response.count);
                        btnThis.parents('.data-div').remove();
                        if(response.delete){
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                title: response.delete,
                                // title: 'Oops...',
                                showConfirmButton: false,
                                timer: 2000
                            })
                        }
                    },
                    error: function() {}
                });
            });
        })();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- <script>
    $(document).ready(function(e) {
        $(".btn-none.deleteShopping").click(function(e) {
            var btnThis = $(this);
            alert("ยืนยันการลบรายการ");
            var shopping_cart_id = $(this).parent().find('input[name="shopping_cart_id"]').val();
            var Delete = "Delete";

            console.log(shopping_cart_id);

            $.ajax({
                url: "{{route('addShoppingCart')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    shopping_cart_id:shopping_cart_id,
                    Delete:Delete,
                },
                success: function(response) {
                    // console.log(response);
                    $('.font-shop').text(response.count);
                    btnThis.parents('.data-div').remove();
                    if(response.delete){
                        Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: response.delete,
                            // title: 'Oops...',
                            showConfirmButton: false,
                            timer: 2000
                        })
                    }
                },
                error: function() {}
            });
        });
    });
</script> -->
@endsection