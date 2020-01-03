<?php
require_once"header.php";
?>

<?php
require_once "class/applicant.class.php";
$applicant = new Applicant();

$data = $applicant->lists();

?>
        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Applicant Management</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Applicant's Info</h2>
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
                          <th>Full Name</th>
                          <th>Gender</th>
                          <th>DOB</th>
                          <th>Permanent Address</th>
                          <th>Contact No.</th>
                          <th>Email</th>
                          <th>Father Name</th>
                          <th>Occupation</th>
                          <th>Mother Name</th>
                          <th>Last Exam Passed</th>
                          <th>Passed Year</th>
                          <th>Name of College</th>
                          <th>Percentage</th>
                          <th>Applied Date</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($data as $av) { ?>
                      
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $av->f_name; ?></td>
                          <td><?php echo $av->gender; ?></td>
                          <td><?php echo $av->dob; ?></td>
                          <td><?php echo $av->p_address; ?></td>
                          <td><?php echo $av->contact_no; ?></td>
                          <td><?php echo $av->email; ?></td>
                          <td><?php echo $av->father_name; ?></td>
                          <td><?php echo $av->occupation; ?></td>
                          <td><?php echo $av->mother_name; ?></td>
                          <td><?php echo $av->last_exampass; ?></td>
                          <td><?php echo $av->pass_year; ?></td>
                          <td><?php echo $av->nos_c; ?></td>
                          <td><?php echo $av->percentage; ?></td>
                          
                          <td><?php echo $av->applied_date; ?></td>


                        
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
        
