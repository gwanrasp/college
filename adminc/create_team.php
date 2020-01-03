<?php
require_once"header.php";
?>
<?php 
require_once"class/team.class.php";
$team = new Team();
if(isset($_POST['btnSave'])){
  $error=[];
 
  $team->set('name',$_POST['name']);
  $team->set('post',$_POST['post']);
  $team->set('message',$_POST['message']);
      
      
  
  if($_FILES['feature_image']['error'] == 0){
    $namee = uniqid().'_'.$_FILES['feature_image']['name'];
    move_uploaded_file($_FILES['feature_image']['tmp_name'], 'images/'.$namee);
  $team->set('feature_image',$namee);
 }
  
  
  

  if(count($error)==0){
    $msg = $team->create();
  }

}
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Team Management</h3><br>
              </div>

             
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Add Members</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php  if(isset($msg)){
                    echo $msg;
                   } ?>
                    <br />

                   
                    <form id="team" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">

                       <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br>

                       <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post">Post 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="post" required="required" name="post" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br>

                       <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">Message 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" name="message" class="form-control col-md-7 col-xs-12 ckeditor"></textarea>
                        </div>
                      </div><br>


                      
                      

                      <div class="form-group">
                        <label for="feature_image" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" type="file" name="feature_image">
                          
                        </div>
                      </div><br>

                     
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="btnSave" class="btn btn-success" value="Add Member"/>
              <input type="reset" class="btn btn-danger" value="Clear">
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
   
        <!-- /page content -->

        <!-- footer content -->
        <?php 
        require_once"footer.php";
        ?>


        <script type="text/javascript" src="validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#team').validate();
          });
        </script>
       
        