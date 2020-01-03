<?php
require_once"header.php";
?>

<?php
require_once "class/team.class.php";
$team = new Team();
$data = $team->lists();

?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Team Management</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Members</h2>
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
                          <th>Name</th>
                          <th>Post</th>
                          <th>Message</th>
                          <th>Image</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($data as $gv) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $gv->name; ?></td>
                          <td><?php echo $gv->post; ?></td>
                          <td><?php echo $gv->message; ?></td>

                         <td><img src="images/<?php echo $gv->feature_image;?>" width="100"></td>
                          
                          <td><a href="edit_team.php?id=<?php echo $gv->id;?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a><a href="delete_team.php?id=<?php echo $gv->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this member');"><i class="fa fa-trash">Delete</i></a> 
                          
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
        