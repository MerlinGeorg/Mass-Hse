<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_idcard extends CI_Controller {

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
    	$this->load->model('Student_idcard_model');
	 }

	public function index()
	{ 
	 	
    if(isset($_SESSION['username']))
    {
      
      $interid = $_SESSION['username'];
      
      $st_dtls =$this->Student_idcard_model->get_student_dtls($interid);

      $passno = $st_dtls->pass_no;

      $st_idcrd =$this->Student_idcard_model->get_student_idcard($passno);
      
      $a = array('content' => 'student_idcard_view',
    	        
    	        'st_idcard'=>$st_idcrd
              );
       $this->load->view('admintemplate',$a);
      }
      else
      {
      	echo "failed";
      }	

    }


 }   