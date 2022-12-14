<?php
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
    // echo 'rr';
// die();
		// $this->load->view('admin_login_view');
    // $this->load->view('adminhome_view');
    if(isset($_SESSION['username'])){
      $a = array('content' => 'admission_view');
      $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
        

		

	}
	
		public function test()
	{ 

		$this->load->view('test');

	}
	

	
	

	public function login_admin()
	{
	   $this->load->model('Admin_board_model');
	   $this->load->library('session');	
	   $result = $this->Admin_board_model->validate_login();

	   if(!$result)
	   {
	   	$this->load->view('admin_login_view');
	   	// print_r("<span style='color:red;'><h4><b>Login Failed</b></h4>.<br><span style='color:black'>invalid username or password</span></span>");
	   	?>
        <!-- <script type="text/javascript">
        	alert("login Failed.")
        </script> -->

	   	<?php
	   }
	   else
	   {
	 //   	$a = array('content' => 'admission_view');
		// $this->load->view('admintemplate',$a);
		// $this->react();

		redirect('Admin_board/react');
		print_r("welcome");
	   }
	}

	public function react()
	{
		$this->load->model('Admin_board_model');
		// $a['only'] = $this->Admin_board_model->display_course_only();
     
     $cours_cat= $this->Admin_board_model->get_cours_cat(); 


    if(isset($_SESSION['username'])){
      $a = array('content' => 'course_view',
                   'courscat' => $cours_cat
    );
      $this->load->view('admintemplate',$a);
    }	
    else{
      redirect('Admin_board/login_admin');
    }
	}
	
	 public function doit_upload()
       {
         $this->load->model('Admin_board_model'); 

         $fillimg = $this->input->post('image1');
         $clgid = $this->input->post('colid');


        $config['upload_path']="./uploads";
        $config['allowed_types']='jpg|jpeg|gif|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('image_file')){
        	$error = array('error'=> $this->upload->display_errors());
          // $fill = $fillimg;
        }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        // $fill = $data;
        }
          
         if ( $_FILES['image_file']['size'] == 0)
      {
          $filename = $fillimg;

      }else{
            if(!empty($clgid)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }
        	

          
          
        	// $pico="";	
        $data1 = array(
        'course' => $this->input->post('name'),
        'sub_course1'=>$this->input->post('course1'),
        'sub_course2' => $this->input->post('course2'),
        'sub_course3' =>$this->input->post('course3'),
        'sub_course4' => $this->input->post('course4'),
        'picture' => $filename,
        
        'priority'=> 0 
        ); 

      
        


        
        if(empty($clgid))
        { 
        $output= $this->Admin_board_model->insert_admission($data1);
        }
        else
        {
        
        $output= $this->Admin_board_model->col_update($clgid,$data1);
        }

        	
        
   

    

    

        if ($output == true)
         {
           echo "true"; 
         }
         else
         {
         	echo "false";
         }	
        }


  public function display_college()
  {
  	$this->load->model("Admin_board_model");
  	$res_college['res'] = $this->Admin_board_model->get_college();

  	$this->load->view('display_college',$res_college);
  }


  public function get_course_only()
  {
  	$this->load->model('Admin_board_model');
  	$onlycourse['only'] = $this->Admin_board_model->display_course_only();
  	$this->load->view('admission_view',$onlycourse);
  }
    
     public function deletecol()
		{
				$colid = $this->input->post('id');


				$this->load->model('Admin_board_model');
				
				$res = $this->Admin_board_model->delete_colg($colid);
	 				
					 
				if($res == 1)
				{		
					echo "success";
				}else{
				
					echo "failed";
				}

				
		}   


		public function editcol()
		  {
		  	$id=$this->input->post('id');
		 	$this->load->model('Admin_board_model');
		 	$res = $this->Admin_board_model->edit_colg($id,'course');
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

    public function pro_check()
    	{
           $this->load->model('Admin_board_model');
           $id=$this->input->post('id');
           $status=$this->input->post('status');

           if($status=='high')
           {
           	$res1 = $this->Admin_board_model->set_pro(0,$id);
           	echo $res1;

           }
           else
           {
           	$res1 = $this->Admin_board_model->set_pro(1,$id);
           	echo $res1;
           }

    	}

	

}


