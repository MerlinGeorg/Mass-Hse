<?php 
class Student_register_model extends CI_Model 
{

    function getcourse()
    {
    	$query = $this->db->get('course');
    	return $query->result();
    }


    function get_st_count()
    {

	  $query13 = "SELECT COUNT(*) AS stdentscounts FROM students";
	  $query14 = $this->db->query($query13);

	  $stdentkal = $query14->row();
	  
	    if ($stdentkal->stdentscounts == 0) 
	    {
	          return 0;
	    }
	    else
	    {  
	          $query = "SELECT student_id FROM students ORDER BY student_id DESC  LIMIT 1";
	          $query112 =$this->db->query($query);

	          return $query112->row();
	    }

    }


    function checkmail($mail)
    {
    	$query1 = "SELECT count(*) as existmail FROM students WHERE email = '$mail'";
	          $query112 =$this->db->query($query1);
	          return $query112->row();
    }

    function checkcivil($civilid)
    {
    	$query1 = "SELECT count(*) as existcivil FROM students WHERE student_civil_id = '$civilid'";
	          $query112 =$this->db->query($query1);
	          return $query112->row();
    }

    function checkpasspo($passpo)
    {
    	$query1 = "SELECT count(*) as existpasp FROM students WHERE pass_no = '$passpo'";
	          $query112 =$this->db->query($query1);
	          return $query112->row();
    }

    function insertStudent($data3)
    {
    	$query = $this->db->insert('students',$data3);
    	return $query;
    }

}	