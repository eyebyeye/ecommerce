<?php 

/**
 * 
 */
class Mregister extends CI_Model
{
	
	public function UseReg($sql){

		$res = $this->db->query($sql);

		if ($res) {
			return "si";
		}else{
			return "no";
		}
	}

	
}

 ?>