<?php 
/**
 * 
 */
class MusuarioList extends CI_Model
{
	
	public function ShowUsuario($sql){

		$res = $this->db->query($sql);

		if ($res->num_rows() > 0) {
			 return $res->result();
		}else{
			return false;
		}
	}
    
    //mostrar total de usuarioo agregado

    public function totalUser($sql){

    	$res = $this->db->query($sql);
    	 return $res->num_rows();
    }

    public function totalCart($sql){

    	$res = $this->db->query($sql);
    	if ($res->num_rows() > 0) {
    		return $res->result();
    	}else{
    		return false;
    	}
    }


     public function deleteUser($sql){

        $res = $this->db->query($sql);
        if ($res->num_rows() > 0) {
            return 1;
        }else{
            return false;
        }
    }
	
}


 ?>