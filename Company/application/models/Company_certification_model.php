<?php 
class Company_certification_model extends CI_Model 
{



function get_cert($regno)
{
 //     $this->db->where('company_regno',$regno);
	// $query124 = $this->db->get('company'); 

	// return $query124->result();

	$squery ="SELECT * FROM company LEFT JOIN course ON company.company_cors=course.id LEFT JOIN service ON company.company_serv=service.service_id WHERE company.company_regno='$regno'";
	$query=$this->db->query($squery);
	return $query->result();
}




}

