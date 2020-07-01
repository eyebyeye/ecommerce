<?php   
  $res = $this->session->userdata('adminS');

  if ($res != 1) {
     header("location:".base_url()."Cproduct/index");
  }


 ?>
<hr>
<div class="contenedorPrincipal">
   
   <div class="row pt-5">
    <div class="col-md-1"></div>
      <div class="col-md-2">

        <div class="card">
          <div class="card-header" style="background: red">

           <center> <label><b>Vista rapida</b></label></center>
            
          </div>

          <div class="card-body" style="background: #caaa44" >

            <div class="row">
              <div class="col-md-12">
               <center> 
                <img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-person.svg" width="30">
                <span id="usuariosR">0</span><br>
                <label><b>Usuarios</b></label>

               </center>
              </div>
            </div>
              <hr>
            <div class="row">
              <div class="col-md-12">
               <center> 
                <img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-cart.svg" width="30">
                <span id="total_usuario"></span><br>
                <label><b>Total en Carrito</b></label>

               </center>
              </div>
            </div>
              <hr>
            <div class="row">
              <div class="col-md-12">
               <center> 
                <img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-brush.svg" width="30">
                <span>44</span><br>
                <label><b>Entradas</b></label>

               </center>
              </div>
            </div>
             <hr>
            <div class="row">
              <div class="col-md-12">
               <center> 
                <img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-podium.svg" width="30">
                <span id="visitas" class="visitasl"></span><br>
                <label><b>Visitantes</b></label>

               </center>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      <div class="col-md-7">


        <!-- -------agregar nuevo usuario de la pagina de administrador----------- -->
            
           <div class="form-group">
            <!-- <button class="btn btn-primary" id="agregarNuevo" data-toggle='modal' data-target='#agegarNuevos'>Agregar Usuario Nuevo</button>
            <span><img src="iconos/_ionicons_svg_md-add.svg" width="30px"></span> -->

             <div class="container-fluid">
               <div class="row">
                 <div class="col-md-12">
                   <div class="modal fade" id="agegarNuevos">
                     <div class="modal-dialog">
                       <div class="modal-content">
                         <div class="modal-header" style="background: red">
                           <label><h2>Agregar Nuevo</h2></label><div class="close" data-dismiss='modal'>&times;</div>
                         </div>
                         <div class="modal-body" style="background: #caaa44">

                           <div class="form-group">
                            <label for="">Nombre<span style="color: red">*</span></label>
                            <input type="text" name="nombreAdmin"  id="nombre2" placeholder="nombre..." class="form-control">
                            <span id="nombre2Error" style="display: none;">hola</span>
                           </div>

                           <div class="form-group">
                            <label for="">Apellido<span style="color: red">*</span></label>
                            <input type="text" name="apellido" id="apellido2" placeholder="apellido..." class="form-control">
                            <span id="apellido2Error" style="display: none;"></span>
                           </div>

                           <div class="form-group">
                            <label for="">Email<span style="color: red">*</span></label>
                            <input type="text" name="email" id="email2" placeholder="email..." class="form-control">
                            <span id="email2Error" style="display: none;"></span>
                           </div>

                           <div class="form-group">
                            <label for="">Password<span style="color: red">*</span></label>
                            <input type="text" name="pass" id="pass2" placeholder="password..." class="form-control">
                            <span id="pass2Error" style="display: none;"></span>
                           </div>

                           <div class="form-group">
                            <label for="">Telefono<span style="color: red">*</span></label>
                            <input type="text" name="telefono" id="telefono2" placeholder="telefono..." class="form-control">
                            <span id="telefono2Error" style="display: none;"></span>
                           </div>

                           <div class="form-group">
                           
                            <center><button class="btn btn-success" id="nuevo">Agregrar Nuevo</button></center>
                            <center> <div>  <img src="<?php echo base_url() ?>assets/iconos/loading3.gif" id="imagenn" style="display: none;" width="80"><div id="registrado"></div></div></center><br>
                            <center><div class="confirmaRegistro"></div></center>
                            
                           </div>

                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          </div>
          <!-- ------------------------------------------------------------------------------------------------------ -->

          <!-- ------mostrar los usuario registrado en total en pagina de admin----------------------------- -->
            <div class="row">
              <div class="col-md-6">
                     <button class="btn btn-primary" id="agregarNuevo" data-toggle='modal' data-target='#agegarNuevos'>Agregar Usuario Nuevo</button>
            <span><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-add.svg" width="30px"></span>
              </div>
              <div class="col-md-6">
                  
                  <div class="row">
                      <div class="col-md-0"></div>
                    <div class="col-md-4">
                     
                    </div>
                    <div class="col-md-8">
                       <label><b>Filtrar Informacion de Usuario</b></label>
                      <input type="text" id="filtrarArticulos" placeholder="Digite un documento" class="form-control" name="">
                    </div>
                  </div>
              </div>
            </div>
            <hr>
            <!-- ============== -->
               <div class="card"  style="width: 850px">
                 <div class="card-header" style="background: red">
                   Usuarios registrados
                 </div>
                 <div class="card-body" style="background: #caaa44"  >
                   <table class="table-bordered">
                     <tr>
                      <th>#</th>
                       <th>Id</th>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Email</th>
                       <th>Password</th>
                       <th>Telefono</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                        <th><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-cart.svg" width="30px"></th>
                     </tr>
                     <tr>
                       <tbody id="usuario1">
                         <!-- <td>1</td>
                         <td>gabriel</td>
                         <td>gomez</td>
                         <td>prieuva@hotmail.com</td>
                         <td>12345678</td>
                         <td>8099890998</td>
                         <td><a href="#">Editar</a></td>
                         <td><a href="#">Eliminar</a></td> -->
                       </tbody>
                     </tr>
                     
                    <!--   <tr>
                       <tbody>
                         <td>1</td>
                         <td>gabriel</td>
                         <td>gomez</td>
                         <td>prieuva@hotmail.com</td>
                         <td>12345678</td>
                         <td>8099890998</td>
                         <td><a href="#">Editar</a></td>
                         <td><a href="#">Eliminar</a></td>
                       </tbody>
                     </tr>
                       
                        <tr>
                       <tbody>
                         <td>1</td>
                         <td>gabriel</td>
                         <td>gomez</td>
                         <td>prieuva@hotmail.com</td>
                         <td>12345678</td>
                         <td>8099890998</td>
                         <td><a href="#">Editar</a></td>
                         <td><a href="#">Eliminar</a></td>
                       </tbody>
                     </tr>

                     <tr>
                       <tbody>
                         <td>1</td>
                         <td>gabriel</td>
                         <td>gomez</td>
                         <td>prieuva@hotmail.com</td>
                         <td>12345678</td>
                         <td>8099890998</td>
                         <td><a href="#">Editar</a></td>
                         <td><a href="#">Eliminar</a></td>
                       </tbody>
                     </tr> -->

                      <div id='userr2'></div>
                   
                   </table>
                   
                   <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                       <center><div class="eliminado"></div></center>
                     </div>
                     <div class="col-md-3"></div>
                   </div>
                            
                 </div>
               </div><br>
           
                 <nav aria-label="...">
                  <ul class="pagination pagination-lg" style="margin-left: 35%" id="paginarUsuario">
                      <li class="page-item disabled" >
                        <a class="page-link" href="#" tabindex="-1">1</a>
                      </li>
                     <!--  <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                    </ul>
                 </nav>
      </div>


   </div>

</div>


<!-- style="background: #caaa44" -->
<!-- ------------contenedor 2 agregar productos---------------------------- -->

<!-- <div class="contenedor2">
  
  <div class="container-fluid agregarP">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8">
              <h3>Registro de articulos</h3>
            </div>
            <div class="col-md-4">
             
                <form id="forma1" enctype="multipart/form-data">
               <label><b><h4>Oferta</h4></b></label>
              <span class="badge badge-primary"><input type="checkbox"  value="1" id="oferta" name="oferta"></span>
               
            </div>
          </div>
          

        </div>
        <div class="card-body" style="background: #aaa990">
       

          <div class="row">
            <div class="col-md-4">

              <div class="form-group">             
               <label><b>Titulo Producto</b></label>
               <input type="text" name="titulo_productor" class="form-control" id="titulo_producto" placeholder="Titulo del Producto">
            </div>
              
            </div>
            <div class="col-md-4">
              
              <div class="form-group">             
               <label><b>Categoria Productos</b></label>
               <select id="catP" class="form-control" name="catP">
                <option value="">Selecciona una categoria</option>
                 <option value="1">Electronica</option>
                 <option value="2">baterias</option>
                 <option value="3">Ropa mujeres</option>
                 <option value="4">Ropas hombre</option>
                 <option value="5">Ropas ninios</option>
                 <option value="6">muebles</option>
               </select>
            </div>

            </div>
            <div class="col-md-4">
              
              <div class="form-group">             
               <label><b>Marcas Productos</b></label>
               <select id="marP" class="form-control" name="marC">
                <option value="">Selecciona una Marcas</option>
                 <option value="1">Hp</option>
                 <option value="2">Sansung</option>
                 <option value="3">Alcatel</option>
                 <option value="4">Lenovo</option>
                 <option value="5">Dell</option>
                 <option value="6">HtC</option>
               </select>
            </div>

            </div>
          </div>
            <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Precio Producto</b></label>
               <input type="text" name="precio_producto" class="form-control" id="precio_producto" placeholder="Titulo del Producto">
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>descuento Producto</b></label>
               <input type="text" name="descu_producto" class="form-control" id="descuento_producto" placeholder="Titulo del Producto">
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>KeyWord Producto</b></label>
               <input type="text" name="keyword_producto" class="form-control" id="keyword_producto" placeholder="Titulo del Producto">
            </div>

        </div>
      </div>

       <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Imagen1 Producto</b></label>
               <input type="file" name="image1_producto" class="form-control" id="image1_producto" placeholder="Titulo del Producto">
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>Imagen2 Producto</b></label>
               <input type="file" name="image2_producto" class="form-control" id="image2_producto" placeholder="Titulo del Producto">
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>Imagen3 Producto</b></label>
               <input type="file" name="image3_producto" class="form-control" id="image3_producto" placeholder="Titulo del Producto">
            </div>

        </div>
      </div>
       <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Imagen4 Producto</b></label>
               <input type="file" name="image4_producto" class="form-control" id="image4_producto" placeholder="Titulo del Producto">
            </div>

        </div>
        <div class="col-md-8">
            <div class="form-group">
                      
               <label><b>Detalles Producto</b></label>
               <textarea rows="2" cols="20" id="detalles" name="detalles" class="form-control"></textarea>
            </div>

        </div>
       
      </div>
    </form>
      <div class="group"><center><button id="agregarARn" class="btn btn-warning btn-lg">Agregar Productos</button></center></div>
      <div id="agregadoImage"></div>
            
        </div>

      </div>



    </div>
    <div class="col-md-2"></div>

  </div>
</div>

</div>

!-- ------------------------modal para actualizar------------------------------------------------------- -->



                       <div class='modal fade' id='modalls'>


                               <div class='modal-dialog'>

                                  <div class='modal-content'>
                                     <div class='modal-header' style="background: red">
                                     <center><h4> Update</h4></center>
                                      <div class='close' data-dismiss='modal'>&times;</div>
                                     </div>
                                     <div id="userr"></div>
                                      <div class="card">
                                        <div class="card-body" style="border:4px solid red;">
                                            
                                             <div class="modal-body" style="background: #caaa44;border:4px solid blue;border-radius: 20px 20px 20px 20px"">

                                           <div class="form-group" >
                                            <label for="">Nombre<span style="color: red">*</span></label>
                                            <input type="text" name="nombreAdmin" autofocus=""  id="nombre2" placeholder="nombre..." class="form-control">
                                            <span id="nombre2Error" style="display: none;">hola</span>
                                           </div>

                                           <div class="form-group">
                                            <label for="">Apellido<span style="color: red">*</span></label>
                                            <input type="text" name="apellido" id="apellido2" placeholder="apellido..." class="form-control">
                                            <span id="apellido2Error" style="display: none;"></span>
                                           </div>

                                           <div class="form-group">
                                            <label for="">Email<span style="color: red">*</span></label>
                                            <input type="text" name="email" id="email2" placeholder="email..." class="form-control">
                                            <span id="email2Error" style="display: none;"></span>
                                           </div>

                                           <div class="form-group">
                                            <label for="">Password<span style="color: red">*</span></label>
                                            <input type="text" name="pass" id="pass2" placeholder="password..." class="form-control">
                                            <span id="pass2Error" style="display: none;"></span>
                                           </div>

                                           <div class="form-group">
                                            <label for="">Telefono<span style="color: red">*</span></label>
                                            <input type="text" name="telefono" id="telefono2" placeholder="telefono..." class="form-control">
                                            <span id="telefono2Error" style="display: none;"></span>
                                           </div>

                                           <div class="form-group">
                                           
                                            <center><button class="btn btn-success" id="nuevo">Agregrar Nuevo</button></center>
                                            <center> <div>  <img src="<?php echo base_url() ?>assets/iconos/loading3.gif" id="imagenn" style="display: none;" width="80"><div id="registrado"></div></div></center><br>
                                            <center><div class="confirmaRegistro"></div></center>
                                            
                                           </div>

                                        </div>
                                      </div>
                                  </div>
                               </div>

                              </div>"

  <!-- ---------------------------------------------------------------------------------------------------------------- -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/jsA/contadorVisitas/contador_visitas.js"></script>