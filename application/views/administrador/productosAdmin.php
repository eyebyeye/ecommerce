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
                <span id="usuariosR"></span><br>
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
                <span id="visitas" class="visitas"></span><br>
                <label><b>Visitantes</b></label>

               </center>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>



       <div class="col-md-8" >
         
             <table class="table table-bordered table-hover">
              <center><h4>Productos Agregado</h4></center>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5"><h4><b>Mostrar Productos por </b></h4></div>
                <div class="col-md-4">
                  <select class="form-control" id="otros2"  >
                    <option value="0"  >Todos</option>
                    <option value="1">Oferta</option>
                    <option value="2">Acendente</option>
                    <option value="3">Decendente</option>
                  </select>
                  <hr>
                </div>
                
              </div>
                <tr>
                  <th>ID</th>
                  <th>Categoria</th>
                  <th>Marca</th>
                  <th>Titulo</th>
                  <th>Precio</th>
                  <th>Image1</th>
                  <th>Cantidad</th>
                  <th>color</th>
                  <th>Size</th>
                
                  <th>Accion</th>
               
                </tr>

                <tr>
                  <tbody class="productosAdmin">
                    
                  </tbody>

                </tr>
                
             </table>
             <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
                 <nav aria-label="...">
                        <ul class="pagination pagination-lg" id="poli">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                          </li>
                         
                         <!--  <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                        </ul>
                      </nav>
               </div>
               <div class="col-md-4"></div>
             </div>
            

       </div>


     
   

  </div>
</div>

</div>


   <div class='modal fade' id='modar' >  
                      <div class='modal-dialog' >
                         <div class='modal-content'>
                           <div class='modal-header' >
                            <center><div><b>Editar Producto</b></div></center>
                             <div class='close' data-dismiss='modal'>&times;</div>
                           </div>
                     
                        
                

                          <div id='adminProductos'></div>

                   
                  </div>
                </div>
              </div>