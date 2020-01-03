<?php 
require_once"header.php";
?>



<?php
require_once"adminc/class/category.class.php";
$id=$_GET['catid'];
$category = new Category();
$category->id=$id;
$data = $category->getCategoryByID();
?>


<?php
require_once"adminc/class/team.class.php";
$team = new Team();
$data1 = $team->lists();
?>

<?php
require_once"adminc/class/gallery.class.php";
$gallery = new Gallery();
$data2 = $gallery->getFeaturedPhoto();
?>

<?php
require_once"adminc/class/program.class.php";
$program = new Program();
$data3 = $program->lists();
?>

<?php
require_once"adminc/class/notice.class.php";
$notice = new Notice();
$data4 = $notice->lists();
?>


<?php
require_once"adminc/class/subs.class.php";
$subs = new Subscriber();

if(isset($_POST['subsubmit'])){
	$subs->set('email',$_POST['email']);
	$subs->set('created_date',date('Y-m-d H:i:s'));
	$msgsub = $subs->create();
}
?>










			<!--/banner-info-->
			   <div class="baner-info">
			       <h4>The best learning institution</h4>
				   <h3><span>w</span>elcome to our <span>c</span>ollege</h3>
				  <p>You will never Walk Alone</p>
				 
			   </div>
			<!--/banner-ingo-->		
		</div> 
    </div>
  <!--/banner-section-->
  <!--about -->
	<div id="about" class="wthree-about w3ls-section">
		<div class="container">
			<div class="agileits-banner-grids text-center">
				<div class="banner-bottom-girds">
					<div class="agileits-banner-grid bg-w3ls-active">
						<span class="fa fa-university banner-icon" aria-hidden="true"></span>
						<h4>Academics</h4>
						<p>"The cost of college should never discourage anyone from going after a valuable degree."
						</p>
						<a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> read more</a>
					</div>
					<div class="agileits-banner-grid">
						<span class="fa fa-tags banner-icon" aria-hidden="true"></span>
						<h4>Application</h4>
						<p>Application form for the new students who want to get admit in this college.Just fill the form</p>
							<a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#apply"> read more</a>
					</div>
					<div class="clearfix"></div>
			    </div>		
			</div>	
			<h2 class="w3ls-title">about us</h2>
			<h5>An investment in <span style = "color:red;"> KNOWLEDGE </span></style>always pays the <span style = "color:red;">best interest.</span></h5>
			<div class="col-md-7  w3ls-about-left">
				<p>Nagarjuna has been a great name in the education field since 1986. It is accredited to ministry of education to run High School, Higher Secondary School and Bachelor level programme such as BIM< BBS and BSC.CSIT of Tribhuvan University. </p>
				<p class="about-bottom">NCIT, with its swift management body and composite teaching personalities, has been a motivating centre for effective learning and innovative practices. Nagarjuna is dedicated into development of educational sector of Nepal since then. Thousands of students have beneficiated for higher studies either in Nepal or abroad, in renowned university. Some of them are with renowned scholarships.</p>
			</div>
			<div class="col-md-5 w3ls-row">
				<div class="col-md-6 col-sm-6 wthree-about-left">
					<img src="adminc/images/a.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 col-sm-6 w3ls-row alert wthree-about-right">
					<img src="images/Capture1.png" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<!-- //about -->
  <!--services-->
  <div class="agileits-services w3ls-section" id="agileits-services" >
		<div class="container">
			<h3 class="w3ls-title">programs </h3>
			<div class="agileits-services-row">
				
				<?php foreach($data3 as $dd) { ?>

				<div class="col-md-3 col-sm-6 agileits-services-grids">
					<span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
					<h4><?php echo $dd->course_name; ?></h4>
					<p><?php echo substr($dd->description,0,80)?>.....</p><br>
					<a class="hvr-rectangle-out w3_play_icon1" href="program.php?pid=<?php echo $dd->id; ?>" data-toggle="modal" data-target="index.php?pid=<?php echo $dd->id; ?>"> read more</a>
				</div>

				<?php } ?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//agileits-services-->
<!--portfolio-->
	<div id="portfolio" class="portfolio w3ls-section">
		<div class="container">
			<h3 class="w3ls-title">gallery</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					
					<li class="resp-tab-item"><span>Sports Events</span></li>
					<li class="resp-tab-item"><span>Orientation</span></li>
					<li class="resp-tab-item"><span>Welcome Events</span></li>
					<li class="resp-tab-item"><span>Prizes</span></li>					
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">

					<?php foreach($data2 as $img) { ?>
					<?php if($img->title=="sports") { ?>
						<div class="col-md-3 portfolio-grids">
							<a href="adminc/images/<?php echo $img->feature_image; ?>" data-lightbox="example-set" data-title="<?php echo $img->description; ?>">
								<img src="adminc/images/<?php echo $img->feature_image; ?>" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>SPORTS</h5>
								</div>
							</a>
							<?php } ?>
						</div>
						<?php } ?>
						</div>
						


					<div class="tab-2 resp-tab-content">

					<?php foreach($data2 as $img) { ?>
					<?php if($img->title=="orientation") { ?>
						<div class="col-md-3 portfolio-grids">
							<a href="adminc/images/<?php echo $img->feature_image; ?>" data-lightbox="example-set" data-title="<?php echo $img->description; ?>">
								<img src="adminc/images/<?php echo $img->feature_image; ?>" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Orientation</h5>
								</div>
							</a>
							<?php } ?>
						</div>
						<?php } ?>
						</div>
						

					<div class="tab-3 resp-tab-content">

					<?php foreach($data2 as $img) { ?>
					<?php if($img->title=="welcome") { ?>
						<div class="col-md-3 portfolio-grids">
							<a href="adminc/images/<?php echo $img->feature_image; ?>" data-lightbox="example-set" data-title="<?php echo $img->description; ?>">
								<img src="adminc/images/<?php echo $img->feature_image; ?>" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Welcome</h5>
								</div>
							</a>
							<?php } ?>
						</div>
						<?php } ?>
						</div>
						


					<div class="tab-4 resp-tab-content">

					<?php foreach($data2 as $img) { ?>
					<?php if($img->title=="prize") { ?>
						<div class="col-md-3 portfolio-grids">
							<a href="adminc/images/<?php echo $img->feature_image; ?>" data-lightbox="example-set" data-title="<?php echo $img->description; ?>">
								<img src="adminc/images/<?php echo $img->feature_image; ?>" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Prize</h5>
								</div>
							</a>
							<?php } ?>
						</div>
						<?php } ?>
						

					</div>
					<div class="clearfix"></div>
					<br><br><br><br><br>
				</div>	
										
			</div>
			
		
		</div>
		</div>	
	</div>

	<!--//portfolio-->
  <!--//main-header-->
	<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
	<!-- testimonial -->
	<div class="wthree-testi w3ls-section" id="testimonials">
		<!-- container -->
		<div class="container">
			<h3 class="w3ls-title">Notice</h3> 
			<div class="w3_wthree-testi_grids text-center">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
						<?php foreach($data4 as $nn) { ?> 
							<li>	
								<div class="wthree-testi_grid">
									<div class="testimonial-left">
										<i class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></i> 
									</div>
									<h2 class="w3ls-title"><?php echo $nn->title; ?></h2>
									 <p><?php echo substr($nn->short_description,0,90)?>....</p>
									<a class="hvr-rectangle-out w3_play_icon1" href="notice.php?nid=<?php echo $nn->id; ?>" data-toggle="modal" data-target="index.php?nid=<?php echo $dd->id; ?>"> read more</a>
								</div>
							</li>
						<?php } ?>	

							
						</ul>
					</div>
				</section>
				
			</div>
		</div>
	</div>
<!-- //testimonial --> 
<!-- team -->
	<div class="testimonials w3ls-section" id="team">
		<div class="container">
			<h3 class="w3ls-title">TEAM</h3>
			<div class="w3_testimonials_grids w3_testimonials_grids">
			<div id="owl-demo" class="owl-carousel"> 
			<?php foreach($data1 as $lt) { ?>
				<div class="item w3_agileits_testimonials_grid">
					<img src="adminc/images/<?php echo $lt->feature_image; ?>" alt=" " height="40%" width="45%" class="img-responsive" />
					<h4><?php echo $lt->name; ?></h4>
				  <p><?php echo $lt->post;?><p>
					<span><i>Message</i></span><p><?php echo $lt->message; ?></p>
				</div>
				<div class="item w3_agileits_testimonials_grid">
					<img src="adminc/images/<?php echo $lt->feature_image; ?>" alt=" " height="40%" width="45%" class="img-responsive" />
					<h4><?php echo $lt->name; ?></h4>
					<p><?php echo $lt->post;?><p>
					<span><i>Message</i></span><p><?php echo $lt->message; ?></p>
				</div>
				
				<?php }?>
		</div>
	</div>
	</div>
	</div>
<!-- //team -->
	<!-- contact -->
	<div class="contact-bottom w3ls-section" id="contact">
		<div class="container">
			<h3 class="w3ls-title">contact</h3>
			<p>Contact us for more information</p>
			<div class="w3layouts-list">
					<div class="col-md-4 li"><span class="fa fa-map-marker" aria-hidden="true"></span><h6>Hariharbhawan,Lalitpur.</h6></div>
					<div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span><h6>01-5010670</h6></div>
					<div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:gwanrasp5@gmail.com">info@nagarjuna.edu.np</a></div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-5 col-sm-5  col-xs-5 agileits_w3layouts-map">
				<image src="adminc/images/map.jpg" class="img-responsive" width="80%" height="50%">
			</div>	
			<div class="col-md-7 col-sm-7 col-xs-7 contact-right-w3l">
				<form action="contact.php" method="post">
					<input type="text" class="name" name="f_name" placeholder="First Name" required="">
					<input type="text" class="name" name="l_name" placeholder="Last Name" required="">
					<input type="email" class="name" name="email" placeholder="Email" required="">
					<input type="text" class="name" name="subject" placeholder="Subject" required="">
					<textarea placeholder="Your Message" required="" name="message"></textarea>
					<input type="submit" name="consubmit" value="SEND MESSAGE">
					<?php if(isset($msgcon)){
					echo"<script type='text/javascript'>alert('Request has been send')</script>";
					} ?>
				</form>
			</div>
			<div class="clearfix"></div><br>
		</div>
	</div>
<!-- //contact -->
<!-- subscribe -->
	<div class="w3ls-section subscribe text-center">
		<div class="container">
			<h3 class="w3ls-title">subscribe now!</h3>
			<p>Enter your email address to get the latest news, special events and student activities delivered right to your inbox.</p>
				<div class="subscribe-grid">
				<form action="" method="post">
					<input type="email" placeholder="Enter your email.." name="email" required="">
					<button type="submit" name="subsubmit" class="btn1">subscribe</button>
					<?php if(isset($msgsub)){
						echo "<script type='text/javascript'>alert('Good to have as a part of our team')</script>";

						}?>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->



<?php
require_once"footer.php";
?>