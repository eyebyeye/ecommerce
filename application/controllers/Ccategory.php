<?php 
 
 /**
  * 
  */
 class Ccategory extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mcategoria');

 	}

 	//show list of category of the products
 	public function ShowListCategory(){
 		$sql =  "SELECT * from categoria";
 		$res = $this->Mcategoria->ShowCategoria($sql);
 		echo json_encode($res);
 	}

 	public function ShowCategoriaId(){
      
     $categoryId = $this->input->post('categoryId');
     $sql = "SELECT * from productos where productos_cat = '$categoryId'";
     $res = $this->Mcategoria->ShowCategoria($sql);

     echo json_encode($res);
  }
 }

 ?>