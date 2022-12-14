<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_xam extends CI_Controller {

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
    	$this->load->model('Admin_exam_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      
    
    $a = array('content' => 'admin_exam_view',
                );
    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Admin_board/login_admin');
    }
   
	}

	 public function display_xamres()
	 {

  
  	$xam['result'] = $this->Admin_exam_model->display_xamresult();
  	$this->load->view('get_xamresult_view',$xam);
	 }


}	