<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_login extends CI_Controller {

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
    	$this->load->model('Student_login_model');
	}




public function index()
	{
	   $this->load->model('Student_login_model');
	   $this->load->library('session');	
	   $result = $this->Student_login_model->validate_login();

	   if(!$result)
	   {

	   	$this->load->view('student_login_view');
	   	// print_r("<span style='color:red;'><h4><b>Login Failed</b></h4>.<br><span style='color:black'>invalid username or password</span></span>");
	   	
	   	?>
        <script type="text/javascript">
        	alert("login Failed.")
        </script>

	   	<?php
	   }
	   else
	   {
	 //   	$a = array('content' => 'admission_view');
		// $this->load->view('admintemplate',$a);
		// $this->react();

		

		redirect('Student_profile');
		// print_r("welcome".$result->username);
	   }
	}

  
     public function st_logout()
    {
        $this->session->sess_destroy();
      // $this->session->unset_userdata('id');
    //      $fetch1['data1'] = $this->Main_model->display1();
    //     $fetch1['data2'] = $this->Main_model->display2();
    // $this->load->view('index_test',$fetch1);
        $this->load->view('student_login_view');
    }



}
