<?php 
class CertificationRequest_model extends CI_Model 
{

  function get_reqsts()
  {
  	// $query = $this->db->get('training_req');

  	// return $query->result();


    $selqry = "SELECT training_req.t_id,training_req.t_s_regno,training_req.t_s_name,training_req.t_s_course,training_req.t_s_score,training_req.t_s_adrs,training_req.t_s_city,training_req.t_s_state,training_req.t_s_pincod,training_req.t_s_country,training_req.t_s_status,training_req.t_s_date,course.course AS course_name FROM training_req LEFT JOIN course ON training_req.t_s_course = course.id ORDER BY t_s_date DESC";
      $query5 = $this->db->query($selqry);


      return $query5->result();

  }


  function change_stat($id,$data)
  {
  	$this->db->where('t_id',$id);
  	$query6 = $this->db->update('training_req',$data);
    return $query6;

  }

  function getreqsts()
  {
  	$query7="SELECT count(t_s_status) as totalreqst FROM training_req WHERE t_s_status='2'";
  	$query = $this->db->query($query7);

  	return $query->row();
  }

}
