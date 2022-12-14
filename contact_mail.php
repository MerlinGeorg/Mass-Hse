<?php

	
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		//$subject=$_POST['subject'];
		$details=$_POST['message'];

	    $pageaddress = $_SERVER['HTTP_REFERER'];
        $to="info@masshseconsultant.com";

             
		$message = '
<html>
<head>
  <title>Message from a visitor</title>
</head>
<body>
  
  <table>
  
    <tr>
     <th>Name </th>
     <td>: '.$name.'</td> 
    </tr>
	
	<tr>
    <th>Email ID</th>
    <td>: '.$email.'</td>
    </tr>

	
	
	
	<tr>
    <th>Message</th>
    <td>: '.$details.'</td>
    </tr>
	
    </table>
   
    
</body>
</html>
';



$subject= $_POST['subject'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From: ". $email."\r\n";
$headers .= "";
$a=mail($to,$subject,$message,$headers,"-f$email");

if(!$a) {
// echo '<script type="text/javascript">alert("Enquiry cannot be processed at this time!");window.location.href="' . $pageaddress . '";</script>';
	echo "Email cannot be processed at this time!";
}
else {
	// echo '<script type="text/javascript">alert("Enquiry is processed successfully");window.location.href="' . $pageaddress . '";</script>';
	echo "Email send successfully";
}
	

?>