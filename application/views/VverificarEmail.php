<?php 
 
  
 if (!isset($_SESSION['user_idS'])) {
    header('location:'.base_url().'Cproduct/index');
  }
 $a=  $this->session->userdata('stadoS');
  if($a != 0){
     
     header("location:".base_url()."Cproduct/index");
  }

 ?>
<p><br></p>
<!-- == -->
<div class="container">
  <div class="row">
   <!--  <h1>holsssssssssssss<?php echo $_SESSION['stadoS'];echo $this->session->userdata('stadoS');?></h1> -->
    <div class="col-md-1"></div>
    <div class="col-md-10">
    
          <p><h5><b> Te pedimos que verifiques el correo electronico ligado a tu cuenta. Este es un proceso rapido y sencillo</b></h5></p>
          <h5><b>Como verificar:</b></h5><br><br>

          <p>Se te envia un correo electronico de activacion cuando te registras.<br>

              1-Mira en tu bandeja de entrada y busca un correo electronico con el título<b> Activa tu cuenta de tenda.</b><br>
              
              2-<b>Abrelo y haz click en Activar cuenta.</b><br>

              <b><h4>Nunca te llego el correo electronico de activacion?</h4></b><br>

              Asegurate de revisar:<br>
              <ul>
                <li>Tu bandeja de entrada, tu carpeta de spam o correo basura y cualquier otra carpeta a la cual pudiera haber llegado.</li>
                <li>La direccion de correo electronico en la cuenta.</li>
              </ul>
              
              
              <b><h4>Si todavia no puedes hallar el correo electronico, siempre puedes enviarte otro correo.</h4></b></p>
              <h1><a href="www.hotmail.com.do">Reenviar Correo Click Aqui</a></h1>

             


        
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<!-- == -->





  <?php 
 error_reporting(0);
  echo "<h1 id='EmailV' idE=".$_GET['confirmado']."></h1>"; 
        echo  "<h1 id='Vcorreo' idC=".$this->session->userdata('emailS')."></h1>";

          


  ?>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/jsA/confirmalEmail.js"></script>

  
 