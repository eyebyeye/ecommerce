$(function(){


	$('body').delegate('#agregar','click',function(){

		var parametro = $('#fotoDetalle').attr('parametro');
		var amount    = $('#cant').val()
		  
		  $.ajax({


		  	  url        : base_url+"CaddCart/addCart",
		  	  type       : "post",
		  	  data       : {
		  	  	             parametro : parametro,
		  	                 amount    : amount
		  	             },
		  	  success    : function(data){

		  	  	if (data > 0) {

		  	  		$('#msj').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
									  '<strong>Producs add with exit to the cart</strong>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									    '<span aria-hidden="true" id="clod">&times;</span>'+
									  '</button>'+
									'</div>');
											  	  	}else{

		  	  		$('#msj').html('<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
									  '<strong>can not add product to the cart/strong>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									    '<span aria-hidden="true">&times;</span>'+
									  '</button>'+
									'</div>');
		  	  	}



		  	  	setTimeout(function(){
                   $('#clod').click();
		  	  	},4000)
		  	  },
		  	  error:function(){
		  	  	alert("error")
		  	  }
		  })
	})

// Show products add to the cart in the page of cart
  mostrarCarritoPagina();

    function mostrarCarritoPagina(){

         $.ajax({


                url       : base_url+"CaddCart/ShowCart",
                type      : "POST",
                dataType  : "json",
                // data      : { mostrarCarritoPagina : 1 },
                success   : function(data){
                	var html = "";

                	for(var i = 0; i < data.length; i++){


	                		html += ' <div class="row">'+
						             
						              '<div class="col-md-2">'+						             
						                 '<img src="'+base_url+'assets/iconos/_ionicons_svg_md-close.svg" id="eliminar" cant='+data[i].p_id+'  width="40">'+
						                 '<img src="'+base_url+'assets/iconos/_ionicons_svg_md-checkbox.svg" id="actualizar" cant='+data[i].p_id+' width="40">'+	

						              '</div>'+

						            '<div class="col-md-2">'+
						               '<b>'+
						                 '<img src="http://localhost/Store/assets/imagenes/'+data[i].productos_image+'" width="50" hight="50" class="rounded-circle">'+
						                '</b>'+
						            '</div>'+

						            '<div class="col-md-2">'+
						                  '<b>'+data[i].productos_title+'</b>'+
						            '</div>'+

						            '<div class="col-md-2">'+
						                '<b><input type="text" name=""  cantidad='+data[i].p_id+' id="cantidad-'+data[i].p_id+'" class=" cantidad form-control" value="'+data[i].qty+'"></b>'+
						            '</div>'+

						            '<div class="col-md-2">'+
						               '<b><input type="text" name="" cantidad='+data[i].p_id+' id="precio-'+data[i].p_id+'"  class="form-control" value="'+data[i].precio+'"></b>'+
						            '</div>'+

						            '<div class="col-md-2">'+
						               '<b><input type="text" name="" cantidad='+data[i].p_id+' id="total-'+data[i].p_id+'" class="form-control" value="'+data[i].total_monto+'"></b>'+
						            '</div>'+

						          '</div>'
                	}

                  $('#paginaCarrito').html(html);
                  // alert(data)

                }
         })
     }
     
     // / ================================================================================
     ///calculos de precio de los productos
			$('body').delegate('.cantidad','keyup',function(){

			  var id_producto   = $(this).attr('cantidad');
			  var cantidad      = $('#cantidad-'+id_producto).val();
			  var precio        = $('#precio-'+id_producto).val();
			  var total         = cantidad * precio;

			     $('#total-'+id_producto).val(total);
			  // alert(0)

			})


	//axtualizar productos de la pagina e carrito
    $('body').delegate('#actualizar','click',function(){

		    var id_producto   = $(this).attr('cant');

		    var cantidad      = $('#cantidad-'+id_producto).val();
		    var precio        = $('#precio-'+id_producto).val();
		    var total_monto   = $('#total-'+id_producto).val();
		  //  var id            = $(this).attr('limi')


 

         $.ajax({

          url    : base_url+"CaddCart/CurrentCart",
          type   : "POST",
          data   : {
                     
                     cantidad   : cantidad,
                     precio     : precio,
                     total_monto: total_monto,
                     id_producto: id_producto,
                     
                   },
          success: function(data){
                  
                        if(data == "si"){

               $('#alertPaginaCarrito').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
                                                 "<center>"+
                                                      " <b>Actualizado con exito</b>"+
                                                 "</center>"+
                                           "<button type='button' class='close' data-dismiss='alert' id='cerra' aria-label='Close'>"+

                                              "<span aria-hidden='true'>&times;</span>"+
                                          "</button>"+
                                         "</div>")
                     }else{
                   $('#alertPaginaCarrito').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
                                                 "<center>"+
                                                      " <b>Actualizado con exito</b>"+
                                                 "</center>"+
                                           "<button type='button' class='close' data-dismiss='alert' id='cerra' aria-label='Close'>"+

                                              "<span aria-hidden='true'>&times;</span>"+
                                          "</button>"+
                                         "</div>")

                     }

              setTimeout(function(){

                $('#cerra').click();
              },4000)

                mostrarCarritoPagina()
              
              }
          })

        
  
     })

    //delecte 

    $('body').delegate('#eliminar','click',function(){
    	 var id_producto   = $(this).attr('cant');
    	   $.ajax({

          url    : base_url+"CaddCart/DeleteCart",
          type   : "POST",
          data   : {
                     
                     
                     id_producto: id_producto,
                     
                   },
          success: function(data){
                  
                        if(data == "si"){

               $('#alertPaginaCarrito').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
                                                 "<center>"+
                                                      " <b>Actualizado con exito</b>"+
                                                 "</center>"+
                                           "<button type='button' class='close' data-dismiss='alert' id='cerra' aria-label='Close'>"+

                                              "<span aria-hidden='true'>&times;</span>"+
                                          "</button>"+
                                         "</div>")
                     }else{
                   $('#alertPaginaCarrito').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
                                                 "<center>"+
                                                      " <b>Delecte width successefully</b>"+
                                                 "</center>"+
                                           "<button type='button' class='close' data-dismiss='alert' id='cerra' aria-label='Close'>"+

                                              "<span aria-hidden='true'>&times;</span>"+
                                          "</button>"+
                                         "</div>")

                     }

              setTimeout(function(){

                $('#cerra').click();
              },4000)

                mostrarCarritoPagina()
              
              }
          })


    })

    // mostrar boton de pago 
    botonPago()

     function botonPago(){
       
       $.ajax({

       	   url   : base_url+"CaddCart/BotonP",
       	   type  : "post",
       	   dataType : "json",
       	   success  : function(data){

       	   	var html1 = "";
       	   	var html2 = "";
       	   	var html3 = "";
             
       	   	var g = 0;

       	   	   // $('.ht1').html('<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">'+
               //                '<input type="hidden" name="cmd" value="_cart">'+
               //                '<input type="hidden" name="business" value="gabriel_shoping@hotmail.com">'+
               //                '<input type="hidden" name="upload" value="1">');
                  
              
              for(var i = 0; i < data.length; i++){
              	g++;
              	    $('.boton').html(' <input type="hidden" name="item_name_'+g+'" value="'+data[i].productos_title+'">'+
                              '<input type="hidden" name="item_number_'+g+'" value="'+g+'">'+
                              '<input type="hidden" name="amount_'+g+'" value="'+data[i].precio+'">'+
                              '<input type="hidden" name="cantidad_'+g+'" value="'+data[i].qty+'">'+
                               '<input type="hidden" name="total_'+g+'" value="'+data[i].total_monto+'">');
              }
              
                    

              // $('#ht2').html('<input type="image" name="submit"'+
              //            ' src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png"'+
              //             'alt="PayPal Checkout">'+
                         
              //         '</form>');
             
       	          
       	          
       	   }
       })
    }


})	