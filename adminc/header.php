<?php
@session_start();
if(!isset($_SESSION['admin_username'])){
  header('location:index.php?msg=1');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | NCIT</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">




    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-mortar-board"></i> <span>NCIT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,<h2><?php echo $_SESSION['admin_username']; ?></h2></span>
                
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                <h3><u>General</u></h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-university"></i> DASHBOARD </a>
                    
                  </li>
                  <li><a><i class="fa fa-reorder"></i>Category Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_category.php"><i class="fa fa-plus-circle"></i>Create Category</a></li>
                      <li><a href="list_category.php"><i class="fa fa-database"></i>List Category</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-thumb-tack"></i>Notice Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_notice.php"><i class="fa fa-plus-circle"></i>Create Notice</a></li>
                      <li><a href="list_notice.php"><i class="fa fa-database"></i>List Notice</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-indent"></i>Program Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_program.php"><i class="fa fa-plus-circle"></i>Create Program</a></li>
                      <li><a href="list_program.php"><i class="fa fa-database"></i>List Program</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-picture-o"></i>Gallery Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_gallery.php"><i class="fa fa-plus-circle"></i>Add Photos</a></li>
                      <li><a href="list_gallery.php"><i class="fa fa-database"></i>List Photos</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-picture-o"></i>Banner Images<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_image.php"><i class="fa fa-plus-circle"></i>Add Photos</a></li>
                      <li><a href="list_image.php"><i class="fa fa-database"></i>List Photos</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-th-list"></i>Team Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_team.php"><i class="fa fa-plus-circle"></i>Add Members</a></li>
                      <li><a href="list_team.php"><i class="fa fa-database"></i>List Members</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-language"></i>Application Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="list_applicants.php"><i class="fa fa-info-circle"></i>Applicant's Info</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-comments"></i>Contact Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="list_contacts.php"><i class="fa fa-group"></i>List Contacts</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i>Subscribers<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="list_subscribers.php"><i class="fa fa-group"></i>List Subscribers</a></li>
                      
                    </ul>
                  </li>
                  
                  
                 
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav ">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i><?php echo $_SESSION['admin_username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="user_profile.php"> Profile</a></li>
                    
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
