$(function(){

 
 UsuarioList1()
 totalUsuario()
  pagination()

		function UsuarioList1(){

		$.ajax({

			url    :  base_url+"Cadministrador/adminUsuario/ListUsuario1",
			type   : "post",
			// dataType: "json",
			success: function(data){
				
				$('#usuario1').html(data);
				// alert(data)

			},
			error: function(){
				alert("error")
			}
		})
	}
	//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////

	//mostrar total de usuario agregado
	

	function totalUsuario(){

		  $.ajax({

			url    :  base_url+"Cadministrador/adminUsuario/TotalUser",
			type   : "post",
			dataType: "json",
			success: function(data){
				
				$('#usuariosR').html(data);
				

			},
			error: function(){
				alert("error")
			}
		})
	}
//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	//paginar admin usuario
	
      function pagination(){

          $.ajax({

                url     : base_url+"Cproduct/pagination2",
                type    : "post",
                dataType: "json",
                success : function(data){

                    var html = "";  

                    for(var i = 1; i <= data; i++){
                      html +="<a class='page-link ' id='pagg' pagg="+i+"  href='#' tabindex='-1'>"+i+"</a>";
                    }

                     $('#paginarUsuario').html(html);
                }
          })
         
      }
      //////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
      //paginacion

      $('body').delegate('#pagg','click',function(e){
      	e.preventDefault();

      	var id_paginacion = $(this).attr('pagg');
      	 
      	 $.ajax({
            
              url     : base_url+"Cadministrador/adminUsuario/ListUsuario1",
                type    : "post",
                // dataType: "json",
                data    : {pagination:1,id_paginacion:id_paginacion},
                success : function(data){

                    
                     $('#usuario1').html(data);

                }

      	 })
      })

//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////


      //agregar nuevo usuario por via del administrador

      $('body').delegate('#nuevo','click',function(e){
      	e.preventDefault();

      	
      	
      		var name       = $('#nombre2').val();
      	    var last_name  = $('#apellido2').val();
      	    var email      = $('#email2').val();
      	    var pass       = $('#pass2').val();
      	    var telefono   = $('#telefono2').val();

      	    var registro =
      	                  {

      	                  nombre       : $('#nombre2').val(),
      	                  apellido  : $('#apellido2').val(),
      	                  email      : $('#email2').val(),
      	                  pass       : $('#pass2').val(),
      	                  telefono   : $('#telefono2').val()

      	                   }
         
         //FUNCTION PARA LIMPIRA CAMPOS
      	    function ReiniciarDatod()
      	       {

			         name       = $('#nombre2').val("");
		      	     last_name  = $('#apellido2').val("");
		      	     email      = $('#email2').val("");
		      	     pass       = $('#pass2').val("");
		      	     telefono   = $('#telefono2').val("");
               }
                 
                 function allempty(valor1,valor2,valor3,valor4){

                 	if (valor1 != "" && valor2 != "" && valor3 != "" && valor4 != ""  ) {
                 		return true;
                 	}
                 	return false;
                 }
              

                $.each(registro,function(i,valor){
                   
                   switch(valor){

                    case  registro.nombre:
                           Empty(valor) === false  ? $('#nombre2Error').show().html("Campo nombre Obligatoro") + 
                                                     $('#nombre').focus() : $('#nombre2Error').slideUp(1000);
                    break;

                    case  registro.apellido:
                            Empty(valor) === false  ? $('#apellido2Error').show().html("Campo apellido Obligatoro") + 
                                                      $('#apellido2').focus() : $('#apellido2Error').slideUp(1000);
                    break;
                      // ││ EmailValidar(valor) === false
                    case  registro.email:
                            Empty(valor) === false   ? +
                                                      $('#email2Error').show().html("campo email obligatorio") + 
                                                      $('#email2').focus() : EmailValidar(valor) === false ? +
                                                      $('#email2Error').show().html("Email invalido")+ $('#email2').focus() +
                                                       finish() : $('#email2Error').slideUp(1000);
                    break; 

                    
                 
                    case  registro.pass:
                            Empty(valor) === false  ? $('#pass2Error').hide(1000) +
                                                      $('#pass2Error').show().html("Campo password Obligatoro") + 
                                                      $('#pass2').focus() : MayorOcho(valor) == false ?+
                                                      $('#pass2Error').html("Contrasenia corta")+
                                                      // $('.errorContra12').hide(1000) +
                                                      $('#pass2').focus()  : + 
                                                      $('#pass2Error').slideUp(1000);
                    break;

                     // case  registro.pass2:
                     //        Empty(valor) === false  ? $('.errorContra2').show().html("Campo Re-password Obligatoro") + 
                     //                                  $('#pass2').focus() : Igual(valor,registro.pass1) == false ? +
                     //                                  $('#errorContra12').show() + $('#pass1').focus() +
                     //                                  $('#pass1').val("").focus() + $('.errorContra2').hide() +
                     //                                  $('#pass2').val("") + finish() : $('.errorContra12').hide(1000);
                     //  break;
                       
                     //  case registro.pais:
                     //        Empty(valor) === false ?  $('.errorPais').show().html("Campo pais es Obligatorio") +
                     //                                  $('#pais').focus() : $('.errorPais').slideUp(1000);
                     //   break;

                     //   case registro.ciudad:
                     //        Empty(valor) === false ?  $('.errorCiudad').show().html("Campo ciudad es Obligatorio") +
                     //                                  $('#ciudad').focus() : $('.errorCiudad').slideUp(1000);
                     //   break;

                     //    case registro.direccion:
                     //        Empty(valor) === false ?  $('.errorDireccion').show().html("Campo direccion es Obligatorio") +
                     //                                  $('#direccion').focus() : $('.errorDireccion').slideUp(1000);
                     //   break;

                      // case registro.telefono:
                      //       Empty(valor) == false ?  $('.errorTelefono').show().html("Campo telefono es Obligatorio") +
                      //                                 $('#telefono').focus() : $('.errorTelefono').slideUp(1000);
                      // break;



                    default:
      	
                      if (allempty(registro.nombre,registro.apellido,registro.email,registro.pass) == true) {
      	
				      	$.ajax({
				              url     : base_url+"Cregister/agregarUsuarioAdmin",
				                type    : "post",
				                dataType: "json",
				                data    : { 
				                	         name      : name,
				                	         last_name : last_name,
				                	         email     : email,
				                	         pass      : pass,
				                	         telefono  : telefono
				                	        },
				                beforeSend:function(){

				                           $('#imagenn').show();
				                           $('.registrado').html('Please wait...');
				                        },
				                success : function(data){

				                    
				                     // $('#usuario1').html(data);
				                     $('#imagenn').hide();
				                      if (data == 1) {


				                           $('#imagenn').hide();
				                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
				                                                       '<strong>Este Email ya existe</strong>'+
				                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
				                                                        '</button>'+
				                                                      '</div>');
				                           
				                          
				                           setTimeout(function(){
				                             
				                             $('.cerrar1').trigger('click');
				                             
				                           },4000)

				                          }
				                          
				                         else if (data == "si") {


				                           $('#imagenn').hide();
				                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
				                                                       '<strong>Usuario agregado con exito</strong>'+
				                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
				                                                        '</button>'+
				                                                      '</div>');
				                            UsuarioList1()
				                           ReiniciarDatod();
				                           pagination()
				                           totalUsuario()
				                          
				                           setTimeout(function(){
				                             
				                             $('.cerrar1').trigger('click');
				                             
				                           },4000)

				                          }else{
				                           $('#loade').hide();
				                           $('.confirmaRegistro').html('<div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
				                                                       '<strong>error</strong>'+
				                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				                                                         '<span aria-hidden="true" class="cerrar1" id="clod">&times;</span>'+
				                                                        '</button>'+
				                                                      '</div>');

				                       }
									
						      		        


				                }

				      	})
                 }
            
      	break;

         }
        })
     })
	

	//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
    // eliminar usuario por pagina del administrador

    $('body').delegate('#eliminar','click',function(e){
    	e.preventDefault();

    	var id = $(this).attr('eliminar');
    	  
    	$.ajax({

    		   url       : base_url+"Cadministrador/adminUsuario/deleteUser",
    		   type      : "post",
    		   dataType  : "json",
    		   data      :{ id : id},
    		   success   : function(data){

    		   	if (data == true) {

    		   	   $('.eliminado').html('<hr><div class="alert alert-warning alert-dismissible fade show" style="background:lightgrenn;border:2px solid blue;border-radius:20px 20px 20px 20px" role="alert">'+
				                                                       '<strong>User delete with sucefully</strong>'+
				                                                       '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				                                                         '<span aria-hidden="true" class="cerrar2" id="clod">&times;</span>'+
				                                                        '</button>'+
								                                                      '</div>');
				    		   	   setTimeout(function(){
				                             
				                            $('.cerrar2').trigger('click');
				                           // alert()  
				                           },4000)
				    		     	}

    		   	                           UsuarioList1()
				                           ReiniciarDatod();
				                           pagination()
				                           totalUsuario()

    		   	  
    		   }
    	})

    })






		//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	 //contrasenia  mayor a 8 

          function MayorOcho(valor){

            if (valor.length < 8) {
              return false;
            }
            return true;
          }

        //////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////

           // ====================Inicio===============================  
          //funcion para validar que el email este biien ecrito o que sea valido
         function EmailValidar(email){

                var tester =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-]+)\.)+([a-zA-Z0-9]{2,4})+$/;

                 return   tester.test(email);
              }
//////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
           // ====================Inicio===============================  
          //funcion para validar campo enten llenos e
           function Empty(valor){

              if(valor == ""){
                return false;
              }

              return true;
           }

           //buscar en tiempo real
           

})