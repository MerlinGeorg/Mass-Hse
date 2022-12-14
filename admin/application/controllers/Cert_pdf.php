<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cert_pdf extends CI_Controller {

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
    	$this->load->model('Certification_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      // $this->load->model('Certification_model');
    // $categories = $this->Coursecat_model->allcategories();
    // $courses = $this->Certification_model->getcourses();
               // $pass_no = $this->input->post('cregno');

    
      

    $this->load->view('cert_view_pdf',$a);
    }
    else
    {
      redirect('Admin_board/login_admin');
    }
   
	}


	public function get_pdf()
	{
	  $a['val'] = array('pass_no' => $this->input->post('cregno'),
    	       'st_name' => $this->input->post('cername'),
    	       'topic'   => $this->input->post('cert_name'),
    	       't_code'  => $this->input->post('cert_code'),
    	       'comp_date'=> $this->input->post('cert_date')
                
                );

	  print_r($a)
    
	}


}