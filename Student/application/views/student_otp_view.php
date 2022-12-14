<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MASS HSE Consultent Co</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div id="successdiv" class="col-md-12" style="text-align: center;display: none">
  
    <h2 style="font-size: 30px;font-style: inherit;color: green">Registration Successfull</h2>

    <a href="<?php echo base_url();?>index.php/Student_login"><h4>click here to go back to login</h4></a>

</div>  
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>MASS HSE Consultent Co</b> Students</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <span class="float-left" id="displaytime"></span>
      <p class="login-box-msg">check your mail id for OTP</p>

      <input type="hidden" name="caneltimer" id="caneltimer" value="start">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="4 digit OTP" name="otpnmbr" id="otpnmbr">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" onclick="checkotp();" class="btn btn-primary btn-block">confirm</button>
          </div>
          
          
          <!-- /.col -->
          <div class="col-4">
           
          </div>
          <!-- /.col -->
          
          
        </div>
        <div>
          <span id="otpmiss" style="color: red"></span>
        </div>
        <div>
          <span style="cursor: pointer;"><b onclick="resntotp();">Resend OTP</b></span>
        </div>
      

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>dist/js/adminlte.min.js"></script>

<script type="text/javascript">

  var cancel=false;
  var div = document.getElementById('displaytime');
            // var submitted = document.getElementById('submitted');

              function CountDown(duration, display,stat) {

                     if(stat==false)

                       {

                        var timer = duration, minutes, seconds;



                      var interVal=  setInterval(function () {
                            minutes = parseInt(timer / 60, 10);
                            seconds = parseInt(timer % 60, 10);

                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;
                    displaytime.innerHTML ="<b>" + minutes + "m : " + seconds + "s" + "</b>";
                            if (timer > 0) {
                               --timer;
                            }else{
                       clearInterval(interVal)
                                SubmitFunction();
                             }

                       },1000);

                    }
                    else
                    {
                      return;
                    }

                }

              function SubmitFunction(){
                
                     $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/settimeout');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:'', 
               success: function(data){
                  
                  alert(data);   

                  if($.trim(data)=='timeout')
                  {
                    $('#otpmiss').text('OTP timeout.Resend OTP');
                  }
              }
             });
                

               }
               CountDown(45,div,cancel);


  
  function checkotp()
  {

    var otp = $('#otpnmbr').val();
     $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/checkingotp');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:{otp:otp}, 
               success: function(data){
                  
                  alert(data);

                  if($.trim(data)=='success')
                  {
                     $('.login-box').hide();
                     $('#successdiv').css("display","block");
                  }
                  else if($.trim(data)=='failed')
                  {
                     $('#otpmiss').text('incorrect OTP!')
                  }
                  else
                  {
                    $('#otpmiss').text('Error occured please try again!')
                  }
                        
              }
             });
             
  }

  function resntotp()
  {
    $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/resentOTP');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:'', 
                beforeSend: function() {
                    var cancel=true;
                },
               success: function(data){
                  
                  alert(data);   

                  if($.trim(data)=='success')
                  {
                    var cancel=false;
                    CountDown(45,div);
                  }
                  else
                  {
                    $('#otpmiss').text('Error occured please try again!');
                  }  

                  
              }
             });
  }

</script>


</body>
</html>
