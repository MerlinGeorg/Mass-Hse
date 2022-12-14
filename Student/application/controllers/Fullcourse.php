<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fullcourse extends CI_Controller {

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
    	$this->load->model('Fullcourse_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $civilid = $_SESSION['username'];
      
     /* $st_cert1 =$this->Student_certificate_model->get_student_cert($civilid);
      
      $st_cert = $st_cert1->student_reg;*/
      
      $courses = $this->Fullcourse_model->get_courses();

      
      $a = array('content' => 'fullcourse_view',
    	        'corse'=> $courses
                );

    $this->load->view('admintemplate',$a);
    }else{
      redirect('Student_login');
    }
   
	}



	public function addtocart()
	{
		if(isset($_SESSION['username']))
		{

         $st_id = $_SESSION['id'];

         $courseid = $this->input->post('cid');



         $cartcourse = $this->Fullcourse_model->getcartcourse($courseid);

         $coursename = $cartcourse->course;

         $st_civil = $_SESSION['username'];

         $addadte = date('Y-m-d H:m:s');

         $data1 = array(

         	'cart_s_id'=>$st_id,
         	'cart_s_civil'=>$st_civil,
         	'cart_c_id'=>$courseid,
         	'cart_c_name'=>$coursename,
         	'cart_item_price'=>'N/A',
         	'cart_datetime'=>$addadte
         );


         $res123 = $this->Fullcourse_model->insertcart($data1,$st_id,$courseid);

	         if($res123==1)
	         {
	         	echo "success";
	         }
	         else if($res123==false)
	         {
	         	echo "exist";
	         }
	         else
	         {
	         	echo "failed";
	         }

        }
	}

	public function getcartcount()
	{
		if(isset($_SESSION['id']))
		{
           $std_id = $_SESSION['id'];

           $res = $this->Fullcourse_model->getcartcount($std_id);

           $cartcount = $res->cartcount;

           echo $cartcount;
		}	
	}
}
