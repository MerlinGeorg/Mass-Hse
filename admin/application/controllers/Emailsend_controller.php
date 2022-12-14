<?php 
   class Emailsend_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
     
  
      public function send_mail() { 
          
      // echo  $number_user =  $this->input->post('phone1');
     // echo  $email_user =  $this->input->post('email1');
      echo "llolo";
      
      
        //  $from_email = "sheffin@nuevoinformatica.com";
        //  // $to_email = $this->input->post('email'); 
        //  $sendname = $this->input->post('sendedname'); 
        //  $to_email = "abinjose@nuevoinformatica.com"; 
        //  $this->load->model('display_data');
        //  // $resemail = $this->display_data->checkforsendemail($to_email);

        //  if($sendname != "" && $to_email != ""){
        //  	// $emaildata = $resemail->row();
        //  	// $name =  $emaildata->first_name;
         	
        //  	$this->load->library('email'); 
   
	       //  $this->email->from($from_email, 'Abin'); 
	       //  $this->email->to($to_email);
	       //  $this->email->subject('Grocessery Password Recovery'); 
	       //  $this->email->message('Name  :  '.$sendname.'<br>'.'Email  :  '.$to_email); 
	   
	       //  //Send mail 
	       //  if($this->email->send()) {
	       //  	echo "Email sent successfully.";
	       //  	// $this->session->set_flashdata("category_success","Email sent successfully."); 
	       //  }
	       //  else{
	       //  	echo "Error in sending Email.";
	       //  	// $this->session->set_flashdata("category_failed","Error in sending Email."); 
	       //  } 
        //  }else{
        //  	echo "Name and Email is required ";
        //  	// $this->session->set_flashdata("category_failed","Error in sending Email.");
        //  }
   		
        
         
      } 

      
   } 
?>