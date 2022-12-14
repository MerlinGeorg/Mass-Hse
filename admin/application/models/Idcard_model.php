<?php 
class Idcard_model extends CI_Model 
{
	  function search_passport($term)
	{
	 $selqry = "SELECT * FROM students WHERE pass_no LIKE '%".$term."%'  ORDER BY student_reg ASC  LIMIT 10";
				$query = $this->db->query($selqry);
				return $query->result();
	}

	function geting_s_name($passno)
	{
		$this->db->where('pass_no',$passno);
	$query1 = $this->db->get('students');
	return $query1->row();
	}

	function get_students_idcard()
	{
		$query = $this->db->get('idcard');
		return $query->result();
	}

	function delete_idcard($crd_id)
	{
		$this->db->where('card_id',$crd_id);
		$query = $this->db->delete('idcard');
		return $query;
	}
}