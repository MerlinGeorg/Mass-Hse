<?php 
class Purchase_model extends CI_Model 
{
   

   function allcategories()
   {
   	$query = $this->db->get('category');
   	return $query->result();
   }

   function allbrands()
   {
   	$query1 = $this->db->get('brand');
   	return $query1->result();
   }

   function insertpurchase($data)
   {
      $query2 = $this->db->insert('purchase',$data);
      return $query2;
   }


}	
