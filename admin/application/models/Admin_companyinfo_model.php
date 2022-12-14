<?php 
class Admin_companyinfo_model extends CI_Model 
{

   function getregcount($companyregno,$compmail)
   {
   	$squery="SELECT count(*) AS sameregcount FROM company_info WHERE company_info_regno='$companyregno'";
   	$query = $this->db->query($squery);
   	$query1 = $query->row();
      $regcount = $query1->sameregcount;

      if($regcount=='0')
      {
         $squery1="SELECT count(*) AS samemailcount FROM company_info WHERE company_info_mail='$compmail'";
         $query2 = $this->db->query($squery1);
         $query3 = $query2->row();
         $mailcount = $query3->samemailcount;
         if($mailcount=='0')
         {
            return "0";
         }
         else
         {
            return "mailexist";
         }   
      }
      else
      {
         return "regexist";
      }  
   }

   function getsamereg($companyregno)
   {
   	$this->db->where('company_info_regno',$companyregno);
   	$query = $this->db->get('company_info');
   	return $query->row();
   }

   function insertcompany($data1)
   {
   	$query = $this->db->insert('company_info',$data1);
    return $query;
   }

   function getcomp()
   {
   	$query = $this->db->get('company_info');
   	return $query->result();
   }

   function edit_comp($id)
   {
   	$this->db->where('company_info_id',$id);
   	$query= $this->db->get('company_info');
   	return $query->row();
   }

   function updatecompany($data1,$compinfo_id)
   {
   	$this->db->where('company_info_id',$compinfo_id);
   	$query = $this->db->update('company_info',$data1);
   	return $query;
   }

   function delete_cmop_part($comp_id)
   {
   	$this->db->where('company_info_id',$comp_id);
   	$query = $this->db->delete('company_info');
   	return $query;
   }

   function getsamemail($compmail)
   {
      $this->db->where('company_info_mail',$compmail);
      $query = $this->db->get('company_info');
      return $query->row();
   }

   function get_c_count()
   {
      $query13 = "SELECT COUNT(*) AS companycounts FROM company_info";
      $query14 = $this->db->query($query13);

      $comps = $query14->row();
  
       if ($comps->companycounts == 0) 
       {
             return 0;
       }
       else
       {  
             $query = "SELECT * FROM company_info ORDER BY company_info_id DESC  LIMIT 1";
             $query112 =$this->db->query($query);

             return $query112->row();
       }
   }

}