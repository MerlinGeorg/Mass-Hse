<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_course extends CI_Controller {

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
    	$this->load->model('Student_course_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $civilid = $_SESSION['username'];
      
     /* $st_cert1 =$this->Student_certificate_model->get_student_cert($civilid);
      
      $st_cert = $st_cert1->student_reg;*/

      $usid = $_SESSION['id'];
      
      $mycours = $this->Student_course_model->get_mycourses($usid);

      
      $a = array('content' => 'student_course_view',
    	        'mycors'=> $mycours
                );

    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Student_login');
    }
   
	}



	public function checkingexpry()
	{
		$userid = $_SESSION['id'];

		// alert($userid);

		$today = date('Y-m-d');

		$res1 = $this->Student_course_model->checkcexp($userid,$today);
        
        
        
		foreach ($res1 as $row) 
		{
			$courseid = $row->id;
            $ceckid= $row->checkouts_id;
			// echo $ceckid;

		$res321 = $this->Student_course_model->removecorse($courseid,$userid,$ceckid);

		if($res321==0)
			{
				break;

				echo "failed";
			}
		}

       print_r($res321) ;
	}




}