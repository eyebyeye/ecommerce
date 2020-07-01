<?php 
if (!$_SESSION['user_idS']) {
    header('location:'.base_url());
  }

   $_SESSION['stadoS'];
  if($_SESSION['stadoS'] == 0){
     
     header("location:".base_url()."Cproduct/VverificarEmail");
  }
  ?>
<hr>
<center>
  
                          
</center>

<hr>

<div class="container">
  <div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12">
    <div id="alertPaginaCarrito"></div>
      <div class="card">
        <div class="card-header" style="background-color: #90e4d5">
           <div class="row">
            <div class="col-md-2"><b>Accion</b></div>
            <div class="col-md-2"><b>Imagen</b></div>
            <div class="col-md-2"><b>Titulo</b></div>
            <div class="col-md-2"><b>Cantidad</b></div>
            <div class="col-md-2"><b>Precio</b></div>
            <div class="col-md-2"><b>Precio Total</b></div>
          </div>

          
        </div>
        <div class="card-body" style="background-color: #326f64;color: white">
          
          <div id="paginaCarrito"></div>

         <!--  <div class="row">
            <div class="col-md-2"><img src="iconos/_ionicons_svg_md-close.svg" width="40"><img src="iconos/_ionicons_svg_md-checkbox.svg" width="40"></div>
            <div class="col-md-2"><b><img src="imagenes/hombre1.jpg" width="80" class="rounded-circle"></b></div>
            <div class="col-md-2"><b>Ropa hombre</b></div>
            <div class="col-md-2"><b><input type="text" name="" id="cantidad" class=form-control></b></div>
            <div class="col-md-2"><b><input type="text" name="" id="precio" class=form-control></b></div>
            <div class="col-md-2"><b><input type="text" name="" id="total-precio" class=form-control></b></div>
          </div> -->
         
        </div>
        <div class="card-footer" style="background-color: #90e4d5">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-5">

             <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="business" value="gabriel_shoping@hotmail.com">
                              <input type="hidden" name="upload" value="1">

            
                                 <div class="boton"></div>
                           
                            <input type="image" name="submit"
                             src="phphttps://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout">
                          <!-- https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif -->
                      </form>
              
            </div>
            <div class="col-md-1"></div>
          </div>
          <div style="float: right;"></div>
         <!--  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="business" value="gabriel_shoping@hotmail.com">
                  <input type="hidden" name="upload" value="1">
                  <input type="hidden" name="item_name" value="hat">
                  <input type="hidden" name="item_number" value="123">
                  <input type="hidden" name="amount" value="15.00">
                
                 
                  <input type="image" name="submit"
                    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png"
                    alt="PayPal Checkout">
                     https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif -->
                <!-- </form> -->

        </div>

      </div>
    </div>
    <div class="col-md-0"></div>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-10" style="color: white" >
    <center><h2 >Productos Agotados</h2></center>
    <ol id="agotados">
     <!--  <li>item 1rrrrrrrr gggggggggggggg ggggggggggggg gggggggggggggkg gggggggggggggggmg ggggggggg gggggggggggkggggggg </li>
      <li>item 2 rrrrrrrr gggggggggggggg ggggggggggggg gggggggggggggkg gggggggggggggggmg ggggggggg gggggggggggkggggggg</li>
      <li>item 3 rrrrrrrr gggggggggggggg ggggggggggggg gggggggggggggkg gggggggggggggggmg ggggggggg gggggggggggkggggggg</li>
      <li>item 4 rrrrrrrr gggggggggggggg ggggggggggggg gggggggggggggkg gggggggggggggggmg ggggggggg gggggggggggkggggggg</li>
      <li>item 5 rrrrrrrr gggggggggggggg ggggggggggggg gggggggggggggkg gggggggggggggggmg ggggggggg gggggggggggkggggggg</li> -->
    </ol>
  </div>
  <div class="col-md-0"></div>
</div>

<p><br></p>
<!-- === -->