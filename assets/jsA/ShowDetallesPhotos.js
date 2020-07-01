$(function(){

ShowDetallesPhoto()

	function ShowDetallesPhoto(){

		var parametro = $('#fotoDetalle').attr('parametro');
		$.ajax({

			 url       : base_url+"CdetallesPhoto/ShowDetallesPhono",
			 type      : "post",
			 typeData  : "json",
			 data      : { parametro : parametro},
			 success   : function(data){
			 	var html = "";
			 	
                     var usu = JSON.parse(data);

                         for(var i in usu){

                             
                         
			 	

			 	                  
                  html += " <div class='container pt-5'>"+
                "<div class='row'>"+
                  "<div class='col-md-1' ></div>"+
                  "<div class='col-md-10'>"+
                  

                    "<div class='card' style='border-radius: 60px 80px 60px 80px'>"+
                      "<div class='card-header' >"+
                      "<center><span id='msj'></span></center>"+
                          "<center><h2>Infomacion del producto</h2></center>"+
                      "</div>"+
                      
                      "<div class='card-body' style='background-color: #7777dd'>"+
                        
                            "<div class='row'>"+                         
                                                                
                                  "<div class='container mt-5'>"+
                                "<div class='row' >"+

                                  "<div class='col-md-5'>"+
                                     "<center><h4>"+usu[i].productos_title+"</h4></center>"+
                                    "<div class='card' style='border:red;background: transparent;border-radius: 30px 30px 30px 30px'>"+
                                      "<div class='card-header' style='background-color: #7777dd;'>"+
                                        "<img  style='border:2px solid red red;border-radius: 30px 30px 30px 30px' src='http://localhost/Store/assets/imagenes/"+usu[i].productos_image+"' class='card-img-top cambiarg' height='400px'>"+
                                      "</div>"+
                                      "<div class='card-body' style='background-color: black;border-radius: 30px 30px 30px 30px'>"+
                                       " <div class='row'>"+
                                          "<div class='col-md-3'>"+

                                            "<img src='http://localhost/Store/assets/imagenes/"+usu[i].productos_image+"' id='cambiar' class='card-img-top' height='60px' width='60px' alt=''>"+

                                          "</div>"+

                                          "<div class='col-md-3'>"+

                                          "<img src='http://localhost/Store/assets/imagenes/"+usu[i].productos_image2+"' id='cambiar' class='card-img-top' height='60px' width='60px' alt=''>"+

                                          "</div>"+

                                          "<div class='col-md-3'>"+
                                          "<img src='http://localhost/Store/assets/imagenes/"+usu[i].productos_image3+"4' id='cambiar' class='card-img-top' height='60px' width='60px' alt=''>"+

                                          "</div>"+

                                          "<div class='col-md-3'>"+

                                          "<img src='http://localhost/Store/assets/imagenes/"+usu[i].productos_image4+"' id='cambiar' class='card-img-top' height='60px' width='60px' alt=''>"+

                                          "</div>"+
                                        
                                        "</div>"+
                                      "</div>"+
                                    "</div>"+
                                 
                                  
                                   "</div>"+
                              
                                  "<div class='col-md-7'>"+


                                  "<div style=''>"+


                                    "<div class='content mt-5'>"+

                                      "<div class='row'>"+
                                        "<div class='col-md-3'>"+

                                          "<label for=''><b><h3>Zise:</h3></b></label>"+
                                        "</div>"+

                                        "<div class='col-md-6'>"+

                                          "<input type='text' value='2' class='form-control' name=''>"+
                                        "</div>"+

                                             "<div class='col-md-3'></div>"+


                                        "</div>"+

                                       "<div class='row'>"+
                                        "<div class='col-md-3'>"+

                                          "<label for=''><b><h3>Color:</h3></b></label>"+
                                        "</div>"+
                                        "<div class='col-md-6'>"+
                                          "<select class='form-control'>"+
                                                      "<option>Blanco</option>"+
                                                      "<option>rojo</option>"+
                                                      "<option>azul</option>"+
                                                      "<option>amarillo</option>"+
                                                      "<option>verde</option>"+
                                                      "<option>muy blanco</option>"+
                                                      "<option>muy rojo</option>"+
                                                      "<option>muy verde</option>"+
                                                      "<option>muy negro</option>"+
                                                      "<option>naranja</option>"+
                                                      "<option>muy naranja</option>"+
                                          "</select>"+
                                        "</div>"+
                                         "<div class='col-md-3' ></div>"+
                                    "</div>"+
                                      
                                  "</div>"+
                                 " <div class='row'>"+
                                        "<div class='col-md-3'>"+
                                          "<label for=''><b><h3>detalle:</h3></b></label>"+
                                        "</div>"+
                                        "<div class='col-md-6'>"+
                                         "<p>"+usu[i].productos_detalles+"</p>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class='col-md-3' ></div>"+

                                    "<div class='row'>"+
                                        "<div class='col-md-3'>"+
                                          "<label for=''><b><h3>Precio:</h3></b></label>"+
                                        "</div>"+
                                        "<div class='col-md-7'>"+
                                         "<p><b><h5>$"+usu[i].productos_precio+"</h5></b></p>"+
                                       " </div>"+
                                    "</div>"+
                                   "<div class='col-md-2' ></div>"+


                                   "<div class='row'>"+
                                        "<div class='col-md-3'>"+
                                         " <input type='text'  value='1' id='cant' class='form-control'>"+
                                        "</div>"+
                                        "<div class='col-md-6'>"+
                                       
                                           "<button class='btn btn-success' id='agregar'>Add Cart</button>"+
                                        

                                     "</div>"+
                                            "<div class='col-md-3' ></div>"+
                                            "</div>"+
                                            "<hr>"+
                                            "<h3><b>Metodo de pagos</b></h3>"+
                                            "<hr>"+
                                            "<div class='row'>"+
                                       
                                           "<div class='col-md-0'></div>"+
                                           "<div class='col-md-8'>"+
                                             " <img style='border:red;border-radius: 30px 30px 30px 30px' src='http://localhost/Store/assets/imagenes/metodos_pagos.jpg' width='450px'>"+
                                          " </div>"+
                                           "<div class='col-md-4'></div>"+
                              



                                           
                                         " </div>"+
   
                                   " </div>"+
                                  "</div>"+

                                "</div>"+

                              "</div>"+


                            "</div>"+
                             

                         "</div>"+
                              
                        "</div>"+
    "</div>"+
      "<div class='col-md-1' >"+
        
        // "<div id="fotoDetalle"  parametro='<?php  $_GET['parametro'] ?>'> <?php echo $_GET['parametro'] ?></div>"+
      "</div>"+
    "</div>"+
  "</div>";
}
			 	$('#mostrarFoto').html(html);
			 }
		})
	}



	//cambiar imagen al dar click
	 $('body').delegate('#cambiar','click',function(){

      var h = $(this).attr('src')

      var k = $('#cambiarg').attr('src')
      k = h;
      $('.cambiarg').attr('src',k)
    })
})