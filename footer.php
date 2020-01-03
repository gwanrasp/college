<!-- footer -->
<div class="agileits_w3layouts-footer">
		<div class="col-md-6 col-sm-8 agileinfo-copyright">
			<p>© 2017 NCIT. All rights reserved | Design by: <b><u>Group 1</b></u></p>
		</div>
		<div class="col-md-6 col-sm-4 agileinfo-icons">
			<ul>
				<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
				
				<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
    <!-- footer -->
    <!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				 <b>NCIT</b>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="adminc/images/ncit.jpg" alt=" " class="img-responsive" width="100%"/>
						<p>NCIT is where you differ. It's focus is to prepare students be active in life, remain successful, independent and self-reliant.How it differs from other colleges?</p>
						 <p><b>->Affordable cost</b></p>
						 <p><b>->Regular seminars</b></p>
						 <p><b>->Bootcamp</b></p>
						 <p><b>->Great rules and regulations</b></p>
					     <p><b>->Virtual Learning</b></p>		 
					</div>
			</div>
		</div>
	</div>
<link rel="stylesheet" type="text/css" href="css/form.css" media="all">
<body>
	<div class="modal video-modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				  Application Form
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>



					<div class="modal-body">
						
						<div class="panel-body ">
						<div class="p-3 mb-2 bg-secondary text-white"> 
                            <div class="row">
                                <div class="col-lg-12">

                                    <form role="form" action="appform.php" method="post" id="app">
                                    <div>
                                    
                                   <span id="heading"><p>Personal Information</p></span><br>
                                    </div>
                                        <div class="form-group">

                                            <label>Full Name</label>
                                            <div class="row">
                                           <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="f_name" placeholder="First name" required="required">
                                            
                                        </div>
                                         <div class="col-lg-6">
                                         <input type="text" class="form-control"  name="f_name" placeholder="Last name">
                                           
                                        </div>
                                        </div>
                                        </div>

                                         <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio" name="gender">
                                                <label>
                                                    <input type="radio" name="gender" value="Male">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender"  value="Female" checked>Female
                                                </label>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="date" placeholder="MM/DD/YY" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input type="text" class="form-control" name="p_address" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="number" class="form-control" name="contact_no" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Father Name</label>
                                            <input type="text" class="form-control" name="father_name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" name="occupation" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Mother Name</label>
                                            <input type="text" class="form-control" name="mother_name" required="required">
                                        </div><br>

                                         <div >
                                    <span id="heading"><p>Qualification</p></span><br>
                                    </div>
                                        <div class="form-group">
                                            <label>Last Examination Passed</label>
                                            <input type="text" class="form-control"  name="last_exampass" required="required">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Passed Year</label>
                                            <input type="number" class="form-control" name="pass_year" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Name of Institution</label>
                                            <input type="text" class="form-control" name="nos_c" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Percentage</label>
                                            <input type="number" class="form-control" name="percentage" required="required">
                                        </div><br>

                                         <div >
                                      <span id="heading"><p>Course Selection</p></span>
                                     </div>

                                     <div class="form-group">
                                      <?php
                                     require_once"adminc/class/program.class.php";
                                     $program = new Program();
                                     $data = $program->lists();
                                       ?>
                                     <label>Bachelor</label>
                                     <select class="form-control" id="sc">
                                    
                                       <option>Select Course....</option>
                                     <?php foreach($data as $dt) { ?>
                                     <option><?php echo $dt->course_name; ?></option>
                                     
                                     <?php } ?>
                                     </select>
                                     </div>

                                                                                                            
                                        
                                        <button type="submit" name="appsubmit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Clear</button>
                                        <?php if(isset($msgapp)){
                                        	echo"<script type='text/javascript'>alert('Form submitted successfully')</script>";
                                        }?>
                                    </form>
                                </div>
						
						
					</div>
			</div>
		</div>
	</div>
	<body>
<!-- //bootstrap-modal-pop-up --> 
<!--script for portfolio-->
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
	<!--//script for portfolio-->


<script src="js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: true, //Set AutoPlay to 3 seconds
			  items :3,
			  itemsDesktop : [640,2],
			  itemsDesktopSmall : [414,1],
			  navigation : true,
			  // THIS IS THE NEW PART
				afterAction: function(el){
					//remove class active
					this
					.$owlItems
					.removeClass('active')
					//add class active
					this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
					}
			// END NEW PART
		 
			});
			
		}); 
	</script>
	
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		<!-- flexSlider -->
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- //flexSlider -->

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
 <script type="text/javascript" src="adminc/validation/dist/jquery.validate.min.js"></script>
	
<script src="js/SmoothScroll.min.js"></script>
  </body>
 </html> 