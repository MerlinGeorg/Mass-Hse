<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer_banner extends CI_Controller {

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
    	$this->load->model('Offerbanner_model');
	}

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      $this->load->model('Coursecat_model');
    // $categories = $this->Coursecat_model->allcategories();
    $a = array('content' => 'offerbanner_view'
                );
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
	}


	public function add_banner()
	{
		$this->load->model('Offerbanner_model'); 

         $fillimg = $this->input->post('image1');
         $ban_id = $this->input->post('banid');
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
            if(!empty($colgid)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }
        	
        //  echo $st_id;
        // die();
         
         // $todays = date("Y-m-d");

        	// $pico="";	
        $data2 = array(
        'ban_id' => $ban_id,
        'ban_name'=> $this->input->post('baname'),
        'ban_image' =>  $filename,
        
        // 'priority'=>0
        ); 
        

        
        if(empty($ban_id))
        { 
        $result= $this->Offerbanner_model->insert_banner($data2);
        
        }
        else
        {
        
        $result= $this->Offerbanner_model->banner_update($ban_id,$data2);
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

	public function get_banner()
	{
      $result1['res'] = $this->Offerbanner_model->display_banner();

      $this->load->view('get_banner_view',$result1);
	}

	public function editbanner()
	{
		// $result1['res'] = $this->Offerbanner_model->display_banner();

		$id=$this->input->post('id');
		 	
		 	$res = $this->Offerbanner_model->get_edit_banner($id);
			echo json_encode($res);
	}


}