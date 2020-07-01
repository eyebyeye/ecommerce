<?php 
 /**
  * 
  */
 class adminUsuario extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Madministrador/MusuarioList');
 	}

 	//mostrar todos los usuarios registrdo por via de las pagina del administrador

 	// public function ListUsuario(){

 	// 	 $sql = "SELECT * from articulos limit 0,4";
 	// 	 $res = $this->MusuarioList->ShowUsuario($sql);
 	// 	 echo json_encode($res);
 	// }

 		//show products principal
 	// public function ShowProductsPrincipal(){
        

  //         $limite = 8;
  //      if ($this->input->post('pagination') == 1) {
  //         $id_pagina = $this->input->post('id_page');

  //         $star = ($id_pagina * $limite ) -$limite;
  //      }else{
  //       $star = 0;
  //      }

 	// 	$sql = "SELECT * from productos where cantidad > 0 limit $star,$limite";
 	// 	$res = $this->Mproducts->ShowProducts($sql);
 		
 	// 	echo json_encode($res);
 	// }


 	public function ListUsuario1(){
          $limite = 2;

       if ($this->input->post('pagination') == 1) {

          $id_pagina = $this->input->post('id_paginacion');
          $star      = ($id_pagina * $limite ) -$limite;

       }else{

        $star = 0;

       }
          $no = 1;
 		 $sql = "SELECT * from articulos limit $star,$limite";
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
                         <td><a href='#' id='editar'  data-toggle='modal' data-target='#modall' editar='$id'>Editar</a></td>
                         <td><a href='#' id='eliminar' eliminar='$id' >Eliminar</a></td>
                         <td><h4><a href='#'>$cantidadRe</a></h4></td>
                        </tr>";
                        $no++;
 		 	}
 		 }
 		 
 		
 	}
  ///////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////

 	// contrar cantida total usuario agregado
 	public function TotalUser(){
 		$sql = "SELECT * from articulos";
 		$res = $this->MusuarioList->totalUser($sql);
 		echo json_encode($res);
 	}
///////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
 	//total de usuario en carrito.total de  usuario

 	public function totalCart(){
 		$sql = "SELECT * from cart";
 		$res = $this->MusuarioList->totalCart($sql);
 		echo json_encode($res);
 	}
    ///////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
    ///contador de visitasa
    public function CountVisit(){
    	function contador()
			 {
			 	$archivo  = "contador.txt";
			 	$f        = fopen($archivo,"r");
			 	$contador = 0;
			 	if ($f) {
			 		
			 		$contador = fread($f, filesize($archivo));
			 		$contador = $contador + 1;
			 		fclose($f);
			 	}
			     $f = fopen( $archivo, "w+");
			 	if ($f) {
			 		
			 		fwrite($f, $contador);
			 		fclose($f);
			 	}

			 	return $contador;
			 }

			 $visistante = contador();

			    echo $visistante;
			    }
  ///////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////
          // eliminar usuario de pagina administrado
          public function deleteUser(){

            $id = $this->input->post('id');
            $sql = "DELETE  from articulos where user_id = '$id'";
            $res = $this->db->query($sql);

            echo json_encode($res);
            
          }


			    
 	
 }

 ?>