<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_slider extends CI_Controller {

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
    	$this->load->model('Homeslider_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      $this->load->model('Homeslider_model');
    // $categories = $this->Coursecat_model->allcategories();
    $a = array('content' => 'homeslider_view'
                );
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
	}



	public function add_slider()
	{
		
       $this->load->model('Homeslider_model');

         $fillimg = $this->input->post('image1');
         $slider_id = $this->input->post('slideid');
         // $course = $this->input->post('course');


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
            if(!empty($slider_id)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }
        	
        

        $s_priority = $this->input->post('sliderpriority');
        
        
        $data2 = array(
        'slider_id' => $slider_id,
        'slider_name'=> $this->input->post('slidename'),
        'slide_priority'=> $s_priority,
        'slide_image' =>  $filename
        
        // 'priority'=>0
        );
        

        $check_prpty = $this->Homeslider_model->check_pr_same($s_priority);
        $prcount = $check_prpty->prcount;

        
        if(!empty($slider_id))
        {

           $result123 = $this->Homeslider_model->getingexistpriority($slider_id);
           $exsliderid = $result123->slide_priority;

        if($exsliderid==$s_priority)
        {
            $result= $this->Homeslider_model->slider_update($slider_id,$data2);

             if ($result == true)
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
        if($prcount > 0)
		    {
		        echo "exist";
		    }	
        else
        {
        
		        // if(empty($slider_id))
		        // { 
		        // $result= $this->Homeslider_model->insert_slider($data2);
		        
		        // }
		        // else
		        // {
		        
		        $result= $this->Homeslider_model->slider_update($slider_id,$data2);
		        // }	
		       

		        if ($result == true)
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
  else
    {
    if($prcount > 0)
      {
            echo "exist";
      } 
    else
      {
        $result= $this->Homeslider_model->insert_slider($data2);

        if ($result == true)
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


	public function get_slider()
	{
		$result1['res'] = $this->Homeslider_model->display_slider();

      $this->load->view('get_slider_view',$result1);
	}

	public function editslider()
	{
		    $sid=$this->input->post('id');
		 	
		 	$res = $this->Homeslider_model->get_edit_slider($sid);
			echo json_encode($res);
	}
   
   public function delete_slider()
   {
   	  $slide_id = $this->input->post('id');
    $image_name = $this->input->post('img');

    

        $this->load->model('Homeslider_model');
        
        $res = $this->Homeslider_model->delete_slider($slide_id);
        
        $img_path = 'uploads/'.$image_name;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
   }

}