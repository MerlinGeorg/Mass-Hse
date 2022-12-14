<?php 
class Student_course_model extends CI_Model 
{
    function get_mycourses($usid)
    {
    	$squery = "SELECT * FROM students LEFT JOIN checkouts ON students.student_id=checkouts.checkouts_u_id LEFT JOIN course ON checkouts.checkouts_c_id=course.id WHERE students.student_id='$usid'";

    	$query = $this->db->query($squery);

    	return $query->result();
    }

    function checkcexp($userid,$today)
    {
    	$squery = "SELECT * FROM students LEFT JOIN checkouts ON students.student_id=checkouts.checkouts_u_id LEFT JOIN course ON checkouts.checkouts_c_id=course.id WHERE students.student_id='$userid' AND checkouts.checkouts_expdate < '$today'";

    	$query = $this->db->query($squery);

    	return $query->result();
    }

    function removecorse($courseid,$userid,$ceckid)
    {   
    	$this->db->where('student_id',$userid);
    	$query = $this->db->get('students');
        $stdetils = $query->row();

        $scourses = $stdetils->p_course;

        $expScors = explode(',', $scourses);

        if(strpos(',',$scourses)!==false)
        {
        	array_pop($expScors);
        }

        //  return $expScors;
        // die();

        $c_count = count($expScors);

        $courses="";

        for($i=0;$i<$c_count;$i++)
        {
        	if($courseid==$expScors[$i]||$expScors[$i]=='')
        	{
              
        	}	
        	else
        	{
        		$courses.=$expScors[$i].",";
        	}
        	
        }

        

        // if($courses!='')
        // {
       if($courses=='')
       {
         $data5 = array('p_course'=>'N/A');
       }
       else
       {
       	 $data5 = array('p_course'=>$courses);
       }
        

        $this->db->where('student_id',$userid);
        $query = $this->db->update('students',$data5);


        if($query)
        {
        	$this->db->where('checkouts_id',$ceckid);
        	$this->db->where('checkouts_u_id',$userid);
        	$this->db->where('checkouts_c_id',$courseid);
        	$query3 = $this->db->delete('checkouts'); 

         return $query3;
        }
        else
        {
        	return 0;
        }	

        
        // }
        // else
        // {
        // 	return 2;
        // }	

    }
}	