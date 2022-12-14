<?php 
class Student_exam_model extends CI_Model 
{
   
   function get_available_xam($reg_no)
   {
   	// $this->db->where('qpaper_course',$st_course);
   	// $this->db->where('qpaper_status','1');
   	// $query = $this->db->get('qpaper');
   	// return $query->result();

    $this->db->where('student_civil_id',$reg_no);
      $query = $this->db->get('students');

      $query1 = $query->row();


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

          $qpart1 = "SELECT * FROM qpaper LEFT JOIN course ON qpaper.qpaper_course=course.id WHERE";  

                 $qpart2="";

          
               for($i=0;$i<$c_count;$i++)
                {
                  $lastvalue = $c_count-$i;
                  if($lastvalue==1)
                  {
                    $qpart2.="qpaper_course='".$courses[$i]."' ";
                  }
                  else
                  {
                    $qpart2.="qpaper_course='".$courses[$i]."' OR ";
                  }
                           
                }

            $qpart3= "AND qpaper_status= 1";    

            $squery =  $qpart1." ".$qpart2." ".$qpart3;
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

          $qpart1 = "SELECT * FROM qpaper WHERE";  

                 $qpart2="";

          
               for($i=0;$i<$c_count;$i++)
                {
                  $lastvalue = $c_count-$i;
                  if($lastvalue==1)
                  {
                    $qpart2.="qpaper_course='".$courses[$i]."' ";
                  }
                  else
                  {
                    $qpart2.="qpaper_course='".$courses[$i]."' OR ";
                  }
                           
                }

                $qpart3= "AND qpaper_status= 1";

             $squery =  $qpart1." ".$qpart2." ".$qpart3;
            $query111 = $this->db->query($squery);

            return $query111->result();     
          }

          
      }
      else
        {
          echo "nocourse";
        }  
   }

   function checkexistancecount($s_regno,$qpapercode)
   {
   	 // $this->db->select('count(*)');
     // $this->db->from('exam');
   	 // $this->db->where('s_reg_no',$s_regno);
   	 // $this->db->where('qp_code',$qpapercode);
   	 // $query = $this->db->get();

   	 // return $query->num_rows();

   	$query1 = "SELECT count(*) as samecount FROM exam WHERE s_reg_no = '$s_regno' AND qp_code = '$qpapercode'";
   	$query=$this->db->query($query1);
   	return $query->row();
   }

   function insertStudentXam($data1)
   {
   	$query = $this->db->insert('exam',$data1);
   	return $query;
   }

   function updateStudentXam($data2,$s_regno,$qpapercode)
   {
   	$this->db->where('s_reg_no',$s_regno);
   	$this->db->where('qp_code',$qpapercode);
    $query = $this->db->update('exam',$data2);
    return $query;
   }

   function getquestions($qpapercode)
   {
   	$this->db->where('questions_qcode',$qpapercode);
   	$this->db->where('questions_status','1');
   	$query = $this->db->get('questions');
   	return $query->result();
   }

   function cheq_q_answer($myquestion,$myanswer,$qpcode)
   {
   	$query1 = "SELECT * FROM questions WHERE questions_question='$myquestion' AND questions_qcode='$qpcode' LIMIT 1";
   	$query2 = $this->db->query($query1);

   	$query3 = $query2->row();
    
    $answerColumn = $query3->questions_answer;

    if($answerColumn==$myanswer)
    {
    	return 1;
    }
    else
    {
    	return 0;
    }	

    // $query4 = "SELECT $answerColumn FROM questions WHERE questions_question='$myquestion' AND questions_qcode='$qpcode' LIMIT 1";
    // $query5 = $this->db->query($query4);
    // return $query5->row();

   }


   function updatescore($data3,$regno,$qpcode)
   {
   	$this->db->where('s_reg_no',$regno);
   	$this->db->where('qp_code',$qpcode);
   	$query = $this->db->update('exam',$data3);
   	return $query;
   }

   function get_exam_history($st_regno)
   {
     $query12 = "SELECT count(*) AS xamcount FROM exam WHERE s_reg_no ='$st_regno'";

     $query13 = $this->db->query($query12);

     $query14 = $query13->row();
     $xamscount = $query14->xamcount;

     if($xamscount==0)
     {
        return 0;
     }
     else
     {
   	$this->db->where('s_reg_no',$st_regno);
   	$query = $this->db->get('exam');
   	return $query->result();
     }
   }



   function get_rem_atmts($s_regno,$qpapercode)
   {
   	$this->db->where('s_reg_no',$s_regno);
   	$this->db->where('qp_code',$qpapercode);
   	$query = $this->db->get('exam');
   	return $query->row();
   }

   function getSdetlsForCert($regno)
   {
      // $selqry = "SELECT students.student_id,students.first_name,students.last_name,students.gender,students.dob,students.student_civil_id,students.pass_no,students.email,students.phno,students.qualification,students.picture,students.student_reg,students.student_pwd,course.course AS course_name FROM students LEFT JOIN course ON students.p_course = course.id WHERE students.student_reg = '$regno'";
      // $query5 = $this->db->query($selqry);

    $this->db->where('student_reg',$regno);
    $query5 = $this->db->get('students');


      return $query5->row(); 
   }

   function getcertcount()
   {
    $selqry = "SELECT count(*) as certcount from certification";
    $query1 = $this->db->query($selqry);
    $query2 = $query1->row();
    $certcount = $query2->certcount;
    if($certcount==0)
    {
      return 0;
    }
    else
    {
      $selqry1 = "SELECT * from certification order by cert_id desc Limit 1";
      $query3 = $this->db->query($selqry1);
      return $query3->row();

    }
   }


   function getqstncount($qpapercode)
   {
     $squry = "SELECT count(*) AS questcount FROM questions WHERE questions_qcode='$qpapercode'";
     $query = $this->db->query($squry);
     return $query->row();
   }

}	