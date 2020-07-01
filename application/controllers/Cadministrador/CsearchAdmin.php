<?php 

/**
 * 
 */
class CsearchAdmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->model('Madministrador/MsearchAdmin');//
	}

	//search product in time real

  public function SearchAdmin(){
    

    $buscar = $this->input->post('buscar');
    
    
    // $limite = 2;

    //    if ($this->input->post('pagination') == 1) {

    //       $id_pagina = $this->input->post('id_paginacion');
    //       $star      = ($id_pagina * $limite ) -$limite;

    //    }else{

    //     $star = 0;

       // }
          $no = 1;
 		 $sql = "SELECT * from articulos where email like '%".$buscar."%' limit 0,2";
 		 $res = $this->db->query($sql);

 		 if ($res->num_rows() > 0) {
 		 	$r = $res->result(); 
 		 	foreach ($r as $a) {
               
 		 		$id       = $a->user_id;
 		 		$nombre   = $a->firs_name;
 		 		$apellido = $a->last_name;
 		 		$email    = $a->email;
 		 		$pass     = $a->password;
 		 		$telefono = $a->mobile;

 		 		 $sql   = "SELECT * from cart where user_id = '$id'";
 		 		 $res = $this->db->query($sql);
 		 		 $cantidadRe = $res->num_rows();


 		 		 echo "<tr>      
                         <td>$no</td>
                         <td>$id</td>
                         <td>$nombre</td>
                         <td>$apellido</td>
                         <td>$email</td>
                         <td>$pass</td>
                         <td>$telefono</td>
                         <td><a href='#' id='editar' class='editar'  data-toggle='modal' data-target='#modal' editarr='$id'>Editar</a></td>
                         <td><a href='#' id='eliminar' eliminar='$id' >Eliminar</a></td>
                         <td><h4><a href='#'>$cantidadRe</a></h4></td>
                        </tr>";
                        $no++;
		 		 	}
			 }
 		 }

  

}

 ?>
   
