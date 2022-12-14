<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_certification extends CI_Controller {

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
    	$this->load->model('Company_certification_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $regno = $_SESSION['userreg'];
      
      
      
      // $st_cert1 =$this->Company_certification_model->get_comp_cert($regno);
      
      // $st_cert = $st_cert1->pass_no;
      
      $certf_comp = $this->Company_certification_model->get_cert($regno);
      
    $a = array('content' => 'company_certification_view',
    	        'c_crt'=> $certf_comp
);
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Company_login');
    }
   
	}
}
