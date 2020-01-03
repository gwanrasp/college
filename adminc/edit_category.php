<?php
@session_start();
$id = $_GET['id'];
require_once "class/category.class.php";
$category = new Category();
$category->id = $id;

 

if(isset($_POST['btnUpdate'])){
  $error=[];
  $category->set('name',$_POST['name']);
  if(isset($_POST['rank']) && !empty($_POST['rank'])){
      if($_POST['rank'] > 0){
       $category->set('rank',$_POST['rank']);
      }
   
    else{
      $error['rank'] = "Enter Positive Rank";
    }
  }

    else{
      $error['rank'] = "Please enter the Rank";
    }
  

  $category->set('status',$_POST['status']);
  $category->set('modified_by',$_SESSION['admin_username']);
  $category->set('modified_date',date('Y-m-d H:i:s'));

  if(count($error)==0){
    $msg = $category->edit();
  }
  

}
$catdata = $category->getCategoryByID();
require_once"header.php";
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category Management</h3><br>
              </div>

             
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Update Category</h2>
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

                   
                    <form id="upform" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12" value="<?php echo $catdata[0]->name; ?> ">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="rank" class="control-label col-md-3 col-sm-3 col-xs-12">Rank<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="rank" class="form-control col-md-7 col-xs-12" type="number" name="rank" value="<?php echo $catdata[0]->rank; ?>">
                          <?php
                          if(isset($error['rank'])){
                            echo $error['rank'];
                          }
                          ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Staus</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" >
                            
                            <?php if($catdata[0]->status == 1) { ?>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="1" checked=""> &nbsp; Active &nbsp;&nbsp;
                            
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="0" >&nbsp; De-active
                            </label>
                       <?php  }
                        else{ ?>
                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        	 <input type="radio" name="status" value="1"> &nbsp; Active &nbsp;&nbsp;
                            
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="0" checked="" >&nbsp; De-active
                            </label>

                        

                           <?php } ?>
                          </div>
                        </div>
                      </div>
                      
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
        <script type="text/javascript">
          $(document).ready(function(){
            $('#upform').validate();
          });
        </script>

       


