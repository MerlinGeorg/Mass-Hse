<?php

	
	
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$qualification=$_POST['qualification'];
// 		$course=$_POST['course'];
        $state=$_POST['state'];
        $district=$_POST['district'];
		$enquiry=$_POST['enquiry']; 
		
		//$details=$_POST['message'];
	    $pageaddress = $_SERVER['HTTP_REFERER'];
        $to="info@masshseconsultant.com";

            // <tr>
//      <th>Required Course</th>
//     <td>: '.$course.'</td>
//     </tr> 
		$message = '
<html>
<head>
  <title>Enquiry for Admission</title>
</head>
<body>
  
  <table>
  
    <tr>
     <th>Name </th>
     <td>: '.$first_name.'&nbsp;'.$last_name.'</td>
    </tr>
	
	<tr>
    <th>Email ID</th>
    <td>: '.$email.'</td>
    </tr>
	
    <tr>
    <th>Mobile</th>
    <td>: '.$number.'</td>
    </tr>

     
	
	
	


    	<tr>
    <th>Enquiry</th>
    <td>: '.$enquiry.'</td>
    </tr>
	
    </table>
   
    
</body>
</html>
';



$subject='Enquiry for Admission';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From: ". $email."\r\n";
$headers .= "";
$a=mail($to,$subject,$message,$headers,"-f$email");

if(!$a) {
// echo '<script type="text/javascript">alert("Enquiry cannot be processed at this time!");window.location.href="' . $pageaddress . '";</script>';
	echo "Enquiry cannot be processed at this time!";
}
else {
	// echo '<script type="text/javascript">alert("Enquiry is processed successfully");window.location.href="' . $pageaddress . '";</script>';
	echo "Enquiry is processed successfully";
}

	

?>