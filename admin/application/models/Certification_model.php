<?php 
class Certification_model extends CI_Model 
{



function search_s_regno($term)
{
// 	 $selqry = "SELECT * FROM students WHERE pass_no LIKE '%".$term."%'  ORDER BY student_reg ASC  LIMIT 10";

     $selqry = "SELECT students.student_id,students.first_name,students.last_name,students.gender,students.dob,students.student_civil_id,students.pass_no,students.email,students.phno,students.qualification,students.picture,students.student_reg,students.student_pwd,exam.xam_status AS examstatus FROM students LEFT JOIN exam ON students.student_reg = exam.s_reg_no WHERE students.pass_no LIKE '%".$term."%' LIMIT 10";
     
			$query = $this->db->query($selqry);
			return $query->result();
}

function geting_s_name($regno)
{
	$this->db->where('pass_no',$regno);
	$query1 = $this->db->get('students');
	return $query1->row();
}

function insert_certification($data2)
	{
		$query2 = $this->db->insert('certification',$data2);

		return $query2;
	}

function get_students_cert()
	{
		$query3 = $this->db->get('certification');
			return $query3->result();
	}

function edit_certicicate($cr_id)
	{
		$this->db->where('cert_id',$cr_id);  
			$query6 = $this->db->get('certification'); 

			return $query6->row();
	}

function certification_update($cert_id,$data2)
	{
		$this->db->where('cert_id',$cert_id);
		$query7 = $this->db->update('certification',$data2);
		return $query7;

	}

function delete_certificate($cr_id)
	{
		$this->db->where('cert_id',$cr_id);
			$query8 = $this->db->delete('certification');
			return $query8;
	}
	
function getcourses()
{
    	
			$query8 = $this->db->get('course');
			return $query8->result();
}

function getservices()
{
	$query = $this->db->get('service');
	return $query->result();
}

function getcorsecode($corsename)
{
	$this->db->where('course',$corsename);
	$query = $this->db->get('course');
	return $query->row();
}


}