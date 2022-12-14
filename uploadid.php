<?php

include('config.php');

$pass = $_POST['passport'];
$certname = $_POST['cert_name'];
$autono = mt_rand(1000,9999);

// $s13="SELECT count(*) as idcount from idcard where st_id_pasport = '$pass'";
//     $sl13=$db->prepare($s13);
//     $sl13->execute();
//     $res13=$sl13->fetch(PDO::FETCH_ASSOC);

//     $sid_count=$res13['idcount'];
    
//     if($sid_count!=0)
//     {
//        echo "exist";
//     }
//     else
//     {

move_uploaded_file(	
$_FILES['pdf']['tmp_name'],
$_SERVER['DOCUMENT_ROOT'] . "/mass/admin/uploads/hse_Id_".$autono."_".$pass.".pdf"

);


	$filenames = "hse_Id_".$autono."_".$pass.".pdf";

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
    'st_regno' => $regno,
    'st_pasport' => $pass,
    'st_name' => $name,
    'st_cert_name' => $certname,
    'cert_file' => $filenames,
    'c_ins_date' => $ins_date,
    ];

	$s1="INSERT INTO idcard (st_id_regno, st_id_pasport, st_id_name,st_id_cert_name,cert_id_file,c_id_ins_date) VALUES (:st_regno, :st_pasport, :st_name,:st_cert_name,:cert_file,:c_ins_date)";

        $sl1=$db->prepare($s1);
        if($sl1->execute($data))
        {
        	echo "success";
        }
        else
        {
        	echo "failed";
        }

    // }    
?>