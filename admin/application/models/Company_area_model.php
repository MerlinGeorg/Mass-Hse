<?php 
class Company_area_model extends CI_Model 
{

		function getcourses()
	{
	    	
				$query8 = $this->db->get('course');
				return $query8->result();
	} 

	function getservices()
	{
		$query = $this->db->get('service');
		return $query->result();
	}

	function insertcompany($data1)
	{
		$query = $this->db->insert('company',$data1);
		return $query;
	}

	function getcomp()
	{
		$squery="SELECT company.company_id,company.company_regno,company.company_name,company.company_project,company.company_certtype,company.company_cors,company.company_serv,company.company_location,company.company_certificate,course.course AS coursname,service.service_name AS servicename FROM company LEFT JOIN course ON company.company_cors=course.id LEFT JOIN service ON company.company_serv=service.service_id";
		$query = $this->db->query($squery);
		return $query->result();
	}

	function edit_comp($id,$table)
	{
		$this->db->where('company_id',$id);
		$query = $this->db->get($table);
		return $query->row();
	}

	function updatecompany($compid,$data1)
	{
		$this->db->where('company_id',$compid);
		$query = $this->db->update('company',$data1);
		return $query;
	}

	function delete_cmop_part($comp_id)
	{
		$this->db->where('company_id',$comp_id);
		$query = $this->db->delete('company');
		return $query;
	}

	function getprojectcont($projctno)
	{
		$squery1 = "SELECT count(*) AS projctnocount FROM company WHERE company_project='$projctno'";
		$query = $this->db->query($squery1);
		return $query->row();
	}
	function getexistprojctno($projctno)
	{
		$squery2 = "SELECT * FROM company WHERE company_project='$projctno' LIMIT 1";
		$query = $this->db->query($squery2);
		return $query->row();
	}

	function search_c_regno($term)
	{
		$squery = "SELECT * FROM company_info WHERE company_info_regno LIKE '%".$term."%'";
		$query =$this->db->query($squery);
		return $query->result();
	}

	function getcomname($cregno)
	{
		$this->db->where('company_info_regno',$cregno);
		$query = $this->db->get('company_info');
        
        if($query->num_rows()=='1')
        {
		  return $query->row(); 
        }	
        else
        {
          return 0;
        }	

	}

}
