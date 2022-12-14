<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_meterial extends CI_Controller {

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
    	$this->load->model('Admin_board_model');
    	$this->load->model('Studymeterial_model');
	}

	public function index()
	{ 
	    if(isset($_SESSION['username']))
	    {
	     
	    $cors = $this->Studymeterial_model->get_course();
	    $a = array('content' => 'studymeterial_view',
	                'cors' => $cors);
	    $this->load->view('admintemplate',$a);
	    }
	    else
	    {
	      redirect('Admin_board/login_admin');
	    }
   
	}


	public function add_module()
	{
		 $fillimg = $this->input->post('image1');
		 $fillimg2 = $this->input->post('image2');
         $m_id = $this->input->post('moduleid');
      


        $config['upload_path']="./uploads";
        $config['allowed_types']='pdf';
        $config['max_size']=0;
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

      }
      else
      {
            if(!empty($m_id)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }



      $config['upload_path']="./uploads";
        $config['allowed_types']='mp4';
        $config['max_size']=0;
        $config['max_width']=5024;
         $config['max_height']=2068;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);

         if(!$this->upload->do_upload('image_file1'))
        {
        	$error = array('error'=> $this->upload->display_errors());
        	print_r($error);
        }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        }

          if ( $_FILES['image_file1']['size'] == 0)
      {
      	
          $filename1 = $fillimg2;

      }else
      {
            if(!empty($m_id)){
          $unlink_path = 'uploads/'.$fillimg2;
          if(!empty($fillimg2)){
            unlink($unlink_path);
          }         
        }
        $filename1 = $data['upload_data']['file_name'];
      }





	   
	   $modulenumber = $this->input->post('modulenumber');
	   $modulecourse = $this->input->post('modulecourse');
       
       $todays = date("Y-m-d");

	  	$data2 = array(
        'module_name' => $this->input->post('modulename'),
        'module_no'=> $modulenumber,
        'module_course'=> $modulecourse,
        'module_file' =>  $filename,
        'module_video' =>  $filename1,
        'module_view_status'=>1,
        'module_status'=>1,
        'module_date'=>$todays
           
        ); 





        if($m_id!='')

        {
           $res= $this->Studymeterial_model->getsameMetereialNoCount($modulenumber,$modulecourse);
           $sameMetNo = $res->metcont;
           if($sameMetNo!=0)
           {
	           	$res1 = $this->Studymeterial_model->getsameMetereialNo($modulenumber,$modulecourse);
	           	$get_m_id = $res1->module_id;
	           	if($m_id==$get_m_id)
	           	{
	           		$res123 = $this->Studymeterial_model->update_meterial($m_id,$data2);

	           		if ($res123==1) 
	           		{
	           			echo "success";
	           		}
	           		else
	           		{
	           			echo "failed";
	           		}	
	           	}
	           	else
	           	{
	           		echo "exist";
	           	}
           }
           else
           {
                $res123 = $this->Studymeterial_model->update_meterial($m_id,$data2);

	           		if ($res123==1) 
	           		{
	           			echo "success";
	           		}
	           		else
	           		{
	           			echo "failed";
	           		}	
           }
        }	
        else
        {
        	 $res= $this->Studymeterial_model->getsameMetereialNoCount($modulenumber,$modulecourse);
             $sameMetNo = $res->metcont;
             if($sameMetNo!=0)
             {
             	echo "exist";
             }
             else
             {
             	$res123 = $this->Studymeterial_model->insert_meterial($data2);

	           		if ($res123==1) 
	           		{
	           			echo "success";
	           		}
	           		else
	           		{
	           			echo "failed";
	           		}	
             }	
        }	

      }



      public function display_meterials()
      {
      	
  		$res_college['res'] = $this->Studymeterial_model->get_meterial_list();
    

  		$this->load->view('get_meterial_view',$res_college);
      }

      public function editmeterial()
      {
      	  $id=$this->input->post('id');

      	  // echo $id;
      	  // die();
		 	
		 	$res = $this->Studymeterial_model->edit_meterial_part($id);
			echo json_encode($res);
      }

      public function delete_meterial()
      {
      	$m_id = $this->input->post('id');
        $image_name = $this->input->post('img');

    
        $res = $this->Studymeterial_model->delete_meterial_part($m_id);
        
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