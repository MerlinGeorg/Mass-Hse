
<?php include("header.php"); ?>
    <!--Section End Here-->

    <!-- END HEADER -->
    
    <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
          <!-- <h1 data-title="Contact"><span>Contact</span></h1> -->
         <!--  <div class="page-breadcrumb">
              <a>Home</a>/ <span>Contact</span>
            </div> -->
          
        </div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
    
  
  <!-- Contact Section -->
  <section class="ptb ptb-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 offset-md-2 text-center">
          <h2>KEEP IN TOUCH</h2>
         <!--  <p class="lead"> Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit cursus. tellus eget condimentum rhoncus sem quam semper libero. </p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 contact pb-60 pt-30">
          <div class="row text-center">
            <div class="col-md-3 col-lg-3 pb-xs-30"> <i style="color: #0cca6b" class="ion-android-call icon-circle pos-s"></i><p class="mt-15 i-block" style="font-size: 20px;">+965-66086911<br>+965-67003904<br>+20 101 2059055-020 109 8013515(Egypt Branch) </p> </div>
            <div class="col-md-3 col-lg-3 pb-xs-30"> <i style="color: #0cca6b" class="ion-ios-location icon-circle pos-s"></i>
              <p  class="mt-15" > Hawally.Block 9, Birout St.Nour complex, Floor 6-Kuwait</p><br><p  class="mt-15" >Egypt Branch : Egypt Alexandria Gov-Borg Alarab Industrial Area - block 3 South Area-no 134,</p>
            </div>
            <div class="col-md-3 col-lg-3 pb-xs-30"> <i style="color: #0cca6b" class="ion-ios-email icon-circle pos-s"></i><a href="Eng.alshater@gmail.com"  class="mt-15 i-block">Training@masshseconsultant.com</a><br> 
            <a href="mailto:info@MaryMatha .com"  class="mt-15 i-block">info@masshseconsultant.com</a> </div>
            <div class="col-md-3 col-lg-3 pb-xs-30"> <i style="color: #0cca6b" class="ion-ios-contact icon-circle pos-s"></i><a href=""  class="mt-15 i-block"><span style="font-size:20px">Eng.Islam Adam</span></a><br> 
            <a href="mailto:info@MaryMatha .com"  class="mt-15 i-block"></a>
            CEO & Founder<br>
            Mobile: 69616316<br>
            E-mail:adam@masshseconsultant.com<br>
            E-mail:info@masshseconsultant.com
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <!-- Map Section -->
    <div class="map">
      <div id="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.99740444904!2d77.35073623878259!3d12.953847717051872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1554272428705!5m2!1sen!2sin"  frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe> --> 

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5794.854041613257!2d47.97444902350891!3d29.372850328526287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84ea5e365be7%3A0x9cf48b52e589886c!2sBlock%209%2C%20Kuwait%20City%2C%20Kuwait!5e1!3m2!1sen!2sin!4v1575982531032!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    <!-- Map Section -->
  <div class="container contact-form padding pt-xs-40 mt-up" style="margin-top: 0px; margin-bottom: 0px;">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h4>GET IN TOUCH</h4>
         
          <!-- Contact FORM -->
          <form class="contact-form mt-45" id="contact">           
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong> . Your message has been sent. </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->           
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email" >
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="subject" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message" ></textarea>
                </div>
              </div>
              <div class="col-md-12 col-lg-12 mt-30">
                <button class="btn-text" type="text" style="background: #0cca6b" id="submit" name="button"> Send Message </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM --> 
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->  
  
   

  <?php include("footer.php"); ?>


  <script>
$(document).ready(function()
{
  //alert("hello");
$("#contact").submit(function(e) {
//alert("hello");
    var url = "contact_mail.php"; // the script where you handle the form input.
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