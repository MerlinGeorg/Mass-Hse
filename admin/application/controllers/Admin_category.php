<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_category extends CI_Controller {

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
 //    	$this->load->model('Category_model');
	// }

	public function index()
	{ 
    if(isset($_SESSION['username'])){
      $this->load->model('Category_model');
    $a = array('content' => 'course_cat_view');
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
	}

	 public function add_category()
       {
         $this->load->model('Category_model'); 

         $fillimg = $this->input->post('image1');
         $catid = $this->input->post('catid');
         $catname = $this->input->post('catname');


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
        $data2 = array(
        'cat_name' => $catname,
        'cat_image' =>  $filename
        ); 
        
        // echo $fillimg;
        // die();
        
        if(empty($catid))
        { 
        $result= $this->Category_model->insert_category($data2);
        }
        else
        {
         


        $result= $this->Category_model->update_category($catid,$data2);
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

         public function display_category_part()
  {
  	$this->load->model("Category_model");
  	$res_college['res'] = $this->Category_model->get_category_part();

  	$this->load->view('get_category_view',$res_college);
  }

  public function editcategory()
  {
  	        $id=$this->input->post('id');
		 	$this->load->model('Category_model');
		 	$res = $this->Category_model->edit_cat_part($id,'category');
			echo json_encode($res);
  }

  public function deletecategory()
  {
  	$colgid = $this->input->post('id');


				$this->load->model('Category_model');
				
				$res = $this->Category_model->delete_cat_part($colgid);
	 				
					 
				if($res == 1)
				{		
					echo "success";
				}else{
				
					echo "failed";
				}
  }


  // public function pro_check_colg()
  // {
  //   $this->load->model('Category_model');
  //          $id=$this->input->post('id');
  //          $status=$this->input->post('status');

  //          if($status=='high')
  //          {
  //           $res2 = $this->Category_model->set_pro1(0,$id);
  //           echo $res2;

  //          }
  //          else
  //          {
  //           $res2 = $this->Category_model->set_pro1(1,$id);
  //           echo $res2;
  //          }
  // }


}