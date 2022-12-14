<?php include("header.php"); ?>

<!--style>
   #login::before {
    background: #222;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0.9;
    position: absolute;
    top: 0;
    width: 100%;
}
</style-->
<!-- <style type="text/css">
  label {
    color: #323232;
    font-size: 13px;
    margin-bottom: 10px;
    padding-right: 3px;
    margin-top: 0px;
    font-weight: 600;
}
</style> -->
    <!--Section End Here-->

    <!-- END HEADER -->
    
    <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
          <!-- <h1 data-title="Contact"><span>Admission</span></h1>
          <div class="page-breadcrumb">
              <a>Home</a>/ <span>Admission</span>
            </div> -->
          
        </div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
    
   
  
  <!-- Contact Section -->

      <div id="login" class="ptb ptb-xs-60 page-signin" style="background:url(assets/images/bg-reg1.jpg);">
          
    <div class="container">
      <div class="row">
            <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="main-body">
              <div class="card bg-white">
                <div class="card-content">
                    
                    
               
               <div class="heading_section" style="text-align: center;">
              <h2>APPLICATION FORM</h2>
              <div class="line_heading">
                <span class="line_bar"></span>
                <span class="line_bar"></span>
              </div>
              
              <div class="heading">
        <p>Please Enter Your Details</p>
      </div>
            </div>

        


                <!--   <form class="form-horizontal ng-pristine ng-valid">
                    <fieldset>
                      <div class="form-group col-md-6">
                        <div class="ui-input-group">
                          <input type="text" required class="form-control">
                          <span class="input-bar"></span>
                          <label>First Name</label>
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <div class="ui-input-group">
                          <input type="text" required class="form-control">
                          <span class="input-bar"></span>
                          <label>Last Name</label>
                        </div>
                      </div>
              
                      <div class="form-group">
                        <div class="ui-input-group">
                          <input type="text" required class="form-control">
                          <span class="input-bar"></span>
                          <label>Password</label>
                        </div>
                      </div>
                    </fieldset>
                  </form> -->


 <form class="contact-form mt-45" id="admission">           
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <!-- <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for using our template. Your message has been sent. </div> -->
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->           
            <div class="row">
              <div class="col-md-4 col-lg-4" >
                <label style="float: left;">Name</label>
              </div>
              <div class="col-md-4 col-lg-4">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="first_name" placeholder="First Name" required>
                </div>
              </div>
                <div class="col-md-4 col-lg-4" >
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="last_name" placeholder="Last Name" required>
                </div>
              </div>


 <div class="col-lg-4">
             <label style="float: left;">Gender</label>
           </div>
 <div class="col-lg-8">
           <select class="form-dropdown" name="gender" required>
                  <option value="">Gender</option>
                  <option value="Male"> Male </option>
                  <option value="Female"> Female </option>
                </select>
              </div>
    <!--        <div class="col-lg-4">
              <div class="form-field" style="margin-top: 6px;">
              <input type="radio" name="gender" value="male" checked style="margin-bottom: 32px;"> Male
            </div>
          </div>
             <div class="col-lg-4">
              <div class="form-field" style="margin-top: 6px;">
              <input type="radio" name="gender" value="male" checked style="margin-bottom: 32px;"> Female
            </div>
          </div> -->





 <div class="col-md-4 col-lg-4">
                <label style="float: left;">Email</label>
              </div>
                <div class="col-md-8 col-lg-8">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="email" name="email" placeholder="Email" required>
                </div>
              </div>

<div class="col-md-4 col-lg-4">
                <label style="float: left;">Phone Number</label>
              </div>
                   <div class="col-md-8 col-lg-8" style="margin-top: 25px">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="number" placeholder="Phone Number" required>
                </div>
              </div>


                




                 
          
          


 <div class="col-md-4 col-lg-4">
<label style="float: left;">Date Of Birth</label>
 </div>

              <div class="col-md-8 col-lg-8">
                <div class="form-field">
<input class="input-sm form-full" id="name" type="date" name="dob" style="border: 1px solid #e5e5e5;color: #878787;" required>
                </div>
             
             
              </div>


              <div class="col-md-4 col-lg-4" style="margin-top: 10px">
                <label style="float: left;">Address</label>
              </div>
                   <div class="col-md-8 col-lg-8" style="margin-top: 25px">
                <div class="form-field">
                  <textarea class="input-sm form-full" placeholder="Address" name="address" rows="2" style="margin-bottom: 20px;" required></textarea>
                </div>
              </div>






          

        <div class="col-md-4 col-lg-4">
                <label style="float: left;">Qualification</label>
              </div>
                   <div class="col-md-8 col-lg-8">
                <div class="form-field">
                   <input class="input-sm form-full" id="name" type="text" name="qualification" placeholder="Qualification" required>
                </div>
              </div>

              

              

              <div class="col-md-4 col-lg-4">
                <label style="float: left;">Required Course</label>
              </div>
                   <div class="col-md-8 col-lg-8">
                <div class="form-field">
                  <select class="form-dropdown" name="course" required>
                  <option value=""> Course</option>
                  <!-- <input type="text" name="course" class="input-sm form-full" placeholder="course"> -->
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
                </div>
              </div>

                 <!--  <div class="col-md-4 col-lg-4">
                <label style="float: left;">Preferred Location</label>
              </div>
                   <div class="col-md-8 col-lg-8">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="location" placeholder="Bangalore" required>
                </div>
              </div> -->

              
              <div class="col-md-12 col-lg-12 mt-30">
                <button class="btn-text" style="background: #0cca6b" type="submit" id="submit" name="button">SUBMIT</button>
              </div>
            </div>
          </form>






                </div>
               <!--  <div class="card-action no-border text-right"> <a href="#/" class="color-primary">Sign in</a> </div> -->
              </div>
          </div>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
  <!-- Contact Section -->  
  
   

  <?php include("footer.php"); ?>

  <script>
$(document).ready(function()
{
  //alert("hello");
$("#admission").submit(function(e) {
//alert("hello");
    var url = "admission_mail.php"; // the script where you handle the form input.
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