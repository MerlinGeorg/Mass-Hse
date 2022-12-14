<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_services extends CI_Controller {

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
    	$this->load->model('Service_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
    //   $this->load->model('Coursecat_model');
    // $categories = $this->Coursecat_model->allcategories();
    $a = array('content' => 'service_view');
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
	}

	public function add_service()
	{

       $fillimg = $this->input->post('image1');
         $srv_id = $this->input->post('servid');

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
            if(!empty($srv_id)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }


       $data2 = array(
        'service_id' => $srv_id,
        'service_name' => $this->input->post('servicename'),
        'service_desc'=> $this->input->post('servdesc'),
        'service_image' => $filename

        ); 

       if(empty($srv_id))
       {
        $resltserv = $this->Service_model->insert_serv($data2);	
	   }
	   else
	   {
        $resltserv = $this->Service_model->update_serv($data2,$srv_id);
	   }
       

       if ($resltserv==1)
       {
       	echo "success";
       }
       else
       {
       	echo "failed";
       }

    }

    public function display_service()
    {
    	
  	$res_service['res'] = $this->Service_model->get_services();
    

  	$this->load->view('service_table_view',$res_service);
    }

    public function delete_service()
    {
    	$srv_id = $this->input->post('id');
    $image_name = $this->input->post('img');

    

        
        
        $res = $this->Service_model->delete_serv($srv_id);
        
        $img_path = 'uploads/'.$image_name;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
    }

    public function editservice()
    {
    	 $id=$this->input->post('id');
		 	
		 	$res = $this->Service_model->edit_service($id);
			echo json_encode($res);
    }


}