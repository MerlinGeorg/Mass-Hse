<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_college extends CI_Controller {

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
    	$this->load->model('Coursecat_model');
	}

	public function index()
	{ 
        
		$a = array('content' => 'course_cat_view');
		$this->load->view('admintemplate',$a);

	}

	public function reg_course_cat()
	{
		
        $crs_catid = $this->input->post('corscatid');

        $crs_catname = $this->input->post('corscatname');
        
        if(empty($crsid))
        { 
        $result= $this->Coursecat_model->insert_course_cat($crs_catname);
        }
        else
        {
        
        $result= $this->Coursecat_model->crs_update_cat($crs_catid,$crs_catname);
        }	
        

        if ($result == 1)
         {
           echo "true"; 
         }
         else
         {
         	echo "false";
         }	
        }
	}





}	
