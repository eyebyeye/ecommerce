<?php 
/**
 * 
 */
class Cbrand extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mbrand');
	}

	public function ShowBrandId(){
		$brandId = $this->input->post('brandId');
		$sql = "SELECT * from productos where productos_brand = '$brandId'";
		$res = $this->Mbrand->ShowBrandId($sql);

		echo json_encode($res);
	}

//show list of brand of the products
 	public function ShowListBrand(){
        
        $sql = "SELECT * from marcas";
 		$res = $this->Mbrand->ShowBrandId($sql);
 		echo json_encode($res);
 	}
		
	
}

 ?>