<?php 
class Category_model extends CI_Model 
{

	function insert_category($data1)
	{
      $query = $this->db->insert('category',$data1);
      if($query==1)
      {
      return true;
      }
      else
      {
          return false;
      }
	}

	function get_category_part()
	{
		$query1 = $this->db->get('category');
		return $query1->result();
	}

	function delete_cat_part($colcat_id)
	{
		$this->db->where('cat_id',$colcat_id);
		$query2 = $this->db->delete('category');
		return $query2;
	}

	function edit_cat_part($cat_id,$table)
	{
		$this->db->where('cat_id',$cat_id);  
		$query = $this->db->get($table);  
		return $query->row(); 	
	}

	function update_category($clgcat_id,$data1)
	{
		$this->db->where ('cat_id',$clgcat_id); 
		if($count = $this->db->update('category',$data1))
		{
			return true;

		}

		else
		{
			return false;
		}
	}

  // function col_update($clgcat_id,$data1)
  // {
  //   $this->db->where ('cat_id',$clgcat_id); 
  //   $query7 = $this->db->update('category',$data1);
    
  //   return true;

    
    
  // }

	

}