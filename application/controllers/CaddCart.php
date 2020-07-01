<?php 	

/**
 * 
 */
class CaddCart extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MaddCart');
	}

	public function addCart(){
     
     $parametro = $this->input->post('parametro');
     $amount    = $this->input->post('amount');

    
     $res = $this->MaddCart->addCart($parametro,$amount);
     echo json_encode($res);
		
	}
//mostrar productos agreados al carrito en la pagina del usuario
	public function ShowCart(){

		$usuario_id = $this->session->userdata('user_idS');
     
     $sql = "SELECT * from cart where user_id= '$usuario_id'";

    
     $res = $this->MaddCart->ShowCartP($sql);
     echo json_encode($res);
		
	}

	//current products in the cart 
	public function CurrentCart(){

		$precio      = $this->input->post('precio');
		$cantidad    = $this->input->post('cantidad');
		$total_monto = $this->input->post('total_monto');
		$id_producto = $this->input->post('id_producto');
		$usuario_id  = $this->session->userdata('user_idS');
		

		 $sql = "UPDATE cart set qty = '$cantidad', precio = '$precio',total_monto = '$total_monto' where user_id = '$usuario_id' and p_id = '$id_producto' ";

		$res = $this->MaddCart->CurrentCart($sql);

                 echo json_encode($res);
	}
	

	//delete
	 //actualizar

    public function DeleteCart($sql){

    	$id_producto = $this->input->post('id_producto');
		$usuario_id  = $this->session->userdata('user_idS');

          $sql = "DELETE FRom cart where user_id = '$usuario_id' and p_id = '$id_producto' ";

        $res = $this->db->query($sql);

        echo json_encode($res);
    }

    public function BotonP(){

         $usuario_id  = $this->session->userdata('user_idS');    	 
         $sql      = "SELECT * FROM cart where user_id = '$usuario_id'";
         $res = $this->MaddCart->CartB($sql);


       
    	echo json_encode($res);
    }
}

 ?>