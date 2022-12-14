<?php include('config.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">

	p {margin: 0; padding: 0;}	.ft30{font-size:13px;font-family:Times;color:#000000;}
	.ft31{font-size:12px;font-family:Times;color:#005527;}
	.ft32{font-size:32px;font-family:Times;color:#005527;}
	.ft33{font-size:10px;font-family:Times;color:#000000;}
	.ft34{font-size:11px;font-family:Times;color:#000000;}
	.ft35{font-size:9px;font-family:Times;color:#000000;}
	.ft36{font-size:8px;font-family:Times;color:#0066ff;}
	.ft37{font-size:9px;font-family:Times;color:#000000;}



	
	.loading-bar{
		display: none; /*by default hidden*/
		position: fixed;
		z-index: 1000; /*always on top*/
		left: 0;
		top:0;
		width: 100%;
		height: 100%; /*fll screen*/
		background-image: url('http://i.stack.imgur.com/FhHRx.gif');
		background-position: 50% 50%; /*center*/
		background-color: rgba(255, 255, 255, 1); /*transparancy*/
		background-repeat: no-repeat;
	    }
	body.loading{ /* when body has loading class*/

       overflow: hidden; /*hide scolling bar*/
	}    

	body.loading.loading-bar{
		display: block;/*when body has loading class.display the loader*/
	}



</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<!-- <script src="custom_script.js"></script>
 -->
<script type="text/javascript">
	
	// var testdiv = document.getElementsById("page1-div");

	function savePDFid()
	{
		var imgData;
		var imgData2='data:image/png;base64,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';

		html2canvas($('#page3-div'),{
			useCORS:true,
			onrendered:function(canvas)
			{
				imgData = canvas.toDataURL('image/png');
				var doc = new jsPDF('p','pt','a7');

				doc.addImage(imgData,'PNG',2,2)

				doc.addPage()
				doc.addImage(imgData2,'PNG',0,1,209,296)
				
                // doc.save('samefileid.pdf');

				var passport = $('#cand_passport').text();
				var cert_name = $('#cand_course').text();

                

				var blob = doc.output('blob');

				var formData = new FormData();
				formData.append('pdf', blob);
				formData.append('passport',passport);
				formData.append('cert_name',cert_name);


				
				$.ajax({
              method: "POST",
              url: "uploadid.php",
              data: formData, // serializes the form's elements.
              processData: false,
			  contentType: false,
			   beforeSend: function() {
			        $('.loading-bar').css("display", "block");
			    },
             success: function(data){
              // alert(data);
              if($.trim(data)=="success")
              {
              	alert("certificate generated successfully");

              	window.location.href="https://masshseconsultant.com/admin/index.php/Idcard";
              }
              else if($.trim(data)=="exist")
              {
                 alert("Id card already exist for this student");
              }
              else
              {
              	alert("something went wrong");
              }
               

            }
        });
	  }
	  });			

	}
</script>	


</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">

<!-- the loading bar div  -->
 <div class="loading-bar"> 
 <h3>please wait a moment to generate your ID .</h3>
 </div> 

<div id="page3-div" style="position:relative;width:268px;height:383px;margin-left: auto;margin-right: auto;background: #ffff;border:3px solid black;">

   <?php 
     
     $passno = $_GET['xzds'];
     
     $data = date('d-m-Y');
    //  echo $passno;
    
    
        $s2="SELECT students.student_id,students.first_name,students.last_name,students.gender,students.dob,students.student_civil_id,students.pass_no,students.email,students.phno,students.qualification,students.picture,students.student_reg,students.student_pwd,course.course AS course_name,course.course_code AS coursecode FROM students LEFT JOIN course ON students.p_course = course.id WHERE students.pass_no='$passno' LIMIT 1";
        $sl2=$db->prepare($s2);
        $sl2->execute();



 $res2=$sl2->fetch(PDO::FETCH_ASSOC)
 

  
   ?>

<div style="display: flex;">
<div style="margin-left: 0;padding-left: 0">
	<p style="position:absolute;top:105px;left:294px;white-space:nowrap" class="ft30"><i><b>&#160;</b></i></p>
	<p style="position:absolute;top:110px;left:20px;white-space:nowrap" class="ft31"><b>MASS&#160;HSE CONSULTANT TRAINING ID&#160;</b></p>
	<p style="position:absolute;top:90px;left:584px;white-space:nowrap" class="ft32"><b>&#160;</b></p>

	<p style="position:absolute;top:134px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Is certify&#160;that’s&#160;&#160;</p>

	<p style="position:absolute;top:149px;left:2px;white-space:nowrap" class="ft34"><b>&#160;&#160;MR.&#160;<span style="font-size: 11px"><?php echo $res2['first_name']; ?>&nbsp;<?php echo $res2['last_name']; ?></span>&#160;</b></p>

	<p style="position:absolute;top:164px;left:2px;white-space:nowrap" class="ft34"><b>&#160;&#160;Passport&#160;NO.</b>&#160;<span id="cand_passport"><?php echo $passno; ?></span>&#160;</p>

	<p style="position:absolute;top:179px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Has successfully&#160;completed&#160;the&#160;&#160;</p>

	<p style="position:absolute;top:197px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Training&#160;topic:&#160;</p>

<p style="position:absolute;top:212px;left:2px;white-space:nowrap;" class="ft33">&#160;&#160;<span id="cand_course" style="max-width:160px"><?php echo $res2['course_name']; ?></span>&#160;</p>

	<p style="position:absolute;top:227px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Training&#160;code : &#160;<?php echo $res2['coursecode']; ?>&#160;</p>

	<p style="position:absolute;top:243px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Training&#160;course&#160;&#160;</p>

	<p style="position:absolute;top:258px;left:2px;white-space:nowrap" class="ft33">&#160;&#160;Completion&#160;Date :&#160;<?php echo $data; ?>&#160;</p>
</div>
<div>
	<img style="position: absolute;
    top: 290px;
    left: 191px;
    height: 50px;
    width: 68px;" src="img/idcardlogo.png" alt="background image"/>
</div>
<div>
	<img style="position:absolute;top: 10px;
    left: 94px;height: 90px;width: 80px;border:1px solid black" src="admin/uploads/<?php echo $res2['picture']; ?>" alt="background image"/>
</div>
<div>
	<img style="    position: absolute;
    margin-top: 350px;
    margin-left: 0px;
    width: 265px;" src="img/idcardfooter1.png" alt="background image"/>
</div>
</div>


<p style="position: absolute;
    top: 290px;
    left: 10px;white-space:nowrap" class="ft35">Valid&#160;1&#160;y&#160;</p>
<!-- <p style="position:absolute;top:365px;left:133px;white-space:nowrap" class="ft35">Main&#160;office:&#160;floor&#160;6&#160;-office&#160;13-&#160;Noor complex&#160;-&#160;Beirut&#160;Street-&#160;Block&#160;9&#160;–&#160;Hawally&#160;</p>
<p style="position:absolute;top:379px;left:133px;white-space:nowrap" class="ft35">Gov.&#160;-Kuwait&#160;&#160;</p>
<p style="position:absolute;top:393px;left:133px;white-space:nowrap" class="ft36"><a href="Tel:+965-69616316">Tel:+965-69616316</a></p>
<p style="position:absolute;top:393px;left:241px;white-space:nowrap" class="ft35"><a href="Tel:+965-69616316">&#160;</a></p>
<p style="position:absolute;top:408px;left:133px;white-space:nowrap" class="ft35">Branch&#160;office: floor&#160;5-&#160;office&#160;5-&#160;tower&#160;no&#160;27&#160;–Sarai area-Alexandria&#160;Gov.&#160;-Egypt&#160;&#160;</p>
<p style="position:absolute;top:422px;left:133px;white-space:nowrap" class="ft36"><a href="Tel:+2-010-12059055">Tel: &#160;+2-010-12059055</a></p>
<p style="position:absolute;top:422px;left:259px;white-space:nowrap" class="ft35"><a href="Tel:+2-010-12059055">&#160;</a>&#160;&#160;&#160;/&#160;+2-003-5488968&#160;&#160;&#160;&#160;Fax:&#160;&#160;+2-003-5488968&#160;</p>

<div>
	<img style="position:absolute;margin-top: 430px;
    margin-left: 133px;" src="img/idcardfooter1.png" alt="background image"/>
</div>

<p style="position:absolute;top:436px;left:485px;white-space:nowrap" class="ft35">&#160;</p>
<p style="position:absolute;top:451px;left:485px;white-space:nowrap" class="ft35">&#160;</p>
<p style="position:absolute;top:465px;left:485px;white-space:nowrap" class="ft35">&#160;</p>
<p style="position:absolute;top:479px;left:133px;white-space:nowrap" class="ft35">Info@masshseconsultant.com&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:479px;left:386px;white-space:nowrap" class="ft36"><a href="http://www.masshseconsultant.com">www.masshseconsultant.com</a></p>
<p style="position:absolute;top:479px;left:546px;white-space:nowrap" class="ft35"><a href="http://www.masshseconsultant.com">&#160;</a></p>
<p style="position:absolute;top:494px;left:133px;white-space:nowrap" class="ft35">&#160;</p>
<p style="position:absolute;top:521px;left:133px;white-space:nowrap" class="ft37">&#160;</p> -->
</div>

<div style="margin-top: 150px;">
<b id="cmd" style="color: #ffff;background: black;cursor: pointer;" onclick="savePDFid();">Generate PDF</b>
</div>



</body>


<script type="text/javascript">

setTimeout(function(){

 jQuery('#cmd').click();

}, 0);	
	

</script>


</html>