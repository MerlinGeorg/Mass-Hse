<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

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


    function __construct() {
    	parent::__construct();
    
    	$this->load->model('Purchase_model');
    	$this->load->library('encryption');

    }

	public function index()
	{
        
        $allcats = $this->Purchase_model->allcategories();

        $allbrands = $this->Purchase_model->allbrands();
        

		$data = array(
				'content' => 'purchase_view',
				'cats' =>$allcats,
				'brands' =>$allbrands
				
		);
		$this->load->view('admintemplate',$data);
	}

	public function invoice_auto()
	{
		$autoin = mt_rand();
		echo $autoin;
	}

	public function add_purchase()
	{
		$this->load->model('Purchase_model');

        
		$pname = $this->input->post('pitemname');
		$pbrand = $this->input->post('pbrand');
		$pcategory = $this->input->post('pcat');
		$pqtyno = $this->input->post('pqty');
		$pqtymes = $this->input->post('mesr');
		$pprice = $this->input->post('pprice');
		$ptotal_price = $this->input->post('ptprice');
		$invoice_no = $this->input->post('invno');

		date_default_timezone_set('Asia/Kolkata');

		$pdate = date('Y-m-d h:i:sa');

		
        $pqty = $pqtyno.$pqtymes;
  //       echo $pqty;
		// die();

		$data = array(
           
           'pitem_name'=>$pname,
           'pitem_brand'=>$pbrand,
           'pitem_category'=>$pcategory,
           'pitem_qty'=>$pqty,
           'pitem_price'=>$pprice,
           'pitem_date'=>$pdate,
           'pitem_invoice'=>$invoice_no


		);


       $result = $this->Purchase_model->insertpurchase($data);

       if ($result==1) 
       {
       	echo "success";;
       }
       else
       {
       	echo "fail";
       }


	}
}
