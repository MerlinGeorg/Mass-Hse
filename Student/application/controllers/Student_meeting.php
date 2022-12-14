<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_meeting extends CI_Controller {

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
    	$this->load->model('Student_meeting_model');
	}


	public function index()
	{ 
	 	
    if(isset($_SESSION['username']))
	    {
	      
	      $civilid = $_SESSION['username'];
	      
	     


	      
	      $a = array('content' => 'student_meeting_view',
	    	        
	                );

	    $this->load->view('admintemplate',$a);
	    }
	    else
	    {
	      redirect('Student_login');
	    }
   
	}

	public function getmeets()
	{
		if(isset($_SESSION['id']))
	    {
	    	$userid = $_SESSION['id'];

	    	$res1['res'] = $this->Student_meeting_model->getstudentDetls($userid);

	    	

	    	// if($s_courses!='' && $s_courses!='N/A')
	    	// {
	    	// 	if(strpos($s_courses, ',') !== false)
	    	// 	{
	    	// 		$ex_scourse = explode(',', $s_courses);

	    	// 		array_pop($ex_scourse);

	    	// 		for($i=0;$i<count($ex_scourse);$i++)
	    	// 		{
	    	// 			$res2 = $this->Student_meeting_model->getcoursemeets($ex_scourse[$i]);
	    	// 		}
	    	// 	}
	    	// }

	    	$this->load->view('get_meeting_div',$res1);
	    }
	}

}