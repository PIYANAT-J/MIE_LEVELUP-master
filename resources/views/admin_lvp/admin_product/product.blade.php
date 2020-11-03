@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row"  id="getActive" active="/product">
        @include('profile.sidebar.admin_sidebar')
        <div class="col-10" style="background-color: #f5f5f5;">
            <div class="row py-3" style="background-color: #fff;">
                <div class="col-12">
                    <div class="inputWithIcon2">
                        <input class="search_btn2 p" type="text" placeholder="ค้นหา" aria-label="Search">
                        <i class="icon-search-back" aria-hidden="true" style="font-size:1.1em"></i>
                    </div>
                </div>
            </div>

            <div class="row pb-2 pt-3">
                <div class="col-12"><h1 class="fontHeader">การจัดการสินค้า</h1></div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#Allproduct">ทั้งหมด</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#product2">รอการตรวจสอบ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#product3">ไม่ผ่านการอนุมัติ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#product4">อนุมัติแล้ว</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="Allproduct" class="tab-pane active">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-4 py-3 th1 p text-left">รายการสินค้า</div>
                                        <div class="col-3 py-3 th1 p">ผู้สนับสนุน</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($product as $productAll)
                                                <div class="row">
                                                    <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                    <div class="col-4 py-1 td1 p text-left">{{$productAll->product_name}}</div>
                                                    <div class="col-3 py-1 td1 p">{{$productAll->name}} {{$productAll->surname}}</div>
                                                    <div class="col-2 py-1 td1 p">
                                                        @if($productAll->product_status == "รออนุมัติ")
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$productAll->product_id}}">รอการตรวจสอบ</label>
                                                        @elseif($productAll->product_status == "อนุมัติ")
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$productAll->product_id}}">อนุมัติแล้ว</label>
                                                        @else
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$productAll->product_id}}">ไม่ผ่านการอนุมัติ</label>
                                                        @endif
                                                    </div>
                                                    <div class="col-2 py-2 td1 p">{{$productAll->ADMIN_NAME}}</div>
                                                </div>
                                                <?php $i++; ?>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="product2" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-4 py-3 th1 p text-left">รายการสินค้า</div>
                                        <div class="col-3 py-3 th1 p">ผู้สนับสนุน</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            <?php $i = 1; ?>
                                            @foreach($product as $productAll)
                                                @if($productAll->product_status == "รออนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-4 py-1 td1 p text-left">{{$productAll->product_name}}</div>
                                                        <div class="col-3 py-1 td1 p">{{$productAll->name}} {{$productAll->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-wait-approve" data-toggle="modal" data-target="#pendingApprove{{$productAll->product_id}}">รอการตรวจสอบ</label>
                                                        </div>
                                                        <div class="col-2 py-2 td1 p">{{$productAll->ADMIN_NAME}}</div>
                                                    </div>
                                                    <?php $i++; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="product3" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-4 py-3 th1 p text-left">รายการสินค้า</div>
                                        <div class="col-3 py-3 th1 p">ผู้สนับสนุน</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            @foreach($product as $productAll)
                                                @if($productAll->product_status == "ไม่อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-4 py-1 td1 p text-left">{{$productAll->product_name}}</div>
                                                        <div class="col-3 py-1 td1 p">{{$productAll->name}} {{$productAll->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-none-approve" data-toggle="modal" data-target="#noneApprove1{{$productAll->product_id}}">ไม่ผ่านการอนุมัติ</label>
                                                        </div>
                                                        <div class="col-2 py-2 td1 p">{{$productAll->ADMIN_NAME}}</div>
                                                    </div>
                                                    <?php $i++; ?>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div id="product4" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-4 py-3 th1 p text-left">รายการสินค้า</div>
                                        <div class="col-3 py-3 th1 p">ผู้สนับสนุน</div>
                                        <div class="col-2 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p">ผู้อนุมัติ</div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-lg-12">
                                            @foreach($product as $productAll)
                                                @if($productAll->product_status == "อนุมัติ")
                                                    <div class="row">
                                                        <div class="col-1 py-1 td1 p">{{$i}}</div>
                                                        <div class="col-4 py-1 td1 p text-left">{{$productAll->product_name}}</div>
                                                        <div class="col-3 py-1 td1 p">{{$productAll->name}} {{$productAll->surname}}</div>
                                                        <div class="col-2 py-1 td1 p">
                                                            <label class="status-approve" data-toggle="modal" data-target="#Approve{{$productAll->product_id}}">อนุมัติแล้ว</label>
                                                        </div>
                                                        <div class="col-2 py-2 td1 p">{{$productAll->ADMIN_NAME}}</div>
                                                    </div>
                                                    <?php $i++; ?>
                                                @endif
                                            @endforeach
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

@foreach($product as $key=>$productModal)
<div class="modal fade" id="pendingApprove{{$productModal->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการสนับสนุนสินค้า</h1></div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">
                <div class="row px-3 mb-2">
                    <div class="col-12 pb-1">
                        <div class="row">
                            <div class="col-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product//product_img/'.$productModal->product_img) }}" >
                            </div>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อสินค้า</p>
                                <input type="text" class="input1 p ml-2" name="product_name" value="{{$productModal->product_name}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวนสินค้า</p>
                                    <input type="text" class="input1 p ml-2" name="product_amount" value="{{$productModal->product_amount}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวน Point ที่ใช้แลก</p>
                                    <input type="text" class="input1 p ml-2" name="product_point" value="{{$productModal->product_point}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap my-1" style="margin-bottom:0;">
                                <p class="fontHeadInput">รายละเอียดสินค้า</p>
                                <label class="input1 p ml-2" name="product_description" value="{{$productModal->product_description}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">วันหมดเขตการแลกสินค้า</p>
                                <input type="text" value="{{$productModal->product_deadline}}" class="input1 p ml-2" readonly></input>
                            </label>
                        </div>
                        <form action="{{route('ApproveProduct')}}" method="post">
                            @csrf
                            <div class="custom02 mb-2">
                                <div>
                                    <input type="radio" name="Approve" value="อนุมัติ" id="approve{{$key}}">
                                    <label for="approve{{$key}}" style="color:#000;" class="p">อนุมัติ</label>
                                </div>
                                <!-- <div>
                                    <input type="radio" name="Approve" value="ไม่อนุมัติ" id="noneApprove{{$key}}">
                                    <label for="noneApprove{{$key}}" style="color:#000;" for="nl">ไม่อนุมัติ</label>
                                </div> -->
                            </div>
                            <div class="row">
                                <button name="submit" value="submit" class="btn-submit-modal-red">ยืนยัน</button>
                                <input type="hidden" name="product_id" value="{{$productModal->product_id}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Approve{{$productModal->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                    <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการสนับสนุนสินค้า</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3 mb-2">
                    <div class="col-12 pb-1">
                        <div class="row"><label class="status-approve2" style="text-align:center;">อนุมัติแล้ว</label></div>
                        <div class="row">
                            <div class="col-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product//product_img/'.$productModal->product_img) }}" >
                            </div>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อสินค้า</p>
                                <input type="text" class="input1 p ml-2" name="product_name" value="{{$productModal->product_name}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวนสินค้า</p>
                                    <input type="text" class="input1 p ml-2" name="product_amount" value="{{$productModal->product_amount}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวน Point ที่ใช้แลก</p>
                                    <input type="text" class="input1 p ml-2" name="product_point" value="{{$productModal->product_point}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap my-1" style="margin-bottom:0;">
                                <p class="fontHeadInput">รายละเอียดสินค้า</p>
                                <label class="input1 p ml-2" name="product_description" value="{{$productModal->product_description}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">วันหมดเขตการแลกสินค้า</p>
                                <input type="text" class="input1 p ml-2" value="{{$productModal->product_deadline}}" readonly></input>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noneApprove1{{$productModal->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                    <div class="col-10 text-center"><h1 style="margin:0;">อนุมัติการสนับสนุนสินค้า</h1></div>
                <button type="button" class="close btn-closeModal" data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">
                <div class="row px-3 mb-2">
                    <div class="col-12 pb-1">
                        <div class="row"><label class="status-none-approve2" style="text-align:center;">ไม่ผ่านการอนุมัติ</label></div>
                        <div class="row">
                            <div class="col-12 pb-1 text-center mb-2">
                                <img class="imgProduct" src="{{asset('section/product/test.jpg') }}" >
                            </div>
                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">ชื่อสินค้า</p>
                                <input type="text" class="input1 p ml-2" name="product_name" value="{{$productModal->product_name}}" readonly></input>
                            </label>
                            <div class="col-6" style="padding-left:0;padding-right:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวนสินค้า</p>
                                    <input type="text" class="input1 p ml-2" name="product_amount" value="{{$productModal->product_amount}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <div class="col-6" style="padding-right:0;padding-left:5px;">
                                <label class="bgInput field-wrap my-1">
                                    <p class="fontHeadInput">จำนวน Point ที่ใช้แลก</p>
                                    <input type="text" class="input1 p ml-2" name="product_point" value="{{$productModal->product_point}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly></input>
                                </label>
                            </div>
                            <label class="bgInput field-wrap my-1" style="margin-bottom:0;">
                                <p class="fontHeadInput">รายละเอียดสินค้า</p>
                                <label class="input1 p ml-2" name="product_description" value="{{old('product_description')}}" style="line-height:120%;" row="3"></label><br>
                            </label>
                            <span class="label2 ml-3" id="now_length"></span>

                            <label class="bgInput field-wrap my-1">
                                <p class="fontHeadInput">วันหมดเขตการแลกสินค้า</p>
                                <input type="text" class="input1 p ml-2" value="{{$productModal->product_deadline}}" readonly></input>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- พื้นหลัง -->
<div class="container-fluid">
    <div class="row">
        <div class="col-2 bgSidebar"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 bgContent"></div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            // alert('yes')
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: '{{ Session::get('success') }}',
                // title: 'Oops...',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
@endsection