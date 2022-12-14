<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
      $this->load->model('Certification_model');
  }

  public function index()
  { 
    if(isset($_SESSION['username'])){
      $this->load->model('Certification_model');
    // $categories = $this->Coursecat_model->allcategories();
    $courses = $this->Certification_model->getcourses();
    $services = $this->Certification_model->getservices();
    $a = array('content' => 'certification_view',
                'cors'   => $courses,
                'service'=> $services
                );
    $this->load->view('admintemplate',$a);
    }else{
      redirect('Admin_board/login_admin');
    }
   
  }

  public function search_regno()
  {
    if (isset($_GET['term'])) {
         $term = $this->input->get('term');

        
         $this->load->model('Certification_model'); 
        $result= $this->Certification_model->search_s_regno($term);
    
             foreach ($result as $row)
             {
                 $arr_result[] = $row->pass_no;
             }
              echo json_encode($arr_result);
        }      
  }

  public function get_studentname()
  {
    $regno = $this->input->post('s_reg');
    $ress = $this->Certification_model->geting_s_name($regno);

    $fname = $ress->first_name;
    $lname = $ress->last_name;

    echo $fname.' '.$lname;

  }

  public function add_certification()
  {
       
       $this->load->model('Certification_model'); 

      //    $fillimg = $this->input->post('image1');
         $cert_id = $this->input->post('cerid');
         


      //   $config['upload_path']="./uploads";
      //   $config['allowed_types']='pdf|xls|docx';
      //   $config['encrypt_name'] = TRUE;
      //   $this->load->library('upload',$config);
      //   $data = array('upload_data' => $this->upload->data());
      //   $this->upload->initialize($config);
        
      //   if(!$this->upload->do_upload('image_file')){
      //    $error = array('error'=> $this->upload->display_errors());
      //   }
      //   else
      //   {
      //   $data = array('upload_data' => $this->upload->data());
      //   }

      //     if ( $_FILES['image_file']['size'] == 0)
      // {
      //     $filename = $fillimg;

      // }else{
      //       if(!empty($cert_id)){
      //     $unlink_path = 'uploads/'.$fillimg;
      //     if(!empty($fillimg)){
      //       unlink($unlink_path);
      //     }         
      //   }
      //   $filename = $data['upload_data']['file_name'];
      // }
          
        //  echo $st_id;
        // die();


       $cer['pass_no'] = $this->input->post('cregno');
       $cer['st_name'] = $this->input->post('cername');
       $cer['topic'] = $this->input->post('cert_name');
       $cer['t_code'] = $this->input->post('cert_code');
       $cer['comp_date'] = $this->input->post('cert_date');

       return $cer;

        
        // date_default_timezone_set('UTC');
         
        //  $todays = date("Y-m-d");

        //  // $pico="";  
        // $data2 = array(
        // 'cert_id' => $cert_id,
        // 'st_regno'=> $this->input->post('cregno'),
        // 'st_name' => $this->input->post('cername'),
        // 'st_cert_name'=>$this->input->post('cert_name'),
        // 'cert_file' =>  $filename,
        // 'c_ins_date'=> $todays
        // // 'priority'=>0
        // ); 
        

        
        // if(empty($cert_id))
        // { 
        // $result= $this->Certification_model->insert_certification($data2);
        
        // }
        // else
        // {
        
        // $result= $this->Certification_model->certification_update($cert_id,$data2);
        // }  
       

        // if ($result == true)
        //  {
        //    echo "true"; 
        //  }
        //  else
        //  {
        //    echo "false";
        //  } 

  }


  public function get_cert()
  {
    $this->load->model("Certification_model");
        $res_college['res'] = $this->Certification_model->get_students_cert();
    

        $this->load->view('get_certication_view',$res_college);
  }


  public function editcert()
  {
         $cr_id=$this->input->post('id');
      $this->load->model('Certification_model');
      $res = $this->Certification_model->edit_certicicate($cr_id);
      echo json_encode($res);
  }


  public function delete_cert()
  {
    $cr_id=$this->input->post('id');
    $cr_file=$this->input->post('img');

    $res = $this->Certification_model->delete_certificate($cr_id);
        
        $img_path = 'uploads/'.$cr_file;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }
        else
        {
        
          echo "failed";
        }
  }

  public function get_corscode()
  {
    $corsename = $this->input->post('corsename');

    $res123 = $this->Certification_model->getcorsecode($corsename);

    $corsecode = $res123->course_code;

    echo $corsecode;
  }




} 