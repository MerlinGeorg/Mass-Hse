<?php 
class Service_model extends CI_Model 
{
  function insert_serv($data2)
  {
  	$query = $this->db->insert('service',$data2);
  	return $query;
  }

  function get_services()
  {
  	$query1 = $this->db->get('service');
  	return $query1->result();
  }

  function delete_serv($srv_id)
  {
  	$this->db->where('service_id',$srv_id);
  	$query2 = $this->db->delete('service');
  	return $query2;
  }

  function edit_service($id)
  {
  	$this->db->where('service_id',$id);
  	$query3 = $this->db->get('service');
  	return $query3->row();
  }

  function update_serv($data2,$srv_id)
  {
  	$this->db->where ('service_id',$srv_id); 
		if($count = $this->db->update('service',$data2))
		{
			return 1;

		}

		else
		{
			return 0;
		}
  }
}	