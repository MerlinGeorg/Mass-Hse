<?php 
class Offerbanner_model extends CI_Model 
{

	function insert_banner($data2)
	{
       $query =$this->db->insert('offer_banner',$data2);
       return $query;
	}

	function display_banner()
	{
		$query1 = $this->db->get('offer_banner');
		return $query1->result();
	}

	function get_edit_banner($id)
	{
		$this->db->where('ban_id',$id);
		$query2 = $this->db->get('offer_banner');

		return $query2->row();
	}

	function banner_update($ban_id,$data2)
    {
    	$this->db->where('ban_id',$ban_id);
    	$query2 = $this->db->update('offer_banner',$data2);
    	return $query2;
    }
    
}	
