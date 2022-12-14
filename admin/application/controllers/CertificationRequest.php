<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificationRequest extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
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
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
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
        $this->load->model('CertificationRequest_model');
    }


    public function index()
    {
        if(isset($_SESSION['username']))
        {
           $get_rqst = $this->CertificationRequest_model->get_reqsts();

           $a = array('content' => 'certification_request_view',
                       'requests' => $get_rqst
                     );
           $this->load->view('admintemplate',$a);
        }
        else
        {
            redirect('Admin_board/login_admin');
        }    
    }

    public function changestatus()
    {
        $id = $this->input->post('id');

        $data = array(
            't_s_status'=>1
        );

       $res = $this->CertificationRequest_model->change_stat($id,$data);

       if ($res==1) 
       {
          echo "success"; 
       }
       else
       {
          echo "failed";
       }
    }


    public function getRequests()
    {
       $res = $this->CertificationRequest_model->getreqsts();

      echo $res->totalreqst;
    }

   } 