<?php 
  
  /**
   * 
   */
  class Mlogin extends CI_Model
  {
  	
  	//starting Session
  	public function StartSession($sql){

  		$res = $this->db->query($sql);
  		if ($res->num_rows() == 1) {
  			$get = $res->row();
  			$this->session->set_userdata('user_idS',$get->user_id);
        $this->session->set_userdata('emailS',$get->email);
        $this->session->set_userdata('stadoS',$get->stadoEmail);
        $this->session->set_userdata('adminS',$get->admin);
        $adminS = $this->session->userdata('adminS');

        if ($adminS == 1) {
           return 2;
        }else if($adminS == 0){

        		return 1;
        		}else{
        			return false;
        		}
    }

  	}
  }
 ?>