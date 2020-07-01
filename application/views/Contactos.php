<p><br></p>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-8">
     <img src="<?php echo base_url() ?>assets/imagenes/contacanos.jpg">
     <h1>Cuentanos Tus Inquietudes</h1>
  </div>
  <div class="col-md-1"></div>
</div>

<!-- =============== -->
<div class="row" >
  <div class="col-md-4"></div>
  <div class="col-md-5" >
      <a href="#">Contactanos</a>
      <div class="card">
        <div class="card-header" style="background: #cccccc">
          <b>1-Ingrese tuinformacion de contactos</b>
        </div>
        <div class="card-body">
          <!-- ==== -->
          <form action="contactanos1.php" method="post">
           <div class="form-group">
             <label><b>Nombre</b></label><span style="color: red">*</span>
             <input type="text" name="" id="nombreContactos" class="form-control">
           </form>
           </div>
           <!-- ==== -->
            <div class="form-group">
             <label><b>Correo Eletronico</b></label><span style="color: red">*</span>
             <input type="text" name="" id="correContatos" class="form-control">
           </div>
           <!-- === -->
            <div class="form-group">
             <label><b>Telefono</b></label><span style="color: red">*</span>
             <input type="text" name="" id="telefonoContactos" class="form-control">
           </div>
           <!-- === -->
            <div class="form-group">
             <label ><b>Tipo de consulta</b></label><span style="color: red">*</span><br>
             <select class="form-control" id="consultaContactos">
               <option>Reclamo</option>
               <option>Consulta en General</option>
               <option>Consulta de Producto</option>
               <option>Creditos</option>
               <option>Entrega de Compra en Tienda</option>
               <option>Entrega de Compra Online</option>
             </select>
           </div>
           <!-- === -->
            <div class="form-group">
             <label><b>Comentario</b></label><span style="color: red">*</span><br>
            <textarea cols="70" rows="2" id="comentarioContactos" class="form-control"></textarea>
           </div>
           <!-- === -->
             <label style="color: red">(*) Datos Obligatorios</label>
           <!-- === -->
           <div class="form-group">
             
             <center><button  type="submit" class="btn btn-warning btn-lg" id="btnContactos">Enviar</button></center>
              <span id="spanContactos">hola</span>
           </div>

           <!-- === -->
        </div>
      </div>
  </div>

  <div class="col-md-3"></div>
</div>