<?php
require_once "class/user.class.php";
$user= new User();
if(isset($_POST['btnSave'])){
  $err=[];
  $user->set('name',$_POST['name']);
  $user->set('username',$_POST['username']);
  $user->set('email',$_POST['email']);
  $user->set('password',$_POST['password']);
  $user->set('last_login',date('Y-m-d H:i:s'));
  $user->set('role',$_POST['role']);


  if(count($err)==0){
    $msg = $user->create();
  }
  


}
?>


<?php 
require_once"class/user.class.php";
$user = new User();
if(isset($_POST['login'])){
  $error=[];
  if(isset($_POST['email']) && !empty($_POST['email'])){
    $user->set('email',$_POST['email']);
  }
  else
  {
    $error['email'] = "Email required";
  }

  if(isset($_POST['password']) && !empty($_POST['password'])){
    $password= md5($_POST['password']);
    $user->set('password',$password);
  }
  else{
    $error['password'] = "Password doesn't match";
  }
  if(count($error)==0){
    $message = $user->login();
  }
  
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

    <title>Admin Login | NCIT </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <div class="well">
          <img src="production/images/logo.jpg" class="img-responsive" style="margin:0 auto; display:block" alt=""/></div>
        <?php if(isset($message)){
          echo $message;
        }?>
         <?php if(isset($_GET['msg']) && $_GET['msg']==1){
          echo "Login to access admin panel";
        }?>
            <form action="" method="post">
              
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" />
                <?php if(isset($error['email'])){
                  echo $error['email'];

                  }?>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                <?php if(isset($error['password'])){
                  echo $error['password'];

                  }?>
              </div>
              <div>
                <input type="submit" value="Log in" name="login" class="btn btn-success btn-lg btn-group-justified"  style="color:OldLace; width:80%" >
                
              </div>

              <div class="clearfix"></div>

             
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
 <script type="text/javascript" src="validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#signform').validate();
          });
        </script>