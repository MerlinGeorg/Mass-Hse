<?php 
class Company_login_model extends CI_Model 
{

function validate_login()
	{
        		 $username = $this->security->xss_clean($this->input->post('inputUsername'));
                $password = $this->security->xss_clean($this->input->post('inputPassword'));

                $this->db->where('company_info_mail',$username);

                $this->db->where('company_info_pwd',$password);

                $query3 = $this->db->get('company_info');

                if($query3->num_rows()==1)
                {
                	$row = $query3->row();

                	$data = array(
                        'id'=>$row->company_info_id,
                        'username'=>$row->company_info_mail,
                        'userreg'=>$row->company_info_regno,
                        'validate'=>true
                	);

                	$this->session->set_userdata($data);

                	return true;

                }
                else
                {
                	return false;
                }	

	}


}	
