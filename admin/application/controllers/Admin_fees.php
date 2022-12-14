<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_fees extends CI_Controller {

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

		
        $a = array('content' => 'fees_view');
		$this->load->view('admintemplate',$a);

		

	}
	public function display_fees()
	{
		$this->load->model('Fees_model');
		$res['fee'] = $this->Fees_model->get_fees();
		$this->load->view('feestable_view',$res);
	}

	public function update_fee()
	{
        
        $this->load->model('Fees_model');

        $fid=$this->input->post('fileid');

		$config['upload_path']="./uploads";
        $config['allowed_types']='pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $data = array('upload_data' => $this->upload->data());
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('pdffile')){
        	$error = array('error'=> $this->upload->display_errors());
        }
        else
        {
        $data2 = array('upload_data' => $this->upload->data());
        }	
        	// $pico="";	
        $data1 = array(
        
        'file'=>$data2['upload_data']['file_name']
         
        ); 

        
         
        $result= $this->Fees_model->update_fees($fid,$data1);
        

        if ($result == true)
         {
           echo "true"; 
         }
         else
         {
         	echo "false";
         }	
     
	}

	public function editfees1()
	{
		$id=$this->input->post('id');
		 	$this->load->model('Fees_model');
		 	
			echo $id;
			
	}


}	