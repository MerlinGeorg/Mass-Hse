<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_meterial extends CI_Controller {

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
    	$this->load->model('Student_meterial_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $civilid = $_SESSION['username'];
      
      
      
      $st_meterials =$this->Student_meterial_model->get_student_meterial($civilid);

      if($st_meterials=='nocourse')
      {
      	$st_meterials='';
      }
      
     
      
    $a = array('content' => 'student_meterial_view',
    	        'st_mtrl'=> $st_meterials
              );
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Student_login');
    }
   
	}



	public function show_embed_pdf()
	{
		$module_id = $this->input->post('mid');
		

		
		$res['module'] = $this->Student_meterial_model->getModule($module_id);

		$this->load->view('embed_module_view',$res);
	}
}