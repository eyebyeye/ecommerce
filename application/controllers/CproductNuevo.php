<?php 

/**
 * 
 */
class CproductNuevo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MproductNew');
	}
		// Show products new add

 	public function ShowProductNew(){

 		$sql = "SELECT * from productos where cantidad > 0 limit 0,4";

 		$res = $this->MproductNew->ShowProducts($sql);
 		echo json_encode($res);
 	}

 	// Show products new add2

 	public function ShowProductNew2(){

 		$sql = "SELECT * from productos where cantidad > 0 limit 5,4";

 		$res = $this->MproductNew->ShowProducts($sql);
 		echo json_encode($res);
 	}

 	// Show products new add3

 	public function ShowProductNew3(){

 		$sql = "SELECT * from productos where cantidad > 0 limit 9,4";

 		$res = $this->MproductNew->ShowProducts($sql);
 		echo json_encode($res);
 	}
}


?>