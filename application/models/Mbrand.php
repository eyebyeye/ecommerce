<?php 
  
  /**
   * 
   */
  class Mbrand extends CI_Model
  {
  	
  	public function ShowBrandId($sql){

  		$res = $this->db->query($sql);
  		if ($res->num_rows() > 0) {
  			  return $res->result();
  		}else{
  			return false;
  		}
  	}

  	//function for count the brand
  	// public function CountBrand($sql){

  	// 	$res = $this->db->query($sql);
  	// 	 return $res->num_rows();
  	// }
  }
 ?>