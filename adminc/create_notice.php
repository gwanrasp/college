<?php
require_once"header.php";
?>
<?php 
require_once"class/notice.class.php";
$notice = new Notice();
if(isset($_POST['btnSave'])){
  $error=[];
  $notice->set('title',$_POST['title']);
  
  $notice->set('short_description',$_POST['short_description']); 
  $notice->set('description',$_POST['description']);
  if($_FILES['feature_image']['error'] == 0){
    $name = uniqid().'_'.$_FILES['feature_image']['name'];
    move_uploaded_file($_FILES['feature_image']['tmp_name'], 'images/'.$name);
  $notice->set('feature_image',$name);
 }
  $notice->set('feature_key',$_POST['feature_key']);
      
  $notice->set('status',$_POST['status']);
  $notice->set('created_by',$_SESSION['admin_username']);
  $notice->set('created_date',date('Y-m-d H:i:s'));

  if(count($error)==0){
    $msg = $notice->create();
  }

}
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Notice Management</h3><br>
              </div>

             
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Create Notice</h2>
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

                   
                    <form id="noticeform" data-parsley-validate class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" required="required" name="title" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br>
                      
                      <div class="form-group">
                        <label for="short_description" class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12"  required="required" name="short_description"></textarea>
                          
                        </div>
                      </div><br>

                      <div class="form-group">
                        <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12 ckeditor"  required="required" name="description" ></textarea>
                          
                        </div>
                      </div><br>

                      <div class="form-group">
                        <label for="feature_image" class="control-label col-md-3 col-sm-3 col-xs-12">Feature Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" type="file" name="feature_image">
                          
                        </div>
                      </div><br>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Feature Key</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" >
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="1">  Yes 
                            </label>
                            <label class="btn btn-default" >
                              <input type="radio" name="feature_key" value="0" checked> No
                            </label>
                          </div>
                        </div>
                      </div><br>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Staus</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="1"> &nbsp; Active &nbsp;&nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="0" >&nbsp; De-active
                            </label>
                          </div>
                        </div>
                      </div><br>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="btnSave" class="btn btn-success" value="Save Notice"/>
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
            $('#noticeform').validate();
          });
        </script>
       
        