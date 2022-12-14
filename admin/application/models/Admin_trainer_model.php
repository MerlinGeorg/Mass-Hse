<?php 
class Admin_trainer_model extends CI_Model 
{
   
   function getcourselist()
   {
   	$query = $this->db->get('course');
   	return $query->result();
   }


   function check_civil_mail($trainer_mailid)
   {
    
  //  $query13 = "SELECT COUNT(*) AS trainercounts FROM trainers WHERE trainer_civilid = '$trainer_civilId'";
  // $query1 = $this->db->query($query13);

  // $civilcount = $query1->row();

	

  //    if ($civilcount->trainercounts==0) 
  //    {
     	

     	$query13 = "SELECT COUNT(*) AS trainercountsmail FROM trainers WHERE trainer_mailid = '$trainer_mailid'";
		  $query2 = $this->db->query($query13);

		  $mailcount = $query2->row();
  
     	if ($mailcount->trainercountsmail==0) 
     	{
     		
     		return 1;
     	}
     	else
     	{
     		return 3;
     	}	
     // }
     // else
     // {
     //    return 2;
     // }	
   }


   function insertTrainer($data1)
   {
   	$query5 = $this->db->insert('trainers',$data1);

   	return $query5;
   }
   
   function getTainers()
   {
   	// $query6 = $this->db->get('trainers');
   	



   	$selqry = "SELECT trainers.trainer_id,trainers.trainer_name,trainers.trainer_mailid,trainers.trainer_gender,trainers.trainer_dob,trainers.trainer_phone,trainers.trainer_password,trainers.trainer_qualification,trainers.trainer_pic,course.course AS course_name FROM trainers LEFT JOIN course ON trainers.trainer_teaching1 = course.id";
      $query5 = $this->db->query($selqry);

      return $query5->result();

   }

   function delete_trainer($tr_id)
   {
   	$this->db->where('trainer_id',$tr_id);
   	$query7 = $this->db->delete('trainers');
   	return $query7;
   }

   function edit_trainer_part($id)
   {
     // $selqry = "SELECT trainers.trainer_id,trainers.trainer_name,trainers.trainer_civilid,trainers.trainer_mailid,trainers.trainer_gender,trainers.trainer_dob,trainers.trainer_phone,trainers.trainer_password,trainers.trainer_qualification,trainers.trainer_pic,course.course AS course_name FROM trainers LEFT JOIN course ON trainers.trainer_teaching1 = course.id WHERE trainers.trainer_id='$id'";
     //  $query5 = $this->db->query($selqry);

     $this->db->where('trainer_id',$id);  
    $query6 = $this->db->get('trainers'); 

      return $query6->row();
   }


   function updateTrainer($data1,$tr_id)
   {
    $this->db->where('trainer_id',$tr_id); 

    if($count = $this->db->update('trainers',$data1))
    {
      return 1;

    }

    else
    {
      return 0;
    }
   }


function etMailidSameTrainer($trainer_mailid)
{
  $this->db->where('trainer_mailid',$trainer_mailid);
  $query222 = $this->db->get('trainers');
  return $query222->row();
}




}	
