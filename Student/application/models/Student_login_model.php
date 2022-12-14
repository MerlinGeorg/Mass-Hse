<?php 
class Student_login_model extends CI_Model 
{

function validate_login()
	{
		 $username = $this->security->xss_clean($this->input->post('inputUsername'));
        $password = $this->security->xss_clean($this->input->post('inputPassword'));

        $this->db->where('student_civil_id',$username);

        $this->db->where('student_pwd',$password);

        $query3 = $this->db->get('students');

        if($query3->num_rows()==1)
        {
        	$row = $query3->row();

        	$data = array(
                'id'=>$row->student_id,
                'username'=>$row->student_civil_id,
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
