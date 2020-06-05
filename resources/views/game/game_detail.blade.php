@extends('layout.navbar2')

@section('content')

<div class="container-fluid">
<div class="row my-5 "></div>
<div class="row my-2 "></div>
<div class="row dark">
    <div class="col-lg-3 font_back"><a href="{{ url('/') }}" style="color:#fff;"><i class="icon-prev mx-2" style="font-size:18px;"></i>Back</a></div>
    <div class="col-lg-6 ">
        <iframe class="video_detail" src="https://www.youtube.com/embed/hU8oGKzVAmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<div class="row mb-0">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="row mt-3 ml-0">
            <div class="col-1 pt-3"><img src="{{asset('section/game_rate/rate.svg') }}" /></div>
            <div class="col-7 ">
                <p class="font_detail3 pt-4 ml-1 ">
                    <b style="font-family:myfont;color:#f6c12c; font-size:28px;">4.5/5</b>&nbsp;&nbsp;&nbsp;| &nbsp;<b class="font_detail4" >124 </b>ความคิดเห็น</br>
                    <b class="font_detail4">15k </b>ดาวน์โหลด &nbsp; &nbsp;| &nbsp; &nbsp;
                    <b class="font_detail4">104.5</b> &nbsp; ชั่วโมง
            </div>
            <div class="col-3 mr-3">
                <button class="follow-before" data-toggle="tooltip" data-placement="bottom" title="ติดตาม"><span class="icon-follow_red" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ติดตาม</b></button >
                <button class="follow-after" data-toggle="tooltip" data-placement="bottom" title="ยกเลิกการติดตาม"><span class="icon-follow_wh" style="font-size:16px;margin-right:10px"></span><b class="font_follow-after">กำลังติดตาม</b></button >
                <button class="follow-before mt-1"><span class="icon-icon_download" style="font-size:16px;margin-right:15px"></span><b class="font_follow-before">ดาวน์โหลด</b></button >
                <button class="follow-after mt-1"><span class="icon-download_after" style="font-size:16px;margin-right:15px"></span><b class="font_follow-after">ดาวน์โหลด</b></button >
                <a href="{{ url('/') }}" style="color:#fff;"><button class="follow-before mt-1"><span class="icon-update_version" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">อัพเดตเวอร์ชัน</b></button ></a>
                <a href="{{ url('/') }}" style="color:#fff;"><button class="follow-before mt-1"><span class="icon-support" style="font-size:16px;margin-right:10px"></span><b class="font_follow-before">สปอนเซอร์</b></button ></a>
            </div>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 pl-4">
        <div class="font_game_name">PlayerUnknown’s Battlegrounds</div>
        <div class="w-100"></div>
        <div class="rate_detail">Online • Other</div>
        <div class="des_detail">
        PlayerUnknown’s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published 
        by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous 
        mods that were created by Brendan “PlayerUnknown” Greene for other games, inspired by the 2000 Japanese film 
        Battle Royale, and expanded into a standalone game under Greene’s creative direction. In the game, up to one 
        hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding 
        getting killed themselves. The available safe area of the game’s map decreases in size over time, directing 
        surviving players into tighter areas to force encounters. The last player or team standing wins the round.
        Battlegrounds was first released for Microsoft Windows via Steam’s early access beta program in March 2017, 
        with a full release in December 2017. The game was also released by Microsoft Studios for the Xbox One via 
        its Xbox Game Preview program that same month, and officially released in September 2018. A free-to-play 
        mobile version for Android and iOS was released in 2018, in addition to a port for the PlayStation 4. 
        A version for the Stadia streaming platform was released in April 2020. Battlegrounds is one of 
        the best-selling and most-played video games of all time. By 2019, the PC and console versions of the game 
        have sold over 60 million copies, in addition to PUBG Mobile having crossed 600 million downloads.
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

@endsection