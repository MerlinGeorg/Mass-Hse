<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_area extends CI_Controller {

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
    	$this->load->model('Company_area_model');
	}
	public function index()
	{ 
    // echo 'rr';
// die();
		// $this->load->view('admin_login_view');
    // $this->load->view('adminhome_view');
    if(isset($_SESSION['username'])){
     $courses = $this->Company_area_model->getcourses();
    $services = $this->Company_area_model->getservices();	
      $a = array('content' => 'company_area_view',

      	          'cors'=>$courses,
      	          'serv'=>$services
  );
      $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Admin_board/login_admin');
    }
        

		

	}


	public function add_Company()
	{
		$fillimg = $this->input->post('image1');
         $compid = $this->input->post('compid');

         $certtype = $this->input->post('compctype');

         $projctno = $this->input->post('compproject');
         


        $config['upload_path']="./uploads";
        $config['allowed_types']='pdf';
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
            if(!empty($compid)){
          $unlink_path = 'uploads/'.$fillimg;
          if(!empty($fillimg)){
            unlink($unlink_path);
          }         
        }
        $filename = $data['upload_data']['file_name'];
      }



       $tdate = date('Y-m-d');


       if($certtype=='Service')
         {
         	$courseorserv = $this->input->post('compservice');

         	$data1= array(
            'company_regno'=>$this->input->post('compregno'),
	     	'company_name'=>$this->input->post('compname'),
	     	'company_project'=>$projctno,
	     	'company_certtype'=>$certtype,
	     	'company_cors'=>'N/A',
	     	'company_serv'=>$courseorserv,
	     	'company_location'=>$this->input->post('complocation'),
	     	'company_certificate'=>$filename,
	     	'company_date'=>$tdate
	         );
         }
         else
         {
         	 if($certtype=='Course')
         	 {
            $courseorserv = $this->input->post('compcourse');

            $data1= array(
            'company_regno'=>$this->input->post('compregno'),
	     	'company_name'=>$this->input->post('compname'),
	     	'company_project'=>$projctno,
	     	'company_certtype'=>$certtype,
	     	'company_cors'=>$courseorserv,
	     	'company_serv'=>'N/A',
	     	'company_location'=>$this->input->post('complocation'),
	     	'company_certificate'=>$filename,
	     	'company_date'=>$tdate
	         );

             }
         }
        
      
    

     if($compid=='')
     {

        $res1=$this->Company_area_model->getprojectcont($projctno);
        $prjctnocount = $res1->projctnocount;

        if($prjctnocount==0)
        {

         	$res = $this->Company_area_model->insertcompany($data1);

         	if($res==1)
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
        
        echo "projectnoexist";
       }
     }
     else
     {
        $res1=$this->Company_area_model->getprojectcont($projctno);
        $prjctnocount = $res1->projctnocount;

        if($prjctnocount==0)
        {
         	$res = $this->Company_area_model->updatecompany($compid,$data1);

         	if($res==1)
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
            $res2 = $this->Company_area_model->getexistprojctno($projctno);
            $existprjct_id = $res2->company_id;
            if($existprjct_id==$compid)
            {
               $res = $this->Company_area_model->updatecompany($compid,$data1);

                if($res==1)
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
                echo "projectnoexist";
            }
        }    
     }	


	}


	public function getcompany()
	{
		$res['res'] = $this->Company_area_model->getcomp();

		$this->load->view('get_company_view',$res);

	}

	public function editcompany()
		  {
		  	$id=$this->input->post('id');
		 	
		 	$res = $this->Company_area_model->edit_comp($id,'company');
			echo json_encode($res);
		  }

    public function delete_comp()
    {
    	$comp_id = $this->input->post('id');
        $image_name = $this->input->post('img');

    
       echo $image_name;
        die();
        
        $res = $this->Company_area_model->delete_cmop_part($comp_id);
        
        $img_path = 'uploads/'.$image_name;

        unlink($img_path);  
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
    }	

    public function search_compregno()
    {
        if (isset($_GET['term'])) {
         $term = $this->input->get('term');

        
        
        $result= $this->Company_area_model->search_c_regno($term);
    
             foreach ($result as $row)
             {
                 $arr_result[] = $row->company_info_regno;
             }
              echo json_encode($arr_result);
        }  
    }	 

    public function getcname()
    {
        $cregno = $this->input->post('cregno');

        $res1 = $this->Company_area_model->getcomname($cregno);
        
        if($res1!='0')
        {
        $compname = $res1->company_info_name;
        echo $compname;
        }
        else
        {
            echo "No match found";
        }  
        
    } 



}
