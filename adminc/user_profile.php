<?php
@session_start();
require_once "header.php";
require_once "class/user.class.php";
$user= new User(); 
$udata = $user->lists();


?>


 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3><br>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Profile</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-4 col-md-offset-4">
            <img src="images/aa.png"
            alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-md-4 col-md-offset-4">
            
            <div class="container panel-heading">
            
            <strong>Name: </strong><i><?php echo $udata[0]->name; ?></i>
            </div>
            <div class="well">
            <p> <i class="glyphicon glyphicon-envelope"></i><?php echo $udata[0]->email; ?>
                <br/>
                <i class="glyphicon glyphicon-user"></i><?php echo $udata[0]->role; ?>

                <br /> <i class="glyphicon glyphicon-hourglass"></i><?php echo $udata[0]->last_login; ?>
                </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
        <!-- /page content -->




<?php
require_once "footer.php";
?>