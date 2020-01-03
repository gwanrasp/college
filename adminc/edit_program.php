<?php 
@session_start();
$id = $_GET['id'];
require_once"class/program.class.php";
$program = new Program();
$program->id= $id;


if(isset($_POST['btnUpdate'])){
  $error=[];
  $program->set('course_name',$_POST['course_name']);

   $program->set('academic_requirement',$_POST['academic_requirement']);
   $program->set('description',$_POST['description']);
   $program->set('syllables',$_POST['syllables']);
  $program->set('credit_hours',$_POST['credit_hours']);
  if(count($error)==0){
    $msg = $program->edit();
  }

}
$pdata = $program->getProgramByID();
require_once"header.php";
?>

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Program Management</h3><br>
              </div>

             
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Edit Panel</h2>
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

                   
                    <form id="pgform" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Course Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="course_name" class="form-control col-md-7 col-xs-12" value="<?php echo $pdata[0]->course_name; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="academic_requirement" class="control-label col-md-3 col-sm-3 col-xs-12">Academic Requirement<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12 ckeditor" type="text" name="academic_requirement"><?php echo $pdata[0]->academic_requirement; ?></textarea>
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12 ckeditor" type="text" name="description"><?php echo $pdata[0]->description; ?></textarea>
                          
                        </div>
                      </div>


                        

                         <div class="form-group">
                        <label for="syllables" class="control-label col-md-3 col-sm-3 col-xs-12">Syllables<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12 ckeditor" type="text" name="syllables"><?php echo $pdata[0]->syllables; ?></textarea>
                          
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="credit_hours" class="control-label col-md-3 col-sm-3 col-xs-12">Credit Hours<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" type="credit_hours" name="credit_hours" value="<?php echo $pdata[0]->credit_hours; ?>">
                          
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
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#pgform').validate();
          });
        </script>

       




?>