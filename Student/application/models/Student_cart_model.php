<?php 
class Student_cart_model extends CI_Model 
{
   
   function get_courses($stid)
   {
   	$squery = "SELECT cart.cart_id,cart.cart_c_name,cart.cart_item_price,course.course_pic AS coursepic,course.course_code AS coursecode FROM cart LEFT JOIN course ON cart.cart_c_id = course.id WHERE cart.cart_s_id='$stid'";
   	$query =$this->db->query($squery);
   	return $query->result();
   }

   function removecrtitem($cartid,$st_id)
   {
   	// $squery1 = "DELETE * FROM cart WHERE cart_id ='$cartid' AND cart_s_id='$st_id'";
   	// $query = $this->db->query($squery1);

   	$this->db->where('cart_id',$cartid);
   	$this->db->where('cart_s_id',$st_id);
    $query = $this->db->delete('cart');

   	return $query;
   }


   
}	