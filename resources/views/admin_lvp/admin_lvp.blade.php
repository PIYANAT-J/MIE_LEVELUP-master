@extends('layout.navbar')
<link rel="stylesheet" href="{{ asset('dist/css/lvp.css') }}">


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@section('admin_lvp')
    <div class="nav-side-menu" style="margin-top:70px; padding-top:20px;">
        <div class="brand">Admin</div>
            <i class="fa fa-bars fa-2x toggle-btn " style=" padding-top:20px;" data-toggle="collapse" data-target="#menu-content"></i>
    
            <div class="menu-list">
    
                <ul id="menu-content" class="menu-content collapse out">
                
                    <li  data-toggle="collapse" data-target="#products" class="collapsed active mt-3">
                    <a href="/user_mamagement"><i class="fa fa-gift fa-lg"></i> จัดการผู้ใช้</a>
                    </li>


                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Auswertungen <span class="arrow"></span></a>
                    </li>  
                    <ul class="sub-menu collapse" id="service">
                    <li>Trendmonitoring</li>
                    <li>Alarmmonitoring</li>
                    <li>Audit-Trail</li>
                    </ul>


                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Reporting <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                    <li>Alarmstatistik</li>
                    <li>Prozessfähigkeit</li>
                    </ul>


                    <li>
                    <a href="#">
                    <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                    </li>

                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Service <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                    <li>Sensorkonfiguration</li>
                    <li>Betriebsarten</li>
                    </ul>
                </ul>
        </div>
    </div>

    
<div class="ccontainer-fluid ">
    <div class="row mt-3"></div>
    <div class="row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-9"> @yield('user_managemant')</div>
    </div>
</div>

@endsection