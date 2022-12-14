<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_qpaper extends CI_Controller {

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
    	$this->load->model('Admin_qpaper_model');
    	$this->load->model('Coursecat_model');
	}

	public function index()
	{ 
	    if(isset($_SESSION['username']))
	    {
	      	$this->load->model('Coursecat_model');
		    $categories = $this->Coursecat_model->allcategories();
		    $a = array('content' => 'admin_qpaper_view',
		                'corses' => $categories);
		    $this->load->view('admintemplate',$a);
	    }
	    else
	    {
	      	redirect('Admin_board/login_admin');
	    }
   
	}


	public function search_qpapercode()
	{
		if (isset($_GET['term'])) {
         $term = $this->input->get('term');

        
         $this->load->model('Admin_qpaper_model'); 
     	  $result= $this->Admin_qpaper_model->search_qpaper_code($term);
    
             foreach ($result as $row)
             {
                 $arr_result[] = $row->qpaper_code;
             }
              echo json_encode($arr_result);
        }    
	}

	public function getqpaperdtls()
	{
		$qcode = $this->input->post('qcode');

		$res= $this->Admin_qpaper_model->getqpaperdtls($qcode);
		echo json_encode($res);
	}


	public function add_question()
	{
		$qstn_id = $this->input->post('qid');
		$qstn_course = $this->input->post('qcourse');
		// echo $qstn_course;
		// die();

		$today = date('Y-m-d');

		$data1=array(

         'questions_xam'=>$this->input->post('qxam'),
         'questions_qcode'=>$this->input->post('qcode'),
         'questions_course'=>$qstn_course,
         'questions_question'=>$this->input->post('qquestion'),
         'Option_A'=>$this->input->post('qoptiona'),
         'Option_B'=>$this->input->post('qoptionb'),
         'Option_C'=>$this->input->post('qoptionc'),
         'Option_D'=>$this->input->post('qoptiond'),
         'questions_answer'=>$this->input->post('qanswer'),
         'questions_status'=>1,
         'questions_date'=>$today

		);

	  if($qstn_id!='')	
	  {
	  	$res = $this->Admin_qpaper_model->update_question($qstn_id,$data1);

	  	 if ($res == 1)
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
	  	$res = $this->Admin_qpaper_model->insert_question($data1);

	  	 if ($res == 1)
                 {
                   echo "true"; 
                 }
                 else
                 {
                 	echo "false";
                 }	
	  }

	}

    public function get_questions()
    {
    	
  	   $res_college['res'] = $this->Admin_qpaper_model->get_questions_list();
    

  	   $this->load->view('get_questions_view',$res_college);
    }

    public function editquestions()
    {
    	    $id=$this->input->post('id');
		 	
		 	$res = $this->Admin_qpaper_model->edit_qustion_part($id);
			echo json_encode($res);
    }


    public function stat_check()
    {
    	$stat = $this->input->post('status');
		$id = $this->input->post('id');

		if($stat ==1)
		{
			$newstat =array('questions_status'=>2);
			$res = $this->Admin_qpaper_model->changestat($id,$newstat);

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
			$newstat =array('questions_status'=>1);
			$res = $this->Admin_qpaper_model->changestat($id,$newstat);

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


    public function delete_quest()
    {
    	$id = $this->input->post('id');

    	$res = $this->Admin_qpaper_model->deleteQst($id);
        
        if($res==1)
        {
        	echo "success";
        }
        else
        {
        	echo "failed";
        }	

    }


}	