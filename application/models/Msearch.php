<?php 
  
  /**
   * 
   */
  class Msearch extends CI_Model
  {
  	
  	public function Search($sql){

  		
  		$res = $this->db->query($sql);
  		if ($res->num_rows() > 0) {
  			return $res->result();
  		}else{
  			return false;
  		}

  	}
  }

 ?>