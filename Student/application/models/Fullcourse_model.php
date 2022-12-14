<?php 
class Fullcourse_model extends CI_Model 
{
  
  function get_courses()
  {
  	$selqry = "SELECT course.id,course.course,course.course_cat,course.course_desc,course.course_code,course.course_pic,category.cat_name AS catname FROM course LEFT JOIN category ON course.course_cat = category.cat_id";
      $query5 = $this->db->query($selqry);


      return $query5->result();
  }

  function getcartcourse($courseid)
  {
  	$selqry = "SELECT course.id,course.course,course.course_cat,course.course_desc,course.course_code,course.course_pic,category.cat_name AS catname FROM course LEFT JOIN category ON course.course_cat = category.cat_id WHERE course.id='$courseid'";
      $query5 = $this->db->query($selqry);


      return $query5->row();
  }

  function insertcart($data1,$st_id,$courseid)
  {
  	$selqry = "SELECT count(*) as coursecount FROM cart WHERE cart_s_id='$st_id' AND cart_c_id='$courseid'";

  	$query3 = $this->db->query($selqry);

  	$query4 = $query3->row();

  	$coursecount = $query4->coursecount;

  	if($coursecount==0)
  	{
       $query = $this->db->insert('cart',$data1);

       return $query;
  	}
  	else
  	{
  		return false;
  	}	
  }

  function getcartcount($std_id)
  {
  	
  	$selqry = "SELECT count(*) as cartcount FROM cart WHERE cart_s_id='$std_id'";

  	$query = $this->db->query($selqry);
  	return $query->row();

   }

}	