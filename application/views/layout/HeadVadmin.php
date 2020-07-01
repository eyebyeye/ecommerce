<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Store Cod</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- //stylos de index -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/stylos/styloIndexx.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/stylos/StyleMarCate.css">
  <!-- //bostra -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  
</head>
<body class="body_index">
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
	<!-- //sobre el navar -->
			 <div class="container-fluid red">
			  <div class="row">
			    <div class="col-md-2"></div>
			    <div class="col-md-5 white" >Contactanos<span class="badge"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-mail-unread.svg" width="30"></span></div>
			    <div class="col-md-4">
              
               
               <?php 
                  if (isset($_SESSION['user_idS'])) {


                  ?>
                    <a href="<?php echo base_url() ?>Cleave/LeaveSession" class="white">Close Session</a><span class="badge"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-contacts.svg" width="30"></span>
                    <a href="#"><?php echo $this->session->userdata('emailS'); ?></a>
                    <?php 

                    }else{


                      ?>

                      <a href="#" class="white" data-toggle="modal" data-target="#loginn">Start Session</a><span class="badge"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-contacts.svg" width="30"></span>

                      <a href="<?php echo base_url() ?>Cproduct/register" class="white" >Register</a>
                    <?php } ?>
                     
                    
                  
               
			      
             
                <!-- <div ><span><i class="far fa-user"></i></span><a href="#" data-toggle='modal' data-target='#loginn'>Login</a> -->
                     <div class="modal fade " id="loginn" >
                       <div class="modal-dialog ">
                         <div class="modal-content  " style="background: transparent;"  >

                           <div class="modal-header " style="border-radius: 60px 60px 60px 60px;border: 2px solid red;background: black;color: white">

                            <!-- //header -->
                             
                                  <center><h2>Login</h2></center>
                               
                                  <div class="close" data-dismiss='modal' style="color: red">&times;</div>
                               
                            <!-- //end header -->

                           
                           </div>
                           <!-- //start del modal body -->
                           <div class="modal-body " style="background: black;color: white;border: 2px solid red;border-radius: 60px 60px 80px 80px;">


                <!-- //start mmodal body -->
                               
                  <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
                      <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-sm"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-contact.svg" width="20px" alt=""></span>
                   </div>
                       <input type="email" class="form-control" id="email" aria-label="Sizing example input" placeholder="Username" aria-describedby="inputGroup-sizing-sm">
                 </div>
                          <div class="form-group">
                   <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-sm"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-lock.svg" width="20px" alt=""></span>
                   </div>
                       <input type="password" class="form-control oli" aria-label="Sizing example input" id="pass" placeholder="**********" aria-describedby="inputGroup-sizing-sm">
                      <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-sm"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-eye.svg" acion='hide' id="ojoe" width="20px" alt=""></span>
                   </div>
                                            
                                          
                 </div> 
                       </div>
                      <div class="row">
                        <div class="col-md-4">
                        <checkbox"> Recordar
                         </div>
                         <div class="col-md-8">
                         <button class="btn btn-success btn-lg" id="loki">Start</button>

                         </div>
                      </div>
                     </div>
                   </div>
                   <br>

                  <!--  <div class="row">
                    <div class="col-md-2"></div>
                   <div class="col-md-8">
                      <center><img src="assets/iconos/loading3.gif" style="display: none;" class="gif3" width="50px"></center>
                           <center><span class="errorLogin"></span></center>
                   </div>
                   <div class="col-md-2"></div>
                 </div> -->
                 
           
         </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                             <div class="col-md-8">
                               <a href="#">He olvidado la contrasenia</a>
                             </div>
                              <div class="col-md-2"></div>
                           </div> 
                           <hr>

                            <div class="row">
                            <div class="col-md-0"></div>
                             <div class="col-md-12">
                              <center><img src="<?php echo base_url() ?>assets/iconos/loading3.gif" style="display: none;" class="gif3" width="50px"></center>
                           <center><span class="errorLogin"></span></center>
                             </div>
                              <div class="col-md-0"></div>
                           </div>   
       </div>
      </div>
    </div>
   </div>
                             
 </div>

                           <!-- end the modal body -->
                  </div>
                </div>
              </div>
             <!-- end space of the login -->
			    </div>
			    <div class="col-md-1"></div>
			  </div>
			</div>

	<!-- //navar -->


	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand white" style="color: white;" href="#"><h3 class="ggs distM">GGS</h3></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link distM" style="color: white; " href="<?php echo base_url() ?>Cproduct/index">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link distM" style="color: white; " href="<?php echo base_url() ?>Cproduct/addProduct">Agregar productos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link distM" style="color: white;" href="<?php echo base_url() ?>Cproduct/adminU">Control Usuario</a>
      </li>
       <li class="nav-item">
        <a class="nav-link distM" style="color: white;" href="<?php echo base_url() ?>Cproduct/ProductosEdi">Editar Productos</a>
      </li>
      
      <!-- <li class="nav-item"> -->
         <!-- <ul class="navbar-nav " style="margin-top: 20%;border: 2px solid red;border-radius: 20px 20px 20px 20px;background: lightblue;"> -->
     
<input type="hidden" id="idC" value="<?php echo $this->session->userdata('user_idS'); ?>">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-cart-plus" ><label><b><h6 style="color: white"> Carrito</h6></b></label><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-cart.svg" width="25px">

               <?php 
                 
                  if (!isset($_SESSION['user_idS'])) {

                     ?>

                     <span class="badge badge-primary con" >0</span></i>
                  <?php }else{
                      
                   ?>
                   <span class="badge badge-primary con" >0</span></i>
                 <?php } ?>

        </a>

         <?php if(isset($_SESSION['user_idS'])){

          ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!-- <a class="dropdown-item distM" href="#">Action</a>
          <a class="dropdown-item distM" href="#">Another action</a>
          <a class="dropdown-item distM" href="#">Something else here</a> -->
          <div class="container" style="border: 2px solid red;border-radius: 30px 30px 30px 30px;background: lightblue;color: white">
            <div class="row">
              <!-- <div class="col-md-2"></div> -->
              <div class="col-md-12" style="border: 2px solid blue;border-radius: 30px 30px 30px 30px;">
                <a href="<?php echo base_url() ?>Cproduct/Cart" style="color: blue">Ir a Carrito</a>
                <table class=" table table-bordered" style="border: 2px solid blue;border-radius: 30px 30px 30px 30px;background: black;">
 
                  <tr style="color: white">
                    <td>No</td>
                    <td>Imagen</td>
                    <td>Productos</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                  </tr>
                  
                  <tbody class="op" >
                    
                  </tbody>
              
                </table>
                
                

              </div>
              <!-- <div class="col-md-2"></div> -->
            </div>
          </div>
        <?php } ?>
      </li>
    <!-- </ul>
      </li -->>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  