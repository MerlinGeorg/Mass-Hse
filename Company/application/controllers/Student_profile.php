<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_profile extends CI_Controller {

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
    	$this->load->model('Student_profile_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $reg_no = $_SESSION['username'];
      
      $st_dtls =$this->Student_profile_model->get_student_dtls($reg_no);

      $passno = $st_dtls->pass_no;

      // $st_idcrd =$this->Student_profile_model->get_student_idcard($passno);
      
    $a = array('content' => 'student_profile_view',
    	        'st_prfl'=> $st_dtls
    	        // 'st_idcard'=>$st_idcrd
);
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Student_login');
    }
   
	}
}
