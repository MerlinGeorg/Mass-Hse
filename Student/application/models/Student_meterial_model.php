<?php 
class Student_meterial_model extends CI_Model 
{


	function get_student_meterial($civilid)
	{
		$this->db->where('student_civil_id',$civilid);
	    $query = $this->db->get('students');

	    $query1 = $query->row();

	    // $return =array();

	    $s_course = $query1->p_course;

	    if($s_course!='N/A')
	    {
	    	if(strpos($s_course, ',') !== false)
	    	{

	    			
	    			$st_course = $s_course;
	    			$courses = explode(',', $st_course);
	    			array_pop($courses);
	    			$c_count = count($courses);
	    			// $row->meterial=array();

	    		$qpart1 = "SELECT * FROM meterials WHERE";	

                 $qpart2="";

	    		
		    		   for($i=0;$i<$c_count;$i++)
		    		    {
		    		    	$lastvalue = $c_count-$i;
		    		    	if($lastvalue==1)
		    		    	{
		    		    		$qpart2.="module_course='".$courses[$i]."' ";
		    		    	}
		    		    	else
		    		    	{
		    		    		$qpart2.="module_course='".$courses[$i]."' OR ";
		    		    	}
                           
		    		    }

		        $squery =  $qpart1." ".$qpart2;
		        $query111 = $this->db->query($squery);

		        return $query111->result();		    
		    		    
	    	}
	    	else
	    	{
	    	  $st_course = $s_course;
	    			$courses = explode(',', $st_course);
	    			// array_pop($courses);
	    			$c_count = count($courses);
	    			// $row->meterial=array();

	    		$qpart1 = "SELECT * FROM meterials WHERE";	

                 $qpart2="";

	    		
		    		   for($i=0;$i<$c_count;$i++)
		    		    {
		    		    	$lastvalue = $c_count-$i;
		    		    	if($lastvalue==1)
		    		    	{
		    		    		$qpart2.="module_course='".$courses[$i]."' ";
		    		    	}
		    		    	else
		    		    	{
		    		    		$qpart2.="module_course='".$courses[$i]."' OR ";
		    		    	}
                           
		    		    }

		        $squery =  $qpart1." ".$qpart2;
		        $query111 = $this->db->query($squery);

		        return $query111->result();		
	        }

	        
	    }
	    else
        {
          echo "nocourse";
        }  
	   
	}

	function getmeterials($courseid)
	{
		// $this->db->where('module_course');
		// $query  = $this->db->get('meterials');
		// return $query->row();

		$query2 = "SELECT * FROM meterials WHERE module_course = '$courseid' ORDER BY 'ASC'";
	         $query3 = $this->db->query($query2);

	         return $query3->result();
	}


	function getmeterialsinglerow($mid)
	{
		$query2 = "SELECT * FROM meterials WHERE module_id = '$mid' ";
	         $query3 = $this->db->query($query2);

	         return $query3->result();
	}

	function getModule($module_id)
	{
		$this->db->where('module_id',$module_id);
		$query = $this->db->get('meterials');
		return $query->row();
	}


}
