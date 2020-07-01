<?php 

 /**
  * 
  */
 class CproductOferta extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('MproductOferta');
 	}

 	//show product of ofert
 	public function ShowProducts(){
          $sql = "SELECT * from productos where oferta =1 and cantidad > 0 limit 0,4";
          $res = $this->MproductOferta->ShowProducts($sql);
 		echo json_encode($res);
 	}

 	//show product of ofert2
 	public function ShowProducts2(){
          $sql =  "SELECT * from productos where oferta =1 and cantidad > 0 limit 5,4";
          $res = $this->MproductOferta->ShowProducts($sql);
 		echo json_encode($res);
 	}
 	//show product of ofert3
 	public function ShowProducts3(){
          $sql =  "SELECT * from productos where oferta =1 and cantidad > 0 limit 9,4";
          $res = $this->MproductOferta->ShowProducts($sql);
 		echo json_encode($res);
 	}
 }
 ?>