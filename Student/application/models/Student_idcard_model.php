<?php 
class Student_idcard_model extends CI_Model 
{
 
   function get_student_dtls($interid)
   {
   	$this->db->where('student_civil_id',$interid);
   	$query = $this->db->get('students');
   	return $query->row();
   }

   function get_student_idcard($passno)
   {
   	$this->db->where('st_id_pasport',$passno);
   	$query = $this->db->get('idcard');
   	return $query->result();
   }
}	