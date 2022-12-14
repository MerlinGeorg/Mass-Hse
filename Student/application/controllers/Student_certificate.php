<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_certificate extends CI_Controller {

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
    	$this->load->model('Student_certificate_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $civilid = $_SESSION['username'];
      
      
      
      $st_cert1 =$this->Student_certificate_model->get_student_cert($civilid);
      
      $st_cert = $st_cert1->pass_no;
      
      $certf_st = $this->Student_certificate_model->get_cert($st_cert);
      
    $a = array('content' => 'student_certificate_view',
    	        'st_crt'=> $certf_st
);
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Student_login');
    }
   
	}
}
