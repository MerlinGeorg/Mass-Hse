<?php 
class Admin_board_model extends CI_Model 
{

	function insert_admission($data1)
	{
      $query = $this->db->insert('course',$data1);
      if($query==1)
      {
      return true;
      }
      else
      {
          return false;
      }
	}

	function get_college()
	{
		$query1 = $this->db->get('course');
		return $query1->result();
	}

	function delete_colg($colid)
	{
		$this->db->where('id',$colid);
		$query2 = $this->db->delete('course');
		return $query2;
	}

	function edit_colg($id,$table)
	{
		$this->db->where('id',$id);  
		$query = $this->db->get($table);  
		return $query->row(); 	
	}

	function col_update($clgid,$data1)
	{
		$this->db->where ('id',$clgid); 
		if($count = $this->db->update('course',$data1))
		{
			return true;

		}

		else
		{
			return false;
		}
	}

  // function col_update($clgid,$data1)
  // {
  //   $this->db->where ('id',$clgid); 
  //   $query7 = $this->db->update('course',$data1);
    
  //   return true;

    
    
  // }

	function validate_login()
	{
		 $username = $this->security->xss_clean($this->input->post('inputUsername'));
        $password = $this->security->xss_clean($this->input->post('inputPassword'));

        $this->db->where('username',$username);

        $this->db->where('password',$password);

        $query3 = $this->db->get('admin_user');

        if($query3->num_rows()==1)
        {
        	$row = $query3->row();

        	$data = array(
                'id'=>$row->id,
                'username'=>$row->username,
                'validate'=>true
        	);

        	$this->session->set_userdata($data);

        	return true;

        }
        else
        {
        	return false;
        }	

	}



    function insert_student($data2)
    {
    	$query4 = $this->db->insert('students',$data2);
    	if($query4==1)
    	{
      return true;
    	}
    	else
    	{
    	return false;
    	}
    }

    // function get_college_part()
    // {
    //   $selqry = "SELECT college.course_id,college.college_name,college.description,college.picture,college.id,course.course FROM college LEFT JOIN course ON college.course_id = course.id";
    // 	$query5 = $this->db->query($selqry);
    // 	return $query5->result();
    // }

    function get_students_list()

    {

      

      // $selqry = "SELECT students.student_id,students.first_name,students.last_name,students.gender,students.dob,students.student_civil_id,students.pass_no,students.email,students.phno,students.qualification,students.picture,students.student_reg,students.student_pwd,course.course AS course_name FROM students LEFT JOIN course ON students.p_course = course.id";
      // $query5 = $this->db->query($selqry);


      // return $query5->result();

      // $selqry = "SELECT * FROM students";
      // $query = $this->db->query($selqry);


      $query =$this->db->get('students');

      $return=array();

      foreach($query->result() as $row)
      {
        $return[$row->student_id]=$row;
        $courses = $row->p_course;

        if($courses!='N/A')
        {  
          if(strpos($courses,',')!==false)
          {
            $expcorse = explode(',', $courses);
            array_pop($expcorse);
          }
          else
          {
            $expcorse = explode(',', $courses);
          }  
          $corscount= count($expcorse);
          $row->cors = array();

          for($i=0;$i<$corscount;$i++)
          {
            array_push($row->cors, $this->takecourses($expcorse[$i]));
          }
        }
        else
        {
          $row->cors = 'N/A';
        }
      }

      return $return;
    }

    function takecourses($cid)
    {
      // $selqry1 = "SELECT * FROM course WHERE id=$cid";
      // $query = $this->db->query($selqry1);
      $this->db->where('id',$cid);
      $query = $this->db->get('course');
      return $query->row();
    }


    function edit_colg_part($id)
    {
       $this->db->where('student_id',$id);  
		   $query6 = $this->db->get('students'); 

     // $selqry1 = "SELECT students.student_id,students.first_name,students.last_name,students.gender,students.dob,students.email,students.phno,students.qualification,students.picture,course.course AS course_name FROM students LEFT JOIN course ON students.p_course = course.id WHERE students.student_id = '$id' ";

     //  $query6 = $this->db->query($selqry1); 

		    return $query6->row(); 		
    }

  //   function colg_update($colgid,$data2)
  //   {
  //   	$this->db->where ('id',$colgid); 

		// if($count = $this->db->update('college',$data2))
		// {
		// 	return true;

		// }

		// else
		// {
		// 	return false;
		// }

  //   }


    function student_update($studntid,$data2)
    {
      $this->db->where('student_id',$studntid); 

    if($count = $this->db->update('students',$data2))
    {
      return true;

    }

    else
    {
      return false;
    }

    }

   function delete_colg_part($st_id)
   {
   	$this->db->where('student_id',$st_id);
		$query7 = $this->db->delete('students');
		return $query7;
   }



   function insert_course($data3)
   {
    
   	$query8 = $this->db->insert('course',$data3);
      return $query8;

   }

   function get_course()
   {
   	// $query9 = $this->db->get('course');

   	// return $query9->result();
    
    $selqry = "SELECT course.id,course.course,course.course_cat,course.course_desc,course.course_code,course.course_pic,category.cat_name AS catname FROM course LEFT JOIN category ON course.course_cat = category.cat_id";
      $query5 = $this->db->query($selqry);


      return $query5->result();
    

   }

   function edit_cors($id,$table)
   {
   	$this->db->where('id',$id);  
		$query10 = $this->db->get($table);  
		return $query10->row(); 	
   }

   function crs_update($crsid,$data3)
   {
   	$this->db->where ('id',$crsid); 
		if($count = $this->db->update('course',$data3))
		{
			return true;

		}

		else
		{
			return false;
		}
   }

   function delete_cors($corsid)
   {
   	$this->db->where('id',$corsid);
		$query11 = $this->db->delete('course');
		return $query11;
   }

   function display_course_only()
   {
   		$query9 = $this->db->get('course');

   	return $query9->result();
   }

   function set_pro($sts,$id)
   {
   	if($sts==0)
   	{
        $prayo = array(

        	'priority'=>1
        );

   		$this->db->where('id',$id);
   		$query12 = $this->db->update('course',$prayo);
   		return $query12;
   	}
   	else
   	{
       $prayo = array(

        	'priority'=>0
        );

   		$this->db->where('id',$id);
   		$query13 = $this->db->update('course',$prayo);
   		return $query13;
   	}
   }

   function set_pro1($status,$id)
   {
    if($status==0)
    {
        $prayo1 = array(

          'priority'=>1
        );

      $this->db->where('id',$id);
      $query14 = $this->db->update('college',$prayo1);
      return $query14;
    }
    else
    {
       $prayo1 = array(

          'priority'=>0
        );

      $this->db->where('id',$id);
      $query14 = $this->db->update('college',$prayo1);
      return $query14;
   }
 }

 function get_cours_cat()
 {
    $query111 = $this->db->get('category');

    return $query111->result();
 }

 function get_st_count()
 {
  // $query = "SELECT count(*) as stcount FROM students ";
  // $query112 = $this->db->query($query);

  $query13 = "SELECT COUNT(*) AS stdentscounts FROM students";
  $query14 = $this->db->query($query13);

  $stdentkal = $query14->row();
  
    if ($stdentkal->stdentscounts == 0) 
    {
          return 0;
    }
    else
    {  
          $query = "SELECT * FROM students ORDER BY student_id DESC  LIMIT 1";
          $query112 =$this->db->query($query);

          return $query112->row();
    }

 }

 
 function checkCivilId($stud_civilId)
 {
  $query112 = "SELECT COUNT(*) AS civilcount FROM students WHERE student_civil_id = '$stud_civilId'";
  $query11 = $this->db->query($query112);

  return $query11->row();
 }

 function checkpassprt($stud_pasport)
 {
   $query112 = "SELECT COUNT(*) AS passportcount FROM students WHERE pass_no = '$stud_pasport'";
   $query11 = $this->db->query($query112);

   return $query11->row();
 }

function civilEditCheck($stud_civilId)
{
  $this->db->where('student_civil_id',$stud_civilId);
  $query132 = $this->db->get('students');
  return $query132->row();
}

function passprteditcheck($stud_pasport)
{
  $this->db->where('pass_no',$stud_pasport);
  $query132 = $this->db->get('students');
  return $query132->row();
}


}