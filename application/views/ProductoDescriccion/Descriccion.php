<?php 
if (!$_SESSION['user_idS']) {
    header('location:'.base_url());
  }
   $_SESSION['stadoS'];
  if($_SESSION['stadoS'] == 0){
     
     header("location:".base_url()."Cproduct/VverificarEmail");
  }
  ?>
<div class="row">
  <div class="col-md-12">
    <div id="mostrarFoto" >
       
  </div>
  <div id="fotoDetalle"  parametro='<?php echo  $_GET['parametro'] ?>'> <?php echo $_GET['parametro'] ?></div>
  </div>
</div>