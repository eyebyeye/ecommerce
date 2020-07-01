<?php 	
 /**
  * 
  */
 class MaddCart extends CI_Model
 {
    
    public function addCart($parametro,$amount){
    	
    	
        $usuario_id = $this->session->userdata('user_idS');
    	$sql = "SELECT * from productos where productos_id = '$parametro'"; 
    	$res = $this->db->query($sql);
    	if ($res->num_rows() > 0) {
    		$r = $res->row();
    		
    		 $id   = $r->productos_id;
    		 $title   = $r->productos_title;
    		 $image   = $r->productos_image;
    		 $precio  = $r->productos_precio;
    	     $total   = $amount * $precio;

    		$sql1     = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `productos_title`,
				                    `productos_image`, `qty`, `precio`, `total_monto`)
				                     VALUES
				                     (NULL, '$parametro', '0', '$usuario_id', '$title', '$image', $amount, 
				                     '$precio', '$total')";
	         $res2 = $this->db->query($sql1);

	        if ($res2 == true) {

	        	return 1;
	        	# code...
	        }else{
	        	return 0;
	        }

       
    	}
    }

    //mostrar produtcos agregado al carrito por usuario en la pagia del usuario

    public function ShowCartP($sql){
         
        $res = $this->db->query($sql);

        if ($res->num_rows() > 0) {
             return $res->result();

            //$r = $res->row();


        }else{
            return false;
        }
    }
    

    //actualizar

    public function CurrentCart($sql){

        $res = $this->db->query($sql);

        if ($res) {
            
            return "si";
        }else{
            return "no";
        }
    }

    public function CartB($sql){
        
        $res = $this->db->query($sql);

        if ($res->num_rows() > 0) {
             return $res->result();

            //$r = $res->row();


        }else{
            return false;
        }

    }

     
 }

 ?>