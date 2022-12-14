<?php include("header.php"); ?>
<style>
#mySidenav a {
position: fixed;
right : 0px;
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

		<div id="mySidenav" class="sidenav">
<!--   <a href="#" id="about">About </i></a>
  <a href="#" id="blog" >Blog</a> -->
  <a href="contact.php"  data-toggle="modal" data-target="#myModal" id="projects"> <!-- <i class="fa fa-phone"> &nbsp; </i> --><i class="fa fa-envelope"></i> Mail us</a>
<!--   <a href="#" id="contact">Contact</a> -->
</div>
		



	<!-- Service Section -->
		
		<section class="course-section__block padding gray-bg ptb-xs-40" id="ug_start" style="padding-bottom: 0px;">
			<div class="container">
				<h2 class="col-md-12" style="text-align: center;margin-bottom: 30px">Courses & Certification</h2>
				<!-- <div class="row pb-30">
					<div class="col-sm-12">
						<h2>Courses</h2>
						<span class="b-line l-left"></span>
					</div>
					
				</div> -->
			<div class="row" >

	<?PHP 

	$i=0;
        $s1="SELECT * from category Limit 9";
        $sl1=$db->prepare($s1);
        $sl1->execute();

 while($res1=$sl1->fetch(PDO::FETCH_ASSOC))
 {
 	$catid = $res1["cat_id"];
 	if($catid=='3') {	

  ?>			

                    
					<div class="col-lg-4 col-md-6" style="margin-bottom: 20px">
                       
                       	
                      
						<div class="course_box img-scale" style="border:2px double;">
							
                            <!-- <div class="item promoted"> -->
							<div class="course_figure item promoted" data-awards="Special" style="height: 200px;padding: 0">
                                
								<img  src="admin/uploads/<?php echo $res1["cat_image"]; ?>" alt="" />
								<img style="position: relative;
    bottom: 108%;
    left: -70%;" class="col-md-4 col-lg-4 col-sm-4 col-xs-4 float-right" src="assets/images/offersticker.png">
							</div>
						   <!--  </div> -->
							
							<div class="course_details" style="min-height: 100px !important;">
								<h3 style="text-align: center;"><a href="#" style="color: red;font-weight: 900"><?php echo $res1["cat_name"]; ?></a></h3>
								<!-- <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res1["qualification"]; ?></span>
									</div> -->
							
		
                               <div style="display: block" id="normal<?php echo $i?>">
								<p >
									<ul style="padding-inline-start: 0;">

                    					<?PHP 
        $s2="SELECT * from course where course_cat = '".$res1["cat_id"]."' limit 10";
        $sl2=$db->prepare($s2);
        $sl2->execute();



 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 {

  ?>                          
  <?php
                            // $catid = $res1["cat_id"];
							
								?>
                                    
									<marquee direction = "left"><li  class="col-lg12 col-md-12" style="word-break: break-word;cursor: pointer;font-size: 25px;color:green"> <b class="col-lg12 col-md-12 " title="click to know details" data-toggle="modal" data-target="#myModal<?php echo $res2["id"]; ?>"><?php echo $res2["course"]; ?>
										
									</b></li></marquee>
								
									<br>
                             
              <div class="modal fade" id="myModal<?php echo $res2["id"]; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">

					        <div class="modal-header">
					        	<h4 class="modal-title col-md-10"  style="text-align: center;"><?php echo $res2["course"]; ?></h4>
					          <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body">
					          <p style="font-size: 20px;color: blue"><?php echo $res2["course_desc"]; ?></p>

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
					      </div>
					      
					    </div>
               </div>

<?php } ?>									
									<!-- <li>First Aid / CPR Training Course</li>
									<li>Fire Fighting Training Course</li>
									<li>Defensive Driving Training Course</li>
									<li>Banksman & Slinger</li>
									<li>Scaffolding (Erectors & Inspectors)</li> -->
								</ul>
								<div class="box_info float-right" >
										<a href="course.php"   target="_blank"><span class="price_course bg_orenge">View more</span></a>
									</div>
							</div>

                             


                             <div style="display: none" id="full<?php echo $i?>">   
                                	<p>
									<ul style="padding-inline-start: 0;">

                    					<?PHP 
        $s2="SELECT * from course where course_cat = '".$res1["cat_id"]."'";
        $sl2=$db->prepare($s2);
        $sl2->execute();



 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 {

  ?>

									<li class="col-lg12 col-md-12" style="word-break: break-word;cursor: pointer;"> <b class="col-lg12 col-md-12 " title="click to know details" data-toggle="modal" data-target="#myModal<?php echo $res2["id"]; ?>"><?php echo $res2["course"]; ?>
										
									</b></li>
									<br>
                             
              <div class="modal fade" id="myModal<?php echo $res2["id"]; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">

					        <div class="modal-header">
					        	<h4 class="modal-title col-md-10"  style="text-align: center;"><?php echo $res2["course"]; ?></h4>
					          <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body">
					          <p style="font-size: 20px;color: blue"><?php echo $res2["course_desc"]; ?></p>

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
					      </div>
					      
					    </div>
               </div>

<?php } ?>									
									<!-- <li>First Aid / CPR Training Course</li>
									<li>Fire Fighting Training Course</li>
									<li>Defensive Driving Training Course</li>
									<li>Banksman & Slinger</li>
									<li>Scaffolding (Erectors & Inspectors)</li> -->
								</ul>
								<b class="btn" onclick="closefullview('<?php echo $i?>');">close full view..</b>
								</p>
                              </div>

								
								
                                
								
							</div>

						</div>
					</div>
	<?php 
    }
	else
	{
	 ?>				
	
                     					<div class="col-lg-4 col-md-6" style="margin-bottom: 20px">
						<div class="course_box img-scale" >
							
                           
							 <div class="course_figure" style="height: 200px">
								<img style="height: 100%" src="admin/uploads/<?php echo $res1["cat_image"]; ?>" alt="" />
							</div>
						
							<div class="course_details" style="min-height: 500px !important;">
								<h3><a href="#"><?php echo $res1["cat_name"]; ?></a></h3>
								<!-- <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res1["qualification"]; ?></span>
									</div> -->
							
		
                               <div style="display: block" id="normal<?php echo $i?>">
								<p >
									<ul style="padding-inline-start: 0;">

                    					<?PHP 
        $s2="SELECT * from course where course_cat = '".$res1["cat_id"]."' limit 10";
        $sl2=$db->prepare($s2);
        $sl2->execute();



 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 {

  ?>                          
  <?php
                            // $catid = $res1["cat_id"];
							
								?>
                                    
									
								 <li class="col-lg12 col-md-12" style="word-break: break-word;cursor: pointer;"> <b class="col-lg12 col-md-12 " title="click to know details" data-toggle="modal" data-target="#myModal<?php echo $res2["id"]; ?>"><?php echo $res2["course"]; ?>
										
									</b></li>
								
									<br>
                             
              <div class="modal fade" id="myModal<?php echo $res2["id"]; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">

					        <div class="modal-header">
					        	<h4 class="modal-title col-md-10"  style="text-align: center;"><?php echo $res2["course"]; ?></h4>
					          <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body">
					          <p style="font-size: 20px;color: blue"><?php echo $res2["course_desc"]; ?></p>

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
					      </div>
					      
					    </div>
               </div>

<?php } ?>									
									<!-- <li>First Aid / CPR Training Course</li>
									<li>Fire Fighting Training Course</li>
									<li>Defensive Driving Training Course</li>
									<li>Banksman & Slinger</li>
									<li>Scaffolding (Erectors & Inspectors)</li> -->
								</ul>
								<div class="box_info float-right" style="margin-top: 20px">
										<a href="course.php"   target="_blank"><span class="price_course bg_orenge">View more</span></a>
									</div>
							</div>

                             


                             <div style="display: none" id="full<?php echo $i?>">   
                                	<p>
									<ul style="padding-inline-start: 0;">

                    					<?PHP 
        $s2="SELECT * from course where course_cat = '".$res1["cat_id"]."'";
        $sl2=$db->prepare($s2);
        $sl2->execute();



 while($res2=$sl2->fetch(PDO::FETCH_ASSOC))
 {

  ?>

									<li class="col-lg12 col-md-12" style="word-break: break-word;cursor: pointer;"> <b class="col-lg12 col-md-12 " title="click to know details" data-toggle="modal" data-target="#myModal<?php echo $res2["id"]; ?>"><?php echo $res2["course"]; ?>
										
									</b></li>
									<br>
                             
              <div class="modal fade" id="myModal<?php echo $res2["id"]; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">

					        <div class="modal-header">
					        	<h4 class="modal-title col-md-10"  style="text-align: center;"><?php echo $res2["course"]; ?></h4>
					          <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
					          
					        </div>
					        <div class="modal-body">
					          <p style="font-size: 20px;color: blue"><?php echo $res2["course_desc"]; ?></p>

					        </div>
					       <!--  <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div> -->
					      </div>
					      
					    </div>
               </div>

<?php } ?>									
									<!-- <li>First Aid / CPR Training Course</li>
									<li>Fire Fighting Training Course</li>
									<li>Defensive Driving Training Course</li>
									<li>Banksman & Slinger</li>
									<li>Scaffolding (Erectors & Inspectors)</li> -->
								</ul>
								<b class="btn" onclick="closefullview('<?php echo $i?>');">close full view..</b>
								</p>
                              </div>

								
								
                                
								
							</div>

						</div>
					</div>


				
<?php
   }
$i = $i+1;
 } ?>

                  
					



					

				</div>
			</div>
		</section>

		
		
	



<!-- 










						</div>
					</div>
				</div>

			</div>
		</section>

 -->


		<!-- Service Section -->
		
		<section class="course-section__block padding gray-bg ptb-xs-40" id="ug_start" style="padding-bottom: 0px;padding-top: 10px">
			<div class="container">
				<!-- <h2 class="col-md-12" style="text-align: center;margin-bottom: 30px;color: #0cca6b;margin-top: 0px"><u>OUR SERVICES</u></h2>

				<p class="col-md-12" style="text-align: center;margin-bottom: 30px;color: #d44f4f;margin-bottom: 50px">We pledged to provide you good services.</p> -->
				<!-- <div class="row pb-30">
					<div class="col-sm-12">
						<h2>Courses</h2>
						<span class="b-line l-left"></span>
					</div>
					
				</div> -->
				<div class="row mb-60">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="heading_section">
							<h2>Our Service</h2>
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
			<div class="row" >

	<?PHP 
        $s1="SELECT * from service";
        $sl1=$db->prepare($s1);
        $sl1->execute();

 while($res1=$sl1->fetch(PDO::FETCH_ASSOC))
 {

  ?>			

					<div class="col-lg-4 col-md-6" style="margin-bottom: 20px;">
						<div class="course_box img-scale">
							<div class="course_figure" style="height: 200px">
								<img style="height: 100%" src="admin/uploads/<?php echo $res1["service_image"]; ?>" alt="" />
							</div>
							<div class="course_details" style="min-height: 350px !important">
                                  
                                  <?php
                                    
                                    $servicedtails = $res1["service_desc"];

                                    // $legthserv = strlen($servicedtails);

                                    if (strlen($servicedtails) > 200) 
                                    {
                                       $stringCut = substr($servicedtails, 0, 250);
                                       $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        
									    $servicedtails = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
// $servicedtails .= '... <a href="/this/story">Read More</a>'; 
                                    }

                                   ?>

								<h2 style="font-style: inherit;"><?php echo $res1["service_name"]; ?></h2>
								<!-- <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res1["qualification"]; ?></span>
									</div> -->
							
		

								<p>
									

                    				<!-- <?php echo $res1["service_desc"]; ?>

                    				 -->

      <?php echo $servicedtails ?><a href="service.php"><i class="btn"><span style="color: green">..read more</span></i></a>	

									
                             
 
								</p>
								
								
								<!-- <div class="info_course">
									

									<div class="box_info float-right">
										<a href="course.php"   target="_blank"><span class="price_course bg_orenge">View more</span></a>
									</div>

								</div> -->
							</div>

						</div>
					</div>





 <div class="modal fade" id="myModals<?php echo $res1["service_id"]; ?>" role="dialog">


    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
        	<h3 class="modal-title col-md-10"  style="text-align: center;"><?php echo $res1["service_name"]; ?></h3>
          <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;color: green;font-style: italic;"> <?php echo $res1["service_desc"]; ?></p>

        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
 </div>   


				
<?php } ?>

                  
					



					

				</div>
			</div>
		</section>


		
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
							<div class="post_detail" >
								<!-- <h4 style="text-align: center; margin-top: 10px;">INTERNATIONAL ASSOCIATION OF DRILLING CONTRACTORS</h4> -->
								<h3 style="text-align: center; margin-top: 10px;">International Association of Drilling Contractors</h3>
								<p>
									
								</p>
							
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
								<h4 style="text-align: center; margin-top: 20px;">Society of petroleum engineer Professional Membership</h4>
								<p>
									
								</p>
							

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
							

							</div>
						</div>
					</div>

					

					
				</div>

			</div>
		</section>
		<!-- Blog_ENd -->

		<!-- Footer -->
		<?php include("footer.php"); ?>









  