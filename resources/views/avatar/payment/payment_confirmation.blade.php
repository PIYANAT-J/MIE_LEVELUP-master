@extends('layout.avatar_navbar')
@section('content')
<div class="container-fluid" id="getActive" active="{{ route('Avatar') }}">
    <div class="row my-5"></div>
    <div class="row  mt-3">
    @include('profile.sidebar.avatar_sidebar')
 
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 pt-3 pb-4" style="background-color:#141621; ">
            <div class="row mt-4" >
                <div class="col-12 pt-2 " style="color:#fff;">
                    <label>
                        <a href="/avatar"class="avatar-link active">
                            <h1 style="margin:0;">Avatar</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/shopping_cart" class="avatar-link active">
                            <h1 style="margin:0;">ตะกร้าสินค้า</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/payment" class="avatar-link active">
                            <h1 style="margin:0;">ชำระเงิน</h1>
                        </a>
                    </label>
                    <label>
                        <h1 style="margin: 0;" class="avatar-link"> > </h1>
                    </label>
                    <label>
                        <a href="/payment_confirmation" class="avatar-link" >
                            <h1 style="margin:0;">ยืนยันการชำระเงิน</h1>
                        </a>
                    </label>
                </div>
            </div>

            <div class="row mb-4 mt-2">
                <div class="col-12"> 
                    <div class="row mx-0" style="background-color:#202433;border-radius: 6px;">
                        <div class="col-12 mt-1">
                            <div class="row mx-2 py-3" style="font-family:myfont1;font-size:1em;color:#fff;border-bottom:1px solid #fff;font-weight:800;">ยืนยันการชำระเงิน</div>
                            <?php 
                                $transee = json_decode($transeection->transeection_items);
                                $itemlist = array();
                                $itemamount = array();
                                $itemprice = array();
                                $i = 0;
                                foreach($transee as $transeeList){
                                    $itemlist[] = $transeeList->item_id;
                                    $itemamount[] = $transeeList->item_amount;
                                    $itemprice[] = $transeeList->item_price;
                                }
                            ?>
                            @foreach($marketItem as $shoppingList)
                                @if(in_array($shoppingList->item_id, $itemlist))
                                    @for($i=0;$i < count($itemlist);$i++)
                                        @if($shoppingList->item_id == $itemlist[$i])
                                            <div class="row mx-2 mt-2" style="border-bottom:1px solid #455160">
                                                <div class="col-7" style="padding:0;">
                                                    <label class="labelItemAvatar bgItem mr-2">
                                                        <!-- <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" /> -->
                                                        @if($shoppingList->item_type == "clothes")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/clothes/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "eyes")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/eyes/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "glasses")
                                                            <img class="picture2" src="{{asset('home/avatar/glasses/'.$shoppingList->item_img) }}">
                                                        @elseif($shoppingList->item_type == "hair")
                                                            @if($shoppingList->item_gender == "woman")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/woman/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @elseif($shoppingList->item_gender == "man")
                                                                @if($shoppingList->item_other == "hero")
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/hero/'.$shoppingList->item_img) }}">
                                                                @else
                                                                    <img class="picture2" src="{{asset('home/avatar/hair/man/'.$shoppingList->item_img) }}">
                                                                @endif
                                                            @endif
                                                        @elseif($shoppingList->item_type == "other")
                                                            <img class="picture2" src="{{asset('home/avatar/other/'.$shoppingList->item_img) }}">
                                                        @elseif($shoppingList->item_type == "weapon")
                                                            <img class="picture2" src="{{asset('home/avatar/weapon/'.$shoppingList->item_img) }}">
                                                        @endif
                                                    </label> 
                                                    <label class="font-sale4 bgItem2 mt-2">
                                                        <p style="margin:0;"> <a style="font-weight: 700;">{{$shoppingList->item_name}} ระดับ {{$shoppingList->item_level}} </a></br>
                                                        {{$shoppingList->item_description}}</br>
                                                        เลือกลงทุนได้ 3 Signal</p>
                                                    </label>
                                                </div>

                                                <div class="col-2 my-4 text-center" style="padding:0;">
                                                    <p style="margin:0;color:#fff;">{{$itemamount[$i]}} ชิ้น</p>
                                                </div>

                                                <div class="col-3 my-3">
                                                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($itemprice[$i], 2)}}</h4>
                                                        @if($shoppingList->item_discount != 0)
                                                            <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿{{number_format($itemprice[$i], 2)}} </a> (-{{$shoppingList->item_discount}}%)</p>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            @endforeach
                            <!-- <div class="row mx-2 mt-2" style="border-bottom:1px solid #455160">
                                <div class="col-7" style="padding:0;">
                                    <label class="labelItemAvatar bgItem mr-2">
                                        <img class="picture2" src="{{asset('home/avatar/other/crown_01.png') }}" />
                                    </label> 
                                    <label class="font-sale4 bgItem2 mt-2">
                                        <p style="margin:0;"> <a style="font-weight: 700;">ชื่อไอเทม ระดับ 3</a></br>
                                        คำอธิบาย</br>
                                        เลือกลงทุนได้ 3 Signal</p>
                                    </label>
                                </div>

                                <div class="col-2 my-4 text-center" style="padding:0;">
                                    <p style="margin:0;color:#fff;">1 ชิ้น</p>
                                </div>

                                <div class="col-3 my-3">
                                    <span class="font-price3" style="line-height: 1.2; display:block;text-align:right;">
                                        <h4 style="margin:0;font-weight:800;color:#ce0005;">฿3000</h4>
                                        <p class="mr-2" style="margin:0;Color:#fff;"> <a style="color: #b2b2b2;text-decoration:line-through;">฿11,400 </a> (-25)</p>
                                    </span>
                                </div>
                            </div> -->
                            <div class="row mx-2" style="border-bottom:1px solid #455160">
                                <div class="col-6 font-payment2 py-3 "><p style="margin:0;font-weight:800;">จำนวนเงินที่ต้องชำระ</p></div>
                                <div class="col-6 text-right font-price align-self-center"><h4 style="margin:0;font-weight:800;color:#ce0005;">฿{{number_format($transeection->transeection_price, 2)}}</h4></div>
                            </div>

                            <div class="row mx-2 py-3" style="border-bottom:1px solid #455160">
                                <div class="col-6 font-payment2"><p style="margin:0;font-weight:800;">ช่องทางการชำระเงิน</p></div>
                                <div class="col-6 text-right font-payment2"><p style="margin:0;">ibanking ชื่อบัญชี {{ Auth::user()->name }} {{ Auth::user()->surname }}</p></div>
                            </div>
                            @if(isset($invoice))
                                <div class="row d-flex justify-content-center mt-3">
                                    <div style="background-color:#ffffff;padding:10px; width:240px;">{!! DNS2D::getBarcodeHTML($invoice, "QRCODE",6,6) !!}</div>
                                </div>
                                <div class="row mt-3 py-2 " style="background-color:#000;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;">
                                    <div class="col-lg-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-8"></div>
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-2">
                                                <form action="{{route('cancalItem')}}" method="post">
                                                    @csrf
                                                    <button class="btn-cancel">
                                                        <p style="margin:0;">ยกเลิก</p>
                                                    </button>
                                                    <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                                </form>
                                            </div>
                                            <!-- <div class="col-lg-2"> -->
                                                <!-- <form action="{{route('cancalItem')}}" method="post">
                                                    @csrf
                                                    <button class="btn-submit-red" name="submit" value="submit">
                                                        <p style="margin:0;color:#fff;">ยืนยัน</p>
                                                        <input type="hidden" name="invoice" value="{{$qrpayment->invoice}}">
                                                    </button>
                                                </form> -->
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg_avatar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 bg_avatar2"></div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if( Session::has('false'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                // position: 'top-end',
                icon: 'error',
                title: '{{ Session::get('false') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif

<script>
    $(document).ready(function(e) {
        invoice = "{{$qrpayment->invoice}}";
        console.log(invoice);
        submit = "submit";
        console.log(submit);
        setInterval(function(){
            $.ajax({
                url: "{{route('cancalItem')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    invoice:invoice,
                    submit:submit,
                },
                success: function(response) {
                    if(response.success){
                        console.log(response.success)
                        window.location.href = response.route;
                    }else{
                        console.log(response.false)
                        // window.location.href = response.route;
                    }
                },
                error: function() {}
            });
        }, 2000);
    });
</script>
@endsection