<?php 
class Studymeterial_model extends CI_Model 
{

	function get_course()
	{
		$query = $this->db->get('course');
		return $query->result();
	}

	function getsameMetereialNoCount($modulenumber,$modulecourse)
	{
		$query1 = "SELECT count(*) AS metcont FROM meterials WHERE module_no = '$modulenumber' AND module_course = '$modulecourse'";
		$query = $this->db->query($query1);
		return $query->row();
	}

	function getsameMetereialNo($modulenumber,$modulecourse)
	{
		$this->db->where('module_no',$modulenumber);
		$this->db->where('module_course',$modulecourse);
		$query = $this->db->get('meterials');
		return $query->row();

	}

	function insert_meterial($data2)
	{
		$query = $this->db->insert('meterials',$data2);
		return $query;
	}

	function get_meterial_list()
	{
		$selqry = "SELECT meterials.module_id,meterials.module_name,meterials.module_no,meterials.module_file,meterials.module_video,course.course AS course_name FROM meterials LEFT JOIN course ON meterials.module_course = course.id";
      $query = $this->db->query($selqry);


      return $query->result();
	}

	function edit_meterial_part($id)
	{
		$this->db->where('module_id',$id);
		$query = $this->db->get('meterials');
		return $query->row();
	}

	function update_meterial($m_id,$data2)
	{
		$this->db->where('module_id',$m_id);
		$query = $this->db->update('meterials',$data2);
		return $query;
	}


	function delete_meterial_part($m_id)
	{
		$this->db->where('module_id',$m_id);
		$query = $this->db->delete('meterials');
		return $query;
	}


}	