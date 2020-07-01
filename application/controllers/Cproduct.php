<?php 	

 /**
  * 
  */
 class Cproduct extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mproducts');
 		$this->load->library('pagination');
    $this->load->model('Msearch');
    $this->load->model('Mcategoria');
 		
 		
 	}

  //prueva DE ID
  PUBLIC function PUI(){

    $this->load->view('layout/Vhead');
    $this->load->view('ProductoDescriccion/Descriccion');
    $this->load->view('layout/Vfooter');
  }

  public function confirmadoEmail(){
    $this->load->view('layout/Vhead');
    $this->load->view('cofirmadoE');
    $this->load->view('layout/Vfooter');
  }

  //vistad configuarcion
  public function adminU(){

    $this->load->view('layout/HeadVadmin');
    $this->load->view('administrador/adminU');
    $this->load->view('layout/Vfooter');
  }

  //admin agregar mas product
  public function addProduct(){
     $this->load->view('layout/HeadVadmin');
     $this->load->view('administrador/addProduct');
     $this->load->view('layout/Vfooter');
  }

  //editar productos  admin
  public function ProductosEdi(){
     $this->load->view('layout/HeadVadmin');
    $this->load->view('administrador/productosAdmin');
    $this->load->view('layout/Vfooter');
  }
 

  //prueva DE ID
  PUBLIC function VverificarEmail(){

    $this->load->view('layout/Vhead');
    $this->load->view('VverificarEmail');
    $this->load->view('layout/Vfooter');
  }

    //register
  PUBLIC function register(){

    $this->load->view('layout/Vhead');
    $this->load->view('register');
    $this->load->view('layout/Vfooter');
  }

  //contatos
  public function Contactos(){
    $this->load->view('layout/Vhead');
    $this->load->view('Contactos');
    $this->load->view('layout/Vfooter');
  }

  //llar carri
  PUBLIC function Cart(){

    $this->load->view('layout/Vhead');
    $this->load->view('cart/cart');
    $this->load->view('layout/Vfooter');
  }

 	public function index(){
 		$this->load->view('layout/Vhead');
 		$this->load->view('products/Vindex');
 		$this->load->view('layout/Vfooter');

 	}


 

 	
 	

 	//count product in the little car

 	public function CountCar(){

    //count products while id of users equal to id return
    $idC = $this->input->post('idC');
    $sql = "SELECT * from cart where user_id= '$idC'";

 		$res = $this->Mproducts->CountCar($sql);
 		
 			echo json_encode($res);
 		
 		
 	}

 	//show products principal
 	public function ShowProductsPrincipal(){
        

          $limite = 8;
       if ($this->input->post('pagination') == 1) {
          $id_pagina = $this->input->post('id_page');

          $star = ($id_pagina * $limite ) -$limite;
       }else{
        $star = 0;
       }

 		$sql = "SELECT * from productos where cantidad > 0 limit $star,$limite";
 		$res = $this->Mproducts->ShowProducts($sql);
 		
 		echo json_encode($res);
 	}

 
 	//paginar 
 	public function pagination(){
     $sql = "SELECT * from productos";
 		$res = $this->Mproducts->pagination($sql);
    $re = $res /8;
 		echo json_encode($re);
 	}

    //paginar usuario todos enpagina de administrado 
  public function pagination2(){
    $sql = "SELECT * from articulos";
    $res = $this->Mproducts->pagination($sql);
    $red = ceil($res/2);
    echo json_encode($red);
  }

 public function ShowUserId(){
      
       $idC = $this->input->post('idC');
    $sql = "SELECT * from cart where user_id= '$idC'";

    $res = $this->Mproducts->ShowProducts($sql);
    
      echo json_encode($res);

 }

  
 }
 ?>