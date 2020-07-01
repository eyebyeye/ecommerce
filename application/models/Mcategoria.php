<?php 	
  
  /**
   * 
   */
  class Mcategoria extends CI_Model
  {
  	
  	public function ShowCategoria($sql){

  		 $res = $this->db->query($sql);
  		 if ($res->num_rows() > 0) {
  		 	return $res->result();
  		 	# code...
  		 }else{

  		 	return false;
  		 }
  	}
  }

 ?>