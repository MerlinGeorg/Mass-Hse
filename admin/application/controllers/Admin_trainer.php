<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_trainer extends CI_Controller {

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
    	$this->load->model('Admin_trainer_model');
	}

	public function index()
	{ 
    // echo 'rr';
// die();
		// $this->load->view('admin_login_view');
    // $this->load->view('adminhome_view');
    if(isset($_SESSION['username'])){
      $courses = $this->Admin_trainer_model->getcourselist();	
      $a = array('content' => 'admin_trainer_view.php',
      	          'corslist'=> $courses);
      $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }

    }
      

    public function insert_trainer()
    {

    
      // $this->load->model('Admin_board_model'); 

         $fillimg = $this->input->post('image1');
         $tr_id = $this->input->post('trainid');
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
            if(!empty($tr_id)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }
        	
        //  echo $st_id;
        // die();
        
         date_default_timezone_set("UTC");
         
         $todays = date("Y-m-d");

         // $trainer_civilId = $this->input->post('tcivilid'); 

         $trainer_mailid = $this->input->post('tmail');


          $data1 =array
           (
              'trainer_id'=> $tr_id,
              'trainer_name'=> $this->input->post('tfname'),
              
              'trainer_mailid'=>$trainer_mailid,
              'trainer_gender'=>$this->input->post('tgender'),
              'trainer_dob'=>$this->input->post('tdob'),
              'trainer_phone'=>$this->input->post('tphno'),
              'trainer_password'=>$this->input->post('tpassword'),
              'trainer_qualification'=>$this->input->post('tqualification'),
              'trainer_pic'=>$filename,
              'trainer_teaching1'=>$this->input->post('tcourse1'),
              
              'ins_date'=>$todays
           );

      $check = $this->Admin_trainer_model->check_civil_mail($trainer_mailid);

        // echo $check;

         if ($check== 1) 
         {
         	

           if(empty($tr_id))
           {
             $res1 = $this->Admin_trainer_model->insertTrainer($data1);
           }
           else
           {
             $res1 = $this->Admin_trainer_model->updateTrainer($data1,$tr_id);
           }


           if ($res1==1) {
           	echo "success";
           }
           else
           {
           	echo "failed";
           }


         }
        
         else
         {
         	  $res143 = $this->Admin_trainer_model->etMailidSameTrainer($trainer_mailid);

            $exist_id = $res143->trainer_id;

            if($exist_id==$tr_id)
            {
              // echo "same";

            $res1 = $this->Admin_trainer_model->updateTrainer($data1,$tr_id);
             
             if ($res1==1) {
            echo "success";
             }
             else
             {
            echo "failed";
             }


            }
            else
            {
              echo "mail exist";
            }  

         }

      }  

   public function display_trainer_list()
   {
   	$res1['res'] = $this->Admin_trainer_model->getTainers();

   	// $res1->num_rows();

   
    // foreach ($res1 as $row) {
    	
    // 	$tc1 = $row->trainer_teaching1;

    // 	$this->Admin_trainer_model->gettc1($tc1);
    // }



   	$this->load->view('show_trainers',$res1);
   }  


   public function delete_trainer()
  {
    $tr_id = $this->input->post('id');
    $image_name = $this->input->post('img');

    

        
        
         $res = $this->Admin_trainer_model->delete_trainer($tr_id);
        
        $img_path = 'uploads/'.$image_name;

        // echo($image_name);
        // die();

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
  }
 

 public function editTrainer()
 {
      $id=$this->input->post('id');
      $this->load->model('Admin_trainer_model');
      $res = $this->Admin_trainer_model->edit_trainer_part($id);
      echo json_encode($res);
 }



}    