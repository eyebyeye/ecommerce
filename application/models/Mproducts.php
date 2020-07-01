<?php 
/**
 * 
 */
class Mproducts extends CI_Model
{
	
	

//Show product of ofert
	public function ShowProducts($sql){
           
          
		//$res = $this->db->query("SELECT * from productos where oferta =1 and cantidad > 0 limit 0,4");
          $res = $this->db->query($sql);
		if ($res->num_rows() > 0) {

			return $res->result();

		}else{
			return false;
		}
	}

	
//function para contar
	public function CountCar($sql){

		$res = $this->db->query($sql);

		return $res->num_rows();
		
	}

	// //function para contar
	// public function ShowUserId($sql){

	// 	$res = $this->db->query($sql);

	// 	if ($res->num_rows() > 0) {

	// 		return $res->result();

	// 	}else{
	// 		return false;
	// 	}
		
	// }

	//paginar
   public function pagination($sql){
   	// $res = $this->db->query("SELECT * from productos");
   	$res = $this->db->query($sql);
   	return $res->num_rows();
   }
}



// Show product of ofert2
	// public function ShowProducts2(){
           
          
	// 	$res = $this->db->query("SELECT * from productos where oferta =1 and cantidad > 0 limit 4,4");

	// 	if ($res->num_rows() > 0) {
	// 		return $res->result();
	// 	}else{
	// 		return false;
	// 	}
	// }
// Show product of ofert3
	// public function ShowProducts3(){           
          
	// 	$res = $this->db->query("SELECT * from productos where oferta =1 and cantidad > 0 limit 8,4");

	// 	if ($res->num_rows() > 0) {

	// 		return $res->result();

	// 	}else{
	// 		return false;
	// 	}
	// }

	// //show list of category of products
	// public function ShowListCategory(){

	// 	$res = $this->db->query("SELECT * from categoria");
	// 	if ($res->num_rows() > 0) {
	// 	 return $res->result();
	// 	}else{
	// 		return false;
	// 	}
	// }

	// // show list of brand of products
	// public function ShowListBrand(){

	// 	$res = $this->db->query("SELECT * from marcas");

	// 	if ($res->num_rows() > 0) {
	// 		 return $res->result();
	// 	}else{
	// 		return false;
	// 	}
	// }


 ?>