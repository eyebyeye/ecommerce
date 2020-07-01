<?php 
/**
 * 
 */
class Cregister extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mregister');
	}

	public function agregarUsuario(){
		

		$nombre       = $this->input->post('nombre');
		$apellido      = $this->input->post('apellido');
		$email        = $this->input->post('email');
		$pass1        = $this->input->post('pass1');	
		$pais         = $this->input->post('pais');
		$direccion1    = $this->input->post('direccion');
		$telefono     = $this->input->post('telefono');
		$sql1 = "SELECT * from articulos  where email ='$email'";
		$emaily = $this->db->query($sql1);

		if ($emaily->num_rows() > 0) {
			sleep(3);
			echo json_encode(1);
		}else{

		$sql = "INSERT into articulos (firs_name,last_name,email,password,mobile,address1)
		values('$nombre','$apellido','$email','$pass1','$telefono','$direccion1')";

		$res = $this->Mregister->UseReg($sql);
        sleep(1);
		echo json_encode($res);
	   }
	}

    //add user new for page of administrador

	  public function agregarUsuarioAdmin(){
		
                $nombre   = $this->input->post('name');
			 	$apellido = $this->input->post('apellido');
			 	$email    = $this->input->post('email');
			 	$pass     = $this->input->post('pass');
			 	$telefono = $this->input->post('telefono');

		        $sql1 = "SELECT * from articulos  where email ='$email'";
		        $emaily = $this->db->query($sql1);

				if ($emaily->num_rows() > 0) {
					sleep(3);
					echo json_encode(1);
				}else{

				$sql = "INSERT into articulos (firs_name,last_name,email,password,mobile)
				values('$nombre','$apellido','$email','$pass','$telefono')";

				$res = $this->Mregister->UseReg($sql);
		        sleep(1);
				echo json_encode($res);
			   }
			}
	

	
}

// public function insertarUsuarios($objUsuarios){
		
	// 	$conexion   = new Conexion();

	// 	$nombre     = $objUsuarios->getNombre();
	// 	$apellido   = $objUsuarios->getApellido();
	// 	$email      = $objUsuarios->getEmail();
	// 	$pass       = $objUsuarios->getPass();
	// 	$telefono   = $objUsuarios->getTelefono();
	// 	$direccion1 = $objUsuarios->getDireccion1();
	// 	$direccion2 = $objUsuarios->getDireccion2();

	// 	$sql = "INSERT into articulos (firs_name,last_name,email,password,mobile,address1,address2)
	// 	values('$nombre','$apellido','$email','$pass','$telefono','$direccion1','$getDireccion2')";

	// 	mysqli_query($conexion->cone,$sql)or die(" Error al insertar");
	// }

// class Usuarios
//   {
//   	public $nombre;
//   	public $apellido;
//   	public $email;
//   	public $pass;
//   	public $pais;
//   	public $ciudad;
//   	public $direccion;
//   	public $telefono;
  	
//   	function Usuarios()
//   	{
  		
//   	}


//   	//obtener valores

//   	public function setNombre($valor)  { $this->nombre   = $valor; }
//   	public function setApellido($valor){ $this->apellido = $valor; }
//   	public function setEmail($valor)   { $this->email    = $valor; }
//   	public function setPass($valor)    { $this->pass     = $valor; }
//   	public function setPais($valor)    { $this->pais     = $valor; }
//   	public function setCiudad($valor)  { $this->ciudad   = $valor; }
//   	public function setDireccion($valor){$this->direccion= $valor; }
//   	public function setTelefono($valor){ $this->telefono = $valor; }

//   	//devolver valores

//   	public function getNombre(){ return $this->nombre; }
//   	public function getApellido(){ return $this->apellido; }
//     public function getEmail(){ return $this->email;  }
//     public function getPass(){ return $this->pass; }
//     public function getPais(){ return $this->pais; }
//     public function getCiudad(){ return $this->ciudad;  }
//     public function getDireccion(){ return $this->direccion; }
//     public function getTelefono(){ return $this->telefono; }
   
//   }

 ?>