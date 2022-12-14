

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div id="examviewdiv">
      
    </div>

    <!-- Main content -->
   <div id="examsdiv"> 
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div> -->
          <!-- /.col-md-6 -->
          <div class="col-lg-6">

     <?php

     // print_r($xam);

     if(!empty($xam))
      {
      foreach($xam as $row) { ?>       
            <div class="card">

            <!--  <?php echo $row->course; ?>  -->

              <div class="card-header">
                <h5 class="m-0"><?php echo $row->qpaper_code; ?></h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo $row->qpaper_exam_name; ?></h6>

                <p class="card-text">Your exam is here. Please read the rules before start teh exam</p>

                <?php 
                 // echo $st_xam_histry;
                if($st_xam_histry==0)
                {?>
                <p>Remaining Attempts&nbsp;:&nbsp;<span style="color: red;font-size: 24px"><b>3</b></span></p>

                    <button class="btn btn-primary" id="xamstrtbtn" onclick="getxam('<?php echo $row->qpaper_code; ?>','<?php echo $row->qpaper_exam_name; ?>','<?php echo $row->course; ?>','<?php echo $row->course_code; ?>');">Start Exam</button >

                <?php 
                }
                else
                { 
                  
                    foreach($st_xam_histry as $row1)
                    {
                       $xamqpcode = $row->qpaper_code;
                       $histryxamqpcode = $row1->qp_code;
                       if($xamqpcode==$histryxamqpcode)
                       {

                           $rem_atmt=$row1->rem_attempt;
                           $xam_stat = $row1->xam_status;
                           if($rem_atmt==0&&$xam_stat==2)
                           {
                          ?> 

                          <p>Remaining Attempts&nbsp;:&nbsp;<span style="color: red;font-size: 24px"><b><?php echo $row1->rem_attempt ?></b></span></p>
                          <p>Please contact with Head Office for furthure updates.</p>

                        <button class="btn btn-primary" disabled="disabled" id="xamstrtbtn" onclick="getxam('<?php echo $row->qpaper_code; ?>','<?php echo $row->qpaper_exam_name; ?>'.'<?php echo $row->course; ?>','<?php echo $row->course_code; ?>');">Start Exam</button >
                      <?php }

                         elseif($rem_atmt==0&&$xam_stat==1) 
                      {?>
                          
                           <p>You have succesfully completed the Exam.your Certificate will be available on The "My Certification" session soon.</p>

                           <p>Score :&nbsp;<span style="color: red;font-size: 24px"><b><?php echo $row1->s_score ?></b></span></p>

                           <button class="btn btn-primary" disabled="disabled" id="xamstrtbtn" onclick="getxam('<?php echo $row->qpaper_code; ?>','<?php echo $row->qpaper_exam_name; ?>','<?php echo $row->course; ?>','<?php echo $row->course_code; ?>');">Start Exam</button >

                      <?php }
                        else
                      { ?>

                         <p>Remaining Attempts&nbsp;:&nbsp;<span style="color: red;font-size: 24px"><b><?php echo $row1->rem_attempt ?></b></span></p>

                         <button class="btn btn-primary" id="xamstrtbtn" onclick="getxam('<?php echo $row->qpaper_code; ?>','<?php echo $row->qpaper_exam_name; ?>','<?php echo $row->course; ?>','<?php echo $row->course_code; ?>');">Start Exam</button >

                        <?php
                        }
                    }else{?>

                       
                      <p>Remaining Attempts&nbsp;:&nbsp;<span style="color: red;font-size: 24px"><b>3</b></span></p>

                    <button class="btn btn-primary" id="xamstrtbtn" onclick="getxam('<?php echo $row->qpaper_code; ?>','<?php echo $row->qpaper_exam_name; ?>','<?php echo $row->course; ?>','<?php echo $row->course_code; ?>');">Start Exam</button >




              <?php } } 

               } ?>

                



                <a href="#" class="btn btn-secondary">Rules</a>
              </div>
            </div>
    <?php }
     }
     ?>
            <!-- <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  </div>
  <!-- /.content-wrapper -->

  <script src="<?php  echo base_url()."AdminLTE-master/"; ?>js/jquery-1.11.3.min.js"></script>

 <script type="text/javascript">

   
   function getxam(qp_code,xamname,corsname,corscode)
   {
    var result = confirm("Are you sure you read the exam rules and start exam?");
    if(result)
    {
       $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Student_exam/get_exam_view');?>/",
              data: {qp_code:qp_code,xamname:xamname,corsname:corsname,corscode:corscode}, // serializes the form's elements.
             success: function(data){

              // alert(data);
              
              if($.trim(data)=='failed')
              {
                alert("Something went wrong!")
              }
              else if($.trim(data)=='noquestion')
              {
                alert("exam is not available at the moment")
              }
              else
              { 
                $('#examviewdiv').html(data);
                $('#examsdiv').hide();
              }
            }
        });
     }  
   }



      


 </script>