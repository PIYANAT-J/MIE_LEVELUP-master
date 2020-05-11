@extends('layout.profile')
@section('update_button')
  @if(Auth::user()->updateData == 'true')
      <a href="{{route('EditProfile')}}" class="btn bgroup">
          <div class="row">
              <div>
                  <i class="material-icons pl-1">edit</i>
              </div>
              <div class="col pr-1" align="right ">Update Profile</div>
          </div>        
      </a>
  @else
      <a href="{{route('EditProfile')}}" class="btn bgroup">
          <div class="row">
              <div>
                  <i class="material-icons pl-1">edit</i>
              </div>
              <div class="col pr-1" align="right ">Update Profile</div>
          </div>        
      </a>
  @endif
@endsection

@section('user_profile')

<div class="container mt-0">

  <!-- Nav tabs -->
    <ul class="nav topnav">
      <li>
        <a class="nav-link " data-toggle="tab" href="#games-shelf">Games Shelf</a>
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

      <div id="point-history" class="container tab-pane fade"><br>
        <div class="over">
          <div class="table"  >
            <div class="tr">
              <div class="number">#</div>
              <div class="activity-name">Activity</div>
              <div class="point">Point</div>
              <div class="time">Date Time</div></tr>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">63-05-11 16:52</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection