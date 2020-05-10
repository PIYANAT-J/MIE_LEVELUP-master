@extends('layout.profile')
@section('update_button')
    @if(Auth::user()->updateData == 'true')
        <a href="{{route('SponUpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @else
        <a href="{{route('SponUpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @endif
@endsection

@section('spon_profile')

<div class="container mt-0">

  <!-- Nav tabs -->
    <ul class="nav topnav">
      <li>
        <a class="nav-link " data-toggle="tab" href="#games-shelf">Games Shelf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#download-history">Download History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#point-history">Point History</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

      <div id="games-shelf" class="container tab-pane active"><br>
        <h3>Games Shelf</h3>
      </div>



      <div id="download-history" class="container tab-pane fade"><br>
        <h3>Download</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>




      <div id="point-history" class="container tab-pane fade"><br>
        <div class="table">
          <div class="tr">
            <div class="th1">#</div>
            <div class="th2">ชื่อกิจกรรม</div>
            <div class="th3">จำนวนคะแนน</div>
            <div class="th4">วันเวลา</div>
          </div>
          <div class="tr">
                <div class="td">TD</div>
                <div class="td">TD</div>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection