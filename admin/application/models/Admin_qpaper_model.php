<?php 
class Admin_qpaper_model extends CI_Model 
{
  function search_qpaper_code($term)
  {
  	$selqry = "SELECT * FROM qpaper WHERE qpaper_code LIKE '%".$term."%' AND  qpaper_status= '1' ORDER BY qpaper_code ASC  LIMIT 10";
			$query = $this->db->query($selqry);
			return $query->result();
  }

  function getqpaperdtls($qcode)
  {
  	 $selqry = "SELECT qpaper.qpaper_exam_name,qpaper.qpaper_course,course.course AS course_name FROM qpaper LEFT JOIN course ON qpaper.qpaper_course = course.id WHERE qpaper.qpaper_status = '1' AND qpaper.qpaper_code='$qcode'";
      $query5 = $this->db->query($selqry);
    // $this->db->where('qpaper_code',$qcode);
    // $this->db->where('qpaper_status','1');
    // $query5 = $this->db->get('qpaper'); 


      return $query5->row();
  }


  function insert_question($data1)
  {
  	$query = $this->db->insert('questions',$data1);
  	return $query;
  }

  function update_question($qstn_id,$data1)
  {
  	$this->db->where('questions_id',$qstn_id);
  	$query = $this->db->update('questions',$data1);
  	return $query;
  }

  function get_questions_list()
  {
     $selqry = "SELECT questions.questions_id,questions.questions_xam,questions.questions_qcode,questions.questions_question,questions.Option_A,questions.Option_B,questions.Option_C,questions.Option_D,questions.questions_answer,questions.questions_status,course.course AS course_name FROM questions LEFT JOIN course ON questions.questions_course = course.id";
     $query5 = $this->db->query($selqry);

      return $query5->result();
  }

  function edit_qustion_part($id)
  {
  	     $selqry = "SELECT questions.questions_id,questions.questions_xam,questions.questions_qcode,questions.questions_course,questions.questions_question,questions.Option_A,questions.Option_B,questions.Option_C,questions.Option_D,questions.questions_answer,questions.questions_status,course.course AS course_name FROM questions LEFT JOIN course ON questions.questions_course = course.id WHERE questions.questions_id = '$id'";
     $query5 = $this->db->query($selqry);

      return $query5->row();
  }

  function changestat($id,$newstat)
  {
  	$this->db->where('questions_id',$id);
  	$query = $this->db->update('questions',$newstat);
  	return $query;
  }
 
 function deleteQst($id)
 {
  $this->db->where('questions_id',$id);
  $query = $this->db->delete('questions');
  return $query;
 }

}	