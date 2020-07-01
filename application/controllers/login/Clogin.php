<?php 
 /**
  * 
  */
 class Clogin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mlogin/Mlogin');

 	}

 	public function index(){
 		$this->load->view("layout/Vhead");
 		$this->load->view("perfil/perfil");
 		$this->load->view("layout/Vfooter");
 		
 	}

 	//starting Session
 	public function StartSession(){
        
         $email = $this->input->post('email');
         $pass  = $this->input->post('pass');
 		$sql = "SELECT * from articulos where email = '$email' and password='$pass'";
 		$res = $this->Mlogin->StartSession($sql);
        
        sleep(3);
        if ($res == 1) {
        	echo 1;
 		
        }else{
        	echo '<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid   blue;border-radius:20px 20px 20px 20px" role="alert">
                    <strong>Mistake to the try to enter</strong>
                    <button type="button" class="close cerr" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true" id="clod">&times;</span>
                    </button>
                  </div>';
        }
        

 	}

  
 }

 ?>