<?php 
class Fees_model extends CI_Model 
{

	function get_fees()
	{
		$query = $this->db->get('fees');

		return $query->result();
	}

	function edit_feees($id,$table)
	{
		$this->db->where('id',$id);
		$query1 = $this->db->get($table);
		return $query1->row();
	}

	function update_fees($fid,$data1)
	{
		$this->db->where('id',$fid);
		if($count = $this->db->update('fees',$data1))
        {
		return true;
	    }
	    else
	    {
	    	return false;
	    }	
	}


}	