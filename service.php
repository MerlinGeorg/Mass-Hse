<?php include('header.php') ?>


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
				<h2 class="col-md-12" style="text-align: center;margin-bottom: 30px;color: #0cca6b;margin-top: 0px"><u>OUR SERVICES</u></h2>

				<p class="col-md-12" style="text-align: center;margin-bottom: 30px;color: #d44f4f;margin-bottom: 50px">We pledged to provide you good services.</p>
				<!-- <div class="row pb-30">
					<div class="col-sm-12">
						<h2>Courses</h2>
						<span class="b-line l-left"></span>
					</div>
					
				</div> -->
			<div class="row" >

	<?PHP 
        $s1="SELECT * from service";
        $sl1=$db->prepare($s1);
        $sl1->execute();

 while($res1=$sl1->fetch(PDO::FETCH_ASSOC))
 {

  ?>			

					<div class="col-lg-4 col-md-6">
						<div class="course_box img-scale">
							<div class="course_figure" style="height: 200px">
								<img src="admin/uploads/<?php echo $res1["service_image"]; ?>" alt="" />
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

      <?php echo $servicedtails ?><i class="btn" data-toggle="modal" data-target="#myModals<?php echo $res1["service_id"]; ?>"><span style="color: green">..read more</span></i>	

									
                             
 
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


<?php include('footer.php') ?>