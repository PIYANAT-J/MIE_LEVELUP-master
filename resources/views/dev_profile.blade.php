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

@section('dev_profile')

  <div class="container mt-0">

    <!-- Nav tabs -->
    <ul class="nav topnav">
      <li>
        <a class="nav-link active" data-toggle="tab" href="#game-shelf">Game Shelf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#point-history">Point History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#upload-game">Upload Game</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

      <div id="game-shelf" class="container tab-pane active"><br>
        <!-- <h3>Games Shelf</h3> -->
        <div class="over">
          <div class="table"  >
            <div class="tr">
              <div class="th-game-pic"></div>
              <div class="th-game-name"></div>
              <div class="th-game-hours pr-3">Download</div>
              <div class="th-game-date ">Release date</div></tr>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/game_profile.png" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">111 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/game_pic.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">95 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/csgo.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">72 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/fifa.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">45 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/pes.jpg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">32 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/pubg.jpeg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">10 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>

            <div class="tr">
              <div class="td-game-img"><img src="section/picture_game/pubg_lite.jpeg" alt="Image"class="game-img" ></div>
              <div class="td-game-name">Example</div>
              <div class="td-game-hours pr-3">1 ครั้ง</div>
              <div class="td-game-date">12-05-20</div>
            </div>
          </div>
        </div>
      </div>

      <div id="point-history" class="container tab-pane fade"><br>
        <div class="over">
          <div class="table" >
            <div class="tr">
              <div class="th-number">#</div>
              <div class="th-activity-name">Activity</div>
              <div class="th-point">Point</div>
              <div class="th-time">Date Time</div></tr>
            </div>

            <div class="tr">
              <div class="td-number">1</div>
              <div class="td-activity-name">Update Profile</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">11-05-20 4:52AM</div>
            </div>

            <div class="tr">
              <div class="td-number">2</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">3</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">4</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">5</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">6</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">7</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">8</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">9</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">10</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">11</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">12</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">13</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">14</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">15</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">16</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">17</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">18</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">19</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">20</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">21</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">22</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">23</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">24</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>

            <div class="tr">
              <div class="td-number">25</div>
              <div class="td-activity-name">Example</div>
              <div class="td-point">+ 10</div>
              <div class="td-time">12-05-20 1.11AM</div>
            </div>
          </div>
        </div>
      </div>

      <div id="upload-game" class="container tab-pane"><br>
        <h2>Upload Game</h2>
      </div>
    </div>
  </div>

@endsection