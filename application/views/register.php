<?php 
 
if (!$_SESSION) {
    header('location:'.base_url());
  }
  
 ?>
<p><br></p>
<p><br></p>


<!-- //card para registro -->
<span class="a"></span>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-2"></div>



      <div class="col-md-8">
        <!-- // -->
        <!-- --registrar -->


           <div class="modal-content black" style="background: black;color: white;border-radius: 40px 40px 40px 40px">
             <div class="card-header">
             	<label><h4>Form of Register</h4></label>
               <!-- <div class="close" data-dismiss='modal' style="color: white">&times;</div> -->
             </div>
             <div class="card-body">
              <!-- ==== -->
               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6">
                     <label>Nombre<span style="color: red;">*</span></label>
                     <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre..">
                     <span class="errorNombre errorR" style="display:none;">Nombre</span>
                   </div>
                   <div class="col-md-6">
                      <label>Apellido<span style="color: red;">*</span></label>
                     <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido..">
                     <span class="errorApellido errorR" style="display:none;">Apellido</span>
                   </div>
                 </div>
               </div>
               <!-- ===email= -->
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                         <label>Email<span style="color: red;">*</span></label>
                         <input type="text" name="email" id="email2" class="form-control" placeholder="example@hotmail.com">
                         <span class="errorEmail errorR" style="display:none;">Email</span>
                         <span class="errorEmail2 errorR" style="display:none;">Email</span>
                      </div>
                    </div>
                  </div>
               <!-- ==== -->

               <!-- ==contrasenia -->
                    <div class="form-group">
                     <div class="row">
                       <div class="col-md-6">
                         <label>Contrasenia<span style="color: red;">*</span></label>
                         <div class="input-group-prepend">
                         <input type="password" class="form-control oli" name="pass1" id="pass1" placeholder="password..">
                          <span class="input-group-text" id="inputGroup-sizing-sm"><img src="<?php echo base_url() ?>assets/iconos/_ionicons_svg_md-eye.svg" acion='hide' id="ojoe" width="30px" alt=""></span>
                         <span class="errorContra errorR" style="display:none;">contra</span>
                       </div>
                     </div>


                       <div class="col-md-6">
                          <label>Re-Contrasenia<span style="color: red;">*</span></label>
                         <input type="password" class="form-control " name="pass2" id="pass2" placeholder="password2..">
                         <span class="errorContra2 errorR" style="display:none;">conta1</span>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-12">
                         <span><center><span class="errorR" id="errorContra12"></span></center></span>
                       </div>
                     </div>
                   </div>

               <!-- ==fin contasenia -->

               <!-- ===pais y ciudad== -->
                    <div class="form-group">
                     <div class="row">
                       <div class="col-md-6">
                         <label>Pais<span style="color: red;">*</span></label>
                         <input type="text" class="form-control" name="pais" id="pais" placeholder="pias..">
                         <span class="errorPais errorR" style="display:none;">pais</span>
                         </div>
                         <div class="col-md-6">
                          <label>Ciudad<span style="color: red;">*</span></label>
                         <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="ciudad..">
                         <span class="errorCiudad errorR" style="display:none;">ciudad</span>
                       </div>
                     </div>
                   </div>

               <!-- ===fin pasis ciudad=== -->

               <!-- ==direccion== -->
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                               <label>Direccion<span style="color: red;">*</span></label>
                               <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">
                               <span class="errorDireccion errorR" style="display:none;">direccion</span>
                            </div>
                          </div>
                        </div>

               <!-- ===fin direccion== -->

                <!-- ==direccion== -->
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                               <label>Telefono</label>
                               <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                               <span class="errorTelefono errorR" style="display:none;">Telefono</span>
                            </div>
                          </div>
                        </div>

               <!-- ===fin direccion== -->

               <div class="form-group">
                <center><button class="btn btn-success btn-lg" id="registro">Registrar</button></center>
                <center><img style="display: none;" src="<?php echo base_url() ?>assets/iconos/loading3.gif" width="50px" id="loade"></center>
                <hr>
                <center><span class="confirmaRegistro mt-4"></span></center>
               </div>
             </div>
           </div>
      <!-- *************fin registrar -->

      </div>

      <div class="col-md-2"></div>
    </div>
  </div>

<!-- //fin de card para registro -->

<p><br></p>

   

<p><br></p>