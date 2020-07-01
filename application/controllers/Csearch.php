<?php 

/**
 * 
 */
class Csearch extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Msearch');
	}

	//search product in time real

  public function Search(){
    

    $buscar = $this->input->post('buscar');
    
    
    
    $sql = "SELECT * from productos where   productos_keyword like '%".$buscar."%' limit 0,8";
  
    $res = $this->Msearch->Search($sql);

    echo json_encode($res);
  }

}

 ?>