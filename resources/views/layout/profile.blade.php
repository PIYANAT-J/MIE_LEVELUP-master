@extends('layout.navbar')
@section('navbar')
<div class="container-fluid">
    <div class="row mt-5 mb-5"></div>
        <div class="row">
            @if(Auth::user()->updateData == 'true')
                @if(Auth::user()->users_type == 2)
                    @foreach($developer as $DEV)
                        @if($DEV->USER_ID == Auth::user()->id)
                            <div class="col-md-3 mb-3"> <!--คอลัมน์ 1 -->
                                <div class="card ">

                                    <!-- รูป profile -->
                                    <div class="row mt-3">
                                        <div class="col" align="center">
                                            <img class="img-1" src="home/imgProfile/{{ $DEV->DEV_IMG }}"/>
                                        </div>
                                    </div>

                                    <!-- ชื่อ-นามสกุล -->
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="font1">
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
                                        </div>
                                    </div>    

                                    <!-- ข้อมูลส่วนตัว -->
                                    <div class="row mt-4 mb-3">
                                        <div class="col">
                                            <div class="font1">
                                                <b>ข้อมูลส่วนตัว</b>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- เลขบัตรประชาชน -->
                                    <li class="list-group-item ml-3 mr-3 box1">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">recent_actors</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <a>{{ $DEV->DEV_ID_CARD }}</a>
                                            </div>
                                        </div>
                                    </li>
                                        

                                    <!-- เบอร์โทร-->
                                    <li class="list-group-item ml-3 mr-3">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">local_phone</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <a>{{ $DEV->DEV_TEL }}</a>
                                            </div>
                                        </div>
                                    </li>  

                                    <!-- อีเมล-->
                                    <li class="list-group-item ml-3 mr-3">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">mail_outline</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <font size ="2"><a>{{ $DEV->USER_EMAIL }}</a></font>
                                            </div>
                                        </div>
                                    </li>


                                    <div class="btn-group-vertical ml-3 mr-3">
                                        <!-- KYC-->
                                        <a href="/kyc" class="btn bgroup">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">how_to_reg</i>
                                                </div>
                                                <div class="col pr-1" align="right ">ยืนยันตัวตน</div>
                                            </div>        
                                        </a>

                                        <!-- Update Profile -->
                                        <!-- <a href="/update_profile" class="btn bgroup">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">edit</i>
                                                </div>
                                                <div class="col pr-1" align="right ">Update Profile</div>
                                            </div>        
                                        </a> -->
                                        @yield('update_button')


                                        <!-- password-->
                                        <!-- <a href="/change_password" class="btn bgroup mb-3">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">lock_open</i>
                                                </div>
                                                <div class="col pr-1" align="right ">Change Password</div>
                                            </div>        
                                        </a> -->
                                    </div>      
                                </div>
                            </div>
                        
                            <div class="col"> <!--คอลัมน์2 -->
                                @yield('dev_profile')

                                @yield('update_profile')

                                @yield('dev_change_password')

                                @yield('kyc')

                            </div> 
                        @endif
                    @endforeach
                @elseif(Auth::user()->users_type == 3)
                    <!-- //////////////////////////////////SPONSORE//////////////////////////////////////////////// -->
                @else
                    @foreach($guest_user as $USER)
                        @if($USER->USER_ID == Auth::user()->id)
                            <div class="col-md-3 mb-3"> <!--คอลัมน์ 1 -->
                                <div class="card ">

                                    <!-- รูป profile -->
                                    <div class="row mt-3">
                                        <div class="col" align="center">
                                            <img class="img-1" src="home/imgProfile/{{ $USER->GUEST_USERS_IMG }}"/>
                                        </div>
                                    </div>

                                    <!-- ชื่อ-นามสกุล -->
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="font1">
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
                                        </div>
                                    </div>    

                                    <!-- ข้อมูลส่วนตัว -->
                                    <div class="row mt-4 mb-3">
                                        <div class="col">
                                            <div class="font1">
                                                <b>ข้อมูลส่วนตัว</b>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- เลขบัตรประชาชน -->
                                    <li class="list-group-item ml-3 mr-3 box1">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">recent_actors</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <a>{{ $USER->GUEST_USERS_ID_CARD }}</a>
                                            </div>
                                        </div>
                                    </li>
                                        

                                    <!-- เบอร์โทร-->
                                    <li class="list-group-item ml-3 mr-3">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">local_phone</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <a>{{ $USER->GUEST_USERS_TEL }}</a>
                                            </div>
                                        </div>
                                    </li>  

                                    <!-- อีเมล-->
                                    <li class="list-group-item ml-3 mr-3">
                                        <div class="row">
                                            <div class="col-1 font" align="left">
                                                <i class="material-icons">mail_outline</i>
                                            </div>

                                            <div class="col font2" align="right">
                                                <font size ="2"><a>{{ $USER->USER_EMAIL }}</a></font>
                                            </div>
                                        </div>
                                    </li>


                                    <div class="btn-group-vertical ml-3 mr-3">
                                        <!-- KYC-->
                                        <a href="/kyc" class="btn bgroup">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">how_to_reg</i>
                                                </div>
                                                <div class="col pr-1" align="right ">ยืนยันตัวตน</div>
                                            </div>        
                                        </a>

                                        <!-- Update Profile -->
                                        <!-- <a href="/update_profile" class="btn bgroup">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">edit</i>
                                                </div>
                                                <div class="col pr-1" align="right ">Update Profile</div>
                                            </div>        
                                        </a> -->
                                        @yield('update_button')


                                        <!-- password-->
                                        <!-- <a href="/change_password" class="btn bgroup mb-3">
                                            <div class="row">
                                                <div>
                                                    <i class="material-icons pl-1">lock_open</i>
                                                </div>
                                                <div class="col pr-1" align="right ">Change Password</div>
                                            </div>        
                                        </a> -->
                                    </div>      
                                </div>
                            </div>
                        
                            <div class="col"> <!--คอลัมน์2 -->
                                @yield('user_user_profile')

                                @yield('update_profile')

                                @yield('user_change_password')

                                @yield('kyc')

                            </div>
                        @endif
                    @endforeach
                @endif
            @else
                <div class="col-md-3 mb-3"> <!--คอลัมน์ 1 -->
                    <div class="card ">

                        <!-- รูป profile -->
                        <div class="row mt-3">
                            <div class="col" align="center">
                                <img class="img-1" src="home/imgProfile/No_Img.jpg"/>
                            </div>
                        </div>

                        <!-- ชื่อ-นามสกุล -->
                        <div class="row mt-3">
                            <div class="col">
                                <div class="font1">
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
                            </div>
                        </div>    

                        <!-- ข้อมูลส่วนตัว -->
                        <div class="row mt-4 mb-3">
                            <div class="col">
                                <div class="font1">
                                    <b>ข้อมูลส่วนตัว</b>
                                </div>
                            </div>
                        </div>


                        <!-- เลขบัตรประชาชน -->
                        <li class="list-group-item ml-3 mr-3 box1">
                            <div class="row">
                                <div class="col-1 font" align="left">
                                    <i class="material-icons">recent_actors</i>
                                </div>

                                <div class="col font2" align="right">
                                    <a>เลขปัตรประชาชน</a>
                                </div>
                            </div>
                        </li>
                            

                        <!-- เบอร์โทร-->
                        <li class="list-group-item ml-3 mr-3">
                            <div class="row">
                                <div class="col-1 font" align="left">
                                    <i class="material-icons">local_phone</i>
                                </div>

                                <div class="col font2" align="right">
                                    <a>เบอร์โทร</a>
                                </div>
                            </div>
                        </li>  

                        <!-- อีเมล-->
                        <li class="list-group-item ml-3 mr-3">
                            <div class="row">
                                <div class="col-1 font" align="left">
                                    <i class="material-icons">mail_outline</i>
                                </div>

                                <div class="col font2" align="right">
                                    <font size ="2"><a>{{ Auth::user()->email }}</a></font>
                                </div>
                            </div>
                        </li>


                        <div class="btn-group-vertical ml-3 mr-3">
                            <!-- KYC-->
                            <a href="/kyc" class="btn bgroup">
                                <div class="row">
                                    <div>
                                        <i class="material-icons pl-1">how_to_reg</i>
                                    </div>
                                    <div class="col pr-1" align="right ">ยืนยันตัวตน</div>
                                </div>        
                            </a>

                            <!-- Update Profile -->
                            <!-- <a href="/update_profile" class="btn bgroup">
                                <div class="row">
                                    <div>
                                        <i class="material-icons pl-1">edit</i>
                                    </div>
                                    <div class="col pr-1" align="right ">Update Profile</div>
                                </div>        
                            </a> -->
                            @yield('update_button')


                            <!-- password-->
                            <!-- <a href="/change_password" class="btn bgroup mb-3">
                                <div class="row">
                                    <div>
                                        <i class="material-icons pl-1">lock_open</i>
                                    </div>
                                    <div class="col pr-1" align="right ">Change Password</div>
                                </div>        
                            </a> -->
                        </div>      
                    </div>
                </div>
                <div class="col"> <!--คอลัมน์2 -->
                    @yield('dev_profile')

                    @yield('update_profile')

                    @yield('dev_change_password')

                    @yield('kyc')

                </div>
            @endif
        <div>
    </div>
</div>

 @endsection <!--nevbar -->