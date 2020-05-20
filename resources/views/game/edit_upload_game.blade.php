@extends('layout.profile')
<!-- @section('kyc_button')
    <a href="/kyc" class="btn bgroup">
        <div class="row">
            <div>
                <i class="material-icons pl-1">how_to_reg</i>
            </div>
            <div class="col pr-1" align="right ">ยืนยันตัวตน</div>
        </div>        
    </a>
@endsection -->
@section('update_button')
    @if(Auth::user()->updateData == 'true')
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @else
        <a href="{{route('UpDate')}}" class="btn bgroup">
            <div class="row">
                <div>
                    <i class="material-icons pl-1">edit</i>
                </div>
                <div class="col pr-1" align="right ">Update Profile</div>
            </div>        
        </a>
    @endif
@endsection

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link type="text/css" rel="stylesheet" href="http://example.com/image-uploader.min.css">
<script type="text/javascript" src="http://example.com/jquery.min.js"></script>
<script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
 
@section('edit_upload_game')

<!-- <ul class="nav topnav">
      <li>
        <a class="nav-link active" data-toggle="tab" href="#game-shelf">Game Shelf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#point-history">Point History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#upload-game">Upload Game</a>
      </li>
    </ul> -->
   
    
   

@endsection