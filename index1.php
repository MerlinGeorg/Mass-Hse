<?php include("header.php"); ?>
<style>
#mySidenav a {
position: fixed;
right : -60px;
transition: 0.3s;
padding: 10px;
width: 90px;
text-decoration: none;
font-size: 15px;
color: white;
border-radius: 5px 5px 5px 5px;

z-index: 1;
}

#mySidenav a:hover {
  right: 0;
}

#about {
  top: 20px;
  background-color: #4CAF50;
}

#blog {
  top: 80px;
  background-color: #2196F3;
}

#projects {
  top: 140px;
  background-color: #f44336;
}

#contact {
  top: 200px;
  background-color: #555
}
</style>



		<!-- END HEADER -->

		<!--  Main Banner Start Here-->
		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>

          <?PHP 
        $s="SELECT * from home_slider where slide_priority='1' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {

  ?>

						<!-- SLIDE  -->
						<li data-index="rs-129"  >
							<!-- MAIN IMAGE -->
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-129-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.zoomInUp;"
							data-transform_out="auto:auto;s:1000;e:Power3.zoomInUp;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text">
									<!--<span class="sub-text"></span>-->
									<h2 class="animated flip" style="font-family: Comic Sans !important;"><span style="color: red;font-size: 57px"><b>MASS HSE CONSULTANT</b></span><br>
									<!--Institute for Engineering Training -->

      </h2>

									<!-- <p>
									  We have direct authorization of reputed colleges

   Free Admission guidance to students and parents

  We guide and prefer recognized and well known institutions.

									</p>  -->
									<a class="btn-text" href="#"> Know more</a> 
								</div>
							</div>
							
						</li>
					<?php } 

        $s="SELECT * from home_slider where slide_priority='2' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {

  ?>
						<!-- SLIDE  -->
						<li data-index="rs-130" data-title="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								<!-- 	<span class="sub-text">we are here to help you</span> -->
									<h2>We Make your Future Bright</h2>

								<!-- 	<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.
									</p> -->
									<!-- <a class="btn-text" href="#"> Read More</a> -->
								</div>
							</div>
						</li>
					<?php }

					$s="SELECT * from home_slider where slide_priority='3' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>
						<!-- SLIDE  -->
						<li data-index="rs-131">
							<!-- MAIN IMAGE -->
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg " >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-131-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
							<!-- 		<span class="sub-text">we are here to help you</span> -->
									<h2>Provides highly rated courses</h2>
								<!-- 	<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.
									</p>
									<a class="btn-text" href="#"> Read More </a> -->
								</div>
							</div>
						</li>
					<?php }


					$s="SELECT * from home_slider where slide_priority='4' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>				

						<li data-index="rs-132" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2> Free Admission Guidance to the Students & Parents</h2>

								
								</div>
							</div>
						</li> 

						<?php }


					$s="SELECT * from home_slider where slide_priority='5' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	

						 <li data-index="rs-133" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2> East West College</h2>

								
								</div>
							</div>
						</li> 

						<?php }


					$s="SELECT * from home_slider where slide_priority='6' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	

					<li data-index="rs-134" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2>We guide and prefer recognized and well known institutions</h2>

								
								</div>
							</div>
						</li> 
						<?php }


					$s="SELECT * from home_slider where slide_priority='7' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	
					 	<li data-index="rs-134" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2>We guide and prefer recognized and well known institutions</h2>

								
								</div>
							</div>
						</li>

						<?php }


					$s="SELECT * from home_slider where slide_priority='8' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	
					 	<li data-index="rs-134" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2>We guide and prefer recognized and well known institutions</h2>

								
								</div>
							</div>
						</li>

						<?php }


					$s="SELECT * from home_slider where slide_priority='9' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	
					 	<li data-index="rs-134" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2>We guide and prefer recognized and well known institutions</h2>

								
								</div>
							</div>
						</li>
						<?php }


					$s="SELECT * from home_slider where slide_priority='10' Limit 1";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {
					 ?>	
					 	<li data-index="rs-134" data-title="" data-description="">
							
							<img src="admin/uploads/<?php echo $res["slide_image"]; ?>"  alt=""   class="rev-slidebg">
							
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['650','650','650','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="100"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
								<div class="banner-text">
								
									<h2>We guide and prefer recognized and well known institutions</h2>

								
								</div>
							</div>
						</li>
				<?php } ?>		
						<!-- SLIDE  -->
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--  Main Banner End Here-->

		<!-- Section -->
		<section class="featured-service pt-xs-60">
			<div class="container">
				<div class="featured_box">
					<div class="row">
						<div class="col-lg-4 mb-30 mb-sm-60 mb-xs-60">
							<div class="featured-service-item pb-2 text-center">
								<a href="admission.php"><span class="featured-service-icon"><img src="assets/images/icon1.png" alt=""></span>
								<h3>Seat Reservation </h3></a>
							<!-- 	<p class="mb-0">
									Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs and online magazines.
								</p> -->
							</div>
						</div>

						<div class="col-lg-4 mb-30 mb-sm-60 mb-xs-60">
							<div class="featured-service-item pb-2 text-center">
								<a href="course.php"><span class="featured-service-icon"><img src="assets/images/icon2.png" alt=""></span>
								<h3>Admission guidance </h3></a>
								<!-- <p class="mb-0">
									Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs and online magazines.
								</p> -->
							</div>
						</div>

						<div class="col-lg-4 mb-30">
							<div class="featured-service-item pb-2 text-center">
								<a href="#"><span class="featured-service-icon"><img src="assets/images/icon3.png" alt=""></span>
								<h3>Certification</h3></a>
								<!-- <p class="mb-0">
									Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs and online magazines.
								</p> -->
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Section_End -->

		<!-- About -->
		<!-- <section class="padding ptb-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-flex align-items-center">
						<div class="about_text">
							<span>About Something</span>
							<h2>Mary Matha Educational Services, Bangalore</h2>
							<p>
								Only the best students in the world make it to the best graduate and business schools. An undeniable fact which makes the winning difference is the admission guidance they receive. Gaining admission to the premier schools which students globally aspire for is not an easy task. This seemingly tall order can be fulfilled and the ultimate achieved-if you have the right friend, philosopher and guide. This is exactly where 'VIBRANT' steps in.
							</p>

							<p>
								
							</p>

						</div>
					</div>

					<div class="col-lg-6">
						<div class="about_img">
							<img src="assets/images/men-laptop.png" alt="">
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
						<div class="about_point">
							<i class="ion-trophy icon_conunt"></i>
							<h3>Award</h3>
							<span class="counter" data-count="67">0</span>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
						<div class="about_point">
							<i class="ion-clipboard icon_conunt"></i>
							<h3>students</h3>
							<span class="counter" data-count="3562">0</span>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
						<div class="about_point">
							<i class="ion-happy icon_conunt"></i>
							<h3>Students </h3>
							<span class="counter" data-count="1054">0</span>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-60 mt-xs-30 mt-sm-30">
						<div class="about_point">
							<i class="ion-ios-heart-outline icon_conunt"></i>
							<h3>Likes</h3>
							<span class="counter" data-count="1904">0</span>

						</div>
					</div>

				</div>

			</div>
		</section> -->
		<!-- About_ENd -->

		<!-- Our_Courses -->

		<div id="mySidenav" class="sidenav">
<!--   <a href="#" id="about">About </i></a>
  <a href="#" id="blog" >Blog</a> -->
  <a href="contact.php"  data-toggle="modal" data-target="#myModal" id="projects"> <!-- <i class="fa fa-phone"> &nbsp; </i> --><i class="fa fa-envelope"></i> Mail us</a>
<!--   <a href="#" id="contact">Contact</a> -->
</div>
		



	<section class="padding ptb-xs-60 gray-bg" >
			<div class="container">
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Courses Offered</h2>
							<div class="line_heading">
								<span class="line_bar"></span>
								<span class="line_bar"></span>
							</div>
							<!-- <p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque.
							</p> -->
						</div>
					</div>
				</div>

			<div class="row">

	<?PHP 
        $s1="SELECT * from category Limit 9";
        $sl1=$db->prepare($s1);
        $sl1->execute();

 while($res1=$sl1->fetch(PDO::FETCH_ASSOC))
 {

  ?>			

					<div class="col-lg-4 col-md-6">
						<div class="course_box img-scale">
							<div class="course_figure" style="height: 200px">
								<img src="admin/uploads/<?php echo $res1["cat_image"]; ?>" alt="" />
							</div>
							<div class="course_details" style="height: 350px !important">
								<h3><a href="#"><?php echo $res1["cat_name"]; ?></a></h3>
								<!-- <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res1["qualification"]; ?></span>
									</div> -->
							
		

								<p>
									<ul>

                    					<?PHP 
        $s2="SELECT * from course where course_cat = '".$res1["cat_id"]."' Limit 5";
        $sl2=$db->prepare($s2);
        $sl2->execute();

 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 {

  ?>

									<li><?php echo $res2["course"]; ?></li>


<?php } ?>									
									<!-- <li>First Aid / CPR Training Course</li>
									<li>Fire Fighting Training Course</li>
									<li>Defensive Driving Training Course</li>
									<li>Banksman & Slinger</li>
									<li>Scaffolding (Erectors & Inspectors)</li> -->
								</ul>
								</p>
								
								
								<div class="info_course">
									

									<div class="box_info float-right">
										<a href="course.php"   target="_blank"><span class="price_course bg_orenge">View more</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>
				
<?php } ?>

                  
					



					

				</div>

			</div>
		</section>
		
		
	












		<!-- Our_Courses_End -->

		<!-- Section -->
<!-- 		<section class="padding ptb-xs-40 colume_bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="expert_text light-color">
							<h2>Like to become an instructor ?</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
							</p>
						</div>
					</div>
					<div class="col-lg-3 d-lg-flex align-items-lg-center justify-content-lg-end mt-xs-30 mt-sm-30">
						<a href="#!" class="btn-text">Get Strated Now</a>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Section_ENd -->

		<!-- COURSE CATEGORIES -->
	<!-- 	<section class="padding ptb-xs-60">
			<div class="container">
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Course Categories</h2>
							<div class="line_heading">
								<span class="line_bar"></span>
								<span class="line_bar"></span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="categories_box border_icon_green">
							<div class="icon_categor">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
							</div>
							<div class="categori_text">
								<h3>Business</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-xs-30">
						<div class="categories_box border_icon_red">
							<div class="icon_categor">
								<i class="fa fa-calculator" aria-hidden="true"></i>
							</div>
							<div class="categori_text">
								<h3>Accounting</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-sm-30 mt-xs-30">
						<div class="categories_box border_icon_blue">
							<div class="icon_categor">
								<i class="ion-ios-flask"></i>
							</div>
							<div class="categori_text">
								<h3>Science & Technology</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="categories_box border_icon_red">
							<div class="icon_categor">
								<i class="fa fa-ambulance" aria-hidden="true"></i>
							</div>
							<div class="categori_text">
								<h3>Health & Psychology</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="categories_box border_icon_blue">
							<div class="icon_categor">
								<i class="fa fa-coffee" aria-hidden="true"></i>
							</div>
							<div class="categori_text">
								<h3>Food & Drinking</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="categories_box border_icon_green">
							<div class="icon_categor">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
							</div>
							<div class="categori_text">
								<h3>Creative Arts & Med...</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section> -->
		<!-- COURSE CATEGORIES_End -->

		<!-- Upcoming_Event -->
	<!-- 	<section class="padding ptb-xs-60 events-area gray-bg">
			<div class="container">
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Upcoming Events</h2>
							<div class="line_heading">
								<span class="line_bar"></span>
								<span class="line_bar"></span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 events-full-box">
						<div class="events-single-box">
							<div class="row">
								<div class="col-md-5">
									<img src="assets/images/img1.jpg" alt="" class="img-responsive">
								</div>

								<div class="col-md-7 event-info">
									<h3>Basic UI &amp; UX Design for new development</h3>
									<p class="events-time">
										<span> <i class="fa fa-calendar event-icon"></i> 1st January </span>
										<span> <i class="fa fa-clock-o event-icon"></i> 8:00am - 5:00pm </span>
										<span> <i class="fa fa-map-marker event-icon"></i> New York </span>
									</p>

									<p>
										Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.
									</p>

									<a class="event-btn" href="#">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 events-full-box">
						<div class="events-single-box">
							<div class="row">
								<div class="col-md-5">
									<img src="assets/images/img2.jpg" alt="" class="img-responsive">
								</div>

								<div class="col-md-7 event-info">
									<h3>Digital Art &amp; 3D Model – a future for film company</h3>
									<p class="events-time">
										<span> <i class="fa fa-calendar event-icon"></i> 1st January </span>
										<span> <i class="fa fa-clock-o event-icon"></i> 8:00am - 5:00pm </span>
										<span> <i class="fa fa-map-marker event-icon"></i> New York </span>
									</p>

									<p>
										Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet Pede enim nunc ultricies quis rhoncus.
									</p>

									<a class="event-btn" href="#">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section> -->
		<!-- Upcoming_Event_End -->

		<!-- Testimonial -->
<!--		<section class="padding ptb-xs-60 testimonial_home">-->
<!--			<div class="container">-->
<!--				<div class="row mb-60 light-color">-->
<!--					<div class="col-md-8 offset-md-2 text-center">-->
<!--						<div class="heading_section">-->
							<!--<h2>Students Review</h2>-->
<!--							<div class="line_heading">-->
<!--								<span class="line_bar"></span>-->
<!--								<span class="line_bar"></span>-->
<!--							</div>-->
<!--							<p>-->
							<!-- 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque. -->
<!--							</p>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->

<!--				<div class="row">-->
<!--					<div class="col-md-12">-->
<!--						<div class="testimonial_slider owl-carousel">-->
<!--							<div class="item">-->
<!--								<div class="row">-->
<!--									<div class="col-lg-5 padding_left">-->
										<!--<img src="assets/images/review1.jpg" alt="">-->
<!--									</div>-->
<!--									<div class="col-lg-7 padding_right light-color">-->
										<!--<p>-->
										<!--	I got admission through .Their work is very transparent and trustful.The information given about the College, recognition,fees and hostel facilities are true as communicated to me.Thank you Mary Matha Educational Services.-->
										<!--</p>-->
										<!--<h4>Jaya Debbarma</h4>-->
										<!--<span>kuwait</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->

<!--							<div class="item">-->
<!--								<div class="row">-->
<!--									<div class="col-lg-5 padding_left">-->
										<!--<img src="assets/images/testimonial/2.jpg" alt="">-->
<!--									</div>-->
<!--									<div class="col-lg-7 padding_right light-color">-->
<!--										<p>-->
<!--														I would like to say big thank you to , especially to Mr.Lorance Kurian.I achieved my goal of being a doctor through them . I was looking for BHMS course and I came to know about ---. -->
<!--Thanks once again for helping me to reach my goal..-->
<!--										</p>-->
<!--										<h4>Divya Soman</h4>-->
<!--										<span>kuwait</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->

							<!-- <div class="item">
								<div class="row">
									<div class="col-lg-5 padding_left">
										<img src="assets/images/testimonial/1.jpg" alt="">
									</div>
									<div class="col-lg-7 padding_right light-color">
										<p>
									I got admission through Mary Matha Educational Services for nursing in Bangalore.Their work is very transparent and trustful.The information given about the College, recognition,fees and hostel facilities are true as communicated to me.Thank you Mary Matha Educational Services.

										</p>
										<h4>Jaya Debbarma</h4>
										<span>Student</span>
									</div>
								</div>
							</div> -->

						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Testimonial_End -->

		<!-- Team -->
		<!-- <section class="padding ptb-xs-60">
			<div class="container">
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Our Teacher</h2>
							<div class="line_heading">
								<span class="line_bar"></span>
								<span class="line_bar"></span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 mb-xs-30 mb-sm-30">
						<div class="team_box">

							<div class="team_picher">
								<img src="assets/images/team/team1.jpg" alt="" />
								<div class="show_profile d-flex align-items-center">
									<a href="#"><i class="fa fa-edit"></i> View Profile</a>
								</div>
							</div>

							<div class="team_detail">
								<h3>Daryl Mitchell</h3>
								<span>Professor, Harvard College </span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus.
								</p>
								<div class="social-links">
									<ul>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-google-plus"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 mb-xs-30 mb-sm-30">
						<div class="team_box">

							<div class="team_picher">
								<img src="assets/images/team/team2.jpg" alt="" />
								<div class="show_profile d-flex align-items-center">
									<a href="#"><i class="fa fa-edit"></i> View Profile</a>
								</div>
							</div>

							<div class="team_detail">
								<h3>Tim Seifert</h3>
								<span>Professor, Harvard College </span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus.
								</p>
								<div class="social-links">
									<ul>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-google-plus"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 mb-xs-30">
						<div class="team_box">

							<div class="team_picher">
								<img src="assets/images/team/team3.jpg" alt="" />
								<div class="show_profile d-flex align-items-center">
									<a href="#"><i class="fa fa-edit"></i> View Profile</a>
								</div>
							</div>

							<div class="team_detail">
								<h3>Travis Head</h3>
								<span>Professor, Harvard College </span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus.
								</p>
								<div class="social-links">
									<ul>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-google-plus"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="team_box">

							<div class="team_picher">
								<img src="assets/images/team/team4.jpg" alt="" />
								<div class="show_profile d-flex align-items-center">
									<a href="#"><i class="fa fa-edit"></i> View Profile</a>
								</div>
							</div>

							<div class="team_detail">
								<h3>Marcus Harris</h3>
								<span>Professor, Harvard College </span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus.
								</p>
								<div class="social-links">
									<ul>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-google-plus"></i></a>
										</li>
										<li>
											<a href="#" tabindex="0"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
		</section> -->
		<!-- Team_End -->

		<!-- Blog -->
		<section class="padding ptb-xs-40 gray-bg">
			<div class="container colleges" id="colleges">
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Our Partners</h2>
							<div class="line_heading">
								<span class="line_bar"></span>
								<span class="line_bar"></span>
							</div>
							<!-- <p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia, delectus eveniet laboriosam molestias omnis neque.
							</p> -->
						</div>
					</div>
				</div>

				<div class="row">
				

		

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/nasp.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">National assossiation of safety proffisional</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>


					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/asse.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">American association of safety engineers</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/iadc.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">INTERNATIONAL ASSOCIATION OF DRILLING CONTRACTORS</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>


					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/nfpa.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">National fire protection association</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/scaffold.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">Scaffolding training <br/>institute</h3>

							
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/spe.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">Society of petroleum engineer Professional Membership</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>


					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/iosh.png" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;">Institution of Occupational Safety and Health</h3>
								<p>
									
								</p>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a> -->

							</div>
						</div>
					</div>

					

					<!-- <div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_2.jpg" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Rajeev College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_3.jpg" alt="">
								</figure>
							</div>
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Venketeswara College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div>
				
					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_1.jpg" alt="">
								</figure>
							</div>
							
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Akshaya College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_2.jpg" alt="">
								</figure>
							</div>
							
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Surya College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_3.jpg" alt="">
								</figure>
							</div>
							
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Sapthagiri Medical College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div>
				
					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_1.jpg" alt="">
								</figure>
							</div>
						
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Siddhartha Medical College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
							<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-xs-30 mb-sm-30" style="padding-bottom: 15px;">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_2.jpg" alt="">
								</figure>
							</div>
							
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">Devaraj Urs Medical College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
							<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="blog_box img-scale">
							<div class="post_img">
								<figure>
									<img src="assets/images/blog/home_blog_3.jpg" alt="">
								</figure>
							</div>
							
							<div class="post_detail">
								<h3 style="text-align: center; margin-top: 10px;"><a href="#">SJES College</a></h3>
								<p>
									The college is sensitive to individual, racial and ethnic differences and seeks students and personnel from diverse cultural backgrounds. Discover your strengths
								</p>
								<a href="#" data-toggle="modal" data-target="#myModal" style="justify-content: center;display: flex;"><span class="price_course bg_green">Enquiry</span></a>

							</div>
						</div>
					</div> -->
				</div>

			</div>
		</section>
		<!-- Blog_ENd -->

		<!-- Footer -->
		<?php include("footer.php"); ?>









  