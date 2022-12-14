<div class="content" style="background-color: #ffff;padding-top: 10px">
<div class="col-md-12">
<div class="col-md-12 "><span class="float-right" id="displaytime" style="color:#FF0000;font-size:15px"></div>
<h3 class="col-md-12" style="text-align: center;margin-bottom: 20px;margin-top: 20px;color:#007bff;"><?php echo $xamename ?></h3>

<div class="col-md-12" style="margin-bottom: 25px">
<h4>Student Reg.no :&nbsp;<span style="font-size: 22px;color: #007bff"><?php echo $regno ?></span></h4><br>
<h4>Question paper code :&nbsp;<span style="font-size: 22px;color: #007bff"><?php echo $qpcode ?></span></h4><br>
<h4>Course :&nbsp;<span style="font-size: 22px;color: #007bff"><?php echo $cours ?></span></h4>
</div>
<div>
<form method="POST" action="<?php echo base_url()?>index.php/Student_exam/checkaswerpaper" id="examinationform">
<div class="col-md-12">
	
<input class="form cuntrol" type="hidden" name="xamregno" id="xamregno" value="<?php echo $regno ?>">
<input class="form cuntrol" type="hidden" name="xamname" id="xamname" value="<?php echo $xamename ?>">
<input class="form cuntrol" type="hidden" name="xamqpcode" id="xamqpcode" value="<?php echo $qpcode ?>">
<input class="form cuntrol" type="hidden" name="xamcourse" id="xamcourse" value="<?php echo $cours ?>">
<input class="form cuntrol" type="hidden" name="xamcoursecod" id="xamcoursecod" value="<?php echo $courscode ?>">


<?php
$i = 0;
$j = 1;
 foreach($questions as $row) 
 	{?>
<div style="background-color: #e7ecf3;margin-bottom: 10px;border: none;padding-left: 1em">
	<div style="display: flex;margin-bottom: 20px">
	<p style="margin-bottom: 0"><span style="color: red"><?php echo $j ?></span>)</p>&nbsp;<textarea class="col-md-12" style=" border: 0;border-color: transparent;background-color: #e7ecf3;" type="text" readonly="readonly" value="" id="question<?php echo $i; ?>" name="question[]"><?php echo $row->questions_question; ?></textarea>
    </div>

	<input type="radio" id="optiona<?php echo $i; ?>" name="option<?php echo $i; ?>" value="Option_A">
    <label for="optiona<?php echo $i; ?>"><?php echo $row->Option_A; ?></label><br>

   <input type="radio" id="optionb<?php echo $i; ?>" name="option<?php echo $i; ?>" value="Option_B">
    <label for="optionb<?php echo $i; ?>"><?php echo $row->Option_B; ?></label><br>

    <input type="radio" id="optionc<?php echo $i; ?>" name="option<?php echo $i; ?>" value="Option_C">
    <label for="optionc<?php echo $i; ?>"><?php echo $row->Option_C; ?></label><br>

    <input type="radio" id="optiond<?php echo $i; ?>" name="option<?php echo $i; ?>" value="Option_D">
    <label for="optiond<?php echo $i; ?>"><?php echo $row->Option_D; ?></label>

</div>
<?php
$i++;
} 
?>
<div class="col-md-12" style="text-align: center;margin-bottom: 25px">
	<button type="submit"  class="btn btn-success" name="formsbmiting" id="formsbmiting">Submit Exam</button>
</div>

</div> 
</form>	
</div>
</div>
</div>
<script type="text/javascript">

setTimeout(function(){ alert("30 seconds remaining"); }, 90000);

var div = document.getElementById('displaytime');
            // var submitted = document.getElementById('submitted');

              function CountDown(duration, display) {

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

              function SubmitFunction(){
                // submitted.innerHTML="Time is up!";
                document.getElementById('examinationform').submit();

               }
               CountDown(120,div);


// $( document ).ready(function() {
    
    // setTimeout(function(){ 

    //   document.getElementById('examinationform').submit();

    // }, 10000);

// });

	
	// $("#examinationform").submit(function(e) {
       
      
 //       var result = confirm("Are you sure you want to submit the exam");

 //        e.preventDefault(); // avoid to execute the actual submit of the form.
 //        var form = $(this);
 //         $.ajax({
 //                method: "POST",
 //                url: "<?php echo base_url('index.php/Student_exam/checkaswerpaper');?>/",
 //              data: new FormData(this),
 //              processData:false,
 //                     contentType:false,
 //                     cache:false,
 //              // serializes the form's elements.
 //               success: function(data){

 //                // alert(data);
 //               if(data == "pass")
 //               {
 //                 alert('Congratulations. You passed the exam .Score will be available at exam session');
                  
 //                 window.location.href="<?php echo base_url(); ?>index.php/Student_exam";
 //               }
               
 //               else if(data == "failed")
 //               {
 //                  alert('Sorry. You failed.please retry ');
                 
 //                 window.location.href="<?php echo base_url(); ?>index.php/Student_exam";
 //               }
 //               else
 //               {
 //               	 alert('Something went wrong');
 //               }
 //               // $('#xamstrtbtn').attr('disabled', true);
 //              // show response from the php script.            
 //              }
 //             });
 //      });

</script>

