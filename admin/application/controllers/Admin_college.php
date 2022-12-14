<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_college extends CI_Controller {

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
    if(isset($_SESSION['username'])){
      $this->load->model('Coursecat_model');
    $categories = $this->Coursecat_model->allcategories();
    $a = array('content' => 'college_view',
                'categories' => $categories);
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
	}

	 public function add_collg()
       {
         $this->load->model('Admin_board_model'); 

         $fillimg = $this->input->post('image1');
         $st_id = $this->input->post('colgid');
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
        
        date_default_timezone_set("UTC");
         
         $todays = date("Y-m-d");

         $stud_civilId = $this->input->post('civilid');
         $stud_pasport = $this->input->post('passportno');
          

         


         

      //   echo $st_id;

      // die();
        
        if($st_id!='')
        {

          $res124 = $this->Admin_board_model->checkCivilId($stud_civilId);

          $countcivil = $res124->civilcount;

          $rest321 = $this->Admin_board_model->checkpassprt($stud_pasport);
           $passprtcount = $rest321->passportcount;
          
           $data2 = array(
        'student_id' => $st_id,
        'student_civil_id' => $stud_civilId,
        'student_reg'=> $this->input->post('regno'),
        'pass_no'=> $this->input->post('passportno'),
        'first_name' => $this->input->post('fname'),
        'last_name'=>$this->input->post('lname'),
        'gender'=>$this->input->post('gender'),
        'dob'=>$this->input->post('dob'),
        'email'=>$this->input->post('mail'),
        'phno'=>$this->input->post('phno'),
        'student_pwd'=>$this->input->post('spassword'),
        'qualification'=>$this->input->post('qualification'),
        'p_course'=>$this->input->post('pcourse'),
        'picture' =>  $filename,
        'ins_date'=> $todays
        // 'priority'=>0
        ); 

          $reslt24 = $this->Admin_board_model->civilEditCheck($stud_civilId);
          if ($reslt24=='')
          {
            $getingstud_id = $st_id;
            $getingstud_civil_id = $stud_civilId;
          }
          else
          {
          $getingstud_id = $reslt24->student_id;
          $getingstud_civil_id = $reslt24->student_civil_id;
          }

          
          $reslt456 = $this->Admin_board_model->passprteditcheck($stud_pasport);
          if ($reslt456=='')
          {
            $getingstud_id = $st_id;
            $getingstud_passprt = $stud_pasport;
          }
          else
          {
           $getingstud_id = $reslt456->student_id;
           $getingstud_passprt = $reslt456->pass_no;

          //     echo $getingstud_passprt;
          // die();
          }


          if($st_id==$getingstud_id)
          {
           

                 if($getingstud_civil_id == $stud_civilId)
                 {

                   if($getingstud_passprt == $stud_pasport)
                   {
                    $result= $this->Admin_board_model->student_update($st_id,$data2);

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
                 else
                 {
                     
                     if($countcivil == 0)
                     {
                        if($passprtcount == 0)
                        {
                           $result= $this->Admin_board_model->student_update($st_id,$data2);
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
                            echo "passport exist";
                         }
                      
                     }
                     else
                     {
                       echo "civi id exist";
                     }
                 }
           }
           else
           {
            echo "exist";
           } 

        }
        else
        {
          $res124 = $this->Admin_board_model->checkCivilId($stud_civilId);

        $countcivil = $res124->civilcount;

        if ($countcivil != 0) 
        {
          echo "civi id exist";
        }
        else
        { 
           $rest321 = $this->Admin_board_model->checkpassprt($stud_pasport);
           $passprtcount = $rest321->passportcount;
            if($passprtcount==0)
              {

               $data2 = array(
            'student_id' => $st_id,
            'student_civil_id' => $stud_civilId,
            'student_reg'=> $this->input->post('regno'),
            'pass_no'=> $this->input->post('passportno'),
            'first_name' => $this->input->post('fname'),
            'last_name'=>$this->input->post('lname'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'email'=>$this->input->post('mail'),
            'phno'=>$this->input->post('phno'),
            'student_pwd'=>$this->input->post('spassword'),
            'qualification'=>$this->input->post('qualification'),
            'p_course'=>$this->input->post('pcourse'),
            'picture' =>  $filename,
            'ins_date'=> $todays
            // 'priority'=>0
            ); 
            	// $pico="";	
          
            // if(empty($st_id))
            // { 
            $result= $this->Admin_board_model->insert_student($data2);
            
            // }
            // else
            // {
            
            // $result= $this->Admin_board_model->student_update($st_id,$data2);
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
             else
             {
              echo "passport exist";
             }
         }
      }
  }

         public function display_studets_list()
  {
  	$this->load->model("Admin_board_model");
  	$res_college['res'] = $this->Admin_board_model->get_students_list();
    

  	$this->load->view('get_college_view',$res_college);
  }


  public function editcolg()
  {
  	  $id=$this->input->post('id');
		 	$this->load->model('Admin_board_model');
		 	$res = $this->Admin_board_model->edit_colg_part($id);
			echo json_encode($res);
  }

  // public function deletecolg()
  // {
  // 	$colgid = $this->input->post('id');


		// 		$this->load->model('Admin_board_model');
				
		// 		$res = $this->Admin_board_model->delete_colg_part($colgid);
	 				
					 
		// 		if($res == 1)
		// 		{		
		// 			echo "success";
		// 		}else{
				
		// 			echo "failed";
		// 		}
  // }


  public function delete_student()
  {
    $st_id = $this->input->post('id');
    $image_name = $this->input->post('img');

    

        $this->load->model('Admin_board_model');
        
        $res = $this->Admin_board_model->delete_colg_part($st_id);
        
        $img_path = 'uploads/'.$image_name;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
  }


  public function pro_check_colg()
  {
    $this->load->model('Admin_board_model');
           $id=$this->input->post('id');
           $status=$this->input->post('status');

           if($status=='high')
           {
            $res2 = $this->Admin_board_model->set_pro1(0,$id);
            echo $res2;

           }
           else
           {
            $res2 = $this->Admin_board_model->set_pro1(1,$id);
            echo $res2;
           }
  }

  public function auto_regno()
  {
    // $autoin = mt_rand();
    // echo $autoin;
    
    $tdate= date('Ymd');

    $this->load->model('Admin_board_model');
    $res3 = $this->Admin_board_model->get_st_count();
    
    // if($res3 == '0')
    // {
    //  $stdlastid = 0;
    // }
    // else
    // {
    // $stdlastid = $res3->student_id+1;
    // }
    
    // date_default_timezone_set("UTC");
    // $today = date("ymd");
    // $mass = "MHC";
    // echo $unique =$mass . $today . $stdlastid;
    
    if($res3 == '0')
    {
      $unique = $tdate."_010_MASS";
    }
    else
    {
      $last_s_reg = $res3->student_reg; 
    

    $exp_s_reg = explode('_',$last_s_reg);

    $expcount = count($exp_s_reg);

    $midno='';

    for($i=0;$i<$expcount;$i++)
    {
      if($i==1)
      {
        $midno.=$exp_s_reg[$i];
      }
    }

    $midno=$midno+1;

    $unique=$tdate."_0".$midno."_MASS";
    }

     echo $unique;


  }


}