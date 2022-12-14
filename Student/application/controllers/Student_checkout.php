<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_checkout extends CI_Controller {

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
    	$this->load->model('Student_checkout_model');
    	$this->load->model('Student_cart_model');
	}

	public function index()
	{ 
	 	
	    if(isset($_SESSION['username']))
	    {
	      
	      $civilid = $_SESSION['username'];
	      
	      /* $st_cert1 =$this->Student_certificate_model->get_student_cert($civilid);
	      
	      $st_cert = $st_cert1->student_reg;*/

	      $stid = $_SESSION['id'];
	      
	      $cartitems = $this->Student_cart_model->get_courses($stid);
	      
	      $tdate = date('d-m-Y');
	      
	      $a = array('content' => 'student_checkout_view',
	    	        'cartitem'=> $cartitems,
	    	        'tday'=>$tdate
	                );

	      $this->load->view('admintemplate',$a);
	    }

	    else
	    {
	      redirect('Student_login');
	    }
   
	}


	public function proceedcheck()
	{
		$couponcode = $this->input->post('coupon');

		$res1 = $this->Student_checkout_model->getcoupencount($couponcode);

		$coupcount = $res1->couponcount;

		// echo $coupcount;
		// die();

		if($coupcount==0)
		{
           echo "invalidcoupon";
		}
		else
		{

		   if(isset($_SESSION['username']))
	      {
	      
		       $userid = $_SESSION['id'];
	           $res2 = $this->Student_checkout_model->getcoupon($couponcode);


	           $coupontype = $res2->coupon_type;
	           $couponstatus = $res2->coupon_status;
	           $couponvalidity = $res2->coupon_validity;

	           $trailexpdate   = date('Y/m/d', strtotime('+'.$couponvalidity));

	           // echo $trailexpdate;
	           // die();

	           $dantom = rand(10,99);

	           $orderid = "masshse".date('ymdHms').$userid.$dantom;

	           $tdate = date('Y-m-d');

	           // echo $trailexpdate ;
	           // die();

	           $res3 = $this->Student_checkout_model->getcartitems($userid);

	           foreach($res3 as $row)
	           {
	           	 $data3 = array(

                    'checkouts_u_id'=>$userid,
                    'checkouts_c_id'=>$row->cart_c_id,
                    'checkout_orderid'=>$orderid,
                    'checkouts_validity'=>$couponvalidity,
                    'checkouts_price'=>$row->cart_item_price,
                    'checkouts_coupon'=>$couponcode,
                    'checkouts_date'=>$tdate,
                    'checkouts_expdate'=>$trailexpdate,
	           	 );

	           	 $corsid= $row->cart_c_id;

	           	$res123 = $this->Student_checkout_model->insertcheckout($data3,$corsid,$userid);
		           	if($res123==0)
		           	{
		           		echo "checkinserterror";
		           		break;
		           	}
	           }

	         $res321= $this->Student_checkout_model->getuserexistcorse($userid);

             $stcourse = $res321->p_course;

             $courese='';

             if($stcourse=='N/A')
             {
                // for($i=0;$i<count($res3);$i++)
                // {

                // }
               
                $i = 0;
                $counttakcourse='';

                foreach($res3 as $demo)
                {
                	$counttakcourse.=$demo->cart_c_id;

                	$i++;
                }
                
                if($i>1)
                {
	                foreach ($res3 as $row1) 
	                {

	                	$corsesid  = $row1->cart_c_id;
	                	if(strpos($courese,$corsesid)!==false)
	                	{
	                		

	                		$courese=$courese;
	                	}
	                	else
	                	{
	                		$courese .= $row1->cart_c_id.",";
	                	}	
	                 } 
                	
                }
                else
                {
                	foreach ($res3 as $row1) 
	                {

	                	$corsesid  = $row1->cart_c_id;
	                	if(strpos($courese,$corsesid)!==false)
	                	{
	                		

	                		$courese=$courese;
	                	}
	                	else
	                	{
	                		$courese .= $row1->cart_c_id;
	                	}	
	                 } 
                }	


                $data4 = array('p_course'=>$courese);

                $res543 = $this->Student_checkout_model->updateusercourse($userid,$data4);

                if($res543==1)
	                {
	                	$res765 = $this->Student_checkout_model->deletecartitems($userid);
	                	if($res765==1)
	                	{
	                	echo "checkoutcomplete";
	                    }
	                    else
	                    {
	                    	echo "failed";
	                    }
	                }
	                else
	                {
	                	echo "checkoutissue";
	                }
             }
             else
             {
             	if(strpos($stcourse, ',') !== false)
               {	
                   $courese = $stcourse;	
	                foreach ($res3 as $row1) 
	                { 
	                	$corsesid  = $row1->cart_c_id;
	                	if(strpos($courese,$corsesid)!==false)
	                	{
	                		

	                		$courese=$courese;
	                	}
	                	else
	                	{
	                		$courese .= $row1->cart_c_id.",";
	                	}	
            	
	                }
                 
                 $data4 = array('p_course'=>$courese);

                $res543 = $this->Student_checkout_model->updateusercourse($userid,$data4);

                 if($res543==1)
	                {
	                	$res765 = $this->Student_checkout_model->deletecartitems($userid);
	                	if($res765==1)
	                	{
	                	echo "checkoutcomplete";
	                    }
	                    else
	                    {
	                    	echo "failed";
	                    }
	                }
	                else
	                {
	                	echo "checkoutissue";
	                }

               }
               else
               {

               	$j=0;
               	$checkccountdemo="";
               	foreach($res3 as $democ)
               	{
               		$checkccountdemo.= $democ->cart_c_id;

               		$j++;
               	}
	               	if($j==1)
	               	{

		               		foreach($res3 as $democ)
		               	{
		               		if($stcourse==$democ->cart_c_id)
                             {
                             	
                             	$courese = $stcourse;


                             }
                             else
                             {
                             	$courese = $stcourse.",";
                             }	
		               			
		               	}
	               	}

               	  // $courese = $stcourse.",";	
	                foreach ($res3 as $row1) 
	                { 
	                	$corsesid  = $row1->cart_c_id;
	                	if(strpos($courese,$corsesid)!==false)
	                	{
	                		// echo "hiiiiii";

	                		$courese=$courese;

	                	}
	                	else
	                	{
	                		$courese .= $row1->cart_c_id.",";

	                		
	                	}	
	                }

	              $data4 = array('p_course'=>$courese);

                  $res543 = $this->Student_checkout_model->updateusercourse($userid,$data4);  

                  if($res543==1)
	                {
	                	$res765 = $this->Student_checkout_model->deletecartitems($userid);
	                	if($res765==1)
	                	{
	                	echo "checkoutcomplete";
	                    }
	                    else
	                    {
	                    	echo "failed";
	                    }
	                	
	                }
	                else
	                {
	                	echo "checkoutissue";
	                }
               }
             }

	          
           }

		}
	}




}	