<?php 
class Admin_exam_model extends CI_Model 
{
    
    function display_xamresult()
    {
    	$selqry = "SELECT exam.exam_id,exam.s_reg_no,exam.qp_code,exam.s_score,exam.cutoff,exam.xam_status,exam.rem_attempt,exam.xam_time_start,exam.xam_time_end,students.first_name AS firstname,students.last_name AS lastname FROM exam LEFT JOIN students ON exam.s_reg_no = students.student_reg";
      $query5 = $this->db->query($selqry);


      return $query5->result();
    }
}	