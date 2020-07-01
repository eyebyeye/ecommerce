<?php 
 /**
  * 
  */
 class MproductOferta extends CI_Model
 {
 	
 	//Show product of ofert
	public function ShowProducts($sql){
           
          
		
          $res = $this->db->query($sql);
		if ($res->num_rows() > 0) {

			return $res->result();

		}else{
			return false;
		}
	}
 }

 ?>