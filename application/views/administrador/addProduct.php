
<!-- style="background: #caaa44" -->
<!-- ------------contenedor 2 agregar productos---------------------------- -->

<hr><br>

<div class="contenedor2">
  
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
             
                <form id="forma2" enctype="multipart/form-data">
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
               <span id="tituloVal"></span>
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
               <span id="categoriaVal"></span>
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
               <span id="marcaVal"></span>
            </div>

            </div>
          </div>
          <!-- ===size,color,cantidad=== -->
            <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Cantidad</b></label>
               <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="cantidad">
               <span id="cantidadVal"></span>
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>Size</b></label>
               <input type="text" name="size" class="form-control" id="size" placeholder="sze">
            </div>

        </div>
        <div class="col-md-4">
          
          <div class="form-group">             
               <label><b>Color</b></label>
               <input type="text" name="color" class="form-control" id="color" placeholder="color">
               <span id="colorValidar"></span>
            </div>

        </div>
      </div>
          <!-- ================ -->
            <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Precio Producto</b></label>
               <input type="text" name="precio_producto" class="form-control" id="precio_producto" placeholder="Titulo del Producto">
               <span id="precioVal"></span>
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
               <span id="keywordVal"></span>
            </div>

        </div>
      </div>

       <div class="row">
        <div class="col-md-4">
          
         <div class="form-group">             
               <label><b>Imagen1 Producto</b></label>
               <input type="file" name="image1_producto" class="form-control" id="image1_producto" placeholder="Titulo del Producto">
               <span id="imageVal"></span>
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
               <span id="detalleVal"></span>
            </div>

        </div>
       
      </div>
    </form>
      <div class="group"><center><button id="agregarARn" class="btn btn-warning btn-lg">Agregar Productos</button></center></div>
      <center><img src="iconos/loading3.gif" id="iv" width="70px" style="display: none;"></center>
      <center><div id="agregadoImage"></div></center>
            
        </div>

      </div>



    </div>
    <div class="col-md-2"></div>

  </div>
</div>

</div>

<!-- ------------------------modal para actualizar------------------------------------------------------- -->



                       <div class='modal fade' id='modall'>


                               <div class='modal-dialog'>

                                  <div class='modal-content'>
                                     <div class='modal-header' style="background: red">
                                      Update
                                      <div class='close' data-dismiss='modal'>&times;</div>
                                     </div>
                                     <div id="userr"></div>
                                    
                                  </div>
                               </div>

                              </div>";

  <!-- ---------------------------------------------------------------------------------------------------------------- -->