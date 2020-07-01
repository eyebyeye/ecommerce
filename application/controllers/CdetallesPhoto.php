<?php 
/**
 * 
 */
class CdetallesPhoto extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MdetallesPhoto');
	}

	public function ShowDetallesPhono(){

		$parametro = $this->input->post('parametro');
		$sql = "SELECT * from productos where productos_id='$parametro'";
		$res = $this->MdetallesPhoto->ShowDetalles($sql);
		echo json_encode($res);
	}
}


 ?>