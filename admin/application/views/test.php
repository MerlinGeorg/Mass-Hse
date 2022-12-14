<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travandre | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="<?=base_url('assets/frontend')?>/css/maxcdn-bootstrap-min.css">
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/frontend')?>/css/animate.css">
  <link href="<?=base_url('assets/frontend')?>/css/mycss.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/frontend')?>/unitegallery/css/unite-gallery.css"/>
  <link  href="<?=base_url('assets/frontend')?>/unitegallery/themes/default/ug-theme-default.css"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
  <script src="<?=base_url('assets/frontend')?>/unitegallery/themes/default/ug-theme-default.js"></script>

  <script src="<?=base_url('assets/frontend')?>/js/myjs.js"></script>

































<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" style="top: 10%">
  <div class="modal-dialog" role="document" style="width: 35%">
    <div class="modal-content" style="border-radius: 0px;">

         <button style="font-weight: 500;font-size: 35px; margin-right: 5px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <!--    <div class="modal-header" style="border: 0px;">
       
      
      </div> -->
      <div class="modal-body" style="margin: 20px;">

      

          <strong><h2><b>Need Booking?</b></h2></strong>
<p style="color: #8c8c8c; font-size: small">
 If you are having a hard time finding exactly what you are looking for or need customized packages for a large number of participants.

</p>

<p>
 <strong><b>Call Us at <span style="color: #4344ea">91 9487 554 456</span></b></strong>

</p>

<p style="color: #8c8c8c; font-size: small">
  If you can't call us, please leave us the details below and we'll get back to you in no time
</p>
                            <form id="feedback_form" action="">
                            <div class="form-group">
                         
                               <input type="text" name="name" id="name" value="" placeholder="email" class="form-control"  style="width: 50%;" required="required" />
                            </div>
                            <div class="form-group">
                             
                                <input type="text" name="phone" id="phone" value="" maxlength="12" placeholder="phone number" class="form-control" style="width: 50%;" required="required" />
                            </div>
                       
                        
                           <b  class="button" style="background-color: #4344ea;color: white;border: 0px;/*! margin: 10px 2px; *//*! padding: 5px; */padding: 5px 10px; cursor: pointer;" onclick="email_send()">Submit</b>
                        </form>

                        <br>

                        <p style="color: #4344ea"><b>already have a booking?</b> </p>



      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div> -->
    </div>
  </div>
</div>



<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" style="top: 10%">
  <div class="modal-dialog" role="document" style="width: auto;">
    <div class="modal-content" style="border-radius: 0px;">

         <button style="font-weight: 500;font-size: 35px; margin-right: 5px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <!--    <div class="modal-header" style="border: 0px;">
       
      
      </div> -->
      <div class="modal-body" style="margin: 20px;">

      

          <strong><h2><b>Need Booking?</b></h2></strong>
<p style="color: #8c8c8c; font-size: small">
 If you are having a hard time finding exactly what you are looking for or need customized packages for a large number of participants.

</p>

<p>
 <strong><b>Call Us at <span style="color: #4344ea">91 9487 554 456</span></b></strong>

</p>

<p style="color: #8c8c8c; font-size: small">
  If you can't call us, please leave us the details below and we'll get back to you in no time
</p>
                            <form id="feedback_form" action="">
                            <div class="form-group">
                         
                               <input type="text" name="name" id="name" value="" placeholder="email" class="form-control"  style="width: 50%;" required="required" />
                            </div>
                            <div class="form-group">
                             
                                <input type="text" name="phone" id="phone" value="" maxlength="12" placeholder="phone number" class="form-control" style="width: 50%;" required="required" />
                            </div>
                       
                        
                           <b class="button" style="background-color: #4344ea;color: white;border: 0px;/*! margin: 10px 2px; *//*! padding: 5px; */padding: 5px 10px; cursor: pointer;" onclick="email_send()" >Submit</b>
                        </form>

                        <br>

                        <p style="color: #4344ea"><b>already have a booking?</b> </p>



      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div> -->
    </div>
  </div>
</div>


<script type="text/javascript">
  function email_send()
    {
     var email1 = document.getElementById("name").value;
     var phone1 = document.getElementById("phone").value;

     if(email1 !="" && phone1 !="")
     {

      $.ajax({

           url: "<?php echo base_url('help_email');?>/",
           method: "POST",
           data:{email1:email1,phone1:phone1},
           success: function(resp1){
           alert(resp1);
           }
         });
     
     }
  else
  {
    alert("Please Fill the details");
  }


    }
  </script>