<?php 
class Student_checkout_model extends CI_Model 
{

    function getcoupencount($couponcode)
   {
      $squery ="SELECT count(*) AS couponcount FROM coupon WHERE coupon_code='$couponcode'";
      $query= $this->db->query($squery);
      return $query->row(); 
   }

   function getcoupon($couponcode)
   {
   	$this->db->where('coupon_code',$couponcode);
   	$query = $this->db->get('coupon');
   	return $query->row();
   }

   function getcartitems($userid)
   {
   	$this->db->where('cart_s_id',$userid);
   	$query = $this->db->get('cart');
   	return $query->result();
   }

   function insertcheckout($data3,$corsid,$userid)
   {
     $squery = "SELECT count(*) AS sameitemcount FROM checkouts WHERE checkouts_u_id='$userid' AND checkouts_c_id='$corsid'";
     $query1 = $this->db->query($squery);

     $query2 = $query1->row();

     $samecount = $query2->sameitemcount;

      if($samecount==0)
      {
         $query = $this->db->insert('checkouts',$data3);
         return $query;
      } 
      else
      {
        $this->db->where('checkouts_u_id',$userid);
        $this->db->where('checkouts_c_id',$corsid);
        $query = $this->db->update('checkouts',$data3);
        return $query;
      } 
          

   }

   function getuserexistcorse($userid)
   {
   	$this->db->where('student_id',$userid);
   	$query = $this->db->get('students');
   	return $query->row();
   }

   function updateusercourse($userid,$data4)
   {
   	$this->db->where('student_id',$userid);
   	$query = $this->db->update('students',$data4);
   	return $query;
   }

   function deletecartitems($userid)
   {
   	$this->db->where('cart_s_id',$userid);
   	$query = $this->db->delete('cart');
   	return $query;
   }
}	