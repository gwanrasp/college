<?php
require_once"header.php";
?>

<?php
require_once "class/notice.class.php";
$notice = new Notice();
$ndata = $notice->lists();

?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Notice Management</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Notice</h2>
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
                          <th>Status</th>
                          <th>Created By</th>
                          <th>Modified By</th>
                          <th>Created Date</th>
                          <th>Modified Date</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($ndata as $nv) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $nv->title; ?></td>
                           <td><img src="images/<?php echo $nv->feature_image;?>" width="100"></td>
                          <td><?php if($nv->status==1){
                            echo "<label class='label label-success'>Active</label>";}
                            else{
                              echo "<label class='label label-danger'>Deactive</label>";
                              } ?></td>
                          <td><?php echo $nv->created_by; ?></td>
                          <td><?php echo $nv->modified_by; ?></td>
                          <td><?php echo $nv->created_date; ?></td>
                          <td><?php echo $nv->modified_date; ?></td>
                          <td><a href="edit_notice.php?id=<?php echo $nv->id;?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a><a href="delete_notice.php?id=<?php echo $nv->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this notice');"><i class="fa fa-trash">Delete</i></a> 
                          
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
        