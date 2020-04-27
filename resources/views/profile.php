<?php 
session_start(); 
require_once __DIR__.'/config/connectpdo.php';

date_default_timezone_set("Asia/Bangkok");
$today = date("F d, Y h:i:s A");

$ID = $_GET['id'];

$sql = "SELECT * FROM MIE_MEMBER WHERE MEM_ID = :ID ";
$stmt=$db->prepare($sql);
$stmt->bindparam(':ID', $ID);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$MEM_EMAIL = $row['MEM_EMAIL'];
$MEM_TEL = $row['MEM_TEL'];
$MEM_CARD_NUMBER = $row['MEM_CARD_NUMBER'];
$MEM_TYPE_ID = $row['MEM_TYPE_ID'];
$MEM_FIRSTNAME = $row['MEM_FIRSTNAME'];
$MEM_LASTNAME = $row['MEM_LASTNAME'];

$sql_type = "SELECT * FROM MIE_MEMBER_TYPE WHERE MEMBER_TYPE_ID = :MEM_TYPE_ID";
$stmt_type=$db->prepare($sql_type);
$stmt_type->bindparam('MEM_TYPE_ID', $MEM_TYPE_ID);
$stmt_type->execute();
$row_type=$stmt_type->fetch(PDO::FETCH_ASSOC);
$MEMBER_TYPE = $row_type['MEMBER_TYPE'];


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LevelUp | Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="profile/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="profile/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <?php require_once __DIR__.'/home/head.php'; ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php require_once __DIR__.'/home/navbar.php'; ?>
 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </section>
    <br><br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <!-- <img class="profile-user-img img-fluid img-circle" src="profile_picture/<?php echo $row['MEM_PICTURE'];?>" alt="User profile picture" style="height: 100px;"> -->
                  <br>
                  <?php echo '<img src="profile_picture/'.$row['MEM_PICTURE'].'" style="height: 100px;">'; ?><br>
                  <?php echo $row['MEM_PICTURE']; ?>
                </div>
                <h3 class="profile-username text-center"><?php echo $_SESSION['MEM_FIRSTNAME']; ?> <?php echo $_SESSION['MEM_LASTNAME']; ?></h3>
                  <li class="list-group-item">


                    <b>จำนวนเหรียญในบัญชี : </b><a class="float-right"></a>
                  </li>
                  <li class="list-group-item">
                    <b>จำนวนเกมส์ที่มีทั้งหมด :</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>เกมส์ที่เล่นล่าสุด :</b> <a class="float-right">13,287</a>
                  </li>
                  <li class="list-group-item">
                    <b>เวลาการเข้าใช้งานล่าสุด :</b></b> <a class="float-right"><?=$today?></a>
                  </li>
                </ul><br>
              </div>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title" style="margin-top: 20px;">ข้อมูลส่วนตัว</h2>
              </div>
              <div class="card-body">
                <strong><i class="fa fa-id-card mr-1"></i>   หมายเลขบัตรประชาชน <a class="float-right"><?=$MEM_CARD_NUMBER?></a></strong>
                <hr>
                <strong><i class="fas fa-envelope mr-1"></i>    อีเมลล์ <a class="float-right"><?=$MEM_EMAIL?></a></strong>
                <hr>
                <strong><i class="fas fa-phone mr-1"></i>     เบอร์โทรศัพท์ <a class="float-right"><?=$MEM_TEL?></a></strong>
                <hr>
                <strong><i class="fa fa fa-user mr-1"></i>   ประเภทสมาชิก <a class="float-right"><?=$MEMBER_TYPE?></a></strong>
                <hr>
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-edit"> อัพเดทข้อมูล</i></button>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Payment</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Game</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm">
                      <span class="username">
                        <a href="#"><?=$MEM_FIRSTNAME?> <?=$MEM_LASTNAME?></a>
                      </span>
                      <span class="description">Shared publicly - 7:30 PM today</span>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <div>
                        <i class="fas fa-camera bg-purple"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="save_profile.php" method="POST" enctype="multipart/form-data" id="profile_form">
      <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">หมายเลขบัตรประชาชน / ID Card Number</label>
                <input type="text" class="form-control" id="MEM_CARD_NUMBER" value="<?=$MEM_CARD_NUMBER?>" name="MEM_CARD_NUMBER">
            </div>
            <div class="form-group col-md-12">
                <label for="">อีเมล / E-mail</label></label>
                <input type="text" class="form-control" id="MEM_EMAIL" value="<?=$MEM_EMAIL?>" name="MEM_EMAIL">
            </div>
            <div class="form-group col-md-12">
                <label for="">เบอร์โทรศัพท์ / Telephone</label>
                <input type="text" class="form-control" id="MEM_TEL" value="<?=$MEM_TEL?>" name="MEM_TEL">
            </div>
            <div class="form-group col-md-12">
                <label for="">รูปภาพประจำตัว / Profile Picture</label>
                <input type="file" class="form-control" id="MEM_PICTURE" name="MEM_PICTURE">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save Changes">
            <input type="hidden" name="do" value="profile">
            <input type="hidden" name="MEM_ID" value="<?=$ID?>">
        </div>
      </div>
    </form>
  </div>
</div>

<script src="profile/plugins/jquery/jquery.min.js"></script>
<script src="profile/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="profile/dist/js/adminlte.min.js"></script>
<script src="profile/dist/js/demo.js"></script>

<?php require_once __DIR__.'/template/script.php'; ?>

<script>
        // $( document ).ready(function() {
        //     console.log( "1234" );
        // });
        $( "#profile_form" ).submit(function( event ) {
                var _this = $(this)
                  $.ajax({
                    type: "POST",    
                    url: "save_profile.php",
                    data: _this.serialize(),
                    //dataType: "json",
                    success: function (response) {
                     console.log(response)
                        alert('Complete Update Profile')
                        location.reload();
                     }
                    })
                  event.preventDefault();
                });
</script>
<script type="text/javascript">
    $(document).ready(function (e){
        $("#profile_form").on('submit',(function(e){
            e.preventDefault();
            $.ajax({
                url: "save_profile.php",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){
                $("#targetLayer").html(data);
                },
                error: function(){} 	        
            });
        }));
    });
</script>

</body>
</html>
