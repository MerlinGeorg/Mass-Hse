<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idcard extends CI_Controller {

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
    	$this->load->model('Idcard_model');
    	$this->load->model('Certification_model');
	 }

		public function index()
		{ 
			    if(isset($_SESSION['username'])){
			      $this->load->model('Certification_model');
			    // $categories = $this->Coursecat_model->allcategories();
			    $courses = $this->Certification_model->getcourses();
			    $a = array('content' => 'idcard_view',
			                'cors'   => $courses
			                );
			    $this->load->view('admintemplate',$a);
			    }else{
			      redirect('Admin_board/login_admin');
			    }
			   
		}

		public function search_pass()
		{
			if (isset($_GET['term'])) {
         $term = $this->input->get('term');

        
         
     	  $result= $this->Idcard_model->search_passport($term);
    
             foreach ($result as $row)
             {
                 $arr_result[] = $row->pass_no;
             }
              echo json_encode($arr_result);
           }   
		}

		public function get_studentname()
		{
			$passno = $this->input->post('passno');
			// echo $passno;
			// die();
		$ress = $this->Idcard_model->geting_s_name($passno);

		$fname = $ress->first_name;
		$lname = $ress->last_name;

		echo $fname.' '.$lname;
		}



		public function get_idcard()
	{
		$this->load->model("Idcard_model");
  	    $res_college['res'] = $this->Idcard_model->get_students_idcard();
    

  	    $this->load->view('get_idcard_view',$res_college);
	}

	public function deletecard()
	{
		$crd_id=$this->input->post('id');
		$crd_file=$this->input->post('img');

		$res = $this->Idcard_model->delete_idcard($crd_id);
        
        $img_path = 'uploads/'.$crd_file;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }
        else
        {
        
          echo "failed";
        }
	}


}