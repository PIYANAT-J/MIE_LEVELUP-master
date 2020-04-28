@extends('layout.navbar')
@section('navbar')

            <div class="container-fluid">
                <div class="row mt-5 mb-5"></div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card">

                                <!-- รูป profile -->
                                <div class="row mt-3">
                                    <div class="col" align="center">
                                        <img class="img-1" src="home/images/pic3.jpg"/>
                                    </div>
                                </div>

                                <!-- ชื่อ-นามสกุล -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="font-1">
                                            <b>{{ Auth::user()->name }}.{{ Auth::user()->surname }}</b>
                                        </div>
                                    </div>
                                </div>

                                <!-- Coin -->
                                <div class="row mr-0 ml-0 mt-3">
                                    <div class="col">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-coin" align="left">
                                                    <i class="material-icons">copyright</i>
                                                </div>
                                                <div class="col font2" align="right">
                                                    <a>150</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- inbox -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-inbox" align="left">
                                                    <i class="material-icons">all_inbox</i>
                                                </div>

                                                <div class="col font2" align="right">
                                                        <a>59</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- history -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 img-history" align="left">
                                                    <i class="material-icons">history</i>
                                                </div>

                                                <div class="col font2" align="right">
                                                        <a>จำนวนวันที่เป็นสมาชิก</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- ข้อมูลส่วนตัว -->
                                        <div class="row mt-4 mb-3">
                                            <div class="col">
                                                <div class="font-1">
                                                    <b>ข้อมูลส่วนตัว</b>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- เลขบัตรประชาชน -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">recent_actors</i>
                                                </div>

                                                <div class="col font2" align="right">
                                                    <a>1234567890000</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- เบอร์โทร-->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">local_phone</i>
                                                </div>

                                                <div class="col font2" align="right">
                                                    <a>0823552062</a>
                                                </div>
                                            </div>
                                        </li>  

                                        <!-- อีเมล-->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-1 font" align="left">
                                                    <i class="material-icons">mail_outline</i>
                                                </div>

                                                <div class="col font2" align="right">
                                                    <font size ="2"><a>waraphorn.s@maltiino.com</a></font>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <!-- KYC-->
                                        <button class="btn1 list-group-item" >
                                            <div class="row">
                                                <div class="col-1 " align="left">
                                                <i class="material-icons">how_to_reg</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>ยืนยันตัวตน</a>
                                                </div>
                                            </div>
                                        </button>

                                    <!-- Update-->
                                        <button class="btn1 list-group-item " >
                                            <div class="row">
                                                <div class="col-1 " align="left">
                                                <i class="material-icons">edit</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>Update Profile</a>
                                                </div>
                                            </div>
                                        </button> 

                                    <!-- password-->
                                        <button class="btn1 list-group-item mb-3" >
                                            <div class="row">
                                                <div class="col-1 " align="left">
                                                <i class="material-icons">lock_open</i>
                                                </div>

                                                <div class="col" align="right">
                                                    <a>Change Password</a>
                                                </div>
                                            </div>
                                        </button>  

                                        
                                    </div>
                                </div>                  
                            </div>    
                        </div>  
                        <div class="col">
                            @yield('profile')
                        <div>
                    </div>
                </div>
            </div>
@endsection
