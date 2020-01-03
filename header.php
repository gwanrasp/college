<?php
require_once"adminc/class/category.class.php";
$category = new Category();
$data = $category->getActiveCategory();
?>

<?php
require_once"adminc/class/image.class.php";
$image = new Image();
$i = $image->getFeatureImage();


?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>NCIT | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="TechEdu Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />

<link rel="stylesheet" href="css/lightbox.css">
<!-- carousel slider -->  
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
<!-- //carousel slider -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
	<!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="wthree_agile_login">
						     <ul>
								<li><i class="fa fa-phone" aria-hidden="true"></i> 01-5010670/5010559 </li>
								<li><i class="fa fa-envelope-o list-icon" aria-hidden="true"></i><a href="mailto:gwanrasp5@gmail.com">info@nagarjuna.edu.np</a></li>
							</ul>
						</div>
						 
				</div>
			</div>
			<!--//banner-bottom-->

  
	<div id="demo-1"  <?php foreach($i as $j) { ?> data-zs-src= '["adminc/images/<?php echo $j->feature_image;?>", "adminc/images/5a2f9b1017e12_welcome-farewell-20.jpg",  "adminc/images/5a2f9b2bef371_147d4f1a751cd88f6c2249ffa4e0995a58d4c474615d06.98694356.jpg"  ,"adminc/images/5a2f9b4ba1fa5_17264177_1294992500580027_6938549500848278778_n.jpg" , "adminc/images/5a2f9b649b15c_19657335_1413710215374921_408443643224932473_n.jpg" ]'
 <?php } ?>

		data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span class="letter">NCIT</span></a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">

							<?php if($_SERVER['SCRIPT_NAME']=='/college/index.php'){
								$cc='active';
								} else {
									$cc='';
									}
								?>
								<li class="<?php echo $cc; ?>"><a href="index.php">Home</a></li>
								<?php foreach($data as $cat) { ?>
								<li><a href="category.php?catid=<?php echo $cat->id; ?>" ><?php echo $cat->name; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					<div class="clearfix"> </div>	
				</nav>
			</div> 

			   </div>


		<!--//header-w3l-->
		</div>
		