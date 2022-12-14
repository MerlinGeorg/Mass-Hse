<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MASS HSE Consultent Co</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url().'AdminLTE-master/'; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">

<div id="successdiv" class="col-md-12" style="text-align: center;display: none">
  
    <h2 style="font-size: 30px;font-style: inherit;color: green">Registration Successfull</h2>

    <a href="<?php echo base_url();?>index.php/Student_login"><h4>click here to go back to login</h4></a>

</div>  

<div class="register-box" style=" width: 860px;">
 


  <div class="">
    <div class="col-md-12">
      <p class="login-box-msg"></p>
        


        <div class="card card-primary">
              <div class="card-header" >
                <h2 class="card-title col-md-12" style="text-align: center;font-size: 20px">Mass HSE consultant Co. Students</h2>
                <h5 class="card-title col-md-12" style="text-align: center;">Register a new membership</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="POST" id="stdregfrom">
                <div class="card-body">

                  <input type="hidden" name="rregno" id="rregno" >

                  <div class="col-md-12" style="display: flex;">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">First name</label>
                    <input type="text" class="form-control" name="rfname" id="rfname" placeholder="first name" required="required">
                  </div>


                  <div class="form-group col-md-6">
                    <label for="rlname">Last name</label>
                    <input type="text" class="form-control" name="rlname" id="rlname" placeholder="last name" required="required">
                  </div>
                 </div>
                 
                 <div class="col-md-12" style="display: flex;">
                  <div class="form-group col-md-6">
                    <label for="rmail">Email address</label>
                    <input type="email" class="form-control" onchange="checkmail();" name="rmail" id="rmail" placeholder="Enter email"  required="required">
                    <span style="color: red;" id="mailspan"></span>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="rphone">Phone number</label>
                    <input type="number" class="form-control" id="rphone" name="rphone" placeholder="phone number" required="required">
                  </div>
                 </div>


                 <div class="col-md-12" style="display: flex;">
                  <div class="form-group col-md-6">
                    <label for="rpswd">Password</label>
                    <input type="password" class="form-control" oninput="checksectre();" onchange="emptyspan();" name="rpswd" id="rpswd" placeholder="Enter email" required="required">
                    <span id="passwordspan"></span>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="rcpswd">Confirm Password</label>
                    <input type="password" class="form-control" id="rcpswd" name="rcpswd" placeholder="phone number" onchange="paswordcheck();" required="required">
                    <span id="cpasswordspan"></span>
                  </div>
                 </div>



                 <div class="col-md-12" style="display: flex;">
                  <div class="form-group col-md-6">
                    <label for="rcivil">Civil Id</label>
                    <input type="text" class="form-control" name="rcivil" id="rcivil" placeholder="12 digit civil id" onchange="ceckcivil();" required="required">
                    <span id="civilspan" style="color: red"></span>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="rpasspo">Passport No</label>
                    <input type="text" name="rpasspo" id="rpasspo" onchange="checkpassprtexist();" class="form-control" placeholder="passport number" required="required">
                    <span style="color: red" id="pasportspan"></span>
                  </div>
                 </div>


                  <!-- <div class="col-md-12" style="display: flex;"> -->
                  <!-- <div class="form-group col-md-6">
                    <label for="rpcourse">Prefered course</label>
                    <select class="form-control" name="rpcourse" id="rpcourse" required="required">
                      <option value="">Select</option>
                      <?php foreach ($corse as $row ) {
                      
                       ?>
                      <option value="<?php echo $row->id ?>"><?php echo $row->course ?></option>
                      <?php } ?>
                    </select>
                  </div> -->


                  
                 <!-- </div> -->

 
                  <div class="col-md-12" style="display: flex;">
                  <div class="form-group col-md-6">
                    <label for="rgender">Gender</label>
                    <select class="form-control" name="rgender" id="rgender" required="required">
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="rdob">Date of Birth</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="rdob" name="rdob" required="required">
                  </div>
                  </div>
                 </div>
                 
                 <div class="col-md-12" style="display: flex;">

                  <div class="form-group col-md-6">
                    <label for="rqualification">Qualification</label>
                    <input type="text" name="rqualification" id="rqualification" class="form-control" placeholder="Qualification" required="required">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="rpic">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="form-control focus" onchange="showfile();" type="file"   name="image_file"  id="rpic">
                      </div>
                      
                    </div>
                  </div>
                 </div>

                  <div class="col-md-12" style="display: flex;">
                  <div class="form-check col-md-6" >
                    <input type="checkbox" class="form-check-input" id="termscheck" required="required">
                    <label class="form-check-label" for="termscheck" required="required">I accept the <a href="">terms & conditions</a></label>

                  </div>
                  <div class="form-check col-md-6">
                    <a href="<?php echo base_url(); ?>index.php/Student_login" class="text-center">I already have a membership</a>
                  
                  </div>
                 </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="regsub"  class="btn btn-primary">Register</button>
                </div>
              </form>
            </div>
      

     
      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>dist/js/adminlte.min.js"></script>

<script type="text/javascript">

  $(document ).ready(function() {
          
          // $('#successdiv').hide();
          regno_pas();

 
      });
  
  $("#stdregfrom").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/reg_student');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                alert(data);

                if($.trim(data)=="success")
                {
                  // window.location.href="<?php echo base_url('index.php/Student_register/otp_view');?>"

                   // window.location.href = '@Url.Action("otp_view", "Student_register")';

                   $('.register-box').hide();
                   $('#successdiv').css("display","block");
                }
                       
              }
             });
      }); 


   function regno_pas()
                {
                  $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/auto_regno');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:{}, 
               success: function(data){

                // alert(data);

                
              
                 $("#rregno").val(data);
                        
              }
             });
            }  

   function checkmail()
   {
    var maiid = $('#rmail').val();
       

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/checkmailexist');?>/",
              data: {mailid:maiid},
              
               success: function(data){

                if($.trim(data)=='exist')
                {
                  $('#mailspan').text('mail id already exist')
                  $('#regsub').prop('disabled','true');
                  $('#regsub').prop('title','some data filled incorrectly');
                }
                else
                {
                  $('#mailspan').text('');
                  $('#regsub').prop('disabled',false);
                }  
                       
              }
             });
      }    


      function checksectre()
      {
         var pass = $('#rpswd').val();

         var legth = pass.length;

         if(legth<=4)
         {
           $('#passwordspan').css("color","red");
           $('#passwordspan').text('Poor');
         }
         else if(legth>4&&legth<8)
         {
          $('#passwordspan').css("color","yellow");
           $('#passwordspan').text('weak');
         }
         else
         {
          if(legth>=8)
          {
            $('#passwordspan').css("color","green");
            $('#passwordspan').text('Strong');
          }
         }
      }     

      function emptyspan()
      {
         $('#passwordspan').text('');
      }

      function paswordcheck()
      {
        

          var cpas= $('#rcpswd').val();
          var pas = $('#rpswd').val();

          // alert(cpas);
          if(cpas==pas)
          {
            $('#cpasswordspan').text('');
           $('#regsub').prop('disabled',false);
          }
          else
          {
            $('#cpasswordspan').css("color","red")
            $('#cpasswordspan').text('password confirmation missmatch');
            $('#regsub').prop('disabled','true');
            $('#regsub').prop('title','some data filled incorrectly');
          }
      }

      function ceckcivil()
      {
         var civil =$('#rcivil').val();
         
         var civillength = civil.length;

         if(civillength!=12)
         {
           $('#civilspan').text('invalid civil id');
           $('#regsub').prop('disabled','true');
            $('#regsub').prop('title','some data filled incorrectly');
         }
         else
         {
             $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/checkcivilexist');?>/",
              data: {civil:civil},
              
               success: function(data){

                if($.trim(data)=='notexist')
                {
                   $('#civilspan').text('');
                   $('#regsub').prop('disabled',false);
                }
                else
                {
                   $('#civilspan').text('Civil id already exist');
                   $('#regsub').prop('disabled','true');
                    $('#regsub').prop('title','some data filled incorrectly');
                }       
              }
             });
         }
      }

      function checkpassprtexist()
      {
        // pasportspan

        var passp = $('#rpasspo').val();

        

         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_register/checkpasspexist');?>/",
              data: {passp:passp},
              
               success: function(data){
                // alert(data);
                if($.trim(data)=='notexist')
                {
                   $('#pasportspan').text('');
                   $('#regsub').prop('disabled',false);
                }
                else
                {
                   $('#pasportspan').text('passport already exist');
                   $('#regsub').prop('disabled','true');
                    $('#regsub').prop('title','some data filled incorrectly');
                }       
              }
             });
      }


      


</script>

</body>
</html>
