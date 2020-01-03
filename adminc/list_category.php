<?php
require_once"header.php";
?>

<?php
require_once "class/category.class.php";
$category = new Category();
$data = $category->lists();
?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category Management</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Category</h2>
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
                          <th>Rank</th>
                          <th>Status</th>
                          <th>Created By</th>
                          <th>Modified By</th>
                          <th>Created Date</th>
                          <th>Modified Date</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1;foreach($data as $dv) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $dv->name; ?></td>
                          <td><?php echo $dv->rank; ?></td>
                          <td><?php if($dv->status==1){
                            echo "<label class='label label-success'>Active</label>";}
                            else{
                              echo "<label class='label label-danger'>Deactive</label>";
                              } ?></td>
                          <td><?php echo $dv->created_by; ?></td>
                          <td><?php echo $dv->modified_by; ?></td>
                          <td><?php echo $dv->created_date; ?></td>
                          <td><?php echo $dv->modified_date; ?></td>
                          <td><a href="edit_category.php?id=<?php echo $dv->id ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a><a href="delete_category.php?id=<?php echo $dv->id; ?>" class = "btn btn-danger" onclick = "return confirm('Are you sure to delete this record');"><i class="fa fa-trash"></i>Delete</a></td>

                          
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
        