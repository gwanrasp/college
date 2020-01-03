<?php
require_once"header.php";
?>

<?php
require_once "class/contact.class.php";
$contact = new Contact();
$data = $contact->lists();

?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Contact Management</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Contacts</h2>
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
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Submitted Date</th>
                          <th>Delete</th>
                          
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($data as $cv) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $cv->f_name; ?></td>
                          
                          <td><?php echo $cv->l_name; ?></td>
                          <td><?php echo $cv->email; ?></td>
                          <td><?php echo $cv->subject; ?></td>
                          <td><?php echo $cv->message; ?></td>
                          <td><?php echo $cv->submit_date; ?></td>
                          <td><a href="delete_contact.php?id=<?php echo $cv->id; ?>" class = "btn btn-danger" onclick = "return confirm('Are you sure to delete this record');"><i class="fa fa-trash"></i>Delete</a></td>

                          
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
        