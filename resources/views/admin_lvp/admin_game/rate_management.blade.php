@extends('layout.header')
@section('content')
<div class="container-fluid">
    <div class="row" id="getActive" active="/rate_management">
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
                <div class="col-12">
                    <h1 class="fontHeader">จัดการประเภทเกม</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">


                    <!-- Nav tabs -->
                    <ul class="nav topnav2">
                        <li><a class="nav-link active p" data-toggle="tab" href="#rate1">จัดการประเภทเกม</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#rate2">จัดการเรทเกม</a></li>
                        <li><a class="nav-link p" data-toggle="tab" href="#rate3">จัดการเรทเนื้อหา</a></li>
                    </ul>
                    <!-- Nav tabs -->

                    <div class="row mx-0" >
                        <div class="col-12">
                            <div class="tab-content">
                                
                                <div id="rate1" class="tab-pane active">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อประเภทเกม</div>
                                        <div class="col-6 py-3 th1 p text-left">คำอธิบาย</div>
                                        <div class="col-2 py-3 th1 p text-center">
                                            <label data-toggle="modal" data-target="#game-type" style="cursor:pointer;"> + เพิ่มประเภทเกม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">1</div>
                                                <div class="col-3 py-1 td1 p text-left">Action</div>
                                                <div class="col-7 py-1 td1 p text-left">ต่อสู้ ตลุยด่าน</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">2</div>
                                                <div class="col-3 py-1 td1 p text-left">Adventure</div>
                                                <div class="col-7 py-1 td1 p text-left">เกมส์ในรูปแบบการผจญภัย</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">3</div>
                                                <div class="col-3 py-1 td1 p text-left">BBG</div>
                                                <div class="col-7 py-1 td1 p text-left">Browser-Based Game</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-type"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="rate2" class="tab-pane">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-2 py-3 th1 p text-left">ชื่อประเภทเกม</div>
                                        <div class="col-1 py-3 th1 p ">รูปภาพ</div>
                                        <div class="col-6 py-3 th1 p text-left">คำอธิบาย</div>
                                        <div class="col-2 py-3 th1 p text-center">
                                            <label for="" style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#game-rate"> + เพิ่มเรทเกม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">1</div>
                                                <div class="col-2 py-1 td1 p text-left">EC : Early Childhood</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px;" src="{{asset('section/game_rate/EarlyChildhood.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะกับเด็กอายุ 3 – 6 ปี เนื้อหาไม่มีความรุนแรง</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">2</div>
                                                <div class="col-2 py-1 td1 p text-left">E : Everyone</div>
                                                <div class="col-1 py-1 td1 p"><img style="width:25px;" src="{{asset('section/game_rate/Everyone.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะสำหรับเด็กอายุ 6 ปีขึ้นไป เนื้อหามีความรุนแรงเพิ่มขึ้นเล็กน้อย เช่น เกมกีฬาที่ไม่ใช่การต่อสู้ ภาษาที่ใช้เป็นภาษาสุภาพ</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">3</div>
                                                <div class="col-2 py-1 td1 p text-left">E10+ : Everyone 10+</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px;" src="{{asset('section/game_rate/Everyone10.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะสำหรับเด็กอายุ 10 ปีขึ้นไป เนื้อหามีความรุนแรงมากขึ้น เช่น มีการต่อสู้เล็กน้อยภายในเกม ภาษามีความซับซ้อนขึ้น มีการเล่นมุกตลกเสียดสีบ้าง</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">4</div>
                                                <div class="col-2 py-1 td1 p text-left">T : Teen</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px%;" src="{{asset('section/game_rate/Teen.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะสำหรับเด็กอายุ 13 ปีขึ้นไป เนื้อหามีความรุนแรงแต่ไม่มาก มีเลือดและยาเสพติดประเภทเหล้าและบุหรี่ ภาษามีความรุนแรงมากขึ้น มีภาพสรีระร่างกายเชิงเพศชัดขึ้นแต่ไม่โป๊เปลือย เนื้อหาส่งผลต่อจิตวิทยาในด้านลบมากขึ้น</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">5</div>
                                                <div class="col-2 py-1 td1 p text-left">M : Mature</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px;" src="{{asset('section/game_rate/Mature.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะสำหรับเด็กอายุ 17 ปีขึ้นไป เนื้อหามีความรุนแรง มีฉากต่อสู้ มียาเสพติด มีฉากเปลือยกาย ภาษามีศัพท์แสลง มีคำหยาบคาย มีเนื้อหากระตุ้นให้ทำความผิด</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p" >6</div>
                                                <div class="col-2 py-1 td1 p text-left">AO : Adults Only</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px;" src="{{asset('section/game_rate/AdultsOnly.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เหมาะสำหรับผู้ใหญ่เท่านั้น ในสหรัฐอเมริกาหมายถึงผู้ที่มีอายุ 18 ปีขึ้นไป เนื้อหามีความรุนแรงสูง มีฉากนองเลือกและฉากเกี่ยวกับเพศรุนแรง และการกระตุ้นให้ทำผิดศีลธรรม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">7</div>
                                                <div class="col-2 py-1 td1 p text-left">RP : Rating Pending</div>
                                                <div class="col-1 py-1 td1 p "><img style="width:25px;" src="{{asset('section/game_rate/RatingPending.svg') }}" ></div>
                                                <div class="col-7 py-1 td1 p text-left">เรทนี้หมายถึงเกมยังไม่ได้รับการพิจารณาเรทอย่างเป็นทางการ มักเป็นเกมที่อยู่ระหว่างการพัฒนาแต่โฆษณาเกมก่อนจำหน่าย</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="rate3" class="tab-pane ">
                                    <div class="row" >
                                        <div class="col-1 py-3 th1 p">#</div>
                                        <div class="col-3 py-3 th1 p text-left">ชื่อเรทเนื้อหาเกม</div>
                                        <div class="col-6 py-3 th1 p text-left">คำอธิบาย</div>
                                        <div class="col-2 py-3 th1 p text-center">
                                            <label for="" style="cursor:pointer;font-family:myfont1;margin:0;" data-toggle="modal" data-target="#game-rate2"> + เพิ่มเรทเนื้อหาเกม</label>
                                        </div>
                                    </div>
                                    <div class="row row4"> 
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">1</div>
                                                <div class="col-3 py-1 td1 p text-left">Discrimination</div>
                                                <div class="col-7 py-1 td1 p text-left">มีการแบ่งแยก แบ่งแยกฝ่ายอย่างชัดเจน</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">2</div>
                                                <div class="col-3 py-1 td1 p text-left">Drugs</div>
                                                <div class="col-7 py-1 td1 p text-left">มีการใช้สารเสพติดในเกม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">3</div>
                                                <div class="col-3 py-1 td1 p text-left">Fear</div>
                                                <div class="col-7 py-1 td1 p text-left">มีการใช้ความกลัวเข้ามาอยู่ในเกม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">4</div>
                                                <div class="col-3 py-1 td1 p text-left">Gambling</div>
                                                <div class="col-7 py-1 td1 p text-left">มีเรื่องของการพนันอยู่ในเกม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">5</div>
                                                <div class="col-3 py-1 td1 p text-left">Sex</div>
                                                <div class="col-7 py-1 td1 p text-left">มีเรื่องเพศเกี่ยวข้องอยู่ในเกม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">6</div>
                                                <div class="col-3 py-1 td1 p text-left">Violence</div>
                                                <div class="col-7 py-1 td1 p text-left">มีการใช้ความรุนแรงภายในเกม</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">7</div>
                                                <div class="col-3 py-1 td1 p text-left">Online</div>
                                                <div class="col-7 py-1 td1 p text-left">เป็นเกมที่ต้องเล่นออนไลน์เท่านั้น เป็นเรทที่พิเศษแยกออกมา</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1 py-1 td1 p">8</div>
                                                <div class="col-3 py-1 td1 p text-left">Other</div>
                                                <div class="col-7 py-1 td1 p text-left">อื่นๆ</div>
                                                <div class="col-1 py-1 td1 p text-center">
                                                    <i class="fa fa-trash-o mr-3" style="cursor:pointer;"></i>
                                                    <i class="fa fa-pencil" style="cursor:pointer;" data-toggle="modal" data-target="#edit-rate2"></i>
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

<!-- game type -->

<div class="modal fade" id="game-type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">เพิ่มประเภทเกม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body"> 
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">ชื่อประเภทเกม</p>                       
                    <input type="text" class="input1 p pl-2" require>
                </label>
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">คำอธิบาย</p> 
                    <textarea class="input1 p pl-2" row="3"  require></textarea>
                </label>
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

<div class="modal fade" id="edit-type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">แก้ไขประเภทเกม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">                        
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">ชื่อประเภทเกม</p>                       
                    <input type="text" class="input1 p pl-2" require>
                </label>
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">คำอธิบาย</p> 
                    <textarea class="input1 p pl-2" row="3"  require></textarea>
                </label>
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


 <!-- game rate -->
<div class="modal fade" id="game-rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">เพิ่มเรทเกม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3"><div id="thumb" class="thumb-rate"><img src="home/imgProfile/pic-profile.png"></div></div>
                            <div class="col-8" style="padding:0;">
                                <button id="upload" class="btn-upload-pic mt-2">
                                    <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                                </button>
                                <label style="display:block;" class="mt-2">
                                    <h5 style="margin:0;color:#b2b2b2;">ควรเป็นไฟล์นามสกุล .svg</h5>
                                </label>
                            </div>
                        </div>
                        <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                    </div>    
                    <label class="bgInput field-wrap my-1">
                        <p class="fontHeadInput">ชื่อเรทเกม</p>                       
                        <input type="text" class="input1 p pl-2" require>
                    </label>
                    <label class="bgInput field-wrap my-1">
                        <p class="fontHeadInput">คำอธิบาย</p> 
                        <textarea class="input1 p pl-2" row="3"  require></textarea>
                    </label>
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

<div class="modal fade" id="edit-rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">แก้ไขเรทเกม</p></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">   
                <div class="form-group">
                    <div class="row">
                        <div class="col-3"><div id="thumb" class="thumb-rate"><img src="home/imgProfile/pic-profile.png"></div></div>
                        <div class="col-8" style="padding:0;">
                            <button id="upload" class="btn-upload-pic mt-2">
                                <p style="margin:0;color:#ffffff;">เลือกรูป</p>
                            </button>
                            <label style="display:block;" class="mt-2">
                                <h5 style="margin:0;color:#b2b2b2;">ควรเป็นไฟล์นามสกุล .svg</h5>
                            </label>
                        </div>
                    </div>
                    <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true" accept="image/* "/>
                </div>                    
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">ชื่อเรทเกม</p>                       
                    <input type="text" class="input1 p pl-2" require>
                </label>
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">คำอธิบาย</p> 
                    <textarea class="input1 p pl-2" row="3"  require></textarea>
                </label>
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


<!-- game rate2 -->
<div class="modal fade" id="game-rate2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">เพิ่มเรทเนื้อหาเกม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body"> 
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">ชื่อเรทเนื้อหาเกม</p>                       
                    <input type="text" class="input1 p pl-2" require>
                </label>
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">คำอธิบาย</p> 
                    <textarea class="input1 p pl-2" row="3"  require></textarea>
                </label>
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

<div class="modal fade" id="edit-rate2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center"><h1 style="margin:0;">แก้ไขเรทเนื้อหาเกม</h1></div>
                <button type="button" class="close btn-closeModal " data-dismiss="modal"><i class="icon-close_modal" style="font-size: 15px;padding:0;"></i></button>
                <div class="col-1"></div>
            </div>

            <div class="modal-body">                        
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">ชื่อเรทเนื้อหาเกม</p>                       
                    <input type="text" class="input1 p pl-2 " require>
                </label>
                <label class="bgInput field-wrap my-1">
                    <p class="fontHeadInput">คำอธิบาย</p> 
                    <textarea class="input1 p pl-2" row="3"  require></textarea>
                </label>
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


<script>
$(document).ready(function() {
  $('.noneApprovelist').hide();
  $('input:radio[name="kycApprove"]').change(
function() {
	if ($(this).is(':checked') && $(this).val() == 'noneApprove')
	{
    $('.noneApprovelist').show();
		}
   else {
    $('.noneApprovelist').hide();
   }
	}
);
}
);
</script>

<script> /* รูปโปรไฟล์เกม */
$(function () {
 $("#upload").on("click",function(e){
     $("#file_upload").show().click().hide();
     e.preventDefault();
 });
 $("#file_upload").on("change",function(e){
     var files = this.files
     showThumbnail(files)        
 });
 function showThumbnail(files){
     $("#thumb").html("");
     for(var i=0;i<files.length;i++){
         var file = files[i]
         var imageType = /image.*/
         if(!file.type.match(imageType)){
                //  console.log("Not an Image");
             continue;
         }
         var image = document.createElement("img");
         var thumbnail = document.getElementById("thumb");
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
@endsection