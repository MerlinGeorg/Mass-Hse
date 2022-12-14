<?php

include('config.php');




$serno = $_POST['srielno'];
$pass = $_POST['passport'];
$certname = $_POST['cert_name'];
$autono = mt_rand(1000,9999);



move_uploaded_file(	
$_FILES['pdf']['tmp_name'],
$_SERVER['DOCUMENT_ROOT'] . "mass/admin/uploads/hse_".$autono."_".$pass.".pdf"

);


	$filenames = "hse_".$autono."_".$pass.".pdf";

	$ins_date = date('Y-m-d');


    $s12="SELECT * from students where pass_no = '$pass' Limit 1";
    $sl12=$db->prepare($s12);
    $sl12->execute();
    $res12=$sl12->fetch(PDO::FETCH_ASSOC);

    $regno = $res12['student_reg'];
    $fname = $res12['first_name'];
    $lname = $res12['last_name'];

    $name = $fname." ".$lname;




	$data = [
    
    'st_pasport' => $pass,
    'st_name' => $name,
    'cert_sr_no'=>$serno,
    'st_cert_name' => $certname,

    'cert_file' => $filenames,
    
    'c_ins_date' => $ins_date,
    ];

	$s1="INSERT INTO certification (st_pasport,st_name,cert_sr_no,st_cert_name,cert_file,c_ins_date) VALUES (:st_pasport, :st_name,:cert_sr_no,:st_cert_name,:cert_file,:c_ins_date)";

        $sl1=$db->prepare($s1);
        if($sl1->execute($data))
        {
        	echo "success";
        }
        else
        {
        	echo "failed";
        }


  
?>