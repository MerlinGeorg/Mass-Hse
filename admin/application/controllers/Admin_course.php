<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_course extends CI_Controller {

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
	// function __construct()
	//  {
 //    	parent::__construct();
 //    	$this->load->model('Admin_board_model');
	// }
	public function index()
	{ 

		
        $a = array('content' => 'course_view');
		$this->load->view('admintemplate',$a);

		

	}

	
	
	 public function reg_course()
       {
         $this->load->model('Admin_board_model'); 
         $fillimg = $this->input->post('image1');


        $config['upload_path']="./uploads";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('image_file')){
        	$error = array('error'=> $this->upload->display_errors());
        }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        }

          if ( $_FILES['image_file']['size'] == 0)
      {
          $filename = $fillimg;

      }else{
            if(!empty($colgid)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }



        	
        	// $pico="";	
        $data3 = array(

        'course' => $this->input->post('corsname'),
        'course_cat'=>$this->input->post('corscat'),
        'course_desc'=>$this->input->post('cousedesc'),
        'course_code'=>$this->input->post('corscode'),
        'course_pic'=>$filename
        
        ); 


        $crsid = $this->input->post('corsid');
        
	        if(empty($crsid))
	        { 
	        $result= $this->Admin_board_model->insert_course($data3);
	        }
	        else
	        {
	        
	        $result= $this->Admin_board_model->crs_update($crsid,$data3);
	        }	
	        

	        if ($result == true)
	         {
	           echo "true"; 
	         }
	         else
	         {
	         	echo "false";
	         }	
        }


  public function display_course()
  {
  	$this->load->model("Admin_board_model");
  	$res_course['res'] = $this->Admin_board_model->get_course();

  	$this->load->view('display_course',$res_course);
  }
    
     public function deletecors()
		{
				$corsid = $this->input->post('id');
				$image = $this->input->post('id');


				$this->load->model('Admin_board_model');
				
				$res = $this->Admin_board_model->delete_cors($corsid);

				 $img_path = 'uploads/'.$image;

                 unlink($img_path);
	 				
					 
				if($res == 1)
				{		
					echo "success";
				}else{
				
					echo "failed";
				}

				
		}   


		public function editcors()
		  {
		  	$id=$this->input->post('id');
		 	$this->load->model('Admin_board_model');
		 	$res = $this->Admin_board_model->edit_cors($id,'course');
			echo json_encode($res);
		  }

        public function do_logout()
    {
        $this->session->sess_destroy();
      // $this->session->unset_userdata('id');
    //      $fetch1['data1'] = $this->Main_model->display1();
    //     $fetch1['data2'] = $this->Main_model->display2();
    // $this->load->view('index_test',$fetch1);
        $this->load->view('admin_login_view');
    }

	

}


