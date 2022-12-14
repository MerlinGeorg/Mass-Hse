<?php 
class Student_profile_model extends CI_Model 
{

function get_student_dtls($reg_no)
{
	// $this->db->where('student_reg',$reg_no);
	// $query = $this->db->get('students');
    
   $selqry = "SELECT students.student_id,students.student_civil_id,students.first_name,students.last_name,students.gender,students.dob,students.p_course,students.email,students.phno,students.qualification,students.picture,students.student_reg,students.pass_no,students.student_pwd,course.course AS course_name FROM students LEFT JOIN course ON students.p_course = course.id WHERE students.student_civil_id = '$reg_no'";
      $query = $this->db->query($selqry);

    // print_r($query->row()) ;
    // die();
	return $query->row();
}

function get_student_idcard($passno)
{
	$this->db->where('st_id_pasport',$passno);
	$query = $this->db->get('idcard');
	return $query->row();
}




}

