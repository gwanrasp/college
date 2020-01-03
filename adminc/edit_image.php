<?php
@session_start();
$id = $_GET['id'];
require_once "class/image.class.php";
$image = new Image();
$image->id = $id;


if(isset($_POST['btnUpdate'])){
  $error=[];
  
  if(isset($_FILES['feature_image']) && !empty($_FILES['feature_image'])){
  if($_FILES['feature_image']['error'] == 0){
    $name = uniqid().'_'.$_FILES['feature_image']['name'];
    move_uploaded_file($_FILES['feature_image']['tmp_name'], 'images/'.$name);
  $image->set('feature_image',$name);
 }
}
else{
	$error['feature_image']="Upload an image";
}
$image->set('title',$_POST['title']);


  $image->set('feature_key',$_POST['feature_key']);
      
  
  if(count($error)==0){
    $msg = $image->edit();
  }

}
$gtdata = $image->getPhotoByID();

require_once"header.php";
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banner Images</h3><br>
              </div>

             
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Update Image</h2>
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

                   
                    <form id="galleryform" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">

                     

                      <div class="form-group">
                        <label for="feature_image" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div>
                        <img src ="images/<?php echo $gtdata[0]->feature_image; ?>" class="img-responsive" required="required" width="300">
                        </div>
                          <input  class="form-control col-md-7 col-xs-12" type="file" name="feature_image">
                          <?php if(isset($error['feature_image'])){
                          	echo $error['feature_image'];
                          } ?>
                          
                        </div>
                      </div><br>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" required="required" name="title" class="form-control col-md-7 col-xs-12" value="<?php echo $gtdata[0]->title; ?>">
                        </div>
                      </div><br>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Feature Key</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" >
                          <?php if($gtdata[0]->feature_key == 1) { ?>
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="1" checked="">  Yes 
                            </label>
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="0" > No
                            </label>
                            <?php } else { ?>
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="1">  Yes 
                            </label>
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="0" checked> No
                            </label>
                            <?php } ?>
                          </div>
                        </div>
                      </div><br>

                      
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="btnUpdate" class="btn btn-success" value="Update"/>
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
            $('#galleryform').validate();
          });
        </script>
       


