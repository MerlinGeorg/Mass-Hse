<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	
    	
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_board extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Student_register_model');
	}




public function index()
	{
	   // $this->load->model('Student_login_model');
	   $this->load->library('session');	
	   // $result = $this->Student_login_model->validate_login();

	   // if(!$result)
	   // {
	    $a['corse'] = $this->Student_register_model->getcourse();
	   	$this->load->view('student_register_view',$a);
	   	// print_r("<span style='color:red;'><h4><b>Login Failed</b></h4>.<br><span style='color:black'>invalid username or password</span></span>");
	   	
	}


	public function auto_regno()
	{
		// $autoin = mt_rand();
    // echo $autoin;$this->load->model('Admin_board_model');
    $res3 = $this->Student_register_model->get_st_count();
    // echo $res3->student_id;
    // die();
    if($res3 == '0')
    {
     $stdlastid = 0;
    }
    else
    {
    $stdlastid = $res3->student_id+1;
    }
    // echo $stdlastid;
    // die();
    date_default_timezone_set("UTC");
    $today = date("ymd");
    $mass = "MHC";

    // $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
    echo $unique =$mass . $today . $stdlastid;
	}


	public function reg_student()
	{

        $regno=$this->input->post('rregno');
        $mailid = $this->input->post('rmail');
        $fname = $this->input->post('rfname');
        $lname = $this->input->post('rlname');
        $phn = $this->input->post('rphone');
        $pasword = $this->input->post('rpswd');
        $civil = $this->input->post('rcivil');
        $pasprt = $this->input->post('rpasspo');
        // $course = $this->input->post('rpcourse');
        $qlify = $this->input->post('rqualification');
        $gender = $this->input->post('rgender');
        $dob = $this->input->post('rdob');

        $file= $this->input->post('image_file');

        // $uploadpath = $_SERVER['DOCUMENT_ROOT'].'/imgup';

        $config['upload_path']="../admin/uploads";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('image_file')){
        	$error = array('error'=> $this->upload->display_errors());
          
         
        	
        }
        else
        {
        $data = array('upload_data' => $this->upload->data());
         
        }
           if ( $_FILES['image_file']['size'] != 0)
         {
        		$filename = $data['upload_data']['file_name'];
         }

        
        
        


        $todays = date('Y-m-d');


        // $otp = rand(1000,9999);

        $data2 = array(
        
        'student_civil_id' => $civil,
        'student_reg'=> $regno,
        'pass_no'=> $pasprt,
        'first_name' => $fname,
        'last_name'=>$lname,
        'gender'=>$gender,
        'dob'=>$dob,
        'email'=>$mailid,
        'phno'=>$phn,
        'student_pwd'=>$pasword,
        'qualification'=>$qlify,
        'p_course'=>'N/A',
        'picture' =>  $filename,
        'ins_date'=> $todays,
        // 'otp'=>$otp
        // 'priority'=>0
        ); 

        $res123 = $this->Student_register_model->insertStudent($data2);

                if($res123==1)
                {
                 echo "success";
                }
                else
                {
                 echo "faild";
                }    

//         $this->session->set_userdata($data2);


// $frommail ="ansib@e4technosolutions.com";

        


//         $pageaddress = $_SERVER['HTTP_REFERER'];


        

//         $message = '<html>
// <head>
//   <title>Registraion Mail</title>
// </head>
// <body>

// <h2>MASS HSE CONSULTANT.Co</h2>

// <h3>Your OTP for Registration is'.$otp.'</h3>

// </body>
// ';

//     $subject='registraion OTP';

//     $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// $headers .= "From: ". $frommail."\r\n";
// $headers .= "";
// $a=mail($mailid,$subject,$message,$headers,"-f$frommail");


// if($a)
// {
// 		echo "success";
// 	// redirect('Student_register/otp_view');
// }
// else
// {
// 	echo "faild";
// }
        
  
	}



    public function otp_view()
    {
      $this->load->view('student_otp_view');
    }

    public function checkingotp()
    {
    	$otp_enterd = $this->input->post('otp');

    	if(isset($_SESSION['otp']))
    	{
           $otp_generated = $this->session->userdata('otp');

           if($otp_enterd==$otp_generated)
           {

            $data3 = array(

              'student_reg' => $this->session->userdata('student_reg'),
              'student_civil_id'=> $this->session->userdata('student_civil_id'),
              'pass_no' => $this->session->userdata('pass_no'),
              'first_name' => $this->session->userdata('first_name'),
              'last_name' => $this->session->userdata('last_name'),
              'gender' => $this->session->userdata('gender'),
              'dob' => $this->session->userdata('dob'),
              'email' => $this->session->userdata('email'),
              'phno' => $this->session->userdata('phno'),
              'student_pwd' => $this->session->userdata('student_pwd'),
              'qualification' => $this->session->userdata('qualification'),
              'p_course' => $this->session->userdata('p_course'),
              'picture' => $this->session->userdata('picture'),
              'ins_date' => $this->session->userdata('ins_date'),
            );

            $res123 = $this->Student_register_model->insertStudent($data3);

                if($res123==1)
                {
                 echo "success";
                }
                else
                {
                 echo "faild";
                }    
           	  
           }
           else
           {
           	$this->session->sess_destroy();
           	echo "failed";

           }	
    	}
        else
        {
            echo "error";
        }    
    }


    public function settimeout()
    {
        unset($_SESSION["otp"]);
        
            echo "timeout";
        
    }

    public function resentOTP()
    {
        if(isset($_SESSION['email']))
        {
            $email = $this->session->userdata('email');

            $otp = rand(1000,9999);

            $data2 = array(

              'student_reg' => $this->session->userdata('student_reg'),
              'student_civil_id'=> $this->session->userdata('student_civil_id'),
              'pass_no' => $this->session->userdata('pass_no'),
              'first_name' => $this->session->userdata('first_name'),
              'last_name' => $this->session->userdata('last_name'),
              'gender' => $this->session->userdata('gender'),
              'dob' => $this->session->userdata('dob'),
              'email' => $this->session->userdata('email'),
              'phno' => $this->session->userdata('phno'),
              'student_pwd' => $this->session->userdata('student_pwd'),
              'qualification' => $this->session->userdata('qualification'),
              'p_course' => $this->session->userdata('p_course'),
              'picture' => $this->session->userdata('picture'),
              'ins_date' => $this->session->userdata('ins_date'),
              'otp'=>$otp
            );


            session_destroy();

            $this->session->set_userdata($data2);



            $frommail ="ansib@e4technosolutions.com";

        


        $pageaddress = $_SERVER['HTTP_REFERER'];


        

        $message = '<html>
<head>
  <title>Registraion Mail</title>
</head>
<body>

<h2>MASS HSE CONSULTANT.Co</h2>

<h3>Your OTP for Registration is'.$otp.'</h3>

</body>
';

    $subject='registraion OTP';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From: ". $frommail."\r\n";
$headers .= "";
$a=mail($email,$subject,$message,$headers,"-f$frommail");


if($a)
{
        echo "success";
    // redirect('Student_register/otp_view');
}
else
{
    echo "faild";
}


        }
    }


	public function checkmailexist()
	{
		$mail = $this->input->post('mailid');

		$res = $this->Student_register_model->checkmail($mail);

		$maicount = $res->existmail;

		if($maicount==0)
		{
			echo "notexist";
		}
		else
		{
			echo "exist";
		}	
	}

	public function checkcivilexist()
	{
		$civilid = $this->input->post('civil');

		$res1 = $this->Student_register_model->checkcivil($civilid);
		$civilcount = $res1->existcivil;

		if($civilcount==0)
		{
			echo "notexist";
		}
		else
		{
			echo "exist";
		}	
	}

	public function checkpasspexist()
	{
		$passpo = $this->input->post('passp');
		$res2 = $this->Student_register_model->checkpasspo($passpo);
		$passpcount = $res2->existpasp;
		if($passpcount==0)
		{
			echo "notexist";
		}
		else
		{
			echo "exist";
		}	
	}





}
  