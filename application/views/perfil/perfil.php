<?php 
if (!$_SESSION['user_idS']) {
    header('location:'.base_url());
  }

  $_SESSION['stadoS'];
  if($_SESSION['stadoS'] == 0){
     
     header("location:".base_url()."Cproduct/VverificarEmail");
  }
  
  ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>assets/imagenes/mujer2.jpg" height="600px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block carr" >
              <h5 class="blueL">Lo mejor de lo mejor</h5>
              <p class="blueL">lore ipso lorep ipso,lorep ipso</p>
              <button class="btn btn-success">Comprar ahora</button>
  </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/imagenes/mujer5.jpg" height="600px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block carr" >
              <h5 class="blueL">Lo mejor de lo mejor</h5>
              <p class="blueL">lore ipso lorep ipso,lorep ipso</p>
              <button class="btn btn-success">Comprar ahora</button>
  </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/imagenes/mujer7.jpg" height="600px" class="d-block w-100" alt="...">
      <!-- //show button and letter intro of image  -->
         <div class="carousel-caption d-none d-md-block carr" >
              <h5 class="blueL">Lo mejor de lo mejor</h5>
              <p class="blueL">lore ipso lorep ipso,lorep ipso</p>
              <button class="btn btn-success">Comprar ahora</button>
           </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- //informacion -->
<div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block red inf_co" > 
  <div class="container">
    <div class="row">
      <div class="col-md-4 m-right centrarTexto" >
        <h4>Free Shipping</h4>
        <p>on order over 90$</p>
      </div>
      <div class="col-md-4 m-right centrarTexto" >
        <h4>Call us Anytime</h4>
        <p><b>809-969-7319</b><span class="badge"><img src="<?php echo base_url() ?>assets/iconos/wasa.png" width="30" alt=""></span></p>
      </div>
      <div class="col-md-4 centrarTexto" >
        <h4>our location</h4>
        <p><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-pin.svg" width="30"> hiderabad,india</p>
      </div>
    </div>
  </div>
</div>

<!-- /// -->
<input type="hidden" id="idC" value="<?php echo $this->session->userdata('user_idS'); ?>">



<!-- ///////////mini carrucel -->


<h2><b class="Ofe">Oferts</b></h2>
<div class="row mt-4" id='margin'>
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <!-- ////////INICIO DEL CARRUSEL/////// -->
     
               <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicatorss" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicatorss" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicatorss" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row" id="ofert1">
                  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" id="ofert2">
                  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" id="ofert3">
                  
                </div>
              </div>
            </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <!-- //////////////FNC DEL CARRCE///// -->
  </div>
  <div class="col-md-1"></div>
</div>


<!-- /////encabezado/////////// -->

  <!-- /////Search/////////// -->

<div class="row mt-4">
  <div class="col-md-3"></div>
  <div class="col-md-2">

     <ul class="navbar-nav " style="margin-top: 20%;border: 2px solid red;border-radius: 20px 20px 20px 20px;background: lightblue;">
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-cart-plus" ><label><b><h5> Carrito</h5></b></label><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-cart.svg" width="40px"><span class="badge badge-primary con">0</span></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!-- <a class="dropdown-item distM" href="#">Action</a>
          <a class="dropdown-item distM" href="#">Another action</a>
          <a class="dropdown-item distM" href="#">Something else here</a> -->
          <div class="container" style="border: 2px solid red;border-radius: 30px 30px 30px 30px;background: lightblue;color: white">
            <div class="row">
              <!-- <div class="col-md-2"></div> -->
              <div class="col-md-12" style="border: 2px solid blue;border-radius: 30px 30px 30px 30px;">
                <a href="carrito.php" style="color: blue">Ir a Carrito</a>
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
      </li>
    </ul>

  </div>
  <div class="col-md-4"></div>
  <div class="col-md-2">
     <div class="form-group">
       
     </div>
    <label><h4>Search</h4></label><br>
     <div class="form-group">
       <input class="form-control mr-sm-2 bus" style="border: 1px solid red;background: lightblue" type="search" id="buscar" placeholder="Bucar productos" aria-label="Search">
     </div>
    
  </div>
  <div class="col-md-1"></div>
</div>



   <!-- ==fin cde espacio de categoria== -->

<!-- ////////fin encabezado////////////////////////////////////////// -->


<!-- ///////////inicio de espacio de los productos/////////// -->

 <div class="container ">
    <div class="row">
      <div class="col-md-0"></div>
      <div class="col-md-3">

        <div class="row">
           <div class="col-md-12">
              <div class="card mt-4 STheader">
           <div class="card-header STheader">
             <h3><center><b>Category</b></center></h3>
           </div>
           <div class="card-body" id="mostrarCategoria">
             
              <!-- <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola1</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola2</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola3</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola4</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola5</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola6< /a>-->
             
           </div>
         </div>
           </div>
        </div>

        <!-- ///////////////// -->
        <div class="row transparente">
           <div class="col-md-12 ">
               <div class="card mt-4 STheader ">
           <div class="card-header STheader">
             <h3><center><b>Brand</b></center></h3>
           </div>
           <div class="card-body" id="mostrarMarcas">

             
               <!-- <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola1</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola2</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola3</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola4</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola5</a><br>
              <a href="" style="border-bottom:  1px solid red;margin-top: 1%">hola6</a> -->
             
           </div>
         </div>
           </div>
        </div>
         
      </div>
      <div class="col-md-9">
        

      
            <div class="row " id="mostrarProducto">
             <!--  <div class="col-md-3 mt-4 "> -->
                <!-- ====alfa-->
                   <!--  <div class="card-header proD">
                        <img class="card-img-top proD proD2" src="assets/imagenes/hombre2.jpg" width="250px" height="250px" alt="First slide">
                      </div>
                      <div class="card-body bg-danger proD proD2">
                        <div class="row">
                          <div class="col-md-12">
                             <center><b class="mt-1">Titulo</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><b class="mt-1">$8099.00</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><button class="btn btn-primary">Ver Detalles</button></center>
                          </div>
                        </div>
                   </div> -->
                <!-- ==Omega= -->
            <!--   </div>
              <div class="col-md-3  mt-4"> -->
                <!-- ====alfa-->
                  <!--   <div class="card-header proD">
                        <img class="card-img-top proD proD2" src="assets/imagenes/hombre1.jpg" width="250px" height="250px" alt="First slide">
                      </div>
                      <div class="card-body bg-danger proD proD2">
                        <div class="row">
                          <div class="col-md-12">
                             <center><b class="mt-1">Titulo</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><b class="mt-1">$8099.00</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><button class="btn btn-primary">Ver Detalles</button></center>
                          </div>
                        </div>
                   </div> -->
                <!-- ==Omega= -->
             <!--  </div>
              <div class="col-md-3  mt-4"> -->
                <!-- ====alfa-->
                   <!--  <div class="card-header proD">
                        <img class="card-img-top proD proD2" src="assets/imagenes/mujer2.jpg" width="250px" height="250px" alt="First slide">
                      </div>
                      <div class="card-body bg-danger proD proD2">
                        <div class="row">
                          <div class="col-md-12">
                             <center><b class="mt-1">Titulo</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><b class="mt-1">$8099.00</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><button class="btn btn-primary">Ver Detalles</button></center>
                          </div>
                        </div>
                   </div> -->
                <!-- ==Omega= -->
             <!--  </div>
              <div class="col-md-3  mt-4"> -->
                <!-- ====alfa-->
                    <!-- <div class="card-header proD">
                        <img class="card-img-top proD proD2" src="assets/imagenes/hombre4.jpg" width="250px" height="250px" alt="First slide">
                      </div>
                      <div class="card-body bg-danger proD proD2">
                        <div class="row">
                          <div class="col-md-12">
                             <center><b class="mt-1">Titulo</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><b class="mt-1">$8099.00</b></center>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-12">
                            <center><button class="btn btn-primary">Ver Detalles</button></center>
                          </div>
                        </div>
                   </div> -->
                <!-- ==Omega= -->
              <!-- </div> -->
            </div>
            </div>
             </div>
          </div>
   <!-- ==fin de espacio de los productos== -->

   
   <!-- ==fin de espacio de los productos== -->



   <!-- ==paginacion -->


   <div class="container mt-4">
     <div class="row">
       <div class="col-md-5"></div>
       <div class="col-md-4">

          <center>
           <nav aria-label="...">
             <ul class="pagination pagination-lg paginar" id="paginar">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
              </li>
              <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            

               
             </ul>
           </nav>
        </center>

       </div>
       <div class="col-md-3"></div>
     </div>
   </div>
      
   <!-- fin paginacion -->


    <!-- ===productos nuevos -->

              
<h2><b class="Ofe">New</b></h2>
<div class="row mt-4" id='margin'>
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <!-- ////////INICIO DEL CARRUSEL/////// -->
     
               <div id="carouselExampleIndicatorsss" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicatorsss" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicatorsss" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicatorsss" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row" id="nuevo1">
                  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" id="nuevo2">
                  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" id="nuevo3">
                  
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicatorsss" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicatorsss" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <!-- //////////////FNC DEL CARRCE///// -->
  </div>
  <div class="col-md-1"></div>
</div>

      
  
   <!-- ====fin productos nuevos== -->
<p><br></p>
<!-- //contador de visitas -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/jsA/contadorVisitas/contador_visitas.js"></script>