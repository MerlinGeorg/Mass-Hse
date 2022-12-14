<?php 
class Homeslider_model extends CI_Model 
{

 function insert_slider($data2)
	{
       $query =$this->db->insert('home_slider',$data2);
       return $query;
	}

	function check_pr_same($s_priority)
	{	
	   // $this->db->where('slide_priority',$s_priority);
	   // $query1 = $this->db->get('home_slider');

		$query = "SELECT count(*) as prcount FROM home_slider  WHERE slide_priority = '$s_priority'";
        $query1 = $this->db->query($query);
        
        // print_r($query1->row());
        // die();

	   return $query1->row();
	}

	function display_slider()
	{
		$query1 = $this->db->get('home_slider');
		return $query1->result();
	}

	function get_edit_slider($sid)
	{
		$this->db->where('slider_id',$sid);
		$query2 = $this->db->get('home_slider');

		return $query2->row();
	}

	function slider_update($slider_id,$data2)
	{
		$this->db->where('slider_id',$slider_id);
    	$query2 = $this->db->update('home_slider',$data2);
    	return $query2;
	}

	function getingexistpriority($slider_id)
	{
		$this->db->where('slider_id',$slider_id);
		$query4 = $this->db->get('home_slider');
		return $query4->row();
	}

	function delete_slider($slide_id)
	{
		$this->db->where('slider_id',$slide_id);
		$query5 = $this->db->delete('home_slider');
		return $query5;
	}
}	