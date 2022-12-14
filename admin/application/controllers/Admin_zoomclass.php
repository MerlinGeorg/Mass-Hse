<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_zoomclass extends CI_Controller {

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
    	$this->load->model('Admin_trainer_model');
    	$this->load->model('Admin_zoomclass_model');
	}
	public function index()
	{ 

		
      if(isset($_SESSION['username'])){
      $courses = $this->Admin_trainer_model->getcourselist();	
      $a = array('content' => 'admin_zoomclass_view.php',
      	          'corslist'=> $courses);
      $this->load->view('admintemplate',$a);
	    }else{
	      redirect('Admin_board/login_admin');
	    }
		

	}

	public function insert_meeting()
	{
		$m_id = $this->input->post('meetid');

		$ins_date = date('Y-m-d');

		 $data1 =array
           (
             
              'meeting_title'=> $this->input->post('mtitle'),             
              'meeting_course'=>$this->input->post('mcourse'),
              'meeting_date'=>$this->input->post('mdate'),
              'meeting_time'=>$this->input->post('mtime'),
              'meeting_link'=>$this->input->post('mlink'),
              'meeting_viewstat'=>'1',
              'meeting_ins_date'=>$ins_date
              
           );

        if($m_id=='')
        {
        	$res123 = $this->Admin_zoomclass_model->insertmeet($data1);

        } 
        else
        {
           $res123 = $this->Admin_zoomclass_model->updatemeet($data1,$m_id);
        }

        if($res123==1)
        	{
        		echo "success";
        	}
        	else
        	{
        		echo "failed";
        	}	  
	}

	public function getzoomcls()
	{
		$res_meet['res'] = $this->Admin_zoomclass_model->get_meet_list();
    

  	$this->load->view('get_zoomclass_view',$res_meet);
	}

	public function editmeeting()
	{
		 $id=$this->input->post('id');
		 	
		 	$res = $this->Admin_zoomclass_model->edit_meet_part($id);
			echo json_encode($res);
	}

	public function delete_meet()
	{
		 $id = $this->input->post('id');
    
        $res = $this->Admin_zoomclass_model->delete_meet_part($id);
        
       
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
	}


}	