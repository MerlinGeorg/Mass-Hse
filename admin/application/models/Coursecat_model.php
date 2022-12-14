<?php 
class Coursecat_model extends CI_Model 
{

	function allcategories()
	{
    $query = $this->db->get('course');
    return $query->result();
	}
}