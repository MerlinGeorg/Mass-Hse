<?php 
class Student_certificate_model extends CI_Model 
{

function get_student_cert($civilid)
{
// 	$this->db->where('student_civil_id',$civilid);
// 	$query12 = $this->db->get('students');
	
	
    $query12="SELECT * from students WHERE student_civil_id ='$civilid' LIMIT 1";
    $query13=$this->db->query($query12);
    
	return $query13->row();
}

function get_cert($st_cert)
{
     $this->db->where('st_pasport',$st_cert);
	$query124 = $this->db->get('certification'); 

    // print_r($query->row()) ;
    // die();
	return $query124->result();
}




}

