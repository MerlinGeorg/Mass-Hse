<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qpaper_code extends CI_Controller {

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
    	$this->load->model('Qpaper_code_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      $this->load->model('Coursecat_model');
    $categories = $this->Coursecat_model->allcategories();
    $a = array('content' => 'qpaper_code_view',
                'cors' => $categories);
    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Admin_board/login_admin');
    }
   
	}

	public function insertQcode()
	{
        $qpaper_id = $this->input->post('qcodid');
		$qpaper_code = $this->input->post('qcode');
		$qexam_name = $this->input->post('qcodename');
		$qpaper_course = $this->input->post('qcodecourse');
         
         $todays = date("Y-m-d");

		$data1 = array(

			'qpaper_code'=>$qpaper_code,
			'qpaper_exam_name'=>$qexam_name,
			'qpaper_course'=>$qpaper_course,
			'qpaper_status'=>1,
			'qpaper_date'=>$todays

		);


		if($qpaper_id=='')
		{
			$res = $this->Qpaper_code_model->getsamecodecount($qpaper_code);
			$samecodecount = $res->codecount;
			if($samecodecount!=0)
			{
				echo "exist";
			}
			else
			{
				$res123 = $this->Qpaper_code_model->insertQpaper($data1);

				if ($res123==1) 
				{
					echo "true";
				}
				else
				{
					echo "false";
				}	
			}


		}
		else
		{
			$res = $this->Qpaper_code_model->getsamecodecount($qpaper_code);
			$samecodecount = $res->codecount;
			if($samecodecount!=0)
			{
				$rs321 =  $this->Qpaper_code_model->getsamecode($qpaper_code);
				$samecode_id = $rs321->qpaper_id;
				if($samecode_id==$qpaper_id)
				{
				 $res123 = $this->Qpaper_code_model->updateQpaper($qpaper_id,$data1);

				   if ($res123==1) 
					{
						echo "true";
					}
					else
					{
						echo "false";
					}	
				}
				else
				{
					echo "exist";
				}	
			}
			else
			{
				$res123 = $this->Qpaper_code_model->updateQpaper($qpaper_id,$data1);
					if ($res123==1) 
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


	public function display_qpaper_list()
	{

	  	$res_college['res'] = $this->Qpaper_code_model->get_qpaper_list();
	    

	  	$this->load->view('get_qpaper_view',$res_college);
	}

	public function change_stat()
	{
		$stat = $this->input->post('status');
		$id = $this->input->post('id');

		if($stat ==1)
		{
			$newstat =array('qpaper_status'=>2);
			$res = $this->Qpaper_code_model->changestat($id,$newstat);

			if ($res==1) 
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			$newstat =array('qpaper_status'=>1);
			$res = $this->Qpaper_code_model->changestat($id,$newstat);

			if ($res==1) 
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
	}


	public function editqpaper()
	{
			$id=$this->input->post('id');
		 	
		 	$res = $this->Qpaper_code_model->edit_qpaper_part($id);
			echo json_encode($res);
	}

	public function delete_qpaper()
	{
		$id = $this->input->post('id');

		$res = $this->Qpaper_code_model->delete_qpaper_part($id);

		if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
	}

}	