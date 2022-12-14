<?php 
class Qpaper_code_model extends CI_Model 
{
   function getsamecodecount($qpaper_code)
   {
   	$query1 = "SELECT count(*) AS codecount FROM qpaper WHERE qpaper_code='$qpaper_code'";
   	$query = $this->db->query($query1);
   	return $query->row();
   }

   function getsamecode($qpaper_code)
   {
   	$this->db->where('qpaper_code',$qpaper_code);
   	$query = $this->db->get('qpaper');
   	return $query->row();
   }

   function insertQpaper($data1)
   {
   	$query = $this->db->insert('qpaper',$data1);
   	return $query;
   }

   function get_qpaper_list()
   {
   	 $selqry = "SELECT qpaper.qpaper_id,qpaper.qpaper_code,qpaper.qpaper_exam_name,qpaper.qpaper_status,course.course AS course_name FROM qpaper LEFT JOIN course ON qpaper.qpaper_course = course.id";
      $query5 = $this->db->query($selqry);


      return $query5->result();
   }

   function changestat($id,$newstat)
   {
   	$this->db->where('qpaper_id',$id);
   	$query = $this->db->update('qpaper',$newstat);
   	return $query;
   }

   function edit_qpaper_part($id)
   {
   	$this->db->where('qpaper_id',$id);
   	$query = $this->db->get('qpaper');
   	return $query->row();
   }


   function updateQpaper($qpaper_id,$data1)
   {
   	$this->db->where('qpaper_id',$qpaper_id);
   	$query = $this->db->update('qpaper',$data1);
   	return $query;
   }

   function delete_qpaper_part($id)
   {
   	$this->db->where('qpaper_id',$id);
   	$query = $this->db->delete('qpaper');
   	return $query;
   }

}	