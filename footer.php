<footer>
			<div class="main_footer__block pb-0 pt-60">
				<div class="container">
					<div class="row bdr_bottum">
						<div class="col-lg-4">
							<div class="footer_box__block">
								<h4>About Us</h4>
								<p align="justify">
									MASS HSE CONSULTANT CO is a Kuwaiti institute to provide consultancy and training
founded in 2011 with 20 years of experience in a broad portfolio of projects.
								</p>
								<p align="justify">
									MASS HSE CONSULTANT CO is one of the largest national institutes in the State of
Kuwait, which is always provide the high quality of the training process dedicated to our clients.
								</p>
								
							</div>
						</div>

						<div class="col-lg-4 mt-xs-30 mt-sm-30">
							<div class="footer_box__block">
								<h4>Our Courses</h4>
								<ul>
	 <?PHP 
        $s123="SELECT * from course  Limit 5";
        $sl123=$db->prepare($s123);
        $sl123->execute();

 while($res123=$sl123->fetch(PDO::FETCH_ASSOC))
 {

  ?>
									<li>
										<a href="course.php"><?php echo $res123['course'];?></a>
									</li>

									<?php
								}
								?> 
									<li>
										<a href="course.php">Learn more...</a>
									</li>
									<!-- <li>
										<a href="#">Surya College</a>
									</li>
									<li>
										<a href="#">Akshaya College</a>
									</li>
									<li>
										<a href="#">SJES College</a>
									</li>
									<li>
										<a href="#">Rajeev College</a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="col-lg-4 mt-sm-30 mt-xs-30">
							<div class="footer_box__block address-box">
								<h4>Contact info</h4>
								<ul>
									
									<li>
										<i class="fa fa-envelope-o"></i>
										<p>
											<a href="mailto:Training@masshseconsultant.com">Training@masshseconsultant.com</a>
										</p>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i>
										<p>
											<a href="mailto:info@masshseconsultant.com">info@masshseconsultant.com</a>
										</p>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<p>
											Hawally.Block 9, Birout St.Nour complex, Floor 6-Kuwait	
										</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
									    <p>
											Call Us +965 66086911-67003904
										</p>
									</li>
									<li>
										<i class="fa fa-clock-o"></i>
										 <p>
											9am To 2pm , 4pm To 9pm<br>
											Sunday To Thursday
											
										</p>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<p>
											Egypt Branch : Egypt Alexandria Gov-Borg Alarab Industrial Area - block 3 South Area-no 134,
										</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
									    <p>
											Tel: +20 101 2059055-020 109 8013515
										</p>
									</li>
									
								</ul>
							</div>
						</div>
					</div>

					<div class="row same_style">

						<!-- <div class="col-lg-5">
							<div class="news_section">
								<h4>Subscribe Us</h4>
								<form id="#" class="newsletter-form">
									<div class="input-group">
										<input type="email" value="" name="email" placeholder="Your Email" class="form-control input-lg">
										<span class="input-group-btn">
											<button class="btn btn-colored" type="submit">
												Subscribe
											</button> </span>
									</div>
								</form>
							</div>
						</div> -->

						<div class="col-lg-3 offset-lg-1  mt-sm-30 mt-xs-30">
							<div class="call_now">
								<!--<h4>Call Us Now</h4>-->
								<!--<ul>-->
								<!--	<li>-->
						  <!--             +965-22439284-->
								<!--	</li>-->
								<!--	<li>-->
								<!--		+965-61696696-->
								<!--	</li>-->
								<!--</ul>-->
							</div>
						</div>

						<div class="col-lg-3 mt-sm-30 mt-xs-30">
							<div class="footer_social">
								<h4>Connect With Us</h4>
								<ul>
									<li >
										<a href="#!" style="background: #0cca6b"><i class="fa fa-facebook" ></i></a>
									</li>
									<li>
										<a href="#!" style="background: #0cca6b"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#!" style="background: #0cca6b"><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href="#!" style="background: #0cca6b"><i class="fa fa-pinterest"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
				<div id="bottom" class="clearfix style-1 copyriight_block ptb-20">
					<div id="bottom-bar-inner" class="container">
						<div class="bottom-bar-inner-wrap">
							<div class="bottom-bar-content">
								<div id="copyright" style="font-size: 14px;">
									© Copyrights 2019 MASS HSE CO 
								</div>
								<div id="copyright1" style="font-size: 14px;">
								Developed by : <a href="http://nuevoinformatica.com" style="color:white;">NUEVO INFORMATICA</a> 
								</div>
								<!-- /#copyright -->
								
							</div>
							<!-- /.bottom-bar-content -->
						<!-- 	<div class="bottom-bar-menu">
								<ul class="bottom-nav">
									<li>
										<a href="#/">HISTORY</a>
									</li>
									<li>
										<a href="#/">FAQ</a>
									</li>
									<li>
										<a href="#/">EVENTS</a>
									</li>
								</ul>
							</div> -->
							<!-- /.bottom-bar-menu -->
						</div>
						
						
					</div>
				</div>

			</div>

		</footer>
		<!-- Footer_End -->





	<div class="modal fade" id="myModal" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ffb606;">
       
          <h4 class="modal-title" style="margin-top: 0px; color: white;">Enquiry Form</h4>
             <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
        </div>
        <div class="modal-body" style="text-align: center; margin-top: 20px;">
        <form action="" method="post" id="upload">
							<div class="romana_check_out_form">
								<div class="row">
									<div class="col-lg-12">
										<div class="check_form_left common_input">
											<div class="row">
												<div class="col-sm-6">
													<input type="text" name="first_name" placeholder="First name" required>
												</div>
												<div class="col-sm-6">
													<input type="text" name="last_name" placeholder="Last name" required>
												</div>
											</div>
										
											<div class="row">
												<div class="col-sm-6">
													<input type="text" name="email" placeholder="Email" required>
												</div>
												<div class="col-sm-6">
													<input type="text" name="number" placeholder="Mobile Number" required>
												</div>
											</div>


											<div class="row">
												<!-- <div class="col-sm-6">
													<input type="text" name="state" placeholder="State" required>
												</div>
												<div class="col-sm-6">
													<input type="text" name="district" placeholder="District" required>
												</div> -->

												<!-- <div class="col-sm-6">
													  <select class="form-dropdown" name="course" required>
										                  <option value="">Select Course</option>
	 <?PHP 
        $s="SELECT * from course";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {

  ?>
  <option><?php echo $res["course"]; ?> </option>

  <?php
}
?>

										               
										                </select>
												</div> -->
											</div>

	                                     <div class="row">
	                                     	<!--<div class="col-sm-12">-->
													<input type="hidden" name="course" placeholder="course" value="">
												<!--</div>-->
												<div class="col-sm-12">
													<input type="text" name="enquiry" placeholder="Enquiry" required>
												</div>
												
												
											</div>








										</div>
									</div>
								
								</div>
							</div>
						
        </div>
        <div class="modal-footer" style="padding: 0.5rem;">
          <button type="submit" class="btn btn-default"  style="color: white;">Send</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>

<script src="assets/js/jquery-1.11.1.min.js"></script>
   <script>
$(document).ready(function()
{
  //alert("hello");
$("#upload").submit(function(e) {
//alert("hello");
    var url = "enquiry_mail.php"; // the script where you handle the form input.
 e.preventDefault(); // avoid to execute the actual submit of the form.
    $.ajax({
           type: "POST",
           url: url,
           data: new FormData(this),
           cache: false,
           contentType: false,
           processData: false, 
           success: function(data)
           {
              alert(data); // show response from the php script.
              
        window.location.href="";
              
           }
         });

   
});
});
</script>



		<!-- Site Wraper End -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.js" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- popup -->
		<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

		<!-- carousel Js -->
		<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="assets/js/mail.js" type="text/javascript"></script>

		<!-- revolution Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script>

		<!-- custom Js -->
		<!--<script src="assets/js/custom.js" type="text/javascript"></script>-->

</body>
<!-- Mirrored from theembazaar.com/demo/goldey/memozin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 17:38:14 GMT -->
</html>
