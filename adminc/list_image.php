<?php
require_once"header.php";
?>

<?php
require_once "class/image.class.php";
$image = new Image();
$data = $image->lists();

?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banner Images</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Photos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>S.N</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Feature Key</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($data as $gv) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $gv->title; ?></td>
                          <td><img src="images/<?php echo $gv->feature_image;?>" width="100"></td>
                          <td><?php if($gv->feature_key==1){
                            echo "<label class='label label-success'>Active</label>";}
                            else{
                              echo "<label class='label label-danger'>Deactive</label>";
                              } ?></td>
                          
                          <td><a href="edit_image.php?id=<?php echo $gv->id;?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a><a href="delete_image.php?id=<?php echo $gv->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this notice');"><i class="fa fa-trash">Delete</i></a> 
                          
                        </tr>
                        <?php }?>
                        
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
                  
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
        