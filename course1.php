<?php include("header.php"); ?>

		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<!-- <h1 data-title="Causes"><span>Course</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Course</span>
						</div> -->

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		
		

		<!-- Service Section -->
		
		<section class="course-section__block padding gray-bg ptb-xs-40" id="ug_start" style="padding-bottom: 0px;">
			<div class="container">
				<!-- <div class="row pb-30">
					<div class="col-sm-12">
						<h2>Courses</h2>
						<span class="b-line l-left"></span>
					</div>
					
				</div> -->
	<div class="row">

	<?PHP 
        $s1="SELECT * from course ORDER BY id ASC limit 6 ";
        $sl1=$db->prepare($s1);
        $sl1->execute();

 while($res1=$sl1->fetch(PDO::FETCH_ASSOC))
 {

  ?>
					<div class="col-lg-4 col-md-6">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="admin/uploads/<?php echo $res1['picture'];?>" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#"><?php echo $res1["course"]; ?></a></h3>
								<!-- <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res1["qualification"]; ?></span>
									</div> -->
									
								<p>
									<p>
									<ul>	
									<li><?php echo $res1["sub_course1"]; ?></li>
									<li><?php echo $res1["sub_course2"]; ?></li>
									<li><?php echo $res1["sub_course3"]; ?></li>
									<li><?php echo $res1["sub_course4"]; ?></li>
								</ul>
								</p>
								</p>
								
								<div class="info_course">
									<!-- <div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : <a href="admin/uploads/<?php echo $res1["file"]; ?>">click here..</a></span>
									</div> -->

									<div class="box_info float-right">
										<a href="admission.php"   target="_blank"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<?php
				}
				?>



	 <?PHP 
        $sk1="SELECT count(*) as count_ from course";
        $slk1=$db->prepare($sk1);
        $slk1->execute();
        $res101=$slk1->fetch(PDO::FETCH_ASSOC);
        if($res101["count_"] > 6)
        {
        	$remaining = $res101["count_"]-6;
        	// echo $remaining;

          ?>

<div class="col-lg-12 col-md-12" style="margin-top: 20px;" id="button_ug_more">
                               <div class="box_info float-right" style="float: right;">
										<a   onclick="load_ug()" style="cursor: pointer;"><span class="price_course bg_green">View More</span></a>
									</div>
								</div>



 <div class="col-lg-12 col-md-12" id="more_ug" style="display: none;">
	<div class="row">


		  <?PHP 
        $s23="SELECT * FROM course LIMIT 100000 OFFSET 6";
        $sl23=$db->prepare($s23);
        $sl23->execute();

        // echo $s23;

 while($res23=$sl23->fetch(PDO::FETCH_ASSOC))
 {

  ?>
					<div class="col-lg-4 col-md-6" style="margin-top: 15px;" >
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="admin/uploads/<?php echo $res23['picture'];?>" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#"><?php echo $res23["course"]; ?></a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<!-- <i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res23["qualification"]; ?></span>
									</div> -->

									<p>
									<p>
									<ul>	
									<li><?php echo $res23["sub_course1"]; ?></li>
									<li><?php echo $res23["sub_course2"]; ?></li>
									<li><?php echo $res23["sub_course3"]; ?></li>
									<li><?php echo $res23["sub_course4"]; ?></li>
								</ul>
								</p>
									
								<!-- <p>
									<?php echo $res23["details"]; ?>
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : <?php echo $res23["fees"]; ?></span>
									</div> -->

									<div class="box_info float-right">
										<a href="admission.php"   target="_blank"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<?php
				}
				?>
				</div>
			</div> -->

	<div class="col-lg-12 col-md-12" style="margin-top: 20px;"  id="button_ug_less" style="display: none;" >
                               <div class="box_info float-right" style="float: right;" >
										<a onclick="hide_ug()" id="button_ug_less1" style="cursor: pointer; display: none;"><span class="price_course bg_green">View Less</span></a>
									</div>
								</div>
     <?php

        }

     ?>	

     <script type="text/javascript">
     	
     	function load_ug()
     	{
     		 var x = document.getElementById("button_ug_more");
     		 var y = document.getElementById("more_ug");
     		  var z = document.getElementById("button_ug_less");
     		  var z1 = document.getElementById("button_ug_less1");
     		 x.style.display = "none";
     		 y.style.display = "block";
     		 z.style.display = "block";
     		 z1.style.display = "block";
     	}

     		function hide_ug()
     	{
     		 var x = document.getElementById("button_ug_more");
     		 var y = document.getElementById("more_ug");
     		  var z = document.getElementById("button_ug_less");
     		   var z1 = document.getElementById("button_ug_less1");
     		 x.style.display = "block";
     		 y.style.display = "none";
     		 z.style.display = "none";
     		 z1.style.display = "none";
     		 window.location.href="#ug_start"
     	}

     </script>










			<!-- 		<div class="col-lg-4 col-md-6 mt-xs-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_2.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">B.Com</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : Plus Two</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-sm-30 mt-xs-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_3.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">Engineering</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : Plus Two</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_4.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">BCA</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : Plus Two</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_5.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">B.Pharmacy</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : Plus Two</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_6.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">Pharm D</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : Plus Two</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div> -->

				</div>

			</div>
		</section>

		<section class="course-section__block padding gray-bg ptb-xs-40" id="pg_start">
			<div class="container">
				<!-- <div class="row pb-30">
					<div class="col-sm-12">
						<h2>PG - Courses</h2>
						<span class="b-line l-left"></span>
					</div>
					
				</div> -->
	<!-- <div class="row">

		  <?PHP 
        $s="SELECT * from course ORDER BY priority ASC limit 6 ";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {

  ?>
					<div class="col-lg-4 col-md-6">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="admin/uploads/<?php echo $res['picture'];?>" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#"><?php echo $res["course"]; ?></a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res["qualification"]; ?></span>
									</div>
									
								<p>
									<?php echo $res["details"]; ?>
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : <?php echo $res["fees"]; ?></span>
									</div>

									<div class="box_info float-right">
										<a href="admission.php"   target="_blank"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<?php
				}
				?> -->

	<!--  <?PHP 
        $sk="SELECT count(*) as count_ from course where category='PG'";
        $slk=$db->prepare($sk);
        $slk->execute();
        $res10=$slk->fetch(PDO::FETCH_ASSOC);
        if($res10["count_"] > 6)
        {
        	$remaining = $res10["count_"]-6;
          ?>

<div class="col-lg-12 col-md-12" style="margin-top: 20px;" id="button_pg_more">
                               <div class="box_info float-right" style="float: right;">
										<a   onclick="load_pg()" style="cursor: pointer;"><span class="price_course bg_green">View More</span></a>
									</div>
								</div> -->



<div class="col-lg-12 col-md-12" id="more_pg" style="display: none;">
	<div class="row">


		  <?PHP 
        $s="SELECT * from course ORDER BY priority DESC limit $remaining ";
        $sl=$db->prepare($s);
        $sl->execute();

 while($res=$sl->fetch(PDO::FETCH_ASSOC))
 {

  ?>
					<!-- <div class="col-lg-4 col-md-6" >
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="admin/uploads/<?php echo $res['picture'];?>" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#"><?php echo $res["course"]; ?></a></h3>
								 <div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : <?php echo $res["qualification"]; ?></span>
									</div> -->
									
								<!-- <p>
									<?php echo $res["details"]; ?>
								</p>
								
								<div class="info_course">
									<div class="box_info">
										 <i class="fa fa-money" aria-hidden="true"></i><span>Fees : <?php echo $res["fees"]; ?></span> -->
									<!-- </div>

									<div class="box_info float-right">
										<a href="admission.php"   target="_blank"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<?php
				}
				?>
				</div>
			</div>  -->

	<!-- <div class="col-lg-12 col-md-12" style="margin-top: 20px;"  id="button_pg_less" style="display: none;" >
                               <div class="box_info float-right" style="float: right;" >
										<a onclick="hide_pg()" id="button_pg_less1" style="cursor: pointer; display: none;"><span class="price_course bg_green">View Less</span></a>
									</div>
								</div>
     <?php

        }

     ?>	 -->

     <script type="text/javascript">
     	
     	function load_pg()
     	{
     		 var x = document.getElementById("button_pg_more");
     		 var y = document.getElementById("more_pg");
     		  var z = document.getElementById("button_pg_less");
     		  var z1 = document.getElementById("button_pg_less1");
     		 x.style.display = "none";
     		 y.style.display = "block";
     		 z.style.display = "block";
     		 z1.style.display = "block";
     	}

     		function hide_pg()
     	{
     		 var x = document.getElementById("button_pg_more");
     		 var y = document.getElementById("more_pg");
     		  var z = document.getElementById("button_pg_less");
     		   var z1 = document.getElementById("button_pg_less1");
     		 x.style.display = "block";
     		 y.style.display = "none";
     		 z.style.display = "none";
     		 z1.style.display = "none";
     		  window.location.href="#pg_start"
     	}

     </script>




				<!-- 	<div class="col-lg-4 col-md-6 mt-xs-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_2.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">MCA</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : B.Tech</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-sm-30 mt-xs-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_3.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">Engineering</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : B.Tech</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_4.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">M.Pharmacy</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : B.Pharmacy</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_5.jpg" alt="" />
							</div>
							<div class="course_details">
								<h3><a href="#">M.Sc.Nursing</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : B.Sc.Nursing</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-30">
						<div class="course_box img-scale">
							<div class="course_figure">
								<img src="assets/images/service/img_6.jpg" alt="" />
						
							</div>
							<div class="course_details">
								<h3><a href="#">LLB</a></h3>
								<div class="box_info" style="margin-bottom: 5px;">
										<i class="fa fa-graduation-cap"></i><span>Qualification : B.Tech</span>
									</div>
									
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus est eum quia eos illum mollitia,
								</p>
								
								<div class="info_course">
									<div class="box_info">
										<i class="fa fa-money" aria-hidden="true"></i><span>Fees : 100000</span>
									</div>

									<div class="box_info float-right">
										<a href="#"  data-toggle="modal" data-target="#myModal"><span class="price_course bg_orenge">Book now</span></a>
									</div>

								</div>
							</div>

						</div>
					</div> -->

				</div>

			</div>
		</section>
		<!-- Service Section end -->
		<!-- section -->

		<!-- Partner Section -->

		<!--End Contact-->
		<!-- FOOTER -->
		<?php include("footer.php"); ?>