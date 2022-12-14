<?php

	
	
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$var=$_POST['dob'];
		$date = str_replace('/', '-', $var);
        $dob = date('d-m-Y', strtotime($date));
        $address=$_POST['address'];
		$qualification=$_POST['qualification'];
    // $college=$_POST['college'];
		$course=$_POST['course'];
		// $location=$_POST['location'];
		

	    $pageaddress = $_SERVER['HTTP_REFERER'];
        $to="info@masshseconsultant.com";

             
		$message = '
<html>
<head>
  <title>Application Details</title>
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
    <th>Phone Number</th>
    <td>: '.$number.'</td>
    </tr>

     <tr>
    <th>Date of Birth</th>
    <td>: '.$dob.'</td>
    </tr>

       <tr>
    <th>Address</th>
    <td>: '.$address.'</td>
    </tr>

       <tr>
    <th>Qualification</th>
    <td>: '.$qualification.'</td>
    </tr>

     

   <tr>
    <th>Required Course</th>
    <td>: '.$course.'</td>
	   </tr>
	
	
    </table>
   
    
</body>
</html>
';



$subject= 'Application for Admission';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From: ". $email."\r\n";
$headers .= "";
$a=mail($to,$subject,$message,$headers,"-f$email");

if(!$a) {
// echo '<script type="text/javascript">alert("Enquiry cannot be processed at this time!");window.location.href="' . $pageaddress . '";</script>';
	echo "Application cannot be processed at this time!";
}
else {
	// echo '<script type="text/javascript">alert("Enquiry is processed successfully");window.location.href="' . $pageaddress . '";</script>';
	echo "Application is processed successfully";
}
	

?>