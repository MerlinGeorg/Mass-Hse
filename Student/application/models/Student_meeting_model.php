<?php 
class Student_meeting_model extends CI_Model 
{
   function getstudentDetls($userid)
   {
   	$this->db->where('student_id',$userid);
   	$query = $this->db->get('students');
   	// $query1= $query->result();
   	$return=array();

   	foreach ($query->result() as $data)
		    {
		        $return[$data->student_id] = $data;
		        $s_courses = $data->p_course;
		        if($s_courses!='' && $s_courses!='N/A')
	    	    {
	    	    	$tday = date('Y-m-d');
		    		if(strpos($s_courses, ',') !== false)
		    		{
				        $ex_scourse = explode(",", $s_courses);
						$count = count($ex_scourse);
						
						$gquery1 = "SELECT * FROM meeting LEFT JOIN course ON meeting.meeting_course = course.id WHERE ";
						$gquery2='';

						for($i=0;$i<$count;$i++)
		    		    {
		    		    	$lastvalue = $count-$i;
		    		    	if($lastvalue==1)
		    		    	{
		    		    		$gquery2.="meeting.meeting_course='".$ex_scourse[$i]."' AND meeting.meeting_date >='".$tday."' ";
		    		    	}
		    		    	else
		    		    	{
		    		    		$gquery2.="meeting.meeting_course='".$ex_scourse[$i]."' AND meeting.meeting_date >='".$tday."' OR ";
		    		    	}
                           
		    		    }	

		    		        $squery2 =  $gquery1." ".$gquery2;
					        $query111 = $this->db->query($squery2);

					        return $query111->result();			
		            }
		            else
		            {

		            }
		        } 
		        else
		        {
                  echo "nomeeting";
		        }   
		    } 
		
		return $return;

    

   }

   function getcoursemeets($courseid)
   {
   	
     $squery = "SELECT * FROM meeting LEFT JOIN course ON meeting.meeting_course = course.id WHERE meeting.meeting_course='$courseid'AND meeting.meeting_date>='$tday'";
     $query = $this->db->query($squery);
     return $query->result();
   }
}	