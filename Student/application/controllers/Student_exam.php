<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_exam extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Student_exam_model');
    	$this->load->model('Student_profile_model');
	}

	public function index()
	{ 
	 	
    if(isset($_SESSION['username'])){
      
      $reg_no = $_SESSION['username'];
      
      $st_dtls =$this->Student_profile_model->get_student_dtls($reg_no);

      $st_course = $st_dtls->p_course;

      $st_regno = $st_dtls->student_reg;

      $st_xam = $this->Student_exam_model->get_available_xam($reg_no);

      $st_xam_histry = $this->Student_exam_model->get_exam_history($st_regno);

      

      if($st_xam_histry==0)
      {
      	$st_xam_histry=0;
      }
      
      $a = array( 'content' => 'student_exam_view',
    	          'xam'=>$st_xam,
    	          'st_xam_histry'=>$st_xam_histry
			   );

    $this->load->view('admintemplate',$a);
    }
    else
    {
      redirect('Student_login');
    }
   
	}


	public function get_exam_view()
	{
        $qpapercode= $this->input->post('qp_code');
        $xamname= $this->input->post('xamname');
        $coursename= $this->input->post('corsname');
        $coursecode= $this->input->post('corscode');

        // echo $coursename;
        // die();

        $qcount = $this->Student_exam_model->getqstncount($qpapercode);
        $questcount = $qcount->questcount;

        if($questcount=='0')
        {
           echo "noquestion";
        }
        else
        {
		if(isset($_SESSION['username']))
		{
			$civilId = $_SESSION['username'];
			$st_dtls =$this->Student_profile_model->get_student_dtls($civilId);
			$s_regno = $st_dtls->student_reg;

			$xam_strtTime = date('Y-m-d h:i:sa');

			$data1 = array
			(
              's_reg_no'=>$s_regno,
              'qp_code' =>$qpapercode, 
              's_score'=>'n/a',
              'cutoff'=>'n/a',
              'xam_status'=>0,
              'rem_attempt'=>2,
              'xam_time_start'=>$xam_strtTime

			);

			$res = $this->Student_exam_model->checkexistancecount($s_regno,$qpapercode);

			$samexamcount = $res->samecount;
			


			if($samexamcount==0)
			{

				$res123 = $this->Student_exam_model->insertStudentXam($data1);

				if($res123 == 1)
				{
					$xamdata['regno'] =  $s_regno;

					$xamdata['qpcode'] = $qpapercode;

					$xamdata['xamename'] = $xamname;

          $xamdata['cours'] = $coursename;
          $xamdata['courscode'] = $coursecode; 

				    $xamdata['questions'] = $this->Student_exam_model->getquestions($qpapercode);
                
                    $this->load->view('examination_view',$xamdata); 

				}
				else
				{
					echo "failed";
				}	
			}
			else
			{
				
              $rest231 = $this->Student_exam_model->get_rem_atmts($s_regno,$qpapercode);

              $exist_rem_atmpts = $rest231->rem_attempt;

              $rem_atmts = $exist_rem_atmpts-1;

				$data2 = array(

					'rem_attempt'=>$rem_atmts,
                    'xam_time_start'=>$xam_strtTime
				);

				$res123 = $this->Student_exam_model->updateStudentXam($data2,$s_regno,$qpapercode);

				if($res123 == 1)
				{
					$xamdata['regno'] =  $s_regno;

					$xamdata['qpcode'] = $qpapercode;

					
					$xamdata['xamename'] = $xamname;

          $xamdata['cours'] = $coursename;
          $xamdata['courscode'] = $coursecode;

				    $xamdata['questions'] = $this->Student_exam_model->getquestions($qpapercode);
                
                    $this->load->view('examination_view',$xamdata); 

				}
				else
				{
					echo "failed";
				}

				echo "exist";	
			}


		}
	  }	
	}


    public function checkaswerpaper()
    {
    	$regno = $this->input->post('xamregno');
    	$xamname = $this->input->post('xamname');
    	$qpcode = $this->input->post('xamqpcode');
    	$question = $this->input->post('question');
      $xamcourse = $this->input->post('xamcourse');
      $xamcoursecode = $this->input->post('xamcoursecod');
    	// $answer = $this->input->post('option');
        
        $qstn_count = sizeof($question);

        // echo $qstn_count;
        // die();

        $totalscore = $qstn_count*2;

        $cutoffpercent = 70;

        $cutoffmark = ($cutoffpercent/100)*$totalscore;

        $xam_endTime = date('Y-m-d h:i:sa');

     $s_score=0;
    	for($i=0;$i<sizeof($question);$i++)
      {
        $myquestion = $question[$i];
        $myanswer = $this->input->post('option'.$i);

        $qst_reslt = $this->Student_exam_model->cheq_q_answer($myquestion,$myanswer,$qpcode);

        if($qst_reslt==1)
        {
        	$s_score=$s_score+2;
        }
      }

       if($s_score>=$cutoffmark) 
       {
           $data3 = array(
           	  's_score'=>$s_score,
           	  'cutoff'=>$cutoffmark,
              'xam_status'=>1,
              'rem_attempt'=>0,
              'xam_time_end'=>$xam_endTime
          	);

           $res = $this->Student_exam_model->updatescore($data3,$regno,$qpcode);

           if($res==1)
           {
           	  ?>

           	  <script type="text/javascript">
           	  	
           	  	// window.location.href="<?php echo base_url(); ?>index.php/Student_exam";

           	  	alert("Congratulations. You passed the exam .Score will be available at exam session");
           	  </script>
              <?php

              $b['hs'] = $this->Student_exam_model->getSdetlsForCert($regno);

              $b['xamcors']=$xamcourse;  
              $b['xamcorscod']=$xamcoursecode;
              // $b['hs'] ="hello";
              
              $this->load->view('hse_cert_pdf_auto2',$b);

 

           }
           else
           {
           	echo "Oops!";
           }
       	   
       }
       else
       {
       	   $data3 = array(
           	  's_score'=>$s_score,
           	  'cutoff'=>$cutoffmark,
              'xam_status'=>2,
              'xam_time_end'=>$xam_endTime
          );

           $res = $this->Student_exam_model->updatescore($data3,$regno,$qpcode);

           if($res==1)
           {
            ?>

           	  <script type="text/javascript">
           	  	
           	  	

           	  	window.location.href="<?php echo base_url(); ?>index.php/Student_exam";

           	  	alert("Sorry. You failed.please retry");
           	  </script>

           	  <?php
            }
           else
           {
           	echo "Oops!";
           }
       }  

      
    }


    public function getlastseriel()
    {

       $donly =date('d');
       $monly =date('m');
       $yonly =date('y');

      
       $res1 = $this->Student_exam_model->getcertcount();

        if($res1 =='0')
        {
           $seriolno = "MASS-".$yonly."-".$monly."-".$donly."-001";
        }
        else
        {
          
          
          $cert_sr= $res1->cert_sr_no;

          $exp_sr = explode('-', $cert_sr);

          $lastno = "";

          for($i=0;$i<count($exp_sr);$i++)
          {
            if($i==4)
            {
                  $lastno.=$exp_sr[$i];
            }
          }

          $lastno = $lastno+1;

          echo $seriolno = "MASS-".$yonly."-".$monly."-".$donly."-00".$lastno;
        }
    }

}
