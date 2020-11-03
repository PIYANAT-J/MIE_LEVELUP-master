@extends('layout.header')
@section('content')
<div class="container-fluid" id="getActive" active="/avatar_management">
    <div class="row">
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
                <div class="col-6"> <h1 class="fontHeader">ข้อมูลตัวละคร</h1></div>
                <div class="col-6 text-right">
                    <div id="first">
                        <select class="SelectWh p">
                            <option value="0">ทั้งหมด</option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">

                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#avatar" onClick="myFunction2()">ตัวละคร</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#item1" onClick="myFunction()" >ศรีษะ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#item2" onClick="myFunction()" >เสื้อผ้า</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#item3" onClick="myFunction()" >อาวุธ</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#item4" onClick="myFunction()" >ไอเทมพิเศษ</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                <div id="avatar" class="tab-pane active"><br>
                                    <div class="row">
                                        <div class="col-12 py-3 mb-5" style="background-color:#ffffff;border-radius: 8px;">
                                            <div class="row">
                                                <div class="col-6 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <p class="fontHeader" style="margin:0;">ตัวละครชาย</p>
                                                </div>
                                                <div class="col-6 pt-2 pb-3" style="border-bottom: 1px solid #f2f2f2;"> 
                                                    <p class="fontHeader" style="margin:0;">ตัวละครหญิง</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 line1">
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                            <!-- ศรีษะชาย -->
                                                            <div class="avatarAdmin">
                                                                <div id="thumbHeadMan" class="thumbHeadMan">
                                                                    <img src="home/avatar/head/head_man.png">
                                                                </div>    
                                                                <input id="file_uploadHeadMan" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                <button id="upload-head-man" class="btn-upload-head">
                                                                    <p style="margin:0;color:#ffffff;">ศรีษะ</p>
                                                                </button>

                                                            <!-- ทรงผมชาย -->
                                                                <div id="thumbHairMan" class="thumbHairMan">
                                                                    <img src="home/avatar/hair/man/hair_man_01.png">
                                                                </div>    
                                                                <input id="file_uploadHairMan" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-hair-man" class="btn-upload-hair">
                                                                    <p style="margin:0;color:#ffffff;">ทรงผม</p>
                                                                </button>

                                                            <!-- ดวงตาชาย -->
                                                                <div id="thumbEyesMan" class="thumbEyesMan">
                                                                    <img src="home/avatar/eyes/man/eyes_man_01.png">
                                                                </div>    
                                                                <input id="file_uploadEyesMan" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-eyes-man" class="btn-upload-eyes">
                                                                    <p style="margin:0;color:#ffffff;">ดวงตา</p>
                                                                </button>

                                                            <!--ลำตัวชาย-->
                                                                <div id="thumbBodyMan" class="thumbBodyMan">
                                                                    <img src="home/avatar/clothes/man/clothes_man_01.png">
                                                                </div>    
                                                                <input id="file_uploadBodyMan" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-body-man" class="btn-upload-body">
                                                                    <p style="margin:0;color:#ffffff;">ลำตัว</p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="btn-submit ">
                                                                <p style="margin:0;">ยืนยัน</p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                <div class="row mt-2">
                                                        <div class="col-12">
                                                            <!-- ศรีษะหญิง-->
                                                            <div class="avatarAdmin">
                                                                <div id="thumbHeadWoman" class="thumbHeadWoman">
                                                                    <img src="home/avatar/head/head_woman.png">
                                                                </div>    
                                                                <input id="file_uploadHeadWoman" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                <button id="upload-head-woman" class="btn-upload-head">
                                                                    <p style="margin:0;color:#ffffff;">ศรีษะ</p>
                                                                </button>

                                                            <!-- ทรงผมหญิง-->
                                                                <div id="thumbHairWoman" class="thumbHairWoman">
                                                                    <img src="home/avatar/hair/woman/hair_woman_01.png">
                                                                </div>    
                                                                <input id="file_uploadHairWoman" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-hair-woman" class="btn-upload-hair">
                                                                    <p style="margin:0;color:#ffffff;">ทรงผม</p>
                                                                </button>

                                                            <!-- ดวงตาหญิง-->
                                                                <div id="thumbEyesWoman" class="thumbEyesWoman">
                                                                    <img src="home/avatar/eyes/woman/eyes_woman_01.png">
                                                                </div>    
                                                                <input id="file_uploadEyesWoman" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-eyes-woman" class="btn-upload-eyes">
                                                                    <p style="margin:0;color:#ffffff;">ดวงตา</p>
                                                                </button>

                                                            <!--ลำตัวหญิง-->
                                                                <div id="thumbBodyWoman" class="thumbBodyWoman">
                                                                    <img src="home/avatar/clothes/woman/clothes_woman_01.png">
                                                                </div>    
                                                                <input id="file_uploadBodyWoman" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                                                                
                                                                <button id="upload-body-woman" class="btn-upload-body">
                                                                    <p style="margin:0;color:#ffffff;">ลำตัว</p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="btn-submit ">
                                                                <p style="margin:0;">ยืนยัน</p>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="item1" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">รูปภาพ</div>
                                        <div class="col-2 py-3 th1 p">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1 p">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1 p">ประเภท</div>
                                        <div class="col-1 py-3 th1 p">ชนิด</div>
                                        <div class="col-2 py-3 th1 p">ราคา</div>
                                        <div class="col-1 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p text-right">
                                            <label style="cursor:pointer;" data-toggle="modal" data-target="#AddItem1"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/hair/h01.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1 p">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 p text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1 p">ทรงผม</div>
                                                <div class="col-1 py-1 td1 p">ขาย</div>
                                                <div class="col-2 py-1 td1 p text-right">
                                                    1000 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>1500</h5></label>
                                                    <label ><h5 style="color:#ce0005">(-5%)</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 p text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 p text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;" data-toggle="modal" data-target="#EditItem1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="item2" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">รูปภาพ</div>
                                        <div class="col-2 py-3 th1 p">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1 p">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1 p">ประเภท</div>
                                        <div class="col-1 py-3 th1 p">ชนิด</div>
                                        <div class="col-2 py-3 th1 p">ราคา</div>
                                        <div class="col-1 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p text-right">
                                            <label style="cursor:pointer;" data-toggle="modal" data-target="#AddItem2"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/clothes/c05.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1 p">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 p text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1 p">ฮีโร่</div>
                                                <div class="col-1 py-1 td1 p">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 p text-right">0 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>0</h5></label>
                                                    <label ><h5 style="color:#ce0005">0</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 p text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 p text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;" data-toggle="modal" data-target="#EditItem2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="item3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">รูปภาพ</div>
                                        <div class="col-2 py-3 th1 p">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1 p">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1 p">ประเภท</div>
                                        <div class="col-1 py-3 th1 p">ชนิด</div>
                                        <div class="col-2 py-3 th1 p">ราคา</div>
                                        <div class="col-1 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p text-right">
                                            <label style="cursor:pointer;margin:0;" data-toggle="modal" data-target="#AddItem3"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/weapon/sword/s02.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1 p">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 p text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1 p">ดาบ</div>
                                                <div class="col-1 py-1 td1 p">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 p text-right">0 <br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>0</h5></label>
                                                    <label ><h5 style="color:#ce0005">0</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 p text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 p text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;" data-toggle="modal" data-target="#EditItem3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="item4" class="tab-pane">
                                    <div class="row">
                                        <div class="col-1 py-3 th1 p">รูปภาพ</div>
                                        <div class="col-2 py-3 th1 p">ชื่อไอเทม</div>
                                        <div class="col-2 py-3 th1 p">คำอธิบาย</div>
                                        <div class="col-1 py-3 th1 p">ประเภท</div>
                                        <div class="col-1 py-3 th1 p">ชนิด</div>
                                        <div class="col-2 py-3 th1 p">ราคา</div>
                                        <div class="col-1 py-3 th1 p">สถานะ</div>
                                        <div class="col-2 py-3 th1 p text-right">
                                            <label style="cursor:pointer;margin:0;" data-toggle="modal" data-target="#AddItem4"> + เพิ่มไอเทม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p text-left">
                                                    <img style="width:100%" src="{{asset('home/avatar/man/other/armor/a01.svg')}}" alt="">
                                                </div>
                                                <div class="col-2 py-1 td1 p">ไอเทม01</div>
                                                <div class="col-2 py-1 td1 p text-left" style="word-wrap: break-word;">สามารถเห็น Signal Rank 5-10 ได้เลือกลงทุนได้ 5 Signal</div>
                                                <div class="col-1 py-1 td1 p">เสื้อเกราะ</div>
                                                <div class="col-1 py-1 td1 p">พื้นฐาน</div>
                                                <div class="col-2 py-1 td1 p text-right">2544<br> 
                                                    <label style="text-decoration-line: line-through;color:#dddddd;"><h5>2222</h5></label>
                                                    <label ><h5 style="color:#ce0005">(-10%)</h5></label>
                                                </div>
                                                <div class="col-2 py-1 td1 p text-left">
                                                    <label class="bgT10ListBankingPay" style="cursor:default;">ไม่ใช้งาน</label>
                                                    <label class="bgGreen" style="cursor:default;">ใช้งาน</label>
                                                </div>
                                                <div class="col-1 py-1 td1 p text-right">
                                                    <i class="fa fa-trash-o mr-3" aria-hidden="true" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" aria-hidden="true" style="cursor:pointer;" data-toggle="modal" data-target="#EditItem3"></i>
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

<div class="modal fade" id="AddItem1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">เพิ่มข้อมูลไอเทม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12">
                        <div align="center">
                            <div id="thumbitem1" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem1" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem1" class="btn-upload-pic mt-2">
                                <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ทรงผม</option>
                                <option value="">สีตา</option>
                                <option value="">แว่นตา</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
                        </label>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditItem1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ส่วนลด</p>
                            <input id="name" type="text" class="input1 p ml-2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <div class="col-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive" id="inactive01">
                            <label for="inactive01" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AddItem2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem2" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem2" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem1" class="btn-upload-pic mt-2">
                                <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภทชุด</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ไปรเวท</option>
                                <option value="">ฮีโร่</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
                        </label>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditItem2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ส่วนลด</p>
                            <input id="name" type="text" class="input1 p ml-2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <div class="col-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AddItem3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem3" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem3" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem3" class="btn-upload-pic mt-2">
                                <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภทอาวุธ</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ดาบ</option>
                                <option value="">คฑา</option>
                                <option value="">ปืน</option>
                                <option value="">ธนู</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
                        </label>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditItem3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ส่วนลด</p>
                            <input id="name" type="text" class="input1 p ml-2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <div class="col-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AddItem4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">เพิ่มข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12">
                        <div class="form-group" align="center">
                            <div id="thumbitem4" class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>    
                            <input id="file_uploaditem4" style="display:none" name="product_img" type="file" multiple="true" accept="image/* ">
                            <button id="uploaditem4" class="btn-upload-pic mt-2">
                                <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" required autofocus>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">หมวก/มงกุฏ</option>
                                <option value="">ถุงมือ</option>
                                <option value="">เสื้อเกราะ</option>
                                <option value="">รองเท้า</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">พื้นฐาน</option>
                                <option value="">ไอเทมขาย</option>
                            </select>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <select class="MySelect p pl-2" type="text" name="text4">
                                <option value="">ชาย</option>
                                <option value="">หญิง</option>
                            </select>
                        </label>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditItem4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center" style="font-family:myfont1;font-weight: 800;font-size:1em;color:#000;">แก้ไขข้อมูลไอเทม</div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body font-rate-modal">                        
                <div class="row">
                    <div class="col-12 mb-3">
                        <div align="center">
                            <div class="thumb-game "><img src="home/imgProfile/pic-profile.png"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชื่อไอเทม</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">คำอธิบาย</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ประเภท</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ชนิด</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ราคา</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">ส่วนลด</p>
                            <input id="name" type="text" class="input1 p ml-2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </label>
                        <label class="bgInput field-wrap my-1">
                            <p class="fontHeadInput">เพศ</p>
                            <input id="name" type="text" class="input1 p ml-2" readonly>
                        </label>
                        <div class="col-12 my-2 pl-4 custom02">
                            <input type="radio" name="status" value="inactive02" id="inactive02">
                            <label for="inactive02" style="color:#000;">ไม่ใช้งาน</label>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="button" class="btn-submit-red">
                            <p style="margin:0;">ยืนยัน</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>



<script> /*ศรีษะชาย */
    $(function () {
        $("#upload-head-man").on("click",function(e){
            $("#file_uploadHeadMan").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadHeadMan").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbHeadMan").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbHeadMan");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ทรงผมชาย */
    $(function () {
        $("#upload-hair-man").on("click",function(e){
            $("#file_uploadHairMan").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadHairMan").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbHairMan").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbHairMan");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ดวงตาชาย */
    $(function () {
        $("#upload-eyes-man").on("click",function(e){
            $("#file_uploadEyesMan").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadEyesMan").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbEyesMan").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbEyesMan");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ลำตัวชาย */
    $(function () {
        $("#upload-body-man").on("click",function(e){
            $("#file_uploadBodyMan").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadBodyMan").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbBodyMan").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbBodyMan");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ศรีษะหญิง */
    $(function () {
        $("#upload-head-woman").on("click",function(e){
            $("#file_uploadHeadWoman").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadHeadWoman").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbHeadWoman").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbHeadWoman");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ทรงผมหญิง */
    $(function () {
        $("#upload-hair-woman").on("click",function(e){
            $("#file_uploadHairWoman").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadHairWoman").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbHairWoman").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbHairWoman");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ดวงตาหญิง */
    $(function () {
        $("#upload-eyes-woman").on("click",function(e){
            $("#file_uploadEyesWoman").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadEyesWoman").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbEyesWoman").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbEyesWoman");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>

<script> /*ลำตัวหญิง */
    $(function () {
        $("#upload-body-woman").on("click",function(e){
            $("#file_uploadBodyMan").show().click().hide();
            e.preventDefault();
        });
        $("#file_uploadBodyWoman").on("change",function(e){
            var files = this.files
            showThumbnail(files)        
        });
        function showThumbnail(files){
            $("#thumbBodyWoman").html("");
            for(var i=0;i<files.length;i++){
                var file = files[i]
                var imageType = /image.*/
                if(!file.type.match(imageType)){
                        //  console.log("Not an Image");
                    continue;
                }
                var image = document.createElement("img");
                var thumbnail = document.getElementById("thumbBodyWoman");
                image.file = file;
                thumbnail.appendChild(image)
                var reader = new FileReader()
                reader.onload = (function(aImg){
                    return function(e){
                        aImg.src = e.target.result;
                    };
                }(image))
                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload= function(){
                    ctx.drawImage(image,100,100)
                }
            } // end for loop
            console.log(file);
        } // end showThumbnail
    });
</script>


<script> /*item1 */
$(function () {
    $("#uploaditem1").on("click",function(e){
        $("#file_uploaditem1").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem1").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem1").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem1");
            image.file = file;
            thumbnail.appendChild(image)
            var reader = new FileReader()
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            }(image))
            var ret = reader.readAsDataURL(file);
            var canvas = document.createElement("canvas");
            ctx = canvas.getContext("2d");
            image.onload= function(){
                ctx.drawImage(image,100,100)
            }
        } // end for loop
        console.log(file);
    } // end showThumbnail
});
</script>

<script> /*item2 */
$(function () {
    $("#uploaditem2").on("click",function(e){
        $("#file_uploaditem2").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem2").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem2").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem2");
            image.file = file;
            thumbnail.appendChild(image)
            var reader = new FileReader()
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            }(image))
            var ret = reader.readAsDataURL(file);
            var canvas = document.createElement("canvas");
            ctx = canvas.getContext("2d");
            image.onload= function(){
                ctx.drawImage(image,100,100)
            }
        } // end for loop
        console.log(file);
    } // end showThumbnail
});
</script>

<script> /*item3 */
$(function () {
    $("#uploaditem3").on("click",function(e){
        $("#file_uploaditem3").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem3").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem3").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem3");
            image.file = file;
            thumbnail.appendChild(image)
            var reader = new FileReader()
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            }(image))
            var ret = reader.readAsDataURL(file);
            var canvas = document.createElement("canvas");
            ctx = canvas.getContext("2d");
            image.onload= function(){
                ctx.drawImage(image,100,100)
            }
        } // end for loop
        console.log(file);
    } // end showThumbnail
});
</script>

<script> /*item4 */
$(function () {
    $("#uploaditem4").on("click",function(e){
        $("#file_uploaditem4").show().click().hide();
        e.preventDefault();
    });
    $("#file_uploaditem4").on("change",function(e){
        var files = this.files
        showThumbnail(files)        
    });
    function showThumbnail(files){
        $("#thumbitem4").html("");
        for(var i=0;i<files.length;i++){
            var file = files[i]
            var imageType = /image.*/
            if(!file.type.match(imageType)){
                    //  console.log("Not an Image");
                continue;
            }
            var image = document.createElement("img");
            var thumbnail = document.getElementById("thumbitem4");
            image.file = file;
            thumbnail.appendChild(image)
            var reader = new FileReader()
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            }(image))
            var ret = reader.readAsDataURL(file);
            var canvas = document.createElement("canvas");
            ctx = canvas.getContext("2d");
            image.onload= function(){
                ctx.drawImage(image,100,100)
            }
        } // end for loop
        console.log(file);
    } // end showThumbnail
});
</script>

<script>
    $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#MESSAGE').html('รหัสผ่านตรงกัน !').css('color', 'green');
        } else 
            $('#MESSAGE').html('รหัสผ่านไม่ตรงกัน !').css('color', 'red');
    });
</script>

<script>
    const myFunction = () => {
    document.getElementById("first").style.display ='block';
    }
    const myFunction2 = () => {
    document.getElementById("first").style.display ='none';
    }
</script>

@endsection