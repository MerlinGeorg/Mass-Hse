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
                       
                       	
                      
						<div class="course_box img-scale" style="border:2px double;box-shadow: 10px 10px gray">
							
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
								<b class="btn" onclick="fullview('<?php echo $i?>');">see all..</b>
								</p>
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
								<b class="btn" onclick="fullview('<?php echo $i?>');">see all..</b>
								</p>
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

 
        <script type="text/javascript">
      //   $( document ).ready(function() {
         
      //          $('#full').hide();
      //          $('#normal').show();
      // });	
        	
        
        function fullview(id)
        {
        // 	alert(id);
        	
               $('#full'+id).css("display","block");
               $('#normal'+id).css("display","none");
        	
        }

         function closefullview(id)
        {
        // 	alert(id);
               $('#normal'+id).css("display","block");
               $('#full'+id).css("display","none");
        	
        }


        </script>


		<!-- Service Section end -->
		<!-- section -->

		<!-- Partner Section -->

		<!--End Contact-->
		<!-- FOOTER -->
		<?php include("footer.php"); ?>