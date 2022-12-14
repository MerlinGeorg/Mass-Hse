<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_companyinfo extends CI_Controller {

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
    	$this->load->model('Admin_companyinfo_model');
	}
	public function index()
	{ 
    // echo 'rr';
// die();
		// $this->load->view('admin_login_view');
    // $this->load->view('adminhome_view');
	    if(isset($_SESSION['username'])){
	    //  $courses = $this->Company_area_model->getcourses();
	    // $services = $this->Company_area_model->getservices();	
	      $a = array('content' => 'admin_companyinfo_view',
	      	          
	                 );
	      $this->load->view('admintemplate',$a);
	    }
	    else
	    {
	      redirect('Admin_board/login_admin');
	    }

	}

	public function reg_Company()
	{
		$compinfo_id = $this->input->post('compinfoid');

		$companyregno = $this->input->post('compreg');
		$compmail = $this->input->post('compmail');
		$ins_date=date('Y-m-d');

		$data1=array(
           'company_info_regno'=>$companyregno,
           'company_info_pwd'=>$this->input->post('comppass'),
           'company_info_name'=>$this->input->post('compname'),
           'company_info_mail'=>$compmail,
           'company_info_phon'=>$this->input->post('compphon'),
           'company_info_date'=>$ins_date
           );

		if($compinfo_id=='')
		{
			$res1 = $this->Admin_companyinfo_model->getregcount($companyregno,$compmail);
			// $sameregcount = $res1->sameregcount;

			if($res1=='0')
			{
				$res123 = $this->Admin_companyinfo_model->insertcompany($data1);

				if($res123==1)
				{
					echo "success";
				}
				else
				{
					echo "failed";
				}	
			}
			elseif ($res1=='mailexist') 
			{
				echo "mailexist";
			}
			else
			{
				echo "regnoexist";
			}
		}
		else
		{
			$res1 = $this->Admin_companyinfo_model->getregcount($companyregno,$compmail);
			// $sameregcount = $res1->sameregcount;

			if($res1=='0')
			{
				$res123 = $this->Admin_companyinfo_model->updatecompany($data1,$compinfo_id);

				if($res123==1)
				{
					echo "success";
				}
				else
				{
					echo "failed";
				}	
			}
			elseif ($res1=='mailexist') 
			{
				$res3 = $this->Admin_companyinfo_model->getsamemail($compmail);

				$existmailid = $res3->company_info_id;

				if($existmailid==$compinfo_id)
				{
					$res123 = $this->Admin_companyinfo_model->updatecompany($data1,$compinfo_id);

					if($res123==1)
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
					echo "mailexist";
				}
			}
			else
			{
				$res2 = $this->Admin_companyinfo_model->getsamereg($companyregno);

				$existregid = $res2->company_info_id;

				if($existregid==$compinfo_id)
				{
					$res123 = $this->Admin_companyinfo_model->updatecompany($data1,$compinfo_id);

					if($res123==1)
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
					echo "regnoexist";
				}	

			}
		}
	}

	public function getcompanyinfo()
	{
		$res['res'] = $this->Admin_companyinfo_model->getcomp();

		$this->load->view('get_companyinfo_view',$res);
	}

	public function editcompany()
	{
		$id=$this->input->post('id');
		 	
		 	$res = $this->Admin_companyinfo_model->edit_comp($id);
			echo json_encode($res);
	}

	public function delete_comp()
	{
		$comp_id = $this->input->post('id');
       

        $res = $this->Admin_companyinfo_model->delete_cmop_part($comp_id);
        
           
        if($res == 1)
        {   
          echo "success";
        }else{
        
          echo "failed";
        }
	}

	public function auto_regno()
	{

    $tdate= date('Ymd');

    
    $res3 = $this->Admin_companyinfo_model->get_c_count();
    
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
      $unique = $tdate."_010_COMP_MASS";
    }
    else
    {
      $last_c_reg = $res3->company_info_regno; 
    

    $exp_c_reg = explode('_',$last_c_reg);

    $expcount = count($exp_c_reg);

    $midno='';

    for($i=0;$i<$expcount;$i++)
    {
      if($i==1)
      {
        $midno.=$exp_c_reg[$i];
      }
    }

    $midno=$midno+1;

    $unique=$tdate."_0".$midno."_COMP_MASS";
    }

     echo $unique;

	}

}	