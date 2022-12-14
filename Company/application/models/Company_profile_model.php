<?php 
class Company_profile_model extends CI_Model 
{
  function get_comp_dtls($reg_no)
  {
  	$this->db->where('company_info_regno',$reg_no);
  	$query = $this->db->get('company_info');
  	return $query->row();
  }
}