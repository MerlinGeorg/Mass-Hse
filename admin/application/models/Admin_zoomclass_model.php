<?php 
class Admin_zoomclass_model extends CI_Model 
{
    function insertmeet($data1)
    {
    	$query = $this->db->insert('meeting',$data1);
    	return $query;
    }

    function get_meet_list()
    {
    	$squery = "SELECT * FROM meeting LEFT JOIN course ON meeting.meeting_course = course.id";
    	$query = $this->db->query($squery);
    	return $query->result();
    }

    function edit_meet_part($id)
    {
    	$this->db->where('meeting_id',$id);
    	$query = $this->db->get('meeting');
    	return $query->row();
    }

    function updatemeet($data1,$m_id)
    {
    	$this->db->where('meeting_id',$m_id);
    	$query = $this->db->update('meeting',$data1);
    	return $query;
    }

    function delete_meet_part($id)
    {
    	$this->db->where('meeting_id',$id);
    	$query = $this->db->delete('meeting');
    	return $query;
    }
} 